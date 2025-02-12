<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("insert into comments(email, comment) values('sabil@gmail.com', 'Hi')");
$connection->exec("insert into comments(email, comment) values('sabil@gmail.com', 'Hi')");
$connection->exec("insert into comments(email, comment) values('sabil@gmail.com', 'Hi')");
$connection->exec("insert into comments(email, comment) values('sabil@gmail.com', 'Hi')");
$connection->exec("insert into comments(emails, comment) values('sabil@gmail.com', 'Hi')");

$connection->commit();

$connection = null;
