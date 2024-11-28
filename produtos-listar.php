<?php include "header.php"; include "conexao.php"?>
<main>
    <h2>PRODUTOS</h2>
    <a href="produtos-cadastrar.php">produtos</a>
    <table border="2">
        <tr>
            <th>PRODUTOS</th>
            <th>DESCRIÇÃO</th>
            <th>PREÇO</th>
            <th>ACÕES</th>
        </tr>
        <?php
            $sql = "SELECT * FROM produtos";
            $resultado = mysqli_query($conexao, $sql);
            echo "<br><br>";

            while ($l = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>{$l['produtos']}</td>";
                echo "<td>{$l['descricao']}</td>";
                echo "<td>{$l['acoes']}</td>";

                echo "<td>";    //INICIO AÇÕES
                
                // INICIO EXCLUIR FUNCIONÁRIOS
                echo "<a href='produtos-excluir.php?id={$l['id']}'>";   
                echo "<img src='img/lixeira.svg' alt=''>";
                echo "</a>";
                // FIM EXCLUIR FUNCIONÁRIOS
                
                // INICIO EDITAR FUNCIONÁRIOS
                echo "<a href='produtos-editar.php?id={$l['id']}'>";  
                echo "<img src='img/editar.svg' alt=''>";
                echo "</a>";
                // FIM EDITAR FUNCIONÁRIOS

                echo "</td>";   //FIM AÇÕES
                echo "</tr>";
            }
            mysqli_close($conexao);
        ?>
    </table>
</main>
<?php include "footer.php"?>