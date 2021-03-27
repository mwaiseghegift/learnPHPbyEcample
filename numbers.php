<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
</head>
<body>
    <?php
    
    echo PHP_INT_MAX."<br>";
    echo PHP_INT_MIN;
    ?>

    <h1>Check if is an Integer</h1>
    <?php
        $x = 5985;
        var_dump(is_int($x));

        $x = 59.85;
        var_dump(is_int($x));
    ?>

    <h1>Infinite</h1>
    <?php
        $x = 1.9e411;
        var_dump($x);
    ?>
</body>
</html>