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
	<title>تحميل كتاب الجيوسياسية الجديدة</title>
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
	<center><h2>تحميل كتاب الجيوسياسية الجديدة</h2></center><br><br><br>
	<center>
	<table>
        <th><h3>فرنسوا جيريه</h3><br><h3>علوم سياسية وإستراتيجية</h3><br><h3>اللغة العربية</h3><br><h3>المجلة العربية - الرياض _ السعودية</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><t/td></td></td><td></td>
        <td><img src="Political Books\jyousiyasiya jadida\jyousiyasiya jadida.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>كتاب الجيوسياسية الجديدة pdf للكاتب فرنسوا جيريه , دخل العالم منطقاً جديداً من الحرب والسلم منذ سقوط جدار برلين. فنحن بصدد "ثورة في الأعمال العسكرية" لدى جيوش القوى العظمى، وتحديداً جيش الولايات المتحدة الأمريكية: تقدم تكنولوجي مذهل، وتنظيمات جديدة. ويتعلق الأمر في الوقت عينه بطريقة التعامل مع التهديدات المستجدة والبحث عن شروط إرساء سلام دائم وفق قواعد اللعبة الدولية الجديدة. استمتع بقراءة كتاب الجيوسياسية الجديدة اونلاين او قم بتحميله مجانا
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\jyousiyasiya jadida\jyousiyasiya jadida.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\jyousiyasiya jadida\jyousiyasiya jadida.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
