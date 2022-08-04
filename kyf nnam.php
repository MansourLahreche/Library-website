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
	<title> تحميل كتاب كيف ننام؟ </title>
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
	<center><h2>تحميل كتاب كيف ننام؟</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>أ. أرنوف و د.أودييت</h3><br><h3>	أوراق المؤتمرات والملتقيات العلمية</h3><br><h3>اللغة العربية</h3><br><h3>رؤية للنشر والتوزيع</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Scientific Books\kyf nnam\kyf nnam.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>ينام الجنين في الرحم، ويخرج إلى الوجود نائماً؛ ليظل الشهور الأولى من عمره, وهو أغلب الوقت مستسلم للنوم، لا يميز بين النهار والليل قبل أن ينتظم إيقاع نومه ليلاً. وتتواصل حياة الشخص لتقلَّ ساعات نومه. لكن ما هو النوم؟ هل تتوقف الحياة خلاله؟ أم هو مرحلة استراحة؟ ما هي فوائده؟ وما مكانة الأحلام داخله؟ تتضافر العديد من العلوم؛ لمحاولة الإجابة عن هذه التساؤلات وغيرها مما يتصل من بعيد، أو قريب بهذه العملية المعقدة رغم بساطتها الظاهرة المتمثلة في النوم.
 
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Scientific Books\kyf nnam\kyf nnam.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Scientific Books\kyf nnam\kyf nnam.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
