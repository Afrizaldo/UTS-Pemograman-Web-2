<html>
<head>
	<title>Uts Pemograman web 2</title>
	<style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 120px;
			cursor: pointer;
		}
		label {
			width: 120px;
			display: block;
			float: left;
		}
		li {
			width: 200px;
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		.checkbox, .radio {
			float:none;
			width: auto;
		}
		.row::after {
			content: "";
			display: block;
			clear:both;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
		.options {
			float:left;
		}
	</style>
</head>
<body>
	<h1>UTS Pemograman Web 2</h1>
	<h2>Create by: Afrizaldo</h2>

	<form action="" method="post">
		<div class="row">
			<label>Nama Operator</label>
			<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
		</div>
		<div class="row">
			<label>NIM</label>
			<input type="text" name="NIM" value="<?=isset($_POST['NIM']) ? $_POST['NIM'] : ''?>"/>
		</div>
		
		<div class="row">
			<label>Positif</label>
			<input type="text" name="Positif" value="<?=isset($_POST['Positif']) ? $_POST['Positif'] : ''?>"/>
		</div>

		<div class="row">
			<label>Dirawat</label>
			<input type="text" name="Dirawat" value="<?=isset($_POST['Dirawat']) ? $_POST['Dirawat'] : ''?>"/>
		</div>

		<div class="row">
			<label>Sembuh</label>
			<input type="text" name="Sembuh" value="<?=isset($_POST['Sembuh']) ? $_POST['Sembuh'] : ''?>"/>
		</div>

		<div class="row">
			<label>Meninggal</label>
			<input type="text" name="Meninggal" value="<?=isset($_POST['Meninggal']) ? $_POST['Meninggal'] : ''?>"/>
		</div>
		
		<div class="row">
			<input type="submit" name="submit" value="Simpan"/>
		</div>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		echo '<h1>Data Pemantaun Covid19 Wilayah DKI Jakarta</h1>';
		echo "per " . date("l, d-m-Y  h:i") . "<br>";
		echo '<ul>';
		echo '<li>Nama Operator: ' . $_POST['nama'] . '</li>';
		echo '<li>NIM: ' . $_POST['NIM'] . '</li>';
		echo '<li>Positif: ' . $_POST['Positif'] . '</li>';
		echo '<li>Dirawat: ' . $_POST['Dirawat'] . '</li>';
		echo '<li>Sembuh: ' . $_POST['Sembuh'] . '</li>';
		echo '<li>Meninggal: ' . $_POST['Meninggal'] . '</li>';
		
	}?>
</body>
</html>