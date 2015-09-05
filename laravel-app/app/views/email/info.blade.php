<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
</head>
<body>
<h2>Account Information</h2>

<div>
	Dear {{$username}},<br/><br/>

	Currently you are the member of Khmermoo.<br/><br/>
	We .............

	<br/><br/>
	<b>Login account</b><br/>
	Username: {{strtolower($username)}}<br/>
	Password: {{$password}}<br/><br/>
	Thanks you,<br/>
	Khmermoo Admin<br/>
	Khmermoo.com<br/>

</div>

</body>
</html>