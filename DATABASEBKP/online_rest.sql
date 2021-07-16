-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 10:25 AM
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
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `Time_of_feedback` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `subject`, `message`, `Time_of_feedback`) VALUES
(1, 'Rajkamal Gottam', 'rajkamalgautam2001@gmail.com', 'complaint', 'food not good\r\n', '2021-06-18 13:32:26'),
(2, 'shashi gautam', 'shashiguatam@gmail.com', 'no', 'no', '2021-07-15 13:40:23');

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
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'rajkamalgautam2001@gmail.com'),
(2, 'official.nextgenpixel@gmail.com'),
(3, 'bhavnagottam.bg@gmail.com'),
(4, 'priyankasinghani@gmail.com'),
(6, 'Maseerashaikh27@gmail.com'),
(7, 'khansana55@gmail.com'),
(8, 'mansimodak@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `email` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `email`, `phone`, `address`, `name`, `amount`, `payment_status`, `token`, `payment_id`, `added_on`) VALUES
(2, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 22, 'complete', '82324440', 'pay_HQQkdHpKBXqFCd', '2021-06-23 10:11:29'),
(3, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 12, 'complete', '859041190', 'pay_HQQmrxLf472b0M', '2021-06-23 10:13:50'),
(4, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 11, 'complete', '1435113788', 'pay_HQQq9gU7OjVg0s', '2021-06-23 10:14:56'),
(17, 'shashigautam@gmail.com', '7258745874', 'c-301 bharat vaibhav  vasai east', 'shashi gautam', 45, 'complete', '529447233', 'pay_HQRAHVk8d4zYer', '2021-06-23 10:36:00'),
(18, 'm.s.gottam@gmail.com', '9858698569', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'mansingh gautam', 1970, 'complete', '2107906587', 'pay_HQRKGhIJZBzYRA', '2021-06-23 10:45:19'),
(32, 'vinayakmakhija@gmail.com', '9658252569', '', 'vinayak', 86, 'complete', '1907116662', 'pay_HQV5fGIytoreoj', '2021-06-23 02:25:21'),
(39, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 86, 'complete', '550962968', 'pay_HQVJoyPPShKGl0', '2021-06-23 02:39:46'),
(40, 'lubnag@gmail.com', '9856985475', '', 'lubna', 113, 'complete', '270375306', 'pay_HQqXwwd9PHa8Im', '2021-06-24 11:25:33'),
(41, 'chandrakamalgautam2424242@gmail.com', '9696521254', '', 'chandrakamal', 600, 'complete', '2059038288', 'pay_HQqnI9bP5WgkMv', '2021-06-24 11:40:01'),
(42, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 70, 'complete', '1083829798', 'pay_HQrFOPdqFxGfXZ', '2021-06-24 12:06:40'),
(46, 'rehan@gmail.com', '7066301198', '', 'rehan', 70, 'pending', '356651880', '', '2021-06-24 12:13:35'),
(47, 'sneha23232@gmail.com', '9874512630', '', 'sneha shetty', 25, 'complete', '1285716379', 'pay_HQrOgUtcmVr1qF', '2021-06-24 12:15:28'),
(48, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 900, 'complete', '1602858420', 'pay_HRKPicxVh93myo', '2021-06-25 04:38:41'),
(49, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 1500, 'complete', '1523468244', 'pay_HRfHdS0E6yDfqF', '2021-06-26 01:03:45'),
(50, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 56, 'complete', '969554575', 'pay_HRiiNCcAoujsLk', '2021-06-26 04:25:14'),
(51, 'rajkamalgautam2001@gmail.com', '09503182793', 'b-101 krishna sagar apt agrawal nagri vasi east ', 'Rajkamal_Gottam', 56, 'pending', '889668492', '', '2021-06-26 04:30:22'),
(52, 'shashigautam@gmail.com', '7276323178', 'c-301 bharat vaibhav  vasai east', 'shashigautam', 250, 'complete', '825076818', 'pay_HRipSL8vpWk6g0', '2021-06-26 04:31:54'),
(53, 'shashigautam@gmail.com', '7276323178', 'c-301 bharat vaibhav  vasai east', 'shashigautam', 311, 'complete', '1694968838', 'pay_HRj8aTHWbNOdfA', '2021-06-26 04:50:00'),
(62, 'shashigautam@gmail.com', '7276323178', 'c-301 bharat vaibhav  vasai east', 'shashigautam', 300, 'complete', '1724057102', 'pay_HTAcqr5JzcoGYI', '2021-06-30 08:22:28'),
(65, 'shashigautam@gmail.com', '7276323178', 'c-301 bharat vaibhav  vasai east', 'shashigautam', 240, 'complete', '978496144', 'pay_HYSQzQg0le0Rhi', '2021-07-13 05:02:32');

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
(71, 40, 'in process', 'in 30mins', '2021-06-18 06:40:07'),
(72, 0, 'in process', 'ts', '2021-06-25 14:41:18'),
(73, 47, 'in process', 'in 1sometimes', '2021-06-26 11:05:35'),
(74, 49, 'in process', '1hr', '2021-06-26 14:33:25'),
(75, 63, 'in process', 'tes', '2021-07-13 15:05:44');

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
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`, `password`) VALUES
(48, 5, 'Hari Burger', 'HariBurger@gmail.com', ' 090412 64676', 'HariBurger.com', '7am', '4pm', 'mon-tue', ' Palace,   natwar jalandhar', '5ad74ce37c383.jpg', '2021-07-11 10:47:15', '265630414'),
(49, 5, 'The Great Kabab Factory', 'kwbab@gmail.com', '011 2677 9070', 'kwbab.com', '6am', '5pm', 'mon-fri', 'Radisson Blu Plaza Hotel, Delhi Airport, NH-8, New Delhi, 110037', '5ad74de005016.jpg', '2021-07-11 10:47:22', '812975211'),
(50, 6, 'Aarkay Vaishno Dhaba', 'Vaishno@gmail.com', '090410 35147', 'Vaishno.com', '6am', '6pm', 'mon-sat', 'Bhargav Nagar, Jalandhar - Nakodar Rd, Jalandhar, Punjab 144003', '5ad74e5310ae4.jpg', '2021-07-11 10:47:27', '579064407'),
(51, 7, 'Martini', 'martin@gmail.com', '3454345654', 'martin.com', '8am', '4pm', 'mon-thu', '399 L Near Apple Showroom, Model Town,', '5ad74ebf1d103.jpg', '2021-07-11 10:47:34', '830302549'),
(52, 8, 'hudson', 'hud@gmail.com', '2345434567', 'hudson.com', '6am', '7pm', 'mon-fri', 'Opposite Lovely Sweets, Nakodar Road, Jalandhar, Punjab 144001', '5ad756f1429e3.jpg', '2021-07-11 10:47:41', '895340124'),
(53, 9, 'kriyana store', 'kari@gmail.com', '4512545784', 'kari.com', '7am', '7pm', 'mon-sat', 'near kalu gali hotel india what everrrr.', '5ad79e7d01c5a.jpg', '2021-07-11 10:47:48', '831517074'),
(54, 11, 'Radha-Krishna', 'radha.Krishna@gmail.com', '9503182793', 'https://www.radhe.com', '9am', '8pm', 'mon-sat', ' agrawala nagri golden trade\r\nvasai 401208 ', '60cda41bc017a.jpg', '2021-07-11 10:47:53', '893407208'),
(55, 11, 'Desi tadka dhaba', 'desitadkadhaba@gmail.com', '9503254758', 'https://desitadkadhaba.in', '11am', '8pm', '24hr-x7', 'Shop number A/1,2,3 sanjari shoping center, opposite veena dynasty, Vasai-Virar, Maharashtra 401209', '60cda501c801e.jpg', '2021-07-11 10:48:06', '630885492'),
(56, 11, 'Lakeside', 'lakeside@gmail.com', '9874585742', 'https://lakeside.co.in', '6am', '8pm', 'mon-sat', ' Martin Commercial Complex, First Floor, Achole Road, Nalasopara East, Nala Sopara, Maharashtra 401209', '60cda555a4b85.jpg', '2021-07-11 10:48:12', '162986093'),
(57, 11, 'Maratha Darbar', 'marathadarbar@gmail.com', '2545874521', 'https://marathadarbar.com', '8am', '4pm', '24hr-x7', 'Ground Floor, Anant Sankalp, Evershine City Road, Near, Achole Talao, Nala Sopara, Maharashtra 401209', '60cda61589136.jpg', '2021-07-11 10:48:17', '739487660'),
(58, 11, 'Sai Leela Restaurant', 'saileela@gmail.com', '8547452145', 'https://saileela.com', '10am', '8pm', 'mon-fri', 'Shop no. 7, Protima Bldg., Opp. Akansha Complex, Achole Road, East, Nalasopara West, Mumbai, Maharashtra 401209', '60cda69112104.jpg', '2021-07-11 10:48:23', '650397437'),
(59, 11, 'Dreamland', 'dreamland@gmail.com', '9632584125', 'https://dreamland.in', '9am', '7pm', 'mon-fri', ' Jawaharlal Nehru Rd, Vasant Nagari, Nalasopara East, Nala Sopara, Maharashtra 401209', '60cda6d660e48.jpg', '2021-07-11 10:48:29', '344544922'),
(60, 13, 'Nino Burgers', 'ninoburgers@gmail.com', '7458485489', 'https://ninoburgers.com', '8am', '5pm', '24hr-x7', 'shop no 130, Mohamed Manzil ground floor, 5th Rd, opp. hanuman Temple, Khar West, Mumbai, Maharashtra 400052', '60cda7770cd0d.jpg', '2021-07-11 10:48:34', '342854009'),
(61, 13, 'Howra Burger', 'howraburger@gmail.com', '2548523652', 'https://howraburger.com', '7am', '7pm', 'mon-fri', ' Merwanji Chawl, Shop No: 3, Kamla Patra, Senapati Bapat Marg, Gandhi Nagar, Upper Worli, Lower Parel, Mumbai, Maharashtra 400013', '60cda7b8c6015.jpg', '2021-07-11 10:48:38', '984656426'),
(62, 13, 'Jimis Burger - Andheri', 'Jimisburger@gmail.com', '9582586541', 'https://Jimisburger.com', '8am', '8pm', '24hr-x7', 'B2, Shree Siddhivinayak Plaza, Off New Link Road, Veera Desai Industrial Estate, Andheri West, Mumbai, Maharashtra 400053', '60cda80ecd8d6.jpg', '2021-07-11 10:48:44', '250376208'),
(63, 13, 'Starboy Burgers & Shakes', 'starboyburgers@gmail.com', '2541589635', 'https://starboyburgers.com', '10am', '5pm', '24hr-x7', 'Shop No 26. Meera CHS. Oshiwara, New Link Rd, Andheri West, Maharashtra 400053', '60cda991c8c0a.jpg', '2021-07-11 10:48:49', '946262200'),
(64, 13, 'Bombay Burgers', 'bombayburgers.bb@gmail.com', '7895841584', 'https://bombayburgers.com', '6am', '8pm', '24hr-x7', 'Shop 4, Azad Nagar, Andheri West, near Bhavans College, Mumbai, Maharashtra 400053', '60cda9d9d1fd2.jpg', '2021-07-11 10:48:54', '519426357'),
(65, 11, 'Beyond-Wine & Dine', 'beyondWine&dine@gmail.com', '6584525874', 'https://beyondWine&dine.com', '--Select your Hours--', '8pm', '24hr-x7', 'Malad, Ram Nagar, Malad West, Mumbai, Maharashtra 400064', '60dc16de28280.jpg', '2021-07-11 10:48:59', '205997721'),
(66, 11, 'The Oceanus Theme Restaurant', 'OceanusThemeRestaurant@gmail.com', '8745852647', 'https://OceanusThemeRestaurant.com', '11am', '6pm', 'mon-sat', '1st floor, Imperial Classic building, Bhabola Naka, Vasai West, Maharashtra 401201', '60dc173550bf4.jpg', '2021-07-11 10:49:03', '937797263'),
(67, 11, 'maanas wine and dine', 'maanaswineanddine@gmail.com', '2547859854', 'https://maanaswineanddine.com', '10am', '8pm', 'mon-sat', 'dhas pada, Arnala Navapur Link Road, beside sealord resort, virar - west, 401302', '60dc176cc69df.jpg', '2021-07-11 10:49:08', '717660848'),
(69, 11, 'Trsna Wine N Dine', 'TrsnaWineNDine@gmail.com', '2145845896', 'https://TrsnaWineNDine.com', '9am', '8pm', 'mon-sat', 'Balaji Food Plaza, 1, Unnathi Estate, Commercial Building, Hiranandani Estate Rd, Patlipada Village, Thane West, Thane, Maharashtra 400607', '60dc18a7d716c.jpg', '2021-07-11 10:49:14', '562060753'),
(72, 11, 'Sip & Dine Family Resto ', 'Sip&DineFamilyResto@gmail.com', '3009795902', 'https://sipnDineFamilyResto.com', '9am', '8pm', '24hr-x7', 'Rashmi Pride, Nalasopara - Vasai Link Rd, near Fire Brigade, Vasant Nagari, Vasai East, Vasai-Virar, Maharashtra 401208', '60dc19d26a059.jpg', '2021-07-11 10:49:20', '167692467'),
(73, 11, 'Green House Restaurant', 'GreenHouseRestaurant@gmail.com', '2061497149', 'https://GreenHouseRestaurant.com', '10am', '8pm', '24hr-x7', 'Sai Nagar, Vasai West, Vasai-Virar, Maharashtra 401202', '60dc1a142b126.jpg', '2021-07-11 10:49:27', '257056781'),
(74, 11, 'Spark Wine & Dine', 'SparkWine&Dine@gmail.com', '7518226916', 'https://SparkWine&Dine.com', '10am', '6pm', 'mon-sat', 'Sampoorna Hotels, Opp. Goregaon Sports Club Link Road, Malad West, Mumbai, Maharashtra 400064', '60dc1a4090b91.jpg', '2021-07-11 10:49:45', '308192388'),
(75, 16, ' Japanese Cheesecake at Daniel Patissier', 'CheesecakeDaniel@gmail.com', '3154480300', 'https://CheesecakeDaniel.com', '11am', '7pm', '24hr-x7', 'Daniel Patissier, Shop No. 3, ALJ Residency, Pali Naka, Pali Hill, Bandra West', '60dc1aa5957ee.jpg', '2021-07-11 10:49:50', '524064990'),
(76, 16, 'Malai Kulfi at Parsi Dairy Farm', ' ParsiDairyFarm@gmail.com', '8926558052', 'https://ParsiDairyFarm.com', '11am', '8pm', '24hr-x7', ' Parsi Dairy Farm, 261-63, Marine Lines Flyover, Marine Lines East, Tak Wadi, Lohar Chawl, Kalbadevi', '60dc1ad250d51.jpg', '2021-06-30 07:18:42', ''),
(77, 16, 'Chocolate Sandwich at Mamaji ', 'ChocolateSandwichMamaji@gmail.com', '4487631429', 'https://ChocolateSandwichMamaji.com', '7am', '8pm', '24hr-x7', 'Mamaji, Nand Deep Building, L.N. Road, Oppo. Ruia College, Matunga East', '60dc1b0c7d92b.jpg', '2021-06-30 07:19:40', ''),
(78, 16, 'Triple Hot Fudge Nut Sundae at New Yorkers', 'SundaeNewYorkers@gmail.com', '1550903657', 'https://SundaeNewYorkers.com', '11am', '8pm', '24hr-x7', ' New Yorkers, 25, Fulchand Niwas, Chowpatty Seaface, Chowpatty ', '60dc1b3cc89b3.jpg', '2021-06-30 07:20:28', ''),
(79, 16, 'Sizzling Brownie With Ice Cream at Flags', ' IceCreamFlags@gmail.com', '6885693896', 'https://IceCreamFlags.com', '10am', '7pm', 'mon-sat', 'Flags, SBS Food Court, Asian CHS, BJ Patel Road, Near Liberty Garden, Malad West', '60dc1b64055bf.jpg', '2021-06-30 07:21:08', ''),
(80, 16, 'Nutella Pancakes at 99 Pancakes', '99Pancakes@gmail.com', '2903941533', 'https://99Pancakes.com', '11am', '8pm', '24hr-x7', ' 99 Pancakes, Dhavalgiri Building, Shop 14-A, Lokhandwala Market, Andheri Lokhandwala, Andheri West', '60dc1b9c963c0.jpg', '2021-06-30 07:22:04', ''),
(81, 12, 'Sandwizzaa', 'Sandwizzaa@gmail.com', '4509556264', 'https://Sandwizzaa.com', '10am', '8pm', 'mon-sat', ' Shop No. 3, Kamala Terrace, Subhash Rd, Vile Parle East, opp. Sunteck Centre, Mumbai, Maharashtra 400057', '60dc1e817dd40.jpg', '2021-06-30 07:34:25', ''),
(82, 12, 'Jay Sandwich', 'Jaysandwich@gmail.com', '6054772404', 'https://Jaysandwich.com', '8am', '7pm', 'mon-sat', ' 36th Rd, Khar West, Mumbai, Maharashtra 400050', '60dc1ec800938.jpg', '2021-06-30 07:35:36', ''),
(83, 11, 'Panchavati Gaurav', 'PanchavatiGaurav@gmail.com', '7687935470', 'https://PanchavatiGaurav.com', '11am', '6pm', 'mon-sat', 'No. 7, Chemox House, Barrack Road, near Bombay Hospital Avenue, Marine Lines, Mumbai, Maharashtra 400020', '60dc202d9f460.jpg', '2021-06-30 07:41:33', ''),
(84, 14, 'Yauatcha Mumbai', 'YauatchaMumbai@gmail.com', '5999432136', 'https://YauatchaMumbai.com', '9am', '7pm', '24hr-x7', 'Raheja Tower, Bandra Kurla Complex, Bandra East, Mumbai, Maharashtra 400051', '60dc206d4f2d0.jpg', '2021-06-30 07:42:37', ''),
(85, 14, 'Mainland China', 'MainlandChina@gmail.com', '1530287268', 'https://MainlandChina.com', '10am', '7pm', 'mon-fri', 'Shalimar Morya Park, Ground Floor, Off New Link Rd, Andheri West, Mumbai, Maharashtra 400053', '60dc209606f90.jpg', '2021-06-30 07:43:18', ''),
(86, 14, 'Royal China', 'Royalchina@gmail.com', '8229323983', 'https://Royalchina.com', '10am', '7pm', 'mon-sat', 'Victoria Terminus, Hazarimal Somani Rd, behind Sterling Cinema Building, Azad Maidan, Fort, Mumbai, Maharashtra 400001', '60dc20c3e7370.jpg', '2021-06-30 07:44:03', ''),
(88, 13, 'Burger King', 'BurgerKing@gmail.com', '2357265983', 'https://BurgerKing.com', '10am', '7pm', '24hr-x7', ' Unit 7&8, Ground Floor, Nirman Heights, LT Road and Link Road Junction, Gorai Rd, opposite Don Bosco School, Borivali West, Mumbai, Maharashtra 400091', '60eacc13172fe.jpg', '2021-07-11 10:46:43', '572753490');

-- --------------------------------------------------------

--
-- Table structure for table `restro`
--

CREATE TABLE `restro` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone1` bigint(20) NOT NULL,
  `date` varchar(80) NOT NULL,
  `time` varchar(80) NOT NULL,
  `person` char(5) NOT NULL,
  `restaurant` char(20) NOT NULL,
  `Time_of_feedback` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restro`
--

INSERT INTO `restro` (`id`, `fullname`, `email`, `phone1`, `date`, `time`, `person`, `restaurant`, `Time_of_feedback`) VALUES
(1, 'Rajkamal Gottam', 'rajkamalgautam2001@gmail.com', 9503182793, '1/4/2021', '7:55 am', '3', 'kriyana store', '2021-06-18 13:32:04'),
(2, 'chandresh chauhan', 'chandreschauhan@gmail.com', 7485965841, '1/1/2021', '4:30 pm', '4', 'Maratha Darbar', '2021-06-21 15:49:05'),
(3, 'shrishti', 'shrishti@gmail.com', 9525874521, '4/28/2021', '12:30 pm', '2', 'Nino Burgers', '2021-06-30 13:19:41'),
(7, 'lubna', 'lubnag@gmail.com', 9856985475, '7/2/2021', '9:30 pm', '2', 'Triple Hot Fudge Nut', '2021-07-01 13:09:19'),
(8, 'shashi gautam', 'shashi@gmail.com', 7276323179, '8/20/2021', '9:30 pm', '2', 'Sai Leela Restaurant', '2021-07-15 13:19:54'),
(9, 'mansingh gautam', 'm.s.gottam@gmail.com', 9856325471, '8/21/2021', '5:30 pm', '5', 'Sai Leela Restaurant', '2021-07-15 13:20:27'),
(10, 'chandrakamalgautam', 'chandrakamalgautam@gmail.com', 8446160280, '9/21/2021', '5pm-7pm', '3', 'Sai Leela Restaurant', '2021-07-15 13:38:56');

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
(16, 'Dessert ', '2021-06-30 07:16:45');

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
(33, 'Rajkamal_Gottam', 'Rajkamal', 'Gottam', 'rajkamalgautam2001@gmail.com', '09503182793', '701fb90716e10ecc7a43852e0eae27f1', 'agrawala nagri\r\nvasai', 1, '2021-06-18 06:38:58'),
(34, 'shashigautam', 'shashi', 'Gautam', 'shashigautam@gmail.com', '7276323178', '11eba10d3544ac6d881143c0ecb59852', 'c-301 bharat vaibhav  vasai east', 1, '2021-06-25 12:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `d_id` varchar(255) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` varchar(222) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `username`, `phone`, `address`, `d_id`, `title`, `quantity`, `price`, `total`, `status`, `date`) VALUES
(39, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri vasai', '11', 'Bonefish', 1, '55.77', '', NULL, '2021-07-10 14:08:25'),
(40, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri vasai', '12', 'Hard Rock Cafe', 35, '22.12', '', 'in process', '2021-07-10 14:08:25'),
(41, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri vasai', '15', 'Lyfe Kitchens Tofu Taco', 2, '11.99', '', NULL, '2021-07-10 14:08:25'),
(42, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri vasai', '13', 'Uno Pizzeria & Grill', 5, '12.35', '', NULL, '2021-07-10 14:08:25'),
(43, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri vasai', '15', 'Lyfe Kitchens Tofu Taco', 2, '11.99', '', NULL, '2021-07-10 14:08:25'),
(44, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri vasai', '13', 'Uno Pizzeria & Grill', 5, '12.35', '', NULL, '2021-07-10 14:08:25'),
(47, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri vasai', '21', 'Double Cheeseburgers', 2, '750.00', '', 'in process', '2021-07-10 14:08:25'),
(48, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri vasai', '11', 'Bonefish', 1, '55.77', '', NULL, '2021-07-10 14:08:25'),
(49, 34, 'shashigautam', '7276323178', 'c-301 bharat vaibhav  vasai east', '19', 'Bacon-and-Kimchi Burgers', 5, '50.00', '', 'in process', '2021-07-10 14:07:41'),
(50, 34, 'shashigautam', '7276323178', 'c-301 bharat vaibhav  vasai east', '27', 'Chole', 1, '311.00', '', NULL, '2021-07-10 14:07:41'),
(52, 34, 'shashigautam', '7276323178', 'c-301 bharat vaibhav  vasai east', '25', 'Hakka Noodles', 1, '300.00', '', NULL, '2021-07-10 14:07:41'),
(58, 34, 'shashigautam', '7276323178', 'c-301 bharat vaibhav  vasai east', '19', 'Bacon-and-Kimchi Burgers', 1, '50.00', '', NULL, '2021-07-10 14:07:41'),
(59, 34, 'shashigautam', '7276323178', 'c-301 bharat vaibhav  vasai east', '25', 'Hakka Noodles', 1, '300.00', '', NULL, '2021-07-10 14:07:41'),
(60, 34, 'shashigautam', '7276323178', 'c-301 bharat vaibhav  vasai east', '25', 'Hakka Noodles', 1, '300.00', '', NULL, '2021-07-10 14:07:41'),
(62, 33, 'Rajkamal_Gottam', '09503182793', 'agrawala nagri\r\nvasai', '17', 'jklmno', 1, '17.99', '', NULL, '2021-07-10 14:18:31'),
(63, 34, 'shashigautam', '7276323178', 'c-301 bharat vaibhav  vasai east', '24', 'Rajma', 1, '240.00', '', 'in process', '2021-07-13 15:05:44');

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
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `restro`
--
ALTER TABLE `restro`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `restro`
--
ALTER TABLE `restro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
