
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
<td><div>
    <p><b>Name: </b>{{ $details->fullname }}</p> <br>
    <p><b>Address:</b> {{ $details->address }}</p> <br>
    <p>{{ $details->state }}, {{ $details->city }}, {{ $details->zipcode }}</p> <br>
    <p> <b>DATE:</b> {{ $details->date }}</p><br><br>
    <p><b>{{ $details->agency }}</b></p> <br>
    <p><b> {{$pob}}</b></p> <br>
    <p><b>{{$adr}}</b></p> <br><br>
    <div> <p>To Whom It May Concern:</p></div><br>
</div>
<p>
  This notice is to inform you that you unlawfully reported fraudulent accounts that arose from IDENTITY THEFT that you did not verify as required by law on my consumer report.
</p><br>
  <p>
    &nbsp;&nbsp;&nbsp;&nbsp;<b>15 USC §1681b (c) Furnishing reports in connection with credit or insurance transactions that are not initiated by consumer (3) Information regarding inquiries;</b> Except as provided in section 1681g(a)(5) of this title, a consumer reporting agency shall not furnish to any person a record of inquiries in connection with a credit or insurance transaction that is not initiated by a consumer.
  </p><br>
<p>
  The Following Inquiries are a result of Identity theft and was not initiated by me, I demand that they are DELETED immediately: </p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inquiry: Company Name, Date of Inquiry</p><br>
  <p>My identity has been stolen, you are hereby put on notice.</p>
  <p>Aggravated Identity Theft pursuant to 18 U.S.C. §1028A.</p>
  <p>
    (1)In general.—</p><br>
    <p>Whoever, during and in relation to any felony violation enumerated in subsection (c), knowingly transfers, possesses, or uses, without lawful authority, a means of identification of another person shall, in addition to the punishment provided for such felony, be sentenced to a term of imprisonment of 2 years.
      </p><br>
    <p>An identification of me has been used without my permission to open several accounts that have damaged my reputation and damaged my mode of living because you furnished a consumer report without my written permission as stated by Federal Law
      </p><br>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>15 USC §1681b Permissible purpose of consumer reports</b></P><br>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IN GENERAL.</P><br>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject to subsection (c) any consumer reporting agency may furnish a consumer report under the following circumstances and no other:</p><br> 
<p>(2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In accordance with the written instructions of the consumer to whom it relates.</p><br>
<p>YOU TRANSUNION, EQUIFAX, EXPERIAN have aided this Fraud by not verifying these accounts.</p><br>
<p>Congress states 
  <b>15 USC §1681 Fair Credit Reporting Act</b>
  <b>(a) Accuracy and fairness of credit reports</b>
  (4)There is a need to insure that consumer reporting agencies exercise their grave responsibilities with fairness, impartiality, and a respect for the consumer’s right to privacy.</p><br>

  <p>
    List Account/s here:
    </p>
    <p>
      Account Name, Account #
    </p>

<p>
<ul class="b">
<li>Defamation of Character per se
</li>
<li>
    Negligent Enablement of Identity Fraud
</li>
<li>
  Fair Debt Collections Practices Act 15 USC §1692g violations. 
</li>
<li>Fair Credit Reporting Act 15USC §1681 violations for willful noncompliance - §616. Civil liability for willful noncompliance 15 U.S.C. §1681n
</li>
</ul>
 </p><br><br><br>
 <p>
  Best regards,<br><br>
  Your Name

 </p>
</div>
<br><br>
<div>

  <p><b>Enclosed: copy of ID and Utility Bill showing proof of address</b></p>
</div>

 <br>
  <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>
    </td> 
  </tr>
  
   
</table>


</body>
</html>