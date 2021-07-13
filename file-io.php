<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
</head>
<body>

	<h1>REGISTRATION FORM</h1>

	<form action="registration_form_action.php" method="POST">
		<fieldset>
			<legend><b>Basic Information</b></legend>

			<label for="fname">First Name:<span style="color: red;">*</span></label>
			<input type="text" id="fname" name="fname">
			<br><br>

			<label for="lname">Last Name:<span style="color: red;">*</span></label>
			<input type="text" id="lname" name="lname">

			<br><br>
			<label for="gender">Gender:</label><br>

			<input type="radio" id="male" name="gender">
			<label for="male">Male</label>
			<br>
			<input type="radio" id="female" name="gender">
			<label for="female">Female</label>

			<br><br>

			<label for="birthday">Date of Birth</label>
			<input type="date" id="birthday" name="birthday">

			<br><br>

			<label for="religion">Religion</label>
			<select name="religion" id="religion">
  			<option value="muslim">Muslim</option>
    		<option value="hindu">Hindu</option>
    		<option value="buddhist">Buddhist</option>
    		<option value="christian">Christian</option>
    		<option value="other">Other</option>
</select>


		</fieldset>

			<br><br>

		<fieldset>
			<legend><b>Contact Information</b></legend>

			<label for="presentAddress">Present Address</label>
			<textarea id="presentAddress" name="presentAddress" rows="4" cols="50"></textarea>

			<br><br>

			<label for="permanentAddress">Permanent Address</label>
			<textarea id="permanentAddress" name="permanentAddress" rows="4" cols="50"></textarea>

			<br><br>

			<label for="phone">Phone Number</label>
			<input type="tel"  id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">

			<br><br>

			<label for="email">Email<span style="color: red;">*</span></label>
			<input type="email"  id="email" name="email">

			<br><br>

			<label for="url">Personal Website Link</label>
			<input type="url"  id="url" name="url">


		</fieldset>

			<br><br>

		<fieldset>
			<legend><b>Account Information</b></legend>

			<label for="userName">Username:<span style="color: red;">*</span></label>
			<input type="text" id="userName" name="userName">
			<br><br>

			<label for="password">Password:<span style="color: red;">*</span></label>
			<input type="text" id="password" name="password">
			<br><br>
		</fieldset>

			<br><br>

			<input type="submit" value="Submit">

	</form>

</body>
</html>