	
<?php $args = array(
		'menu' => "Main Menu", 
		'container' => "nav",
		'container_id' => "footer_menu"
	);
	
	wp_nav_menu( $args); ?>

  <?php
	  $args = array(
		  'menu'			 => "Legal Footer Menu",
		  'container'		 => "nav",
		  'container_id'	 => "legal_footer_menu"
	  );

	  wp_nav_menu( $args );
	  ?>

  <div clas="clearfix"></div>
</div> <!-- close wrapper -->
	<?php wp_footer(); ?>
  </body>
</html>

