<?php
    class NotificaPush extends Comunicazioni{
        private $visibile;
        private $icona;
        public static $colore_led = "Red";



        public function __construct(String $_mittente, String $_destinatario, String $_oggetto, String $_contenuto, Bool $_visibile, String $_icona){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->visibile = $_visibile;
            $this->icona = $_icona;
        }

        public function getVisibile(){
            return $this->visibile;
        }

        public function getIcona(){
            return $this->icona;
        }


        public function invio(){
            return 'Notifica push inviata';
        }

        public function onClick(){
            return "Apro l'applicazione collegata alla notifica";
        }
    }
?>