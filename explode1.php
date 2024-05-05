<!DOCTYPE html>
<html>
<body>
<?php
$str = "Hello world. It's a beautiful day.";
$strArray = explode(" ", $str);
foreach ($strArray as $value) {
    echo ($value."<br>");
}
?>
</body>
</html>

