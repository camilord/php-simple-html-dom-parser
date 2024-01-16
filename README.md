# php-simple-html-dom-parser
Wrapper Version: 1.x

Wrapper for `PHP Simple HTML DOM Parser` to work on `composer`

## PHP Simple HTML DOM Parser
Version 1.9.1

A simple PHP HTML DOM parser written in PHP5+, supports invalid HTML, and provides a very easy way to find, extract and modify the HTML elements of the dom. jquery like syntax allow sophisticated finding methods for locating the elements you care about.

http://simplehtmldom.sourceforge.net/


Installation
------------

cast a command:
```bash
php composer.phar require camilord/php-simple-html-dom-parser
```
or 
```bash
composer require camilord/php-simple-html-dom-parser
```

or add to `composer.json`
```json
"require": {
    "camilord/php-simple-html-dom-parser": "^1.0"
}
```
 
 
Usage
-----

```php
use camilord\PhpSimpleHtmlDomParser\HtmlDomParser;

...
$dom = HtmlDomParser::str_get_html($str);
or 
$dom = HtmlDomParser::file_get_html($file_name);

$elems = $dom->find('small.count');
...

```
