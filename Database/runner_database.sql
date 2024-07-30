-- create_runner_database.sql

-- Create a new database named 'runner'
CREATE DATABASE runner;

-- Optionally, create a table inside the 'runner' database
USE runner;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
