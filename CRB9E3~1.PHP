Create a form containing two input fields (Name, Email_ID) and a submit button. When the user clicks on submit button, the form data should be sent for processing to PHP file, which should display the welcome message with the email_id on the PHP page. Form data should be sent by HTTP GET/POST method.


2-1.php code

<html>
<body>

<form action="welcome.php" method="post"> Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br> 
<input type="submit">
</form>

</body>
</html>

Welcome.php code

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is:<?php echo $_POST["email"]; ?>

</body>
</html>