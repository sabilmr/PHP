<?php

require_once __DIR__ . '/GetConnection.php';

$connection = GetConnection();

$sql = <<<SQL
insert into customers(id, name, email)
values ('rayhan', 'Rayhan', 'rayhan@gmail.com');
SQL;

$connection->exec($sql);

$connection = null;
