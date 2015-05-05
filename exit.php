<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
unset($_SESSION['auth']);
header('Location: index.php');
exit();