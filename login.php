<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $file = isset($_POST['fileToUpload']) ? $_POST['fileToUpload'] : '';
    

    $sql = "SELECT * FROM login123 WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo $username;
        echo $file;
    } else {
        echo "Login failed";
    }
}
?>
