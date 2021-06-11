<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>계정만들기</title>
  </head>
  <body>
    <h2>계정만들기</h2>
    <form class="" action="signupconfig.php" method="post">
      아이디 : <input placeholder='아이디' name='id' required><br>
      비밀번호 : <input type='password' placeholder='비밀번호' name='password' required><br>
      이메일주소 : <input type='email' placeholder='이메일' name='email' required><br>
      닉네임 : <input placeholder='닉네임' name='nickname' required><br>
      계정 소개글 : <input placeholder='설명' name='description' required><br>
      전화번호 : <input placeholder='전화번호 - 예 : 01012345678' name='phonenumber' required><br>
      비밀번호 힌트 : <input placeholder='비밀번호 힌트(비밀번호를 잊었을때 필요)' name='passwordhint' required><br>
      실명/본명 : <input placeholder='본명(현재 실제 이름)' name='name' required><br>
      생년월일 : <input type='date' name='birthday' value='1999-01-01' required><br>
      성별 : <input type="text" name="manorwoman" value="" placeholder="성별을 입력하세요. 예 : 남성" required><br>
      <button type="submit">계정만들기</button>
    </form>
    <a href="/index.php">돌아가기</a>
  </body>
</html>
