<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Conditions</title>
</head>
<body>
    <?php
    /*
    syntax

    if(condition){
        statements
    }elseif{
        statements2
    }else{
        statement3
    }
    */


    $tax = 100;
    $salary=100000;

    if($salary<=100000){
        echo "Your tax: $tax";
    }elseif($salary>100000){
        echo "Tax is above $tax";
    }else{
        echo "You are above the low";
    }
    ?>
</body>
</html>