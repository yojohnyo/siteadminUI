<?php

$siteInfo=array();
foreach ($_POST as $key=>$value) {
	$siteInfo[$key]=$value;
}
var_dump($siteInfo);
?>