<?php
$coordonnees = array (
'prenom' => 'François',
'nom' => 'Dupont',
'adresse' => '3 Rue du Paradis',
'ville' => 'Marseille');
if (array_key_exists('nom', $coordonnees))
{
echo 'La clé "nom" se trouve dans les coordonnées !<br/>';
}
if (array_key_exists('ville', $coordonnees))
{
echo 'La clé "ville" se trouve dans les coordonnées !';
}

echo "<br/>_________________________________________________<br/><br/>";


$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');
if (in_array('Myrtille', $fruits))
{
echo 'La valeur "Myrtille" se trouve dans les fruits !<br/>';
}
if (in_array('Cerise', $fruits))
{
echo 'La valeur "Cerise" se trouve dans les fruits !<br/>';
}
if (in_array('Pomme', $fruits))
{
echo 'La valeur "Pomme" se trouve dans les fruits !';
}

echo "<br/>_________________________________________________<br/><br/>";


$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');
$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';
$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;
?>