<?php
$correctUser = "Pipito";
$correctPass = "LegalJoinha";

$userName = "Pipito";
$password = "JoinhaLegal";

if ($userName === $correctUser) {
    if ($password === $correctPass) {
        echo "Login bem-sucedido";
    } else {
        echo "Login mal-sucedido";
    }
} else {
    echo "Login mal-sucedido";
}
?>