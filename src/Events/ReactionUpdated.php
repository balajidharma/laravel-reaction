<?php

namespace BalajiDharma\LaravelReaction\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReactionUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $reaction;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($reaction)
    {
        $this->reaction = $reaction;
    }
}
