<?php
//$valid = false;
$lang = 9;
$x = ($lang>30 ? 'greater than 30':($lang>20 ? 'graeter than 20':($lang>10 ? 'greater than 10':'no')));
echo $x; // outputs 'oui'
?>