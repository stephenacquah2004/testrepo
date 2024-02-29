<?php
if(!empty($_POST["submit"])) {
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$user_message = $_POST["user_message"];

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("contact_form",$conn);
	mysql_query("INSERT INTO tbl_contact (fullname, email, user_message) VALUES ('" . $fullname. "', '" . $email. "','" . $user_message. "')");
	$insert_id = mysql_insert_id();
	if(!empty($insert_id)) {
	$message = "Successfully Added.";
	}
}
?>

<!DOCTYPE html>

<html>

<head>
<title>How To Create Contact Form Using PHP</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<form name="frmContact" method="post" action="">

<div class="aler_message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td colspan="2">Contact Form</td>
</tr>
<tr class="tablerow">
<td>Full Name<br/>  <input type="text" class="text_input" autofocus="autofocus" name="fullname"></td>
<td>Email<br/> <input type="text" class="text_input" autofocus="autofocus" name="email"></td>
</tr>
<tr class="tablerow">
<td colspan="2">Message<br/><textarea name="user_message" class="text_input" autofocus="autofocus" cols="60" rows="6"></textarea></td>
</tr>
<tr class="tableheader">
<td colspan="2"><input type="submit" class="btn_submit" name="submit" value="Submit"></td>
</tr>
</table>

</form>

<table style="border:2px red solid" class="table_data"  cellpadding="5">
	<tr>
		<th>
			Full Name
		</th>
		<th>
			Email
		</th>
		<th>
			Message
		</th>
	</tr>
<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("contact_form",$conn);
$result= mysql_query("select * from tbl_contact order by tbl_contact_id DESC ") or die (mysql_error());
while ($row= mysql_fetch_array ($result) ){
$id=$row['tbl_contact_id'];
?>
	<tr style="text-align:center;">
		<td style="width:200px;">
			<?php echo $row['fullname']; ?>
		</td>
		<td style="width:200px;">
			<?php echo $row['email']; ?>
		</td>
		<td style="width:200px; color:blue;">
			<?php echo $row['user_message']; ?>
		</td>
	</tr>
<?php } ?>
</table>

</body>

</html>