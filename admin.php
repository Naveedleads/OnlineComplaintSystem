<?php 
		session_start();

		if( !isset($_SESSION['username']))	{


			header('Location: login.php');
			die();
		}

						 ?>

						<?php include ("header.php"); ?>

						 <!DOCTYPE html>
						 <html>
						 <head>
						 	<title>Admin page</title>
						 </head>
						 <body>
						 <div id="cont" style="height: 400px;" >
						 <h1>Welcome online Complint management system <?php echo $_SESSION['username']; ?></h1>
						

						 <form action= "Serviecs.php" method="post">
						 	<div id="log" style="margin-left:200px;">
						<p><label>Add Subject:</label>
 	                     <input style="width: 400px;  height: 30px; margin-left:20px;"	 type="text" name="name"></p>
 	                     <p><label>Add Description</label>
 	                    <input style="width: 400px;  height: 200px;" type="text" name="price"></p>

	                 <input style="margin-left:500px;  width: 50px;"  type="submit" value="Post" name="loginForm">	

						 </div>
						 </form>
						  <a href="logout.php">Logout</a>


						 </div>


						 </body>
						 </html>

						 <?php include ("footer.php"); ?>