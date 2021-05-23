

<!DOCTYPE html>
<html>
	<head>
		<title>API</title>
	</head>
	<body>
<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left">
			<img src="images/crud.svg" alt=""/>
			<h3>Welcome</h3>
			<p>Please fill all the details carefully</p>
		</div>

<div class="col-md-9 register-right">
	
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		
		<form  action="api.php" method="POST">
			<div class="row register-form">
				
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter your name *" name="name" value="" required/>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email *" name="email" value="" required/>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" placeholder="Roll Number*" name="roll" value="" required/>
					</div>
					
				</div>					
					<input type="submit" class="btnRegister"  name="submit" value="Submit"/>
				</div>
			</div>
		</form>
    <a href="view.php">View Records</a>
	</div>
</div>
</div>
	</div>
</div>
	</body>
</html>