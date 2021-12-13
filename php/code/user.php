<?php
include './../server.php';

$sql = "SELECT id, firstname, lastname, age, email, address, phone, room FROM users;";
$result = mysqli_query($conn, $sql);

$names = 0;
$category = 0;
$phones = 0;

if ($result->num_rows > 0) {
    echo "<table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Room</th>
                </tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td> " . $row["lastname"] .
            "</td><td>" . $row["age"] . "</td><td> " . $row["email"] . "</td><td>" . $row["address"] .
             "</td><td> " . $row["phone"]. "</td><td>" . $row["room"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
