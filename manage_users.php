<header>
	<?php include 'admin_header.php'?>
</header>

<article style='padding:50px;'>
<table width='100%' style='background:lightblue;'>
<tr style='background:brown;color:white;'>
	<th>Login ID</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Security Question</th>
	<th>Answer</th>
	<th></th>
</tr>
<?php
	include 'includes/db.php';

	$sql = "select user_id,user_name,user_phone,user_email,s_question,s_ans,active_flag from users,s_questions where users.s_id = s_questions.s_id";
	$result = pg_query($con, $sql);

	while($row = pg_fetch_row($result)){
?>
<tr>
	<td align='center'><?php echo $row[0]?></td>
	<td align='center'><?php echo $row[1]?></td>
	<td align='center'><?php echo $row[2]?></td>
	<td align='center'><?php echo $row[3]?></td>
	<td align='center'><?php echo $row[4]?></td>
	<td align='center'><?php echo $row[5]?></td>
 	<td align='center' style='padding:10px;'><a href='change_active.php?id=<?php echo $row[0]?>&active=<?php echo $row[6]?>'><?php echo $row[6]==0?'Activate':'Deactivate'?></a></td>
</tr>
<?php
	}
?>
</table>
</article>

<footer>
	<?php include 'footer.php'?>
</footer>
