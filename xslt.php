<?php
//error_reporting(ALL);
//Load the XML source
$xml = new DOMDocument;
$xml->load('collecttion.xml');

$xsl = new DOMDocument;
$xsl->load($_GET['xsl']);

//Configure the transformer
$proc = new XSLTProcessor;
$proc->registerPHPFunctions();
$proc->importStyleSheet($xsl); //attach the xsl rules

echo $poroc->transformToXML($xml);


?>