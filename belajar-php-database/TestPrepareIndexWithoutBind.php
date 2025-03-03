<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "sabilla";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    $success = true;
    $find_user = $row['username'];
}

if ($success) {
    echo "Success login : " . $find_user . PHP_EOL;
} else {
    echo "Failed login" . PHP_EOL;
}

$connection = null;