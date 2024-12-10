
/* --------------Script de la creacion de la base de datos 'hotel_bitsu_db' -----------------------*/

CREATE DATABASE `hotel_bitsu_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

/*------------------Creacion de las tablas 'users', 'reservations' y 'rooms'------------------*/

USE hotel_bitsu_db;
CREATE TABLE IF NOT EXISTS `users` (
    `user_id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR (20) NOT NULL,
    `last_name` VARCHAR(35) NOT NULL,
    `user_name` VARCHAR(15) NOT NULL,
    `phone` VARCHAR(15) NOT NULL,
    `email` VARCHAR(40) NOT NULL,
    `password` VARCHAR(80) NOT NULL,
    `identificacion` VARCHAR(30) NOT NULL UNIQUE,
    `gender` VARCHAR(12) NOT NULL,
    `isAdmin` TINYINT(1) NOT NULL
);
CREATE TABLE IF NOT EXISTS `reservations` (
    `reservation_id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT UNSIGNED NOT NULL,
    `check_in_date` DATE NOT NULL,
    `check_out_date` DATE NOT NULL,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`)
); 
CREATE TABLE IF NOT EXISTS `rooms` (
    `room_id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `reservation_id` INT UNSIGNED NOT NULL,
    `room_type` VARCHAR(30) NOT NULL,
    `capacity` INT NOT NULL,
    `price` INT NOT NULL,
    `floor` INT NOT NULL,
    `room_number` INT NOT NULL,
    `mayordomo` VARCHAR(40) NOT NULL,
    FOREIGN KEY (`reservation_id`) REFERENCES `reservations`(`reservation_id`)

);

