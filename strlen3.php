<!DOCTYPE html>
<html>
<body>
<?php
$fullString = "Steven Halla, CIS243, PHP";

$components = explode(", ", $fullString);

foreach ($components as $component) {
    echo $component . "<br>";
}

echo "<br> " . strlen($fullString);
?>
</body>
</html>
