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
	<title>تحميل كتاب العبقرية</title>
	<link rel="icon" href="icon.jpg">
</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Historical Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur"">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب العبقرية</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>أندرو روبنسون</h3><br><h3>التاريخ </h3><br><h3>اللغة العربية</h3><br><h3>هنداوي للطباعة والتوزيع</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\el3b9ariya\el3b9ariya.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				إنَّ مفهومَ العبقريَّة مفهومٌ شديدُ الذاتيَّة، غير أنه يتمتع بأهمية ثقافية ويخلب الألباب، فهو يثير في الأذهان الكثيرَ من الأسئلة؛ نظرًا لأننا غالبًا ما نعرفه من خلال الأفراد الذين يتمتعون بقدرات فكرية وإبداعية استثنائية. فهل يُولَد العبقري عبقريًّا أم أنه يُصنَع؟ ما الفرق بين الموهبة والعبقرية؟ وما الصفات التي يجب أن يتحلَّى بها الشخص كي نَصِفَه بالعبقري؟ يتناول أندرو روبنسون — في خِضَمِّ استكشافه لمفهوم العبقرية في الفنون والعلوم — بعضًا من أبرز العباقرة الذين عرَفهم التاريخُ؛ مثل: ليوناردو دا فينشي، وموتسارت، وشكسبير، وداروين، وأينشتاين، ونيوتن. وكذلك غيرهم من العباقرة الذين لم يحظَوْا بمثل هذه الشهرة الواسعة؛ وذلك لتوضيح دور كلٍّ من الموهبة، والوراثة، والتربية، والتعليم، والذكاء، والمرض العقلي، والحظ، وغيرها من العوامل التي تساهم في تكوين شخصية العبقري.  			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\el3b9ariya\el3b9ariya.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Historical Books\el3b9ariya\el3b9ariya.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button>
</body>
</html>	