<?php
$who = fopen("/var/run/utmpx", 'r');
date_default_timezone_set('America/Los_Angeles');
while ($line = fread($who, 628)){
  $arr = unpack("A256user/A4id/A32line/IPid/Itype/Itime", $line);
  if ($arr["type"] == 7)
      echo $arr["user"]."     ".$arr["line"]."  ".date("M j H:i", $arr["time"])."\n";
    }
 ?>
