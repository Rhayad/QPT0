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
					<li>R.: Regen und K&auml;lte.</li>
					<li>K.: K&auml;lte gar nicht mal so. Vielen Modellen macht es f&uuml;r eine gewisse Zeit nichts aus auch mal zu frieren. 
						Au&szlig;erdem habe ich immer was zum aufw&auml;rmen dabei.</li>
					<li>R.: Zum Beispiel ?</li>
					<li>K.: Decken, hei&szlig;e Getr&auml;nke und manchmal schleppe ich auch einen Heizstrahler mit zum Aufnahmeort.</li>
					<li>R.: Das klingt aber sehr r&uuml;hrend.</li>
					<li>K.: Es hat sich jedenfalls noch kein Model dar&uuml;ber beschwert.</li>
					<li>R.: (lacht)</li>
					<li>K.: Nein, mal ganz im ernst. Ich will, dass das Model sich trotz schwieriger Bedingungen wohl f&uuml;hlt. 
						Ansonsten leidet oft nicht nur die Stimmung am Set, sondern auch das Ergebnis.</li>
					<li>R.: Warum suchst Du bei Deiner Locationauswahl so gerne die &Ouml;ffentlichkeit bzw. nimmst Beobachter in Kauf ?</li>
					<li>K.: Aus haupts&auml;chlich zwei Gr&uuml;nden: Zum einen mag ich es die Nat&uuml;rlichkeit des Menschen in einer
						gesellschaftlich un&uuml;blichen Situation darstellen, z.B. beim Shoppen oder beim Sightsseing. Zum anderen finde ich
						die Reaktion der "zuf&auml;lligen Beobachter" immer sehr spannend und zum Teil auch lustig.</li>
				</ul>
			</div>
			
			<div id="inhaltrechts">
				<ul>
					
					<li>R.: Provozierst du dabei gerne ?</li>
					<li>K.: Ja, sehr gerne sogar. Aber auf eine andere Art als fr&uuml;her.</li>
					<li>R.: Was sagen die Modelle dazu ? Sind die immer begeistert davon ?</li>
					<li>K.: Es stimmt schon, nicht viele trauen sich sich so freiz&uuml;gig in der &Ouml;ffentlichkeit zu zeigen. Aber es gibt schon
						ein paar, denen es entweder nichts ausmacht oder aber die Idee ebenso interessant finden wie ich.</li>
					<li>R.: Du sprachst gerade von Provokation und deinen früheren Arbeiten. Was fasziniert Dich so an der Gothic-Szene ?</li>
					<li>K.: Das habe ich mich auch schon oft gefragt.</li>
					<li>R.: Und nach den vielen Jahren noch immer keine Antwort gefunden ?</li>
					<li>K.: Nicht auf alles. Es ist einfach die Faszination fürs Extreme. Es gibt glaube ich nur sehr wenige Grenzen.
						Vor allem was Ausdruck und Pers&ouml;nlichkeit angeht, Kleidung und Styling. Es hat etwas Geheimnisvolles, D&uuml;steres.
						Ich arbeite sehr gerne mit Modellen aus dieser Szene und benutze ihre extremen Charakterz&uuml;ge. Nur meist
						nicht mehr so plakativ wie fr&uuml;her.</li>
						<li>R.: Was hei&szlig;t nicht mehr so plakativ ?</li>
					<li>K.: (grinst) Ich arbeite mit sehr viel weniger Kunstblut.</li>
					<li>R.: Und dennoch stellst Du gerne den Tod dar. Vor allem bei Deinem aktuellen "Schmetterling - Projekt".</li>
					<li style="width:245px">K.: Ja das stimmt. Ich zeige sehr gerne Kontraste und Gegens&auml;tze. Sei es nun
						Gut und B&ouml;se oder eben die Arbeit mit den Schmetterlingen.</li>
					<li>R.: Magst Du den Gegensatz dabei n&auml;her erkl&auml;ren ?</li>
				</ul>
			</div>
			
		</div>
		
		<div id="seiteninterview">
			<ul>
				<li><a href="interview02.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;&nbsp;</a></li>
				<li><a href="interview01.php?nr=<? echo $rndnum ?>" id="seitenlink">1</a></li>
				<li><a href="interview02.php?nr=<? echo $rndnum ?>" id="seitenlink">2</a></li>
				<li><a href="interview03.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;3&gt;</a></li>
				<li><a href="interview04.php?nr=<? echo $rndnum ?>" id="seitenlink">4</a></li>
				<li><a href="interview04.php?nr=<? echo $rndnum ?>" id="seitenlink">&nbsp;&gt;</a></li>
			</ul>
		</div>

</div>


</body>
</html>