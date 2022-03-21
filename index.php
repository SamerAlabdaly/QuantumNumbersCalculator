<?php
require 'incs/header.php';

$file = fopen('num.txt', 'a');
fwrite($file,count(file('num.txt'))."- USER_AGENT: [".$_SERVER['HTTP_USER_AGENT']."]\n\n");
fclose($file);
?>
<div class="main">
	<div class="form_holder">
	<form action="index.php">
		<?php
			$lang = $_GET["lang"];
			if($_GET["lang"] != "en")
				$lang = "ar";
			$words = array("ar" => array("العدد الذري","أحسب","right"),"en" => array("Atomic number","Calculate","left"));
			$num = $_GET['numberInput'];
			echo '<style>input#numberInput{text-align:'.$words[$lang][2].'}</style><input type="hidden" name="lang" value="'.$lang.'"><div class="text"><input type="number" name="numberInput" id="numberInput" min="1" max="112" placeholder="'.$words[$lang][0].'" value="'.$num.'"></div><div class="btn"><input type="submit" value="'.$words[$lang][1].'" id="sub"></div>';
		?>
	</form>
	</div>
	<?php
		if(isset($_GET['numberInput']))
		{
			$words2 = array("ar" => array("الترتيب بالطريقة الحديثة","الترتيب بالطريقة القديمة","اعداد الكم","العدد الذري يجب ان يكون اقل او يساوي 112.","خطأ"),"en" => array("Arrangement in the New way","Arrangement in the Old way","Quantum Numbers","Atomic Number must be less then or equal to 112.","Error"));
			$lang = $_GET["lang"];
			if($lang != "en")
			{
				$lang = "ar";
			}
			if((int)$_GET['numberInput'] == 0 || (int)$_GET['numberInput'] > 112 || (int)$_GET['numberInput'] < 1)
			{
				echo '<style>div.daBox{text-align:center}</style><h2>'.$words2[$lang][4].'</h2><div class="daBox">'.$words2[$lang][3].'</div>';
			}
			else
			{
				require 'incs/calc.php';
				echo"<h2>".$words2[$lang][0].'</h2><div class="daBox">';
				foreach ($resultInTheNewWay as $key => $value)
				{
					echo $key."<sup>".$value."</sup> ";
				}
				echo "</div>";
				echo"<h2>".$words2[$lang][1].'</h2><div class="daBox">';
				foreach ($result as $key => $value)
				{
					echo $key."<sup>".$value."</sup> ";
				}
				echo "</div>";
				echo "<h2>".$words2[$lang][2].'</h2><div class="daBox">';
				echo '<div class="qn">N = '.$n.'</div>';
				echo '<div class="qn">ℓ = '.$l.'</div>';
				echo '<div class="qn">Mℓ = '.$ml.'</div>';
				echo '<div class="qn">MS = '.$ms.'</div></div>';
			}
		}
	?>
</div>
<?php
require 'incs/footer.php';
?>
