<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss02.css">
  <title>project</title>
</head>
<body>
    
    <!--Intestazione-->
    <?php
        require_once( 'intestazione.php' );
    ?>
    
    <?php 
        // Leggi il contenuto del file JSON
        $fileJSON = 'images.json';
        $datiJSON = file_get_contents($fileJSON);
        $immagini = json_decode($datiJSON, true);

        // ID desiderato dall'URL
        $desiredId = isset($_GET['id']) ? $_GET['id'] : null;

        // Attraversa l'array per generare dinamicamente le immagini e il contenuto della sezione progetto
        foreach ($immagini as $immagine) {
            if ($immagine["id"] == $desiredId) {
                // Apertura della sezione progetto
                echo '<section>';
                echo '<div class="container">';
                
                // Immagine sito
                echo '<img src="' . $immagine['src'] . '" alt="' . $immagine['alt'] . '">';

                // Altri dettagli del progetto
                echo '<div class="content">';
                
                // Sottotitolo del progetto ottenuto dal file JSON
                echo '<h3>' . $immagine['subtitle'] . '</h3>';
                
                // Titolo del progetto ottenuto dal file JSON
                echo '<h1>' . $immagine['title'] . '</h1>';
                
                // Descrizione del progetto ottenuto dal file JSON
                echo '<p>' . $immagine['description'] . '</p>';
                
                echo '</div>'; // Chiudere il div della classe content

                // Chiusura della sezione progetto
                echo '</div>'; // Chiudere il div della classe container
                echo '</section>';
            }
        }
    ?>

  <?php
      require_once( 'form.php' );
  ?>
    
</body>