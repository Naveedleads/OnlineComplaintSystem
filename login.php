<?php 

	session_start();

	define('USERNAME', 'naveed');
	define('PASSWORD', 'abcd');

if ($_SERVER['REQUEST_METHOD']=='POST'){


	$username= $_POST['username'];
	$password= $_POST['password'];

if ($username === USERNAME && $password === PASSWORD)	{


$_SESSION['username'] = $username;
header("Location:admin.php");

}
else{

	$status ="Incorrect login";
}


}

 ?>
<?php include ("header.php"); ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Welcome</title>
 </head>
 <body>
 <div id="conten" style="height: 400px;">
 <h1 style="margin-left:100px;"> Admin Login</h1>
<form action="login.php" method="post">

<div  style="margin-left:300px;" id="log">

		<p>
	
			<label    for="username">Username: </label>
			<input  style="width: 400px;  height: 30px;" type="text" name="username">
		</p>
		<p>
			<label    for="password">Password: </label>
			<input style="width: 400px;  height: 30px;" type="password" name="password">
			</p>
		
			<input style="margin-left:400px;"  type="submit" value="Login" name="loginForm">	
		

<?php if ( isset($status) ) : ?>
	<p><? echo $status; ?></p>
	<?php endif; ?>
</div>
</form>
</div>
 
 <?php include ("footer.php"); ?>