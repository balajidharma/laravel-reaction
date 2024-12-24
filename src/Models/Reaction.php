<?php

namespace Balajidharma\LaravelReaction\Models;

use BalajiDharma\LaravelReaction\Events\ReactionCreated;
use BalajiDharma\LaravelReaction\Events\ReactionDeleted;
use BalajiDharma\LaravelReaction\Events\ReactionUpdated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Reaction extends Model
{
    protected $fillable = [
        'reaction_type',
        'reaction_name',
        'reactor_id',
        'reactor_type',
        'rate',
        'reactable_id',
        'reactable_type',
        'reason',
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ReactionCreated::class,
        'updated' => ReactionUpdated::class,
        'deleted' => ReactionDeleted::class,
    ];

    public function __construct(array $reaction = [])
    {
        parent::__construct($reaction);

        $this->setTable($this->getTable());
    }

    public function getTable()
    {
        return Config::get('reaction.table_names.reactions', parent::getTable());
    }

    public function reactable()
    {
        return $this->morphTo();
    }

    public function reactor()
    {
        return $this->morphTo();
    }
}
