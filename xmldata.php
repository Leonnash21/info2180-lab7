<?php

header("Content-type: text/xml");
print("");
$string = <<<XML
<person>
  <age>10</age>
  </person>
XML;
$xml = new SimpleXMLElement($string);
echo $xml->asXML();
?>