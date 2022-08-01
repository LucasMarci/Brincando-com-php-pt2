<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

$quant_confeito = 100;
$preco_confeito = 2;
$total = ($quant_confeito * $preco_confeito);
if ($quant_confeito <=5 ) {echo "desconto de 2%";
}
elseif ($quant_confeito >5) {echo "desconto de 3%";
}
elseif ($quant_confeito <=10) {echo "desconto de 3%";
}
elseif ($quant_confeito >10) {echo "desconto de 5%";
}
$desconto = ((5/100 )* $quant_confeito); 
$total_pagar =( $total - $desconto);

echo "  o valor total a pagar e de  $total_pagar reais";
