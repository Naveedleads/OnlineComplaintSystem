<?php 

         $ProductName=$_POST['name'];
		 $ProductPrice=$_POST['price'];
	
	$ProductDetail = array(
		$ProductName=>$ProductPrice);		
  ?>


<?php include ("header.php"); ?>
<?php include ("left.php"); ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">

 	h1{
 		margin: 10px;
 		padding: 5px;
 		 }
 	p{
 		color:red;
 	}
 	#parent{
 		width: 960px;
 		
 	}	 	
 	#low{
 		width:600px;
 		background: white;
 		margin-top: -250px;
 		border-radius:12px;

 		float: right;
 		margin-right: 80px;
 	}

 	</style>
 </head>
 <body>

<div id="content">
<div id="sub">


<h1>Our serviecs is </h1>

<p>
	
	We facility to citizens by creating a one  complaints management 
system for the common man with<br> the technical
support of the Information and Technology Department.
 Complaints management <br>system has been developed for
  registration and tracking of complaints. if you hava any complaint ? "
</p>

<h1>Other serviecs   detail available will be soon </h1>


</div>
</div>




 <div id="parent" >
 <?php 

	foreach ($ProductDetail as $key => $value) 
	{
      ?>
	   <div id ="low">
	 	 <h1><?php echo $key ; ?></h1>
	 	  <p><?php echo $value; ?></p>
	   </div>
	  <?php
	}
     ?>
 </div>

<?php include("footer.php"); ?>