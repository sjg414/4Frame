<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="RE_Reservation.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <script type="text/javascript">
        $(document).ready(function () {
            $("#checking").click(function () {
                if ($("#check_1").is(":checked") == false){
                    alert("동의하셨습니다!");
                    return;
                }
            });
        });
    </script>
</head>
<body>
<?php
//connect 설정(host,user,password)
$connect = mysqli_connect("localhost", "root", "secret");
//db 연결
$select = mysqli_select_db($connect, "member_db");
//쿼리문 작성
$sql = "select * from test where id='2013218044'";
//쿼리보내고 결과를 변수에 저장
$result = mysqli_query($connect, $sql);
echo "예약자 정보<br>";
$row = mysqli_fetch_array($result);
echo "<h3>아이디: ".$row['id']."<br> 이름: ".$row['name']."<br> 번호: ".$row['phone_number']."<br><br></h3>";
mysqli_close($connect);
?>

<span style="font-size:12pt;"><font face="휴먼매직체">
	<FORM name="formUserInput" action="test2.php" method=POST>

		<h1>강의실 <span style="color: red">사용목적</span>을 기술하세요!</h1>
		<textarea name="purpose" rows="10" cols="80"></textarea> <br>

	<h1><span style="color: red">주의사항</span>을 읽고 동의합니다에 체크하세요!</h1><br>
		<table width=400 cellpadding=0 cellspacing=0 border=1px solid="#444444" style="letter-spacing: 5px" bgcolor=#fafad2 class="adTB">
		<TR>
			<TD class="td1" align="center">1.</TD>
			<TD class="td1" >
				신청서의 사용목적과 실제 내용이 상이할 경우 <span style="color: red"><U>승인을 취소할 수 있으며,</U></span> 이용기간 및 일일 이용시간을 준수해 주시기 바랍니다.
			</TD>
		</TR>

		<TR>
			<TD class="td1" align="center">2.</TD>
			<TD class="td1" >
				승인 후 학교행사 등 불가피한 사정으로 해당 강의실을 대학이 사용해야 할 경우 학교에 우선권이 있으며, <span style="color: red"><U>사전통보 후 승인을 취소할 수 있습니다.</U></span>
			</TD>
		</TR>

		<TR>
			<TD class="td1" align="center">3.</TD>
			<TD class="td1" >
				신청내용을 이행하지 아니하거나 학교측의 정당한 요청사항을 거부할 경우에는 <span style="color: red"><U>사용 중이라도 그 승인을 취소할 수 있습니다.</U></span>
			</TD>
		</TR>

		<TR>
			<TD class="td1" align="center">4.</TD>
			<TD class="td1" >
				이용자는 본 강의실 이용시 원래의 상태를 보전하고 시설이 손상되지 않도록 <span style="color: red"><U>최선을 다해야 합니다.</U></span>
			</TD>
		</TR>

		<TR>
			<TD class="td1" align="center">5.</TD>
			<TD class="td1" >
		 강의실을 청결하게 사용해야 합니다. 다음 인원이 사용할 수 있도록 <span style="color: red"><U>깨끗하게 정리합니다.</U>
			</span></TD>
		</TR>

			<TR>
			<TD class="td1" colspan="2" >
		<BR>
		<B><br>
		본인은 이 사실을 주지하였고 이를 이행하지 않았을 경우 차후 이용에 불이익을 받더라도 이에 대해 이의가 없음을 확인합니다.
		<BR>
		<BR><br>
		<center>
		위 사실을 확인 하였으며 성실히 이행 할 것을 확인합니다.
			<input type="checkbox" id="checking"  class="button_big" style="padding:0 10px 10px 10px;height:24px;" value=""/>
		</center>
		</B>
			</TD>
		</TR>
		</table><br><br>
		<div id="submit_div">
			<input type="submit" value="예약완료!" style="">
			<input type="button" id="reload_btn" value="초기화" style="" onclick="re_reser()">
		</div>
	</FORM>
</body>
</html>