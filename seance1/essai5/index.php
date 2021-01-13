<?php
echo '______Boucle while_______';
$nombre_de_lignes = 1;
while ($nombre_de_lignes <= 5)
{
echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />'; $nombre_de_lignes++;
}

echo '______Boucle for_______';

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 5; $nombre_de_lignes++)
{
echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />'; }

?>