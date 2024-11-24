<?php
// Generiraj zamišljeni broj između 1 i 9
$zamisljeniBroj = rand(1, 9);
$poruka = "";
$stilPoruke = "";

// Obrada forme
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uneseniBroj = isset($_POST['broj']) ? (int)$_POST['broj'] : 0;

    // Provjera pogođenog broja
    if ($uneseniBroj === $zamisljeniBroj) {
        $poruka = "Pogodak, probaj ponovno!";
        $stilPoruke = "background-color: green; color: white; padding: 15px; border-radius: 10px; text-align: center; max-width: 300px; margin-top: 2cm; ";
    } else {
        $poruka = "Krivo, probaj ponovno! <br>Zamišljeni broj je bio: $zamisljeniBroj.";
        $stilPoruke = "background-color: red; color: white; padding: 15px; border-radius: 10px; text-align: center; max-width: 300px; margin-top: 2cm;";
    }
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Igra pogodi broj od 1 do 9 koristeći PHP.">
    <meta name="keywords" content="igra, pogodi broj, php, rand, if naredba">
    <title>Igra (pogodi broj)</title>
</head>
<body>
    <h1>Igra (pogodi broj)</h1>
    <form method="post" action="">
        <label for="broj">Upiši jedan broj od 1 do 9:</label>
        <input type="number" id="broj" name="broj" min="1" max="9" required>
        <button type="submit">Pošalji</button>
    </form>

    <?php if (!empty($poruka)): ?>
        <div style="<?php echo $stilPoruke; ?>"><?php echo $poruka; ?></div>
    <?php endif; ?>
</body>
<!-- Dokument: php-igra-pogodi-broj-obojeni-kvadrat.php -->
</html>

