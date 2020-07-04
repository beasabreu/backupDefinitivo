<?php


$submenu = "<a href=\"#info\">Informações</a><br>


<a href=\"#dig\">Enem Digital　　</a><br>

<a href=\"#imp\">Enem Impresso　　</a><br>

<a href=\"#\">Calendário</a><br>


<a href=\"#\">Provas Anteriores</a><br>";

$title = "Exame Nacional de Ensino Médio";
$content = file_get_contents('content/enem.html');

include('template.php');

?>