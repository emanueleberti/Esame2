<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss.css">
    <style>
      .errore{color:red;}
    </style>
    <title>Index</title>
</head>

<body>
  
<!--Intestazione-->
  <?php
    require_once( 'Intestazione.php' );
  ?>


  
  <!--Prima pagina-->
  <main>
    <!--immagine-->
    <div class="main-content">
      <img src="IMMAGINI/SFONFO.jpg" alt="Sfondo della prima pagina">
      <!--Titolo-->
      <div class="text-content">
          <h1>I'm Emanuele a graphic and web developer</h1>
      </div>
    </div>
  </main>
  
  <!--Seconda pagina-->
  <section>
    <!--Titolo seconda pagina-->
    <a href="Projects.php" class="pulsante-link"> <b>I MIEI PROGETTI</b></a>
    <!-- Contenitore delle immagini -->
    <div class="image-grid">

      <?php
        // Array contenente informazioni sull'immagine e la pagina di destinazione
        $images = [
            ['src' => 'IMMAGINI/01.jpg', 'alt' => 'Descrizione immagine 1', 'link' => 'Project01.php'],
            ['src' => 'IMMAGINI/02.jpg', 'alt' => 'Descrizione immagine 2', 'link' => 'Project02.php'],
            ['src' => 'IMMAGINI/03.jpg', 'alt' => 'Descrizione immagine 3', 'link' => 'Project03.php'],
            ['src' => 'IMMAGINI/04.jpg', 'alt' => 'Descrizione immagine 4', 'link' => 'Project04.php'],
        ];

        // Loop attraverso l'array per generare le immagini collegate
        foreach ($images as $image) {
            echo '<a href="' . $image ['link'] . '">';
            echo '<img src="' . $image ['src'] . '" alt="' . $image['alt'] . '" style="width: 100%;">';
            echo '</a>';
        }
      ?>
    </div>
  </section>
  
  <!--Terza pagina-->
  <section>
    <div class="container">
      <img src="IMMAGINI/voltoblack.jpg" alt="La mia foto">
      <div class="content">
        <!--WEB Developer-->
        <h3>WEB DEVELOPER</h3>
        <!--Titolo-->
        <h1>EMANUELE BERTI</h1>
        <!--Descrizione-->
        <p>Sono un programmatore web appassionato con esperienza 
          in HTML, CSS, SASS, PHP e altri linguaggi di sviluppo web. 
          Mi dedico alla creazione di soluzioni web innovative e 
          user-friendly.</p>
        <!--Recapiti-->
        <div>
          <p><b>Recapiti:</b></p>
          <p>emanuele.berti2002@gmail.com</p>
          <p>+39 3500345448</p>
          <p>Via del giogo 4/D, Fi</p>
        </div>
      </div>
    </div>
  </section>
  
  <!--Pagina finale-->
  <?php
    require_once( 'form.php' );
  ?>
  
</body>
</html>