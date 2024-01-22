
<footer>
    <?php
      // Definizione variabili per i campi del modulo
      $nome = $cognome = $email = $telefono = "";
      $errore_nome = $errore_cognome = $errore_email = $errore_telefono = "";
      $inviato = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Funzione di pulizia dei dati
          function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
          }

          // Verifica campo "nome"
          if (empty($_POST["nome"])) {
              $errore_nome = "Il campo nome è obbligatorio";
          } else {
              $nome = test_input($_POST["nome"]);
              if (!preg_match("/^[a-zA-Z ]*$/", $nome)) {
                  $errore_nome = "Sono consentite solo lettere e spazi nel campo nome";
              }
          }

          // Verifica campo "cognome"
          if (empty($_POST["cognome"])) {
              $errore_cognome = "Il campo cognome è obbligatorio";
          } else {
              $cognome = test_input($_POST["cognome"]);
              if (!preg_match("/^[a-zA-Z ]*$/", $cognome)) {
                  $errore_cognome = "Sono consentite solo lettere e spazi nel campo cognome";
              }
          }

          // Verifica campo "email"
          if (empty($_POST["email"])) {
              $errore_email = "Il campo email è obbligatorio";
          } else {
              $email = test_input($_POST["email"]);
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $errore_email = "Formato email non valido";
              }
          }

          // Verifica campo "telefono"
          if (empty($_POST["telefono"])) {
              $errore_telefono = "Il campo telefono è obbligatorio";
          } else {
              $telefono = test_input($_POST["telefono"]);
          }

          // Se non ci sono errori, salva i dati in un file di testo
          if (empty($errore_nome) && empty($errore_cognome) && empty($errore_email) && empty($errore_telefono)) {
              $dati_contatto = "Nome: $nome\nCognome: $cognome\nEmail: $email\nTelefono: $telefono\n";

              // Scrivi i dati nel file
              file_put_contents("Daticontatto.txt", $dati_contatto, FILE_APPEND | LOCK_EX);

              $inviato = "Dati inviati con successo!";
          }
        }
      ?>



  

    <div class="container3">
      <div class="title3">
        <!--Titolo-->
        <h1 id="info">Compila il form per richiedere informazioni</h1>
        <p>Inserisci i tuoi contatti</p>
      </div>
      <!--Form-->
      <div class="form-section">
        <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#form">
          Nome: <input type="text" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
          <span class="errore"><?php echo isset($errore_nome) ? $errore_nome : ""; ?></span>
         

          Cognome: <input type="text" name="cognome" value="<?php echo htmlspecialchars($cognome); ?>">
          <span class="errore"><?php echo isset($errore_cognome) ? $errore_cognome : ""; ?></span>
          

          Email: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
          <span class="errore"><?php echo isset($errore_email) ? $errore_email : ""; ?></span>
          

          Telefono: <input type="text" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>">
          <span class="errore"><?php echo isset($errore_telefono) ? $errore_telefono : ""; ?></span>
          

          <input type="submit" name="submit" value="Invia">
            <?php
                if (!empty($inviato)) {
                    echo "<p class='inviato'>$inviato</p>";
                }
            ?>
        </form>
      </div>
    </div>
    <!--Fine pagina-->
    <div class="container4">
      <!--Logo-->
      <div class="image-container4">
        <img src="IMMAGINI/LOGO.png" alt="Logo">
      </div>
    </div>
   
    
</footer>

