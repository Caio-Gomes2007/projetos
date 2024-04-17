CREATE DATABASE gerenciadaor_tarefas;
USE gerenciadaor_tarefas;

CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE Tasks (
    task_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    task_description TEXT,
    due_date DATE,
    prioridade ENUM('Low', 'Medium', 'High'),
    status ENUM('Pending', 'Completed'),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);
