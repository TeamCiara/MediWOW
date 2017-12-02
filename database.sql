create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);

ALTER TABLE users
ADD COLUMN role varchar(20) AFTER email;

ALTER TABLE users
ADD COLUMN username varchar(100) AFTER role;

ALTER  TABLE users
ADD COLUMN password varchar(100) AFTER username;


ALTER TABLE users
ADD COLUMN confirmcode VARCHAR(32);

ALTER TABLE users
ADD COLUMN phone_number VARCHAR( 16 ) NOT NULL;

INSERT INTO `users` (`name`, `age`, `email`, `role`, `username`, `password`, confirmcode, phone_number) VALUES ('Haymon Hareto', '20', 'haymon@yahoo.com', 'Admin', 'haymon', 'haymon', 'y', '12345');
INSERT INTO `users` (`name`, `age`, `email`, `role`, `username`, `password`, confirmcode, phone_number) VALUES ('Daymon Dadeto', '21', 'Daymon@yahoo.com', 'Admin', 'Daymon', 'Daymon', 'y', '12345');
INSERT INTO `users` (`name`, `age`, `email`, `role`, `username`, `password`, confirmcode, phone_number) VALUES ('Baymon Babeto', '22', 'Baymon@yahoo.com', 'Admin', 'Baymon', 'Baymon', 'y', '12345');


CREATE TABLE medicines(
  medicine_id int(11) NOT NULL auto_increment,
  medicine_name varchar(100) NOT NULL,
  medicine_description  varchar(100) NOT NULL,
  PRIMARY KEY  (medicine_id)
);

CREATE TABLE symptoms(
	symptom_id int(11) NOT NULL auto_increment,
	symptom_name varchar(100) NOT NULL,
	PRIMARY KEY  (symptom_id)
);

CREATE TABLE sickness(
	sickness_id int(11) NOT NULL auto_increment,
	sickness_name varchar(100) NOT NULL,
	symptom_id  int(11) NOT NULL,
	PRIMARY KEY  (sickness_id)
);

CREATE TABLE prescription(
	prescription_id int(11) NOT NULL auto_increment,
	symptom_id  int(11) NOT NULL,
	medicine_id int(11) NOT NULL,
	PRIMARY KEY  (prescription_id)
);


INSERT INTO `symptoms`(`symptom_name`) VALUES ('Sneezing');
INSERT INTO `symptoms`(`symptom_name`) VALUES ('Runny Nose');
INSERT INTO `medicines`(`medicine_name`, `medicine_description`) VALUES ('Neozep','Phenylephrine HCI Chlorphenamine Meleate Paracetamol');
INSERT INTO `prescription`(`symptom_id`, `medicine_id`) VALUES (1, 1);
INSERT INTO `prescription`(`symptom_id`, `medicine_id`) VALUES (2, 1);

