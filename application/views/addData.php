<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>First App</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script> -->
</head>
<body>
	<?php require('navbar_sim.php') ?>
	<div class="container">
		<h2 class="text-xs-center">Thêm số điện thoại vào form sau</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="addData/insertData_controller" method="post" enctype="multidata/form-data">
				  <div class="form-group">
				    <label for="sdt">Số điện thoại</label>
				    <input name="sdt" type="text"  class="form-control" id="sdt" placeholder="Nhập Số điện thoại">
				  </div>
				  <div class="form-group">
				    <label for="giasim">Giá sim</label>
				    <input name="giasim" type="text" class="form-control" id="giasim" placeholder="Giá sim">
				  </div>
				  <br>
				  <button type="submit" class="btn btn-primary">Thêm</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>