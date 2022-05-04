CREATE DATABASE IF NOT EXISTS `treaky_input`;
USE `treaky_input`;

DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `details`
	ADD PRIMARY KEY (`id`);
 
ALTER TABLE `details`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;