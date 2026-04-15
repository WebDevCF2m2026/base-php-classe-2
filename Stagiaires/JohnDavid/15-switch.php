
<?php
$number = mt_rand(0, 10);
switch (true) {
    case ($number >= 0 && $number <= 3):
        $result = "Nul, étudie la prochaine fois";
        break;
    case ($number >= 4 && $number <= 5):
        $result = "Peut mieux faire";
        break;
    case ($number >= 6 && $number <= 7):
        $result = "Bien";
        break;
    default:
        $result = "Très bien";
}
?>