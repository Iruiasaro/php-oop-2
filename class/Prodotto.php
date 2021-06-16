<?php
class Product {
   private $articolo;
   private $text;
   private $prezzo;

   public function __construct($_articolo, $_prezzo) {
        $this->articolo = $_articolo;
        $this->prezzo = $_prezzo;
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

   public function get_prezzo() {
      return $this->prezzo;
   }

}
