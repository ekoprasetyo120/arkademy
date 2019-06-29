<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "uname_arkad";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select nama.name,hobi.name,kategori.name
from nama,hobi,kategori
where nama.id = hobi.id and kategori.id = hobi.id_category ORDER BY nama.id";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        var_dump($row['name']);
    }
} else {
    echo "0 results";
}
$conn->close();
?>
