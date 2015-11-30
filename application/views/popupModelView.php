<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!--<h2>Tour Package</h2>-->
  <!-- Trigger the modal with a button -->
   <?php
   $vari=120;
   echo $vari;
   ?>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Book Now</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reserve</h4>
        </div>
        <div class="modal-body">
           <div id="s-msg" style="display: none;">
            <div id="s-text" class="alert alert-success">
            </div>
        </div>

        <div id="e-msg" style="display: none;">
            <div id="e-text" class="alert alert-danger">
            </div>
        </div>
		<h5>Personal details</h5>
		  <form role="form">
		  
			<div class="row">
			
			<div class="col-md-6"> <div class="form-group"> <input type="text" class="form-control" id="firstName" placeholder="First name"></div></div>
			 <div class="form-group"><div class="col-md-6"><input type="text" class="form-control" id="lastName" placeholder="Last name"></div></div>
			
				
			</div>
    
	<div class="row">
	<div class="col-md-8">
	 <div class="form-group">
	  <input type="text" class="form-control" id="email" placeholder="Email"></div>
     
    </div>
	</div>
   <div class="row">
	<div class="col-md-6">
	<div class="form-group">
      <input type="text" class="form-control" id="contactNo" placeholder="Contact No">
    </div>
     
    </div>
	</div>
	
	<h5>Package details</h5>
	<hr class="set-margine-5"></hr>
	
	<div class="row">
	<div class="col-md-6">
			<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">No Of Adults
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
			</ul>
			</div>
	
	</div>
	<div class="col-md-6">
			<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">No Of Children
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
			</ul>
			</div>
	
	
	</div>
	</div>
	
    <div class="checkbox">
      <label><input type="checkbox">I agree to Terms and Conditions.</label>
    </div>
    
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="return validate()">Reserve</button>
		 
        </div>
		</form>
      </div>
      
    </div>
  </div>
  
</div>
<script>
    function validate() {
        var firstName
        var lastName;
        var email;
		var contactNo;
		
        firstName = $('#firstName').val();
        lastName = $('#lastName').val();
        email = $('#email').val();
		contactNo = $('#contactNo').val();

        var objRegExp = /^[a-zA-Z ]+$/;

        if (objRegExp.test(firstName) == false)
        {
            $('#s-msg').hide();
            $('#e-msg').show();
            $('#e-text').html('First name cannot be empty or cannot contain digits!');
            return false;
        }
		else if(objRegExp.test(lastName) == false){
			$('#s-msg').hide();
            $('#e-msg').show();
            $('#e-text').html('Last name cannot be empty or cannot contain digits!');
            return false;
		}
		else if(email ==null || email ==''){
			$('#s-msg').hide();
            $('#e-msg').show();
            $('#e-text').html('Email cannot be empty!');
            return false;
		}
		else if (validateEmail(email) == false) {
            $('#s-msg').hide();
            $('#e-msg').show();
            $('#e-text').html('Invalid Email!');
            return false;
         }
		else if(contactNo ==null || contactNo ==''){
			$('#s-msg').hide();
            $('#e-msg').show();
            $('#e-text').html('Contact No cannot be empty!');
            return false;
		}
        else if (!$.isNumeric(contactNo)) {
            $('#s-msg').hide();
            $('#e-msg').show();
            $('#e-text').html('Only digits allowed in Contact No!');
            return false;
        }
		else if(contactNo.length <10){
		 $('#s-msg').hide();
            $('#e-msg').show();
            $('#e-text').html('Invalid Contact NO!');
            return false;
		
		}
        else {
		alert('syufudyfgud');	
		$.ajax({
                type: 'POST',
                url: 'http://localhost/FMF-Tour/fmfTourController2/getCustomerDetails',
                //async: false,
                data: {firstName:firstName,lastName:lastName,email:email,contactNo:contactNo},
                //dataType: "json",
                success: function (result) {
                alert(result);
                }
                });
					
				

			
        }
    }
	
	function validateEmail(email) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(email);
        }
</script>
</body>
</html>