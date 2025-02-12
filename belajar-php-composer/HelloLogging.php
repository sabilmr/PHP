<?php

require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger("ProgrammerZamanNow");
$logger->pushHandler(new StreamHandler("application.log", Logger::INFO));

$logger->info("Hello World!");
$logger->info("Selamat Belajar PHP Composer");
