<?php
# An array:
$A=["X"=>100,"Y"=>200,"Z"=>300];
echo "\$A = [ ";
# Iterates over the values of the elements:
foreach($A as $k=>$v){
echo $k," ";
}
echo "]";