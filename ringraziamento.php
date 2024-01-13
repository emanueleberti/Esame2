<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie per averci contattato</title>
    <style>
        body {
        font-family: 'Arial', sans-serif;
        margin: 20px;
        padding: 0;
        box-sizing: border-box;
        }

        h2 {
            color:#68bd7a ;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        a {
            
            color: #68bd7a; 
        }
    </style>
    </style>
</head>
<body>

<?php
    // Recupera i dati dalla query string
    $nome = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : '';
    $cognome = isset($_GET['cognome']) ? htmlspecialchars($_GET['cognome']) : '';
    $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    $telefono = isset($_GET['telefono']) ? htmlspecialchars($_GET['telefono']) : '';

    // Mostra un messaggio di ringraziamento e i dati compilati
    echo "<h2>Grazie per averci contattato, $nome $cognome!</h2>";
    echo "<p>DATI INVIATI:</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Cognome: $cognome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telefono: $telefono</p>";
?>

<a href="index.php">Torna alla pagina iniziale</a>
</body>
</html>