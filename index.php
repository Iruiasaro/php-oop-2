<?php
require_once __DIR__ . '/class/Prodotto.php';
require_once __DIR__ . '/class/Smartphone.php';
require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/Acquistato.php';

$samsung = new Smartphone('Samsung Galaxy S21', 1100, 'Octacore', 128);

$samsung->set_text('Il nuovo Samsung Galaxy S21 è il top di gamma della casa Sudcoreana... ');

$utente = new User('Marco', 'Verdi', true);

$articolo_acquistato = new Acquisto($utente, $samsung);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nome="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_OOP_2</title>
</head>

<body>
    <?php
    echo "Il prodotto acquistato è: {$samsung->get_articolo()} <br/>
            Piccola Descrizione: {$samsung->get_text()}<br/>
            Offre una capacità di: {$samsung->get_ramMemory()} GigaByte <br/>";

    echo "Il ns. cliente {$articolo_acquistato->user->get_Nome()} {$articolo_acquistato->user->get_cognome()} ha acquistato {$articolo_acquistato->articolo->get_articolo()}, alla cifra di {$articolo_acquistato->get_sconto_prezzo()} €"
    
    ?>
    
</body>

</html>
