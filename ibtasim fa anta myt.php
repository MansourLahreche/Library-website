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
	<title>تحميل كتاب ابتسم فأنت ميت</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Literary Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب ابتسم فأنت ميت</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>حسن الجندي</h3><br><h3>روايات وقصص الرعب والإثارة والتشويق </h3><br><h3>اللغة العربية</h3><br><h3>غير محدد</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Literary Books\ibtasim fa anta myt\ibtasim fa anta myt.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				كتاب ابتسم فأنت ميت تاليف الكاتب حسن الجندي . انتفض الجميع فى أماكنهم مع صوت الطرقات خاصة "سيد" الذى صرخ: إيه ده؟!!!لم يكد صدى الطرقات يتلاشى حتى جاء من الممر المؤدى للحمام صوت رجل يصرخ، هنا هب "صادق" و"أمجد" واقفين متسعى الأعين ، أما "سيد" فكاد يتعثر ويسقط وهو يتراجع بفزع مردداً بعض الآيات القرآنية بصوت مسموع.

 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Literary Books\ibtasim fa anta myt\ibtasim fa anta myt.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Literary Books\ibtasim fa anta myt\ibtasim fa anta myt.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>