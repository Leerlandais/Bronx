<?php

function getProgInfo(PDO $db) : array 
{
    $sql = "SELECT * FROM bronx ORDER BY id ASC";
    
    $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
return $result;
    return [];
}