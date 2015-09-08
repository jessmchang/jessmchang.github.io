<?php snippet('header') ?>

  <main class="main" role="main">
  	<div class="row">
	    <div class="text small-12 large-4 columns">
	      <h1><?php echo $page->title()->html() ?></h1>
      	</div>
      	<div class="small-12 large-8 columns">
	      <?php echo $page->text()->kirbytext() ?>
	    </div>
	</div>

  </main>

<?php snippet('footer') ?>
