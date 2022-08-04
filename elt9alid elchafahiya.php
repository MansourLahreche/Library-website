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
	<title>تحميل كتاب التقاليد الشفهية</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Political Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب التقاليد الشفهية</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>	
                لويس جان كالفى</h3><br><h3> ثقافة</h3><br><h3>اللغة العربية</h3><br><h3>دار المعارف</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Political Books\elt9alid elchafahiya\elt9alid elchafahiya.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>كتاب التقاليد الشفهية ذاكرة وثقافة تأليف لويس جان كالفى، يناقش الكاتب في هذه الدراسة تعدد الروايات المنقولة عبر الألسن إلى الصدور، على نحو ما كانت تقول العرب قديما عن حُفّاظ المرويات، فيرى أن تشابه هذه الروايات وحتى التناقض في ما بينها هو، بعبارته، “المبدأ المؤسِس لها” وأن التقليل من شأن طبيعة هذه الروايات قد جاء إلى البحث العلمي من الثقافات المكتوبة عبر الباحثين الذين تخصصوا في الرواية الشفوية بوصفها وثيقة، ونظروا إليها بمعزل عن التقاليد الشفوية التي انبثقت منها مثلما جاءت من التعالي على هذه المجتمعات ثقافيا، وربما كان يقصد بذلك ما يُعرف بالنزعة المركزية الأوروبية.
                
                
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\elt9alid elchafahiya\elt9alid elchafahiya.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\elt9alid elchafahiya\elt9alid elchafahiya.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>