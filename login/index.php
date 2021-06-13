<?php include("../lib/api.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>로그인</title>
  </head>
  <body width="100%" height="100%">
    <form action="loginconfig.php" method="post" class="loginForm">
      <h2>로그인</h2>
      <div class="idForm">
        <input type="text" class="id" placeholder="아이디" name='id'>
      </div>
      <div class="passForm">
        <input type="password" class="pw" placeholder="비밀번호" name='pw'>
      </div>
      <button type="submit" class="btn" onclick="button()">
        로그인 하기
      </button>
      <div class="bottomText">
        계정이 없으십니까? <a href="/sign-up">계정만들기</a><br>
        <a href="/index.php">메인으로</a>
      </div>
    </form>
  </body>
</html>
