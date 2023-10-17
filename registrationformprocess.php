<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "username: " . $username . "<br>";
    echo "firstname: " . $firstname . "<br>";
    echo "lastname: " . $lastname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
} else {
    header("Location: userregistrationform.html");
    exit();
}
?>