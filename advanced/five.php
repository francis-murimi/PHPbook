<?php
// Imports the file contents:
require_once "four.php";
// Creates aliases:
use function MyUtils\show;
use function MyUtils\display as disp;
use MyUtils\MyClass as MyClass;
// Uses aliases:
show();
disp();
$obj=new MyClass();