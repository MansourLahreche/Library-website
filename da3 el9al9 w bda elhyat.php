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
	<title>تحميل كتاب دع القلق و ابدأ الحياة</title>
	<link rel="icon" href="icon.jpg">
</head>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Psychology Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2>تحميل كتاب دع القلق و ابدأ الحياة</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>ديل كارنيجي</h3><br><h3>علم النفس </h3><br><h3>اللغة العربية</h3><br><h3>مكتبة خانجي</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Psychology\da3 el9al9 w bda elhyat\da3 el9al9 w bda elhyat.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				كتاب يعالج حقائق عظيمة، يعالج مشاعر وأفكار الإنسان الأولية. إنه رائع في القراءة وسهل عند التطبيق. والأهم من ذلك كله، إنه يستطيع تغيير حياتك. لقد استفاد الملايين من هذا الكتاب الشيق إذ استطاعوا التغلب على مشاكلهم المستعصية وكسبوا الثقة والطمأنينة، ذلك لأن طرق دايل كارنغي المجربة ساعدت على تخطي عادة القلق إلى الأبد. إن طرق دايل كارنغي ستفيدك أيضاً، فهو يقدم إليك باقة من الصيغ العملية التي يمكنك استخدامها في الحال، هذا فضل عن إيراده لقصص شائقة تخص شخصيات معروفة سردها بتعابير بسيطة أظهرت كيف توقف هؤلاء عن القلق وانطلقوا للحياة بأمل كبير. إنه يبين لك كيف تصبح سعيداً في حياتك الخاصة والعامة ويرشدك إلى تحديد هدفك في الحياة واكتشاف مواهب لديك لم تكن تدرك وجودها. في حياة كارنغي ذاتها إشارة كافية للوسائل التي تساعد على هجر القلق، فقد بدأ حياته بائعاً للشاحنات وأصبح، بعد إجادته لفن الخطابة وتمكنه من أصول العلاقات الإنسانية، أن يصبح الكاتب الأكثر شهرة في الولايات المتحدة وفي العالم. إذن، دعه يساعدك على تحسين شروط حياتك، فليس هناك أي داع للعيش مع القلق الذي يعيق كل حياة هانئة وسعيدة.			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Psychology\da3 el9al9 w bda elhyat\da3 el9al9 w bda elhyat.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Psychology\da3 el9al9 w bda elhyat\da3 el9al9 w bda elhyat.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
