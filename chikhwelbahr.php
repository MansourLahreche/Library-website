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
	<title>تحميل كتاب الشيخ و البحر</title>
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

	<center><h2>تحميل كتاب الشيخ و البحر</h2></center><br><br><br>
	<center>
	<table>
		<center><tr>
			<th><h3>ارنست همنغواي</h3><br><h3>روايات و أدب عربي</h3><br><h3>اللغة العربية</h3><br><h3>دار الحافظ للطباعة والانتاج</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Novels\chikh welbahr\chikhwelbahr.jpg" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4>
				تجسد هذه القصة لـ "أرنست همنغواي" مبدأ صراع الإنسان مع الحياة وذلك من خلال سردها لتجربة حدثت مع صياد عجوز يدعى سنتياجو مصاب بسوء الحظ، فهو لم يصطد أي سمكة منذ أربعة وثمانين يوماً. وقد ظل ولد يساعده لكن أبويه منعاه من أني خرج مع الرجل العجوز، لذلك كان الرجل العجوز وحيداً حين خرج مبكراً ذات صباح في تيار الخليج الذي يتحرك فوق جزيرة كوبا. عند الظهر تقريباً، يصطاد سمكة مارلين ضخمة تسحب قاربه إلى الشمال والشرق لمدة يومين وليلتين. ويتعلق بالخيط الثقيل مضاهياً قوته وتحمله بقوة وتحمل السمكة. وفي اليوم الثالث يجذب سمكة المارلين نحن السطح ويقتلها بحربونه، ويربطها على طول قاربه، وينشر شراعه الصغير ويبدأ رحلة العودة الطويلة تنقض أسماء القرش لتمزيق لحم السمكة ويحاول هو أن يقاتلها ويبعدها، ضارباً بالهراوة وطاعناً إياها فيتهشم مجذافاه وسكان دقة القارب. وحين يعود ليرسو في المرفأ، لا يكون قد بقي شيء من السمكة سوى رأسها والهيكل العظمي والذيل. ثم يرسو بقاربه مبقياً على هيكل السمكة مربوطاً به. يصل إلى كوخه، منهك القوى. يحضر الولد في الصباح، ورغم سوء حظ الرجل العجوز يكون متلهفاً للخروج معه للصيد ثانية، فهو سيجلب له الحظ كما سيتعلم منه الكثير. 			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Novels\chikh welbahr\chikhwelbahr.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Novels\chikh welbahr\chikhwelbahr.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>