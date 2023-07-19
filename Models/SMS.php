<?php
    class SMS extends Comunicazioni{
        private $notifica_lettura;
        private $accettazione_risposta;
        public static $colore_led = "Green";


        public function __construct(String $_mittente, String $_destinatario, String $_oggetto, String $_contenuto, Bool $_notifica_lettura, Bool $_accettazione_risposta){
            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto);
            $this->notifica_lettura = $_notifica_lettura;
            $this->accettazione_risposta = $_accettazione_risposta;
        }

        public function getNotificaLettura(){
            return $this->notifica_lettura;
        }

        public function getAccettazioneRisposta(){
            return $this->accettazione_risposta;
        }



        public function invio(){
            return 'SMS inviato';
        }

        public function risposta(){
            return 'grazie per il messaggio';
        }
    }
?>