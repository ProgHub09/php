Create a form contaning two input fields (Pro_id, QOH) and Update button. When the user clicks on the Update button the quantity of the Pro_id specified should get updated using a PHP script.

<html>
<body>
<form method="post">
Enter Product id You Want to Update :<br>
<input type="text" name="proid"><br><br>

Update product price :
<input type="text" name="proprice">
<br><br>

<input type="submit" name="aaa" value="Update">
</form>
</body>
</html>

<?php

$conn = mysql_connect("localhost', 'root',''); mysql_select_db("mydb", $conn);

if(isset($_POST['aaa']))
{
$pid=$_POST['proid'];

$pprice = $_POST['proprice'];

$sql = "update product set Pro_price='$pprice' where pro_id='$pid'";
if (mysql_query($sql,$conn))
{
echo "Record update successfully !";
}
else
{
echo mysql_error();
}

mysql_close($conn);
}
?>