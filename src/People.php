<?php

namespace Mukhoiran\OwnLibrary;

/**
 * People class for managing person data.
 */
class People
{
    private function __construct(private string $name) {
    }

    public function sayHello(string $name = "Guest"): string {
        return "Hello $name, my name is {$this->name}!";
    }
}