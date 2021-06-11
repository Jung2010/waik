<?php
$conn = mysqli_connect("localhost","root","junghuckjun2010","waik");
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
?>
