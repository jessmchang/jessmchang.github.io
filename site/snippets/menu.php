<!-- <nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>
 -->



<nav role="navigation">
  <div class="row">

      <div class="small-2 medium-4 columns">
        <a href="<?php echo $site->homePage()->url() ?>">JC</a>
      </div>
      <div class="small-10 medium-8 columns">
        <ul id="header-nav">
          <?php foreach($pages->visible() as $p): ?>
          <li>

              <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

          </li>
          <?php endforeach ?>
        </ul>
        </div>

  </div>
</nav>
