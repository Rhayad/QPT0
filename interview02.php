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
					<li>K.: Anf&auml;nglich manchmal schon. Aber gerade das finde ich spannend. Man bekommt dadurch eine 
						viel intensivere Beziehung zu dem Model. Und ich glaube das sieht man auch in den Ergebnissen.
						Au&szlig;erdem nehme ich mir immer sehr viel Zeit f&uuml;r die Vorbesprechung.</li>
					<li>R.: Warum machst Du eigentlich haupt&auml;chlich Akt-Aufnahmen ?</li>
					<li>K.: Das hat verschiedene Gr&uuml;nde. Ich finde Akt-Bilder ehrlicher.</li>
					<li>R.: Ehrlicher ?</li>
					<li>K.: Ja. Es kommt nicht immer darauf an ob man sieht, das ein Mensch auf dem Bild gar nichts anhat, 
						sondern vielmehr ob es sich noch verstecken kann. Kleidung ist wie ein Baum hinter den man mal schnell
						springen kann wenn einem unwohl ist. Bei Aktaufnahmen ist das viel schwieriger, macht aber auch das 
						Ergebnis viel interessanter.</li>
					<li>R.: Das kann aber manchmal ganz sch&ouml;n in die Hose gehen, oder ?</li>
					<li>K.: Ja klar. Viel ist von dem Model abh&auml;ngig. Aber genau das ist ja erw&uuml;nscht. Die Modelle 
						sollen sich mit der Situation auseinandersetzen und die Idee hinter den Aufnahmen verinnerlichen.</li>
					<li>R.: Klingt nach einer Menge Arbeit.</li>
					<li>K.: Nat&uuml;rlich erfordet das etwas mehr Engagement als einfach ein Model zu buchen und drauflos zu knipsen.
						Aber das ist einfach nicht die Atmosph&auml;re in der ich arbeiten m&ouml;chte.</li>
				</ul>
			</div>
			
			<div id="inhaltrechts">
				<ul>
					<li>R.: Kommt eine solche Atmosph&auml;re nicht auch bei Portrait-Aufnahmen auf ?</li>
					<li>K.: Nicht so eine intensive.</li>
					<li>R.: Was ist Deine gr&ouml;&szlig;te Inspiration bei Deinen Ideen ?</li>
					<li>K.: Ich glaube die Haut des Menschen. Ich finde ein nackter K&ouml;rper hat seine eigene Geschichte zu 
						erz&auml;hlen, mit all seinen Merkmalen oder Zeichen wie Muttermalen oder auch Narben.</li>
					<li>R.: Warum arbeitest Du so selten mit m&auml;nnlichen Modellen ?</li>
					<li>K.: Ich habe den Eindruck M&auml;nnern f&auml;llt es sehr viel schwerer nackt vor der Kamera zu stehen. Ich bekomme 
						jedenfalls fast nur Anfragen von Frauen. Frag mich aber nicht warum.</li>
					<li>R.: Du arbeitest gerne außerhalb eines Studios. Stimmt das ?</li>
					<li>K.: Ja. Du musst auf viel mehr Dinge achten. Es ist was anderes als ein
						paar Kn&ouml;pfe einzustellen. Versteh mich nicht falsch, ich will auf keinen Fall die Arbeiten
						von Kollegen abwerten. Es gibt wahre Belichtungsmeister von deren K&ouml;nnen ich meilenweit entfernt bin.
						Aber f&uuml;r mich ist es was anderes wenn Du von dem Licht abh&auml;ngig bist was Mutter Natur einem zur Verf&uuml;gung
						stellt. <br /> Au&szlig;erdem hat man in der Natur viel mehr M&ouml;glichkeiten f&uuml;r die Bildgestaltung.</li>
					<li>R.: Und was das angeht hat Salzburg viel zu bieten ?</li>
					<li>K.: Enorm viel. Ich habe hier schon so viele Locations gefunden und bisher leider nur an einem Bruchteil von 
						ihnen arbeiten k&ouml;nnen.</li>
					<li>R.: Warum ?</li>
					<li style="width:245px">K.: Zeitgr&uuml;nde. Vor allem auf Grund meines Studiums. Aber auch das Wetter spielt oft eine kleine Rolle.</li>
				</ul>
			</div>
			
		</div>
		
		<div id="seiteninterview">
			<ul>
				<li><a href="interview01.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;&nbsp;</a></li>
				<li><a href="interview01.php?nr=<? echo $rndnum ?>" id="seitenlink">1</a></li>
				<li><a href="interview02.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;2&gt;</a></li>
				<li><a href="interview03.php?nr=<? echo $rndnum ?>" id="seitenlink">3</a></li>
				<li><a href="interview04.php?nr=<? echo $rndnum ?>" id="seitenlink">4</a></li>
				<li><a href="interview03.php?nr=<? echo $rndnum ?>" id="seitenlink">&nbsp;&gt;</a></li>
			</ul>
		</div>

</div>


</body>
</html>