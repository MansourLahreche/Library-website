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
	<title> تحميل كتاب أمن تقنية المعلومات</title>
	<link rel="icon" href="icon.jpg">
</head>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Scientific Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب العقل والحاسوب وقوانين الفيزياء</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>روجر بنروز</h3><br><h3>كتب علمية وتقنية</h3><br><h3>اللغة العربية</h3><br><h3>دار طلاس للدراسات والنشر السلسلة: الثقافة المميزة</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Scientific Books\el3a9l w elhasoub\el3a9l w elhasoub.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>تستطيع الحواسيب اليوم أن تتغلب على أبرع لاعبي الشطرنج، وتتنبأ بالطقس، وتحل مسائل اقتصادية متشابكة، ومسائل رياضية معقدة.. وقد تساءل كثيرون: هل باستطاعة الحاسوب أن يحل يوماً ما محل عقل الإنسان؟

                يجيب أنصار "الذكاء الاصطناعي القوي" عن هذا السؤال بـ "نعم" أما مؤلف هذا الكتاب، الفيزيائي اللامع روجر بنروز، فيحاول عبر عرض شائق لحالة العلم الراهنة أن يثبت أن في عقل الإنسان من القوى ما لا يمكن لآلة أن تبلغها.
 
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Scientific Books\el3a9l w elhasoub\el3a9l w elhasoub.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Scientific Books\el3a9l w elhasoub\el3a9l w elhasoub.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>