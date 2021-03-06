<?php
/**
 * Demonstration of:
 * - helper "make*Cage()" methods to create input cage from superglobal
 * - cleanup of HTTP_*_VARS
 * - cage filter methods
 * - "Array Query" method of accessing deep keys in multidim arrays
 */

require_once dirname(__FILE__) . "/../vendor/autoload.php";

use Inspekt\Inspekt;

$serverCage = Inspekt::makeServerCage();

echo "<pre>";
var_dump($serverCage);
echo "</pre>\n";

echo 'Digits:' . $serverCage->getDigits('SERVER_SOFTWARE') . '<br />';
echo 'Alpha:' . $serverCage->getAlpha('SERVER_SOFTWARE') . '<br />';
echo 'Alnum:' . $serverCage->getAlnum('SERVER_SOFTWARE') . '<br />';
echo 'Raw:' . $serverCage->getRaw('SERVER_SOFTWARE') . '<br />';

echo '<pre>$_SERVER:';
var_dump($_SERVER);
echo "</pre>\n";
echo '<pre>HTTP_SERVER_VARS:';
var_dump($HTTP_SERVER_VARS);
echo "</pre>\n";

var_dump($serverCage->getAlnum('/argv/0'));
