<?php
$filename = "test.txt";

if (file_exists($filename)) {
    $contents = file_get_contents($filename);
    echo nl2br($contents);
} else {
    echo "File does not exist.";
}
?>
