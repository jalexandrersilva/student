<?php

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=novos_caminhos', 'root', 'root');
} catch(PDOException $e) {
print $e->getMessage();
die();
}


var_dump($pdo);
echo "funcionou papai";