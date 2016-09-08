<!-- <h2>Latest projects</h2> -->

<ul class="teaser cf row">
  <?php foreach(page('projects')->children()->visible()->limit($limit) as $project): ?>
  <div class="project small-12 medium-6 large-4 columns end">

    <!-- <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p> -->
    <?php if($image = $project->images()->sortBy('filename', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>

    <h1><?php echo $project->title()->html() ?></h1>
    <?php echo $project->year() ?>
    <?php endif ?>
  </div>
  <?php endforeach ?>



</ul>

