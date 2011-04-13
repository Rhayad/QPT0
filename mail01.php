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
		
	if (!isset($_POST["idee"]) ||
		!is_string($_POST["idee"]) ||
		trim($_POST["idee"]) == "") {
		$ok .= "<p>< Nachricht ></p>";
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
		$mailtext .= "\nNachricht: ";
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
			
			<?php } ?>
		
			<form method="post">
			<table>
				<tr>
					<td>Vorname *</td>
					<td colspan="2"><input type="text" name="vorname" id="vorname" style="width:200px" 
					value="<?php
							if (isset($_POST["vorname"]) &&
								is_string($_POST["vorname"])) {
								print(htmlspecialchars($_POST["vorname"]));
								}
							?>" /></td>
				</tr><tr>
					<td>Nachname *</td>
					<td colspan="2"><input type="text" name="nachname" id="nachname" style="width:200px"  
					value="<?php
							if (isset($_POST["nachname"]) &&
								is_string($_POST["nachname"])) {
								print(htmlspecialchars($_POST["nachname"]));
								}
							?>" /></td>
				</tr><tr>
					<td>Email *</td>
					<td colspan="2"><input type="text" name="email" id="email" style="width:200px"  
					value="<?php
							if (isset($_POST["email"]) &&
								is_string($_POST["email"])) {
								print(htmlspecialchars($_POST["email"]));
								}
							?>" />
					</td>
				</tr><tr>
					<td>Nachricht *</td>
					<td colspan="2"><textarea name="idee" id="size2">
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
			<h2>Vielen Dank für Deine Mail</h2>
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