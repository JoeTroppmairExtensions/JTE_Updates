<?php
/*------------------------------------------------------------------------
# von Joe Troppmair
# Website https://www.troppmair.com
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die;
include 'params.php';
?>

<head>
<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
<jdoc:include type="head" />
<?php
	if (isset($_COOKIE['cc-show'])) {
		#echo $_COOKIE['cc-show'];
		#print_r($_COOKIE['cc-show']);
		$name = "cc-show";
		$value = "consent";
		#$expire = NULL;
		#$path = NULL;
		#$domain = NULL;
		#$secure = "secure";
		#$httponly = "HttpOnly";
		#$samesite = "Strict";
		#setcookie($name, $value, $expire, $path, $domain, $secure, $httponly, $samesite);

setcookie($name, $value, [
    'expires' => time() + 86400*2,
    'path' => NULL,
    'domain' => NULL,
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict',
]);
	}
	#else {
	#	echo "noch nicht da";
	#   }
?>
</head>
