<?php
include("../lib/api.php");
$id = mysqli_real_escape_string($conn,$_POST['id']);
$pw = mysqli_real_escape_string($conn,$_POST['password']);
$nn = mysqli_real_escape_string($conn,$_POST['nickname']);
$pwh = mysqli_real_escape_string($conn,$_POST['passwordhint']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$pn = mysqli_real_escape_string($conn,$_POST['phonenumber']);
$mw = mysqli_real_escape_string($conn,$_POST['manorwoman']);
$dp = mysqli_real_escape_string($conn,$_POST['description']);
$bd = mysqli_real_escape_string($conn,$_POST['birthday']);
$nm = mysqli_real_escape_string($conn,$_POST['name']);
if(!mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM account where id='$id'")) || !mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM account where nickname='$nn'"))) {
  $sql = "
  INSERT INTO account (
    id,
    password,
    nickname,
    description,
    created,
    email,
    phonenumber,
    passwordhint,
    superuser,
    onoff,
    manorwoman,
    name,
    birthday
  ) VALUES (
    '$id',
    '$pw',
    '$nn',
    '$dp',
    now(),
    '$email',
    '$pn',
    '$pwh',
    'false',
    'on',
    '$mw',
    '$nm',
    '$bd'
  )";
  mysqli_multi_query($conn,$sql);
  header("location:/login");
} else {
  ?>
  <script type="text/javascript">
    alert("동일한 아이디나 닉네임이 있는 계정이 존재합니다.");
    location.href("index.php");
  </script>
  <?php
}
?>
