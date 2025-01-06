<?php

class Manager
{
    var string $name;
    var string $title;

    //tidak mengambalikan value

    /**
     * @param string $name
     * @param string $title
     */
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager //semua yg dimiliki class manager akan di wariskan ke class vice president
{
    //constructor overriding
    public function __construct(string $name = "")
    {
        parent::__construct($name);
    }

    function sayHello(string $name) : void
    {
        echo "Hello $name my name is VP $this->name" . PHP_EOL;
    }
}
