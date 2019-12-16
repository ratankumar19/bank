<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	
<div class="container" style="margin-left:200px";>

   
	<form class="form-group" action="function.php" method="POST" enctype="multipart/form-data">
		       
	   	<h1>Register Account</h1>
    		<p>Please fill in this form to create an account.</p>
    	<hr>
    <div class="row">
    	
		<div class="col-md-8">
			<div class="card">
		    	<div class="card-body " style="background-color: #3498DB ;color: #ffffff; height: 5px">
		    		<div class="text-center">
		    			Personal Information
					</div>
		    	</div>
		
	
  	<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    	<div class="col-sm-10">
      		<input type="text" name="name" class="form-control"placeholder=" Name">
    	</div>
  	</div>
  	<div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    	<div class="col-sm-10">
      		<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    	</div>
  	</div>
  
  	<fieldset class="form-group">
    <div class="row">
      	<legend class="col-form-label col-sm-2 pt-0">Male</legend>
      	<div class="col-sm-10">
        	<div class="form-check">
          		<input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="option1 "	checked>
          			<label class="form-check-label" for="gridRadios1">
            		Male
          			</label>
        	</div>
        	<div class="form-check">
          		<input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
          			<label class="form-check-label" for="gridRadios2">
            		Female
          			</label>
        	</div>
        </div>
    </div>
	</fieldset>

        <div class="form-group row">
    		<label for="inputEmail" class="col-sm-2 col-form-label">Email_id</label>
    			<div class="col-sm-10">
     			<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter Email_id">
    			</div>
  		
        </div>

  		<div class="form-group row">
  			<label for="inputMobile" class="col-sm-2 col-form-label">Mobile No.</label>
  				<div class="col-auto">
    				<label class="sr-only" for="inlineFormInputGroup"></label>
    					<div class="input-group mb-2">
    						<div class="input-group-text">(+91)</div>
    							<input type="tel" name="contact" class="form-control" id="inputMobile" placeholder="Enter Mobile No.">
     			 				
    						</div>
  		
        				</div>
        		</div>
  			
  



 
		<div class="form-group row">
    		<label for="inputEmail" class="col-sm-2 col-form-label">Upload img</label>
    			<div class="col-sm-10">
     				<div onsubmit="return validateForm()" enctype="multipart/form-data">
    						<input type="file" id="inputImage" name="photo">
    				</div>
    			</div>
    	</div>


    	<div class="row">
			<div class="col-md-12">
				<div class="card">
		    		<div class="card-body " style="background-color: #3498DB ;color: #ffffff; height: 5px">
		    			<div class="text-center">
		    				Address Information
						</div>
		    		</div>
		
		    	





 
  <div class="form-group row ">

    <label for="inputAddress"  class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
    <input type="text" name="address"class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  </div>

<div class="form-group row ">

    <label for="inputState"  class="col-sm-2 col-form-label">State</label>
   		 <div class="col-sm-4">
    		<select class="form-control" name="state"> 

						<option value="Andhra Pradesh">Andhra Pradesh</option>  	
		
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Asam">Asam</option>     	
						
						<option value="Bihar">Bihar</option>     	
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Goa">Goa</option>     	
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana	</option>     	
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>

						<option value="Jhakhand">Jhakhand</option>     	
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>     	
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharastra">Maharastra</option>     	
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>     	
						<option value="Mizoram">Mizoram	</option>
						<option value="Nagaland">Nagaland </option> 
						<option value="Odisha">Odisha</option>      	
						
						<option value="Punjab">Punjab</option>  
						<option value="Rajasthan">Rajasthan</option>   	
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu	</option>     	
						<option value="Tripura">Tripura</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>     	
						<option value="Uttarakhand">Uttarakhand</option>
						<option value="West Bengal">West Bengal 	</option>  	
			</select>	     	
						   	
		</div>
    <label for="inputCity"  class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-2">
    <input type="text"   name="city"class="form-control" id="inputCity" placeholder="City">
</div>
</div>

  
<div class="form-group row ">

    <label for="inputDistrict"  class="col-sm-2 col-form-label">District</label>
    <div class="col-sm-4">
    <input type="text"name="district"class="form-control" id="inputDistrict" placeholder="District">
</div>
    <label for="inputZip"  class="col-sm-2 col-form-label">Zip</label>
    <div class="col-sm-2">
    <input type="number" name="zip" class="form-control" id="inputZip" placeholder="Zip">
</div>
</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
		    		<div class="card-body " style="background-color: #3498DB ;color: #ffffff; height: 5px">
		    			<div class="text-center">
		    				Account Information
						</div>
		    		</div>
		
	
<div class="form-group row ">
	<label for="accountType"  class="col-sm-2 col-form-label">AccountType</label>
    	<div class="col-sm-4">
    		<select class="form-control" name="accountType"> 
    				<option value="Saving Account">Saving Account </option>  	
						<option value="Current Account">Current Account</option>  	
				</select>
			</div>
						
						
			
	 <label for="pin"  class="col-sm-2 col-form-label">Intial Amount</label>			
    	<div class="col-sm-2">
    		<input type="number" name="amount" class="form-control" id="pin" placeholder="Amount">
		</div>
		</div>	
	
</div>
	<div class="form-group row">
    	<label for="name" class="col-sm-2 col-form-label">Account No. </label>
    		<div class="col-sm-4">
      		<input type="text" name="accountno" class="form-control"placeholder=" Account number">
    		</div>
  	</div>
</div>
    		
		<input type="submit" class="btn btn-success" name="account_register" value="Register Account">

	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</form>
</div>   	

<scripts src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>