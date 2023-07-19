<?php
    require_once __DIR__.'/Models/Comunicazioni.php';
    require_once __DIR__.'/Models/Email.php';
    require_once __DIR__.'/Models/Allegato.php';
    require_once __DIR__.'/Models/SMS.php';
    require_once __DIR__.'/Models/NotificaPush.php';


    $comm = new Comunicazioni('Mario', 'Marco', 'Presentazione', 'Ciao sono Mario');

    echo "Mittente: ".$comm->getMittente().'<br/>';
    echo "Destinatario: ".$comm->getDestinatario().'<br/>';
    echo "Oggetto: ".$comm->getOggetto().'<br/>';
    echo "Contenuto: ".$comm->getContenuto().'<br/>';
    echo "Stato invio: ".$comm->invio().'<br/>';
    echo "Suoneria: ".Comunicazioni::$suoneria.'<br/>';




    $email = new Email('Fabio', 'Alessandro', 'Test email', 'Corpo della mail', true);

    echo "<hr>";
    echo "Mittente: ".$email->getMittente().'<br/>';
    echo "Destinatario: ".$email->getDestinatario().'<br/>';
    echo "Oggetto: ".$email->getOggetto().'<br/>';
    echo "Contenuto: ".$email->getContenuto().'<br/>';
    echo "Suoneria: ".Email::$suoneria.'<br/>';
    echo "Colore red: ".Email::$colore_led.'<br/>';
    if($email->getNotificaConsegna()){
        echo "L'email e' stata consegnata correttamente<br/>";
    }
    else{
        echo "L'email non e' stata inviata, riprova<br/>";
    }
    echo "Stato invio: ".$email->invio().'<br/>';
    echo "Inoltro: ".$email->inoltro().'<br/>';
    echo "Stampa: ".$email->stampa().'<br/>';



    $email_2 = new Email('Mattia', 'Nicola', 'Email per Nicola', 'Corpo della mail per Nicola', false);
    $allegato = new Allegato('immagine', 'png', 1.8);

    $email_2->setAllegato($allegato);

    echo "<hr>";
    echo "Mittente: ".$email_2->getMittente().'<br/>';
    echo "Destinatario: ".$email_2->getDestinatario().'<br/>';
    echo "Oggetto: ".$email_2->getOggetto().'<br/>';
    echo "Contenuto: ".$email_2->getContenuto().'<br/>';
    echo "Suoneria: ".Email::$suoneria.'<br/>';
    echo "Colore red: ".Email::$colore_led.'<br/>';
    if($email_2->getNotificaConsegna()){
        echo "L'email e' stata consegnata correttamente<br/>";
    }
    else{
        echo "L'email non e' stata inviata, riprova<br/>";
    }
    echo "Stato invio: ".$email_2->invio().'<br/>';
    echo "Inoltro: ".$email_2->inoltro().'<br/>';
    echo "Stampa: ".$email_2->stampa().'<br/>';
    echo "Allegato: ".$email_2->allegato->getNome().".".$email_2->allegato->getTipo().", Dimensioni: ".$email_2->allegato->getDimensione().'Mb<br/>';



    $sms = new SMS('Umberto', 'Dario', 'SMS per Dario', 'Contenuto SMS per Dario', true, false);

    echo "<hr>";
    echo "Mittente: ".$sms->getMittente().'<br/>';
    echo "Destinatario: ".$sms->getDestinatario().'<br/>';
    echo "Oggetto: ".$sms->getOggetto().'<br/>';
    echo "Contenuto: ".$sms->getContenuto().'<br/>';
    echo "Suoneria: ".SMS::$suoneria.'<br/>';
    echo "Colore red: ".SMS::$colore_led.'<br/>';
    if($sms->getNotificaLettura()){
        echo "Il messaggio e' stato letto<br/>";
    }
    else{
        echo "Il messaggio non e' stato letto<br/>";
    }

    if($sms->getAccettazioneRisposta()){
        echo "Il messaggio accetta risposte<br/>";
    }
    else{
        echo "Il messaggio non accetta risposte<br/>";
    }

    echo "Stato invio: ".$sms->invio().'<br/>';



    $notifica_push = new NotificaPush('Umberto', 'Dario', 'Notifica push per l\'app di Dario', 'Contenuto della notifica push per l\'app di Dario', true, 'icona');

    echo "<hr>";
    echo "Mittente: ".$notifica_push->getMittente().'<br/>';
    echo "Destinatario: ".$notifica_push->getDestinatario().'<br/>';
    echo "Oggetto: ".$notifica_push->getOggetto().'<br/>';
    echo "Contenuto: ".$notifica_push->getContenuto().'<br/>';
    echo "Suoneria: ".NotificaPush::$suoneria.'<br/>';
    echo "Colore red: ".NotificaPush::$colore_led.'<br/>';
    echo $notifica_push->getVisibile() ? "La notifica push e' visibile<br/>" : "La notifica push e' nascosta<br/>";
    echo "Icona ".$notifica_push->getIcona()."<br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 3</title>
</head>
<body>
    
</body>
</html>