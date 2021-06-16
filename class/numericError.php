<?php
class etaError extends Exception {

    protected $textErrorEta = "Il valore inserito deve essere di tipo numerico";

  function __construct($value) {
    if(!is_numeric($value)){
      $value = $this->textErrorEta;
    }

  
  }
}
?>