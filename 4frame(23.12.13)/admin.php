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
    <link rel="stylesheet" href="css/table1.css">
    <link rel="stylesheet" href="css/table2.css">
    <script language="javascript">
        function showPopup() { window.open("popup.html", "a", "width=500, height=300, left=100, top=50"); }
    </script>
    <script> function btn(){
        alert('승인하시겠습니까?');
    }
    </script>

</head>

<?php
session_start();
include('DB_CONNET.php');
$sql = "select * from reservation_manage ";
$result = $connect->query($sql);
$row = mysqli_fetch_array($result);
?>

    <body><br>
    <form name="admin"><center>
    <table class="type10">
        <thead>
        <tr>
            <th scope="cols" colspan="2">관리자 주의사항</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1.</th>
            <td>부적절한 사용목적을 기술한 학생은 예약을 취소시킵니다.</td>
        </tr>
        <tr>
            <th scope="row" class="even">2.</th>
            <td class="even">예약을 거절할 때 거절사유를 반드시 작성하며, 합당한 거절사유를 작성합니다.</td>
        </tr>
        <tr>
            <th scope="row">3.</th>
            <td>특정학생을 편애하지 말고, 공정하게 예약을 승인합니다.</td>
        </tr>
        <tr>
            <th scope="row" class="even">4.</th>
            <td class="even">관리자 계정을 의도와 상관없이 남용하지 않습니다.</td>
        </tr>
        </tbody>
    </table>
        </center></form>
    <form name="admin2"><center>
    <table class="type11">
        <thead>
        <tr>
            <th scope="cols">학번</th>
            <th scope="cols">이름</th>
            <th scope="cols">전화번호</th>
            <th scope="cols">날짜(MMDD)</th>
            <th scope="cols">시간(교시)</th>
            <th scope="cols">사용목적</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phone_number']?></td>
            <td><?php echo $row['day']?></td>
            <td><?php echo $row['time']?></td>
            <td><?php echo $row['purpose']?></td>
        </tr>
        </tbody>
    </table>
        </center></form>
    <center>
    <button onclick="javascript:btn()">예약승인</button>
    <button onclick="showPopup();">예약거절</button>
    </center>
</body>
</html>
