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
	<title>تحميل كتاب كونسيلر</title>
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
	<center><h2>تحميل كتاب كونسيلر</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>نرمين  نحمد الله</h3><br><h3>الروايات و الأدب العربي</h3><br><h3>اللغة العربية</h3><br><h3>دار دون للنشر وتوزيع</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Novels\consiler\consiler.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				في لياليها المحتقنة بذكريات الماضي البعيد، تقرر «فاطمة» الانتقام من كل الذين تسببوا لها في الأذى، ولكن هل يكفي الانتقام وحده؟
أيام طويلة وسنوات تمر في محاولات للتصالح مع النفس، التصالح مع الآخرين، التصالح مع قصص الحب المهمَلة، وربما التصالح مع الموت نفسه.. تنجح «فاطمة» مرات عديدة في تحقيق أحلامها، وإشباع مشاعر الحب والتشفي معاً.. لكن القدر يخفي لها اختباراً أخيراً يجبرها على البدء من جديد.
ترى هل ينجح القلب العليل في الشفاء؟ أم تدفعه الأيام نحو هزيمة أثقل؟
رواية فائقة الروعة، تغوص في حكاية ملهمة مستوحاة من قصة حقيقية، تترك بداخلك أثراً كبيراً عن الحياة وتصاريف القدر.
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Novels\consiler\consiler.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Novels\consiler\consiler.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>