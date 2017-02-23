<?php 





?>


<!DOCTYPE html>
<html>
<head>
	<title>Onkunde</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="input2.php" method = "POST">
<h1 class="title"> Mad Libs	 </h1>

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
		<p class="vraag">
			Wat zou je graag willen kunnen?
			<input name="Ability" type="input" id= "inp1" placeholder="Ability">
		</p>
		<p class="vraag">
			Met welke persoon kun je goed opschieten?
			<input name="persoon2" type="input" id= "inp2" placeholder="Persoon">
		</p>
		<p class="vraag">
			Wat is je favoriete getal?
			<input name="getal" type="input" id= "inp3" placeholder="Getal">
		</p>
		<p class="vraag">
			Wat heb je altijd bij je als je op vakantie gaat?
			<input name="voorwerp" type="input" id= "inp4" placeholder="Voorwerp">
		</p>
		<p class="vraag">
			Wat is je beste persoonlijke eigenschap?<input name="eigenschap" type="input" id= "inp5" placeholder="Eigenschap">
		</p>
		<p class="vraag">
			Wat is je slechste persoonlijke eigenschap?
			<input name="eigenschap2" type="input" id= "inp6" placeholder="Eigenschap">
		</p>
		<p class="vraag">
			Wat is het ergste dat je kan overkomen<input name="Gebeurtenis" type="input" id= "inp7" placeholder="Gebeurtenis">
		</p>
	

		<input type="submit" id="submit"
		value="Versturen">


		<div class="footer">
				<p>
					Deze website is 	gemaakt door Ahmet Altas
				</p>
		</div>

	

</div>
</form>
</body>
</html>