<?php

$submenu = "<a href=\"#\">Cursos</a><br><a href=\"#\">Campus</a><br><a href=\"#\">Vestibular</a><br><a href=\"#\">Calendário</a><br><a href=\"#\">Notas de corte</a><br><a href=\"#\">Obras Literárias</a><br><a href=\"#\">SISU</a><br><a href=\"#\">Provas Anteriores</a>";
$title = "Universidade Federal do ABC";
$content = file_get_contents('content/ufabc.html');

include('template.php');

?>