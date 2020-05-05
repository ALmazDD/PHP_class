<?php require_once "db.php" ?>
<br>
<?php
  $query_1 = "SELECT * FROM quiz;";
  $results = mysqli_query($connection, $query_1);
  if($results===false)
  {
    echo mysql_error($connection);
  }
  else
  {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
  }
?> 
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="1.css"></link>
  </head>
<body>
<?php
  echo "<h1>ONLINE SHOP</h1>";
  echo "<br>";
  echo "<h3>";
  echo "Admin, the db is ";
  echo "</h3>";
?>
<?php
  $item_id = -1;
  $item_name = "new item name";
  $item_price = -1;
  $item_comment = "new item comment";
  if
  (
     isset($_POST["item_id"]) && isset($_POST["item_name"]) &&
     isset($_POST["item_price"]) && isset($_POST["item_comment"])
  )
  {
    $item_id = $_POST["item_id"];
    $item_name = $_POST["item_name"];
    $item_price = $_POST["item_price"];
    $item_comment = $_POST["item_comment"];
  }

?>

<table>
  <tr>
    <th>
      item_id
    </th>
    <th>
      item_name
    </th>
    <th>
      item_price
    </th>
    <th>
      item_comment
    </th>
    <th>
      insert
    </th>
  </tr>
  <tr>
    <form action="2.php" method="post">
      <td>
        <input type="" name="item_id" placeholder="AUTO INCREMENT" readonly>
      </td>
      <td>
        <input type="text" name="item_name" placeholder="NEW ITEM NAME">
      </td>
      <td>
        <input type="text" name="item_price" placeholder="NEW ITEM PRICE">
      </td>
      <td>
        <input type="text" name="item_comment" placeholder="NEW ITEM COMMENT">
      </td>
      <td>
        <input type="submit" name="insert" value="insert">
      </td>
    </form>
  </tr>       
   <?php foreach($articles as $quiz): ?>
    <tr>
      <form action="" method="post">
        <td>
          <input type="text" name="item_id" value="<?= $quiz['item_id']?>" readonly>
        </td>
        <td>
          <input type="text" name="item_name" value="<?= $quiz['item_name']?>">
        </td>
        <td>
          <input type="text" name="item_price" value="<?= $quiz['item_price']?>">
        </td>
        <td>
          <input type="text" name="item_comment" value="<?= $quiz['item_comment']?>">
        </td>
        <td>
          <input type="submit" name="insert" value="insert" disabled>
        </td>
      </form>
    </tr>       
     <?php endforeach; 
     ?>
</table>
</body>
</html>
