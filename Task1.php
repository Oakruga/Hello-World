<!Doctype html>
<html>
<title>Stage1 Task</title>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:700i" rel="stylesheet">
<style type="text/css">
 html
 body
 { background-image: url(Penguins.jpg);
  background-repeat: no-repeat;
   background-size: cover;
   margin: 0;
   padding: 0;
 }
 h2{font-family: Roboto;
    color: #26260D;
    font-size: 50px;
	font-style: Bold-Italics;
	padding-bottom: 300px;
	padding-top: 75px;
	padding-left: 200px;
	}

h1{font-family: Roboto;
    color: #26260D;
    font-size: 125px;
	font-style: Bold-Italics;
	padding-left: 10px;
	border: none;
	padding-top: 70px;
	line-height: 0.5;
	}
div{ font-family: Roboto;
    color: #26260D;
    font-size: 45px;
	font-style: Bold-Italics;
	padding-top: 0;
	padding-left: 935px;
	margin: 0;
	line-height: 25px;
	}
p{ class= "nospaces";
    font-family: Roboto;
    color: #26260D;
    font-size: 75px;
	font-style: Bold-Italics;
	padding-left: 10px;
	margin-top: 0px;
	border: none;
	line-height : 2.0px;
	}
</style>
</head>
<body>
 <div ><h3>@
    <?php
	   date_default_timezone_set ('Africa/Lagos');
	   echo   date( "h:i:s a");
	  ?>
 </h3>
 </div>
<h2>Presenting...</h2>
<h1>HNG Internship 4</h1>
 <p><?php echo date('l jS F, Y')
     ?></p>

</body>
</html>
