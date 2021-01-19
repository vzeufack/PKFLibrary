 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pkflibrary";

$bookId =$_POST["bookId"];
$username =$_POST["username"];
$date =$_POST["date"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "<b>Connection Failed</b>";
    die("Connection failed: " . $conn->connect_error);
}

$userId = "SELECT id FROM User WHERE username=$username"
$sql = "UPDATE book_user SET dueDate=$date WHERE (bookId=$bookId AND userId = $userId )";

if ($conn->query($sql) === TRUE) {
    echo "<b>Record updated successfully</b>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
