<?php
$idadeeleitor = $_GET ["idadeeleitor"];

{ 
    if ($idadeeleitor >= 18 && $idadeeleitor <=65) 
    {
        echo "Eleitor Obrigatório";
    }
elseif ($idadeeleitor <16)
{
    echo "Ainda não vota";
}
elseif (($idadeeleitor >=16 && $idadeeleitor <18) || $idadeeleitor >65)
{
    echo "Eleitor Facultativo";
}

}