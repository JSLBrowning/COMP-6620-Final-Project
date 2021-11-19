-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: sh2.hostrocket.com
-- Generation Time: Nov 19, 2021 at 03:36 AM
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
-- Table structure for table `course_completions`
--

CREATE TABLE `course_completions` (
  `user_email` varchar(255) NOT NULL,
  `course_number` int(11) NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_completions`
--

INSERT INTO `course_completions` (`user_email`, `course_number`, `completed`) VALUES
('student@auburn.edu', 1, 1),
('student@auburn.edu', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_email`, `user_password`, `user_firstname`, `user_role`) VALUES
('another@one.com', '4140d215ee7fa4dc171632ab20ab4833bc763259a2a01f72e89a353cd60a4e6672531944c5a438e9eeadf3c8231711bb477049dad4a5502b148e98d257d17bb5', 'Derp', 'student'),
('chwhite.devel@gma', 'bddef7681b5514205d14bb2416bdc69e7bda1b37b5e4239311952b04293f1e3849bc3fc5d3d25f7f07482e1fc5884f9518cf9118d5479edfb64dfbcaf3df1d06', 'Bbb', 'student'),
('chwhite.devel@gmail.c', '24275d05c2dd88d3e56289cecaadaf3c0ea5b6a7480df03414b9576ed412fd10595c503e0814b58b3a750bf30700a9892f7a35d3efb5aa0de54bfda375f46e0d', 'Hhh', 'student'),
('chwhite.devel@gmail.com', 'a62cb5006a9a9bdc6c4b01309811e660c4753f3091407ee92ed2dcfd234ef3f996fcd11afea696e954e68677f30d7cccea47deb9ee3a613526087ff74e6c1462', 'Chris', 'student'),
('chwhite@gmail.com', '366693b9d337b0f22be0bdfea6223772224855aeaa7eee02f2325c7cc343c03b0ad8af363feb040a5d2ef219fa0ecefd81bd2b38b21a5b91d459c482ed806e03', 'fuck', 'student'),
('derp2@whatever', '9f0489860afce6e963cbd9355357aff6f531989db1ca2d2acd5e62207e2000287f7ff31a6e323baed33c92e49bc1b8957aea7311b20915e22ff3d7a6666bb886', 'Derp2', 'student'),
('derp@whatever', '9ad4e84a79cd16727fc3fa20bc3629ecbf31fbed375323ec9d85473bbcc264791fd34ca9831755ef05a665c7195151ce01a6f6d3bb8a9e7855e4b0dee234eb4b', 'Derp', 'student'),
('student2@auburn.edu', '86029523c75667a2d80a5bf40a5444e3c0c5349e6d3e8fcf7fea49332a61ca14494169a8ca761e91d1152bfa2d1a49c6491d2576e8027b84a70e26d21a79377c', 'Student2', 'student'),
('student@auburn.edu', '20005880353ac2b6b95e820eaf83c61b3f022d779ec09e6bfa435c3ed088f197903d41faeba81cf1637c2b572c9e6c6611939423a61c09facacbb7c34d91af5c', 'Student', 'student'),
('stupid@dumb.com', 'da9911f59275bab1611c2fcdbcfa04afe20cb6be99f7a8a8311e07668a0522f861f2f96855f81773fd893ff69cb7446111193e6a75695ff5a9ca021b81f6975a', 'Stupid', 'student'),
('teacher@auburn.edu', '6da18de480b227f2f7482ced591ae6d589d51494d5b1d67465d4b67c50b569064d8c12aa56f8b33b73b53c6bcdf59aea3aab16c73bd6ee817d027f9aa2d47e4d', 'Ms. Teacher', 'teacher'),
('tom-fullery@tomisafull.com', 'bbf5762855ceadf8260de8bc822422e27933e54e1e9b1e0608f56a59e10a4f06f8ccebd180596af1470cc059517766652484ea0f5120e1321ade3dc8d560f491', 'Tom', 'student'),
('user3@user3', '8492cda11f081a2f804d916457a7d3c60e65251a9140b92ecd9f184519df030cbcd2706cfb91f6d72c1469ed07980674f3dcdbb46fd56889ce0abcb2527369ff', 'User3', 'student'),
('user@user.user', '2047e6900f58289e6640af0ab141e85a620b105e954722f2349f0b5f0a79eaf76d07a806d6eb8e9eb9807cf4889ad05cee28f627886971f6f22cfcaa5493dde8', 'UserOG', 'student'),
('user@user.user2', '56380c05fcd6843cd14001c0fa4363064d7e35825d329e6d8c410b3ba585c9b84a95b5a2bab34bb41d367bc2bb32ec2561b559c64ed653c7e428dbf58573eb31', 'User2', 'student'),
('user@user.user4', 'a1ccde5a0a5c0ae2f999470026f0621dc3bff8a42b265a48f8ded2423d0cad1dd1e7807e7a316dc2916546cbefb932183b50a4e4cbf59cfc4ad73ca5d6381c8e', 'User4', 'student'),
('user@user.user6', '37deaee8283f8d6eed078b72555f40523535cd731b24d8d9fa90721b496cf493c85c5e43af608b261f97be6e566ece546e1e75281491c64d62d78738d055123b', 'User6', 'student'),
('user@user.user7', 'b1188a8968d7fefddd52643542548f9222a0b60d32748ca46334adfc1daca274cd4b0484f3e8200d9d6750705974fdc55711788fc4d71de1cb3236e7220574e9', 'User7', 'student'),
('user@user.user8', '25f01c6ea9907845087296010a45d6b3b0a988a13a0dddd41b6d7d79a40ec91a630673f290d080d776f906455059c3aa5635f00ea2537756a3962046e55fad30', 'User8', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_completions`
--
ALTER TABLE `course_completions`
  ADD PRIMARY KEY (`user_email`,`course_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_email` (`user_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
