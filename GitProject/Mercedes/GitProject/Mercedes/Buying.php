<?php
$maintemplate = file_get_contents("Template/Main.html");

$maintemplate = str_replace("{name_page}",  "| Buying", $maintemplate);

$maintemplate = str_replace("{java_script}",  file_get_contents("Template/Checknumber.js"), $maintemplate);

$maintemplate = str_replace("{header}",  file_get_contents("Template/Header.html"), $maintemplate);

$maintemplate = str_replace("{content}",  file_get_contents("Template/BuyingForm.html"), $maintemplate);

$maintemplate = str_replace("{map}",  "", $maintemplate);

echo $maintemplate;

?>