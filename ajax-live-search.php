<?php
include ('conn.php');

$search_term = $_POST['dbservice'];

$query = "SELECT * FROM services WHERE service_name LIKE '%{$search_term}%'";

$result = mysqli_query($conn,$query) or die("query error......");
$output = "<ul>";

if (mysqli_num_rows($result)>0) {
	# code...
	while ($row= mysqli_fetch_assoc($result)) {
		# code...
		$output .= "<li>{$row['service_name']}</li>";
	}

}else{
	$output .= "<li>Service not found..</li>";
}
$output .= "</ul>";

echo $output;
?>