<?php

function add_item($item_name)
{
    global $db;
    $query = "INSERT INTO todolist (ItemName) VALUES (:itemName)";
    $statement = $db->prepare($query);
    $statement->bindValue(":itemName", $item_name);
    $statement->execute();
    $statement->closeCursor();
}

?>
