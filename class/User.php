<?php

class User {
    private $nome;
    private $cognome;
    private $topClient;

    public function __construct($_nome, $_cognome, $_topClient) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->topClient = $_topClient;
   }

   public function get_Nome() {
       return $this->nome;
   }
   public function get_cognome() {
       return $this->cognome;
   }
   public function get_topClient() {
       return $this->topClient;
   }
}
