<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss02.css">

  <title>Project02</title>
</head>
<body>
    
    <!--Intestazione-->
    <?php
        require_once( 'Intestazione.php' );
    ?>
    
    <!--Progetto-->
    <section>
        <div class="container">
          <!--Immagine sito-->
          <img src="IMMAGINI/02.jpg" alt="La mia foto">
          <div class="content">
            <h3>SITO WEB</h3>
            <!--Titolo-->
            <h1>TITOLO</h1>
            <!--Descrizione-->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptatum adipisci harum repudiandae deleniti in laboriosam ducimus debitis voluptatibus. Accusantium, tempora? Aliquid voluptatibus modi inventore nihil, ullam fugit asperiores repudiandae!</p>
          </div>
        </div>
    </section>

    <footer>
        <?php
            require_once( 'Form.php' );
        ?>
    </footer>
</body>