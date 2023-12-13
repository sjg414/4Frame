<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<?php
//회원가입정보 받기
$name = $_POST['name'];
$id = $_POST['id'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$phone_number = $_POST['phone_number'];

if($password != $password_confirm){
    echo '<script>alert("비밀번호와 비밀번호 확인이 서로 다릅니다.!");document.location.href="signup.html";</script>';
    exit();
}
else if($id == Null || $password == Null || $name == Null || $phone_number == Null){
    echo '<script>alert("빈 칸을 모두 채워주세요!");document.location.href="signup.html";</script>';
    exit();
}
else{
    //회원가입정보 DB에 저장
    $connect = mysqli_connect("localhost","root","secret", "member_db"); //mysql 연결

    $check = "select * from member where id='$id'";
    $result = $connect->query($check);
    if($result->num_rows==1){
        echo '<script>alert("중복된 학번입니다!");document.location.href="signup.html";</script>';
        exit();
    }
    else{
        //Table에 정보 추가
        $sql = "insert into member(name, id, password, phone_number)";
        $sql .= " values('$name', '$id','$password', '$phone_number')";
        $result = mysqli_query($connect, $sql); //query문 실행

        if ($result) {//query문 정상적 실행 시
            echo '<script>alert("회원가입 완료!");document.location.href="login.html";</script>';
        }
        else
            echo "레코드 삽입 실패! 에러 확인 요망!";

        mysqli_close($connect);//DB종료
    }
}
?>
