<?php 

?>




<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<h1 class="title"> Mad Libs </h1>

<div class="menu">
		<div class="header">
			
			<ul>
				<li>
					<a class="header1" href = "index.php">Er heerst paniek..</a>
					<a class="header1" href = "onkunde.php">Onkunde</a>
				</li>	
			</ul>
		</div>	
		<h2 class="paniek">
			Er heerst paniek...
		</h2>
		<div class="tekst">
			<p>Er heerst paniek in het koningkrijk <?php echo $_POST['land'] ?>.
			</p><br>
			<p>
				Koning <?php echo $_POST['docent']?> is ten einde raad en als koning <?php echo $_POST['docent']?> ten einde raad is, dan roep hij zijn ten-einde-raadsheer <?php echo $_POST['persoon']?>
			</p><br> 
			<p>
				"<?php echo $_POST['persoon']?>! Het is een ramp! Het is een schande! "
			</p><br>
			<p>
				"Sire, Majesteit, Uwe Luidurchtigheid, wat is er aan de hand?"
			</p><br>
			<p>
				"Mijn <?php echo $_POST['huisdier']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net Lego voor hem gekocht!"
			</p><br>
			<p>
				"Majesteit, uw <?php echo $_POST['huisdier']?> komt vast vanzelf terug?"
			</p><br>
			<p>
				"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['activiteit2']?> leren?"
			</p><br>
			<p>
				"Maar Sire, daar kunt u toch uw <?php echo $_POST['product']?> voor gebruiken"
			</p><br>
			<p>
				"<?php echo $_POST['persoon']?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
			</p><br>
			<p>
				" <?php echo $_POST['activiteit']?>, Sire "
			</p><br>
			
		</div>
 <div class="footer">
				<p>
					Deze website is 	gemaakt door Ahmet Altas
				</p>
		</div>

</body>
</html>