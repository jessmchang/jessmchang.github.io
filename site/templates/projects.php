<?php snippet('header') ?>

  <main class="main" role="main">

  	<div class="row">
	    <!-- <div class="text medium-3 small-12 columns">
	      <h1><?php echo $page->title()->html() ?></h1>
	     </div>
	     <div class="medium-9 small-12 columns">
	      <?php echo $page->text()->kirbytext() ?>
	    </div> -->
	</div>

    <?php snippet('projects', array('limit' => $page->children()->count())) ?>

  </main>

<?php snippet('footer') ?>
