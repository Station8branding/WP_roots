<footer id="content-info" class="" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				 <?php dynamic_sidebar('sidebar-footer1'); ?>
				 <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
			</div>
			<div class="col-sm-4">
				 <?php dynamic_sidebar('sidebar-footer2'); ?>
			</div>
			<div class="col-sm-4">
				 <?php dynamic_sidebar('sidebar-footer3'); ?>
			</div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>
