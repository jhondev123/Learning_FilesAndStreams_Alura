<?php
$meuscursos = file('cursos.txt');
$outroscursos = file('texto.txt');
$arqcsv = fopen('cursos.csv','w');

foreach ($meuscursos as $curso){
    $linha = [trim(utf8_decode($curso),'sim')];
    fputcsv($arqcsv,$linha,';');


}
foreach ($outroscursos as $curso){
    $linha = [trim(utf8_decode($curso),'nao')];
    fputcsv($arqcsv,$linha,';');
}
fclose($arqcsv);