<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content=" "/>
    <meta name="keywords" content=" "/>
    <?php include ('include/head.html'); ?>
</head> 
<body class="sticky-header" onload="display_c();">
	<div class="body-innerwrapper">
		<header>
			<?php include ('include/header.html') ?>
		</header>
		<section id="page-title">
			<div class="row">
				<div class="col-sm-12">
				<div class="page-title-wrapper">
					<div class="container">
					<h2 class="pull-left title"> <span class="cat-icon">T </span> Tollywood</h2>
					<ol class="breadcrumb pull-right">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Categories</a></li>
						<li class="active">Tollywood</li>
					</ol> 
					</div> 
				</div> 
				</div>
			</div>
		</section>
		<section class="main-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<?php include('include/tollywood-content.html') ?>
					</div>
					<div class="col-sm-3">
						<?php include('include/asside.html') ?>
					</div> 
				</div> 
			</div> 
		</section>
		<footer>
            <?php include('include/footer.html') ?>
        </footer>
        <?php include('include/mobile-menu.html') ?>
	</div> 
	<?php include('include/scripts.html') ?>
</body>
</html>