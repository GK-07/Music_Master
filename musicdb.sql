-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 05:33 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminid` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profilepic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `name`, `username`, `password`, `email`, `profilepic`) VALUES
(1, 'kirti', 'kirtii', 'kirtii', 'kb009@gmail.com', 'artist8.jpg\r\n'),
(2, 'manisha', 'manisha', '7654', 'manishachauhan@gmail.com', 'artist4.jpg'),
(3, 'Priyanka Khothari', 'priyanka', 'priya', 'priyanka12@gmail.com', 'artist2.jpg'),
(4, 'pooja dhaduk', 'pooja', 'dhaduk', 'pdhaduk52@gmail.com', 'artist9.jpg'),
(5, 'avani mehta', 'avani', 'mehta', 'avanimehta07@gmail.com', 'artist10.jpg'),
(6, 'bhavya bothra', 'bhavya', 'bothra', 'bhavyabothra18@gmail.com', 'artist12.jpg'),
(7, 'Jahanvi', 'jahanvii', '123456', 'js18@gmail.com', 'adv31.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tblalbum`
--

CREATE TABLE `tblalbum` (
  `albumid` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `releasedt` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `cover` varchar(500) NOT NULL DEFAULT 'cover.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblalbum`
--

INSERT INTO `tblalbum` (`albumid`, `name`, `type`, `releasedt`, `status`, `description`, `cover`) VALUES
(1, 'Happier/Marshmellow', 'EDM', '2019-02-19', '0', 'Written and produced by Marshmello', 'Happier.png'),
(2, 'No sound without silence', 'Soul', '2027-08-16', '0', 'is the fourth studio album by Irish pop rock band The Script.', 'thescript.png'),
(3, 'Reputation', 'Pop', '2018-01-09', '0', 'It is the sixth studio album by American singer-songwriter Taylor Swift.\r\n', 'reputation.png'),
(4, 'Queen', 'Rap', '2018-05-17', '0', 'It is the fourth studio album by Trinidadian-born American rapper Nicki Minaj.', 'queenn.jpg'),
(5, 'Sweetener', 'Pop', '2018-08-17', '0', 'weetener is the fourth studio album by American singer Ariana Grande.', 'sweet.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblartist`
--

CREATE TABLE `tblartist` (
  `artistid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `description` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblartist`
--

INSERT INTO `tblartist` (`artistid`, `name`, `photo`, `description`) VALUES
(1, 'Drake', 'new.png', 'Aubrey Drake Graham is a Canadian rapper, singer, songwriter, actor, and entrepreneur.'),
(2, 'The Script', 'thescriptt.jpg', 'The Script is an Irish pop band formed in 2001 in Dublin, Ireland.'),
(3, 'Rihanna', 'rihanna.png', 'Robyn Rihanna Fenty is a Barbadian singer, businesswoman, actress and more.\r\n'),
(4, 'Nicki Minaj', 'nicki.jpg', 'Minaj has been called one of the most influential female rap artists of all time.'),
(5, 'Kelly Clarkson', 'kelly.jpg', 'She is an American singer, songwriter, and television personality.');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `categoryid` int(100) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`categoryid`, `categoryname`) VALUES
(1, 'Hip-Hop'),
(2, 'RnB'),
(3, 'Country'),
(4, 'Rap'),
(5, 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `tblfollow`
--

CREATE TABLE `tblfollow` (
  `followid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `artistid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmood`
--

CREATE TABLE `tblmood` (
  `moodid` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmood`
--

INSERT INTO `tblmood` (`moodid`, `title`, `description`, `image`) VALUES
(1, 'Happy', 'Just when you want some fun', 'Capture.png'),
(2, 'Sad', 'Understand the lyrics', 'sad.png'),
(3, 'Romantic', 'Make your heart happy', 'rom.png'),
(4, 'Dance', 'When your feet feels like dancing', 'dance.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblmoodsongs`
--

CREATE TABLE `tblmoodsongs` (
  `moodsongsid` int(100) NOT NULL,
  `moodid` int(100) NOT NULL,
  `songid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmoodsongs`
--

INSERT INTO `tblmoodsongs` (`moodsongsid`, `moodid`, `songid`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblplaylist`
--

CREATE TABLE `tblplaylist` (
  `playlistid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `createddt` date NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblplaylistsongs`
--

CREATE TABLE `tblplaylistsongs` (
  `playlistsongid` int(50) NOT NULL,
  `playlistid` int(50) NOT NULL,
  `songid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsong`
--

CREATE TABLE `tblsong` (
  `songid` int(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `albumid` int(100) NOT NULL,
  `categoryid` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `url` varchar(500) NOT NULL,
  `songUrl` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsong`
--

INSERT INTO `tblsong` (`songid`, `title`, `duration`, `albumid`, `categoryid`, `status`, `description`, `image`, `url`, `songUrl`) VALUES
(1, 'Happier', '3:24', 1, 1, '0', '\"Happier\" is a song by American music producer Marshmello and British band Bastille.', 'img1.jpg', 'happier.mp3', ''),
(2, 'hall of fame', '4:00', 1, 2, '1', 'the inspirational one', 'img2.jpg', 'b.mp3', ''),
(3, 'End Game', '4:11', 3, 5, '0', 'From Taylor Swift\'s Reputation', 'song3.jpg', 'endgame.mp3', ''),
(4, 'No good in goodbye', '5:08', 2, 2, '0', 'From No sound without silence', 'song4.jpg', 'nogood.mp3', ''),
(5, 'God is a woman', '4:02', 5, 5, '0', 'From Ariana\'s Sweeetner', 'song8.jpg', 'god.mp3', ''),
(6, 'Good Form', '4:02', 4, 4, '0', '', 'song7.jpg', 'f.mp3', ''),
(8, 'thank you, next', '5:04', 4, 4, '0', 'the hit single', 'song5.jpg', '03.mp3', ''),
(9, 'Superheroes', '4:33', 2, 2, '0', 'Hit song by The Script', 'song6.jpg', 'super.mp3', ''),
(10, 'this is a demo song', '5:53', 1, 1, '0', 'this is a demo song', '1_oS5C1kI5TucpkBBWQojqtg.jpeg', '', '02. Halsey - Without Me.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `tblsongartist`
--

CREATE TABLE `tblsongartist` (
  `songartistid` int(50) NOT NULL,
  `songid` int(50) NOT NULL,
  `artistid` int(50) NOT NULL,
  `relation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsongartist`
--

INSERT INTO `tblsongartist` (`songartistid`, `songid`, `artistid`, `relation`) VALUES
(1, 3, 1, NULL),
(2, 4, 1, NULL),
(3, 4, 2, NULL),
(4, 5, 1, NULL),
(5, 6, 4, NULL),
(6, 8, 1, NULL),
(7, 8, 4, NULL),
(8, 9, 5, NULL),
(9, 5, 3, NULL),
(10, 10, 1, NULL),
(11, 10, 2, NULL),
(12, 10, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsongcomments`
--

CREATE TABLE `tblsongcomments` (
  `songcommentid` int(50) NOT NULL,
  `songid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `createddt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsongcomments`
--

INSERT INTO `tblsongcomments` (`songcommentid`, `songid`, `userid`, `createddt`, `comments`) VALUES
(1, 4, 1, '2019-03-21 14:44:53', 'nic song'),
(2, 4, 1, '2019-03-21 14:52:10', 'bahut badhiya gayan hai'),
(3, 1, 1, '2019-03-22 06:12:20', ''),
(4, 1, 1, '2019-03-22 06:12:38', 'bahut badhiya gayan hai'),
(5, 5, 1, '2019-03-23 05:54:40', 'bahut badhiya gayan hai');

-- --------------------------------------------------------

--
-- Table structure for table `tblsonglikes`
--

CREATE TABLE `tblsonglikes` (
  `songlikesid` int(11) NOT NULL,
  `songid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsonglikes`
--

INSERT INTO `tblsonglikes` (`songlikesid`, `songid`, `userid`) VALUES
(2, 2, 1),
(7, 4, 1),
(8, 1, 1),
(10, 3, 1),
(11, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `userid` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profilepic` varchar(200) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `registrationdt` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`userid`, `username`, `password`, `email`, `profilepic`, `contactno`, `registrationdt`, `dob`, `gender`, `status`) VALUES
(1, 'cersie', '1234', 'cersielannister@gmail.com', 'default.jpg', '987654321', '20/2/19', '20/2/97', 'Female', '1'),
(2, 'Robb Stark', '4567', 'kinginthenorth@gmail.com', 'new.png', '9427580917', '2/2/19', '27/8/95', 'Male', '1'),
(3, 'arya', '7894', 'aryastark@gmail.com', 'new3.png', '45123678', '20/2/19', '7/8/95', 'Female', '0'),
(4, 'avani', '123456', 'avani@gmail.com', '', '987412563', '27/8/2017', '7/4/98', 'Female', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tblalbum`
--
ALTER TABLE `tblalbum`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `tblartist`
--
ALTER TABLE `tblartist`
  ADD PRIMARY KEY (`artistid`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `tblfollow`
--
ALTER TABLE `tblfollow`
  ADD PRIMARY KEY (`followid`);

--
-- Indexes for table `tblmood`
--
ALTER TABLE `tblmood`
  ADD PRIMARY KEY (`moodid`);

--
-- Indexes for table `tblmoodsongs`
--
ALTER TABLE `tblmoodsongs`
  ADD PRIMARY KEY (`moodsongsid`);

--
-- Indexes for table `tblplaylist`
--
ALTER TABLE `tblplaylist`
  ADD PRIMARY KEY (`playlistid`);

--
-- Indexes for table `tblplaylistsongs`
--
ALTER TABLE `tblplaylistsongs`
  ADD PRIMARY KEY (`playlistsongid`);

--
-- Indexes for table `tblsong`
--
ALTER TABLE `tblsong`
  ADD PRIMARY KEY (`songid`);

--
-- Indexes for table `tblsongartist`
--
ALTER TABLE `tblsongartist`
  ADD PRIMARY KEY (`songartistid`);

--
-- Indexes for table `tblsongcomments`
--
ALTER TABLE `tblsongcomments`
  ADD PRIMARY KEY (`songcommentid`);

--
-- Indexes for table `tblsonglikes`
--
ALTER TABLE `tblsonglikes`
  ADD PRIMARY KEY (`songlikesid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblalbum`
--
ALTER TABLE `tblalbum`
  MODIFY `albumid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblartist`
--
ALTER TABLE `tblartist`
  MODIFY `artistid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `categoryid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblfollow`
--
ALTER TABLE `tblfollow`
  MODIFY `followid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmood`
--
ALTER TABLE `tblmood`
  MODIFY `moodid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblmoodsongs`
--
ALTER TABLE `tblmoodsongs`
  MODIFY `moodsongsid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblplaylist`
--
ALTER TABLE `tblplaylist`
  MODIFY `playlistid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblplaylistsongs`
--
ALTER TABLE `tblplaylistsongs`
  MODIFY `playlistsongid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsong`
--
ALTER TABLE `tblsong`
  MODIFY `songid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblsongartist`
--
ALTER TABLE `tblsongartist`
  MODIFY `songartistid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblsongcomments`
--
ALTER TABLE `tblsongcomments`
  MODIFY `songcommentid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblsonglikes`
--
ALTER TABLE `tblsonglikes`
  MODIFY `songlikesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
