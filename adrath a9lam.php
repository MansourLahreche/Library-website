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
	<title>تحميل كتاب أضغاث أقلام</title>
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
	<center><h2>تحميل كتاب أضغاث أقلام</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>ادهم شرقاوي</h3><br><h3>أدب عربي </h3><br><h3>اللغة العربية</h3><br><h3>دار الكلمات للنشر والتوزيع</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Literary Books\adrath a9lam\adrath a9lam.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				هي "أضغاث أقلام" يكتبها أدهم شرقاوي/ قس بن ساعدة تخرق تقاليد النص الإبداعي التي تحيل على السجل الجمالي الرومانسي باتجاه خلق قواعد جديدة للإحالة والتلقي والإستجابة، لذلك كله سنقرأ نصوصاً إشكالية تختلف عن غيرها من النصوص التقليدية سواء على مستوى (الفكرة) أو (الشكل) مصاغة بأسلوب أكثر جرأة وخبرة، وعلى مقاس فني مغاير.

يتألف الكتاب من (340) مقطعاً شعرياً، يحمل كل مقطع فكرته ورسالته ورؤيته. نقرأ منها:
"في الحب يتحدثُ الرجل عن انتصاراته/ وتتحدث المرأة عن هزائمها/ فالرجل أجبن من أن يقول: دمرتني امرأة/ والمرأة أدهى من أن تقول دمرتُ رجلاً!"
"وحين علمتُ أن الورق يأتي من الخشب/ صرت أرى الشجرة دفتراً/ والغابة مكتبة/ والحطّاب عاملاً في مطبعة!".
إذا عيّرك الناس ببطئك فأخبرهم أنك تعرف إلى أين تسير/ هذا ما قالته السلحفاة لإبنها وهي تحضره للحياة!".
كل هروب يلزمه بالضرورة جبان/ وحده الهروب إلى الله حرفة الشجعان".


 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Literary Books\adrath a9lam\adrath a9lam.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Literary Books\adrath a9lam\adrath a9lam.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right	;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
