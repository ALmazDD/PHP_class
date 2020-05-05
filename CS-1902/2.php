<?php require_once "db.php" ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $query_2 = "INSERT INTO quiz (`item_name`, `item_price`, `item_comment`)
              VALUES
              (
                '" . $_POST['item_name']. "',
                '" . $_POST['item_price']. "',
                '" . $_POST['item_comment']. "'
              )";
  $results = mysqli_query($connection, $query_2);
}
  if($results===false)
  {
    echo mysqli_error($connection);
  }
  else
  {
    $id = mysqli_insert_id($connection);
       header("Location: ../CS-1902/1.php");
       //doensn't work correctly do not know why

  }
?>
<br>
