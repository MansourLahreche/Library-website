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
	<link rel="icon" href="icon.jpg">
	<title>Welcome <?php echo  $_SESSION['username']?> to our library</title>
</head>
<body>
	<center>
		<table border="3" bgcolor="#7884A9">
			<th width="1325" style="float: left;"><marquee><h1 bgcolor="#ffffff">Welcome to Nour's Library</h1></marquee></th>
		</table></center>
	
	<br><br>
	<center><table>
		<tr>
			
			<center><h2>Novels</h2></center>
		</tr>
		<tr>
			<th><a href="ardsafilin.php"><img src="Novels\ardsafiline\ardsafiline.png" id="img"></a></th>
			<th><a href="chikhwelbahr.php"><img src="Novels\chikh welbahr\chikhwelbahr.jpg" id="img"></a></th>
			<th><a href="consiler.php"><img src="Novels\consiler\consiler.png" id="img"></a></th>
			<th><a href="kristi.php"><img src="Novels\kristi\kristi.png" id="img"></a></th>
			<th><a href="sakf el kfaya.php"><img src="Novels\sakfelkifaya\sakfelkifaya.png" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="ardsafilin.php">أرض السافلين</a></th>
			<th><a href="chikhwelbahr.php">الشيخ والبحر</a></th>
			<th><a href="consiler.php">كونسيلر</a></th>
			<th><a href="kristi.php">كريستي</a></th>
			<th><a href="sakf el kfaya.php">سقف الكفاية</a></th>
		</tr>
<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		<tr>
			
			<th><a href="100 ans minal3ozla.php"><img src="Novels/100 ans minal3ozla/100 ans minal3ozla.png" id="img"></a></th>
			<th><a href="hibta.php"><img src="Novels/hibta/hibta.png" id="img"></a></th>
			<th><a href="majedwalin.php"><img src="Novels/majedwalin/majedwalin.PNG"id="img"></a></th>
			<th><a href="maktabato nisf layl.php"><img src="Novels/maktabato nisf layl/maktabato nisf layl.jpg"id="img"></a></th>
			<th><a href="matahato adam.php"><img src="Novels/matahato adam/matahato adam.png"id="img"></a></th>
		</tr>

		<tr>
			
			<th><a href="100 ans minal3ozla.php">مائة سنة من العزلة</a></th>
			<th><a href="hibta.php">هيبتا</a></th>
			<th><a href="majedwalin.php">ماجدولين</a></th>
			<th><a href="maktabato nisf layl.php">مكتبة نصف الليل</a></th>
			<th><a href="matahato adam.php">متاهة ادم</a></th>
		</tr>
		
		
	</table></center>
</center><br><br><br>
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br><br><br><br><center>
	<center><table>
		<tr>
			<center><h2>Historical Books</h2></center>
		</tr>
		<tr>
			<th><a href="100 min 3odamaa ouma islam ghyaro majra eltarikh.php"><img src="Historical Books/100 min 3odamaa ouma islam ghyaro majra eltarikh/100 min 3odamaa ouma islam ghyaro majra eltarikh.jpg" id="img"></a></th>
			<th><a href="7liyat awliyaa.php"><img src="Historical Books/7liyat awliyaa/7liyat awliyaa.png" id="img"></a></th>
			<th><a href="el3b9ariya.php"><img src="Historical Books/el3b9ariya/el3b9ariya.png" id="img"></a></th>
			<th><a href="elbidaya w elnihaya.php"><img src="Historical Books/elbidaya w elnihaya/elbidaya w elnihaya.png" id="img"></a></th>
			<th><a href="eltarikh eljadid.php"><img src="Historical Books/eltarikh eljadid/eltarikh eljadid.jpg" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="100 min 3odamaa ouma islam ghyaro majra eltarikh.php">مائة من عظماء الاسلام</a></th>
			<th><a href="7liyat awliyaa.php">حلية الاولياء</a></th>
			<th><a href="el3b9ariya.php">العبقرية</a></th>
			<th><a href="elbidaya w elnihaya.php">البداية والنهاية</a></th>
			<th><a href="eltarikh eljadid.php">التاريخ الجديد</a></th>
		</tr>
		<tr>
			<th><a href="fajr eldamir.php"><img src="Historical Books/fajr eldamir/fajr eldamir.jpg" id="img"></a></th>
			<th><a href="mo9dimt ibn khaldoun.php"><img src="Historical Books/mo9dimt ibn khaldoun/mo9dimt ibn khaldoun.jpg" id="img"></a></th>
			<th><a href="sayr a3lam nobalaa.php"><img src="Historical Books/sayr a3lam nobalaa/sayr a3lam nobalaa.jpg" id="img"></a></th>
			<th><a href="tarikh el9iraa.php"><img src="Historical Books/tarikh el9iraa/tarikh el9iraa.png" id="img"></a></th>
			<th><a href="tarikh mojiz lizamn.php"><img src="Historical Books/tarikh mojiz lizamn/tarikh mojiz lizamn.png" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="fajr eldamir.php">فجر الضمير</a></th>
			<th><a href="mo9dimt ibn khaldoun.php">مقدمة ابن خلدون</a></th>
			<th><a href="sayr a3lam nobalaa.php">سير اعلام النبلاء</a></th>
			<th><a href="tarikh el9iraa.php">تاريخ القراءة</a></th>
			<th><a href="tarikh mojiz lizamn.php">تاريخ موجز للزمن</a></th>
		</tr>

	</table></center>
</center><br><br><br>
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br><br><br><br><center>
	<center><table>
		<tr>
			<center><h2>Literary Books</h2></center>
		</tr>
		<tr>
			<th><a href="adrath a9lam.php"><img src="Literary Books/adrath a9lam/adrath a9lam.png"id="img"></a></th>
			<th><a href="asatidat yaas.php"><img src="Literary Books/asatidat yaas/asatidat yaas.png" id="img"></a></th>
			<th><a href="awra9 elward.php"><img src="Literary Books/awra9 elward/awra9 elward.png" id="img"></a></th>
			<th><a href="el39d elfarid.php"><img src="Literary Books/el39d elfarid/el39d elfarid.png" id="img"></a></th>
			<th><a href="elamli.php"><img src="Literary Books/elamli/elamli.jpg" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="adrath a9lam.php">أضغاث أقلام</a></th>
			<th><a href="asatidat yaas.php">أساتذة اليأس</a></th>
			<th><a href="awra9 elward.php">أوراق الورد</a></th>
			<th><a href="el39d elfarid.php">العقد الفريد</a></th>
			<th><a href="elamli.php">الأمالي</a></th>
		</tr>
		<tr>
			<th><a href="ellayali elbaydaa.php"><img src="Literary Books/ellayali elbaydaa/ellayali elbaydaa.png" id="img"></a></th>
			<th><a href="elsada9a w elsadi9.php"><img src="Literary Books/elsada9a w elsadi9/elsada9a w elsadi9.png" id="img"></a></th>
			<th><a href="ibtasim fa anta myt.php"><img src="Literary Books/ibtasim fa anta myt/ibtasim fa anta myt.png" id="img"></a></th>
			<th><a href="istay9d w 3ich.php"><img src="Literary Books/istay9d w 3ich/istay9d w 3ich.png" id="img"></a></th>
			<th><a href="madina la tnam.php"><img src="Literary Books/madina la tnam/madina la tnam.png" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="ellayali elbaydaa.php">الليالي البيضاء</a></th>
			<th><a href="elsada9a w elsadi9.php">الصداقة والصديق</a></th>
			<th><a href="ibtasim fa anta myt.php">ابتسم فأنت ميت</a></th>
			<th><a href="istay9d w 3ich.php">استيقظ وعش</a></th>
			<th><a href="madina la tnam.php">مدينة لا تنام</a></th>
		</tr>
	</table></center>
</center><br><br><br>
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br><br><br><br><center>
	<center><table>	
		<tr>
			<center><h2>Political Books</h2></center>	
		</tr>
		<tr>
			<th><a href="3wda ila sifr.php"><img src="Political Books/3wda ila sifr/3wda ila sifr.png" id="img"></a></th>
			<th><a href="9anoun elchou3oub.php"><img src="Political Books/9anoun elchou3oub/9anoun elchou3oub.png" id="img"></a></th>
			<th><a href="elhouriya w ma wraouha.php"><img src="Political Books/elhouriya w ma wraouha/elhouriya w ma wraouha.png" id="img"></a></th>
			<th><a href="elt9alid elchafahiya.php"><img src="Political Books/elt9alid elchafahiya/elt9alid elchafahiya.png" id="img"></a></th>
			<th><a href="fi9h dimo9ratiya.php"><img src="Political Books/fi9h dimo9ratiya/fi9h dimo9ratiya.png" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="3wda ila sifr.php">العودة الى الصفر</a></th>
			<th><a href="9anoun elchou3oub.php">قانون الشعوب</a></th>
			<th><a href="elhouriya w ma wraouha.php">الحرية وما وراءها</a></th>
			<th><a href="elt9alid elchafahiya.php">التقاليد الشفهية</a></th>
			<th><a href="fi9h dimo9ratiya.php">فقه الديمقراطية</a></th>
		</tr>
		<tr>
			<th><a href="fi9h thawra.php"><img src="Political Books/fi9h thawra/fi9h thawra.png" id="img"></a></th>
			<th><a href="ifri9ya swdaa.php"><img src="Political Books/ifri9ya swdaa/ifri9ya swdaa.png" id="img"></a></th>
			<th><a href="ikhtilal el3alm.php"><img src="Political Books/ikhtilal el3alm/ikhtilal el3alm.jpg" id="img"></a></th>
			<th><a href="jyousiyasiya jadida.php"><img src="Political Books/jyousiyasiya jadida/jyousiyasiya jadida.png"id="img"></a></th>
			<th><a href="phalstine byn mouamarat sahyouniya.php"><img src="Political Books/phalstine byn mouamarat sahyouniya/فلسطين بين المؤامرات الصهيونية و الاستعمار.png" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="fi9h thawra.php">فقه الثورة</a></th>
			<th><a href="ifri9ya swdaa.php">افريقيا السوداء</a></th>
			<th><a href="ikhtilal el3alm.php">اختلال العالم</a></th>
			<th><a href="jyousiyasiya jadida.php">الجيوسياسية الجديدة</a></th>
			<th><a href="phalstine byn mouamarat sahyouniya.php">فلسطين بين المؤامرات الصهيونية</a></th>
		</tr>
	</table></center>
</center><br><br><br>
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br><br><br><br><center>
	<center><table>
		<tr>
			<center><h2>Psychology</h2></center>
		</tr>
		<tr>
			<th><a href="da3 el9al9 w bda elhyat.php"><img src="Psychology/da3 el9al9 w bda elhyat/da3 el9al9 w bda elhyat.png" id="img"></a></th>
			<th><a href="el3ilaj elsoulouki llitfl.php"><img src="Psychology/el3ilaj elsoulouki llitfl/el3ilaj elsoulouki llitfl.png" id="img"></a></th>
			<th><a href="elbaramij irchadiya.php"><img src="Psychology/elbaramij irchadiya/elbaramij irchadiya.jpg" id="img"></a></th>
			<th><a href="elkhwf w el9ala9.php"><img src="Psychology/elkhwf w el9ala9/elkhwf w el9ala9.png" id="img"></a></th>
			<th><a href="eltwahod.php"><img src="Psychology/eltwahod/eltwahod.png" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="da3 el9al9 w bda elhyat.php">دع القلق وابدا الحياة</a></th>
			<th><a href="el3ilaj elsoulouki llitfl.php">العلاج السلوكي للطفل</a></th>
			<th><a href="elbaramij irchadiya.php">البرامج الارشادية</a></th>
			<th><a href="elkhwf w el9ala9.php">الخوف والقلق</a></th>
			<th><a href="eltwahod.php">التوحد</a></th>
		</tr>
		<tr>
			<th><a href="elwswas el9ahri.php"><img src="Psychology/elwswas el9ahri/elwswas el9ahri.png" id="img"></a></th>
			<th><a href="idtirabat sloikiya w infi3aliya.php"><img src="Psychology/idtirabat sloikiya w infi3aliya/idtirabat sloikiya w infi3aliya.jpg" id="img"></a></th>
			<th><a href="ikstazi.php"><img src="Psychology/ikstazi/ikstazi.png" id="img"></a></th>
			<th><a href="loghat eljasad.php"><img src="Psychology/loghat eljasad/loghat eljasad.png" id="img"></a></th>
			<th><a href="oudabaa monta7iroun.php"><img src="Psychology/oudabaa monta7iroun/oudabaa monta7iroun.png" id="img"></a></th>
		</tr>
		</tr>
		<tr>
			<th><a href="elwswas el9ahri.php">الوسواس القهري</a></th>
			<th><a href="idtirabat sloikiya w infi3aliya.php">الاضطرابات السلوكية والانفعالية</a></th>
			<th><a href="ikstazi.php">اكستاسي</a></th>
			<th><a href="loghat eljasad.php">لغة الجسد</a></th>
			<th><a href="oudabaa monta7iroun.php">أدباء منتحرون</a></th>
		</tr>
	</table></center>
</center><br><br><br>
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br><br><br><br><center>
	<center><table>
		<tr>
			<center><h2>Religious Books</h2></center>
		</tr>
		<tr>
			<th><a href="3lamatni aya.php"><img src="Religious Books/3lamatni aya/3lmtni aya.png" id="img"></a></th>
			<th><a href="bi ay 9alb nal9ah.php"><img src="Religious Books/bi ay 9lb nl9ah/bi ay 9lb nl9ah.png" id="img"></a></th>
			<th><a href="chahr ramadan elmoubarak.php"><img src="Religious Books/chahr ramadan elmoubarak/chahr ramadan elmoubarak.png" id="img"></a></th>
			<th><a href="elrahi9 elmakhtoum.php"><img src="Religious Books/elrahi9 elmakhtoum/elrahi9 elmakhtoum.png" id="img"></a></th>
			<th><a href="eltari9 ila el9ouraan.php"><img src="Religious Books/eltari9 ila el9ouraan/eltari9 ila el9ouraan.png" id="img"></a></th>
			
		</tr>
		<tr>
			<th><a href="3lamatni aya.php">علمتني اية</a></th>
			<th><a href="bi ay 9alb nal9ah.php">بأي قلب نلقاه</a></th>
			<th><a href="chahr ramadan elmoubarak.php">شهر رمضان المبارك</a></th>
			<th><a href="elrahi9 elmakhtoum.php">الرحيق المختوم</a></th>
			<th><a href="eltari9 ila el9ouraan.php">الطريق الى القران</a></th>
			
		</tr>
		<tr>
			<th><a href="fattni salat.php"><img src="Religious Books/fattni salat/fattni salat.png" id="img"></a></th>
			<th><a href="ghdan ajml.php"><img src="Religious Books/ghdan ajml/ghdan ajml.png" id="img"></a></th>
			<th><a href="la t7zan.php"><img src="Religious Books/la t7zan/la t7zan.png" id="img"></a></th>
			<th><a href="liaani 3abdok.php"><img src="Religious Books/liaani 3abdok/لاني عبدك.png" id="img"></a></th>
			<th><a href="lianaka allah.php"><img src="Religious Books/lianaka allah/lianaka allah.png" id="img"></a></th>	
		</tr>
		<tr>
			<th><a href="fattni salat.php">فاتتني صلاة</a></th>
			<th><a href="ghdan ajml.php">غدا اجمل</a></th>
			<th><a href="la t7zan.php">لا تحزن</a></th>
			<th><a href="liaani 3abdok.php">لأنني عبدك</a></th>
			<th><a href="lianaka allah.php">لأنك الله</a></th>	
		</tr>
	</table></center>
</center><br><br><br>
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br><br><br><br><center>
	<center><table>
		<tr>
			<center><h2>Scientific Books</h2></center>
		</tr>
		<tr>
			<th><a href="3asifa fi kwb chay.php"><img src="Scientific Books/3asifa fi kwb chay/3asifa fi kwb chay.png" id="img"></a></th>
			<th><a href="9lil min el3ilm lljami3.php"><img src="Scientific Books/9lil min el3ilm lljami3/9lil min el3ilm lljami3.png" id="img"></a></th>
			<th><a href="afkar w araa.php"><img src="Scientific Books/afkar w araa/afkar w araa.png" id="img"></a></th>
			<th><a href="amn t9nyt elma3loumat.php"><img src="Scientific Books/amn t9nyt elma3loumat/amn t9nyt elma3loumat.png" id="img"></a></th>
			<th><a href="el3a9l w elhasoub.php"><img src="Scientific Books/el3a9l w elhasoub/el3a9l w elhasoub.png" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="3asifa fi kwb chay.php">عاصفة في كوب شاي</a></th>
			<th><a href="9lil min el3ilm lljami3.php">قليل من العلم للجميع</a></th>
			<th><a href="afkar w araa.php">افكار وأراء</a></th>
			<th><a href="amn t9nyt elma3loumat.php">أمن تقنية المعلومات</a></th>
			<th><a href="el3a9l w elhasoub.php">العقل والحاسوب</a></th>
		</tr>
		<tr>
			<th><a href="elnafs w dimaghoha.php"><img src="Scientific Books/elnafs wa dimaghoha/elnafs wa dimaghoha.png" id="img"></a></th>
			<th><a href="kyf nnam.php"><img src="Scientific Books/kyf nnam/kyf nnam.png" id="img"></a></th>
			<th><a href="rihlti min elchek ila iman.php"><img src="Scientific Books/rihlti min elchek ila iman/rihlti min elchek ila iman.png" id="img"></a></th>
			<th><a href="w mada ba3d.php"><img src="Scientific Books/w mada ba3d/w mada ba3d.png" id="img"></a></th>
			<th><a href="zidni 3ilma.php"><img src="Scientific Books/zidni 3ilma/zidni 3ilma.png" id="img"></a></th>
		</tr>
		<tr>
			<th><a href="elnafs w dimaghoha.php">النفس ودماغها</a></th>
			<th><a href="kyf nnam.php">كيف ننام</a></th>
			<th><a href="rihlti min elchek ila iman.php">رحلتي من الشك الى الايمان</a></th>
			<th><a href="w mada ba3d.php">و ماذا بعد ؟</a></th>
			<th><a href="zidni 3ilma.php">زدني علما</a></th>
		</tr>
	</table></center>
<center><br><br><br>
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br><br><br><br></center>
	<video src="video1.mp4" width="1020" height="590" controls></video>
</center><br><br><br>
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
<br><br><br><br><center>
	<center>
		<table border="3" bgcolor="#7884A9">
			<th width="1300"><marquee><h1>I wish you a pleasant reading</h1></marquee></th>
		</table></center>
</body>
</html>
