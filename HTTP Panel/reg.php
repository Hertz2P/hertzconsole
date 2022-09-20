<?php
$allowedDomains = array("www.hertz2p.github.io", "hertz2p.github.io");

if (in_array($_SERVER['HTTP_HOST'], $allowedDomains)) {
	$validDomain = "true";
} else {
	$validDomain = "false";
}
?>
