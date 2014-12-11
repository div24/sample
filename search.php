<?php
include('config/db.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select name from tbl_prod where name like '%$q%' order by name");
while($row=mysql_fetch_array($sql_res))
{
$username=$row['name'];
$b_username='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
?>
<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span>&nbsp;<br/>
</div>
<?php
}
}
?>