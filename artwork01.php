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
				<li class="img"><a href="img/artwork/Korsett01.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett01thn.jpg" alt="...Artwork Nr.1..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett02.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett02thn.jpg" alt="...Artwork Nr.2..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett03.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett03thn.jpg" alt="...Artwork Nr.3..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett04.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett04thn.jpg" alt="...Artwork Nr.4..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett05.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett05thn.jpg" alt="...Artwork Nr.5..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett06.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett06thn.jpg" alt="...Artwork Nr.6..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett07.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett07thn.jpg" alt="...Artwork Nr.7..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett08.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett08thn.jpg" alt="...Artwork Nr.8..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett09.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett09thn.jpg" alt="...Artwork Nr.9..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett10.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett10thn.jpg" alt="...Artwork Nr.10..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett11.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett11thn.jpg" alt="...Artwork Nr.11..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett12.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett12thn.jpg" alt="...Artwork Nr.12..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett13.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett13thn.jpg" alt="...Artwork Nr.13..." /></a></li>
				<li class="img"><a href="img/artwork/Korsett14.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett14thn.jpg" alt="...Artwork Nr.14..." /></a></li>
				
				<li class="nodisplay"><a href="img/artwork/Korsett15.jpg" rel="lightbox-artwork"><img src="img/thn/artwork/Korsett15thn.jpg" alt="...Mensch Nr.15..." /></a></li>
			</ul>
		</div>
		
		<div id="seitengothic">
			<ul>
			<li><a href="artwork01.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;&nbsp;</a></li>
			<li><a href="artwork01.php?nr=<? echo $rndnum ?>" id="seitenlink">&lt;1&gt;</a></li>
			<li><a href="artwork02.php?nr=<? echo $rndnum ?>" id="seitenlink">2</a></li>
			<li><a href="artwork02.php?nr=<? echo $rndnum ?>" id="seitenlink">&nbsp;&gt;</a></li>
			</ul>
		</div>

</div>



</body>
</html>
		</div>

</div>



</body>
</html>