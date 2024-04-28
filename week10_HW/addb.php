<meta charset ='utf8'>
<?php


$sName=$_POST["sName"];
$sMajor=$_POST["sMajor"];
$sLevel=$_POST["sLevel"];
$sGender=$_POST["sGender"];
$sSocial=$_POST["sSocial"];
$sEmail=$_POST["sEmail"];
$sCoNumber=$_POST["sCoNumber"];
$sComment=$_POST["sComment"];

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'form');  // 預設使用的資料庫名稱
//SQL語法
$sql = "INSERT INTO student(sName, sMajor, sLevel, sGender, sSocial, sEmail, sCoNumber, sComment) VALUES('$sName','$sMajor','$sLevel','$sGender','$sSocial','$sEmail','$sCoNumber','$sComment')";
//送出查詢
if($result = mysqli_query($link, $sql)){
    echo"<br/>新增成功";
}
echo "<br/><a href='database.php'>查看資料庫資料</a>";
?>
