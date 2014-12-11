<?php
include('config/db.php');
if(isset($_POST['submit']))
{
	 $valarray = $_POST['listitems'];
	 
	
	 
	 for($j=0;$j<=count($valarray);$j++)
	 {
		 		$val = explode("-",$valarray[0]);		 
		 
		 		$sql = mysql_query("SELECT * FROM tbl_prod WHERE name='".$val[0]."'");
				$res = mysql_fetch_assoc($sql) or die(mysql_error());
				
				$name= $_POST['Name'].' '.$_POST['Lname'];
				$Business=$_POST['Bussiness'];
				$Email= $_POST['EMail'];
				$Phone= $_POST['Phone'];
				$Sadr1=$_POST['Saddress1'];
				$Sadr2=$_POST['Saddress2'];
				$City=$_POST['City'];
				$State_Province=$_POST['State'];
				$Zipcode= $_POST['Zip'];
				$Country= $_POST['Country'];
				
				$prod_name = $res['name'];
				$kg = $res['kg'];
				$ps = $res['ps'];
				$date = date('m-d-Y');
				
				if($val[2] == 'kg')
				{
					$prod_total = $val[1] * $kg;
				}
				else if($val[2] == 'ps')
				{
					$prod_total = $val[1] * $ps;
				}
				
				$sql_ins=mysql_query("INSERT INTO tbl_ordr(name ,Bussiness_Name, Email, Phone, Sadr1, Sadr2, City, Stae_Province, Zip_Code, Country, prod_name, prod_total, date) VALUES ('$name', '$Business', '$Email', '$Phone', '$Sadr1', ' $Sadr2', '$City', '$State_Province', '$Zipcode', '$Country', '$prod_name', '$prod_total', '$date')");

	
	 }
	 
	
		 echo '<script type="text/javascript">alert("your order submitted successfully");</script>';

	 
	
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/ecmascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
	$("div#result").removeClass("rsl");
$(".search").keyup(function() 
{ 
	$("div#result").addClass("rsl");
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
    $.ajax({
    type: "POST",
    url: "search.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;    
});

jQuery("#result").live("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name).text();
    $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$('#searchid').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>

<script>
$(document).ready(function(){
$('#btn_AddToList').click(function () {
    var val = $('#searchid').val();
	var prod = $('#item').val();
	
	if($("input[type='radio'].radioBtnClass").is(':checked')) {
    var qty = $("input[type='radio'].radioBtnClass:checked").val();   
}

    $('#lst_Regions').append('<option value="' +val+ "-" +prod+ "-" +qty+'" selected="selected">' +  val  + " -" + prod + " " + qty +'</option>');	
	$('#searchid').val('').focus();
	
})

$('#remove').click(function () {
    $("#lst_Regions option:selected").remove();
	//$("#lst_Regions option:selected").val();
	$('#lst_Regions option').attr("selected","selected");
});
});
 
</script>
<style type="text/css">
.content{ float:left; }
.clr { clear: both; padding: 10px 0 0; }
.cln label { float: left;
    width: 180px;
}
.cln.clr > input {
    float: left;
    width: 180px;
}
.rsl {border: 1px solid #CCCCCC; display: block !important; float: left; /*margin: 28px 0 10px -159px;*/ padding: 5px; width: 138px; margin:-12px 0 10px 0;}
</style>
</head>

<body>
<div style="margin:10px; float:left; width:580px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">
<form name="myForm" method="post" enctype="multipart/form-data" action="index.php" onsubmit="return validate();">

<fieldset style=" border-radius:6px; border:1px solid #000; margin-bottom:10px;">
<legend> Your Personal Details </legend>
<table width="563" border="0">
  <tr>
    <td width="149"><label>Full Name: *</label> </td>
    <td width="150"><input type="text" name="Name" id="a" placeholder="first name" /></td>
    <td width="250"><input type="text" name="Lname" id="b" placeholder="last name"  /></td>
  </tr>
  <tr>
    <td><label>Bussiness Name: </label> </td>
    <td><input type="text" name="Bussiness" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label>Email: *</label></td>
    <td><input type="text" name="EMail" /></td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td><label>Phone Number: *</label></td>
    <td><input type="text" name="Phone" /></td>
    <td>&nbsp;</td>
  </tr>
</table>

</fieldset>

     


<fieldset style=" border-radius:6px; border:1px solid #000; margin-bottom:10px;">
<legend>Billing Address </legend>
<table width="563" border="0">
    <tr>
    <td width="150"><label>Street Address1: *</label></td>
    <td width="403"><input type="text" name="Saddress1" /></td>
  </tr>
  
      <tr>
    <td><label>Street Address2: *</label></td>
    <td><input type="text" name="Saddress2" /></td>
  </tr>
  
   <tr>
    <td><label>City: *</label></td>
    <td><input type="text" name="City" /></td>
  </tr>
  
   <tr>
    <td><label>State/Province: *</label></td>
    <td><input type="text" name="State" /></td>
  </tr>
  
     <tr>
    <td><label>Postal/Zip Code: *</label></td>
    <td><input type="text" name="Zip" /></td>
  </tr>
  
     <tr>
    <td><label>Country: *</label></td>
    <td><select name="Country" style="width:182px; height:25px;">
<option value="1" selected>Australia</option>
</select></td>
  </tr>
</table>
</fieldset>


<fieldset style=" border-radius:6px; border:1px solid #000;">
<legend>Product</legend>
<div class="content clr">
<label style="width:180px; float:left;">Choose The Product</label><br />

<input type="text" class="search" id="searchid" name="srch" placeholder="Search for product" style="float:left; margin:0 10px 0 0;" />

<select name="item" id="item">
<?php for($i=1; $i<=100; $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>

<input type="radio" class="radioBtnClass" name="qty" value="kg" checked="checked" />KG
<input type="radio" class="radioBtnClass" name="qty" value="ps" />PS
<input type="button" name="add" id="btn_AddToList" value="add" class="btn btn-success" />

</div>

<div style="float: left; margin: 0px 0px 0px 15px;">
<select name="listitems[]" id="lst_Regions" style="width: 150px;" multiple="multiple">
</select>
<span id="remove" style="vertical-align:top; margin:5px;"><img src="img/delete_icon.gif" width="13" height="13" border="none" /></span>
</div>

<div id="result" class="clr"></div>

<div class="cln clr">
<label>Additional Requests :</label>
<textarea rows="6" cols="40" name="additionalRequests" class="form-textarea" id="input_14"></textarea>
</div>


<div style="clear:both;"></div>
<input type="submit" name="submit" value="submit" style="float: left; margin: 20px 0 0 180px;" />
</fieldset>

</form>

</div>

</body>
</html>