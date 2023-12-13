<ul>
<!--<li><a href="login.html">홈</a></li>
<li><a href="signup.html">회원가입</a></li>-->
<li class="active"><a href="Reservation_main2.php">강의실 예약</a></li>
<!--<li><a href="no-sidebar.html">공지사항</a></li>-->
<?php session_start(); if($_SESSION['id']=='admin'){?>
<li><a href="admin.php">예약신청관리</a></li><?php }?>
</ul>
