<?php

use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Themes\InlineTheme;

$code = $block->code();
$language = $block->language()->or('text');

$theme = option('bogdancondorachi.highlight.theme');
$themePath = kirby()->root('plugins') . '/highlight/themes/' . $theme . '.css';

$highlighter = new Highlighter(new InlineTheme($themePath));

$parsed = $highlighter->parse($code, $language);

$theme = $highlighter->getTheme();

?>

<?= $theme->preBefore($highlighter) . $parsed . $theme->preAfter($highlighter) ?>
