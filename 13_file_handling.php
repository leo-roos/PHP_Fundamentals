<?php
$dir = __DIR__ . "/user_files";

$items = scandir($dir);
$items = array_filter($items, fn($value) => $value != "." && $value  != "..");
$items = array_values($items);

$chosenFile = "-1";
$chosenFileContents = "";
if(isset($_GET["file"]) && !empty($_GET["file"])) {
    $chosenFile = filter_var($_GET["file"], FILTER_SANITIZE_NUMBER_INT);
    $fileName = "$dir/" . $chosenFile + 1 . ".txt";
    $file = fopen($fileName, "r");
    $chosenFileContents = fread($file, filesize($fileName));
    print_r($file);
}
print_r($chosenFileContents);

foreach ($items as $key => $value): ?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="hidden" name="file" value="<?= htmlspecialchars($key) ?>">
    <input type="submit" value="Öppna fil <?= htmlspecialchars($value) ?>">
</form>
<?php endforeach; ?>
