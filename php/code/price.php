<?php
include './../server.php';

$sql = "select vip, general, per_day, single_bed, double_bed from price;";
$result = $conn->query($sql);

$vip = 0;
$general = 0;
$perDay = 0;
$singleBed = 0;
$doubleBed = 0;

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $vip = $row["vip"];
        $general = $row["general"];
        $perDay = $row["per_day"];
        $singleBed = $row["single_bed"];
        $doubleBed = $row["double_bed"];
    }
}
