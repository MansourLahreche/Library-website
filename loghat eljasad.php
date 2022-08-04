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
	<title>تحميل كتاب لغة الجسد</title>
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
	<center><h2>تحميل كتاب لغة الجسد</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>بيتر كلينتون</h3><br><h3>التنمية البشرية وتطوير الذات</h3><br><h3>اللغة العربية</h3><br><h3>مكتبة جرير</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Psychology\loghat eljasad\loghat eljasad.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				لغة الجسد تلك الحركات التي يقوم بها بعض الأفراد مستخدمين أيديهم أو تعبيرات الوجه أو أقدامهم أو نبرات صوتهم أو هز الكتف أو الرأس، ليفهم المخاطَب بشكل أفضل المعلومة التي يريد أن تصل إليه وهناك بعض الأشخاص الحذريين والأكثر حرصًا وأولئك الذين يستطيعون تثبيت ملامح الوجه وأولئك الذين لا يريدون الإفصاح عما بداخلهم فهم المتحفظون ولكن يمكن أيضًا معرفة انطباعاتهم من خلال وسائل أخرى.			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Psychology\loghat eljasad\loghat eljasad.pdf"><button  id="titre">Reading PDF</button></a>
	<a href="Psychology\loghat eljasad\loghat eljasad.rar"><button  id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>

		
