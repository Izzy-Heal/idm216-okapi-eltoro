<!-- setting page title -->
<?php
  $site_title = 'Favorites';
?>

<!-- header include -->
<?php include 'includes/header.php'?>


<?php

// Build Query 
$query = 'SELECT * ';
$query .= 'FROM items ';
$query .= "WHERE item_isfav=1";
$results = mysqli_query($db_connection, $query);
?>

<body>

  <h1><?php echo $site_title ?></h1>

  <div class="content">
    <table>
      <!-- Table headings -->
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Favorite</th>
      </tr>
      <?php
      // Check if the results returned anything
        if ($results && $results->num_rows > 0) {
            include 'build/list.php';
        } else {
        echo '<p>No results found.</p>';
      }
      ?>
    </table>
  </div>

</body>
</html>
