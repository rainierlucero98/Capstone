<html>
<head>
<title>City Health Office - Clear Section</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

table {
    font-family: Century Gothic;
	font-size: 20px;
    border-collapse: collapse;
    width: fixed;
	height: fixed;	
}

td, th {
    border: 7px ridge #000000;
    text-align: center;
    padding: fixed;
	background-color: #08DDE0;
	table-layout: auto;
    width: 360px; 
    min-height: auto;	
	min-width: auto;
}

button {
	background:#180AA5;
	color: white;
	border:auto solid;
	font-family: Trebuchet MS;
	font-size:25px;
	margin: auto;
	padding: auto;
	min-width: 75%;
	min-height:10%;	
    
	
}
input {
	background:#2E36DE;
	color: white;
	border:auto solid;
	font-family:Arial;
	font-size:20px;
	margin: auto;
	padding: auto;
	min-width: 10%;
	min-height:5%;  
    
	
}
</style>
</head>
<body bgcolor="#31E509">
<center>
  <p style="font-family:Helvetica"><font size="5"><img src="Logo.png" alt="Logos" width="225" height="125" align="middle" hspace="20"><br>
                 Republic of the Philippines<br>
                 Cagayan de Oro City<br>
				 City Health Office 
	  </font></p>
</center>	  
<center>
   <h1 style="font-family:Tahoma">Service Queuing System <br>(Operators Only)</h1>
</center>

<center>
<table bgcolor="white" border="10">
  <tr>
     <th><h2 style="font-family:Tahoma">Clear a Counter</h2></th>
  </tr>
  <tr>
  <td>
	 <form method="post" >
	<input type="submit" formaction="clear_c1.php" value="C1" name="medical" style="width:75px;height:75px" style="font-family:Arial" onclick="C1()">
	 
   
	
	<input type="submit" formaction="clear_c2.php" value="C2" name="dental" style="width:75px;height:75px" style="font-family:Arial" onclick="C2()">
	
	
	
	<input type="submit" formaction="clear_c3.php" value="C3" name="pharmacy" style="width:75px;height:75px" style="font-family:Arial" onclick="C3()">
	 
	<input type="submit" formaction="clear_c4.php" value="C4" name="dogbite" style="width:75px;height:75px" style="font-family:Arial" onclick="C4()">
	<input type="submit" formaction="clearall.php" value="ALL" name="all" style="width:75px;height:75px" style="font-family:Arial" onclick="CA()">
	</form>
  </td>		
  </tr>
</table>		
</center>





<script>

    function C1() {
	window.location.href = 'http://localhost/City%20Health%20Office/md.php';
	}
	
	function C2() {
	window.location.href = 'http://localhost/City%20Health%20Office/dnt.php';
	}
	
	function C3() {
	window.location.href = 'http://localhost/City%20Health%20Office/ph.php';
	}
	
	function C4() {
	window.location.href = 'http://localhost/City%20Health%20Office/db.php';
	}
	
	
	
	
    
</script>   


</body>
</html>