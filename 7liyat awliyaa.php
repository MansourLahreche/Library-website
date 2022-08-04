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
	<title>تحميل كتاب حلية أولياء</title>
	<link rel="icon" href="icon.jpg">
</head>
<body>
<center>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Historical Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
				<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>

	<center><h2>تحميل كتاب حلية أولياء</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>أحمد بن عبد الله الأصفهاني أبو النعيم</h3><br><h3>سير وتراجم وحياة الأعلام من الناس </h3><br><h3>اللغة العربية</h3><br><h3>السعادة مصر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\7liyat awliyaa\7liyat awliyaa.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				يُبين أبو نعيم في مقدمة كتابه: "حلية الأولياء" أنه قصد من تأليفه ذكر أعلام "المُتحقِّقين وترتيب طبقاتهم من النُّسَّاك ومَحجَّتهم، مِن قرن الصحابة والتابعين وتابعيهم ومن بعدهم ممن عرَف الأدلة والحقائق، وباشر الأحوال والطرائق، وساكَن الرياض والحدائق، وفارَق العوارض والعلائق، وتبَرَّأ من المتنطعين والمتعمقين، ومن أهل الدعاوي مِن المُتسوِّفين من الكسالى والمتثبطين المتشبهين بهم في اللباس والمقال، والمخالفين لهم في العقيدة والفِعال، وذلك لما بَلَغك مِن بَسْط لساننا ولسان أهل الفقه والآثار في كل القُطر والأمصار في المُنتسبين إليهم مِن الفَسَقَة والفُجَّار، والمُباحيَّة والحَلُولية، وليس ما حَلَّ بالكذبة مِن الوقيعة والإنكار، بقادحٍ في منقبة البَرَرة الأخيار، وواضعٍ مِن درجة الصفوة الأبرار، بل في إظهار البراءة مِن الكذابين والنكير على الخونة البطالين نزاهةً للصادقين ورفعةً للمتحققين، ولو لم نكشفْ مِن مخازي المبطلين ومساويهم ديانةً، لَلَزمَنا إبانتها وإشاعتها حمايةً وصيانةً، إذ للأسلاف في العلم المنشور، والصيتُ والذِّكْر المشهور". 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\7liyat awliyaa\7liyat awliyaa.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Historical Books\7liyat awliyaa\7liyat awliyaa.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style= "float: right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
