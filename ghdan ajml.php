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
	<title> تحميل كتاب غدا اجمل</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Religious Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2> تحميل كتاب غدا اجمل</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>	عبدالله المغوث</h3><br><h3>الدعوة الإسلامية </h3><br><h3>اللغة العربية</h3><br><h3>غير محدد</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Religious Books\ghdan ajml\ghdan ajml.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4> 
                غدا أجمل - عبدالله المغلوثغدا أجمل دعوة إلى جلب الفرحة والسعادة لنفسك، وعدم الوقوف أمام خيبات الزمن التي تتعرض لها، والبعد عن الوحدة، دعوة إلى تقاسم أحزانك مع أصدقائك هناك العديد من الأشياء البسيطة التي ترسم الضحكة على شفتيك مثل اللعب مع طفل صغير، تذكر بعض ذكريات القديمة المضحكة وغيرها من المواقف التي مررت بها.
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Religious Books\ghdan ajml\ghdan ajmal.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Religious Books\ghdan ajml\ghdan ajmal.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>