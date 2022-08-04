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
	<title> تحميل كتاب عاصفة في كوب شاي</title>
	<link rel="icon" href="icon.jpg">
</head>
<body>

<center>
	<center>
	<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Scientific Books</h1></marquee></td>
			
			<td><form>
				<input type="text" name="search" placeholder="Search..." class="couleur">
				<button type="submit" name="btn-search">search</button>
			</form>
			</td>	
		</tr>
		</table></center><br><br><br><br>


	
	<center><h2>تحميل كتاب عاصفة في كوب شاي</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>	هيلين تشيرسكي</h3><br><h3>كتب علمية</h3><br><h3>اللغة العربية</h3><br><h3>شركة ودار شفق للنشر والتوزيع</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Scientific Books\3asifa fi kwb chay\3asifa fi kwb chay.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>جمع كتاب "عاصفة في كوب شاي: فيزياء الحياة اليومية" بين عناصر التشويق العلمي الغزير والحيوية الساحرة فى وصف التجارب الحياتية اليومية وكيفية ارتباطها بالقوانين الفيزيائية.
				وتستعرض فيه مؤلفته العالمة الفيزيائية د. هيلين تشيرسكى الأدوات التى ستغير منظورنا لكل ما يحيط بنا من مظاهر وأحداث نألفها جميعا مثل انتفاخ الفشار وبقع القهوة ومغناطيس الثلاجة، وربط ذلك بأفكار كبرى كالتغيير المناخي وأزمة الطاقة العالمية أو الفحوص الطبية الحديثة
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Scientific Books\3asifa fi kwb chay\3asifa fi kwb chay.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Scientific Books\3asifa fi kwb chay\3asifa fi kwb chay.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float: right;"><button id="titre">Log Out</button></a>
</body>
</html>