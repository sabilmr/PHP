<?php

class Manager
{
    private function test(): void
    {

    }
}

class VicePresident extends  Manager
{
    public function test(string $name): string
    {
        return "VP";
    }
}

class Manager2
{
    private function test2(): void
    {

    }
}

class VicePresident2 extends  Manager2
{
    public function test2(int $name): string
    {
        return "VP2";
    }
}

class Manager3
{
    private function test3(): void
    {

    }
}

class VicePresident3 extends  Manager3
{
    public function test3(int $name): string
    {
        return "VP3";
    }
}

class Manager4
{
    private function test4(): void
    {

    }
}

class VicePresident4 extends  Manager4
{
    public function test4(int $name): string
    {
        return "VP4";
    }
}

class Manager5
{
    private function test5(): void
    {

    }
}

class VicePresident5 extends Manager5
{
    public function test5(int $name): string
    {
        return "VP5";
    }
}