<!DOCTYPE html>
<html>
<head>
<title>Net Salary Calculator</title>
</head>

<body>
<?php 
echo "Enter the amount of goods purchased";
$amount = fgets (STDIN);

if ($amount > 100){
    $discount = 0.01*$amount;
    echo "discount offered is $discount";
    $net = $amount-$discount;
    echo "Your net payment is $net";
}else{
    $discount = 0;
    echo "Your net payment is $amount";
}
?>
</body>

</html>

