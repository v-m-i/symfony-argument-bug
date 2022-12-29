<?php

namespace App;


final class ExampleFactory
{
    public function __invoke(
        string $first = '',
        string $second = '',
        string $third = '',
    ): ExampleService
    {
        dd(
            $first,
            $second,
            $third
        );
    }
}