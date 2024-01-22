<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss.css">
    <title>index</title>
</head>

<body>
  
<!--Intestazione-->
  <?php
    require_once( 'intestazione.php' );
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
    <a href="projects.php" class="pulsante-link"> <b>I MIEI PROGETTI</b></a>
    <!-- Contenitore delle immagini -->
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
            // Rimuovi due immagini specifiche dall'array
            unset($immagini[2]);
            unset($immagini[1]);

            // Reindicizza l'array per evitare buchi nell'indice
            $immagini = array_values($immagini);

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