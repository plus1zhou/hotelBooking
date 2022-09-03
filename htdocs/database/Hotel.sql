-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 12, 2020 at 01:12 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administrator`
--

CREATE TABLE `Administrator` (
	`AdministratorID` int(11) NOT NULL,
	`A_Name` varchar(45) NOT NULL,
	`A_Email` varchar(45) NOT NULL,
	`A_Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Administrator`
--

INSERT INTO `Administrator` (`AdministratorID`, `A_Name`, `A_Email`, `A_Password`) VALUES
(12, 'Zhengyi Zhou', 'zhengyi.zhou1@ucalgary.ca', 'aaaaaaaa'),
(13, 'Sijia Yin', 'yinsijia1617@gmail.com', 'bbbbbbbb');

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
	`BookingID` int(20) NOT NULL,
	`B_Email` varchar(45) NOT NULL,
	`B_Date` date NOT NULL,
	`B_SR` varchar(256) NOT NULL,
	`B_Eventtype` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`BookingID`, `B_Email`, `B_Date`, `B_SR`, `B_Eventtype`) VALUES
(1, 'yinsijia1617@163.com', '2020-04-12', 'no', 'Indoor'),
(2, 'yinsijia1617@163.com', '2020-04-12', 'no', 'Party');

-- --------------------------------------------------------

--
-- Table structure for table `BookingBill`
--

CREATE TABLE `BookingBill` (
	`B_BillID` int(20) NOT NULL,
	`BookingID` int(20) NOT NULL,
	`B_Btotal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
	`CustomerID` int(11) NOT NULL,
	`C_Email` varchar(45) NOT NULL,
	`C_Password` varchar(45) NOT NULL,
	`C_Name` varchar(45) NOT NULL,
	`C_Birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustomerID`, `C_Email`, `C_Password`, `C_Name`, `C_Birthday`) VALUES
(2, 'yinsijia1617@163.com', 'aaaaaaaa', 'Sijia Yin', '1997-08-15'),
(3, 'yizhou0526@163.com', 'aaaaaaaa', 'Zhengyi Zhou', '1997-05-26'),
(4, 'sijia.yin@ucalgary.ca', 'aaaaaaaa', 'Sijia Yin', '1997-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
	`EventID` int(20) NOT NULL,
	`E_Name` varchar(45) NOT NULL,
	`E_des` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`EventID`, `E_Name`, `E_des`) VALUES
(1, 'Indoor', 'Hold at Blue Room.'),
(2, 'Outdoor', 'Hold at Green Space.'),
(3, 'Meeting', 'Hold at Risemont Room.'),
(4, 'Party', 'Hold at Legacy Suite.');

-- --------------------------------------------------------

--
-- Table structure for table `EventType`
--

CREATE TABLE `EventType` (
	`Eventtype_name` varchar(45) NOT NULL,
	`Eventtype_CAD` int(20) NOT NULL,
	`Eventtype_des` varchar(256) NOT NULL,
	`EventLocation` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `EventType`
--

INSERT INTO `EventType` (`Eventtype_name`, `Eventtype_CAD`, `Eventtype_des`, `EventLocation`) VALUES
('Indoor', 20, 'Hold at Blue Room.', 'Dining Centre 105, 124 University Gate NW'),
('Meeting', 15, 'Hold at Risemont Room.', 'International House, 169 University Gate NW'),
('Outdoor', 5, 'Hold at Green Space.', 'Open grass space spread across campus'),
('Party', 10, 'Hold at Legacy Suite.', 'Dining Centre 6&6E, 124 University Gate NW');

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
	`ReservationID` int(8) NOT NULL,
	`R_CID` date NOT NULL,
	`R_COD` date NOT NULL,
	`R_Number_of_Room` int(20) NOT NULL,
	`R_Room_Type` varchar(45) NOT NULL,
	`R_Email` varchar(45) NOT NULL,
	`R_Phone_Number` varchar(45) NOT NULL,
	`R_SR` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Reservation`
--

INSERT INTO `Reservation` (`ReservationID`, `R_CID`, `R_COD`, `R_Number_of_Room`, `R_Room_Type`, `R_Email`, `R_Phone_Number`, `R_SR`) VALUES
(10, '2020-04-11', '2020-04-13', 1, 'Family Room', 'yinsijia1617@163.com', '4038914214', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `ReservationBill`
--

CREATE TABLE `ReservationBill` (
	`RBillID` int(20) NOT NULL,
	`ReservationID` int(20) NOT NULL,
	`B_Total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
	`RoomID` int(11) NOT NULL,
	`RoomName` varchar(45) NOT NULL,
	`Room_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Room`
--

INSERT INTO `Room` (`RoomID`, `RoomName`, `Room_type`) VALUES
(1, '101', 'Double Room'),
(2, '102', 'Double Room'),
(3, '103', 'Double Room'),
(4, '104', 'Double Room'),
(5, '105', 'Double Room'),
(6, '106', 'Double Room'),
(7, '107', 'Double Room'),
(8, '201', 'Single Room'),
(9, '202', 'Single Room'),
(10, '203', 'Single Room'),
(11, '204', 'Single Room'),
(12, '205', 'Single Room'),
(13, '206', 'Single Room'),
(14, '207', 'Single Room'),
(15, '208', 'Single Room'),
(16, '301', 'Queen Room'),
(17, '302', 'Queen Room'),
(18, '303', 'Queen Room'),
(19, '304', 'Queen Room'),
(20, '305', 'Queen Room'),
(21, '306', 'Queen Room'),
(22, '307', 'Queen Room'),
(23, '401', 'Double Room'),
(24, '402', 'Double Room'),
(25, '403', 'Double Room'),
(26, '404', 'Double Room'),
(27, '401', 'Double Room'),
(28, '405', 'Double Room'),
(29, '406', 'Double Room'),
(30, '407', 'Double Room'),
(31, '501', 'Family Room'),
(32, '502', 'Family Room'),
(33, '503', 'Family Room'),
(34, '504', 'Family Room'),
(35, '505', 'Family Room'),
(36, '506', 'Family Room'),
(37, '507', 'Family Room'),
(38, '601', 'single room'),
(39, '602', 'double room');

-- --------------------------------------------------------

--
-- Table structure for table `RoomType`
--

CREATE TABLE `RoomType` (
	`Roomtype_name` varchar(45) NOT NULL,
	`Roomtype_CAD` int(20) NOT NULL,
	`Roomtype_roomID` int(11) NOT NULL,
	`Roomtype_number` int(12) NOT NULL,
	`Roomtype_des` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `RoomType`
--

INSERT INTO `RoomType` (`Roomtype_name`, `Roomtype_CAD`, `Roomtype_roomID`, `Roomtype_number`, `Roomtype_des`) VALUES
('Double Room', 130, 201, 14, 'A classic and standard room intended for two people.'),
('Family Room', 150, 401, 7, 'Available year-around, our two bedroom suites invite guests to stretch out and settle in. All suites come with a big view, along with all the little extras travellers appreciate - from a second TV to a full wet bar.'),
('Queen Room', 120, 301, 7, 'This room has a 32-inch flat screen TV, a desk, a microwave, a mini-fridge and a Keurig coffee maker.'),
('Single Room', 105, 101, 7, 'Standard single rooms are loaded with features that ensures a comfortable night\'s rest or a productive business day. Every stay is a standard room includes daily housekeeping service and complimentary All You Care to Eat breakfast.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Administrator`
--
ALTER TABLE `Administrator`
	ADD PRIMARY KEY (`AdministratorID`),
	ADD UNIQUE KEY `A_Email` (`A_Email`);

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
	ADD PRIMARY KEY (`BookingID`),
	ADD KEY `Booking_Eventtype` (`B_Eventtype`);

--
-- Indexes for table `BookingBill`
--
ALTER TABLE `BookingBill`
	ADD PRIMARY KEY (`B_BillID`),
	ADD KEY `BB_bookingID` (`BookingID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
	ADD PRIMARY KEY (`CustomerID`),
	ADD UNIQUE KEY `C_Email` (`C_Email`);

--
-- Indexes for table `Event`
--
ALTER TABLE `Event`
	ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `EventType`
--
ALTER TABLE `EventType`
	ADD PRIMARY KEY (`Eventtype_name`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
	ADD PRIMARY KEY (`ReservationID`),
	ADD KEY `Reservation_roomtype` (`R_Room_Type`),
	ADD KEY `Reservation_customer` (`R_Email`);

--
-- Indexes for table `ReservationBill`
--
ALTER TABLE `ReservationBill`
	ADD PRIMARY KEY (`RBillID`),
	ADD KEY `RB_reservationID` (`ReservationID`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
	ADD PRIMARY KEY (`RoomID`),
	ADD KEY `Room_roomtype` (`Room_type`);

--
-- Indexes for table `RoomType`
--
ALTER TABLE `RoomType`
	ADD PRIMARY KEY (`Roomtype_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Administrator`
--
ALTER TABLE `Administrator`
	MODIFY `AdministratorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
	MODIFY `BookingID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `BookingBill`
--
ALTER TABLE `BookingBill`
	MODIFY `B_BillID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
	MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Event`
--
ALTER TABLE `Event`
	MODIFY `EventID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Reservation`
--
ALTER TABLE `Reservation`
	MODIFY `ReservationID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ReservationBill`
--
ALTER TABLE `ReservationBill`
	MODIFY `RBillID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
	MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Booking`
--
ALTER TABLE `Booking`
	ADD CONSTRAINT `Booking_Eventtype` FOREIGN KEY (`B_Eventtype`) REFERENCES `EventType` (`Eventtype_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `BookingBill`
--
ALTER TABLE `BookingBill`
	ADD CONSTRAINT `BB_bookingID` FOREIGN KEY (`BookingID`) REFERENCES `Booking` (`BookingID`);

--
-- Constraints for table `Reservation`
--
ALTER TABLE `Reservation`
	ADD CONSTRAINT `Reservation_customer` FOREIGN KEY (`R_Email`) REFERENCES `Customer` (`C_Email`),
	ADD CONSTRAINT `Reservation_roomtype` FOREIGN KEY (`R_Room_Type`) REFERENCES `RoomType` (`Roomtype_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ReservationBill`
--
ALTER TABLE `ReservationBill`
	ADD CONSTRAINT `RB_reservationID` FOREIGN KEY (`ReservationID`) REFERENCES `Reservation` (`ReservationID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Room`
--
ALTER TABLE `Room`
	ADD CONSTRAINT `Room_roomtype` FOREIGN KEY (`Room_type`) REFERENCES `RoomType` (`Roomtype_name`) ON DELETE CASCADE ON UPDATE CASCADE;
