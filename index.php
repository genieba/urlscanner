<?php
require "vendor/autoload.php";

$urls = [
"http://www.baidu.com",
"http://www.baidua.com"
];

$scanner =  new \QianXun\UrlScanner\Url\Scanner( $urls );
print_r( $scanner->getInvalidUrls() );
