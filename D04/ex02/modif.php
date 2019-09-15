<?php
      function error(){
        echo "Error\n";
        exit;
      }

      if ($_POST['login'] == '' || $_POST['oldpw'] == '' || $_POST['submit'] != 'OK' || $_POST['newpw'] == '')
        error();
      $arr_lp = unserialize(file_get_contents('../ex01/private/passwd'));
      $login = $_POST['login'];
      $oldp = hash('whirlpool', $_POST['oldpw']);
      $newp = hash('whirlpool', $_POST['newpd']);
      foreach ($arr_lp as &$user) {
        if (($user['login'] == $login) && ($user['passwd'] == $oldp) && ($oldpw != $newp)){
          $user['passwd'] = $newp;
          file_put_contents('../ex01/private/passwd', serialize($arr_lp));
          echo "OK\n";
          return;
        }
        error();
      }

?>
