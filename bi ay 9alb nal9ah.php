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
	<title> تحميل كتاب باي قلب نلقاه</title>
	<link rel="icon" href="icon.jpg">
</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Religious Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب باي قلب نلقاه</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>خالد أحمد أبو شادي</h3><br><h3>يالحكمة والموعظة</h3><br><h3>اللغة العربية</h3><br><h3>غير محدد</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Religious Books\bi ay 9lb nl9ah\bi ay 9lb nl9ah.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>حضارة اليوم وهي تسدد سهام خداعها صوب القلوب الغافلة لتصيب لُبها ، تحتاج إلى درع حصينة تتكسر عليه ، فأعينوني بقوة أجعل بينكم وبينهم ردما ، وما هذه الدرع سوى تربية إيمانية راسخة تورث النظر في العاقبة واليقين بالآخرة ، والتنافس في الخيرات والزهد في الفانيات ولا يتم ذاك إلا إذا رد الله إليك روحك ، وما أشبه هذه الحضارة ببساط يسحب الناس ببطء تجاه نهايتهم المحتومة ، وهم عنها غافلون وبغيرها مشتغلون ، والشيطان يرقص بينهم فرحاً ، ويقهقه وهو يشدهم بعيداً عن طريق النجاة ، حتى إذا ما وقعت بهم الداهية أفاقوا لكن هناك على أعتاب الحساب وفي ظلمة القبر ؛ فيا إخوان أترضون أن يكون هذا حالكم تغفلون تغفلون ثم تموتون فتندمون ! 
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Religious Books\bi ay 9lb nl9ah\bi ay 9alb nal9ah.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Religious Books\bi ay 9lb nl9ah\bi ay 9alb nal9ah.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right	;"><button id="titre">Log Out</button></a>
</body>
</html>

