<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass
{
    public function sampleFunction(int $name): string
    {

    }
}