<?php

// aca se hace la peticion

include(database.php)

$search = $_POST['search'];

if (!empty($search)) {
    $query = "SELECT * FROM notes WHERE name LIKE '$search%'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('query error'. mysqli_error($connection)); // mostrame un error si no se pudo obtener un resultado
    }
    $json = array();  
    while ($row = mysqli_fetch_array($result)) { // recorremos el resultado, convirtiendolo en array
        $json[] = array( // aca llenamos el json
            'name' => $row['name'], // asignamos a variables valores de la db
            'description' => $row['description'],
            'id' => $row['id']    
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>