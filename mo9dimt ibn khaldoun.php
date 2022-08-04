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
	<title>تحميل كتاب مقدمة ابن خلدون</title>
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
	<center><h2>تحميل كتاب مقدمة ابن خلدون</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>إبن خلدون</h3><br><h3>الثقافة </h3><br><h3>اللغة العربية</h3><br><h3>دار النهضة مصر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\mo9dimt ibn khaldoun\mo9dimt ibn khaldoun.jpg" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				إن عبقرية ابن خلدون رسالته في تاريخ العالم ومظاهر عظمته فيما خلّفه من آثار وبصمات في عقول العلماء وخاصة في مقدمته، والتي أنشأ فيها علماً جديداً وهو ما يسمى الآن علم الاجتماع أو السوسيولوجيا وأتى فيها بما لم يستطع أحد من قبله أن يأتي بمثله، بل عجز كثير ممن جاء بعده من الأئمة والباحثين وعلماء الاجتماع أن يصلوا إلى رتبته. وهذا إن دلّ على شيء إنما يدلّ على رسوخ قدمه في كثير من العلوم، حتى لم يغادره فرع من فروع المعرفة إلا ألمّ به ووقف على كنهه.

وتتوضح نقاط المقدمة الأساسية في عنوانها، فهي بحث تمهيدي للمعالجات الواسعة التي ضمتها مؤلفات ابن خلدون اللاحقة، أي أنها تقع بالنسبة للعمل قبل المقاطع الأخرى بل تتعلل أولوياتها بشكل أساسي بالنتيجة المنطقية التي تتركها على بنية البحث التالي ذاتها. وهذا يفترض فيها مبتدأ في النحو لأي خبر، والواقع أن التاريخ هو خبر عن الاجتماع الإنساني الذي هو عمران العالم. 


 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\mo9dimt ibn khaldoun\mo9dimt ibn khaldoun.pdf"><button  id="titre">Reading PDF</button></a>
	<a href="Historical Books\mo9dimt ibn khaldoun\mo9dimt ibn khaldoun.rar"><button  id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
