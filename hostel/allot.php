<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'hostel_allotment'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
		FROM rooms WHERE id IS NULL;';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
	<h1>Choose a room</h1>
  <input type = "text" name = "filter-hostel" placeholder = "Type in desired hostel" id = "filter-hostel" onkeyup="filterTable()" autocomplete="new-password">
	<table class="data-table" id = "room-table">
		<caption class="title">Available rooms</caption>
		<thead>
			<tr>
				<th>Hostel</th>
				<th>Room</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr class="hostel-room">
					<td>'.$row['hostel'].'</td>
					<td>'.$row['room'].'</td>
				</tr>';
		}?>
		</tbody>
	</table>
