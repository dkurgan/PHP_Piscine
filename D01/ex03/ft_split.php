<?php
function ft_split($line)
{
  $word = explode(" ", $line);
  $word = array_filter($word);
  sort($word);
  return ($word);
}
?>
