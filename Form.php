
  <footer>
    <div class="container3">
      <div class="title3">
        <!--Titolo-->
        <h1 id="info">Compila il form per richiedere informazioni</h1>
        <p>Inserisci i tuoi contatti</p>
      </div>
      <!--Form-->
      <div class="form-section">
        <form action="Form.php" method="post">
          <label for="name">Nome:</label>
          <input type="text" id="name" name="name" required>
  
          <label for="surname">Cognome:</label>
          <input type="text" id="surname" name="surname" required>
  
          <label for="phone">Telefono:</label>
          <input type="tel" id="phone" name="phone">
  
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
  
          <input type="submit" value="Invia">
        </form >
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
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati dal form
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Crea una stringa con i dati formattati
    $dati_formattati = "Name: $name\nsurname: $surname\nphone: $phone\nemail: $email\n\n";

    // Specifica il percorso del file in cui salvare i dati
    $percorso_file = "Daticontatto.txt";

    // Apre o crea il file in modalità append
    $file = fopen($percorso_file, "a");

    // Scrive i dati nel file
    fwrite($file, $dati_formattati);

    // Chiude il file
    fclose($file);

    // Reindirizza l'utente a una pagina di conferma o grazie
    header("Location: conferma_invio.php");
    exit();
} 