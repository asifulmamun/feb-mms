<?php 
// temp sql table create


// create table and column for user information
CREATE TABLE `nrbrms`.`nrb_feb_user_information` ( `ID` INT(25) NOT NULL AUTO_INCREMENT , `wp_user_id` INT(25) NOT NULL , `username` VARCHAR(150) NOT NULL , `name` VARCHAR(200) NOT NULL , `fathers_name` VARCHAR(200) NOT NULL , `mothers_name` VARCHAR(200) NOT NULL , `email` VARCHAR(50) NULL , `mobile` VARCHAR(50) NOT NULL , `date_of_birth` DATE NULL , `gender` VARCHAR(20) NOT NULL , `religion` VARCHAR(50) NOT NULL , `region` VARCHAR(50) NOT NULL , `country` VARCHAR(50) NOT NULL , `nearest_bangladeshi_mission` VARCHAR(200) NOT NULL , `pr_flat_house_no` VARCHAR(200) NOT NULL , `pr_road_no` VARCHAR(200) NOT NULL , `pr_city_town` VARCHAR(200) NOT NULL , `pr_zip_post` VARCHAR(200) NOT NULL , `pe_flat_house_no` VARCHAR(200) NOT NULL , `pe_road_no` VARCHAR(200) NOT NULL , `pe_city_town` VARCHAR(200) NOT NULL , `pe_zip_post` VARCHAR(200) NOT NULL , `permission_edit_profile` INT(2) NOT NULL DEFAULT '1' , `reg_fee` INT(2) NOT NULL DEFAULT '0' , `certificate_fee` INT(2) NOT NULL DEFAULT '0' , `passport_number` VARCHAR(200) NULL , `passport_issue` DATE NULL , `passport_expire` DATE NULL , `national_or_smart_id` VARCHAR(100) NULL , PRIMARY KEY (`ID`, `wp_user_id`), UNIQUE (`username`), UNIQUE (`passport_number`), UNIQUE (`national_or_smart_id`), UNIQUE (`email`)) ENGINE = InnoDB; 


// live server nrb
CREATE TABLE `nrbright_nrbrm`.`nrbrm_feb_user_information` ( `ID` INT(25) NOT NULL AUTO_INCREMENT , `wp_user_id` INT(25) NOT NULL , `username` VARCHAR(150) NULL , `name` VARCHAR(200) NULL , `fathers_name` VARCHAR(200) NULL , `mothers_name` VARCHAR(200) NULL , `email` VARCHAR(50) NULL , `mobile` VARCHAR(50) NULL , `date_of_birth` DATE NULL , `gender` VARCHAR(20) NULL , `religion` VARCHAR(50) NULL , `region` VARCHAR(50) NULL , `country` VARCHAR(50) NULL , `nearest_bangladeshi_mission` VARCHAR(200) NULL , `pr_flat_house_no` VARCHAR(200) NULL , `pr_road_no` VARCHAR(200) NULL , `pr_city_town` VARCHAR(200) NULL , `pr_zip_post` VARCHAR(200) NULL , `pe_flat_house_no` VARCHAR(200) NULL , `pe_road_no` VARCHAR(200) NULL , `pe_city_town` VARCHAR(200) NULL , `pe_zip_post` VARCHAR(200) NULL , `permission_edit_profile` INT(2) NULL DEFAULT '1' , `reg_fee` INT(2) NULL DEFAULT '0' , `certificate_fee` INT(2) NULL DEFAULT '0' , `passport_number` VARCHAR(200) NULL , `passport_issue` DATE NULL , `passport_expire` DATE NULL , `national_or_smart_id` VARCHAR(100) NULL , PRIMARY KEY (`ID`, `wp_user_id`), UNIQUE (`username`), UNIQUE (`passport_number`), UNIQUE (`national_or_smart_id`), UNIQUE (`email`)) ENGINE = InnoDB;





?>