<?php

namespace BalajiDharma\LaravelReaction\Exceptions;

use Exception;

class ReactionReactException extends Exception
{
    public static function cannotReactForReactableType()
    {
        return new static('Cannot react for a reactable type.');
    }

    public static function invalidReactionType($type)
    {
        return new static("$type is invalid reaction type.");
    }

    public static function invalidReactionName($type, $name)
    {
        return new static("Invalid reaction $name of reaction type $type.");
    }

    public static function invalidReactionValue($type, $name, $value)
    {
        return new static("Invalid reaction value $value of reaction $name of reaction type $type.");
    }

    public static function invalidUser()
    {
        return new static('Invalid user.');
    }
}
