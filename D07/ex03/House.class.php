<?php
class House{
  public function introduce(){
    echo "House ". $this->getHouseName(). " of ". $this->getHouseSeat();
    echo " : \"". $this->getHouseMotto(). "\"\n";
  }
}
?>
