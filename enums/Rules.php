<?php

namespace enums;

enum Rules: string
{
    case REQUIRED = 'required';
    case EMAIL = 'email';
    case MATCH = 'match';
    case MIN = 'min';
    case MAX = 'max';
    case UNIQUE = 'unique';

    public function getMessage(): string
    {
        if ($this === self::REQUIRED) {
            return "This field is required";
        }
        if ($this === self::EMAIL) {
            return "This field must be a valid email address";
        }
        if ($this === self::MATCH) {
            return "This field must match a {match} field";
        }
        if ($this === self::MIN) {
            return "This field must contain {min} characters";
        }
        if ($this === self::MAX) {
            return "This field must contain {max} characters";
        }
        if ($this === self::UNIQUE) {
            return "Record with this {field} already exists";
        }
        else {
            return 'Not A Rule';
        }
    }
}
