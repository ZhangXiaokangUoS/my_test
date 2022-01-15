<?php
$param_arr = getopt('s:b:');

$sql = $param_arr["s"];
echo "sql is: $sql";

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "fish";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("connect fail: " . $conn->connect_error);
} 

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        var_dump($row);
    }
} else {
    echo "no result";
}
$conn->close();
?>

?>