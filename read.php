<?php
 include 'databasehandler.php';
 $sql = "SELECT * FROM courses";
 $result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {
     if ($row['id'] == $_GET['id']) {
         echo '<form class="form-inline m-2" action="update.php" method = POST">';
         echo '<td><input type="text" class="form-control" name= "coursetittle" value="' . $row['coursetittle'].'"></td>';
         echo '<td><input type="text" class="form-control" name= "coursecode" value="' . $row['coursecode'].'"></td>';
         echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
         echo '<input type="hidden" name="courseid" value="' . $row['courseid'].'">';
         echo '</form>';
     }
     else {
     echo "<tr>";
     echo "<td>" . $row['coursetittle'] . "</td>";
     echo "<td>" . $row['coursecode'] . "</td>";
     echo "</tr>";
     echo '<td><a class="btn-primary" href="dashboard.php?id=' . $row['id'] . '" role="button">update</a></td>';
     echo '<td><a class="btn-danger" href="dashboard.php?id=' . $row['id'] . '" role="button">delete</a></td>';
     echo "</tr>";
 }
 $conn->close();
 ?> 