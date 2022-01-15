<?php
$param_arr = getopt('s:b:');

$s = $param_arr["s"];
echo "sql is: $s \n";

$servername = "localhost";
$username = "wordpress";
$password = "wordpress";
$dbname = "wordpress";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("connect fail: " . $conn->connect_error);
} 

$sql = "show variables like '%plugin%'";

$result = $conn->query($sql);
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
