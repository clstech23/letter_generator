@include('backend.student.student_reg.template');
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
    <p>Name</p> <br>
    <p> Address </p> <br>
    <p>City, State Zip</p> <br>
    <p> DATE</p><br><br>
    <p>TransUnion LLC Consumer Dispute Center</p> <br>
    <p> PO Box 2000</p> <br>
    <p>Chester, PA 19016</p> <br>
    <div> <p>To Whom It May Concern:</p></div><br>
</div>
<p>
  I recently received a copy of my Experian, Equifax, or TransUnion credit report, and I noticed some late payments posted on my credit report:
  </p><br>
  <p>
    &nbsp;&nbsp;&nbsp;&nbsp;List Name of the accounts with late payments along with their account numbers.
  </p><br>


  <p>
    Your company is in clear violation of the law. Under 15 USC §1681b - permissible purpose of consumer reports, THE LAW CLEARLY STATES:</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a) IN GENERAL</p><br>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject to subsection (c) any consumer reporting agency may furnish a consumer report under the following circumstances and no other:</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2) In accordance with the written instructions of the consumer to whom it relates.</p>
  <p>
    Did I give you written instructions to furnish this on my credit report?</p><br>
    <p>Furthermore, the FAIR CREDIT REPORTING ACT 15 USC §1681 (2)(a)(i) Exclusions from a consumer credit report clearly states:</p><br>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2) EXCLUSIONS. —Except as provided in paragraph (3), the term “consumer report” does not include—</p><br>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(A)Subject to section 1681s-3 of this title, any—</P><br>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i)report containing information solely as to transactions or experiences between the consumer and the person making the report.</P><br>
  <p>Delete the above late payments from my consumer report, this agency is in violation of 15 USC §1681.</p><br> 
<p>Failure to respond satisfactorily with deletion of the above referenced account, and send out a free copy of my report after the changes have been made will result in legal actions being taken against your company, for which I will also be seeking $ 1,000 per violation for:</p><br>
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