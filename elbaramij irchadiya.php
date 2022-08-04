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
	<title>تحميل كتاب البرامج الإرشادية</title>
	<link rel="icon" href="icon.jpg">
</head>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Psychology Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب البرامج الإرشادية</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>حمدي عبد الله عبد العظيم</h3><br><h3>علم النفس </h3><br><h3>اللغة العربية</h3><br><h3>مكتبة أولاد الشيخ للتراث</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Psychology\elbaramij irchadiya\elbaramij irchadiya.jpg" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				نظرا لأهمية الإرشاد النفسي و التوجيه التربوي وإعتباره عاملا أساسيا في التوجيه على وفق متطلبات النمو النفسي و العقلي و الإجتماعي , فقد توجب الأخذ بالإتجاه العلمي في التخطيط البشري وهو ما يسمى بالتوجيه و الإرشاد, ومن خلال معرفتنا للإرشاد النفسي و التوجيه التربوي و الخدمات التي يقدمها في كونه عملية توعية للأفراد تساهم على التبصر والإسهام و المشاركة داخل الجماعة, وأن فعل التوجيه يغدو أعمق من الإرشاد كما راى "مورتنس" من ان الإرشاد يعد محور خدمات التوجيه و لكنه ليس برنامجا كاملا للتوجيه ولكنه يمثل الجانب التطبيقي.			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Psychology\elbaramij irchadiya\elbaramij irchadiya.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Psychology\elbaramij irchadiya\elbaramij irchadiya.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>