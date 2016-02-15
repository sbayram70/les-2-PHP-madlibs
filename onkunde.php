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
<h2> Onkunde </h2>
<FORM METHOD="post" ACTION="verwerken onkunde.php"> 

<label class="label"> Wat zou je graag willen kunnen?</label> <input class="input" type="text" name="kunnen">
<label class="label">Met welke persoon kun je goed opschieten?</label> 
<input class="input" type="text" name="opschieten">					
<label class="label">Wat is je favoriete getal?</label> 
<input class="input" type="text" name="getal">
<label class="label">Wat heb je altijd bij je als je op vakantie gaat?</label> 
<input class="input" type="text" name="vakantie">
<label class="label">Wat is je beste persoonlijke eigenschap?</label>
<input class="input" type="text" name="eigenschap">			
<label class="label">Wat is je slechtste persoonlijke eigenschap?</label> 
<input class="input" type="text" name="slechtste">
<label class="label">Wat is het ergste dat je kan overkomen?</label> 
<input class="input" type="text" name="ergste">					
<input class="button" NAME="versturen" type="submit" value="Versturen">
</form>	

</div>
</body>
</html>