<?php
  $name = '';
  if($_GET['name'] != ''){
    $name = $_GET['name'];
  }
  echo $name.' Run on vercel.com!<br/>';
  phpinfo();
?>
