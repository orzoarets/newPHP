<?php include "database/dbconnect.php"; ?>
<?php include "database/dbfunctions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
<h1>Welcome!</h1>

<form action="" id="add_item" action="POST">
    <label for="ItemName">Enter Name:</label>
    <input type="text"  name="ItemName" id="ItemName" required>
    <input type="submit" value="Submit">
</form>

<?php

if (isset($_GET['ItemName']))
{
    $item_name = $_GET['ItemName'];
    // $item_name = filter_input(INPUT_POST, 'ItemName', FILTER_SANITIZE_STRING);


if (isset($item_name))
{
    add_item($item_name);
}
}


$itemList = get_items();
if ($itemList)
{
    foreach ($itemList as $Item) :
    {
        ?>  <pre>
            <?php echo $Item['ItemName'] ?> </pre>
            <?php 

    }  
    endforeach;
}
else
    {
        echo "No Items available";
    }

    

?>
    
</body>
</html>