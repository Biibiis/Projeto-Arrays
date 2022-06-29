<?php include('assets/cidades.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhores cidades para morar</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h2>As melhores cidades para se morar</h2>
    <table border="1">
        <tr>
            <th>Cidades e Estados
            <a href="?tipo=nome&&ordem=asc">&#9650;</a>
            <a href="?tipo=nome&&ordem=desc">Desc</a>
        </th>
        <th>IDH
            <a href="?tipo=sigla&&ordem=asc">&#9650;</a>
            <a href="?tipo=sila&&ordem=desc">Desc</a>
        </th>
        </tr> 

        <?php
            foreach ($cidades as $nome) {
                echo '<tr></tr>' .$nome. '<td></td>';
                echo '<td>' .$sigla. '</td></tr>'
            }

            
        ?>
    </table>
</body>
</html>