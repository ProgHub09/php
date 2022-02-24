Create a form containing one input field (Pro_id) and a search button. When the user clicks on the Search button a PHP script should get executed and should display the details of the product for the Pro_id specified.

<html>
<body>
<form method="post">
Enter Product id You Want to Search :<br>
<input type="text" name="proid">
<br><br>

<input type="submit" name="aaa" value="search">
</form>
</body>
</html>
<?php
$conn = mysql_connect('localhost', 'root',''); mysql_select_db("mydb", $conn);

if(isset($_POST['aaa']))
{
$pid= $_POST['proid'];

$sql="select * from product where pro_id='$pid'";

$result=mysql_query($sql);

if (mysql_num_rows($result) > 0)
{

while($row = mysql_fetch_array($result))
{
echo "Product id: ". $row["pro_id"]. "<br> Product Name: ". $row["Pro_name"]. "<br> Product Name:" . $row["Pro_price"]. "<br>";
echo "<br>";
{
{
else
{
echo "0 results";
}

mysql_close($conn);
}
?>