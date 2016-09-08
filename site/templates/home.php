<?php snippet('header') ?>

  <main class="grid-nospace main animated fadeIn" role="main">
    <div class="row">
      <div class="small-12 medium-4 columns"></div>
      <div class="small-12 medium-8 columns">
        <div id="splash-content" class="fadeIn">
          <?php echo $page->description() ?>
        </div>
      </div>
    </div>

  	<!-- <section id="splash">
  		<div id="splash-content">
  			<div class="row">
  				<div class="small-12 columns">
  				 	<?php echo $page->description() ?>
  				</div>
  			</div>
  		</div>
  	</section> -->


    <?php
    /* snippet('projects', array('limit' => '3'))
    */
     ?>


     <?php snippet('footer') ?>
  </main>

<?php /*snippet('footer') */?>
