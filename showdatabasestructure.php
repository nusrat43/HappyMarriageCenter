<?php
include 'config.php';

// SQL query to select all columns from the table
$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr>";

    // Fetch the column names dynamically
    $field_info = $result->fetch_fields();
    foreach ($field_info as $val) {
        echo "<th>" . $val->name . "</th>";
    }
    echo "</tr>";

    // Fetch the rows
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach($row as $data) {
            echo "<td>" . $data . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>