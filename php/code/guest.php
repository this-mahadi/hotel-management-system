<?php
include './../server.php';

$sql = "select name, category, phone from guest;";
$result = mysqli_query($conn, $sql);

$names = 0;
$category = 0;
$phones = 0;

if ($result->num_rows > 0) {
    echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Phone</th>
                </tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["category"] . "</td><td> " . $row["phone"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
