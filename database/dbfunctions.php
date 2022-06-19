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

function get_items()
{
    global $db;
    $query = "SELECT ItemName, Description  from todolist WHERE Status = 'Open'";
    $statement = $db->prepare($query);
    $statement->execute();
    $items = $statement->fetchAll();
    $statement->closeCursor();

    return $items;
}



?>
