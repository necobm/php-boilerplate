<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Simple;

$test = new Simple;

$test->set("Hello world \n");

echo $test->get();
