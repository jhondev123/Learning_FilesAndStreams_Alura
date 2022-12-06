<?php

$novoCurso = trim(fgets(STDIN));
file_put_contents('texto.txt',"\n$novoCurso",FILE_APPEND);