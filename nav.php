<nav class="colorlib-nav" role="navigation">
	<div class="top-menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2">
					<div id="colorlib-logo"><a href="index.php">Atlas Travel</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="<?php echo basename($_SERVER['PHP_SELF'])=="index.php" ? "active" : "" ?>"><a href="index.php">Home</a></li>
						<li class="<?php echo basename($_SERVER['PHP_SELF'])=="blog.php" ? "active" : "" ?>"><a href="blog.php">Blog</a></li>
						<li class="<?php echo basename($_SERVER['PHP_SELF'])=="about.php" ? "active" : "" ?>"><a href="about.php">About</a></li>
						<li class="<?php echo basename($_SERVER['PHP_SELF'])=="contact.php" ? "active" : "" ?>"><a href="contact.php">Contact</a></li>
		
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>