
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
    <!--p><b>{{ $details->agency  }}</b></p> <br>
    <p><b> {{$pob}}</b></p> <br>
    <p><b>{{$adr}}</b></p> <br><b-->
   
</div>
<p><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Opportunity to cure Default Final Notice
</b></p><br>
<p style="font-size:14px;"><b>NOTICE TO AGENT IS NOTICE TO PRINCIPAL AND NOTICE TO PRINCIPAL IS NOTICE TO AGENT
</b></p><br>
<p style="font-size:16px; text-align:center;"> 15 U.S. Code § 6802 - Obligations with respect to disclosures of personal information
</p><br><br>


    <p>On X Date (Date you sent the fist letter) I mailed certified mail a notice requesting my Disclosure Pursuant 15 USC 6802(b) you have failed to provide me with the required disclosures as per federal law. The law is explicitly clear that before a financial institution discloses any consumers non public person information they must give the consumer 3 disclosures so the consumer has an opportunity to opt out of having their information reported.

    </p>
  <br><br>

 <p>
   XYZ company you knowingly, will fully and fraudulently withheld pertinent information to suite your own agenda, forcing me to comply illegally with you reporting my non public personal information to a non affiliated third party companies for your own benefits and profits, this was not equitable to me, my family or household.
</p>
  <br><br>

  <p>
    I AM INVOKING MY SPECIFIED REMEDY THAT YOU PREVIOUSLY DENIED ME BY WITH HOLDING MY DISCLOSURE, Pursuant 15 USC 6802(b).
</p>
    <br><br>

  <p>
    PURSUANT 15 USC 6802 (B) I First Name, Last Name a living breathing man hereby exercise my right and specified remedy to OPT-OUT of having this account with my nonpublic personal information reported.
</p>
    <br><br>

  <p>
    DELETE THE BELOW ACCOUNT FROM ALL CONSUMER REPORTING AGENCIES.</p>
    <br><br>
  <p>
    Account Name:
</p><br>

<p>
    Account Number: {{ $details->account_number }}
</p><br><br>

 <p>
 Yours Truly,<br><br>
  Your Name: {{ $details->fullname }}

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