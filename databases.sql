CREATE TABLE user (
	email VARCHAR(256) NOT NULL PRIMARY KEY,
	password VARCHAR(64) NOT NULL,
	access INTEGER(1)
);

