<?php
// Include the database connection
include 'connect.php';

// SQL query to retrieve data from the "employees" table
$sql = "SELECT employee_id, first_name, last_name, job_title, department, salary, hire_date FROM employees";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Hire Date</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["employee_id"]."</td>
                <td>".$row["first_name"]."</td>
                <td>".$row["last_name"]."</td>
                <td>".$row["job_title"]."</td>
                <td>".$row["department"]."</td>
                <td>".$row["salary"]."</td>
                <td>".$row["hire_date"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
