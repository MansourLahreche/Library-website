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
	<title>تحميل كتاب  فقه الثورة</title>
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
	<center><h2>تحميل كتاب فقه الثورة</h2></center><br><br><br>
	<center>
	<table>
        <th><h3>يوسف زيدان </h3><br><h3>سياسة</h3><br><h3>اللغة العربية</h3><br><h3>غير محدد</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><t/td></td></td><td></td>
        <td><img src="Political Books\fi9h thawra\fi9h thawra.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>كلمة "الثورة" في عنوان هذا الكتاب، مقصودٌ بها اللفظة المعاصرة الجارية على ألسنة الناس ومعانيها المستقرة اليوم في أذهانهم، وليس المفهوم القديم "السلبي" لهذه الكلمة. وقد أردتُ تبيان التحول الدلالي لهذه الكلمة كيلا يقع التناقض الإدراكي بين المعنى المعاصر والدلالات القديمة لهذه الكلمة.. والثورة عندي؛ لا يدخل في مفهومها حركة استيلاء الضباط الأحرار (جداً) على حكم مصر سنة 1952 وما تلاها من انقلابات عسكرية مماثلة في بقية البلدان العربية والإسلامية، وإنما مرادي هو تلك الحركة الشعبية التي خرجت مؤخراً للميادين بشكل تلقائي، في مصر وتونس وليبيا واليمن. ولا يدخل فيها ما يجري الآن في سوريا، إلا بمقدار ما جرى هناك في الأيام الأولى، وتحديداً في "اللاذقية" بالشمال، وفي "درعا" بالجنوب. أما ما توالى بعد ذلك في أنحاء سوريا، فهو فيما أرى، يخرج عن مفهوم الثورة إلى معانٍ أخرى يمكن تسميتها بأسماء مختلفةٍ، منها: الجهاد المسلَّح، الانتزاع القسري للسلطة، اهتبال الإسلاميين للفرصة السانحة، محاولة إلحاق سوريا بالحالة العراقية المزرية.
                
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\fi9h thawra\fi9h thawra.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\fi9h thawra\fi9h thawra.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>