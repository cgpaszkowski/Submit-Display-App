SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `2170` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `2170`;

CREATE TABLE `mindfeed` (
  `m_id` int(64) NOT NULL,
  `m_name` varchar(256) NOT NULL,
  `m_thought` varchar(256) NOT NULL,
  `m_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `mindfeed` (`m_id`, `m_name`, `m_thought`, `m_date`) VALUES
(1, 'C-3PO', 'R2D2 is awake! After so long. How I have missed you, my friend!', '08 November 2017'),
(2, 'C-3PO', 'Master Luke has returned! Oh my, how I have missed him!!', '14 December 2017'),
(9, 'C-3PO', 'Type things and you can submit to the DB. (I will give you the DB table and the data dump)', '31 January 2019');


ALTER TABLE `mindfeed`
  ADD PRIMARY KEY (`m_id`);


ALTER TABLE `mindfeed`
  MODIFY `m_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;