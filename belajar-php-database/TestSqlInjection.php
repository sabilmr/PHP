<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = $connection->quote("admin'; #");
//crash di mysql dianggap komentar
$password = $connection->quote("salah gak peduli");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);

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