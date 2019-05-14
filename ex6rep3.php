<?php

$numerosnegativos=0;
$numerospositivos=0;
$n=1;

print "Digite 0 para terminar\n";

while ($n<>0){
   print "Escreva um número:";
   $n=(float)fgets(STDIN);
   if ($n<0){
       $numerosnegativos=$numerosnegativos+1;
   }
   elseif ($n>0){
       $numerospositivos=$numerospositivos+1;
   }
}

print "$numerosnegativos números negativos\n";
print "$numerospositivos números positivos\n";
