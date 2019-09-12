<?php
if ($argc > 1)
{
  $arr = array();
  $arr = explode(' ', $argv[1]);
  for ($i = 1; $i < count($arr); $i++)
    echo $arr[$i] . " ";
   echo $arr[0] ."\n";
}
?>
