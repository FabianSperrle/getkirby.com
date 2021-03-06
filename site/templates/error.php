<?php snippet('header') ?>

<article class="main">

  <h1 class="alpha"><?php echo kirbytext($page->title(), false) ?></h1>
  <section class="error-intro section text">
    <?php echo kirbytext($page->text()) ?>
  </section>

  <section class="support-items">

    <h2 class="alpha">Need support?</h2>

    <ul class="list-4">
      <?php foreach(page('support')->children()->visible() as $item): ?><!--
   --><li>
        <img src="<?php echo $item->image()->url() ?>" alt="<?php echo $item->title() ?>">
        <div class="text">
          <h2 class="beta"><?php echo $item->title() ?></h2>
          <?php echo kirbytext($item->text()) ?>
        </div>
        <?php echo kirbytext($item->link()) ?>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

  <section>
    <h2 class="alpha margin-bottom">Searching for docs?</h2>
    <ul class="docs-index-list list-4">
      <?php foreach(page('docs')->children()->visible() as $item): ?><!--
   --><li>
        <div class="text">
          <h2 class="delta docs-icon"><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h2>
          <?php echo kirbytext($item->description()) ?>
        </div>
        <a class="btn" href="<?php echo $item->url() ?>">Learn more</a>
      </li><!--
   --><?php endforeach ?>
    </ul>
  </section>

</article>

<?php snippet('footer') ?>
