<?php
include('config/db.php');
$sql=mysql_query("select * from tbl_ordr GROUP BY Email,date");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #006633}
-->
</style>
</head>

<body>
<div style="margin:10px; float:left; width:800px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">
<table width="800" border="1" cellpadding="4" cellspacing="0" bordercolor="#ccc" style="text-align:left;  ">
  <tr>
    <td width="25%" height="44" align="center"><div align="left" class="style1">
      <div align="center">Name</div>
    </div></td>
    <td width="22%" align="center"><div align="left" class="style1">
      <div align="center">Email</div>
    </div></td>
    <td width="16%" align="center"><div align="left" class="style1">
      <div align="center">Product Name</div>
    </div></td>
    <td width="10%" align="center"><div align="left" class="style1">
      <div align="center">Total</div>
    </div></td>
    <td width="13%" align="center"><div align="left" class="style1">
      <div align="center">Date</div>
    </div></td>
    <td width="14%" align="center"><div align="left" class="style1">
      <div align="center">Download</div>
    </div></td>
  </tr>
  <?php while($res = mysql_fetch_array($sql)) { ?>
  <tr>  
    <td align="center"><div align="left"><?php echo $res['name']; ?></div></td>
    <td align="center"><div align="left"><?php echo $res['Email']; ?></div></td>
    <td align="center"><div align="left"><?php echo $res['prod_name']; ?></div></td>
    <td align="center"><div align="left"><?php echo $res['prod_total']; ?></div></td>
    <td align="center"><div align="left"><?php echo $res['date']; ?></div></td>
    <td align="center"><div align="center"><a href="pdf.php?email=<?php echo $res['Email']; ?>&date=<?php echo $res['date']; ?>" target="_blank"><img src="img/download.png" /></a></div></td>
  </tr>
  <?php } ?>
</table>
</div>
</body>
</html>