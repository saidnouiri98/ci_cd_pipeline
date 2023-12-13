-- init.sql

-- Create the "employer" database
CREATE DATABASE IF NOT EXISTS employer;

-- Use the "employer" database
USE employer;

-- Create the "employees" table
CREATE TABLE IF NOT EXISTS employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    salary DECIMAL(10, 2),
    hire_date DATE,
    PRIMARY KEY (id)
);
