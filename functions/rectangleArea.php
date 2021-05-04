<?php 

function areaOfRectangle($length, $width){
    $area = $length*$width;
    return $area;
}
$area = areaOfRectangle(50,10);
echo $area;

?>