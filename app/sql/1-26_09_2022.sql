CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_user VARCHAR(250) NOT NULL,
    pswd VARCHAR(250) NOT NULL
)  ENGINE=INNODB;