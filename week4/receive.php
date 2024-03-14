<meta charset="utf8">
<?php

    $sName=$_POST["sName"];
    echo "您的姓名:".$sName."<br/>";
    $sMajor=$_POST["sMajor"];
    echo "您的科系:".$sMajor."<br/>";
    $sLevel=$_POST["sLevel"];
    echo "您的科系:".$sLevel."<br/>";

    $sGender=$_POST["sGender"];
    echo "您的性別:".$sGender."<br/>";
    $sSocial=$_POST["sSocial"];
    echo "您的社群:".$sSocial."<br/>";
    $sSize=$_POST["sSize"];
    echo "您的衣服尺寸為:".$sSize."<br/>";
    $sFood=$_POST["sFood"];
    foreach($sFood as $value){
        echo $value."  ";
    }
    echo "<br/>";
    $sDate=$_POST["sDate"];
    $sTime=$_POST["sTime"];
    echo "您的出生日期+時間是:".$sDate." ".$sTime."<br/>";
    $sEmail=$_POST["sEmail"];
    echo "您的email是:".$sEmail."<br/>";
    //$sFile=$_POST["sFile"]; 寫不出來:) (´_ゝ`)
    //$targer_dir = "uploads/";
    //$target_file = $target_dir;
    //move_uploaded_file($_FILES["sFile"], $target_file);
    //echo "<h2>上傳的圖：</h2>";
    //echo "<img src='$target_file' alt='上傳的圖'>";
    //$target_file = $target_dir . basename($_FILES["sFile"]);
    //echo "<img src='uploads/'>";
    //echo "<br/>";

    $sNumber=$_POST["sNumber"];
    echo "您的同行報名人數有:".$sNumber."位<br/>";
    $sRange=$_POST["sRange"];
    echo "百分比為:".$sRange."<br/>";
    $sComment=$_POST["sComment"];
    echo "填寫的意見如下:<br/>".$sComment."<br/>";

?>
