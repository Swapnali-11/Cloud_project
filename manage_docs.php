<header>
	<?php include 'admin_header.php'?>
</header>

<article style='padding:50px;'>
<table width='70%' style='background:white;'>
<tr style='background:black;color:white;'>
<th>Document ID</th>
<th>Path</th>
<th>Upload Date</th>
<th>Size</th>
<th>User ID</th>
<th></th>
</tr>

<?php
	include 'includes/db.php';

	$sql = "select * from documents where delete_flag=0";
	$result = pg_query($con, $sql);

	while($row = pg_fetch_row($result))
	{
?>
<tr>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo filesize($row[1])?></td>
	<td><?php echo $row[3]?></td>
	<td><a href='delete_doc1.php?did=<?php echo $row[0]?>' class='links'>Delete</a></td>
</tr>
<?php
	}
?>
</article>

<footer>
	<?php include 'footer.php'?>
</footer>
