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
	<title> تحميل كتاب أمن تقنية المعلومات</title>
	<link rel="icon" href="icon.jpg">
</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Scientific Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تميل كتاب أمن تقنية المعلومات</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>	لورانس م. أوليفا</h3><br><h3>كتب علمية وتقنية</h3><br><h3>اللغة العربية</h3><br><h3>المنظمة العربية للترجمة</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Scientific Books\amn t9nyt elma3loumat\amn t9nyt elma3loumat.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4> تطورت الأمنيّة المعلوماتية من مجرد منظور إنتاجي إلى سيرورة إدارة أعمال مع تزايد قيمة المعلوماتية. ولم تعد أمنيّة المعلومات اليوم عملية تحكّم في مدخلات البيانات والأنظمة، وإنما السيطرة على مجموعة الخدمات، ومن ضمنها الشبكات اللاسلكية، والحماية من قرصنة المعلومات، بالإضافة إلى مداومة التخطيط العملياتي في حالات الكوارث. على أساس هذه المفاهيم تغيّرت استراتيجية تنفيذ تكنولوجيا المعلومات من مجرّد مواجهة التحديات الخارجية إلى تكوين بنية تحتية للحماية موثوق بها ومرتبطة بسيرورات العمل، وذلك لتحريك العائدات المالية، وجني الأرباح.
 
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Scientific Books\amn t9nyt elma3loumat\amn t9nyt elma3loumat.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Scientific Books\amn t9nyt elma3loumat\amn t9nyt elma3loumat.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right	;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
