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
	<title>تحميل كتاب اختلال العالم</title>
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
	</table><br><br><br>
	<center><h2>تحميل كتاب اختلال العالم</h2></center><br><br><br>
	<center>
	<table>
        <th><h3>امين معلوف</h3><br><h3>السياسة</h3><br><h3>اللغة العربية</h3><br><h3>دار الفارابي</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><t/td></td></td><td></td>
		<td><img src="Political Books\ikhtilal el3alm\ikhtilal el3alm.jpg" id="img"></td>
	</tr></center>
</table></center><br><br><br>
<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>في مطلع القرن الواحد والعشرين تظهر على العالم علامات اختلال عديدة. اختلال فكري يتميز بانفلات المطالبات المتعلقة بالهويات من عقالها، مما يجعل من العسير استتباب أي تعايش متناغم وأي نقاش حقيقي. وكذلك اختلال اقتصادي ومالي يجر الكوكب بأسره إلى منطقة من الاضطرابات يتعذر التكهن بنتائجها ويجسد بحد ذاته عوارض اضطراب في نظامنا القيمي. وأخيراً اختلال مناخي ناجم عن فترة طويلة من الممارسات غير المسؤولة...

                هل البشرية بلغت "عتبة إفلاسها الأخلاقي"؟
                
                في هذا الكتاب يسعى الكاتب إلى فهم أسباب بلوغنا هذا الدرك وكيفية الخروج منه. إن اختلال العالم في نظره مرتبط بحالة الإنهاك المتزامنة للحضارات كافة وبخاصة المجموعتين الثقافيتين اللتين يدّعي العالم نفسه الانتماء إليهما ألا وهما الغرب والعالم العربي، أكثر من ارتباطه بـ "حرب الحضارات". المجموعة الأولى تعتورها قلة وفائها لقيمها الخاصة؛ أما الثانية فواقعة في شرنقة مأزقها التاريخي.
                
                إنه لتشخيص مثير للقلق غير أنه يفضي إلى بارقة أمل: الفترة العاصفة التي دخلناها قد تقودنا إلى صوغ رؤية ناضجة في النهاية حول انتماءاتنا ومعتقداتنا وتبايناتنا وكذلك حول مصير الكوكب الذي يعنينا جميعاً.
                
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\ikhtilal el3alm\ikhtilal el3alm.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\ikhtilal el3alm\ikhtilal el3alm.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
