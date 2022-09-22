<form method="POST">
<input type="text" name="url" value="google.com">
<input type="max" name="max" value="9999">
<input type="submit">
</form>

<?php
require("autovisitor.class.php");

$url = "google.com";
$max = 999;

for($i = 1; $i < $max+1; $i++) {
$class = new autovisitor($url);
echo $i.". SUKSES - [".$class->jalankan()."]<br>";
}
?>
