

<?php snippet('header') ?>


  <main class="main" role="main">
  	<div class="row">
	    <div class="text small-12 large-4 columns">
	      <div class="default-title"><?php echo $page->title()->html() ?></div>
      	</div>
      	<div class="small-12 large-8 columns">
	      <?php echo $page->text()->kirbytext() ?>
	    </div>
	</div>

  </main>

<?php snippet('footer') ?>

