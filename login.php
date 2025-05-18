<?php 
	$authenticated = false;
	if(isset($_POST['verify']) && $_POST['verify'] == "Verify") {
		$user = $_POST['user'];
		$pwd = $_POST['pwd'];

		$conn = pg_connect("host=webmap-webgis2025.h.aivencloud.com port=16943 dbname=logindb user=avnadmin password=AVNS_4qv_r8sFizmz4OYPApU");
		if($conn){
			$query = "select * from verify ($1, $2)";
			$res = pg_query_params($conn, $query, array($user, $pwd));

			$result = pg_fetch_object($res);
			if($result){
				$authenticated = $result -> verify == 1;
			}
		}

		if(!$authenticated)	{
			echo "Please enter valid login credentials!";
		} else {
			header('location: webgis_portal.php');
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div id="form">
		<h1 id="header">Login to Web-GIS Portal</h1>
		<form action="<?php echo $_SERVER ['PHP_SELF']; ?>" method="post">
			<label>Username : </label>
			<input type="text" id="user" name="user"/><br/><br/>
			<label>Password : </label>
			<input type="password" id="pwd" name="pwd"/><br/><br/>	<!-- Please reset the type to "password" to hide the password text. -->
			<input type="submit" id="btn" value="Verify" name="verify"/>
		</form>
		<br/>
		<h4>If you do not have user credentials, please contact the site administrator.</h4>
	</div>
</body>
</html>
