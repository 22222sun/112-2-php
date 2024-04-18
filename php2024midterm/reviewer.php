<html>
<head>
<meta charset="utf-8">
<a href="logout.php"><button>登出</button></a>
</head>

<form action="showreview.php" method="post">
<p>Reviewer您好，歡迎進入論文評論網頁<p>
論文評審決定:
<input type="radio" name="sdecide" value="Accept">Accept
<input type="radio" name="sdecide" value="Minor Revision">Minor Revision
<input type="radio" name="sdecide" value="Major Revision">Major Revision
<input type="radio" name="sdecide" value="Reject">Reject
<br/>
論文評論評語:
<textarea name="sComment" rows="10" cols="25" >
</textarea>
<br/>
<input type="submit" value="提交"><br/><br/>
</form>

</html>
