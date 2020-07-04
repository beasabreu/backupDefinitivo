<?php

$submenu = "

<a href=\"#1\"><strong>Informações</strong></a><br>
<a href=\"#11\">Geral</a><br>
<a href=\"#12\">Campus</a><br>
<a href=\"#13\">Cursos</a><br>
<a href=\"#14\">Métodos de avaliação</a><br>
<a href=\"#2\"><strong>Provas Anteriores</strong></a><br>
<a href=\"#3\"><strong>Calendários</strong></a><br>
<a href=\"#4\"><strong>Notas de corte SISU</strong></a><br>

";
$title = "Universidade Federal de São Paulo";
$content = file_get_contents('content/unifesp.html');

include('template.php');

?>