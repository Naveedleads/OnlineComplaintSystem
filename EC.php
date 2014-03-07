
<?php include ("header.php") ;?>
<?php include ("left.php"); ?>
<div id="content">
<div id="count">

<h1>Enter your infomation:</h1>
<form action="about.php"	method="POST">

<p>
<label>Name</label>
	<div id="la">
	<input type="text" name="Name"/>
	</div>
</p>
	
<p>
<label>Mobile</label>
	<div id="lae">
	<input type="text" name="mobile"/>
	</div>
</p>
<p>

<p>
<label>*EmailId</label>
	<div class="em">
	<input type="text" name="email"/>
	</div>
</p>
<p>
	
	<label>*CNIC</label>
	<div class="cnic">
	<input type= "text" name="cnic">
		

	</div>
</p>
	
<input type="submit" value="Go" name="Go">
</form>

</div>
</div>
<?php include("footer.php"); ?>
