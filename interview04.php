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
					<li>K.: Naja, das griechische Wort f&uuml;r Schmetterling ist "Psyche", welches das Gleiche bedeutet wie "Seele". In 
						der christlichen Symbolik steht der Schmetterling für die Wiedergeburt oder Auferstehung des Menschen. Und f&uuml;r 
						die Mei&szlig;ten ist der Schmetterling ein Zeichen für Unschuld und Freiheit. Niemand verbindet sie mit 
						etwas Schlechtem. Aber auch sie sind sterblich. Mit den zugegeben recht ungew&ouml;hnlichen Darstellungen versuche ich sie zu 
						vermenschlichen so dass wir vielleicht sehen wie auch wir uns oft selbst zu Grunde richten.</li>
					<li>R.: Eine recht d&uuml;stere Auffassung.</li>
					<li>K.: Ja und nein. Es ist vielmehr ein Spiel mit der menschlichen Psyche.</li>
					<li>R.: Du spielst also gerne mit der Psyche der Menschen ?</li>
					<li>K.: Wiederum ja und nein. Ich sehe es eher so, dass ich versuche ihnen einen Ball zuzuwerfen. Was sie damit machen ist
						irgendwo ihre Sache. Es reicht mir wenn sie dar&uuml;ber nachdenken was sie beim Betrachten der Bilder empfinden.</li>
					<li>R.: Wie gehst Du damit um, dass du im Moment kaum Zeit f&uuml;r die Photographie hast.</li>
					<li>K.: Das ist wirklich nicht ganz leicht. Ich vermisse es schon einfach mit der Kamera raus zu gehen
						oder zu sagen:hey das Wetter ist perfekt, wir haben nichts vor lass uns das oder das umsetzen! Auf die Art bin ich auch 
						schon mal spontan mit zwei Modellen f&uuml;r einen halben Tag nach Venedig gefahren.</li> 
				</ul>
			</div>
			
			<div id="inhaltrechts">
				<ul>
					<li>R.: Klingt nach einer Menge Spa&szlig;.</li>
					<li>K.: Ja, das war es wirklich. Vor allem die Gruppe von 15 Japanern die pl&ouml;tzlich neben mir standen und ihre
						Schnappsch&uuml;sse machten. Aber ich weiß diese Zeiten kommen auch wieder. (grinst) Jedenfalls hoffe ich das.</li>
					<li>R.: Wie sieht die Zukunft aus ?</li>
					<li>K.: Nun im Moment z&auml;hlt in erster Linie mein Studium. Und sobald es die Zeit zul&auml;sst werde ich sie 
						sicher wieder nutzen um meine Ideen umzusetzen. Au&szlig;erdem w&uuml;rde ich sehr gerne mal eine Ausstellung machen,
						aber das ist im Moment noch Zukunftsmusik.</li>
				</ul>
			</div>			
		</div>
		
		<div id="seiteninterview">
			<ul>
				<li><a href="interview03.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;&nbsp;</a></li>
				<li><a href="interview01.php?nr=<? echo $rndnum ?>" id="seitenlink">1</a></li>
				<li><a href="interview02.php?nr=<? echo $rndnum ?>" id="seitenlink">2</a></li>
				<li><a href="interview03.php?nr=<? echo $rndnum ?>" id="seitenlink">3</a></li>
				<li><a href="interview04.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;4&gt;</a></li>
				<li><a href="interview04.php?nr=<? echo $rndnum ?>" id="seitenlink">&nbsp;&gt;</a></li>
			</ul>
		</div>
		
</div>


</body>
</html>