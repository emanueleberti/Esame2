<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss.css">
  <title>Projects</title>
</head>
<body>
    
    <!--Intestazione-->
    <?php
        require_once( 'intestazione.php' );
    ?>
    
    <!--Immagine e titolo-->
    <main>
        <!--immagine-->
        <div class="main-content">
          <img src="IMMAGINI/SFONDO2.jpg" alt="Sfondo">
          <!--Titolo-->
        </div>
    </main>

    <!--Progetti-->  
    <section>
        <div class="image-grid">

        <?php
            // Leggi il contenuto del file JSON
            $fileJSON = 'images.json';
            $datiJSON = file_get_contents($fileJSON);
            $immagini = json_decode($datiJSON, true);

            // Verifica se la decodifica è avvenuta con successo
            if ($immagini === null) {
                echo '<p class="errore">Errore nella lettura del file JSON</p>';
            } else {
                // Attraversa l'array per generare dinamicamente le immagini
                foreach ($immagini as $immagine) {
                    echo '<a href="' . $immagine['link'].'?id='.$immagine["id"] . '">';
                    echo '<img src="' . $immagine['src'] . '" alt="' . $immagine['alt'] . '" style="width: 100%;">';
                    echo '</a>';
                }
            }
        ?>
        </div>
    </section>

   
    <?php
        require_once( 'form.php' );
    ?>
    
</body>