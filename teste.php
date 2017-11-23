<?php

//phpinfo();
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'mysql');


$dados = [

    'name' => 'Wesley',
    'lastname' => 'Gomes'
];

$pdo->name = $dados;

var_dump($pdo);

$i = 0;

while ($i <= 10) {
    var_dump($i);
}

?>