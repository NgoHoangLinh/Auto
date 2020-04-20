<?php
$maintemplate = file_get_contents("Template/Main.html");

$maintemplate = str_replace("{name_page}",  "| About", $maintemplate);

$maintemplate = str_replace("{java_script}",  "", $maintemplate);

$maintemplate = str_replace("{header}",  file_get_contents("Template/Header.html"), $maintemplate);

$maintemplate = str_replace("{content}",  file_get_contents("Template/Info.html"), $maintemplate);

$maintemplate = str_replace("{map}",  file_get_contents("Template/Map.html"), $maintemplate);

echo $maintemplate;

?>