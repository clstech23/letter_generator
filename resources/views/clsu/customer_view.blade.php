@extends('admin.admin_master')
@section('admin')

<style>

#addCustomer:hover {
  background-color: rgb(246, 102, 13);
}

#addCustomer{
	float: right; 
	background-color:rgb(207, 184, 33);
	padding:10px; 
	border-radius:10px; 
	color:rgb(255, 255, 255); 
	font-weight: bold;

}

#downloadSection:hover {
  background-color: rgb(246, 13, 13);
}

#downloadSection{
	background-color:rgb(33, 126, 207);
	padding:10px; 
	border-radius:10px; 
	color:rgb(255, 255, 255); 
	font-weight: bold;

}
body.dark-skin {
    background-color: white;
    color: #000;
}
.dark-skin .box {
    background-color: #d5dfea;
    box-shadow: -7.829px 11.607px 21px 0px rgba(25, 42, 70, 0.13);
}


	</style>
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 <!-- Main content -->
		<section class="content">

			<div class="row">
				<div class="box-header with-border">
					<h4 class="box-title" style="color:black">This dashboard will display the letters that you have generated in the past with<br> the related information. You can directly checkout to download. <br>After checkout the letter will be available for you to download indefinitely. </h4>
			</div>
                <br>
                <ul>
					<li>Before you checkout to download you can edit, regenerate or delete the letter.</li>
					<li>After your first download you will no longer be able to edit the letter details.</li>
					<li>All payments are final and irreversible (non refundable).</li>
					<li>All your generated letters will be displayed on your profile so you can re-visit and download it anytime.</li>
				    <li>Contact our support team for any inquiries: <a href="mailto:support@consumerlawsecrets.com" style="color:red">support@consumerlawsecrets.com</a></li>
				</ul>
            </div>
			<br>
			<br>
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">List of Letter Details</h3>
	<a href="{{ route('add.customer') }}" id="addCustomer"> Generate Letter  </a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
	  @if($allData)
	  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr style="background-color: #a90d0d">
				<th width="5%">ID</th>  
				<th>Consumer Name</th>
				<th>Letter Name</th>
				<th>Destination </th>
				<th>Date </th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		
		<tbody>
			@foreach($allData as $key => $value )

			<?php 
				switch ($value->letter) {
					
				case "ARLR1":
					$dscr = "Account Removal Letter R1";
					break;
				case "ARLR2":
					$dscr = "Account Removal Letter R2";
					break;
				case "ITDL":
					$dscr = "Identity Theft Dispute Letter";
					break;
				case "NPRRPC":
					$dscr = "No Parking Rule Refusal to Pay Cease and Desist";
					break;
				case "LPD":
					$dscr = "Late Payment Deletion Letter";
					break;
				case "PIUL":
					$dscr = "Personal Information Update Letter";
					break;
				case "ALDL":
					$dscr = "Auto Loan Deletion Letter";
					break;
				case "MCD":
					$dscr = "Medical Collection Deletion";
					break;

				case "BDL":
					$dscr = "Bankrupcy Deletion Letter";
					break;
				case "MC":
					$dscr = "Medical Collection";
					break;
				case "REL":
					$dscr = "Repossession Letter";
					break;
				case "CDVNL":
					$dscr = "Cease and Desit Volenti Non Injuria";
					break;
				case "MDL":
					$dscr = "Mortgage Deletion Letter";
					break;
				case "SLDL":
					$dscr = "Student Loan Deletion Letter";
					break;
				case "COL":
					$dscr = "Charge Off Letter";
					break;
				case "CSL":
					$dscr = "Child Support Letter";
					break;
				case "DVL":
					$dscr = "Debt Validation Letter";
					break;
				case "IRL":
					$dscr = "Inquiry Removal Letter";
					break;
				
				 }
				?>
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $value->fullname}}</td>		
				<td> {{ $dscr }}</td>
				<td> {{ $value->agency }}</td>
				<td> {{ $value->date}}</td>
				<td>
				@if($value->payment_code == "" || $value->payment_code == "NULL")
				<a target="_blank"  title="Details" href="{{ route('checkout.view',$value->id) }}" class="btn btn-primary">Checkout to Download</a>
				<br>
				@else
				<a target="_blank" id="downloadSection" title="Details" href="{{ route('customer.details',$value->id) }}">Download</a>
				&nbsp;&nbsp;&nbsp;<a href="{{ route('customer.delete',$value->id) }}" class="btn btn-danger" id="delete">Delete</a>
				
				@endif
				<br>
				@if($value->payment_code == "" || $value->payment_code == "NULL")
				<a href="{{ route('customer.edit',$value->id) }}" class="btn btn-secondary">Edit</a>
				&nbsp;&nbsp;&nbsp;<a href="{{ route('customer.delete',$value->id) }}" class="btn btn-danger" id="delete">Delete</a>
				@endif
				</td>
				 
			</tr>
			@endforeach
			
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>
					  @endif
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
@endsection
