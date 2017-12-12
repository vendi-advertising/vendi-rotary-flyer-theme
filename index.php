<?php
get_header();
?>

    <div id="main-content" role="main">
    	<div class="main-content-region">
			<?php //******* LOOP
			  if ( have_posts() )
			  {
				  while ( have_posts() )
				  {
					  the_post(); ?>

					  <div class="content-block main-content-block">

					  <?php the_title( '<h1>', '</h1>' );

					  the_content(); ?>

					  </div>
			<?php
                  }
			  }
			?>
        </div>
	</div><!-- #main-content -->

<?php
get_footer();
