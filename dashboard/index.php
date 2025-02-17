<!-- setting page title -->
<?php
  $site_title = 'All Records';
?>

<!-- header include -->
<?php include 'includes/header.php'?>


<?php
// Build Query 
$query = 'SELECT * ';
$query .= 'FROM items';
$results = mysqli_query($db_connection, $query);
?>

<body>

  <h1><?php echo $site_title ?></h1>

  <div class="columns">
    <p id="column-title">Columns:</p>
    <?php include 'includes/category.php' ?>
  </div>

  <div class="content">
    <nav>
      <a href='index.php'>All</a>
      <a href='favorite.php'>Favorites</a>
    </nav>
    <table>
      <!-- Table headings -->
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Favorite</th>
        </tr>
      </thead>
      <!-- Table content -->
      <tbody>
        <?php
        // Check if the results returned anything
          if ($results && $results->num_rows > 0) {
              include 'build/list.php';
          } else {
          echo '<p>No results found.</p>';
        }
        ?>
      </tbody>
    </table>
  </div>

</body>
</html>
