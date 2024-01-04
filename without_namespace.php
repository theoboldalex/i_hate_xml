<?php

$xmlStr = "<?xml version='1.0' standalone='yes'?><Team></Team>";

$xml = new SimpleXMLElement($xmlStr);

$teamMembers = [
    'filip' => 'Senior II',
    'sam' => 'Dev I',
    'ste' => 'Dev I',
    'joel' => 'Dev I',
    'alex' => 'Jira Jockey'
];

foreach ($teamMembers as $teamMember => $jobRole) {
    $currentNode = $xml->addChild('TeamMember', $teamMember);
    $currentNode->addAttribute('job-title', $jobRole);
}

var_dump($xml->asXML()); die();
