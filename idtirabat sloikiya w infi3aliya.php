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
	<title>تحميل كتاب الاضطرابات السلوكية و الانفعالية</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Psychology Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب الاضطرابات السلوكية و الانفعالية</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>دخولة أحمد يحيى</h3><br><h3>علم النفس </h3><br><h3>اللغة العربية</h3><br><h3>دار الفكر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Psychology\idtirabat sloikiya w infi3aliya\idtirabat sloikiya w infi3aliya.jpg" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				من الطبيعي القول ان الإعداد السليم للطفل انما هو تمهيد لإعداد أب وأم المستقبل الخالين من شوائب الترهات والاباطل وبمنأى عن الارتجال، كما من البديهي القول ايضا ان ما من احد من الآباء الا ويريد لطفله مستقبلا باهرا ونجاحات مضطردة في الحياة وعلى مختلف الصعد، وهم لا يدخرون جهدا في سبيل هذه الغاية ولكن كيف السبيل وهم يعتقدون انهم قد فعلوا ما بوسعهم الم يقدموا له المأكل والشرب والنظافة والرعاية غير ان الحقيقة غير ذلك تماما، فهنالك امور في غاية الاهمية يجب العناية بها عند الطفل بالاضافة الى الامور التي تم ذكرها آنفا، فيجب ان لا ننسى انه انسان بكل ما للكلمة من معنى، له الاحاسيس والمشاعر التي يجب مراعتها وتهذيبها منذ نعومة اظافره والا تعرض لاضطرابات انفعالية وسلوكية هددت كل الامال والاحلام التي تربو لها الاسرة ويسعى اليها المجتمع السليم.			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Psychology\idtirabat sloikiya w infi3aliya\idtirabat sloikiya w infi3aliya.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Psychology\idtirabat sloikiya w infi3aliya\idtirabat sloikiya w infi3aliya.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>

		
