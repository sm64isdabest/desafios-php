<?php
$valores = [19.49, 50.90, 3.00, 7.50, 8.19];
$total = 0;

foreach ($valores as $number) {
    $total += $number;
}

echo "O total foi: R$" . $total;
?>