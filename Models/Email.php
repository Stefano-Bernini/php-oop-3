<?php
    class Email extends Comunicazioni{
        public $allegato;
        private $notifica_consegna;
        public static $colore_led = "Orange";


        public function __construct(String $_mittente, String $_destinatario, String $_oggetto, String $_contenuto, Bool $_notifica_consegna){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->notifica_consegna = $_notifica_consegna;
        }

        public function setAllegato($_allegato){
            $this->allegato = $_allegato;
        }

        public function getAllegato(){
            return $this->allegato;
        }



        public function setNotificaConsegna($_notifica_consegna){
            $this->notifica_consegna = $_notifica_consegna;
        }

        public function getNotificaConsegna(){
            return $this->notifica_consegna;
        }

        public function inoltro(){
            return 'Email inoltrata';
        }

        public function stampa(){
            return 'Email stampata';
        }

        public function invio(){
            return 'Email inviata';
        }
    }
?>