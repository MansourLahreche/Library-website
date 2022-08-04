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
	<title>تحميل كتاب  قانون الشعوب</title>
	<link rel="icon" href="icon.jpg">
</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Political Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
				<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب قانون الشعوب</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>جون رولز</h3><br><h3>الثقافة و السياسة</h3><br><h3>اللغة العربية</h3><br><h3>محمد خلبل </h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الترجمة</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Political Books\9anoun elchou3oub\9anoun elchou3oub.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>فى هذا الكتاب يعالج المؤلف برهافة تحليلية لافتة للنظر ذلك الفصل الدقيق، أو الشبحى، الذى يجعل لمفهوم "الشعوب" سمات "الدول"؛ فنراه يتحدث عن مبادئ قانون الشعوب، وعن السلام الديمقراطي، وعن الشعوب الليبرالية وغير الليبرالية، وعن مبادئ الحرب، وغير ذلك من مفاهيم لا تزال تشغل المهتمين بالنظرية السياسية والفلسفة السياسية المعاصرة على السواء
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\9anoun elchou3oub\9anoun elchou3oub.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\9anoun elchou3oub\9anoun elchou3oub.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style= "float: right;"><button id="titre">Log Out</button></a>
</html>
<div>