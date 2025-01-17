<?php

class Example
{
    //union types
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Sabilla";
$example->data = 100;
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data): string|array
{
    if (is_array($data)) {
        return ["Array"];
    } elseif (is_string($data)) {
        return "String";
    }
}

var_dump(sampleFunction("Sabilla"));
var_dump(sampleFunction([]));

