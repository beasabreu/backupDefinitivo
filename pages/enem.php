<?php


$submenu = "

<a href=\"#1\"><strong>Informações</strong></a><br>
<a href=\"#11\">Enem digital</a><br>
<a href=\"#12\">Enem impresso</a><br>
<a href=\"#2\"><strong>Provas anteriores</strong></a><br>
<a href=\"#3\"><strong>Calendário</strong></a><br>"

;

$title = "Exame Nacional de Ensino Médio";
$content = file_get_contents('content/enem.html');

include('template.php');

?>