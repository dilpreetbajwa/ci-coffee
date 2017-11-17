
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
		
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?=base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
						
		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">HEADER</li>
			<!-- Optionally, you can add icons to the links -->
			<li class="<?= ($active=='dashboard')?'active':'';?>"><a href="<?=base_url();?>admin/dashboard"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
			<li class="<?= ($active=='services')?'active':'';?>"><a href="<?=base_url();?>admin/services"><i class="fa fa-link"></i> <span>Services</span></a></li>
		    <li class="<?= ($active=='offers')?'active':'';?>"><a href="<?=base_url();?>admin/offers"><i class="fa fa-link"></i> <span>Offers</span></a></li>
		    <li class="<?= ($active=='reviews')?'active':'';?>"><a href="<?=base_url();?>admin/reviews"><i class="fa fa-link"></i> <span>Reviews</span></a></li>
		    <li class="<?= ($active=='gallery')?'active':'';?>"><a href="<?=base_url();?>admin/gallery"><i class="fa fa-link"></i> <span>Gallery</span></a></li>
		    <li class="<?= ($active=='blogs')?'active':'';?>"><a href="<?=base_url();?>admin/blogs"><i class="fa fa-link"></i> <span>Blogs</span></a></li>
			 <li class="<?= ($active=='about')?'active':'';?>"><a href="<?=base_url();?>admin/about"><i class="fa fa-link"></i> <span>About</span></a></li>	
			
		</ul>
		<!-- /.sidebar-menu -->
	</section>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
    <section class="content-header">
		<h1><?=$title;?></h1>
	</section>
	
	
	<?php if($this->session->flashdata('message')) { ?>
		<div class="container" style="margin-top: 15px;width:100%">	
			<div class="alert alert-<?=$this->session->flashdata('type');?>">
				<strong><?=ucfirst($this->session->flashdata('type'));?>!</strong> <?=$this->session->flashdata('message');?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(validation_errors()) { ?>
		<div class="container" style="margin-top: 15px;width:100%">	
			<div class="alert alert-danger">
				<strong>Error!</strong> <?php echo validation_errors();?>
			</div>
		</div>
	<?php } ?>	