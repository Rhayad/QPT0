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
			
			<h2>...Wenn Ihr mal Lust habt als Model mit mir zu arbeiten so schreibt mir einfach...</h2>
			<form action="bewerbung01.php" method="post" name="bewerbung" onsubmit="return check();">
			<table>
				<tr>
					<td>Vorname *</td>
					<td colspan="2"><input type="text" name="vorname" style="width:200px" /></td>
				</tr><tr>
					<td>Nachname *</td>
					<td colspan="2"><input type="text" name="nachname" style="width:200px" /></td>
				</tr><tr>
					<td>Email *</td>
					<td colspan="2"><input type="text" name="email" style="width:200px" /></td>
				</tr><tr>
					<td>Geburtsdatum * <span style="font-size:8px">(TT.MM.JJJJ)</span></td>
					<td colspan="2"><input type="text" name="alter" style="width:200px" /></td>
				</tr><tr>
					<td>Portrait&nbsp;<input type="checkbox" name="portrait" /></td>
					<td>Teilakt&nbsp;<input type="checkbox" name="teilakt" /></td>
					<td>Vollakt&nbsp;<input type="checkbox" name="vollakt" /></td>
				</tr><tr>
					<td>indoor&nbsp;<input type="checkbox" name="indoor" /></td>
					<td>outdoor&nbsp;<input type="checkbox" name="outdoor" /></td>
				</tr><tr>
					<td>Piercing</td>
					<td colspan="2"><input type="text" name="piercing" style="width:200px" /></td>
				</tr><tr>
					<td>Tattoo</td>
					<td colspan="2"><input type="text" name="tattoo" style="width:200px" /></td>
				</tr><tr>
					<td>Kommentar</td>
					<td colspan="2"><textarea name="idee"></textarea></td>
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