<?php

namespace BalajiDharma\LaravelReaction\Traits;

use BalajiDharma\LaravelReaction\Exceptions\ReactionReactException;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;

trait HasReactable
{
    /**
     * Get reactions relationship.
     */
    public function reactions(): MorphMany
    {
        return $this->morphMany(
            Config::get('reaction.models.reaction'),
            'reactable'
        );
    }

    public function getReactionConfigByType($type)
    {
        $config = collect(Config::get('reaction.reaction_types'))->firstWhere('name', $type);
        if ($config === null) {
            throw ReactionReactException::invalidReactionType($type);
        }

        return $config;
    }

    public function getReactionOptionConfigByType($type, $name)
    {
        $config = $this->getReactionConfigByType($type);
        $option = collect($config['options'])->firstWhere('name', $name);
        if ($option === null) {
            throw ReactionReactException::invalidReactionName($type, $name);
        }

        return $option;
    }

    public function react($type, $name, $user = null, $value = null)
    {
        if ($this->reactable instanceof Reactable && $this->reactable->getKey() === null) {
            throw ReactionReactException::cannotReactForReactableType();
        }

        $config = $this->getReactionConfigByType($type);
        $option = $this->getReactionOptionConfigByType($type, $name);

        if ($value !== null) {
            if (isset($config['min']) && isset($config['max'])) {
                if ($value < $config['min'] || $value > $config['max']) {
                    throw ReactionReactException::invalidReactionValue($type, $name, $value);
                }
            }
            if (isset($option['value'])) {
                if ($value != $option['value']) {
                    throw ReactionReactException::invalidReactionValue($type, $name, $value);
                }
            }
        }

        $user = $this->getUser($user);

        if ($value === null && isset($option['value'])) {
            $value = $option['value'];
        }

        return $this->reactions()->updateOrCreate(
            [
                'reaction_type' => $type,
                'reactor_id' => $user->getKey(),
                'reactor_type' => $user->getMorphClass(),
            ],
            [
                'reaction_name' => $name,
                'rate' => $value,
            ]
        );
    }

    public function removeReaction($type): void
    {
        $this->reactions()
            ->where('reaction_type', $type)
            ->where('reactor_id', auth()->id())
            ->where('reactor_type', get_class(auth()->user()))
            ->delete();
    }

    public function reactionSummary($type)
    {
        return $this->reactions()
            ->where('reaction_type', $type)
            ->groupBy('reaction_name')
            ->selectRaw('reaction_name, sum(rate) as total')
            ->get()
            ->mapWithKeys(function ($val) {
                return [$val->reaction_name => $val->total];
            });
    }

    /**
     * Get user model.
     */
    private function getUser($user = null)
    {
        if (! $user && auth()->check()) {
            return auth()->user();
        }

        if (! $user) {
            throw ReactionReactException::invalidUser();
        }

        return $user;
    }

    /**
     * Get the users who reacted on reactable model.
     *
     * @param  string  $type
     * @param  string  $name
     */
    public function getReactors($type, $name): MorphMany
    {
        return $this->reactions()
            ->where('reaction_type', $type)
            ->where('reaction_name', $name)
            ->with('reactor');
    }

    /**
     * Get the users who reacted on reactable model.
     *
     * @param  string  $type
     */
    public function getReactorsByType($type): MorphMany
    {
        return $this->reactions()
            ->where('reaction_type', $type)
            ->with('reactor');
    }
}
