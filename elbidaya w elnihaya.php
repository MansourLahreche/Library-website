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
	<title>تحميل كتاب البداية و النهاية</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Historical Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..."  class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب البداية و النهاية</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>إسماعيل بن عمر بن كثير عماد الدين أبو الفداء</h3><br><h3>التاريخ </h3><br><h3>اللغة العربية</h3><br><h3>وزارة الأوقاف والشؤون الإسلامية</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\elbidaya w elnihaya\elbidaya w elnihaya.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				كتاب البداية والنهاية تأليف ابن كثير .. البداية والنهاية في التاريخ هي موسوعة تاريخية ألفها ابن كثير إسماعيل بن عمر الدمشقي المتوفي سنة 774هـ، والموسوعة مؤسسة حسب معتقدات الديانة الإسلامية. وهي عبارة عن عرض للتاريخ من بدء الخلق إلى نهايته يبدأ ببداية خلق السماوات والأرض والملائكة إلى خلق آدم، ثم يتطرق إلى قصص الأنبياء مختصراً ثم التفصيل في الأحداث التاريخية منذ مبعث النبي محمد حتى سنة 767 هـ بطريقة التبويب على السنوات. وتبدأ السنة بقوله "ثم دخلت سنة.." ثم يسرد الأحداث التاريخية فيها ثم يذكر أبرز من توفوا في هذه السنة. 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\elbidaya w elnihaya\elbidaya w elnihaya.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Historical Books\elbidaya w elnihaya\elbidaya w elnihaya.rar"><button  id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
