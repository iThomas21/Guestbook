<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Guestbook</title>
</head>

<body>
	<?php
	
	/* Creating variables and assigning them the required url*/
	
	$url = 'http://localhost/Guestbook/index.html#home';
	$url2 = 'http://localhost/Guestbook/loginsite.html#home';
	
	/* Checking if the username and password are right and */
	
	if ($_REQUEST['username'] == "Thomas"){
		
		$usn = 'username';
		
		$usn=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['username']); /* Perform a regular expression search and replace*/
		$usn=htmlspecialchars($usn); /* Weaken SQL injecton attacks*/
		
		
	} if ($_REQUEST['psw'] == "Hallo"){
		
		$psw = 'psw';
		
		$psw=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['psw']);
		$psw=htmlspecialchars($psw);
		
		
		header("Location: $url2"); /* Send the user to the defined url*/
	} else {
		header("Location: $url");
	}
	?>
</body>
</html>