<!DOCTYPE html>
<html>
<body>
<?php
$string = "Steven Halla, CIS243, PHP";

$parts = explode(", ", $string);

foreach ($parts as $part) {
    echo $part . "<br>";
}

echo str_word_count(str_replace(',', '', $string));
?>
</body>
</html>

