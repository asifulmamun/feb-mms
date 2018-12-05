<?php 
// temp sql table create

CREATE TABLE `nrbrms`.`nrb_feb_user_information` ( `wp_user_id` BIGINT(20) NOT NULL , `passport_number` VARCHAR(50) NOT NULL , PRIMARY KEY (`wp_user_id`), UNIQUE (`passport_number`)) ENGINE = InnoDB; 




 ?>