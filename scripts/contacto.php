<?php
$email = "tintxoagus@gmail.com";
$subject = $_REQUEST['email'];
$message = $_REQUEST['message'];

mail($email,$subject,$message);

header("Location: ../index.php");