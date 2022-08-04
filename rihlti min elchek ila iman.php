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
	<title> تحميل كتاب رحلتي من الشك الى الايمان</title>
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
	<center><h2>تحميل كتاب رحلتي من الشك الى الايمان</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>مصطفى محمود</h3><br><h3>	أوراق المؤتمرات والملتقيات العلمية</h3><br><h3>اللغة العربية</h3><br><h3>دار العودة</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Scientific Books\rihlti min elchek ila iman\rihlti min elchek ila iman.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>ل شئ في عالم اليوم يحمل في باطنه ما يحملنا على الشك والإيمان في ذات الوقت!.. فهذا "العلم" وتقدمه الواسع الآفاق قد يغرى البعض بالنظر إلى الدين وكأنه بغيباته شئ من الخرافات العتيقة.. وقد ترى فيه البعض سببا أكيدا و مباشرا على قدرة الخالق الواحد عز وجل، تكون تطبيقا لقول الله عز وجل "إنما يخشى الله من عباده العلماء".. وهنا نجد في الصورة الشك واليقين تولدا من ذات النقطة، ولكنهما بعد ذلك طريقان أبدا لن يلتقيا.. فهما نقيضان والهوة بينهما شاسعة فلا يصلح إجتماعها بحال من الأحوال. والرحلة بين طرفي النقيض تستلزم إرادة قوية وعقل منير وقلب سليم.. وقد تتطلب بعد ذلك قدرة كبيرة على الشرح والجدل والوصف لتبين ما حدث من إنقلاب وتوازن يعقبه، وهذا هو ما توافر لدى المفكر الطبيب "مصطفى محمود" الذي شاء له القدر أن يعبر هذا النفق المظلم ويصل إلى نهايته لدى النور بازعا فيذوق حلاوة الإيمان، ويحدثنا عنها في كتابه هذا بل في كافة كتبه.. ولكنه لا يقصها كبيرة ذاتيه وإنما يعرضها قضايا فلسفية مليئة بالمشكلات وحلولها. وهو في هذا الكتاب نجده يمسك بقضية "الله" عز وجل متتبعا لها من نقطة الإلحاد أو الكفر بالذات الألهية... وصولا إلى الايمان بها والتعلق قلبا وقالبا بكل ما يمت لذلك بصلة، فهو يعرضها كمؤمن طوع الفلسفة لإيمانه أو فيلسوف عرف الإيمان قلبه.
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Scientific Books\rihlti min elchek ila iman\rihlti min elchek ila iman.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Scientific Books\rihlti min elchek ila imanm\rihlti min elchek ila iman.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
<div>