<?php
    class Tyrion extends Lannister
    {
      public function getSize(){
        return('Short');
      }
      function __construct(){
        parent::__construct();
        echo "My name is Tyrion\n";
      }
    }



 ?>
