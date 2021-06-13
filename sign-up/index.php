<?php include("../lib/api.php"); ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>계정만들기</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/lib/style.css">
  </head>
  <body>
    <h2>계정만들기</h2>
    <form class="" action="signupconfig.php" method="post">
      <table>
        <tr>
          <td>아이디 : </td><td><input placeholder='아이디' name='id' required maxlength="12"></td>
          <tr><td>비밀번호 : </td><td><input type='password' placeholder='비밀번호' name='password' maxlength="12" required></td></tr>
          <tr><td>이메일주소 : </td><td><input type='email' placeholder='이메일' name='email' required></td></tr>
          <tr><td>닉네임 : </td><td><input placeholder='닉네임' name='nickname' maxlength="10" required></td></tr>
          <tr><td>계정 소개글 : </td><td><input placeholder='설명' name='description' maxlength="20" required></td></tr>
          <tr><td>전화번호 : </td><td><input placeholder='전화번호 - 예 : 01012345678' name='phonenumber' maxlength="11" required></td></tr>
          <tr><td>비밀번호 힌트 : </td><td><input placeholder='비밀번호 힌트(비밀번호를 잊었을때 필요)' name='passwordhint' maxlength="10" required></td></tr>
          <tr><td>실명/본명 : </td><td><input placeholder='본명(현재 실제 이름)' name='name' maxlength="30" required></td></tr>
          <tr><td>생년월일 : </td><td><input type='date' name='birthday' value='1999-01-01' required></td></tr>
          <tr><td>성별 : </td><td><input type="text" name="manorwoman" value="남성" placeholder="성별을 입력하세요. 예 : 남성" maxlength="2" required></td></tr>
        </tr>
      </table>
      <button type="submit">계정만들기</button>
    </form>
    <a href="/index.php">돌아가기</a>
  </body>
</html>
