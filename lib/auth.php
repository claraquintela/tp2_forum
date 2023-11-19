<?php

session_start();
require('db/connex.php');

foreach ($_POST as $key => $value) {
    $$key = mysqli_real_escape_string($connex, $value);
}

$sql = "SELECT * FROM user WHERE username = '$username'";

$result = mysqli_query($connex, $sql);

$count = mysqli_num_rows($result);
if ($count == 1) {
    $info_user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $info_user['password'];
    $salt = "H@%h14";
    $saltPassword = $password . $salt;

    if (password_verify($saltPassword, $info_user['password'])) {

        session_regenerate_id();
        $_SESSION['id'] = $info_user['id'];
        $_SESSION['nom'] = $info_user['nom'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

        header('location:client-index.php');
    } else {
        header('location:login.php?msg=2');
    }
} else {
    header('location:login.php?msg=1');
}
