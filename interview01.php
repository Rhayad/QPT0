<?php
	$rndnum = $_GET['nr'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="de" xmlns="http://www.w3.org/1999/xhtml" lang="de"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>k.werk - Photographie</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />

<link rel="icon" href="img/favlogo.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favlogo.ico" type="image/x-icon" />

</head>

<body>

<div id="main" style="background:url(img/mainbg<?php echo $rndnum ?>.png) no-repeat right bottom;">
	
<?php include "navi.php" ?>
		
		<div id="inhalt">
		
			<div id="inhaltlinks">
				<p><img src="img/interviewbg.jpg" alt="...Steckbrief-Bild..." /></p>
				<ul>
					<li>Rhayad: Seit wann beschäftigst Du Dich nun schon mit Photographie ?</li>
					<li>Marcus K.: Anfang 2000 ein wenig, intensiver seit Mitte 2005.</li>
					<li>R.: Was genau war der Auslöser ?</li>
					<li>K.: Ich lernte zu dem Zeitpunkt einen Photographen auf einem Festival kennen.
						Wir kamen ein wenig ins Gespräch und redeten allgemein &uuml;ber das Festival,
						die Gothic-Szene, Ideen und so.</li>
					<li>R.: Wie ging es weiter ?</li>
					<li>K.: Wir freundeten uns sehr schnell an und riefen zusammen das Photoprojekt "Projekt Seele"
						ins Leben. Ich war haupts&auml;chlich zust&auml;ndig f&uuml;r Make-up, Bildgestaltung und
						Ideenkonzepte und er setzte unsere Ideen dann mit seinem enormen Fachwissen um.</li>
					<li>R.: Wie kam es dann dass Du selbst zur Kamera gegriffen hast ?</li>
					<li>K.: Naja, es liegen zwischen Salzburg und Bielefeld leider &uuml;ber 700km und wir waren beide berufst&auml;tig.
						Ich habe von ihm viel &uuml;ber die Technik lernen k&ouml;nnen und schlie&szlig;lich nahm ich
						dann irgendwann selbst die Kamera in die Hand.</li>
					<li>R.: Wie kam es zur Zusammenarbeit mit dem Salzburger Aktk&uuml;nstler ?</li>
					<li>K.: Das war ebenfalls ein gro&szlig;er Zufall. Eine gute Freundin zeigte ihm vor einiger Zeit Photos 
						von mir und machte uns miteinander bekannt.</li>
					
				</ul>
			</div>
			
			<div id="inhaltrechts">
				<ul>
					<li>R.: Habt ihr &ouml;fter zusammengearbeitet ?</li>
					<li>K.: Ein, zweimal. Wir sind immer noch sehr gut befreundet und denken &uuml;ber das ein oder andere
						Projekt nach. Durch ihn kam ich auch zur s/w-Photographie.</li>
					<li>R.: Wie das ?</li>
					<li>K.: (lacht) Naja, er macht haupts&auml;chlich s/w Photos und hat immer wieder gestichelt, warum ich
						meine Bilder nicht einfach mal in s/w umwandel ?</li>
					<li>R.: Das allein hat zum Umdenken f&uuml;r Dich gereicht ?</li>
					<li>K.: Mich haben s/w Photographien schon immer fasziniert, vor allem K&uuml;nstler wie Helmut Newton. Ich
						hatte nur immer sehr großen Respekt davor, bis ich schlie&szlig;lich einfach experimentierte
						und sah, was ich aus meinen Bildern alles rausholen konnte. War eine tolle Erfahrung damals.</li>
					<li>R.: Wie findest Du Deine Modelle f&uuml;r Deine Ideen ?</li>
					<li>K.: Das ist ganz unterschiedlich. Einige sind aus meinem Bekanntenkreis, einige sprechen mich auf 
						Aufnahmen an und manche frage ich gezielt, wenn ich glaube, dass sie zu meinen Projekten passen.</li>
					<li>R.: Wie arbeitest bzw. setzt Du Deine Ideen um ?</li>
					<li>K.: Die Umsetzung ist immer sehr spannend. Ich arbeite sehr gerne mit Modellen die noch nie bzw.
						selten als Aktmodel vor der Kamera standen. Ich habe oft den Eindruck, dass gerade sie intensiver
						arbeiten bzw. das Beste aus den Bildern herausholen wollen.</li>
					<li style="width:245px">R.: Haben gerade diese Modelle keine Ber&uuml;hrungs&auml;ngste wenn sie noch nie als Akt vor der 
						Kamera standen ?</li>
				</ul>
			</div>
			
		</div>
		
		<div id="seiteninterview">
			<ul>
				<li><a href="interview01.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;&nbsp;</a></li>
				<li><a href="interview01.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;1&gt;</a></li>
				<li><a href="interview02.php?nr=<? echo $rndnum ?>" id="seitenlink">2</a></li>
				<li><a href="interview03.php?nr=<? echo $rndnum ?>" id="seitenlink">3</a></li>
				<li><a href="interview04.php?nr=<? echo $rndnum ?>" id="seitenlink">4</a></li>
				<li><a href="interview02.php?nr=<? echo $rndnum ?>" id="seitenlink">&nbsp;&gt;</a></li>
			</ul>
		</div>

</div>


</body>
</html>