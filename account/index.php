<!DOCTYPE html>
<?php
session_start();
include("../lib/api.php");
$nickname =  $_SESSION['nickname'];
$sql = "select * from account where nickname = '$nickname'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../lib/style.css">
    <title>Waik</title>
  </head>
  <body style="padding: 10px;">
    <a href="../index.php">돌아가기</a>
    <h1><?php echo $nickname; ?>님</h1>
    <strong>닉네임 : </strong><?=$row['nickname']?><br>
    <strong>아이디 : </strong><?=$row['id']?><br>
    <strong>비밀번호 : </strong><input value="<?=$row['password']?>" type='password' style='border: none;outline: none;' readonly><br>
    <strong>계정 생성 날짜 : </strong><?=$row['created']?><br>
    <strong>설명 : </strong><?=$row['description']?><br>
    <strong>계정 설정 옵션 : </strong><a href="deleteaccount.php">계정 삭제</a> | <a href="updateaccount.php">계정 수정</a>
  </body>
</html>
