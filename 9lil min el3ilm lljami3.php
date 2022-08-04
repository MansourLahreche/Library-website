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
	<title>تحميل كتاب قليل من العلم للجميع</title>
	<link rel="icon" href="icon.jpg">
</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Scientific Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب قليل من العلم للجميع</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>كلود أليغر</h3><br><h3>كتب علمية</h3><br><h3>اللغة العربية</h3><br><h3>دار طلاس</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Scientific Books\9lil min el3ilm lljami3\9lil min el3ilm lljami3.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>يعتبر هذا الكتاب ملحمة بل ومكتبة متكاملة لكل من تشده المغامرة العلمية ، إنه كتاب تثقيفي عام لإنسان القرن الحادي والعشرين ، يعبر بنا تاريخ الإنجازات العلمية الكبيرة . كتب بلغة مبسطة اعتمدت الأسلوب التاريخي الإنساني الحي لهذه المغامرات التي قادة إلى هذه الاكتشافات العلمية العظيمة ، بعيداً عن استدعاء لغة الرياضيات ، دون التضحية بالدقة والروح العلمية ....
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Scientific Books\9lil min el3ilm lljami3\9lil min el3ilm lljami3.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Scientific Books\9lil min el3ilm lljami3\9lil min el3ilm lljami3.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log out</button><a>
</body>
</html>
<div>