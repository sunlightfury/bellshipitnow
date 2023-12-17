-- --------------------------------------------------------------------------------
-- 
-- @version: ayibobo.sql May 11, 2019 15:19 gewa
-- @Deprixa Pro
-- @author jaomweb.info.
-- @copyright 2019
-- 
-- --------------------------------------------------------------------------------
-- Host: localhost
-- Database: ayibobo
-- Time: May 11, 2019-15:19
-- MySQL version: 5.6.43-cll-lve
-- PHP version: 5.6.40
-- --------------------------------------------------------------------------------

#
# Database: `ayibobo`
#


-- --------------------------------------------------
# -- Table structure for table `add_consolidate`
-- --------------------------------------------------
DROP TABLE IF EXISTS `add_consolidate`;
CREATE TABLE `add_consolidate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcon` int(11) NOT NULL,
  `con_tmp` int(11) NOT NULL,
  `order_inv` varchar(60) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `r_qnty` varchar(128) DEFAULT NULL,
  `r_weight` varchar(128) DEFAULT NULL,
  `v_weight` varchar(60) DEFAULT NULL,
  `r_description` text,
  `r_costtotal` double NOT NULL,
  `created` date NOT NULL,
  `r_hour` time NOT NULL,
  `act_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `add_consolidate`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `add_container`
-- --------------------------------------------------
DROP TABLE IF EXISTS `add_container`;
CREATE TABLE `add_container` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcon` int(11) NOT NULL,
  `letter_or` varchar(6) DEFAULT NULL,
  `tracking` varchar(120) DEFAULT NULL,
  `order_inv` varchar(60) DEFAULT NULL,
  `username` varchar(60) NOT NULL,
  `r_name` varchar(255) DEFAULT NULL,
  `r_email` varchar(255) DEFAULT NULL,
  `r_address` varchar(255) DEFAULT NULL,
  `r_phone` varchar(255) DEFAULT NULL,
  `r_dest` varchar(255) DEFAULT NULL,
  `r_city` varchar(255) DEFAULT NULL,
  `r_postal` varchar(255) DEFAULT NULL,
  `origin_port` varchar(120) DEFAULT NULL,
  `destination_port` varchar(120) DEFAULT NULL,
  `origin_off` varchar(255) DEFAULT NULL,
  `package` varchar(255) NOT NULL,
  `r_tax` varchar(128) DEFAULT NULL,
  `total_tax` varchar(60) DEFAULT NULL,
  `r_insurance` varchar(128) DEFAULT NULL,
  `total_insurance` varchar(60) DEFAULT NULL,
  `ship_mode` varchar(128) DEFAULT NULL,
  `n_weight` varchar(128) DEFAULT NULL,
  `g_weight` varchar(60) DEFAULT NULL,
  `s_description` text,
  `length` varchar(128) DEFAULT NULL,
  `width` varchar(128) DEFAULT NULL,
  `height` varchar(128) DEFAULT NULL,
  `incoterms` varchar(128) DEFAULT NULL,
  `pay_mode` varchar(40) DEFAULT NULL,
  `r_curren` varchar(128) DEFAULT NULL,
  `r_costtotal` double NOT NULL,
  `payment_status` tinyint(4) NOT NULL,
  `s_week` varchar(6) DEFAULT NULL,
  `expiration_date` varchar(20) NOT NULL,
  `deli_time` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `r_hour` time NOT NULL,
  `courier` varchar(255) NOT NULL,
  `status_courier` varchar(128) DEFAULT NULL,
  `act_status` tinyint(1) NOT NULL,
  `level` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `add_container`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `add_courier`
-- --------------------------------------------------
DROP TABLE IF EXISTS `add_courier`;
CREATE TABLE `add_courier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letter_or` varchar(6) DEFAULT NULL,
  `tracking` varchar(120) DEFAULT NULL,
  `order_inv` varchar(60) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(60) NOT NULL,
  `r_name` varchar(255) DEFAULT NULL,
  `r_email` varchar(255) DEFAULT NULL,
  `r_address` varchar(255) DEFAULT NULL,
  `r_phone` varchar(255) DEFAULT NULL,
  `rc_phone` varchar(120) DEFAULT NULL,
  `r_dest` varchar(255) DEFAULT NULL,
  `r_city` varchar(255) DEFAULT NULL,
  `r_postal` varchar(255) DEFAULT NULL,
  `origin_off` varchar(255) DEFAULT NULL,
  `code_offnew` varchar(120) DEFAULT NULL,
  `package` varchar(255) NOT NULL,
  `r_tax` varchar(128) DEFAULT NULL,
  `total_tax` varchar(60) DEFAULT NULL,
  `r_insurance` varchar(128) DEFAULT NULL,
  `total_insurance` varchar(60) DEFAULT NULL,
  `itemcat` varchar(255) NOT NULL,
  `r_qnty` varchar(128) DEFAULT NULL,
  `r_weight` varchar(128) DEFAULT NULL,
  `v_weight` varchar(60) DEFAULT NULL,
  `r_description` text,
  `length` varchar(128) DEFAULT NULL,
  `width` varchar(128) DEFAULT NULL,
  `height` varchar(128) DEFAULT NULL,
  `r_custom` varchar(128) DEFAULT NULL,
  `pay_mode` varchar(40) DEFAULT NULL,
  `r_curren` varchar(128) DEFAULT NULL,
  `r_costtotal` double NOT NULL,
  `payment_status` tinyint(4) NOT NULL,
  `deli_time` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `r_hour` time NOT NULL,
  `courier` varchar(255) NOT NULL,
  `service_options` varchar(120) DEFAULT NULL,
  `collection_courier` varchar(255) DEFAULT NULL,
  `c_driver` varchar(120) DEFAULT NULL,
  `status_courier` varchar(128) DEFAULT NULL,
  `act_status` tinyint(1) NOT NULL,
  `reasons` text,
  `deliver_date` varchar(40) DEFAULT NULL,
  `delivery_hour` varchar(40) DEFAULT NULL,
  `person_receives` varchar(120) DEFAULT NULL,
  `name_employee` varchar(120) DEFAULT NULL,
  `level` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `add_courier`
-- --------------------------------------------------

INSERT INTO `add_courier` (`id`, `letter_or`, `tracking`, `order_inv`, `s_name`, `address`, `phone`, `country`, `city`, `postal`, `email`, `username`, `r_name`, `r_email`, `r_address`, `r_phone`, `rc_phone`, `r_dest`, `r_city`, `r_postal`, `origin_off`, `code_offnew`, `package`, `r_tax`, `total_tax`, `r_insurance`, `total_insurance`, `itemcat`, `r_qnty`, `r_weight`, `v_weight`, `r_description`, `length`, `width`, `height`, `r_custom`, `pay_mode`, `r_curren`, `r_costtotal`, `payment_status`, `deli_time`, `created`, `r_hour`, `courier`, `service_options`, `collection_courier`, `c_driver`, `status_courier`, `act_status`, `reasons`, `deliver_date`, `delivery_hour`, `person_receives`, `name_employee`, `level`) VALUES ('1', 'AWB', '00000001', 'AWB00000001', 'Rouzier Charles', '158 Bartlett Street Apt#1', '18134039886', '', '', '', 'rouziercharles@yahoo.com', 'rouzier', 'Love', 'love1@gmail.com', '1234 Hot', '813', '4039986', 'United Kingdom', 'England', '72046', '', '', 'Parcel', '8', '4.644', '5', '5', 'Health &amp; Beauty', '11', '15.00', '0.216', 'Beauty Supplies', '12', '10', '9', '100', 'Credit Card', 'USD', '58.05', '0', '3 - 7 working days', '2019-04-23', '12:45:24', 'USPS - Parcel Select', 'Priority Mail', '', '', 'Pending', '0', '', '', '', '', '', '');


-- --------------------------------------------------
# -- Table structure for table `c_tracking`
-- --------------------------------------------------
DROP TABLE IF EXISTS `c_tracking`;
CREATE TABLE `c_tracking` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `n_order` varchar(255) DEFAULT NULL,
  `order_track` varchar(120) DEFAULT NULL,
  `name_off` varchar(250) DEFAULT NULL,
  `role_user` varchar(250) DEFAULT NULL,
  `created_courier` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `c_tracking`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `category`
-- --------------------------------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name_item` varchar(120) DEFAULT NULL,
  `detail_item` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `category`
-- --------------------------------------------------

INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('1', 'Accessory (no-battery)', 'Accessory (no-battery)');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('2', 'Accessory (with battery)', 'Accessory (with battery)');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('3', 'Audio Video', 'Audio Video');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('4', 'Bags & Luggages', 'Bags & Luggages');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('5', 'Books & Collectibles', 'Books & Collectibles');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('6', 'Cameras', 'Cameras');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('7', 'Computers & Laptops', 'Computers & Laptops');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('8', 'Documents', 'Documents');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('9', 'Dry Food & Supplements', 'Dry Food & Supplements');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('10', 'Fashion', 'Fashion');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('11', 'Gaming', 'Gaming');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('12', 'Health & Beauty', 'Health & Beauty');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('13', 'Home Appliances', 'Home Appliances');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('14', 'Home Decor', 'Home Decor');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('15', 'Jewelry', 'Jewelry');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('16', 'Mobile Phones', 'Mobile Phones');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('17', 'Pet Accessory', 'Pet Accessory');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('18', 'Sauce', 'Sauce');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('19', 'Sport & Leisure', 'Sport & Leisure');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('20', 'Tablets', 'Tablets');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('21', 'Toys', 'Toys');
INSERT INTO `category` (`id`, `name_item`, `detail_item`) VALUES ('22', 'Watches', 'Watches');


-- --------------------------------------------------
# -- Table structure for table `cons_products`
-- --------------------------------------------------
DROP TABLE IF EXISTS `cons_products`;
CREATE TABLE `cons_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcon` int(11) NOT NULL,
  `con_tmp` int(11) NOT NULL,
  `trackings` varchar(120) DEFAULT NULL,
  `order_invs` varchar(60) DEFAULT NULL,
  `order_cons` varchar(60) NOT NULL,
  `s_names` varchar(255) NOT NULL,
  `r_qntys` varchar(128) DEFAULT NULL,
  `r_weights` varchar(128) DEFAULT NULL,
  `v_weights` varchar(60) DEFAULT NULL,
  `r_descriptions` text,
  `r_costtotals` double NOT NULL,
  `createds` date NOT NULL,
  `r_hours` time NOT NULL,
  `levels` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `cons_products`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `cons_tmp`
-- --------------------------------------------------
DROP TABLE IF EXISTS `cons_tmp`;
CREATE TABLE `cons_tmp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcon` int(11) NOT NULL,
  `con_tmp` int(11) NOT NULL,
  `trackings` varchar(120) DEFAULT NULL,
  `order_invs` varchar(60) DEFAULT NULL,
  `order_cons` varchar(60) DEFAULT NULL,
  `s_names` varchar(255) DEFAULT NULL,
  `r_qntys` varchar(128) DEFAULT NULL,
  `r_weights` varchar(128) DEFAULT NULL,
  `v_weights` varchar(60) DEFAULT NULL,
  `r_descriptions` text,
  `r_costtotals` double NOT NULL,
  `createds` date NOT NULL,
  `r_hours` time NOT NULL,
  `levels` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `cons_tmp`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `consolidate`
-- --------------------------------------------------
DROP TABLE IF EXISTS `consolidate`;
CREATE TABLE `consolidate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcon` int(11) NOT NULL,
  `letter_or` varchar(6) DEFAULT NULL,
  `tracking` varchar(120) DEFAULT NULL,
  `order_inv` varchar(60) DEFAULT NULL,
  `order_cons` varchar(60) DEFAULT NULL,
  `seals` varchar(60) DEFAULT NULL,
  `username` varchar(60) NOT NULL,
  `r_name` varchar(255) DEFAULT NULL,
  `r_email` varchar(255) DEFAULT NULL,
  `r_address` varchar(255) DEFAULT NULL,
  `r_phone` varchar(255) DEFAULT NULL,
  `r_dest` varchar(255) DEFAULT NULL,
  `c_address` varchar(255) DEFAULT NULL,
  `r_declarate` varchar(60) DEFAULT NULL,
  `r_qnty` varchar(60) DEFAULT NULL,
  `r_weight` varchar(60) DEFAULT NULL,
  `code_off` varchar(128) DEFAULT NULL,
  `code_offnew` varchar(120) DEFAULT NULL,
  `r_curren` varchar(128) DEFAULT NULL,
  `c_add_pound` varchar(60) DEFAULT NULL,
  `reexpedition` varchar(60) DEFAULT NULL,
  `r_costtotal` double NOT NULL,
  `pay_mode` varchar(60) NOT NULL,
  `payment_status` tinyint(4) NOT NULL,
  `deli_time` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `r_hour` time NOT NULL,
  `courier` varchar(255) NOT NULL,
  `service_options` varchar(120) DEFAULT NULL,
  `c_driver` varchar(255) DEFAULT NULL,
  `status_courier` varchar(128) DEFAULT NULL,
  `act_status` tinyint(1) NOT NULL,
  `comments` text,
  `deliver_date` varchar(40) DEFAULT NULL,
  `delivery_hour` varchar(40) DEFAULT NULL,
  `person_receives` varchar(120) DEFAULT NULL,
  `name_employee` varchar(120) DEFAULT NULL,
  `level` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `consolidate`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `courier_com`
-- --------------------------------------------------
DROP TABLE IF EXISTS `courier_com`;
CREATE TABLE `courier_com` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_com` varchar(100) DEFAULT NULL,
  `address_cou` varchar(120) DEFAULT NULL,
  `phone_cou` varchar(20) DEFAULT NULL,
  `country_cou` varchar(100) DEFAULT NULL,
  `city_cou` varchar(100) DEFAULT NULL,
  `postal_cou` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `courier_com`
-- --------------------------------------------------

INSERT INTO `courier_com` (`id`, `name_com`, `address_cou`, `phone_cou`, `country_cou`, `city_cou`, `postal_cou`) VALUES ('83', 'USPS - Priority', 'WASHINGTON DC', '+1-800-275-8777', 'U.S', 'WASHINGTON DC', '05781');
INSERT INTO `courier_com` (`id`, `name_com`, `address_cou`, `phone_cou`, `country_cou`, `city_cou`, `postal_cou`) VALUES ('78', 'FEDEX', 'Renaissance Center 1715 Aaron Brenner Drive Suite 600 Memphis,', '1.866.393.4585', 'UNITED STATES', 'Memphis', '38120');
INSERT INTO `courier_com` (`id`, `name_com`, `address_cou`, `phone_cou`, `country_cou`, `city_cou`, `postal_cou`) VALUES ('85', 'DHL', 'WASHINGTON DC', '1-800-225-5345', 'UNITED STATES', 'WASHINGTON DC', '38120');
INSERT INTO `courier_com` (`id`, `name_com`, `address_cou`, `phone_cou`, `country_cou`, `city_cou`, `postal_cou`) VALUES ('86', 'TNT', 'WASHINGTON DC', '800-003-3339', 'UNITED STATES', 'WASHINGTON DC', '38120');
INSERT INTO `courier_com` (`id`, `name_com`, `address_cou`, `phone_cou`, `country_cou`, `city_cou`, `postal_cou`) VALUES ('87', 'UPS', 'WASHINGTON DC', '01 8000 120 920', 'UNITED STATES', 'MIAMI', '38120');
INSERT INTO `courier_com` (`id`, `name_com`, `address_cou`, `phone_cou`, `country_cou`, `city_cou`, `postal_cou`) VALUES ('88', 'ROYAL MAIL', '100 Victoria Embankment London EC4Y 0HQ', '034758598', 'REINO UNIDO', 'LONDRES', '38120');


-- --------------------------------------------------
# -- Table structure for table `courier_track`
-- --------------------------------------------------
DROP TABLE IF EXISTS `courier_track`;
CREATE TABLE `courier_track` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `t_id` varchar(20) DEFAULT NULL,
  `order_track` varchar(100) DEFAULT NULL,
  `t_dest` varchar(255) DEFAULT NULL,
  `t_city` varchar(250) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `rc_phone` varchar(60) DEFAULT NULL,
  `t_date` varchar(100) DEFAULT NULL,
  `t_hour` varchar(120) DEFAULT NULL,
  `status_courier` varchar(120) DEFAULT NULL,
  `code_offnew` varchar(120) DEFAULT NULL,
  `t_level` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `courier_track`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `detail_container`
-- --------------------------------------------------
DROP TABLE IF EXISTS `detail_container`;
CREATE TABLE `detail_container` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcon` int(20) NOT NULL,
  `order_inv` varchar(60) NOT NULL,
  `detail_container` text NOT NULL,
  `detail_weight` varchar(255) NOT NULL,
  `detail_qty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `tprice` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `act_status` varchar(6) NOT NULL,
  `level` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `detail_container`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `detail_container_tmp`
-- --------------------------------------------------
DROP TABLE IF EXISTS `detail_container_tmp`;
CREATE TABLE `detail_container_tmp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcon` int(20) NOT NULL,
  `order_inv` varchar(60) NOT NULL,
  `detail_container` text NOT NULL,
  `detail_weight` varchar(255) NOT NULL,
  `detail_qty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `tprice` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `act_status` varchar(6) NOT NULL,
  `level` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `detail_container_tmp`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `email_templates`
-- --------------------------------------------------
DROP TABLE IF EXISTS `email_templates`;
CREATE TABLE `email_templates` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `help` text,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `email_templates`
-- --------------------------------------------------

INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('1', 'Registration Email', 'Please verify your email', 'This template is used to send Registration Verification Email, when Configuration->Registration Verification is set to YES', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHi!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:5px 0 0; font-size: 12px; font-weight:400;word-break: break-word;color:#333;line-height: 22px; position: relative; top: 10px;\'>\r\n\t\t\t\t\t\t\t[NAME]! Thanks for registering.\r\n\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tYou&#039;re now a member of [SITE_NAME].\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tHere are your login details. Please keep them in a safe place:\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\tUsername: <b>[USERNAME]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tPassword: <b>[PASSWORD]</b>\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t\tThe administrator of this site has requested all new accounts\r\n\t\t\t\t\t\t\t\t\tto be activated by the users who created them thus your account\r\n\t\t\t\t\t\t\t\t\tis currently inactive. To activate your account,\r\n\t\t\t\t\t\t\t\t\tplease visit the link below and enter the following:\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t<span style=\'color:#846add;\'>Activate Information:</span><br><br>\r\n\t\t\t\t\t\t\t\t<span>\r\n\t\t\t\t\t\t\t\tToken: [TOKEN]\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tEmail: [EMAIL]\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]/activate.php&quot;&gt;Click here to activate tour account&lt;/a&gt;\r\n\t\t\t\t\t\t\t\t</span>\r\n\t\t\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t\t\tThanks,<br>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,<br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/em&gt;&lt;/td&gt;\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('2', 'Forgot Password Email', 'Password Reset', 'This template is used for retrieving lost user password', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHi!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:5px 0 0; font-size: 12px; font-weight:400;word-break: break-word;color:#333;line-height: 22px; position: relative; top: 10px;\'>\r\n\t\t\t\t\t\t\t&lt;strong&gt;[USERNAME]&lt;/strong&gt;\r\n\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tYou&#039;re now a member of [SITE_NAME].\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tIt seems that you or someone requested a new password for you.\r\n\t\t\t\t\t\t\t\tWe have generated a new password, as requested:\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\tYour new password: <b>[PASSWORD]</b>\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\tTo use the new password you need to activate it. To do this click the link provided below and login with your new password.\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[LINK]&quot;&gt;[LINK]&lt;/a&gt;&lt;br /&gt;\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\tYou can change your password after you sign in.&lt;hr /&gt;\r\n\t\t\t\t\t\t\t\tPassword requested from IP: [IP]&lt;/td&gt;\r\n\t\t\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t\t\tThanks,<br>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,<br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/em&gt;&lt;/td&gt;\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('3', 'Welcome Mail From Admin', 'You have been registered', 'This template is used to send welcome email, when user is added by administrator', '\t\t\t\t\t\t\t\t\t\t\t&lt;!doctype html&gt;\n&lt;html&gt;\n\n&lt;head&gt;\n&lt;link href=&#039;https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600&#039; rel=&#039;stylesheet&#039; type=&#039;text/css&#039;&gt;\n&lt;/head&gt;\n\n&lt;body style=&#039;margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;&#039;&gt;\n\t&lt;table border=&#039;0&#039; cellpadding=&#039;0&#039; cellspacing=&#039;0&#039; width=&#039;100%&#039;&gt;\n\t\t&lt;table align=&#039;center&#039; border=&#039;0&#039; cellpadding=&#039;0&#039; cellspacing=&#039;0&#039; width=&#039;100%&#039; style=&#039;max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;&#039;&gt; \n\n\t\t\t&lt;tr bgcolor=&#039;#f62d51&#039; height=&#039;5px&#039;&gt;\n\t\t\t\t&lt;td align=&#039;center&#039; style=&#039;font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;&#039;&gt;\n\t\t\t\t&lt;/td&gt;\n\t\t\t&lt;/tr&gt;\n\t\t\t&lt;tr bgcolor=&#039;#f9f9f9&#039;&gt;\n\t\t\t\t&lt;td style=&#039;padding:40px;&#039;&gt;\n\t\t\t\t\t&lt;table border=&#039;0&#039; cellpadding=&#039;0&#039; cellspacing=&#039;0&#039; width=&#039;100%&#039;&gt;\n\t\t\t\t\t\t&lt;tr&gt;&lt;td&gt;&lt;img src=&quot;[URL]/uploads/logo.png&quot; class=&quot;logo&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;\n\t\t\t\t\t\t&lt;br&gt;&lt;br&gt;\n\t\t\t\t\t\t&lt;tr height=&#039;30&#039;&gt;&lt;/tr&gt;\n\t\t\t\t\t\t&lt;tr&gt;\n\t\t\t\t\t\t\t&lt;td style=&#039;font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:17px; font-weight:400;&#039;&gt;\n\t\t\t\t\t\t\tHi! [NAME]!, Welcome You have been Registered\n\t\t\t\t\t\t\t&lt;/td&gt;\n\t\t\t\t\t\t&lt;/tr&gt;\n\t\t\t\t\t\t&lt;tr height=&#039;15&#039;&gt;&lt;/tr&gt;\n\t\t\t\t\t\t&lt;td style=&#039;font-family: Montserrat, Arial, sans serif; margin:5px 0 0; font-size: 12px; font-weight:400;word-break: break-word;color:#333;line-height: 22px; position: relative; top: 10px;&#039;&gt;\n\t\t\t\t\t\t\tYou&#039;re now a member of [SITE_NAME].\n\t\t\t\t\t\t&lt;/td&gt;\n\t\t\t\t\t\t&lt;tr height=&#039;30&#039;&gt;&lt;/tr&gt;\n\t\t\t\t\t\t&lt;tr&gt;\n\t\t\t\t\t\t\t&lt;td style=&quot;margin: 40px 0;line-height: 22px; font-family: &#039;Montserrat&#039;, Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;&quot;&gt;\n\t\t\t\t\t\t\t\tHere are your login details. Please keep them in a safe place:\n\t\t\t\t\t\t\t\t&lt;br&gt;&lt;br&gt;\n\t\t\t\t\t\t\t\tUsername: &lt;b&gt;[USERNAME]&lt;/b&gt;\n\t\t\t\t\t\t\t\t&lt;br&gt;\n\t\t\t\t\t\t\t\tPassword: &lt;b&gt;[PASSWORD]&lt;/b&gt;\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t&lt;br&gt;&lt;br&gt;&lt;br&gt;\n\t\t\t\t\t\t\t\tThanks,&lt;br&gt;\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,&lt;br&gt;\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/em&gt;&lt;/td&gt;\n\t\t\t\t\t\t\t&lt;/td&gt;\n\t\t\t\t\t\t&lt;/tr&gt;\n\t\t\t\t\t\t&lt;tr height=&#039;50&#039;&gt;&lt;/tr&gt;\n\t\t\t\t\t\t&lt;tr&gt;\n\t\t\t\t\t\t\t&lt;td style=&#039;margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;&#039;&gt;\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\n\t\t\t\t\t\t\t&lt;/td&gt;\n\t\t\t\t\t\t&lt;/tr&gt;\n\t\t\t\t\t&lt;/table&gt;\n\t\t\t\t&lt;/td&gt;\n\t\t\t&lt;/tr&gt;\n\t\t&lt;/table&gt; \n\t&lt;/table&gt;\n&lt;/body&gt;\n&lt;/html&gt;\t\t\t\t\t\t\t\t\t\t');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('4', 'Default Newsletter', 'Newsletter', 'This is a default newsletter template', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr height=\'15\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHi! [NAME]!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tYou&#039;re now a member of [SITE_NAME].\t\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t\tYou are receiving this email as a part of your newsletter subscription.\r\n\t\t\t\t\t\t\t\t\t&lt;hr&gt;\r\n\t\t\t\t\t\t\t\t\tHere goes your newsletter content\r\n\t\t\t\t\t\t\t\t\t&lt;hr&gt;\r\n\t\t\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t\t\tThanks,<br>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,<br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/em&gt;&lt;/td&gt;\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\t&lt;span style=&quot;font-size: 11px;&quot;&gt;&lt;em&gt;To stop receiving future newsletters please login into your account         and uncheck newsletter subscription box.&lt;/em&gt;&lt;/span&gt;\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('7', 'Welcome Email', 'Welcome', 'This template is used to welcome newly registered user when Configuration-&gt;Registration Verification and Configuration-&gt;Auto Registration are both set to YES', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr height=\'15\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHi!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:5px 0 0; font-size: 12px; font-weight:400;word-break: break-word;color:#333;line-height: 22px; position: relative; top: 10px;\'>\r\n\t\t\t\t\t\t\tWelcome [NAME]! Thanks for registering.\r\n\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tYou&#039;re now a member of [SITE_NAME].\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tHere are your login details. Please keep them in a safe place:\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\tUsername: <b>[USERNAME]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tPassword: <b>[PASSWORD]</b>\r\n\t\t\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t\t\tThanks,<br>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,<br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/em&gt;&lt;/td&gt;\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('10', 'Contact Request', 'Contact Inquiry', 'This template is used to send default Contact Request Form', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr height=\'15\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHello Admin\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t\tYou have a new contact request:         \r\n\t\t\t\t\t\t\t\t\t&lt;hr /&gt;\r\n\t\t\t\t\t\t\t\t\t[MESSAGE]         \r\n\t\t\t\t\t\t\t\t\t&lt;hr /&gt;\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t<span style=\'color:#846add;\'>Information:</span><br><br>\r\n\t\t\t\t\t\t\t\t<span>\r\n\t\t\t\t\t\t\t\tFrom: &lt;strong&gt;[SENDER] - [NAME]&lt;/strong&gt;&lt;br /&gt;\r\n\t\t\t\t\t\t\t\tSubject: &lt;strong&gt;[MAILSUBJECT]&lt;/strong&gt;&lt;br /&gt;\r\n\t\t\t\t\t\t\t\tSenders IP: &lt;strong&gt;[IP]&lt;/strong&gt;\r\n\t\t\t\t\t\t\t\t</span>\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('12', 'Single Email', 'Single User Email', 'This template is used to email single user', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr height=\'15\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHello [NAME]\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t\tYour message goes here...         \r\n\t\t\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t<span style=\'color:#846add;\'>Thanks,</span><br><br>\r\n\t\t\t\t\t\t\t\t<span>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team\r\n\t\t\t\t\t\t\t\t</span>\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('13', 'Notify Admin', 'New User Registration', 'This template is used to notify admin of new registration when Configuration->Registration Notification is set to YES', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#6610f2\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHello Admin!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:5px 0 0; font-size: 12px; font-weight:400;word-break: break-word;color:#333;line-height: 22px; position: relative; top: 10px;\'>\r\n\t\t\t\t\t\t\tYou have a new user registration. You can login into your admin panel to view details:\r\n\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tUsername: <b>[USERNAME]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tName: <b>[NAME]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tIP:   <b>[IP]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('14', 'Registration Pending', 'Registration Verification Pending', 'This template is used to send Registration Verification Email, when Configuration->Auto Registration is set to NO', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr height=\'15\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHi!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:5px 0 0; font-size: 12px; font-weight:400;word-break: break-word;color:#333;line-height: 22px; position: relative; top: 10px;\'>\r\n\t\t\t\t\t\t\tWelcome [NAME]! Thanks for registering.\r\n\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tYou&#039;re now a member of [SITE_NAME].\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tHere are your login details. Please keep them in a safe place:\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\tUsername: &lt;strong&gt;[USERNAME]&lt;/strong&gt;&lt;br /&gt;\r\n\t\t\t\t\t\t\t\tPassword: &lt;strong&gt;[PASSWORD]&lt;/strong&gt;         &lt;hr /&gt;\r\n\t\t\t\t\t\t\t\tThe administrator of this site has requested all new accounts&lt;br /&gt;\r\n\t\t\t\t\t\t\t\tto be activated by the users who created them thus your account&lt;br /&gt;\r\n\t\t\t\t\t\t\t\tis currently pending verification process.\r\n\t\t\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t\t\tThanks,<br>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,<br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/em&gt;&lt;/td&gt;\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('16', 'Notification Courier', 'sales@shipmentscript.com', 'This template is used to notify user when manual account activation is completed', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr height=\'15\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHi!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:5px 0 0; font-size: 12px; font-weight:400;word-break: break-word;color:#333;line-height: 22px; position: relative; top: 10px;\'>\r\n\t\t\t\t\t\t\t[NAME], [SNAME] Shipping a package for you!.\r\n\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tThese are the data of your shipment [NAME].\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t# Tracking: <b>[TRACKING]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tStatus: <b>[COURIER]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tDestination: <b>[DESTINATION]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tAddress: <b>[ADDRESS]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tDate of shipment: <b>[DELIVERY_TIME]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tShipping details: <b>[DESCRIPTION]</b>\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]/track_shipment.php&quot;&gt;See your shipment&lt;/a&gt;\r\n\t\t\t\t\t\t\t\t</span>\r\n\t\t\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t\t\tThanks,<br>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,<br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('17', 'Account Activation', 'Your account have been activated', 'This template is used to notify user when manual account activation is completed', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#36bea6\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr height=\'15\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHello, [NAME]!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tYou&#039;re now a member of [SITE_NAME].\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\tYour account is now fully activated, and you may login at \r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;\r\n\t\t\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t\t\tThanks,<br>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,<br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;&lt;/em&gt;&lt;/td&gt;\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');
INSERT INTO `email_templates` (`id`, `name`, `subject`, `help`, `body`) VALUES ('18', 'Approved Courier Online', 'Your shipment has ben approved', 'This template is used to approved shipments', '<!doctype html>\r\n<html>\r\n\r\n<head>\r\n<link href=\'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600\' rel=\'stylesheet\' type=\'text/css\'>\r\n</head>\r\n\r\n<body style=\'margin: 0; padding: 20px; font-family: Montserrat, Arial, sans serif; font-size: 12px;font-weight:400;word-break: break-word;color:#555;line-height: 18px;\'>\r\n\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t<table align=\'center\' border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\' style=\'max-width:500px; margin:40px auto;border-collapse: collapse;border-radius: 2px;overflow: hidden;\'> \r\n\r\n\t\t\t<tr bgcolor=\'#f62d51\' height=\'5px\'>\r\n\t\t\t\t<td align=\'center\' style=\'font-family: Montserrat, Arial, sans serif; color: #fff;text-transform: uppercase;font-size: 20px;justify-content: center;align-items: center;letter-spacing: 4px;font-weight: 600;\'>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t\t<tr bgcolor=\'#f9f9f9\'>\r\n\t\t\t\t<td style=\'padding:40px;\'>\r\n\t\t\t\t\t<table border=\'0\' cellpadding=\'0\' cellspacing=\'0\' width=\'100%\'>\r\n\t\t\t\t\t\t<tr><td><img src="[URL]/uploads/logo.png" class="logo"/></td></tr>\r\n\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t<tr height=\'15\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:0; color:#846add; font-size:20px; font-weight:400;\'>\r\n\t\t\t\t\t\t\tHi!\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<td style=\'font-family: Montserrat, Arial, sans serif; margin:5px 0 0; font-size: 12px; font-weight:400;word-break: break-word;color:#333;line-height: 22px; position: relative; top: 10px;\'>\r\n\t\t\t\t\t\t\t[NAME], Your shipment was approved.\r\n\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t<tr height=\'30\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style="margin: 40px 0;line-height: 22px; font-family: \'Montserrat\', Arial, sans serif; font-size: 12px;font-weight:100; word-break: break-word; color:#333;">\r\n\t\t\t\t\t\t\t\tThese are the data of your shipment [NAME].\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t# Tracking: <b>[TRACKING]</b>\r\n\t\t\t\t\t\t\t\t<br>\r\n\t\t\t\t\t\t\t\tStatus: <b>[COURIER]</b>\r\n\t\t\t\t\t\t\t\t<br>\t\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t<br><br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]/login.php&quot;&gt;log in&lt;/a&gt;\r\n\t\t\t\t\t\t\t\t</span>\r\n\t\t\t\t\t\t\t\t<br><br><br>\r\n\t\t\t\t\t\t\t\tThanks,<br>\r\n\t\t\t\t\t\t\t\t[SITE_NAME] Team,<br>\r\n\t\t\t\t\t\t\t\t&lt;a href=&quot;[URL]&quot;&gt;[URL]&lt;/a&gt;\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t\t<tr height=\'50\'></tr>\r\n\t\t\t\t\t\t<tr>\r\n\t\t\t\t\t\t\t<td style=\'margin:40px 0; line-height: 22px; font-family: Montserrat, Arial, sans serif; font-size: 12px; font-weight:400; word-break: break-word; color:#333; padding-top: 10px; border-top: 1px solid #e2e2e2;\'>\r\n\t\t\t\t\t\t\t\tTo reply to this message you can simply reply this email.\r\n\t\t\t\t\t\t\t</td>\r\n\t\t\t\t\t\t</tr>\r\n\t\t\t\t\t</table>\r\n\t\t\t\t</td>\r\n\t\t\t</tr>\r\n\t\t</table> \r\n\t</table>\r\n</body>\r\n</html>');


-- --------------------------------------------------
# -- Table structure for table `incoterm`
-- --------------------------------------------------
DROP TABLE IF EXISTS `incoterm`;
CREATE TABLE `incoterm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inco_name` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `incoterm`
-- --------------------------------------------------

INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('1', 'EXW', 'EXW - ExWorks');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('2', 'FCA', 'FCA - Free Carrier');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('3', 'FAS', 'FAS - Free Alongside Ship');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('4', 'FOB', 'FOB - Free On Board');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('5', 'CFR', 'CFR - Cost and Freight');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('6', 'CIF', 'CIF - Cost, Insurance, Freight');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('7', 'CIP', 'CIP - Carriage and Insurance Paid');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('8', 'CPT', 'CPT - Carriage Paid To');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('9', 'DAF', 'DAF - Delivered At Frontier');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('10', 'DES', 'DES - Delivered Ex Ship');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('11', 'DEQ', 'DEQ - Delivered Ex Quay');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('12', 'DDU', 'DDU - Delivered Duty Unpaid');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('13', 'DDP', 'DDP - Delivered Duty Paid');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('14', 'DAT', 'DAT – Delivered at Terminal (named terminal at port or place of destination)');
INSERT INTO `incoterm` (`id`, `inco_name`, `detail`) VALUES ('15', 'DAP', 'DAP - Delivered At Place (named place of destination)');


-- --------------------------------------------------
# -- Table structure for table `met_payment`
-- --------------------------------------------------
DROP TABLE IF EXISTS `met_payment`;
CREATE TABLE `met_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `met_payment` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `met_payment`
-- --------------------------------------------------

INSERT INTO `met_payment` (`id`, `met_payment`, `detail`) VALUES ('1', 'Cash', 'Cash Payment');
INSERT INTO `met_payment` (`id`, `met_payment`, `detail`) VALUES ('2', 'Credit Card', 'Payment with Credit Card');
INSERT INTO `met_payment` (`id`, `met_payment`, `detail`) VALUES ('3', 'Debit Card', 'Payment with Debit Card');
INSERT INTO `met_payment` (`id`, `met_payment`, `detail`) VALUES ('5', 'Wire Transfer', 'Payment with Wire transfer');
INSERT INTO `met_payment` (`id`, `met_payment`, `detail`) VALUES ('6', 'Paypal', 'Paypal');


-- --------------------------------------------------
# -- Table structure for table `news`
-- --------------------------------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created` date NOT NULL DEFAULT '0000-00-00',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `news`
-- --------------------------------------------------

INSERT INTO `news` (`id`, `title`, `body`, `author`, `created`, `active`) VALUES ('6', 'Welcome to our Client Area!', '&lt;p&gt;We are pleased to announce Bellshipitnow&lt;br&gt;&lt;/p&gt;', 'Administrator', '2019-02-02', '1');


-- --------------------------------------------------
# -- Table structure for table `offices`
-- --------------------------------------------------
DROP TABLE IF EXISTS `offices`;
CREATE TABLE `offices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_off` varchar(100) DEFAULT NULL,
  `code_off` varchar(60) DEFAULT NULL,
  `address` varchar(120) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `phone_off` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `offices`
-- --------------------------------------------------

INSERT INTO `offices` (`id`, `name_off`, `code_off`, `address`, `city`, `phone_off`) VALUES ('78', 'Tampa', '33543', '30719 tremont drive', 'wesley chapel', '800. 971.7458');


-- --------------------------------------------------
# -- Table structure for table `packaging`
-- --------------------------------------------------
DROP TABLE IF EXISTS `packaging`;
CREATE TABLE `packaging` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name_pack` varchar(120) DEFAULT NULL,
  `detail_pack` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `packaging`
-- --------------------------------------------------

INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('12', 'Paperboard boxes', 'Paperboard is a paper-based material that is lightweight, yet strong.');
INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('13', 'Corrugated boxes', 'Corrugated boxes simply refer to what is commonly known as: Cardboard....');
INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('14', 'Plastic boxes', 'Corrugated boxes simply refer to what is commonly known as: Cardboard.Plastic is used in a wide range of products, from spaceships to paper clips.');
INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('15', 'Rigid boxes', 'A rigid box is made out of highly condensed paperboard that is 4 times thicker than the paperboard used in the construction of a standard folding carton.');
INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('16', 'Chipboard packaging', 'Chipboard packaging is used in industries such as electronic, medical, food, cosmetic, and beverage.');
INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('17', 'Poly bags', 'A poly bag, also known as a pouch or a plastic bag, is manufactured out of flexible, thin, plastic film fabric.');
INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('18', 'Foil sealed bags', 'Foil sealed bags can be seen typically in most coffee and tea packaging.');
INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('20', 'Container', 'Foil sealed bags can be seen typically in most coffee and tea packaging.');
INSERT INTO `packaging` (`id`, `name_pack`, `detail_pack`) VALUES ('21', 'Pallets', 'Foil sealed bags can be seen typically in most coffee and tea packaging.');


-- --------------------------------------------------
# -- Table structure for table `settings`
-- --------------------------------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(50) DEFAULT NULL,
  `c_nit` varchar(30) DEFAULT NULL,
  `c_phone` varchar(30) DEFAULT NULL,
  `cell_phone` varchar(30) DEFAULT NULL,
  `c_address` varchar(60) DEFAULT NULL,
  `c_country` varchar(60) DEFAULT NULL,
  `c_city` varchar(60) DEFAULT NULL,
  `c_postal` varchar(30) DEFAULT NULL,
  `site_email` varchar(40) DEFAULT NULL,
  `interms` text,
  `signing_customer` varchar(60) DEFAULT NULL,
  `signing_company` varchar(60) DEFAULT NULL,
  `site_url` varchar(200) DEFAULT NULL,
  `reg_allowed` tinyint(1) NOT NULL DEFAULT '1',
  `user_limit` tinyint(1) NOT NULL DEFAULT '0',
  `reg_verify` tinyint(1) NOT NULL DEFAULT '0',
  `notify_admin` tinyint(1) NOT NULL DEFAULT '0',
  `auto_verify` tinyint(1) NOT NULL DEFAULT '0',
  `account_paypal` varchar(60) DEFAULT NULL,
  `client_id` varchar(250) DEFAULT NULL,
  `user_perpage` varchar(4) NOT NULL DEFAULT '10',
  `thumb_w` varchar(4) NOT NULL,
  `thumb_h` varchar(4) NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(50) DEFAULT NULL,
  `backup` varchar(60) DEFAULT NULL,
  `mailer` enum('PHP','SMTP') NOT NULL DEFAULT 'PHP',
  `smtp_host` varchar(100) DEFAULT NULL,
  `smtp_user` varchar(50) DEFAULT NULL,
  `smtp_pass` varchar(50) DEFAULT NULL,
  `smtp_port` varchar(6) DEFAULT NULL,
  `is_ssl` tinyint(1) NOT NULL DEFAULT '0',
  `version` varchar(5) DEFAULT NULL,
  `prefix` varchar(6) DEFAULT NULL,
  `track_digit` varchar(15) DEFAULT NULL,
  `prefix_con` varchar(6) DEFAULT NULL,
  `track_container` varchar(12) DEFAULT NULL,
  `prefix_consolidate` varchar(6) DEFAULT NULL,
  `track_consolidate` varchar(12) DEFAULT NULL,
  `tax` varchar(4) DEFAULT NULL,
  `insurance` varchar(4) DEFAULT NULL,
  `value_weight` varchar(16) DEFAULT NULL,
  `meter` varchar(16) DEFAULT NULL,
  `c_value_pound` varchar(4) DEFAULT NULL,
  `c_add_pound` varchar(4) DEFAULT NULL,
  `c_handling` varchar(4) DEFAULT NULL,
  `c_fuel` varchar(4) DEFAULT NULL,
  `c_reexpedition` varchar(4) DEFAULT NULL,
  `c_logistic` varchar(4) DEFAULT NULL,
  `c_surcharges` varchar(4) DEFAULT NULL,
  `c_safe` varchar(4) DEFAULT NULL,
  `c_nationalization` varchar(4) DEFAULT NULL,
  `c_tariffs` varchar(4) DEFAULT NULL,
  `c_vat` varchar(4) DEFAULT NULL,
  `currency` varchar(120) NOT NULL,
  `timezone` varchar(120) NOT NULL,
  `language` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `settings`
-- --------------------------------------------------

INSERT INTO `settings` (`id`, `site_name`, `c_nit`, `c_phone`, `cell_phone`, `c_address`, `c_country`, `c_city`, `c_postal`, `site_email`, `interms`, `signing_customer`, `signing_company`, `site_url`, `reg_allowed`, `user_limit`, `reg_verify`, `notify_admin`, `auto_verify`, `account_paypal`, `client_id`, `user_perpage`, `thumb_w`, `thumb_h`, `logo`, `favicon`, `backup`, `mailer`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `is_ssl`, `version`, `prefix`, `track_digit`, `prefix_con`, `track_container`, `prefix_consolidate`, `track_consolidate`, `tax`, `insurance`, `value_weight`, `meter`, `c_value_pound`, `c_add_pound`, `c_handling`, `c_fuel`, `c_reexpedition`, `c_logistic`, `c_surcharges`, `c_safe`, `c_nationalization`, `c_tariffs`, `c_vat`, `currency`, `timezone`, `language`) VALUES ('1', 'Bellshipitnow', '800124570-87', '800. 971.7458', '800. 971.7458', '30719 Tremont Drive', 'USA', 'Wesley Chapel', '33543', 'support@bellshipitnow.com', 'ACCEPTED: This invoice complies with the requirements of article 774 of the commercial code modified by law 1231 of 2008 and therefore constitutes a security title. The person who signs declares to be duly authorized by the buyer to do so. The cancellation after the due date causes default interest at the current legal maximum rate.', 'Customer Signing', 'Company Signing', 'http://bellshipitnow.com', '1', '0', '1', '1', '1', 'osorio2380@yahoo.es', 'AZh1tcwI9IuTWqKlU_YV1fPDZ0HrXtRflE87FsI_kIpTPjItBSYewsMpKQeLB-PdukPKP0Pb_pIJJKKZ', '0', '200', '200', 'logo.png', 'favicon.png', '23-Apr-2019_12-38-08.sql', 'SMTP', 'bellshipitnow.com', 'support@bellshipitnow.com', 'KIsa07$@', '465', '1', '3.2.6', 'AWB', '8', 'MSCU', '8', 'COEE', '8', '8', '5', '3.25', '5000', '12', '2.75', '6', '5', '15', '2', '5', '1.5', '0.20', '10', '19', 'USD', 'America/Bogota', 'en');


-- --------------------------------------------------
# -- Table structure for table `ship_rate`
-- --------------------------------------------------
DROP TABLE IF EXISTS `ship_rate`;
CREATE TABLE `ship_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_courier` varchar(255) DEFAULT NULL,
  `services` varchar(120) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `rate` varchar(10) DEFAULT NULL,
  `deli_time` varchar(120) DEFAULT NULL,
  `typeweight` varchar(120) DEFAULT NULL,
  `free_ship` varchar(120) DEFAULT NULL,
  `drop_off` varchar(120) DEFAULT NULL,
  `created` datetime NOT NULL,
  `brand` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `ship_rate`
-- --------------------------------------------------

INSERT INTO `ship_rate` (`id`, `n_courier`, `services`, `weight`, `rate`, `deli_time`, `typeweight`, `free_ship`, `drop_off`, `created`, `brand`) VALUES ('1', 'UNITED STATES - Postal Service', 'USPS - Priority Mail', '0.5', '6.35', '1 - 3 working days', 'lbs', 'Free Pickup', 'Drop-off', '2018-08-04 23:53:10', 'AVT_BE778B-406FA7-1D5C38-B462B5-DBB8A8-1280CE.png');
INSERT INTO `ship_rate` (`id`, `n_courier`, `services`, `weight`, `rate`, `deli_time`, `typeweight`, `free_ship`, `drop_off`, `created`, `brand`) VALUES ('2', 'UNITED STATES - Postal Service', 'USPS - First Class', '2', '3.18', '2 - 5 working days', 'lbs', 'Free Pickup', 'Drop-off', '2018-08-04 23:54:29', 'AVT_71EF42-B6C9E1-911929-371D01-F8C840-772FE7.png');
INSERT INTO `ship_rate` (`id`, `n_courier`, `services`, `weight`, `rate`, `deli_time`, `typeweight`, `free_ship`, `drop_off`, `created`, `brand`) VALUES ('3', 'UNITED STATES - Postal Service', 'USPS - Parcel Select', '15', '6.55', '3 - 7 working days', 'lbs', 'Free Pickup', 'Drop-off', '2018-08-04 23:55:05', 'AVT_E390F7-5FB26C-1B0FD5-976D59-4DCAE9-ACFD51.png');
INSERT INTO `ship_rate` (`id`, `n_courier`, `services`, `weight`, `rate`, `deli_time`, `typeweight`, `free_ship`, `drop_off`, `created`, `brand`) VALUES ('4', 'UNITED STATES - Postal Service', 'USPS - Priority Mail Express', '210', '21.98', '1 - 3 working days', 'lbs', 'Free Pickup', 'Drop-off', '2018-08-04 23:55:43', 'AVT_E3DA7B-271ADE-482DC9-AC3511-D24D54-FE7611.png');


-- --------------------------------------------------
# -- Table structure for table `shipping_line`
-- --------------------------------------------------
DROP TABLE IF EXISTS `shipping_line`;
CREATE TABLE `shipping_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ship_line` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `shipping_line`
-- --------------------------------------------------

INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('1', 'Atlantic Container Line', 'Freight forwarding - Atlantic Container Line');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('2', 'American President Lines', 'Freight forwarding - American President Lines (APL)');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('3', 'Atlantic Ro-Ro Carriers', 'Atlantic Ro-Ro Carriers');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('4', 'China Shipping', 'Freight forwarding - China Shipping');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('5', 'CMA CGM', 'Freight forwarding - CMA CGM Group');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('6', 'Evergreen Marine Corp.', 'Freight forwarding - Evergreen Marine Corp (EMC)');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('7', 'Fesco Transportation Group', 'FESCO Transportation Group');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('8', 'Hanjin Shipping', 'Hanjin Shipping - Container Carrier');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('9', 'Hamburg Süd Group', 'Hamburg Süd Group - Ocean Freight');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('10', 'Hapag Lloyd', 'Freight forwarding - Hapag-Lloyd');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('11', 'Maersk Sealand', 'Freight forwarding - Maersk Line');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('12', 'MSC Mediterranean Shipping Company', 'Freight forwarding - Mediterranean Shipping Company');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('13', 'OOCL Logistics', 'OOCL Vessel &amp; Rail Tracking');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('14', 'Safmarine', 'Safmarine Container Lines');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('15', 'Zim Integrated Shipping Services', 'Freight forwarding - ZIM Integrated Shipping Services');
INSERT INTO `shipping_line` (`id`, `ship_line`, `detail`) VALUES ('16', 'Wallenius Lines', 'Freight forwarding - Wallenius Logistics');


-- --------------------------------------------------
# -- Table structure for table `shipping_mode`
-- --------------------------------------------------
DROP TABLE IF EXISTS `shipping_mode`;
CREATE TABLE `shipping_mode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ship_mode` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `shipping_mode`
-- --------------------------------------------------

INSERT INTO `shipping_mode` (`id`, `ship_mode`, `detail`) VALUES ('1', 'Priority Mail Express', 'Priority Mail Express');
INSERT INTO `shipping_mode` (`id`, `ship_mode`, `detail`) VALUES ('2', 'Priority Mail', 'Priority Mail ExpressPriority Mail');
INSERT INTO `shipping_mode` (`id`, `ship_mode`, `detail`) VALUES ('3', 'Priority MailFirst-Class Mail', 'First-Class Mail');
INSERT INTO `shipping_mode` (`id`, `ship_mode`, `detail`) VALUES ('4', 'International Economy', 'International Economy');
INSERT INTO `shipping_mode` (`id`, `ship_mode`, `detail`) VALUES ('5', 'International Priority', 'International Priority');
INSERT INTO `shipping_mode` (`id`, `ship_mode`, `detail`) VALUES ('6', 'Express Domestic', 'Express Domestic');


-- --------------------------------------------------
# -- Table structure for table `sms_templates`
-- --------------------------------------------------
DROP TABLE IF EXISTS `sms_templates`;
CREATE TABLE `sms_templates` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `help` text,
  `body1` text,
  `body2` text,
  `body3` text,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `sms_templates`
-- --------------------------------------------------

INSERT INTO `sms_templates` (`id`, `name`, `help`, `body1`, `body2`, `body3`, `active`) VALUES ('1', 'Shipping notification', 'This template is used to notify the destination customer of your pending shipment', 'Bellshipitnow has sent you package, shipping number #', 'date of shipment', 'Check the status of your shipment, link:', '1');
INSERT INTO `sms_templates` (`id`, `name`, `help`, `body1`, `body2`, `body3`, `active`) VALUES ('2', 'Status update Courier', 'This template is used to notify the recipient of the status of the shipment', 'Your shipment has changed its status', 'new location', '# shipping', '1');
INSERT INTO `sms_templates` (`id`, `name`, `help`, `body1`, `body2`, `body3`, `active`) VALUES ('3', 'Approval of the shipment', 'This template is used by the system administrator to approve managed shipments online', 'the reserved shipment on his dashboard was', 'delivery number', 'approved date', '1');
INSERT INTO `sms_templates` (`id`, `name`, `help`, `body1`, `body2`, `body3`, `active`) VALUES ('16', 'Notification paypal payments or credit cards', 'This template is used when the client wants to pay online and the incoming payment is notified by text message to the system administrator', 'Hi Admin !, you have a payment made by PAYPAL, total amount of', 'transaction date', 'Tracking #', '1');


-- --------------------------------------------------
# -- Table structure for table `styles`
-- --------------------------------------------------
DROP TABLE IF EXISTS `styles`;
CREATE TABLE `styles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mod_style` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `styles`
-- --------------------------------------------------

INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('1', 'Earring Collection', 'Earring Collection', '#a3a3a3');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('2', 'Received Office', 'Received Office', '#74c22b');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('3', 'In Transit', 'In Transit', '#00e39a');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('4', 'In warehouse', 'In warehouse', '#ffe908');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('5', 'Distribution', 'Distribution', '#cd88ee');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('6', 'Available', 'Available (only when is to be withdrawn at the offices)', '#0ae4ff');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('7', 'On route', 'On route for delivery (only when it is door to door)', '#ff264f');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('8', 'Delivered', 'Delivered', '#43bd00');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('10', 'Approved', 'Approved Booking', '#ffa6a6');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('11', 'Pending', 'Pending', '#ff8e0d');
INSERT INTO `styles` (`id`, `mod_style`, `detail`, `color`) VALUES ('12', 'Rejected', 'Booking Online Cancelled', '#ff0505');


-- --------------------------------------------------
# -- Table structure for table `textsms`
-- --------------------------------------------------
DROP TABLE IF EXISTS `textsms`;
CREATE TABLE `textsms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namesms` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `account_sid` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `auth_token` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `twilio_number` varchar(120) DEFAULT NULL,
  `active_twi` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `textsms`
-- --------------------------------------------------

INSERT INTO `textsms` (`id`, `namesms`, `account_sid`, `auth_token`, `twilio_number`, `active_twi`) VALUES ('6', 'Twilio', 'AC1357c40d3e37e016cbdf8df20106deba', '701c6008343a2fd707c8cdbbc238f845', '+13203378467', '0');


-- --------------------------------------------------
# -- Table structure for table `textsmsnexmo`
-- --------------------------------------------------
DROP TABLE IF EXISTS `textsmsnexmo`;
CREATE TABLE `textsmsnexmo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namesms` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `api_key` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `api_secret` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `nexmo_number` varchar(120) DEFAULT NULL,
  `active_nex` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `textsmsnexmo`
-- --------------------------------------------------

INSERT INTO `textsmsnexmo` (`id`, `namesms`, `api_key`, `api_secret`, `nexmo_number`, `active_nex`) VALUES ('6', 'Nexmo', 'bb21885b', 'XPx2bNMsOIgNGcX6', '+447449764031', '0');


-- --------------------------------------------------
# -- Table structure for table `transactions`
-- --------------------------------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  `transaction_amount` varchar(250) NOT NULL,
  `transaction_state` varchar(250) NOT NULL,
  `transaction_track` varchar(250) NOT NULL,
  `transaction_date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------
# Dumping data for table `transactions`
-- --------------------------------------------------



-- --------------------------------------------------
# -- Table structure for table `users`
-- --------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `cookie_id` varchar(64) NOT NULL DEFAULT '0',
  `token` varchar(128) NOT NULL DEFAULT '0',
  `userlevel` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `email` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `avatar` varchar(60) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastlogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastip` varchar(16) DEFAULT NULL,
  `notes` text,
  `code_phone` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `enrollment` varchar(20) DEFAULT NULL,
  `vehiclecode` varchar(20) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `terms` varchar(120) DEFAULT NULL,
  `active` enum('y','n','b','t') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- --------------------------------------------------
# Dumping data for table `users`
-- --------------------------------------------------

INSERT INTO `users` (`id`, `username`, `password`, `cookie_id`, `token`, `userlevel`, `email`, `fname`, `lname`, `country`, `city`, `postal`, `avatar`, `ip`, `created`, `lastlogin`, `lastip`, `notes`, `code_phone`, `phone`, `address`, `enrollment`, `vehiclecode`, `gender`, `newsletter`, `terms`, `active`) VALUES ('1', 'narcisse', '6dfc9f9092330a05c513d1ba3383709e', '0', '0', '9', 'narcisse.aspilaire@gmail.com', 'Narcisse', 'Aspilaire', 'United States', 'Ruskin', '33570', '', '', '2019-04-07 15:26:37', '2019-05-11 13:12:29', '193.37.252.55', '', '3057989905', '3057989905', '2424 Dovesong Trace Dr', '', '', 'Male', '0', '', 'y');
INSERT INTO `users` (`id`, `username`, `password`, `cookie_id`, `token`, `userlevel`, `email`, `fname`, `lname`, `country`, `city`, `postal`, `avatar`, `ip`, `created`, `lastlogin`, `lastip`, `notes`, `code_phone`, `phone`, `address`, `enrollment`, `vehiclecode`, `gender`, `newsletter`, `terms`, `active`) VALUES ('2', 'rouzier', '3010129384061d11214b148dda4b5225', '0', '0', '9', 'rouziercharles@yahoo.com', 'Rouzier', 'Charles', '', '', '', '', '', '2019-04-07 09:15:24', '2019-04-23 12:39:52', '137.75.68.136', '', '1', '8134039886', '158 Bartlett Street Apt#1', '', '', '', '1', '', 'y');
INSERT INTO `users` (`id`, `username`, `password`, `cookie_id`, `token`, `userlevel`, `email`, `fname`, `lname`, `country`, `city`, `postal`, `avatar`, `ip`, `created`, `lastlogin`, `lastip`, `notes`, `code_phone`, `phone`, `address`, `enrollment`, `vehiclecode`, `gender`, `newsletter`, `terms`, `active`) VALUES ('3', 'rouziercx', '76eda1ca6e35ca64b226c442f1cf2453', '0', '0', '1', 'rouziercx@gmail.com', 'Rou', 'Rou', 'United States', 'Tampa', '33543', '', '', '2019-04-11 17:30:44', '0000-00-00 00:00:00', '', '', '1', '8135555555', '1234 Love Success ST', '', '', '', '0', 'yes', 'y');
INSERT INTO `users` (`id`, `username`, `password`, `cookie_id`, `token`, `userlevel`, `email`, `fname`, `lname`, `country`, `city`, `postal`, `avatar`, `ip`, `created`, `lastlogin`, `lastip`, `notes`, `code_phone`, `phone`, `address`, `enrollment`, `vehiclecode`, `gender`, `newsletter`, `terms`, `active`) VALUES ('4', 'rouzier11', '76eda1ca6e35ca64b226c442f1cf2453', '0', '0', '1', 'bellshipitnow@gmail.com', 'Rou', 'Rou', 'United States', 'Tampa', '33543', '', '', '2019-04-11 17:31:43', '0000-00-00 00:00:00', '', '', '1', '8135555555', '1234 Love Success ST', '', '', '', '0', 'yes', 'y');
INSERT INTO `users` (`id`, `username`, `password`, `cookie_id`, `token`, `userlevel`, `email`, `fname`, `lname`, `country`, `city`, `postal`, `avatar`, `ip`, `created`, `lastlogin`, `lastip`, `notes`, `code_phone`, `phone`, `address`, `enrollment`, `vehiclecode`, `gender`, `newsletter`, `terms`, `active`) VALUES ('6', '1989', '48818f3da3d36ad762480b319b56f588', '0', '0', '1', 'stephanieantoine17@gmail.com', 'Stephanie', 'ANTOINE', 'Haïti', 'Port-au-Prince', '6123', '', '', '2019-04-12 12:07:35', '0000-00-00 00:00:00', '', '', '509', '37095357', '29, rue château blond, route de frère', '', '', '', '0', 'yes', 'y');
INSERT INTO `users` (`id`, `username`, `password`, `cookie_id`, `token`, `userlevel`, `email`, `fname`, `lname`, `country`, `city`, `postal`, `avatar`, `ip`, `created`, `lastlogin`, `lastip`, `notes`, `code_phone`, `phone`, `address`, `enrollment`, `vehiclecode`, `gender`, `newsletter`, `terms`, `active`) VALUES ('7', 'prophete', '6631110d7a209f65912b6e9e2092ad9b', '0', '0', '1', 'contact@ichcollection.com', 'ICHCOLLECTION', 'Aspilaire', 'United States', 'Ruskin', '33570', '', '', '2019-04-18 07:00:58', '0000-00-00 00:00:00', '', '', '8008725094', '3057989905', '2424 Dovesong Trace Drive', '', '', '', '0', 'yes', 'y');
INSERT INTO `users` (`id`, `username`, `password`, `cookie_id`, `token`, `userlevel`, `email`, `fname`, `lname`, `country`, `city`, `postal`, `avatar`, `ip`, `created`, `lastlogin`, `lastip`, `notes`, `code_phone`, `phone`, `address`, `enrollment`, `vehiclecode`, `gender`, `newsletter`, `terms`, `active`) VALUES ('8', 'prophete07', '6631110d7a209f65912b6e9e2092ad9b', '0', '0', '1', 'haitiandevildawg@yahoo.com', 'ICHCOLLECTION', 'Aspilaire', 'United States', 'Ruskin', '33570', '', '', '2019-04-18 07:01:24', '0000-00-00 00:00:00', '', '', '8008725094', '3057989905', '2424 Dovesong Trace Drive', '', '', '', '0', 'yes', 'y');
INSERT INTO `users` (`id`, `username`, `password`, `cookie_id`, `token`, `userlevel`, `email`, `fname`, `lname`, `country`, `city`, `postal`, `avatar`, `ip`, `created`, `lastlogin`, `lastip`, `notes`, `code_phone`, `phone`, `address`, `enrollment`, `vehiclecode`, `gender`, `newsletter`, `terms`, `active`) VALUES ('9', 'johnnya', 'd13641a4b0d49bed26bae55f9f661cec', '0', '0', '1', 'cougars422@aol.com', 'john', 'a', 'United States', 'tampa', '33781', '', '', '2019-04-19 17:35:40', '0000-00-00 00:00:00', '', '', '727', '5555555', '123 abc lane', '', '', '', '0', 'yes', 'y');


-- --------------------------------------------------
# -- Table structure for table `zone`
-- --------------------------------------------------
DROP TABLE IF EXISTS `zone`;
CREATE TABLE `zone` (
  `zone_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_code` char(2) COLLATE utf8_bin NOT NULL,
  `zone_name` varchar(35) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`zone_id`),
  KEY `idx_country_code` (`country_code`),
  KEY `idx_zone_name` (`zone_name`)
) ENGINE=MyISAM AUTO_INCREMENT=425 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------
# Dumping data for table `zone`
-- --------------------------------------------------

INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('1', 'AD', 'Europe/Andorra');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('2', 'AE', 'Asia/Dubai');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('3', 'AF', 'Asia/Kabul');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('4', 'AG', 'America/Antigua');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('5', 'AI', 'America/Anguilla');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('6', 'AL', 'Europe/Tirane');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('7', 'AM', 'Asia/Yerevan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('8', 'AO', 'Africa/Luanda');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('9', 'AQ', 'Antarctica/McMurdo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('10', 'AQ', 'Antarctica/Casey');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('11', 'AQ', 'Antarctica/Davis');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('12', 'AQ', 'Antarctica/DumontDUrville');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('13', 'AQ', 'Antarctica/Mawson');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('14', 'AQ', 'Antarctica/Palmer');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('15', 'AQ', 'Antarctica/Rothera');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('16', 'AQ', 'Antarctica/Syowa');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('17', 'AQ', 'Antarctica/Troll');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('18', 'AQ', 'Antarctica/Vostok');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('19', 'AR', 'America/Argentina/Buenos_Aires');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('20', 'AR', 'America/Argentina/Cordoba');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('21', 'AR', 'America/Argentina/Salta');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('22', 'AR', 'America/Argentina/Jujuy');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('23', 'AR', 'America/Argentina/Tucuman');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('24', 'AR', 'America/Argentina/Catamarca');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('25', 'AR', 'America/Argentina/La_Rioja');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('26', 'AR', 'America/Argentina/San_Juan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('27', 'AR', 'America/Argentina/Mendoza');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('28', 'AR', 'America/Argentina/San_Luis');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('29', 'AR', 'America/Argentina/Rio_Gallegos');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('30', 'AR', 'America/Argentina/Ushuaia');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('31', 'AS', 'Pacific/Pago_Pago');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('32', 'AT', 'Europe/Vienna');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('33', 'AU', 'Australia/Lord_Howe');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('34', 'AU', 'Antarctica/Macquarie');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('35', 'AU', 'Australia/Hobart');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('36', 'AU', 'Australia/Currie');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('37', 'AU', 'Australia/Melbourne');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('38', 'AU', 'Australia/Sydney');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('39', 'AU', 'Australia/Broken_Hill');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('40', 'AU', 'Australia/Brisbane');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('41', 'AU', 'Australia/Lindeman');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('42', 'AU', 'Australia/Adelaide');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('43', 'AU', 'Australia/Darwin');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('44', 'AU', 'Australia/Perth');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('45', 'AU', 'Australia/Eucla');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('46', 'AW', 'America/Aruba');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('47', 'AX', 'Europe/Mariehamn');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('48', 'AZ', 'Asia/Baku');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('49', 'BA', 'Europe/Sarajevo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('50', 'BB', 'America/Barbados');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('51', 'BD', 'Asia/Dhaka');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('52', 'BE', 'Europe/Brussels');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('53', 'BF', 'Africa/Ouagadougou');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('54', 'BG', 'Europe/Sofia');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('55', 'BH', 'Asia/Bahrain');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('56', 'BI', 'Africa/Bujumbura');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('57', 'BJ', 'Africa/Porto-Novo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('58', 'BL', 'America/St_Barthelemy');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('59', 'BM', 'Atlantic/Bermuda');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('60', 'BN', 'Asia/Brunei');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('61', 'BO', 'America/La_Paz');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('62', 'BQ', 'America/Kralendijk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('63', 'BR', 'America/Noronha');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('64', 'BR', 'America/Belem');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('65', 'BR', 'America/Fortaleza');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('66', 'BR', 'America/Recife');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('67', 'BR', 'America/Araguaina');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('68', 'BR', 'America/Maceio');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('69', 'BR', 'America/Bahia');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('70', 'BR', 'America/Sao_Paulo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('71', 'BR', 'America/Campo_Grande');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('72', 'BR', 'America/Cuiaba');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('73', 'BR', 'America/Santarem');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('74', 'BR', 'America/Porto_Velho');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('75', 'BR', 'America/Boa_Vista');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('76', 'BR', 'America/Manaus');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('77', 'BR', 'America/Eirunepe');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('78', 'BR', 'America/Rio_Branco');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('79', 'BS', 'America/Nassau');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('80', 'BT', 'Asia/Thimphu');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('81', 'BW', 'Africa/Gaborone');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('82', 'BY', 'Europe/Minsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('83', 'BZ', 'America/Belize');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('84', 'CA', 'America/St_Johns');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('85', 'CA', 'America/Halifax');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('86', 'CA', 'America/Glace_Bay');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('87', 'CA', 'America/Moncton');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('88', 'CA', 'America/Goose_Bay');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('89', 'CA', 'America/Blanc-Sablon');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('90', 'CA', 'America/Toronto');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('91', 'CA', 'America/Nipigon');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('92', 'CA', 'America/Thunder_Bay');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('93', 'CA', 'America/Iqaluit');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('94', 'CA', 'America/Pangnirtung');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('95', 'CA', 'America/Atikokan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('96', 'CA', 'America/Winnipeg');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('97', 'CA', 'America/Rainy_River');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('98', 'CA', 'America/Resolute');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('99', 'CA', 'America/Rankin_Inlet');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('100', 'CA', 'America/Regina');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('101', 'CA', 'America/Swift_Current');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('102', 'CA', 'America/Edmonton');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('103', 'CA', 'America/Cambridge_Bay');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('104', 'CA', 'America/Yellowknife');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('105', 'CA', 'America/Inuvik');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('106', 'CA', 'America/Creston');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('107', 'CA', 'America/Dawson_Creek');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('108', 'CA', 'America/Fort_Nelson');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('109', 'CA', 'America/Vancouver');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('110', 'CA', 'America/Whitehorse');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('111', 'CA', 'America/Dawson');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('112', 'CC', 'Indian/Cocos');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('113', 'CD', 'Africa/Kinshasa');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('114', 'CD', 'Africa/Lubumbashi');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('115', 'CF', 'Africa/Bangui');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('116', 'CG', 'Africa/Brazzaville');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('117', 'CH', 'Europe/Zurich');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('118', 'CI', 'Africa/Abidjan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('119', 'CK', 'Pacific/Rarotonga');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('120', 'CL', 'America/Santiago');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('121', 'CL', 'America/Punta_Arenas');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('122', 'CL', 'Pacific/Easter');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('123', 'CM', 'Africa/Douala');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('124', 'CN', 'Asia/Shanghai');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('125', 'CN', 'Asia/Urumqi');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('126', 'CO', 'America/Bogota');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('127', 'CR', 'America/Costa_Rica');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('128', 'CU', 'America/Havana');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('129', 'CV', 'Atlantic/Cape_Verde');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('130', 'CW', 'America/Curacao');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('131', 'CX', 'Indian/Christmas');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('132', 'CY', 'Asia/Nicosia');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('133', 'CY', 'Asia/Famagusta');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('134', 'CZ', 'Europe/Prague');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('135', 'DE', 'Europe/Berlin');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('136', 'DE', 'Europe/Busingen');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('137', 'DJ', 'Africa/Djibouti');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('138', 'DK', 'Europe/Copenhagen');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('139', 'DM', 'America/Dominica');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('140', 'DO', 'America/Santo_Domingo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('141', 'DZ', 'Africa/Algiers');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('142', 'EC', 'America/Guayaquil');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('143', 'EC', 'Pacific/Galapagos');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('144', 'EE', 'Europe/Tallinn');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('145', 'EG', 'Africa/Cairo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('146', 'EH', 'Africa/El_Aaiun');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('147', 'ER', 'Africa/Asmara');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('148', 'ES', 'Europe/Madrid');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('149', 'ES', 'Africa/Ceuta');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('150', 'ES', 'Atlantic/Canary');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('151', 'ET', 'Africa/Addis_Ababa');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('152', 'FI', 'Europe/Helsinki');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('153', 'FJ', 'Pacific/Fiji');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('154', 'FK', 'Atlantic/Stanley');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('155', 'FM', 'Pacific/Chuuk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('156', 'FM', 'Pacific/Pohnpei');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('157', 'FM', 'Pacific/Kosrae');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('158', 'FO', 'Atlantic/Faroe');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('159', 'FR', 'Europe/Paris');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('160', 'GA', 'Africa/Libreville');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('161', 'GB', 'Europe/London');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('162', 'GD', 'America/Grenada');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('163', 'GE', 'Asia/Tbilisi');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('164', 'GF', 'America/Cayenne');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('165', 'GG', 'Europe/Guernsey');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('166', 'GH', 'Africa/Accra');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('167', 'GI', 'Europe/Gibraltar');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('168', 'GL', 'America/Godthab');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('169', 'GL', 'America/Danmarkshavn');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('170', 'GL', 'America/Scoresbysund');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('171', 'GL', 'America/Thule');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('172', 'GM', 'Africa/Banjul');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('173', 'GN', 'Africa/Conakry');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('174', 'GP', 'America/Guadeloupe');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('175', 'GQ', 'Africa/Malabo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('176', 'GR', 'Europe/Athens');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('177', 'GS', 'Atlantic/South_Georgia');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('178', 'GT', 'America/Guatemala');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('179', 'GU', 'Pacific/Guam');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('180', 'GW', 'Africa/Bissau');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('181', 'GY', 'America/Guyana');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('182', 'HK', 'Asia/Hong_Kong');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('183', 'HN', 'America/Tegucigalpa');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('184', 'HR', 'Europe/Zagreb');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('185', 'HT', 'America/Port-au-Prince');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('186', 'HU', 'Europe/Budapest');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('187', 'ID', 'Asia/Jakarta');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('188', 'ID', 'Asia/Pontianak');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('189', 'ID', 'Asia/Makassar');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('190', 'ID', 'Asia/Jayapura');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('191', 'IE', 'Europe/Dublin');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('192', 'IL', 'Asia/Jerusalem');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('193', 'IM', 'Europe/Isle_of_Man');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('194', 'IN', 'Asia/Kolkata');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('195', 'IO', 'Indian/Chagos');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('196', 'IQ', 'Asia/Baghdad');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('197', 'IR', 'Asia/Tehran');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('198', 'IS', 'Atlantic/Reykjavik');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('199', 'IT', 'Europe/Rome');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('200', 'JE', 'Europe/Jersey');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('201', 'JM', 'America/Jamaica');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('202', 'JO', 'Asia/Amman');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('203', 'JP', 'Asia/Tokyo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('204', 'KE', 'Africa/Nairobi');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('205', 'KG', 'Asia/Bishkek');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('206', 'KH', 'Asia/Phnom_Penh');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('207', 'KI', 'Pacific/Tarawa');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('208', 'KI', 'Pacific/Enderbury');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('209', 'KI', 'Pacific/Kiritimati');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('210', 'KM', 'Indian/Comoro');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('211', 'KN', 'America/St_Kitts');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('212', 'KP', 'Asia/Pyongyang');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('213', 'KR', 'Asia/Seoul');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('214', 'KW', 'Asia/Kuwait');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('215', 'KY', 'America/Cayman');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('216', 'KZ', 'Asia/Almaty');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('217', 'KZ', 'Asia/Qyzylorda');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('218', 'KZ', 'Asia/Aqtobe');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('219', 'KZ', 'Asia/Aqtau');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('220', 'KZ', 'Asia/Atyrau');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('221', 'KZ', 'Asia/Oral');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('222', 'LA', 'Asia/Vientiane');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('223', 'LB', 'Asia/Beirut');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('224', 'LC', 'America/St_Lucia');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('225', 'LI', 'Europe/Vaduz');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('226', 'LK', 'Asia/Colombo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('227', 'LR', 'Africa/Monrovia');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('228', 'LS', 'Africa/Maseru');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('229', 'LT', 'Europe/Vilnius');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('230', 'LU', 'Europe/Luxembourg');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('231', 'LV', 'Europe/Riga');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('232', 'LY', 'Africa/Tripoli');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('233', 'MA', 'Africa/Casablanca');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('234', 'MC', 'Europe/Monaco');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('235', 'MD', 'Europe/Chisinau');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('236', 'ME', 'Europe/Podgorica');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('237', 'MF', 'America/Marigot');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('238', 'MG', 'Indian/Antananarivo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('239', 'MH', 'Pacific/Majuro');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('240', 'MH', 'Pacific/Kwajalein');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('241', 'MK', 'Europe/Skopje');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('242', 'ML', 'Africa/Bamako');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('243', 'MM', 'Asia/Yangon');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('244', 'MN', 'Asia/Ulaanbaatar');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('245', 'MN', 'Asia/Hovd');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('246', 'MN', 'Asia/Choibalsan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('247', 'MO', 'Asia/Macau');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('248', 'MP', 'Pacific/Saipan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('249', 'MQ', 'America/Martinique');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('250', 'MR', 'Africa/Nouakchott');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('251', 'MS', 'America/Montserrat');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('252', 'MT', 'Europe/Malta');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('253', 'MU', 'Indian/Mauritius');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('254', 'MV', 'Indian/Maldives');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('255', 'MW', 'Africa/Blantyre');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('256', 'MX', 'America/Mexico_City');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('257', 'MX', 'America/Cancun');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('258', 'MX', 'America/Merida');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('259', 'MX', 'America/Monterrey');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('260', 'MX', 'America/Matamoros');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('261', 'MX', 'America/Mazatlan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('262', 'MX', 'America/Chihuahua');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('263', 'MX', 'America/Ojinaga');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('264', 'MX', 'America/Hermosillo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('265', 'MX', 'America/Tijuana');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('266', 'MX', 'America/Bahia_Banderas');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('267', 'MY', 'Asia/Kuala_Lumpur');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('268', 'MY', 'Asia/Kuching');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('269', 'MZ', 'Africa/Maputo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('270', 'NA', 'Africa/Windhoek');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('271', 'NC', 'Pacific/Noumea');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('272', 'NE', 'Africa/Niamey');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('273', 'NF', 'Pacific/Norfolk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('274', 'NG', 'Africa/Lagos');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('275', 'NI', 'America/Managua');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('276', 'NL', 'Europe/Amsterdam');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('277', 'NO', 'Europe/Oslo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('278', 'NP', 'Asia/Kathmandu');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('279', 'NR', 'Pacific/Nauru');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('280', 'NU', 'Pacific/Niue');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('281', 'NZ', 'Pacific/Auckland');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('282', 'NZ', 'Pacific/Chatham');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('283', 'OM', 'Asia/Muscat');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('284', 'PA', 'America/Panama');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('285', 'PE', 'America/Lima');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('286', 'PF', 'Pacific/Tahiti');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('287', 'PF', 'Pacific/Marquesas');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('288', 'PF', 'Pacific/Gambier');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('289', 'PG', 'Pacific/Port_Moresby');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('290', 'PG', 'Pacific/Bougainville');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('291', 'PH', 'Asia/Manila');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('292', 'PK', 'Asia/Karachi');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('293', 'PL', 'Europe/Warsaw');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('294', 'PM', 'America/Miquelon');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('295', 'PN', 'Pacific/Pitcairn');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('296', 'PR', 'America/Puerto_Rico');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('297', 'PS', 'Asia/Gaza');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('298', 'PS', 'Asia/Hebron');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('299', 'PT', 'Europe/Lisbon');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('300', 'PT', 'Atlantic/Madeira');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('301', 'PT', 'Atlantic/Azores');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('302', 'PW', 'Pacific/Palau');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('303', 'PY', 'America/Asuncion');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('304', 'QA', 'Asia/Qatar');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('305', 'RE', 'Indian/Reunion');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('306', 'RO', 'Europe/Bucharest');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('307', 'RS', 'Europe/Belgrade');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('308', 'RU', 'Europe/Kaliningrad');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('309', 'RU', 'Europe/Moscow');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('310', 'RU', 'Europe/Simferopol');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('311', 'RU', 'Europe/Volgograd');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('312', 'RU', 'Europe/Kirov');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('313', 'RU', 'Europe/Astrakhan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('314', 'RU', 'Europe/Saratov');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('315', 'RU', 'Europe/Ulyanovsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('316', 'RU', 'Europe/Samara');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('317', 'RU', 'Asia/Yekaterinburg');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('318', 'RU', 'Asia/Omsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('319', 'RU', 'Asia/Novosibirsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('320', 'RU', 'Asia/Barnaul');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('321', 'RU', 'Asia/Tomsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('322', 'RU', 'Asia/Novokuznetsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('323', 'RU', 'Asia/Krasnoyarsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('324', 'RU', 'Asia/Irkutsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('325', 'RU', 'Asia/Chita');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('326', 'RU', 'Asia/Yakutsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('327', 'RU', 'Asia/Khandyga');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('328', 'RU', 'Asia/Vladivostok');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('329', 'RU', 'Asia/Ust-Nera');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('330', 'RU', 'Asia/Magadan');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('331', 'RU', 'Asia/Sakhalin');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('332', 'RU', 'Asia/Srednekolymsk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('333', 'RU', 'Asia/Kamchatka');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('334', 'RU', 'Asia/Anadyr');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('335', 'RW', 'Africa/Kigali');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('336', 'SA', 'Asia/Riyadh');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('337', 'SB', 'Pacific/Guadalcanal');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('338', 'SC', 'Indian/Mahe');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('339', 'SD', 'Africa/Khartoum');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('340', 'SE', 'Europe/Stockholm');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('341', 'SG', 'Asia/Singapore');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('342', 'SH', 'Atlantic/St_Helena');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('343', 'SI', 'Europe/Ljubljana');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('344', 'SJ', 'Arctic/Longyearbyen');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('345', 'SK', 'Europe/Bratislava');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('346', 'SL', 'Africa/Freetown');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('347', 'SM', 'Europe/San_Marino');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('348', 'SN', 'Africa/Dakar');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('349', 'SO', 'Africa/Mogadishu');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('350', 'SR', 'America/Paramaribo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('351', 'SS', 'Africa/Juba');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('352', 'ST', 'Africa/Sao_Tome');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('353', 'SV', 'America/El_Salvador');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('354', 'SX', 'America/Lower_Princes');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('355', 'SY', 'Asia/Damascus');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('356', 'SZ', 'Africa/Mbabane');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('357', 'TC', 'America/Grand_Turk');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('358', 'TD', 'Africa/Ndjamena');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('359', 'TF', 'Indian/Kerguelen');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('360', 'TG', 'Africa/Lome');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('361', 'TH', 'Asia/Bangkok');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('362', 'TJ', 'Asia/Dushanbe');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('363', 'TK', 'Pacific/Fakaofo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('364', 'TL', 'Asia/Dili');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('365', 'TM', 'Asia/Ashgabat');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('366', 'TN', 'Africa/Tunis');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('367', 'TO', 'Pacific/Tongatapu');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('368', 'TR', 'Europe/Istanbul');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('369', 'TT', 'America/Port_of_Spain');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('370', 'TV', 'Pacific/Funafuti');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('371', 'TW', 'Asia/Taipei');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('372', 'TZ', 'Africa/Dar_es_Salaam');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('373', 'UA', 'Europe/Kiev');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('374', 'UA', 'Europe/Uzhgorod');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('375', 'UA', 'Europe/Zaporozhye');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('376', 'UG', 'Africa/Kampala');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('377', 'UM', 'Pacific/Midway');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('378', 'UM', 'Pacific/Wake');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('379', 'US', 'America/New_York');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('380', 'US', 'America/Detroit');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('381', 'US', 'America/Kentucky/Louisville');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('382', 'US', 'America/Kentucky/Monticello');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('383', 'US', 'America/Indiana/Indianapolis');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('384', 'US', 'America/Indiana/Vincennes');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('385', 'US', 'America/Indiana/Winamac');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('386', 'US', 'America/Indiana/Marengo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('387', 'US', 'America/Indiana/Petersburg');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('388', 'US', 'America/Indiana/Vevay');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('389', 'US', 'America/Chicago');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('390', 'US', 'America/Indiana/Tell_City');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('391', 'US', 'America/Indiana/Knox');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('392', 'US', 'America/Menominee');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('393', 'US', 'America/North_Dakota/Center');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('394', 'US', 'America/North_Dakota/New_Salem');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('395', 'US', 'America/North_Dakota/Beulah');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('396', 'US', 'America/Denver');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('397', 'US', 'America/Boise');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('398', 'US', 'America/Phoenix');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('399', 'US', 'America/Los_Angeles');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('400', 'US', 'America/Anchorage');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('401', 'US', 'America/Juneau');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('402', 'US', 'America/Sitka');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('403', 'US', 'America/Metlakatla');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('404', 'US', 'America/Yakutat');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('405', 'US', 'America/Nome');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('406', 'US', 'America/Adak');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('407', 'US', 'Pacific/Honolulu');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('408', 'UY', 'America/Montevideo');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('409', 'UZ', 'Asia/Samarkand');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('410', 'UZ', 'Asia/Tashkent');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('411', 'VA', 'Europe/Vatican');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('412', 'VC', 'America/St_Vincent');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('413', 'VE', 'America/Caracas');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('414', 'VG', 'America/Tortola');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('415', 'VI', 'America/St_Thomas');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('416', 'VN', 'Asia/Ho_Chi_Minh');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('417', 'VU', 'Pacific/Efate');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('418', 'WF', 'Pacific/Wallis');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('419', 'WS', 'Pacific/Apia');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('420', 'YE', 'Asia/Aden');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('421', 'YT', 'Indian/Mayotte');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('422', 'ZA', 'Africa/Johannesburg');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('423', 'ZM', 'Africa/Lusaka');
INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES ('424', 'ZW', 'Africa/Harare');


