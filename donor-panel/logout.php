<?php 
session_start();
unset($_SESSION['donor-status']);
require_once ("config/config.php");
header("location:".base_url('login.php'));
?>