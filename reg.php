<?php include ("header.php") ;?>
<div id="cout" style="height: 1300px; ">

<h1>Enter you Informatin </h1>



<form name="form" action="success.php" 	method="POST" onSubmit="return ValidateEmail()">

<p>
<label>Name</label>
	<div id="la">
	<input type="text" name="Name"/>
	</div>
</p>
	<p>

<p>
<label>Father Name</label>
	<div id="lae">
	<input type="text" name="father"/>
	</div>
</p>
<p>
<label>*EmailId</label>
	<div class="em">
	<input type="text" name="email"/>
	</div>
</p>

<p>
<label>*Address</label>
	<div class="pa">
	<input type="text" name="Add"/>
	</div>
</p>
<p>
<label>*Cnic</label>
	<div class="ps">
	<input type="text" name="cnic"/>
	</div>
</p>



	


	<p>
<label>*Mobile No</label>
	<div id="la">
	<input type="text" name="mobile"/>
	</div>
</p>


<p>
<label>Select Your City</label>
</p>

<select>

	<option>Select</option>
	<OPTION>*LAHORE*</OPTION>
	
	
	<OPTION>*KARACHI*</OPTION>
	

	<OPTION>*ISLAMABAD*</OPTION>
	
</select>
<p>
<label>Select Your Area</label>
</p>

<select>

	<option>Select</option>
	<OPTION>*LAHORE*</OPTION>
	<OPTION>Township</OPTION>
	<OPTION>Model Twon</OPTION>
	<OPTION>Kotlikahpat</OPTION>
	<OPTION>shadar</OPTION>
	
	<OPTION>*KARACHI*</OPTION>
	<OPTION>Township</OPTION>
	<OPTION>Model Twon</OPTION>
	<OPTION>Kotlikahpat</OPTION>
	<OPTION>shadar</OPTION>

	<OPTION>*ISLAMABAD*</OPTION>
	<OPTION>Township</OPTION>
	<OPTION>Model Twon</OPTION>
	<OPTION>Kotlikahpat</OPTION>
	<OPTION>shadar</OPTION>
	<OPTION>*FAISALABAD*</OPTION>
	<OPTION>Township</OPTION>
	<OPTION>Model Twon</OPTION>
	<OPTION>Kotlikahpat</OPTION>
	<OPTION>shadar</OPTION>
</select>
<p>
<label>Select Your union council</label>
</p>



<select>
	
	<div id="cou">
	<OPTION>Select </OPTION>
	<OPTION>un 120</OPTION>
	<OPTION>un131</OPTION>
	<OPTION>un 120</OPTION>
	<OPTION>un131</OPTION>
	<OPTION>un 120</OPTION>
	<OPTION>un131</OPTION>
	
	</div>


</select>
<p>
<label>Select Your compalint department </label>
</p>



<select>
	
	<div id="cou">
	<OPTION>Select </OPTION>
	<OPTION>Commerce and Textile Industry </OPTION>
	<OPTION>Pakistan Engineering Council</OPTION>
	<OPTION>Water and Power</OPTION>
	<OPTION>Railways</OPTION>
	<OPTION>Petroleum and Natural Resources</OPTION>
	<OPTION>National Food Security and Research</OPTION>
	<OPTION>Law Justice and Human Rights</OPTION>
	
	</div>


</select>
<p>
<label> *Type compalint subject</label>
	<div id="ci" >
	<input type="text"name="city"/>
	</div>
</p>
<p>
<label> Type your compalint </label>
</p>	
	

<textarea name="MessageText" id="MessageText"  style="width:500px;height:280px; margin-left:30px;"></textarea>


<div>

<input type="submit"  name="Submit" value="Submit" />

</div>
</form>
</div>

<?php include("footer.php"); ?>



