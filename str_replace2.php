<!DOCTYPE html>
<html>
<body>
<?php
$name = "Steven Halla";
$courseCode = "CIS 243";
$courseName = "Web Development III: Introduction to PHP";
$credits = "5.0 Credits";

$name = str_replace("Halla", "Halla!", $name);
$courseDetails = str_replace("PHP", "PHP 5.0", $courseName) . " " . $credits;

echo $name;
echo "<br>";

echo $courseCode;
echo "<br>";

echo $courseDetails;

echo "<br>";
echo "<br>";

echo $name;
echo "<br>";

echo $courseCode;
echo "<br>";

echo $courseDetails;

?>
</body>
</html>
