<?php
/*
$prenom = "Quentin";
$nom = "Martinet";
$age = 27;

echo "$prenom $nom j'ai $age";


while ($age < 100)
{
    $age++;
    echo "$age \n";
}
echo "J'ai 100 ans";
*/


$mineur = 18;
/*
if ($mineur <18 ){
    echo "tu es mineur";
}

else($mineur ===18) {
    echo "tu es majeur";
}
*/

if ($mineur < 18){
    echo "mineur";
}
elseif($mineur == 18){
    echo "tu as 18ans";
}elseif ($mineur > 18) {
    echo "majeur";
}elseif($mineur >= 100) {
    echo "impossible";
}


$identite = [
    'nom' => 'Martinet',
    'prenom' => 'Quentin',
    'age' => 27
];

var_dump ($identite);