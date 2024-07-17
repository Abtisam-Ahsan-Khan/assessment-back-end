<?php
include("db.php");

$code = $_GET["country_code"];
$name = $_GET["country_name"];
$region = $_GET["country_region"];

if ($code == "" OR $name == "" OR $region == "") {

    header("location: create.php?result=invalid");
    die();
}

$query = "INSERT INTO `countries` (`country_id`, `country_name`, `region_id`) VALUES ('" . $code . "', '" . $name . "', '" . $region . "');";
try {
    $result = mysqli_query($conn, $query);
} catch (Exception $e) {
    if (mysqli_errno($conn)) {
        header("Location: create.php?result=duplicate");
        die();
    }

    echo("Failed to execute query: ". mysqli_error($conn));
    die();

}

header("Location: create.php?result=success");
die();
?>