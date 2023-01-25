<!DOCTYPE html>
<html>
<body>
  <form method="post" action="hledaniMinMax.php">
    <label for="alpha">Alfa:</label>
    <input type="number" name="alpha" id="alpha">

    <label for="beta">Beta:</label>
    <input type="number" name="beta" id="beta">

    <label for="gama">Gama:</label>
    <input type="number" name="gama" id="gama">

    <input type="submit" value="Vypočítat">
  </form>

<?php
/**
 * hledaniMinMax
 * Vytvořte HTMl stránku s vstupním formulářem. Formulář bude obsahovat vstup pro tři číselné proměnné alfa, beta, gama.
 * Uživateli na stránce zobrazíte názvy proměnné a zadané hodnoty.
 * S využitím podmínky naleznete minimální hodnotu a maximální hodnotu. Výsledek zobrazíte uživateli.
 */
if(isset($_POST["alpha"]) && isset($_POST["beta"])) && isset($_POST["gama"])) {
      $alpha = $_POST['alpha'];
      $beta = $_POST['beta'];
      $gama = $_POST['gama'];

      echo '<p>Alfa: ' . $alpha . '</p>';
      echo '<p>Beta: ' . $beta . '</p>';
      echo '<p>Gamma: ' . $gama . '</p>';

      $min = min($alpha, $beta, $gama);
      $max = max($alpha, $beta, $gama);

      echo '<p>Minimální hodnota: ' . $min . '</p>';
      echo '<p>Maximální hodnota: ' . $max . '</p>';
    }
  ?>
</body>
</html>