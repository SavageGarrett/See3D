<?php
include_once 'db_connect_form.php';

if ($result = $mysqli->query("SELECT * FROM form_submits LIMIT 10")) {
    $count = $result->num_rows;
    $all_results = [];
    for ($i = 0; $i < $count; $i++) {
      $arr = $result->fetch_row();
      $all_results[$i] = $arr;
    }
    //var_dump($all_results);

    // Output Table Header
    echo "<table id=\"requests\" style=\"width: 100%;\">";
    echo "<tr>";
    echo "<th>Date</th>";
    echo "<th>Completed</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Address</th>";
    echo "<th>Label</th>";
    echo "<th>Stl File</th>";
    echo "<th>Model Size</th>";
    echo "<th>Considerations</th>";
    echo "<th>Understand</th>";
    echo "<th>How Found</th>";
    echo "</tr>";

    // Output Table Values
    for ($j = 0; $j < $count; $j++) {
      echo "<tr>";
      $inner_count = count($all_results[$j]);
      for ($k = 0; $k < $inner_count; $k++) {
        if ($k == 1) {
          if ($all_results[$j][$k] == 1){
            echo "<td>Entry Needs Deleted</td>";
          } else {
            echo "<td><input type=\"checkbox\"></td>";
          }
        } else {
          echo "<td>" . $all_results[$j][$k] . "</td>";
        }
      }
      echo "</tr>";
    }

    // End table
    echo "</table>";

    /* free result set */
    $result->close();
} else {
  die('Error: ' . $mysqli -> error);
}

?>
