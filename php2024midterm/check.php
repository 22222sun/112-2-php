<meta charset="utf8">
<?php
session_start();

//預設帳密1
$acc1="chair";
$pwd1="123";
//預設帳密2
$acc2="reviewer";
$pwd2="234";
//預設帳密3
$acc3="author";
$pwd3="345";

$uacc=$_POST["uId"];
$upwd=$_POST["uPWD"];
$uRole=$_POST["uRole"];

if($acc1 == $uacc && $pwd1 == $upwd){
	$_SESSION['mylogin'] = true;
	setcookie("name", $uacc);
	$URL="chair.php"; 
	header("Location: $URL");
}elseif($acc2 == $uacc && $pwd2 == $upwd){
	$_SESSION['mylogin'] = true;
	setcookie("name", $uacc2);
	$URL="reviewer.php"; 
	header("Location: $URL");
}elseif($acc3 == $uacc && $pwd3 == $upwd){
	$_SESSION['mylogin'] = true;
	setcookie("name", $uacc3);
	$URL="author.php"; 
	header("Location: $URL");
}
else{
	echo "登入失敗";
	$URL="fail.php";
	header("Location: $URL");// 將網址導回登入
}
?>
