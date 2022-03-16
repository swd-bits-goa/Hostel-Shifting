
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_allotment";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['pass'])){
  $id = $_POST['id'];
  $pass = $_POST['pass'];

  $sql = "SELECT * from users WHERE ID='$id';";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $result_id = $row["ID"];
    $result_name = $row["Name"];
    $result_pass = $row["pass"];
    $result_selected = $row["selected"];

    if ($result_pass==$pass){
      if($result_selected==0){
        echo $result_name;
      }
      else{
        echo "error : User has already chosen a room";
      }
    }
    else{
      echo "error : Wrong Password";
    }

  }
   else {
      echo "error : No Such User";
  }
  $conn->close();
  exit(0);
}
?>
