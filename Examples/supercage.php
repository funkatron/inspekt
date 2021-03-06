<?php
require_once dirname(__FILE__) . "/../vendor/autoload.php";

use Inspekt\Inspekt;

$superCage = Inspekt::makeSuperCage();

echo "<pre>";
var_dump($superCage);
echo "</pre>\n";

echo 'Digits:' . $superCage->server->getDigits('SERVER_SOFTWARE') . '<p/>';
echo 'Alpha:' . $superCage->server->getAlpha('SERVER_SOFTWARE') . '<p/>';
echo 'Alnum:' . $superCage->server->getAlnum('SERVER_SOFTWARE') . '<p/>';
echo 'Raw:' . $superCage->server->getRaw('SERVER_SOFTWARE') . '<p/>';

