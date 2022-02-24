Create a form contaning four input fields(Pro_id, Pro_name, Pro_price, QOH) and Submit button. When the user clicks on the submit button an PHP script should be executed which inserts the record in the product table.

<?php
  $conn = mysql_connect("localhost', 'root',");
  mysql_select_db("mydb", $conn);

if(isset($_POST['add']))
{
   $pid= $_POST['proid'];
   $pname = $_POST['proname'];
   $pprice = $_POST['proprice'];

$sql = "INSERT INTO product VALUES ('$pid','$pname','$pprice')";
if (mysql_query($sql, $conn))
{
   echo "New record created successfully !";
} else
{
     echo "Error: ";
}

mysql_close($conn);
}
?>
<!DOCTYPE html>
<html>
<body>
     <form method="post">
       Product id:<br>
       <input type="text" name="proid">
       <br>
       Product name:<br>
<input type="text" name="proname">
<br>
Product Price:<br>
<input type="text" name="proprice">
<br><br>

<input type="submit" name="add" value="submit">
</form>
</body>
</html>