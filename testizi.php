<?php
// Loop de 1 a 50
for ($i = 1; $i <= 50; $i++) {
    // Verifica se o número é múltiplo de 3 e 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz"; // Imprime "FizzBuzz" se for
    } elseif ($i % 3 == 0) {
        echo "Fizz"; // Imprime "Fizz" se for múltiplo de 3
    } elseif ($i % 5 == 0) {
        echo "Buzz"; // Imprime "Buzz" se for múltiplo de 5
    } else {
        echo $i; // Imprime o número se não for múltiplo de 3 ou 5
    }

    echo "\n"; 
}
?>
