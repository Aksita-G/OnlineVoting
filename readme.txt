1.XAMPP

2."TEXT EDITOR" NOTEPAD++ OR SUBLIME TEXT 3 / ETC.

3"voting management system"

4. Download the zip file/ download winrar

5. Extract the file and copy "voting management system" folder

6.Paste inside root directory/ where you install xammp local disk C: drive D: drive E: paste: (for xampp/htdocs, 

7. Open PHPMyAdmin (http://localhost/phpmyadmin)

8. Create a database with name votesystem

6. Import votesystem.sql file(given inside the zip package in SQL file folder)

7.Run the script http://localhost/voting management system

username  Nurhodelta
password  password

Brought to you by: www.CampCodes.com

CREATE TABLE positions (
  id int NOT NULL AUTO_INCREMENT,
  description varchar(50) NOT NULL,
  max_vote int NOT NULL,
  priority int NOT NULL,
primary key(id)
) ;

CREATE TABLE voters (
  id INT(11) NOT NULL AUTO_INCREMENT,
  voters_id VARCHAR(15) NOT NULL,
  password VARCHAR(60) NOT NULL,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  photo VARCHAR(150) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `platform` text NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL,
PRIMARY KEY(`id`)
);

ALTER TABLE positions AUTO_INCREMENT=8;
ALTER TABLE candidates AUTO_INCREMENT=18;
ALTER TABLE votes AUTO_INCREMENT=81;
ALTER TABLE voters AUTO_INCREMENT=2;

sudo apt update
sudo apt install php-pear
sudo pecl install gettext
sudo apt install php-pear php-dev
php -v
git clone https://github.com/Aksita-G/OnlineVoting-PHP
sudo apt install apache2 php libapache2-mod-php
cd /var/www/html/
sudo chown -R azureuser:azureuser /var/www/html
scp -r /home/azureuser/OnlineVoting-PHP azureuser@4.246.137.49:/var/www/html/
