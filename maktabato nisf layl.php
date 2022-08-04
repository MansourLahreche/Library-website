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
	<title>تحميل كتاب مكتبة منتصف الليل</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Novels</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب مكتبة منتصف الليل</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>مات هيغ</h3><br><h3>الروايات و القصص الأدبية</h3><br><h3>اللغة العربية</h3><br><h3>عصير الكتب</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Novels\maktabato nisf layl\maktabato nisf layl.jpg" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				بين الحياة والموت هنالك مكتبة، وفي تلك المكتبة، تمتد الرفوف بلا نهاية. كلّ كتاب يقدّم فرصة لتجربة حياة أخرى. لاستكشاف ما يمكن أن يحدث بعد اتخاذك لقرارات أخرى ... إن سنحت لك الفرصة للعودة للوراء ومحو ندمك، هل ستغيّر شيئًا؟"

عندما وجدت نورا سييد نفسها في مكتبة منتصف الليل، سنحت لها فرصة أخرى لتصحيح أخطائها. حتى الآن، كانت حياتها مليئة بالتعاسة والندم. شعرت أنها خذلت كلّ مَن حولها، وخذلت نفسها أيضًا. ولكن الأشياء توشك على التحوّل.

الكتب في مكتبة منتصف الليل مكّنت نورا من عيش حياة جديدة، كما لو أنها اتخذت قرارات مغايرة. بمساعدة صديقة قديمة، بإمكانها الآن محو كل أخطائها لتصل إلى حياتها المثاليّة. ولكن القصة لا تنتهي كما توقعتها، وقريبًا ستتسبّب قرارات نورا في تعريض نفسها والمكتبة إلى خطر كبير.

وقبل فوات الأوان، يتوجّب على نورا الإجابة عن السؤال الأزلي: ما هي الطريقة الأفضل للعيش؟
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Novels\maktabato nisf layl\maktabato nisf layl.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Novels\maktabato nisf layl\maktabato nisf layl.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>
		
