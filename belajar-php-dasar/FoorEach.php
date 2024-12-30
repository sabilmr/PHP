<?php

$names = ["Sabilla", "Muhammad", "Rayhan"];

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

$person = [
    "first_name" => "Sabilla",
    "middle_name" => "Muhammad",
    "last_name" => "Rayhan"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
