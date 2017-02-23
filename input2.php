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
			Onkunde
		</h2>
		<div class="tekst">
		<p>Er zijn veel mensen die niet kunnen <?php echo $_POST['Ability']?>.
		Neem nou meneer <?php echo $_POST['persoon2']?>.
		Zelfs met de hulp van een <?php echo $_POST['voorwerp']?> of zelfs <?php echo $_POST['getal']?> kan meneer <?php echo $_POST['persoon2']?> niet <?php echo $_POST['Ability']?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST['eigenschap']?>, maar met een te veel aan <?php echo $_POST['eigenschap2']?>. Te veel <?php echo $_POST['eigenschap2']?> leidt tot <?php echo $_POST['Gebeurtenis']?> en dat is niet goed als je wilt <?php echo $_POST['Ability']?>. Helaas voor meneer <?php echo $_POST['persoon2']?>.
		</p>
			
		</div>
 <div class="footer">
				<p>
					Deze website is 	gemaakt door Ahmet Altas
				</p>
		</div>

</body>
</html>