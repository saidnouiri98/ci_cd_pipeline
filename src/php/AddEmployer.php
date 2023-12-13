<?php
include 'connect.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $job_title = $_POST['job_title'];
    $salary = $_POST['salary'];
    $date = date("Y-m-d");

    $job_title = "Software Engineer";
    $depart = array("IT", "Marketing", "Sales", "Human Resources");
    $job = array("Software Engineer", "Marketing Specialist", "Sales Manager", "HR Coordinator");

    // Default department in case no match is found
    $department = "Unknown Department";

    if ($job_title == $job[0]) {
        $department = $depart[0];
    } elseif ($job_title == $job[1]) {
        $department = $depart[1];
    } elseif ($job_title == $job[2]) {
        $department = $depart[2];
    } elseif ($job_title == $job[3]) {
        $department = $depart[3];
    }

    // Validate form data (add more validation if needed)
    if (empty($first_name) || empty($last_name) || empty($job_title) || empty($salary)) {
        echo "Error: All fields are required.";
    } else {
        // Escape user inputs to prevent SQL injection
        $first_name = mysqli_real_escape_string($conn, $first_name);
        $last_name = mysqli_real_escape_string($conn, $last_name);
        $job_title = mysqli_real_escape_string($conn, $job_title);
        $salary = mysqli_real_escape_string($conn, $salary);

        // Your SQL query (excluding employee_id)
        $sql = "INSERT INTO employees (first_name, last_name, job_title, department, salary, hire_date) VALUES 
        ('$first_name', '$last_name', '$job_title', '$department', $salary, '$date')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            header("Location: EmployerTable.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
} else {
    echo "Error: Form not submitted.";
}
?>
