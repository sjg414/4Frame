<?php
session_start();
$id= $_POST['login_id'];
$password= $_POST['login_password'];
$connect = mysqli_connect("localhost", "root", "secret", "member_db");

$check = "select * from member where id='$id'";
$result = $connect->query($check);
if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['password'] == $password){
        $_SESSION['id'] = $id;
        if(isset($_SESSION['id'])){
            header('Location: main.php');
        }
        else{
            echo "세션 저장 실패";
        }
    }
    else{
        echo "학번 or 비밀번호를 잘못 입력하셨습니다.";
        echo "<a href=login.html>back page</a>";
    }
}
else{
    echo "학번 or 비밀번호를 잘못 입력하셨습니다.";
    echo "<a href=login.html>back page</a>";
}
?>