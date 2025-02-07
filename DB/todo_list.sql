DROP DATABASE IF EXISTS todo_list;
CREATE DATABASE todo_list;
USE todo_list;

DROP TABLE IF EXISTS tasks;
CREATE TABLE tasks (
	id INT AUTO_INCREMENT,
    title VARCHAR(255),
    description TEXT,
    completed TINYINT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT pk_tasks PRIMARY KEY (id)
)