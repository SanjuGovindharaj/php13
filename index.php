<html>
<body align="center">
<br><h1>Details</h1>
<form  action="" method="POST">
<br><label for="username">Username:</label>
<input type="text" name="uname"><br>
<br><label for="password">Password:</label>
<input type="password" name="pwd"><br>
<br><button type="submit">Submit</button>
</form>
</body>
</html>

<?php
if (isset($_POST["uname"])&& isset($_POST["pwd"]))
{
echo "Welcome  ". $_POST["uname"]."<br/>";
echo "Your password is  ". $_POST["pwd"];
exit();
}

if (isset($_GET["uname"])&& isset($_GET["pwd"]))
{
echo "Welcome  ". $_GET["uname"]."<br/>";
echo "Your password is  ". $_GET["pwd"];
exit();
}  
if(isset ($_REQUEST["uname"]) && isset($_REQUEST["pwd"] ))
	{
echo "Welcome ". $_REQUEST['uname']. "<br />";
echo "You are ". $_REQUEST['pwd'];
exit();
   }
?>