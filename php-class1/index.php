<?php

require_once 'vendor/autoload.php';

use App\classes\HelloWorld;
use App\classes\index;

$hello = new HelloWorld();

$index = new index();

$hello->index();
echo "<br>";
$index->printe();

