<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>예약신청</title>
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="reservation_css.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="select_room.js"></script>
    <script type="text/javascript" src="write_purpose.js"></script>
    <script type="text/javascript" src="datepicker_test.js"></script>
    <script type="text/javascript" src="image_controller.js"></script>
    <script type="text/javascript" src="reservation_control2.js"></script>
</head>
<body>
<?php
include('DB_CONNET.php');
$sql = "select * from infor";
$result = $connect->query($sql);
$row = mysqli_fetch_array($result);


$TableName = $row['name'];
$sql = "select * from " . $TableName;
$result = $connect->query($sql);
$timeArr = array();
$i = 0;
while($row = mysqli_fetch_array($result)){
    $timeArr[$i] = $row['time'];
    $i++;
}

$count_timeArr = count($timeArr);


//echo "<script> $(document).ready(function() {
//
//    while(var i < $count_timeArr){
//
//        alert(i);
//        document.getElementById($timeArr[i]).style.backgroundColor='red';
//        i++;
//    }
//}); </script>";




?>
<CENTER>
    <div id="reserv2">
        <h3>3. 시간을 선택하세요.</h3>
        <form name="form1" method="post" action="reservation_control3.php">
        <div id="time_table_div">
            <table id="time_table">
                <tr><td id="td1"><input type="radio" name="timebtn" value="1">1교시(09:30~10:20)</td></tr>
                <tr><td id="td2"><input type="radio" name="timebtn" value="2">2교시(10:30~11:20)</td></tr>
                <tr><td id="td3"><input type="radio" name="timebtn" value="3">3교시(11:30~12:20)</td></tr>
                <tr><td id="td4"><input type="radio" name="timebtn" value="4">4교시(12:30~13:20)</td></tr>
                <tr><td id="td5"><input type="radio" name="timebtn" value="5">5교시(13:30~14:20)</td></tr>
                <tr><td id="td6"><input type="radio" name="timebtn" value="6">6교시(14:30~15:20)</td></tr>
                <tr><td id="td7"><input type="radio" name="timebtn" value="7">7교시(15:30~16:20)</td></tr>
                <tr><td id="td8"><input type="radio" name="timebtn" value="8">8교시(16:30~17:20)</td></tr>
                <tr><td id="td9"><input type="radio" name="timebtn" value="9">9교시(17:30~18:20)</td></tr>
            </table>
            <br>

        </div>
        <input type="text" name="testid" value="test" style="display: none">
        <h3>4. 강의실 사용 목적을 선택하세요.</h3>

            <input type=text value="" name="box" size="75"><BR>
            <input type=checkbox onClick="writeBox('0')" name='input' value='공부,'> 공부
            <input type=checkbox onClick="writeBox('1')" name='input' value='과제,'> 과제
            <input type=checkbox onClick="writeBox('2')" name='input' value='조별모임 및 발표준비'> 조별모임 및 발표준비
            <BR>
            <input type=reset value="초기화">
            <br><br><br>
            <input type="submit" value="예약하기" onclick="test()">
        </form>

    </div>
</CENTER>
</body>
</html>