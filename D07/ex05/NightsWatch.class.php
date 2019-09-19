<?php
class NightsWatch implements IFighter{
  private $array;

  public function recruit($str){
    if ($str instanceof IFighter)
      $this->$array[] = $str;
  }
  public function fight(){
    foreach ($this->$array as $val)
      $val->fight();
  }

}

 ?>
