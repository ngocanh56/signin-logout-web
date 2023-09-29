CREATE DATABASE accountManagement;

USE accountManagement;

CREATE TABLE accounts (
    id INT NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    phonenumber VARCHAR(20) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE(user_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO accounts(user_name, password, name, email, phonenumber)
VALUES ('admin', 'admin', 'Bùi Ngọc Ánh', 'ngocanhthlfb@gmail.com', '0942432993');

-----------------------  RE-INDEX id ----------------------------------
SET  @num := 0;
UPDATE accounts SET id = @num := (@num+1);
