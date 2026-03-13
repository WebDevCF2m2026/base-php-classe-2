<<?php

$page = 1;
$totalPages = rand(1,20);

echo "Pages : ";
do {
    echo "$page ";
    $page++;
} while ($page <= $totalPages);