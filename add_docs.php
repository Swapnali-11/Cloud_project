<header>
	<?php include 'user_header.php'?>
</header>

<article style='padding:50px;'>

<?php
	include 'includes/db.php';

	$sql = "select count(*) from documents";
	$result = pg_query($con, $sql);
	$row = pg_fetch_row($result);
	$did = $row[0] + 1;

	$update = date('Y-m-d H:i:s');
?>

<form method='post' action='add_docs1.php' enctype="multipart/form-data">
<table align='center' class='user'>
<tr>
	<td colspan=2 align='center'><b>Document Details</b></td>
</tr>
<tr>
	<td><b>Document ID:</b></td>
	<td><input type='text' name='did' value='<?php echo $did?>' readOnly></td>
</tr>
<tr>
	<td><b>Upload Date:</b></td>
	<td><input type='text' name='update' value='<?php echo $update?>' readOnly></td>
</tr>
<tr>
	<td><b>Document Path:</b></td>
	<td><input type='file' name='path' required></td>
</tr>
<tr>
	<td align='center'><input type='submit' value='UPLOAD' class='btn'></td>
	<td align='center'><input type='reset' value='RESET' class='btn'></td>
</tr>
</table>
</form>



</article>

<footer>
	<?php include 'footer.php'?>
</footer>
