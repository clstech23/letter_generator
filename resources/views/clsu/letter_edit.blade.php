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
			  <h4 class="box-title">Edit Letter </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	<form method="post" action="{{ route('letter.update',$editData->id) }}">
	 	@csrf
					  <div class="row">
						<div class="col-12">	
 

 	
 		<div class="row"> <!-- 1st Row -->
 			
 			<div class="col-md-4">

 		 <div class="form-group">
		<h5>Payment <span class="text-danger">*</span></h5>
		<div class="controls">
	   <select name="letter" id="letter" required="" class="form-control">
			<option value="" selected="" disabled="">Select Payment</option>
			<option value="ARLR1" {{ ($editData->letter == "ARLR1" ? "selected": "") }}>Account Removal Letter R1</option>
			<option value="ARLR2" {{ ($editData->letter == "ARLR2" ? "selected": "") }}>Account Removal Letter R2</option>
			<option value="ITDL" {{ ($editData->letter == "ITDL" ? "selected": "") }}>Identity Theft Dispute Letter</option>
			<option value="NPRRPC" {{ ($editData->letter == "NPRRPC" ? "selected": "") }}>No Parking Rule Refusal to Pay Cease and Desist</option>
			<option value="LPD" {{ ($editData->letter == "LPD" ? "selected": "") }}>Late Payment Deletion Letter</option>
			<option value="PIUL" {{ ($editData->letter == "PIUL" ? "selected": "") }}>Personal Information Update Letter</option>
			<option value="ALDL" {{ ($editData->letter == "ALDL" ? "selected": "") }}>Auto Loan Deletion Letter</option>
			<option value="MCD" {{ ($editData->letter == "MCD" ? "selected": "") }}>Medical Collection Deletion</option>
			<option value="BDL" {{ ($editData->letter == "BDL" ? "selected": "") }}>Bankrupcy Deletion Letter</option>
			<option value="MC" {{ ($editData->letter == "MC" ? "selected": "") }}>Medical Collection</option>
			<option value="REL" {{ ($editData->letter == "REL" ? "selected": "") }}>Repossession Letter</option>
			<option value="CDVNL" {{ ($editData->letter == "CDVNL" ? "selected": "") }}>Cease and Desit Volenti Non Injuria</option>
			<option value="MDL" {{ ($editData->letter == "MDL" ? "selected": "") }}>Mortgage Deletion Letter</option>
			<option value="SLDL" {{ ($editData->letter == "SLDL" ? "selected": "") }}>Student Loan Deletion Letter</option>
			<option value="COL" {{ ($editData->letter == "COL" ? "selected": "") }}>Charge Off Letter</option>
			<option value="CSL" {{ ($editData->letter == "CSL" ? "selected": "") }}>Child Support Letter</option>
			<option value="DVL" {{ ($editData->letter == "DVL" ? "selected": "") }}>Debt Validation Letter</option>
			<option value="IRL" {{ ($editData->letter == "IRL" ? "selected": "") }}>Inquiry Removal Letter</option>
			
	</select>  
	  </div>		 
	  </div>

 			</div> <!-- End Col md 4 -->




	<div class="col-md-4">

 		 <div class="form-group">
		<h5>Letter Disc <span class="text-danger">*</span></h5>
		<div class="controls">
	 <textarea class="form-control" name="letter_dsc" value="{{ $editData->letter_dsc }}"  rows="4" required=""></textarea>
     
     </div>		 
	  </div>
	  
 			</div> <!-- End Col md 4 --> 
 
 			
 		</div> <!-- End 1stRow -->

 
  
							 
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
