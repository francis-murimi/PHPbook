<?php
# The number for which we calculate the dividers:
$number=315;
# The variable to store a divider:
$A=1;
while(2*$A<$number):
    $A++;
    if($number%$A==0){
        print("The number $number can be divided by:$A\n");
        }
endwhile;