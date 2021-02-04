<?php
$logins = array(
    'root' => 'root'
);
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
if($username == 'root' && $password == 'root'){
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../index.php");
}