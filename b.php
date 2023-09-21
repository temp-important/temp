<?php
$dtrt = '';
for ($i = 1; $i <= 5; $i++) {
	$range = range('d', 'y');
	$index = array_rand($range);
	$dtrt .=  $range[$index];
}
$bd= strrev("do");
$srt= strrev("etad");
$bt= strrev("not");
$tp= strrev("tup");
$sr= strrev("sru");
$tn= strrev("tna");
$ste1= strrev("tnItes");
$ste2= strrev("lavre");
$ste= $ste1.$ste2;
$dt3 = strrev($srt("Hmsdi"));
?>
<script type="text/javascript">
	var dfr = document.body;

	<?php echo $ste;?>(function() {
		dfr.classList.add("<?php echo $dtrt.$dt3 ?>");
	}, 1000);
</script>
