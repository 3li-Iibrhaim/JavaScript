-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 10:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zekryate`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(120) NOT NULL,
  `photo_id` int(120) NOT NULL,
  `user` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  `Comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `user`, `date_time`, `Comment`) VALUES
(1, 11, 'Ali Ibrahim', '2022-07-13 11:00:37', 'hi my ali'),
(2, 16, 'Ali Ibrahim', '0000-00-00 00:00:00', 'fjadskf'),
(3, 16, 'Ali Ibrahim', '0000-00-00 00:00:00', 'jfkad'),
(4, 16, 'Ali Ibrahim', '0000-00-00 00:00:00', 'jfkdfj'),
(5, 17, 'Ali Ibrahim', '0000-00-00 00:00:00', 'that is nice photo'),
(6, 16, 'Ali Ibrahim', '0000-00-00 00:00:00', 'show'),
(7, 17, 'Ali Ibrahim', '0000-00-00 00:00:00', 'i love that'),
(8, 17, 'Ali Ibrahim', '0000-00-00 00:00:00', 'can i do som tsing'),
(9, 18, 'Ali Ibrahim', '0000-00-00 00:00:00', 'nic'),
(10, 21, 'Ali Ibrahim', '2022-07-19 11:02:41', 'ali'),
(11, 23, 'Ali Ibrahim', '2022-07-19 11:06:14', 'whoo'),
(12, 23, 'Ali Ibrahim', '2022-07-19 11:06:57', 'nice'),
(13, 23, 'Ali Ibrahim', '2022-07-19 11:07:58', 'can i take photo with you'),
(14, 27, 'Olivia Liam', '2022-07-19 11:16:21', 'nice photo'),
(15, 27, 'Olivia Liam', '2022-07-19 11:16:35', 'Awasam'),
(16, 27, 'Ali Ibrahim', '2022-07-19 11:17:03', 'i agree whit you loiva'),
(17, 28, 'Ali Ibrahim', '2022-07-19 11:18:09', 'oh dog'),
(18, 28, 'Ali Ibrahim', '2022-07-19 11:19:18', '😊😊😊😊'),
(19, 29, 'Ali Ibrahim', '2022-07-19 11:21:04', '😞😞😞'),
(20, 30, 'Ali Ibrahim', '2022-07-19 11:21:45', 'jjj'),
(21, 30, 'Ali Ibrahim', '2022-07-19 11:21:53', '😈 '),
(22, 29, 'Muhammed Abdo', '2022-07-20 09:07:42', '😋😋😋😋'),
(23, 31, 'Muhammed Abdo', '2022-07-20 09:08:24', '😎😎 up'),
(24, 37, 'Muhammed Abdo', '2022-07-20 09:08:59', '👩‍❤️‍👨'),
(25, 27, 'Muhammed Abdo', '2022-07-20 09:10:24', '😃😃😃 see africa'),
(26, 35, 'Muhammed Abdo', '2022-07-20 09:10:59', '❤️❤️❤️ uncle'),
(27, 28, 'Muhammed Abdo', '2022-07-20 09:12:03', '😜😜 d'),
(28, 28, 'Muhammed Abdo', '2022-07-20 09:12:22', '😑😑😑 cat'),
(29, 43, 'Muhammed Abdo', '2022-07-20 09:12:55', 'oh 😵‍💫'),
(30, 45, 'Rodriguez Avery', '2022-07-20 09:14:09', '❤️❤️❤️❤️ عبد الوهاب'),
(31, 29, 'Rodriguez Avery', '2022-07-20 09:16:10', '😒تعالي أعزميني @Nour'),
(32, 29, 'Isabella Williams', '2022-07-20 09:17:36', '❤️❤️❤️واي أنا من الصحن'),
(33, 31, 'Isabella Williams', '2022-07-20 09:18:16', 'رائع جدا 🔥'),
(34, 37, 'Sofia Garcia', '2022-07-20 09:23:48', ' 👎👎الفلم سئ جدا لا أنصح بمشاهدته'),
(35, 35, 'Sofia Garcia', '2022-07-20 09:25:05', 'جنابو الأخبار شنو'),
(36, 34, 'Sofia Garcia', '2022-07-20 09:25:53', 'إن شاء الله'),
(37, 38, 'Sofia Garcia', '2022-07-20 09:27:28', '😅طبعا الكلب مستغرب شديد'),
(38, 52, 'Sofia Garcia', '2022-07-20 09:28:21', 'البلد أجمل مكان ❤️❤️'),
(39, 52, 'Rodriguez Avery', '2022-07-20 09:29:50', ' 💙💙بلادي وإن جارت علي عزيزة   وأهلي وإن ضنو علي كرام'),
(40, 53, 'Rodriguez Avery', '2022-07-20 09:30:47', ' 💞إبداع'),
(41, 34, 'Rodriguez Avery', '2022-07-20 09:31:31', 'وين المكان دا يا @Sofia'),
(42, 37, 'Sara Mustafa', '2022-07-20 09:33:06', '😢منو القال ليك أنا عن نفسي عجبني شديد لكن في النهايو محزن'),
(43, 38, 'Sara Mustafa', '2022-07-20 09:33:29', 'دا فلم شنو يا صوفيا'),
(44, 34, 'Sara Mustafa', '2022-07-20 09:34:51', '💛والله أظنا أبو جبيهة'),
(45, 40, 'Sara Mustafa', '2022-07-20 09:35:37', 'ما فهمت حاجة قصدك صنو نت الصورة دي يا إسيبيلا'),
(46, 33, 'Sara Mustafa', '2022-07-20 09:36:56', '💜علي وعبد الوهاب كل الحب ليكم '),
(47, 31, 'Sara Mustafa', '2022-07-20 09:37:36', 'هههه 💀💀'),
(48, 48, 'Sara Mustafa', '2022-07-20 09:39:20', '😟😟بسم الله دا حيان شنو ياناس'),
(49, 50, 'Sara Mustafa', '2022-07-20 09:40:21', '😰وضعية الكلاب القبل الإمتحانات'),
(50, 39, 'Isabella Williams', '2022-07-20 12:34:21', '😯يا إلهي يا له من منظر'),
(51, 39, 'Olivia Liam', '2022-07-20 12:38:27', '😂😂😂 من اين لك هذا'),
(52, 40, 'Olivia Liam', '2022-07-20 12:38:54', 'كلنا ما فهمنا يا مان 😂😂😂😂'),
(53, 49, 'Olivia Liam', '2022-07-20 12:40:13', 'can any man see what elephent do 👅👅'),
(54, 39, 'Sofia Garcia', '2022-07-20 13:35:18', 'إيزبيلا يا سجم ❤️❤️'),
(55, 57, 'Sofia Garcia', '2022-07-20 13:36:25', 'praken pad 😍😍'),
(56, 44, 'Sofia Garcia', '2022-07-20 13:36:56', '😍😍😍هنا أمدرمان '),
(57, 38, 'Muhammed Abdo', '2022-07-20 19:21:29', '😢😢😢😢'),
(58, 33, 'Muhammed Abdo', '2022-07-20 19:24:22', ' يامان تقفييل🔥🔥'),
(59, 53, 'Muhammed Abdo', '2022-07-20 19:26:43', 'can i follow you Sofia🍏'),
(60, 48, 'Muhammed Abdo', '2022-07-20 19:27:22', 'صقر الجديان 🙈🙈🙈'),
(61, 54, 'Muhammed Abdo', '2022-07-20 19:28:14', 'أخيرا مسافرين 😒😒يلا بلا رجعة😎ر'),
(62, 88, 'Rodriguez Avery', '2022-07-20 19:33:05', '😋😋بالله يوم واحد أعمل ل خير وأعزمنا @ali '),
(63, 37, 'Isabella Williams', '2022-07-20 21:19:44', 'hi thes'),
(64, 38, 'Isabella Williams', '2022-07-21 05:15:38', 'wo wo😢'),
(65, 88, 'Isabella Williams', '2022-07-21 05:50:31', '😒ياخ أكلتو أمبارح عمل لي وجع بطن'),
(67, 31, 'Isabella Williams', '2022-07-21 06:01:15', 'واييي'),
(68, 57, 'Isabella Williams', '2022-07-21 09:03:43', 'nice'),
(69, 29, 'raja ibrahim', '2022-07-21 09:11:52', 'مرحبا'),
(70, 29, 'Rodriguez Avery', '2022-07-21 09:26:12', 'ماشاء الله');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(50) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `date_time`, `file_name`, `name`) VALUES
(27, '2', '2022-07-19 11:16:04', 'http://localhost:3000/views/images/planet-2560x1440-earth-dark-5k-22714.jpg', 'planet-2560x1440-earth-dark-5k-22714.jpg'),
(28, '1', '2022-07-19 11:17:27', 'http://localhost:3000/views/images/friends-2560x1440-cat-dog-puppy-kitty-green-grass-sunny-day-cute-pet-721.jpg', 'friends-2560x1440-cat-dog-puppy-kitty-green-grass-sunny-day-cute-pet-721.jpg'),
(29, '1', '2022-07-19 11:17:44', 'http://localhost:3000/views/images/fruits-2560x1440-berries-raspberry-blueberry-peach-watermelon-kiwi-4153.jpg', 'fruits-2560x1440-berries-raspberry-blueberry-peach-watermelon-kiwi-4153.jpg'),
(31, '2', '2022-07-19 11:39:25', 'http://localhost:3000/views/images/desert-eagle-2560x1440-pistol-bullets-12236.jpg', 'desert-eagle-2560x1440-pistol-bullets-12236.jpg'),
(33, '5', '2022-07-19 11:40:10', 'http://localhost:3000/views/images/20220711_070048.jpg', '20220711_070048.jpg'),
(34, '5', '2022-07-19 11:40:33', 'http://localhost:3000/views/images/IMG_1845.JPG', 'IMG_1845.JPG'),
(35, '7', '2022-07-19 11:40:58', 'http://localhost:3000/views/images/IMG_1701.JPG', 'IMG_1701.JPG'),
(37, '2', '2022-07-19 11:41:32', 'http://localhost:3000/views/images/last-flag-flying-2560x1440-bryan-cranston-laurence-fishburne-steve-16069.jpg', 'last-flag-flying-2560x1440-bryan-cranston-laurence-fishburne-steve-16069.jpg'),
(38, '2', '2022-07-19 11:41:39', 'http://localhost:3000/views/images/the-secret-life-of-pets-2560x1440-dog-best-animation-movies-of-2016-11492.jpg', 'the-secret-life-of-pets-2560x1440-dog-best-animation-movies-of-2016-11492.jpg'),
(39, '4', '2022-07-19 11:42:05', 'http://localhost:3000/views/images/jjf.jpg', 'jjf.jpg'),
(40, '4', '2022-07-19 11:42:18', 'http://localhost:3000/views/images/foodiesfeed.com_cinnamon-sticks-in-a-glass-jar.jpg', 'foodiesfeed.com_cinnamon-sticks-in-a-glass-jar.jpg'),
(41, '4', '2022-07-19 11:42:28', 'http://localhost:3000/views/images/textiles.jpg', 'textiles.jpg'),
(43, '4', '2022-07-19 11:44:01', 'http://localhost:3000/views/images/IMG_1880.JPG', 'IMG_1880.JPG'),
(48, '7', '2022-07-19 11:46:56', 'http://localhost:3000/views/images/owl-2560x1440-5k-4k-wallpaper-national-geographic-eyes-wild-funny-375.jpg', 'owl-2560x1440-5k-4k-wallpaper-national-geographic-eyes-wild-funny-375.jpg'),
(49, '7', '2022-07-19 11:47:02', 'http://localhost:3000/views/images/dumbo-2560x1440-colin-farrell-nico-parker-finley-hobbins-4k-21148.jpg', 'dumbo-2560x1440-colin-farrell-nico-parker-finley-hobbins-4k-21148.jpg'),
(50, '7', '2022-07-19 11:47:14', 'http://localhost:3000/views/images/puppy-2560x1440-funny-animals-4k-18845.jpg', 'puppy-2560x1440-funny-animals-4k-18845.jpg'),
(51, '5', '2022-07-20 09:20:32', 'http://localhost:3000/views/images/IMG_1583.JPG', 'IMG_1583.JPG'),
(52, '5', '2022-07-20 09:20:40', 'http://localhost:3000/views/images/IMG_1514.JPG', 'IMG_1514.JPG'),
(53, '5', '2022-07-20 09:21:18', 'http://localhost:3000/views/images/woman_shopping.jpg', 'woman_shopping.jpg'),
(54, '3', '2022-07-20 09:56:06', 'http://localhost:3000/views/images/IMG_1864.JPG', 'IMG_1864.JPG'),
(57, '2', '2022-07-20 13:16:25', 'http://localhost:3000/views/images/ln.jpg', 'ln.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `location`, `password`, `Description`, `Occupation`, `user`) VALUES
(1, 'Ali', 'Ibrahim', 'Omdurman, Sudan', 'ali', 'my Name is Ali and my I love jop so muth', 'Data base develeoper', 'ali0910762602@gmail.com'),
(2, 'Olivia', 'Liam', 'UK, London, Westham', '1233469087', 'my name is oliva and i can help any person who wha', 'Ai', 'Olivia@examlp.com'),
(3, 'Sara', 'Mustafa', 'Omdurman, Sudan', 'Sara', 'hi, my name is Sara and can help any you', 'web developer', 'Sara@gmail.com'),
(4, 'Isabella', 'Williams', 'Saudia Arabia Macca', 'Isabella', 'in writing dealing with a particular point or idea', 'Engineering, IT', 'Isabella@gmail.com'),
(5, 'Sofia', 'Garcia', 'USA , San, Fransico', 'Sofia', ' paragraphs are usually an expected part of formal', 'Data mining ', 'Sofia@gmail.com'),
(6, 'Rodriguez', 'Avery', 'France, Parice', 'Avery', 'php is my favorite progrmming language', 'PHP', 'Avery@gmail.com'),
(7, 'Muhammed', 'Abdo', 'Khourtom, Omdurman', 'Abdo', 'I started study at 7 years ago', 'JAVA', 'Muhammed@gmail.com'),
(8, 'raja', 'ibrahim', 'Omdurman, Sudan', '123', 'jfksdjafffffffffffffffffffffffffffffffffffffffffff', 'database maneger', 'raja@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
