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
	<title> تحميل كتاب علمتني اية</title>
	<link rel="icon" href="icon.jpg">
</head>
<body>
<center>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Religious Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
				<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب علمتني اية</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>كاتب غير محدد</h3><br><h3>القرآن الكريم</h3><br><h3>اللغة العربية</h3><br><h3>غير محدد</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Religious Books\3lamatni aya\3lmtni aya.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>قام الكاتب في هذا الكتاب المختصر بجمع باقة من الآيات الكريمة، حيث ذكر بعد كل آية فائدة أو أرشادًا تفضل به أهل العلم في تفاسيرهم وكتبهم لينتفع به القارئ الكريم.
 
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Religious Books\3lamatni aya\3lmatni aya.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Religious Books\3lamatni aya\3lmatni aya.rar"><button id="titre">Download</button></a></a></center>
	<a href="logout.php" style="float: right;"><button id="titre">Log Out</button></a>
</body>
</html>