<!DOCTYPE HTML>
<!--
	
-->
<html>
<head>
    <title>세명대학교 강의실 예약 시스템</title>
    <meta http-equiv="content-type" content="text/html; charset=utf8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <script src="agree_alert.js"></script>
    <link rel="stylesheet" href="css/skel-noscript.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style-desktop.css" />
    <link rel="stylesheet" href="css/buttonstyle.css">
    <link rel="stylesheet" href="css/table2.css">
    <link rel="stylesheet" href="css/table1.css">
    <link type="text/css" rel="stylesheet" href="style_reserv_main.css">
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <div id="header">
        <div class="container">
            <!-- Nav -->
            <nav id="nav">
                <?php include('menubar.php'); ?>
            </nav>
            <table class="member_table" align="right">
                <th align="center" >
                    <h3><?php include('login_id.php'); ?>님</h3>
                </th>
                <tr align="center">
                    <td><a href="status.php">예약신청현황</a> </td>
                </tr>
                <tr align="center">
                    <td>
                        <a href=logout.php>로그아웃</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- /Header -->

    <!-- Main -->
        <section>
            <!--//회원가입Form html-->
            <center>
            <form id="reservation_agree" style="margin-left: auto; margin-right: auto;">
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
                        <th scope="row">5.</th>
                        <td>강의실을 청결하게 사용해야 합니다. 다음 인원이 사용할 수 있도록 깨끗하게 정리합니다.</td>
                    </tr>
                    </tbody>
                </table>
                <div id="submit_div">
                    <input type="button" class="submit_divclass2" value="예약신청하기" onclick="location.href='test_reservation.html'">
                </div>
            </form>
            </center>
        </section>
    </div>

<!-- Copyright -->
<div id="copyright">
    <div class="container">
        <p><a href="http://semyung.ac.kr"><u>세명대학교 바로가기</u></a> /  <a href="login.html"><u>홈</u></a></p>
    </div>
</div>
</body>
</html>