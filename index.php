<?php

Kirby::plugin('preya/kirby-team-box-block', [
  'blueprints' => [
    'blocks/team-box' => __DIR__ . '/blueprints/blocks/team-box.yml'
  ],
  'snippets' => [
    'blocks/team-box' => __DIR__ . '/snippets/blocks/team-box.php'
  ]
]);