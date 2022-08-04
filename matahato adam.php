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
	<title>تحميل كتاب متاهة آدم</title>
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
	<center><h2>تحميل كتاب متاهة آدم</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>برهان الشاوي</h3><br><h3>الروايات و القصص الأدبية</h3><br><h3>اللغة العربية</h3><br><h3>الدار العربية للعلوم ناشرون</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Novels\matahato adam\matahato adam.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
                تشكل رواية "متاهة آدم" للشاعر والكاتب الروائي العراقي بُرهان شاوي المتاهة الأولى، والأساس، والمدخل إلى سلسة رواياته التي تحمل اسم "المتاهات"؛ متاهة آدم، متاهة حواء، متاهة قابيل، متاهة الأشباح، متاهة إبليس، ومتاهة الأرواح المنسية... والمفتوحة على التيه... وعلى متاهات جديدة.

                في هذه الرواية، التي تشكل المدخل إلى المتاهات التي تلتها، يعتمد الروائي بُرهان شاوي على تقنية "الماتروشكا" الروسية والصندوق الصيني، حيث تتداخل الروايات، ليس على طريقة ألف ليلة وليلة، حيث تروي شهرزاد رواياتها المتداخلة والمختلفة، وإنما تتداخل الروايات هنا لتعيد نفسها في زمان ومكان مختلف، وبأسماء شخصيات جديدة، لكنها تعيد دورة الأشياء البشرية، وجوهر الأحداث، نفسها.
                            </h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Novels\matahato adam\matahato adam.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Novels\matahato adam\matahato adam.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
