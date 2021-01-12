<?php
//Tableau associative

// On crée notre array $coordonnees
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
    echo $coordonnees['adresse'];


    echo "<br/>_________________________________________________<br/><br/>";


    $coordonnees = array (
        'prenom' => 'François',
        'nom' => 'Dupont',
        'adresse' => '3 Rue du Paradis',
        'ville' => 'Marseille');
        foreach($coordonnees as $element)
        {
        echo $element . '<br/>';
        }

    
    echo "<br/>_________________________________________________<br/><br/>";


    $coordonnees = array (
        'prenom' => 'François',
        'nom' => 'Dupont',
        'adresse' => '3 Rue du Paradis',
        'ville' => 'Marseille');
        foreach($coordonnees as $cle => $element)
        {
        echo '[' . $cle . '] - ' . $element . '<br />';
        }

?>