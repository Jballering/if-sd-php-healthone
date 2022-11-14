<?php

function getFietsen():array
{
    global $pdo;
    $fietsen = $pdo->query('SELECT * FROM fietsen')->fetchAll(PDO::FETCH_ASSOC);
    return $fietsen;
}
