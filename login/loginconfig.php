<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
$conn = mysqli_connect("localhost","root","junghuckjun2010","waik");
$sql="SELECT * FROM account where id='$id'&&password='$pw'";
        if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공
           $sqli = "select * from account where id = '$id'";
           $results = mysqli_query($conn,$sqli);
           $row = mysqli_fetch_array($results);
           setcookie("nickname", $row['nickname'], time() + 3600, "/");
           header("location:/index.php");
        }
        else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
          echo "login fail";
        }
?>
