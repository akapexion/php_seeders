<?php
$conn = mysqli_connect("localhost", "root", "");

$seeded = mysqli_query($conn, "SHOW DATABASES LIKE 'seeder_db'");
$count_dbs = mysqli_num_rows($seeded);

if($count_dbs == 0){

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS seeder_db");

mysqli_select_db($conn, "seeder_db");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS departments (
    DepartmentID INT PRIMARY KEY,
    DepartmentName VARCHAR(50)
)");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS employees (
    EmployeeID INT PRIMARY KEY,
    EmployeeName VARCHAR(50),
    DepartmentID INT,
    Salary DECIMAL(10,2)
)");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS projects (
    ProjectID INT PRIMARY KEY,
    ProName VARCHAR(200),
    DepartmentID INT
)");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    user_email VARCHAR(50) NOT NULL UNIQUE,
    user_password VARCHAR(50) NOT NULL
)");

mysqli_query($conn, "INSERT IGNORE INTO departments VALUES
(1, 'Human Resources'),
(2, 'Finance'),
(3, 'IT'),
(4, 'Marketing'),
(5, 'Sales')");

mysqli_query($conn, "INSERT IGNORE INTO employees VALUES
(1, 'Alice', 1, 177.00),
(2, 'Bob', 2, 177.00),
(3, 'Charlie', 3, 177.00),
(4, 'Diana', 4, 177.00),
(5, 'Eve', 5, 177.00),
(6, 'Frank', 3, 177.00),
(7, 'Grace', 2, 177.00),
(8, 'Hank', 1, 177.00),
(9, 'Ivy', 4, 177.00),
(10, 'Jack', 5, 177.00)");

mysqli_query($conn, "INSERT IGNORE INTO projects VALUES
(1, 'Website Revamp', 3),
(2, 'Annual Audit', 2),
(4, 'Marketing Campaign', 4)");

mysqli_query($conn, "INSERT IGNORE INTO users
(user_id, user_name, user_email, user_password)
VALUES
(7, 'Administrator', 'admin@seeder.com', '123')");

echo "<script>
    location.assign('index.php');
</script>";
}
?>