<?php
session_start();
$nickname = $_SESSION['nickname'];
include("../lib/api.php");
$sql = "SELECT * FROM account WHERE nickname = '$nickname'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <link rel="stylesheet" href="/lib/style.css">
    <style media="screen">
      input {border: none;border-bottom: 2px solid royalblue;outline:none;}
    </style>
    <meta charset="utf-8">
    <title>Waik</title>
  </head>
  <body style='padding: 10px;'>
    <a href="index.php">돌아가기</a><br>
    <h1><?=$_SESSION['nickname']?>님</h1>
    <form action='updateaccountconfig.php' method='post'>
      <strong>닉네임 : </strong><input value="<?=$row['nickname']?>" name='nickname'><br>
      <strong>아이디 : </strong><input value="<?=$row['id']?>" name='id'><br>
      <strong>비밀번호 : </strong><input value="<?=$row['password']?>" type='password' style='border: none;outline: none;' readonly name='password'><br>
      <strong>계정 생성 날짜 : </strong><?=$row['created']?><br>
      <strong>설명 : </strong><input value="<?=$row['description']?>" name='description'><br>
      <strong>계정 설정 옵션 : </strong><a href="deleteaccount.php">계정 삭제</a> | <a href="updateaccount.php">계정 수정</a><br>
      <button type="submit" style="border: none;background:none;outline:none;">수정하기</button>
    </form>
  </body>
</html>
