<?php
require "includes/setup.php";
 
$sql = "SELECT ID, boroughName, boroughLabel, postcode, wpPageId FROM " . $table_prefix . "GasByArea ORDER BY boroughName DESC";
$result = $conn->query($sql);
$conn->close();
$location = "London";
$postCode = "";
include "includes/header.php";
include "includes/content-gas.php";
include "includes/gasListing.php";
include "includes/sidebar.php";
include "includes/footer.php";
?>


