<!--?php
$xml = simplexml_load_string(file_get_contents("http://localhost/cake/app0001/top"));


if ($xml === false) {
    echo 'ドキュメントのパース中にエラー';
    exit;
}
$dom_sxe = dom_import_simplexml($xml);
if (!$dom_sxe) {
    echo 'XML の変換中にエラー';
    exit;
}

$dom = new DOMDocument('1.0');
$dom_sxe = $dom->importNode($dom_sxe, true);
$dom_sxe = $dom->appendChild($dom_sxe);
echo $dom->saveXML();
?-->

<?php

$orgdoc = new DOMDocument;
$orgdoc->loadXML(file_get_contents("http://localhost/cake/app0001/top"));

// The node we want to import to a new document
$node = $orgdoc->getElementsByTagName("Module")->item(0);


// Create a new document
$newdoc = new DOMDocument;
$newdoc->formatOutput = true;

// Add some markup
$newdoc->loadXML("<div></div>");

echo $newdoc->saveXML();

// Import the node, and all its children, to the document
$node = $newdoc->importNode($node, true);
// And then append it to the "<root>" node
$newdoc->documentElement->appendChild($node);

echo $newdoc->saveXML();
?>