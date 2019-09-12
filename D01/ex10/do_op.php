<?php
if ($argc != 4)
  exit ;
else
{
  if (trim($argv[2]) == '+')
    print (trim($argv[1]) + trim($argv[3]));
    if (trim($argv[2]) == '-')
    print (trim($argv[1]) - trim($argv[3]));
    if (trim($argv[2]) == '/')
    print (trim($argv[1]) / trim($argv[3]));
    if (trim($argv[2]) == '%')
    print (trim($argv[1]) % trim($argv[3]));
    if (trim($argv[2]) == '*')
    print (trim($argv[1]) * trim($argv[3]));
}
?>
