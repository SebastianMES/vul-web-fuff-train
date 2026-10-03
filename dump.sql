-- Fictional SQL dump for file discovery practice.
CREATE DATABASE IF NOT EXISTS labcorp_training_db;
USE labcorp_training_db;

CREATE TABLE users (
  id INT PRIMARY KEY,
  username VARCHAR(64),
  password VARCHAR(64)
);

INSERT INTO users VALUES
(1, 'admin', 'Password123!'),
(2, 'webadmin', 'LabAdmin!2026');
