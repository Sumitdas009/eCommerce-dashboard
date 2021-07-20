-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 02:49 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(5, 'Admin Demo', 'demo@gmail.com', '123456', 'Riad.jpg', '33456693', 'Bangladesh', 'Developer', '  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical  '),
(9, 'Mysha Rahman', 'mysha.rahman@northsouth.edu', '123456', '2017-10-31-12-56-39-460.jpg', '01654545454545', 'Bangladesh', 'Web Developer', '           Web Developer of North South.          ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` int(55) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(9, 'Man', 'All Man Fashion categories can be found here and You can buy easily with your cart\r\n'),
(10, 'Women', 'All Woman Fashion categories can be found here and You can buy easily with your cart\r\n\r\n'),
(11, 'Phone & Tablet', 'All Phone and tablet categories can be found here and You can buy easily with your cart\r\n\r\n'),
(12, 'Home & Living', 'All Home and Living categories can be found here and You can buy easily with your cart\r\n\r\n'),
(13, 'Beauty & Health', 'All Beauty and health categories can be found here and You can buy easily with your cart\r\n'),
(14, 'Kids & Toys', 'All Kids and Toys categories can be found here and You can buy easily with your cart\r\n\r\n'),
(15, 'Other Categories', 'Other extra stuff can be found here and You can buy easily with your cart\r\n\r\n'),
(16, 'Sports & Travel', 'All Sports and Travel items can be found here and You can buy easily with your cart\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_gender` varchar(100) NOT NULL,
  `customer_zipcode` varchar(100) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_gender`, `customer_zipcode`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`) VALUES
(1, 'Mahbubur Riad', 'demo@gmail.com', '123456', 'Bangladesh', 'Dhaka', '01711574805', 'Male', '122', 'Nikunja 2, Dhaka, Bangladesh', '28279338_1826096224114456_3886215294656287949_n.jpg', '127.0.0.1', ''),
(5, 'mysha rahman', 'mysha.rahman@northsouth.edu', '123456', 'bangladesh', 'dhaka', '018383838838', 'Female', '122', 'dhanmondi', '2017-09-02-18-33-21-409.jpg', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `due_amount` int(11) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1, 1, 4651, 995387318, 1, 'Small', '2018-06-09 18:44:02', 'Complete'),
(2, 1, 1073, 775260956, 1, 'Small', '2018-06-09 18:44:37', 'Complete'),
(3, 1, 8230, 1296941894, 2, 'Small', '2018-06-09 19:01:33', 'Complete'),
(4, 1, 4651, 1296941894, 3, 'Small', '2018-06-09 18:45:24', 'Complete'),
(5, 1, 5674, 57717093, 1, 'Small', '2018-06-12 11:14:49', 'Complete'),
(6, 1, 13854, 150998607, 3, 'Small', '2018-06-12 11:16:56', 'pending'),
(7, 4, 2095, 645138746, 1, 'Small', '2018-06-18 11:40:15', 'Complete'),
(8, 4, 2095, 655379613, 1, 'Small', '2018-06-18 11:43:51', 'pending'),
(9, 4, 4140, 655379613, 2, 'Small', '2018-06-18 11:43:51', 'pending'),
(10, 4, 459, 715909805, 1, 'Small', '2018-06-18 11:49:02', 'pending'),
(11, 4, 0, 1642421015, 3, 'Small', '2018-06-18 11:54:57', 'pending'),
(12, 4, 0, 1642421015, 1, 'Small', '2018-06-18 11:54:57', 'pending'),
(13, 4, 0, 1642421015, 3, 'Small', '2018-06-18 11:54:57', 'pending'),
(14, 4, 1559, 1396932563, 1, 'Small', '2018-06-18 11:57:50', 'pending'),
(15, 4, 2070, 1396932563, 1, 'Small', '2018-06-18 11:57:50', 'pending'),
(16, 4, 1252, 182811974, 3, 'Small', '2018-06-18 11:59:04', 'pending'),
(17, 4, 22520, 182811974, 4, 'Small', '2018-06-18 11:59:04', 'pending'),
(18, 1, 5163, 1311328606, 5, 'Small', '2018-06-18 18:45:43', 'pending'),
(19, 5, 16385, 1599844595, 4, 'Medium', '2018-06-22 18:32:26', 'Complete'),
(20, 5, 1252, 1599844595, 3, 'Small', '2018-06-22 18:36:34', 'Complete'),
(21, 5, 5572, 1283089109, 1, 'Small', '2018-06-22 18:48:12', 'pending'),
(22, 8, 2095, 609195684, 1, 'Small', '2018-06-29 01:41:42', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` text NOT NULL,
  `code` int(11) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(11) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(11, 13, 9, '2018-07-09 23:07:58', 'Black Twill Gabardine Pant for Men', '1QRFRHTRI.jpg', '1UFFW06UD.jpg', '1WGQD0VQ7.jpg', 520, '<h2 style=\"background-color: transparent; box-sizing: border-box; color: #000000; display: block; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 500; letter-spacing: normal; line-height: 22px; orphans: 2; padding-bottom: 20px; text-align: left; text-decoration: none; text-indent: 0px; text-transform: uppercase; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 0px;\">About Right Mask</h2>\r\n<p><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Right Mask Aim to establish customer satisfaction.Right now in our country is not giving proper satisfaction as in their demand.we are here to try.</span></p>\r\n<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 40px 0px 40px 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Product Type: Gabardine Pant</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Color: Black</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Main Material: Twill</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Gender: Men</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; margin: 40px 0px 0px 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0px;\">Specifications of Black Twill Gabardine Pant for Men</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">RI357FA00DHNCNAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">0.1</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Main material</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">Twill</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Type</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">Gabardine Pant</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Right Mask'),
(12, 13, 9, '2018-07-09 23:13:27', 'Boomex Ash Fleece Joggers For Men', '1OF5N6QJJ.jpg', '14KIZ7ZFS.jpg', '18W29OHJD.jpg', 820, '<h3 style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 13.2px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 0px;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">About Boomex</strong></h3>\r\n<p><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Boomex is one of the popular brand for all type of fashion products at reasonable price. They provide us different types of fashion items very frequently. Shop your choice from this seller!</span></p>\r\n<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 40px 0px 40px 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Product Type : Joggers</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Color : Ash</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Main Material : Fleece</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Gender : Men</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; margin: 40px 0px 0px 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0px;\">Specifications of Ash Fleece Joggers For Men</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">BO407FA07AO90NAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Model</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">BJT-027</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">0.2</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Main material</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">Fleece</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Type</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">Joggers</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Boomex'),
(13, 13, 9, '2018-07-09 23:21:57', 'Big Bang Fashion Navy Blue Twill Gabardine Pant for Men', '1OJ9GBAF8.jpg', '1T3NP74Q5.jpg', '11KNCKYDJ.jpg', 1790, '<p>Big Bang is the most trusted company</p>', 'Big Bang'),
(14, 13, 10, '2018-07-09 23:26:35', 'Laksba Sky Blue Denim Jeans for Women', '11X3KS7A9.jpg', '1ESVKXT2I.jpg', '2.jpg', 1499, '<h2 style=\"background-color: transparent; box-sizing: border-box; color: #000000; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 500; letter-spacing: normal; line-height: 15.4px; margin-bottom: 8.5px; margin-top: 0px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">About Women&rsquo;s&nbsp;Pant</h2>\r\n<p><br style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\" /><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">We&rsquo;ve got women&rsquo;s pants for casual and dressy occasions. Discover tons of designs in neutrals, bright colors and prints. Looking for cosy comfort? Modern stretch pants give a beautiful fit and stay comfortable all day. Go with a black slim-fit pant for the office or leggings. Opt for skinny cargos on the weekend or liven up any occasion with a printed pair. Suit up! Paired with a blouse and blazer, trousers look great in the office. Go for bootcut trousers that easily cover heels such as wedges or pumps. Casual Friday? Try slim-fit leggings paired with a shirtdress and booties. Keep your accessories to a minimal and finish your look with a polished bag.</span></p>\r\n<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 40px 0px 40px 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; margin-bottom: 0px; margin-top: 0px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Product Type: Jeans</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Color: Sky Blue</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Main Material: Denim</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Stylish and fashionable</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Gender: Women</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; margin: 40px 0px 0px 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Specifications of Sky Blue Denim Jeans for Women</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">LA584FA110VHKNAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">0.3</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Main material</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Denim</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Laksba'),
(15, 19, 12, '2018-07-09 23:34:17', 'Antique White Cotton Double Size Bed Sheet Set With Two Pillow Covers', '1SG5Q08BT.jpg', 'sss.jpg', 'fdasd.jpg', 1890, '<p>The Most comfortness</p>', 'BEACON HOMETEXTILE'),
(16, 14, 9, '2018-07-09 23:47:36', 'Sky Sea Coffee Leather Boot For Men', '1ACXCK8BB.jpg', 'ff2.jpg', 'ff3.jpg', 3490, '<p><strong><span style=\"color: #606060; font-family: Helvetica; font-size: small;\">About Sky Sea Shoes<br style=\"text-align: left; text-transform: none; text-indent: 0px; letter-spacing: normal; font-style: normal; font-variant: normal; text-decoration: none; word-spacing: 0px; white-space: normal; box-sizing: border-box; orphans: 2; -webkit-text-stroke-width: 0px; background-color: transparent;\" /></span></strong><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sky Sea Shoes is an exclusively designed Formal and casual shoe collection, tailor-made to suit the individualistic taste and luxurious lifestyle of a man who defines success. They made the ultimate shoe made from the finest quality materials and premium accessories that exudes luxury and authority in every step.</span></p>\r\n<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 40px 0px 40px 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; margin-bottom: 0px; margin-top: 0px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Product Type: Boot</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Color: Coffee</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Gender: Men</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Main Material: Leather</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; margin: 40px 0px 0px 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Specifications of Coffee Leather Boot For Men</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">SK694SH1IYRNCNAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">0.2</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Main material</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Leather</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Type</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Boot</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Sky Sea'),
(17, 14, 9, '2018-07-09 23:50:48', 'Pegasus Leather Casual Desert Boots - Deep Brown', '1GOUYBBY3.jpg', 'rrr2.jpg', 'ssssssssss3.jpg', 2975, '<p>Pegaus and the best leather available here</p>', 'Pegasus'),
(18, 18, 11, '2018-07-09 23:54:17', 'OnePlus 6 Smartphone - 6.28\" - 6GB RAM - 64GB ROM - 16MP Camera - Mirror Black', 'sss4.jpg', '14E7NRWJS.jpg', '3ssss.jpg', 55990, '<p>Oneplus 6 is the best mobile set ever</p>', 'OnePlus'),
(19, 16, 10, '2018-07-09 23:55:56', 'Tomas Unique Collection Golden Gold Plated Jewellery Set for Women', '16QGE295Z.jpg', '135M4R2VG.jpg', '1J61Z4TJ3.jpg', 1850, '<h3 style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 500; letter-spacing: normal; line-height: 23.1px; margin-bottom: 8.5px; margin-top: 0px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">About Tomas Unique Collection</h3>\r\n<p><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Tomas Unique Collection is a shop where you will get every thing at a reasonable price with best quality.</span></p>\r\n<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 40px 0px 40px 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; margin-bottom: 0px; margin-top: 0px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Product type: Jewellery Set</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Material: Gold Plated</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Color: Golden</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Gender: Women</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Stylish and fashionable</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; margin: 40px 0px 0px 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Specifications of Golden Gold Plated Jewellery Set for Women</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">TO379AC1E0QP4NAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">0.2</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Type</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Jewellery Set</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Tomas Unique'),
(20, 22, 14, '2018-07-10 00:00:01', 'FERDOUS GIFT & FASHION Sky Blue and Blue Polyester and Viscose Party Dress for Girls C00272-120', '1FPTOU0F6.jpg', '1E8CLZZVF.jpg', '1G13V2W5B.jpg', 3199, '<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #555555; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-bottom: 40px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; margin-bottom: 0px; margin-top: 0px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Product Type: Girls Polyester Party Dress</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Color: Red and White</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Main Material: Polyester &amp; Viscose</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Gender: Girls</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Unique Design</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Big Lovely bow on the front</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-top: 40px; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Specifications of Sky Blue and Blue Polyester and Viscose Party Dress for Girls C00272-120</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">FE735TB06UG80NAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Model</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">C00272-120</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">0.2</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Main material</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Polyester &amp; Viscose</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Type</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Party Dress</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'FERDOUS GIFT'),
(21, 15, 9, '2018-07-10 00:02:45', 'Casio EFR-547D-2AVUEF - Silver Stainlesse Steel Chronograph Watch for Men', '1O5HQV5O1.jpg', '2.jpg', '3.jpg', 12350, '<h2 style=\"background-color: transparent; box-sizing: border-box; color: #000000; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 500; letter-spacing: normal; line-height: 15.4px; margin-bottom: 8.5px; margin-top: 0px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">About Casio</strong></h2>\r\n<p><br style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\" /><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Casio is a long time leader in the \"affordable segment\" of the digital watch market. The company is an increasingly active participant in the higher end quartz analogue sector as well. In recent years, I have started to take note of their most affordable analogues. </span><br style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\" /><br style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\" /><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">This watch is lightweight and comfortable. It has a nice size to it, neither insanely oversized nor too small, and it has a crisp, uncluttered, very readable dial. It comes with a surprise, thick, high-quality canvas band, with two Zulu style metal buckles. The resin case and contrasting bezel give the watch an understated look and the impression is less \"plastic-y\" than many lower-end offerings. The solar cell should provide years of power without requiring a battery change (the cost of which would almost certainly be more than the watch is worth.</span></p>\r\n<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 40px 0px 40px 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; margin-bottom: 0px; margin-top: 0px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Product Type: Watch</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Super-Illuminator</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Water resistance: 10 Bar</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Neo-display</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Date display</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Stopwatch function: 1/10 sec</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Mineral glass</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Solid stainless steel case</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Screw locked back</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Stainless steel band</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; margin: 40px 0px 0px 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Specifications of EFR-547D-2AVUEF - Silver Stainlesse Steel Chronograph Watch for Men</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">CA076AC0MAPRGNAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">0.18</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Main material</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Stainlesse Steel</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Product warranty</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">1 Year</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Casio');
INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(22, 17, 9, '2018-07-10 00:05:05', 'Ecstasy Navy Blue Cotton Tanjim Panjabi for Men', '1NM49GAR8.jpg', '2.jpg', '3.jpg', 2788, '<h3 style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 13.2px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 0px;\">Panjabi</h3>\r\n<p><br style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\" /><br style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\" /><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Panjabi is a traditional clothing which can be worn for any occasion. Panjabi has a traditional value in Bangladesh. The main material of Panjabi is mostly Cotton or they can be cotton mixed. Only soft material fabrics are used for making Panjabi as it is supposed to be a comfortable loose fitting dress. Though good quality cotton is the most common material used for making Panjabi. Other fabrics like silk and satin are also used.</span></p>\r\n<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 40px 0px 40px 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Product Type:Panjabi</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Color:Navy Blue</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Main Material:Cotton</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Gender: Men</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; margin: 40px 0px 0px 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0px;\">Specifications of Navy Blue Cotton Tanjim Panjabi for Men</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">EC448FA0EKPFGNAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">0.2</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Main material</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">Cotton</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Ecstasy'),
(23, 17, 10, '2018-07-10 00:06:55', 'Combo of Light Yellow Linen Panjabi with White Pajama and Cream Linen Kurti for Couple', '1SNZJGFL6.jpg', '1QIK6Q2WK.jpg', '1QBSMSUYN.jpg', 4830, '<h2 style=\"background-color: transparent; box-sizing: border-box; color: #000000; display: block; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 500; letter-spacing: normal; line-height: 22px; orphans: 2; padding-bottom: 20px; text-align: left; text-decoration: none; text-indent: 0px; text-transform: uppercase; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 0px;\">Combo of Linen Panjabi and Linen Kurti&nbsp; for Couple</h2>\r\n<p><br style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\" /><span style=\"display: inline !important; float: none; background-color: transparent; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">This kurti and panjabi is perfect for the young and smart person which can be worn for any occasion. You can happily use these&nbsp; kurti and Panjabi for daily wear, party wear, festival wear or anywhere. Soft material fabrics are used for making kurti and panjabi as it is supposed to be a comfortable loose fitting dress. The colorful kurti and panjabi will definitely make you look smart and stylish.</span></p>\r\n<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #606060; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px; margin: 40px 0px 40px 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Product Type: Panjabi and Kurti</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Panjabi Material: Linen</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Kurti Material: Linen</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Panjabi Size: 38,40,42</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Kurti Size: 36,38,40,42</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; padding-left: 8px; position: relative; top: auto; margin: 3px 0px 0px 0px;\">Standard and Smart Design</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; margin: 40px 0px 0px 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px; margin: 0px;\">Specifications of Combo of Light Yellow Linen Panjabi with White Pajama and Cream Linen Kurti for Couple</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">DE410FA096BQSNAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">0.3</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row; margin: 0px;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px; margin: 0px;\">Main material</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px; margin: 0px;\">Cotton</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Combo of Light'),
(24, 21, 13, '2018-07-10 00:11:32', 'Wet n Wild Photofocus Foundation Soft ivory', '1C52MS8IE.jpg', '1PTYWNGDJ.jpg', '149A3NANZ.jpg', 880, '<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #555555; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-bottom: 40px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; margin-bottom: 0px; margin-top: 0px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Product type: Foundation</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Shade: Soft ivory</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Application Area: Face</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Gender: Women</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">For all skin types</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-top: 40px; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Specifications of Photofocus Foundation - Soft ivory</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">WE519HB1C85UONAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">0.2</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Type</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Foundation</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Wet n Wild'),
(25, 20, 16, '2018-07-10 00:15:28', 'Monihar Sports Cricket Ball', '10B1QRDVF.jpg', '1LFMTN97K.jpg', '15VV6Q68S.jpg', 638, '<div class=\"list -features\" style=\"background-color: transparent; box-sizing: border-box; color: #555555; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-bottom: 40px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">\r\n<div class=\"title\" style=\"box-sizing: border-box; color: #aaaaaa; font-size: 16px; font-weight: bold; line-height: 20px; margin-bottom: 0px; margin-top: 0px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Key Features</div>\r\n<ul style=\"box-sizing: border-box; clear: none; display: block; list-style-image: none; list-style-position: outside; list-style-type: none; padding: 0px; margin: 0px;\">\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Premium Quality Cricket Balls high quality leather&nbsp;</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Suitable for 20 TO 25 overs cricket</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Machine stitched&nbsp;</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">Weight 156 grams</li>\r\n<li style=\"box-sizing: border-box; color: #606060; display: block; font-size: 12px; left: auto; line-height: 16px; margin-top: 3px; padding-left: 8px; position: relative; top: auto;\">White ball black seam</li>\r\n</ul>\r\n</div>\r\n<div class=\"osh-table -no-border\" style=\"background-color: #ffffff; border-image-outset: 0; border-image-repeat: stretch; border-image-slice: 100%; border-image-source: none; border-image-width: 1; box-sizing: border-box; color: #606060; display: table; font-family: Roboto,Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-top: 40px; orphans: 2; table-layout: fixed; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; width: 710px; word-spacing: 0px; border: 0px none #606060;\">\r\n<div class=\"caption\" style=\"box-sizing: border-box; color: #aaaaaa; display: table-caption; font-size: 16px; font-weight: bold; line-height: 20px; text-transform: uppercase; padding: 0px 0px 10px 0px;\">Specifications of Cricket Ball - White</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">SKU</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">MO147SP0HRG7SNAFAMZ</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Weight (kg)</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">0.15</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Type</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Cricket Ball</div>\r\n</div>\r\n<div class=\"osh-row \" style=\"box-sizing: border-box; clear: both; display: table-row;\">\r\n<div class=\"osh-col -head\" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; color: #000000; display: table-cell; font-weight: bold; width: 177.5px; padding: 10px 20px 10px 0px;\">Sport type</div>\r\n<div class=\"osh-col \" style=\"border-top-color: #dddddd; border-top-style: solid; border-top-width: 1px; box-sizing: border-box; display: table-cell; padding: 10px 0px 10px 0px;\">Cricket</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'Monihar'),
(26, 15, 10, '2018-07-10 00:19:23', 'Rose Arrow RA094 Stainless Steel Watch for Women', '13EO3NCBY.jpg', '3.jpg', '2.jpg', 1990, '<p>A particular woment watch for</p>', 'Rose Arrow');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(11) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(13, 'Pants', 'All Pants Man and women categories can be found here and You can buy easily with your cart\r\n'),
(14, 'Shoes', 'All Shoes Man and women categories can be found here and You can buy easily with your cart \r\n'),
(15, 'watch', 'All watch Man and women categories can be found here and You can buy easily with your cart \r\n'),
(16, 'Jewellery Sets', 'All  jewellery sets women categories can be found here and You can buy easily with your cart \r\n'),
(17, 'Panjabies', 'All Panjabies Man and women categories can be found here and You can buy easily with your cart \r\n'),
(18, 'Samsung', 'All mobiles categories can be found here and You can buy easily with your cart \r\n'),
(19, 'Bedsheets', 'All Badsheets categories can be found here and You can buy easily with your cart \r\n'),
(20, 'Cricket', 'All cricket Man and women categories can be found here and You can buy easily with your cart \r\n'),
(21, 'Face Care', 'All Face care categories can be found here and You can buy easily with your cart '),
(22, 'Girl Clothing', 'All Girl clothing categories can be found here and You can buy easily with your cart \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_request`
--

CREATE TABLE `product_request` (
  `prid` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide Number 1', '1.jpg'),
(2, 'Slide Number 2', '2.png'),
(3, 'Slide Number 3', '3.jpg'),
(4, 'Slide Number 4', '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `product_request`
--
ALTER TABLE `product_request`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_request`
--
ALTER TABLE `product_request`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
