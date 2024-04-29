<?php

use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Themes\InlineTheme;

$code = $block->code();
$language = $block->language()?->or('text');

$theme = option('bogdancondorachi.highlight.defaultTheme', 'kirby-dark');
$themePath = kirby()->root('plugins') . '/highlight/themes/' . $theme . '.css';

$highlighter = new Highlighter(new InlineTheme($themePath));

$parsed = $highlighter->parse($code, $language);

$preBefore = $highlighter->getTheme()->preBefore($highlighter);
$preAfter = $highlighter->getTheme()->preAfter($highlighter);

?>

<?= $preBefore . '<code>' . $parsed . '</code>' . $preAfter ?>