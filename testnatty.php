<?php
// Inicialização dos primeiros dois números da sequência
$first = 0;
$second = 1;

// Saída para exibir a sequência de Fibonacci
echo "Os primeiros 40 números da sequência de Fibonacci são:\n";

// Loop para gerar os próximos 40 números da sequência
for ($i = 1; $i <= 40; $i++) {
    // Imprime o número atual
    echo $first;

    // Adiciona uma vírgula se não for o último número
    if ($i < 40) {
        echo ", ";
    }


    $next = $first + $second;


    $first = $second;
    $second = $next;
}

echo "\n";
?>
