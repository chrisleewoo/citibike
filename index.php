<?
require_once('database.php');
$db = db_connect();
?>

<html>
 <head>
<title>Citibike Database Project</title>
  <style type="text/css">
  	body {
    	font-family: "Arial";
    	color: f8fDfB;
    	background-color: #1100CD; 
	}
	#wrapper {
    width: 100%;
    border: 4px solid 483D8B;
    overflow: hidden; /* add this to contain floated children */
	}
	.boxOne {
	width: 40%;
	height: 1200px;
	float: left;
	padding-left: 1em;
	padding-right: 1em;
	padding-top: 4em;
	}
	.boxTwo {
	width: 15%;
	height: 1300px;
	border-left:3px dotted 483D8B;
	float: left;
	padding-left: 1em;
	padding-right: 1em;
	}
	.boxThree {
	width: 30%;
	height: 1235px;
	border-left:3px dotted 483D8B;
	padding-top: 4em;
	padding-left: 1em;
	padding-right: 1em;
	float: left;
	}
  </style>
</head>
<body>
<img src="peewee.gif">

<div id="wrapper">
<div class="boxOne">
<h2>Populated Tables:</h2>
<u>Stations</u><p>
<table>
<tr></tr><tr><td>Station ID</td><td>   |  Latitude</td><td>   |   Longitude</td></tr>
</table></tr></table><br>


<u>Bikers</u><p>
<table>
<tr></tr><tr><td>Biker ID</td><td> | Usertype </td> <td> | Birthyear </td><td>  | Gender </td>            </tr>

</table><br>

<u>Trips</u><p>
<table>
<tr></tr><tr><td>TripID</td><td> | Duration</td><td> | startTime</td><td> | endTime</td><td> | ssID</td><td> | esID</td><td> | bikerID</td></tr></table></tr></table><br>


</div>

<div class="boxTwo">
<form action="run_query" method="POST">
	  <h1>Citibike Project</h1>
      <h2>Enter your SQL query:</h2>
      <textarea rows="8" cols="30" name="message_body"></textarea>
      <p></p>
      <input type="submit" name="submit" value="Submit" />
      <p>Errors: </p>
</form>
</div>

<div class="boxThree">
<h2>Results:</h2>
<p></p>
<br>
</div>

</div>
</body>
</html>
