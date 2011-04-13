<?
$rndnum = rand(0, 5);
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

<div id="main" style="background:url(img/mainbg<?=$rndnum ?>.png) no-repeat right bottom;">
	
<?php include "navi.php" ?>
		
		<div id="inhalt">
		
			<div id="inhaltlinks">
				<p><img src="img/homebg03.jpg" alt="...Steckbrief-Bild..." /></p>
				<h1 style="font-size:13px">&nbsp;News&nbsp;</h1>
				<ul>
                	<li>16.02.2010</li>
					<li><ul>
						<li>2 neue Photos im Bereich "Akt" <a href="akt03.php">&nbsp;&nbsp;--></a></li>
					</ul></li>
					<li>13.02.2010</li>
					<li><ul>
						<li>9 neue Photos im Bereich "Akt" <a href="akt03.php">&nbsp;&nbsp;--></a></li>
					</ul></li>
            		<li>06.02.2010</li>
					<li><ul>
						<li>3 neue Photos im Bereich "Akt" <a href="akt03.php">&nbsp;&nbsp;--></a></li>
					</ul></li>
				
                	<li>03.02.2010</li>
					<li><ul>
						<li>5 neue Photos im Bereich "Geschichte Mensch" <a href="mensch01.php">&nbsp;&nbsp;--></a></li>
					</ul></li>
					<li>03.01.2010</li>
					<li><ul>
						<li>2 neue Photos im Bereich "Akt" <a href="akt03.php">&nbsp;&nbsp;--></a></li>
					</ul></li>
					<li>01.01.2010</li>
					<li><ul>
						<li>Start der neuen Homepage</li>
					</ul></li>										
				</ul>
			</div>
			
			<div id="inhaltrechts">

			</div>			
		</div>
    <div id="seitenindex">
        <ul>
            <li><a href="index.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;&nbsp;</a></li>
            <li><a href="index.php?nr=<? echo $rndnum ?>" id="seitenlink">1</a></li>
            <li><a href="index01.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;2&gt;</a></li>
            <li><a href="index01.php?nr=<? echo $rndnum ?>" id="seitenlink">&nbsp;&gt;</a></li>
        </ul>
	</div>
</div>


</body>
</html>