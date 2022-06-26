<?php
require 'dbc.php';

function preia_zi_profesor($id_prof, $zi){
    global $conexiune;

    $query = "call preia_zi_profesor('$id_prof', $zi);";
    $rezultat = mysqli_query($conexiune, $query);

    mysqli_store_result($conexiune);
    return $rezultat;
}