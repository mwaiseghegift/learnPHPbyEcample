<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Working with the Database</title>
</head>
<body>
    <div id="form" class="student_form">
        <form action="connect.php" method="POST">
        <div class="input">
            <label for="firstname">FirstName</label><br>
            <input name="firstname" type="text" placeholder="FirstName">
        </div>

        <div class="input">
            <label for="">LastName</label><br>
            <input name="lastname" type="text" placeholder="LastName">
        </div>

        <div class="input">
            <label for="">Email</label><br>
            <input name="email" type="email" placeholder="Email">
        </div>

        <div class="input">
            <label for="">Phone</label><br>
            <input name="phone" type="text" placeholder="Phone">
        </div>
        <button class="submit-btn" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>