<?php
require "DbHandler.php";

$db = new DbHandler();
$db->deleteProduct($_GET['id']);
header("location:index.php");
?>
