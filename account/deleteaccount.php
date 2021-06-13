<?php
session_start();
include("../lib/api.php");
$nickname = $_SESSION["nickname"];
$sql = "delete from account where nickname = '$nickname'";
if($nickname != "Jung2010") {
  $_SESSION["nickname"] = null;
  mysqli_query($conn,$sql);
  header("location:/index.php");
  setcookie("nickname", "", time() + 3600, "/");
}
?>
