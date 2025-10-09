
<?php

include 'db.php';

$sql = "SELECT titulo,noticia FROM noticia"; $result = mysqli_query($conexao, $sql);

if (!$result) { echo "Erro na consulta: " . mysqli_error($conexao); exit; }


$result = $conexao->query($sql);


$distinto="";


if ($result->num_rows > 0) {
    // Exibir os dados
    while ($row = $result->fetch_assoc()) {
        
       if($distinto != $row["menu_principal"])
        {
        if($distinto != ''){
            echo '</div>';
        }
        $distinto = $row["menu_principal"];
        echo '<div id="'.$row["menu_principal"].'"><h2>'.$row["menu_principal"].'</h2>';
    }
        echo "<div>" . $row["seg_menu"] . "</div>";
       }
}


$conexao->close();
?>
