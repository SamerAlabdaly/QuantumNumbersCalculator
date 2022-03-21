<?php require 'incs/header.php';
$file = fopen('num.txt', 'a');
fwrite($file,count(file('num.txt'))."- s: [FAQs] USER_AGENT: [".$_SERVER['HTTP_USER_AGENT']."]\n\n");
fclose($file);
	$words3 = array(
	"en" => array(
		"What is this website?",
		"The site is a calculator for quantum numbers, when the user enters the atomic number of a particular element, the code arranges the atomic number in electronic order and calculates the quantum number for this number, and then outputs the results in the following order:<br>1- Arrangement in the New way<br>2- Arrangement in the Old way<br>3- Quantum Numbers<br>Note: This site was created to validate the user's answer, please do not use it for other purposes.",
		"Why did you build this website?",
		"1- To develop my programming skills.<br>2- i love breaking bad, and i respect chemistry.<br>3- to help other students.",
		"how does it work?",
		"unfortunately it's hard to explain..<br>but you can check out the code your self!<br><a href='https://github.com/SamerAlabdaly/QuantumNumbersCalculator'>Github Link</a><br>i know it's hard to read :(",
		"how long did it take to finish it?",
		"I don't know exactly, as i remember it took me about 10 to 12 hours of coding to finish it.",
		"who made this site?",
		"<span id='name_en'>Samer Karem Al-Abdaly</span><br>Student at Jaber Al-Ansari high school.<br>python, php, c++ programmer.<br>Contact me on:<br><a id='social' href='https://www.instagram.com/uvr.z/'>Instagram</a><a id='social'href='https://www.facebook.com/sam3r.karem/'>Facebook</a><a id='social'href='https://t.me/samer_alabdaly'>Telegram</a>",
		"Thanks to",
		"<span id='name_en'>Mr. Aqeel Al-Mosawi</span> for his affort.<br>"
	),
	"ar" => array(
		"ما هذا الموقع؟",
		"الموقع عبارة عن الة حاسبة لأعداد الكم, عندما يدخل المستخدم عدد الذري لعنصر معين يقوم الكود بترتيب العدد الذري حسب الترتيب الاِلكتروني ويحسب اعداد الكم لهذا العدد, وبعدها يخرج النتائج بالترتيب التالي:<br>١- الترتيب الاِلكتروني بالطريقة الحديثة<br>٢- الترتيب الاِلكتروني بالطريقة القديمة<br>٣- اعداد الكم<br>.ملاحظة: هذا الموقع صنع للتحقق من صحة جواب المستخدم, يرجى عدم استخدامه لأغراض اخرى",
		"لماذا صنعت هذا الموقع؟",
		".١- لتطوير مهاراتي البرمجية<br>.٢- احب بريكنك باد, واحترم الكيمياء<br>.٣- لمساعدة الطلاب",
		"كيف يعمل؟",
		"..للأسف لا يمكنني شرح كل شيء<br>!لكن يمكنك تفحص الكود بنفسك<br><a href='https://github.com/SamerAlabdaly/QuantumNumbersCalculator'>رابط الكود</a><br>): اعرففف, الكود صعب القراءة",
		"كم من الوقت استغرق لإنهائه؟",
		".انا لا اعرف كم استغرقني بالضبط, حسب ما اتذكر لقد استغرقني 10 الى 12 ساعات تقريباً من الكتابة لاِنهائه",
		"من وراء الموقع؟",
		"<span id='name_ar'>سامر كريم العبدلي</span><br>طالب في اعدادية جابر الانصاري<br>.python, php, c++ مبرمج مبتدأ<br>:تواصل معي<br><a id='social' href='https://www.instagram.com/uvr.z/'>انستاكرام</a><a id='social'href='https://www.facebook.com/sam3r.karem/'>فيسبوك</a><a id='social'href='https://t.me/samer_alabdaly'>تليكرام</a>",
		"شكرا لـ",
		".<span id='name_ar'>أ. عقيل الموسوي</span>لجهوده مع الطلاب"
	));
	$lang = $_GET["lang"];
	if($lang != "en")
	{
		$lang = "ar";
		echo "<style>p{text-align:right}</style>";
	}
	else
	{
		echo "<style>p{text-align:left}</style>";
	}
?>
<div class="main">
	<h2><?php echo $words3[$lang][0]; ?></h2>
	<div class="daBox">
		<p>
		<?php
			echo $words3[$lang][1];
		?>
		</p>
	</div>
	<h2><?php echo $words3[$lang][2]; ?></h2>
	<div class="daBox">
		<p>
		<?php
			echo $words3[$lang][3];
		?>
		</p>
	</div>
	<h2><?php echo $words3[$lang][4]; ?></h2>
	<div class="daBox">
		<p>
		<?php
			echo $words3[$lang][5];
		?>
		</p>
	</div>
	<h2><?php echo $words3[$lang][6]; ?></h2>
	<div class="daBox">
		<p>
		<?php
			echo $words3[$lang][7];
		?>
		</p>
	</div>
	<h2><?php echo $words3[$lang][8]; ?></h2>
	<div class="daBox">
		<p>
		<?php
			echo $words3[$lang][9];
		?>
		</p>
	</div>
	<h2><?php echo $words3[$lang][10]; ?></h2>
	<div class="daBox">
		<p>
		<?php
			echo $words3[$lang][11];
		?>
		</p>
	</div>
</div>
<?php require 'incs/footer.php';?>