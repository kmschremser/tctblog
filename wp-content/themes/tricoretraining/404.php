<?php get_header(); ?>

<article>
<div class="container">

	<div class="row">

		<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
		
      <div class="panel panel-default" id="forms">
        <div class="panel-heading"><?php _e('Blog of TriCoreTraining'); ?></div>
        
        <div class="panel-body">

        <noscript>
        <div class="alert alert-danger">
        <?php _e('Sorry, you have to have JavaScript activated in your browser for this service.'); ?><br />
        </div>
        </noscript>

        <h3><?php _e('Please use our search.'); ?></h3>

        </div>
      </div>

		</div>
		<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">

<div class="panel">
	<div class="panel-body">

  <?php get_sidebar(); ?>

	</div>
</div>

		</div>
	
	</div>

</div>
</article>

<?php get_footer(); ?>
