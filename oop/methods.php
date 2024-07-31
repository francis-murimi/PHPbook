<?php
class MyClass{
    public $number;
    // The method to display the field:
    function show(){
        print("The field \$number: $this->number\n");
    }
    // The method to assign a value to the field:
    function set($n){
        $this->number=$n;
    }
    // The method to squre the number
    function squre(){
        $num = $this->number;
        return $num * $num;
    }
    // The method multiply by the number
    function multiply_n($n){
        return $this->number * $n;
    }
}
// Creates objects:
$A=new MyClass;
$B=new MyClass;
// The fields are assigned values:
$A->set(100);
$B->set(200);
// Displays the fields:
$A->show();
$B->show();
echo $B->squre();
echo "\n";
echo $B->multiply_n(4);