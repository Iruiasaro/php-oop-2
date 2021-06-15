<?php
class Product {
   private $articolo;
   private $text;

   public function __construct($_articolo, $_prezzo) {
        $this->articolo = $_articolo;
   }

   public function set_text($_text) {
      $this->text = $_text;
  }
  
    public function get_articolo() {
      return $this->articolo;
   }

   public function get_text() {
      return $this->text;
   }

}