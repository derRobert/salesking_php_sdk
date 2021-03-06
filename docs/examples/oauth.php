<?php
/**
 * This file brings an example for the Salesking PHP SDK
 * @version     1.0.0
 * @package     SalesKing PHP SDK Examples
 * @license     MIT License; see LICENSE
 * @copyright   Copyright (C) 2012 David Jardin
 * @link        http://www.salesking.eu
 */

// load library file
require_once("../../src/salesking.php");
require_once("app_config.php");

// create salesking object with app configuration
$sdk = new Salesking(sk_app_config());

if(isset($_GET['code'])){
    echo ($sdk->accessTokenUrl($_GET['code']));
    print_r( $sdk->requestAccessToken($_GET['code']) );
}
else
{
    echo ("<h2>Go to Authorize APP </h2>\n");
    echo "<a href='".$sdk->requestAuthorizationURL()."'>Grant access</a>";
}