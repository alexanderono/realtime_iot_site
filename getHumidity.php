<?php
  $id = $_POST["id"];
  $conn = mysqli_connect('localhost', 'username', 'password', 'test');
  $sql = "SELECT humidity.humidity from humidity WHERE humidity_id = '$id' ORDER BY humidity.timetaken DESC LIMIT 1";
  $queryresult = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  while($row = mysqli_fetch_assoc($queryresult)){
    $humidity = $row['humidity'];
  }
  mysqli_free_result($queryresult);
  mysqli_close($conn);
  echo "$humidity";
?>
