<?php

//Implementação de um ficheiro XML em PHP

//Buscar ficheiro XML
$xml = simplexml_load_file("listaXML.xml");

echo "<table>";

//Expor resultados do ficheiro XML
foreach ($xml->children() as $carro){

    echo "<tr>"; echo"<td>"; echo "Carro:"; echo $carro->nome; echo "</td>";
    echo "<tr>"; echo"<td>"; echo "Ano:"; echo $carro->ano; echo "</td>";
    echo "<tr>"; echo"<td>"; echo "Tipo:"; echo $carro->tipo; echo "</td>";
    echo "<tr>"; echo"<td>"; echo "Preço:"; echo $carro->preço; echo "</td>";
    echo "<tr><td>------------------------</td></tr>";

}
echo "<tr>";
echo "</table>";

?>

