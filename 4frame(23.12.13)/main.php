<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: login.html');
}
else{
    echo "홈(로그인 성공)";
    header('Location: Reservation_main2.php');
//    echo "<a href=logout.php>로그아웃</a>";
}
?>