<?php
	include_once("../vendor/autoload.php");
	$basUrl = 'http://www.baidu.com/s?wd=';
	$communityName = '毕加索小镇';
	$queryUrl = $basUrl . $communityName;

	use PHPHtmlParser\Dom;
	$dom = new Dom;
	$dom->load($queryUrl);
	$html = $dom->outerHtml;
	
	echo $html;
?>