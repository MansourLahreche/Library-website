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
	<title> تحميل كتاب الطريق الى القران</title>
	<link rel="icon" href="icon.jpg">

</head>
<body>
<table border="3" bgcolor="#7884A9">
		<tr>
			<td><a href="main.php"><h1>Home Page</h1></a></td>
			<td width="927"><marquee><h1>Religious Books</h1></marquee></td>
			<td><input type="text" name="search" placeholder="Search..." class="couleur">
			<button>search</button></td>	
		</tr>
		</table></center><br><br><br><br>
	<center><h2> تحميل كتاب الطريق الى القران</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>	
                ابراهيم السكران</h3><br><h3>التربية والتعليم</h3><br><h3>اللغة العربية</h3><br><h3>مركز الفكر المعاصر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Religious Books\eltari9 ila el9ouraan\eltari9 ila el9ouraan.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4> طالما أبهرني حديث بعض الصالحين إذ يتحدثون عما يرونه من فرق مبهر في حياتهم، وعن فرقٍ عظيمٍ في فهمهم وصحة نظرهم وإستقرار تفكيرهم؛ ببركة هذا القرآن الكريم.

                ولطالما أبهرني حديث بعض الصالحين إذ يبثون شجواهم عما يجدونه في أنفسهم بعد تلاوة القرآن الكريم، يتحدثون عن شيء يحسون به، كأنما يلمسونه بحواسهم، من قوة الإرادة في فعل الخيرات والتأبي على المعاصي.
                
                وراحة النفس في صراعات الأفكار والمنافسات الإجتماعية، بل لقد أبهرني فوق ذلك كله تشرّف النبي صلى الله عليه وسلم ذاته بالقرآن الكريم! وسيد ولد آدم يتشرف بكتاب الله تعالى، فانظر كيف يرسم القرآن الكريم حال النبي صلى الله عليه وسلم قبل القرآن الكريم، وحال النبي صلى الله عليه وسلم بعد القرآن الكريم، كما قال تعالى: ﴿ وَكَذَلِكَ أَوْحَيْنَا إِلَيْكَ رُوحاً مِنْ أَمْرِنَا مَا كُنْتَ تَدْرِي مَا الْكِتَابُ وَلَا الْإِيمَانُ﴾ [ سورة الشورى الآية : 52 ]، وقوله الله سبحانه ﴿ نَحْنُ نَقُصُّ عَلَيْكَ أَحْسَنَ الْقَصَصِ بِمَا أَوْحَيْنَا إِلَيْكَ هَذَا الْقُرْآنَ وَإِنْ كُنتَ مِنْ قَبْلِهِ لَمِنْ الْغَافِلِينَ ﴾ [يوسف: 3].
                
 
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Religious Books\eltari9 ila el9ouraan\eltari9 ila el9oraan.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Religious Books\eltari9 ila el9ouraan\eltari9 ila el9oraan.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</ht