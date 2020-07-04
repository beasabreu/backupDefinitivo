<?php


$submenu = "<a href=\"#1\">Informações</a><br>


<a href=\"#11\">Enem Digital</a><br>

<a href=\"#12\">Enem Impresso</a><br>

<a href=\"#2\">Calendário</a><br>";

$title = "Exame Nacional de Ensino Médio";
$content = file_get_contents('content/enem.html');

include('template.php');

?>