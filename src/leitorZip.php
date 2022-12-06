<?php
$contexto = stream_context_create([
   'zip'=>[
       'password' => '123'
   ]
]);
echo file_get_contents('zip://texto.zip#texto.txt',false,$contexto);
