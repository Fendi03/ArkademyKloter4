<?php require_once('Connections/koneksi.php'); ?>
<?php
mysql_select_db($database_koneksi, $koneksi);
$query_kasir = "SELECT * FROM cashier";
$kasir = mysql_query($query_kasir, $koneksi) or die(mysql_error());
$row_kasir = mysql_fetch_assoc($kasir);
$totalRows_kasir = mysql_num_rows($kasir);

mysql_select_db($database_koneksi, $koneksi);
$query_kategori = "SELECT * FROM category";
$kategori = mysql_query($query_kategori, $koneksi) or die(mysql_error());
$row_kategori = mysql_fetch_assoc($kategori);
$totalRows_kategori = mysql_num_rows($kategori);

mysql_select_db($database_koneksi, $koneksi);
$query_produk = "SELECT * FROM product";
$produk = mysql_query($query_produk, $koneksi) or die(mysql_error());
$row_produk = mysql_fetch_assoc($produk);
$totalRows_produk = mysql_num_rows($produk);
?>
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $cashier = $_POST['cashier'];
        $product = $_POST['product'];
        $category = $_POST['category'];
		$price = $_POST['price'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',product='$product',category='$category', price='$price' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: 6b.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $cashier = $_POST['cashier'];
        $product = $_POST['product'];
        $category = $_POST['category'];
		$price = $_POST['price'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FF9999;
}
body {
	background-color: #000000;
}
.style2 {color: #000000}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="730" height="366" border="1" align="center">
    <tr>
      <td height="44" bgcolor="#FFFFFF"><h1><span class="style1">EDIT</span></h1>      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td valign="top"><div align="center">
        <div align="left">
          <select name="select" name="cashier">
            <?php
do {  
?>
            <option value="<?php echo $row_kasir['id']?>"<?php if (!(strcmp($row_kasir['id'], $row_kasir['name']))) {echo "selected=\"selected\"";} ?>><?php echo $row_kasir['name']?></option>
            <?php
} while ($row_kasir = mysql_fetch_assoc($kasir));
  $rows = mysql_num_rows($kasir);
  if($rows > 0) {
      mysql_data_seek($kasir, 0);
	  $row_kasir = mysql_fetch_assoc($kasir);
  }
?>
          </select>
        </div>
        </label>
</div>
        <div align="left">
          <label>
          <select name="select2" name="product">
            <?php
do {  
?>
            <option value="<?php echo $row_produk['id']?>"<?php if (!(strcmp($row_produk['id'], $row_kategori['name']))) {echo "selected=\"selected\"";} ?>><?php echo $row_produk['name']?></option>
            <?php
} while ($row_produk = mysql_fetch_assoc($produk));
  $rows = mysql_num_rows($produk);
  if($rows > 0) {
      mysql_data_seek($produk, 0);
	  $row_produk = mysql_fetch_assoc($produk);
  }
?>
          </select>
        </label>
          <p>
            <label>
            <input name="textfield" type="text" name="category" value="<?php echo $row_kategori['name']; ?>" />
            </label>
          </p>
          <p>
            <label>
            <input name="textfield2" type="text" name="price" value="<?php echo $row_produk['price']; ?>" />
            </label>
          </p>
          <p>
            <label>
            <input type="submit" name="update" value="Edit" />
            </label>
          </p>
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($kasir);

mysql_free_result($kategori);

mysql_free_result($produk);
?>
