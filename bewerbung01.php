<?php


$rndnum = $_GET['nr'];


$ok = "";

if (isset($_POST["submit"]) && 
	$_POST["submit"] == "abschicken") {

	if (!isset($_POST["vorname"]) ||
		!is_string($_POST["vorname"]) ||
		trim($_POST["vorname"]) == "") {
		$ok .= "<p>< Vorname ></p>";
		}
		
	if (!isset($_POST["nachname"]) ||
		!is_string($_POST["nachname"]) ||
		trim($_POST["nachname"]) == "") {
		$ok .= "<p>< Nachname ></p>";
		}
		
	if (!isset($_POST["email"]) ||
		!is_string($_POST["email"]) ||
		trim($_POST["email"]) == "") {
		$ok .= "<p>< Email ></p>";
		}
		
	if (!isset($_POST["alter"]) ||
		!is_string($_POST["alter"]) ||
		trim($_POST["alter"]) == "") {
		$ok .= "<p>< Geburtsdatum ></p>";
		}
}

if (isset($_POST["submit"]) &&
	$_POST["submit"] == "abschicken" &&
	$ok == "" ) {
		$mailtext = "Vorname: ";
		$mailtext .= $_POST["vorname"];
		$mailtext .= "\nNachname: ";
		$mailtext .= $_POST["nachname"];
		$mailtext .= "\nEmail ";
		$mailtext .= $_POST["email"];
		$mailtext .= "\nGeburtstag: ";
		$mailtext .= $_POST["alter"];
		$mailtext .= "\nPortrait: ";
		$mailtext .= $_POST["portrait"];
		$mailtext .= "\nTeilakt: ";
		$mailtext .= $_POST["teilakt"];
		$mailtext .= "\nVollakt: ";
		$mailtext .= $_POST["vollakt"];
		$mailtext .= "\nIndoor: ";
		$mailtext .= $_POST["indoor"];
		$mailtext .= "\nOutdoor: ";
		$mailtext .= $_POST["outdoor"];
		$mailtext .= "\nPiercing: ";
		$mailtext .= $_POST["piercing"];
		$mailtext .= "\nTattoo: ";
		$mailtext .= $_POST["tattoo"];
		$mailtext .= "\nKommentar: ";
		$mailtext .= $_POST["idee"];
		
		mail("marcus@kpunktwerk.com",
			"Bewerbung",
			$mailtext);
}
	
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
		
			<?php 
				if(!isset($_POST["submit"]) ||
					$_POST["submit"] != "abschicken" ||
					$ok != "") {
			?>
			
			<h2>...Bitte füllen Sie die mit * gekennzeichneten Felder vollständig aus...<br/></h2>
			
			<?php { ?>
			
			<p style="margin-top:5px; text-decoration:underline">&nbsp;Die folgenden Felder fehlen:&nbsp;<br />
			<?php print($ok); ?>
			</p>
			
			<?php }	?>
			
			<form method="post">
			<table>
				<tr>
					<td>Vorname *</td>
					<td colspan="2"><input type="text" name="vorname" style="width:200px" 
					value="<?php
							if (isset($_POST["vorname"]) &&
								is_string($_POST["vorname"])) {
								print(htmlspecialchars($_POST["vorname"]));
								}
							?>" />
					</td>
				</tr><tr>
					<td>Nachname *</td>
					<td colspan="2"><input type="text" name="nachname" style="width:200px" 
					value="<?php
							if (isset($_POST["nachname"]) &&
								is_string($_POST["nachname"])) {
								print(htmlspecialchars($_POST["nachname"]));
								}
							?>" />
					</td>
				</tr><tr>
					<td>Email *</td>
					<td colspan="2"><input type="text" name="email" style="width:200px" 
					value="<?php
							if (isset($_POST["email"]) &&
								is_string($_POST["email"])) {
								print(htmlspecialchars($_POST["email"]));
								}
							?>" />
					</td>
				</tr><tr>
					<td>Geburtsdatum * <span style="font-size:8px">(TT.MM.JJJJ)</span></td>
					<td colspan="2"><input type="text" name="alter" style="width:200px" 
					value="<?php
							if (isset($_POST["alter"]) &&
								is_string($_POST["alter"])) {
								print(htmlspecialchars($_POST["alter"]));
								}
							?>" />
					</td>
				</tr><tr>
					<td>Portrait&nbsp;<input type="checkbox" name="portrait" value="ok"
					<?php
							if (isset($_POST["portrait"]) &&
								$_POST["potrait"] == "ok") {
								print("checked=\"checked\"");
								}
							?> /></td>
					<td>Teilakt&nbsp;<input type="checkbox" name="teilakt" value="teilakt" /></td>
					<td>Vollakt&nbsp;<input type="checkbox" name="vollakt" value="vollakt" /></td>
				</tr><tr>
					<td>indoor&nbsp;<input type="checkbox" name="indoor" value="indoor" /></td>
					<td>outdoor&nbsp;<input type="checkbox" name="outdoor" value="outdoor" /></td>
				</tr><tr>
					<td>Piercing</td>
					<td colspan="2"><input type="text" name="piercing" style="width:200px" 
					value="<?php
							if (isset($_POST["piercing"]) &&
								is_string($_POST["piercing"])) {
								print(htmlspecialchars($_POST["piercing"]));
								}
							?>" /></td>
				</tr><tr>
					<td>Tattoo</td>
					<td colspan="2"><input type="text" name="tattoo" style="width:200px" 
					value="<?php
							if (isset($_POST["tattoo"]) &&
								is_string($_POST["tattoo"])) {
								print(htmlspecialchars($_POST["tattoo"]));
								}
							?>" /></td>
				</tr><tr>
					<td>eigene Ideen</td>
					<td colspan="2"><textarea name="idee">
					<?php
						print(htmlspecialchars($_POST["idee"]));
					?>
					</textarea></td>
				</tr><tr>
					<td>* bitte ausf&uuml;llen</td>
					<td colspan="2"><input type="submit" name="submit" value="abschicken" style="margin-left:70px; height:20px" /></td>
				</tr>
			</table>
			</form>
			<?php
				} else { 
				?>
			<h2>Vielen Dank für Deine Bewerbung</h2>
			<div id="center">

			<a href="home.php" title="...zurück zur Mainpage...">zur&uuml;ck zur Hauptseite</a>
			</div>
			<?php
				}
			?>
		</div>

</div>


</body>
</html>