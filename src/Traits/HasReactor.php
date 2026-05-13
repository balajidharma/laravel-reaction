<?php

namespace BalajiDharma\LaravelReaction\Traits;

use Illuminate\Support\Facades\Config;

trait HasReactor
{
    public function reactions()
    {
        return $this->morphMany(Config::get('reaction.models.reaction'), 'reactor');
    }

    public function getReactions($type, $name = null)
    {
        $reactions = $this->reactions()->where('reaction_type', $type);

        if ($name !== null) {
            $reactions->where('reaction_name', $name);
        }

        return $reactions;
    }
}
