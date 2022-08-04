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
	<title>تحميل كتاب سير أعلام النبلاء</title>
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
	<center><h2>تحميل كتاب سير أعلام النبلاء</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>محمد بن أحمد بن عثمان بن قايماز الذهبي شمس الدين أبو عبد الله</h3><br><h3>سير وتراجم وحياة الأعلام من الناس </h3><br><h3>اللغة العربية</h3><br><h3>بيت الأفكار الدولية</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\sayr a3lam nobalaa\sayr a3lam nobalaa.jpg" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				هو كتاب تراجم عام اختصره المؤلف من كتابه الكبير " تاريخ الإسلام ووفيات المشاهير والأعلام " المعروف بتاريخ الإسلام
والكتاب مرتب على التراجم بحسب الوفيات ابتداء من الصحابة إلى نهاية القرن السابع الهجري ، وأفرد الجزء الأول والثاني للسيرة النبوية وسير الخلفاء الراشدين ، ولم يضعهما في كتابه " سير أعلام النبلاء ، وإنما أحال بهما على كتابه " تاريخ الإسلام " ، وجاء الناسخ ابن طوفان فلم يستنسخ المجلدين الأول والثاني ، وبدأ الجزء الأول من " سير أعلام النبلاء " بترجمة العشرة المبشرين بالجنة .
ونظم المؤلف كتابه على الطبقات ، فجعله في أربعين طبقة تقريبا ، على أسلوب كتب التراجم الإسلامية ، وأن كل طبقة تعني جيلا كاملا ، وجاءت وفيات التراجم للطبقة الواحدة في الكتاب متداخلة بين طبقة وأخرى ، مع التباين الكبير في المدة الزمنية التي تستغرقها كل طبقة ...
وهذا كتاب مهم وعظيم ، يعمد المؤلف فيه إلى البيان الكامل لاسم صاحب الترجمة ، ونسبه ومكانته ، وقيمته العلمية ، ومولده ، ونشأته ، وعلمه ، وشيوخه ، وتلامذته ، وتاريخ المولد والوفاة.


 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\sayr a3lam nobalaa\sayr a3lam nobalaa.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Historical Books\sayr a3lam nobalaa\sayr a3lam nobalaa.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
