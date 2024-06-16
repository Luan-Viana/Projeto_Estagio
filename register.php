<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Subzero Climatização</title>
</head>
<body>

<?php

    require_once ("conexao.php");

    $name = $_POST["name"];
    $city = $_POST["city"];
    $endereco = $_POST["endereco"];
    $number = $_POST["number"];
    $job = $_POST["job"];
    $date = $_POST["date"];

    $bancoDados = new db();

    $link = $bancoDados-> msql_connect();

    $sql = "insert into usuarios (name, city, endereco, number, job, date) values('$name', '$city', '$endereco', '$number', '$job', '$date')";
    mysqli_query($link, $sql);

?>

<section>
<p class="php">
    Olá, agradecemos a preferência.<br>
    Em breve nossa equipe entrará em contato confirmando o agendamento da visita técnica !<br>
</p>

</section>

<div>
    <a class="home" href="index.html">HOME</a>
</div>

</body>
</html>

