<?php
session_start();
include("../lib/api.php");
$id = $_POST["id"];
$dp = $_POST["description"];
$nn = $_POST["nickname"];
$nickname = $_SESSION['nickname'];
$sql = "
UPDATE account
  SET
    id = '$id',
    description = '$dp',
    nickname = '$nn'
  WHERE
    nickname = '$nickname'
";
$_SESSION['nickname'] = $nn;
mysqli_query($conn,$sql);
header("location:index.php");
?>
