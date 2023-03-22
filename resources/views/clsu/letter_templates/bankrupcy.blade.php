
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
    
</div>
<p>
  I am deeply disturbed by your ability to undermine my confidence in the banking system. The banking system is dependent upon fair and accurate consumer reporting, pursuant to 15USC1681(a)(1). I noticed accounts that are on my consumer report;
</p><br><br>
  <p>
  Pursuant to 15USC1681b, I am demanding to see in writing where I gave written instruction or permission to report this erroneous information on my Consumer Report.</p><br>
<p>
  A consumer reporting agency may furnish a consumer report under the following circumstances and no other with the written instruction to whom it relates. 
</p><br><br>

<p>
  You have defamed my character, my reputation, my worthiness, my standing, my capacity, and my mode of living.
</p><br><br>
<p>
  All of these violations are a direct violation of 15USC1681. No consent is identity theft and these violations are Aggravated Identity theft, pursuant to 18USC1028b(1)(A)(ii). You have knowingly transferred, possessed and used, without lawful authority, a means of identification of me, which is a felony punishable up to 2 years of imprisonment, in addition to civil liability.
</p><br><br>
<p>
  For damages I am invoking my rights as a consumer pursuant 15USC1681(n) civil liability and I demand compensation for every violation listed below;
</p><br>
  <p>
<ul class="b">
<li>Permissible purpose $1000
</li>
<li>
  Defamation of character $1000
</li>
<li>
  Damaged reputation $1000 
</li>
<li>
  Damaged credit worthiness $1000
  </li>
  <li>
    Damaged mode of living $ 1000
    </li>
</ul>
 </p><br><br><br>
 <p>
  Best regards,<br><br>
  Your Name: {{ $details->fullname }}

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