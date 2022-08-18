<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Montserrat:wght@300&display=swap" rel="stylesheet">
<body>
	<div class="header" style="background-color:#1c6474">
		<h2>Regjistrim</h2>
	</div>
	
	<form method="post" action="register1.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Fjalekalim</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Konfirmo fjalekalim</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn" style="background-color:#1c6474">Regjistrohu</button>
		</div>
		<p>
	    	<h4 class="log-sig" style="font-family:'Montserrat'">Keni nje llogari?<a href="login.php" style="color:#1c6474" >Logohu</a></h4>
         </p>
	</form>
</body>
</html>