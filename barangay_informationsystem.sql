-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 09:31 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay_informationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL,
  `dateofactivity` text DEFAULT NULL,
  `activity` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `imageBanner` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityphoto`
--

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL,
  `activityid` int(11) DEFAULT NULL,
  `filename` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(255) DEFAULT NULL,
  `dateRecorded` varchar(255) DEFAULT NULL,
  `complainant` varchar(255) DEFAULT NULL,
  `cage` int(11) DEFAULT NULL,
  `caddress` varchar(500) DEFAULT NULL,
  `ccontact` text DEFAULT NULL,
  `personToComplain` varchar(250) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  `paddress` varchar(500) DEFAULT NULL,
  `pcontact` text DEFAULT NULL,
  `complaint` varchar(255) DEFAULT NULL,
  `actionTaken` text DEFAULT NULL,
  `sStatus` varchar(255) DEFAULT NULL,
  `locationOfincidence` varchar(255) DEFAULT NULL,
  `recordedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) DEFAULT NULL,
  `residentFullname` text DEFAULT NULL,
  `businessName` varchar(255) DEFAULT NULL,
  `businessAddress` varchar(255) DEFAULT NULL,
  `typeOfBusiness` text DEFAULT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) DEFAULT NULL,
  `dateRecorded` varchar(255) DEFAULT NULL,
  `recordedBy` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL,
  `householdno` int(11) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `totalhousemembers` int(20) DEFAULT NULL,
  `headoffamily` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_ip` text DEFAULT NULL,
  `user_host` text DEFAULT NULL,
  `logdate` text DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `id_log` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `sPostion` varchar(100) DEFAULT NULL,
  `completeName` varchar(100) DEFAULT NULL,
  `pcontact` varchar(100) DEFAULT NULL,
  `paddress` varchar(500) DEFAULT NULL,
  `termStart` text DEFAULT NULL,
  `termEnd` text DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `residentFullname` text DEFAULT NULL,
  `businessName` varchar(500) DEFAULT NULL,
  `businessAddress` varchar(500) DEFAULT NULL,
  `typeOfBusiness` varchar(500) DEFAULT NULL,
  `orNo` int(11) DEFAULT NULL,
  `samount` int(11) DEFAULT NULL,
  `dateRecorded` text DEFAULT NULL,
  `recordedBy` varchar(255) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `bdate` text DEFAULT NULL,
  `bplace` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `barangay` varchar(500) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `totalhousehold` int(20) DEFAULT NULL,
  `differentlyabledperson` varchar(255) DEFAULT NULL,
  `relationtohead` varchar(255) DEFAULT NULL,
  `maritalstatus` varchar(255) DEFAULT NULL,
  `bloodtype` varchar(255) DEFAULT NULL,
  `civilstatus` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `monthlyincome` int(20) DEFAULT NULL,
  `householdnum` int(11) DEFAULT NULL,
  `lengthofstay` int(20) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `igpitID` int(11) DEFAULT NULL,
  `philhealthNo` text DEFAULT NULL,
  `highestEducationAttainment` varchar(255) DEFAULT NULL,
  `landOwnershipStatus` varchar(255) DEFAULT NULL,
  `houseOwnershipStatus` varchar(255) DEFAULT NULL,
  `dwellingtype` varchar(255) DEFAULT NULL,
  `waterUsage` varchar(255) DEFAULT NULL,
  `lightningFacilities` varchar(255) DEFAULT NULL,
  `sanitaryToilet` varchar(255) DEFAULT NULL,
  `formerAddress` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusertype`
--

CREATE TABLE `tblusertype` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusertype`
--

INSERT INTO `tblusertype` (`id`, `fullname`, `username`, `password`, `type`) VALUES
(1, 'admin admin', 'admin', 'C567sRz2ql9024DaCxPoxEaSo90zIm3Zeso0RzE0f865b53623b121fd34ee5426c792e5c33af8c227', 'Admin'),
(2, 'maria toledo', 'maria', 'C567sRz2ql9024DaCxPoxEaSo90zIm3Zeso0RzE08cb2237d0679ca88db6464eac60da96345513964', 'Zone Leader'),
(3, 'nario luis', 'nario', 'C567sRz2ql9024DaCxPoxEaSo90zIm3Zeso0RzE040bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tblzone`
--

CREATE TABLE `tblzone` (
  `id` int(11) NOT NULL,
  `zone` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificateofresidency`
--

CREATE TABLE `tbl_certificateofresidency` (
  `certificate_id` int(11) NOT NULL,
  `resident_name` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `date_created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificateofresidencyequest`
--

CREATE TABLE `tbl_certificateofresidencyequest` (
  `certificate_id` int(11) NOT NULL,
  `self_status` text NOT NULL,
  `residence_name` varchar(255) NOT NULL,
  `date_created` text NOT NULL,
  `zoneleader_name` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblofficial`
--
ALTER TABLE `tblofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresident`
--
ALTER TABLE `tblresident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusertype`
--
ALTER TABLE `tblusertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblzone`
--
ALTER TABLE `tblzone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_certificateofresidency`
--
ALTER TABLE `tbl_certificateofresidency`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `tbl_certificateofresidencyequest`
--
ALTER TABLE `tbl_certificateofresidencyequest`
  ADD PRIMARY KEY (`certificate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblofficial`
--
ALTER TABLE `tblofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblusertype`
--
ALTER TABLE `tblusertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblzone`
--
ALTER TABLE `tblzone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_certificateofresidency`
--
ALTER TABLE `tbl_certificateofresidency`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_certificateofresidencyequest`
--
ALTER TABLE `tbl_certificateofresidencyequest`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
