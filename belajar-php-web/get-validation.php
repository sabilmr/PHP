<?php

if (!isset($_GET['name']) || empty($_GET['name'] == "")) {
    http_response_code(400);
    echo "Name is required";
    exit();
}

$say = "Hello " .htmlspecialchars($_GET['name']);
?>
<html>
<body>
<h1><?= $say ?></h1>
</body>
</html>
