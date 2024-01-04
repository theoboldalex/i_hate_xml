<?php

$xml = simplexml_load_file(__DIR__ . '/schema.xml');

$namespaces = $xml->getNamespaces(true);
$dpi = $namespaces['dpi'];

foreach ($xml->children($dpi) as $childNode) {
    foreach ($childNode as $bodyNode) {
        if ($bodyNode->getName() === 'ReportableSeller') { 
            $bodyNode->addChild('Name', 'Filip');
            $bodyNode->Name->addAttribute('debug', 'true');
        }
    }
}

var_dump($xml->asXML()); die();
