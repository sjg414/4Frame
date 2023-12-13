<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf8" />
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        function showPopup() { window.open("popup.html", "a", "width=400, height=300, left=100, top=50"); }
        function btn(){
            alert('승인하시겠습니까?');}
    </script>
</head>
<body>
<?php
//connect 설정(host,user,password)
$connect = mysqli_connect("localhost", "root", "secret");
//db 연결
$select = mysqli_select_db($connect, "member_db");
//쿼리문 작성
$sql = "select * from test2 where id='2013218044'";
//쿼리보내고 결과를 변수에 저장
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
echo "예약신청 정보<br>";
echo "<h3>아이디: " . $row['id'] . "<br> 이름: " . $row['name'] . "<br> 번호: " . $row['phone_number'] . "<br>사용목적: " . $row['purpose'] ."<br></h3>";
mysqli_close($connect);
?>
    <button onclick="btn()">예약승인</button>
    <input type="submit" value="예약거절" style="" onclick="showPopup();">
</body>
</html>
