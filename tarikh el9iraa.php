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
	<title>تحميل كتاب تاريخ القراءة</title>
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
	<center><h2>تحميل كتاب تاريخ القراءة</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>ألبرتو مانغويل</h3><br><h3>التاريخ </h3><br><h3>اللغة العربية</h3><br><h3>دار الساقي للطباعة والنشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\tarikh el9iraa\tarikh el9iraa.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				ينطلق الكاتب عبر رحلة في تاريخ القراءة يسجل فيها تجربته كقارئ، ومن ثم ينسحب إلى قرن بعيد مندثر، إنه يتجاهل فصولاً، ويستعرض كتباً، ويعود إلى موضوعات معينة، ويرفض الانصياع للنظام المتعارف عليه عند البحث في موضوع كموضوع القراءة. فصولٌ يعرض من خلالها المؤلف تاريخ القراءة بأسلوب فلسفي وبإحساس مشبع بالعاطفة، وكأنه يروي حكاية الحب العظيم بين الإنسان والكتب، وساعده في ذلك مقدراته الهائلة على التصوير، المقترنة بمقدرات وكفاءات المثقف العالم ليفتح الكتاب بذلك الأبواب من أجل الدخول إلى عالم محفوف بالأسرار كي لا يترك القارئ لحظة واحدة وحيداً على الرغم من كثرة المعلومات والاقتباسات والملاحظات القيمة التي يتحف القارئ بها.

 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\tarikh el9iraa\tarikh el9iraa.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Historical Books\tarikh el9iraa\tarikh el9iraa.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
