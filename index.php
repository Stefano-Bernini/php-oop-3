<?php
    require_once __DIR__.'/Models/Comunicazioni.php';
    require_once __DIR__.'/Models/Email.php';
    require_once __DIR__.'/Models/Allegato.php';


    $comm = new Comunicazioni('Mario', 'Marco', 'Presentazione', 'Ciao sono Mario');

    echo "Mittente: ".$comm->getMittente().'<br/>';
    echo "Destinatario: ".$comm->getDestinatario().'<br/>';
    echo "Oggetto: ".$comm->getOggetto().'<br/>';
    echo "Contenuto: ".$comm->getContenuto().'<br/>';
    echo "Stato invio: ".$comm->invio().'<br/>';




    $email = new Email('Fabio', 'Alessandro', 'Test email', 'Corpo della mail', true);

    echo "<hr>";
    echo "Mittente: ".$email->getMittente().'<br/>';
    echo "Destinatario: ".$email->getDestinatario().'<br/>';
    echo "Oggetto: ".$email->getOggetto().'<br/>';
    echo "Contenuto: ".$email->getContenuto().'<br/>';
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