<?php
include './../server.php';

$sql = "SELECT single_bed, double_bed, two_window, luxury FROM rooms";
$result = $conn->query($sql);

$singleBed = 0;
$doubleBed = 0;
$twoWindow = 0;
$luxury = 0;

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $singleBed = $row["single_bed"];
        $doubleBed = $row["double_bed"];
        $twoWindow = $row["two_window"];
        $luxury = $row["luxury"];
    }
}