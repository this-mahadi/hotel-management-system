<?php
include './../server.php';

$sql = "SELECT general, senior, worker, waiter FROM salary;";
$result = $conn->query($sql);

$general = 0;
$senior = 0;
$worker = 0;
$waiter = 0;

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $general = $row["general"];
        $senior = $row["senior"];
        $worker = $row["worker"];
        $waiter = $row["waiter"];
    }
}
