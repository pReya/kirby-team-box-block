<div class="k-block-type-team-box <?= $block->class() ?>">
  <div class="name"><?= $block->name() ?></div>
  <div class="position"><?= $block->position() ?></div>
  <?php $parts = explode('@', $block->email()) ?>
  <div class="email">
    <span class="first" data-local="<?= $parts[0] ?>"></span>
    <span class="spamprotection">someguy@gmail.com</span>
    <span class="last" data-domain="<?= $parts[1] ?>"></span>
  </div>
</div>