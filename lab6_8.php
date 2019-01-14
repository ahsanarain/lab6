<?php

  $url = 'http://sw.muet.edu.pk/faculty/cvs/sample.pdf';
  $parts = explode('/', $url);
  $new_url = $parts[0].'/'.$parts[1].'/'.$parts[2].'/'.$parts[3].'/'.$parts[4].'/'.$parts[5];
  echo $new_url;

?>