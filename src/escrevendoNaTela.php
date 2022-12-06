<?php

fwrite(STDOUT,"hello world");

$curso = fopen('zip://texto.zip#texto.txt','r');
stream_copy_to_stream($curso,STDOUT);

