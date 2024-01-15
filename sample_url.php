<?php

require __DIR__.'/src/HtmlDomParser.php';

use camilord\PhpSimpleHtmlDomParser\HtmlDomParser;

$url = 'https://simplehtmldom.sourceforge.io/docs/1.9/api/simple_html_dom/simple_html_dom/';

$htmlDomParser = HtmlDomParser::file_get_html($url);

print_r(
    $htmlDomParser->find('h1#simple_html_dom', 0)->plaintext
);

/**
 * output: simple_html_dom
 */