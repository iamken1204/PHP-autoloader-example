<?php
include "autoload_app.php";
use test\Test;
use row\Row;

$t = new Test();
$t->yell();

echo "<BR>\n";

$r = new Row();
$r->yell();
