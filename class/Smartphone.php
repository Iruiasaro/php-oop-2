<?php
class Smartphone extends Product {
    protected $processore;
    protected $ramMemory;

    public function __construct($_articolo, $_prezzo, $_processore, $_ramMemory) {
        parent::__construct($_articolo, $_prezzo);
        $this->processore = $_processore;
        $this->ramMemory = $_ramMemory;
    }

    public function get_ramMemory() {
       return $this->ramMemory;
    }
}