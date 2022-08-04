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
	<title> تحميل كتاب النفس ودماغها </title>
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
	<center><h2>تحميل كتاب النفس ودماغها</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>	كارل بوبر</h3><br><h3>	أوراق المؤتمرات والملتقيات العلمية</h3><br><h3>اللغة العربية</h3><br><h3>رؤية للنشر والتوزيع</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Scientific Books\elnafs wa dimaghoha\elnafs wa dimaghoha.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>هذا الكتاب ترجمة كاملة للقسم الأول الخاص بكارل بوبر من العمل المشترك: "النفس ودماغها" لسير كارل بوبر وسير جون إكلس (نوبل في الفزيولوجيا العصبية). وهو عمل ضخم من ثلاثة أجزاء: الجزء الأول لكارل بوبر وهو قسم فلسفي خاص؛ والجزء الثاني لجون إكلس وهو في فزيولوجيا الدماغ؛ والجزء الثالث محاورات بين المؤلفين، ويقول المؤلفان عنه في تصدير له مشكلة العلاقة بين أجسادنا وعقولنا، وبخاصة مشكلة الصلة بين تراكيب وعمليات دماغية من جهة، وميول وأحداث عقلية من جهة أخرى، هي مشكلة صعبة بالغة الصعوبة. 
 
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Scientific Books\elnafs wa dimaghoha\elnafs wa dimaghoha.pdf"><button  id="titre">Reading PDF</button></a>
	<a href="Scientific Books\elnafs wa dimaghoha\elnafs wa dimaghoha.rar"><button  id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
