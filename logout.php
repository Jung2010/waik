<?php
session_start();
include("../lib/api.php");
$_SESSION['nickname'] = null;
header("location:index.php");
?>
