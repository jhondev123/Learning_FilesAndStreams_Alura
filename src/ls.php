<?php
$diretorioatual = dir('.');
Echo $diretorioatual->path.PHP_EOL;
while($arq = $diretorioatual->read()){
    echo $arq.PHP_EOL;
}