<?php

use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Themes\InlineTheme;

return [
  // Inline Code Renderer
  'kirbytext:before' => function (string $text) {
    $text = preg_replace_callback('/`{(?<match>[\w]+)}(?<code>.*)`/', function($match) {
      $language = $match['match'];
      $code = $match['code'];

      $theme = option('bogdancondorachi.highlight.defaultTheme', 'kirby-dark');
      $themePath = kirby()->root('plugins') . '/highlight/themes/' . $theme . '.css';

      $highlighter = new Highlighter(new InlineTheme($themePath));

      $parsed = $highlighter->parse($code, $language);
  
      return '<code data-lang="' . $language . '">' . $parsed  . '</code>';
    }, $text);

    return $text;
  },

  // Fenced Code Renderer
  'kirbytext:after' => function (string $text) {  
    $dom = new DOMDocument();
    $dom->loadHTML($text);

    $preNodes = $dom->getElementsByTagName('pre');

    foreach ($preNodes as $preNode) {
      $codeNode = $preNode->firstChild;

      $language = $codeNode->getAttribute('class');
      $language = str_starts_with($language, 'language-') ? substr($language, 9) : 'text';

      $code = $codeNode->nodeValue;

      $block = new \Kirby\Cms\Block([
        'type' => 'code',
        'content' => [
          'language' => $language,
          'code' => $code,
        ]
      ]);

      $codeBlock = snippet('blocks/code', ['block' => $block], true);

      $newNode = $dom->createDocumentFragment();
      $newNode->appendXML($codeBlock);

      $preNode->parentNode->replaceChild($newNode, $preNode);
    }

    return $dom->saveHTML();
  }
];
