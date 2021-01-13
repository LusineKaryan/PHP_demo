<?php
//Tableau numéroté

// La fonction array permet de créer un array
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
echo $prenoms[1]; // affiche Michel

    
echo "<br/><br/>";

// On crée notre array $prenoms
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1], etc..
}


echo "<br/><br/>";

$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
foreach($prenoms as $element)
{
echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1], etc...
}

?>