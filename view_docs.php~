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
<th></th>
</tr>

<?php
	session_start();
	$uid = $_SESSION['uid'];

	include 'includes/db.php';

	$sql = "select doc_id,doc_path,upload_date,size from documents where user_id='$uid' and delete_flag=0";
	$result = pg_query($con, $sql);

	while($row = pg_fetch_row($result))
	{
?>
<tr>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo $row[3]?></td>
	<td><a href='delete_doc.php?did=<?php echo $row[0]?>' class='links'>Delete</a></td>
	<td><a href='download_doc.php?did=<?php echo $row[0]?>' class='links'>Download</a></td>
</tr>
<?php
	}
?>
</article>

<footer>
	<?php include 'footer.php'?>
</footer>
