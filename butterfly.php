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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slimbox2.js"></script>

</head>

<body>

<div id="main" style="background:url(img/mainbg<?php echo $rndnum ?>.png) no-repeat right bottom;">
	
<?php include "navi.php" ?>
		
		<div id="inhalt">
			<ul>
				<li class="img"><a href="img/butterfly/Stillleben01.jpg" rel="lightbox-butterfly"><img src="img/thn/butterfly/Stillleben01thn.jpg" alt="...Butterfly Nr.1..." /></a></li>
				<li class="img"><a href="img/butterfly/Stillleben02.jpg" rel="lightbox-butterfly"><img src="img/thn/butterfly/Stillleben02thn.jpg" alt="...Butterfly Nr.2..." /></a></li>
				<li class="img"><a href="img/butterfly/Stillleben03.jpg" rel="lightbox-butterfly"><img src="img/thn/butterfly/Stillleben03thn.jpg" alt="...Butterfly Nr.3..." /></a></li>
				<li class="img"><a href="img/butterfly/Stillleben04.jpg" rel="lightbox-butterfly"><img src="img/thn/butterfly/Stillleben04thn.jpg" alt="...Butterfly Nr.4..." /></a></li>
				<li class="img"><a href="img/butterfly/Stillleben05.jpg" rel="lightbox-butterfly"><img src="img/thn/butterfly/Stillleben05thn.jpg" alt="...Butterfly Nr.5..." /></a></li>
				<li class="img"><a href="img/butterfly/Stillleben06.jpg" rel="lightbox-butterfly"><img src="img/thn/butterfly/Stillleben06thn.jpg" alt="...Butterfly Nr.6..." /></a></li>
			</ul>
		</div>

</div>


</body>
</html>