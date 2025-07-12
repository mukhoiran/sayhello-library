<?php

namespace Mukhoiran\99OwnLibrary;

/**
 * People class for managing person data.
 */
class People
{
    private function __construct(private string $name) {
    }

    public function sayHello(string $name): string {
        return "Hello $name, my name is {$this->name}!";
    }
}