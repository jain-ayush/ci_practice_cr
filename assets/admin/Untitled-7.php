<body>
<table width="27%" border="1" align="center" cellpadding="0" 
cellspacing="0">
<tr>
<th width="43%" scope="col">User Name</th>
<th width="57%" scope="col">Status</th>
</tr>
<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$sdb=mysql_select_db("demo",$conn) or die(mysql_error());
$select=mysql_query("select * from user_mangement");
while($user=mysql_fetch_array($select))
{
$id=$user['id'];
$username=$user['username'];
$status=$user['status'];
?>
<tr>
<td><?php echo $username?></td>
<td><?php if(($status)=='0') { ?>
<a href="status.php?status=<?php echo $user['id'];?>" onclick="return confirm('Really you activate (<?php echo $username?>)');">
<img src="images/deactivate.png" 
id="view" width="16" height="16" alt="" />Deactivated </a>
<?php } if(($status)=='1') { ?>
<a href="status.php?status=<?php echo $user['id'];?>" onclick="return confirm('Really you De-activate (<?php echo $username?>)');">
<img src="images/activate.png" width="16" id="view" height="16" alt="" />Activated</a>
<?php } ?></td><?php }?> 
</tr>
</table>
</body>