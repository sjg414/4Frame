<?php
session_start();
$res=session_destroy();
if($res){
    echo "<script>alert('로그아웃 되었습니다.');</script>";
    header('location: main.php');
}
?>
