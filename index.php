<?php
include "autoload_app.php";
use test\Test;
use row\Row;

$t = new Test();
$t->yell();

echo "<BR>";

$r = new Row();
$r->yell();

// echo 'aa';
