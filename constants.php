<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php
        /*
        A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

        A valid constant name starts with a letter or underscore (no $ sign before the constant name).
        To create a constant, use the define() function.

        ##syntax
        define(name, value, case-insensitive)
        */

        //case-sensitive
        define("MOTTO", "Hard Work Pays");
        echo MOTTO;

        define("MOTT", "Hard work pays", true);
        echo mott;

        //constats are usually global
    ?>
</body>
</html>