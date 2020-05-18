<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php 
    
    /**
     * PHP Snack 2:
     * Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
     * 1. name sia più lungo di 3 caratteri,
     * 2. che mail contenga un punto e una chiocciola
     * 3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
     */
    
    $data = $_GET;
    
    if ( empty($data['name']) || empty ($data['mail']) || empty($data['age']) ) {
        echo('Errore, inserire dati');
    } 
    elseif (strlen($data['name']) < 4 ) {
        echo('Accesso negato: Nome minore di tre caratteri');
    } 
    elseif (!strpos($data['mail'], '.') || !strpos($data['mail'], '@') ) {
        echo('Accesso negato: Mail non valida');
    }
    elseif (!is_numeric($data['age'])) {
        echo('Accesso negato: Età età non valida');
    }
    else {
        echo('Accesso riuscito');
    }
    ?>
</body>
</html>