<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?>

<?php
  $servername = "doppelbock.jmcnet";
  $username = "anonymous";
  $password = "";
  $dbname = "scop";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT sid, sccs, description FROM scop_node LIMIT 10";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // headers
      echo '<table><tr><th>sid</th><th>sccs</th><th>description</th></tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      #print_r($row);
      echo "<tr><td>".$row["sid"]."</td><td>".$row["sccs"]."</td><td>".$row["description"]."</td></tr>";
    }
    echo '</table>';
  } else {
    echo "0 results";
  }
  $conn->close();
?>

<?php
$variable = 'hello...';
echo '<br>';
echo '<p>'.$variable.'</p>';
?>

<?php
$var1 = 3;
$var2 = 10;

if ($var1 == 2 and $var2 == 10) {
  echo '<p>'.$var1.' and '.$var2.' are equal to 3 and 10'.'</p>';
} else {
      echo '<p>'.$var1.' and '.$var2.' are NOT equal to 3 and 10 '.'</p>';
}
?>

<?php 
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

</body>      
</html>

