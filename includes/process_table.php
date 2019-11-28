<?php
include_once 'db_connect_form.php';

function getRequests($mysqli, $table, $limit) {
  // Create HTML Table from DB
  if ($result = $mysqli->query("SELECT * FROM " . $table ." LIMIT " . $limit)) {
      $count = $result->num_rows;
      $all_results = [];
      for ($i = 0; $i < $count; $i++) {
        $arr_row = $result->fetch_row();
        $all_results[$i] = $arr_row;
      }

      echo "<table id=\"requests\" style=\"width: 100%;\">";
      echo "<tr>";
      echo "<th><span>Date</span></th>";
      echo "<th><span>Complete</span></th>";
      echo "<th><span>Mailing/Personal Info</span></th>";
      echo "<th><span>Request</span></th>";
      echo "<th><span>Other Data</span></th>";
      echo "</tr>";

      // Loop through Columns
      $indexCount = 0;
      for ($j = 0; $j < $count; $j++) {
        // Begin Row Info
        echo "<tr>";
        echo "<td class=\"date\">" . $all_results[$j][0] . "</td>";

        // Create Correct Check Box
        if ($all_results[$j][1] == 1 && strcmp($table, "form_submits") == 0){
          echo "<td class=\"completed-col\">Entry Needs Deleted</td>";
        } else if (strcmp($table, "form_submits_permanent") == 0) {
          echo "<td class=\"completed-col\">" . $all_results[$j][1] . "</td>";
        } else {
          echo "<td class=\"completed-col\"><input class=\"table-checkbox\" type=\"checkbox\"></td>";
        }

        // Loop through Drop Down Lists
        for ($k = 0; $k < 3; $k++) {
          echo "<td class=\"collapse-list\" id=\"mailing-info\" onclick=\"dropDown(" . $indexCount . ")\">";
          $indexCount++;

          if ($k == 0) {
            echo "<span class=\"collapse-text\">" . $all_results[$j][2] . "</span>";
            echo "<span class=\"plus-sign\">+</span>";
            echo "<span class=\"long-mailing-info\">";
            echo "<br>" . $all_results[$j][3];
            echo "<br>" . $all_results[$j][6];
            echo "<br>" . $all_results[$j][14];
            if($all_results[$j][15]) {
              echo "<br>Braille Label: Yes";
            } else {
              echo "<br>Braille Label: No";
            }
            echo "</span>";
          } else if ($k == 1) {
            echo "<span class=\"collapse-text\">Request Info...</span>";
            echo "<span class=\"plus-sign\">+</span>";
            echo "<span class=\"long-mailing-info\">";
            echo "<br>" . $all_results[$j][9];
            echo "<br>Size: " . $all_results[$j][10];
            if(strcmp($all_results[$j][5],"telephone") == 0) {
              echo "<br>Phone Description: " . $all_results[$j][6];
            } else {
              echo "<br>" . $all_results[$j][5];
            }
            echo "<br>Considerations: " . $all_results[$j][11];
            echo "<br>Understand: " . $all_results[$j][12];
            echo "</span>";
          } else if ($k == 2) {
            echo "<span class=\"collapse-text\">Other</span>";
            echo "<span class=\"plus-sign\">+</span>";
            echo "<span class=\"long-mailing-info\">";
            echo "<br>Person Ordering: " . $all_results[$j][4];
            echo "<br>School: " . $all_results[$j][7];
            if($all_results[$j][8]) {
              echo "<br> No Feed Back";
            } else {
              echo "<br> Wants to Provide Feedback";
            }
            echo "<br> How Found: " . $all_results[$j][13];
            echo "</span>";
          }
          echo "</td>";
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
}

?>
