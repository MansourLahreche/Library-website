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
	<title>تحميل كتاب مائة من عظماء أمة الإسلام</title>
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
	<center><h2>تحميل كتاب مائة من عظماء أمة الإسلام</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>إسماعيل بن عمر بن كثير عماد الدين أبو الفداء</h3><br><h3>التاريخ </h3><br><h3>اللغة العربية</h3><br><h3>وزارة الأوقاف والشؤون الإسلامية</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\100 min 3odamaa ouma islam ghyaro majra eltarikh\100 min 3odamaa ouma islam ghyaro majra eltarikh.jpg" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				مائة من عظماء أمة الإسلام غيرو مجرى التاريخ هو كتاب من تأليف الكاتب والباحث الفلسطيني جهاد التؤياني, يتحدث عن 100 عظيم من عظماء الإسلام بعد الأنبياء, ويسلط الضوء على عظماء الإسلام بالمفهوم الشامل(الاستسلام لله واتباع أوامره) وعظماء ما بعد وفاة النبي محمد صلى الله عليه وسلم إلى يومنا هذا مرورا بالخلافة الراشدية والخلافة الأموية والخلافة العباسية والخلافة العثمانية والمماليك والأيوبيين إلى يومنا هذا. 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\100 min 3odamaa ouma islam ghyaro majra eltarikh\100 min 3odamaa ouma islam ghyaro majra eltarikh.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Historical Books\100 min 3odamaa ouma islam ghyaro majra eltarikh\100 min 3odamaa ouma islam ghyaro majra eltarikh.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
