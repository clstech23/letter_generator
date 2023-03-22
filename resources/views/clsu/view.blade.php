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
				  <h3 class="box-title">Dispute Letter List</h3>
	<a href="{{ route('add.letter') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Letter  </a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
      	@if($allData)	
	 <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Dispute Letter Code</th>  
				<th>Dispute Letter Desc</th>
				<th>Dispute Letter Content</th>
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
				<td> {{ $value->letter }}</td>	
				<td> {{ $dscr }}</td>
				<td> {{ $value->letter_dsc }}</td>		
									 
				<td>
                <a href="{{ route('letter.edit',$value->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ route('letter.delete',$value->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
