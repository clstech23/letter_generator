@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Dispute Letter Details </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data">
	 	@csrf
					  <div class="row">
						<div class="col-12">	
 

 	
 		<div class="row"> <!-- 1st Row -->
 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Full Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="fullname" class="form-control" required="" > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">
    <div class="form-group">
		<h5>Address <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="address" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 -->



	<div class="col-md-4">

 		<div class="form-group">
		<h5>Phone Number <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="mobile" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 1stRow -->






	<div class="row"> <!-- 2nd Row -->
 			
 			<div class="col-md-4">

				<div class="form-group">
					<h5>Dispute Letter <span class="text-danger">*</span></h5>
					<div class="controls">
				 <select name="letter" id="letter" required="" class="form-control">
					<option value="" selected="" disabled="">Select Dispute Letter</option>
					<option value="LPD">Late Payment Deletion Letter</option>
					<option value="BDL">Bankrupcy Deletion Letter</option>
					<option value="ARLR1">Account Removal Letter R1</option>
					<option value="ARLR2">Account Removal Letter R2</option>
					<option value="COL">Charge Off Letter</option>
					<option value="CSL">Child Support Letter</option>
					<option value="ALDL">Auto Loan Deletion Letter</option>
					<option value="ITDL">Identity Theft Dispute Letter</option>
					<option value="NPRRPC">No Parking Rule Refusal to Pay Cease and Desist</option>
					<option value="PIUL">Personal Information Update Letter</option>
					<option value="MCD">Medical Collection Deletion</option>
					<option value="MC">Medical Collection</option>
					<option value="REL">Repossession Letter</option>
					<option value="CDVNL">Cease and Desit Volenti Non Injuria</option>
					<option value="MDL">Mortgage Deletion Letter</option>
					<option value="SLDL">Student Loan Deletion Letter</option>
					<option value="DVL">Debt Validation Letter</option>
					<option value="IRL">Inquiry Removal Letter</option>
						 
					</select>
				  </div>		 
				  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

       <div class="form-group">
			<h5>Account Name <span class="text-danger">*</span></h5>
			<div class="controls">
		 <select name="account_name" id="account_name" required="" class="form-control">
				<option value="" selected="" disabled="">Select Account Name</option>
				<option value="COB">Credit One Bank</option>
				<option value="BOA">Bank Of America</option>
				<option value="NFD">Navy Fed</option>
			</select>
		  </div>		 
		  </div>
	  
 			</div> <!-- End Col md 4 -->



	<div class="col-md-4">

 		 
		<div class="form-group">
			<h5>Account Number <span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="text" name="account_number" class="form-control" required="" > 
		  </div>		 
		  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 2nd Row -->



<div class="row"> <!-- 4th Row -->


<div class="col-md-4">

	<div class="form-group">
		<h5>Credit Reporting Agency <span class="text-danger">*</span></h5>
		<div class="controls">
	 <select name="agency" id="agency" required="" class="form-control">
			<option value="" selected="" disabled="">Select Credit Reporting Agency</option>
			<option value="EXP">Experian</option>
			<option value="EQF">Equifax Information Services LLC</option>
			<option value="TRSU">TransUnion LLC Consumer Dispute Center</option>
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 



 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Date<span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="date" class="form-control" required="" > 
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->


	<div class="col-md-4">

		<div class="form-group">
			<h5>State <span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="text" name="state" class="form-control" required="" > 
		  </div>		 
		  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 3rd Row -->

		 <div class="row"> <!-- 3rd Row -->


			<div class="col-md-4">
			
				<div class="form-group">
					<h5>City<span class="text-danger">*</span></h5>
					<div class="controls">
				 <input type="city" name="city" class="form-control" required="" > 
				  </div>		 
				  </div>
				  
						 </div> <!-- End Col md 4 --> 
			
			
			
						 
				<div class="col-md-4">
			
				<div class="form-group">
					<h5>Zip code<span class="text-danger">*</span></h5>
					<div class="controls">
				 <input type="zipcode" name="zipcode" class="form-control" required="" > 
				  </div>		 
				  </div>
			
				</div> <!-- End Col md 4 -->
			
			
				<div class="col-md-4">
			
					<!--div class="form-group">
						<h5>State <span class="text-danger">*</span></h5>
						<div class="controls">
					 <input type="text" name="state" class="form-control" required="" > 
					  </div>		 
					  </div-->
				  
				</div> 
				<!-- End Col md 4 --> 
			 
						 
					 </div> <!-- End 4th Row -->

 
  
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


 
 
	  
	  </div>
  </div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection
