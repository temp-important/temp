
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
<div class="box"></div>
<?php

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
