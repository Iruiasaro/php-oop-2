<?php

class User {
    private $nome;
    private $cognome;

    public function __construct($_nome, $_cognome) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
   }

   public function get_Nome() {
       return $this->nome;
   }
   public function get_cognome() {
       return $this->cognome;
   }

}