<?php

$code = $block->code();
$language = $block->language()->or('text');

$highlighter = new \Tempest\Highlight\Highlighter();
$highlightedCode = $highlighter->parse($code, $language);

?>

<pre><code data-lang="<?= $language ?>"><?= $highlightedCode ?></code></pre>
