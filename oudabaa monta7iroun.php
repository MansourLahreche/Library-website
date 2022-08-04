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
	<title>تحميل كتاب أدباء منتحرون</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Psychology Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب أدباء منتحرون</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>مكرم شاكر اسكندر</h3><br><h3>علم النفس الإجتماعي </h3><br><h3>اللغة العربية</h3><br><h3>دار الراتب الجامعية</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Psychology\oudabaa monta7iroun\oudabaa monta7iroun.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				دراسة نفسية يعالج هذا الكتاب السلوك التدميرى الذى يدمر فيه الفرد ذاته 
والذى أقدم عليه أديبان من اكبر أدباء القرن العشرين وهما:
الأديبة الانجليزية فرجينيا وولف 
الاديب الامريكى ارنست هيمنجواي 

وقد جاءت الدراسة من خلال التحليل والتفسير لبعض الانتاج القصصى لهما
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Psychology\oudabaa monta7iroun\oudabaa monta7iroun.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Psychology\oudabaa monta7iroun\oudabaa monta7iroun.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
