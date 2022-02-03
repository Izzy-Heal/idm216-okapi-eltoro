<?php
// list all records
while ($row = mysqli_fetch_assoc($results)) {

  echo "<tr class='item'>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['item_name'] . "</td>";
  echo "<td>" . $row['item_desc'] . "</td>";
  echo "<td>$" . $row['item_price'] . "</td>";
  echo "<td class=" . ($row['item_isfav']=='0' ? '' : 'favorite') . ">" . (boolval($row['item_isfav']) ? 'true' : 'false') . "(" . $row['item_isfav'] . ")" . "</td>";
  echo "</tr>";

}
?>

