
<style>

</style>
<?php

	$dt2 = date("Ymd");
	$ds = "data";
	$temp = "temp";
	$img = "images";
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
?>



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
