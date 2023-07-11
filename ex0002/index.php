<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php 
        $nome = "test";
        echo "Hoje é dia " . date("d/M/Y");
        echo "Hoje é dia " . $nome;
        date_default_timezone_set("America/Sao_Paulo");
        echo date("G:i:s T")
    ?>
</body>
</html>