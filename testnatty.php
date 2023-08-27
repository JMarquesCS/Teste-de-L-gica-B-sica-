<?php
// Inicialização dos primeiros dois números da sequência
$primeiro = 0;
$segundo= 1;

// Saída para exibir a sequência de Fibonacci
echo "Os primeiros 40 números da sequência de Fibonacci são:\n";

// Loop para gerar os próximos 40 números da sequência
for ($i = 1; $i <= 40; $i++) {
    // Imprime o número atual
    echo $primeiro;

    // Adiciona uma vírgula se não for o último número
    if ($i < 40) {
        echo ", ";
    }


    $proximo = $primeiro + $segundo;


    $primeiro = $segundo;
    $segundo = $proximo;
}

echo "\n";
?>
