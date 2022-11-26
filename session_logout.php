<meta charset="utf-8" />
<?php
session_start();
if(isset($_SESSION['id']))
{	
	session_destroy();
	echo "<script>alert('정상적으로 로그아웃 되었습니다.');</script>";}

else {
echo "<script>alert('로그아웃 권한이 없습니다. 로그인하세요.');</script>";}
echo "<meta http-equiv='refresh' content='0;url=session_main.html'>";
exit;
?>
