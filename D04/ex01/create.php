<?php
        function error(){
          echo "Error\n";
        }
        if ((!$_POST['login'] == '' && !$_POST['passwd'] == '' && $_POST['submit'] == 'OK')||
      (!$_GET['login'] == '' && !$_GET['passwd'] == '' && $_GET['submit'] == 'OK')) {
          if (file_exists('./private')){
              if (file_exists('./private/passwd')){
                $arr_lp = unserialize(file_get_contents('private/passwd'));
                foreach ($arr_lp as $user)
                    if (($_POST['login'] == $user['login'])|| ($_GET['login'] == $user['login'])){
                      error();
                        return;
                      }
              }
            }
          else
              mkdir('./private');
        $tmp['login'] = $_POST['login'];
        $tmp['passwd'] = hash('whirlpool' ,$_POST['passwd']);
        $arr_lp[] = $tmp;
        file_put_contents('./private/passwd', serialize($arr_lp));
        echo "OK\n";
        }
        else
            error();
?>
