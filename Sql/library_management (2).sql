-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 09:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Python', '1'),
(2, 'Programming', 'Active'),
(3, 'Novals', 'Active'),
(4, 'Networking', 'Active'),
(5, 'Software', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `details_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `book_price` int(10) NOT NULL,
  `number_of_page` int(10) NOT NULL,
  `date_of_purchase` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`details_id`, `book_id`, `book_price`, `number_of_page`, `date_of_purchase`, `status`) VALUES
(1, 5, 1200, 1500, '2021-01-08', ''),
(2, 7, 700, 500, '2012-12-05', ''),
(3, 8, 750, 1500, '2015-10-22', ''),
(4, 9, 1200, 1200, '2015-12-12', ''),
(5, 11, 800, 750, '2014-12-08', ''),
(6, 12, 10, 50, '2011-12-12', ''),
(7, 13, 100, 122, '2016-12-08', ''),
(8, 14, 700, 800, '2017-12-04', ''),
(9, 15, 50, 20, '2011-12-12', ''),
(10, 16, 800, 9000, '2021-02-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_issue`
--

CREATE TABLE `book_issue` (
  `issue_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `library_no` int(10) NOT NULL,
  `isbn_no` int(10) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_issue`
--

INSERT INTO `book_issue` (`issue_id`, `book_id`, `l_id`, `library_no`, `isbn_no`, `issue_date`, `return_date`, `status`) VALUES
(16, 3, 6, 0, 0, '2021-04-04', '0000-00-00', 'Returned'),
(17, 4, 10, 0, 0, '2021-04-14', '2021-04-24', 'Returned'),
(18, 7, 12, 0, 0, '2021-04-02', '2021-04-12', 'Returned'),
(19, 6, 12, 0, 0, '2021-04-14', '2021-04-24', '0'),
(20, 7, 10, 0, 0, '2021-04-17', '2021-04-27', 'Returned'),
(21, 1, 8, 0, 0, '2021-04-22', '2021-05-02', 'Returned'),
(22, 7, 7, 0, 0, '2021-04-25', '2021-05-05', 'Returned'),
(23, 8, 12, 0, 0, '2021-05-14', '2021-05-24', '0'),
(24, 8, 8, 0, 0, '2021-05-25', '2021-06-04', '0'),
(25, 3, 67, 0, 0, '2021-05-29', '2021-06-08', 'Returned'),
(26, 3, 67, 0, 0, '2021-05-29', '2021-06-08', 'Returned'),
(27, 9, 8, 0, 0, '2021-06-04', '2021-06-14', '0');

-- --------------------------------------------------------

--
-- Table structure for table `book_return`
--

CREATE TABLE `book_return` (
  `return_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `return_date` date NOT NULL,
  `penality` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_return`
--

INSERT INTO `book_return` (`return_id`, `book_id`, `member_id`, `return_date`, `penality`) VALUES
(1, 2, 8888, '2021-01-27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `book_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `book_title` varchar(40) NOT NULL,
  `book_author` varchar(40) NOT NULL,
  `second_author` varchar(40) NOT NULL,
  `third_author` varchar(40) NOT NULL,
  `book_count` int(20) NOT NULL,
  `year_of_publish` int(20) NOT NULL,
  `edition` varchar(20) NOT NULL,
  `isbn_no` int(20) NOT NULL,
  `book_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`book_id`, `category_id`, `book_title`, `book_author`, `second_author`, `third_author`, `book_count`, `year_of_publish`, `edition`, `isbn_no`, `book_status`) VALUES
(1, 1, '  Numpy', 'Arun', 'Sam', 'Curren', 20, 2011, ' X', 88745, 'Active'),
(3, 1, 'Sherlock Holmes', 'Sherlock', 'Richards', 'Watsoin', 9, 2002, 'V', 36985, 'Active'),
(4, 1, 'Numpy', 'Arun', 'Smith', 'Warner', 30, 2005, '   III', 80025, 'Active'),
(8, 2, ' Pandas', '  Balaguruswami ', 'Arun', 'Smith', 0, 2018, ' III', 8025, 'Active'),
(9, 2, 'Introduction To Python', ' Sc Ramachandran', 'Agaral ', 'Rahane ', -1, 2012, 'II', 784512, 'Active'),
(10, 5, 'Introduction to Software Engineering and', ' Washingtone', 'S.S Saurya', 'Dayana', 0, 2016, 'III', 730014, 'Active'),
(11, 2, 'Java Programming', ' Shinto', 'Owston', 'JK Rowlii', 0, 2011, 'IV', 87410, 'Active'),
(13, 4, 'Introduction To Networking', ' MRX', 'Chriss', 'Jordan', 0, 2014, 'II', 22147, 'Active'),
(14, 2, 'Core Java', ' dfkj', 'dfkjfdkj', 'kjdf', 0, 2016, 'II', 887453, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_table`
--

CREATE TABLE `ebook_table` (
  `ebook_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_size` int(40) NOT NULL,
  `downloads` int(11) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ebook_table`
--

INSERT INTO `ebook_table` (`ebook_id`, `l_id`, `book_name`, `book_size`, `downloads`, `status`) VALUES
(1, 6, 'Justine Resume.pdf', 81670, 0, 'Approved'),
(2, 8, 'ABSTRACT FORMAT.pdf', 349019, 0, 'Approved'),
(3, 10, 'result.pdf', 504773, 0, 'Approved'),
(4, 11, 'RegisteredStudentBillReport (4).pdf', 6764, 0, 'Approved'),
(5, 12, 'DeptOutPass.pdf', 164709, 0, 'Approved'),
(6, 10, 'justine jose 38.pdf', 602147, 0, 'Approved'),
(7, 10, 'RegisteredStudentBillReport.pdf', 6828, 0, 'Approved'),
(8, 10, 'SEMESTER_FEE_9152_S8-2020.pdf', 16935, 0, 'Approved'),
(9, 12, 'RegisteredStudentBillReport.pdf', 6828, 0, 'Approved'),
(10, 12, 'Integrated MCA Justine Jose.pdf', 40826, 0, 'Approved'),
(11, 12, 'Integrated MCA Justine Jose.pdf', 40826, 0, 'Approved'),
(12, 10, 'Integrated MCA Justine Jose.pdf', 40826, 0, 'Approved'),
(13, 8, 'RegisteredStudentBillReport (3).pdf', 6820, 0, 'Approved'),
(14, 6, 'bellovin.pdf', 995104, 0, 'Approved'),
(15, 6, 'RegisteredStudentBillReport (3).pdf', 6820, 0, '1'),
(16, 67, 'RegisteredStudentBillReport (3).pdf', 6820, 0, '1'),
(17, 8, 'justine jose 38.pdf', 602147, 0, 'Approved'),
(18, 8, 'justine jose 38.pdf', 602147, 0, '1'),
(19, 8, 'Circular-onlinefinalsemexams2021.pdf', 77151, 0, '1'),
(20, 12, 'result.pdf', 504773, 0, 'Approved'),
(21, 0, 'RegisteredStudentBillReport (3).pdf', 6820, 0, ''),
(22, 67, 'RegisteredStudentBillReport (4).pdf', 6764, 0, 'Approved'),
(23, 8, 'justine jose 38.pdf', 602147, 0, '1'),
(24, 8, 'result.pdf', 504773, 0, 'Approved'),
(25, 10, 'RegisteredStudentBillReport (3).pdf', 6820, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `username`, `password`, `role`, `status`) VALUES
(1, 'justine', 'b55050b2f605b7cf0d48346ff3d432d3', 'Admin', 1),
(6, 'ashiya', '0050cb8af017e56d2f6b5e4ddb571b2b', 'User', 1),
(7, 'jithin', '1c4317a963b252091890e123b4a2790d', 'User', 1),
(8, 'jubin', '9239afa636a520a0ff8c7b1f68ff5b0c', 'User', 1),
(10, 'jaimi', '57f9f1aa2a9f2545876c2038f25d4217', 'User', 1),
(11, 'tebin', 'e25cdd719b01d5284814210ba4b90ad5', 'User', 2),
(12, 'tintu', 'ed11644d4d2ff788b57b406b0f5087be', 'User', 1),
(67, 'arun', '722279e9e630b3e731464b69968ea4b4', 'Faculty', 1),
(104, 'jubinshaji', '0a4d8bda4957177e6f55494cd7cbd9d3', 'User', 2),
(138, 'joe', '8ff32489f92f33416694be8fdc2d4c22', 'User', 1),
(139, 'aby', 'f722acc637a77362c9fe03bd1c81d433', 'User', 2),
(141, 'james', 'b4cc344d25a2efe540adbf2678e2304c', 'User', 1),
(142, 'treesa', 'bd0ec54f7ae60837ce996a3063e9ad93', 'User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member_registration`
--

CREATE TABLE `member_registration` (
  `member_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `library_no` int(10) NOT NULL,
  `m_name` varchar(40) NOT NULL,
  `m_email` varchar(40) NOT NULL,
  `m_phno` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `m_dateofbirth` date NOT NULL,
  `m_dept` varchar(20) NOT NULL,
  `year_of_join` int(11) NOT NULL,
  `user_type` varchar(40) NOT NULL,
  `m_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`member_id`, `l_id`, `library_no`, `m_name`, `m_email`, `m_phno`, `gender`, `m_dateofbirth`, `m_dept`, `year_of_join`, `user_type`, `m_status`) VALUES
(1, 6, 9152, '    Ashiya', 'ashiya@gmail.com  ', '8798654121', 'female', '1998-10-26', 'MCA', 2016, 'User', 'Active'),
(2, 7, 9050, 'Jithin', 'jithin@gmail.com ', '7889564512', 'male', '1998-06-10', 'CS', 2014, 'User', 'Active'),
(3, 8, 8888, 'Jubin', 'jubin@gmail.com  ', '8956231045', 'male', '1997-01-28', 'MCA', 2014, 'User', 'Active'),
(4, 10, 8050, ' Jaimi', 'jaimi@gmail.com', '8974522010', 'female', '1999-05-11', 'CS', 0, 'User', 'Active'),
(5, 11, 7020, ' Tebin', 'tebin@gmail.com ', '9985654110', 'male', '2014-12-02', 'MCA', 2018, 'User', 'Delete'),
(6, 67, 3002, 'arun', 'arunphilip@gmail.com  ', '7441203565', 'male', '1998-08-14', 'CS', 2015, 'Faculty', 'Active'),
(85, 104, 9800, 'jubin', 'jubin12@gmail.com', '8520104174', 'male', '1998-02-11', 'EEE', 0, 'User', 'Delete'),
(102, 122, 78451, 'Anto', 'anto@gmail.com', '8798653220', 'male', '2007-01-30', 'MCA', 2017, 'User', 'Active'),
(118, 138, 78452, 'joe', 'joe@gmail.com', '9878456520', 'male', '1997-10-15', 'MCA', 2014, 'User', 'Active'),
(119, 139, 20187, 'aby', 'aby@gmail.com', '9685741000', 'male', '2004-06-09', 'CS', 2018, 'User', 'Delete'),
(121, 141, 87985, 'james', 'james@gmail.com', '8874960017', 'male', '1997-03-10', 'MCA', 2012, 'User', 'Active'),
(122, 142, 9997, 'treesa', 'treesa@gmail.com', '9061138356', 'female', '2000-06-13', 'MCA', 2017, 'User', 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_book`
--

CREATE TABLE `reserve_book` (
  `reserve_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserve_book`
--

INSERT INTO `reserve_book` (`reserve_id`, `book_id`, `l_id`, `reservation_date`, `reservation_status`) VALUES
(2, 7, 10, '2021-04-17', '0'),
(3, 1, 10, '2021-04-17', '0'),
(4, 5, 10, '2021-04-17', '0'),
(5, 4, 10, '2021-04-20', '0'),
(6, 3, 8, '2021-05-03', '0'),
(7, 4, 10, '2021-05-03', '0'),
(8, 8, 67, '2021-06-04', '0'),
(9, 1, 8, '2021-06-04', '0'),
(10, 4, 8, '2021-06-04', '0'),
(11, 1, 67, '2021-06-04', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_name` varchar(60) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `category_id`, `sub_category_name`, `status`) VALUES
(2, 1, 'DataStructure', '1'),
(3, 2, 'Java Programming', '1'),
(4, 1, 'Numpy', '1'),
(5, 2, 'C++', '1'),
(6, 1, 'NumPy', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table_recommendation`
--

CREATE TABLE `table_recommendation` (
  `recommend_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_recommendation`
--

INSERT INTO `table_recommendation` (`recommend_id`, `l_id`, `book_id`, `date`, `status`) VALUES
(1, 10, 4, '2021-04-27', '0'),
(2, 67, 4, '2021-04-27', '0'),
(3, 67, 1, '2021-04-27', '0'),
(4, 67, 3, '2021-05-16', '0'),
(5, 67, 8, '2021-06-04', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tble_faculty_details`
--

CREATE TABLE `tble_faculty_details` (
  `faculty_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `faculty_dept` varchar(50) NOT NULL,
  `year_of_join` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tble_payment`
--

CREATE TABLE `tble_payment` (
  `pay_id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `card_number` bigint(60) NOT NULL,
  `cvv` int(10) NOT NULL,
  `exp_month` varchar(20) NOT NULL,
  `exp_year` int(20) NOT NULL,
  `Amount` int(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tble_payment`
--

INSERT INTO `tble_payment` (`pay_id`, `name`, `card_number`, `cvv`, `exp_month`, `exp_year`, `Amount`, `status`) VALUES
(1, 'priya', 998287451211, 835, 'June', 2022, 4460, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penality`
--

CREATE TABLE `tbl_penality` (
  `penality_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payed_date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penality`
--

INSERT INTO `tbl_penality` (`penality_id`, `l_id`, `amount`, `payed_date`, `status`) VALUES
(1, 67, 50, '2021-06-06', '0'),
(2, 67, 20, '2021-06-06', '0'),
(3, 8, 10, '2021-06-06', '0'),
(4, 10, 10, '2021-06-07', '0'),
(5, 10, 6000, '2021-06-07', '0'),
(6, 10, 5000, '2021-06-07', '0'),
(7, 10, 10, '2021-06-07', '0'),
(8, 10, 200, '2021-06-07', '0'),
(9, 10, 20, '2021-06-07', '0'),
(10, 67, 10, '2021-06-08', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `book_issue`
--
ALTER TABLE `book_issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `book_return`
--
ALTER TABLE `book_return`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `isbn_no` (`isbn_no`);

--
-- Indexes for table `ebook_table`
--
ALTER TABLE `ebook_table`
  ADD PRIMARY KEY (`ebook_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `member_registration`
--
ALTER TABLE `member_registration`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `library_no` (`library_no`);

--
-- Indexes for table `reserve_book`
--
ALTER TABLE `reserve_book`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `table_recommendation`
--
ALTER TABLE `table_recommendation`
  ADD PRIMARY KEY (`recommend_id`);

--
-- Indexes for table `tble_faculty_details`
--
ALTER TABLE `tble_faculty_details`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `tble_payment`
--
ALTER TABLE `tble_payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `tbl_penality`
--
ALTER TABLE `tbl_penality`
  ADD PRIMARY KEY (`penality_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `details_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_issue`
--
ALTER TABLE `book_issue`
  MODIFY `issue_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `book_return`
--
ALTER TABLE `book_return`
  MODIFY `return_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ebook_table`
--
ALTER TABLE `ebook_table`
  MODIFY `ebook_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `reserve_book`
--
ALTER TABLE `reserve_book`
  MODIFY `reserve_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_recommendation`
--
ALTER TABLE `table_recommendation`
  MODIFY `recommend_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tble_faculty_details`
--
ALTER TABLE `tble_faculty_details`
  MODIFY `faculty_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tble_payment`
--
ALTER TABLE `tble_payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_penality`
--
ALTER TABLE `tbl_penality`
  MODIFY `penality_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
