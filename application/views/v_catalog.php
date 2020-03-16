<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">

	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<?php $this->load->view("admin/_partials/navbarindex.php") ?>
</div>
</div>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
			  <?php foreach($products as $products): ?>
				<li class="span3">
				  <div class="thumbnail">
				  <p style="min-height:160px;">
					
						<?php 
							$image = ['src'=>'upload/' . $products->image,
								'width'=>'160',
								'height'=>'160'];
							echo img($image);
						?>
					</a>
					</p>
					<div class="caption">
					  <h5><?php echo $products->name;?> <?php echo $products->price;?></h5>
					 
					 <!-- harga -->
					  <h4 style="text-align:center"><a class="btn" href="<?php echo site_url('welcome/detailproduk/'.$products->product_id);?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo site_url('welcome/add_to_cart/'.$produk->id);?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp. <?php echo number_format($products->price,0,',','.');?></a></h4>
					</div>
				  </div>
				</li>
				<?php endforeach;?>
			  </ul>	
		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/facebook.png');?>" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/twitter.png');?>" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url('assets/bootshop/themes/images/youtube.png');?>" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url('assets/bootshop/themes/js/jquery.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/google-code-prettify/prettify.js');?>"></script>
	
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootshop.js');?>"></script>
    <script src="<?php echo base_url('assets/bootshop/themes/js/jquery.lightbox-0.5.js');?>"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
</body>
</html>