<?php
class Targaryen
{
  public function getBurned(){
    if (!$this->resistsFire())
      return ("burn alive");
    else
      return ("emerges naked but unharmed");
  }

  public function resistsFire(){
    return (FALSE);
  }
}



 ?>
