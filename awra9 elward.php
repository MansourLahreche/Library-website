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
	<title>تحميل كتاب أوراق الورد</title>
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
	<center><h2>تحميل كتاب أوراق الورد</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>مصطفى الصادق الرافعي</h3><br><h3>الثقافة </h3><br><h3>اللغة العربية</h3><br><h3>وكالة الثقافة العربية</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Literary Books\awra9 elward\awra9 elward.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				"أوراق الورد" هو طائفة من الخواطر المنثورة في فلسفة الجمال والحب, أنشأه الرافعي ليصف حالة من حالاته ويثبت تاريخاً من تاريخه في فترة من العمر لم يكن يرى لنفسه من قبلها تاريخاً ولا من بعد. ويقول الرافعى إنه جمع في أوراق الورد رسائلها ورسائله, أما رسائله فنعم, ولكن على سبيل المجاز, أما رسائلها فما أدرى موضعها من الكتاب إلا رسالة واحدة وجزازات من كتب ونتفاً من حديثها وحديثه...

بلى, إن في أوراق الورد طائفة من رسائله إليها, ولكنها رسائل لم تذهب إليها مع البريد بل هي من الرسائل التي كان يناجيها بها في خلوته ويتحدث بها إلى نفسه, أو يبعث بها إلى خيالها في غفوة المنى, ويترسل بها إلى طيفها في جلوة الأحلام, إلا رسالتين أو ثلاثاً مما في أوراق الورد... فلما أتم تأليفها وعقد عقدتها, بعث بها إليها في كتاب مطبوع بعد سبع سنين من تاريخ الفراق!



 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Literary Books\awra9 elward\awra9 elward.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Literary Books\awra9 elward\awra9 elward.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right	;"><button id="titre">Log Out</button></a>
</body>
</html>
