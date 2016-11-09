/*
Author: Logan Barclay
File tables.sql

Some simple tables I have so far, need more info from the business to see
if more columns need to be added or removed from the tables.  Not sure
if I need a table for credit card information stuff yet.

*/
CREATE TABLE user (
	email VARCHAR(256) NOT NULL PRIMARY KEY,
	password VARCHAR(32) NOT NULL,
	access INTEGER(1)
);

DROP TABLE IF EXISTS bikes;
CREATE TABLE bikes (
	biketype VARCHAR(20) NOT NULL,
	bikesize VARCHAR(5) NOT NULL,
	brand VARCHAR(20) NOT NULL,
	serial VARCHAR(40) NOT NULL,
	color VARCHAR(10) NOT NULL,
);

DROP TABLE IF EXISTS boats;
CREATE TABLE boats (
	boattype VARCHAR(10) NOT NULL,
	boatsize INTEGER(3) NOT NULL,
	make VARCHAR(10) NOT NULL,
	hullnumber VARCHAR(20),
	trailernumber VARCHAR(10),
);

DROP TABLE IF EXISTS other;
CREATE TABLE other (
	rentalname VARCHAR(40) NOT NULL,
	attribute VARCHAR(40) NOT NULL,
);

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
	id INTEGER(256) NOT NULL PRIMARY KEY,
	firstname VARCHAR(40) NOT NULL,
	lastname VARCHAR(40) NOT NULL,
	phone INTEGER(15) NOT NULL,
	email VARCHAR(256) NOT NULL PRIMARY KEY,
	address VARCHAR(256),
	city VARCHAR(40) NOT NULL,
	state VARCHAR(2) NOT NULL,
	zip INTEGER(5) NOT NULL,
);

DROP TABLE IF EXISTS reservations;
CREATE TABLE reservations (
	id INTEGER(256) NOT NULL PRIMARY KEY,
	customer INTEGER(256) NOT NULL,
	item VARCHAR(40) NOT NULL,
	indate VARCHAR(40) NOT NULL,
	outdate VARCHAR(40) NOT NULL,
);

