<?php
    require_once __DIR__.'/Models/Comunicazioni.php';
    require_once __DIR__.'/Models/Email.php';

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