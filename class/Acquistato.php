<?php

class Acquisto {
    public $user;
    public $articolo;

    public function __construct($_user, $_articolo) {
        $this->user = $_user;
        $this->articolo = $_articolo;
   }

}