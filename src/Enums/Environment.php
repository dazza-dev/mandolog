<?php

namespace DazzaDev\Mandolog\Enums;

enum Environment: string
{
    case Production = 'production';
    case Testing = 'testing';

    /**
     * Return the base URL associated with the environment.
     */
    public function baseUrl(): string
    {
        return match ($this) {
            self::Production => 'http://35.206.105.171/api/',
            self::Testing => 'http://35.206.105.171/api/',
        };
    }
}
