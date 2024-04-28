<meta charset ='utf8'>

<?php

    $No=$_GET["No"];
    echo $No;
    $link = mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'form');  // 預設使用的資料庫名稱
    //SQL語法
    $sql = "DELETE FROM student WHERE No='$No'";
    //送出查詢
    if($result = mysqli_query($link, $sql)){
        echo"<br/>刪除成功";
    }
    echo "<br/><a href='database.php'>查看資料庫資料</a>";
?>
