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
			  <h4 class="box-title">Manage Profile</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
	 	@csrf
					  <div class="row">
						<div class="col-12">	

 

    <div class="row">
	<div class="col-md-6" >

		<div class="form-group">
		<h5>First Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="name" class="form-control" value="{{ $editData->name }}" required="">  </div>
		 
	</div>

	</div> <!-- End Col Md-6 -->

	<div class="col-md-6" >

		<div class="form-group">
		<h5>Last Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="fname" class="form-control" value="{{ $editData->fname }}" required="">  </div>
		 
	</div>

	</div> <!-- End Col Md-6 -->
	

</div> <!-- End Row -->


 <div class="row">
	<div class="col-md-6" >

		<div class="form-group">
		<h5>User Mobile <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="mobile" class="form-control" value="{{ $editData->mobile }}" required="">  </div>
		 
	</div>

	</div> <!-- End Col Md-6 -->

	<div class="col-md-6" >
		
		<div class="form-group">
			   <h5>User Email <span class="text-danger">*</span></h5>
			   <div class="controls">
			<input type="email" name="email" class="form-control" value="{{ $editData->email }}" required="">  </div>
				
		   </div>
	   
		   </div><!-- End Col Md-6 -->
	

</div> <!-- End Row -->







<div class="row">
	
	<div class="col-md-6" >

		<div class="form-group">
	<h5>User Gender <span class="text-danger">*</span></h5>
	<div class="controls">
	 <select name="gender" id="gender" required="" class="form-control">
			<option value="" selected="" disabled="">Select Gender</option>
 <option value="Male" {{ ($editData->gender == "Male" ? "selected": "") }}  >Male</option>
 <option value="Female" {{ ($editData->gender == "Female" ? "selected": "") }} >Female</option>
			 
		</select>
	 </div>
          </div>
	</div> <!-- End Col Md-6 -->

			<div class="col-md-6" >
		
				<div class="form-group">
					   <h5>User Address <span class="text-danger">*</span></h5>
					   <div class="controls">
					<input type="text" name="address" class="form-control" value="{{ $editData->address }}" required="">  </div>
						
				   </div>
			   
				   </div><!-- End Col Md-6 -->
	
	

</div> <!-- End Row -->

<div class="row"> <!-- 3rd Row -->


	<div class="col-md-4">
	
		<div class="form-group">
			<h5>City<span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="city" name="city" class="form-control" required="" value="{{ $editData->city }}" > 
		  </div>		 
		  </div>
		  
				 </div> <!-- End Col md 4 --> 
	
				 <div class="col-md-4">
    		<?php 

				/*$states = array(
						'AL'=>'Alabama',
						'AK'=>'Alaska',
						'AZ'=>'Arizona',
						'AR'=>'Arkansas',
						'CA'=>'California',
						'CO'=>'Colorado',
						'CT'=>'Connecticut',
						'DE'=>'Delaware',
						'DC'=>'District of Columbia',
						'FL'=>'Florida',
						'GA'=>'Georgia',
						'HI'=>'Hawaii',
						'ID'=>'Idaho',
						'IL'=>'Illinois',
						'IN'=>'Indiana',
						'IA'=>'Iowa',
						'KS'=>'Kansas',
						'KY'=>'Kentucky',
						'LA'=>'Louisiana',
						'ME'=>'Maine',
						'MD'=>'Maryland',
						'MA'=>'Massachusetts',
						'MI'=>'Michigan',
						'MN'=>'Minnesota',
						'MS'=>'Mississippi',
						'MO'=>'Missouri',
						'MT'=>'Montana',
						'NE'=>'Nebraska',
						'NV'=>'Nevada',
						'NH'=>'New Hampshire',
						'NJ'=>'New Jersey',
						'NM'=>'New Mexico',
						'NY'=>'New York',
						'NC'=>'North Carolina',
						'ND'=>'North Dakota',
						'OH'=>'Ohio',
						'OK'=>'Oklahoma',
						'OR'=>'Oregon',
						'PA'=>'Pennsylvania',
						'RI'=>'Rhode Island',
						'SC'=>'South Carolina',
						'SD'=>'South Dakota',
						'TN'=>'Tennessee',
						'TX'=>'Texas',
						'UT'=>'Utah',
						'VT'=>'Vermont',
						'VA'=>'Virginia',
						'WA'=>'Washington',
						'WV'=>'West Virginia',
						'WI'=>'Wisconsin',
						'WY'=>'Wyoming',
					);*/
				?>
					<div class="form-group">
						<h5>State <span class="text-danger">*</span></h5>
						<div class="controls">

					<input type="text" name="state" id="state" class="form-control" required="" value="{{ $editData->state }}" > 
		 
					</div>		 
					  </div>
				  
				</div> <!-- End Col md 4 --> 
	
				 
		<div class="col-md-4">
	
		<div class="form-group">
			<h5>Zip code<span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="zipcode" name="zipcode" class="form-control" required="" value="{{ $editData->zipcode }}" > 
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

<div class="row">
	<div class="col-md-6" >		
		<div class="form-group">
			<h5>Profile Image <span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="file" name="image" class="form-control" id="image" >  </div>
		 </div>
	
			 <div class="form-group">
			<div class="controls">
		<img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 
	
		 </div>
		 </div>
	
	
		</div><!-- End Col Md-6 -->
	

</div> <!-- End Row -->

 
  
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
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
