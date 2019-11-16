<?php require_once('Connections/koneksi.php'); ?>
<?php
mysql_select_db($database_koneksi, $koneksi);
$query_order = "SELECT * FROM `order`";
$order = mysql_query($query_order, $koneksi) or die(mysql_error());
$row_order = mysql_fetch_assoc($order);
$totalRows_order = mysql_num_rows($order);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
body {
	background-color: #000000;
}
.style2 {color: #FF9999}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="730" height="373" border="1" align="center">
    <tr>
      <td width="605" height="51" bgcolor="#F0F0F0"><h1><span class="style1"><span class="style2">ARKADEMY</span> COFFEE SHOP </span></h1></td>
      <td width="109" bgcolor="#FFFFFF"><label>
        <div align="center"><a href="add.php">ADD</a></div>
        </label></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
        <table border="1">
          <tr>
            <td width="76">No</td>
            <td width="93">Cashier</td>
            <td width="104">Product</td>
            <td width="112">Category</td>
            <td width="151">Price</td>
            <td width="151">Action</td>
          </tr>
          <?php do { ?>
            <tr>
              <td><?php echo $row_order['No']; ?></td>
              <td><?php echo $row_order['Name']; ?></td>
              <td><?php echo $row_order['Product']; ?></td>
              <td><?php echo $row_order['Category']; ?></td>
              <td><?php echo $row_order['Price']; ?></td>
              <td><a href="edit.php">Edit</a> |<a href="delete.php"> Delete</a> </td>
            </tr>
            <?php } while ($row_order = mysql_fetch_assoc($order)); ?>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($order);
?>
