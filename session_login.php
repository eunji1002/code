<?php
session_start();

$server = "localhost";
$user = "root";
$password = "apmsetup";
$dbname = "pass";

$conn =new mysqli($server, $user, $password, $dbname);


$id = $_POST['id'];
$passwd = $_POST['passwd'];

$loginCk = 0;
$idCk = "select * from session where id = '$id'";

$idCkResult = $conn->query($idCk);

if ($idCkResult) {
    $passCk = "select * from session where id = '$id'";  //중요
    $rs = $conn->query($passCk);
    $result = mysqli_fetch_assoc($rs);
    if ($result['passwd'] == $passwd) {
        $loginCk = 1;
        $_SESSION['id'] = $result['id'];
    
    }

}

if($loginCk == 1) { echo "<script>alert('로그인되었습니다.');</script>";
print session_id();
print "<center>다음 중 기능을 클릭해 주세요.</center><br>
<table align=center cellpadding='5' cellspacing='2'>
<tr>
<td bgcolor='#FFD9FA'>
 <a href='confirm.php'>서비스 사용 가능성 확인하기</a></td>
<td bgcolor='#FFD9FA'>
 <a href='session_logout.php'>로그아웃 하기</a></td></tr></table>"; }

else {echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.');history.back();</script>";}

?>
<meta charset="utf-8" />


    

   