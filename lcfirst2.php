<!DOCTYPE html>
<html>
<body>
<?php
echo lcfirst("Hello World!");

$str = "Hello World!";
echo "<br><br>";

$strArray = explode(" ", $str);
$strArray[0] = lcfirst($strArray[0]);
$strArray[1] = lcfirst($strArray[1]);
$str = implode(" ", $strArray);
echo $str;
echo "<br><br>";

?>

Our Group members: Steven Halla, Steven Halla, Steven Halla


</body>
</html>
