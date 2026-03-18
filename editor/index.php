<?php
$slozka = 'C:\xampp\htdocs';

if (!is_dir($slozka)) mkdir($slozka);

$soubory = glob($slozka . '/*') ?: [];

$soubor = $_POST['soubor'] ?? ($soubory[0] ?? null);

if ($soubor) {
   if (isset($_POST['zapsat']))  file_put_contents($soubor, $_POST['text'] . PHP_EOL, FILE_APPEND);
   if (isset($_POST['prepsat'])) file_put_contents($soubor, $_POST['text']);
   if (isset($_POST['smazat']))  { unlink($soubor); $soubor = null; }
}
if (isset($_POST['novy']) && !empty($_POST['nazev'])) {
   $soubor = $slozka . '/' . basename($_POST['nazev']);
   file_put_contents($soubor, '');
   $soubory = glob($slozka . '/*') ?: [];
}
?>

<form method="POST">
<select name="soubor">

<?php foreach ($soubory as $s): ?>

<option value="<?= $s ?>" <?= $s === $soubor ? 'selected' : '' ?>><?= basename($s) ?></option>

<?php endforeach; ?>
</select>

<textarea name="text" rows="6" cols="50"></textarea><br>
<button name="zapsat">Přidat</button>
<button name="prepsat">Přepsat</button>
<button name="smazat">Smazat</button>
</form>

<form method="POST">
<input name="nazev" placeholder="novy.txt">
<button name="novy">Vytvořit</button>
</form>