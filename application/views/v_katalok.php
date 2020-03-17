<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sistem Informasi Perikanan</title>
		<?php $this->load->view("admin/_partials/head.php") ?>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body id="page-top">
    <?php $this->load->view("admin/_partials/navbarindex.php") ?>
		
		<!-- Tampilkan semua produk -->
		<div class="row">
		<!-- looping products -->
		  <?php foreach($products as $product) : ?>
			
		  <div class="col-sm-3 col-md-3">
		  
			<div class="thumbnail">
			  <?=img([
				'src'		=> 'upload/product/' . $product->image,
				'style'		=> 'max-width: 100%; max-height:100%; height:100px'
			  ])?>
			  <div class="caption">
				<h3 style="min-height:60px;"><?=$product->name?></h3>
				<p><?=$product->description?></p>
				<p>Rp. <?=$product->price?></p>
				<p>
			
				</p>
			  </div>
			</div>
		  </div>
		  <?php endforeach; ?>
		<!-- end looping -->
		</div>
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
    <script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
	</body>
</html>