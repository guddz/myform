<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form action="process.php" method ="post">
               <div class="col-md-6 form-group mx-auto text-center">
			   <h1>Ask For Quote</h1>
			      </div>
<div class="col-md-4">
     <div class="col-md-6 form-group">
<label>NAME *</label>
<input type="text" name="name" id ="name" class="form-control"/>
     </div>
	   <div class="col-md-6 form-group">
<label>EMAIL *</label>
<input type="text" name="email" id ="email" class="form-control"/>
     </div>
	    <div class="col-md-6 form-group">
<label>PHONE *</label>
<input type="number" name="phone" id ="phone" class="form-control"/>
     </div>  
	       <div class="col-md-6 form-group">
<label>ADDRESS *</label>
<input type="text" name="address" id ="address" class="form-control"/>
     </div>
	     <div class="col-md-6 form-group">
<label>MESSAGE *</label>
 <textarea type="text" name="message" id="message" class="form-control"></textarea>
     </div>
                     <div class="col-sm-6 text-right"><input type="submit" name="submit" class="col-sm-6 btn btn-primary  mt-3 mb-3 text-center submit" value="Submit" onclick="return ValidFunction();"></div>
</form>
<body>
</html>	 