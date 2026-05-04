<?php

$url = "https://docs.google.com/spreadsheets/d/1DN8DSlTnZE5T570QZR492bc4U6YKOFtD47SPgGNZ0cU/export?format=csv";

$data = file($url);

echo "<h2>Data Pensiun</h2>";
echo "<table border='1' cellpadding='8'>";

foreach ($data as $line) {
    echo "<tr>";
    $row = str_getcsv($line);
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
