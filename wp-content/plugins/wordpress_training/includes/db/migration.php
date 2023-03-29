<?php
require_once ABSPATH.'wp-admin/includes/upgrade.php';
global $wpdb;

$sql = "
CREATE TABLE `wp_orders` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`created` DATE NULL DEFAULT NULL,
	`total` DOUBLE NULL DEFAULT NULL,
	`status` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`pay_method` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`customer_name` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`customer_phone` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`customer_email` VARCHAR(25) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`note` TEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`deleted` TINYINT(3) NULL DEFAULT '0',
	PRIMARY KEY (`id`) USING BTREE
)".$wpdb->get_charset_collate()."
;
";

dbDelta($sql);



$sql2 = "
CREATE TABLE `wp_order_detail` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`price` DOUBLE NULL DEFAULT NULL,
	`quantity` INT(10) NULL DEFAULT NULL,
	`product_id` INT(10) NULL DEFAULT NULL,
	`order_id` INT(10) NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE
)".$wpdb->get_charset_collate()."
;
";

dbDelta($sql2);