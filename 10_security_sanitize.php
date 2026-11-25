<?php
print_r($_GET);
echo "<br>";
echo isset($_GET["name"]);
echo empty($_GET["name"]);
echo filter_var($_GET["name"], FILTER_SANITIZE_STRING);
echo "<br>";

echo isset($_GET["age"]);
echo empty($_GET["age"]);
echo filter_var($_GET["age"], FILTER_SANITIZE_NUMBER_INT);
echo "<br>";

echo isset($_GET["email"]);
echo empty($_GET["email"]);
echo filter_var($_GET["email"], FILTER_SANITIZE_EMAIL);
echo "<br>";

echo "result: <br>";

$name = filter_var($_GET["name"], FILTER_SANITIZE_STRING);
$age = filter_var($_GET["age"], FILTER_SANITIZE_NUMBER_INT);
$email = filter_var($_GET["email"], FILTER_SANITIZE_EMAIL);
echo "name: $name <br>";
echo "age: $age <br>";
echo "email: $email";

?>

<form action="<?= $_SERVER['PHP_SELF'] ?>">
    <input name="name" type="text" placeholder="namn">
    <input name="age" type="text" placeholder="ålder">
    <input name="email" type="email" placeholder="a@b.c">
    <input type="submit">
</form>