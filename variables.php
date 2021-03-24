<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson2 - Variables</title>
</head>
<body>

    <h1>Lets learn Variables</h1>
    <?php 
        /* rules of php variables
        A variable starts with the $ sign, followed by the name of the variable
        A variable name must start with a letter or the underscore character
        A variable name cannot start with a number
        A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
        Variable names are case-sensitive ($age and $AGE are two different variables)
        */

        $lan = 'php';
        echo "My grandpa codes in $lan<br>";
        //not that the code below will not recognize the variable because of the marks''
        echo 'My grandpa codes in $lan<br>';

        //You can also do the following
        echo 'My grandpa codes in ' .$lan. '<br>';

        $cat1 = 30;
        $cat2 = 28;
        $exam = 70;
        $total = (($cat1+$cat2)/2)+$exam;
        echo "Total = $total<hr>";
    ?>

    <h1>Global and Local scope</h1>
    <?php 
        //Global and Local scope
        //global variable
        $A = 5*4;

        function areaSquare(){
            //local variable
            $A = 10*4;
            echo "The Area of the square is $A<br>";
        }
        areaSquare();

        echo "The Area of the square is $A<hr>";
    ?>

    <h1>The Global Keyword</h1>
    <?php
        $x = 5;
        $y = 10;

        function myTest() {
            global $x, $y;
            $y = $x + $y;
        }

        myTest();
        echo "$y<br>"; // outputs 15
    ?>

    <?php
        $x = 5;
        $y = 10;

        function myTest2() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myTest2();
        echo $y; // outputs 15
    ?>

    <h1>PHP The static Keyword</h1>
    <?php
        function countVotes(){
            static $vote = 0;
            echo $vote;
            $vote++;
        }
        countVotes();
        countVotes();
        countVotes();
    ?>

</body>
</html>