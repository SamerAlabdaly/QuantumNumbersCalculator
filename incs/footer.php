</div>
	<div class="footer">
		<ul>
			<?php
				if($_GET['lang'] == "en")
				{
					echo '<li><a href="index.php?lang=en">Home</a></li><li><a href="FAQs.php?lang=en">FAQs</a></li><li><a href="?lang=ar">اللغة العربية</a></li>';
				}
				else
				{
					echo '<style>div.footer ul {float:right;}ul li{padding:15px;}</style><li><a href="index.php?lang=ar">الصفحة الرئيسية</a></li><li><a href="FAQs.php?lang=ar">اسألة مكررة</a></li><li><a href="?lang=en">English Language</a></li>';
				}
			?>
		</ul>
	</div>
</body>
</html>