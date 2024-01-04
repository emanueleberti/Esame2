<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss02.css">

  <title>Project04</title>
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
          <img src="IMMAGINI/04.jpg" alt="La mia foto">
          <div class="content">
            <h3>SITO WEB</h3>
            <!--Titolo-->
            <h1>TITOLO</h1>
            <!--Descrizione-->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dolore asperiores neque voluptatibus, labore dolores aliquid qui officia vero dignissimos, accusamus harum totam. Asperiores, esse. Repellat numquam sequi amet dolore?</p>
          </div>
        </div>
    </section>

    <footer>
        <?php
            require_once( 'Form.php' );
        ?>
    </footer>
</body>