<?php
      if ($argc == 2)
      {
        date_default_timezone_set("Europe/Paris");
        $preg = preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-9]{2}) ([Jj]anvier|[Ff]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $match);
        if (!$preg)
        {
          echo "Wrong Format\n";
                exit;
        }
        $months = ['janvier', 'fvrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];
        $month = array_search(strtolower($match[3]), $months);
        if (!$month)
        {
          echo "Wrong Format\n";
                exit;
        }
        else
          echo(mktime($match[5], $match[6], $match[7],$month, $match[2], $match[4])). "\n";
      }
?>
