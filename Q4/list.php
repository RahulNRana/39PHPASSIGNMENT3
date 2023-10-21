<?php
$dir = opendir("..");
while ($file = readdir($dir)) {
    if ($file != "." && $file != "..") {
        echo "<a href=\"../$file\">$file</a><br>";
    }
}
closedir($dir);
?>