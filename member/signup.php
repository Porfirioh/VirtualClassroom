<?php
  if(isset($_GET['m']))
	  echo "<center><br><h1>".$_GET['m']."</h1></center>";
?>
<html lang="en">
<head>
  <title>Teacher Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><br><a  href="/" class="btn btn-default">Home</a></center>
<div class="container" style="padding:15%">
  <center><h2>Teacher Signup</h2></center>
  <form class="form-horizontal" method="post" action="../t_signup">
            <input class="form-control" type="text" name="fname" placeholder="First Name" required=""><br>
			<input class="form-control" type="text" name="lname" placeholder="Last Name" required=""><br>
			<input class="form-control" type="text" name="email" placeholder="email" required=""><br>
			<input class="form-control" type="text" name="phone" placeholder="Phone No" required=""><br>
			<input class="form-control" type="text" name="versity" placeholder="Your Institution" required=""><br>
			<input class="form-control" type="password" name="password" placeholder="Enter a  Password" required=""><br>
																					 
			<div class="address">
																				      
				<select class="form-control"  name="sex" class="form-control">
																					   
					<option value="male">Male</option>
					<option value="female">Female</option> 
																							
				</select>
						<br>												
					<div class="clearfix"></div>
			</div>
					<div class="address">
				 <input class="btn btn-default"  type="submit" value="Signup Now">
  </form>
</div>

</body>
</html>