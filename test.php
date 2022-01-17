<?php
$param_arr = getopt('s:b:');

$s = $param_arr["s"];
echo "sql is: $s \n";

$servername = "localhost";
$username = "debian-sys-maint";
$password = "-ie8CNUEYHoXzej0R";
$dbname = "Flags";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("connect fail: " . $conn->connect_error);
} 

$sql = "select * from Flags";

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
