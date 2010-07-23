<?php

$orgdoc = new DOMDocument;
$orgdoc->loadXML(file_get_contents("http://localhost/cake/app0001/top"));

// The node we want to import to a new document
$node = $orgdoc->getElementsByTagName("Content")->item(0);


// Create a new document
$newdoc = new DOMDocument;
$newdoc->formatOutput = true;

// Add some markup
$newdoc->loadXML("<div></div>");

//echo $newdoc->saveXML();

// Import the node, and all its children, to the document
$node = $newdoc->importNode($node, true);
// And then append it to the "<root>" node
$newdoc->documentElement->appendChild($node);

echo $newdoc->saveHTML();
?>