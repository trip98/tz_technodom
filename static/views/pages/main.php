<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" href="/static/css/style.css">
</head>
<body>
	<div class="header">
		<div class="buttons">
			<select id='type'>
				<option value="add">Add product</option>				
				<option value="destroy">Mass Delete Action</option>
			</select>
			<button id='action'>Apply</button>
		</div>		
		<h1>Product List</h1>
		<hr>
	</div>
	<div class='products'>
		<?php foreach ($data as $key => $value): ?>
			<div class="product">
				<div><input autocomplete="off" id='<?= $value['id']?>' type="checkbox"></div>
				<p><?= $value['SPU']?></p>
				<p><?= $value['name']?></p>
				<p><?= $value['price']?></p>
				<p>
					<?= $value['type'] == 1 ? 'Size' : ($value['type'] == 2 ? 'Weight' : ($value['type'] == 3 ? 'Dimensions' : ''))?>:
					<?= $value['characters']?>
					<?= $value['type'] == 1 ? 'MB' : ($value['type'] == 2 ? 'KG' : '')?>:
				</p>
			</div>
		<?php endforeach; ?>
	</div>
<script src='/static/js/main.js' type='module'></script>
</body>
</html>