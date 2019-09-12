<?php
  $arr = implode(" ", $argv);
  $arr = trim(preg_replace('/\s+/', ' ', $arr));
  $arr = explode(' ', $arr);
  $name = array_shift($arr);

    foreach ($arr as $elem) {
      if  (($elem[0] >= 'a' && $elem[0] <= 'z') || ($elem[0] >= 'A' && $elem[0] <= 'Z') && ($elem[1] >= '0' && $elem[1] <= '9'))
           $hole[] = $elem;
      else if  (($elem[0] >= 'a' && $elem[0] <= 'z') || ($elem[0] >= 'A' && $elem[0] <= 'Z') && ($elem[1] >= 'a' && $elem[1] <= 'z'))
            $trash[] = $elem;
      else if (($elem[0] >= 'a' && $elem[0] <= 'z') || ($elem[0] >= 'A' && $elem[0] <= 'Z'))
            $alpha[] = $elem;
      else if ($elem[0] >= '0' && $elem[0] <= '9')
        $num[] = $elem;
      else
        $other[] = $elem;
    }

    sort($trash);
    sort($hole);
    rsort($num);
    rsort($alpha);
    rsort($other);

    foreach ($trash as $elem) {
      echo $elem . "\n";
    }
    foreach ($hole as $elem) {
      echo $elem . "\n";
    }
    foreach ($alpha as $elem) {
      echo $elem . "\n";
    }
    foreach ($num as $elem) {
      echo $elem . "\n";
    }
    foreach ($other as $elem) {
      echo $elem . "\n";
    }
?>
