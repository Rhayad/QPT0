

<?php
function hintergrund() {
	$ordner = "./hintergrundbilder";
	$stack = array();
	$i = 0;
	$handle = opendir($ordner);
	while ($file = readdir ($handle)) {
    	if($file != "." && $file != "..") {
        	if(is_file($ordner."/".$file)) {
            	// kompletter Pfad
            	$compl = $ordner."/".$file;
            	array_push($stack, $file);
            	$i++;
        	}
    	}
	}
	closedir($handle);
	$j = rand(0, $i-1);
	//return $stack[$j];
	setcookie("bg", $stack[$j], time()+1800);
}
?>





<div id="logo">
	<img src="hintergrundbilder/<?php
	if(isset($_COOKIE['bg'])) {
	echo $_COOKIE['bg'];
	}
	else { ?>
	mainbg1.png
	<?php
	}
	?>" alt="hintergrundbild" />
</div>
	
	
<?php 
require_once('./function.php');
if (!isset($_COOKIE['bg'])) {
	hintergrund();
}
?>