<?php

include('../resources/config.php');

function login_admin_user() {
    global $connection;
    if(isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
        $query = mysqli_query($connection, $sql);

        if(mysqli_num_rows($query) !=0) {
            $_SESSION['admin'] = $username;
            header("Location: index.php");
        }else{
            echo "<h1>ACCESSED DENIED</h1>";
        }

    }
}