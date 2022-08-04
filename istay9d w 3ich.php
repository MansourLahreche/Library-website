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
	<title>تحميل كتاب استيقظ و عش</title>
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
	<center><h2>تحميل كتاب استيقظ و عش</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>دروثي براند</h3><br><h3>التنمية البشرية وتطوير الذات </h3><br><h3>اللغة العربية</h3><br><h3>وكالة الصحافة العربية</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Literary Books\istay9d w 3ich\istay9d w 3ich.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				تمثل الكاتبة الأمريكية "دوروثي براند" ظاهرة استثنائية في الكتابة، رغم أن عدد كتبها المنشورة لم يزد على ثلاثة، وهو عدد قليل حقًا لكنه كبير القيمة والأثر وفي هذا الكتاب حاولت الكاتبة أن تنقل خبرتها الطويلة إلى القراء، وخصوصًا في المجال الذي أطلقت عليه اسم (فن تحقيق الأهداف وإصابة النجاح) وبتعبير آخر فن مقاومة الفشل، من خلال أساليب اتبعتها في حياتها العملية، وكانت النتيجة كما قالت: وجدت نفسها تفعل ما كان يلوح لها من قبل مستحيلًا فى سهولة ويسر، وجدت العوائق التي كانت تبدو عصية التخطي تذوب كذوبان الجليد، رأت قناع الجبن والخجل والتردد الذي قيدها سنوات طويلة يسقط منها كسقوط القيد الحديدي متى فتح قيده. 

 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Literary Books\istay9d w 3ich\istay9d w 3ich.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Literary Books\istay9d w 3ich\istay9d w 3ich.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>

		
