<?php

require __DIR__.'/src/HtmlDomParser.php';

use camilord\PhpSimpleHtmlDomParser\HtmlDomParser;

$html = '<div><section><span class="title">Hello World!</span></section></div>';

$htmlDomParser = HtmlDomParser::str_get_html($html);

print_r(
    $htmlDomParser->find('span.title', 0)->plaintext
);

/**
 * output: Hello World!
 */