<?php snippet('header') ?>

  <main class="grid-nospace main" role="main">
  	<section id="splash">
  		<div id="splash-content">
  			<div class="row">
  				<div class="small-12 columns">
  				 	<?php echo $page->description() ?>
  				</div>
  			</div>
  		</div>
  	</section>
  	<!-- <div class="row">
  		<div class="small-12 medium-3 columns">
  			<h1><?php echo $page->title()->html() ?></h1>
  		</div>
	    <div class="text small-12 medium-7 columns end">
	      <?php echo $page->text()->kirbytext() ?>
	    </div>
	</div> -->


    <?php snippet('projects', array('limit' => '3')) ?>

  </main>

<?php snippet('footer') ?>
