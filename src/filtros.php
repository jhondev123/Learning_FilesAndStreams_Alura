<?php
require_once "MeuFiltro.php";
require_once "MeuFiltro2.php";

$arq = fopen('texto.txt','r');
stream_filter_register('parte',MeuFiltro2::class);
stream_filter_append($arq,'string.toupper');
echo fread($arq,filesize('texto.txt'));