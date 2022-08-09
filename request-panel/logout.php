<?php 
session_start();
unset($_SESSION['request_status']);
require_once ("config/config.php");
header("location:".base_url('login.php'));
?>