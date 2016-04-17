<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("phonebook.xml");

$x=$xmlDoc->getElementsByTagName('record');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('Name');
    $z=$x->item($i)->getElementsByTagName('Mobile');
    $a=$x->item($i)->getElementsByTagName('Address');
    $b=$x->item($i)->getElementsByTagName('Phone1');
    $c=$x->item($i)->getElementsByTagName('Phone2');
    $d=$x->item($i)->getElementsByTagName('Phone3');
    $e=$x->item($i)->getElementsByTagName('Phone4');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" . $z->item(0)->childNodes->item(0)->nodeValue . "' target='_blank'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>