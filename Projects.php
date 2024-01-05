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
        require_once( 'Intestazione.php' );
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
            // EArray contenente informazioni sull'immagine e la pagina di destinazione
            $images = [
                ['src' => 'IMMAGINI/01.jpg', 'alt' => 'Descrizione immagine 1', 'link' => 'Project01.php'],
                ['src' => 'IMMAGINI/02.jpg', 'alt' => 'Descrizione immagine 2', 'link' => 'Project02.php'],
                ['src' => 'IMMAGINI/03.jpg', 'alt' => 'Descrizione immagine 3', 'link' => 'Project03.php'],
                ['src' => 'IMMAGINI/04.jpg', 'alt' => 'Descrizione immagine 4', 'link' => 'Project04.php'],
            ];

            // Loop attraverso l'array per generare le immagini collegate
            foreach ($images as $image) {
                echo '<a href="' . $image['link'] . '">';
                echo '<img src="' . $image['src'] . '" alt="' . $image['alt'] . '" style="width: 100%;">';
                echo '</a>';
            }
        ?>
        </div>
    </section>

   
    <?php
        require_once( 'Form.php' );
    ?>
    
</body>