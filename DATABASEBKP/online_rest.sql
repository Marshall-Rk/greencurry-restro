-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 12:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', '', '2018-04-09 07:36:18'),
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', 'QX5ZMN', '2018-04-13 18:12:30'),
(9, 'nextgenpixel', '701fb90716e10ecc7a43852e0eae27f1', 'nextgenpixel@gmail.com', 'QMTZ2J', '2021-06-18 08:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(11, 48, 'Bonefish', 'Three ounces of lightly seasoned fresh tilapia ', '55.77', '5ad7582e2ec9c.jpg'),
(12, 48, 'Hard Rock Cafe', 'A mix of chopped lettuces, shredded cheese, chicken cubes', '22.12', '5ad7590d9702b.jpg'),
(13, 49, 'Uno Pizzeria & Grill', 'Kids can choose their pasta shape, type of sauce, favorite veggies (like broccoli or mushrooms)', '12.35', '5ad7597aa0479.jpg'),
(14, 50, 'Red Robins Chick on a Stick', 'Plain grilled chicken breast? Blah.', '34.99', '5ad759e1546fc.jpg'),
(15, 51, 'Lyfe Kitchens Tofu Taco', 'This chain, known for a wide selection of vegetarian and vegan choices', '11.99', '5ad75a1869e93.jpg'),
(16, 52, 'Houlihans Mini Cheeseburger', 'Creekstone Farms, where no antibiotics or growth hormones are used', '22.55', '5ad75a5dbb329.jpg'),
(17, 53, 'jklmno', 'great taste great whatever', '17.99', '5ad79fcf59e66.jpg'),
(18, 64, 'Cheddar-Stuffed', ' Burgers with Pickled Slaw and Fried Shallots', '20.00', '60cdc5207bed4.jpg'),
(19, 63, 'Bacon-and-Kimchi Burgers', ' Shack–inspired burger ', '50.00', '60cdc54b0eaac.jpg'),
(20, 62, 'Blue Ribbon ', 'Barbecue Chicken Cheeseburgers', '150.00', '60cdc573b8220.jpg'),
(21, 61, 'Double Cheeseburgers', ' Los Angeles-Style', '750.00', '60cdc594b5732.jpg'),
(22, 60, 'Cheese-Stuffed Burgers', 'Pimento pro', '450.00', '60cdc5afe6cce.jpg'),
(23, 48, 'Asian-Style Pork Burgers', 'Asian-Style ', '600.00', '60cdc5da2625b.jpg'),
(24, 59, 'Rajma', 'Desi Style Rajma', '240.00', '60cdc60482276.jpg'),
(25, 58, 'Hakka Noodles', 'Chienese Tadka', '300.00', '60cdc631a8e4e.jpg'),
(26, 55, 'Chole-Chawal', 'Desi tadka chole', '420.00', '60cdc665e0f62.jpg'),
(27, 57, 'Chole', 'Amritsari style', '311.00', '60cdc69191db8.jpg'),
(28, 56, 'Falafal', 'Mexican soul', '620.00', '60cdc6bb0c20e.jpg'),
(29, 54, 'Veg-Thali', 'From all over india', '1200.00', '60cdc72f54c36.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50'),
(71, 40, 'in process', 'in 30mins', '2021-06-18 06:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(48, 5, 'Hari Burger', 'HariBurger@gmail.com', ' 090412 64676', 'HariBurger.com', '7am', '4pm', 'mon-tue', ' Palace,   natwar jalandhar', '5ad74ce37c383.jpg', '2018-04-18 13:49:23'),
(49, 5, 'The Great Kabab Factory', 'kwbab@gmail.com', '011 2677 9070', 'kwbab.com', '6am', '5pm', 'mon-fri', 'Radisson Blu Plaza Hotel, Delhi Airport, NH-8, New Delhi, 110037', '5ad74de005016.jpg', '2018-04-18 13:53:36'),
(50, 6, 'Aarkay Vaishno Dhaba', 'Vaishno@gmail.com', '090410 35147', 'Vaishno.com', '6am', '6pm', 'mon-sat', 'Bhargav Nagar, Jalandhar - Nakodar Rd, Jalandhar, Punjab 144003', '5ad74e5310ae4.jpg', '2018-04-18 13:55:31'),
(51, 7, 'Martini', 'martin@gmail.com', '3454345654', 'martin.com', '8am', '4pm', 'mon-thu', '399 L Near Apple Showroom, Model Town,', '5ad74ebf1d103.jpg', '2018-04-18 13:57:19'),
(52, 8, 'hudson', 'hud@gmail.com', '2345434567', 'hudson.com', '6am', '7pm', 'mon-fri', 'Opposite Lovely Sweets, Nakodar Road, Jalandhar, Punjab 144001', '5ad756f1429e3.jpg', '2018-04-18 14:32:17'),
(53, 9, 'kriyana store', 'kari@gmail.com', '4512545784', 'kari.com', '7am', '7pm', 'mon-sat', 'near kalu gali hotel india what everrrr.', '5ad79e7d01c5a.jpg', '2018-04-18 19:37:33'),
(54, 11, 'Radha-Krishna', 'radha.Krishna@gmail.com', '9503182793', 'https://www.radhe.com', '9am', '8pm', 'mon-sat', ' agrawala nagri golden trade\r\nvasai 401208 ', '60cda41bc017a.jpg', '2021-06-19 08:00:27'),
(55, 11, 'Desi tadka dhaba', 'desitadkadhaba@gmail.com', '9503254758', 'https://desitadkadhaba.in', '11am', '8pm', '24hr-x7', 'Shop number A/1,2,3 sanjari shoping center, opposite veena dynasty, Vasai-Virar, Maharashtra 401209', '60cda501c801e.jpg', '2021-06-19 08:04:17'),
(56, 11, 'Lakeside', 'lakeside@gmail.com', '9874585742', 'https://lakeside.co.in', '6am', '8pm', 'mon-sat', ' Martin Commercial Complex, First Floor, Achole Road, Nalasopara East, Nala Sopara, Maharashtra 401209', '60cda555a4b85.jpg', '2021-06-19 08:05:41'),
(57, 11, 'Maratha Darbar', 'marathadarbar@gmail.com', '2545874521', 'https://marathadarbar.com', '8am', '4pm', '24hr-x7', 'Ground Floor, Anant Sankalp, Evershine City Road, Near, Achole Talao, Nala Sopara, Maharashtra 401209', '60cda61589136.jpg', '2021-06-19 08:08:53'),
(58, 11, 'Sai Leela Restaurant', 'saileela@gmail.com', '8547452145', 'https://saileela.com', '10am', '8pm', 'mon-fri', 'Shop no. 7, Protima Bldg., Opp. Akansha Complex, Achole Road, East, Nalasopara West, Mumbai, Maharashtra 401209', '60cda69112104.jpg', '2021-06-19 08:10:57'),
(59, 11, 'Dreamland', 'dreamland@gmail.com', '9632584125', 'https://dreamland.in', '9am', '7pm', 'mon-fri', ' Jawaharlal Nehru Rd, Vasant Nagari, Nalasopara East, Nala Sopara, Maharashtra 401209', '60cda6d660e48.jpg', '2021-06-19 08:12:06'),
(60, 13, 'Nino Burgers', 'ninoburgers@gmail.com', '7458485489', 'https://ninoburgers.com', '8am', '5pm', '24hr-x7', 'shop no 130, Mohamed Manzil ground floor, 5th Rd, opp. hanuman Temple, Khar West, Mumbai, Maharashtra 400052', '60cda7770cd0d.jpg', '2021-06-19 08:14:47'),
(61, 13, 'Howra Burger', 'howraburger@gmail.com', '2548523652', 'https://howraburger.com', '7am', '7pm', 'mon-fri', ' Merwanji Chawl, Shop No: 3, Kamla Patra, Senapati Bapat Marg, Gandhi Nagar, Upper Worli, Lower Parel, Mumbai, Maharashtra 400013', '60cda7b8c6015.jpg', '2021-06-19 08:15:52'),
(62, 13, 'Jimis Burger - Andheri', 'Jimisburger@gmail.com', '9582586541', 'https://Jimisburger.com', '8am', '8pm', '24hr-x7', 'B2, Shree Siddhivinayak Plaza, Off New Link Road, Veera Desai Industrial Estate, Andheri West, Mumbai, Maharashtra 400053', '60cda80ecd8d6.jpg', '2021-06-19 08:17:18'),
(63, 13, 'Starboy Burgers & Shakes', 'starboyburgers@gmail.com', '2541589635', 'https://starboyburgers.com', '10am', '5pm', '24hr-x7', 'Shop No 26. Meera CHS. Oshiwara, New Link Rd, Andheri West, Maharashtra 400053', '60cda991c8c0a.jpg', '2021-06-19 08:23:45'),
(64, 13, 'Bombay Burgers', 'bombayburgers.bb@gmail.com', '7895841584', 'https://bombayburgers.com', '6am', '8pm', '24hr-x7', 'Shop 4, Azad Nagar, Andheri West, near Bhavans College, Mumbai, Maharashtra 400053', '60cda9d9d1fd2.jpg', '2021-06-19 08:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'grill', '2018-04-14 18:45:28'),
(6, 'pizza', '2018-04-14 18:44:56'),
(7, 'pasta', '2018-04-14 18:45:13'),
(8, 'thaifood', '2018-04-14 18:32:56'),
(9, 'fish', '2018-04-14 18:44:33'),
(11, 'Indian', '2021-06-18 08:08:53'),
(12, 'sandwhich', '2021-06-18 08:09:17'),
(13, 'burger', '2021-06-18 08:10:31'),
(14, 'chinese', '2021-06-18 08:10:56'),
(15, 'Wine&Dine', '2021-06-18 08:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(31, 'navjot789', 'navjot', 'singh', 'ns949405@gmail.com', '9041240385', '6d0361d5777656072438f6e314a852bc', 'badri col phase 2', 1, '2018-04-18 10:05:03'),
(32, 'navjot890', 'nav', 'singh', 'nds949405@gmail.com', '6232125458', '6d0361d5777656072438f6e314a852bc', 'badri col phase 1', 1, '2018-04-18 09:50:56'),
(33, 'Rajkamal_Gottam', 'Rajkamal', 'Gottam', 'rajkamalgautam2001@gmail.com', '09503182793', '701fb90716e10ecc7a43852e0eae27f1', 'agrawala nagri\r\nvasai', 1, '2021-06-18 06:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(37, 31, 'jklmno', 5, '17.99', 'closed', '2018-04-18 19:51:50'),
(38, 31, 'Red Robins Chick on a Stick', 2, '34.99', NULL, '2018-04-18 19:52:34'),
(39, 33, 'Bonefish', 1, '55.77', NULL, '2021-06-18 06:39:22'),
(40, 33, 'Hard Rock Cafe', 35, '22.12', 'in process', '2021-06-18 06:40:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
