<?php
//var_dump($_POST);
	$dier = $_POST['huisdier'];
	$persoon = $_POST['persoon'];
	$land = $_POST['wonen'];
	$vervelen = $_POST['verveelt'];
	$speel = $_POST['speelgoed'];
	$spijbelen = $_POST['spijbel'];
	$koop = $_POST['kopen'];
	$bezig = $_POST['bezigheid'];
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="./css/formule.css">
</head>
<body>
<div class="header">
<h1> Mad Libs </h1></div>

<div class="middenkolom">
    <div class="menu">
	   <ul>
			<li><a href="madlibs.php">Er heerst paniek..</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>
		</ul></div>
<h2> Er heerst paniek..</h2>
<p> Er heerst paniek in het koninkrijk <?php echo $land; ?>.
Koning <?php echo $spijbelen; ?> is ten einde raad en als koning <?php echo $spijbelen; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $persoon; ?>.

<p><?php echo $persoon; ?> ! Het is een ramp! Het is een schande!
<p>Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?
<p>Mijn <?php echo $dier; ?> is verdwenen! Zo maar, zonder waarschuwing En ik had net <?php echo $speel; ?> voor hem gekocht!
<p>Majesteit, uw <?php echo $dier; ?> komt vast vanzelf weer terug?
<p>Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd  <?php echo $bezig; ?> leren?
<p>Maar Sire, daar kunt u toch uw <?php echo $koop; ?> voor gebruiken.
<p><?php echo $persoon; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.
<p><?php echo $vervelen; ?>, Sire.</p>
<div class="voettekst">
<p> Deze website is gemaakt door Spinoza </p>
</div>
</body>
</html>