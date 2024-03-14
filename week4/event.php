<html>
<head>
<meta charset="utf-8">
</head>

<form action="receive.php" method="post">
<p>資管晚會報名表<p>
姓名:<input type="text" name="sName" placeholder="please input your name" required><br/>
科系:<input type="text" name="sMajor" required><br/>
系級:
<input type="checkbox" name="sLevel" value="113">113級
<input type="checkbox" name="sLevel" value="114">114級
<input type="checkbox" name="sLevel" value="115">115級
<input type="checkbox" name="sLevel" value="116">116級
<br/>
性別:
<input type="radio" name="sGender" value="male">男
<input type="radio" name="sGender" value="female"checked>女
<br/>
社群:<input type="text" name="sSocial"><br/><br/>
<input type="image" src="bob.jpg" alt="Submit" width="350" height="220">
<br/><br/>
衣服顏色
<input type="color" name="sColor" value=""></br>
請選擇衣服尺寸:
<select name="sSize">
<option value="s">S
<option value="m"selected>M
<option value="l">L
<option value="xl">XL
</select>
<br/><br/>
想吃甚麼:
<select name="sFood[]" multiple>
<option value="pizza">pizza
<option value="fried chicken">fried chicken
<option value="hamburger">hamburger
<option value="hotdog">hotdog
</select>
<br/><br/>
出生日期+時間
<input type="date" name="sDate">
<input type="time" name="sTime"><br/></br>
email
<input type="email" name="sEmail"><br/></br>
上傳一張照片<input type="file" name="sFile"><br/>
  
<input type="hidden" name="sSecret" value="Hi"><br/>
請輸入同行報名人數:<input type="number" name="sNumber" min="0" max="4"><br/><br/>
請輸入百分比<input type="range" name="sRange"><br/><br/>
填寫意見:
<textarea name="sComment" rows="3" cols="25" >
</textarea>
<br/><br/>
<input type="submit" value="送出回覆">
<input type="reset" value="重新填寫">

</form>

</html>
