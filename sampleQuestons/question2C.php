
<?php
/*
write a php code to demonstrate the difference
a local and global variable
*/

$age = 18; //global scope

function demo(){
    $age = 20;
    echo "local variable age ".$age."\n";
}

demo();
echo "Global variable ".$age."\n";

/* Outputs will be different because the one declared outside
the php body is global while the one inside the function is the 
local variable */
?>

