<?php
session_start();
define("_VALID_PHP", true);
require(dirname(__DIR__).'/lib/config.ini.php');

$id = $_GET['id'];
$servername = DB_SERVER;
$username   = DB_USER;
$password   = DB_PASS;
$dbname     = DB_DATABASE;
$conn       = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$query = "DELETE FROM `add_courier` WHERE `id` = $id;";
$result = $conn->query($query);
$_SESSION['status'] = 200;
$_SESSION['data'] = '';
$_SESSION['message'] = 'Delete shipment successfully';
header("Location: courier.php?do=list_courier");