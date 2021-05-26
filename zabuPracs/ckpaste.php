<?php
echo "Enter number of terms you want to print the Fibonacci series";
$num=fgets (STDIN);
$a=0;
$b=1;
if ($num<0)
echo "Series not possible";
else if ($num==1)
echo $a;
else if ($num==2)
echo $a."\n".$b;
else
{
echo $a."\n". $b;
for ($i=3; $i<=$num; $i=$i+1)
{
$c=$a+$b;
echo "\n". $c;
$a=$b;
$b=$c;
}
}
?>