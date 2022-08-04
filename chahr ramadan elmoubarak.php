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
	<title> تحميل كتاب شهر رمضان المبارك</title>
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
	<center><h2>تحميل كتاب شهر رمضان المبارك</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>كاتب غير محدد</h3><br><h3>الصيام وشهر رمضان</h3><br><h3>اللغة العربية</h3><br><h3>غير محدد</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Religious Books\chahr ramadan elmoubarak\chahr ramadan elmoubarak.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>ففي خلقِ إبليسَ وفي إيجادِهِ وفي إغوائِهِ حكمةٌ عظيمةٌ، إذْ لولاه لم يتميزُ المؤمنُ مِنَ الكافِرِ، ولم يتميز الطيبُ من الخبيثِ، ولم يحصل الولاءُ والبراءُ، ولم يحصل الجهادُ في سبيل الله، ففي وجودِهِ مصالحُ، وإن كان فيه مضرةٌ على مَنِ اتبعه، ولكن في ذلك مصالح عظيمة للمؤمنين الصادقين . الاستعاذةُ باللسانِ لا تكفي ولا تنفع، وإذا استعاذَ بالله من الشيطان، فليترك أعمالَ الشيطان، وأن يبتعدَ عن المعاصي والمخالفات، وأن يتوبَ إلى الله -عز وجل- مما حَصَلَ منه . ومن أشدِّ ما حصلَ للشيطانِ مِنَ الخسارةِ والنكبةِ، بعثهُ محمدٍ -صلَّّى الله عليه وسلم-، فإن اللهَ أنقذَ بِهِ كثيرًا من البشرية، وهداهُم إلى الصراطِ المستقيم، ولا يزالُ الإسلام -ولله الحمد- واضحًا جليًا، يعتصمُ بِهِ من أرادَ اللهُ هدايته ونجاتَهُ مِنَ الشيطانِ، فالطريقُ واضحٌ لمن يريدُ النجاةَ.
 
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
		<a href="Religious Books\chahr ramadan elmoubarak\chahr ramadan elmoubarak.pdf"><button id="titre">Reading PDF</button></a>
		<a href="Religious Books\chahr ramadan elmoubarak\chahr ramadan elmoubarak.rar"><button id="titre">Download</button></a></center>
		<a href="logout.php" style="float:right	;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
