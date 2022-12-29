<?php

namespace App;


final class ExampleFactory
{
    public function __invoke(
        string $first = '',
        string $second = '',
    ): ExampleService
    {
        dd(
            $first,
            $second,
        );
    }
}