<?php
//BaseURL
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https";
} else {
    $url = "http";
}

$url .= "://{$_SERVER['HTTP_HOST']}";

define("BASEURL", "{$url}/");
define("BASEURL_CMS", "{$url}/admin/");
define("CMS_VERSION", "v0.0.1");
?>