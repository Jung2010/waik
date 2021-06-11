<?php
setcookie("nickname", "", time() + 3600, "/");
header("location:index.php");
?>
