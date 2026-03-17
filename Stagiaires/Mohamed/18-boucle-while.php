<?php
$i = 0;
while ($i <= 20) {
    if ($i % 3 == 0) {
        echo "<strong>" . $i . "</strong> ";
    } else {
        echo $i . " ";
    }
    $i++;
}
echo("<br>");
$page = 1;
$totalPages = rand(1,20);

echo "Pages : ";
do {
    echo "$page ";
    $page++;
} while ($page <= $totalPages);

