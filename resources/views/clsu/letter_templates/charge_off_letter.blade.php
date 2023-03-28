
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
ul.b {
  list-style-type: square;
}
</style>
</head>
<body>


<table id="customers">
  <tr>
<td>
    <p style="text-align:center;"><b> Letter 1 Directed to creditor 
    </b></p><br><br>
    <div>
    <p><b>Dear (Company Name):</b> {{ $details->address }}</p> <br>
    <p>Subject:</p> <br>
    <p><b>Account Number:</b> {{ $details->account_number }}</p> <br>
    <p> <b>DATE:</b> {{ $details->date }}</p><br><br>
    <!--p><b>{{ $details->agency  }}</b></p> <br>
    <p><b> {{$pob}}</b></p> <br>
    <p><b>{{$adr}}</b></p> <br><b-->
   
</div>
    <p>
        Thank you for reading my request about this account with your company. I am writing today because during my quarterly review of my accounts listed on my credit report, I noticed that this account was charged off with {{ $details->agencyds }}. 
    </p>
  <br><br>

 <p>
    I am requesting that your company please forward me a copy of the 1099-C that was issued by your company when you charged this debt off with the IRS which is required by law for all debts over $600. 
 </p>
  <br><br>

  <p>
    Please also enclose a printed copy of my payment history or you may also email it to me at (YOUR EMAIL ADDRESS)  please do not send any marketing or other account information to this email address I have no desire to have spam at this location and I track everything by standard USPS mail at my home address listed above. 
    <br><br>
</p>

  <p>
    If for some reason this was an error, please send me the past due amount that will re-establish my account into good standing with your company and payment will be provided within 5 business days of the written confirmation. 
</p><br><br>
  

Thanks in advance<br><br>
Name: {{ $details->fullname }}
  <br>
  Data : {{ date("d M Y") }}

 </p>
 <br>
<br>

 <br>
  <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>
    </td> 
  </tr>
  
   
</table>


</body>
</html>