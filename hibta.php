<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title>تحميل كتاب هيبتا</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Novels</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب هيبتا</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>محمد صادق</h3><br><h3>روايات عربية</h3><br><h3>اللغة العربية</h3><br><h3>عصير الكتب</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Novels\hibta\hibta.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				تأخذنا روايه ( هيبتا ) الي ذلك العالم الذي أهلكه الجميع بحثا ذلك العالم الذي رغم تكرار قصصه و رواياته الا أن الجميع فيه يقع في نفس الأخطاء , و يعيد نفس الأحداث , و يتألم نفس الألم ... خلال محاضرة مدتها ست ساعات يأخذنا أسامه الي حالات نادره .. و رغم ندرتها لن تستطيع الا أن تجد نفسك فيها في عالم الحب و الامل و الألم .. من خلال حالات نعيشهم و نفهم منهم تلك المراحل السبع التي لخصت كل القواعد "قواعد ال "هـيـبـتـا			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Novels\hibta\hibta.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Novels\hibta\hibta.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
