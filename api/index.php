<?php
  $name = '';
  if(trim($_GET['name'])!=''){
    $name = $_GET['name'];
  };
  echo $name.' Run on vercel.com!<br/>';
  phpinfo();
?>
