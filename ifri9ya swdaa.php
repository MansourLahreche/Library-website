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
	<title>تحميل كتاب افريقيا السوداء</title>
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
	<center><h2>تحميل كتاب افريقيا السوداء</h2></center><br><br><br>
	<center>
	<table>
        <th><h3>	يوسف روكز</h3><br><h3>السياسة</h3><br><h3>اللغة العربية</h3><br><h3>غير محدد</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><t/td></td></td><td></td>
        <td><img src="Political Books\ifri9ya swdaa\ifri9ya swdaa.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>أفريقيا السوداء سياسة وحضارة يتحدث هذا الكتاب لكاتبه يوسف روكز عن إفريقيا الطبيعية وتكوينها الجيولوجي ، مناخها إقليمها حيواناتها سكانها ونباتاتها ونشاطها الزراعي والمغتربون اللبنانيون فيها وعلاقة دولها الجديدة مع إسرائيل بالإضافة إلى اثأر التراث الاستعماري كما تطرق المؤلف أيضا إلى بعض التاريخ الإفريقي قبل الاستعمار الأوروبي والى مراحل اكتشاف القارة السوداء القديمة الحديثة ثم إلى فترة التجارة بالرقيق وذكره أيضا لأهمية القرن الإفريقي الإستراتيجية وأثر الجاليات اللبنانية في النهضة الحديثة.
                
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\ifri9ya swdaa\ifri9ya swdaa.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\ifri9ya swdaa\ifri9ya swdaa.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
