

--
-- Database: `attendance_josh`
--

CREATE TABLE `attendance` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `matno` varchar(200) NOT NULL,
  `timein` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `matno` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `attendance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;