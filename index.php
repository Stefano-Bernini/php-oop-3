<?php
    require_once __DIR__.'/Models/Comunicazioni.php';

    $comm = new Comunicazioni('Mario', 'Marco', 'Presentazione', 'Ciao sono Mario');

    echo "Mittente: ".$comm->getMittente().'<br/>';
    echo "Destinatario: ".$comm->getDestinatario().'<br/>';
    echo "Oggetto: ".$comm->getOggetto().'<br/>';
    echo "Contenuto: ".$comm->getContenuto().'<br/>';
    echo "Stato invio: ".$comm->invio().'<br/>';
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