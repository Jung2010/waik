<?php
$conn = mysqli_connect("localhost","root","junghuckjun2010","waik");
$nickname = $_COOKIE["nickname"];
$sql = "delete from account where nickname = $nickname";
if($nickname != "Jung2010") {
  mysqli_query($conn,$sql);
}
?>
