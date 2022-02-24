Create a form contaning one input field (Pro_id) and a Delete button. When the user clicks on the Delete button a PHP script should get executed and should delete the record of the product for the Pro_id specified.

<html>
<body>
<form method="post">
Enter Product id You Want to Delete :<br>
<input type="text" name="proid"><<br><br>
<input type="submit" name="aaa" value="Delete">
</form>
</body>
</html>

<?php

$conn = mysql_connect('localhost', 'root',''); mysql_select_db("mydb", $conn);

if(isset($_POST['aaa']))
{
$pid = $_POST['proid'];
$sql ="delete from product where pro_id='Spid'";

if (mysql_query($sql,$conn))
{
echo "Delete record successfully !";
} else
{
echo mysql_error();
}

mysql_close($conn);
}
?>