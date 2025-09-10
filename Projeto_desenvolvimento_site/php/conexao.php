<?php

$conn = new mysqli("localhost", "root","","db_estoque");

if(!$conn){
    echo "Falha ao conectar seu buro! >:(";
}

