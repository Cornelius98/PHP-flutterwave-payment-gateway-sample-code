CREATE TABLE `order`(
    `o_id` int(255) NOT NULL AUTO_INCREMENT,
    `c_id` varchar(255) NOT NULL,
    `u_id` varchar(255) NOT NULL,
    `o_d` timestamp NOT NULL DEFAULT current_timestamp(),
    `o_m` int(5) NOT NULL DEFAULT '0',
    `o_y` int(5) NOT NULL DEFAULT '0',
    `o_time` int(5) NOT NULL DEFAULT '0',
    `o_date` int(5) NOT NULL DEFAULT '0',
    PRIMARY KEY(`o_id`);
);
CREATE TABLE `order_items`(
    `oi_id` int(255) NOT NULL AUTO_INCREMENT,
    `o_id` varchar(255) NOT NULL,
    `oi_d` timestamp NOT NULL DEFAULT current_timestamp(),
    `oi_m` int(5) NOT NULL DEFAULT '0',
    `oi_y` int(5) NOT NULL DEFAULT '0',
    `oi_time` int(5) NOT NULL DEFAULT '0',
    `oi_date` int(5) NOT NULL DEFAULT '0',
    PRIMARY KEY(`oi_id`);
);
CREATE TABLE `order_billing` (
        `ob_id` int(255) NOT NULL AUTO_INCREMENT,
        `status` varchar(255) NOT NULL,
        `tx_id` varchar(255) NOT NULL,
        `tx_ref` varchar(255) NOT NULL,
        `flw_ref` varchar(255) NOT NULL,
        `amount_due` varchar(255) NOT NULL,
        `amount_charged` varchar(255) NOT NULL,
        `amount_flw` varchar(255) NOT NULL,
        `currency` varchar(255) NOT NULL,
        `payment_type` varchar(255) NOT NULL,
        `flw_data` JSON NOT NULL,
        `o_id` int(255) NOT NULL,
        `ob_d` timestamp NOT NULL DEFAULT current_timestamp(),
        `ob_m` int(5) NOT NULL DEFAULT '0',
        `ob_y` int(5) NOT NULL DEFAULT '0',
        `ob_time` int(5) NOT NULL DEFAULT '0',
        `ob_date` int(5) NOT NULL DEFAULT '0',
        PRIMARY KEY(`ob_id`),
        CONSTRAINT `orderFKonOrderBillings` FOREIGN KEY (`ob_id`) REFERENCES `order` (`o_id`) 
        ON UPDATE CASCADE
);