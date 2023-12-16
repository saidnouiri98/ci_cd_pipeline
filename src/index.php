<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Add Employer</title>
</head>
<body>
<ul>
  <li><a class="active" href="index.php">Add Employer</a></li>
  <li><a href="./php/EmployerTable.php">Employer Table</a></li>
  <!--<li><a href="#contact">Contact</a></li>-->
  <!--<li><a href="#about">About</a></li>-->
</ul>

<form action="/php/AddEmployer.php" method="post">
    <label for="first_name">First name</label>
    <input type="text" id="first_name" name="first_name" required>
    
    <label for="last_name">Last name</label>
    <input type="text" id="last_name" name="last_name" required>

    <label for="job_title">Job title</label>
    <select name="job_title" id="job_title" required>
        <option value="" selected>Job title</option>
        <option value="Software Engineer">Software Engineer</option>
        <option value="Marketing Specialist">Marketing Specialist</option>
        <option value="Sales Manager">Sales Manager</option>
        <option value="HR Coordinator">HR Coordinator</option>
    </select>

    <label for="salary">Salary</label>
    <input type="number" id="salary" name="salary" required>

    <input type="submit" value="Add Employer"><input type="reset" value="Cancel">
</form>
<h1>This code updated automatacly</h1>
<h1>This code updated Second</h1>
<h1>This code updated Second</h1>
</body>
</html>