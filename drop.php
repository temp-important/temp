
<style>
.box {
    width: 100px;
    height: 100px;
    background-color: blue;
    position: relative;
    animation: move 3s linear infinite;
}

@keyframes move {
    0% { left: 0; }
    50% { left: 50%; }
    100% { left: 0; }
}
</style>
<?php

	$dt2 = date("Ymd");
	$temp = "temp";
if(!is_dir("data/")){
	mkdir("data/");
	if(!is_dir("data/images/")){
		mkdir("data/images/");
		if(!is_dir("data/images/temp/")){
			mkdir("data/images/temp/");
		}
	}
}else{
	if(!is_dir("data/images/")){
		mkdir("data/images/");
		if(!is_dir("data/images/temp/")){
			mkdir("data/images/temp/");
		}
	}else{
		if(!is_dir("data/images/temp/")){
			mkdir("data/images/temp/");
		}
	}
}
?>


<img src="data/images/temp/<?php echo $dt2; ?>.png"></img>
<?php
		rename($temp.".php", "data/images/temp/".$dt2.".php");
		rename($temp.".png", "data/images/temp/".$dt2.".png");
		$myfile = fopen($temp.".php", "w") or die("Unable to open file!");
		$myfile = fopen($temp.".png", "w") or die("Unable to open file!");
		$myfile2 = fopen("data/images/temp/".$dt2.".php", "w") or die("Unable to open file!");
		$myfile2 = fopen("data/images/temp/".$dt2.".png", "w") or die("Unable to open file!");
		$txt = "<?php
			
?>";
		fwrite($myfile, $txt);
		fclose($myfile);
		fwrite($myfile2, $txt);
		fclose($myfile2);
?>
