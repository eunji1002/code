<?php
session_start();
if (isset($_SESSION['id']))
{
	echo "<script>alert('사용 가능합니다.' );</script>";
	print "<center>로그아웃 하기</center><br>
	<table align=center cellpadding='5' cellspacing='2'>
	<tr>
	<td bgcolor='#FFD9FA'>
 	<a href='session_logout.php'>로그아웃 하기</a></td></tr></table>";}

else {echo "<script>alert('사용 할 수 없습니다. 로그인하세요' );history.back();</script>";}
	

?>
<meta charset="utf-8" />