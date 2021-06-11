<link rel="stylesheet" href="/lib/style.css">
<center id='nav'>
  <div class="search">
    <form class="searchforms" action="/search" method="get">
      <input type="text" name="search" id='search' placeholder="여기서 검색하세요."><input type='submit' value='검색' id='searchbutton'>
    </form>
  </div><br>
  <div class='links'>
    <a href='/index.php' class='link'>홈</a>
  </div>
</center>
<div style='padding: 10px;'>
<div class="account">
  <img src='https://img.icons8.com/small/2x/user.png' align='middle'>
  <?php
  if(!isset($_COOKIE["nickname"])) {
    $nickname = "Guest0000";
    $descript = "<a href='/login'>로그인하기</a>";
    echo $nickname."님";
    echo "<br>$descript";
    ?>
    <?php
  } else {
    $nickname = $_COOKIE["nickname"];
    $descript = "<a href='/logout.php'>로그아웃하기</a>";
    echo $nickname."님";
    echo "<br>$descript";
    ?>
    <a href='/account'>계정관리</a>
    <?php
  }
  ?>
</div>
<?php
$conn = mysqli_connect("localhost","root","junghuckjun2010","waik");
?>
