<?php
$maintemplate = file_get_contents("Template/Main.html");

$maintemplate = str_replace("{name_page}",  "| Admin panel", $maintemplate);

$maintemplate = str_replace("{java_script}",  "", $maintemplate);

$maintemplate = str_replace("{header}",  "Admin panel<br/><br/>", $maintemplate);

$maintemplate = str_replace("{content}",  file_get_contents("Template/AdminForm.html"), $maintemplate);

$maintemplate = str_replace("{map}",  "", $maintemplate);

echo $maintemplate;

?>