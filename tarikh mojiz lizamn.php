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
	<title>تحميل كتاب تاريخ موجز للزمن</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Historical Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب تاريخ موجز للزمن</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>ستيفن هوكينج</h3><br><h3>نظرية الانفجار العظيم </h3><br><h3>اللغة العربية</h3><br><h3>دار التنوير للطباعة والنشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\tarikh mojiz lizamn\tarikh mojiz lizamn.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				يسعى هوكينج في هذا الكتاب لوضع خريطة أو مسار كوني, بداية من الكيفية التي بدأ بها الكون,إلى وضع الاحتمالات التي سينتهي إاليها, وتوضيح ما بينهما من أمور كونية فلكية.وقد بدأ الكتاب بالحديث عن الإنفجار الكبير و المتفردة التي بدأ,ثم يتحدث عن المكان و الزمان, ويتناول فيه نظرية أرسطو الأولية التي دحضها جاليليو ثم نيوتن بقوانينه عن الحركة, ومن ثمَّ تناول بالحديث نظرية النسبية لآينشتين, الخاصة بتعارضها من قانون الجاذبية, والعامة المتسقة مع ذاتها , ويتناول بعدها اكتشاف هابل بأن الكون يتمدد, ويفصل الحديث عن ميكانيكا الكم, فيتناول الجسيمات الأولية وقوى الطبيعة الأربعة, ثم ينتقل للحديث عن الثقوب السوداء, ويتناول أيضا البعد الزماني والمسار الذي يسير فيه الزمان فيما سيسمى بسهم الزمان المطلق للأمام, وغير ّذلك من الأمور الهامة والشيقة.

 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\tarikh mojiz lizamn\tarikh mojiz lizamn.pdf"><button id="titre" style="background-color:#7884A9;color:white;">Reading PDF</button></a>
	<a href="Historical Books\tarikh mojiz lizamn\tarikh mojiz lizamn.rar"><button id="titre" style="background-color:#7884A9;color:white;">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre" style="background-color:#7884A9;color:white;">Log Out</button></a>
</body>
</html>
<div>
		
