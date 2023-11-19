<?php
session_start();

if (!isset($_SESSION['fingerPrint']) ||  $_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
    header('location:base/welcome_login.php');
}
