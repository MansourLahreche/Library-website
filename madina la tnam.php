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
	<title>تحميل كتاب مدينة لا تنام</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Literary Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..."  class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب مدينة لا تنام</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>سليمان بن فهد العودة</h3><br><h3>أدب عربي </h3><br><h3>اللغة العربية</h3><br><h3>فضائل المدينة النبوية</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Literary Books\madina la tnam\madina la tnam.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				هم لا يأتون حتى لو سمعوا بكاء الحروف وارتعاش الورق هم لو كانوا يريدون البقاء لم يرحلوا منذ البداية
ومن منا سلِم من وجع الفقد أو خيبة الخذلان...
ولكن من قال يا سيدي إنه علينا ان نبكي من لا يبكينا ونتذكر من ينسانا وننتظر من لا يفتقدنا..!!
أين الكبرياء من كومة الحنين والانكسار التي تضم هذة النصوص؟؟..

واستوقفني ذكرك للفعل " يكنس" ثلاث مرات فى الصفحات الأولى ..
يكنس الشظايا المكسورة
تكنس حشائش الحزن من قلوبهم
تكنس المكان من بقية احاديثكما وهمومكما

آه لو بالامكان
غسل وجه المكان
وتزيينه بشيء من المكياج!!!
..اى مكياج يُذكر بلغتنا العربية الفصحى فى ديوان شعر ؟؟

انني حين ابكي غيابك تتساقط
من عيني ورود
فيصبح خدي بستاناً!!!
للعلم ..الورود والبستان لا تناسب البكاء والغياب

دع للكبرياء نصيباً فى الأعمال المُقبلة..شكراً


 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Literary Books\madina la tnam\madina la tnam.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Literary Books\madina la tnam\madina la tnam.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>

		
