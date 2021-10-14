<?php
//Déclaration de trois variables avec affectation
$a=0;
$b=1;
$c=44;
//Déclaration d'un tableau
$entiers=[0,1,14,-2,'valeur de b: $b',false,"valeur de c : $c"];
//Affichage du 14 à la position 2 (3ème élément)
echo $entiers[2];
echo "<h1>Liste des valeurs du tableau entiers</h1>";
//Itération sur les éléments du tableau
foreach ($entiers as $valeur){
    echo "valeur : $valeur<br>";
}
//Déclaration d'un tableau associatif
?>
<h1>Tableaux Associatifs</h1>
<?php
$asso=[4,5,9,'un'=>1,'deux'=>2,'trois'=>3,'faux'=>false,'Chaîne'=>'blabla'];
//Affichage de l'élément correspondant à la clé 3
echo $asso['trois'];
echo '<h2>Affichage des éléments du tableau $asso</h2>';
foreach ($asso as $k=>$value){
    echo "$k : $value<br>";
}

//Ajout d'élément dans un tableau :
$asso["new"]='Nouvelle valeur';
//Affichage
var_dump($asso);
$entiers[]=18;
var_dump($entiers);

//Modification à une position
    $asso["new"]='Autre val';
    $entiers[1]=1000;
    $entiers[15]="quinze";

var_dump($asso);
var_dump($entiers);

//Nombre d'éléments dans un tableau
echo "<h2>Nombre d'éléments</h2>";
echo "<h3>Tableau associatif </h3>";
echo count($asso);