<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("insert into comments(email, comment) values('sabil@gmail.com', 'Hi')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;
