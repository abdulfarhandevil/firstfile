<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="formstyle.css">
	<script type="text/javascript" src="formscript.js"></script>
</head>
<body>
<div id="form-div">
	<h1 style="text-align: center; color: violet;">Ajax Example</h1>
	<h2>Application form</h2>
	<form action="#" method="get">
		<div>
			<label for="username">Name</label>
			<input type="text" name="username">
		</div>
		<div>
			<label for="">select state</label>
			<select onchange="fetchCities(this.value);">
				<option>select state</option>
				<option>bihar</option>
				<option>mp</option>
				<option>up</option>
			</select>
		</div>	
		<div id="a">
			<label for="">select city</label>
			<select id="cities">
				<option>first select state</option>

			</select>
		</div>
			<div>
				<input type="submit" value="submit" />
			</div>
		</div>
	</form>
</div>
</body>
</html>