-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 11:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `brazildf`
--

CREATE TABLE `brazildf` (
  `id` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matches` int(50) NOT NULL,
  `goal` int(50) NOT NULL,
  `assist` int(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brazildf`
--

INSERT INTO `brazildf` (`id`, `image`, `name`, `matches`, `goal`, `assist`, `type`) VALUES
(1, '663silva.png', 'Thiago SILVA', 5, 0, 0, 'CB'),
(2, '335danilo.png', 'DANILO', 5, 0, 0, 'RB'),
(3, '784marquinos.png', 'MAEQUINOS', 5, 0, 0, 'CB'),
(4, '272sandro.png', 'Alex SANDRO', 5, 0, 0, 'LB'),
(6, '394militao.png', 'MILITAO', 5, 0, 0, 'CB'),
(7, '531alex.png', 'Alex TALLES', 5, 0, 0, 'CB'),
(8, '544bremer.png', 'BREMER', 5, 0, 0, 'CB');

-- --------------------------------------------------------

--
-- Table structure for table `brazilfd`
--

CREATE TABLE `brazilfd` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matches` int(50) NOT NULL,
  `goal` int(50) NOT NULL,
  `assist` int(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brazilfd`
--

INSERT INTO `brazilfd` (`id`, `image`, `name`, `matches`, `goal`, `assist`, `type`) VALUES
(1, '245neymar.png', 'NEYMAR', 3, 3, 0, 'LW'),
(2, '541vinicius.png', 'VINICIUS JR', 5, 2, 1, 'LW'),
(5, '597jesus.png', 'Jesus', 3, 2, 1, 'ST');

-- --------------------------------------------------------

--
-- Table structure for table `brazilgk`
--

CREATE TABLE `brazilgk` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matches` int(50) NOT NULL,
  `gs` int(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brazilgk`
--

INSERT INTO `brazilgk` (`id`, `image`, `name`, `matches`, `gs`, `type`) VALUES
(1, '144alisson.png', 'Alisson', 5, 2, 'GK'),
(6, '402ederson.png', 'Ederson', 1, 2, 'GK'),
(7, '591waverton.png', 'Waverton', 1, 2, 'GK');

-- --------------------------------------------------------

--
-- Table structure for table `brazilmd`
--

CREATE TABLE `brazilmd` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matches` int(50) NOT NULL,
  `goal` int(50) NOT NULL,
  `assist` int(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brazilmd`
--

INSERT INTO `brazilmd` (`id`, `image`, `name`, `matches`, `goal`, `assist`, `type`) VALUES
(1, '132casemiro.png', 'CASEMIRO', 5, 0, 1, 'CDM'),
(2, '132paqueta.png', 'Paqueta', 5, 0, 1, 'CM');

-- --------------------------------------------------------

--
-- Table structure for table `brazilmn`
--

CREATE TABLE `brazilmn` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matches` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brazilmn`
--

INSERT INTO `brazilmn` (`id`, `image`, `name`, `matches`) VALUES
(1, '886tite.png', 'TITE', 8);

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `id` int(50) NOT NULL,
  `flagone` varchar(255) NOT NULL,
  `flagtwo` varchar(255) NOT NULL,
  `teamone` varchar(255) NOT NULL,
  `teamtwo` varchar(255) NOT NULL,
  `scoreone` varchar(255) NOT NULL,
  `scoretwo` varchar(255) NOT NULL,
  `tm` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `wp1` varchar(255) NOT NULL,
  `drw` varchar(255) NOT NULL,
  `wp2` varchar(255) NOT NULL,
  `sog1` varchar(255) NOT NULL,
  `sog2` varchar(255) NOT NULL,
  `possession1` varchar(255) NOT NULL,
  `possession2` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groupa`
--

CREATE TABLE `groupa` (
  `id` int(50) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `mp` int(50) NOT NULL,
  `L` int(50) NOT NULL,
  `D` int(50) NOT NULL,
  `W` int(50) NOT NULL,
  `Pts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupa`
--

INSERT INTO `groupa` (`id`, `flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES
(1, '427wales.png', 'Iran', 4, 3, 0, 1, 10),
(2, '212arg.png', 'Argentina', 5, 0, 0, 4, 10),
(3, '261bel.png', 'Belgium', 4, 1, 0, 3, 12),
(4, '703wales.png', 'Wales', 4, 0, 0, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `groupb`
--

CREATE TABLE `groupb` (
  `id` int(40) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `mp` int(50) NOT NULL,
  `L` int(50) NOT NULL,
  `D` int(50) NOT NULL,
  `W` int(50) NOT NULL,
  `Pts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupb`
--

INSERT INTO `groupb` (`id`, `flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES
(1, '240iran.png', 'German', 4, 1, 1, 2, 5),
(2, '607costa.png', 'Costa Rica', 4, 0, 0, 4, 8),
(3, '798cro.png', 'Brazil', 2, 1, 0, 1, 2),
(4, '297swz.png', 'Argentina', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `groupc`
--

CREATE TABLE `groupc` (
  `id` int(50) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `mp` int(50) NOT NULL,
  `L` int(50) NOT NULL,
  `D` int(50) NOT NULL,
  `W` int(50) NOT NULL,
  `Pts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupc`
--

INSERT INTO `groupc` (`id`, `flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES
(1, '143eng.png', 'England', 0, 0, 0, 0, 0),
(2, '896bra.png', 'Brazil', 0, 0, 0, 0, 6),
(3, '700jap.png', 'Wales', 0, 0, 0, 0, 0),
(4, '652aus.png', 'Belgium', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `groupd`
--

CREATE TABLE `groupd` (
  `id` int(50) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `mp` int(50) NOT NULL,
  `L` int(50) NOT NULL,
  `D` int(50) NOT NULL,
  `W` int(50) NOT NULL,
  `Pts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupd`
--

INSERT INTO `groupd` (`id`, `flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES
(1, '605ger.png', 'German', 4, 1, 1, 2, 5),
(2, '982por.png', 'Portugal', 4, 1, 0, 3, 6),
(3, '171gha.png', 'Ghana', 4, 0, 0, 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(50) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `mp` int(50) NOT NULL,
  `L` int(50) NOT NULL,
  `D` int(50) NOT NULL,
  `W` int(50) NOT NULL,
  `Pts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupe`
--

INSERT INTO `groupe` (`id`, `flag`, `team`, `mp`, `L`, `D`, `W`, `Pts`) VALUES
(1, '686spian.png', 'Spain', 2, 1, 0, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `groupf`
--

CREATE TABLE `groupf` (
  `id` int(50) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `mp` int(50) NOT NULL,
  `L` int(50) NOT NULL,
  `D` int(50) NOT NULL,
  `W` int(50) NOT NULL,
  `Pts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groupg`
--

CREATE TABLE `groupg` (
  `id` int(50) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `mp` int(50) NOT NULL,
  `L` int(50) NOT NULL,
  `D` int(50) NOT NULL,
  `W` int(50) NOT NULL,
  `Pts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grouph`
--

CREATE TABLE `grouph` (
  `id` int(50) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `mp` int(50) NOT NULL,
  `L` int(50) NOT NULL,
  `D` int(50) NOT NULL,
  `W` int(50) NOT NULL,
  `Pts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(50) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `flag`, `team`) VALUES
(3, '479qatar.png', 'Qatar'),
(4, '220ecuador.png', 'Ecuador'),
(5, '279ned.png', 'Netherlands'),
(6, '319senegal.png', 'Senegal');

-- --------------------------------------------------------

--
-- Table structure for table `groupstage`
--

CREATE TABLE `groupstage` (
  `id` int(50) NOT NULL,
  `flagone` varchar(255) NOT NULL,
  `flagtwo` varchar(255) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `teamone` varchar(255) NOT NULL,
  `teamtwo` varchar(255) NOT NULL,
  `scoreone` varchar(255) NOT NULL,
  `scoretwo` varchar(255) NOT NULL,
  `tm` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `wp1` varchar(255) NOT NULL,
  `drw` varchar(255) NOT NULL,
  `wp2` varchar(255) NOT NULL,
  `sog1` varchar(255) NOT NULL,
  `sog2` varchar(255) NOT NULL,
  `possession1` varchar(255) NOT NULL,
  `possession2` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupstage`
--

INSERT INTO `groupstage` (`id`, `flagone`, `flagtwo`, `groupname`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`, `wp1`, `drw`, `wp2`, `sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
(17, '445bra.png', '847cro.png', 'Group H', 'Brazil', 'Croatia', '3', '1', '9:00', '20 jan, 23', 'Full Time', '', '', '', '4(4)', '1(1)', '75%', '25%', '99%', '80%');

-- --------------------------------------------------------

--
-- Table structure for table `knockoutstage`
--

CREATE TABLE `knockoutstage` (
  `id` int(50) NOT NULL,
  `flagone` varchar(255) NOT NULL,
  `flagtwo` varchar(255) NOT NULL,
  `teamone` varchar(255) NOT NULL,
  `teamtwo` varchar(255) NOT NULL,
  `scoreone` varchar(255) NOT NULL,
  `scoretwo` varchar(255) NOT NULL,
  `tm` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `wp1` varchar(255) NOT NULL,
  `drw` varchar(255) NOT NULL,
  `wp2` varchar(255) NOT NULL,
  `sog1` varchar(255) NOT NULL,
  `sog2` varchar(255) NOT NULL,
  `possession1` varchar(255) NOT NULL,
  `possession2` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knockoutstage`
--

INSERT INTO `knockoutstage` (`id`, `flagone`, `flagtwo`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`, `wp1`, `drw`, `wp2`, `sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
(8, '476arg.png', '686mex.png', 'Argentina', 'Mexico', '2', '1', '1:00', '22 jan, 23', 'Full Time', '', '', '', '4(2)', '1(1)', '60%', '40%', '94%', '80%');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `quarterfinal`
--

CREATE TABLE `quarterfinal` (
  `id` int(50) NOT NULL,
  `flagone` varchar(255) NOT NULL,
  `flagtwo` varchar(255) NOT NULL,
  `teamone` varchar(255) NOT NULL,
  `teamtwo` varchar(255) NOT NULL,
  `scoreone` varchar(255) NOT NULL,
  `scoretwo` varchar(255) NOT NULL,
  `tm` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `wp1` varchar(255) NOT NULL,
  `drw` varchar(255) NOT NULL,
  `wp2` varchar(255) NOT NULL,
  `sog1` varchar(255) NOT NULL,
  `sog2` varchar(255) NOT NULL,
  `possession1` varchar(255) NOT NULL,
  `possession2` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quarterfinal`
--

INSERT INTO `quarterfinal` (`id`, `flagone`, `flagtwo`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`, `wp1`, `drw`, `wp2`, `sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
(5, '793bel.png', '378ghana.png', 'Belgium', 'Ghana', '1', '5', '9:00', '23 jan,23', 'Full Time', '', '', '', '4(4)', '9(8)', '30%', '70%', '70%', '98%');

-- --------------------------------------------------------

--
-- Table structure for table `semifinal`
--

CREATE TABLE `semifinal` (
  `id` int(50) NOT NULL,
  `flagone` varchar(255) NOT NULL,
  `flagtwo` varchar(255) NOT NULL,
  `teamone` varchar(255) NOT NULL,
  `teamtwo` varchar(255) NOT NULL,
  `scoreone` varchar(255) NOT NULL,
  `scoretwo` varchar(255) NOT NULL,
  `tm` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `wp1` varchar(255) NOT NULL,
  `drw` varchar(255) NOT NULL,
  `wp2` varchar(255) NOT NULL,
  `sog1` varchar(255) NOT NULL,
  `sog2` varchar(255) NOT NULL,
  `possession1` varchar(255) NOT NULL,
  `possession2` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semifinal`
--

INSERT INTO `semifinal` (`id`, `flagone`, `flagtwo`, `teamone`, `teamtwo`, `scoreone`, `scoretwo`, `tm`, `dt`, `status`, `wp1`, `drw`, `wp2`, `sog1`, `sog2`, `possession1`, `possession2`, `pass1`, `pass2`) VALUES
(5, '482download.png', '149download.png', 'TBA', 'TBA', '', '', '10:00', '24 jan, 23', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(50) NOT NULL,
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brazildf`
--
ALTER TABLE `brazildf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brazilfd`
--
ALTER TABLE `brazilfd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brazilgk`
--
ALTER TABLE `brazilgk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brazilmd`
--
ALTER TABLE `brazilmd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brazilmn`
--
ALTER TABLE `brazilmn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupa`
--
ALTER TABLE `groupa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupb`
--
ALTER TABLE `groupb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupc`
--
ALTER TABLE `groupc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupd`
--
ALTER TABLE `groupd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupf`
--
ALTER TABLE `groupf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupg`
--
ALTER TABLE `groupg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grouph`
--
ALTER TABLE `grouph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupstage`
--
ALTER TABLE `groupstage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knockoutstage`
--
ALTER TABLE `knockoutstage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quarterfinal`
--
ALTER TABLE `quarterfinal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semifinal`
--
ALTER TABLE `semifinal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brazildf`
--
ALTER TABLE `brazildf`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brazilfd`
--
ALTER TABLE `brazilfd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brazilgk`
--
ALTER TABLE `brazilgk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brazilmd`
--
ALTER TABLE `brazilmd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brazilmn`
--
ALTER TABLE `brazilmn`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `final`
--
ALTER TABLE `final`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groupa`
--
ALTER TABLE `groupa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groupc`
--
ALTER TABLE `groupc`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groupd`
--
ALTER TABLE `groupd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groupf`
--
ALTER TABLE `groupf`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groupg`
--
ALTER TABLE `groupg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grouph`
--
ALTER TABLE `grouph`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groupstage`
--
ALTER TABLE `groupstage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `knockoutstage`
--
ALTER TABLE `knockoutstage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quarterfinal`
--
ALTER TABLE `quarterfinal`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semifinal`
--
ALTER TABLE `semifinal`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
