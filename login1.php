<html>
<head>
<title>Wecode</title>
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
<link href="css/bootstrap.css" rel="stylesheet"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<style type="text/css">
body{background:url('image/elec.jpg') no-repeat ;
	overflow-y:scroll;
	}
#log{
 
 padding:60px 40px;
 margin-top:80px;
 -webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
-moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
}
img{ width:150px;
	margin:auto;
}
h1{
color:white;
text-align:center;
font-weight:bolder;
margin-top:-20px;
}
label{font-size:20px; color:white;}
button{

-webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
-moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
}
</style>

</head>
<body>

<div class="container-fluid bg">
	
	
	
	<div class="row">
		
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
				
		<div class="col-md-4 col-sm-4 col-xs-12">
			
			<form id="log" method="POST" action="select.php">
			<h1> Login Form</h1>
			<img class="img img-responsive img-circle" src="image/login.gif">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username" required>
					
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" required>
				</div>
				<div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div>
				<button type="submit" name="submit" class="btn btn-success btn-block ">Login</button>

				
		
		</div>	
			</form>
			
			
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>



</html>