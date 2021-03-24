<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson1</title>
</head>
<body>

<h1>Lesson1 - php syntax</h1>
    <?php
        echo "hello world<br>";
        //single line comment

        /* multiple
            line
                comment
        */

        /* all keywords (e.g. if, else, while, echo, etc.), 
        classes, functions, and user-defined functions are NOT case-sensitive.
        */
            
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>"; //They'll all be displayed

        //variable names are case sensitive
        $color = 'red';
        echo "I bought a $color car <br>";
        echo "I bought a $Color car"; //variable color will not be displayed
    ?>
</body>
</html>