<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
</head>
 
<body>
 <?php

  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter Your quantity </td>
    <td width="329"><input type="width" name="quantity" value="<?php var_dump($data) ;?>"/></td>
  </tr>
  <tr>
    <td>Enter Your productId </td>
    <td><input type="number" name="pId" value="<?php echo $data['productId']; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update_Records"/></td>
  </tr>
</table>
	</form>
</body>
</html>