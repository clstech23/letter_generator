
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
    <p><b>Child Support Agency</b></p> <br>
    <p><b>RE: Last 4 SSN</b></p> <br>
   
</div>

<p><b> To Whom It May Concern:
</b></p><br>

<p><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This notice is to inform you that you unlawfully reported an unauthorized account on my consumer report.
</b></p><br>
<p>I recently received communication from you attempting to collect the above-listed alleged debt. Your initial communication to me in an attempt to collect the alleged debt was within 30 days ago.

</p><br>
Please be advised that I hereby dispute the validity of the alleged debt listed above in its entirety. Further, I request verification, Validation and proof that this alleged Debt and Child is mine! In addition I want proof of a copy of a contract or agreement. Said contract or agreement must be with the original creditor and signed by all parties involved. You are illegally attempting to collect the above-listed alleged debt and money that I do not owe.
</p><br>

</p><br>
Cease and desist all collection activity, including all reporting to consumer reporting agencies. Promptly request deletion of any and all prior reporting made to any consumer reporting agencies. If you comply with my requests above within 14 days, then you are excused from verification. 
</p><br>

<p>
    I have not given you written permission to put anything on my consumer report.
    </p>
  <br><br>

 <p>
    <b>
    15 USC §1681b Permissible purpose of consumer reports
    </b>
</p>
  <br><br>

  <p>
    (a) IN GENERAL
    Subject to subsection (c) any consumer reporting agency may furnish a consumer report under the following circumstances and no other:
      
</p>
    <br>
    <br>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2) In accordance with the written instructions of the consumer to whom it relates.
</p>
    <br><br>

  <p>
    You have no permissible purpose by law to contact third parties with my private or personal information.  15 USC 1681 a 4 speaks on a consumer right to privacy. 15 USC 1692 speaks further on a consumer right to individual Privacy. /p>
  </p> <br>
  <p>
    The Privacy Act
</p><br>

<p>
    You have violated my rights to Privacy under FCRA 15 USC 1681 and the FDCPA 15 USC 1692. 
</p><br>
<p>
    I will not tolerate this Bullshit, I am a litigious consumer I will not hesitate to take legal action and sue you! Yes you heard me correctly I will sue for infringement of my right to privacy for advertising this alleged debt on my consumer reports that I do not owe and you have no lawful or legal right to collect on. SHOW ME THE AGREEMENT AND/OR PERSONAL RESPONSIBILITY CONTRACT?

</p><br>

<p>
    Child Support or Title IV-D is contractual Law and there must be an agreement where the Non-Custodial Parent is Enrolled into the program.   
</p><br>

<p>
    When and where did I enroll in this program? Send me the contract bearing my endorsement/ Signature between me (First name Last Name) and the Head of the Child Support Agency or DHHS!   
</p><br>

<p>
    Legal Duty. An obligation Arising from the contract of the parties or the operation of the law. Riddell V. Ventilting Co., 27 Mont 44, 69 P.241

</p><br>

<p>
    No Contract No Legal Duty.      
</p><br>

<p>
    It is unlawful for the advertisement of any debt to coerce payment, stop harassing me! My mental health is on the brink of exploding. You have caused me severe harm and Anxiety!    
</p><br>

<p>
    15 U.S. Code § 1692d - Harassment or abuse  
</p><br>

<p>
(4)<br>
The advertisement for sale of any debt to coerce payment of the debt 
</p><br>

<p>
    Your offenses amount to Aggravated Identity Theft pursuant to 18 U.S.C. §1028A and 15 USC 1681q. You have knowingly transferred, possessed, or used, without lawful authority, a means of identification of me, which is a felony punishable with up to 2 years of imprisonment, in addition to civil liability.

    </p><br>

    <p>
        I am writing this letter to dispute the following account/s:  
</p><br>
<p>
Fill in accounts you want to be disputed, be sure to add the account numbers with each account. 
</p><br>

<p>
    This agency is in violation of 15 USC §1692gb. This is an official dispute of this account.
</p><br>

<p>
    I demand the above account be deleted from my consumer report.
</p><br>

 <p>
 Thank You,<br><br>
 Name: {{ $details->fullname }}

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