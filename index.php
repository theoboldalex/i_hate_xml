<?php

$xml = simplexml_load_file(__DIR__ . '/schema.xml');

$namespaces = $xml->getNamespaces(true);
$dpi = $namespaces['dpi'];

// we could just loop over all $xml->children($dpi) -- see previous commit
foreach ($xml->children($dpi)->DPIBody->ReportableSeller as $seller) {
    $seller->addChild('Name', 'Filip');
    $seller->addChild('Order', 'Lamb Shwarma with extra garlic sauce');
    $seller->Name->addAttribute('debug', 'true');
}
var_dump($xml->asXML()); die();
