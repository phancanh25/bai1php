<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Show data page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<!-- <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script> -->
</head>
<body>

	<?php require('navbar_sim.php') ?>

	<div class="container">
		<h3 class="text-center">Các sim hiện có</h3>
		<hr>
	</div>


	<div class="container">
		<a class="btn btn-primary" href="addData" role="button">Thêm số điện thoại mới</a>
		<div class="row">
			<?php foreach ($dulieucontroller as $key => $value): ?>
				<div class="col-sm-4">
					<div class="card card-block">
						<h3 class="card-tittle">Số sim: <?= $value['sdt']?></h3>
						<p class="cart-text">Giá tiền: <?= $value['gia']?></p>
						<a href="showData/deleteData/<?= $value['id'] ?>" class="btn btn-danger">Xóa</a>
						<a href="showData/editData/<?= $value['id'] ?>" class="btn btn-warning">Sửa</a>						
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>																								
</body>
</html>