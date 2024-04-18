<meta charset="utf8">
<a href="logout.php"><button>登出</button></a><br/><br/>
<?php
    $sHead=$_POST["sHead"];
    echo "您的論文標題:".$sHead."<br/>";
    $sName=$_POST["sName"];
    echo "您的姓名:".$sName."<br/>";
    $sEmail=$_POST["sEmail"];
    echo "您的Email:".$sEmail."<br/>";
    $sComment=$_POST["sComment"];
    echo "您填寫的論文摘要如下:<br/>".$sComment."<br/>";
?>
