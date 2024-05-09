<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('bogdancondorachi/highlight', [
  'hooks' => require __DIR__ . '/extensions/hooks.php',

  'options' => [
    'theme' => 'kirby-dark'
  ],

  'snippets' => [
    'blocks/code' => __DIR__ . '/snippets/blocks/code.php'
  ]
]);
