CREATE TABLE tasks (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    status INT UNSIGNED DEFAULT 0,
    title VARCHAR(50),
    priority INT UNSIGNED DEFAULT 5,
    completed DATETIME DEFAULT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);
ALTER TABLE tasks ENGINE = INNODB