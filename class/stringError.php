<?php
class emailError extends Exception {

    protected $textMessageEmail = "Il campo deve essere in formato Stringa, email non valida";

    function __construct($value){
        if(!is_string($value) || $value == ""){
            $value = $this -> textMessageEmail;
        } 
    }
}
?>      