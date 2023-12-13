<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf8" />
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/buttonstyle.css">
    <link rel="stylesheet" href="css/table2.css">
    <script language="javascript">
        function showPopup() { window.open("popup.html", "a", "width=500, height=300, left=100, top=50"); }
    </script>

</head>

<?php
session_start();
include('DB_CONNET.php');
$sql = "select * from reservation_manage where id=$_SESSION[id]";
$result = $connect->query($sql);
$row = mysqli_fetch_array($result);
?>

<body><br>
<h3>예약신청 현황입니다.</h3>
<form name="status">
        <table class="type11">
            <thead>
            <tr>
                <th scope="cols">아이디</th>
                <th scope="cols">이름</th>
                <th scope="cols">번호</th>
                <th scope="cols">사용목적</th>
                <th scope="cols">신청현황</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['phone_number']?></td>
                <td><?php echo $row['purpose']?></td>
                <td><?php echo $row['status']?></td>
            </tr>
            </tbody>
        </table>
    </form>
<button type="button" onclick="location.href='reservation.php'">예약페이지로 이동</button>
<button onclick="self.close()">페이지 닫기</button></center>
</body>
</html>