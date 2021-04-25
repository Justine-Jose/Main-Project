-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 06:34 AM
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
(3, 'Novals', 'Active');

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
(2, 7, 700, 500, '2012-12-05', '');

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
(18, 7, 12, 0, 0, '2021-04-02', '2021-04-12', '0'),
(19, 6, 12, 0, 0, '2021-04-14', '2021-04-24', '0'),
(20, 7, 10, 0, 0, '2021-04-17', '2021-04-27', '0'),
(21, 1, 8, 0, 0, '2021-04-22', '2021-05-02', '0');

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
(3, 1, 'Data Structure using Python ', ' Abcd', 'Efgh', 'Ijkl', 2017, 'IV', 0, 'Active'),
(4, 1, 'NumPy', ' ksdnvask', 'fvndjf', 'sbfjdbfeq', 2015, 'IX', 0, 'Active'),
(5, 1, 'Introduction to Python', ' Richards', 'Villimson', 'Anderson', 2017, 'IX', 0, 'Active'),
(7, 3, 'Sherlock Holmes', ' akjndkb', 'kjdfksdjbf', 'kndksdjb', 2012, 'IV', 1002, 'Active');

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
(13, 8, 'RegisteredStudentBillReport (3).pdf', 6820, 0, '0'),
(14, 6, 'bellovin.pdf', 995104, 0, 'Approved'),
(15, 6, 'RegisteredStudentBillReport (3).pdf', 6820, 0, '0'),
(16, 67, 'RegisteredStudentBillReport (3).pdf', 6820, 0, '0');

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
(10, 'jaimi', '57f9f1aa2a9f2545876c2038f25d4217', 'User'),
(11, 'tebin', 'e25cdd719b01d5284814210ba4b90ad5', 'User'),
(12, 'tintu', 'ed11644d4d2ff788b57b406b0f5087be', 'User'),
(67, 'arun', '722279e9e630b3e731464b69968ea4b4', 'Faculty');

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
(1, 6, 9152, '    Ashiya', 'ashiya@gmail.com', '8798654121', 'female', '1998-10-26', 'MCA', 'User', 'Active'),
(2, 7, 9050, 'Jithin', 'jithin@gmail.com', '7889564512', 'male', '1998-06-10', 'EC', 'User', 'Active'),
(3, 8, 8888, 'Jubin', 'jubin@gmail.com', '8956231045', 'male', '1997-01-28', 'MCA', 'User', 'Active'),
(4, 10, 8050, ' Jaimi', 'jaimi@gmail.com', '8974522010', 'female', '1999-05-11', 'CS', 'User', 'Active'),
(5, 11, 7020, ' Tebin', 'tebin@gmail.com', '9985654110', 'male', '2014-12-02', 'MCA', 'User', 'Active'),
(6, 67, 3002, 'arun', 'arunphilip@gmail.com', '7441203565', 'male', '1998-08-14', 'EC', 'Faculty', 'Active');

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
(5, 4, 10, '2021-04-20', '0');

-- --------------------------------------------------------

--
-- Table structure for table `table_recommendation`
--

CREATE TABLE `table_recommendation` (
  `Rid` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penality`
--

CREATE TABLE `tbl_penality` (
  `penality_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `issue_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
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
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `library_no` (`library_no`);

--
-- Indexes for table `reserve_book`
--
ALTER TABLE `reserve_book`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `table_recommendation`
--
ALTER TABLE `table_recommendation`
  ADD PRIMARY KEY (`Rid`);

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
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `details_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_issue`
--
ALTER TABLE `book_issue`
  MODIFY `issue_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `book_return`
--
ALTER TABLE `book_return`
  MODIFY `return_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ebook_table`
--
ALTER TABLE `ebook_table`
  MODIFY `ebook_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `member_registration`
--
ALTER TABLE `member_registration`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `reserve_book`
--
ALTER TABLE `reserve_book`
  MODIFY `reserve_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_penality`
--
ALTER TABLE `tbl_penality`
  MODIFY `penality_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
