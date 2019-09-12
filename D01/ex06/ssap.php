<?php
require '../ex03/ft_split.php';

if ($argc > 1) {
  $arr = array();
  for ($i = 1; $i < count($argv); $i++)
    $arr = array_merge($arr, ft_split($argv[$i]));
  sort($arr);
  for ($i = 0; $i < count($arr); $i++)
    echo $arr[$i] ."\n";
}
?>
