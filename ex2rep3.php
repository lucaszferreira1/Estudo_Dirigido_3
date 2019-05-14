
<?php
$n=1;
print "Para parar digite 0\n";

while ($n<>0){
print "Digite um número:";
$n=(float)fgets(STDIN);

if ($n<>0){

if ($n%2==0){
    print "Número par\n";
}
elseif ($n%2==1){
    print "Número ímpar\n";
}
}
elseif ($n==0){
    print "Número nulo\n";
}
}
