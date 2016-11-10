CREATE user 'admin'@'localhost' IDENTIFIED BY 'root';
GRANT ALL PRIVILEGES ON webdev.* TO 'admin'@'localhost' WITH GRANT OPTION;

SELECT User FROM mysql.user WHERE User = 'admin';
SHOW GRANTS FOR 'admin'@'localhost';
