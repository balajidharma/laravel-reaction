<?php

namespace Balajidharma\LaravelReaction\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;


class Reaction extends Model
{
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