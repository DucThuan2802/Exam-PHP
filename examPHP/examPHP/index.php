<?php 
session_start();
require_once "app/config/DB.php";
$conn = DBConnection::getConnection();

require_once "app/controllers/BaseController.php";
require_once "app/App.php";

$app = new App($conn);
?>