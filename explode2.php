<!DOCTYPE html>
<html>
<body>
<?php
$str = "Hello world. It's a beautiful day.";
$strArray = explode(".", $str);
foreach ($strArray as $value) {
    if(trim($value) != "") {
        echo trim($value) . ".<br>";
    }
}
echo "Our Group members: Steven Halla, Steven Halla, Steven Halla";

?>
</body>
</html>
