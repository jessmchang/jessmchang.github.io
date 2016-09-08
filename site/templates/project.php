<?php snippet('header') ?>

  <main class="main animated fadeIn" role="main">
    <div class="row">
      <div class="small-12 columns">
        <a href="/">Back to Home</a>
        <br/><br/>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-6 columns">
        <div class="project-title"><?php echo $page->title()->html() ?></div>
        <ul class="meta cf">
          <li><?php echo $page->year() ?></li>
          <!-- <li><b>Tags:</b> <?php echo $page->tags() ?></li> -->
          <li><?php echo $page->role() ?></li>
          <li><?php echo $page->description() ?></li>
        </ul>
      </div>
      <div class="project-body">
        <?php echo $page->text()->kirbytext() ?>

        <!--  <div>
          <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <figure>
            <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
          </figure>
          <?php endforeach ?>
        </div> -->
      </div>
    </div>

    <!--
    <div class="row navigation">
      <nav class="nextprev cf" role="navigation">
        <div class="small-6 columns nav-prev">
          <?php if($prev = $page->prevVisible()): ?>
          <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
          <?php endif ?>
        </div>
        <div class="small-6 columns nav-next">
          <?php if($next = $page->nextVisible()): ?>
          <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
          <?php endif ?>
        </div>
      </nav>
    </div> -->

  </main>

<?php snippet('footer') ?>
