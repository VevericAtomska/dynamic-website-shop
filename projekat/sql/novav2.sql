-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 02:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novav2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `postTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postDesc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postDate`) VALUES
(96, 'Batman Arkham Origins', 'The game features an expanded Gotham City and introduces an original prequel storyline set several years before the events of Batman: Arkham Asylum and Batman: Arkham City. ', '2022-06-17 14:29:16'),
(97, 'Alan Wake', 'When the wife of the best-selling writer Alan Wake disappears on their vacation.', '2022-06-17 14:32:12'),
(101, 'Crysis 3', 'The fate of in your hands', '2022-06-19 13:01:22'),
(132, 'IVAN NOBCINA', 'NOBARA TESKA KATEGORIJA ', '2023-03-21 14:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(10) UNSIGNED NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `quantity`, `price`, `order_date`, `product_name`) VALUES
(124, 6, 0, 3, 0, '2023-03-19 21:01:33', 'Standard'),
(125, 6, 0, 3, 0, '2023-03-19 21:02:38', 'Standard'),
(126, 6, 0, 1, 0, '2023-03-19 21:03:58', 'Edge of Darkness'),
(127, 6, 0, 5, 0, '2023-03-19 21:11:31', 'Left Behind'),
(128, 6, 0, 5, 0, '2023-03-19 21:12:44', 'Left Behind'),
(129, 6, 0, 5, 0, '2023-03-19 21:12:44', 'Left Behind'),
(130, 6, 0, 5, 0, '2023-03-19 21:13:34', 'Left Behind'),
(131, 6, 0, 5, 0, '2023-03-19 21:18:38', 'Left Behind'),
(132, 6, 0, 5, 0, '2023-03-19 21:21:31', 'Left Behind'),
(133, 6, 0, 5, 0, '2023-03-19 21:22:09', 'Left Behind'),
(134, 6, 0, 5, 0, '2023-03-19 21:22:56', 'Left Behind'),
(135, 6, 0, 5, 0, '2023-03-19 21:30:06', 'Standard'),
(136, 2, 0, 11, 0, '2023-03-19 21:30:44', 'Edge of Darkness'),
(137, 6, 0, 5, 0, '2023-03-20 14:41:46', 'Standard'),
(138, 7, 0, 2, 0, '2023-03-20 15:38:19', 'Left Behind'),
(139, 8, 0, 10, 0, '2023-03-20 16:33:02', 'Standard'),
(140, 6, 0, 55, 0, '2023-03-20 22:00:54', 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` char(60) NOT NULL,
  `user_type` enum('admin','member') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `user_type`, `created_at`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'admin', '2023-03-18 17:15:41'),
(2, 'member@gmail.com', 'member', 'member', '', '2023-03-18 17:15:41'),
(5, 'testuser@example.com', 'testuser', '123', '', '2023-03-18 18:16:05'),
(6, 'ivan@gmail.com', 'ivan', 'ivan', '', '2023-03-19 12:57:16'),
(7, 'ivan2@gmail.com', 'ivan2', 'ivan2', '', '2023-03-20 15:37:55'),
(8, 'ivan3@gmail.com', 'ivan3', 'ivan3', '', '2023-03-20 16:32:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`) USING BTREE,
  ADD KEY `fk_game_id_post_id` (`postID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_order_id_user_id` (`user_id`),
  ADD KEY `fk_order_id_product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_id_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
