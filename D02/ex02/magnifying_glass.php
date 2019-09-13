<?php
        $str = file_get_contents($argv[1]);
        preg_match_all('/(<a).*(title="(.*)").*(<\/a>)/', $str, $title);
        foreach ($title[2] as $elem)
        $str = str_replace($elem, strtoupper($elem), $str);
        foreach ($title[3] as $elem)
        $str = str_replace($elem, strtoupper($elem), $str);
        file_put_contents("new_page.html", $str);

 ?>
