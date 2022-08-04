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
	<title>تحميل كتاب ماجدولين</title>
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
	<center><h2>تحميل كتاب ماجدولين</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>مصطفى لطفي المنفلوطي</h3><br><h3>روايات و أدب عربي</h3><br><h3>اللغة العربية</h3><br><h3>مؤسسة هنداوي للتعليم و الثقافة</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Novels\majedwalin\majedwalin.PNG" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
               
صيغت هذه الرواية بأسلوب جديد مبتكر، هو أسلوب الرسائل، معتمداً على الخيال، والإستطرادات في وصف الطبيعة التي أحبّ، وقضى آخر أيامه بين أحضانها في حديقة كان قد اهتمّ بها، واعتنى بأغراسها وأزهارها؛ تدور هذه الرواية حول فتّى غريب الأطوار، فقير، حيي، يحبّ المطالعة والإعتزال، يُدعى "استيفن" أحبّ "ماجدولين" ابنة صاحب المنزل الذي كان يسكنه وأحبّته، متعاهدَين على أنّ هذا الحب سيدوم إلى الأبد، عندئذٍ تغيّرت نظرة الفتى إلى الحياة، وتبدّدت وحدته، وصار همّه الوحيد أن يرى وجهها البسّام، أو يسمع صوتها ليغتبط، ويسترسل بأحلامه.

			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Novels\majedwalin\majedwalin.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Novels\majedwalin\majedwalin.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
