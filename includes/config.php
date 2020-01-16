<?php
///////////////////////////////////////////////
/// The main site configuration options
//////////////////////////////////////////////
$title = "Able"; // enter site title

$slogan = "free Url shortner"; // enter site slogan

$description = "Hello! I'm Abel, I help Shorten long URL's."; // enter description

$keywords = "Abel, Emmanuel Adeboje, Nigeria, short url, free url redirection, url forwarding, url redirect, url forward, url redirection, forward url, redirect url, free url, free url forwarding, free sub domain, subdomain, subdomains, URL redrection, sub domains, redirection"; // enter keywords

$webpath = ""; // enter website path ex: http://domain.com with NO trailing slash

$footer = "&copy 2019 Emmanuel Adeboje. All rights reserved."; // enter footer text

$link_length = "5"; // enter the length of the trimmed link you want to make (MUST NOT EXCEED ABOVE 10. CHOOSE FROM 1-10)

$adminstatslimit = "300"; // enter the number of statistics you want to see in admin panel dashboard. CHOOSE FROM 1-INFINITE

$version = "v0.1"; // scripts version. not to be touched

///////////////////////////////////////////////
/// Error reporting and debug
///////////////////////////////////////////////
ini_set('display_errors', 0); // enter 1 to show errors and 0 to hide 
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . 'errors/error_log.txt');
error_reporting(E_ALL);
?>

