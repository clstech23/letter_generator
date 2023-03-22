@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">List of Letter Details</h3>
	<a href="{{ route('add.customer') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Generate Letter  </a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

	  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Full Name</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>City, State, Zip</th>
				<th>Dispute Letter</th>
				<th>Account Name</th>
				<th>Account Number</th>
				<th>Credit Reporting Agency</th>
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

				 switch ($value->account_name) {
					
					case "COB":
						$accoutdsc = "Credit One Bank";
						break;
					case "BOA":
						$accoutdsc = "Bank Of America";
						break;
					case "NFD":
						$accoutdsc = "Navy Fed";
						break;
				 }

				 switch ($value->agency) {
					
					case "EXP":
						$agencydsc = "Experian";
						break;
					case "EQF":
						$agencydsc = "Equifax Information Services LLC";
						break;
					case "TRSU":
						$agencydsc = "TransUnion LLC Consumer Dispute Center";
						break;
				 }
				?>
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $value->fullname}}</td>
				<td> {{ $value->address }}</td>
				<td> {{ $value->mobile}}</td>	
				<td> {{ $value->state}}, {{ $value->city}}, {{ $value->zipcode}}</td>	
				<td> {{ $dscr }}</td>
				<td> {{ $accoutdsc }}</td>
				<td> {{ $value->account_number }}</td>
				<td> {{ $agencydsc }}</td>
				<td>
				@if($value->payment_code == "" || $value->payment_code == "NULL")
				<a target="_blank" title="Details" href="{{ route('checkout.view',$value->id) }}" class="btn btn-danger">Checkout and Download Letter</a>
				<br>
				@else
				<a target="_blank" title="Details" href="{{ route('customer.details',$value->id) }}" class="btn btn-success">Download Letter</a>
				@endif
				<br>
				@if($value->payment_code == "" || $value->payment_code == "NULL")
				<a href="{{ route('customer.edit',$value->id) }}" class="btn btn-info">Edit</a>
				<br>
				<a href="{{ route('customer.delete',$value->id) }}" class="btn btn-danger" id="delete">Delete</a>
                @endif
				
				</td>
				 
			</tr>
			@endforeach
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>
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
