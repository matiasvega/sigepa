<?php

$filepath = CSS . $regs[1]; //There are some variables that are can be used in this script, take a look to de docs.

$output = file_get_contents($filepath);
header("Date: " . date("D, j M Y G:i:s ", $templateModified) . 'GMT');
header("Content-Type: text/css");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + DAY) . " GMT"); //WEEK or MONTH are valid as well
header("Cache-Control: max-age=86400, must-revalidate"); // HTTP/1.1
header("Pragma: cache");        // HTTP/1.0
print $output;

?>
