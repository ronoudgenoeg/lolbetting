<html>
	<?php include Kohana::find_file ( 'views', 'core/header' ); ?>
<body>
	<?php include Kohana::find_file ( 'views', 'core/topmenu' ); ?>

	<?php include Kohana::find_file ( 'views', 'core/carousel' ); ?>

	<div class="container">
		<?php
		if (isset ( $body )) {
			include Kohana::find_file ( 'views', $body );
		} else {
			include Kohana::find_file ( 'views', 'core/404' );
		}
		?>
	<div style="clear: both;"></div>
	<footer>
	<?php include Kohana::find_file ( 'views', 'core/footer' ); ?>
	</footer>
	</div>
	
	<!-- Scripts at the end of speed. -->
	<script src="<?php echo url::base();?>jquery-2.1.3.min.js"></script>
	<script src="<?php echo url::base();?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo url::base();?>resources/js/styling.js" rel="stylesheet"></script>
</body>
</html>