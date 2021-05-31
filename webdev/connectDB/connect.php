<?php 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'School';
$conn = new mysqli("localhost","root","","School");


if($conn-> connect_error){
    die('Connection failed :' .$conn->connect_error);
}else{
    $sql = ("INSERT INTO students(first_name, last_name, email, phone)
            VALUES ('$firstname','$lastname','$email','$phone')");
}

$sql = mysqli_query($conn,$sql);

if ($sql == true){
    echo "results saved";
}else {
    echo "results not saved";
}

?>