<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="row">
      <div class="small-12 medium-4 columns">
        <h1><?php echo $page->title()->html() ?></h1>
        <ul class="meta cf">
          <li><?php echo $page->year() ?></li>
          <!-- <li><b>Tags:</b> <?php echo $page->tags() ?></li> -->
          <li><?php echo $page->role() ?></li>
          <li><?php echo $page->description() ?></li>
        </ul>
      </div>
      <div class="medium-8 columns end">
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
    <div class="row">
      <nav class="nextprev cf" role="navigation">
        <div class="small-4 columns nav-prev">
          <?php if($prev = $page->prevVisible()): ?>
          <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
          <?php endif ?>
        </div>
        <div class="small-8 columns nav-next">
          <?php if($next = $page->nextVisible()): ?>
          <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
          <?php endif ?>
        </div>
      </nav>
    </div>

  </main>

<?php snippet('footer') ?>
