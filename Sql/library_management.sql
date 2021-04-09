-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 01:09 PM
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
(1, 'Python', '1');

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
(1, 5, 1200, 1500, '2021-01-08', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_issue`
--

CREATE TABLE `book_issue` (
  `issue_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `issue_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_issue`
--

INSERT INTO `book_issue` (`issue_id`, `book_id`, `member_id`, `issue_date`, `status`) VALUES
(1, 2002, 9152, '0000-00-00', ''),
(2, 2002, 9152, '0000-00-00', ''),
(3, 2002, 9050, '0000-00-00', ''),
(4, 2002, 8050, '0000-00-00', ''),
(5, 2002, 7020, '0000-00-00', ''),
(6, 2002, 7020, '2021-01-27', ''),
(7, 2002, 9050, '2021-01-27', ''),
(8, 2, 8888, '2021-01-27', ''),
(9, 2, 8888, '2021-01-27', '');

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
  `year_of_publish` int(20) NOT NULL,
  `edition` varchar(20) NOT NULL,
  `isbn_no` int(20) NOT NULL,
  `book_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`book_id`, `category_id`, `book_title`, `book_author`, `second_author`, `third_author`, `year_of_publish`, `edition`, `isbn_no`, `book_status`) VALUES
(1, 1, 'Pandas', ' Balaguruswami', 'dnvsdjkfb', 'kjfvnlaerugh', 2018, 'III', 0, 'Active'),
(2, 1, 'Pandas', ' Balaguruswami', 'dnvsdjkfb', 'kjfvnlaerugh', 2018, 'III', 0, 'Active'),
(3, 1, 'Data Structure using Python ', ' Abcd', 'Efgh', 'Ijkl', 2017, 'IV', 0, 'Active'),
(4, 1, 'NumPy', ' ksdnvask', 'fvndjf', 'sbfjdbfeq', 2015, 'IX', 0, 'Active'),
(5, 1, 'Introduction to Python', ' Richards', 'Villimson', 'Anderson', 2017, 'IX', 0, 'Active'),
(6, 1, 'NumPy', ' ksdnvask', 'shbvfskdg', 'kjfvnlaerugh', 2018, 'IX', 2002, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_table`
--

CREATE TABLE `ebook_table` (
  `ebook_id` int(10) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_size` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ebook_table`
--

INSERT INTO `ebook_table` (`ebook_id`, `book_name`, `book_size`) VALUES
(1, 'certificate.pdf', 88276);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `username`, `password`, `role`) VALUES
(1, 'justine', 'b55050b2f605b7cf0d48346ff3d432d3', 'Admin'),
(6, 'ashiya', '0050cb8af017e56d2f6b5e4ddb571b2b', 'User'),
(7, 'jithin', '1c4317a963b252091890e123b4a2790d', 'User'),
(8, 'jubin', '9239afa636a520a0ff8c7b1f68ff5b0c', 'User'),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e', 'User'),
(10, 'jaimi', '57f9f1aa2a9f2545876c2038f25d4217', 'User'),
(11, 'tebin', 'e25cdd719b01d5284814210ba4b90ad5', 'User');

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
  `user_type` varchar(40) NOT NULL,
  `m_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_registration`
--

INSERT INTO `member_registration` (`member_id`, `l_id`, `library_no`, `m_name`, `m_email`, `m_phno`, `gender`, `m_dateofbirth`, `m_dept`, `user_type`, `m_status`) VALUES
(1, 6, 9152, '  Ashiya', 'ashiya@gmail.com', '9446861110', 'female', '1998-10-26', 'MCA', 'User', 'Active'),
(2, 7, 9050, 'Jithin', 'jithin@gmail.com', '7889564512', 'male', '1998-06-10', 'EC', 'User', 'Active'),
(3, 8, 8888, 'Jubin', 'jubin@gmail.com', '8956231045', 'male', '1997-01-28', 'MCA', 'User', 'Active'),
(4, 10, 8050, 'Jaimi', 'jaimi@gmail.com', '7845986520', 'female', '1999-05-11', 'CS', 'User', 'Active'),
(5, 11, 7020, 'Tebin', 'tebin@gmail.com', '8956234578', 'male', '2014-12-02', 'MCA', 'User', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_book`
--

CREATE TABLE `reserve_book` (
  `reserve_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penality`
--

CREATE TABLE `tbl_penality` (
  `penality_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `penality_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`book_id`);

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
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `reserve_book`
--
ALTER TABLE `reserve_book`
  ADD PRIMARY KEY (`reserve_id`);

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
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `details_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_issue`
--
ALTER TABLE `book_issue`
  MODIFY `issue_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book_return`
--
ALTER TABLE `book_return`
  MODIFY `return_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ebook_table`
--
ALTER TABLE `ebook_table`
  MODIFY `ebook_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reserve_book`
--
ALTER TABLE `reserve_book`
  MODIFY `reserve_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penality`
--
ALTER TABLE `tbl_penality`
  MODIFY `penality_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
