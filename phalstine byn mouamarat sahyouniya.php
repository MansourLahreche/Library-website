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
	<title>تحميل كتاب فلسطين بين المؤامرات الصهيونية و الاستعمار</title>
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
	<center><h2>تحميل كتاب فلسطين بين المؤامرات الصهيونية و الاستعمار</h2></center><br><br><br>
	<center>
	<table>
        <th><h3>د. حسن صبري الخولي</h3><br><h3>السياسة</h3><br><h3>اللغة العربية</h3><br><h3> دار التحرير للطبع والنشر</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><t/td></td></td><td></td>
        <td><img src="Political Books\phalstine byn mouamarat sahyouniya\phalstine byn mouamarat sahyouniya.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>يستعرض لنا دكتور حسن صبري الخولي، تاريخ فلسطين في ظل المؤامرات الصهيونية والاستعمارية، فيبدأ بالحديث علاقة الاستعمار بالصهيونية، ولماذا وعد بلفور، وكذلك يستعرض لنا محاولات تهويد فلسطين. ثم ينتقل بعد ذلك للحديث عن علاقة الولايات المتحدة الأمريكية بالصهيونية ومقدمات قيام دولة إسرائيل، ويناقش كذلك القضية الفلسطينية في نظر الأمم المتحدة، وكذلك موقف الملوك والرؤساء العرب، ويتطرق للحديث عن حرب 1967، وقبلها حرب 1948م، ويتميز الكتاب بأنه يحتوي على العديد من الملاحق التي توضح العديد من القضايا مثل ملحق وصية يهوه لشعبه المختار، وملحق ميثاق عمر بن الخطاب ووصية أبي بكر، وملحق طرد اليهود من البلاد التي يقيمون فيها، وملحق يحوي عدد من الاقتباسات من بروتوكولات حكماء بني صهيون، ومحلق رسائل الملوك العرب والحكام إلى شعب فلسطين وغير ذلك من الملاحق المختلفة
                
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\phalstine byn mouamarat sahyouniya\phalstine byn mouamarat sahyouniya.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\phalstine byn mouamarat sahyouniya\phalstine byn mouamarat sahyouniya.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>