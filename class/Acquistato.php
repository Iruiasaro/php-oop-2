<?php

class Acquisto {
    public $user;
    public $articolo;

    public function __construct($_user, $_articolo) {
        $this->user = $_user;
        $this->articolo = $_articolo;
   }

   public function get_sconto_prezzo() {

       $articolo_prezzo = $this->articolo->get_prezzo();

       if($this->user->get_topClient()) {
          return $articolo_prezzo -= 100;
       } 
   }
}
