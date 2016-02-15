<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mad Libs</title>
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
<FORM METHOD="post" ACTION="verwerken.php"> 

<label class="label"> Welk dier zou je nooit als huisdier willen hebben?</label> 
<input class="input" type="text" name="huisdier">
<label class="label">Wie is de belangrijkste persoon in je leven?</label> 
<input class="input" type="text" name="persoon">					
<label class="label">in welke land zou je graag willen wonen?</label> 
<input class="input" type="text" name="wonen">
<label class="label">Wat doe je als je je verveelt?</label> 
<input class="input" type="text" name="verveelt">
<label class="label">Met welk speelgoed speelde je als kind het meest?</label>
<input class="input" type="text" name="speelgoed">			
<label class="label">Bij welke docent spijbel je het liefst?</label> 
<input class="input" type="text" name="spijbel">
<label class="label">Als je EUR 100.000,- had, wat zou je dan kopen?</label> 
<input class="input" type="text" name="kopen">					
<label class="label">Wat is je favoriete bezigheid?</label> 
<input class="input" type="text" name="bezigheid">
<input class="button" NAME="versturen" type="submit" value="Versturen">
</form>					
				



</div>
</body>
</html>