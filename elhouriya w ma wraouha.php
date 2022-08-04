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
	<title>تحميل كتاب الحرية و ما ورائها</title>
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
		<center><h2>تحميل كتاب الحرية ما ورائها</h2><center><br><br><br>
	<table>
		<center><tr>
			<th><h3>جون هولت</h3><br><h3> ثقافة</h3><br><h3>اللغة العربية</h3><br><h3>دار المعارف</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<th><h3>المـؤلـف</h3><br><h3>الـقـسـم</h3><br><h3>الـلــغـة</h3><br><h3>الناشر</h3></th>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><img src="Political Books\elhouriya w ma wraouha\elhouriya w ma wraouha.png" id="img"></td>
		</tr></center>
	</table></center><br><br><br>
	<center>
		<div id="text">
			<h2>نبذة عن الكتاب</h2>
			<p><h4> يقول جون هولت ان المؤمنين بالحرية قليلون، فالحرية كشعار شيء بديع، ولكننا لا نفهمها كعملية او حيلة (ميكانزم) يستطيع الناس عن طريقها – او في إطارها – أن يعملوا وأن يعيشوا، ففي حياتنا لم يتيسر لنا إلا أقل الخبرة بالحرية، اللهم إلا في أشد المواقف تفاهة، بحيث اننا لا نكاد نتخيل كيف يمكن الحرية أن تعمل؟ وكيف يتسنى لنا ان نستخدمها؟ او كيف يمكن أن يكون لها أي استخدام لدينا عند ما يجب القيام بأي عمل جدي؟

                ويرى أن الحرية ليست مثلما يقول ملايين من الناس من ان معناها ترك الحبل على الغارب للناس في كل ما يصنعون، لأنك إذا تركتهم يفعلون كل ما يريدون ارتكبوا أموراً سيئة.
                
                يشرح ذلك جون هولت في كتابه “الحرية وما وراءها” الذي يتحدث فيه عن مشكلة إصلاح التعليم في المجتمع الأمريكي من خلال لقاءاته وأحاديثه مع مجموعات صغيرة وكبيرة في الكليات والمدارس توصل فيها الى انه منذ أمد غير طويل بالنسبة له حاول تعريف مشكلة اصلاح التعليم وهي بأنها ستظل مشكلة اتاحة مزيد من الحرية في المدارس لأننا لو عثرنا على طريقة لتحقيق ذلك لضمنا التعليم الجيد للأطفال جميعاً.
                
                
			</h4></p>
		</div>
	</center><br><br><br>
	ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
	<br><br><br><br><center>
	<a href="Political Books\elhouriya w ma wraouha\elhouriya w ma wraouha.pdf"><button id="titre">Reading PDF</button></a>
	<a href="Political Books\elhouriya w ma wraouha\elhouriya w ma wraouha.rar"><button id="titre">Download</button></a></center>
	<a href="logout.php" style="float:right;"><button id="titre">Log Out</button></a>
</body>
</html>
