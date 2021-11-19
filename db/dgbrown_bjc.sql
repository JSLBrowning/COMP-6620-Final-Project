-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: sh2.hostrocket.com
-- Generation Time: Nov 19, 2021 at 12:41 AM
-- Server version: 10.2.40-MariaDB-cll-lve
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dgbrown_bjc`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_email`, `user_password`, `user_firstname`) VALUES
('another@one.com', '4140d215ee7fa4dc171632ab20ab4833bc763259a2a01f72e89a353cd60a4e6672531944c5a438e9eeadf3c8231711bb477049dad4a5502b148e98d257d17bb5', 'Derp'),
('chwhite.devel@gmail.com', 'a62cb5006a9a9bdc6c4b01309811e660c4753f3091407ee92ed2dcfd234ef3f996fcd11afea696e954e68677f30d7cccea47deb9ee3a613526087ff74e6c1462', 'Chris'),
('derp2@whatever', '9f0489860afce6e963cbd9355357aff6f531989db1ca2d2acd5e62207e2000287f7ff31a6e323baed33c92e49bc1b8957aea7311b20915e22ff3d7a6666bb886', 'Derp2'),
('derp@whatever', '9ad4e84a79cd16727fc3fa20bc3629ecbf31fbed375323ec9d85473bbcc264791fd34ca9831755ef05a665c7195151ce01a6f6d3bb8a9e7855e4b0dee234eb4b', ''),
('stupid@dumb.com', 'da9911f59275bab1611c2fcdbcfa04afe20cb6be99f7a8a8311e07668a0522f861f2f96855f81773fd893ff69cb7446111193e6a75695ff5a9ca021b81f6975a', 'Stupid'),
('tom-fullery@tomisafull.com', 'bbf5762855ceadf8260de8bc822422e27933e54e1e9b1e0608f56a59e10a4f06f8ccebd180596af1470cc059517766652484ea0f5120e1321ade3dc8d560f491', ''),
('user3@user3', '8492cda11f081a2f804d916457a7d3c60e65251a9140b92ecd9f184519df030cbcd2706cfb91f6d72c1469ed07980674f3dcdbb46fd56889ce0abcb2527369ff', 'User3'),
('user@user.user', '2047e6900f58289e6640af0ab141e85a620b105e954722f2349f0b5f0a79eaf76d07a806d6eb8e9eb9807cf4889ad05cee28f627886971f6f22cfcaa5493dde8', 'UserOG'),
('user@user.user2', '56380c05fcd6843cd14001c0fa4363064d7e35825d329e6d8c410b3ba585c9b84a95b5a2bab34bb41d367bc2bb32ec2561b559c64ed653c7e428dbf58573eb31', 'User2'),
('user@user.user4', 'a1ccde5a0a5c0ae2f999470026f0621dc3bff8a42b265a48f8ded2423d0cad1dd1e7807e7a316dc2916546cbefb932183b50a4e4cbf59cfc4ad73ca5d6381c8e', 'User4'),
('user@user.user6', '37deaee8283f8d6eed078b72555f40523535cd731b24d8d9fa90721b496cf493c85c5e43af608b261f97be6e566ece546e1e75281491c64d62d78738d055123b', 'User6'),
('user@user.user7', 'b1188a8968d7fefddd52643542548f9222a0b60d32748ca46334adfc1daca274cd4b0484f3e8200d9d6750705974fdc55711788fc4d71de1cb3236e7220574e9', 'User7'),
('user@user.user8', '25f01c6ea9907845087296010a45d6b3b0a988a13a0dddd41b6d7d79a40ec91a630673f290d080d776f906455059c3aa5635f00ea2537756a3962046e55fad30', 'User8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_email` (`user_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE course_completions (
  user_email varchar(255) NOT NULL,
  course_number INT NOT NULL,
  completed BOOLEAN NOT NULL DEFAULT FALSE,
  PRIMARY KEY (user_email, course_number)
);
