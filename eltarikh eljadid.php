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
	<title>تحميل كتاب التاريخ الجديد</title>
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
	<center><h2>تحميل كتاب التاريخ الجديد</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>جاك لوغوف</h3><br><h3>التاريخ </h3><br><h3>اللغة العربية</h3><br><h3>وزارة الثقافة</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Historical Books\eltarikh eljadid\eltarikh eljadid.jpg" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				هو عمل جماعي يشتمل على عشرة مقالات ومقدمتين، وتتميز المقالات التي يحتويها الكتاب بالغزارة في الأفكار ومحاولة أسلوبية أنيقة وجذابة، ترمي إلى الإيجاز البليغ، وتعتمد الترميز والاستعارة والجمل الاعتراضية، وتبدو النصوص على اختلاف مؤلفيها كما لو أنها صيغت بقلم واحد، وهو ما أعطى لهذا العمل ترابطاً في المحتوى وتناسقاً في الشكل، والكتاب هام للباحثين والمختصين بالمجال، فيه تجميع لأطروحات وأفكار رواد الكتابة التاريخية من مختلف التيارات والمشارب الفكرية في إطار الفضاءات التي يشغلها التاريخ الجديد.

 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Historical Books\eltarikh eljadid\eltarikh eljadid.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Historical Books\eltarikh eljadid\eltarikh eljadid.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>