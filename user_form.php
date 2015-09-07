<?php
	
	//jutumärkide vahele input elemendi name
	echo $_POST["email"];
	echo $_POST["password"];

	$email_error = "";
	
	//kontrolli ainult siis kui kasutaja vajutab login nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	
	//kontrollime kasutaja e-posti, et see ei oleks tühi
	if(empty($_POST["email"])) {
		echo "email tühi";
			$email_error = "Ei saa olla tühi";
		
	//kontrolli parooli
	
	
	}
?>
<html>
	<head>
		<title>User login page</title>
	<head/>
	<body>
		<h2>Login</h2>
		<form action="user_form.php" method="post">
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool">
		
		<input type ="submit" value="logi sisse"; <br><br>
		</form>
		
		<h2>Create user</h2>
		
		
	</body>

</html>