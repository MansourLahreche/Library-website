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
	<title>تحميل كتاب الصداقة و الصديق</title>
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
	<center><h2>تحميل كتاب الصداقة و الصديق</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>أبو حيان التوحيدي</h3><br><h3>أول الخلفاء الراشدين أبو بكر الصديق </h3><br><h3>اللغة العربية</h3><br><h3>آفاق للنشر و التوزيع</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Literary Books\elsada9a w elsadi9\elsada9a w elsadi9.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				ما هي قيمة هذه الرسالة؟ وما هو مكانها بين آثار أبي حيان التوحيدي؟ وما هي نظرة التوحيدي إلى الصداقة والصديق؟ تلك أسئلة تدور في خلد الباحث بعد قراءته هذه الرسالة الفريدة من نوعها في الأدب العربي. إن للتوحيدي شخصيتين: ذاتية وموضوعية. عبّر في الأولى عن نوازعه الوجدانية والعاطفية، وعبّر في الثانية عما رأى وسمع وشارك به من أحداث عصره ومشاكله، وكان أسلوبه في كلا الحالتين أسلوباً فنياً منمقاً راقياً، ورسالة الصداقة تعكس هاتين الشخصيتين شأن بقية آثار التوحيدي، وان كان يخيّل للباحث لأول وهلة أن التوحيدي أبعد من أن يعبّر عن نفسه وعن عصره في كتاب جمع فيه ما قيل في الصداقة والصديق منذ عصور الجاهلية إلى نهاية القرن الرابع عشر.


 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Literary Books\elsada9a w elsadi9\elsada9a w elsadi9.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Literary Books\elsada9a w elsadi9\elsada9a w elsadi9.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
