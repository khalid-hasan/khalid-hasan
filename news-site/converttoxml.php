<?php
//header('Content-type: text/xml');

require 'config.php';

$filename=time();

$sql = "select * from test order by id desc";
$res = mysqli_query($conn, $sql);

$doc = new DOMDocument('1.0', 'UTF-8');

$doc->formatOutput = true;

$root = $doc->createElement('all_news');
$root = $doc->appendChild($root);

while ($row = mysqli_fetch_assoc($res)) 
{
	$news= $doc->createElement('news');
	$news= $root->appendChild($news);

	$id= $doc->createElement('id', $row['id']);
	$id= $news->appendChild($id);

	$headline= $doc->createElement('headline', $row['heading']);
	$headline= $news->appendChild($headline);

	$body= $doc->createElement('body', $row['summertext']);
	$body= $news->appendChild($body);

	$creationTime= $doc->createElement('creationTime', $row['datetime']);
	$creationTime= $news->appendChild($creationTime);

}

//echo $doc->saveXML();
echo '<pre>' . htmlentities($doc->saveXML()) . '</pre>'; 
$doc->save("$filename.xml");


?>