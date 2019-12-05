<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add product</title>
	<link rel="stylesheet" href="/static/css/style.css">
</head>
<body>
	<div class="header">
		<div class="buttons">
			<button id='save'>Save</button>
		</div>
		<h1>Product Add</h1>
		<hr>
	</div>
	<div id="form">
		<p>SPU: <input type="text" class='SPU'></p>
		<p>Name: <input type="text" class='name'></p>
		<p>Price: <input type="text" class='price'></p>
		<p>
			Type switcher:
			<select class='type' autocomplete='off'>
				<option disabled selected value='null'>Type switcher</option>
				<option value="1">DVD-disc</option>
				<option value="2">Book</option>
				<option value="3">Furniture</option>
			</select>
		</p>
		<div id="dynamic"></div>
	</div>
	<script src="/static/js/add.js" type="module"></script>
</body>
</html>