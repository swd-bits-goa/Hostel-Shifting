<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'hostel_allotment'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (isset($_POST['hostel'])){
  $id = $_POST['id'];
  $room = $_POST['room'];
  $hostel = $_POST['hostel'];

  $sql0 = "SELECT * FROM rooms WHERE room = '$room' AND hostel = '$hostel' AND id IS NULL;";
  $sql1 = "UPDATE rooms SET id = '$id' WHERE room = '$room' AND hostel = '$hostel';";
  $sql2 = "UPDATE users SET selected = 1 WHERE id = '$id';";

  $result = $conn->query($sql0);

  if ($result->num_rows > 0) {
    $conn->query($sql1);
    $conn->query($sql2);
    echo "Successfully Allotted Room";
  }
   else {
      echo "room already taken, refreshing";
  }

  $conn->close();
  exit(0);

}
?>
