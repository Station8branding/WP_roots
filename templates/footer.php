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

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>
