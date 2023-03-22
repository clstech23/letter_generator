
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
    <!--p><b>{{ $agencydsc }}</b></p> <br>
    <p><b> {{$pob}}</b></p> <br>
    <p><b>{{$adr}}</b></p> <br><b-->
   
</div>

<p style="font-size:14px;"><b>NOTICE TO AGENT IS NOTICE TO PRINCIPAL AND NOTICE TO PRINCIPAL IS NOTICE TO AGENT
</b></p><br>
<p style="font-size:16px; text-align:center;"> 15 U.S. Code § 6802 - Obligations with respect to disclosures of personal information
</p><br><br>


    <p>
    XYZ Company it has come to my attention that you illegally reported my information to unaffiliated 3rd parties without giving me my disclosures. 
</p>
  <br><br>

 <p>
    Pursuant 15 USC 6802 you are required by law to give me 3 disclosures I have checked all documents from your institution given to me and none of these documents contained any of the required disclosures pursuant 15 USC 6802(b).
 </p>
  <br><br>

  <p>
    (b)Opt out
    (1)In generalA financial institution may not disclose nonpublic personal information to a nonaffiliated third party unless— </p>
    <br><br>

  <p>
    (A)
    such financial institution clearly and conspicuously discloses to the consumer, in writing or in electronic form or other form permitted by the regulations prescribed under section 6804 of this title, that such information may be disclosed to such third party;</p>
    <br><br>

  <p>
    (B)
    the consumer is given the opportunity, before the time that such information is initially disclosed, to direct that such information not be disclosed to such third party; and </p>
    <br><br>
  <p>
    (C)
the consumer is given an explanation of how the consumer can exercise that nondisclosure option.
<br><br>

<p>
    (C)
I am herby requesting all above disclosures required by Federal.</p> <br><br>

<br>
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