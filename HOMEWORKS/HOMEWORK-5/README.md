<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<form action="index1.php" method="post" >
				<div class="aw row">
					<div class="col-md-6 col-md-offset-3">
						<h1>REGISTRATION FORM</h1>
						<div class="form">
							<label for="user_id">User ID<span style="color: red">*</span></label>
							<input type="text" name="user_id" class="form-control" id="user_id" required>
						</div>
						<br>
						<div class="form">
							<label for="password">Password<span style="color: red">*</span></label>
							<input type="password" name="password" class="form-control" id="password" required>
						</div><br>
						<div class="form">
							<label for="name">Name<span style="color: red">*</span></label>
							<input type="text" name="name" class="form-control" id="name" required>
						</div><br>
						<div class="form">
							<label for="address">Address<span style="color: red">*</span></label>
							<input type="text" name="address" class="form-control" id="address" required>
						</div><br>
						<div class="form">
							<label for="country">Country<span style="color: red">*</span></label>
							<input type="text" name="country" class="form-control" id="country" required>
						</div><br>
						<div class="form">
							<label for="zip">Zip<span style="color: red">*</span></label>
							<input type="text" name="zip" class="form-control" id="zip" required>
						</div><br>
						<div class="form">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control" id="email" required>
						</div><br>
						<div class="form">
							<label for="sex">Sex<span style="color: red">*</span></label>
							<input  type="radio" name="sex" class="form-control" id="sex" required>Male
							<input type="radio" name="sex" class="form-control" id="sex" required>Female
						</div><br><br>	
						<div class="form">
							<label for="language">Language<span style="color: red">*</span></label>
							<input type="checkbox" name="language" class="form-control" id="language" required>English
							<input type="checkbox" name="language" class="form-control" id="language" >Non-English
						</div><br>
						<div class="form">
							<label for="about">About</label>
							<input type="text" name="about" class="form-control" id="about" required>
						</div><br><br>
					</div>
				</div>
				<div class="row">
						<div class="col-md-12">
							<button type="submit" name="Submit" class="button">Submit </button>
						</div>
					</div>
			</form>	
</body>
</html>
