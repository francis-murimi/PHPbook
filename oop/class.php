<?php
// Description of a class:
class MyClass{
    public $number;
}
// Creates an object:
$obj=new MyClass;
// The field is assigned a value:
$obj->number=123;
// Displays the field:
echo "The field \$number: $obj->number\n";
// The new value of the field:
$obj->number=321;
// Displays the field:
echo "The field \$number: $obj->number\n";

$obj2 = new MyClass;
$obj2->number= 235;
echo "The field \$number: $obj2->number\n";