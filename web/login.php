<?php
$servername = "User";
$username = "username";
$password = "databasewala_password";
$dbname = "User";

$conn = mysqli_connect('localhost','root','', 'users');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hashed_password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful!";
    } else {
        echo "Invalid email or password";
    }
}

mysqli_close($conn);
?>
