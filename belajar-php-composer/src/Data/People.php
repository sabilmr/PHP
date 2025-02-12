<?php

namespace Programmerzamannow\BelajarPhpComposer\Data;

class People
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): void
    {
        echo "Hello $name, My name is $this->name";
    }
}