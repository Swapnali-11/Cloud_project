<header>
	<?php include 'user_header.php'?>
</header>

<article style='padding:50px;'>
<table width='70%' style='background:white;'>
<tr style='background:black;color:white;'>
<th>Document ID</th>
<th>Path</th>
<th>Upload Date</th>
<th>Size</th>
<th></th>
</tr>

<?php
	session_start();
	$uid = $_SESSION['uid'];

	include 'includes/db.php';

	$sql = "select * from documents where user_id='$uid' and delete_flag=1";
	$result = pg_query($con, $sql);

	while($row = pg_fetch_row($result))
	{
?>
<tr>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo filesize($row[1])?></td>
	<td><a href='recover_doc1.php?did=<?php echo $row[0]?>' class='links'>Recover</a></td>
</tr>
<?php
	}
?>
</article>

<footer>
	<?php include 'footer.php'?>
</footer>
