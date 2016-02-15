<?php
//var_dump($_POST);
	$kunt = $_POST['kunnen'];
	$persoon = $_POST ['opschieten'];
	$nummer = $_POST ['getal'];
	$altijd = $_POST ['vakantie'];
	$beste = $_POST ['eigenschap'];
	$eigenschap = $_POST ['slechtste'];
	$overkomen = $_POST ['ergste'];
?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="./css/formule.css">
</head>
<body>
<div class="header1">
<h1> Mad Libs </h1></div>

<div class="middenkolom1">
    <div class="menu">
	   <ul>
			<li><a href="madlibs.php">Er heerst paniek..</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>
		</ul></div>
<h2> Onkunde</h2>
<p>Er zijn veel mensen die niet kunnen <?php echo $kunt ?>. Neem nou <?php echo $persoon?>.
Zelfs met de hulp van een <?php echo $altijd ?> of zelfs <?php echo $nummer ?> kan <?php echo $persoon?> niet <?php echo $kunt ?>.
Dat heeft niet te maken met een gebrek aan <?php echo $beste ?> maar met een te veel aan <?php echo $eigenschap ?>.
Te veel <?php echo $eigenschap ?> leidt tot <?php echo $overkomen ?> en dat is niet goed als je wilt <?php echo $kunt ?>.
Helaas voor <?php echo $persoon ?>.</p>
<div class="voettekst">
<p> Deze website is gemaakt door Spinoza </p>
</div>

</body>
</html>


