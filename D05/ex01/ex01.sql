create table ft_table(
  id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
  login VARCHAR(8) default 'toto'  NOT NULL,
  groupe ENUM('staff', 'student', 'other') NOT NULL,
  creation_date DATE NOT NULL
);
