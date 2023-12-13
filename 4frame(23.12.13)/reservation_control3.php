<?php
    session_start();
    $time = $_POST['testid'];
    $purpose = $_POST['box'];

    include('DB_CONNET.php');

    $sql = "select * from member where id=$_SESSION[id]";
    $result = $connect->query($sql);
    $row1 = mysqli_fetch_array($result);

    $sql = "select * from infor";
    $result = $connect->query($sql);
    $row2 = mysqli_fetch_array($result);

    $sql = "insert into reservation_manage(name, id, phone_number, day, room, time, purpose)";
    $sql .= "values ('$row1[name]', '$_SESSION[id]', '$row1[phone_number]', '$row2[day]','$row2[room]', '$time', '$purpose')";
    $result = $connect->query($sql);

    if($result){
        echo '레코드 삽입 성공';
    }
    else
        echo '레코드 삽입 실패';
    mysqli_close($connect);//DB종료
?>
