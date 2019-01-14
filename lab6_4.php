<?php
$a=3;
$b=4;
$d;
echo "before the value of a is".$a."and b is".$b.'<br>';
$d=$a;
$a=$b;
$b=$d;
echo 'after the value of a is'.$a.'and b is'.$b;
?>