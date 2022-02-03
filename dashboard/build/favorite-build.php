<?php
// ! NOT CURRENTLY IN USE
while ($row = mysqli_fetch_assoc($results)) {

  echo "<tr class='item'>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['item_name'] . "</td>";
  echo "<td>" . $row['item_desc'] . "</td>";
  echo "<td>$" . $row['item_price'] . "</td>";
  echo "<td>" . (boolval($row['item_isfav']) ? 'true' : 'false') . "(" . $row['item_isfav'] . ")" . "</td>";
  echo "</tr>";

}
?>