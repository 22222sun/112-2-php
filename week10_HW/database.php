<meta charset ='utf8'>
<?php

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'form');  // 預設使用的資料庫名稱

if ( !$link)
    die("無法開啟資料庫!<br/>");
 else
    echo "資料庫開啟成功!<br/>";

//SQL語法
$sql = "SELECT * FROM student";
//送出查詢
$result = mysqli_query($link, $sql);
echo"<table border='1'>";
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row["No"]."</td><td>".$row["sName"]."</td><td>".$row["sMajor"]."</td><td>".$row["sLevel"]."</td><td>".$row["sGender"]."</td><td>".$row["sSocial"]."</td><td>".$row["sEmail"]."</td><td>".$row["sCoNumber"]."</td><td>".$row["sComment"]."</td><td><a href='del.php?No=".$row["No"]."'>刪除</a></td><td>修改</td>";
    echo "</tr>";
}
mysqli_close($link);
echo "<a href='join.php'>新增</a>";
?>
