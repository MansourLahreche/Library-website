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
	<title>تحميل كتاب  فقه الديمقراطية</title>
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
	<center><h2>تحميل كتاب فقه الديمقراطية</h2></center><br><br><br>
	<center>
	<table>
        <th><h3>د. عادل مصطفى</h3><br><h3>سياسة</h3><br><h3>اللغة العربية</h3><br><h3>غير محدد</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><t/td></td></td><td></td>
        <td><img src="Political Books\fi9h dimo9ratiya\fi9h dimo9ratiya.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>كتاب فقه الديمقراطية تأليف د. عادل مصطفى، اقتران الفقه بالديموقراطية يبدو كمزحة لمن يعرف ممانعة الفقهاء للديموقراطية إلى درجة اعتبارها كفراً، ولكن المؤلف هنا يركز على المعنى اللغوي للكلمة، كيف نفهم الديموقراطية؟ كيف نفقهها؟ وخاصة في هذه الفترة العصبية، والدول العربية تخرج من قلب الثورات وتحاول بناء نظام سياسي جديد، يستبدل النظام السابق الذي نخرته الشمولية والفساد. 
                الكتاب قبل أن نشرع في محتواه ليس جديداً، لم يكتبه المؤلف استجابة للظروف، وإنما كتبه قبل سبع سنوات، وهذا ربما يطمئن القارئ على أن المحتوى قد لا يكون تجميعاً سريعاً لأفكار تستجيب لظروف السياسة وتغيراتها.
                
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\fi9h dimo9ratiya\fi9h dimo9ratiya.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\fi9h dimo9ratiya\fi9h dimo9ratiya.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
