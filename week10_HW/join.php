<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>資管晚會報名表單</title>
</head>
<body>
    <form action="addb.php" method="post">
         <h2>資管晚會報名表單</h2>
        姓名： <input type="text" name="sName" size="15" placeholder="請輸入姓名" required><br/>
        科系：
        <select name="sMajor">
            <optgroup label="管理學院">
                <option value="IM" select="True">資訊管理學系</option>
                <option value="FIN" select="True">金融管理學系</option>
                <option value="AP" select="True">亞太工商管理學系</option>
                <option value="AE" select="True">應用經濟學系</option>
            </optgroup>
            <optgroup label="法學院">
                <option value="LAW" select="True">法律學系</option>
                <option value="EFL" select="True">財經法律學系</option>
                <option value="GL" select="True">政治法律學系</option>
            </optgroup>

        </select><br/>
        系級：
        <input type="radio" name="sLevel" value="113"/>113級
        <input type="radio" name="sLevel" value="114"/>114級
        <input type="radio" name="sLevel" value="115"/>115級
        <input type="radio" name="sLevel" value="116"/>116級<br/>
        性別：
        <input type="radio" name="sGender" value="male"/>生理男
        <input type="radio" name="sGender" value="famale"/>生理女<br/>
        電子信箱：
        <input type="email" name="sEmail" ><br/>
        請輸入同行報名人數：
        <input type="number" name="sCoNumber" min="0" max="4"><br/>
        IG名稱
        <input type="text" name="sSocial"><br/><br/>
    
        給我們的建議：
        <textarea name="sComment" row="1" cols="15"></textarea><br/><br/>

        <input type="submit" value="送出回覆">

    </form>
</body>
</html>
