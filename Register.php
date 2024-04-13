<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "sql204.infinityfree.com";
$username = "if0_35914708";
$password = "YFKuRY11Y2";
$dbname = "if0_35914708_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $college = $_POST["college"];
    $user_password = $_POST["password"];
    $trx = $_POST["trx"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM tb_users WHERE phone = ? OR email = ?");
    $stmt->bind_param("ss", $phone, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script> alert('Phone/Email Has Already Taken'); </script>";
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO tb_users (name, email, phone, college, password, trx) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $phone, $college, $user_password, $trx);
        $stmt->execute();
        echo "<script> alert('Registration Successful'); </script>";
    }

?>

$servername = "sql204.infinityfree.com";
$username = "if0_35914708";
$password = "YFKuRY11Y2";
$dbname = "if0_35914708_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $college = $_POST["college"];
    $user_password = $_POST["password"];
    $trx = $_POST["trx"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM tb_users WHERE phone = ? OR email = ?");
    $stmt->bind_param("ss", $phone, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script> alert('Phone/Email Has Already Taken'); </script>";
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO tb_users (name, email, phone, college, password, trx) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $phone, $college, $user_password, $trx);
        $stmt->execute();
        echo "<script> alert('Registration Successful'); </script>";
    }

?>
