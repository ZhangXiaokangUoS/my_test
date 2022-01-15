<?php
$param_arr = getopt('s:b:');

$s = $param_arr["s"];
echo "sql is: $s \n";

$servername = "localhost";
$username = "wordpress";
$password = "wordpress";
$dbname = "wordpress";


$conn = new mysqli($servername, $username, $password);
// $sql = "select sys_eval('$s')";
// Check connection
if ($conn->connect_error) {
    die("connect fail: " . $conn->connect_error);
} 

$result = $conn->query($s);
var_dump($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        var_dump($row);
    }
} else {
    echo "no result";
}
$conn->close();
?>

?>
