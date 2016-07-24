
	<div class="primary-content">

	<div class="login-form-div">

	<?php
		$attributes = array('class'=> 'login-form');
		echo form_open('RegisterAccountC/checkInputs', $attributes);
	?>

		<h1>Register Account</h1>

		<span class="show">
			<?php echo validation_errors(); ?>
		</span>

		<input type="text" name="firstname" id="fname" class="input" placeholder="Firstname"><br>
		<input type="text" name="lastname" id="lname" class="input" placeholder="Lastname"><br>
		<input type="email" name="email" id="email" class="input" placeholder="E-mail address"><br>
		<input type="text" name="username" id="uname" class="input" placeholder="Username"><br>
		<input type="password" name="password" id="pword" class="input" placeholder="Password"><br>
		<input type="password" name="password" id="cpword" class="input" placeholder="Confirm Password"><br>
		<input type="submit" id="registerbtn" class="loginbtn" value="Submit"><br>

	<?php
		echo form_close();
	?>

	</div>

	</div>