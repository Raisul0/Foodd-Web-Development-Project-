-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 05:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodd`
--

-- --------------------------------------------------------

--
-- Table structure for table `addvert`
--

CREATE TABLE `addvert` (
  `bname` varchar(100) NOT NULL,
  `cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addvert`
--

INSERT INTO `addvert` (`bname`, `cost`) VALUES
('BFC', 2000),
('Handi', 80),
('KFC', 60),
('Takeout', 57);

-- --------------------------------------------------------

--
-- Table structure for table `business_info`
--

CREATE TABLE `business_info` (
  `uname` varchar(50) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bloc` varchar(50) NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `blogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_info`
--

INSERT INTO `business_info` (`uname`, `bname`, `bloc`, `baddress`, `blogo`) VALUES
('ahsan', 'Takeout', 'Danmondhi', '15no Road', 'Takeout.jpg'),
('liza', 'Handi', 'Gulshan1,2', 'Near,Gulshan Supermarket', 'Handi.png'),
('Rifat', 'Popeyes', 'Khilgong', 'khilgong,sector:11,Road:4', 'Popeyes_Coffee_&_Fast_Food_57_food_cafe.jpg'),
('Shuvra', 'BFC', 'Airport', 'Airport road,Airport-Dhaka', '1428384552.jpg'),
('snow', 'KFC', 'Uttora', 'uttora ,sector:11,Road:4', 'kfc-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `business_item`
--

CREATE TABLE `business_item` (
  `bname` varchar(100) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `itempic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_item`
--

INSERT INTO `business_item` (`bname`, `iname`, `price`, `itempic`) VALUES
('Takeout', 'Beef_Burger', 300, 'Beef_Cheese_Delight.jpg'),
('Takeout', 'Chicken_Cheese_Delight', 250, 'Chicken_Cheese_Delight.jpg'),
('Handi', 'Beef Chow Mein', 220, 'beef-chow-mein-lge.jpg'),
('Handi', 'Chicken Chow Mein', 210, 'Chicken-Chow-Mein_16921.jpg'),
('MadChef', 'beef', 320, '316f2a8e1af4348504f292cf8327f799.jpg'),
('KFC', 'KFC_special_Burger', 250, 'burger_originalrecipebaconcheese.jpg'),
('KFC', 'Fried_Chicken(1ps)', 80, 'chicken-originalrecipe_1pce.jpg'),
('KFC', 'Combo-1', 350, '500-X-280_Zinger.png'),
('KFC', 'Bucket_Chicken', 600, 'KFC_bucket.jpg'),
('KFC', 'Popcon', 160, 'chicken_popcornchicken_reg.jpg'),
('KFC', 'Krusher_Strawberry_Smoothie', 200, 'Krusher-Strawberry-Smoothie.png'),
('BFC', 'Fried_Chicken(1pc)', 85, 'chicken-originalrecipe_1pce.jpg'),
('BFC', 'Family_pack-10', 620, 'bfc_p10.jpg'),
('BFC', 'Chow_Mean', 250, 'Chicken-Chow-Mein_16921.jpg'),
('Popeyes_Coffee_&_Fast_Food', 'Cold_Coffee', 40, '18481.jpeg'),
('Popeyes_Coffee_&_Fast_Food', 'Crawfish_', 500, 'popeyes-wicked-chicken-jpg.jpg'),
('Popeyes_Coffee_&_Fast_Food', 'asd', 20, '500-X-280_Zinger.png');

-- --------------------------------------------------------

--
-- Table structure for table `dboy_info`
--

CREATE TABLE `dboy_info` (
  `uname` varchar(50) NOT NULL,
  `basicsalary` float NOT NULL,
  `currentrating` float NOT NULL,
  `currentbonus` float NOT NULL,
  `totalsalary` float NOT NULL,
  `stage` varchar(50) NOT NULL,
  `totalsal_paid` float NOT NULL,
  `date_salpaid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dboy_info`
--

INSERT INTO `dboy_info` (`uname`, `basicsalary`, `currentrating`, `currentbonus`, `totalsalary`, `stage`, `totalsal_paid`, `date_salpaid`) VALUES
('ehsan', 5200, 1, 200, 5400, 'Working', 0, ''),
('Rimu', 5000, 1, 0, 5000, 'Working', 0, ''),
('sadik', 5200, 2.25, 100, 5300, 'available', 5000, '2017/09/11');

-- --------------------------------------------------------

--
-- Table structure for table `expenses_info`
--

CREATE TABLE `expenses_info` (
  `expenses_name` varchar(500) NOT NULL,
  `cost` float NOT NULL,
  `date_ex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses_info`
--

INSERT INTO `expenses_info` (`expenses_name`, `cost`, `date_ex`) VALUES
('', 5200, '2017/09/13'),
('brfore start business', 5000, '2017/09/11'),
('Penalty', 11300, '2017/09/14'),
('salary_sadik', 5000, '2017/09/11');

-- --------------------------------------------------------

--
-- Table structure for table `income_info`
--

CREATE TABLE `income_info` (
  `income_name` varchar(500) NOT NULL,
  `income_cost` float NOT NULL,
  `date_income` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_info`
--

INSERT INTO `income_info` (`income_name`, `income_cost`, `date_income`) VALUES
('Service_charge_of_sadik', 150, '2017'),
('Place_add_Handi', 70, '2017'),
('Service_charge_of_sadik', 150, '2017'),
('Sponsor_j', 5000, '2017/09/11'),
('Service_charge_of_sadik', 150, '2017/09/11'),
('Sponsor_AIUB', 20000, '2017/09/11'),
('Service_charge_of_sadik', 150, '2017/09/12'),
('Service_charge_of_sadik', 150, '2017/09/12'),
('Place_add_Handi', 60, '2017/09/12'),
('Place_add_MadChef', 70, '2017/09/12'),
('Service_charge_of_sadik', 150, '2017/09/13'),
('Service_charge_of_sadik', 150, '2017/09/13'),
('Place_add_EG Cafe', 70, '2017/09/14'),
('Place_add_Handi', 80, '2017/09/14'),
('Service_charge_of_sadik', 150, '2017/09/15'),
('Service_charge_of_sadik', 150, '2017/09/15'),
('Service_charge_of_sadik', 150, '2017/09/15'),
('Service_charge_of_sadik', 150, '2017/09/15'),
('Service_charge_of_sadik', 150, '2017/09/15'),
('Place_add_KFC', 60, '2017/09/15'),
('Place_add_BFC', 2000, '2017/09/15'),
('Sponsor_AIUB', 10000, '2017/09/18'),
('Service_charge_of_sadik', 150, '2017/09/18');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msg` varchar(500) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `fromtype` varchar(50) NOT NULL,
  `totype` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`msg`, `uname`, `fromtype`, `totype`, `date`) VALUES
('hi', 'jahin', 'admin', 'no', '2017/09/16 05:45:35pm'),
('hlw Tareq', 'jahin', 'admin', 'tareq', '2017/09/16 05:59:57pm'),
('Sadik Come office as early as possible.', 'jahin', 'admin', 'sadik', '2017/09/16 06:40:56pm'),
('Welcome To FOoDD.We arrange a meeting today at 4PM.You all are invited...', 'jahin', 'admin', 'all', '2017/09/16 07:41:30pm'),
('Welcome To FOoDD.We arrange a meeting today at 4PM.You all are invited...', 'jahin', 'admin', 'all', '2017/09/16 07:43:01pm'),
('Welcome To FOoDD.We arrange a meeting today at 4PM.You all are invited...', 'jahin', 'admin', 'all', '2017/09/16 07:44:19pm'),
('HlW admin', 'tareq', 'tareq', 'admin', '2017/09/16 07:56:33pm'),
('hlw Tareq for reply', 'jahin', 'admin', 'tareq', '2017/09/16 08:20:25pm'),
('Reply of your msg : hiiiiiiiii', 'jahin', 'admin', 'tareq', '2017/09/16 08:23:06pm'),
('Reply of your msg : jjknjkhk', 'jahin', 'admin', 'tareq', '2017/09/16 08:24:59pm'),
('Reply of your msg : jknjkh', 'jahin', 'admin', 'tareq', '2017/09/16 08:25:23pm'),
('Foysal we are sorry for late delivary', 'jahin', 'admin', 'foysal', '2017/09/18 06:54:05pm');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `uname` varchar(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `ordertime` varchar(100) NOT NULL,
  `dboy` varchar(100) NOT NULL,
  `orderstatus` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`uname`, `bname`, `iname`, `price`, `quantity`, `orderid`, `ordertime`, `dboy`, `orderstatus`, `total`) VALUES
('tareq', 'Takeout', 'Beef_Burger', 260, 1, 1000, '2017/09/11 12:23:02am', 'sadik', 'Delivered', 660),
('tareq', 'Takeout', 'Chicken_Cheese_Delight', 250, 1, 1000, '2017/09/11 12:23:02am', 'sadik', 'Delivered', 660),
('tareq', 'Takeout', 'Chicken_Cheese_Delight', 250, 1, 1001, '2017/09/11 12:37:38am', 'sadik', 'Delivered', 400),
('tareq', 'Handi', 'Sriracha_Buffalo_Wings', 0, 2, 1002, '2017/09/11 04:02:55pm', 'sadik', 'Delivered', 870),
('tareq', 'Handi', 'Beef_Chow_Mein', 0, 1, 1002, '2017/09/11 04:02:55pm', 'sadik', 'Delivered', 870),
('tareq', 'Handi', 'Beef_Kalo_Buna', 0, 1, 1003, '2017/09/11 05:01:24pm', 'sadik', 'Delivered', 500),
('tareq', 'Handi', 'Beef_Kalo_Buna', 0, 1, 1004, '2017/09/11 05:09:40pm', 'sadik', 'Delivered', 500),
('tareq', 'Handi', 'kashmiri_chicken_curry', 0, 1, 1005, '2017/09/11 05:16:18pm', 'sadik', 'Delivered', 510),
('tareq', 'Takeout', 'Beef_Burger', 300, 1, 1006, '2017/09/11 05:24:51pm', 'sadik', 'Delivered', 450),
('tareq', 'Handi', 'kashmiri_chicken_curry', 0, 1, 1007, '2017/09/11 05:25:17pm', 'sadik', 'Delivered', 510),
('tareq', 'Handi', 'kashmiri_chicken_curry', 0, 1, 1008, '2017/09/11 05:25:36pm', 'sadik', 'Delivered', 510),
('tareq', 'Handi', 'Chicken_Chow_Mein', 0, 1, 1009, '2017/09/11 05:26:51pm', 'Unassinged', 'Unapproved', 360),
('tareq', 'MadChef', 'beef', 320, 1, 1010, '2017/09/11 05:36:53pm', 'Unassinged', 'Unapproved', 470),
('tareq', 'Handi', 'beef_Kalo_Buna', 0, 1, 1011, '2017/09/11 05:54:49pm', 'Unassinged', 'Unapproved', 450),
('tareq', 'Handi', 'Beef_Kalo_Buna', 330, 1, 1012, '2017/09/11 05:58:37pm', 'Unassinged', 'Unapproved', 480),
('tareq', 'Handi', 'kashmiri_chicken_curry', 0, 1, 1013, '2017/09/12 12:43:27pm', 'Unassinged', 'Unapproved', 510),
('tareq', 'Takeout', 'Beef_Burger', 300, 1, 1014, '2017/09/12 12:45:44pm', 'Unassinged', 'Unapproved', 450),
('tareq', 'Handi', 'kashmiri_chicken_curry', 0, 1, 1015, '2017/09/12 08:37:46pm', 'Unassinged', 'Unapproved', 510),
('Nusrat', 'Takeout', 'Beef_Burger', 300, 1, 1016, '2017/09/15 07:58:59am', 'sadik', 'Delivered', 450),
('Nusrat', 'BFC', 'Fried_Chicken(1pc)', 85, 1, 1017, '2017/09/15 12:00:16pm', 'ehsan', 'Ready', 885),
('Nusrat', 'BFC', 'Family_pack-10', 650, 1, 1017, '2017/09/15 12:00:16pm', 'ehsan', 'Ready', 885),
('foysal', 'Takeout', 'Beef_Burger', 300, 1, 1018, '2017/09/18 06:48:02pm', 'Rimu', 'Approved', 700),
('foysal', 'Takeout', 'Chicken_Cheese_Delight', 250, 1, 1018, '2017/09/18 06:48:02pm', 'Rimu', 'Approved', 700),
('foysal', 'KFC', 'Fried_Chicken(1ps)', 80, 1, 1019, '2017/09/18 06:48:29pm', 'Unassinged', 'Unapproved', 580),
('foysal', 'KFC', 'Combo-1', 350, 1, 1019, '2017/09/18 06:48:29pm', 'Unassinged', 'Unapproved', 580);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_info`
--

CREATE TABLE `sponsor_info` (
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `cost_sponsor` float NOT NULL,
  `date_sp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor_info`
--

INSERT INTO `sponsor_info` (`name`, `address`, `logo`, `cost_sponsor`, `date_sp`) VALUES
('AIUB', 'http://www.aiub.edu/', 'aiub.png', 10000, '2017/09/18'),
('La_Meridian', 'http://www.starwoodhotels.com/lemeridien/index.html', 'lemeridien.jpg', 10000, '2017/09/09'),
('pran', 'http://www.pranfoods.net', 'pran.png', 10000, '2017/09/09'),
('Universal', 'https://www.unilever.com.bd/', 'unilever.png', 10000, '2017/09/09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mblno` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `uname`, `pass`, `email`, `mblno`, `address`, `type`) VALUES
('Shahrukh Ahsan', 'ahsan', 'MTIzMTIzMTI=', 'ahsan@hotmail.com', '01683072008', 'Danmondhi', 'business'),
('Daenerys Targaryen', 'dany', 'MTIzMTIzMTI=', 'dany@gmail.com', '01624961350', 'uttota-Dhaka', 'admin'),
('Ehsanul Hoque', 'ehsan', 'MTIzMTIzMTI=', 'ehsan@gmail.com', '01624961325', 'Mohakhali 77/B,House:5,Dhaka', 'dboy'),
('Foysal ahmed ', 'foysal', 'MTIzMTIzMTIz', 'foysal@gmail.com', '01624365820', 'Pura Dhaka,postogola,Dhaka', 'customer'),
('Ashadul Hoque Jahin  ', 'jahin', 'MTIzMTIzMTI=', 'jahin@gmail.com', '01234567891', 'jatrabari,Dhaka', 'admin'),
('Tamanna Akter Liza ', 'liza', 'MTIzMTIzMTI=', 'liza@gmail.com', '01698732146', 'Gulshan1,2', 'business'),
('Nusrat Farah', 'Nusrat', 'MTIzMTIzMTI=', 'Nusrat@gmail.com', '01624365820', 'Sector:11,Road:5,Mirpur(DOHS)-Dhaka', 'c'),
('Raisul', 'raisul', 'MTIzMTIzMTI=', 'ri123@gmail.com', '0168707110', 'Zigatola', 'admin'),
('AR Rifat', 'Rifat', 'MTIzMTIzMTI=', 'Rifat@gmail.com', '0162436582', 'Khilgong', 'business'),
('Rimu Rayhan', 'Rimu', 'MTIzMTIzMTI=', 'Rimu@gmail.com', '01624961350', 'uttota-Dhaka', 'dboy'),
('Rafiqul Islam Sadik', 'sadik', 'MTIzMTIzMTI=', 'sadik@gmail.com', '06519851984', 'Uttora', 'dboy'),
('Sajid Sarker', 'Sajid', 'MTIzMTIzMTI=', 'Sajid@gmail.com', '01624961340', 'Sector:11,Road:5,Uttora-Dhaka', 'customer'),
('Shuvra Das', 'Shuvra', 'MTIzMTIzMTI=', 'Shuvra@gmail.com', '01624961250', 'Airport', 'business'),
('Jon snow ', 'snow', 'MTIzMTIzMTI=', 'snow@gmail.com', '0162436582', 'Uttora', 'business'),
('Tareq rahman Shuvon    ', 'tareq', 'MTIzMTIzMTI=', 'tareq@mail.com', '01624961340', 'sector:13,road:5,uttora,Dkaha', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addvert`
--
ALTER TABLE `addvert`
  ADD PRIMARY KEY (`bname`);

--
-- Indexes for table `business_info`
--
ALTER TABLE `business_info`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `dboy_info`
--
ALTER TABLE `dboy_info`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `expenses_info`
--
ALTER TABLE `expenses_info`
  ADD PRIMARY KEY (`expenses_name`);

--
-- Indexes for table `sponsor_info`
--
ALTER TABLE `sponsor_info`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
