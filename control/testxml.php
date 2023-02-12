<?php
$title="def";
$year=2024;
$simplexml = new SimpleXMLElement('<?xml version="1.0"?><books/>');
$book1=$simplexml->addchild('book');
$book1->addchild('title',$title);
$book1->addchild('year',$year);

file_put_contents("../data/data.xml",$simplexml->asXML());


$xmldata=simplexml_load_file("../data/data.xml");

echo  "<br> the print title ".$xmldata[0]->book[0]->title;
?>