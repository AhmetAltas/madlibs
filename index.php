<?php 





?>


<!DOCTYPE html>
<html>
<head>
	<title>Madlips</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>
<form action="input.php" method = "POST">

 
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
		<p class="vraag">
			Welk dier zou je nooit als huisdier willen hebben?
			<input name="huisdier" type="input" id= "inp1" placeholder="Huisdier">
		</p>
		<p class="vraag">
			Wie is de belangerijkste persoon in je leven?
			<input name="persoon" type="input" id= "inp2" placeholder="Persoon">
		</p>
		<p class="vraag">
			In welk land zou je graag willen wonen?
			<input name="land" type="input" id= "inp3" placeholder="Land">
		</p>
		<p class="vraag">
			Wat doe je als je je verveelt?
			<input name="activiteit" type="input" id= "inp4" placeholder="Activiteit">
		</p>
		<p class="vraag">
			Met welk speelgoed speelde je als kind het meest?<input name="speelgoed" type="input" id= "inp5" placeholder="Speeldgoed">
		</p>
		<p class="vraag">
			Bij welke docent spijbel je het liefst?
			<input name="docent" type="input" id= "inp6" placeholder="Docent">
		</p>
		<p class="vraag">
			Als je € 100.000 had, wat zou je dan kopen?<input name="product" type="input" id= "inp7" placeholder="Product">
		</p>
		<p class="vraag">
			Wat is je favoriete bezigheid?<input name="activiteit2" type="input" id= "inp8" placeholder="Activiteit">
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