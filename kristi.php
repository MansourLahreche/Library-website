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
	<title>تحميل كتاب كريستي</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Novels</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب كريستي</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>:اجاثا كريستي</h3><br><h3>الروايات و القصص الأدبية</h3><br><h3>اللغة العربية</h3><br><h3>دار نجمة للنشر و التوزيع</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Novels\kristi\kristi.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				
"على نحو فني رائع ودرامي مثير صوّرت لنا الكاتبة العالمية أجاثا كريستي جريمة قتل السيد راتشيت في قطار الشرق عبر رحلة أروبية سريعة, ويتخيل للقارئ للوهلة الأولي أنها جريمة قتل تقليدية من تلك الجرائم المعتادة والتي تكون بدافع شخصي. ولكن الكاتبة هنا ترصد لنا ملامح وتجليات وعبقريات المحقق الدولي السيد هيركيول بوارو وكيف أنه أخذ يحقق في تلك القضية الشائكة, وكيف أنه أخذ يربط بين الأحداث المتشابكة والغامضة في آن واحد حتى وصل إلي الحل. ولم يكن توقف قطار الشرق بسبب الثلوج أمرا عارضا في الرواية, وإنما جاء من أجل الحبكة الدرامية لكي يضفي على الرواية لمسة فنية رائعة. إنني أدعوك عزيزي القارئ أن تقبل على تلك الرواية وأن تركز تركيزا شديدا في كل أحداثها حتى تستفيد من ثرائها بديناميكيات التحقق, وحتى تصبح فردا عالما ببواطن الأمور وخفايا الأسرار, ولكي تعلم علم اليقين أن الجريمة لا تفيد وأن الجاني لن يفلت أبدا من العقاب. حتى وان بدت الظروف غامضة غموض روايتنا هذه."
</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Novels\kristi\kristi.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Novels\kristi\kristi.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
