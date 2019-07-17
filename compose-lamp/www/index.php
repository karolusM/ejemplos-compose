<html>
 <head>
  <title>Listado</title>
  <meta charset="utf-8"> 
</head>
<body>
    <div class="contenedor">
    <?php echo "<h1>Lista de alumnos</h1>"; ?>

    <?php

    $conn = mysqli_connect('db', 'alumno', 'alumno', "miBD");

    $query = 'SELECT * From Personas';
    $result = mysqli_query($conn, $query);

    echo '<table>';
    echo '<thead><tr><th>id</th><th>nombre</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';

        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';

    $result->close();

    mysqli_close($conn);

    ?>
    </div>
</body>
</html>
