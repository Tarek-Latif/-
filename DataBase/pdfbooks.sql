-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 11:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdfbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPass` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `adminEmail`, `adminPass`) VALUES
(1, 'tarek', 'tarek@yahoo.com', '123'),
(2, 'abdalla', 'abdalla@book.com', 'abdalla123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(50) NOT NULL,
  `bookTitle` varchar(200) NOT NULL,
  `bookAuthor` varchar(150) NOT NULL,
  `bookCat` varchar(100) NOT NULL,
  `bookCover` varchar(200) NOT NULL,
  `book` varchar(200) NOT NULL,
  `bookContent` text NOT NULL,
  `bookDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookTitle`, `bookAuthor`, `bookCat`, `bookCover`, `book`, `bookContent`, `bookDate`) VALUES
(24, 'المحاسن والأضداد', 'الجاحص', 'كتب تاريخ', '720_6_المحاسن والأضداد.jpg', '600_78_309_503_مكتبة نور مذكرات قارئ.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(25, 'عمر بن الخطاب', 'أدهم شرقاوى', 'كتب دينية', '233_35_book5.jpg', '613_78_309_503_مكتبة نور مذكرات قارئ.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(26, 'التاريخ الأسلامى', 'محمود شاكر', 'كتب دينية', '926_444_559_التاريخ الإسلامي.jpg', '896_143_955_القراءة المثمرة مفاهيم وآليات.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(27, 'باب اللعنات', 'محمد عصمت', 'كتب فنون', '971_526_book11.JPG', '453_143_955_القراءة المثمرة مفاهيم وآليات.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(28, 'المسلم الجديد', 'عبد الكريم بكار', 'كتب دينية', '583_760_970_المسلم الجديد.jpg', '95_350_412_124_الطفل المسلم.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(29, 'باب البحر', 'هشام جمال', 'كتب فنون', '482_888_book2.JPG', '436_374_251_15_مذكرات قارئ.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(30, 'العبقرى', 'محمد رفعت', 'كتب علمية', '86_book13.JPG', '682_236_القراءة المثمرة مفاهيم وآليات.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(31, 'إعمار الجزيره', 'طارق لطيف', 'كتب علمية', '660_book14.JPG', '651_251_15_مذكرات قارئ.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(32, 'الكيت كات', 'طارق لطيف', 'كتب فنون', '473_book28.JPG', '188_212_977_المحاسن والأضداد.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(33, 'صديق قديم', 'أبراهيم اصلان', 'كتب فنون', '460_book27.JPG', '534_204_القراءة المثمرة مفاهيم وآليات.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(35, 'التكامل المعرفى', 'عبد الله جاد', 'كتب ثقافية', '561_book23.JPG', '845_309_503_مكتبة نور مذكرات قارئ.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03'),
(36, 'حديقة المرايا', 'أحمد شاملو', 'كتب ثقافية', '651_book21.JPG', '735_110_374_251_15_مذكرات قارئ.pdf', 'يتناول هذا الكتاب الكثير من الامور التى يحتاجها كل انسان', '2021-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(50) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDate`) VALUES
(24, 'كتب دينية', '2021-08-02'),
(25, 'كتب برمجه', '2021-08-02'),
(26, 'كتب ثقافية', '2021-08-02'),
(27, 'كتب تاريخ', '2021-08-02'),
(28, 'كتب فنون', '2021-08-02'),
(29, 'كتب علمية', '2021-08-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
