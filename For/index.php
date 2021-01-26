<?php


/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de moutons : <br>';
for ($i = 0; $i <= 10; ++$i) {
    echo $i . ' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour parcourir un tableau

$couleurs = ["rouge", "bleu", "vert", "orange", "marron", "noir", "blanc"];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo "2.Les couleurs : <br>";

$num = count($couleurs); // J'effectue le count en-dehors de la boucle for pour éviter que php ne doive recalculer à chaque itération le nombre d'éléments du tableau
for ($i = 0; $i < $num; ++$i) {
    echo $couleurs[$i] . "<br>";
}
echo "<br><br>";

//----------------------------------------
//Parcourir un tableau depuis la fin
echo "3.Les couleurs depuis la fin: <br>";
//N'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1

$num = count($couleurs);
for ($i = $num - 1; $i >= 0; --$i) {
    echo $couleurs[$i] . "<br>";
}
echo "<br><br>";
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions

$couleurs = array(
    array('rouge clair', 'rouge', 'rouge fonce'),
    array('bleu clair', 'bleu', 'bleu fonce'),
    array('vert clair', 'vert', 'vert fonce'),
    array('orange clair', 'orange', 'orange fonce'),
    array('marron clair', 'marron', 'marron fonce'),
);

echo "4.Les nuances de couleurs : <br>";
$num = count($couleurs);
for ($i = 0; $i < $num; ++$i) {
    for ($j = 0; $j < count($couleurs[$i]); ++$j) {
        echo $couleurs[$i][$j] . "<br>";
    }
}

echo "<br><br>";

?>