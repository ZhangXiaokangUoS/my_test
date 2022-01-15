<?php
$param_arr = getopt('s:b:');

$sql = $param_arr["s"];
echo "sql is: $sql";

$servername = "localhost";
$username = "maintain";
$password = "";
$dbname = "Flags";


$conn = new mysqli($servername, $username);
// Check connection
if ($conn->connect_error) {
    die("connect fail: " . $conn->connect_error);
} 

$result = $conn->query($sql);
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
