<?php
if (isset($_POST['searchname'])) { //check if form was submitted
    $input = $_POST['inputtext']; //get input text
    $message = "<p>You searched for: " . $input . "</p>";
}
?>

<?php
include('Xconnection.php');
session_start();

if (isset($message)) {
    echo $message . "<br><br>";

    // Creating the sql command
    $sql = "SELECT * FROM homeless WHERE icnumber LIKE '%$input%'";
    if ($result = $connection->query($sql)) {
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Stud Id</th>";
            echo "<th>Stud Name</th>";
            echo "<th>Email</th>";
            echo "<th>Date of Birth</th>";
            echo "</tr>";
            while ($row = $result->fetch_array()) {
                echo "<tr>";
                echo "<td>" . $row['student_id'] . "</td>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['date_of_birth'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            $result->free();
        } else {
            echo "No records matching your query is found.";
        }
    }
    // Close connection
    $connection->close();
}
?>