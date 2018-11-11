-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 09:09 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friendsbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `comment` varchar(30) NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `p_id`, `comment`, `u_id`) VALUES
(1, 1, 'chutiya', 1),
(2, 3, 'gfh', 1),
(3, 19, 'chutiya', 1),
(4, 21, 'shjshd', 1),
(5, 20, 'nice one man', 2),
(6, 15, 'jhjdhdc', 1),
(7, 3, 'fdfd', 1),
(8, 22, 'nice man', 1),
(9, 22, 'pd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `f_id` int(10) NOT NULL,
  `from_u_id` int(10) NOT NULL,
  `to_u_id` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`f_id`, `from_u_id`, `to_u_id`, `status`) VALUES
(1, 1, 2, 1),
(2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(10) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_name`, `u_id`) VALUES
(1, 'pictures/gcZzh2lwCHpCO4orviRvwAUseofPItxnTgZPvmpn.jpeg', 1),
(2, 'pictures/hOZbS4SiIVdaTuWfNWjYCXWCeduDEk9GHIfJi5JA.jpeg', 2),
(3, 'pictures/wBosCDU6BvRSbprun3kqoJDOCkpYpUJr9GAvesA4.png', 1),
(4, 'pictures/PYv0JMdYFk8BIYivO8mUtRhc2Cyvv3Rh5QkR1nBT.png', 2),
(5, 'pictures/fAWbTuvb84Xf92mQbAKpZeBN1Lo5ngXLSBVN6zRm.png', 1),
(6, 'pictures/sfbIWB63KviHkXxfkH4ByW8qskg946ynWnCE1M5y.png', 2),
(7, 'pictures/kYThoE1xacWFlmx5G6OW5DR7oU0NNJGUnw9Ys6lF.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `image_id` int(10) NOT NULL,
  `count` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`image_id`, `count`) VALUES
(1, 22),
(2, 11),
(3, 1),
(4, 15),
(5, 0),
(6, 0),
(7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  `from_u_id` int(10) NOT NULL,
  `to_u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `n_id` int(10) NOT NULL,
  `content` varchar(30) NOT NULL,
  `f_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `body` varchar(500) NOT NULL,
  `u_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `title`, `body`, `u_id`) VALUES
(1, 'title1', 'i am crazy today!!!!!', 1),
(2, 'title2', 'I am happy now!!!!', 1),
(3, 'heyyy guys', 'i am mad now i dont know what i am doing!!!!', 2),
(4, 'kdkwdj', 'kjji3j', 1),
(5, 'My name', 'My name id pd LoL!!!', 1),
(6, 'My name', 'My name id pd LoL!!!', 1),
(7, 'My name', 'My name id pd LoL!!!', 1),
(8, 'My name', 'My name id pd LoL!!!', 1),
(9, 'kdkwdj', 'i am crazy today!!!!!', 1),
(10, 'kdkwdj', 'i am crazy today!!!!!', 1),
(11, 'ja', 'i am crazy today!!!!!', 3),
(12, 'kdkwdj', 'I am happy now!!!!', 2),
(13, 'sk', 'skqsms', 1),
(14, 'sk', 'skqsms', 1),
(15, 'sk', 'skqsms', 1),
(16, 'sk', 'skqsms', 1),
(17, 'sk', 'skqsms', 1),
(18, 'sk', 'skqsms', 1),
(19, 'sk', 'skqsms', 1),
(20, 'sk', 'skqsms', 1),
(21, 'sk', 'skqsms', 1),
(22, 'pravin', 'my name is pravin', 3),
(23, 'title2', 'i am crazy today!!!!!', 1),
(24, 'mood', 'i am sad', 1),
(25, 'title2', 'knksdksmdsd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `first_name`, `middle_name`, `last_name`, `email`, `username`, `password`) VALUES
(1, 'hello bro', 'h', 'gupta', 'pd@gmail.com', 'pd', 'pd'),
(2, 'hero', 'j', 'dwdw', 'wdwqd', 'jayho', 'jh'),
(3, 'mitesh', 'm', 'g', 'abcd@gmail.com', 'mt', 'gl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `from_u_id` (`from_u_id`),
  ADD KEY `to_u_id` (`to_u_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD UNIQUE KEY `image_id` (`image_id`),
  ADD KEY `image_id_2` (`image_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `from_u_id` (`from_u_id`),
  ADD KEY `to_u_id` (`to_u_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `from_u_id` (`f_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `posts` (`p_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`from_u_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`to_u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`from_u_id`) REFERENCES `friends` (`from_u_id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`to_u_id`) REFERENCES `friends` (`to_u_id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `friends` (`f_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
