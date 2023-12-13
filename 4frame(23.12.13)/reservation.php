<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/buttonstyle.css">
    <link rel="stylesheet" href="css/table2.css">
    <link rel="stylesheet" href="css/table1.css">
</head>
<body>
<?php
include('DB_CONNET.php');
session_start();
$sql = "select * from member where id=$_SESSION[id]";
$result = $connect->query($sql);
$row = mysqli_fetch_array($result);
?>
<form name="user"><center>
        <table class="type11">
            <thead>
            <tr>
                <th scope="cols">아이디</th>
                <th scope="cols">이름</th>
                <th scope="cols">번호</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['phone_number']?></td>
            </tr>
            </tbody>
        </table>
    </center>
</form>
<span style="font-size:12pt;"><font face="휴먼바탕체">
	<FORM name="formUserInput" action="test2.php" method=POST><center>

		<h1>강의실 <span style="color: red">사용목적</span>을 기술하세요!</h1>
		<textarea name="purpose" rows="10" cols="70"></textarea> <br>


		<table class="type10">
        <thead>
        <tr>
            <th scope="cols" colspan="2">학생 주의사항</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1.</th>
            <td>신청서의 사용목적과 실제 내용이 상이할 경우 승인을 취소할 수 있으며, 이용기간 및 일일 이용시간을 준수해 주시기 바랍니다</td>
        </tr>
        <tr>
            <th scope="row" class="even">2.</th>
            <td class="even">승인 후 학교행사 등 불가피한 사정으로 해당 강의실을 대학이 사용해야 할 경우 학교에 우선권이 있으며, 사전통보 후 승인을 취소할 수 있습니다.</td>
        </tr>
        <tr>
            <th scope="row">3.</th>
            <td>신청내용을 이행하지 아니하거나 학교측의 정당한 요청사항을 거부할 경우에는 사용 중이라도 그 승인을 취소할 수 있습니다.</td>
        </tr>
        <tr>
            <th scope="row" class="even">4.</th>
            <td class="even">이용자는 본 강의실 이용시 원래의 상태를 보전하고 시설이 손상되지 않도록 최선을 다해야 합니다.</td>
        </tr>
        <tr>
            <th scope="row">5,</th>
            <td>강의실을 청결하게 사용해야 합니다. 다음 인원이 사용할 수 있도록 깨끗하게 정리합니다.</td>
        </tr>
        </tbody>
    </table>
		<div id="submit_div">
			<button>예약신청!</button>
            <button onclick="window.location.reload()">다시예약!</button>
		</div>
            </center>
	</FORM>
</body>
</html>