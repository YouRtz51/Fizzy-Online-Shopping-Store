<?php require 'connection.php'; ?>

<!-- predefined functions -->
<?php

function pr($arr)
{
  echo "<pre>";
  echo print_r($arr);
};

function prx($arr)
{
  echo "<pre>";
  echo print_r($arr);
  die();
};

function prv($var)
{
  echo "<pre>";
  echo var_dump($var);
  die();
};

function get_safe_value($conn, $str)
{
  if (!$str == "") {
    $a = trim($str);
    $a=strip_tags($str);
    return mysqli_real_escape_string($conn, $a);
  };
};

?>