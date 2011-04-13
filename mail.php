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
		
			<h2>...solltet Ihr Fragen oder Anregungen haben so freue ich mich über eine Nachricht...</h2>
			<form action="mail01.php" method="post" name="mail" onsubmit="return abc();">
			<table>
				<tr>
					<td>Vorname *</td>
					<td colspan="2"><input type="text" name="vorname" id="vorname" style="width:200px" /></td>
				</tr><tr>
					<td>Nachname *</td>
					<td colspan="2"><input type="text" name="nachname" id="nachname" style="width:200px" /></td>
				</tr><tr>
					<td>Email *</td>
					<td colspan="2"><input type="text" name="email" id="email" style="width:200px" /></td>
				</tr><tr>
					<td>Nachricht *</td>
					<td colspan="2"><textarea name="idee" id="size2"></textarea></td>
				</tr><tr>
					<td>* bitte ausf&uuml;llen</td>
					<td colspan="2"><input type="submit" name="submit" value="abschicken" style="margin-left:70px; height:20px" /></td>
				</tr>
			</table>
			</form>
		</div>

</div>


</body>
</html>