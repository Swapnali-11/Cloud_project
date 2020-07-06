<?php
	include 'includes/db.php';

	$n = rand(1,22);

	$rs = pg_query($con, "select * from captcha where cap_id=$n");
	$row = pg_fetch_row($rs);

	$str="<img src='$row[1]' width=100 height=50/><input type='hidden' id='capvalue' value='$row[2]'>";
?>
<?php echo $str?>
