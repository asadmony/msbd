-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2021 at 10:30 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msbd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_second_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addedby_id` int(11) NOT NULL DEFAULT 1,
  `editedby_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `location`, `address`, `state`, `city`, `post_code`, `country`, `lat`, `lng`, `map`, `mobile`, `email`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 'Head Office', 'Marriage Solution BD', 'New Colony Mashjid Complex (2nd & 3rd) floor, Asad Gate (Beside Aarong), Mirpur road, Mohammadpur', 'Dhaka', 'Dhaka', '1207', 'Bangladesh', '23.759102', '90.373406', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.671187234738!2d90.37121771443627!3d23.759102184585025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf3ca2f0be9f%3A0x1b479106030d72f8!2sMarriage+Solution+Bd.!5e0!3m2!1sen!2sbd!4v1542185034971\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '01308311911, 01633036062, 01720504504', 'marriagesolutionbd@gmail.com', 1, 16, '2019-02-05 14:13:22', '2021-02-20 03:06:39'),
(2, 'Gulshan Branch', 'Gulshan Branch', 'Century Park Tower, House-36, Road-117 (2nd Floor) Suite-1, Gulshan 1', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', '23.785672', '90.418677', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1825.4736415890425!2d90.4174215!3d23.7848915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7cfdf2daa59%3A0x10af8daf36be062!2sMarriage+Solution+BD+Gulshan+Branch!5e0!3m2!1sen!2sbd!4v1542183152951\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '01777118606, 01907550361, 01720504504', 'marriagegb2012@gmail.com', 1, 16, '2019-02-05 14:14:55', '2021-02-20 03:07:51'),
(3, 'Uttara Branch', 'Uttara Branch', 'Quantum Mustafa Tower, House-18, Level-10, Gaus-Ul-Azam Avenue, (Opposite to Agora), Sector-13, Uttara, Dhaka 1230', 'Dhaka', 'Dhaka', '1230', 'Bangladesh', '23.869665', '90.389682', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.5624869800404!2d90.38749341443881!3d23.86966498453084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5a4d716e251%3A0x4a08737011bcc979!2sMarriage+Solution+BD+Uttara+Branch!5e0!3m2!1sen!2sbd!4v1542187815083\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '01776687989, 01791266153,  01720504504', 'marriageub2012@gmail.com', 1, 16, '2019-02-05 14:17:01', '2021-02-26 23:43:58'),
(5, 'Kakrail Branch', 'Eastern Commercial Complex, Pioneer Road, Dhaka, Bangladesh', 'Eastern Commercial Complex Room No- 01/06 ( 1st floor ), 73, Kakrail, Ramna', 'Dhaka', 'Dhaka', '1000', 'Bangladesh', '23.7305281', '90.40990420000003', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.301491552556!2d90.40629021450187!3d23.736625895220385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f48bffd7c5%3A0x709a3d804583c93a!2sEastern%20Commercial%20Complex.%2073%20Kakrail%2C!5e0!3m2!1sen!2sbd!4v1606942273629!5m2!1sen!2sbd\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '01780414897, 01319378112, 01720504504', 'marriagepb2012@gmail.com', 1, 16, '2019-03-12 17:58:13', '2021-02-20 03:08:15'),
(6, 'Chittagong Branch', '998 CDA Avenue, Chittagong, Bangladesh', '998 CDA Ave, Besides of  Sanmar Ocean City, East Nasirabad', 'Chittagong', 'Chittagont', '4000', 'Bangladesh', '22.3604196', '91.82160010000007', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.835374755211!2d91.81980841495576!3d22.359844085292664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9aa379f0829%3A0x2ecab3690341241b!2sMarriage%20Solution%20BD%20Ctg!5e0!3m2!1sen!2sbd!4v1570350696106!5m2!1sen!2sbd\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '01617014140, 01617013455, 01720504504', 'marriagebdctg2012@gmail.com', 1, 16, '2019-10-06 19:36:34', '2021-02-20 03:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `branch_users`
--

CREATE TABLE `branch_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_users`
--

INSERT INTO `branch_users` (`id`, `branch_id`, `user_id`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 1, 16, 16, NULL, '2019-04-10 22:59:34', '2019-04-10 22:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Cat First', '2021-03-19 03:54:53', '2021-03-19 03:54:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chatables`
--

CREATE TABLE `chatables` (
  `id` int(10) UNSIGNED NOT NULL,
  `chatto_id` int(10) UNSIGNED DEFAULT NULL,
  `chatto_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatby_id` int(10) UNSIGNED DEFAULT NULL,
  `chatby_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_id` int(10) UNSIGNED DEFAULT NULL,
  `autoload` tinyint(1) NOT NULL DEFAULT 0,
  `box` tinyint(1) NOT NULL DEFAULT 0,
  `leaved` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'regular',
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chatables`
--

INSERT INTO `chatables` (`id`, `chatto_id`, `chatto_type`, `chatby_id`, `chatby_type`, `chat_id`, `autoload`, `box`, `leaved`, `status`, `addedby_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'App\\Model\\User', 26, 'App\\Model\\User', 1, 1, 0, 0, 'regular', 1, '2019-05-19 20:54:16', '2019-05-19 20:54:16'),
(2, 26, 'App\\Model\\User', 1, 'App\\Model\\User', 1, 1, 0, 0, 'regular', 1, '2019-05-19 20:54:16', '2019-05-19 20:54:16'),
(3, 16, 'App\\Model\\User', 84, 'App\\Model\\User', 2, 1, 0, 0, 'regular', 16, '2019-05-21 19:26:08', '2019-05-21 19:26:08'),
(4, 84, 'App\\Model\\User', 16, 'App\\Model\\User', 2, 1, 0, 0, 'regular', 16, '2019-05-21 19:26:08', '2019-05-21 19:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `addedby_id`, `private`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-05-19 20:54:16', '2019-05-19 20:54:16'),
(2, 16, 1, '2019-05-21 19:26:08', '2019-05-21 19:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `chat_publishes`
--

CREATE TABLE `chat_publishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `publishable_id` int(10) UNSIGNED DEFAULT NULL,
  `publishable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatable_id` int(10) UNSIGNED DEFAULT NULL,
  `publishedby_id` int(10) UNSIGNED DEFAULT NULL,
  `publishedby_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_publishes`
--

INSERT INTO `chat_publishes` (`id`, `publishable_id`, `publishable_type`, `chatable_id`, `publishedby_id`, `publishedby_type`, `seen`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cp\\Chat\\Model\\Message', 1, 1, 'App\\Model\\User', 1, '2019-05-19 20:54:16', '2019-05-19 20:54:16'),
(2, 1, 'Cp\\Chat\\Model\\Message', 2, 1, 'App\\Model\\User', 0, '2019-05-19 20:54:16', '2019-05-19 20:54:16'),
(3, 2, 'Cp\\Chat\\Model\\Message', 3, 16, 'App\\Model\\User', 1, '2019-05-21 19:26:08', '2019-05-21 19:26:08'),
(4, 2, 'Cp\\Chat\\Model\\Message', 4, 16, 'App\\Model\\User', 0, '2019-05-21 19:26:08', '2019-05-21 19:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `capital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_sub_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_decimals` int(11) DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso_3166_2` char(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `iso_3166_3` char(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `region_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sub_region_code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `eea` tinyint(1) NOT NULL DEFAULT 0,
  `calling_code` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `capital`, `citizenship`, `country_code`, `currency`, `currency_code`, `currency_sub_unit`, `currency_symbol`, `currency_decimals`, `full_name`, `iso_3166_2`, `iso_3166_3`, `name`, `region_code`, `sub_region_code`, `eea`, `calling_code`, `flag`) VALUES
(4, 'Kabul', 'Afghan', '004', 'afghani', 'AFN', 'pul', '??', 2, 'Islamic Republic of Afghanistan', 'AF', 'AFG', 'Afghanistan', '142', '034', 0, '93', 'AF.png'),
(8, 'Tirana', 'Albanian', '008', 'lek', 'ALL', '(qindar (pl. qindarka))', 'Lek', 2, 'Republic of Albania', 'AL', 'ALB', 'Albania', '150', '039', 0, '355', 'AL.png'),
(10, 'Antartica', 'of Antartica', '010', '', '', '', '', 2, 'Antarctica', 'AQ', 'ATA', 'Antarctica', '', '', 0, '672', 'AQ.png'),
(12, 'Algiers', 'Algerian', '012', 'Algerian dinar', 'DZD', 'centime', 'DZD', 2, 'People???s Democratic Republic of Algeria', 'DZ', 'DZA', 'Algeria', '002', '015', 0, '213', 'DZ.png'),
(16, 'Pago Pago', 'American Samoan', '016', 'US dollar', 'USD', 'cent', '$', 2, 'Territory of American', 'AS', 'ASM', 'American Samoa', '009', '061', 0, '1', 'AS.png'),
(20, 'Andorra la Vella', 'Andorran', '020', 'euro', 'EUR', 'cent', '???', 2, 'Principality of Andorra', 'AD', 'AND', 'Andorra', '150', '039', 0, '376', 'AD.png'),
(24, 'Luanda', 'Angolan', '024', 'kwanza', 'AOA', 'c??ntimo', 'Kz', 2, 'Republic of Angola', 'AO', 'AGO', 'Angola', '002', '017', 0, '244', 'AO.png'),
(28, 'St John???s', 'of Antigua and Barbuda', '028', 'East Caribbean dollar', 'XCD', 'cent', '$', 2, 'Antigua and Barbuda', 'AG', 'ATG', 'Antigua and Barbuda', '019', '029', 0, '1', 'AG.png'),
(31, 'Baku', 'Azerbaijani', '031', 'Azerbaijani manat', 'AZN', 'kepik (inv.)', '??????', 2, 'Republic of Azerbaijan', 'AZ', 'AZE', 'Azerbaijan', '142', '145', 0, '994', 'AZ.png'),
(32, 'Buenos Aires', 'Argentinian', '032', 'Argentine peso', 'ARS', 'centavo', '$', 2, 'Argentine Republic', 'AR', 'ARG', 'Argentina', '019', '005', 0, '54', 'AR.png'),
(36, 'Canberra', 'Australian', '036', 'Australian dollar', 'AUD', 'cent', '$', 2, 'Commonwealth of Australia', 'AU', 'AUS', 'Australia', '009', '053', 0, '61', 'AU.png'),
(40, 'Vienna', 'Austrian', '040', 'euro', 'EUR', 'cent', '???', 2, 'Republic of Austria', 'AT', 'AUT', 'Austria', '150', '155', 1, '43', 'AT.png'),
(44, 'Nassau', 'Bahamian', '044', 'Bahamian dollar', 'BSD', 'cent', '$', 2, 'Commonwealth of the Bahamas', 'BS', 'BHS', 'Bahamas', '019', '029', 0, '1', 'BS.png'),
(48, 'Manama', 'Bahraini', '048', 'Bahraini dinar', 'BHD', 'fils (inv.)', 'BHD', 3, 'Kingdom of Bahrain', 'BH', 'BHR', 'Bahrain', '142', '145', 0, '973', 'BH.png'),
(50, 'Dhaka', 'Bangladeshi', '050', 'taka (inv.)', 'BDT', 'poisha (inv.)', 'BDT', 2, 'People???s Republic of Bangladesh', 'BD', 'BGD', 'Bangladesh', '142', '034', 0, '880', 'BD.png'),
(51, 'Yerevan', 'Armenian', '051', 'dram (inv.)', 'AMD', 'luma', 'AMD', 2, 'Republic of Armenia', 'AM', 'ARM', 'Armenia', '142', '145', 0, '374', 'AM.png'),
(52, 'Bridgetown', 'Barbadian', '052', 'Barbados dollar', 'BBD', 'cent', '$', 2, 'Barbados', 'BB', 'BRB', 'Barbados', '019', '029', 0, '1', 'BB.png'),
(56, 'Brussels', 'Belgian', '056', 'euro', 'EUR', 'cent', '???', 2, 'Kingdom of Belgium', 'BE', 'BEL', 'Belgium', '150', '155', 1, '32', 'BE.png'),
(60, 'Hamilton', 'Bermudian', '060', 'Bermuda dollar', 'BMD', 'cent', '$', 2, 'Bermuda', 'BM', 'BMU', 'Bermuda', '019', '021', 0, '1', 'BM.png'),
(64, 'Thimphu', 'Bhutanese', '064', 'ngultrum (inv.)', 'BTN', 'chhetrum (inv.)', 'BTN', 2, 'Kingdom of Bhutan', 'BT', 'BTN', 'Bhutan', '142', '034', 0, '975', 'BT.png'),
(68, 'Sucre (BO1)', 'Bolivian', '068', 'boliviano', 'BOB', 'centavo', '$b', 2, 'Plurinational State of Bolivia', 'BO', 'BOL', 'Bolivia, Plurinational State of', '019', '005', 0, '591', 'BO.png'),
(70, 'Sarajevo', 'of Bosnia and Herzegovina', '070', 'convertible mark', 'BAM', 'fening', 'KM', 2, 'Bosnia and Herzegovina', 'BA', 'BIH', 'Bosnia and Herzegovina', '150', '039', 0, '387', 'BA.png'),
(72, 'Gaborone', 'Botswanan', '072', 'pula (inv.)', 'BWP', 'thebe (inv.)', 'P', 2, 'Republic of Botswana', 'BW', 'BWA', 'Botswana', '002', '018', 0, '267', 'BW.png'),
(74, 'Bouvet island', 'of Bouvet island', '074', '', '', '', 'kr', 2, 'Bouvet Island', 'BV', 'BVT', 'Bouvet Island', '', '', 0, '47', 'BV.png'),
(76, 'Brasilia', 'Brazilian', '076', 'real (pl. reais)', 'BRL', 'centavo', 'R$', 2, 'Federative Republic of Brazil', 'BR', 'BRA', 'Brazil', '019', '005', 0, '55', 'BR.png'),
(84, 'Belmopan', 'Belizean', '084', 'Belize dollar', 'BZD', 'cent', 'BZ$', 2, 'Belize', 'BZ', 'BLZ', 'Belize', '019', '013', 0, '501', 'BZ.png'),
(86, 'Diego Garcia', 'Changosian', '086', 'US dollar', 'USD', 'cent', '$', 2, 'British Indian Ocean Territory', 'IO', 'IOT', 'British Indian Ocean Territory', '', '', 0, '246', 'IO.png'),
(90, 'Honiara', 'Solomon Islander', '090', 'Solomon Islands dollar', 'SBD', 'cent', '$', 2, 'Solomon Islands', 'SB', 'SLB', 'Solomon Islands', '009', '054', 0, '677', 'SB.png'),
(92, 'Road Town', 'British Virgin Islander;', '092', 'US dollar', 'USD', 'cent', '$', 2, 'British Virgin Islands', 'VG', 'VGB', 'Virgin Islands, British', '019', '029', 0, '1', 'VG.png'),
(96, 'Bandar Seri Begawan', 'Bruneian', '096', 'Brunei dollar', 'BND', 'sen (inv.)', '$', 2, 'Brunei Darussalam', 'BN', 'BRN', 'Brunei Darussalam', '142', '035', 0, '673', 'BN.png'),
(100, 'Sofia', 'Bulgarian', '100', 'lev (pl. leva)', 'BGN', 'stotinka', '????', 2, 'Republic of Bulgaria', 'BG', 'BGR', 'Bulgaria', '150', '151', 1, '359', 'BG.png'),
(104, 'Yangon', 'Burmese', '104', 'kyat', 'MMK', 'pya', 'K', 2, 'Union of Myanmar/', 'MM', 'MMR', 'Myanmar', '142', '035', 0, '95', 'MM.png'),
(108, 'Bujumbura', 'Burundian', '108', 'Burundi franc', 'BIF', 'centime', 'BIF', 0, 'Republic of Burundi', 'BI', 'BDI', 'Burundi', '002', '014', 0, '257', 'BI.png'),
(112, 'Minsk', 'Belarusian', '112', 'Belarusian rouble', 'BYR', 'kopek', 'p.', 2, 'Republic of Belarus', 'BY', 'BLR', 'Belarus', '150', '151', 0, '375', 'BY.png'),
(116, 'Phnom Penh', 'Cambodian', '116', 'riel', 'KHR', 'sen (inv.)', '???', 2, 'Kingdom of Cambodia', 'KH', 'KHM', 'Cambodia', '142', '035', 0, '855', 'KH.png'),
(120, 'Yaound??', 'Cameroonian', '120', 'CFA franc (BEAC)', 'XAF', 'centime', 'FCF', 0, 'Republic of Cameroon', 'CM', 'CMR', 'Cameroon', '002', '017', 0, '237', 'CM.png'),
(124, 'Ottawa', 'Canadian', '124', 'Canadian dollar', 'CAD', 'cent', '$', 2, 'Canada', 'CA', 'CAN', 'Canada', '019', '021', 0, '1', 'CA.png'),
(132, 'Praia', 'Cape Verdean', '132', 'Cape Verde escudo', 'CVE', 'centavo', 'CVE', 2, 'Republic of Cape Verde', 'CV', 'CPV', 'Cape Verde', '002', '011', 0, '238', 'CV.png'),
(136, 'George Town', 'Caymanian', '136', 'Cayman Islands dollar', 'KYD', 'cent', '$', 2, 'Cayman Islands', 'KY', 'CYM', 'Cayman Islands', '019', '029', 0, '1', 'KY.png'),
(140, 'Bangui', 'Central African', '140', 'CFA franc (BEAC)', 'XAF', 'centime', 'CFA', 0, 'Central African Republic', 'CF', 'CAF', 'Central African Republic', '002', '017', 0, '236', 'CF.png'),
(144, 'Colombo', 'Sri Lankan', '144', 'Sri Lankan rupee', 'LKR', 'cent', '???', 2, 'Democratic Socialist Republic of Sri Lanka', 'LK', 'LKA', 'Sri Lanka', '142', '034', 0, '94', 'LK.png'),
(148, 'N???Djamena', 'Chadian', '148', 'CFA franc (BEAC)', 'XAF', 'centime', 'XAF', 0, 'Republic of Chad', 'TD', 'TCD', 'Chad', '002', '017', 0, '235', 'TD.png'),
(152, 'Santiago', 'Chilean', '152', 'Chilean peso', 'CLP', 'centavo', 'CLP', 0, 'Republic of Chile', 'CL', 'CHL', 'Chile', '019', '005', 0, '56', 'CL.png'),
(156, 'Beijing', 'Chinese', '156', 'renminbi-yuan (inv.)', 'CNY', 'jiao (10)', '??', 2, 'People???s Republic of China', 'CN', 'CHN', 'China', '142', '030', 0, '86', 'CN.png'),
(158, 'Taipei', 'Taiwanese', '158', 'new Taiwan dollar', 'TWD', 'fen (inv.)', 'NT$', 2, 'Republic of China, Taiwan (TW1)', 'TW', 'TWN', 'Taiwan, Province of China', '142', '030', 0, '886', 'TW.png'),
(162, 'Flying Fish Cove', 'Christmas Islander', '162', 'Australian dollar', 'AUD', 'cent', '$', 2, 'Christmas Island Territory', 'CX', 'CXR', 'Christmas Island', '', '', 0, '61', 'CX.png'),
(166, 'Bantam', 'Cocos Islander', '166', 'Australian dollar', 'AUD', 'cent', '$', 2, 'Territory of Cocos (Keeling) Islands', 'CC', 'CCK', 'Cocos (Keeling) Islands', '', '', 0, '61', 'CC.png'),
(170, 'Santa Fe de Bogot??', 'Colombian', '170', 'Colombian peso', 'COP', 'centavo', '$', 2, 'Republic of Colombia', 'CO', 'COL', 'Colombia', '019', '005', 0, '57', 'CO.png'),
(174, 'Moroni', 'Comorian', '174', 'Comorian franc', 'KMF', '', 'KMF', 0, 'Union of the Comoros', 'KM', 'COM', 'Comoros', '002', '014', 0, '269', 'KM.png'),
(175, 'Mamoudzou', 'Mahorais', '175', 'euro', 'EUR', 'cent', '???', 2, 'Departmental Collectivity of Mayotte', 'YT', 'MYT', 'Mayotte', '002', '014', 0, '262', 'YT.png'),
(178, 'Brazzaville', 'Congolese', '178', 'CFA franc (BEAC)', 'XAF', 'centime', 'FCF', 0, 'Republic of the Congo', 'CG', 'COG', 'Congo', '002', '017', 0, '242', 'CG.png'),
(180, 'Kinshasa', 'Congolese', '180', 'Congolese franc', 'CDF', 'centime', 'CDF', 2, 'Democratic Republic of the Congo', 'CD', 'COD', 'Congo, the Democratic Republic of the', '002', '017', 0, '243', 'CD.png'),
(184, 'Avarua', 'Cook Islander', '184', 'New Zealand dollar', 'NZD', 'cent', '$', 2, 'Cook Islands', 'CK', 'COK', 'Cook Islands', '009', '061', 0, '682', 'CK.png'),
(188, 'San Jos??', 'Costa Rican', '188', 'Costa Rican col??n (pl. colones)', 'CRC', 'c??ntimo', '???', 2, 'Republic of Costa Rica', 'CR', 'CRI', 'Costa Rica', '019', '013', 0, '506', 'CR.png'),
(191, 'Zagreb', 'Croatian', '191', 'kuna (inv.)', 'HRK', 'lipa (inv.)', 'kn', 2, 'Republic of Croatia', 'HR', 'HRV', 'Croatia', '150', '039', 1, '385', 'HR.png'),
(192, 'Havana', 'Cuban', '192', 'Cuban peso', 'CUP', 'centavo', '???', 2, 'Republic of Cuba', 'CU', 'CUB', 'Cuba', '019', '029', 0, '53', 'CU.png'),
(196, 'Nicosia', 'Cypriot', '196', 'euro', 'EUR', 'cent', 'CYP', 2, 'Republic of Cyprus', 'CY', 'CYP', 'Cyprus', '142', '145', 1, '357', 'CY.png'),
(203, 'Prague', 'Czech', '203', 'Czech koruna (pl. koruny)', 'CZK', 'hal??r', 'K??', 2, 'Czech Republic', 'CZ', 'CZE', 'Czech Republic', '150', '151', 1, '420', 'CZ.png'),
(204, 'Porto Novo (BJ1)', 'Beninese', '204', 'CFA franc (BCEAO)', 'XOF', 'centime', 'XOF', 0, 'Republic of Benin', 'BJ', 'BEN', 'Benin', '002', '011', 0, '229', 'BJ.png'),
(208, 'Copenhagen', 'Danish', '208', 'Danish krone', 'DKK', '??re (inv.)', 'kr', 2, 'Kingdom of Denmark', 'DK', 'DNK', 'Denmark', '150', '154', 1, '45', 'DK.png'),
(212, 'Roseau', 'Dominican', '212', 'East Caribbean dollar', 'XCD', 'cent', '$', 2, 'Commonwealth of Dominica', 'DM', 'DMA', 'Dominica', '019', '029', 0, '1', 'DM.png'),
(214, 'Santo Domingo', 'Dominican', '214', 'Dominican peso', 'DOP', 'centavo', 'RD$', 2, 'Dominican Republic', 'DO', 'DOM', 'Dominican Republic', '019', '029', 0, '1', 'DO.png'),
(218, 'Quito', 'Ecuadorian', '218', 'US dollar', 'USD', 'cent', '$', 2, 'Republic of Ecuador', 'EC', 'ECU', 'Ecuador', '019', '005', 0, '593', 'EC.png'),
(222, 'San Salvador', 'Salvadoran', '222', 'Salvadorian col??n (pl. colones)', 'SVC', 'centavo', '$', 2, 'Republic of El Salvador', 'SV', 'SLV', 'El Salvador', '019', '013', 0, '503', 'SV.png'),
(226, 'Malabo', 'Equatorial Guinean', '226', 'CFA franc (BEAC)', 'XAF', 'centime', 'FCF', 2, 'Republic of Equatorial Guinea', 'GQ', 'GNQ', 'Equatorial Guinea', '002', '017', 0, '240', 'GQ.png'),
(231, 'Addis Ababa', 'Ethiopian', '231', 'birr (inv.)', 'ETB', 'cent', 'ETB', 2, 'Federal Democratic Republic of Ethiopia', 'ET', 'ETH', 'Ethiopia', '002', '014', 0, '251', 'ET.png'),
(232, 'Asmara', 'Eritrean', '232', 'nakfa', 'ERN', 'cent', 'Nfk', 2, 'State of Eritrea', 'ER', 'ERI', 'Eritrea', '002', '014', 0, '291', 'ER.png'),
(233, 'Tallinn', 'Estonian', '233', 'euro', 'EUR', 'cent', 'kr', 2, 'Republic of Estonia', 'EE', 'EST', 'Estonia', '150', '154', 1, '372', 'EE.png'),
(234, 'T??rshavn', 'Faeroese', '234', 'Danish krone', 'DKK', '??re (inv.)', 'kr', 2, 'Faeroe Islands', 'FO', 'FRO', 'Faroe Islands', '150', '154', 0, '298', 'FO.png'),
(238, 'Stanley', 'Falkland Islander', '238', 'Falkland Islands pound', 'FKP', 'new penny', '??', 2, 'Falkland Islands', 'FK', 'FLK', 'Falkland Islands (Malvinas)', '019', '005', 0, '500', 'FK.png'),
(239, 'King Edward Point (Grytviken)', 'of South Georgia and the South Sandwich Islands', '239', '', '', '', '??', 2, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', '', '', 0, '44', 'GS.png'),
(242, 'Suva', 'Fijian', '242', 'Fiji dollar', 'FJD', 'cent', '$', 2, 'Republic of Fiji', 'FJ', 'FJI', 'Fiji', '009', '054', 0, '679', 'FJ.png'),
(246, 'Helsinki', 'Finnish', '246', 'euro', 'EUR', 'cent', '???', 2, 'Republic of Finland', 'FI', 'FIN', 'Finland', '150', '154', 1, '358', 'FI.png'),
(248, 'Mariehamn', '??land Islander', '248', 'euro', 'EUR', 'cent', NULL, NULL, '??land Islands', 'AX', 'ALA', '??land Islands', '150', '154', 0, '358', NULL),
(250, 'Paris', 'French', '250', 'euro', 'EUR', 'cent', '???', 2, 'French Republic', 'FR', 'FRA', 'France', '150', '155', 1, '33', 'FR.png'),
(254, 'Cayenne', 'Guianese', '254', 'euro', 'EUR', 'cent', '???', 2, 'French Guiana', 'GF', 'GUF', 'French Guiana', '019', '005', 0, '594', 'GF.png'),
(258, 'Papeete', 'Polynesian', '258', 'CFP franc', 'XPF', 'centime', 'XPF', 0, 'French Polynesia', 'PF', 'PYF', 'French Polynesia', '009', '061', 0, '689', 'PF.png'),
(260, 'Port-aux-Francais', 'of French Southern and Antarctic Lands', '260', 'euro', 'EUR', 'cent', '???', 2, 'French Southern and Antarctic Lands', 'TF', 'ATF', 'French Southern Territories', '', '', 0, '33', 'TF.png'),
(262, 'Djibouti', 'Djiboutian', '262', 'Djibouti franc', 'DJF', '', 'DJF', 0, 'Republic of Djibouti', 'DJ', 'DJI', 'Djibouti', '002', '014', 0, '253', 'DJ.png'),
(266, 'Libreville', 'Gabonese', '266', 'CFA franc (BEAC)', 'XAF', 'centime', 'FCF', 0, 'Gabonese Republic', 'GA', 'GAB', 'Gabon', '002', '017', 0, '241', 'GA.png'),
(268, 'Tbilisi', 'Georgian', '268', 'lari', 'GEL', 'tetri (inv.)', 'GEL', 2, 'Georgia', 'GE', 'GEO', 'Georgia', '142', '145', 0, '995', 'GE.png'),
(270, 'Banjul', 'Gambian', '270', 'dalasi (inv.)', 'GMD', 'butut', 'D', 2, 'Republic of the Gambia', 'GM', 'GMB', 'Gambia', '002', '011', 0, '220', 'GM.png'),
(275, NULL, 'Palestinian', '275', NULL, NULL, NULL, '???', 2, NULL, 'PS', 'PSE', 'Palestinian Territory, Occupied', '142', '145', 0, '970', 'PS.png'),
(276, 'Berlin', 'German', '276', 'euro', 'EUR', 'cent', '???', 2, 'Federal Republic of Germany', 'DE', 'DEU', 'Germany', '150', '155', 1, '49', 'DE.png'),
(288, 'Accra', 'Ghanaian', '288', 'Ghana cedi', 'GHS', 'pesewa', '??', 2, 'Republic of Ghana', 'GH', 'GHA', 'Ghana', '002', '011', 0, '233', 'GH.png'),
(292, 'Gibraltar', 'Gibraltarian', '292', 'Gibraltar pound', 'GIP', 'penny', '??', 2, 'Gibraltar', 'GI', 'GIB', 'Gibraltar', '150', '039', 0, '350', 'GI.png'),
(296, 'Tarawa', 'Kiribatian', '296', 'Australian dollar', 'AUD', 'cent', '$', 2, 'Republic of Kiribati', 'KI', 'KIR', 'Kiribati', '009', '057', 0, '686', 'KI.png'),
(300, 'Athens', 'Greek', '300', 'euro', 'EUR', 'cent', '???', 2, 'Hellenic Republic', 'GR', 'GRC', 'Greece', '150', '039', 1, '30', 'GR.png'),
(304, 'Nuuk', 'Greenlander', '304', 'Danish krone', 'DKK', '??re (inv.)', 'kr', 2, 'Greenland', 'GL', 'GRL', 'Greenland', '019', '021', 0, '299', 'GL.png'),
(308, 'St George???s', 'Grenadian', '308', 'East Caribbean dollar', 'XCD', 'cent', '$', 2, 'Grenada', 'GD', 'GRD', 'Grenada', '019', '029', 0, '1', 'GD.png'),
(312, 'Basse Terre', 'Guadeloupean', '312', 'euro', 'EUR ', 'cent', '???', 2, 'Guadeloupe', 'GP', 'GLP', 'Guadeloupe', '019', '029', 0, '590', 'GP.png'),
(316, 'Aga??a (Hag??t??a)', 'Guamanian', '316', 'US dollar', 'USD', 'cent', '$', 2, 'Territory of Guam', 'GU', 'GUM', 'Guam', '009', '057', 0, '1', 'GU.png'),
(320, 'Guatemala City', 'Guatemalan', '320', 'quetzal (pl. quetzales)', 'GTQ', 'centavo', 'Q', 2, 'Republic of Guatemala', 'GT', 'GTM', 'Guatemala', '019', '013', 0, '502', 'GT.png'),
(324, 'Conakry', 'Guinean', '324', 'Guinean franc', 'GNF', '', 'GNF', 0, 'Republic of Guinea', 'GN', 'GIN', 'Guinea', '002', '011', 0, '224', 'GN.png'),
(328, 'Georgetown', 'Guyanese', '328', 'Guyana dollar', 'GYD', 'cent', '$', 2, 'Cooperative Republic of Guyana', 'GY', 'GUY', 'Guyana', '019', '005', 0, '592', 'GY.png'),
(332, 'Port-au-Prince', 'Haitian', '332', 'gourde', 'HTG', 'centime', 'G', 2, 'Republic of Haiti', 'HT', 'HTI', 'Haiti', '019', '029', 0, '509', 'HT.png'),
(334, 'Territory of Heard Island and McDonald Islands', 'of Territory of Heard Island and McDonald Islands', '334', '', '', '', '$', 2, 'Territory of Heard Island and McDonald Islands', 'HM', 'HMD', 'Heard Island and McDonald Islands', '', '', 0, '61', 'HM.png'),
(336, 'Vatican City', 'of the Holy See/of the Vatican', '336', 'euro', 'EUR', 'cent', '???', 2, 'the Holy See/ Vatican City State', 'VA', 'VAT', 'Holy See (Vatican City State)', '150', '039', 0, '39', 'VA.png'),
(340, 'Tegucigalpa', 'Honduran', '340', 'lempira', 'HNL', 'centavo', 'L', 2, 'Republic of Honduras', 'HN', 'HND', 'Honduras', '019', '013', 0, '504', 'HN.png'),
(344, '(HK3)', 'Hong Kong Chinese', '344', 'Hong Kong dollar', 'HKD', 'cent', '$', 2, 'Hong Kong Special Administrative Region of the People???s Republic of China (HK2)', 'HK', 'HKG', 'Hong Kong', '142', '030', 0, '852', 'HK.png'),
(348, 'Budapest', 'Hungarian', '348', 'forint (inv.)', 'HUF', '(fill??r (inv.))', 'Ft', 2, 'Republic of Hungary', 'HU', 'HUN', 'Hungary', '150', '151', 1, '36', 'HU.png'),
(352, 'Reykjavik', 'Icelander', '352', 'kr??na (pl. kr??nur)', 'ISK', '', 'kr', 0, 'Republic of Iceland', 'IS', 'ISL', 'Iceland', '150', '154', 0, '354', 'IS.png'),
(356, 'New Delhi', 'Indian', '356', 'Indian rupee', 'INR', 'paisa', '???', 2, 'Republic of India', 'IN', 'IND', 'India', '142', '034', 0, '91', 'IN.png'),
(360, 'Jakarta', 'Indonesian', '360', 'Indonesian rupiah (inv.)', 'IDR', 'sen (inv.)', 'Rp', 2, 'Republic of Indonesia', 'ID', 'IDN', 'Indonesia', '142', '035', 0, '62', 'ID.png'),
(364, 'Tehran', 'Iranian', '364', 'Iranian rial', 'IRR', '(dinar) (IR1)', '???', 2, 'Islamic Republic of Iran', 'IR', 'IRN', 'Iran, Islamic Republic of', '142', '034', 0, '98', 'IR.png'),
(368, 'Baghdad', 'Iraqi', '368', 'Iraqi dinar', 'IQD', 'fils (inv.)', 'IQD', 3, 'Republic of Iraq', 'IQ', 'IRQ', 'Iraq', '142', '145', 0, '964', 'IQ.png'),
(372, 'Dublin', 'Irish', '372', 'euro', 'EUR', 'cent', '???', 2, 'Ireland (IE1)', 'IE', 'IRL', 'Ireland', '150', '154', 1, '353', 'IE.png'),
(376, '(IL1)', 'Israeli', '376', 'shekel', 'ILS', 'agora', '???', 2, 'State of Israel', 'IL', 'ISR', 'Israel', '142', '145', 0, '972', 'IL.png'),
(380, 'Rome', 'Italian', '380', 'euro', 'EUR', 'cent', '???', 2, 'Italian Republic', 'IT', 'ITA', 'Italy', '150', '039', 1, '39', 'IT.png'),
(384, 'Yamoussoukro (CI1)', 'Ivorian', '384', 'CFA franc (BCEAO)', 'XOF', 'centime', 'XOF', 0, 'Republic of C??te d???Ivoire', 'CI', 'CIV', 'C??te d\'Ivoire', '002', '011', 0, '225', 'CI.png'),
(388, 'Kingston', 'Jamaican', '388', 'Jamaica dollar', 'JMD', 'cent', '$', 2, 'Jamaica', 'JM', 'JAM', 'Jamaica', '019', '029', 0, '1', 'JM.png'),
(392, 'Tokyo', 'Japanese', '392', 'yen (inv.)', 'JPY', '(sen (inv.)) (JP1)', '??', 0, 'Japan', 'JP', 'JPN', 'Japan', '142', '030', 0, '81', 'JP.png'),
(398, 'Astana', 'Kazakh', '398', 'tenge (inv.)', 'KZT', 'tiyn', '????', 2, 'Republic of Kazakhstan', 'KZ', 'KAZ', 'Kazakhstan', '142', '143', 0, '7', 'KZ.png'),
(400, 'Amman', 'Jordanian', '400', 'Jordanian dinar', 'JOD', '100 qirsh', 'JOD', 2, 'Hashemite Kingdom of Jordan', 'JO', 'JOR', 'Jordan', '142', '145', 0, '962', 'JO.png'),
(404, 'Nairobi', 'Kenyan', '404', 'Kenyan shilling', 'KES', 'cent', 'KES', 2, 'Republic of Kenya', 'KE', 'KEN', 'Kenya', '002', '014', 0, '254', 'KE.png'),
(408, 'Pyongyang', 'North Korean', '408', 'North Korean won (inv.)', 'KPW', 'chun (inv.)', '???', 2, 'Democratic People???s Republic of Korea', 'KP', 'PRK', 'Korea, Democratic People\'s Republic of', '142', '030', 0, '850', 'KP.png'),
(410, 'Seoul', 'South Korean', '410', 'South Korean won (inv.)', 'KRW', '(chun (inv.))', '???', 0, 'Republic of Korea', 'KR', 'KOR', 'Korea, Republic of', '142', '030', 0, '82', 'KR.png'),
(414, 'Kuwait City', 'Kuwaiti', '414', 'Kuwaiti dinar', 'KWD', 'fils (inv.)', 'KWD', 3, 'State of Kuwait', 'KW', 'KWT', 'Kuwait', '142', '145', 0, '965', 'KW.png'),
(417, 'Bishkek', 'Kyrgyz', '417', 'som', 'KGS', 'tyiyn', '????', 2, 'Kyrgyz Republic', 'KG', 'KGZ', 'Kyrgyzstan', '142', '143', 0, '996', 'KG.png'),
(418, 'Vientiane', 'Lao', '418', 'kip (inv.)', 'LAK', '(at (inv.))', '???', 0, 'Lao People???s Democratic Republic', 'LA', 'LAO', 'Lao People\'s Democratic Republic', '142', '035', 0, '856', 'LA.png'),
(422, 'Beirut', 'Lebanese', '422', 'Lebanese pound', 'LBP', '(piastre)', '??', 2, 'Lebanese Republic', 'LB', 'LBN', 'Lebanon', '142', '145', 0, '961', 'LB.png'),
(426, 'Maseru', 'Basotho', '426', 'loti (pl. maloti)', 'LSL', 'sente', 'L', 2, 'Kingdom of Lesotho', 'LS', 'LSO', 'Lesotho', '002', '018', 0, '266', 'LS.png'),
(428, 'Riga', 'Latvian', '428', 'euro', 'EUR', 'cent', 'Ls', 2, 'Republic of Latvia', 'LV', 'LVA', 'Latvia', '150', '154', 1, '371', 'LV.png'),
(430, 'Monrovia', 'Liberian', '430', 'Liberian dollar', 'LRD', 'cent', '$', 2, 'Republic of Liberia', 'LR', 'LBR', 'Liberia', '002', '011', 0, '231', 'LR.png'),
(434, 'Tripoli', 'Libyan', '434', 'Libyan dinar', 'LYD', 'dirham', 'LYD', 3, 'Socialist People???s Libyan Arab Jamahiriya', 'LY', 'LBY', 'Libya', '002', '015', 0, '218', 'LY.png'),
(438, 'Vaduz', 'Liechtensteiner', '438', 'Swiss franc', 'CHF', 'centime', 'CHF', 2, 'Principality of Liechtenstein', 'LI', 'LIE', 'Liechtenstein', '150', '155', 0, '423', 'LI.png'),
(440, 'Vilnius', 'Lithuanian', '440', 'euro', 'EUR', 'cent', 'Lt', 2, 'Republic of Lithuania', 'LT', 'LTU', 'Lithuania', '150', '154', 1, '370', 'LT.png'),
(442, 'Luxembourg', 'Luxembourger', '442', 'euro', 'EUR', 'cent', '???', 2, 'Grand Duchy of Luxembourg', 'LU', 'LUX', 'Luxembourg', '150', '155', 1, '352', 'LU.png'),
(446, 'Macao (MO3)', 'Macanese', '446', 'pataca', 'MOP', 'avo', 'MOP', 2, 'Macao Special Administrative Region of the People???s Republic of China (MO2)', 'MO', 'MAC', 'Macao', '142', '030', 0, '853', 'MO.png'),
(450, 'Antananarivo', 'Malagasy', '450', 'ariary', 'MGA', 'iraimbilanja (inv.)', 'MGA', 2, 'Republic of Madagascar', 'MG', 'MDG', 'Madagascar', '002', '014', 0, '261', 'MG.png'),
(454, 'Lilongwe', 'Malawian', '454', 'Malawian kwacha (inv.)', 'MWK', 'tambala (inv.)', 'MK', 2, 'Republic of Malawi', 'MW', 'MWI', 'Malawi', '002', '014', 0, '265', 'MW.png'),
(458, 'Kuala Lumpur (MY1)', 'Malaysian', '458', 'ringgit (inv.)', 'MYR', 'sen (inv.)', 'RM', 2, 'Malaysia', 'MY', 'MYS', 'Malaysia', '142', '035', 0, '60', 'MY.png'),
(462, 'Mal??', 'Maldivian', '462', 'rufiyaa', 'MVR', 'laari (inv.)', 'Rf', 2, 'Republic of Maldives', 'MV', 'MDV', 'Maldives', '142', '034', 0, '960', 'MV.png'),
(466, 'Bamako', 'Malian', '466', 'CFA franc (BCEAO)', 'XOF', 'centime', 'XOF', 0, 'Republic of Mali', 'ML', 'MLI', 'Mali', '002', '011', 0, '223', 'ML.png'),
(470, 'Valletta', 'Maltese', '470', 'euro', 'EUR', 'cent', 'MTL', 2, 'Republic of Malta', 'MT', 'MLT', 'Malta', '150', '039', 1, '356', 'MT.png'),
(474, 'Fort-de-France', 'Martinican', '474', 'euro', 'EUR', 'cent', '???', 2, 'Martinique', 'MQ', 'MTQ', 'Martinique', '019', '029', 0, '596', 'MQ.png'),
(478, 'Nouakchott', 'Mauritanian', '478', 'ouguiya', 'MRO', 'khoum', 'UM', 2, 'Islamic Republic of Mauritania', 'MR', 'MRT', 'Mauritania', '002', '011', 0, '222', 'MR.png'),
(480, 'Port Louis', 'Mauritian', '480', 'Mauritian rupee', 'MUR', 'cent', '???', 2, 'Republic of Mauritius', 'MU', 'MUS', 'Mauritius', '002', '014', 0, '230', 'MU.png'),
(484, 'Mexico City', 'Mexican', '484', 'Mexican peso', 'MXN', 'centavo', '$', 2, 'United Mexican States', 'MX', 'MEX', 'Mexico', '019', '013', 0, '52', 'MX.png'),
(492, 'Monaco', 'Monegasque', '492', 'euro', 'EUR', 'cent', '???', 2, 'Principality of Monaco', 'MC', 'MCO', 'Monaco', '150', '155', 0, '377', 'MC.png'),
(496, 'Ulan Bator', 'Mongolian', '496', 'tugrik', 'MNT', 'm??ng?? (inv.)', '???', 2, 'Mongolia', 'MN', 'MNG', 'Mongolia', '142', '030', 0, '976', 'MN.png'),
(498, 'Chisinau', 'Moldovan', '498', 'Moldovan leu (pl. lei)', 'MDL', 'ban', 'MDL', 2, 'Republic of Moldova', 'MD', 'MDA', 'Moldova, Republic of', '150', '151', 0, '373', 'MD.png'),
(499, 'Podgorica', 'Montenegrin', '499', 'euro', 'EUR', 'cent', '???', 2, 'Montenegro', 'ME', 'MNE', 'Montenegro', '150', '039', 0, '382', 'ME.png'),
(500, 'Plymouth (MS2)', 'Montserratian', '500', 'East Caribbean dollar', 'XCD', 'cent', '$', 2, 'Montserrat', 'MS', 'MSR', 'Montserrat', '019', '029', 0, '1', 'MS.png'),
(504, 'Rabat', 'Moroccan', '504', 'Moroccan dirham', 'MAD', 'centime', 'MAD', 2, 'Kingdom of Morocco', 'MA', 'MAR', 'Morocco', '002', '015', 0, '212', 'MA.png'),
(508, 'Maputo', 'Mozambican', '508', 'metical', 'MZN', 'centavo', 'MT', 2, 'Republic of Mozambique', 'MZ', 'MOZ', 'Mozambique', '002', '014', 0, '258', 'MZ.png'),
(512, 'Muscat', 'Omani', '512', 'Omani rial', 'OMR', 'baiza', '???', 3, 'Sultanate of Oman', 'OM', 'OMN', 'Oman', '142', '145', 0, '968', 'OM.png'),
(516, 'Windhoek', 'Namibian', '516', 'Namibian dollar', 'NAD', 'cent', '$', 2, 'Republic of Namibia', 'NA', 'NAM', 'Namibia', '002', '018', 0, '264', 'NA.png'),
(520, 'Yaren', 'Nauruan', '520', 'Australian dollar', 'AUD', 'cent', '$', 2, 'Republic of Nauru', 'NR', 'NRU', 'Nauru', '009', '057', 0, '674', 'NR.png'),
(524, 'Kathmandu', 'Nepalese', '524', 'Nepalese rupee', 'NPR', 'paisa (inv.)', '???', 2, 'Nepal', 'NP', 'NPL', 'Nepal', '142', '034', 0, '977', 'NP.png'),
(528, 'Amsterdam (NL2)', 'Dutch', '528', 'euro', 'EUR', 'cent', '???', 2, 'Kingdom of the Netherlands', 'NL', 'NLD', 'Netherlands', '150', '155', 1, '31', 'NL.png'),
(531, 'Willemstad', 'Cura??aoan', '531', 'Netherlands Antillean guilder (CW1)', 'ANG', 'cent', NULL, NULL, 'Cura??ao', 'CW', 'CUW', 'Cura??ao', '019', '029', 0, '599', NULL),
(533, 'Oranjestad', 'Aruban', '533', 'Aruban guilder', 'AWG', 'cent', '??', 2, 'Aruba', 'AW', 'ABW', 'Aruba', '019', '029', 0, '297', 'AW.png'),
(534, 'Philipsburg', 'Sint Maartener', '534', 'Netherlands Antillean guilder (SX1)', 'ANG', 'cent', NULL, NULL, 'Sint Maarten', 'SX', 'SXM', 'Sint Maarten (Dutch part)', '019', '029', 0, '721', NULL),
(535, NULL, 'of Bonaire, Sint Eustatius and Saba', '535', 'US dollar', 'USD', 'cent', NULL, NULL, NULL, 'BQ', 'BES', 'Bonaire, Sint Eustatius and Saba', '019', '029', 0, '599', NULL),
(540, 'Noum??a', 'New Caledonian', '540', 'CFP franc', 'XPF', 'centime', 'XPF', 0, 'New Caledonia', 'NC', 'NCL', 'New Caledonia', '009', '054', 0, '687', 'NC.png'),
(548, 'Port Vila', 'Vanuatuan', '548', 'vatu (inv.)', 'VUV', '', 'Vt', 0, 'Republic of Vanuatu', 'VU', 'VUT', 'Vanuatu', '009', '054', 0, '678', 'VU.png'),
(554, 'Wellington', 'New Zealander', '554', 'New Zealand dollar', 'NZD', 'cent', '$', 2, 'New Zealand', 'NZ', 'NZL', 'New Zealand', '009', '053', 0, '64', 'NZ.png'),
(558, 'Managua', 'Nicaraguan', '558', 'c??rdoba oro', 'NIO', 'centavo', 'C$', 2, 'Republic of Nicaragua', 'NI', 'NIC', 'Nicaragua', '019', '013', 0, '505', 'NI.png'),
(562, 'Niamey', 'Nigerien', '562', 'CFA franc (BCEAO)', 'XOF', 'centime', 'XOF', 0, 'Republic of Niger', 'NE', 'NER', 'Niger', '002', '011', 0, '227', 'NE.png'),
(566, 'Abuja', 'Nigerian', '566', 'naira (inv.)', 'NGN', 'kobo (inv.)', '???', 2, 'Federal Republic of Nigeria', 'NG', 'NGA', 'Nigeria', '002', '011', 0, '234', 'NG.png'),
(570, 'Alofi', 'Niuean', '570', 'New Zealand dollar', 'NZD', 'cent', '$', 2, 'Niue', 'NU', 'NIU', 'Niue', '009', '061', 0, '683', 'NU.png'),
(574, 'Kingston', 'Norfolk Islander', '574', 'Australian dollar', 'AUD', 'cent', '$', 2, 'Territory of Norfolk Island', 'NF', 'NFK', 'Norfolk Island', '009', '053', 0, '672', 'NF.png'),
(578, 'Oslo', 'Norwegian', '578', 'Norwegian krone (pl. kroner)', 'NOK', '??re (inv.)', 'kr', 2, 'Kingdom of Norway', 'NO', 'NOR', 'Norway', '150', '154', 0, '47', 'NO.png'),
(580, 'Saipan', 'Northern Mariana Islander', '580', 'US dollar', 'USD', 'cent', '$', 2, 'Commonwealth of the Northern Mariana Islands', 'MP', 'MNP', 'Northern Mariana Islands', '009', '057', 0, '1', 'MP.png'),
(581, 'United States Minor Outlying Islands', 'of United States Minor Outlying Islands', '581', 'US dollar', 'USD', 'cent', '$', 2, 'United States Minor Outlying Islands', 'UM', 'UMI', 'United States Minor Outlying Islands', '', '', 0, '1', 'UM.png'),
(583, 'Palikir', 'Micronesian', '583', 'US dollar', 'USD', 'cent', '$', 2, 'Federated States of Micronesia', 'FM', 'FSM', 'Micronesia, Federated States of', '009', '057', 0, '691', 'FM.png'),
(584, 'Majuro', 'Marshallese', '584', 'US dollar', 'USD', 'cent', '$', 2, 'Republic of the Marshall Islands', 'MH', 'MHL', 'Marshall Islands', '009', '057', 0, '692', 'MH.png'),
(585, 'Melekeok', 'Palauan', '585', 'US dollar', 'USD', 'cent', '$', 2, 'Republic of Palau', 'PW', 'PLW', 'Palau', '009', '057', 0, '680', 'PW.png'),
(586, 'Islamabad', 'Pakistani', '586', 'Pakistani rupee', 'PKR', 'paisa', '???', 2, 'Islamic Republic of Pakistan', 'PK', 'PAK', 'Pakistan', '142', '034', 0, '92', 'PK.png'),
(591, 'Panama City', 'Panamanian', '591', 'balboa', 'PAB', 'cent??simo', 'B/.', 2, 'Republic of Panama', 'PA', 'PAN', 'Panama', '019', '013', 0, '507', 'PA.png'),
(598, 'Port Moresby', 'Papua New Guinean', '598', 'kina (inv.)', 'PGK', 'toea (inv.)', 'PGK', 2, 'Independent State of Papua New Guinea', 'PG', 'PNG', 'Papua New Guinea', '009', '054', 0, '675', 'PG.png'),
(600, 'Asunci??n', 'Paraguayan', '600', 'guaran??', 'PYG', 'c??ntimo', 'Gs', 0, 'Republic of Paraguay', 'PY', 'PRY', 'Paraguay', '019', '005', 0, '595', 'PY.png'),
(604, 'Lima', 'Peruvian', '604', 'new sol', 'PEN', 'c??ntimo', 'S/.', 2, 'Republic of Peru', 'PE', 'PER', 'Peru', '019', '005', 0, '51', 'PE.png'),
(608, 'Manila', 'Filipino', '608', 'Philippine peso', 'PHP', 'centavo', 'Php', 2, 'Republic of the Philippines', 'PH', 'PHL', 'Philippines', '142', '035', 0, '63', 'PH.png'),
(612, 'Adamstown', 'Pitcairner', '612', 'New Zealand dollar', 'NZD', 'cent', '$', 2, 'Pitcairn Islands', 'PN', 'PCN', 'Pitcairn', '009', '061', 0, '649', 'PN.png'),
(616, 'Warsaw', 'Polish', '616', 'zloty', 'PLN', 'grosz (pl. groszy)', 'z??', 2, 'Republic of Poland', 'PL', 'POL', 'Poland', '150', '151', 1, '48', 'PL.png'),
(620, 'Lisbon', 'Portuguese', '620', 'euro', 'EUR', 'cent', '???', 2, 'Portuguese Republic', 'PT', 'PRT', 'Portugal', '150', '039', 1, '351', 'PT.png'),
(624, 'Bissau', 'Guinea-Bissau national', '624', 'CFA franc (BCEAO)', 'XOF', 'centime', 'XOF', 0, 'Republic of Guinea-Bissau', 'GW', 'GNB', 'Guinea-Bissau', '002', '011', 0, '245', 'GW.png'),
(626, 'Dili', 'East Timorese', '626', 'US dollar', 'USD', 'cent', '$', 2, 'Democratic Republic of East Timor', 'TL', 'TLS', 'Timor-Leste', '142', '035', 0, '670', 'TL.png'),
(630, 'San Juan', 'Puerto Rican', '630', 'US dollar', 'USD', 'cent', '$', 2, 'Commonwealth of Puerto Rico', 'PR', 'PRI', 'Puerto Rico', '019', '029', 0, '1', 'PR.png'),
(634, 'Doha', 'Qatari', '634', 'Qatari riyal', 'QAR', 'dirham', '???', 2, 'State of Qatar', 'QA', 'QAT', 'Qatar', '142', '145', 0, '974', 'QA.png'),
(638, 'Saint-Denis', 'Reunionese', '638', 'euro', 'EUR', 'cent', '???', 2, 'R??union', 'RE', 'REU', 'R??union', '002', '014', 0, '262', 'RE.png'),
(642, 'Bucharest', 'Romanian', '642', 'Romanian leu (pl. lei)', 'RON', 'ban (pl. bani)', 'lei', 2, 'Romania', 'RO', 'ROU', 'Romania', '150', '151', 1, '40', 'RO.png'),
(643, 'Moscow', 'Russian', '643', 'Russian rouble', 'RUB', 'kopek', '??????', 2, 'Russian Federation', 'RU', 'RUS', 'Russian Federation', '150', '151', 0, '7', 'RU.png'),
(646, 'Kigali', 'Rwandan; Rwandese', '646', 'Rwandese franc', 'RWF', 'centime', 'RWF', 0, 'Republic of Rwanda', 'RW', 'RWA', 'Rwanda', '002', '014', 0, '250', 'RW.png'),
(652, 'Gustavia', 'of Saint Barth??lemy', '652', 'euro', 'EUR', 'cent', NULL, NULL, 'Collectivity of Saint Barth??lemy', 'BL', 'BLM', 'Saint Barth??lemy', '019', '029', 0, '590', NULL),
(654, 'Jamestown', 'Saint Helenian', '654', 'Saint Helena pound', 'SHP', 'penny', '??', 2, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', 'SHN', 'Saint Helena, Ascension and Tristan da Cunha', '002', '011', 0, '290', 'SH.png'),
(659, 'Basseterre', 'Kittsian; Nevisian', '659', 'East Caribbean dollar', 'XCD', 'cent', '$', 2, 'Federation of Saint Kitts and Nevis', 'KN', 'KNA', 'Saint Kitts and Nevis', '019', '029', 0, '1', 'KN.png'),
(660, 'The Valley', 'Anguillan', '660', 'East Caribbean dollar', 'XCD', 'cent', '$', 2, 'Anguilla', 'AI', 'AIA', 'Anguilla', '019', '029', 0, '1', 'AI.png'),
(662, 'Castries', 'Saint Lucian', '662', 'East Caribbean dollar', 'XCD', 'cent', '$', 2, 'Saint Lucia', 'LC', 'LCA', 'Saint Lucia', '019', '029', 0, '1', 'LC.png'),
(663, 'Marigot', 'of Saint Martin', '663', 'euro', 'EUR', 'cent', NULL, NULL, 'Collectivity of Saint Martin', 'MF', 'MAF', 'Saint Martin (French part)', '019', '029', 0, '590', NULL),
(666, 'Saint-Pierre', 'St-Pierrais; Miquelonnais', '666', 'euro', 'EUR', 'cent', '???', 2, 'Territorial Collectivity of Saint Pierre and Miquelon', 'PM', 'SPM', 'Saint Pierre and Miquelon', '019', '021', 0, '508', 'PM.png'),
(670, 'Kingstown', 'Vincentian', '670', 'East Caribbean dollar', 'XCD', 'cent', '$', 2, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 'Saint Vincent and the Grenadines', '019', '029', 0, '1', 'VC.png'),
(674, 'San Marino', 'San Marinese', '674', 'euro', 'EUR ', 'cent', '???', 2, 'Republic of San Marino', 'SM', 'SMR', 'San Marino', '150', '039', 0, '378', 'SM.png'),
(678, 'S??o Tom??', 'S??o Tom??an', '678', 'dobra', 'STD', 'centavo', 'Db', 2, 'Democratic Republic of S??o Tom?? and Pr??ncipe', 'ST', 'STP', 'Sao Tome and Principe', '002', '017', 0, '239', 'ST.png'),
(682, 'Riyadh', 'Saudi Arabian', '682', 'riyal', 'SAR', 'halala', '???', 2, 'Kingdom of Saudi Arabia', 'SA', 'SAU', 'Saudi Arabia', '142', '145', 0, '966', 'SA.png'),
(686, 'Dakar', 'Senegalese', '686', 'CFA franc (BCEAO)', 'XOF', 'centime', 'XOF', 0, 'Republic of Senegal', 'SN', 'SEN', 'Senegal', '002', '011', 0, '221', 'SN.png'),
(688, 'Belgrade', 'Serb', '688', 'Serbian dinar', 'RSD', 'para (inv.)', NULL, NULL, 'Republic of Serbia', 'RS', 'SRB', 'Serbia', '150', '039', 0, '381', NULL),
(690, 'Victoria', 'Seychellois', '690', 'Seychelles rupee', 'SCR', 'cent', '???', 2, 'Republic of Seychelles', 'SC', 'SYC', 'Seychelles', '002', '014', 0, '248', 'SC.png'),
(694, 'Freetown', 'Sierra Leonean', '694', 'leone', 'SLL', 'cent', 'Le', 2, 'Republic of Sierra Leone', 'SL', 'SLE', 'Sierra Leone', '002', '011', 0, '232', 'SL.png'),
(702, 'Singapore', 'Singaporean', '702', 'Singapore dollar', 'SGD', 'cent', '$', 2, 'Republic of Singapore', 'SG', 'SGP', 'Singapore', '142', '035', 0, '65', 'SG.png'),
(703, 'Bratislava', 'Slovak', '703', 'euro', 'EUR', 'cent', 'Sk', 2, 'Slovak Republic', 'SK', 'SVK', 'Slovakia', '150', '151', 1, '421', 'SK.png'),
(704, 'Hanoi', 'Vietnamese', '704', 'dong', 'VND', '(10 h??o', '???', 2, 'Socialist Republic of Vietnam', 'VN', 'VNM', 'Viet Nam', '142', '035', 0, '84', 'VN.png'),
(705, 'Ljubljana', 'Slovene', '705', 'euro', 'EUR', 'cent', '???', 2, 'Republic of Slovenia', 'SI', 'SVN', 'Slovenia', '150', '039', 1, '386', 'SI.png'),
(706, 'Mogadishu', 'Somali', '706', 'Somali shilling', 'SOS', 'cent', 'S', 2, 'Somali Republic', 'SO', 'SOM', 'Somalia', '002', '014', 0, '252', 'SO.png'),
(710, 'Pretoria (ZA1)', 'South African', '710', 'rand', 'ZAR', 'cent', 'R', 2, 'Republic of South Africa', 'ZA', 'ZAF', 'South Africa', '002', '018', 0, '27', 'ZA.png'),
(716, 'Harare', 'Zimbabwean', '716', 'Zimbabwe dollar (ZW1)', 'ZWL', 'cent', 'Z$', 2, 'Republic of Zimbabwe', 'ZW', 'ZWE', 'Zimbabwe', '002', '014', 0, '263', 'ZW.png'),
(724, 'Madrid', 'Spaniard', '724', 'euro', 'EUR', 'cent', '???', 2, 'Kingdom of Spain', 'ES', 'ESP', 'Spain', '150', '039', 1, '34', 'ES.png'),
(728, 'Juba', 'South Sudanese', '728', 'South Sudanese pound', 'SSP', 'piaster', NULL, NULL, 'Republic of South Sudan', 'SS', 'SSD', 'South Sudan', '002', '015', 0, '211', NULL),
(729, 'Khartoum', 'Sudanese', '729', 'Sudanese pound', 'SDG', 'piastre', NULL, NULL, 'Republic of the Sudan', 'SD', 'SDN', 'Sudan', '002', '015', 0, '249', NULL),
(732, 'Al aaiun', 'Sahrawi', '732', 'Moroccan dirham', 'MAD', 'centime', 'MAD', 2, 'Western Sahara', 'EH', 'ESH', 'Western Sahara', '002', '015', 0, '212', 'EH.png'),
(740, 'Paramaribo', 'Surinamese', '740', 'Surinamese dollar', 'SRD', 'cent', '$', 2, 'Republic of Suriname', 'SR', 'SUR', 'Suriname', '019', '005', 0, '597', 'SR.png'),
(744, 'Longyearbyen', 'of Svalbard', '744', 'Norwegian krone (pl. kroner)', 'NOK', '??re (inv.)', 'kr', 2, 'Svalbard and Jan Mayen', 'SJ', 'SJM', 'Svalbard and Jan Mayen', '150', '154', 0, '47', 'SJ.png'),
(748, 'Mbabane', 'Swazi', '748', 'lilangeni', 'SZL', 'cent', 'SZL', 2, 'Kingdom of Swaziland', 'SZ', 'SWZ', 'Swaziland', '002', '018', 0, '268', 'SZ.png'),
(752, 'Stockholm', 'Swedish', '752', 'krona (pl. kronor)', 'SEK', '??re (inv.)', 'kr', 2, 'Kingdom of Sweden', 'SE', 'SWE', 'Sweden', '150', '154', 1, '46', 'SE.png'),
(756, 'Berne', 'Swiss', '756', 'Swiss franc', 'CHF', 'centime', 'CHF', 2, 'Swiss Confederation', 'CH', 'CHE', 'Switzerland', '150', '155', 0, '41', 'CH.png'),
(760, 'Damascus', 'Syrian', '760', 'Syrian pound', 'SYP', 'piastre', '??', 2, 'Syrian Arab Republic', 'SY', 'SYR', 'Syrian Arab Republic', '142', '145', 0, '963', 'SY.png'),
(762, 'Dushanbe', 'Tajik', '762', 'somoni', 'TJS', 'diram', 'TJS', 2, 'Republic of Tajikistan', 'TJ', 'TJK', 'Tajikistan', '142', '143', 0, '992', 'TJ.png'),
(764, 'Bangkok', 'Thai', '764', 'baht (inv.)', 'THB', 'satang (inv.)', '???', 2, 'Kingdom of Thailand', 'TH', 'THA', 'Thailand', '142', '035', 0, '66', 'TH.png'),
(768, 'Lom??', 'Togolese', '768', 'CFA franc (BCEAO)', 'XOF', 'centime', 'XOF', 0, 'Togolese Republic', 'TG', 'TGO', 'Togo', '002', '011', 0, '228', 'TG.png'),
(772, '(TK2)', 'Tokelauan', '772', 'New Zealand dollar', 'NZD', 'cent', '$', 2, 'Tokelau', 'TK', 'TKL', 'Tokelau', '009', '061', 0, '690', 'TK.png'),
(776, 'Nuku???alofa', 'Tongan', '776', 'pa???anga (inv.)', 'TOP', 'seniti (inv.)', 'T$', 2, 'Kingdom of Tonga', 'TO', 'TON', 'Tonga', '009', '061', 0, '676', 'TO.png'),
(780, 'Port of Spain', 'Trinidadian; Tobagonian', '780', 'Trinidad and Tobago dollar', 'TTD', 'cent', 'TT$', 2, 'Republic of Trinidad and Tobago', 'TT', 'TTO', 'Trinidad and Tobago', '019', '029', 0, '1', 'TT.png'),
(784, 'Abu Dhabi', 'Emirian', '784', 'UAE dirham', 'AED', 'fils (inv.)', 'AED', 2, 'United Arab Emirates', 'AE', 'ARE', 'United Arab Emirates', '142', '145', 0, '971', 'AE.png'),
(788, 'Tunis', 'Tunisian', '788', 'Tunisian dinar', 'TND', 'millime', 'TND', 3, 'Republic of Tunisia', 'TN', 'TUN', 'Tunisia', '002', '015', 0, '216', 'TN.png'),
(792, 'Ankara', 'Turk', '792', 'Turkish lira (inv.)', 'TRY', 'kurus (inv.)', '???', 2, 'Republic of Turkey', 'TR', 'TUR', 'Turkey', '142', '145', 0, '90', 'TR.png'),
(795, 'Ashgabat', 'Turkmen', '795', 'Turkmen manat (inv.)', 'TMT', 'tenge (inv.)', 'm', 2, 'Turkmenistan', 'TM', 'TKM', 'Turkmenistan', '142', '143', 0, '993', 'TM.png'),
(796, 'Cockburn Town', 'Turks and Caicos Islander', '796', 'US dollar', 'USD', 'cent', '$', 2, 'Turks and Caicos Islands', 'TC', 'TCA', 'Turks and Caicos Islands', '019', '029', 0, '1', 'TC.png'),
(798, 'Funafuti', 'Tuvaluan', '798', 'Australian dollar', 'AUD', 'cent', '$', 2, 'Tuvalu', 'TV', 'TUV', 'Tuvalu', '009', '061', 0, '688', 'TV.png'),
(800, 'Kampala', 'Ugandan', '800', 'Uganda shilling', 'UGX', 'cent', 'UGX', 0, 'Republic of Uganda', 'UG', 'UGA', 'Uganda', '002', '014', 0, '256', 'UG.png'),
(804, 'Kiev', 'Ukrainian', '804', 'hryvnia', 'UAH', 'kopiyka', '???', 2, 'Ukraine', 'UA', 'UKR', 'Ukraine', '150', '151', 0, '380', 'UA.png'),
(807, 'Skopje', 'of the former Yugoslav Republic of Macedonia', '807', 'denar (pl. denars)', 'MKD', 'deni (inv.)', '??????', 2, 'the former Yugoslav Republic of Macedonia', 'MK', 'MKD', 'Macedonia, the former Yugoslav Republic of', '150', '039', 0, '389', 'MK.png'),
(818, 'Cairo', 'Egyptian', '818', 'Egyptian pound', 'EGP', 'piastre', '??', 2, 'Arab Republic of Egypt', 'EG', 'EGY', 'Egypt', '002', '015', 0, '20', 'EG.png'),
(826, 'London', 'British', '826', 'pound sterling', 'GBP', 'penny (pl. pence)', '??', 2, 'United Kingdom of Great Britain and Northern Ireland', 'GB', 'GBR', 'United Kingdom', '150', '154', 1, '44', 'GB.png'),
(831, 'St Peter Port', 'of Guernsey', '831', 'Guernsey pound (GG2)', 'GGP (GG2)', 'penny (pl. pence)', NULL, NULL, 'Bailiwick of Guernsey', 'GG', 'GGY', 'Guernsey', '150', '154', 0, '44', NULL),
(832, 'St Helier', 'of Jersey', '832', 'Jersey pound (JE2)', 'JEP (JE2)', 'penny (pl. pence)', NULL, NULL, 'Bailiwick of Jersey', 'JE', 'JEY', 'Jersey', '150', '154', 0, '44', NULL),
(833, 'Douglas', 'Manxman; Manxwoman', '833', 'Manx pound (IM2)', 'IMP (IM2)', 'penny (pl. pence)', NULL, NULL, 'Isle of Man', 'IM', 'IMN', 'Isle of Man', '150', '154', 0, '44', NULL),
(834, 'Dodoma (TZ1)', 'Tanzanian', '834', 'Tanzanian shilling', 'TZS', 'cent', 'TZS', 2, 'United Republic of Tanzania', 'TZ', 'TZA', 'Tanzania, United Republic of', '002', '014', 0, '255', 'TZ.png'),
(840, 'Washington DC', 'American', '840', 'US dollar', 'USD', 'cent', '$', 2, 'United States of America', 'US', 'USA', 'United States', '019', '021', 0, '1', 'US.png'),
(850, 'Charlotte Amalie', 'US Virgin Islander', '850', 'US dollar', 'USD', 'cent', '$', 2, 'United States Virgin Islands', 'VI', 'VIR', 'Virgin Islands, U.S.', '019', '029', 0, '1', 'VI.png'),
(854, 'Ouagadougou', 'Burkinabe', '854', 'CFA franc (BCEAO)', 'XOF', 'centime', 'XOF', 0, 'Burkina Faso', 'BF', 'BFA', 'Burkina Faso', '002', '011', 0, '226', 'BF.png'),
(858, 'Montevideo', 'Uruguayan', '858', 'Uruguayan peso', 'UYU', 'cent??simo', '$U', 0, 'Eastern Republic of Uruguay', 'UY', 'URY', 'Uruguay', '019', '005', 0, '598', 'UY.png'),
(860, 'Tashkent', 'Uzbek', '860', 'sum (inv.)', 'UZS', 'tiyin (inv.)', '????', 2, 'Republic of Uzbekistan', 'UZ', 'UZB', 'Uzbekistan', '142', '143', 0, '998', 'UZ.png'),
(862, 'Caracas', 'Venezuelan', '862', 'bol??var fuerte (pl. bol??vares fuertes)', 'VEF', 'c??ntimo', 'Bs', 2, 'Bolivarian Republic of Venezuela', 'VE', 'VEN', 'Venezuela, Bolivarian Republic of', '019', '005', 0, '58', 'VE.png'),
(876, 'Mata-Utu', 'Wallisian; Futunan; Wallis and Futuna Islander', '876', 'CFP franc', 'XPF', 'centime', 'XPF', 0, 'Wallis and Futuna', 'WF', 'WLF', 'Wallis and Futuna', '009', '061', 0, '681', 'WF.png'),
(882, 'Apia', 'Samoan', '882', 'tala (inv.)', 'WST', 'sene (inv.)', 'WS$', 2, 'Independent State of Samoa', 'WS', 'WSM', 'Samoa', '009', '061', 0, '685', 'WS.png'),
(887, 'San???a', 'Yemenite', '887', 'Yemeni rial', 'YER', 'fils (inv.)', '???', 2, 'Republic of Yemen', 'YE', 'YEM', 'Yemen', '142', '145', 0, '967', 'YE.png'),
(894, 'Lusaka', 'Zambian', '894', 'Zambian kwacha (inv.)', 'ZMW', 'ngwee (inv.)', 'ZK', 2, 'Republic of Zambia', 'ZM', 'ZMB', 'Zambia', '002', '014', 0, '260', 'ZM.png');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_second_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `user_second_id`, `created_at`, `updated_at`) VALUES
(1, 1, 26, '2019-01-24 17:14:21', '2019-01-24 17:14:21'),
(2, 34, 26, '2019-02-02 18:40:50', '2019-02-02 18:40:50'),
(3, 34, 21, '2019-02-02 18:40:54', '2019-02-02 18:40:54'),
(5, 34, 10, '2019-02-02 18:40:59', '2019-02-02 18:40:59'),
(6, 34, 13, '2019-02-02 18:44:19', '2019-02-02 18:44:19'),
(7, 61, 58, '2019-04-01 16:01:52', '2019-04-01 16:01:52'),
(8, 92, 85, '2019-06-16 22:08:11', '2019-06-16 22:08:11'),
(9, 92, 10, '2019-06-16 22:10:02', '2019-06-16 22:10:02'),
(10, 126, 121, '2019-09-01 07:10:22', '2019-09-01 07:10:22'),
(11, 127, 121, '2019-09-10 04:51:54', '2019-09-10 04:51:54'),
(13, 159, 155, '2019-12-22 04:36:15', '2019-12-22 04:36:15'),
(15, 172, 160, '2020-01-19 17:17:14', '2020-01-19 17:17:14'),
(16, 172, 103, '2020-01-19 17:21:47', '2020-01-19 17:21:47'),
(17, 181, 176, '2020-02-01 07:48:56', '2020-02-01 07:48:56'),
(18, 181, 177, '2020-02-01 07:49:01', '2020-02-01 07:49:01'),
(19, 181, 90, '2020-02-01 07:52:12', '2020-02-01 07:52:12'),
(22, 198, 19, '2020-02-28 08:17:43', '2020-02-28 08:17:43'),
(24, 216, 196, '2020-04-04 06:11:25', '2020-04-04 06:11:25'),
(25, 216, 189, '2020-04-04 06:11:58', '2020-04-04 06:11:58'),
(26, 216, 184, '2020-04-04 06:12:11', '2020-04-04 06:12:11'),
(27, 216, 182, '2020-04-04 06:12:57', '2020-04-04 06:12:57'),
(28, 216, 177, '2020-04-04 06:13:40', '2020-04-04 06:13:40'),
(29, 216, 176, '2020-04-04 06:20:14', '2020-04-04 06:20:14'),
(30, 216, 175, '2020-04-04 06:20:23', '2020-04-04 06:20:23'),
(31, 216, 158, '2020-04-04 06:22:07', '2020-04-04 06:22:07'),
(32, 216, 155, '2020-04-04 06:23:12', '2020-04-04 06:23:12'),
(33, 216, 152, '2020-04-04 06:24:03', '2020-04-04 06:24:03'),
(34, 216, 141, '2020-04-04 06:24:34', '2020-04-04 06:24:34'),
(35, 216, 136, '2020-04-04 06:25:16', '2020-04-04 06:25:16'),
(36, 216, 135, '2020-04-04 06:25:59', '2020-04-04 06:25:59'),
(37, 216, 121, '2020-04-04 06:26:48', '2020-04-04 06:26:48'),
(38, 216, 115, '2020-04-04 06:27:28', '2020-04-04 06:27:28'),
(39, 216, 10, '2020-04-04 06:28:32', '2020-04-04 06:28:32'),
(40, 216, 13, '2020-04-04 06:29:07', '2020-04-04 06:29:07'),
(41, 216, 26, '2020-04-04 06:30:15', '2020-04-04 06:30:15'),
(42, 216, 47, '2020-04-04 06:31:38', '2020-04-04 06:31:38'),
(43, 216, 69, '2020-04-04 06:33:03', '2020-04-04 06:33:03'),
(44, 216, 84, '2020-04-04 06:33:45', '2020-04-04 06:33:45'),
(45, 216, 85, '2020-04-04 06:34:49', '2020-04-04 06:34:49'),
(46, 216, 90, '2020-04-04 06:35:46', '2020-04-04 06:35:46'),
(47, 216, 94, '2020-04-04 06:36:14', '2020-04-04 06:36:14'),
(48, 216, 101, '2020-04-04 06:37:28', '2020-04-04 06:37:28'),
(49, 216, 103, '2020-04-04 06:37:59', '2020-04-04 06:37:59'),
(50, 216, 105, '2020-04-04 06:38:31', '2020-04-04 06:38:31'),
(51, 230, 227, '2020-06-23 22:02:27', '2020-06-23 22:02:27'),
(52, 1, 262, '2021-01-13 07:33:30', '2021-01-13 07:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `front_sliders`
--

CREATE TABLE `front_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_sliders`
--

INSERT INTO `front_sliders` (`id`, `image_name`, `image_url`, `addedby_id`, `created_at`, `updated_at`) VALUES
(26, 'n4ShWBne1609234068.jpeg', 'storage/slider/n4ShWBne1609234068.jpeg', 1, '2020-12-29 09:27:48', '2020-12-29 09:27:48'),
(27, '9c9KauMy1609234085.jpeg', 'storage/slider/9c9KauMy1609234085.jpeg', 1, '2020-12-29 09:28:05', '2020-12-29 09:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image_title`, `image_name`, `addedby_id`, `created_at`, `updated_at`) VALUES
(1, 'Success Stories', 'KrUx9iNO1611385865.jpg', 1, '2021-01-23 01:11:05', '2021-01-23 01:11:05'),
(2, 'Success Stories', 'KOdD3Fk71611385865.jpg', 1, '2021-01-23 01:11:05', '2021-01-23 01:11:05'),
(3, 'Success Stories', 'flxQ4Gse1611385866.jpg', 1, '2021-01-23 01:11:06', '2021-01-23 01:11:06'),
(4, 'Success Stories', 'xjUG4XVN1611385867.png', 1, '2021-01-23 01:11:07', '2021-01-23 01:11:07'),
(5, 'Success Stories', 'shyMMIy31611385868.jpg', 1, '2021-01-23 01:11:08', '2021-01-23 01:11:08'),
(6, 'Success Stories', 'krp99OkY1611385869.jpg', 1, '2021-01-23 01:11:09', '2021-01-23 01:11:09'),
(7, 'Success Stories', 'G4fb3CvL1611385869.jpg', 1, '2021-01-23 01:11:09', '2021-01-23 01:11:09'),
(8, 'Success Stories', '22gB3tvq1611385869.jpg', 1, '2021-01-23 01:11:09', '2021-01-23 01:11:09'),
(9, 'Success Stories', 'j5Oxwn211611385870.jpg', 1, '2021-01-23 01:11:10', '2021-01-23 01:11:10'),
(10, 'Success Stories', 'mtoyoqmX1611385870.jpg', 1, '2021-01-23 01:11:10', '2021-01-23 01:11:10'),
(11, 'Success Stories', '13GGqrEb1611385870.jpg', 1, '2021-01-23 01:11:10', '2021-01-23 01:11:10'),
(12, 'Success Stories', 'kA8vkVlz1611385870.jpg', 1, '2021-01-23 01:11:11', '2021-01-23 01:11:11'),
(13, 'Success Stories', 'OvkGLcfr1611385871.jpg', 1, '2021-01-23 01:11:12', '2021-01-23 01:11:12'),
(14, 'Success Stories', 'qqZCTcW71611385872.jpg', 1, '2021-01-23 01:11:13', '2021-01-23 01:11:13'),
(15, 'Success Stories', 'SO8jSZTu1611385873.jpg', 1, '2021-01-23 01:11:13', '2021-01-23 01:11:13'),
(16, 'Success Stories', 'q01gL2Xm1611385873.jpg', 1, '2021-01-23 01:11:13', '2021-01-23 01:11:13'),
(17, 'Success Stories', 'EeSwv1GP1611385874.jpg', 1, '2021-01-23 01:11:14', '2021-01-23 01:11:14'),
(18, 'Success Stories', '6X8p4NRi1611385874.jpg', 1, '2021-01-23 01:11:14', '2021-01-23 01:11:14'),
(19, 'Success Stories', 'l2MFwlBh1611385874.jpg', 1, '2021-01-23 01:11:14', '2021-01-23 01:11:14'),
(20, 'Success Stories', 'Uc71162F1611385874.jpg', 1, '2021-01-23 01:11:14', '2021-01-23 01:11:14'),
(21, 'Success Stories', 'hS0osEdl1611390885.jpg', 1, '2021-01-23 02:34:45', '2021-01-23 02:34:45'),
(22, 'Success Stories', 'RL9f0Flu1611390886.jpg', 1, '2021-01-23 02:34:46', '2021-01-23 02:34:46'),
(23, 'Success Stories', 'O1U2stgl1611390887.jpg', 1, '2021-01-23 02:34:47', '2021-01-23 02:34:47'),
(24, 'Success Stories', 'MKcjpHtZ1611390887.png', 1, '2021-01-23 02:34:47', '2021-01-23 02:34:47'),
(25, 'Success Stories', '8IUUfsEf1611390887.jpg', 1, '2021-01-23 02:34:47', '2021-01-23 02:34:47'),
(26, 'Success Stories', '7fCPUsdx1611390888.jpg', 1, '2021-01-23 02:34:48', '2021-01-23 02:34:48'),
(27, 'Success Stories', 'xU92lj611611390888.jpg', 1, '2021-01-23 02:34:48', '2021-01-23 02:34:48'),
(28, 'Success Stories', 'UpiO2KIo1611390914.jpg', 1, '2021-01-23 02:35:14', '2021-01-23 02:35:14'),
(29, 'Success Stories', 'l7TuNLJf1611390914.jpg', 1, '2021-01-23 02:35:14', '2021-01-23 02:35:14'),
(30, 'Success Stories', 'G8rn1Pe81611390915.jpg', 1, '2021-01-23 02:35:15', '2021-01-23 02:35:15'),
(31, 'Success Stories', 'Lhecq0RI1611390915.jpg', 1, '2021-01-23 02:35:15', '2021-01-23 02:35:15'),
(32, 'Success Stories', 'SjI158o81611390915.jpg', 1, '2021-01-23 02:35:15', '2021-01-23 02:35:15'),
(33, 'Success Stories', 'VfpWR3dI1611390915.jpg', 1, '2021-01-23 02:35:15', '2021-01-23 02:35:15'),
(34, 'Success Stories', 'BhYDr5mz1611390915.jpg', 1, '2021-01-23 02:35:16', '2021-01-23 02:35:16'),
(35, 'Success Stories', 'Ino1hPcH1611390916.jpg', 1, '2021-01-23 02:35:16', '2021-01-23 02:35:16'),
(36, 'Success Stories', 'PjLk2o4e1611390916.jpg', 1, '2021-01-23 02:35:16', '2021-01-23 02:35:16'),
(37, 'Success Stories', 'OxBQj5Tr1611390916.jpg', 1, '2021-01-23 02:35:16', '2021-01-23 02:35:16'),
(38, 'Success Stories', 'UKjpP7Os1611390969.jpg', 1, '2021-01-23 02:36:09', '2021-01-23 02:36:09'),
(39, 'Success Stories', 'KO42y5BU1611390969.jpg', 1, '2021-01-23 02:36:09', '2021-01-23 02:36:09'),
(40, 'Success Stories', 'OBoLMIUw1611390970.jpg', 1, '2021-01-23 02:36:10', '2021-01-23 02:36:10'),
(41, 'Success Stories', 'NN6VqW2w1611390970.jpg', 1, '2021-01-23 02:36:10', '2021-01-23 02:36:10'),
(42, 'Success Stories', 'Qn7uV2KT1611390970.jpg', 1, '2021-01-23 02:36:10', '2021-01-23 02:36:10'),
(43, 'Success Stories', 'vNmHA5JP1611390971.jpg', 1, '2021-01-23 02:36:11', '2021-01-23 02:36:11'),
(44, 'Success Stories', 'unLHRuQN1611390972.jpg', 1, '2021-01-23 02:36:12', '2021-01-23 02:36:12'),
(45, 'Success Stories', 'zq9FK1g01611390972.jpg', 1, '2021-01-23 02:36:12', '2021-01-23 02:36:12'),
(46, 'Success Stories', '4ht0SIio1611390973.jpg', 1, '2021-01-23 02:36:13', '2021-01-23 02:36:13'),
(47, 'Success Stories', 's9VbIIWv1611390974.jpg', 1, '2021-01-23 02:36:14', '2021-01-23 02:36:14'),
(48, 'Success Stories', 'OBxG4KKJ1611391050.jpg', 1, '2021-01-23 02:37:30', '2021-01-23 02:37:30'),
(49, 'Success Stories', 'gyZ2OSls1611391050.jpg', 1, '2021-01-23 02:37:30', '2021-01-23 02:37:30'),
(50, 'Success Stories', 'x5p2r80F1611391051.jpg', 1, '2021-01-23 02:37:31', '2021-01-23 02:37:31'),
(51, 'Success Stories', 'mimDgdZc1611391052.jpg', 1, '2021-01-23 02:37:32', '2021-01-23 02:37:32'),
(52, 'Success Stories', 'v7lfn6d41611391053.jpg', 1, '2021-01-23 02:37:33', '2021-01-23 02:37:33'),
(53, 'Success Stories', '940xK9HY1611391054.jpg', 1, '2021-01-23 02:37:34', '2021-01-23 02:37:34'),
(54, 'Success Stories', '6xcILtOy1611391055.jpg', 1, '2021-01-23 02:37:35', '2021-01-23 02:37:35'),
(55, 'Success Stories', '9V4jPRwd1611391056.jpg', 1, '2021-01-23 02:37:36', '2021-01-23 02:37:36'),
(56, 'Success Stories', '0mswwyqn1611391057.jpg', 1, '2021-01-23 02:37:37', '2021-01-23 02:37:37'),
(57, 'Success Stories', 'JKJ4pvTk1611391058.jpg', 1, '2021-01-23 02:37:38', '2021-01-23 02:37:38'),
(58, 'Success Stories', 'LZUVNjd51611391060.jpg', 1, '2021-01-23 02:37:40', '2021-01-23 02:37:40'),
(59, 'Success Stories', '9HKsCApl1611391060.jpg', 1, '2021-01-23 02:37:40', '2021-01-23 02:37:40'),
(60, 'Success Stories', 'QWqYn5RU1611391061.jpg', 1, '2021-01-23 02:37:41', '2021-01-23 02:37:41'),
(61, 'Success Stories', 'vh5UYsQJ1611391062.jpg', 1, '2021-01-23 02:37:42', '2021-01-23 02:37:42'),
(62, 'Success Stories', 'utrsB1ux1611391062.jpg', 1, '2021-01-23 02:37:42', '2021-01-23 02:37:42'),
(63, 'Success Stories', 'BypCwuKq1611391062.jpg', 1, '2021-01-23 02:37:42', '2021-01-23 02:37:42'),
(64, 'Success Stories', 'Uhvmoj0Y1611391063.jpg', 1, '2021-01-23 02:37:43', '2021-01-23 02:37:43'),
(65, 'Success Stories', 'XKtMcohR1611391064.jpg', 1, '2021-01-23 02:37:44', '2021-01-23 02:37:44'),
(66, 'Success Stories', 'yE7WaG0i1611391064.jpg', 1, '2021-01-23 02:37:44', '2021-01-23 02:37:44'),
(67, 'Success Stories', 'avyRPZ691611391067.jpg', 1, '2021-01-23 02:37:47', '2021-01-23 02:37:47'),
(68, 'Success Stories', 'h67t4hUO1611391068.jpg', 1, '2021-01-23 02:37:48', '2021-01-23 02:37:48'),
(69, 'Success Stories', 'KaafMXLp1611391068.jpg', 1, '2021-01-23 02:37:48', '2021-01-23 02:37:48'),
(70, 'Success Stories', 'VbFlhYgE1611391069.jpg', 1, '2021-01-23 02:37:49', '2021-01-23 02:37:49'),
(71, 'Success Stories', '9ftWXTiB1611391070.jpg', 1, '2021-01-23 02:37:50', '2021-01-23 02:37:50'),
(72, 'Success Stories', 'OPmFcCXT1611391071.jpg', 1, '2021-01-23 02:37:51', '2021-01-23 02:37:51'),
(73, 'Success Stories', '85Mi5WG11611391071.jpg', 1, '2021-01-23 02:37:51', '2021-01-23 02:37:51'),
(74, 'Success Stories', 'M3Q4oneY1611391073.jpg', 1, '2021-01-23 02:37:53', '2021-01-23 02:37:53'),
(75, 'Success Stories', 'SfEHTnrt1611391074.jpg', 1, '2021-01-23 02:37:54', '2021-01-23 02:37:54'),
(76, 'Success Stories', 'Ab0bCxN41611391074.jpg', 1, '2021-01-23 02:37:54', '2021-01-23 02:37:54'),
(77, 'Success Stories', 'fwxq5ewh1611391074.jpg', 1, '2021-01-23 02:37:54', '2021-01-23 02:37:54'),
(78, 'Success Stories', 'w3MiwF4F1611391075.jpg', 1, '2021-01-23 02:37:55', '2021-01-23 02:37:55'),
(79, 'Success Stories', 'bjtwrQ861611391075.jpg', 1, '2021-01-23 02:37:55', '2021-01-23 02:37:55'),
(80, 'Success Stories', 'fqRJVOLL1611391075.jpg', 1, '2021-01-23 02:37:55', '2021-01-23 02:37:55'),
(81, 'Success Stories', 'O5DTJDYt1611391075.jpg', 1, '2021-01-23 02:37:55', '2021-01-23 02:37:55'),
(82, 'Success Stories', 'FuCB8j461611391076.jpg', 1, '2021-01-23 02:37:56', '2021-01-23 02:37:56'),
(83, 'Success Stories', 'DABnj16m1611391158.jpg', 1, '2021-01-23 02:39:18', '2021-01-23 02:39:18'),
(84, 'Success Stories', 'ueJn0qo41611391159.jpg', 1, '2021-01-23 02:39:19', '2021-01-23 02:39:19'),
(85, 'Success Stories', '5Yeegys41611391160.jpg', 1, '2021-01-23 02:39:20', '2021-01-23 02:39:20'),
(86, 'Success Stories', '7c8F90Oy1611391161.jpg', 1, '2021-01-23 02:39:21', '2021-01-23 02:39:21'),
(87, 'Success Stories', 'R0YUa0hq1611391163.jpg', 1, '2021-01-23 02:39:23', '2021-01-23 02:39:23'),
(88, 'Success Stories', 'olvw3sk91611391165.jpg', 1, '2021-01-23 02:39:25', '2021-01-23 02:39:25'),
(89, 'Success Stories', 'd1BbMmU11611391167.jpg', 1, '2021-01-23 02:39:27', '2021-01-23 02:39:27'),
(90, 'Success Stories', 'rw12FrnF1611391168.jpg', 1, '2021-01-23 02:39:28', '2021-01-23 02:39:28'),
(91, 'Success Stories', 'hQy2aFqH1611391169.jpg', 1, '2021-01-23 02:39:29', '2021-01-23 02:39:29'),
(92, 'Success Stories', '45D0Kfd21611391169.jpg', 1, '2021-01-23 02:39:29', '2021-01-23 02:39:29'),
(93, 'Success Stories', 'cJbXQOlX1611391169.jpg', 1, '2021-01-23 02:39:29', '2021-01-23 02:39:29'),
(94, 'Success Stories', 'hvuWDmBN1611391170.jpg', 1, '2021-01-23 02:39:30', '2021-01-23 02:39:30'),
(95, 'Success Stories', 'cEZ7WgPd1611391170.jpg', 1, '2021-01-23 02:39:30', '2021-01-23 02:39:30'),
(96, 'Success Stories', '6IRG7OJV1611391171.jpg', 1, '2021-01-23 02:39:31', '2021-01-23 02:39:31'),
(97, 'Success Stories', '569r8zbK1611391172.jpg', 1, '2021-01-23 02:39:32', '2021-01-23 02:39:32'),
(98, 'Success Stories', '4o9pomel1611391173.jpg', 1, '2021-01-23 02:39:33', '2021-01-23 02:39:33'),
(99, 'Success Stories', 'hQPwe7aM1611391176.jpg', 1, '2021-01-23 02:39:36', '2021-01-23 02:39:36'),
(100, 'Success Stories', 'qv3GGKmQ1611391176.jpg', 1, '2021-01-23 02:39:36', '2021-01-23 02:39:36'),
(101, 'Success Stories', 'aA0CB9ZN1611391177.jpg', 1, '2021-01-23 02:39:37', '2021-01-23 02:39:37'),
(102, 'Success Stories', '9XaQNbhZ1611391178.jpg', 1, '2021-01-23 02:39:38', '2021-01-23 02:39:38'),
(103, 'Success Stories', '6R3ZQfqR1611391178.jpg', 1, '2021-01-23 02:39:38', '2021-01-23 02:39:38'),
(104, 'Success Stories', 'Lr0Lxh0F1611391179.jpg', 1, '2021-01-23 02:39:39', '2021-01-23 02:39:39'),
(105, 'Success Stories', 'J3hqLXv81611391180.jpg', 1, '2021-01-23 02:39:40', '2021-01-23 02:39:40'),
(106, 'Success Stories', 'cWlrMQ1o1611391283.jpg', 1, '2021-01-23 02:41:23', '2021-01-23 02:41:23'),
(107, 'Success Stories', 'P7dmrYEY1611391284.jpg', 1, '2021-01-23 02:41:24', '2021-01-23 02:41:24'),
(108, 'Success Stories', 'FYyXPFfj1611391285.jpg', 1, '2021-01-23 02:41:25', '2021-01-23 02:41:25'),
(109, 'Success Stories', 'eK10kH0t1611391286.jpg', 1, '2021-01-23 02:41:26', '2021-01-23 02:41:26'),
(110, 'Success Stories', 'jhHpZogw1611391287.jpg', 1, '2021-01-23 02:41:27', '2021-01-23 02:41:27'),
(111, 'Success Stories', 'uwztuqW71611391287.jpg', 1, '2021-01-23 02:41:27', '2021-01-23 02:41:27'),
(112, 'Success Stories', 'xT0vPIrH1611391287.jpg', 1, '2021-01-23 02:41:27', '2021-01-23 02:41:27'),
(113, 'Success Stories', 'WRdl4DEs1611391287.jpg', 1, '2021-01-23 02:41:27', '2021-01-23 02:41:27'),
(114, 'Success Stories', '7BEybS4h1611391288.jpg', 1, '2021-01-23 02:41:28', '2021-01-23 02:41:28'),
(115, 'Success Stories', 'sKq0loxE1611391288.jpg', 1, '2021-01-23 02:41:28', '2021-01-23 02:41:28'),
(116, 'Success Stories', 'TSnG4DcD1611391288.jpg', 1, '2021-01-23 02:41:28', '2021-01-23 02:41:28'),
(117, 'Success Stories', 'pXYTHPMe1611391288.jpg', 1, '2021-01-23 02:41:28', '2021-01-23 02:41:28'),
(118, 'Success Stories', 'cVxRSOyE1611391288.jpg', 1, '2021-01-23 02:41:28', '2021-01-23 02:41:28'),
(119, 'Success Stories', 'tVINeJn01611391735.jpg', 1, '2021-01-23 02:48:56', '2021-01-23 02:48:56'),
(120, 'Success Stories', 'n5jFcrAN1611391801.jpg', 1, '2021-01-23 02:50:01', '2021-01-23 02:50:01'),
(121, 'Success Stories', 'LEhssLe41611391801.jpg', 1, '2021-01-23 02:50:01', '2021-01-23 02:50:01'),
(122, 'Success Stories', 'OmQrE4eg1611391802.jpg', 1, '2021-01-23 02:50:02', '2021-01-23 02:50:02'),
(123, 'Success Stories', 'ujp2hRsR1611391802.jpg', 1, '2021-01-23 02:50:02', '2021-01-23 02:50:02'),
(124, 'Success Stories', 'brErRFQl1611391802.jpg', 1, '2021-01-23 02:50:02', '2021-01-23 02:50:02'),
(125, 'Success Stories', 'uZcEnnRh1611391802.jpg', 1, '2021-01-23 02:50:02', '2021-01-23 02:50:02'),
(126, 'Success Stories', 'PsN92siR1611391802.jpg', 1, '2021-01-23 02:50:02', '2021-01-23 02:50:02'),
(128, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'dU6poazN1614499110.jpg', 16, '2021-02-28 01:58:30', '2021-02-28 01:58:30'),
(129, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'Yx4Gx5gY1614499110.jpg', 16, '2021-02-28 01:58:30', '2021-02-28 01:58:30'),
(130, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'CKaGcEdw1614499110.jpg', 16, '2021-02-28 01:58:30', '2021-02-28 01:58:30'),
(131, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'DORJWbn71614499111.jpg', 16, '2021-02-28 01:58:31', '2021-02-28 01:58:31'),
(135, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'MgGpTeZs1614499111.jpg', 16, '2021-02-28 01:58:31', '2021-02-28 01:58:31'),
(136, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'S7Qhbfts1614499111.jpg', 16, '2021-02-28 01:58:32', '2021-02-28 01:58:32'),
(137, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'UvnSo8Lg1614499112.jpg', 16, '2021-02-28 01:58:32', '2021-02-28 01:58:32'),
(141, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'isN4pLPJ1614499112.jpg', 16, '2021-02-28 01:58:32', '2021-02-28 01:58:32'),
(142, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'ydqTigQQ1614499112.jpg', 16, '2021-02-28 01:58:32', '2021-02-28 01:58:32'),
(143, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'GPJQjF0M1614499112.jpg', 16, '2021-02-28 01:58:32', '2021-02-28 01:58:32'),
(144, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'RnNfoURe1614499112.jpg', 16, '2021-02-28 01:58:33', '2021-02-28 01:58:33'),
(145, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'ThC4xfqP1614499113.jpg', 16, '2021-02-28 01:58:33', '2021-02-28 01:58:33'),
(146, 'Akij Group of Companies Managing Director\'s Wedding Program-26-02-2021', 'cIl4sOjy1614499113.jpg', 16, '2021-02-28 01:58:33', '2021-02-28 01:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `publish_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'temp',
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `title`, `description`, `date`, `publish_status`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(11, '??????  ????????????  ??????????????????  ?????????  ????????????  ??????????????????', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2019-12-24', 'published', 16, 1, '2020-01-02 18:49:26', '2021-01-20 09:53:30'),
(13, 'Our success, Wishing you joy,', 'love and happiness on your wedding day and as you begin your new life together.', '2020-01-02', 'published', 16, 16, '2020-01-02 20:22:13', '2020-03-16 22:51:21'),
(18, 'MSBD, CEO with BD No 01 Model Mr. Nobel', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2020-12-15', 'published', 16, 1, '2020-03-16 22:53:15', '2021-01-19 02:30:10'),
(19, 'MSBD Ceo Mr. Shakawat Hossain Shuvo with Honorable Home Minister', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2020-12-14', 'published', 1, 16, '2020-12-14 20:27:55', '2020-12-16 09:41:44'),
(20, 'MSBD CEO Mr. Shakawat Hossain Shuvo With Honorable Minister', 'Social Award', '2020-12-01', 'published', 1, 16, '2020-12-14 20:29:43', '2020-12-16 09:43:04'),
(21, 'Biye Utsab', 'Social Program', '2020-12-01', 'published', 1, 16, '2020-12-14 20:39:57', '2020-12-16 09:43:46'),
(22, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-20', 'published', 1, 1, '2020-12-15 05:45:04', '2021-01-20 10:05:03'),
(23, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', NULL, 'published', 1, 1, '2021-01-20 10:05:07', '2021-01-20 10:06:41'),
(24, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-20', 'published', 1, 1, '2021-01-20 10:06:41', '2021-01-20 10:07:52'),
(25, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-20', 'published', 1, 1, '2021-01-20 10:07:53', '2021-01-20 10:09:07'),
(27, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-20', 'published', 1, 1, '2021-01-20 10:09:49', '2021-01-20 10:11:28'),
(28, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 10:11:29', '2021-01-20 22:00:10'),
(29, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:00:12', '2021-01-20 22:01:12'),
(30, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:01:13', '2021-01-20 22:02:06'),
(31, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:02:07', '2021-01-20 22:02:55'),
(32, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:02:56', '2021-01-20 22:04:39'),
(33, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:04:39', '2021-01-20 22:11:05'),
(34, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:11:05', '2021-01-20 22:13:07'),
(35, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:13:08', '2021-01-20 22:24:01'),
(36, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:24:02', '2021-01-20 22:26:43'),
(37, 'Success Story of Marriage Solution', 'Marriage Solution BD, the world\'s largest online matchmaking site was founded with one simple objective - to provide a superior matchmaking experience all over the world. The company pioneered online matchmaking when it launched in 2012 and continues to lead the exciting matrimony category after more than 6 years. MarriageSolutionBD.com has redefined the way people meet for marriage and has touched the lives of 1 Million people all over the world and helped over 3 Million people find their matches. Amongst many other awards MarriageSolutionBD.com was recently recognized amongst the world\'s 50 Most Innovative Companies by Fast Company.', '2021-01-21', 'published', 1, 1, '2021-01-20 22:26:44', '2021-01-20 22:28:26'),
(38, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:26', '2021-01-20 22:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery_items`
--

CREATE TABLE `image_gallery_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_gallery_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_credit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'temp',
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_gallery_items`
--

INSERT INTO `image_gallery_items` (`id`, `image_gallery_id`, `title`, `description`, `photo_credit`, `img_url`, `publish_status`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(499, 11, '??????  ????????????  ??????????????????  ?????????  ????????????  ??????????????????', '?????????????????????  ????????????  ????????????????????????  ????????????  ???????????????  ?????????', '????????????????????? ????????????????????? ????????????', 'https://www.marriagesolutionbd.com/storage/media/image/Yulk20121537.jpg', 'published', 16, 1, '2020-01-02 18:49:26', '2020-12-14 20:21:21'),
(539, 13, 'Allah has bound you together in the sacred union of matrimony.', 'May his love always be showered upon you and bless you with eternal happiness!', 'MSBD', 'https://www.marriagesolutionbd.com/storage/media/image/ScDl20121538.jpg', 'published', 16, 1, '2020-01-02 20:22:13', '2020-12-14 20:18:00'),
(639, 13, 'Allah has bound you together in the sacred union of matrimony.', 'May his love always be showered upon you and bless you with eternal happiness!', 'MSBD', 'https://www.marriagesolutionbd.com/storage/media/image/Yulk20121537.jpg', 'published', 16, 1, '2020-03-16 22:44:39', '2020-12-14 20:19:08'),
(640, 13, 'Our success, Wishing you joy,', 'love and happiness on your wedding day and as you begin your new life together.', 'MSBD', 'https://www.marriagesolutionbd.com/storage/media/image/95YW20121536.jpg', 'published', 16, 1, '2020-03-16 22:44:39', '2020-12-14 20:19:08'),
(695, 18, 'Shuvo sir with Actor Nobel sir', 'Social Activities', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/mxv620121536.jpg', 'published', 16, 1, '2020-03-16 22:53:15', '2020-12-14 20:27:12'),
(813, 19, 'Our Sir with Honorable Minister', 'At VVIP Program', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/XSG520121536.jpg', 'published', 1, 1, '2020-12-14 20:27:55', '2020-12-14 20:29:20'),
(833, 20, 'Honorable Minister', 'Social Award', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/Ckfl20121536.jpg', 'published', 1, 1, '2020-12-14 20:29:43', '2020-12-14 20:39:33'),
(853, 21, 'Biye Utsab', 'Speaking Shuvo Sir', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/H6rt20121536.jpg', 'published', 1, 1, '2020-12-14 20:39:58', '2020-12-15 05:44:44'),
(873, 22, 'Success Story of Marriage Solution', 'Success Story of Marriage Solution', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/0IlR21012034.jpg', 'published', 1, 1, '2020-12-15 05:45:04', '2021-01-20 10:05:00'),
(974, 18, 'uuuu', 'jkhgjjklh', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/XDV621011814.jpg', 'published', 1, 1, '2021-01-19 02:25:33', '2021-01-19 02:29:53'),
(1092, 23, 'title', 'desc', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/WMoc21012023.jpg', 'published', 1, 1, '2021-01-20 10:05:07', '2021-01-20 10:06:38'),
(1112, 24, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/U7Sw21012024.jpg', 'published', 1, 1, '2021-01-20 10:06:42', '2021-01-20 10:07:49'),
(1132, 25, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/gHKs20121538.jpg', 'published', 1, 1, '2021-01-20 10:07:53', '2021-01-20 10:08:37'),
(1172, 27, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/04cG21012032.jpg', 'published', 1, 1, '2021-01-20 10:09:49', '2021-01-20 21:57:21'),
(1192, 28, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/dEiu21012035.jpg', 'published', 1, 1, '2021-01-20 10:11:29', '2021-01-20 21:59:43'),
(1232, 29, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/2rHr21012034.jpg', 'published', 1, 1, '2021-01-20 22:00:12', '2021-01-20 22:00:45'),
(1252, 30, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/PHQ021012034.jpg', 'published', 1, 1, '2021-01-20 22:01:13', '2021-01-20 22:01:40'),
(1312, 33, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/D0tu21012033.jpg', 'published', 1, 1, '2021-01-20 22:04:39', '2021-01-20 22:10:24'),
(1332, 31, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/KAJn21012028.jpg', 'published', 1, 1, '2021-01-20 22:05:25', '2021-01-20 22:06:11'),
(1353, 32, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/kZQs21012030.jpg', 'published', 1, 1, '2021-01-20 22:05:27', '2021-01-20 22:06:44'),
(1395, 34, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/L7ZZ21012026.jpg', 'published', 1, 1, '2021-01-20 22:11:06', '2021-01-20 22:12:38'),
(1415, 35, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/l8qj21012128.jpg', 'published', 1, 1, '2021-01-20 22:13:08', '2021-01-20 22:23:31'),
(1455, 37, 't', 'd', NULL, 'https://www.marriagesolutionbd.com/storage/media/image/cd5d21012159.jpg', 'published', 1, 1, '2021-01-20 22:26:45', '2021-01-20 22:27:56'),
(1475, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:26', '2021-01-20 22:28:26'),
(1476, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:26', '2021-01-20 22:28:26'),
(1477, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:26', '2021-01-20 22:28:26'),
(1478, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1479, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1480, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1481, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1482, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1483, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1484, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1485, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1486, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1487, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1488, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1489, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1490, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1491, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1492, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1493, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:27', '2021-01-20 22:28:27'),
(1494, 38, NULL, NULL, NULL, NULL, 'temp', 1, NULL, '2021-01-20 22:28:28', '2021-01-20 22:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_original_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_mime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `file_original_name`, `file_mime`, `file_ext`, `file_size`, `file_type`, `width`, `height`, `file_url`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(6, 'Qi1a18113050.jpg', 'with_nobel.jpg', 'image/jpeg', 'jpg', '7802', 'image', '259', '194', 'storage/media/image/Qi1a18113050.jpg', 1, NULL, '2018-11-30 14:37:50', '2018-11-30 14:37:50'),
(17, 'BfHT18121531.jpg', '15231725_1801189803487462_1724167978_o.jpg', 'image/jpeg', 'jpg', '426360', 'image', '2048', '1536', 'storage/media/image/BfHT18121531.jpg', 1, NULL, '2018-12-15 13:58:31', '2018-12-15 13:58:31'),
(23, 'RlvW19021030.jpg', '20171007_164026.jpg', 'image/jpeg', 'jpg', '2679707', 'image', '3264', '1836', 'storage/media/image/RlvW19021030.jpg', 16, NULL, '2019-02-10 15:27:32', '2019-02-10 15:27:32'),
(24, 'sknt19021044.jpg', '20171007_124551.jpg', 'image/jpeg', 'jpg', '1930689', 'image', '3264', '1836', 'storage/media/image/sknt19021044.jpg', 16, NULL, '2019-02-10 15:28:44', '2019-02-10 15:28:44'),
(25, 'g56q19021044.jpg', '20171007_130415.jpg', 'image/jpeg', 'jpg', '1545165', 'image', '3264', '1836', 'storage/media/image/g56q19021044.jpg', 16, NULL, '2019-02-10 15:28:46', '2019-02-10 15:28:46'),
(26, 'ZOGf19021046.jpg', '20171007_164026.jpg', 'image/jpeg', 'jpg', '2679707', 'image', '3264', '1836', 'storage/media/image/ZOGf19021046.jpg', 16, NULL, '2019-02-10 15:28:48', '2019-02-10 15:28:48'),
(27, 'U58v19021048.jpg', '20171007_164119.jpg', 'image/jpeg', 'jpg', '2777915', 'image', '3264', '1836', 'storage/media/image/U58v19021048.jpg', 16, NULL, '2019-02-10 15:28:51', '2019-02-10 15:28:51'),
(29, 'rwR319021050.jpg', '37997769_2118049688468137_6508387045704990720_n.jpg', 'image/jpeg', 'jpg', '133087', 'image', '1548', '1161', 'storage/media/image/rwR319021050.jpg', 16, NULL, '2019-02-10 15:53:50', '2019-02-10 15:53:50'),
(30, 'yEK719021050.jpg', '51454143_253085018912257_9050123565919109120_n.jpg', 'image/jpeg', 'jpg', '84729', 'image', '640', '960', 'storage/media/image/yEK719021050.jpg', 16, NULL, '2019-02-10 15:53:50', '2019-02-10 15:53:50'),
(31, '1SQp19021050.jpg', '51763969_984570085000572_3953174674757648384_n.jpg', 'image/jpeg', 'jpg', '272748', 'image', '1440', '1313', 'storage/media/image/1SQp19021050.jpg', 16, NULL, '2019-02-10 15:53:50', '2019-02-10 15:53:50'),
(32, '2aVa19021032.jpg', 'Rizvi.jpg', 'image/jpeg', 'jpg', '250439', 'image', '1080', '1080', 'storage/media/image/2aVa19021032.jpg', 16, NULL, '2019-02-10 16:00:32', '2019-02-10 16:00:32'),
(33, 'kObw19021054.jpg', '20171007_120501.jpg', 'image/jpeg', 'jpg', '2185314', 'image', '3264', '1836', 'storage/media/image/kObw19021054.jpg', 16, NULL, '2019-02-10 16:07:57', '2019-02-10 16:07:57'),
(34, '6MQx19021057.jpg', '20171007_120757.jpg', 'image/jpeg', 'jpg', '1927533', 'image', '3264', '1836', 'storage/media/image/6MQx19021057.jpg', 16, NULL, '2019-02-10 16:07:59', '2019-02-10 16:07:59'),
(35, 'y5Ah19021059.jpg', '20171007_122739.jpg', 'image/jpeg', 'jpg', '2211820', 'image', '3264', '1836', 'storage/media/image/y5Ah19021059.jpg', 16, NULL, '2019-02-10 16:08:01', '2019-02-10 16:08:01'),
(36, 'sGXT19021001.jpg', '20171007_125300.jpg', 'image/jpeg', 'jpg', '2254575', 'image', '3264', '1836', 'storage/media/image/sGXT19021001.jpg', 16, NULL, '2019-02-10 16:08:03', '2019-02-10 16:08:03'),
(37, 'LwGP19021003.jpg', '20171007_173336.jpg', 'image/jpeg', 'jpg', '2256007', 'image', '3264', '1836', 'storage/media/image/LwGP19021003.jpg', 16, NULL, '2019-02-10 16:08:05', '2019-02-10 16:08:05'),
(38, 'VuRP19021005.jpg', '20171008_155108.jpg', 'image/jpeg', 'jpg', '2099868', 'image', '3264', '1836', 'storage/media/image/VuRP19021005.jpg', 16, NULL, '2019-02-10 16:08:07', '2019-02-10 16:08:07'),
(39, 'hYeC19021007.jpg', '20171008_163954.jpg', 'image/jpeg', 'jpg', '2040549', 'image', '3264', '1836', 'storage/media/image/hYeC19021007.jpg', 16, NULL, '2019-02-10 16:08:09', '2019-02-10 16:08:09'),
(40, 'iPk419021009.jpg', '20171008_184214.jpg', 'image/jpeg', 'jpg', '2621093', 'image', '3264', '1836', 'storage/media/image/iPk419021009.jpg', 16, NULL, '2019-02-10 16:08:11', '2019-02-10 16:08:11'),
(43, '5lT219021139.jpg', '2.JPG', 'image/jpeg', 'jpg', '6191825', 'image', '4288', '2848', 'storage/media/image/5lT219021139.jpg', 16, NULL, '2019-02-11 23:36:47', '2019-02-11 23:36:47'),
(44, 'UF6j19021100.jpg', '3 - Copy.JPG', 'image/jpeg', 'jpg', '6607297', 'image', '4288', '2848', 'storage/media/image/UF6j19021100.jpg', 16, NULL, '2019-02-11 23:38:07', '2019-02-11 23:38:07'),
(45, 'bqfM19021107.jpg', '75955_727859967280766_1235408011148623765_n.jpg', 'image/jpeg', 'jpg', '59872', 'image', '960', '720', 'storage/media/image/bqfM19021107.jpg', 16, NULL, '2019-02-11 23:38:08', '2019-02-11 23:38:08'),
(46, 'LTll19021109.jpg', '10317767_727856300614466_6944133126680923408_o.jpg', 'image/jpeg', 'jpg', '348516', 'image', '2048', '1536', 'storage/media/image/LTll19021109.jpg', 16, NULL, '2019-02-11 23:38:09', '2019-02-11 23:38:09'),
(47, 'lrtV19021109.jpg', '10450095_727856350614461_5445268253155105141_o.jpg', 'image/jpeg', 'jpg', '399544', 'image', '1536', '2048', 'storage/media/image/lrtV19021109.jpg', 16, NULL, '2019-02-11 23:38:09', '2019-02-11 23:38:09'),
(48, 'qFvU19021148.jpg', '10494501_727855713947858_7524773234974576919_o.jpg', 'image/jpeg', 'jpg', '437973', 'image', '2048', '1536', 'storage/media/image/qFvU19021148.jpg', 16, NULL, '2019-02-11 23:38:48', '2019-02-11 23:38:48'),
(49, 'gebi19021148.jpg', '10575434_869441016455993_8445700596692807459_o - Copy.jpg', 'image/jpeg', 'jpg', '378035', 'image', '2048', '1536', 'storage/media/image/gebi19021148.jpg', 16, NULL, '2019-02-11 23:38:48', '2019-02-11 23:38:48'),
(50, 'g1Qu19021148.jpg', '11080478_869440916456003_3020002905753714943_o - Copy.jpg', 'image/jpeg', 'jpg', '303759', 'image', '1536', '2048', 'storage/media/image/g1Qu19021148.jpg', 16, NULL, '2019-02-11 23:38:48', '2019-02-11 23:38:48'),
(51, 'NqXp19021149.jpg', '14067964_1165477920185633_4232078193783085553_o.jpg', 'image/jpeg', 'jpg', '519382', 'image', '2048', '1536', 'storage/media/image/NqXp19021149.jpg', 16, NULL, '2019-02-11 23:38:49', '2019-02-11 23:38:49'),
(52, 'rEiE19021149.jpg', '14125646_1164645966935495_4888384518387366343_o.jpg', 'image/jpeg', 'jpg', '440933', 'image', '2048', '1536', 'storage/media/image/rEiE19021149.jpg', 16, NULL, '2019-02-11 23:38:49', '2019-02-11 23:38:49'),
(53, 'P1H719021120.jpg', '14708121_1218491031550988_1402017344521376902_n.jpg', 'image/jpeg', 'jpg', '86661', 'image', '720', '960', 'storage/media/image/P1H719021120.jpg', 16, NULL, '2019-02-11 23:40:20', '2019-02-11 23:40:20'),
(54, 'btQ319021120.jpg', '15000009_1240095389390552_8793283954180221935_o.jpg', 'image/jpeg', 'jpg', '308192', 'image', '1600', '900', 'storage/media/image/btQ319021120.jpg', 16, NULL, '2019-02-11 23:40:26', '2019-02-11 23:40:26'),
(55, 'u27T19021126.jpg', '16807606_10158325808135074_456589538473049255_n.jpg', 'image/jpeg', 'jpg', '76861', 'image', '750', '568', 'storage/media/image/u27T19021126.jpg', 16, NULL, '2019-02-11 23:40:26', '2019-02-11 23:40:26'),
(56, 'Wzvd19021126.jpg', '16903474_172735123228457_4628861516681440181_o.jpg', 'image/jpeg', 'jpg', '273609', 'image', '2048', '1361', 'storage/media/image/Wzvd19021126.jpg', 16, NULL, '2019-02-11 23:40:26', '2019-02-11 23:40:26'),
(57, 'AA6I19021126.jpg', '20161224_144141 - Copy.jpg', 'image/jpeg', 'jpg', '4994742', 'image', '4128', '3096', 'storage/media/image/AA6I19021126.jpg', 16, NULL, '2019-02-11 23:40:30', '2019-02-11 23:40:30'),
(58, '9upv19021130.jpg', '20161231_141056c.jpg', 'image/jpeg', 'jpg', '4063935', 'image', '3384', '1944', 'storage/media/image/9upv19021130.jpg', 16, NULL, '2019-02-11 23:40:34', '2019-02-11 23:40:34'),
(59, '44Xs19021134.jpg', '20161231_142009.jpg', 'image/jpeg', 'jpg', '4191783', 'image', '4128', '3096', 'storage/media/image/44Xs19021134.jpg', 16, NULL, '2019-02-11 23:40:38', '2019-02-11 23:40:38'),
(60, 'KaPd19021138.jpg', '20170103_221947c.jpg', 'image/jpeg', 'jpg', '5725919', 'image', '3240', '2112', 'storage/media/image/KaPd19021138.jpg', 16, NULL, '2019-02-11 23:40:45', '2019-02-11 23:40:45'),
(61, 'lHEx19021145.jpg', '20170104.jpg', 'image/jpeg', 'jpg', '805117', 'image', '1196', '790', 'storage/media/image/lHEx19021145.jpg', 16, NULL, '2019-02-11 23:40:45', '2019-02-11 23:40:45'),
(62, 'UWYR19021145.jpg', '20170107_215532 - Copy.jpg', 'image/jpeg', 'jpg', '5408815', 'image', '4128', '3096', 'storage/media/image/UWYR19021145.jpg', 16, NULL, '2019-02-11 23:40:51', '2019-02-11 23:40:51'),
(63, '99AO19021151.jpg', '20170114_231259c.jpg', 'image/jpeg', 'jpg', '5472781', 'image', '2634', '3048', 'storage/media/image/99AO19021151.jpg', 16, NULL, '2019-02-11 23:40:58', '2019-02-11 23:40:58'),
(64, 'ZYFS19021138.jpg', '20170428_220938.jpg', 'image/jpeg', 'jpg', '3645802', 'image', '4128', '3096', 'storage/media/image/ZYFS19021138.jpg', 16, NULL, '2019-02-11 23:43:41', '2019-02-11 23:43:41'),
(65, 'JeML19021141.jpg', '20170428_223641.jpg', 'image/jpeg', 'jpg', '3942396', 'image', '4128', '3096', 'storage/media/image/JeML19021141.jpg', 16, NULL, '2019-02-11 23:43:45', '2019-02-11 23:43:45'),
(66, 'lT3d19021145.jpg', '20170510_211700 - Copy.jpg', 'image/jpeg', 'jpg', '3583698', 'image', '4128', '3096', 'storage/media/image/lT3d19021145.jpg', 16, NULL, '2019-02-11 23:43:49', '2019-02-11 23:43:49'),
(67, 'gSWa19021149.jpg', '20170510_213133c - Copy.jpg', 'image/jpeg', 'jpg', '3907169', 'image', '2696', '3336', 'storage/media/image/gSWa19021149.jpg', 16, NULL, '2019-02-11 23:43:51', '2019-02-11 23:43:51'),
(68, 'bOOe19021151.jpg', '20170714_220853c.jpg', 'image/jpeg', 'jpg', '5835129', 'image', '2328', '4128', 'storage/media/image/bOOe19021151.jpg', 16, NULL, '2019-02-11 23:43:58', '2019-02-11 23:43:58'),
(69, 'jxiP19021158.jpg', '20170715_215343c.jpg', 'image/jpeg', 'jpg', '5078941', 'image', '3462', '3096', 'storage/media/image/jxiP19021158.jpg', 16, NULL, '2019-02-11 23:44:03', '2019-02-11 23:44:03'),
(70, 'TQS119021103.jpg', '20171102_212553.jpg', 'image/jpeg', 'jpg', '1278008', 'image', '3264', '1836', 'storage/media/image/TQS119021103.jpg', 16, NULL, '2019-02-11 23:46:03', '2019-02-11 23:46:03'),
(71, 'nVwk19021103.jpg', '20171102_221137c.jpg', 'image/jpeg', 'jpg', '2246386', 'image', '1980', '1740', 'storage/media/image/nVwk19021103.jpg', 16, NULL, '2019-02-11 23:46:05', '2019-02-11 23:46:05'),
(72, 'QhrP19021105.jpg', '20171219_131542.jpg', 'image/jpeg', 'jpg', '2314154', 'image', '3264', '1836', 'storage/media/image/QhrP19021105.jpg', 16, NULL, '2019-02-11 23:46:07', '2019-02-11 23:46:07'),
(73, 'mdII19021107.jpg', '20171219_154158.jpg', 'image/jpeg', 'jpg', '2398701', 'image', '3264', '1836', 'storage/media/image/mdII19021107.jpg', 16, NULL, '2019-02-11 23:46:09', '2019-02-11 23:46:09'),
(74, 'wcxz19021109.jpg', '20171220_142716.jpg', 'image/jpeg', 'jpg', '2544413', 'image', '3264', '1836', 'storage/media/image/wcxz19021109.jpg', 16, NULL, '2019-02-11 23:46:13', '2019-02-11 23:46:13'),
(75, '9NE419021113.jpg', '20171220_142934.jpg', 'image/jpeg', 'jpg', '2568264', 'image', '3264', '1836', 'storage/media/image/9NE419021113.jpg', 16, NULL, '2019-02-11 23:46:15', '2019-02-11 23:46:15'),
(76, 'aYIN19021115.jpg', '20171222_203648 - Copy.jpg', 'image/jpeg', 'jpg', '2007116', 'image', '3264', '1836', 'storage/media/image/aYIN19021115.jpg', 16, NULL, '2019-02-11 23:46:17', '2019-02-11 23:46:17'),
(77, 'EuUH19021117.jpg', '20180805_231806.jpg', 'image/jpeg', 'jpg', '2044637', 'image', '3264', '1836', 'storage/media/image/EuUH19021117.jpg', 16, NULL, '2019-02-11 23:46:17', '2019-02-11 23:46:17'),
(78, '4s0X19021117.jpg', '20180806_204152 - Copy.jpg', 'image/jpeg', 'jpg', '2361684', 'image', '3264', '1836', 'storage/media/image/4s0X19021117.jpg', 16, NULL, '2019-02-11 23:46:21', '2019-02-11 23:46:21'),
(79, 'IZwC19021139.jpg', '21441604_1937564343183340_575977778_o.jpg', 'image/jpeg', 'jpg', '242524', 'image', '2048', '1536', 'storage/media/image/IZwC19021139.jpg', 16, NULL, '2019-02-11 23:49:39', '2019-02-11 23:49:39'),
(80, '8eSz19021139.jpg', '22104746_1564161866983901_3146623416821838575_o.jpg', 'image/jpeg', 'jpg', '207089', 'image', '1920', '1440', 'storage/media/image/8eSz19021139.jpg', 16, NULL, '2019-02-11 23:49:39', '2019-02-11 23:49:39'),
(81, 'bBI719021139.jpg', '27021714_1229299453869305_8410517640964385606_o - Copy.jpg', 'image/jpeg', 'jpg', '200250', 'image', '1800', '1200', 'storage/media/image/bBI719021139.jpg', 16, NULL, '2019-02-11 23:49:39', '2019-02-11 23:49:39'),
(82, 'jOJe19021139.jpg', '37067156_2100821210190985_6543234885631344640_n.jpg', 'image/jpeg', 'jpg', '130703', 'image', '1756', '1690', 'storage/media/image/jOJe19021139.jpg', 16, NULL, '2019-02-11 23:49:39', '2019-02-11 23:49:39'),
(83, 'oZNv19021139.jpg', '37106212_2100821236857649_5866551342058700800_n.jpg', 'image/jpeg', 'jpg', '103454', 'image', '1268', '1680', 'storage/media/image/oZNv19021139.jpg', 16, NULL, '2019-02-11 23:49:39', '2019-02-11 23:49:39'),
(84, 'MjDG19021139.jpg', '37107659_2100821376857635_8594802014012047360_n.jpg', 'image/jpeg', 'jpg', '251949', 'image', '1548', '1161', 'storage/media/image/MjDG19021139.jpg', 16, NULL, '2019-02-11 23:49:41', '2019-02-11 23:49:41'),
(85, 'br8I19021141.jpg', '37116630_2100820883524351_1274843969599045632_n (1).jpg', 'image/jpeg', 'jpg', '123515', 'image', '1548', '1161', 'storage/media/image/br8I19021141.jpg', 16, NULL, '2019-02-11 23:49:41', '2019-02-11 23:49:41'),
(86, 'PsE419021141.jpg', '37123403_2100820920191014_4246963739317764096_n.jpg', 'image/jpeg', 'jpg', '160674', 'image', '1548', '1161', 'storage/media/image/PsE419021141.jpg', 16, NULL, '2019-02-11 23:49:41', '2019-02-11 23:49:41'),
(87, '9G0719021141.jpg', 'DSC_0198.JPG', 'image/jpeg', 'jpg', '11346703', 'image', '6016', '4000', 'storage/media/image/9G0719021141.jpg', 16, NULL, '2019-02-11 23:49:51', '2019-02-11 23:49:51'),
(88, 'y66219021151.jpg', 'DSC_0523c.jpg', 'image/jpeg', 'jpg', '9582174', 'image', '4200', '4000', 'storage/media/image/y66219021151.jpg', 16, NULL, '2019-02-11 23:50:01', '2019-02-11 23:50:01'),
(89, 'h9aA19021101.jpg', 'DSC_4282 - Copy.JPG', 'image/jpeg', 'jpg', '788903', 'image', '2144', '1424', 'storage/media/image/h9aA19021101.jpg', 16, NULL, '2019-02-11 23:50:01', '2019-02-11 23:50:01'),
(90, 'ls4E19021101.jpg', 'FB_IMG_1499080315052 - Copy.jpg', 'image/jpeg', 'jpg', '121816', 'image', '960', '540', 'storage/media/image/ls4E19021101.jpg', 16, NULL, '2019-02-11 23:50:01', '2019-02-11 23:50:01'),
(91, '9W4A19021101.jpg', 'FB_IMG_1499080554978.jpg', 'image/jpeg', 'jpg', '118828', 'image', '720', '960', 'storage/media/image/9W4A19021101.jpg', 16, NULL, '2019-02-11 23:50:01', '2019-02-11 23:50:01'),
(92, 'KYro19021101.jpg', 'FB_IMG_1521026152977.jpg', 'image/jpeg', 'jpg', '116321', 'image', '1080', '720', 'storage/media/image/KYro19021101.jpg', 16, NULL, '2019-02-11 23:50:01', '2019-02-11 23:50:01'),
(93, 'F2lh19021101.jpg', 'FB_IMG_1521026162862.jpg', 'image/jpeg', 'jpg', '109334', 'image', '1080', '720', 'storage/media/image/F2lh19021101.jpg', 16, NULL, '2019-02-11 23:50:01', '2019-02-11 23:50:01'),
(94, '3irU19021101.jpg', 'IMG_5386.JPG', 'image/jpeg', 'jpg', '227711', 'image', '960', '720', 'storage/media/image/3irU19021101.jpg', 16, NULL, '2019-02-11 23:50:03', '2019-02-11 23:50:03'),
(95, 'gcHE19021103.jpg', 'IMG_7551.JPG', 'image/jpeg', 'jpg', '1085920', 'image', '5184', '3456', 'storage/media/image/gcHE19021103.jpg', 16, NULL, '2019-02-11 23:50:03', '2019-02-11 23:50:03'),
(96, 'rP1219021103.jpg', 'IMG_20170121_135023.jpg', 'image/jpeg', 'jpg', '2454378', 'image', '3840', '2160', 'storage/media/image/rP1219021103.jpg', 16, NULL, '2019-02-11 23:50:05', '2019-02-11 23:50:05'),
(97, '2b7719021106.jpg', 'IMG_20170216_222613c.jpg', 'image/jpeg', 'jpg', '4022985', 'image', '3840', '2160', 'storage/media/image/2b7719021106.jpg', 16, NULL, '2019-02-11 23:50:10', '2019-02-11 23:50:10'),
(98, 'qiMR19021110.jpg', 'IMG_20171219_222430c - Copy.jpg', 'image/jpeg', 'jpg', '5907668', 'image', '4160', '3120', 'storage/media/image/qiMR19021110.jpg', 16, NULL, '2019-02-11 23:50:16', '2019-02-11 23:50:16'),
(99, 'd1vt19021302.jpg', '10575434_869441016455993_8445700596692807459_o - Copy.jpg', 'image/jpeg', 'jpg', '378035', 'image', '2048', '1536', 'storage/media/image/d1vt19021302.jpg', 16, NULL, '2019-02-13 18:36:03', '2019-02-13 18:36:03'),
(100, 'JGcj19021303.jpg', '14067964_1165477920185633_4232078193783085553_o.jpg', 'image/jpeg', 'jpg', '519382', 'image', '2048', '1536', 'storage/media/image/JGcj19021303.jpg', 16, NULL, '2019-02-13 18:36:03', '2019-02-13 18:36:03'),
(101, '7gTD19021303.jpg', '14125646_1164645966935495_4888384518387366343_o.jpg', 'image/jpeg', 'jpg', '440933', 'image', '2048', '1536', 'storage/media/image/7gTD19021303.jpg', 16, NULL, '2019-02-13 18:36:03', '2019-02-13 18:36:03'),
(102, 'IcbV19021303.jpg', '14642462_1781408672132242_2455016414673582612_n.jpg', 'image/jpeg', 'jpg', '112572', 'image', '960', '720', 'storage/media/image/IcbV19021303.jpg', 16, NULL, '2019-02-13 18:36:04', '2019-02-13 18:36:04'),
(103, 'kQCP19021304.jpg', '14708121_1218491031550988_1402017344521376902_n.jpg', 'image/jpeg', 'jpg', '86661', 'image', '720', '960', 'storage/media/image/kQCP19021304.jpg', 16, NULL, '2019-02-13 18:36:04', '2019-02-13 18:36:04'),
(104, 'jX4k19021304.jpg', '15000009_1240095389390552_8793283954180221935_o.jpg', 'image/jpeg', 'jpg', '308192', 'image', '1600', '900', 'storage/media/image/jX4k19021304.jpg', 16, NULL, '2019-02-13 18:36:06', '2019-02-13 18:36:06'),
(105, 'm0IA19021306.jpg', '16807606_10158325808135074_456589538473049255_n.jpg', 'image/jpeg', 'jpg', '76861', 'image', '750', '568', 'storage/media/image/m0IA19021306.jpg', 16, NULL, '2019-02-13 18:36:06', '2019-02-13 18:36:06'),
(106, 'tYVh19021306.jpg', '17218346_179948085840494_1211018091342690404_o.jpg', 'image/jpeg', 'jpg', '239558', 'image', '2048', '1361', 'storage/media/image/tYVh19021306.jpg', 16, NULL, '2019-02-13 18:36:06', '2019-02-13 18:36:06'),
(107, 'OorA19021306.jpg', '20161224_144141 - Copy.jpg', 'image/jpeg', 'jpg', '4994742', 'image', '4128', '3096', 'storage/media/image/OorA19021306.jpg', 16, NULL, '2019-02-13 18:36:13', '2019-02-13 18:36:13'),
(108, '9rob19021314.jpg', '20161231_141056c.jpg', 'image/jpeg', 'jpg', '4063935', 'image', '3384', '1944', 'storage/media/image/9rob19021314.jpg', 16, NULL, '2019-02-13 18:36:21', '2019-02-13 18:36:21'),
(109, 'x0mQ19021321.jpg', '20161231_142009.jpg', 'image/jpeg', 'jpg', '4191783', 'image', '4128', '3096', 'storage/media/image/x0mQ19021321.jpg', 16, NULL, '2019-02-13 18:36:28', '2019-02-13 18:36:28'),
(110, 'CFG319021328.jpg', '20170103_221947c.jpg', 'image/jpeg', 'jpg', '5725919', 'image', '3240', '2112', 'storage/media/image/CFG319021328.jpg', 16, NULL, '2019-02-13 18:36:40', '2019-02-13 18:36:40'),
(111, 'vRyG19021340.jpg', '20170104.jpg', 'image/jpeg', 'jpg', '805117', 'image', '1196', '790', 'storage/media/image/vRyG19021340.jpg', 16, NULL, '2019-02-13 18:36:40', '2019-02-13 18:36:40'),
(112, 'm6ci19021340.jpg', '20170107_215532 - Copy.jpg', 'image/jpeg', 'jpg', '5408815', 'image', '4128', '3096', 'storage/media/image/m6ci19021340.jpg', 16, NULL, '2019-02-13 18:36:52', '2019-02-13 18:36:52'),
(113, 'TnSi19021352.jpg', '20170114_231259c.jpg', 'image/jpeg', 'jpg', '5472781', 'image', '2634', '3048', 'storage/media/image/TnSi19021352.jpg', 16, NULL, '2019-02-13 18:37:04', '2019-02-13 18:37:04'),
(114, 'rOp019021304.jpg', '20170114_232142.jpg', 'image/jpeg', 'jpg', '3595738', 'image', '4128', '3096', 'storage/media/image/rOp019021304.jpg', 16, NULL, '2019-02-13 18:37:10', '2019-02-13 18:37:10'),
(115, 'awQE19021310.jpg', '20170428_220938.jpg', 'image/jpeg', 'jpg', '3645802', 'image', '4128', '3096', 'storage/media/image/awQE19021310.jpg', 16, NULL, '2019-02-13 18:37:17', '2019-02-13 18:37:17'),
(116, 'nvY719021317.jpg', '20170510_211700 - Copy.jpg', 'image/jpeg', 'jpg', '3583698', 'image', '4128', '3096', 'storage/media/image/nvY719021317.jpg', 16, NULL, '2019-02-13 18:37:25', '2019-02-13 18:37:25'),
(117, '5aOA19021325.jpg', '20170510_213133c - Copy.jpg', 'image/jpeg', 'jpg', '3907169', 'image', '2696', '3336', 'storage/media/image/5aOA19021325.jpg', 16, NULL, '2019-02-13 18:37:32', '2019-02-13 18:37:32'),
(118, 'GHNB19021332.jpg', '20170510_213133c.jpg', 'image/jpeg', 'jpg', '3907169', 'image', '2696', '3336', 'storage/media/image/GHNB19021332.jpg', 16, NULL, '2019-02-13 18:37:40', '2019-02-13 18:37:40'),
(119, 'HkLP19021328.jpg', '20170715_215343c.jpg', 'image/jpeg', 'jpg', '5078941', 'image', '3462', '3096', 'storage/media/image/HkLP19021328.jpg', 16, NULL, '2019-02-13 18:48:37', '2019-02-13 18:48:37'),
(120, 'JCP619021337.jpg', '20171102_210105(0)c.jpg', 'image/jpeg', 'jpg', '2286730', 'image', '3264', '1836', 'storage/media/image/JCP619021337.jpg', 16, NULL, '2019-02-13 18:48:40', '2019-02-13 18:48:40'),
(121, 'cMuA19021341.jpg', '20171102_212553.jpg', 'image/jpeg', 'jpg', '1278008', 'image', '3264', '1836', 'storage/media/image/cMuA19021341.jpg', 16, NULL, '2019-02-13 18:48:43', '2019-02-13 18:48:43'),
(122, 'IanP19021343.jpg', '20171102_221137c.jpg', 'image/jpeg', 'jpg', '2246386', 'image', '1980', '1740', 'storage/media/image/IanP19021343.jpg', 16, NULL, '2019-02-13 18:48:46', '2019-02-13 18:48:46'),
(123, 'St9819021346.jpg', '20171219_131542.jpg', 'image/jpeg', 'jpg', '2314154', 'image', '3264', '1836', 'storage/media/image/St9819021346.jpg', 16, NULL, '2019-02-13 18:48:49', '2019-02-13 18:48:49'),
(124, 'Zq3w19021349.jpg', '20171219_142331.jpg', 'image/jpeg', 'jpg', '2593064', 'image', '3264', '1836', 'storage/media/image/Zq3w19021349.jpg', 16, NULL, '2019-02-13 18:48:53', '2019-02-13 18:48:53'),
(125, '3mgY19021353.jpg', '20171219_154158.jpg', 'image/jpeg', 'jpg', '2398701', 'image', '3264', '1836', 'storage/media/image/3mgY19021353.jpg', 16, NULL, '2019-02-13 18:48:56', '2019-02-13 18:48:56'),
(126, 'HRi719021356.jpg', '20171220_142716.jpg', 'image/jpeg', 'jpg', '2544413', 'image', '3264', '1836', 'storage/media/image/HRi719021356.jpg', 16, NULL, '2019-02-13 18:49:02', '2019-02-13 18:49:02'),
(127, 'DshX19021302.jpg', '20171220_142934.jpg', 'image/jpeg', 'jpg', '2568264', 'image', '3264', '1836', 'storage/media/image/DshX19021302.jpg', 16, NULL, '2019-02-13 18:49:09', '2019-02-13 18:49:09'),
(128, 'cU4s19021309.jpg', '20171222_203648 - Copy.jpg', 'image/jpeg', 'jpg', '2007116', 'image', '3264', '1836', 'storage/media/image/cU4s19021309.jpg', 16, NULL, '2019-02-13 18:49:12', '2019-02-13 18:49:12'),
(129, 'rfvp19021314.jpg', '20180805_231806.jpg', 'image/jpeg', 'jpg', '2044637', 'image', '3264', '1836', 'storage/media/image/rfvp19021314.jpg', 16, NULL, '2019-02-13 18:49:18', '2019-02-13 18:49:18'),
(130, '5Dun19021318.jpg', '20180806_204152 - Copy.jpg', 'image/jpeg', 'jpg', '2361684', 'image', '3264', '1836', 'storage/media/image/5Dun19021318.jpg', 16, NULL, '2019-02-13 18:49:25', '2019-02-13 18:49:25'),
(131, 'O5hK19021325.jpg', '27021714_1229299453869305_8410517640964385606_o - Copy.jpg', 'image/jpeg', 'jpg', '200250', 'image', '1800', '1200', 'storage/media/image/O5hK19021325.jpg', 16, NULL, '2019-02-13 18:49:27', '2019-02-13 18:49:27'),
(132, '5Wxf19021327.jpg', '37067156_2100821210190985_6543234885631344640_n.jpg', 'image/jpeg', 'jpg', '130703', 'image', '1756', '1690', 'storage/media/image/5Wxf19021327.jpg', 16, NULL, '2019-02-13 18:49:27', '2019-02-13 18:49:27'),
(133, 'NDLK19021327.jpg', '37106212_2100821236857649_5866551342058700800_n.jpg', 'image/jpeg', 'jpg', '103454', 'image', '1268', '1680', 'storage/media/image/NDLK19021327.jpg', 16, NULL, '2019-02-13 18:49:27', '2019-02-13 18:49:27'),
(134, 'IbNx19021327.jpg', '37107659_2100821376857635_8594802014012047360_n.jpg', 'image/jpeg', 'jpg', '251949', 'image', '1548', '1161', 'storage/media/image/IbNx19021327.jpg', 16, NULL, '2019-02-13 18:49:28', '2019-02-13 18:49:28'),
(135, 'GDTc19021328.jpg', '37116630_2100820883524351_1274843969599045632_n (1).jpg', 'image/jpeg', 'jpg', '123515', 'image', '1548', '1161', 'storage/media/image/GDTc19021328.jpg', 16, NULL, '2019-02-13 18:49:28', '2019-02-13 18:49:28'),
(136, 'GXEb19021328.jpg', '37123403_2100820920191014_4246963739317764096_n.jpg', 'image/jpeg', 'jpg', '160674', 'image', '1548', '1161', 'storage/media/image/GXEb19021328.jpg', 16, NULL, '2019-02-13 18:49:28', '2019-02-13 18:49:28'),
(137, 'u2VA19021328.jpg', 'DSC_0028.JPG', 'image/jpeg', 'jpg', '10445572', 'image', '6016', '4000', 'storage/media/image/u2VA19021328.jpg', 16, NULL, '2019-02-13 18:49:49', '2019-02-13 18:49:49'),
(138, 'loi019021349.jpg', 'DSC_0198.JPG', 'image/jpeg', 'jpg', '11346703', 'image', '6016', '4000', 'storage/media/image/loi019021349.jpg', 16, NULL, '2019-02-13 18:50:10', '2019-02-13 18:50:10'),
(139, 'cDCg19021358.jpg', '20170715_215343c.jpg', 'image/jpeg', 'jpg', '5078941', 'image', '3462', '3096', 'storage/media/image/cDCg19021358.jpg', 16, NULL, '2019-02-13 19:11:09', '2019-02-13 19:11:09'),
(140, 'qUoI19021309.jpg', '20171102_210105(0)c.jpg', 'image/jpeg', 'jpg', '2286730', 'image', '3264', '1836', 'storage/media/image/qUoI19021309.jpg', 16, NULL, '2019-02-13 19:11:13', '2019-02-13 19:11:13'),
(141, 'uivj19021313.jpg', '20171102_212553.jpg', 'image/jpeg', 'jpg', '1278008', 'image', '3264', '1836', 'storage/media/image/uivj19021313.jpg', 16, NULL, '2019-02-13 19:11:17', '2019-02-13 19:11:17'),
(142, '17Uo19021317.jpg', '20171102_221137c.jpg', 'image/jpeg', 'jpg', '2246386', 'image', '1980', '1740', 'storage/media/image/17Uo19021317.jpg', 16, NULL, '2019-02-13 19:11:21', '2019-02-13 19:11:21'),
(143, 'Nvn719021321.jpg', '20171219_131542.jpg', 'image/jpeg', 'jpg', '2314154', 'image', '3264', '1836', 'storage/media/image/Nvn719021321.jpg', 16, NULL, '2019-02-13 19:11:25', '2019-02-13 19:11:25'),
(144, 'JGcq19021326.jpg', '20171219_142331.jpg', 'image/jpeg', 'jpg', '2593064', 'image', '3264', '1836', 'storage/media/image/JGcq19021326.jpg', 16, NULL, '2019-02-13 19:11:29', '2019-02-13 19:11:29'),
(145, 'uk6719021329.jpg', '20171219_154158.jpg', 'image/jpeg', 'jpg', '2398701', 'image', '3264', '1836', 'storage/media/image/uk6719021329.jpg', 16, NULL, '2019-02-13 19:11:36', '2019-02-13 19:11:36'),
(146, 'zJx219021336.jpg', '20171220_142716.jpg', 'image/jpeg', 'jpg', '2544413', 'image', '3264', '1836', 'storage/media/image/zJx219021336.jpg', 16, NULL, '2019-02-13 19:11:41', '2019-02-13 19:11:41'),
(147, 'Clme19021341.jpg', '20171220_142934.jpg', 'image/jpeg', 'jpg', '2568264', 'image', '3264', '1836', 'storage/media/image/Clme19021341.jpg', 16, NULL, '2019-02-13 19:11:46', '2019-02-13 19:11:46'),
(148, 'Wo9719021346.jpg', '20171222_203648 - Copy.jpg', 'image/jpeg', 'jpg', '2007116', 'image', '3264', '1836', 'storage/media/image/Wo9719021346.jpg', 16, NULL, '2019-02-13 19:11:50', '2019-02-13 19:11:50'),
(149, '4cWW19021350.jpg', '20180805_231806.jpg', 'image/jpeg', 'jpg', '2044637', 'image', '3264', '1836', 'storage/media/image/4cWW19021350.jpg', 16, NULL, '2019-02-13 19:11:54', '2019-02-13 19:11:54'),
(150, '1clD19021354.jpg', '20180806_204152 - Copy.jpg', 'image/jpeg', 'jpg', '2361684', 'image', '3264', '1836', 'storage/media/image/1clD19021354.jpg', 16, NULL, '2019-02-13 19:11:59', '2019-02-13 19:11:59'),
(151, 'vZ5419021349.jpg', '27021714_1229299453869305_8410517640964385606_o - Copy.jpg', 'image/jpeg', 'jpg', '200250', 'image', '1800', '1200', 'storage/media/image/vZ5419021349.jpg', 16, NULL, '2019-02-13 19:16:49', '2019-02-13 19:16:49'),
(152, 'iyo719021349.jpg', '37067156_2100821210190985_6543234885631344640_n.jpg', 'image/jpeg', 'jpg', '130703', 'image', '1756', '1690', 'storage/media/image/iyo719021349.jpg', 16, NULL, '2019-02-13 19:16:49', '2019-02-13 19:16:49'),
(153, 'L6I319021349.jpg', '37106212_2100821236857649_5866551342058700800_n.jpg', 'image/jpeg', 'jpg', '103454', 'image', '1268', '1680', 'storage/media/image/L6I319021349.jpg', 16, NULL, '2019-02-13 19:16:49', '2019-02-13 19:16:49'),
(154, 'ZgXa19021349.jpg', '37107659_2100821376857635_8594802014012047360_n.jpg', 'image/jpeg', 'jpg', '251949', 'image', '1548', '1161', 'storage/media/image/ZgXa19021349.jpg', 16, NULL, '2019-02-13 19:16:49', '2019-02-13 19:16:49'),
(155, 'wfGI19021349.jpg', '37116630_2100820883524351_1274843969599045632_n (1).jpg', 'image/jpeg', 'jpg', '123515', 'image', '1548', '1161', 'storage/media/image/wfGI19021349.jpg', 16, NULL, '2019-02-13 19:16:49', '2019-02-13 19:16:49'),
(156, 'CYU919021349.jpg', '37123403_2100820920191014_4246963739317764096_n.jpg', 'image/jpeg', 'jpg', '160674', 'image', '1548', '1161', 'storage/media/image/CYU919021349.jpg', 16, NULL, '2019-02-13 19:16:56', '2019-02-13 19:16:56'),
(157, 'RwAJ19021356.jpg', 'DSC_0028.JPG', 'image/jpeg', 'jpg', '10445572', 'image', '6016', '4000', 'storage/media/image/RwAJ19021356.jpg', 16, NULL, '2019-02-13 19:17:16', '2019-02-13 19:17:16'),
(158, 'qio419021317.jpg', 'DSC_0198.JPG', 'image/jpeg', 'jpg', '11346703', 'image', '6016', '4000', 'storage/media/image/qio419021317.jpg', 16, NULL, '2019-02-13 19:17:36', '2019-02-13 19:17:36'),
(159, 'S9fh19021336.jpg', 'DSC_0523c.jpg', 'image/jpeg', 'jpg', '9582174', 'image', '4200', '4000', 'storage/media/image/S9fh19021336.jpg', 16, NULL, '2019-02-13 19:17:55', '2019-02-13 19:17:55'),
(160, '2ho819021356.jpg', 'FB_IMG_1499080315052 - Copy.jpg', 'image/jpeg', 'jpg', '121816', 'image', '960', '540', 'storage/media/image/2ho819021356.jpg', 16, NULL, '2019-02-13 19:17:56', '2019-02-13 19:17:56'),
(161, 'v6Ah19021356.jpg', 'FB_IMG_1499080554978.jpg', 'image/jpeg', 'jpg', '118828', 'image', '720', '960', 'storage/media/image/v6Ah19021356.jpg', 16, NULL, '2019-02-13 19:17:56', '2019-02-13 19:17:56'),
(162, 'Z8N619021356.jpg', 'FB_IMG_1521026152977.jpg', 'image/jpeg', 'jpg', '116321', 'image', '1080', '720', 'storage/media/image/Z8N619021356.jpg', 16, NULL, '2019-02-13 19:17:56', '2019-02-13 19:17:56'),
(163, '9TEc19021356.jpg', 'FB_IMG_1521026162862.jpg', 'image/jpeg', 'jpg', '109334', 'image', '1080', '720', 'storage/media/image/9TEc19021356.jpg', 16, NULL, '2019-02-13 19:17:56', '2019-02-13 19:17:56'),
(164, 'ahFS19021356.jpg', 'IMG_20171219_222430c - Copy.jpg', 'image/jpeg', 'jpg', '5907668', 'image', '4160', '3120', 'storage/media/image/ahFS19021356.jpg', 16, NULL, '2019-02-13 19:18:08', '2019-02-13 19:18:08'),
(165, '9dJl19021308.jpg', 'Saif (3) - Copy.jpg', 'image/jpeg', 'jpg', '359326', 'image', '1165', '2048', 'storage/media/image/9dJl19021308.jpg', 16, NULL, '2019-02-13 19:18:08', '2019-02-13 19:18:08'),
(166, 'f8aL19021724.jpg', '1.jpg', 'image/jpeg', 'jpg', '140371', 'image', '1548', '1161', 'storage/media/image/f8aL19021724.jpg', 16, NULL, '2019-02-17 18:03:24', '2019-02-17 18:03:24'),
(167, 'Izv919021725.jpg', '2.jpg', 'image/jpeg', 'jpg', '136299', 'image', '1548', '1161', 'storage/media/image/Izv919021725.jpg', 16, NULL, '2019-02-17 18:03:25', '2019-02-17 18:03:25'),
(168, '0oqW19021725.jpg', '3.jpg', 'image/jpeg', 'jpg', '166422', 'image', '1548', '1161', 'storage/media/image/0oqW19021725.jpg', 16, NULL, '2019-02-17 18:03:25', '2019-02-17 18:03:25'),
(169, 'Zxnt19021725.jpg', '4.jpg', 'image/jpeg', 'jpg', '120777', 'image', '1548', '1161', 'storage/media/image/Zxnt19021725.jpg', 16, NULL, '2019-02-17 18:03:25', '2019-02-17 18:03:25'),
(170, 'Tk3x19021725.jpg', '5.jpg', 'image/jpeg', 'jpg', '171617', 'image', '1548', '1161', 'storage/media/image/Tk3x19021725.jpg', 16, NULL, '2019-02-17 18:03:25', '2019-02-17 18:03:25'),
(171, 'H4rw19021725.jpg', '6.jpg', 'image/jpeg', 'jpg', '120591', 'image', '1548', '1161', 'storage/media/image/H4rw19021725.jpg', 16, NULL, '2019-02-17 18:03:25', '2019-02-17 18:03:25'),
(172, 'BtPG19031627.jpg', 'Afrin 1.jpg', 'image/jpeg', 'jpg', '145256', 'image', '1548', '1161', 'storage/media/image/BtPG19031627.jpg', 16, NULL, '2019-03-16 21:28:27', '2019-03-16 21:28:27'),
(173, 'FYlt19031627.jpg', 'Afrin 12.jpg', 'image/jpeg', 'jpg', '136240', 'image', '1548', '1161', 'storage/media/image/FYlt19031627.jpg', 16, NULL, '2019-03-16 21:28:27', '2019-03-16 21:28:27'),
(174, 'nJo019031627.jpg', 'Afrin 14.jpg', 'image/jpeg', 'jpg', '158706', 'image', '1548', '1161', 'storage/media/image/nJo019031627.jpg', 16, NULL, '2019-03-16 21:28:27', '2019-03-16 21:28:27'),
(175, 'Hd7Y19031627.jpg', 'Afrin 22.jpg', 'image/jpeg', 'jpg', '128322', 'image', '1548', '1161', 'storage/media/image/Hd7Y19031627.jpg', 16, NULL, '2019-03-16 21:28:27', '2019-03-16 21:28:27'),
(176, '76py19031827.jpg', '1 (9).jpg', 'image/jpeg', 'jpg', '193861', 'image', '1548', '1161', 'storage/media/image/76py19031827.jpg', 16, NULL, '2019-03-18 22:07:27', '2019-03-18 22:07:27'),
(177, 'bFVx19031827.jpg', '1 (14).jpg', 'image/jpeg', 'jpg', '245751', 'image', '1548', '1161', 'storage/media/image/bFVx19031827.jpg', 16, NULL, '2019-03-18 22:07:27', '2019-03-18 22:07:27'),
(178, 'TTpA19031827.jpg', '1 (21).jpg', 'image/jpeg', 'jpg', '255446', 'image', '1548', '1161', 'storage/media/image/TTpA19031827.jpg', 16, NULL, '2019-03-18 22:07:28', '2019-03-18 22:07:28'),
(179, 'B8p219032121.jpg', '11 (1).jpg', 'image/jpeg', 'jpg', '203485', 'image', '1548', '1161', 'storage/media/image/B8p219032121.jpg', 16, NULL, '2019-03-21 16:15:21', '2019-03-21 16:15:21'),
(180, 'mfrz19032121.jpg', '11 (2).jpg', 'image/jpeg', 'jpg', '201160', 'image', '1548', '1161', 'storage/media/image/mfrz19032121.jpg', 16, NULL, '2019-03-21 16:15:21', '2019-03-21 16:15:21'),
(181, 'Xk7A19041625.jpg', '1 (2).jpg', 'image/jpeg', 'jpg', '214834', 'image', '1152', '1548', 'storage/media/image/Xk7A19041625.jpg', 16, NULL, '2019-04-16 20:49:26', '2019-04-16 20:49:26'),
(182, 'yhoC19041629.jpg', '20190322_221605.jpg', 'image/jpeg', 'jpg', '6074510', 'image', '3096', '4128', 'storage/media/image/yhoC19041629.jpg', 16, NULL, '2019-04-16 20:53:33', '2019-04-16 20:53:33'),
(185, 'mZH020010243.jpg', '1.JPG', 'image/jpeg', 'jpg', '3163626', 'image', '4032', '3024', 'storage/media/image/mZH020010243.jpg', 16, NULL, '2020-01-02 18:55:45', '2020-01-02 18:55:45'),
(186, '1FZt20010248.jpg', 'IMG_0261.JPG', 'image/jpeg', 'jpg', '4566337', 'image', '4032', '3024', 'storage/media/image/1FZt20010248.jpg', 16, NULL, '2020-01-02 18:58:51', '2020-01-02 18:58:51'),
(187, 'GbZd20010216.jpg', '222.JPG', 'image/jpeg', 'jpg', '3134044', 'image', '4032', '3024', 'storage/media/image/GbZd20010216.jpg', 16, NULL, '2020-01-02 20:06:16', '2020-01-02 20:06:16'),
(188, 'gWFe20010248.jpg', '1 (1).jpg', 'image/jpeg', 'jpg', '910921', 'image', '2016', '1512', 'storage/media/image/gWFe20010248.jpg', 16, NULL, '2020-01-02 20:15:48', '2020-01-02 20:15:48'),
(189, 'gZIq20010213.jpg', 'IMG_0254.JPG', 'image/jpeg', 'jpg', '2108573', 'image', '4032', '3024', 'storage/media/image/gZIq20010213.jpg', 16, NULL, '2020-01-02 20:16:13', '2020-01-02 20:16:13'),
(190, 'jcl820031659.jpg', '123.jpg', 'image/jpeg', 'jpg', '732176', 'image', '2016', '1512', 'storage/media/image/jcl820031659.jpg', 16, NULL, '2020-03-16 22:16:59', '2020-03-16 22:16:59'),
(193, 'hQvn20031617.jpg', '1111111.JPG', 'image/jpeg', 'jpg', '668139', 'image', '2790', '1746', 'storage/media/image/hQvn20031617.jpg', 16, NULL, '2020-03-16 22:21:17', '2020-03-16 22:21:17'),
(194, 'wf9I20031609.jpg', '1 image.JPG', 'image/jpeg', 'jpg', '663856', 'image', '1594', '1166', 'storage/media/image/wf9I20031609.jpg', 16, NULL, '2020-03-16 22:43:09', '2020-03-16 22:43:09'),
(195, 'Ckfl20121536.jpg', '2.jpg', 'image/jpeg', 'jpg', '142828', 'image', '600', '398', 'storage/media/image/Ckfl20121536.jpg', 1, NULL, '2020-12-14 20:17:36', '2020-12-14 20:17:36'),
(196, 'z17K20121536.jpg', '3.jpg', 'image/jpeg', 'jpg', '169676', 'image', '600', '398', 'storage/media/image/z17K20121536.jpg', 1, NULL, '2020-12-14 20:17:36', '2020-12-14 20:17:36'),
(197, '95YW20121536.jpg', '75955_727859967280766_1235408011148623765_n.jpg', 'image/jpeg', 'jpg', '59872', 'image', '960', '720', 'storage/media/image/95YW20121536.jpg', 1, NULL, '2020-12-14 20:17:36', '2020-12-14 20:17:36'),
(198, 'BKs120121537.jpg', '10317767_727856300614466_6944133126680923408_o.jpg', 'image/jpeg', 'jpg', '348516', 'image', '2048', '1536', 'storage/media/image/BKs120121537.jpg', 1, NULL, '2020-12-14 20:17:37', '2020-12-14 20:17:37'),
(199, 'y2vg20121537.jpg', '10494501_727855713947858_7524773234974576919_o.jpg', 'image/jpeg', 'jpg', '437973', 'image', '2048', '1536', 'storage/media/image/y2vg20121537.jpg', 1, NULL, '2020-12-14 20:17:37', '2020-12-14 20:17:37'),
(200, 'Yulk20121537.jpg', '10575434_869441016455993_8445700596692807459_o.jpg', 'image/jpeg', 'jpg', '378035', 'image', '2048', '1536', 'storage/media/image/Yulk20121537.jpg', 1, NULL, '2020-12-14 20:17:37', '2020-12-14 20:17:37'),
(201, 'VO7020121537.jpg', '11026590_869441009789327_8183760462230683739_o.jpg', 'image/jpeg', 'jpg', '345014', 'image', '2048', '1536', 'storage/media/image/VO7020121537.jpg', 1, NULL, '2020-12-14 20:17:37', '2020-12-14 20:17:37'),
(202, 'ScDl20121538.jpg', '14067964_1165477920185633_4232078193783085553_o - Copy.jpg', 'image/jpeg', 'jpg', '519382', 'image', '2048', '1536', 'storage/media/image/ScDl20121538.jpg', 1, NULL, '2020-12-14 20:17:38', '2020-12-14 20:17:38'),
(203, 'gHKs20121538.jpg', '14708121_1218491031550988_1402017344521376902_n - Copy.jpg', 'image/jpeg', 'jpg', '86661', 'image', '720', '960', 'storage/media/image/gHKs20121538.jpg', 1, NULL, '2020-12-14 20:17:38', '2020-12-14 20:17:38'),
(204, 'nPXB20121538.jpg', '15231725_1801189803487462_1724167978_o.jpg', 'image/jpeg', 'jpg', '426360', 'image', '2048', '1536', 'storage/media/image/nPXB20121538.jpg', 1, NULL, '2020-12-14 20:17:38', '2020-12-14 20:17:38'),
(205, 'cwI120121538.jpg', '16807606_10158325808135074_456589538473049255_n.jpg', 'image/jpeg', 'jpg', '76861', 'image', '750', '568', 'storage/media/image/cwI120121538.jpg', 1, NULL, '2020-12-14 20:17:38', '2020-12-14 20:17:38'),
(206, 'FMwu20121538.jpg', '20161224_144141.jpg', 'image/jpeg', 'jpg', '119303', 'image', '500', '375', 'storage/media/image/FMwu20121538.jpg', 1, NULL, '2020-12-14 20:17:38', '2020-12-14 20:17:38'),
(207, 'XSG520121536.jpg', 'images (3).jpg', 'image/jpeg', 'jpg', '9579', 'image', '259', '194', 'storage/media/image/XSG520121536.jpg', 1, NULL, '2020-12-14 20:23:36', '2020-12-14 20:23:36'),
(208, 'mxv620121536.jpg', 'images.jpg', 'image/jpeg', 'jpg', '7802', 'image', '259', '194', 'storage/media/image/mxv620121536.jpg', 1, NULL, '2020-12-14 20:23:36', '2020-12-14 20:23:36'),
(209, 'H6rt20121536.jpg', 'ms2.jpg', 'image/jpeg', 'jpg', '11740', 'image', '300', '168', 'storage/media/image/H6rt20121536.jpg', 1, NULL, '2020-12-14 20:23:36', '2020-12-14 20:23:36'),
(210, 'nSkQ20121536.jpg', 'ms3.jpg', 'image/jpeg', 'jpg', '12448', 'image', '259', '194', 'storage/media/image/nSkQ20121536.jpg', 1, NULL, '2020-12-14 20:23:36', '2020-12-14 20:23:36'),
(211, 'tCgZ21011626.jpg', 'speach1..JPG', 'image/jpeg', 'jpg', '39813', 'image', '961', '259', 'storage/media/image/tCgZ21011626.jpg', 1, NULL, '2021-01-16 07:29:26', '2021-01-16 07:29:26'),
(212, 'begV21011640.jpg', 'signature.JPG', 'image/jpeg', 'jpg', '16280', 'image', '270', '136', 'storage/media/image/begV21011640.jpg', 1, NULL, '2021-01-16 07:29:40', '2021-01-16 07:29:40'),
(213, 'XDV621011814.jpg', 'form-bg2.jpg', 'image/jpeg', 'jpg', '221732', 'image', '1149', '435', 'storage/media/image/XDV621011814.jpg', 1, NULL, '2021-01-18 03:22:14', '2021-01-18 03:22:14'),
(214, '0IlR21012034.jpg', 'Zaki Farhad Habib.jpg', 'image/jpeg', 'jpg', '151147', 'image', '1152', '1263', 'storage/media/image/0IlR21012034.jpg', 1, NULL, '2021-01-20 09:42:34', '2021-01-20 09:42:34'),
(215, 'WMoc21012023.jpg', '2.jpg', 'image/jpeg', 'jpg', '136299', 'image', '1548', '1161', 'storage/media/image/WMoc21012023.jpg', 1, NULL, '2021-01-20 09:49:23', '2021-01-20 09:49:23'),
(216, 'CmZ221012023.jpg', '3 - Copy.JPG', 'image/jpeg', 'jpg', '6607297', 'image', '4288', '2848', 'storage/media/image/CmZ221012023.jpg', 1, NULL, '2021-01-20 09:49:24', '2021-01-20 09:49:24'),
(217, 'U7Sw21012024.jpg', '10.02.2020  (1).JPG', 'image/jpeg', 'jpg', '3891105', 'image', '4032', '3024', 'storage/media/image/U7Sw21012024.jpg', 1, NULL, '2021-01-20 09:49:24', '2021-01-20 09:49:24'),
(218, 'skjb21012026.png', '10.02.2020  (1).png', 'image/png', 'png', '1461614', 'image', '1200', '1000', 'storage/media/image/skjb21012026.png', 1, NULL, '2021-01-20 09:49:26', '2021-01-20 09:49:26'),
(219, 'L7ZZ21012026.jpg', '10.02.2020  (2).JPG', 'image/jpeg', 'jpg', '3738679', 'image', '4032', '3024', 'storage/media/image/L7ZZ21012026.jpg', 1, NULL, '2021-01-20 09:49:26', '2021-01-20 09:49:26'),
(220, 'KAJn21012028.jpg', '31.jpg', 'image/jpeg', 'jpg', '166422', 'image', '1548', '1161', 'storage/media/image/KAJn21012028.jpg', 1, NULL, '2021-01-20 09:49:28', '2021-01-20 09:49:28'),
(221, '1Muk21012030.jpg', '75955_727859967280766_1235408011148623765_n.jpg', 'image/jpeg', 'jpg', '59872', 'image', '960', '720', 'storage/media/image/1Muk21012030.jpg', 1, NULL, '2021-01-20 09:49:30', '2021-01-20 09:49:30'),
(222, 'kZQs21012030.jpg', '10317767_727856300614466_6944133126680923408_o.jpg', 'image/jpeg', 'jpg', '348516', 'image', '2048', '1536', 'storage/media/image/kZQs21012030.jpg', 1, NULL, '2021-01-20 09:49:31', '2021-01-20 09:49:31'),
(223, '6xwV21012031.jpg', '10450095_727856350614461_5445268253155105141_o.jpg', 'image/jpeg', 'jpg', '399544', 'image', '1536', '2048', 'storage/media/image/6xwV21012031.jpg', 1, NULL, '2021-01-20 09:49:31', '2021-01-20 09:49:31'),
(224, 'bpNs21012031.jpg', '10494501_727855713947858_7524773234974576919_o.jpg', 'image/jpeg', 'jpg', '437973', 'image', '2048', '1536', 'storage/media/image/bpNs21012031.jpg', 1, NULL, '2021-01-20 09:49:31', '2021-01-20 09:49:31'),
(225, 'lvVS21012032.jpg', '10575434_869441016455993_8445700596692807459_o - Copy.jpg', 'image/jpeg', 'jpg', '378035', 'image', '2048', '1536', 'storage/media/image/lvVS21012032.jpg', 1, NULL, '2021-01-20 09:49:32', '2021-01-20 09:49:32'),
(226, '04cG21012032.jpg', '11026590_869441009789327_8183760462230683739_o.jpg', 'image/jpeg', 'jpg', '345014', 'image', '2048', '1536', 'storage/media/image/04cG21012032.jpg', 1, NULL, '2021-01-20 09:49:32', '2021-01-20 09:49:32'),
(227, '8Iqw21012032.jpg', '11080478_869440916456003_3020002905753714943_o - Copy.jpg', 'image/jpeg', 'jpg', '303759', 'image', '1536', '2048', 'storage/media/image/8Iqw21012032.jpg', 1, NULL, '2021-01-20 09:49:32', '2021-01-20 09:49:32'),
(228, '39Ui21012033.jpg', '14067964_1165477920185633_4232078193783085553_o.jpg', 'image/jpeg', 'jpg', '519382', 'image', '2048', '1536', 'storage/media/image/39Ui21012033.jpg', 1, NULL, '2021-01-20 09:49:33', '2021-01-20 09:49:33'),
(229, 'D0tu21012033.jpg', '14125646_1164645966935495_4888384518387366343_o.jpg', 'image/jpeg', 'jpg', '440933', 'image', '2048', '1536', 'storage/media/image/D0tu21012033.jpg', 1, NULL, '2021-01-20 09:49:33', '2021-01-20 09:49:33'),
(230, '2rHr21012034.jpg', '14642462_1781408672132242_2455016414673582612_n.jpg', 'image/jpeg', 'jpg', '112572', 'image', '960', '720', 'storage/media/image/2rHr21012034.jpg', 1, NULL, '2021-01-20 09:49:34', '2021-01-20 09:49:34'),
(231, 'RR5v21012034.jpg', '14708121_1218491031550988_1402017344521376902_n.jpg', 'image/jpeg', 'jpg', '86661', 'image', '720', '960', 'storage/media/image/RR5v21012034.jpg', 1, NULL, '2021-01-20 09:49:34', '2021-01-20 09:49:34'),
(232, 'PHQ021012034.jpg', '15000009_1240095389390552_8793283954180221935_o.jpg', 'image/jpeg', 'jpg', '308192', 'image', '1600', '900', 'storage/media/image/PHQ021012034.jpg', 1, NULL, '2021-01-20 09:49:34', '2021-01-20 09:49:34'),
(233, 'QYK821012034.jpg', '16797302_171026970065939_1839154569639547625_o.jpg', 'image/jpeg', 'jpg', '306601', 'image', '1536', '2048', 'storage/media/image/QYK821012034.jpg', 1, NULL, '2021-01-20 09:49:34', '2021-01-20 09:49:34'),
(234, 'dEiu21012035.jpg', '16807606_10158325808135074_456589538473049255_n.jpg', 'image/jpeg', 'jpg', '76861', 'image', '750', '568', 'storage/media/image/dEiu21012035.jpg', 1, NULL, '2021-01-20 09:49:35', '2021-01-20 09:49:35'),
(235, 'l8qj21012128.jpg', '20170428_220938.jpg', 'image/jpeg', 'jpg', '3645802', 'image', '4128', '3096', 'storage/media/image/l8qj21012128.jpg', 1, NULL, '2021-01-20 22:22:28', '2021-01-20 22:22:28'),
(236, '6TWO21012129.jpg', '20170428_223641.jpg', 'image/jpeg', 'jpg', '3942396', 'image', '4128', '3096', 'storage/media/image/6TWO21012129.jpg', 1, NULL, '2021-01-20 22:22:29', '2021-01-20 22:22:29'),
(237, 'cd5d21012159.jpg', '37106212_2100821236857649_5866551342058700800_n.jpg', 'image/jpeg', 'jpg', '103454', 'image', '1268', '1680', 'storage/media/image/cd5d21012159.jpg', 1, NULL, '2021-01-20 22:25:59', '2021-01-20 22:25:59'),
(238, 'aOqW21012321.jpg', 'tCgZ21011626.jpg', 'image/jpeg', 'jpg', '69319', 'image', '961', '259', 'storage/media/image/aOqW21012321.jpg', 1, NULL, '2021-01-23 07:36:21', '2021-01-23 07:36:21'),
(239, 'wjtu21012427.jpg', 'Picture-2_meeting-good-workplace-relationships-300x278.jpg', 'image/jpeg', 'jpg', '27955', 'image', '300', '278', 'storage/media/image/wjtu21012427.jpg', 1, NULL, '2021-01-24 05:46:27', '2021-01-24 05:46:27'),
(240, 'V1cE21012428.jpg', 'happymaleemployee-500.jpg', 'image/jpeg', 'jpg', '15664', 'image', '500', '333', 'storage/media/image/V1cE21012428.jpg', 1, NULL, '2021-01-24 05:46:28', '2021-01-24 05:46:28'),
(241, 'VV6Z21012428.png', 'Corporate-Clients.png', 'image/png', 'png', '461966', 'image', '800', '535', 'storage/media/image/VV6Z21012428.png', 1, NULL, '2021-01-24 05:46:28', '2021-01-24 05:46:28'),
(242, '8aQK21020140.png', 'bismil.png', 'image/png', 'png', '15616', 'image', '385', '73', 'storage/media/image/8aQK21020140.png', 1, NULL, '2021-02-01 07:01:40', '2021-02-01 07:01:40'),
(243, 'p12G21020133.png', 'Asset 1.png', 'image/png', 'png', '160653', 'image', '844', '506', 'storage/media/image/p12G21020133.png', 1, NULL, '2021-02-01 07:04:33', '2021-02-01 07:04:33'),
(244, 'rCJZ21020146.jpg', 'IMG-20210131-WA0000.jpg', 'image/jpeg', 'jpg', '10054', 'image', '729', '364', 'storage/media/image/rCJZ21020146.jpg', 1, NULL, '2021-02-01 07:09:46', '2021-02-01 07:09:46'),
(245, 'jT2l21020714.jpeg', 'pay-bg.jpeg', 'image/jpeg', 'jpeg', '221502', 'image', '1280', '853', 'storage/media/image/jT2l21020714.jpeg', 1, NULL, '2021-02-07 04:21:14', '2021-02-07 04:21:14'),
(246, 'MyW521020715.jpg', 'pay-bg.jpg', 'image/jpeg', 'jpg', '50688', 'image', '990', '516', 'storage/media/image/MyW521020715.jpg', 1, NULL, '2021-02-07 04:21:15', '2021-02-07 04:21:15'),
(247, 'nwaA21021004.png', '38-380853_silver-wallpaperpng-background-silver.png', 'image/png', 'png', '13870', 'image', '1920', '1080', 'storage/media/image/nwaA21021004.png', 1, NULL, '2021-02-10 00:37:04', '2021-02-10 00:37:04'),
(248, 'aBU721021031.jpg', 'K0m5dI.jpg', 'image/jpeg', 'jpg', '577979', 'image', '1920', '1080', 'storage/media/image/aBU721021031.jpg', 1, NULL, '2021-02-10 00:52:31', '2021-02-10 00:52:31'),
(249, '9JTV21021044.jpeg', 'WhatsApp Image 2021-02-07 at 2.21.45 PM.jpeg', 'image/jpeg', 'jpeg', '221502', 'image', '1280', '853', 'storage/media/image/9JTV21021044.jpeg', 1, NULL, '2021-02-10 04:29:45', '2021-02-10 04:29:45'),
(250, 'T5aw21031358.jpg', 'winter-background-with-pastel-color-brushes-leaves_220290-42.jpg', 'image/jpeg', 'jpg', '49945', 'image', '626', '417', 'storage/media/image/T5aw21031358.jpg', 1, NULL, '2021-03-13 03:38:58', '2021-03-13 03:38:58'),
(251, '2e3x21031358.jpg', 'hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg', 'image/jpeg', 'jpg', '39083', 'image', '626', '313', 'storage/media/image/2e3x21031358.jpg', 1, NULL, '2021-03-13 03:38:58', '2021-03-13 03:38:58'),
(252, '07Lz21031358.jpg', 'pngtree-horizontal-vector-halloween-banner-background-with-grunge-border-image_297712.jpg', 'image/jpeg', 'jpg', '67887', 'image', '960', '450', 'storage/media/image/07Lz21031358.jpg', 1, NULL, '2021-03-13 03:38:59', '2021-03-13 03:38:59'),
(253, 'HLG021031300.jpg', '475788bc11dc678.jpg', 'image/jpeg', 'jpg', '89434', 'image', '960', '300', 'storage/media/image/HLG021031300.jpg', 1, NULL, '2021-03-13 03:51:00', '2021-03-13 03:51:00'),
(254, 'bew121031300.jpg', '0557a7322b6c277.jpg', 'image/jpeg', 'jpg', '55772', 'image', '960', '450', 'storage/media/image/bew121031300.jpg', 1, NULL, '2021-03-13 03:51:00', '2021-03-13 03:51:00'),
(255, 'PBDE21031302.jpg', '0ba3d60362c7e6d256cfc1f37156bad9.jpg', 'image/jpeg', 'jpg', '58314', 'image', '1920', '720', 'storage/media/image/PBDE21031302.jpg', 1, NULL, '2021-03-13 03:51:02', '2021-03-13 03:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `media_people`
--

CREATE TABLE `media_people` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL DEFAULT 0,
  `commission` int(11) NOT NULL DEFAULT 0,
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_people`
--

INSERT INTO `media_people` (`id`, `user_id`, `branch_id`, `commission`, `balance`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(2, 1, 0, 20, 0.00, 1, NULL, '2019-02-20 07:16:16', '2019-02-20 07:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `media_person_items`
--

CREATE TABLE `media_person_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `media_person_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_person_items`
--

INSERT INTO `media_person_items` (`id`, `media_person_id`, `user_id`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 1, 16, 16, NULL, '2019-04-10 22:59:34', '2019-04-10 22:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `membership_packages`
--

CREATE TABLE `membership_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_original_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_amount` decimal(10,2) DEFAULT NULL,
  `package_currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_duration` int(10) DEFAULT NULL,
  `proposal_send_daily_limit` int(10) NOT NULL DEFAULT 0,
  `proposal_send_total_limit` int(10) NOT NULL DEFAULT 0,
  `contact_view_limit` int(10) NOT NULL DEFAULT 0,
  `addedby_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `membership_packages`
--

INSERT INTO `membership_packages` (`id`, `package_title`, `package_description`, `package_type`, `image_name`, `image_original_name`, `package_amount`, `package_currency`, `package_duration`, `proposal_send_daily_limit`, `proposal_send_total_limit`, `contact_view_limit`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 'Starter (Bangladesh)', '45 Days Membership for Bangladeshi People', 'Bangladesh', 'STjZLjev1544418189.png', 'starter.png', 6000.00, 'BDT', 45, 4, 40, 5, 1, NULL, '2018-06-03 20:20:27', '2019-04-27 19:02:43'),
(2, 'Professional (Bangladesh)', 'Three Months Membership for Bangladeshi Peoples', 'Bangladesh', 'nM1xi9En1544418204.png', 'professional.png', 12000.00, 'BDT', 90, 6, 60, 10, 1, NULL, '2018-06-03 20:22:26', '2019-04-27 19:03:34'),
(3, 'Advanced (Bangladesh)', 'Six Month Membership for Bangladeshi People', 'Bangladesh', 'yYceslxZ1544418215.png', 'advanced.png', 16000.00, 'BDT', 180, 8, 80, 20, 1, NULL, '2018-06-03 20:23:50', '2019-04-27 19:04:27'),
(4, 'Enterprise (Bangladesh)', 'Nine Months Membership for Bangladeshi People', 'Bangladesh', 'WezIBc5N1544418226.png', 'enterprise.png', 25000.00, 'BDT', 270, 10, 100, 1000, 1, NULL, '2018-06-03 20:24:39', '2019-04-27 19:06:01'),
(5, 'Starter (Foreign)', '45 Days Membership for Outside Bangladesh', 'Outside Bangladesh', 'PHn0dCjU1544418240.png', 'starter.png', 70.00, 'USD', 45, 4, 40, 5, 1, NULL, '2018-06-03 20:25:41', '2019-04-27 19:03:04'),
(6, 'Professional (Foreign)', 'Three Months Membership for Outside Bangladesh', 'Outside Bangladesh', '4kN2aREm1544418254.png', 'professional.png', 142.00, 'USD', 90, 6, 60, 10, 1, NULL, '2018-06-03 20:26:56', '2019-04-27 19:03:58'),
(7, 'Advanced (Foreign)', 'Six Months Membership for Outside Bangladesh', 'Outside Bangladesh', 'FEKCH02Q1544418266.png', 'advanced.png', 189.00, 'USD', 180, 8, 80, 20, 1, NULL, '2018-06-03 20:27:47', '2019-04-27 19:05:15'),
(8, 'Enterprise (Foreign)', 'One Year Membership for Outside Bangladesh', 'Outside Bangladesh', 'p3wm2mfV1544418280.png', 'enterprise.png', 295.00, 'USD', 270, 10, 100, 1000, 1, NULL, '2018-06-03 20:29:07', '2019-04-27 19:07:19'),
(9, 'Higher (Bangladesh)', 'One Year Membership for Bangladeshi People', 'Bangladesh', 'Ef6MtQSl1557778810.png', 'heigher.png', 30000.00, 'BDT', 365, 20, 200, 1500, 1, NULL, '2019-01-21 20:00:59', '2019-05-15 18:22:40'),
(10, 'Higher (Foreign)', 'Higher package for the people of outside Bangladesh', 'Bangladesh', 'PpAareoh1557778834.png', 'heigher.png', 353.00, 'USD', 365, 20, 200, 1500, 1, NULL, '2019-05-14 05:07:37', '2019-05-15 18:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_title`, `menu_type`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(9, 'User Mobile Right Sidebar Menu', 'Full', 1, NULL, '2020-12-28 12:51:13', '2020-12-28 12:51:13'),
(10, 'Welcome Footer Menu', 'Full', 1, NULL, '2020-12-28 12:51:27', '2020-12-28 12:51:27'),
(11, 'Welcome Header Menu', 'Full', 1, NULL, '2020-12-28 12:51:44', '2020-12-28 12:51:44'),
(14, 'User footer menu', 'Full', 1, NULL, '2021-01-10 05:14:49', '2021-01-10 05:14:49'),
(15, 'User header menu', 'Full', 1, NULL, '2021-01-10 05:15:01', '2021-01-10 05:15:01'),
(16, 'Management', 'Full', 1, NULL, '2021-01-16 02:54:58', '2021-01-16 02:54:58'),
(17, 'Membership Details', 'Full', 1, NULL, '2021-01-16 03:07:53', '2021-01-16 03:07:53'),
(18, 'Owners Message', 'Full', 1, NULL, '2021-01-16 03:07:58', '2021-01-16 03:07:58'),
(19, 'Contact Us', 'Full', 1, NULL, '2021-01-16 03:08:08', '2021-01-16 03:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `menu_pages`
--

CREATE TABLE `menu_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_pages`
--

INSERT INTO `menu_pages` (`id`, `menu_id`, `page_id`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(68, 8, 4, 1, NULL, '2018-12-18 04:19:31', '2018-12-18 04:19:31'),
(69, 6, 4, 1, NULL, '2018-12-18 04:19:31', '2018-12-18 04:19:31'),
(70, 4, 4, 1, NULL, '2018-12-18 04:19:31', '2018-12-18 04:19:31'),
(71, 2, 4, 1, NULL, '2018-12-18 04:19:31', '2018-12-18 04:19:31'),
(72, 8, 2, 1, NULL, '2018-12-18 04:19:45', '2018-12-18 04:19:45'),
(73, 6, 2, 1, NULL, '2018-12-18 04:19:45', '2018-12-18 04:19:45'),
(74, 4, 2, 1, NULL, '2018-12-18 04:19:45', '2018-12-18 04:19:45'),
(75, 3, 2, 1, NULL, '2018-12-18 04:19:45', '2018-12-18 04:19:45'),
(76, 2, 2, 1, NULL, '2018-12-18 04:19:45', '2018-12-18 04:19:45'),
(87, 8, 5, 1, NULL, '2018-12-18 04:25:38', '2018-12-18 04:25:38'),
(88, 6, 5, 1, NULL, '2018-12-18 04:25:38', '2018-12-18 04:25:38'),
(89, 4, 5, 1, NULL, '2018-12-18 04:25:38', '2018-12-18 04:25:38'),
(90, 2, 5, 1, NULL, '2018-12-18 04:25:38', '2018-12-18 04:25:38'),
(99, 8, 1, 1, NULL, '2019-04-21 15:26:55', '2019-04-21 15:26:55'),
(100, 6, 1, 1, NULL, '2019-04-21 15:26:55', '2019-04-21 15:26:55'),
(101, 4, 1, 1, NULL, '2019-04-21 15:26:55', '2019-04-21 15:26:55'),
(102, 3, 1, 1, NULL, '2019-04-21 15:26:55', '2019-04-21 15:26:55'),
(103, 2, 1, 1, NULL, '2019-04-21 15:26:55', '2019-04-21 15:26:55'),
(104, 1, 1, 1, NULL, '2019-04-21 15:26:55', '2019-04-21 15:26:55'),
(169, 14, 8, 1, NULL, '2021-01-12 00:09:45', '2021-01-12 00:09:45'),
(170, 9, 8, 1, NULL, '2021-01-12 00:09:45', '2021-01-12 00:09:45'),
(171, 10, 8, 1, NULL, '2021-01-12 00:09:45', '2021-01-12 00:09:45'),
(214, 16, 15, 1, NULL, '2021-01-16 02:59:29', '2021-01-16 02:59:29'),
(215, 16, 12, 1, NULL, '2021-01-16 03:09:43', '2021-01-16 03:09:43'),
(216, 14, 12, 1, NULL, '2021-01-16 03:09:43', '2021-01-16 03:09:43'),
(217, 9, 12, 1, NULL, '2021-01-16 03:09:43', '2021-01-16 03:09:43'),
(218, 10, 12, 1, NULL, '2021-01-16 03:09:43', '2021-01-16 03:09:43'),
(247, 16, 6, 1, NULL, '2021-01-16 03:42:21', '2021-01-16 03:42:21'),
(248, 14, 6, 1, NULL, '2021-01-16 03:42:21', '2021-01-16 03:42:21'),
(249, 9, 6, 1, NULL, '2021-01-16 03:42:21', '2021-01-16 03:42:21'),
(250, 10, 6, 1, NULL, '2021-01-16 03:42:21', '2021-01-16 03:42:21'),
(255, 16, 16, 1, NULL, '2021-01-16 22:38:25', '2021-01-16 22:38:25'),
(256, 9, 16, 1, NULL, '2021-01-16 22:38:25', '2021-01-16 22:38:25'),
(259, 16, 18, 1, NULL, '2021-01-16 22:44:44', '2021-01-16 22:44:44'),
(260, 9, 18, 1, NULL, '2021-01-16 22:44:45', '2021-01-16 22:44:45'),
(263, 17, 20, 1, NULL, '2021-01-16 22:45:48', '2021-01-16 22:45:48'),
(264, 9, 20, 1, NULL, '2021-01-16 22:45:48', '2021-01-16 22:45:48'),
(267, 17, 21, 1, NULL, '2021-01-16 22:45:53', '2021-01-16 22:45:53'),
(268, 9, 21, 1, NULL, '2021-01-16 22:45:53', '2021-01-16 22:45:53'),
(269, 17, 22, 1, NULL, '2021-01-16 22:45:55', '2021-01-16 22:45:55'),
(270, 9, 22, 1, NULL, '2021-01-16 22:45:55', '2021-01-16 22:45:55'),
(271, 18, 23, 1, NULL, '2021-01-16 22:45:57', '2021-01-16 22:45:57'),
(272, 9, 23, 1, NULL, '2021-01-16 22:45:58', '2021-01-16 22:45:58'),
(276, 19, 25, 1, NULL, '2021-01-16 22:46:33', '2021-01-16 22:46:33'),
(277, 9, 25, 1, NULL, '2021-01-16 22:46:33', '2021-01-16 22:46:33'),
(278, 19, 26, 1, NULL, '2021-01-16 22:46:35', '2021-01-16 22:46:35'),
(279, 9, 26, 1, NULL, '2021-01-16 22:46:35', '2021-01-16 22:46:35'),
(289, 14, 7, 1, NULL, '2021-01-18 05:10:52', '2021-01-18 05:10:52'),
(290, 9, 7, 1, NULL, '2021-01-18 05:10:52', '2021-01-18 05:10:52'),
(291, 10, 7, 1, NULL, '2021-01-18 05:10:52', '2021-01-18 05:10:52'),
(295, 16, 17, 1, NULL, '2021-01-23 04:05:04', '2021-01-23 04:05:04'),
(296, 9, 17, 1, NULL, '2021-01-23 04:05:05', '2021-01-23 04:05:05'),
(297, 16, 30, 1, NULL, '2021-01-23 06:43:40', '2021-01-23 06:43:40'),
(298, 9, 30, 1, NULL, '2021-01-23 06:43:40', '2021-01-23 06:43:40'),
(299, 19, 31, 1, NULL, '2021-01-23 06:46:02', '2021-01-23 06:46:02'),
(300, 9, 31, 1, NULL, '2021-01-23 06:46:02', '2021-01-23 06:46:02'),
(306, 19, 33, 1, NULL, '2021-01-23 22:57:49', '2021-01-23 22:57:49'),
(307, 14, 33, 1, NULL, '2021-01-23 22:57:49', '2021-01-23 22:57:49'),
(308, 9, 33, 1, NULL, '2021-01-23 22:57:49', '2021-01-23 22:57:49'),
(309, 10, 33, 1, NULL, '2021-01-23 22:57:49', '2021-01-23 22:57:49'),
(310, 19, 28, 1, NULL, '2021-01-23 23:01:11', '2021-01-23 23:01:11'),
(311, 9, 28, 1, NULL, '2021-01-23 23:01:11', '2021-01-23 23:01:11'),
(312, 19, 29, 1, NULL, '2021-01-23 23:01:30', '2021-01-23 23:01:30'),
(313, 9, 29, 1, NULL, '2021-01-23 23:01:30', '2021-01-23 23:01:30'),
(314, 19, 27, 1, NULL, '2021-02-01 00:45:11', '2021-02-01 00:45:11'),
(315, 9, 27, 1, NULL, '2021-02-01 00:45:12', '2021-02-01 00:45:12'),
(316, 14, 9, 1, NULL, '2021-02-02 05:18:19', '2021-02-02 05:18:19'),
(317, 9, 9, 1, NULL, '2021-02-02 05:18:19', '2021-02-02 05:18:19'),
(318, 10, 9, 1, NULL, '2021-02-02 05:18:20', '2021-02-02 05:18:20'),
(319, 17, 19, 1, NULL, '2021-02-02 05:19:03', '2021-02-02 05:19:03'),
(320, 14, 19, 1, NULL, '2021-02-02 05:19:04', '2021-02-02 05:19:04'),
(321, 9, 19, 1, NULL, '2021-02-02 05:19:04', '2021-02-02 05:19:04'),
(322, 10, 19, 1, NULL, '2021-02-02 05:19:04', '2021-02-02 05:19:04'),
(323, 18, 32, 1, NULL, '2021-03-13 03:25:13', '2021-03-13 03:25:13'),
(324, 9, 32, 1, NULL, '2021-03-13 03:25:14', '2021-03-13 03:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `message_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_id` int(10) UNSIGNED NOT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `message_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_title`, `message_slug`, `message_body`, `chat_id`, `addedby_id`, `editedby_id`, `message_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hi', '19519155416-2hmsvhtc-hi', 'Hi', 1, 1, NULL, 'published', '2019-05-19 20:54:16', '2019-05-19 20:54:16', NULL),
(2, 'hi', '19521142608-nfu4yty1-hi', 'hi', 2, 16, NULL, 'published', '2019-05-21 19:26:08', '2019-05-21 19:26:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_files`
--

CREATE TABLE `message_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `message_id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_mime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2018_05_25_150750_create_user_roles_table', 1),
(10, '2018_10_27_190533_create_website_parameters_table', 1),
(11, '2018_10_28_004304_setup_countries_table', 1),
(12, '2018_10_28_004306_charify_countries_table', 1),
(13, '2018_10_28_022300_create_menus_table', 2),
(14, '2018_10_28_022415_create_pages_table', 2),
(15, '2018_05_25_192239_create_user_setting_fields_table', 3),
(16, '2018_05_25_192309_create_user_setting_items_table', 3),
(25, '2018_04_27_071144_create_user_photos_table', 4),
(26, '2018_05_16_023120_create_user_search_terms_table', 4),
(27, '2018_05_27_033317_create_user_pictures_table', 4),
(28, '2018_11_06_055357_create_menu_pages_table', 4),
(29, '2018_05_27_225829_create_favourites_table', 5),
(30, '2018_05_27_225900_create_blocks_table', 5),
(31, '2018_05_28_181315_create_reports_table', 5),
(32, '2018_06_01_003802_create_user_visitors_table', 5),
(33, '2018_08_06_023447_create_user_proposals_table', 5),
(34, '2018_08_21_154417_create_user_contacts_table', 6),
(35, '2018_06_04_010130_create_membership_packages_table', 7),
(36, '2018_06_24_063948_create_user_payments_table', 7),
(37, '2018_11_13_050000_create_branches_table', 7),
(38, '2018_11_13_113254_create_image_galleries_table', 8),
(39, '2018_11_13_113708_create_image_gallery_items_table', 8),
(40, '2018_11_07_105038_create_media_table', 9),
(41, '2018_11_21_143316_create_video_galleries_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Full Page',
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_hide` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `list_in_menu` tinyint(1) NOT NULL DEFAULT 1,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_type`, `route_name`, `content`, `title_hide`, `active`, `list_in_menu`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(6, 'About Us', 'Full Page', 'about', '<div class=\"w3-container\">\r\n<p style=\"text-align: justify; \">\r\n</p><h2 style=\"text-align: center;\">About Us</h2><p style=\"text-align: justify; \">Marriage Solution BD is a top level Bangladeshi wedding organization, and is dedicated to those who are looking for a suitable life partner. We consider it a social responsibility, not just a business. No matter where you are in the world and wherever you are, Marriage Solution BD is your best platform, where you can find highly educated and aristocratic family doctors, BUET (Engineer), O / A Level, PhD, Barrister, Banker, BCS Cadre (Admin), industrialists, citizens, businessmen settled in Dhaka and can get the profile of divorced and elderly couple. Marriage Solution BD is always ready to give you the best quality services and they are sincere and complete cooperative, where you can find a suitable, perfect, ideal life partner for you / your son or daughter. We have a highly educated, talented, smart, skilled, loyal, honest, competent, experienced, humble, compassionate and smart matchmaker team, who are always active in your service. Our first task is to verify the authenticity of each of our biodata. And our first priority is to protect your privacy and keep your personal information safe. Marriage Solution BD is not just a name, it has many years of experience and a successful, trustworthy, elite marriage company. Marriage Solution BD From the very beginning, it has had incredible success with its suitable proposals and it has married thousands of candidates. As a successful marriage company, we have a reputation for providing professional marriage services in Bangladesh. We don???t follow conventional trends, we work in advance and modern touches. Please let us know if you encounter any problems with our services. Our goal is not only to help people meet each other, but also to get married.</p><p style=\"text-align: justify; \"><br></p><h3 style=\"text-align: center;\"><span style=\"color: rgb(0, 0, 255);\">Our Specialty&nbsp;</span></h3><p style=\"text-align: justify; \"><br></p><p style=\"text-align: justify; \">Marriage is an important issue in our society and it is also the most amazing thing about nature. Islam sees marriage as a\r\nmetaphorical union of two souls on the way to paradise. Thus, according to Islam it is considered both a religious\r\nobligation and a social necessity to get married. Marriage Bonding At present, it is very rare to find a suitable marriage\r\nproposal in this busy life without a mediator. And making decisions about marriage is more difficult now a day. Getting a\r\ngood offer is everyone\'s dream. When it comes to marrying their beloved child, parents wonder where they will find the\r\nmost suitable proposal! Marriage Solution BD is an Islamic wedding media which is a reputed, leading, reliable, efficient\r\nand successful matrimonial organization in Dhaka, Marriage Solution BD can benefit you with its best offers. This is a\r\nwell-established organization as a one-way destination for customers in any region. We are not part of the traditional\r\nGhotok tradition of Dhaka; Marriage Solutions BD We are professional, cheerful, talented, enterprising, expert, skilled,\r\nsensitive, loyal and the most modern matchmaker expert, who assures you the best match. We are working as a bridge\r\nbetween the most suitable brides and groom to find a perfect match for their life and we help them in every step of their\r\nmarriage. Your son / daughter who are well educated, elite, well established and much more - perfectly suited for you /\r\nyour family, we have some decent Bangladeshi marriage biodata from respectable families. ??????A good proposal makes a\r\ngood match; a good match makes a perfect couple. ???Marriage Solution BD is the best match maker in Bangladesh, who\r\nalways keeps the best match for you. We understand the necessity and importance of a perfect match. We strive to\r\nprovide the highest level of service to our clients. The goal is not only to find the right match but also to reduce your efforts\r\nto find the best marriage solution for you. Marriage Solution BD is the best platform where you can choose a suitable,\r\nperfect, ideal best half according to your choice from many Bangladeshi bride / groom profiles.&nbsp;<br></p>\r\n</div>', 0, 1, 1, 1, 1, '2020-12-28 12:53:13', '2021-01-13 06:21:04'),
(7, 'Contact Us', 'Full Page', 'contact-us', '<div class=\"w3-hover-shadow\">\r\n                    <div class=\"w3-card-2 \">\r\n                        <div class=\"box box-widget\">\r\n                            <div class=\"box-header with-border w3-center pt-2\">\r\n                                <h3 class=\"box-title\"><b style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Head Office</b></h3>\r\n\r\n                            </div>\r\n                            <div class=\"box-body\">\r\n\r\n                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.671187234738!2d90.37121771443627!3d23.759102184585025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf3ca2f0be9f%3A0x1b479106030d72f8!2sMarriage+Solution+Bd.!5e0!3m2!1sen!2sbd!4v1542185034971\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>\r\n\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"text-center pt-1 pb-2 px-3\">\r\n                            <div>\r\n                                <p>\r\n                                    </p><address>New Colony Mashjid Complex (2nd &amp; 3rd) floor, Asad Gate (Beside Aarong), Mirpur road, Mohammadpur</address>\r\n                                    <span>Phone: <a href=\"tel:01633036062, 01720504504\">01633036062, 01720504504</a></span>\r\n                                    <br>\r\n                                    <span>Email: <a href=\"mailto:marriagebd2012@gmail.com\">marriagebd2012@gmail.com</a></span>\r\n                                <p></p>\r\n                            </div>\r\n                            <div class=\"box-tools pull-right\">\r\n                                <a class=\"btn btn-sm btn-primary\" href=\"tel:01633036062, 01720504504\" title=\"01633036062, 01720504504, marriagebd2012@gmail.com\">Contact Now</a>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>', 0, 1, 1, 1, 1, '2020-12-28 12:53:45', '2021-01-18 05:10:52'),
(8, 'Privacy Policy', 'Full Page', 'privacy-policy', '<p>This is privacy policy page.</p>', 0, 1, 1, 1, NULL, '2021-01-12 00:09:45', '2021-01-12 00:09:45'),
(12, 'Company Introduction', 'Full Page', 'company-introduction', '<h2 style=\"text-align: center; \"><span style=\"color: rgb(0, 0, 255);\">Company Introduction</span></h2><p style=\"text-align: justify; \" class=\"p-lg-3\">Marriage Solution BD is the professional and specialist matchmaker organization network, which is known as\r\none of the finest, modern, dynamic, prominent, faithful, and extremely popular Matrimonial Organization in\r\nDhaka for the \'\'elite class\'\'. Our organization was started its journey from 12-12-2012 and has been working\r\nsincerely, confidently and successfully from the last 9 years. The owner of this company has maintained the\r\nreputation through its professionalism, honesty, hard work and prosperity. He is a matchmaking expert, has\r\nbeen working in this field with full dedication and heart. He is also a Counselor &amp; motivational speaker and a\r\ngreat influencer for potential grooms and brides to set their life partner preferences rightly. Marriage Solution BD\r\nis a modern, highly personalized and biggest matchmaking service organization in Bangladesh, run by the most\r\nprofessional, experienced, expert and dedicated matchmaker team. We never compromise on quality to provide\r\nbetter service to our clients.<br></p>', 0, 1, 1, 1, 1, '2021-01-13 06:12:25', '2021-01-13 06:23:34'),
(16, 'Why Choose Us', 'Full Page', 'why-choose-us', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:11:18', '2021-01-16 22:38:24'),
(17, 'Our Speciality', 'Full Page', 'our_speciality', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:11:40', '2021-01-23 04:05:02'),
(18, 'Our Quality', 'Full Page', 'our_quality', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:11:55', '2021-01-16 22:27:44'),
(19, 'Terms & Conditions', 'Full Page', 'terms_and_condition', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:12:19', '2021-01-16 22:45:46'),
(20, 'Payment Method', 'Full Page', 'payment_method', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:12:36', '2021-01-16 03:12:45'),
(21, 'Our Mission', 'Full Page', 'our_mission', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:12:59', '2021-01-16 22:45:52'),
(22, 'Our Vision', 'Full Page', 'our_vision', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:13:10', '2021-01-16 22:45:54'),
(23, 'Founder???s Massage', 'Full Page', 'founder???s_massage', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:13:40', '2021-01-16 22:45:57'),
(24, 'Our Success Stories', 'Full Page', 'our_success_stories', NULL, 0, 0, 1, 1, 1, '2021-01-16 03:13:55', '2021-01-19 07:13:48'),
(25, 'Head Office Address', 'Full Page', 'head_office_address', NULL, 0, 1, 1, 1, 1, '2021-01-16 03:14:19', '2021-01-16 03:33:44'),
(27, 'Contact Numbers', 'Full Page', 'contact_numbers', NULL, 0, 0, 1, 1, 1, '2021-01-16 03:14:40', '2021-02-01 00:45:11'),
(28, 'WhatsApp Number', 'Full Page', 'whatsapp_number', NULL, 0, 0, 1, 1, 1, '2021-01-16 03:14:56', '2021-01-23 23:01:11'),
(29, 'Viber Number', 'Full Page', 'viber_number', NULL, 0, 0, 1, 1, 1, '2021-01-16 03:15:24', '2021-01-23 23:01:30'),
(30, 'Our Service Solution', 'Full Page', 'our_service_solution', NULL, 0, 1, 1, 1, NULL, '2021-01-23 06:43:40', '2021-01-23 06:43:40'),
(31, 'Help & Customer Support', 'Full Page', 'help_and_customer_support', NULL, 0, 1, 1, 1, NULL, '2021-01-23 06:46:02', '2021-01-23 06:46:02'),
(32, 'Employee Stories', 'Full Page', 'employee_stories', NULL, 0, 0, 1, 1, 1, '2021-01-23 06:47:33', '2021-03-13 03:25:10'),
(33, 'Career', 'Full Page', 'career', NULL, 0, 1, 1, 1, 1, '2021-01-23 06:48:02', '2021-01-23 22:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `page_items`
--

CREATE TABLE `page_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `editor` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `addedby_id` int(11) DEFAULT NULL,
  `editedby_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_items`
--

INSERT INTO `page_items` (`id`, `page_id`, `title`, `content`, `editor`, `active`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 12, 'Part 1', '<div class=\"w3-animate-zoom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 04:07:18', '2021-03-05 23:59:36'),
(7, 16, 'Part 1', '<div class=\"w3-animate-right\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:19:06', '2021-03-06 00:04:15'),
(8, 17, 'Part 1', '<div class=\"w3-animate-zoom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:19:59', '2021-03-06 00:04:06'),
(9, 18, 'Part 1', '<div class=\"w3-animate-left\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:21:02', '2021-03-06 00:04:03'),
(5, 7, 'Part 1', '<div class=\"text-center\"></p><p>?? ?? <div class=\"text-center w3-xlarge p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold;\"></p><p>?? ?? ?? ?? Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</p><p>?? ?? </div></p><p><br></p><p></div>', 0, 0, 1, 1, '2021-01-16 05:20:37', '2021-03-05 23:59:21'),
(6, 8, 'Part 1', '<div class=\"w3-animate-top\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 05:23:02', '2021-03-05 23:59:36'),
(11, 19, 'Part 1', '<div class=\"w3-animate-right\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:49:40', '2021-03-06 00:03:55'),
(12, 20, 'Part 1', '<div class=\"w3-animate-top\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:49:47', '2021-03-06 00:07:51'),
(13, 21, 'Part 1', '<div class=\"w3-animate-top\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:49:50', '2021-03-06 00:07:06'),
(14, 22, 'Part 1', '<div class=\"w3-animate-zoom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:49:54', '2021-03-06 00:06:26'),
(15, 24, 'Part 1', '<div class=\"w3-animate-zoom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:50:00', '2021-03-06 00:06:30'),
(16, 25, 'Part 1', '<div class=\"w3-animate-top\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 1, 1, 1, '2021-01-16 06:50:05', '2021-01-18 05:16:14'),
(30, 25, 'Part 2', '<div class=\"col-sm-12 py-5\">\r\n        <div class=\"w3-hover-shadow\">\r\n            <div class=\"w3-card-2 \">\r\n                <div class=\"box box-widget\">\r\n                    <div class=\"box-header with-border w3-center pt-2\">\r\n                        <h3 class=\"box-title\"><b>Head Office</b></h3>\r\n\r\n                    </div>\r\n                    <div class=\"box-body\">\r\n\r\n                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.671187234738!2d90.37121771443627!3d23.759102184585025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf3ca2f0be9f%3A0x1b479106030d72f8!2sMarriage+Solution+Bd.!5e0!3m2!1sen!2sbd!4v1542185034971\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>\r\n\r\n                    </div>\r\n                </div>\r\n                <div class=\"text-center pt-1 pb-2 px-3\">\r\n                    <div>\r\n                        <p>\r\n                            </p><address>New Colony Mashjid Complex (2nd & 3rd) floor, Asad Gate (Beside Aarong), Mirpur road, Mohammadpur</address>\r\n                            <span>Phone: <a href=\"tel:01633036062, 01720504504\">01633036062, 01720504504</a></span>\r\n                            <br>\r\n                            <span>Email: <a href=\"mailto:marriagebd2012@gmail.com\">marriagebd2012@gmail.com</a></span>\r\n                        <p></p>\r\n                    </div>\r\n                    <div class=\"box-tools pull-right\">\r\n                        <a class=\"btn btn-sm btn-primary\" href=\"tel:01633036062, 01720504504\" title=\"01633036062, 01720504504, marriagebd2012@gmail.com\">Contact Now</a>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>', 0, 1, 1, 1, '2021-01-16 23:45:34', '2021-01-16 23:49:19'),
(18, 27, 'Part 1', '<div class=\"w3-animate-bottom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:52:18', '2021-03-06 00:08:55'),
(19, 28, 'Part 1', '<div class=\"w3-animate-left\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:52:22', '2021-03-06 00:10:17'),
(20, 29, 'Part 1', '<div class=\"w3-animate-right\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 06:52:27', '2021-03-06 00:10:44'),
(21, 12, 'Part 2', '<div class=\"container\">\r\n<br>\r\n<h2 style=\"text-align: center; \"><span style=\"color: rgb(156, 0, 255);\">Company Introduction</span></h2><p>Marriage Solution BD is a service organization. Whose registration is No. 05-85865 and its date of establishment is 12.12.12. Introduce his work with the name of the organization. His work plan on all matters related to marriage and family formation. And for this reason, Marriage Solution BD has been established as a feature in the marriage related services in Bangladesh. The company has so far successfully completed a large number of marriages, as Yuga claims. The organization is working perfectly to build a happy and ideal family after marriage.</p>\r\n</div>', 0, 0, 1, 1, '2021-01-16 07:06:06', '2021-01-17 03:38:14'),
(22, 6, 'Part 1', '<div class=\"w3-animate-top\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-16 07:10:27', '2021-03-05 23:58:23'),
(23, 17, 'Part 2', '<div class=\"container\">\r\n<br>\r\n<h2 style=\"text-align: center; \"><span style=\"color: rgb(156, 0, 255);\">Our Specialty</span></h2><p>Marriage Solution BD\'s philosophy is to change attitudes and change misconceptions about marriage media by raising awareness among the people. Changing attitudes will change lives. The company is working with new entrepreneurs and far-reaching plans to reach out to millions of people across the country by setting up branch offices in each divisional city.</p>\r\n</div>', 0, 0, 1, 1, '2021-01-16 07:13:57', '2021-01-18 02:44:33'),
(24, 22, 'Part 2', '<div class=\"container\">\r\n<br>\r\n<h2 style=\"text-align: center; \"><span style=\"color: rgb(156, 0, 255);\">Our Vision</span></h2><p>Where and how to find a suitable bride / groom? Are the people you associate with experienced in matters as important as marriage in the life of you and your beloved child? Have you been able to properly observe all the religious provisions in your child\'s marriage? In today\'s society, both small families and men and women are keeping pace with the times when they become employed, resulting in a lack of intimacy as well as friendship. As a result, there is a lack of sincerity and lack of time in the sincerity of friends and relatives including parents and guardians in the marriage process. In that case, Marriage Solution BD is working hard to be a part of the family to complete the marriage work with their intellectual knowledge and experience.</p>\r\n</div>', 0, 0, 1, 1, '2021-01-16 07:15:59', '2021-02-07 22:49:19'),
(25, 18, 'Part 2', '<div class=\"container\">\r\n<br>\r\n<h2 style=\"text-align: center; \"><span style=\"color: rgb(156, 0, 255);\">Our Quality</span></h2><p>Doctor of any profession, engineer, industrialist, banker, employed in a multinational company, living abroad permanently, PhD, BCS cadre, chartered accountant, politician, barrister, government official, unmarried, old, divorced, widow, infertile The journey begins with interest and action. We are committed</p><p>to being your traveling companion through the exchange of cooperation and utmost efforts on the basis of respect. May the Most Praiseworthy Merciful help us.</p>\r\n</div>', 0, 0, 1, 1, '2021-01-16 07:18:58', '2021-01-18 02:58:11'),
(26, 6, 'Part 2', '<div class=\"container\">\r\n<br>\r\n<h2 align=\"center\" style=\"margin: 15pt 0in 11.25pt; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 28pt; font-family: Calibri, sans-serif; color: rgb(254, 47, 67);\">About Us<u><o:p></o:p></u></span></h2><p>\r\n\r\n</p><p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family: Arial, sans-serif; color: rgb(51, 51, 51); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Marriage Solution BD is a top level Bangladeshi\r\nwedding organization, and is dedicated to those who are looking for a suitable\r\nlife partner. We consider it a social responsibility, not just a business. No\r\nmatter where you are in the world and wherever you are, Marriage Solution BD is\r\nyour best platform, where you can find highly educated and aristocratic family\r\ndoctors, BUET (Engineer), O / A Level, PhD, Barrister, Banker, BCS Cadre (Admin),\r\nindustrialists, citizens, businessmen settled in Dhaka and can get the profile\r\nof divorced and elderly couple. Marriage Solution BD is always ready to give\r\nyou the best quality services and they are sincere and complete cooperative,\r\nwhere you can find a suitable, perfect, ideal life partner for you / your son\r\nor daughter. We have a highly educated, talented, smart, skilled, loyal,\r\nhonest, competent, experienced, humble, compassionate and smart matchmaker\r\nteam, who are always active in your service. Our first task is to verify the\r\nauthenticity of each of our biodata. And our first priority is to protect your\r\nprivacy and keep your personal information safe. Marriage Solution BD is not\r\njust a name, it has many years of experience and a successful, trustworthy,\r\nelite marriage company. Marriage Solution BD From the very beginning, it has\r\nhad incredible success with its suitable proposals and it has married thousands\r\nof candidates. As a successful marriage company, we have a reputation for\r\nproviding professional marriage services in Bangladesh. We don???t follow\r\nconventional trends, we work in advance and modern touches. Please let us know\r\nif you encounter any problems with our services. Our goal is not only to help\r\npeople meet each other, but also to get married.<o:p></o:p></span></p>\r\n</div>', 0, 0, 1, 1, '2021-01-16 07:21:51', '2021-01-18 02:05:31'),
(27, 23, 'Part 1', '<div class=\"container w3-animate-bottom\">\r\n<br>\r\n<img src=\"https://www.marriagesolutionbd.com/storage/media/image/aOqW21012321.jpg\" style=\"width: 100%;\"><br>\r\n</div>', 0, 1, 1, 1, '2021-01-16 07:30:14', '2021-01-23 07:37:03'),
(28, 23, 'Part 2', '<div class=\"container w3-animate-bottom\">\r\n<br>\r\nDear customers and well wishers,<p></p><p>Assalamu Alaikum,</p><p>\"Service is good worship, come forward in the service of humanity, you also take part in the great service\"</p><p style=\"text-align: justify; \">Marriage Solution BD has started its ninth year to build a happy and happy family. With its ninth year of journey, organized efforts and initiatives, over time, it has become a symbol of confidence and well-being in national life. Birth, death, marriage is an eternal truth of life, where family and society fail to fulfill their responsibilities, just then \"Marriage Solution BD\" came forward. Marriage Solution BD in the service of humanity is overcoming all adversities and moving towards success on foot. Over time, success is real. A group of dedicated staff of Marriage Solution BD is working with ethics, honesty, transparency and accountability to increase overall / social and humanitarian awareness among the people by changing the misconceptions related to conventional Ghatak practices and marriage media. Marriage Solution BD has been successfully one step ahead in the new year with the goal of service. Through great and good deeds, it has now been established as a haven of trust for millions of people. \"Marriage Solution BD\" has been considered as the best service provider by ensuring silent and relentless work and maximum service through far-reaching thinking and skills. This service will be conducted regularly across the country with initiative, compassion and care. Marriage Solution BD has a team of highly educated, talented, smart, skilled, loyal, honest, competent, experienced, humble, compassionate and smart people who are ready to provide honest mates, matchmaking and marriage counseling and counseling services in the fastest time with exceptional initiative. He is determined. Marriage Solution BD-E is the only exceptional modern up-to-date role model for all types of customer service. Marriage Solution BD always ensures customer service through positive mindset and sincerity, honesty and transparency. Marriage Solution BD is the only organization that works with sincerity in the service of humanity. Customer confidence in Marriage Solutions BD is growing day by day for success and honesty. The main goal of Marriage Solution BD is to continue this service. Marriage Solution BD is a symbol of faith and trust. From a religious point of view, this is an honest and noble deed, so if you are able to get married to your acquaintances, neighbors, friends and colleagues, convey the message of Marriage Solution BD to them. According to every religion, marriage is a sacred process. Join in this full-fledged humanitarian initiative and inspire others. May you and your family be protected in the shadow of God\'s mercy. Marriage Solution BD is always kind to you. I would like to express my sincere gratitude to Absolute Merciful for the success of Marriage Solution BD. Gratitude, respect, love and blessings from the bottom of my heart to all the customers, representatives and well-wishers of Marriage Solution BD.\r\n</p></div>', 0, 1, 1, 1, '2021-01-16 07:32:41', '2021-01-18 05:18:26'),
(29, 23, 'Part 3', '<div class=\"container\">\r\n<img src=\"https://marriagesolutionbd.com/storage/media/image/begV21011640.jpg\" style=\"width: 270px; float: right;\" class=\"note-float-right\"><br>\r\n</div>', 0, 1, 1, 1, '2021-01-16 07:33:09', '2021-01-16 07:35:04'),
(31, 16, 'Part 2', '<div class=\"\" style=\"background: #0b0b0b url(/img/back2.png) no-repeat center top; background-size: 100%;\"> <div class=\"prod-ops text-center py-5\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat right top, url(/img/bg-boxbottomleft.png) no-repeat left bottom, url(/img/bg-boxbottomright.png) no-repeat right bottom;\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic; text-transform: capitalize; !important\">Why Choose Us</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area appear-animation\"  data-appear-animation=\"fadeInLeft\" data-appear-animation-delay=\"400\"> <div class=\"single-services-area\">?? <div class=\"service-icon w3-text-white container text-justify px-md-4\">Marriage  Solution  BD -A  service  oriented  organization  identifies  its  work  with  the  name  of  the  organization.  Marriage Solution BD is one of the most trusted marriage services in Bangladesh. Marriage Solutions BD also pays special attention to give 100% privacy to the customer. Your name, location, photo, can be personal.We have a large database of potential brides and grooms from around the world. Marriage Solution BD has been moving forward successfully for over 9 long years. We also verify and sort the profiles of all registered customers through our own manpower.  Marriage  Solutions  BD  is  headquartered  in  Asadgate,  Arang  Sanglagh,  Dhaka.  We  also  have  branches  in Gulshan,  Uttara,  Kakrail  and  Chittagong.  Marriage  Solutions  BD  is  constantly  working  towards the  goal  of  marriage  by providing accurate information while maintaining the personal security of  the customer with responsibility. Therefore, in the current context, marriage solution BD has become the first and main demand and trust of the people.<br><br></div></div> </div></div>', 0, 1, 1, 1, '2021-01-16 23:56:47', '2021-03-03 07:02:24'),
(32, 8, 'Part 2', '<p>&lt;br&gt;</p><p>&lt;h3 class=\"text-center\"&gt;Privacy policy will be added soon&lt;/h3&gt;</p>', 1, 1, 1, NULL, '2021-01-17 00:00:53', '2021-01-17 00:00:53'),
(33, 19, 'Part 2', '<br>\r\n<div class=\"container w3-green w3-border-purple w3-large text-center\">THE COOPERATION OF PARENTS AND SPOUSES IS DESIRABLE TO PERFORM THE GOOD </div>\r\n<br>\r\n<div class=\"container text-center\">\r\nThank you very much for being our esteemed customer. Marriage Solution BD is always committed to providing advanced services. We sincerely believe that honesty, transparency and accountability are at the core of a respectful and mutually beneficial relationship between Marriage Solutions BD and customers. With that belief in mind, some important terms of Marriage Solution BD are presented below for the convenience of customers to know and understand. \r\n</div>', 0, 1, 1, 1, '2021-01-17 00:03:46', '2021-02-02 05:22:47'),
(34, 29, 'Part 2', '<br><h3 class=\"text-center\">Viber number will be added soon</h3>', 0, 1, 1, 1, '2021-01-17 00:07:27', '2021-01-17 00:08:59'),
(35, 24, 'Part 2', '<br><h3 class=\"text-center\">Why choose us content will be added soon</h3>', 0, 1, 1, 1, '2021-01-17 00:10:32', '2021-01-17 00:11:22'),
(36, 27, 'Part 2', '?? ?? <br><h3 class=\"text-center\">Contact number will be added soon</h3>', 0, 1, 1, 1, '2021-01-17 00:13:55', '2021-01-17 00:18:11'),
(38, 12, 'Part 2 alternative', '<div class=\"w3-animate-bottom\" style=\"background: #0b0b0b url(/img/back2.png) no-repeat center top; background-size: 100%;\"> <div class=\"prod-ops text-center py-5 appear-animation\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat  right top, url(/img/bg-boxbottomleft.png) no-repeat  left bottom, url(/img/bg-boxbottomright.png) no-repeat  right bottom;\" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic;\">Company Introduction</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area\"> <div class=\"single-services-area\">  <div class=\"service-icon w3-text-white container text-justify px-md-4\">Marriage  Solution  BD  is  a  service  organization.  Whose  registration  is  No.  05-85865  and  its  date  of  establishment  is 12.12.12.  Introduce  his  work  with  the  name  of  the  organization.  His  work  plan  on  all  matters  related  to  marriage  and family  formation.  And  for  this  reason,  Marriage  Solution  BD  has  been  established  as  a  feature  in  the  marriage  related services in Bangladesh. The company has so far successfully completed a large number of marriages. The organization is working perfectly to build a happy and ideal family after marriage. <br><br></div></div> </div></div>', 0, 1, 1, 1, '2021-01-17 03:37:12', '2021-03-03 06:37:56'),
(37, 28, 'Part 2', '?? <br><h3 class=\"text-center\">Whatsapp number will be added soon</h3>', 0, 1, 1, 1, '2021-01-17 00:16:17', '2021-01-17 00:17:17'),
(39, 6, 'Part 2 alternative', '<div class=\"\" style=\"background: #0b0b0b url(/img/back2.png) no-repeat center top; background-size: 100%;\"> <div class=\"prod-ops text-center py-5\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat right top, url(/img/bg-boxbottomleft.png) no-repeat left bottom, url(/img/bg-boxbottomright.png) no-repeat right bottom;\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic; text-transform: capitalize; !important\">About Us</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area appear-animation\"  data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> <div class=\"single-services-area\">?? <div class=\"service-icon w3-text-white container text-justify px-md-4\">Marriage Solution BD is a top level Bangladeshi\r\nwedding organization, and is dedicated to those who are looking for a suitable\r\nlife partner. We consider it a social responsibility, not just a business. No\r\nmatter where you are in the world and wherever you are, Marriage Solution BD is\r\nyour best platform, where you can find highly educated and aristocratic family\r\ndoctors, BUET (Engineer), O / A Level, PhD, Barrister, Banker, BCS Cadre (Admin),\r\nindustrialists, citizens, businessmen settled in Dhaka and can get the profile\r\nof divorced and elderly couple. Marriage Solution BD is always ready to give\r\nyou the best quality services and they are sincere and complete cooperative,\r\nwhere you can find a suitable, perfect, ideal life partner for you / your son\r\nor daughter. We have a highly educated, talented, smart, skilled, loyal,\r\nhonest, competent, experienced, humble, compassionate and smart matchmaker\r\nteam, who are always active in your service. Our first task is to verify the\r\nauthenticity of each of our biodata. And our first priority is to protect your\r\nprivacy and keep your personal information safe. Marriage Solution BD is not\r\njust a name, it has many years of experience and a successful, trustworthy,\r\nelite marriage company. Marriage Solution BD From the very beginning, it has\r\nhad incredible success with its suitable proposals and it has married thousands\r\nof candidates. As a successful marriage company, we have a reputation for\r\nproviding professional marriage services in Bangladesh. We don???t follow\r\nconventional trends, we work in advance and modern touches. Please let us know\r\nif you encounter any problems with our services. Our goal is not only to help\r\npeople meet each other, but also to get married. <br><br></div></div> </div></div>', 0, 1, 1, 1, '2021-01-18 02:14:18', '2021-03-03 07:00:22'),
(40, 17, 'Part 2 alternative', '<div class=\"\" style=\"background: #0b0b0b url(/img/back2.png) no-repeat center top; background-size: 100%;\"> <div class=\"prod-ops text-center py-5\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat right top, url(/img/bg-boxbottomleft.png) no-repeat left bottom, url(/img/bg-boxbottomright.png) no-repeat right bottom;\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic;\">Our Specialty</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area\"> <div class=\"single-services-area appear-animation\"  data-appear-animation=\"fadeInRight\" data-appear-animation-delay=\"400\">?? <div class=\"service-icon w3-text-white container text-justify px-md-4\">Marriage Solution BD\'s philosophy is to change attitudes and change misconceptions about marriage media by raising awareness among the people. Changing attitudes will change lives. The company is working with new entrepreneurs and far-reaching plans to reach out to millions of people across the country by setting up branch offices in each divisional city.??<br><br></div></div> </div></div>', 0, 1, 1, 1, '2021-01-18 02:45:31', '2021-03-03 07:02:54'),
(41, 18, 'Part 2 alternative', '<div class=\"\" style=\"background: #0b0b0b url(/img/back2.png) no-repeat center top; background-size: 100%;\"> <div class=\"prod-ops text-center py-5\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat right top, url(/img/bg-boxbottomleft.png) no-repeat left bottom, url(/img/bg-boxbottomright.png) no-repeat right bottom;\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic;\">Our Quality</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area\"> <div class=\"single-services-area appear-animation\"  data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\">?? <div class=\"service-icon w3-text-white container text-justify px-md-4\">Doctor of any profession, engineer, industrialist, banker, employed in a multinational company, living abroad permanently, PhD, BCS cadre, chartered accountant, politician, barrister, government official, unmarried, old, divorced, widow, infertile The journey begins with interest and action. We are committed to being your traveling companion through the exchange of cooperation and utmost efforts on the basis of respect. May the Most Praiseworthy Merciful help us. <br><br></div></div> </div></div>', 0, 1, 1, 1, '2021-01-18 02:57:14', '2021-03-03 07:03:43'),
(44, 19, 'Part 3', '<br>\r\n<div class=\"w3-xlarge w3-text-green text-center\">\r\nTerms & Condition\r\n</div>\r\n<br>\r\n<div class=\"container\">\r\n<ol>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> The service delivery time of Marriage Solution BD is from 10.00 am to 7.00 pm.</li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\">\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> Without the guardian, the work is not done only under the supervision of the spouse.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInLeft\" data-appear-animation-delay=\"400\"> At the time of customer registration, the customer\'s biodata and his / her presentable 3 copies of 4R photo and photocopy of national identity card should be submitted to the office.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInLeft\" data-appear-animation-delay=\"400\"> It is forbidden to give any kind of misinformation to each other. You will bear the responsibility for the wrong information. Marriage Solution BD can never be blamed in that case.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInRight\" data-appear-animation-delay=\"400\"> The total registration fee has to be paid at the time of registration and the registration fee is non-refundable. If any part of the registration fee is due due to any financial problem of the customer, it has to be paid within maximum 7 days from the date of registration and only one person will be provided service against that registration, service will not be coordinated with any other customer.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInRight\" data-appear-animation-delay=\"400\"> Marriage Solution BD will provide a maximum of 1 (one) year service for you after depositing the fee against the said registration.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> Cash, bKash, bank account-pay check and payment can be made online. The work of marriage of orphans and helpless people is supported free of cost in Marriage Solution BD.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> Customer support is required for the presence of a representative of Marriage Solutions BD at the ceremony.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInLeft\" data-appear-animation-delay=\"400\"> It is requested that a representative appointed by the Marriage Solution BD be present at any event / discussion between the two parties from the time of becoming a member of the Marriage Solution BD till the marriage is consummated or to inform the organization of all the information in due course.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInLeft\" data-appear-animation-delay=\"400\"> Before finalizing the date and time of the wedding, both parties have to take responsibility for finding out about the bride / groom.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInRight\" data-appear-animation-delay=\"400\"> After the couple chooses each other, the parents have to make a decision as soon as possible with the consent of both the parties through sincerity through communication.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInRight\" data-appear-animation-delay=\"400\"> If a member is already acquainted with each other after the meeting and arranges the marriage without informing us, then the member must pay all the money due to Marriage Solution BD.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> If the marriage is settled by their own efforts or by any other means, the Marriage Solution BD should be informed immediately.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> Both the parties will discuss all the issues including debts, finalizing the day and date of Mohrana and will decide on their own responsibility. If needed, Marriage Solution BD will assist you as much as possible.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> At the time of customer registration, the account-pay check of marriage fee money has to be submitted in advance. The marriage fee has to be paid as soon as the marriage is final.\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> Any other expenses or gift items other than the member fee / marriage fee will be at your own risk.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> We must try to be present at all the events of the marriage organization such as bug-donation, gaye halud, biye, walima etc. It is the duty of the marriage solution BD to make it a success and we must provide the opportunity for the institutional promotion of the marriage solution BD.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> As a proof of the success of the marriage organized through Marriage Solution BD, the customer should not have any objection in promoting the various social media and online sites of the organization such as pictures, videos etc.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> The company will continue its activities in accordance with the appropriate rules. No pressure can be exerted on the company to provide services or marriage.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> Violation of any of the conditions mentioned will force the Marriage Solution BD to take recourse to the law through its own lawyer. THE COOPERATION OF PARENTS AND SPOUSES IS DESIRABLE TO PERFORM THE GOOD WORK</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\">  Birth, death, marriage are in the hands of God Almighty, try us, the decision is yours.  After all our efforts, it is your responsibility to accept whatever the outcome may be. Please refrain from abusing any customer, representatives of the organization. The rest of your life is the best time of your life.</li>\r\n<li class=\"appear-animation \" data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\"> Give your signature voluntarily, consciously, in a healthy mind, without any objection and peacefully reading the terms and conditions, knowing all the issues.</li>\r\n<ol>\r\n</div>', 0, 1, 1, 1, '2021-01-23 07:09:06', '2021-03-03 07:09:35'),
(45, 19, 'Part 4', '<div class=\"container w3-green w3-border-purple w3-large text-center\">WE ARE ALWAYS STRIVING AND COMMITTED TO PROVIDE SAFE AND SECURE SERVICES.\r\nYOUR COOPERATION IN THIS ENDEAVOR IS HIGHLY DESIRABLE </div><br>', 0, 1, 1, 1, '2021-01-23 07:18:45', '2021-02-02 05:24:01'),
(46, 30, 'Part 1', '<div class=\"w3-animate-zoom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div><div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 0, 1, 1, '2021-01-23 22:04:19', '2021-03-06 00:09:51'),
(47, 30, 'Part 2', '<div class=\"\" style=\"background: #0b0b0b url(/img/back2.png); \"> <div class=\"prod-ops text-center py-5\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat right top, url(/img/bg-boxbottomleft.png) no-repeat left bottom, url(/img/bg-boxbottomright.png) no-repeat right bottom;\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic;\">Our Service Solution</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area \"> <div class=\"single-services-area\">?? <div class=\"service-icon w3-text-white- container text-justify px-md-4 text-center\"> <h5 class=\"text-white\">We take the work forward in a few steps to provide accurate and fast service to our customers</h5> \r\n<div class=\"row\">\r\n    <div class=\"col-md-4 mt-5 appear-animation\"  data-appear-animation=\"fadeInLeft\" data-appear-animation-delay=\"400\">\r\n\r\n        <div class=\"w3-card rounded text-center mb-5 h-100 mt-3 \"  style=\"background: url(https://www.marriagesolutionbd.com/storage/media/image/HLG021031300.jpg); background-size: 100%\"><div class=\"h-100\"><div class=\"w3-tag rounded w3-deep-orange w3-card mt-n5\" style=\"margin-top: -4rem;\"><h4 class=\"text-white\" style=\"text-transform: capitalize; !important\">Marketing Department</h4></div><p class=\"p-2 w3-text-white text-justify m-auto\">We have a marketing team that is smart, highly educated, loyal, sincere, brutal, skilled, experienced and clear to provide the right  service to those customers who have a son or daughter to marry but are\r\n            not getting the right medium.</p></div>\r\n</div>\r\n    </div>\r\n    <div class=\"col-md-4 mt-5 appear-animation\"  data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"100\">\r\n        <div class=\"w3-card rounded text-center mb-5 h-100  mt-3\" style=\"background: url(https://www.marriagesolutionbd.com/storage/media/image/PBDE21031302.jpg); background-size: 100% 100%\"><div class=\"w3-tag rounded w3-orange mt-n5 \" style=\"margin-top: -4rem;\"><h4 class=\"text-white\" style=\"text-transform: capitalize; !important\">Service Department</h4></div><p class=\"text-white p-2 text-justify m-auto\">We have a very large service team for registered customers\r\n            to find the right partner and make the right matchmaking.</p></div>\r\n    </div>\r\n    <div class=\"col-md-4 mt-5\">\r\n        <div class=\"appear-animation w3-card rounded text-center mb-5 h-100 mt-3\"  style=\"background: url(https://www.marriagesolutionbd.com/storage/media/image/bew121031300.jpg); background-size: 100% 100%\"   data-appear-animation=\"fadeInRight\" data-appear-animation-delay=\"100\"><div class=\"w3-tag rounded w3-green mt-n5\" style=\"margin-top: -4rem;\"><h4 class=\"text-white\" style=\"text-transform: capitalize; !important\">IT Department</h4></div><p class=\"text-white p-2 text-justify m-auto\">We also have an experienced IT team to provide the right profile to the registered customers.</p></div>\r\n    </div>\r\n</div>\r\n<br></div></div> </div></div>', 0, 1, 1, 1, '2021-01-23 22:05:14', '2021-03-13 03:57:35'),
(48, 31, 'Part 1', '<div class=\"w3-animate-zoom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div><div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div><br>\r\n<h2 align=\"center\" style=\"margin: 15pt 0in 11.25pt; text-align: center; color: #9c27b0;\">Help and Customer Support</h2>', 0, 0, 1, 1, '2021-01-23 23:29:58', '2021-03-06 00:10:09'),
(50, 32, 'Part 1', '<div class=\"w3-animate-zoom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div><div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div><br>', 0, 0, 1, 1, '2021-01-23 23:34:09', '2021-03-06 00:10:13'),
(51, 32, 'Part 2', '<p><div class=\"container\"><br><h2 style=\"text-align: center; \"><span style=\"color: rgb(156, 0, 255);\">Employee Stories</span></h2><p>This page will be updated soon.</p></div><br></p>', 0, 1, 1, 1, '2021-01-23 23:34:26', '2021-01-23 23:35:15'),
(52, 33, 'Part 1', '<div class=\"container mt-3\">\r\n<div class=\"w3-row w3-card w3-round mb-3\" style=\"background: rgb(0, 0, 0) url(\'https://www.marriagesolutionbd.com/storage/media/image/VV6Z21012428.png\') no-repeat top right; background-size: auto 100%;\"> \r\n            <div class=\"w3-half w3-mobile w-100 d-sm-none d-md-none d-lg-none\"> \r\n                <img class=\"w-100\" src=\"https://www.marriagesolutionbd.com/storage/media/image/VV6Z21012428.png\" alt=\"\">\r\n            </div>\r\n            <div class=\"w3-container w3-half w3-purple text-justify\"><h2 class=\"text-white p-0 m-0\">Our Values</h2><p class=\"text-white\">\r\n                    Put Customers First - Caring for and respecting customers is at the core of everything we do. It defines our work and shapes our culture, radiating out to our shareholders and communities. <br>\r\n                    \r\n                    Be the Best - We are relentless in our search for new and better ways of doing things. As a leader in our industry, we constantly raise the bar with our innovation and dedication to our customers. <br>\r\n                    \r\n                    Make Things Easier - Products in our industry aren???t always easy to understand. That???s why we are always looking for simpler ways to connect customers to the best solutions.  <br>\r\n                    \r\n                    Succeed Together - We live by a collective commitment to honesty, integrity and diversity. We are open and inclusive, taking and applying the best ideas from every part of our. <br>\r\n                    On screens smaller than 601 pixels it resizes to 100%. <br>\r\n                </p>\r\n            </div>\r\n            \r\n        </div>\r\n</div>', 0, 0, 1, 1, '2021-01-24 05:37:55', '2021-02-16 03:54:36'),
(53, 33, 'Part 2', '<div class=\"container\">\r\n<div class=\"w3-row w3-card w3-round mb-3\" style=\"background: rgb(0, 0, 0) url(\'https://www.marriagesolutionbd.com/storage/media/image/wjtu21012427.jpg\') no-repeat top left; background-size: 25% 100%;\"> \r\n            <div class=\"w3-mobile d-sm-none d-md-none d-lg-none\"> \r\n                <img class=\"w-100\" src=\"https://www.marriagesolutionbd.com/storage/media/image/wjtu21012427.jpg\"> \r\n            </div>\r\n            <div class=\"w3-container w3-threequarter w3-white w3-right\">??\r\n                <h2 class=\"m-0 p-0\">A great place to work</h2>??<p class=\"\">We know that a successful team is made up of happy people. So, we create an environment to support the physical, social and emotional wellbeing of our employees. Our employee Thrive program comprises several initiatives to achieve this vision, including: Diversity and Inclusion Committee; Social Clubs; and Corporate Social Responsibility.</p>\r\n            </div>\r\n        </div>\r\n</div>', 0, 0, 1, 1, '2021-01-24 06:33:48', '2021-02-16 03:54:43'),
(54, 33, 'Part 3', '<div class=\"container\">\r\n<div class=\"w3-row w3-card w3-round mb-3\" style=\"background: rgb(0, 0, 0) url(\'https://www.marriagesolutionbd.com/storage/media/image/V1cE21012428.jpg\') no-repeat top right; background-size: auto 100%;\"> \r\n            <div class=\"w3-mobile d-sm-none d-md-none d-lg-none\"> \r\n                <img class=\"w-100\" src=\"https://www.marriagesolutionbd.com/storage/media/image/V1cE21012428.jpg\"> \r\n            </div>\r\n            <div class=\"w3-container w3-threequarter w3-white \">??\r\n                <h2 class=\"p-0 m-0\">Join us</h2>??\r\n                ??<p class=\"\">As the leading Insurance Company in Bangladesh, Marriage Solution BD offers you various opportunities across different roles and domains. We also help you pursue a career that brings growth and satisfaction. <br>\r\nYou can be a part of Marriage Solution BD family in one of the two ways ??? join us as an employee be a Financial Associate. In either option, you will have a chance to learn from the best in the industry and grow your career.</p>\r\n            </div>\r\n        </div>\r\n</div>', 0, 0, 1, 1, '2021-01-24 06:37:10', '2021-02-16 03:54:52'),
(69, 31, 'Page Title part', '<div class=\"text-center my-5\">\r\n                <h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic;\">Help & Customer Support</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> \r\n            </div>', 0, 1, 1, 1, '2021-02-01 23:23:28', '2021-03-06 23:40:33'),
(65, 33, 'Part 4', '<div class=\"w3-animate-zoom\"><img src=\"https://marriagesolutionbd.com/storage/media/image/XDV621011814.jpg\" style=\"width: 100%;\"></div>\r\n<div class=\"text-center\"><div class=\"text-center w3-large p-2 w3-text-black\" style=\"background: url(https://marriagesolutionbd.com/img/bg-ribon.jpg) repeat;min-height: 20px;width: 100%;font-weight:bold\">Marriage Solution BD: The Largest Matrimony Organization in Bangladesh</div></div>', 0, 1, 1, 1, '2021-02-16 03:56:50', '2021-02-17 00:47:56'),
(63, 20, 'Part 2', '<div class=\"container-fluid py-5\" style=\"background: url(../../img/pay-bg.jpeg)\"><div class=\"w3-card- w3-round-large\"><div class=\"w3-card- text-center py-2 \"><h2 class=\"m-0 py-2 px-3\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic; text-transform: capitalize; !important\"><u>Payment Method</u></h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png-) no-repeat center bottom;\"></div> </div><div class=\"card-body p-lg-3 p-0\"><div class=\"row px-md-5\"><div class=\"col-md-6 mb-2 appear-animation\"  data-appear-animation=\"fadeInRight\" data-appear-animation-delay=\"400\"><div class=\"w3-card w3-cyan w3-round-medium\"  style=\"background: url() no-repeat; background-size: 100% 100%;\"><div class=\"card-body- p-3\" ><h3><b>Bank Payment</b></h3><table class=\"text-dark table-sm\"><tr class=\"text-dark\"><th>Bank Name</th><td>:</td><td><b>Dutch Bangla Bank Ltd.</b></td></tr><tr><th>Branch</th><td>:</td><td><b>Mohammadpur, Dhaka</b></td></tr><tr><th>Account No</th><td>:</td><td><b>258.110.3970</b></td></tr><tr><th>Online Tracking No.</th><td>:</td><td><b>090263286</b></td></tr></table></div></div>\r\n</div>\r\n<div class=\"col-md-6 mb-2 appear-animation\"  data-appear-animation=\"fadeInLeft\" data-appear-animation-delay=\"400\"><div class=\"w3-card w3-cyan w3-round-medium\" style=\"background: url() no-repeat; background-size: 100% 100%;\"><div class=\"card-body- p-3\" ><h3><b>Bkash Payment</b></h3><table class=\" table-sm\"><tr><th>Bkash Account No.</th><td>: </td><td><b>01720504504</b></td></tr><tr><th></th><td>:</td><td><b>01633036062</b></td></tr><tr><td> ?? </td></tr><tr><td> ?? </td></tr></table></div></div>\r\n</div>\r\n</div>\r\n</div></div></div>', 0, 1, 1, 1, '2021-02-06 05:53:55', '2021-03-03 06:58:54');
INSERT INTO `page_items` (`id`, `page_id`, `title`, `content`, `editor`, `active`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(64, 22, 'Part 2 Alt', '<div class=\"\" style=\"background: #0b0b0b url(/img/back2.png) no-repeat center top; background-size: 100%;\"> <div class=\"prod-ops text-center py-5\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat right top, url(/img/bg-boxbottomleft.png) no-repeat left bottom, url(/img/bg-boxbottomright.png) no-repeat right bottom;\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic; text-transform: capitalize; !important\">Our Vision</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area\"> <div class=\"single-services-area appear-animation\"  data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\">?? <div class=\"service-icon w3-text-white container text-justify px-md-4\">Where and how to find a suitable bride / groom? Are the people you associate with experienced in matters as important as marriage in the life of you and your beloved child? Have you been able to properly observe all the religious provisions in your child\'s marriage? In today\'s society, both small families and men and women are keeping pace with the times when they become employed, resulting in a lack of intimacy as well as friendship. As a result, there is a lack of sincerity and lack of time in the sincerity of friends and relatives including parents and guardians in the marriage process. In that case, Marriage Solution BD is working hard to be a part of the family to complete the marriage work with their intellectual knowledge and experience.<br><br></div></div> </div></div>', 0, 1, 1, 1, '2021-02-07 22:46:25', '2021-03-03 07:05:16'),
(67, 21, 'Part 2', '<div class=\"\" style=\"background: #0b0b0b url(/img/back2.png) no-repeat center top; background-size: 100%;\"> <div class=\"prod-ops text-center py-5\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat right top, url(/img/bg-boxbottomleft.png) no-repeat left bottom, url(/img/bg-boxbottomright.png) no-repeat right bottom;\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic; text-transform: capitalize; !important\">Our Mission</h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area appear-animation\"  data-appear-animation=\"fadeInDown\" data-appear-animation-delay=\"400\"> <div class=\"single-services-area\">?? <div class=\"service-icon w3-text-white container text-justify px-md-4\">Marriage  Solution  BD  is  always  engaged  in  human  service.  Where  we  are  determined  to  find  your  preferred  partner through respect, sincerity and co-operation and maximum effort. We are working on a far-reaching plan to be your trust and  we  have  a  large  database  of  potential  and  aristocratic  families  and  brides  around  the  world.  We  also  pay  special attention to your privacy. All the profiles that we have are highly qualified and we provide CV according to the customer\'s demand. The main goal of Marriage Solution BD is to find the right life partner, work for human service and marriage.<br><br></div></div> </div></div></div>', 0, 1, 1, 1, '2021-02-17 03:23:08', '2021-03-03 07:06:45'),
(66, 33, 'Part 5', '<div class=\"\" style=\"background: #0b0b0b url(/img/back2.png); \"> <div class=\"prod-ops text-center py-5\" style=\"background: url(/img/bg-boxleft.png) no-repeat left top, url(/img/bg-boxright.png) no-repeat right top, url(/img/bg-boxbottomleft.png) no-repeat left bottom, url(/img/bg-boxbottomright.png) no-repeat right bottom;\"><h2 class=\"m-0 p-0\" style=\"color: gold; font-family: \'Lobster Two\', cursive; font-style: italic;\"><u>Career</u></h2><div style=\"width:100%; height: 30px; background: url(/img/leaf.png) no-repeat center bottom;\"></div> <div class=\"total-single-service-area \"> <div class=\"single-services-area\">?? <div class=\"service-icon w3-text-white- container text-justify px-md-4 text-center\"> <h5 class=\"text-white\"></h5> \r\n<div class=\"row\">\r\n    <div class=\"col-md-12 mt-5 appear-animation\"  data-appear-animation=\"fadeInLeft\" data-appear-animation-delay=\"400\">\r\n        <div class=\"w3-card rounded text-center mb-5 h-100 mt-3 \" style=\"background: url(https://www.marriagesolutionbd.com/storage/media/image/T5aw21031358.jpg); background-size: 100%;\" ><div class=\"w3-tag rounded w3-brown w3-card mt-n5\" style=\"margin-top: -4rem;\"><h4 class=\"text-white\" style=\"text-transform: capitalize; !important\">Our Values</h4></div><p class=\"p-2 px-5 w3-text-black text-justify\">Put Customers First - Caring for and respecting customers is at the core of everything we do. It defines our work and shapes our culture, radiating out to our shareholders and communities. <br>\r\n                    \r\n                    Be the Best - We are relentless in our search for new and better ways of doing things. As a leader in our industry, we constantly raise the bar with our innovation and dedication to our customers. <br>\r\n                    \r\n                    Make Things Easier - Products in our industry aren???t always easy to understand. That???s why we are always looking for simpler ways to connect customers to the best solutions.  <br>\r\n                    \r\n                    Succeed Together - We live by a collective commitment to honesty, integrity and diversity. We are open and inclusive, taking and applying the best ideas from every part of our. <br>\r\n                    On screens smaller than 601 pixels it resizes to 100%. <br></p></div>\r\n    </div>\r\n    <div class=\"col-md-12 mt-5 appear-animation\"  data-appear-animation=\"fadeInRight\" data-appear-animation-delay=\"400\">\r\n        <div class=\"w3-card  rounded text-center mb-5 h-100  mt-3\"  style=\"background: url(https://www.marriagesolutionbd.com/storage/media/image/07Lz21031358.jpg); background-size: 100%;\"><div class=\"w3-tag rounded  w3-blue-grey mt-n5  w3-card\" style=\"margin-top: -4rem;\"><h4 class=\"text-white\" style=\"text-transform: capitalize; !important\">A great place to work</h4></div><p class=\"text-dark p-5 text-justify\"><span >We know that a successful team is made up of happy people. So, we create an environment to support the physical, social and emotional wellbeing of our employees. Our employee Thrive program comprises several initiatives to achieve this vision, including: Diversity and Inclusion Committee; Social Clubs; and Corporate Social Responsibility.</span></p></div>\r\n    </div>\r\n    <div class=\"col-md-12 mt-5 appear-animation\"  data-appear-animation=\"fadeInUp\" data-appear-animation-delay=\"400\">\r\n        <div class=\"w3-card rounded text-center mb-5 h-100 mt-3\"  style=\"background: url(https://www.marriagesolutionbd.com/storage/media/image/2e3x21031358.jpg); background-size: 100%;\" ><div class=\"w3-tag rounded w3-green  mt-n5  w3-card\" style=\"margin-top: -4rem;\"><h4 class=\"text-white\" style=\"text-transform: capitalize; !important\">Join us</h4></div><p class=\"text-dark p-2 px-5 text-justify\">As the leading Insurance Company in Bangladesh, Marriage Solution BD offers you various opportunities across different roles and domains. We also help you pursue a career that brings growth and satisfaction. <br>\r\nYou can be a part of Marriage Solution BD family in one of the two ways ??? join us as an employee be a Financial Associate. In either option, you will have a chance to learn from the best in the industry and grow your career.</p></div>\r\n    </div>\r\n</div>\r\n<br></div></div> </div></div></div>', 0, 1, 1, 1, '2021-02-17 00:47:39', '2021-03-13 03:48:32'),
(68, 31, 'form_address', '<div class=\"card w3-round mt-0 p-4 appear-animation\"  data-appear-animation=\"fadeInDown\" data-appear-animation-delay=\"400\" style=\"background: #673003; font-family: cursive;\"><div class=\"w3-text-medium w3-center\"><p style=\"color: gold; font-weight: bold;\">ASAD GATE<br><span style=\"color: white;\">01720504504 </span> <br><span style=\"color: white;\">01633036062</span></p></div> </div><div class=\"card w3-round mt-0 p-4 appear-animation\"  data-appear-animation=\"fadeInDown\" data-appear-animation-delay=\"400\" style=\"background: #673003;font-family: cursive;\"><div class=\"w3-text-medium w3-center\"><p style=\"color: gold; font-weight: bold;\">GULSHAN<br><span style=\"color: white;\">01777118606 </span> <br><span style=\"color: white;\">01907550361</span></p> </div></div><div class=\"card w3-round mt-0 p-4 appear-animation\"  data-appear-animation=\"fadeInDown\" data-appear-animation-delay=\"400\"  style=\"background: #673003;font-family: cursive;\"><div class=\"w3-text-medium w3-center\" ><p style=\"color: gold; font-weight: bold;\">UTTARA<br><span style=\"color: white;\">01791266153 </span> <br> <span style=\"color: white;\">01776687989</span></p></div></div><div class=\"card w3-round mt-0 p-4 appear-animation\"  data-appear-animation=\"fadeInDown\" data-appear-animation-delay=\"400\"  style=\"background: #673003;font-family: cursive;\"><div class=\"w3-text-medium w3-center\"><p style=\"color: gold; font-weight: bold;\">KAKRAIL<br> <span style=\"color: white;\">01780414897 </span> <br><span style=\"color: white;\">01319378112</span></p></div></div>\r\n                        <div class=\"card w3-round mt-0 p-4 appear-animation\"  data-appear-animation=\"fadeInDown\" data-appear-animation-delay=\"400\"  style=\"background: #673003;font-family: cursive;\">\r\n                                <div class=\"w3-text-medium w3-center\">\r\n                                    <p style=\"color: gold; font-weight: bold;\">CHATTOGRAM<br>\r\n                                        <span style=\"color: white;\">01617014140 </span> <br>\r\n                                        <span style=\"color: white;\">01617013455</span>\r\n                                    </p>\r\n                                </div>\r\n                        </div>', 0, 1, 1, 1, '2021-03-06 23:32:38', '2021-03-06 23:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('marriagebd2012@gmail.com', '$2y$10$/jIuGPF4chsFIe36C38tm.qsLBHl9hDXxklVd2zwxcJiSvVL.ItJS', '2019-01-07 19:22:46'),
('sanam_sam06@yahoo.com', '$2y$10$cDl2IMv/ZBROxiScMUx7lODNBxLB0X8YM1EAQnqWA7KEIj17.Q5B6', '2019-10-19 19:17:51'),
('emranapon4@gmail.com', '$2y$10$CVRe5Nj0IfLJztb37dcRbetnDiS3yJfnCCm4mZ98syEx3t9TnY1vK', '2019-11-05 16:48:29'),
('aminulhaqueok@gmail.com', '$2y$10$fC.uM/IIHILKPfeUYd9b7usC9BQYr5K/8HWPq./HLDjbBfZ.v7edq', '2020-03-17 02:32:43'),
('tanvirectbd@gmail.com', '$2y$10$0p.ZFywamp0Qki5nVffN7u4xK5rdWyudemczcXKgc.lijLMHbpo8m', '2021-01-30 09:11:15'),
('masudbdm@gmail.com', '$2y$10$O2Prx9jr/rWYj/A8U91h9.Kcuebq82lEoOzgFh8lKNc.m1nwbC7ze', '2021-02-01 04:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_img_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_img_original_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_img_mime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_img_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `date` date DEFAULT NULL,
  `headline` tinyint(1) NOT NULL DEFAULT 0,
  `front_slider` tinyint(1) NOT NULL DEFAULT 0,
  `publish_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'temp',
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `excerpt`, `feature_img_name`, `feature_img_original_name`, `feature_img_mime`, `feature_img_ext`, `tags`, `categories`, `meta_title`, `meta_keywords`, `meta_description`, `read`, `date`, `headline`, `front_slider`, `publish_status`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'New Title', '<p>New Desc</p>', 'New Excerpt', '1yEgl02Z1616148710.png', 'Ladies-Lounge_Banner.png', NULL, 'png', 'new, tag', NULL, 'some meta', 'some keyword', 'some desc', 0, NULL, 0, 1, 'published', 1, NULL, '2021-03-19 03:56:16', '2021-03-19 04:11:51', NULL),
(2, 'New Title', '<p>New Desc</p>', 'New Excerpt', NULL, 'Ladies-Lounge_Banner.png', NULL, 'png', 'new, tag', NULL, 'some meta', 'some keyword', 'some desc', 0, NULL, 0, 1, 'published', 1, NULL, '2021-03-19 04:16:07', '2021-03-19 04:25:04', NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 'temp', 1, NULL, '2021-03-19 04:21:33', '2021-03-19 04:21:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `category_id`, `post_id`, `addedby_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2021-03-19 04:11:51', '2021-03-19 04:11:51'),
(2, 2, 2, 1, '2021-03-19 04:16:07', '2021-03-19 04:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_second_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_identities`
--

CREATE TABLE `social_identities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'new', '2021-03-19 04:09:08', '2021-03-19 04:09:08'),
(2, 'tag', '2021-03-19 04:09:08', '2021-03-19 04:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `branch_id`, `team_name`, `name`, `designation`, `education`, `mobile`, `image`, `active`, `created_at`, `updated_at`) VALUES
(14, 1, 'Marketing Team', 'Sohagi Parvin', 'Marketing Executive', 'Hon\'s in English', '01308311911', 'storage/teammember/lj5w321P1615183022.jpg', 1, '2021-03-07 06:43:08', '2021-03-08 00:03:15'),
(15, 3, 'Marketing Team', 'Amena Akter Moon', 'Marketing Executive', 'Hon\'s in Accounting', '01729261854', 'storage/teammember/DIJjdo0T1615183515.jpg', 1, '2021-03-07 06:44:42', '2021-03-14 03:52:48'),
(16, 2, 'Marketing Team', 'Lamisa Kabir', 'Marketing Executive', 'MBA in Accounting', '01777118606', 'storage/teammember/2WJnlJDP1615182988.jpg', 1, '2021-03-07 06:48:13', '2021-03-08 00:13:07'),
(17, 2, 'Marketing Team', 'Nasrin Sultana', 'Marketing Executive', 'Masters in Social Welfare', '01907550361', 'storage/teammember/7zJ6ZR2n1615182972.jpeg', 1, '2021-03-07 06:49:09', '2021-03-08 00:12:54'),
(18, 3, 'Marketing Team', 'Shoma Akter', 'Marketing Executive', 'BBA in Marketing', '01776687989', 'storage/teammember/PaAlwilK1615183496.jpg', 1, '2021-03-07 06:50:07', '2021-03-08 00:09:28'),
(20, 5, 'Marketing Team', 'Jhorna Begum', 'Marketing Executive', 'Masters in Bangla', '01780414897', 'storage/teammember/hLSGQ97U1615182901.jpg', 1, '2021-03-07 06:52:03', '2021-03-08 00:12:43'),
(21, 5, 'Marketing Team', 'Jhuma Akter', 'Marketing Executive', 'Masters in Political Science', '01319378112', 'storage/teammember/fsRvzK0A1615182845.jpg', 1, '2021-03-07 06:53:40', '2021-03-08 00:09:49'),
(22, 6, 'Marketing Team', 'Faisal Bin Abdullah', 'Marketing Executive', 'MBA in HRM', '01617014140', 'storage/teammember/tRYCgncM1615182827.jpeg', 1, '2021-03-07 06:54:36', '2021-03-08 00:09:38'),
(23, 6, 'Marketing Team', 'Rabeya Sultana Rashme', 'Marketing Executive', 'Hon\'s in English', '01617013455', 'storage/teammember/5lvMER5U1615183739.jpeg', 1, '2021-03-07 06:55:23', '2021-03-08 00:08:59'),
(24, 1, 'Service Team', 'Pinky Das', 'Customer Support Executive', 'MBA in Accounting', '01970504504', 'storage/teammember/QGCQhb3n1615182799.jpg', 1, '2021-03-07 07:05:50', '2021-03-08 00:15:16'),
(25, 1, 'Service Team', 'Afsana Rahman Kona', 'Customer Support Executive', 'Diploma in L. Medicine', '01992433328', 'storage/teammember/5AMiWMVq1615186310.jpeg', 1, '2021-03-07 07:06:58', '2021-03-10 23:24:53'),
(26, 1, 'Service Team', 'Nahida Emu', 'Customer Support Executive', 'BSc in Computer Science', '01631915342', 'storage/teammember/89W3sMSd1615183401.jpg', 1, '2021-03-07 07:07:42', '2021-03-08 00:03:21'),
(27, 1, 'Service Team', 'Lazina Kabir', 'Customer Support Executive', 'BBA in Finance', '01995585233', 'storage/teammember/cqlOooYc1615183951.jpg', 1, '2021-03-07 07:08:28', '2021-03-08 00:12:31'),
(28, 1, 'Service Team', 'Halima Rehmi', 'Customer Support Executive', 'BSc in EEE', '01729261876', 'storage/teammember/He3MoDtL1615183371.jpg', 1, '2021-03-07 07:09:20', '2021-03-08 00:02:51'),
(29, 1, 'IT Team', 'Md Aminul Islam Amin', 'IT Executive Officer', 'Diploma in CS', '01720504504', 'storage/teammember/3CyO5Rci1615182339.jpg', 1, '2021-03-07 07:13:22', '2021-03-08 00:20:05'),
(30, 1, 'IT Team', 'Prince Baroi Tonmoy', 'IT Executive Officer', 'BSc in CSE', '01720504504', 'storage/teammember/EWBwmE0Q1615182668.jpeg', 1, '2021-03-07 07:15:13', '2021-03-08 00:22:37'),
(31, 1, 'IT Team', 'Masud Parvej Bappi', 'R & D Officer', 'Hon\'s in LLM, LLB', '01720504504', 'storage/teammember/6gyO3A0a1615786190.png', 1, '2021-03-07 07:16:56', '2021-03-14 23:31:27'),
(33, 2, 'Marketing Team', 'Zubaida Gulshanara Zinia', 'Marketing Executive', 'Bsc Msc In Foor & Nutrition', '01705761333', 'storage/teammember/EPjzJKjG1615435619.jpg', 1, '2021-03-10 22:06:59', '2021-03-10 22:06:59'),
(35, 1, 'CEO', 'Shakawat Hossain Shuvo', 'Managing Director & CEO', '02-48117797', '01720504504', 'storage/teammember/iD2JisHT1615619228.jpg', 1, '2021-03-13 01:07:08', '2021-03-13 02:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_temp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `profile` tinyint(1) DEFAULT 0,
  `gender` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skin_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_level_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `looking_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ext` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'online',
  `dob` date DEFAULT NULL,
  `check_count` int(11) NOT NULL DEFAULT 0,
  `edit_count` int(11) NOT NULL DEFAULT 0,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `package` int(11) NOT NULL DEFAULT 0,
  `expired_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `loggedin_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `username`, `email`, `password`, `password_temp`, `active`, `profile`, `gender`, `country`, `country_other`, `location`, `state`, `city`, `post_code`, `lat`, `lng`, `profile_created_by`, `religion`, `social_order`, `skin_color`, `education_level`, `education_level_other`, `profession`, `profession_other`, `marital_status`, `height`, `weight`, `looking_for`, `img_name`, `file_name`, `file_ext`, `user_type`, `dob`, `check_count`, `edit_count`, `mobile_verified_at`, `email_verified_at`, `addedby_id`, `editedby_id`, `package`, `expired_at`, `remember_token`, `created_at`, `updated_at`, `loggedin_at`, `deleted_at`) VALUES
(1, 'Masud Hasan', '01820368485', '1', 'masudbdm@gmail.com', '$2y$10$ZbiqTTvarezJzeWSP7QJoOQkTGmhME1byvatVO1oUplaTjrcZYGOW', NULL, 1, 1, 'Male', 'Bangladesh', NULL, 'Nawabpur Ujani Barura Kachua Chandpur Road, Nowabpur, Bangladesh', 'Comilla', 'Comilla', '3510', '23.4039366', '90.92648859999997', 'Self', 'Muslim', '', 'White', 'HSC', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 4 Inch', '55 KG', 'Female', '1_pp_2020_12_07_065924_70108577.gif', NULL, NULL, 'online', '1983-01-19', 0, 8, NULL, NULL, 1, 1, 1, '2020-02-24 06:00:00', '8nkLqVSOYsl0iXzfs4lW9GwmjCOqDrND96GsPHIB4XSPUxoG54AGeNS4X7i2', '2018-10-27 18:55:46', '2021-03-13 02:34:41', NULL, NULL),
(2, 'Salam Ahmed', '01678039822', '2', 'salambdm@gmail.com', '$2y$10$xjvPj/6ZSxfO1Wu.3ZBiG.54imGBV637H.lm61.T4cIusbDLDii36', '967703', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Salafi', NULL, 'Fair', 'High School Pass', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 2 Inch', '32 KG', 'Female', '2_pp_2021_01_07_060909_60456967.jpg', NULL, NULL, 'online', '1983-01-19', 0, 0, NULL, NULL, 1, 1, 0, NULL, 'IKPVJ5clogEsGDIkHjbOndkPRET1dBnaLUIi8dwO2mEbMayo5z8llEOKzYHl', '2018-11-06 10:38:59', '2021-01-07 00:09:13', NULL, NULL),
(3, 'Masud', '01715995997', '3', 'istore.masud@gmail.com', '$2y$10$uswun7xZPEegc/Ja6.eJDOQVgNUCKyNPcUUY3LeE52GL5enfgARDu', '736493', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Just Muslim', NULL, 'Fair', 'HSC', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 4 Inch', '37 KG', 'Female', '3_pp_2021_01_07_060946_53484227.png', NULL, NULL, 'online', '1984-01-19', 0, 0, NULL, NULL, 1, 1, 0, NULL, NULL, '2018-11-06 10:42:34', '2021-01-07 00:09:47', NULL, NULL),
(4, 'Mamun', '01922215642', '4', 'mamunbdm@gmail.com', '$2y$10$GTVgAguMmhZjTtex2aJ.kOqfTH1TTEu41fV9qzw6YbrzGuC.wPFne', '732481', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Just Muslim', NULL, 'Fair', 'HSC', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 4 Inch', '37 KG', 'Female', '4_pp_2021_01_07_061014_20846847.jpeg', NULL, NULL, 'online', '1984-01-19', 0, 0, NULL, NULL, 1, 1, 0, NULL, NULL, '2018-11-06 10:45:08', '2021-01-07 00:10:17', NULL, NULL),
(5, 'Jashim', '01852698745', '5', 'jashim@gmail.com', '$2y$10$5IDl28x4oGxnITqjpjc6.OjivZ9Tp9Ss3bCPXqDby6G6sTMp2xWci', '121270', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Just Muslim', NULL, 'Fair', 'HSC', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 4 Inch', '37 KG', 'Female', '5_pp_2021_01_07_061047_75857033.jpeg', NULL, NULL, 'online', '1984-01-19', 0, 0, NULL, NULL, 1, 1, 0, NULL, NULL, '2018-11-06 10:46:51', '2021-01-07 00:10:52', NULL, NULL),
(6, 'Suman', '01852698735', '6', 'suman@gmail.com', '$2y$10$NH0gVgmmHHwB7cqJOgg/tuD3DPsJWyhGjS1h5HsCCjs7OZjkUZWQi', '669952', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Just Muslim', NULL, 'Fair', 'HSC', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 4 Inch', '37 KG', 'Female', '6_pp_2021_01_07_061117_17005953.jpg', NULL, NULL, 'online', '1984-01-19', 0, 0, NULL, NULL, 1, 1, 0, NULL, NULL, '2018-11-06 10:50:28', '2021-01-07 00:11:21', NULL, NULL),
(7, 'Suman1', '01852698435', '7', 'suman1@gmail.com', '$2y$10$63vAmJh0gxYOaGD0.zYe1elYdqNK7YSlVWtv1j.izWWwl7/8mcws6', '642992', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Just Muslim', NULL, 'Fair', 'HSC', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 4 Inch', '37 KG', 'Female', '7_pp_2021_01_07_061221_95294974.png', NULL, NULL, 'online', '1984-01-19', 0, 0, NULL, NULL, 1, 1, 0, NULL, NULL, '2018-11-06 10:52:44', '2021-01-07 00:12:21', NULL, NULL),
(8, 'Suman2', '01852698432', '8', 'suman2@gmail.com', '$2y$10$S82RxGXuTMqnZJNQxjJZj.3E.YWUkfIUPQ2IrZkwc/mRg8SKGKdla', '140490', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Just Muslim', NULL, 'Fair', 'HSC', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 4 Inch', '37 KG', 'Female', NULL, NULL, NULL, 'online', '1984-01-19', 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2018-11-06 10:56:31', '2018-11-06 10:56:31', NULL, NULL),
(9, 'Suman3', '01852698433', '9', 'suman3@gmail.com', '$2y$10$CDD1vtKQOqoxSo5VqX3yw.lPUCTy3DYio17zQKVXGDkCUWnLln/Ua', '718408', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Just Muslim', NULL, 'Fair', 'HSC', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 4 Inch', '37 KG', 'Female', '9_pp_2021_01_07_061323_44355785.jpg', NULL, NULL, 'online', '1984-01-19', 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2018-11-06 10:58:29', '2021-01-07 00:13:25', NULL, NULL),
(10, 'Moushumi', '01676039825', '10', 'moushumi@gmail.com', '$2y$10$RK1e5uFckhy2ePsLQqOxE.HX0YiVkRnqQv6HCdIkAECptHcp6SHCW', '545177', 1, 1, 'Female', 'Bangladesh', NULL, 'Noakhali District, Bangladesh', NULL, NULL, NULL, '22.8723789', '91.09731839999995', 'Parent', 'Just Muslim', NULL, 'White', 'HSC', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 1 Inch', '70 KG', 'Male', '10_pp_2021_01_07_061415_65643571.jpg', NULL, NULL, 'online', '2000-09-08', 0, 0, NULL, NULL, 1, NULL, 0, NULL, 'hpoLKrnaarEm4OF9mc7RnwGnBOLq1fhyaPxL0bBDWszc8okC4NuEVDX75pxB', '2018-11-06 13:27:58', '2021-01-07 00:14:16', NULL, NULL),
(11, 'Pavel', '01822368485', '11', 'pavel@gmail.com', '$2y$10$5wEKKCQo9uHI.h3xMZIyp.P7WRjoU81pbj8Cv0igWjDAsfIG8Ifde', '179935', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Just Muslim', NULL, 'White', 'High School Pass', NULL, 'Doctor', NULL, 'Never Married', '4 Feet 1 Inch', '21 KG', 'Female', '11_pp_2021_01_07_061444_82484299.jpg', NULL, NULL, 'online', '2001-01-01', 0, 0, NULL, NULL, 1, NULL, 0, NULL, 'FUr6KxLJcfOyMdaS86Wq3TITrE4jnsXh6epU2D6xjPr3QNT28RgnOcghXfrM', '2018-11-12 22:52:56', '2021-01-07 00:14:45', NULL, NULL),
(12, 'Faruk', '01822268485', '12', 'faruk@gmail.com', '$2y$10$IK.yBnGPGDIiEaYCEKpcjeIj.2itBH1lECANBnLVjTKtxHl.WWzfG', '323232', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Parent', 'Just Muslim', NULL, 'White', 'HSC', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 2 Inch', '36 KG', 'Female', NULL, NULL, NULL, 'online', '1987-03-18', 0, 0, NULL, NULL, 1, 1, 0, NULL, 'dA6cSnhhjdQImF6K9HLhTsVHW0EF0uE6ClY4nS13XJg3l5meqG78kUSGOdtJ', '2018-11-12 22:57:00', '2019-02-03 16:26:39', NULL, NULL),
(13, 'Tania', '01556321212', '13', 'tania@gmail.com', '$2y$10$hmAvaMaNXh82PCS5os0hLuLb5gjzILy4.RC4swJbIlR8RZ9sI6/.6', '623591', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Just Muslim', NULL, 'Fair', 'HSC', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 1 Inch', '55 KG', 'Male', '13_pp_2021_01_07_061510_73730674.jpg', NULL, NULL, 'online', '2000-01-18', 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2018-11-13 05:41:35', '2021-01-07 00:15:10', NULL, NULL),
(14, 'Toufiq Halim', '01813640428', '14', 'Toufiq.Halim1994@gmail.com', '$2y$10$Th.SCnxOovDFVaUYFOA1nu44fkv288fATKochRFPQ/Ryud365DteW', '644725', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'White', 'Other', 'Advance Diploma', 'Other', 'Computer Engineer', 'Never Married', '5 Feet 5 Inch', '70 KG', 'Female', '14_pp_2021_01_07_061528_15956301.jpg', NULL, NULL, 'online', '1994-02-20', 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2018-12-03 15:45:28', '2021-01-07 00:15:30', NULL, NULL),
(15, 'Jahidul Islam Sharif', '01785474520', '15', 'jisharif3655@gmail.com', '$2y$10$y070tCHUr3dcVbH61KworukXe8gDPxQgKaLQvG6NZCsALpIb7Xa9O', '171452', 1, 1, 'Male', 'Bangladesh', NULL, 'Rangpur, Bangladesh', NULL, NULL, NULL, '25.7438916', '89.27522699999997', 'Self', 'Muslim', NULL, 'Fair', 'Other', 'Computer Science & Engineering', 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '62 KG', 'Female', '15_pp_2021_01_07_061557_96603324.jpg', NULL, NULL, 'online', '1998-10-03', 0, 0, NULL, NULL, 1, NULL, 0, NULL, '4hhwjc5ZoPlFe2FB8JIxWdYPQtBNSbxJiCY5deGjFl2H1Om26OJcbexVcZWl', '2018-12-04 18:36:22', '2021-01-07 00:15:58', NULL, NULL),
(16, 'Marriage Solution Bd', '01633036062', '16', 'marriagesolutionbd@gmail.com', '$2y$10$Y5WUqHJ8DbD5wU0sSj73gununxDQjhXlazQ3XA/ysdp4kGyI/Loaa', '111111', 1, 1, 'Male', 'Bangladesh', NULL, 'Mirpur Rd, Dhaka 1205, Bangladesh', '', '', '', '23.7604606', '90.37266769999997', 'Parent', 'Muslim', '', 'Fair', 'Other', 'Graduation', 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '70 KG', 'Female', '16_pp_2020_12_07_065729_94154334.gif', NULL, NULL, 'online', '1979-04-04', 1, 1, NULL, NULL, 1, 16, 1, '2019-05-25 05:00:00', 'wn6s8FYqKLFICx4J32L4QM5mpHwBdL9OPT67dGWzthy3VjgYx7tRL4EBGmK1', '2018-12-05 16:39:58', '2021-03-16 23:21:12', NULL, NULL),
(17, 'reza', '01770592904', '17', 'mreza8766@gmail.com', '$2y$10$kQK9Y.HZ9NZcPOsnE9WgPOKOib1qfmuj1nFoojXL8D1PLe97Ig7Z6', '696284', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Off-white', '??? Department of Mathematics', NULL, 'Other', '', 'Never Married', '5 Feet 4 Inch', '61 KG', 'Female', '17_pp_2021_01_07_061616_12594523.png', NULL, NULL, 'online', '1989-03-31', 0, 0, NULL, NULL, 1, NULL, 0, NULL, '3iid5fQ2juijefsfhgiwuoLEODdJgHZGt1WpKLUVWS8xDDMoslisqHlGDqNZ', '2018-12-10 02:02:11', '2021-01-07 00:16:19', NULL, NULL),
(18, 'Tanvir Rahman', '+8801762642929', '18', 'taanvirr87@gmail.com', '$2y$10$NEKUPX26iQD9TWzupmgwmOcgJMrJR1l9UvZZYo4AIqs7ysMisJSmG', '523678', 1, 1, 'Male', 'United States', NULL, 'Florida, USA', '', '', '', '27.6648274', '-81.51575350000002', 'Self', 'Muslim', '', 'Off-white', 'Department of Management Studies', NULL, 'Businessmen', NULL, 'Legally Separated', '5 Feet 10 Inch', '73 KG', 'Female', '18_pp_2021_01_07_061644_55552437.jpeg', NULL, NULL, 'online', '1987-05-25', 1, 1, NULL, NULL, 1, 1, 0, NULL, NULL, '2018-12-16 12:32:39', '2021-01-07 00:16:44', NULL, NULL),
(19, 'Ariyan Rahman Akash', '01712319281', '19', 'ariyan98jrn@gmail.com', '$2y$10$DOx3xxWGmRONrBH.nOwbw.NIKvlAs5VbfitVPHI7a2yyU81CCvmTm', '441322', 1, 1, 'Male', 'Bangladesh', NULL, 'Narayanganj, Bangladesh', '', '', '', '23.642196', '90.49079510000001', 'Self', 'Muslim', '', 'Fair', 'Department of Journalism and Mass Communication', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 3 Inch', '52 KG', 'Female', '19_pp_2021_01_07_061712_21599092.jpeg', NULL, NULL, 'online', '1995-04-23', 0, 1, NULL, NULL, 1, 1, 0, NULL, NULL, '2018-12-19 18:26:57', '2021-01-07 00:17:13', NULL, NULL),
(20, 'Md Tahmidul Haque', '+211917018543', '20', 'mdtahmidul@gmail.com', '$2y$10$NwUv4doMtT6X2u2wHpHBbu0dA3QGSwGGvRW8C1dLKYWwRLKj34MxC', '700080', 1, 1, 'Male', 'South Sudan', NULL, 'Kajok, South Sudan', NULL, NULL, NULL, '8.303998000000002', '27.99344099999996', 'Self', 'Muslim', NULL, 'Off-white', 'Higher Secondary Certificate', NULL, 'Bangladesh Army', NULL, 'Never Married', '5 Feet 7 Inch', '61 KG', 'Female', '20_pp_2021_01_07_102916_68735295.png', NULL, NULL, 'online', '1992-10-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, '7L45AY9v1xPvX8icvjBGGSzjGIc9d67eSxFUf8m9cPoxazjLzAHYoIGBezy0', '2018-12-21 19:00:02', '2021-01-07 04:29:16', NULL, NULL),
(21, 'Nowshin Nawar', '01877365727', '21', 'danielmongol50@gmail.com', '$2y$10$sgTdTcgkenQbgeNx2QyShetk4Q88rQpqbp2/P/h6M1esazkX1eC0i', '349657', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', '', '', '', '23.810332', '90.41251809999994', 'Self', 'Muslim', '', 'Fair', 'Department of Bangla', NULL, 'Running Student', NULL, 'Never Married', '5 Feet', '45 KG', 'Male', '21_pp_2021_01_07_061800_99227906.jpg', NULL, NULL, 'online', '1994-02-14', 0, 1, NULL, NULL, 1, 16, 0, NULL, NULL, '2019-01-05 21:36:02', '2021-01-07 00:18:02', NULL, NULL),
(22, 'Mamun', '01927217841', '22', 'zahidzh@yahoo.com', '$2y$10$MH8cPdo0yR9tfTG7qN/lxuIqBjhdtV7XqdylMZl9SXG5GVTqIEFyG', '692442', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Department of Finance', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '65 KG', 'Female', '22_pp_2021_01_07_061835_31381317.jpeg', NULL, NULL, 'online', '1988-12-31', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-01-10 02:09:32', '2021-01-07 00:18:36', NULL, NULL),
(23, 'MD IDRIS HASSAN', '01521210530', '23', 'mdidrishassan011@gmail.com', '$2y$10$4cFeQCUK5PX3zBRL5Vv6xOi1..QFL0aq5ONExQy8xZPEv4XdSCr/a', '563539', 1, 1, 'Male', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.37954379999996', 'Self', 'Muslim', NULL, 'Fair', 'Department of Economics', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 4 Inch', '60 KG', 'Female', '23_pp_2021_01_07_061922_95751738.jpg', NULL, NULL, 'online', '1989-12-18', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-01-12 18:05:58', '2021-01-07 00:19:23', NULL, NULL),
(24, 'Noor Mohammhad', '01534500370', '24', 'noortoufiq6@gmail.com', '$2y$10$THgusHWbFMPxDSrhAV.nIOoQ/ed7dMxeP8GV9OAR/TXJtKt2FYF9m', '854565', 1, 1, 'Male', 'Bangladesh', NULL, 'Motijheel, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7329724', '90.41723100000002', 'Self', 'Muslim', NULL, 'Off-white', 'Master of Management', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '63 KG', 'Female', '24_pp_2021_01_07_061947_11046841.jpg', NULL, NULL, 'online', '1989-12-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'ZnxYCbEqDk4951uQMXjONSDisH8NO8g9Mq7TsA7S9zqZVTVf7y0JEzlyUUEX', '2019-01-14 01:36:53', '2021-01-07 00:19:47', NULL, NULL),
(25, 'Md. Mihrab Anjum', '01913909727', '25', 'mihrabsadi73@gmail.com', '$2y$10$OxBIgJZVug9gFJjxLkTT6Of9ncFkWtWbZCYJABsbA3oEvX4e3Ph8G', '619832', 1, 1, 'Male', 'Bangladesh', NULL, 'Arts Faculty, Dhaka 1205, Bangladesh', NULL, NULL, NULL, '23.7341698', '90.39275020000002', 'Guardian', 'Muslim', NULL, 'Fair', 'Department of Marketing', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '6 Feet 1 Inch', '83 KG', 'Female', '25_pp_2021_01_07_062008_34314786.jpg', NULL, NULL, 'online', '1991-04-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-01-16 03:59:47', '2021-01-07 00:20:08', NULL, NULL),
(26, 'Rusafa Rahman', '01630655173', '26', 'mumu1359@gmail.com', '$2y$10$i5/d3kHVF8CgFQBwYEh4y.YV3bKDpr0YIgOllgSL2vs4QB0y1UZD6', '148419', 1, 1, 'Female', 'Bangladesh', NULL, 'Adabor Main Rd, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7733593', '90.35886670000002', 'Self', 'Muslim', NULL, 'Fair', 'Department of Management Studies', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '5 Feet 7 Inch', '54 KG', 'Male', '26_pp_2021_01_07_062054_58074973.jpg', NULL, NULL, 'online', '1988-08-18', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-01-20 01:54:02', '2021-01-07 00:20:54', NULL, NULL),
(27, 'Dr. Milon', '1783756440', '27', 'farid.mehta85@yahoo.com.sg', '$2y$10$vRPaPhIliBq4nvx3nSQGQeA8hDIHmTlEUVJyVI9VTd8XP/Unh5vUq', '240307', 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan 1, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7820624', '90.41605270000002', 'Self', 'Muslim', NULL, 'Fair', 'Master of Medicine', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 5 Inch', '81 KG', 'Female', '27_pp_2021_01_07_062120_74330392.jpg', NULL, NULL, 'online', '1987-01-31', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-01-21 16:38:07', '2021-01-07 00:21:21', NULL, NULL),
(28, 'Emon Chowdhury', '01750233358', '28', 'archemonchowdhury@gmail.com', '$2y$10$h1pdzReC273WMwHgRuyaB./sKTj8vc1tDkb.VnVpIUNBeEyDLhYdC', '953962', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'White', 'Department of Drawing and Painting', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '58 KG', 'Female', '28_pp_2021_01_07_062146_16983798.jpeg', NULL, NULL, 'online', '1992-09-02', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-01-23 06:56:55', '2021-01-07 00:21:47', NULL, NULL),
(29, 'Rafath Kamal', '+8801713248902', '29', 'rafath01@yahoo.com', '$2y$10$k7.riX8kKvUaJAXQajzxUu5QtfnhUVNCa8rwYMd2o0XSqob5nC7C6', '122401', 1, 1, 'Male', 'Bangladesh', NULL, 'Niketan Housing Project, Dhaka 1212, Bangladesh', 'Dhaka', 'Dhaka', '1212', '23.7738926', '90.41192899999999', 'Self', 'Muslim', 'Sunni', 'Brown', 'Department of Journalism and Mass Communication', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '72 KG', 'Female', '29_pp_2021_01_07_062205_37883158.jpg', NULL, NULL, 'online', '1989-02-02', 0, 2, NULL, NULL, 1, 29, 0, NULL, 'j6ScLxOfFUvBFtkPeUx1yLUE66ChNmXj2KZNAp5SmxNTQhcoqvjaV9UHnrBH', '2019-01-24 19:40:23', '2021-01-07 00:22:06', NULL, NULL),
(30, 'Salam', '01922023563', '30', 'masudbdm2@gmail.com', '$2y$10$EheLk5rHfTzCEb4mUqktPuTL95hTEZzJ1uUWo0XcHw583tQRX35NO', '302617', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Bangladesh Army', NULL, 'Never Married', '5 Feet 4 Inch', '68 KG', 'Female', '30_pp_2021_01_07_062334_30405508.jpeg', NULL, NULL, 'online', '1988-02-14', 0, 1, NULL, NULL, 1, 1, 0, NULL, 'FJTUwcceBAcIiwa57uBYO4FcIjVDcPifClc4ivux9FjB0hXXmBkL8IC9bopz', '2019-01-29 05:21:11', '2021-01-07 00:23:35', NULL, NULL),
(31, 'Alauddin', '01774459101', '31', 'princeofalauddin@gmail.com', '$2y$10$zENjQjUbnXfH4Be5sK.pveSUcmW9lW.IY2VpVA2S5LjtUMD9WC4by', '314139', 1, 1, 'Male', 'Bangladesh', NULL, 'Natore District, Bangladesh', NULL, NULL, NULL, '24.410243', '89.00761769999997', 'Self', 'Muslim', NULL, 'Fair', 'High School Pass', NULL, 'Running Student', NULL, 'Divorced', '5 Feet 9 Inch', '53 KG', 'Female', '31_pp_2021_01_07_062408_50666630.jpeg', NULL, NULL, 'online', '1995-12-11', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-02 04:32:37', '2021-01-07 00:24:11', NULL, NULL),
(32, 'Sk Rumi', '8801741581537', '32', 'rahman.skhafizur@gmail.com', '$2y$10$fl72akDiAiOOG9kk2AJOLe/Lt6TYeD7PyChulZ/VpkgJ8EZBHv5o.', '909416', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Master of Computer Applications', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 5 Inch', '63 KG', 'Female', '32_pp_2021_01_07_062444_16068166.jpg', NULL, NULL, 'online', '1974-01-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-02 07:54:09', '2021-01-07 00:24:45', NULL, NULL),
(33, 'Sk Rumi', '8801741581537', '33', 'rahman.skhafizur@gmail.com', '$2y$10$2ETn0EXH0tnp9qidLQSAYuYjRy/azvOxh3YMo1sm43joJ0IfQc.9y', '950415', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Master of Computer Applications', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 5 Inch', '63 KG', 'Female', '33_pp_2021_01_07_062509_11458813.jpg', NULL, NULL, 'online', '1974-01-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-02 07:54:09', '2021-01-07 00:25:10', NULL, NULL),
(34, 'Sohanur Rahman Sohan', '01710187834', '34', 'sohanrimu795@gmail.com', '$2y$10$bXTfc6BoyEA8CNmwLOW0fukTu3xDc4NtvRYiYAiPqwJxsBkLku2Ce', '220167', 1, 1, 'Male', 'Bangladesh', NULL, 'Mirpur Rd, Dhaka, Bangladesh', 'Dhaka', 'Mirpur', NULL, '23.8066394', '90.36630459999992', 'Self', 'Muslim', NULL, 'Fair', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '34_pp_2021_01_07_062532_30709773.jpeg', NULL, NULL, 'online', '1997-08-15', 0, 4, NULL, NULL, 1, 34, 0, NULL, 'LELrxBSDltr4FOXzbFWw4pCfl5kQnBwMY95w23zQIjiELhfsm6va758s7SAZ', '2019-02-02 18:10:23', '2021-01-07 00:25:33', NULL, NULL),
(35, 'Mahbub Hasan Shuvro', '01921503668', '35', 'mahbubhasan2501@gmail.com', '$2y$10$NPAXL7e1QN6hLlqU.d0XX.0x/2VPHsMdwwo37b5L8.sRlj7ZZcwS.', '521502', 1, 1, 'Male', 'Bangladesh', NULL, 'Fatullah, Bangladesh', NULL, NULL, NULL, '23.6422928', '90.48165819999997', 'Brother', 'Muslim', NULL, 'Fair', 'Department of Economics', NULL, 'Male Police officer', NULL, 'Never Married', '5 Feet 7 Inch', '70 KG', 'Female', '35_pp_2021_01_07_062638_34873036.png', NULL, NULL, 'online', '1987-01-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-05 23:11:17', '2021-01-07 00:26:41', NULL, NULL),
(36, 'Mahbub Hasan Shuvro', '01921503668', '36', 'mahbubhasan2501@gmail.com', '$2y$10$Mv9I8ffJrm9/vedgBXJBtu1z/LM2UZ6TIamSp2iE7DonqtW/cykz.', '864610', 1, 1, 'Male', 'Bangladesh', NULL, 'Fatullah, Bangladesh', NULL, NULL, NULL, '23.6422928', '90.48165819999997', 'Brother', 'Muslim', NULL, 'Fair', 'Department of Economics', NULL, 'Male Police officer', NULL, 'Never Married', '5 Feet 7 Inch', '70 KG', 'Female', '36_pp_2021_01_07_062725_79016875.png', NULL, NULL, 'online', '1987-01-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-05 23:11:17', '2021-01-07 00:27:25', NULL, NULL),
(37, 'Mehedi Hussain', '01732420190', '37', 'sshoibal@gmail.com', '$2y$10$MUYIJt07UHC9dQKqV.LZKuwiwucDqbLXGoXBXxo53On6IHRUyEzF6', '819361', 1, 1, 'Male', 'Bangladesh', NULL, 'Tangail District, Bangladesh', NULL, NULL, NULL, '24.3917427', '89.99482569999998', 'Self', 'Muslim', NULL, 'Bright', 'Master of Science', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 6 Inch', '66 KG', 'Female', '37_pp_2021_01_07_062806_18621395.jpg', NULL, NULL, 'online', '1979-01-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'FvyYtudg9HzMwlbdq7kuqqkAHRSZwTKtQ6IsTIW8FzLgRClqiKvmlzZquf0j', '2019-02-07 03:43:03', '2021-01-07 00:28:07', NULL, NULL),
(38, 'Muhammad Hridoy', '01813879966', '38', 'mohammedhridoy9@gmail.com', '$2y$10$rVIdx3NwIHNjIv7s7fA2IOkxg2Tn4ojv0h7sHCp21.rrT7nmHRtL.', '341826', 1, 1, 'Male', 'Bangladesh', NULL, 'Andarkilla Shahi Jame Masjid, Chittagong, Bangladesh', NULL, NULL, NULL, '22.3410726', '91.83667190000006', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 9 Inch', '55 KG', 'Female', '38_pp_2021_01_07_062829_24267618.jpg', NULL, NULL, 'online', '1994-05-09', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-11 19:15:06', '2021-01-07 00:28:29', NULL, NULL),
(39, 'Muhammad Hridoy', '01968641113', '39', 'mohammadhridoy9@gmail.com', '$2y$10$J50DYpe1qmkF/0pqxeezHu8ZkQvKCZHqNN9b6oySi4wa3j.r6muNi', '588183', 1, 1, 'Male', 'Bangladesh', NULL, 'Andarkilla Shahi Jame Masjid, Chittagong, Bangladesh', NULL, NULL, NULL, '22.3410726', '91.83667190000006', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 9 Inch', '55 KG', 'Female', '39_pp_2021_01_07_062851_32508553.jpg', NULL, NULL, 'online', '1994-05-09', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-11 19:16:28', '2021-01-07 00:28:51', NULL, NULL),
(40, 'Mobac Khairul Islam', '01720-045588', '40', 'bfarhanakhan@gmail.com', '$2y$10$n1shRrP3lcYL8l.nKt2lbuhJorVrLuCXu4dpjxfrx2KZfle5IWkmG', '595256', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Sister', 'Muslim', NULL, 'Fair', 'Department of Civil Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 8 Inch', '75 KG', 'Female', '40_pp_2021_01_07_062932_32399411.jpeg', NULL, NULL, 'online', '1982-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-11 20:56:20', '2021-01-07 00:29:34', NULL, NULL),
(41, 'Sohel Ahmed', '01922849948', '41', 'sohel.ahmed@ymail.com', '$2y$10$57canaaLh52n9jmEDnPeQ.x8Jh9Ps.4vckpdGH6tgwKvS5HjLxCce', '427738', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 4 Inch', '76 KG', 'Female', '41_pp_2021_01_07_063012_33633341.jpg', NULL, NULL, 'online', '1980-04-28', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-15 19:37:37', '2021-01-07 00:30:13', NULL, NULL),
(42, 'Md.Kabir', '01628169888', '42', 'kmd01403@gmail.com', '$2y$10$y3eig3FVYpIQJIkCSDkoeO2/7PPyO8P6mMG.OKpbKMxdY95TvWoiG', '863607', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Bright', 'Master of Applied Science', NULL, 'Professor', NULL, 'Never Married', '5 Feet 9 Inch', '71 KG', 'Male', '42_pp_2021_01_07_063109_25666603.jpg', NULL, NULL, 'online', '1989-02-02', 0, 1, NULL, NULL, 1, 1, 0, NULL, NULL, '2019-02-16 18:52:02', '2021-01-07 00:31:09', NULL, NULL),
(43, 'Puspita', '01726911779', '43', 'puspa.biswas@gmail.com', '$2y$10$NPsd1LhLGL81ZoaMA5/fJupZY/cJUTi1GruUWx3vZHukJncaxTbmK', '323534', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Parent', 'Hindu', NULL, 'Bright', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 3 Inch', '55 KG', 'Male', '43_pp_2021_01_07_063128_43972894.jpg', NULL, NULL, 'online', '1993-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-17 19:12:31', '2021-01-07 00:31:28', NULL, NULL),
(44, 'MD. Iftakhar Alam', '1721789053', '44', 'iftakhar007bduk@gmail.com', '$2y$10$/.wdNYHsyny62vcNGDAgie7LuPxYLZnRN1gI7wRzn/CFWcAfIt/le', '645346', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'M.sc Department of Computer Science & Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 7 Inch', '67 KG', 'Female', '44_pp_2021_01_07_063151_77729141.jpeg', NULL, NULL, 'online', '1983-11-17', 0, 1, NULL, NULL, 1, NULL, 0, NULL, '91hAyMqHVLI1cOPdL4aR5v2IhzUGlHLpqWFaFFTw7KYyZiUBhj0RGMEWmM4Y', '2019-02-18 02:33:59', '2021-01-07 00:31:52', NULL, NULL),
(45, 'Mofazzal Hossain', '01318788249', '45', 'jahansyd@gmail.com', '$2y$10$KbgJUzZwZY1pSDz5F6nJgeZcoqkd65LmdsDsWlgJWx4HtNA1CxPI6', '753593', 1, 1, 'Male', 'Australia', NULL, 'Sydney NSW, Australia', NULL, NULL, NULL, '-33.8688197', '151.20929550000005', 'Self', 'Muslim', NULL, 'Brown', 'M.sc Department of Computer Science & Engineering', NULL, 'Engineer', NULL, 'Divorced', '5 Feet 8 Inch', '78 KG', 'Female', '45_pp_2021_01_07_063246_59663239.jpg', NULL, NULL, 'online', '1983-01-13', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-18 16:40:42', '2021-01-07 00:32:48', NULL, NULL),
(46, 'Md. Saifur Rahman', '01914007424', '46', 'corporationsr@gmail.com', '$2y$10$Ykdpl0qxZR8V.acYiGiCfu1g1zz6KVbgK0bcu0eDDwD1nXHQOuvPG', '830181', 1, 1, 'Male', 'Bangladesh', NULL, 'Arts Faculty, Dhaka 1205, Bangladesh', NULL, NULL, NULL, '23.7341698', '90.39275020000002', 'Friend', 'Muslim', NULL, 'Fair', 'Master of Laws', NULL, 'Bangladesh Air Force', NULL, 'Never Married', '5 Feet 8 Inch', '85 KG', 'Female', '46_pp_2021_01_07_063318_89446290.jpeg', NULL, NULL, 'online', '1990-08-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-22 05:19:21', '2021-01-07 00:33:18', NULL, NULL),
(47, 'Naushad abedin', '01726176867', '47', 'naushadju11477@gmail.com', '$2y$10$6bbo9985qZ1utWUI52aWbuWqvl2JeVwsHIxfPEj6mvkN783ug9qdC', '139607', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sister', 'Muslim', NULL, 'Fair', 'Department Of Pharmacy', NULL, 'Industrialists', NULL, 'Divorced', '5 Feet 5 Inch', '65 KG', 'Male', '47_pp_2021_01_07_063350_24859495.png', NULL, NULL, 'online', '1991-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-22 19:45:49', '2021-01-07 00:33:50', NULL, NULL),
(48, 'Masadur Rahman', '01719023295', '48', 'masadurr@gmail.com', '$2y$10$XKkQlxd1LUM7zEJCILicS.uRc01SnJK4iZFFdF6fHq29Ri2e7lJKa', '258203', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Drak', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '63 KG', 'Female', '48_pp_2021_01_07_063413_75927642.jpeg', NULL, NULL, 'online', '1987-12-31', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-23 17:31:57', '2021-01-07 00:34:14', NULL, NULL),
(49, 'KHONDOKER RASEL', '8801630519130', '49', 'rasel5065@yahoo.com', '$2y$10$rWxwiiUo3ECatBHQWXF2qOtQ4AZg7knbLnrcqZCcZd5tsSXRMeL1O', '703430', 1, 1, 'Male', 'Bangladesh', NULL, 'Narayanganj, Bangladesh', NULL, NULL, NULL, '23.6237764', '90.50004039999999', 'Self', 'Muslim', NULL, 'Bright', 'Master of Commerce', NULL, 'Citizen', NULL, 'Divorced', '6 Feet 1 Inch', '104 KG', 'Female', '49_pp_2021_01_07_063438_12487969.jpg', NULL, NULL, 'online', '1982-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-25 18:29:41', '2021-01-07 00:34:40', NULL, NULL),
(50, 'Mohammad Ishak', '01787765973', '50', 'misaac0001@gmail.com', '$2y$10$n4YomlB7Qo8iG2hQTbO3Vuh16M25k9DNUtZc6jF5yt4lOCjkolmAu', '509623', 1, 1, 'Male', 'Bangladesh', NULL, 'Rupganj, Bangladesh', NULL, NULL, NULL, '23.8158899', '90.53996310000002', 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '64 KG', 'Female', '50_pp_2021_01_07_063635_69271220.jpg', NULL, NULL, 'online', '1992-08-12', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-02-27 21:43:53', '2021-01-07 00:36:35', NULL, NULL),
(51, 'Ashraf Uddin Sabbir', '01676372360', '51', 'dsabbir1@gmail.com', '$2y$10$RzC7j0wZQ/g0Y1sT8WiVD.YqlMtoFiz8kYgsqqVE/p6GyhvNX21MW', '544954', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Drak', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '51_pp_2021_01_07_063701_81875560.jpg', NULL, NULL, 'online', '1995-09-02', 0, 2, NULL, NULL, 1, 51, 0, NULL, NULL, '2019-03-09 02:13:22', '2021-01-07 00:37:02', NULL, NULL),
(52, 'Farhan Fuad', '01571785620', '52', 'farhan_mec@hotmail.com', '$2y$10$5J4tHoipGJVSMrp.Rq598eZ61FWulm1q.JHqoezxIgqbzCpYCxKu.', '306135', 1, 1, 'Male', 'Bangladesh', NULL, 'Bogra, Bangladesh', NULL, NULL, NULL, '24.848078', '89.37296330000004', 'Self', 'Muslim', NULL, 'Bright', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '52_pp_2021_01_07_064116_98244388.png', NULL, NULL, 'online', '1992-02-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-16 05:01:16', '2021-01-07 00:41:16', NULL, NULL),
(53, 'azijun nahar', '01787163708', '53', 'azijun1990@gmail.com', '$2y$10$gVFCv4F2pOk1kJ68PY1fa.nOIlUW1k9k7QJV1/5DXyKRyvq3fMiiq', '493343', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Parent', 'Muslim', NULL, 'Brown', 'Department of Biochemistry and Molecular Biology', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 3 Inch', '65 KG', 'Female', '53_pp_2021_01_07_065224_18020229.jpeg', NULL, NULL, 'online', '1995-01-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-19 04:56:49', '2021-01-07 00:52:25', NULL, NULL),
(54, 'Sujan Sikder', '01970114539', '54', 'forex1.dhaka@sbibd.com', '$2y$10$2Pzsj30NksIoC78w.8IWjeICORtm7TcQoGYRp0WzORFQlj3ZbhGZm', '277703', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Guardian', 'Hindu', NULL, 'Fair', 'Department of Sociology', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 10 Inch', '63 KG', 'Female', '54_pp_2021_01_07_065256_21522113.jpg', NULL, NULL, 'online', '1989-07-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-22 00:37:53', '2021-01-07 00:52:56', NULL, NULL),
(55, 'Anamika kazi', '01744899332', '55', 'mkazi5894@gmail.com', '$2y$10$DeHOHiS.pn5jngv1FVSHCOk1ERxKK0ZuULp37vifb4O342QaewEce', '666886', 1, 1, 'Female', 'Bangladesh', NULL, 'Mohammadpur, Dhaka, Bangladesh', '', '', '', '23.7658444', '90.35836059999997', 'Guardian', 'Muslim', '', 'Fair', 'Master of Physics', NULL, 'Lecturer', NULL, 'Never Married', '5 Feet 3 Inch', '52 KG', 'Male', '55_pp_2021_01_07_065314_27932174.jpg', NULL, NULL, 'online', '1991-10-26', 0, 1, NULL, NULL, 1, 16, 0, NULL, NULL, '2019-03-22 17:07:36', '2021-01-07 00:53:14', NULL, NULL),
(56, 'Md. Rajibul Hoque', '01715572856', '56', 'rajibulhoque10@gmail.com', '$2y$10$0DkVIcHhSRqsWdPZsJ8NbeA3Lg45AK51mHUJsUcId831KPQiIbNMa', '559297', 1, 1, 'Male', 'Bangladesh', NULL, 'Jahangirnagar University, Savar Union, Bangladesh', NULL, NULL, NULL, '23.8790605', '90.26904660000002', 'Self', 'Muslim', NULL, 'Brown', 'Department of Marketing', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 6 Inch', '59 KG', 'Female', '56_pp_2021_01_07_065805_70336872.jpg', NULL, NULL, 'online', '1995-11-24', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'jp4Y1SIkola4IEkQOlYpLDx9ERh2KmU6M9ghIdk2JhvUExmgPSobmo2Ep2n6', '2019-03-23 04:49:35', '2021-01-07 00:58:05', NULL, NULL),
(57, 'Leon Reza', '1911030701', '57', 'leonn100577@gmail.com', '$2y$10$v6oCqYTkb5egNaMxVp.2TuVDNLq0cab727jupyQzNkgzydH3zF.2u', '721268', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Divorced', '5 Feet 8 Inch', '65 KG', 'Female', '57_pp_2021_01_07_065819_59639934.jpeg', NULL, NULL, 'online', '1977-05-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'hn3KxDsvExcCwU28ZJSI2TGHfBRsrH03uXwF0zlSv7prHNqOErxE7abh0xhL', '2019-03-23 22:25:23', '2021-01-07 00:58:20', NULL, NULL),
(58, 'NBBMN', '1312532523135', '58', 'CVCV@jhlh.com', '$2y$10$igHSJK0xdgSLWife2jbvIOI7IP9/1.slaos2ze./NTe7zeN0fthYm', '118119', 1, 1, 'Female', 'Angola', NULL, 'B Ave, Albuquerque, NM 87116, USA', NULL, NULL, NULL, '35.059046', '-106.561372', 'Self', 'Muslim', NULL, 'Drak', 'Journal of Mechanical Engineering Research and Developments', NULL, 'Engineer', NULL, 'Anulled', '5 Feet 4 Inch', '36 KG', 'Male', '58_pp_2021_01_07_065841_53366517.jpg', NULL, NULL, 'online', '1990-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-24 22:21:41', '2021-01-07 00:58:43', NULL, NULL),
(59, 'MD. BELLAL HOSSEN', '01729410149', '59', 'bellalcse33@gmail.com', '$2y$10$bbJp.xpg/13/WeubwlBzHelbca3iE/w9X2X3cvnsV0TT/og4ZphDG', '972439', 1, 1, 'Male', 'Bangladesh', NULL, 'Mymensingh, Bangladesh', NULL, NULL, NULL, '24.7471492', '90.42027340000004', 'Self', 'Muslim', NULL, 'Bright', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '61 KG', 'Female', '59_pp_2021_01_07_065941_19801940.png', NULL, NULL, 'online', '1992-03-07', 0, 1, NULL, NULL, 1, 1, 0, NULL, NULL, '2019-03-31 18:26:22', '2021-01-07 00:59:41', NULL, NULL),
(60, 'SOHAN AZIZ', '2037685217', '60', 'sohanaziz@gmail.com', '$2y$10$mYjGvbnAxzCY2JGZi/CgaOwynOdcXMNf.ne0JH5BtHov2EZWXue32', '412980', 1, 1, 'Male', 'United States', NULL, 'Storrs, Mansfield, CT, USA', NULL, NULL, NULL, '41.8084314', '-72.24952309999998', 'Self', 'Muslim', NULL, 'Ten', 'Department of Biochemistry and Molecular Biology Department of Psychology', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '61 KG', 'Female', '60_pp_2021_01_07_070010_77370447.jpg', NULL, NULL, 'online', '1994-11-27', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-04-01 13:20:03', '2021-01-07 01:00:10', NULL, NULL),
(61, 'aminul', '+8801972020303', '61', 'aminulhaqueok@gmail.com', '$2y$10$X.yk/k9hNFtqmOXscZitb.lqVL7h9Z0EF1s45s.iW8p7DKOrA/.PG', '182456', 1, 1, 'Male', 'Bangladesh', NULL, 'London, UK', NULL, NULL, NULL, '51.5073509', '-0.12775829999998223', 'Guardian', 'Muslim', NULL, 'Brown', 'M.Sc in Management Information System', NULL, 'BCS (Taxation): Assistant Commissioner of Taxes', NULL, 'Never Married', '5 Feet 1 Inch', '86 KG', 'Female', '61_pp_2021_01_07_070036_11818175.jpg', NULL, NULL, 'online', '1990-04-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, '58US5jzcwIxLpTiv9rIBOEA1qoHuWjR981T6bDXledLIA07JK0m9zmB2FOMQ', '2019-04-01 15:52:58', '2021-01-07 01:00:37', NULL, NULL),
(62, 'Salim Shahnewaz', '+8801742976773', '62', 'sshahnewazbd@gmail.com', '$2y$10$UlwXOu5OjhDMWUXjwGpCwuMFb71tnOfvG9AaaxnwlSpuZzJnmFjAW', '368439', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Bright', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Divorced', '5 Feet 9 Inch', '88 KG', 'Female', '62_pp_2021_01_07_070053_19892773.jpeg', NULL, NULL, 'online', '1979-12-21', 0, 8, NULL, NULL, 1, 62, 0, NULL, '1xkXljArsYMiUKVTZsBKZa7xonH3dSbMs14YVic01k5gP2idrZoppv6pMTAW', '2019-04-02 14:14:24', '2021-01-07 01:00:54', NULL, NULL),
(63, 'Toupa', '01635748550', '63', 'trivavibd@gmail.com', '$2y$10$OHhnFXj14FUTrSiBE9jcpeSiPLg0h85cvH44W0lDSkwsBwRnzjGz6', '863482', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Bright', 'Department of Law', NULL, 'Professor', NULL, 'Never Married', '5 Feet 3 Inch', '23 KG', 'Male', '63_pp_2021_01_07_070111_99172767.jpg', NULL, NULL, 'online', '1999-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-04-07 14:35:20', '2021-01-07 01:01:12', NULL, NULL),
(64, 'Sajedul Haque', '01778049229', '64', 'sajedul@waltonbd.com', '$2y$10$/2K7WQzWL3nSBOHQdKw/EeS.tg/xCol6rDQeMOucJAiF6myLID0/S', '889913', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Bright', 'Department of Marketing', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '77 KG', 'Female', '64_pp_2021_01_07_070142_84672789.jpg', NULL, NULL, 'online', '1992-08-07', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-04-07 14:54:00', '2021-01-07 01:01:42', NULL, NULL),
(65, 'Liang Zhao', '+8613244301566', '65', 'gb9266@outlook.com', '$2y$10$ko4IFL.gOQ3yxQIGyxkfAePivjkP.6pyc6YfjXxjCth2Crz3xAH22', '845972', 1, 1, '???', 'China', NULL, '????????????????????????', NULL, NULL, NULL, '43.817071', '125.32354399999997', 'Self', 'No Religion', NULL, 'Bright', 'Master of Studies', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 6 Inch', '70 KG', 'Female', '65_pp_2021_01_07_070214_24273803.jpeg', NULL, NULL, 'online', '1988-03-19', 0, 2, NULL, NULL, 1, 65, 0, NULL, NULL, '2019-04-08 17:47:57', '2021-01-07 01:02:14', NULL, NULL),
(66, 'Syed Jony', '01929203929', '66', 'syedariyan05969@gmail.com', '$2y$10$tGWvj.kcDSNHiHw1UsOanOBVBEDZve9CQfHQ4mCstV0Q66b7085Je', '788825', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Bright', 'BBA Professional', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '56 KG', 'Female', '66_pp_2021_01_07_070238_18406530.jpg', NULL, NULL, 'online', '1986-09-11', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'AmSRlaFu37N8mqoARpDyNfdxfIgdNDD4kvJLYkWpCq9DZsyP61Del7m22tUh', '2019-04-10 06:33:57', '2021-01-07 01:02:38', NULL, NULL),
(67, 'Test User', '01222111111', '67400984', 'testuser@gmail.com', '$2y$10$3Qa7ESusvSDPj.s2qvs6geBZh.1djGcHpDIv5wQWh.h2zVykrI4mG', '544120', 1, 1, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67_pp_2021_01_07_070424_44355892.jpg', '67_cv_SGVv8JtI1555492014.doc', 'doc', 'online', '1990-07-11', 0, 0, NULL, NULL, 1, 1, 0, NULL, NULL, '2019-04-17 20:06:54', '2021-01-07 01:04:24', NULL, NULL),
(68, 'S M Fahim', '1815063232', '68', 'smfahim888@gmail.com', '$2y$10$wF8L6Dm2ilOM.guL9.PrKutx/NokGkQHXatV6acUvPXY7ZIwH9j8i', '864176', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Master of Finance', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 5 Inch', '57 KG', 'Female', '68_pp_2021_01_07_070452_93017890.jpeg', NULL, NULL, 'online', '1987-07-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-04-22 20:40:36', '2021-01-07 01:04:53', NULL, NULL),
(69, 'Sahera sultana', '01516148183', '69', 'Saherasultana011@gmail.com', '$2y$10$bOzidYP4cfF0hDIFpzcAT.bStJC0KbfaDpQJbIFFczrn7dL2kJ2L.', '242076', 1, 1, 'Female', 'Bangladesh', NULL, 'Banasree - Staff Quarter - Demra Rd, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7493886', '90.46152740000002', 'Self', 'Muslim', NULL, 'Bright', 'Department of Persian Language and Literature', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 2 Inch', '58 KG', 'Male', '69_pp_2021_01_07_070549_19700374.jpg', NULL, NULL, 'online', '1994-04-14', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-04-23 00:24:22', '2021-01-07 01:05:50', NULL, NULL),
(70, 'shuvo hossain', '01970504504', '70', 'shuvohossain2012@gmail.com', '$2y$10$VYs..NnP3ZHsKL/YMkayeudySQjsPXXEMKnyqCGURa8bXQh.lTJNq', '701343', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 5 Inch', '75 KG', 'Female', '70_pp_2021_01_07_070632_37788066.jpeg', NULL, NULL, 'online', '1979-04-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-04-23 17:12:07', '2021-01-07 01:06:34', NULL, NULL),
(71, 'abcd', '01858558866', '71', 'abc@abc.com', '$2y$10$MQUs6hRwZ851npTT9j7WauURU64GGsU1s/WVbIR2kk7NwhO9kvzYq', '440169', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'High School Pass', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 2 Inch', '66 KG', 'Female', '71_pp_2021_01_07_070759_60279298.jpeg', NULL, NULL, 'online', '1990-02-17', 0, 1, NULL, NULL, 1, NULL, 0, NULL, '9fxwCM4EouDuXkucQW5n4YUO33DEQXVnpqCVwsXUu58PID8q2WKJ04ySfwxt', '2019-04-23 17:24:38', '2021-01-07 01:07:59', NULL, NULL),
(72, 'MD.NAZRUL ISLAM', '01673155692', '72', 'emon777nu@gmail.com', '$2y$10$AZHTC5t.W2sXP/kjWR/jnuTTP4US16fJYXypqrfQl71d5v2i6TApO', '893733', 1, 1, 'Male', 'Bangladesh', NULL, '???????????? ??????????????????????????????????????? ???????????????????????????, ????????????, ????????????????????????', NULL, NULL, NULL, '23.7315433', '90.39484979999997', 'Self', 'Muslim', NULL, 'Fair', 'Department of Mathematics', NULL, 'Lecturer', NULL, 'Never Married', '5 Feet 7 Inch', '64 KG', 'Female', '72_pp_2021_01_07_070943_98159244.jpg', NULL, NULL, 'online', '1986-02-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-04-25 15:24:37', '2021-01-07 01:09:43', NULL, NULL),
(73, 'Masum Parveg', '01923702374', '73', 'skmasump9@gmail.com', '$2y$10$54w5i7BLE9BFwx9LqWJovu2szo.Vg9I7u4hTSRSf49sZvpaFnnCPu', '274467', 1, 1, 'Male', 'Bangladesh', NULL, 'Jessore, Bangladesh', NULL, NULL, NULL, '23.1777682', '89.18012249999992', 'Self', 'No Religion', NULL, 'Fair', 'BBA Professional', NULL, 'Running Student', NULL, 'Divorced', '5 Feet 4 Inch', '65 KG', 'Female', '73_pp_2021_01_07_071017_61731864.jpg', NULL, NULL, 'online', '1989-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-04-27 21:53:32', '2021-01-07 01:10:18', NULL, NULL),
(74, 'Md Ashik Shah', '01797695025', '74', 'ashikshah579@gmail.com', '$2y$10$hCEL0VotdfXKf37zh7G.O.Wrbn/HsD4nc4BrhRVVx7u9yEn.PqZrW', '942058', 1, 1, 'Male', 'Bangladesh', NULL, 'Nilphamari Sadar Upazila, Bangladesh', NULL, NULL, NULL, '25.9893628', '88.82630059999997', 'Self', 'Muslim', NULL, 'Fair', 'Department of Software Engineering', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 11 Inch', '60 KG', 'Female', '74_pp_2021_01_07_071107_58288373.png', NULL, NULL, 'online', '1997-06-08', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'LOeZJjonbhFsKS5nCzyhb7VCOzKvLMqzuCcoFshTP9OVNIevjhuJDsE6XBHf', '2019-04-30 06:35:17', '2021-01-07 01:11:11', NULL, NULL),
(75, 'Trishna Chowdhury', '01681799902', '75', 'trishnachowdhury94@gmail.com', '$2y$10$5mA.ACBZFjmTcfEbzDCEp.PTUTTq4CN8z9gmLYud7OANuXOt5r9eq', '490271', 1, 1, 'Female', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.37954379999996', 'Self', 'Hindu', NULL, 'Drak', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 1 Inch', '47 KG', 'Male', '75_pp_2021_01_07_071157_78652877.jpg', NULL, NULL, 'online', '1993-06-05', 0, 1, NULL, NULL, 1, NULL, 0, NULL, '4J70tqIlxbnnYCUrAICFpFhIQyHWSTGd2XY1N99DyQhJ6Qo1Hi66iM6pqjBo', '2019-05-01 16:27:02', '2021-01-07 01:11:57', NULL, NULL),
(76, 'Md. Sohag Sarker', '01633089774', '76', 'sohag.sarker166@gmail.com', '$2y$10$4i26tAp7hdh/IXpEeNluVuDuU3gfYqeUHyFPoPVxrQfJPE40nSXxW', '209799', 1, 1, 'Male', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.37954379999996', 'Self', 'Muslim', NULL, 'Fair', 'Department of Drawing and Painting', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '65 KG', 'Female', '76_pp_2021_01_07_071213_25161582.jpeg', NULL, NULL, 'online', '1996-12-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-02 02:14:50', '2021-01-07 01:12:14', NULL, NULL),
(77, 'Suvo bgd', '+8801757174233', '77', 'suvoajai@gmail.com', '$2y$10$Nk/U.WuwDFh/YPQO32LFTe08.2IlbvHxsu0R//Lu4/T6pqcolmJAa', '344968', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Brown', 'Department of Mathematics', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '77_pp_2021_01_07_071304_20515150.jpg', NULL, NULL, 'online', '1994-08-14', 0, 1, NULL, NULL, 1, NULL, 0, NULL, '9sefB2jVVyYDfniRSMwojEUOw4sRXDkximspjgGsFFfZyXvFvVyvYrUmnevQ', '2019-05-04 18:00:31', '2021-01-07 01:13:04', NULL, NULL),
(78, 'Shahadate Hossain', '01672531801', '78', 'russel.shad7@gmail.com', '$2y$10$CEVff/4UB0CfYo5336N1yeeeCe/SZQnJHs2eFCfEk3xvSOMAmokU6', '453726', 1, 1, 'Male', 'Bangladesh', NULL, 'Chittagong, Bangladesh', NULL, NULL, NULL, '22.356851', '91.78318190000005', 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 8 Inch', '74 KG', 'Female', '78_pp_2021_01_07_071341_36770349.jpeg', NULL, NULL, 'online', '1988-08-28', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-04 19:00:12', '2021-01-07 01:13:41', NULL, NULL),
(79, 'Shofiullah Shourav', '01730078392', '79', 'shofiullah.shourav@gmail.com', '$2y$10$yovxriWkkzJX6eTuO8.GJObjw7J0p.D25NCuP.VuuCmt9hIwZVEC.', '328902', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'BCS (Audit & Accounts): Assistant Accountant General', NULL, 'Never Married', '5 Feet 10 Inch', '72 KG', 'Female', '79_pp_2021_01_07_071412_48027451.jpg', NULL, NULL, 'online', '1988-10-19', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-04 21:05:22', '2021-01-07 01:14:14', NULL, NULL),
(80, 'Samiul Islam', '+880 1911 040 385', '80', 'samiul2129@gmail.com', '$2y$10$dTozpF0Zg7Y2RdI/LZmP2utYs9SbAf00e6B5RRpMT/1q/6iIt6yHq', '712489', 1, 1, 'Male', 'Bangladesh', NULL, 'Bogra, Bangladesh', NULL, NULL, NULL, '24.848078', '89.37296330000004', 'Self', 'Muslim', NULL, 'Fair', 'Department of Management Studies', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 8 Inch', '70 KG', 'Female', '80_pp_2021_01_07_071444_34658351.jpg', NULL, NULL, 'online', '1988-04-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-08 10:21:42', '2021-01-07 01:14:44', NULL, NULL),
(81, 'md din islam noyon', '01768350592', '81', 'mdprincefarabi@yahoo.com', '$2y$10$r6yHEv5YSX90iJofi.7dk.O4vxjJVCqM7FwZsunotlbu4cT/LKx.q', '965153', 1, 1, 'Male', 'Bangladesh', NULL, 'Motijheel, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7329724', '90.41723100000002', 'Friend', 'Muslim', NULL, 'Drak', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 9 Inch', '72 KG', 'Female', '81_pp_2021_01_07_071527_97349504.jpeg', NULL, NULL, 'online', '1995-10-17', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-09 02:28:06', '2021-01-07 01:15:28', NULL, NULL),
(82, 'Md. Nur Alam', '01724253911', '82', 'nuralam@tdsml.net', '$2y$10$XfrD7C4mDfYvPY4bJtTYXe4fLgSmCHuLIUuxkHmhQ0..9/TD7thH.', '313678', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Bright', 'Department of Finance', NULL, 'Citizen', NULL, 'Legally Separated', '5 Feet 5 Inch', '60 KG', 'Female', '82_pp_2021_01_07_071547_76983855.png', NULL, NULL, 'online', '1982-10-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'BWOruczBOjNvl1FaxCDx8IK7ilbZNf8ICuZVvBdOv03jcrpfeApkkymNRXJj', '2019-05-11 21:07:30', '2021-01-07 01:15:47', NULL, NULL),
(83, 'TAHMUR', '01518367267', '83', 'nayeemjzs14@gmail.com', '$2y$10$BhqBrShJbtbquMjFxLtlrupEkypr0m4n0jWldXG5FVioXdQTFlxv2', '883161', 1, 1, 'Male', 'Bangladesh', NULL, 'Banasree, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7619353', '90.43314099999998', 'Self', 'Muslim', NULL, 'Drak', 'Department of Sociology', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 3 Inch', '60 KG', 'Female', '83_pp_2021_01_07_071614_97597719.jpg', NULL, NULL, 'online', '1991-11-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-13 00:49:53', '2021-01-07 01:16:16', NULL, NULL),
(84, 'Mousumi Akther', '01715284958', '84', 'atmmhassan@gmail.com', '$2y$10$WncckWtqFj2HUvsZrNYZce9iljCqKKC8aWueM.VnarlHBP1dfPx7q', '775060', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Brother', 'Muslim', NULL, 'Bright', 'Department of Sociology', NULL, 'Citizen', NULL, 'Divorced', '5 Feet 4 Inch', '58 KG', 'Male', '84_pp_2021_01_07_071633_79773270.jpg', NULL, NULL, 'online', '1987-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-18 07:51:52', '2021-01-07 01:16:34', NULL, NULL),
(85, 'Israt Jahan', '01796236102', '85', 'ayatislam332@gmail.com', '$2y$10$kc.9jG6am8C73o/qz3Bp..gWt04WQLtBdtDK7wXx5t1/X7qUD3ADC', '733080', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Bright', 'Master of Business Administration', NULL, 'Running Student', NULL, 'Divorced', '5 Feet 4 Inch', '50 KG', 'Male', '85_pp_2021_01_07_071649_52601717.jpg', NULL, NULL, 'online', '1994-12-31', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-24 02:44:58', '2021-01-07 01:16:50', NULL, NULL);
INSERT INTO `users` (`id`, `name`, `mobile`, `username`, `email`, `password`, `password_temp`, `active`, `profile`, `gender`, `country`, `country_other`, `location`, `state`, `city`, `post_code`, `lat`, `lng`, `profile_created_by`, `religion`, `social_order`, `skin_color`, `education_level`, `education_level_other`, `profession`, `profession_other`, `marital_status`, `height`, `weight`, `looking_for`, `img_name`, `file_name`, `file_ext`, `user_type`, `dob`, `check_count`, `edit_count`, `mobile_verified_at`, `email_verified_at`, `addedby_id`, `editedby_id`, `package`, `expired_at`, `remember_token`, `created_at`, `updated_at`, `loggedin_at`, `deleted_at`) VALUES
(86, 'Md Ishtiaque Sultan', '0183844896', '86', 'amitsultan018@gmail.com', '$2y$10$QLeQAAjeJibCysCYMLp8z.6pSNj0u4nrMSB04JudFxXdh3aVoifLO', '289779', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Department of Accounting & Information Systems', NULL, 'Industrialists', NULL, 'Divorced', '5 Feet 11 Inch', '77 KG', 'Female', '86_pp_2021_01_07_071713_46520511.png', NULL, NULL, 'online', '1987-01-16', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-05-26 03:09:41', '2021-01-07 01:17:13', NULL, NULL),
(87, 'Later', '01711186973', '87', 'youmnaali63@gmail.com', '$2y$10$Hn.VS.xor38bBhzJzm.yce9UUfTCULbapVB1EyCMdp0F37qFnxJ9y', '376561', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Guardian', 'Muslim', NULL, 'Brown', 'Master of Science', NULL, 'Lecturer', NULL, 'Never Married', '5 Feet 3 Inch', '75 KG', 'Male', '87_pp_2021_01_07_071753_27015601.jpg', NULL, NULL, 'online', '1989-02-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-06-09 21:53:57', '2021-01-07 01:17:53', NULL, NULL),
(88, 'Mahabubul Morshed', '01670414888', '88', 'mahabub.morshed29@gmail.com', '$2y$10$VnCE0GbhxuDtxIMuS5MECOX5eEzn0Isyyx8nStRwk0vDdlSdJo46S', '754628', 1, 1, 'Male', 'Bangladesh', NULL, 'Chittagong, Bangladesh', NULL, NULL, NULL, '22.356851', '91.78318190000005', 'Self', 'Muslim', NULL, 'Brown', 'Master of Accountancy', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 10 Inch', '65 KG', 'Female', '88_pp_2021_01_07_071808_24609996.png', NULL, NULL, 'online', '1986-06-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-06-10 08:08:22', '2021-01-07 01:18:08', NULL, NULL),
(89, 'Mujibur Rahman', '01759549788', '89', 'mujibjeddahksa@gmail.com', '$2y$10$.uhRpnjXb4QLwxSu.MdYWOmQlGfbA6eGB3yr9uyVcQoFykLAKV8k.', '470044', 1, 1, 'Male', 'Bangladesh', NULL, 'Balaganj Upazila, Bangladesh', NULL, NULL, NULL, '24.680128', '91.77335659999994', 'Self', 'Muslim', NULL, 'Drak', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Legally Separated', '5 Feet 8 Inch', '90 KG', 'Female', '89_pp_2021_01_07_071821_97318656.jpg', NULL, NULL, 'online', '1983-12-16', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'hmRFy4n0CIBKriXdehKX0o7vvnp2OQld6Phor1f0OkPA1Z0syO66gNw6kKtm', '2019-06-11 06:59:11', '2021-01-07 01:18:21', NULL, NULL),
(90, 'Moumita Perveen', '01911833030', '90', 'touhidaub@gmail.com', '$2y$10$qenJwdXCiN5pzhI2r2C5meIxQPrE5OZVJXpsfEbqArzQEgrWn9biC', '822088', 1, 1, 'Female', 'Bangladesh', NULL, 'Chuadanga Sadar Upazila, Bangladesh', NULL, NULL, NULL, '23.59267', '88.88388340000006', 'Brother', 'Muslim', NULL, 'Bright', 'Department of Sociology', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '5 Feet 2 Inch', '55 KG', 'Male', '90_pp_2021_01_07_071842_46226735.jpg', NULL, NULL, 'online', '1990-02-19', 0, 1, NULL, NULL, 1, 16, 0, NULL, 'VOmJyWiUfrhLN8hilu2kV9lcmbDPHjcRgUlCi6jE3A4Nnqczo3iv7tRoQObq', '2019-06-13 20:51:42', '2021-01-07 01:18:42', NULL, NULL),
(91, 'Ruma Ali', '01913563380', '91', 'indibindi@gmail.com', '$2y$10$NN/AyWuO3UFIA17tvUzCAO0S966kQLTUiaAlyrV4xLrB/ot.qZRN6', '727126', 1, 1, 'Female', 'Bangladesh', NULL, 'Rampura Bridge, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7683603', '90.42349239999999', 'Self', 'Muslim', NULL, 'Brown', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 2 Inch', '47 KG', 'Male', '91_pp_2021_01_07_071908_86117496.jpg', NULL, NULL, 'online', '1999-04-03', 0, 1, NULL, NULL, 1, 1, 0, NULL, NULL, '2019-06-14 20:26:12', '2021-01-07 01:19:08', NULL, NULL),
(92, 'Shahadat hossain', '01790825656', '92', 'mdshahadat490@gmail.com', '$2y$10$wcI6mCUTheDz5tVwfbgQYupLCdXUckebedEd75rIiQ023D6aYYAz6', '513893', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Drak', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '53 KG', 'Female', '92_pp_2021_01_07_071940_95161996.png', NULL, NULL, 'online', '1997-02-16', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-06-16 21:55:45', '2021-01-07 01:19:42', NULL, NULL),
(93, 'Md. Kamrojjaman', '01719097955', '93', 'mkshohag88@gmail.com', '$2y$10$U90Wm8Siwxxg8T/XbmYo9e/xUDZ.Yor5zZEEuDdjkB1bNkDdV7i.C', '376130', 1, 1, 'Male', 'Bangladesh', NULL, 'Cantonment, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8282405', '90.38896219999992', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 7 Inch', '75 KG', 'Female', '93_pp_2021_01_07_072053_44103665.jpg', NULL, NULL, 'online', '1991-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'nYOYCqpFonGam5Ggq6c8VMAB7FoDlzm2FjOGwEIOvoGJC9J9Gg5q4WrdReOG', '2019-06-18 04:53:08', '2021-01-07 01:20:53', NULL, NULL),
(94, 'Tanjuma Aziz Anusha', '01819794150', '94', 'aziz_bgfcl@yahoo.com', '$2y$10$O2FBP248V1lQNE7UULkKeeLyOJE7LjJhLLoyfjcbPlr4kDg6pP1ky', '153470', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Parent', 'Muslim', NULL, 'Fair', 'Department of Civil Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '28 KG', 'Male', '94_pp_2021_01_07_072117_22411465.jpg', NULL, NULL, 'online', '1997-08-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-06-24 18:26:50', '2021-01-07 01:21:17', NULL, NULL),
(95, 'Upama Das', '01689824878', '95', 'upamapsy.cu@gmail.com', '$2y$10$S3I5F7emrYVEne0pNaYdNOPwwdhXe9OhUgtynZmUSrIHko1MUEkMi', '994327', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Hindu', NULL, 'Bright', 'Master of Psychology', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '67 KG', 'Male', '95_pp_2021_01_07_072141_15190324.png', NULL, NULL, 'online', '1992-05-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-06-25 20:58:45', '2021-01-07 01:21:43', NULL, NULL),
(96, 'MD.Abdullah Al Mamun', '01712357201', '96', 'mamun1746@gmail.com', '$2y$10$1a0YbMUOXsizJvB3rVHmH.mFp0NZkoaJw8rHtf4WmYIfAxaiJdUaS', '379786', 1, 1, 'Male', 'Bangladesh', NULL, 'Kushtia, Bangladesh', NULL, NULL, NULL, '23.9087767', '89.12198220000005', 'Self', 'Muslim', NULL, 'Brown', 'Electrical and Electronic Engineering Research Bulletin', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '70 KG', 'Female', '96_pp_2021_01_07_072204_36373797.jpeg', NULL, NULL, 'online', '1994-06-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-01 12:42:11', '2021-01-07 01:22:05', NULL, NULL),
(97, 'Zubaer Hasan Suzon', '01934964420', '97', 'zubaer.suzon@gmail.com', '$2y$10$4qnBvu4kcX6LY8tvJoMxl.taS.6wxGT0U1AMiNhUnjxktLJIZc/ki', '962872', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhanmondi, Dhaka 1205, Bangladesh', NULL, NULL, NULL, '23.7461495', '90.3742307', 'Self', 'Muslim', 'Sunni', 'Fair', 'Higher Secondary Certificate', NULL, 'Doctor', NULL, 'Divorced', '5 Feet 8 Inch', '75 KG', 'Female', '97_pp_2021_01_07_102804_89249051.jpg', NULL, NULL, 'online', '1985-02-02', 0, 3, NULL, NULL, 1, 1, 0, NULL, NULL, '2019-07-06 01:03:14', '2021-01-07 04:28:05', NULL, NULL),
(98, 'MD.sohel Rana', '01639418574', '98', 'Soheldelta10@gmail.com', '$2y$10$MmyG6P99yoxd4OEi16AE9Od1iLuyrw8kBtOQ5vpZu1cVWl6EeRCC6', '771109', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Divorced', '5 Feet 3 Inch', '43 KG', 'Female', '98_pp_2021_01_07_102744_61746398.jpg', NULL, NULL, 'online', '1991-10-12', 0, 1, NULL, NULL, 1, 1, 0, NULL, NULL, '2019-07-07 15:13:23', '2021-01-07 04:27:45', NULL, NULL),
(99, 'Mohammad Rahman', '+4407419386524', '99', 'al2018mamun@gmail.com', '$2y$10$M6yXcstPwBNfjFUT7os.x.NAFZvc79ZG4UDpMnhxVoVrDiw0NxS3e', '143649', 1, 1, 'Male', 'United Kingdom', NULL, 'London, UK', NULL, NULL, NULL, '51.5073509', '-0.12775829999998223', 'Self', 'Muslim', NULL, 'Fair', 'Department of Accounting & Information Systems', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 10 Inch', '72 KG', 'Female', '99_pp_2021_01_07_102730_32542179.png', NULL, NULL, 'online', '1990-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-07 20:37:35', '2021-01-07 04:27:31', NULL, NULL),
(100, 'AMITKHAN', '01751573172', '100', 'amitkhan35@gmail.com', '$2y$10$05oWtpJ.e.G1mwKrcADBj.f0khw.ULOPwl/B4pBy0q7ZBcWxvz1dm', '543162', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Master of Fine Arts', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '68 KG', 'Female', '100_pp_2021_01_07_072453_15254477.jpg', NULL, NULL, 'online', '1990-02-16', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-10 02:54:32', '2021-01-07 01:24:54', NULL, NULL),
(101, 'Tamanna Tasnim Prova', '01716297344', '101', 'tprova.ku@gmail.com', '$2y$10$fLj2ABVz1MfOxDED/Rx86u2.Y7Wseb9AcjUQwgujkbLmUpKIOmmXq', '393237', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Guardian', 'Muslim', NULL, 'Fair', 'Department of Mathematics', NULL, 'Lecturer', NULL, 'Never Married', '5 Feet 4 Inch', '60 KG', 'Male', '101_pp_2021_01_07_072640_23086087.jpg', NULL, NULL, 'online', '1993-12-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'hrgVBIoDEyZeJ6cUP5IpGNjWcCaMnOcVZBKDTwLrluKt4S5oWI5BrZgTY1xs', '2019-07-13 21:50:39', '2021-01-07 01:26:41', NULL, NULL),
(102, 'Abdul Hamid', '01916510039', '102', 'ahamid220@gmail.com', '$2y$10$d4n09wmkeR42UX3HRDp.8.1MnATLNhRzmhUcPYUdAGeNeX0hKk5Bi', '809218', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Ten', 'Master of Business Administration', NULL, 'Citizen', NULL, 'Widowed', '6 Feet 1 Inch', '92 KG', 'Female', '102_pp_2021_01_07_072713_72096875.jpeg', NULL, NULL, 'online', '1983-01-20', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-14 09:50:05', '2021-01-07 01:27:13', NULL, NULL),
(103, 'Nowshin Sikder', '01533832992', '103', 'nowshinsikder@gmail.com', '$2y$10$VbC/YnWfxkHFVopE8B5awO0YoJKMAybVA6mNp6SjOUXY9mi1uN/ou', '576176', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Bright', 'Department Of English', NULL, 'Industrialists', NULL, 'Never Married', '5 Feet 3 Inch', '45 KG', 'Male', '103_pp_2021_01_07_072732_41652520.png', NULL, NULL, 'online', '1993-08-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-18 06:53:54', '2021-01-07 01:27:33', NULL, NULL),
(104, 'salauddin bhuiyan', '01996520392', '104', 'sbhuiyan90@gmail.com', '$2y$10$jRJ/2qU/0vJhSkgXSqylfee8prdbxLijrxrll5mhi/3C0sbMp1Lay', '975419', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Department of Public Administration', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 11 Inch', '62 KG', 'Female', '104_pp_2021_01_07_072814_61903677.jpg', NULL, NULL, 'online', '1990-01-23', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-21 18:30:00', '2021-01-07 01:28:17', NULL, NULL),
(105, 'Farjana akter bithi', '01913654270', '105', 'jhumurnusrat2138@gmail.com', '$2y$10$seqbx3MwbtXL8U2NCxyKqOyuI2.tXxiWuZVwNcXXct2HJTbx/5uJe', '417402', 1, 1, 'Female', 'Bangladesh', NULL, '?????????????????? ?????????????????????????????????, ????????????, ????????????????????????', NULL, NULL, NULL, '23.7881199', '90.37365840000007', 'Self', 'Muslim', NULL, 'Bright', 'Department of Finance', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 2 Inch', '55 KG', 'Male', '105_pp_2021_01_07_073010_41727446.jpg', NULL, NULL, 'online', '1996-07-12', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-22 15:35:58', '2021-01-07 01:30:11', NULL, NULL),
(106, 'Hassan', '01643395829', '106', 'khondaker3000@gmail.com', '$2y$10$BHGJUtpHtcf/BdY7w86b0.xxCqb9PIYUGOydeIjAE5cTfdQwlC3xe', '936040', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Master of Laws', NULL, 'Citizen', NULL, 'Divorced', '5 Feet 7 Inch', '73 KG', 'Female', '106_pp_2021_01_07_073049_60768192.png', NULL, NULL, 'online', '1986-12-08', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-23 06:25:36', '2021-01-07 01:30:51', NULL, NULL),
(107, 'Fakir Tarikul Islam', '01740980204', '107', 'fakirtarikul@gamil.com', '$2y$10$HcW.l4jaJn.0euZogoLH3.ToNXXPxQbBdouVdoxYWnLloB49k.NkW', '443032', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Department of Political Science', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 4 Inch', '58 KG', 'Female', '107_pp_2021_01_07_073123_86444525.jpg', NULL, NULL, 'online', '1988-06-20', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'LgHg4BB7z5yatKmwZbGUfjyrBK8URxCdckADfZMfKVyInjhoFQli9j1gIci4', '2019-07-23 23:10:53', '2021-01-07 01:31:23', NULL, NULL),
(108, 'Md. Emran Apon', '01676515556', '108', 'emranapon4@gmail.com', '$2y$10$s1.yJwUBQ9wSOFWhFiNk/OFhQ6rx4CzjuZDOcoI6eJXdWHm14hJQG', '647570', 1, 1, 'Male', 'Bangladesh', NULL, 'Chittagong, Bangladesh', NULL, NULL, NULL, '22.356851', '91.78318190000005', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 6 Inch', '65 KG', 'Female', '108_pp_2021_01_07_073140_37813438.jpeg', NULL, NULL, 'online', '1994-02-26', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-24 23:41:00', '2021-01-07 01:31:42', NULL, NULL),
(109, 'MD ASADUZZAMAN', '01706754058', '109', 'asaduzzamankhan94@gmail.com', '$2y$10$zM680cpHjkHFu2MXaCG0h.LkuREAAFGbKMtB.9bQBhWknepLTbKbG', '623067', 1, 1, 'Male', 'Bangladesh', NULL, 'Mirpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8223486', '90.36542039999995', 'Brother', 'Muslim', NULL, 'Brown', 'Department of Law', NULL, 'Businessmen', NULL, 'Legally Separated', '5 Feet 6 Inch', '84 KG', 'Female', '109_pp_2021_01_07_073218_25097874.jpg', NULL, NULL, 'online', '1994-08-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-07-30 06:05:37', '2021-01-07 01:32:18', NULL, NULL),
(110, 'Abubokar Siddik', '01615201132', '110', 'abubokar@gmail.com', '$2y$10$nBvmyGssODl2i.H8DA7eJeaoA/6L57vNRy5iAfdfi4oAZS0c4gYLm', '118817', 1, 1, 'Male', 'Bangladesh', NULL, 'Noakhali, Bangladesh', NULL, NULL, NULL, '22.8246384', '91.10173340000006', 'Self', 'Muslim', NULL, 'Bright', 'Kamil', NULL, 'Bangladesh Army', NULL, 'Never Married', '5 Feet 5 Inch', '56 KG', 'Female', '110_pp_2021_01_07_073308_91705210.jpeg', NULL, NULL, 'online', '1991-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'jpzKkguf06ATUzMruucx1wZ4HLlts8WmgCiGMfE0EvTcOxNnYSTk4v8tjP1j', '2019-08-04 17:59:02', '2021-01-07 01:33:08', NULL, NULL),
(111, 'Md Siraj', '01706465651', '111', 'siraj.pcil@gmail.com', '$2y$10$JSWtTdC2L0FMvIrL1J0M..Ra1qCGfGG.U7CnNXXqjC3JyxT0b1wgG', '959990', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Bright', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Anulled', '5 Feet 8 Inch', '80 KG', 'Female', '111_pp_2021_01_07_073437_87432264.jpg', NULL, NULL, 'online', '1963-02-20', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-04 19:51:34', '2021-01-07 01:34:38', NULL, NULL),
(112, 'Md. Nadim Mahmud', '01728643165', '112', 'nadim.mcsa@gmail.com', '$2y$10$6fiID0Qnj9td0z2Lr5MLo.Ykj7S8zP0ZLp4m/KoIm9mR7TdpRAPdW', '580115', 1, 1, 'Female', 'Bangladesh', NULL, 'Shyamoli, Dhaka, Bangladesh', NULL, NULL, NULL, '23.771007', '90.36392550000005', 'Self', 'Muslim', NULL, 'Fair', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '63 KG', 'Male', '112_pp_2021_01_07_080518_19049122.jpg', NULL, NULL, 'online', '1994-11-07', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-05 04:12:59', '2021-01-07 02:05:19', NULL, NULL),
(113, 'md. eusub ali', '01774392905', '113', 'eusubali512@gmail.com', '$2y$10$keyIeIZYM9zh/qO3Phd3h.90SgFbntAN0H7R1oMOl4Xm63GbjaO8O', '497778', 1, 1, 'Male', 'Bangladesh', NULL, 'Sirajganj District, Bangladesh', NULL, NULL, NULL, '24.3141115', '89.56996149999998', 'Self', 'Muslim', NULL, 'Bright', 'Master of Science in Information Systems', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 5 Inch', '54 KG', 'Female', '113_pp_2021_01_07_080602_28423090.jpg', NULL, NULL, 'online', '1989-12-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-05 15:51:17', '2021-01-07 02:06:03', NULL, NULL),
(114, 'SAYEEF KHAN', '+61404941599', '114', 'skhan0707@gmail.com', '$2y$10$8i45x9X/X2aU4gdqVHNaieV.PdVKV7mnSSTKLo.Oo49JtUtiZpdLG', '782209', 1, 1, 'Male', 'Australia', NULL, 'Sydney NSW, Australia', NULL, NULL, NULL, '-33.8688197', '151.20929550000005', 'Self', 'Muslim', NULL, 'Fair', 'Master of Finance', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 10 Inch', '78 KG', 'Female', '114_pp_2021_01_07_080621_39366827.jpg', NULL, NULL, 'online', '1987-12-13', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-06 18:56:41', '2021-01-07 02:06:21', NULL, NULL),
(115, 'Mahbuba Julaikha', '01521225008', '115', 'Julaikhamahbuba0@gmail.com', '$2y$10$vlNqh7EJSpHR5chuR3jv/u3dpHBY1GtxX9Fh5xvIWVkzcXjAO32P2', '569656', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Brother', 'Muslim', NULL, 'Fair', 'Master of Medical Science', NULL, 'Doctor', NULL, 'Never Married', '5 Feet', '44 KG', 'Male', '115_pp_2021_01_07_080639_83032134.jpg', NULL, NULL, 'online', '1995-03-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-06 23:48:47', '2021-01-07 02:06:39', NULL, NULL),
(116, 'Galib Mansur', '01675828814', '116', 'galiblaw@gmail.com', '$2y$10$r8/QKhjMH11pwFLpZcXtp.rz09jEil8XA6T02d6kpohqII8FtVKxO', '281870', 1, 1, 'Male', 'Bangladesh', NULL, 'Mohammadpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.766008', '90.3585875', 'Self', 'Muslim', NULL, 'Fair', 'Master of Laws', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 8 Inch', '58 KG', 'Female', '116_pp_2021_01_07_080659_24797671.jpeg', NULL, NULL, 'online', '1989-12-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-07 17:45:46', '2021-01-07 02:06:59', NULL, NULL),
(117, 'Abu Mohammad Ayman', '646-830-8281', '117', 'aburules30@ymail.com', '$2y$10$g5XGpHGDHG6P0RuvPfWu6eAp4z9/l7HirulteoMtGKwc06IAs5yL2', '179667', 1, 1, 'Male', 'United States', NULL, 'New York, NY, USA', NULL, NULL, NULL, '40.7127753', '-74.0059728', 'Self', 'Muslim', NULL, 'Brown', 'Department of Economics', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '63 KG', 'Female', '117_pp_2021_01_07_080712_43765351.png', NULL, NULL, 'online', '1997-08-23', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-07 20:09:51', '2021-01-07 02:07:12', NULL, NULL),
(118, 'Golam Rabbani', '01711567123', '118', 'finex.thread@gmail.com', '$2y$10$nLzTKCGQdxnESjiPXQkYmuiLfCondvvHxyRe/NtHDXvA5r2XBnaP2', '684217', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'BBA Professional', NULL, 'Businessmen', NULL, 'Widowed', '5 Feet 6 Inch', '70 KG', 'Female', '118_pp_2021_01_07_080724_68530726.jpeg', NULL, NULL, 'online', '1964-04-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, '93ZnM0PWVuIswaYYDx6WBWwOvOu179B2sd14Q3oDmMtVGKKaypES0dPxpPdC', '2019-08-10 20:13:03', '2021-01-07 02:07:27', NULL, NULL),
(119, 'Mahtab Sagar', '01718439472', '119', 'sagarkhan538@gmail.com', '$2y$10$UrH.Cw3GRGjzd7SBwMz8auqAjR.nI2EXoYNXeEW0RxQdGLykyi7Ee', '502169', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Information', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '5 Feet 8 Inch', '79 KG', 'Female', '119_pp_2021_01_07_084613_83826878.jpeg', NULL, NULL, 'online', '1989-04-02', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'cZmdoHacSU2w3VqEE7sDyA0gw3tPgxDHf84716atNXuR1AlAOyUF7mVVuQJg', '2019-08-13 07:03:54', '2021-01-07 02:46:14', NULL, NULL),
(120, 'R.a Mosiur Rhoman', '01742595675', '120', 'mosiurrhoman333@gmail.com', '$2y$10$xNojgp39RdG4ZN0oTHYN4e9IBNf38b8H2zZDpCpIS.IKc2e7Vx/3G', '562291', 1, 1, 'Male', 'Bangladesh', NULL, 'Kurigram, Bangladesh', NULL, NULL, NULL, '25.810346', '89.6486979', 'Friend', 'Muslim', NULL, 'Fair', 'Electrical and Electronic Engineering', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 8 Inch', '71 KG', 'Female', '120_pp_2021_01_07_084637_22718944.jpg', NULL, NULL, 'online', '1998-02-26', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'fjZWkXGNkVyosPvLFaBnsQlMWEwd3Tkj8Afxw1jkEu9qfOM3USj3esw7o2yr', '2019-08-14 22:50:04', '2021-01-07 02:46:38', NULL, NULL),
(121, 'Mukta Akter', '01704437719', '121', 'Pinkymukta010@gmail.com', '$2y$10$/uaBO.OekqKr44252KCwpO/mLyc9Ndg2LekoWH1Ea9x88pV2KihOC', '185143', 1, 1, 'Female', 'Bangladesh', NULL, 'Manikganj Sadar Upazila, Bangladesh', NULL, NULL, NULL, '23.8346765', '90.01865550000002', 'Self', 'Muslim', NULL, 'Bright', 'Department of History', NULL, 'Running Student', NULL, 'Divorced', '5 Feet 3 Inch', '60 KG', 'Male', '121_pp_2021_01_07_084915_94959824.jpg', NULL, NULL, 'online', '1998-09-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-18 14:40:51', '2021-01-07 02:49:16', NULL, NULL),
(122, 'Shafian Imtiaz', '01911354035', '122', 'modconeng@gmail.com', '$2y$10$vYARpB3o/RFWe2R0m5/YX.hJo3saYkWfsqV6gf/74KGEfGvY3QPnK', '239593', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', 'Dhaka', 'Dhaka', '1219', '23.810332', '90.41251809999994', 'Parent', 'Muslim', 'Sunni', 'Fair', 'Department of Political Science', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '56 KG', 'Female', '122_pp_2021_01_07_085009_64580211.jpg', NULL, NULL, 'online', '1986-05-23', 0, 2, NULL, NULL, 1, 122, 0, NULL, NULL, '2019-08-19 01:28:10', '2021-01-07 02:50:10', NULL, NULL),
(123, 'Mizanur Rahman Fahim', '01714553740', '123', 'fahim.mizan51@gmail.com', '$2y$10$kG2NSUM8pkqYQBwoMJEPCe5Cn2znswSwOHGsMme4VO.yEf.sPLT5i', '874381', 1, 1, 'Male', 'Bangladesh', NULL, 'Mirpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8223486', '90.36542039999995', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 1 Inch', '56 KG', 'Female', '123_pp_2021_01_07_085859_52253905.jpeg', NULL, NULL, 'online', '1985-07-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-19 06:11:16', '2021-01-07 02:59:00', NULL, NULL),
(124, 'Md kawsar Ali', '01704389954', '124', 'Kawsartkg64@gmail.com', '$2y$10$zo7yYhbOgimu8Y4gpbpW5.zFH9r1RRMmiOaHc/hK/mwTXStvRZ/E2', '598352', 1, 1, 'Male', 'Bangladesh', NULL, 'Thakurgaon Sadar Upazila, Bangladesh', NULL, NULL, NULL, '26.08028669999999', '88.4403883', 'Self', 'Muslim', NULL, 'Bright', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 7 Inch', '55 KG', 'Female', '124_pp_2021_01_07_091003_86743446.png', NULL, NULL, 'online', '1998-05-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-08-28 15:23:01', '2021-01-07 03:10:09', NULL, NULL),
(125, 'Rayhan', '01867834630', '125', 'rayhanmojumder891@gmail.com', '$2y$10$m1xorHwfOnTleRJfjzZ3IuqRgOzA2GD75LcSopL2Sacw7A74Ov7kq', '795714', 1, 1, 'Male', 'Bangladesh', NULL, 'Comilla, Bangladesh', NULL, NULL, NULL, '23.4606574', '91.18090649999999', 'Self', 'Muslim', NULL, 'Bright', 'High School Pass', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '65 KG', 'Female', '125_pp_2021_01_07_091205_85534978.jpg', NULL, NULL, 'online', '1997-03-05', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-09-01 00:31:00', '2021-01-07 03:12:06', NULL, NULL),
(126, 'Mejba ur Rahman', '01788571133', '126', 'Mejba_ur_rahman85@live.com', '$2y$10$OnvH4jRsab6NipF80AuTyek4JV6vV.6P6T31YbyydF9T8LTFi84aC', '473018', 1, 1, 'Male', 'Bangladesh', NULL, 'Mohammadpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.766008', '90.3585875', 'Self', 'Muslim', NULL, 'Drak', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 4 Inch', '62 KG', 'Female', '126_pp_2021_01_07_091530_84598995.jpeg', NULL, NULL, 'online', '1988-08-02', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-09-01 06:56:36', '2021-01-07 03:15:31', NULL, NULL),
(127, 'MM Tanim', '01703536727', '127', 'sfbabu846@gmail.com', '$2y$10$isX8lC8FtTNczVMIgm28N.jxchjMOxboB8vwyJt/xmEhR.UXZaxhC', '214038', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Kamil', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 5 Inch', '56 KG', 'Female', '127_pp_2021_01_07_091620_84459491.jpeg', NULL, NULL, 'online', '1999-02-18', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'qnUcygE2WZbZ1A5wR7ybAiBRyNza6Fy2gG7SAhJHZ66bfAODgXhijYrGZIkX', '2019-09-08 21:30:19', '2021-01-07 03:16:21', NULL, NULL),
(128, 'Tufik Ahmmed Tarek', '01824927979', '128', 'tufikahmmedtarek@gmail.com', '$2y$10$rHUAa6PFyjEjq9pvjzlMkOVx1.DDORhgwtPWy9XwRiumQty7xfcZe', '691746', 1, 1, 'Male', 'Bangladesh', NULL, 'Chandina, Bangladesh', NULL, NULL, NULL, '23.4892481', '91.00836370000002', 'Self', 'Muslim', NULL, 'Fair', 'High School Pass', NULL, 'Businessmen', NULL, 'Anulled', '5 Feet 9 Inch', '80 KG', 'Female', '128_pp_2021_01_07_091641_90787451.png', NULL, NULL, 'online', '1989-12-12', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-09-09 22:39:22', '2021-01-07 03:16:41', NULL, NULL),
(129, 'Md.Shamim Hassan', '01970714658', '129', 'shamimvai2014@gmail.com', '$2y$10$dIogQEbyzeU2fdjYyp1.H.2jj4rpfLfh5XqTB/vHmoz2ssCXEIfby', '472896', 1, 1, 'Male', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.37954379999996', 'Brother', 'Muslim', NULL, 'Fair', 'High School Pass', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 4 Inch', '62 KG', 'Female', '129_pp_2021_01_07_091715_46950959.jpg', NULL, NULL, 'online', '1992-04-02', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-09-14 05:55:30', '2021-01-07 03:17:15', NULL, NULL),
(130, 'Md Imran Gazi Imon', '01956165551', '130', 'mdimrangazi5@gmail.com', '$2y$10$U8Hko5qtRAPx.ThyqS9hNeDW2g7TAnRvqpVhyziUhxlXHnBw/YjR6', '937498', 1, 1, 'Male', 'Bangladesh', NULL, 'Shiromoni, Khulna, Bangladesh', NULL, NULL, NULL, '22.9140052', '89.49075560000006', 'Friend', 'Muslim', NULL, 'Bright', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '65 KG', 'Female', '130_pp_2021_01_07_091741_92163159.jpg', NULL, NULL, 'online', '1994-11-06', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-09-18 17:10:03', '2021-01-07 03:17:42', NULL, NULL),
(131, 'Mahmud Abbas', '+97450388371', '131', 'mahmudabbas@icloud.com', '$2y$10$R.zYnA6HqYU10AKew15x0.fHZCAWNZQJAxhzdTcPaOz0vDglcwMYW', '357890', 1, 1, 'Male', 'Qatar', NULL, 'Doha, Qatar', NULL, NULL, NULL, '25.2854473', '51.53103979999992', 'Self', 'Muslim', NULL, 'Fair', 'High School Pass', NULL, 'Ministry of labour', NULL, 'Never Married', '5 Feet 5 Inch', '56 KG', 'Female', '131_pp_2021_01_07_091758_89211891.jpg', NULL, NULL, 'online', '1995-04-13', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-09-20 23:06:40', '2021-01-07 03:17:59', NULL, NULL),
(132, 'Md Shahnawaz Kabir', '01818397050', '132', 'alvie01@outlook.com', '$2y$10$KSYyIICpaIh.xSlJZ2LXYuuqb850xIgYkMVA4zD0TxBf0rFjwZkAm', '194207', 1, 1, 'Male', 'Bangladesh', NULL, 'Chittagong, Bangladesh', NULL, NULL, NULL, '22.356851', '91.78318190000005', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '72 KG', 'Female', '132_pp_2021_01_07_091829_77606157.jpg', NULL, NULL, 'online', '1987-07-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'IUM1KybgTbh8TTb6t0jGoSgZp60wB8jAoJFpBBFdkVcb0DmLrB4wLIgcqXVG', '2019-10-02 01:00:39', '2021-01-07 03:18:35', NULL, NULL),
(133, 'Idris Iskandar', '01768205839', '133', 'epson.toefl@gmail.com', '$2y$10$o77YnSVwnjo6duQsY8IhAeSL3CP9nJEjAxIo1pKS0vQ6EFhdUBvme', '918405', 1, 1, 'Male', 'Germany', NULL, 'Karlsruhe, Deutschland', NULL, NULL, NULL, '49.0068901', '8.403652700000066', 'Self', 'Muslim', NULL, 'Brown', 'Master of Engineering', NULL, 'Engineer', NULL, 'Never Married', '6 Feet', '73 KG', 'Female', '133_pp_2021_01_07_091923_41036854.jpg', NULL, NULL, 'online', '1993-01-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-02 07:37:46', '2021-01-07 03:19:23', NULL, NULL),
(134, 'MD Munjrul Islam', '01918724119', '134', 'munjurul355@yahoo.com', '$2y$10$oQgHGazZBOe81XIqE5ieJ..n1bZ6O1Af648uUOiMYMqab0prPMXNW', '496290', 1, 1, 'Male', 'Bangladesh', NULL, 'Khilkhet, Dhaka, Bangladesh', NULL, NULL, NULL, '23.83112239999999', '90.42430130000002', 'Self', 'Muslim', NULL, 'Bright', 'M.sc Department of Computer Science & Engineering', NULL, 'Engineer', NULL, 'Never Married', '4 Feet 7 Inch', '67 KG', 'Female', '134_pp_2021_01_07_091952_45760605.jpeg', NULL, NULL, 'online', '1996-06-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-03 17:32:44', '2021-01-07 03:19:54', NULL, NULL),
(135, 'ADITY RAHMAN', '01712593515', '135', 'adityrahama1@gmail.com', '$2y$10$RfF3HOAJNE5p6bXmE23ib.n1vYbUGHzV28k3.iSiAzwVR0m0EjAlG', '698708', 1, 1, 'Female', 'Bangladesh', NULL, 'Magura, Bangladesh', NULL, NULL, NULL, '23.4854655', '89.41983049999999', 'Self', 'Muslim', NULL, 'Fair', 'Master of Arts in Liberal Studies', NULL, 'Ministry of Education (Bangladesh)', NULL, 'Divorced', '5 Feet 2 Inch', '50 KG', 'Male', '135_pp_2021_01_07_092644_96159675.jpg', NULL, NULL, 'online', '1977-10-13', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-10 15:36:47', '2021-01-07 03:26:46', NULL, NULL),
(136, 'munni', '01710811065', '136', 'mqaynee@gmail.com', '$2y$10$YoMf8lybVUjS7crVyyuvG.KXmX/OkSLMyAtHZMiKTIJQDcuSoQOWu', '660385', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Bright', 'Master of Science', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 3 Inch', '56 KG', 'Male', '136_pp_2021_01_07_092814_50614989.jpg', NULL, NULL, 'online', '1984-02-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'IEyRJT5D5RmAdADyIXEw0P8QRKHAHFUzmRw68ZeE5ku2oIsTNiBLoMZ1Plaj', '2019-10-11 01:10:13', '2021-01-07 03:28:14', NULL, NULL),
(137, 'Al Imran', '01303239820', '137', 'alimrsan@gmail.com', '$2y$10$T9bfY9ciHATwv6ZARa90YeH98JqdiapRsazN4yCLwgu5gBByLcSUm', '137541', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Master of Veterinary Science', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 7 Inch', '68 KG', 'Female', '137_pp_2021_01_07_092832_21343914.jpg', NULL, NULL, 'online', '1990-08-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-11 21:18:04', '2021-01-07 03:28:33', NULL, NULL),
(138, 'Helal Uddin', '01818055459', '138', 'helal055459@yahoo.com', '$2y$10$QYL1BSZbUg4GRp876x.K9O2cQPVWCNbCWT.NJUOZPl7OEDKZVqq3e', '325966', 1, 1, 'Male', 'Bangladesh', NULL, 'Bandarban, Bangladesh', NULL, NULL, NULL, '22.1935628', '92.21874760000003', 'Self', 'Muslim', NULL, 'Brown', 'Department of Sociology', NULL, 'Lecturer', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '138_pp_2021_01_07_092901_72667015.jpg', NULL, NULL, 'online', '1988-01-16', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-12 03:44:51', '2021-01-07 03:29:02', NULL, NULL),
(139, 'Samsul Alam Sajeeb', '+8801813998709', '139', 'sajeebmazumder@gmail.com', '$2y$10$3yXZez6deukf/LVyuyhxAO3avKxl88kS/v32VqaL.H5qejZbWJTKG', '544302', 1, 1, 'Male', 'Bangladesh', NULL, 'Khilgaon, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7566389', '90.4643906', 'Self', 'Muslim', NULL, 'Bright', 'Master of Management', NULL, 'Industrialists', NULL, 'Never Married', '5 Feet 10 Inch', '70 KG', 'Female', '139_pp_2021_01_07_092930_12456209.png', NULL, NULL, 'online', '1988-06-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-12 05:10:09', '2021-01-07 03:29:31', NULL, NULL),
(140, 'Nurnobi', '01885299695', '140', 'hazeraakternishi@gmail.com', '$2y$10$2.Iug68fhwDzoxE6nM8IkO4U/qNciZREqkdVkgDAgCnLF/Cu62EH2', '478165', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Drak', 'High School Pass', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 11 Inch', '86 KG', 'Female', '140_pp_2021_01_07_092955_35354020.jpg', NULL, NULL, 'online', '1988-02-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-12 09:36:13', '2021-01-07 03:29:55', NULL, NULL),
(141, 'Karishma kamal', '01851571356', '141', 'karishmakamal01@gmail.com', '$2y$10$iYOkEtDVf5GQ2BSyB7BhEewv0yu9qTq/cGBURhi7uJrQMWqtA4vb6', '477705', 1, 1, 'Female', 'Bangladesh', NULL, 'Chittagong, Bangladesh', NULL, NULL, NULL, '22.356851', '91.78318190000005', 'Self', 'Muslim', NULL, 'Fair', 'Department of Law', NULL, 'Citizen', NULL, 'Divorced', '5 Feet 3 Inch', '50 KG', 'Male', '141_pp_2021_01_07_093017_96671509.jpg', NULL, NULL, 'online', '1990-11-13', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'DWEW81CjpTj4AM3UwkAUog5mlgLgGlzLuoT1I7QVdDBzkl3615rU3Qjlu2E2', '2019-10-18 02:22:58', '2021-01-07 03:30:19', NULL, NULL),
(142, 'Aminul Islam', '01835855496', '142', 'sanam_sam06@yahoo.com', '$2y$10$d.7T4pRF124na8b60rfDB.XP9YNhxHbryXGOPR3S7aNvp6Q2G8JOy', '674395', 1, 1, 'Male', 'Bangladesh', NULL, 'Mohammadpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.766008', '90.3585875', 'Self', 'Muslim', NULL, 'Brown', 'Department of Marketing', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 7 Inch', '65 KG', 'Female', '142_pp_2021_01_07_093036_18353082.jpg', NULL, NULL, 'online', '1992-09-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-19 19:12:22', '2021-01-07 03:30:37', NULL, NULL),
(143, 'Abu Bakkar Siddik', '01711206737', '143', 'rupom.mindmap@gmail.com', '$2y$10$WpOF3.5lE3bdcB.PpFpH0uL4TUJYvhilq0GwYpVbIvnQwNgV1TK7K', '618251', 1, 1, 'Male', 'Bangladesh', NULL, 'Niketan Housing Project, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7738926', '90.41192899999999', 'Friend', 'Muslim', NULL, 'Brown', 'BBA Professional', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 5 Inch', '76 KG', 'Female', '143_pp_2021_01_07_093154_24130834.jpeg', NULL, NULL, 'online', '1992-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-19 21:11:28', '2021-01-07 03:31:54', NULL, NULL),
(144, 'Md Zainal Abedin', '01718581828', '144', 'asimdu999@gmail.com', '$2y$10$ebmDpwqIkh2BV4QqCOgmZuv.6Om7SMjGmXnNjPRT5gOfSJmn.9r3S', '909183', 1, 1, 'Male', 'Bangladesh', NULL, 'Arts Faculty, Dhaka 1205, Bangladesh', NULL, NULL, NULL, '23.7341698', '90.39275020000002', 'Guardian', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Professor', NULL, 'Never Married', '5 Feet 8 Inch', '66 KG', 'Female', '144_pp_2021_01_07_093231_24891535.jpeg', NULL, NULL, 'online', '1987-10-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-21 03:45:15', '2021-01-07 03:32:31', NULL, NULL),
(145, 'Md. Abu Sayed', '01797840509', '145', 'sabujrh87@gmail.com', '$2y$10$a6kv1ivWAmn99D68hwykEOAEIEam9S5tTFLGI5NBafXdCgPwUO3ra', '663035', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Bright', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '62 KG', 'Female', '145_pp_2021_01_07_093310_43710587.jpg', NULL, NULL, 'online', '1994-12-17', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-10-27 18:27:02', '2021-01-07 03:33:10', NULL, NULL),
(146, 'Vijay mandal', '8406970825', '146', 'lovelykumari41995@gmail.com', '$2y$10$jCpIYZqcPTLGwdJTPoki3uZHJ6tNAeS8VIqN3tUHXGFfF6ghIM.p.', '649468', 1, 1, 'Male', 'India', NULL, 'Kahalgaon, Bihar, India', NULL, NULL, NULL, '25.2627223', '87.2366237', 'Sister', 'Hindu', NULL, 'Fair', 'High School Pass', NULL, 'Businessmen', NULL, 'Widowed', '5 Feet 6 Inch', '76 KG', 'Female', '146_pp_2021_01_07_093329_58737353.jpeg', NULL, NULL, 'online', '1965-08-05', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-11-06 01:27:17', '2021-01-07 03:33:29', NULL, NULL),
(147, 'Rabiul Islam', '01676973411', '147', 'audhira202@gmail.com', '$2y$10$NGOH9UqegD4P.BdmhkrD9eExzGSLoCKfHDkyVgIZDkgJbpDNfTRK.', '948343', 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan, Dhaka, Bangladesh', NULL, NULL, NULL, '23.79249609999999', '90.4078058', 'Sister', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Industrialists', NULL, 'Never Married', '5 Feet 7 Inch', '65 KG', 'Female', '147_pp_2021_01_07_093346_63909071.jpeg', NULL, NULL, 'online', '1985-08-08', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-11-07 03:25:28', '2021-01-07 03:33:48', NULL, NULL),
(148, 'nafeez imtiaz', '01685355273', '148', 'imtiazabir7@gmail.com', '$2y$10$DUQrAp0fp/Ezj1Bx2XErD.0HvWVxk8PhoU1mGXHtBaWM77iv1ilCK', '136031', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 5 Inch', '55 KG', 'Female', '148_pp_2021_01_07_093405_20239682.jpg', NULL, NULL, 'online', '1989-12-14', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-11-09 17:26:05', '2021-01-07 03:34:08', NULL, NULL),
(149, 'Rajibuzzaman', '+8801775414258', '149', 'rizve.kuet.eee@gmail.com', '$2y$10$nh9PEQlsrSG8K6.gqoy5/.ohXf1KkkBLO1Gbm3DD/FNSgtLZjL4aa', '383847', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 8 Inch', '66 KG', 'Female', '149_pp_2021_01_07_093430_81496611.jpeg', NULL, NULL, 'online', '1987-12-31', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-11-10 07:13:33', '2021-01-07 03:34:30', NULL, NULL),
(150, 'FAHIM', '+97491311326', '150', 'fahim007@gmail.com', '$2y$10$4DKkp.6tjUAtaGPmVMRVRuvUZXflzeNd8xvwHp8bT/UmU97fk4deG', '249612', 1, 1, 'Male', 'Qatar', NULL, 'Doha, Qatar', NULL, NULL, NULL, '25.2854473', '51.53103979999992', 'Guardian', 'Muslim', NULL, 'Bright', 'Computer science Engineering', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 5 Inch', '65 KG', 'Female', '150_pp_2021_01_07_093448_64883796.jpg', NULL, NULL, 'online', '1989-02-12', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-11-13 03:38:57', '2021-01-07 03:34:49', NULL, NULL),
(151, 'khaled', '01854477982', '151', 'md.khaledsu@gmail.com', '$2y$10$errGgnS6t7pw6rvHMBNYNO5QNfnXfFS5RGjw17dFvXUAZAXfDTOvG', '909967', 1, 1, 'Male', 'Bangladesh', NULL, 'Chittagong, Bangladesh', NULL, NULL, NULL, '22.356851', '91.78318190000005', 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 11 Inch', '75 KG', 'Female', '151_pp_2021_01_07_093506_96979294.jpg', NULL, NULL, 'online', '1988-03-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-11-14 03:19:59', '2021-01-07 03:35:07', NULL, NULL),
(152, 'Afroza Akter', '01627934720', '152', 'afroza2prova@gmail.com', '$2y$10$9GV7MDuHw85AEiQMm8iNVus4ruRYJZ1wNl2f95m24dOnHx6rq/ke6', '340197', 1, 1, 'Female', 'Bangladesh', NULL, 'Mirpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8223486', '90.36542039999995', 'Self', 'Muslim', NULL, 'Brown', 'Department of History', NULL, 'Engineer', NULL, 'Never Married', '4 Feet 9 Inch', '46 KG', 'Male', '152_pp_2021_01_07_093622_81178564.jpg', NULL, NULL, 'online', '1987-08-27', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-11-16 00:53:54', '2021-01-07 03:36:23', NULL, NULL),
(153, 'Md. Habib Ullah', '+8801719014459', '153', 'humilon.bdbl@gmail.com', '$2y$10$pLCQ6CFsOvMpu2DFsOtEvuULzLQolN6fbp.2AWbIgtBFvSBmsKtVe', '778035', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Master of Economics', NULL, 'BCS (Economic): Assistant Chief', NULL, 'Legally Separated', '5 Feet 9 Inch', '75 KG', 'Female', '153_pp_2021_01_07_093655_13829988.jpeg', NULL, NULL, 'online', '1986-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-11-16 20:13:09', '2021-01-07 03:36:58', NULL, NULL),
(154, 'Md. Alomgir Hossain', '01754361036', '154', 'alom88raj@gmail.com', '$2y$10$No13KfglYnaFVZKrDmSfl.PbaAOr.LN5oiDZ/KyOdrWaJQh2OqIDq', '788436', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Master of Accountancy', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 4 Inch', '68 KG', 'Female', '154_pp_2021_01_07_093716_36497983.jpg', NULL, NULL, 'online', '1988-08-18', 0, 4, NULL, NULL, 1, 154, 0, NULL, 'L4yb1t4bJSaD9FJ4PmRJitvb1cG2b4ie3IPfsnTy13hM66ozSQHaf3bKHZ2v', '2019-11-25 23:15:37', '2021-01-07 03:37:18', NULL, NULL),
(155, 'Farjana Faruk', '01817542955', '155', 'farjanafaruk29.92@gmail.com', '$2y$10$QV830PCpzPlI.5o23CTVvu/wQHqhwRg0HsTouAQhw27ncToUj2IDC', '413369', 1, 1, 'Female', 'Bangladesh', NULL, 'Basabo Buddho Mondir Rd, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7367402', '90.43026929999996', 'Guardian', 'Muslim', NULL, 'Brown', 'Master of Business Administration', NULL, 'BCS Non-Cadre', NULL, 'Divorced', '5 Feet 3 Inch', '70 KG', 'Male', '155_pp_2021_01_07_093741_65025128.png', NULL, NULL, 'online', '1992-06-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'knngk3Vttb0Le0gHzBJZ19aKvs6yjoaFrqqKmkHmak75fROtWk7VoPQzj7bs', '2019-12-09 02:19:31', '2021-01-07 03:37:43', NULL, NULL),
(156, 'Md. Nazmul Islam', '01511770806', '156', 'jony210491@gmail.com', '$2y$10$oD40dzK2bS5Na4C3WzB9bO.oQuhCKIsesitA2EAQWHwTSJ6VtfJja', '984361', 1, 1, 'Male', 'Bangladesh', NULL, 'Basabo Buddho Mondir Rd, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7367402', '90.43026929999996', 'Friend', 'Muslim', NULL, 'Brown', 'Master of Applied Science', NULL, 'Industrialists', NULL, 'Never Married', '5 Feet 4 Inch', '63 KG', 'Female', '156_pp_2021_01_07_093806_70638995.jpg', NULL, NULL, 'online', '1991-04-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'RyJ46II9iOlhPPvpUa9kPO8SXwggUE6W9acKQUAUxM6jI7mh1MvDDddnzCnM', '2019-12-09 23:05:51', '2021-01-07 03:38:07', NULL, NULL),
(157, 'Tuhin Mohammad Salim', '01799566902', '157', 'tuhin.jcc37@icloud.com', '$2y$10$KdVAPjl.q4zxxH4.RWPFiuuOJ7lgnh8DvrWReq8LKzr1DMQwKuEry', '148120', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 8 Inch', '65 KG', 'Female', '157_pp_2021_01_07_093835_45829578.jpg', NULL, NULL, 'online', '1988-06-27', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-12-12 08:03:31', '2021-01-07 03:38:36', NULL, NULL),
(158, 'mara', '+22969845832', '158', 'ibrahimmara570@gmail.com', '$2y$10$c8pg2/5qox7eqlm/GG/5QO0VbX3tthr1CxtRvqgCagaJPERBeqFcS', '664402', 1, 1, 'Female', 'Bahrain', NULL, 'Benin', NULL, NULL, NULL, '9.30769', '2.3158339999999953', 'Self', 'Muslim', NULL, 'Fair', 'Alim', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 6 Inch', '31 KG', 'Male', '158_pp_2021_01_07_093858_83487390.jpg', NULL, NULL, 'online', '1989-02-02', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-12-18 22:23:49', '2021-01-07 03:38:59', NULL, NULL),
(159, 'Abdul halim sohel', '01918483648', '159', 'abdulhalim.sohel@gmail.com', '$2y$10$GL1GGEqvl/MLE1r9.Gna..8hLYy.3tTYIXeHYM2epLKzSgqWRA8re', '297124', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Bright', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Divorced', '5 Feet 10 Inch', '70 KG', 'Female', '159_pp_2021_01_07_094344_96477839.jpg', NULL, NULL, 'online', '1989-01-20', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-12-21 22:58:54', '2021-01-07 03:43:48', NULL, NULL),
(160, 'Sabiha Mahbub', '01797971707', '160', 'sabiha.borsha@gmail.com', '$2y$10$U/mpJKK98D3vvjyZC/24Q.3cMicc81J1hBv46olSQfRzo1BzLSyLO', '560503', 1, 1, 'Female', 'Bangladesh', NULL, 'Mohammadpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.766008', '90.3585875', 'Brother', 'Muslim', NULL, 'Brown', 'Department of Law', NULL, 'Running Student', NULL, 'Never Married', '4 Feet 11 Inch', '78 KG', 'Male', '160_pp_2021_01_07_094450_99580112.jpg', NULL, NULL, 'online', '1991-12-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'Vx1XgJC9WigJAFvCFnySriFfGs7bafTbHG2cU6jebfxQIWD7bq2ddvM45A7t', '2019-12-22 16:03:18', '2021-01-07 03:44:51', NULL, NULL),
(161, 'R Rabbi', '+8801631113333', '161', 'rottenkid37@gmail.com', '$2y$10$GB5LS4lcUgqEnxe3AYIGaOhmfsS./KsmGlTg9uaagVnsB9XoCpL5m', '540328', 1, 1, 'Male', 'Bangladesh', NULL, 'Khilgaon, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', '1219', '23.7566389', '90.4643906', 'Self', 'Muslim', NULL, 'Brown', 'Department of Accounting & Information Systems', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 5 Inch', '77 KG', 'Female', '161_pp_2021_01_07_094520_48595161.png', NULL, NULL, 'online', '1990-02-19', 0, 2, NULL, NULL, 1, 161, 0, NULL, 'tivJRG2ObPOwVjbMlgbJwfjaxCXzAYzWExzbu8dS2vH5wseU4qP1SgnLC2x4', '2019-12-26 09:47:58', '2021-01-07 03:45:23', NULL, NULL),
(162, 'Sinthia Talukder', '01817008114', '162', 'sinthia.talukder57@gmail.com', '$2y$10$cskc3errxUSnoDLe0WOL6.PwfOnkrLu6hMV98o.KEfltF0NBPPntK', '772026', 1, 1, 'Male', 'Bangladesh', NULL, 'Mirpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8223486', '90.36542039999995', 'Parent', 'Muslim', NULL, 'Fair', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 2 Inch', '64 KG', 'Female', '162_pp_2021_01_07_094549_75843462.jpg', NULL, NULL, 'online', '1989-07-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'Y7sP9GVaM58NTcWEKIEfJyVWhf5DW4tzpzacqPhJirVsFk6dG3Vx2gjcukDV', '2019-12-26 21:51:48', '2021-01-07 03:45:50', NULL, NULL),
(163, 'Md Assaduzzaman', '01879886979', '163', 'assad.powerbd@gmail.com', '$2y$10$oz0WlmHjPDm96w8HJboEdeMMLaArCHFBINuHNECA38QVopZFNf9ia', '267823', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Brown', 'Master of Accountancy', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '72 KG', 'Female', '163_pp_2021_01_07_094608_50131513.jpeg', NULL, NULL, 'online', '1989-06-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'GytBubhXxJAeCAS5N4OjtCuVmcWBP0N3oYXK6TC7UAHsGCooszR2oNPQbjbD', '2019-12-27 00:03:34', '2021-01-07 03:46:09', NULL, NULL),
(164, 'do kyungsoo', '+8281212121212', '164', 'dohkyungsoo@gmail.com', '$2y$10$fMOIrcJoBQq1n70VzKuG2eW9EAmFatI8mWReuXDv1q0ARbzYzYa3C', '399994', 1, 1, 'Male', 'Korea, Republic of', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Friend', 'Christian', NULL, 'Fair', 'Master of Music', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 8 Inch', '65 KG', 'Female', '164_pp_2021_01_07_094710_71653363.jpg', NULL, NULL, 'online', '1993-01-12', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'WuLEqbD2eCBqbUMnGvosOzr5yCsyrq1iK2eg9P2MxHHiAARFRZJHYRROjF1h', '2019-12-27 19:54:03', '2021-01-07 03:47:14', NULL, NULL),
(165, 'Adnan Mahadi', '01303282627', '165', 'adnanmahadi43@gmail.com', '$2y$10$2C6Fl6ACNTJ.X8y/n6JxmOhcnCb/riqyEOtsVXuRIpsuykS/LeAGm', '633808', 1, 1, 'Male', 'Bangladesh', NULL, 'Rangpur, Bangladesh', NULL, NULL, NULL, '25.7438916', '89.27522699999997', 'Brother', 'Muslim', NULL, 'Brown', 'M.Sc Department of Software Engineering', NULL, 'Engineer', NULL, 'Divorced', '5 Feet 9 Inch', '75 KG', 'Female', '165_pp_2021_01_07_094735_41757746.jpg', NULL, NULL, 'online', '1987-08-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-04 19:49:53', '2021-01-07 03:47:36', NULL, NULL),
(166, 'Tazu', '01713729651', '166', 'smmarizu@gmail.com', '$2y$10$gARzpEqsZ7WnRNa53luMtOIupvY9kZHyyTZqXaPBQpWaakrACunfG', '836439', 1, 1, 'Male', 'China', NULL, 'Zhenjiang, Jiangsu, China', NULL, NULL, NULL, '32.187849', '119.425836', 'Brother', 'Muslim', NULL, 'Drak', 'Department of Nutrition and Food Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 8 Inch', '90 KG', 'Female', '166_pp_2021_01_07_094847_92676331.jpeg', NULL, NULL, 'online', '1986-03-28', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'ji6PL9phhOs523JRq95WFviWCCRarPyetm9RNE706QVj54if0gxZy8JTmaUA', '2020-01-06 21:54:51', '2021-01-07 03:48:50', NULL, NULL),
(167, 'Kibria', '01732873594', '167', 'kibria@gmail.com', '$2y$10$In78EzFpaZfN0PDmXG/zBuNbQJWcb8P8ltM.Vt9BGz8Ao7PxCZWky', '589472', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.41251809999994', 'Self', 'Muslim', NULL, 'Fair', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 2 Inch', '55 KG', 'Female', '167_pp_2021_01_07_094926_97382728.png', NULL, NULL, 'online', '1992-06-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-08 07:36:03', '2021-01-07 03:49:27', NULL, NULL),
(168, 'Mahadi', '01715158415', '168', 'mhmahadi1110217@gmail.com', '$2y$10$4Sm017n/Kf3ymb6WFsdlPeZn8fPCsLF3mmKlcIAQd5EPjPIeyjP32', '773730', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Brown', 'Department of Finance', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '62 KG', 'Female', '168_pp_2021_01_07_094954_95981982.jpg', NULL, NULL, 'online', '1992-10-22', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-10 11:50:07', '2021-01-07 03:49:57', NULL, NULL),
(169, 'momin miah', '01726360646', '169', 'miah25977@gmail.com', '$2y$10$C.1h0Oj1eVwlVLkN/oTWiO5eugLIH1iTPNVp0yD5qP1QViITLe/Ze', '914078', 1, 1, 'Female', 'Bangladesh', NULL, 'Tangail, Bangladesh', NULL, NULL, NULL, '24.2513451', '89.9167104', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 11 Inch', '79 KG', 'Male', '169_pp_2021_01_07_095029_90768597.png', NULL, NULL, 'online', '1988-01-08', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-10 18:16:18', '2021-01-07 03:50:30', NULL, NULL);
INSERT INTO `users` (`id`, `name`, `mobile`, `username`, `email`, `password`, `password_temp`, `active`, `profile`, `gender`, `country`, `country_other`, `location`, `state`, `city`, `post_code`, `lat`, `lng`, `profile_created_by`, `religion`, `social_order`, `skin_color`, `education_level`, `education_level_other`, `profession`, `profession_other`, `marital_status`, `height`, `weight`, `looking_for`, `img_name`, `file_name`, `file_ext`, `user_type`, `dob`, `check_count`, `edit_count`, `mobile_verified_at`, `email_verified_at`, `addedby_id`, `editedby_id`, `package`, `expired_at`, `remember_token`, `created_at`, `updated_at`, `loggedin_at`, `deleted_at`) VALUES
(170, 'Rahim Ahmed', '+14077108748???', '170', 'nithrowaway1@gmail.com', '$2y$10$UTaBDLQpHVgy6/Tg0LppHupK2ugeOWL6f3.T2xyaFxgH0gfNBGtbG', '428028', 1, 1, 'Male', 'United States', NULL, 'New York, NY, USA', NULL, NULL, NULL, '40.7127753', '-74.0059728', 'Self', 'Muslim', NULL, 'Fair', 'Electrical and Electronic Engineering', NULL, 'Professor', NULL, 'Never Married', '5 Feet 11 Inch', '75 KG', 'Female', '170_pp_2021_01_07_095046_86359266.jpg', NULL, NULL, 'online', '1990-05-05', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-11 07:37:42', '2021-01-07 03:50:47', NULL, NULL),
(171, 'N.I Shahin', '01714410723', '171', 'nishahin88@gmail.com', '$2y$10$ht0CRaPz5i8cIpLyxv.LROuqI/hFw2p4nXUQnEnzCLsXARx2do31C', '163302', 1, 1, 'Male', 'Bangladesh', NULL, 'Merul Badda, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7723767', '90.42253360000001', 'Self', 'Muslim', NULL, 'Brown', 'Department of History of Art', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 9 Inch', '70 KG', 'Female', '171_pp_2021_01_07_095139_27781237.jpg', NULL, NULL, 'online', '1988-01-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-16 22:40:11', '2021-01-07 03:51:40', NULL, NULL),
(172, 'Mohammad Farhan', '01910-177210', '172', 'tasnimtabassum90@gmail.com', '$2y$10$xIFQ36Le3POIv15gUrWMH.cKRR9XSKpehKZe4Dv9Qqw213cIi8UPS', '671461', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Department of Mechanical Engineering (ME)', NULL, 'Bangladesh Army', NULL, 'Never Married', '5 Feet 11 Inch', '65 KG', 'Female', '172_pp_2021_01_07_095200_46309695.jpg', NULL, NULL, 'online', '1994-12-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'E3uFlO9ixQzQ3snX8sbPgSzeN1KNnxxEhYUtKF7wv5w2jLekfeeCiq9BZZAe', '2020-01-17 18:21:23', '2021-01-07 03:52:01', NULL, NULL),
(173, 'Liton', '01791556035', '173', 'litonnet8@gmail.com', '$2y$10$Dk.PVSgs02FtqPcvrgsc4./vwxqzAw/OTHM3W47TKs3jWG646wwd6', '758922', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Department of Political Science', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '60 KG', 'Female', '173_pp_2021_01_07_095218_94356185.jpg', NULL, NULL, 'online', '1992-12-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-17 23:15:54', '2021-01-07 03:52:20', NULL, NULL),
(174, 'Md arif', '01870764478', '174', 'adhinikmarrige19@gmail.com', '$2y$10$Xa1uSNlohkjtM3NUrtFFgOWLxcS2CSrDqmDylMPEOLOeP3wQw/rDi', '228165', 1, 1, 'Male', 'Afghanistan', NULL, '?????????????????? ???, ???????????? 1212, ????????????????????????', NULL, NULL, NULL, '23.7820624', '90.4160527', 'Self', 'Muslim', NULL, 'Fair', 'Department of Finance', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '4 Feet 6 Inch', '70 KG', 'Female', '174_pp_2021_01_07_095230_65506585.jpg', NULL, NULL, 'online', '1987-02-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-26 04:55:23', '2021-01-07 03:52:31', NULL, NULL),
(175, 'Sammi Akhter', '01834537670', '175', 'jenny.sammi1@gmail.com', '$2y$10$AhR/jApDc7o2nEJPjegfZOHRw7jcgzXo3KCLN8S3g.e4fKPwyobsO', '270919', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Guardian', 'Muslim', NULL, 'Bright', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 3 Inch', '62 KG', 'Male', '175_pp_2021_01_07_095245_13177897.jpg', NULL, NULL, 'online', '1987-12-31', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-26 21:45:24', '2021-01-07 03:52:45', NULL, NULL),
(176, 'Sadia Hossain', '01987859785', '176', 'sadiapiya752@gmail.com', '$2y$10$4brJJ5fl2eA8UhIqFGVW2Og.lsTqgwhoYPLiRJ0ck1vBeEz01icm2', '752540', 1, 1, 'Female', 'Bangladesh', NULL, 'S Paikpara - Pirerbag Amtola Rd, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7847583', '90.3648675', 'Parent', 'Muslim', NULL, 'Bright', 'BBA Professional', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '55 KG', 'Male', '176_pp_2021_01_07_095305_12043151.jpg', NULL, NULL, 'online', '1997-02-18', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-26 22:06:42', '2021-01-07 03:53:08', NULL, NULL),
(177, 'Habiba jarin sinthia', '01676664406', '177', 'sinthiahabiba771@gmail.com', '$2y$10$rFXGk2Y24W.9Tp6VfcZSsOClvlMLqnCRSZatorMk1ODrnIMci5VaS', '278121', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhanmondi, Dhaka 1205, Bangladesh', NULL, NULL, NULL, '23.7461495', '90.3742307', 'Self', 'Muslim', NULL, 'Fair', 'Department of Marketing', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 6 Inch', '79 KG', 'Male', '177_pp_2021_01_07_095401_25662374.jpg', NULL, NULL, 'online', '1995-11-17', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-28 06:10:05', '2021-01-07 03:54:02', NULL, NULL),
(178, 'M. Amir  Ali Khan', '01403358062', '178', 'adid.amir324@gmail.com', '$2y$10$bV1xo72E3.kRT6Y56UDMhuW3nkPrqn9mSVl/EYUbiULPrab4WsS3O', '172776', 1, 1, 'Male', 'Bangladesh', NULL, 'Moulvibazar, Bangladesh', NULL, NULL, NULL, '24.4842661', '91.76848700000001', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'BCS (Audit & Accounts): Assistant Accountant General', NULL, 'Divorced', '5 Feet 6 Inch', '50 KG', 'Female', '178_pp_2021_01_07_095417_16797904.jpg', NULL, NULL, 'online', '1971-03-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-28 17:31:46', '2021-01-07 03:54:18', NULL, NULL),
(179, 'M. Amir  Ali Khan', '01775107140', '179', 'saka.isa1971@gmail.com', '$2y$10$Imx6rPBjqZwaOUcxc7XjZ.ShwUE9rb0a7GhEEojyKclf.nVgg.P5K', '810586', 1, 1, 'Male', 'Bangladesh', NULL, 'Moulvibazar, Bangladesh', NULL, NULL, NULL, '24.4842661', '91.76848700000001', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'BCS (Audit & Accounts): Assistant Accountant General', NULL, 'Divorced', '5 Feet 6 Inch', '50 KG', 'Female', '179_pp_2021_01_07_095432_54529153.jpg', NULL, NULL, 'online', '1971-03-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-01-28 17:41:17', '2021-01-07 03:54:33', NULL, NULL),
(180, 'MD.FORHAD HOSSAIN', '+8801873839870', '180', 'forhadhossain111994@gmail.com', '$2y$10$v8IKDE6hYhxaBOvC/tLbBut329YjzjlZl7WDCUJLFLHkIcQRshgwm', '543724', 1, 1, 'Male', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.3795438', 'Self', 'Muslim', NULL, 'Brown', 'Higher Secondary Certificate', NULL, 'Industrialists', NULL, 'Divorced', '5 Feet 8 Inch', '60 KG', 'Female', '180_pp_2021_01_07_095449_72866188.jpg', NULL, NULL, 'online', '1994-12-11', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'lskvlw9qJmthPwhJFtSXRSPPg1Bdu6O3NgDj0njEhHdCnYhGu6xLeLDC86rK', '2020-02-01 02:45:15', '2021-01-07 03:54:50', NULL, NULL),
(181, 'Mahmudul Islam', '01721027565', '181', 'mahmudulislam774@gmail.com', '$2y$10$uieO70aOJ.34ikeaLRSm5uRrDJCGJ6wKEqEfRyCUuPumN38H.ENgm', '147376', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Department of Management Information Systems', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 8 Inch', '71 KG', 'Female', '181_pp_2021_01_07_095603_86811350.jpg', NULL, NULL, 'online', '1992-06-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-01 07:32:09', '2021-01-07 03:56:07', NULL, NULL),
(182, 'Sajia Siraj', '01980848545', '182', 'rumiseraj81@gmail.com', '$2y$10$26v3zll0X9DkFln9FWRSf.cqY3Hamn8MT8ZatD98nFfaUchltn2MG', '707239', 1, 1, 'Female', 'Bangladesh', NULL, 'Hussaini Dalan Rd, Dhaka, Bangladesh', NULL, NULL, NULL, '23.72247239999999', '90.3981716', 'Self', 'Muslim', NULL, 'Brown', 'High School Pass', NULL, 'Running Student', NULL, 'Divorced', '4 Feet', '60 KG', 'Male', '182_pp_2021_01_07_095630_44391356.png', NULL, NULL, 'online', '1987-06-13', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-02 02:06:12', '2021-01-07 03:56:31', NULL, NULL),
(183, 'Rahat abrar', '01908316404', '183', 'rahatk626@gmail.com', '$2y$10$CnhXzkqaFatXlPGNaROOYuhWLolK1ShEvxj812tEJWtfDJN8iCm.m', '339085', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 9 Inch', '65 KG', 'Female', '183_pp_2021_01_07_095712_80787267.jpeg', NULL, NULL, 'online', '1998-01-14', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-02 14:05:28', '2021-01-07 03:57:14', NULL, NULL),
(184, 'Islam', '01730012585', '184', 'azad2004.dka@gmail.com', '$2y$10$W1IINLJVc2i4.ngRB0CDvOLouKp3OMr3zrvpSJX1UxXlpFsXxEZQ2', '492289', 1, 1, 'Female', 'Bangladesh', NULL, 'Baridhara, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7998984', '90.420766', 'Parent', 'Muslim', NULL, 'Brown', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 3 Inch', '59 KG', 'Male', '184_pp_2021_01_07_095732_36900198.jpg', NULL, NULL, 'online', '1991-12-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-05 05:18:33', '2021-01-07 03:57:33', NULL, NULL),
(185, 'M R Chowdhury', '+8801681133390', '185', 'matrmrc@gmail.com', '$2y$10$n3OZ/oTRjmbfEM9bJn1X6OLpceud0eoH/GxF8lG9hi8koAo6PDSQO', '547887', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', 'Dhaka', 'Dhaka', '1000', '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Department of Soil, Water and Environment', NULL, 'Citizen', NULL, 'Divorced', '5 Feet 6 Inch', '70 KG', 'Female', '185_pp_2021_01_07_095805_42403073.jpg', NULL, NULL, 'online', '1970-02-01', 0, 2, NULL, NULL, 1, 185, 0, NULL, '1MrL1FVk8eKJPeJHsFCRPAXhiKQYMagHnjzu3eDNvpPj6kfACcznpkQY6C1d', '2020-02-10 07:27:14', '2021-01-07 03:58:05', NULL, NULL),
(186, 'Skrobiul', '01677966084', '186', 'imalltimeactive@gmail.com', '$2y$10$3lzEXnRrsBhi98IPaZh4muMKagSy4Rgn/a1TiXsR00qKMuOanA.F2', '612444', 1, 1, 'Male', 'Bangladesh', NULL, 'Natore, Bangladesh', NULL, NULL, NULL, '24.4079394', '88.9748932', 'Self', 'Muslim', NULL, 'Bright', 'High School Pass', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '5 Feet 4 Inch', '50 KG', 'Female', '186_pp_2021_01_07_095840_50688909.jpg', NULL, NULL, 'online', '1996-09-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-10 15:16:34', '2021-01-07 03:58:40', NULL, NULL),
(187, 'Shahriar Ashraf', '01316566371', '187', 'shahriar86.aiub@gmail.com', '$2y$10$/CDPvS/VV5Ad2.vAf8e7meMuYi37bzLGeGN8yljxPj29MQfZ4gWea', '229403', 1, 1, 'Male', 'Bangladesh', NULL, 'Mirpur-1, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7956037', '90.3536548', 'Parent', 'Muslim', NULL, 'Bright', 'Master of Business Administration', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 6 Inch', '63 KG', 'Female', '187_pp_2021_01_07_095901_55612614.jpeg', NULL, NULL, 'online', '1988-05-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-15 09:44:08', '2021-01-07 03:59:05', NULL, NULL),
(188, 'Rifat al habib', '01675400744', '188', 'rifatuiu093@gmail.com', '$2y$10$vhhpR.0HdtVFnlxfEU94uecFqHi72VA1bEIMhlAshzvnH9TTK9jLi', '514307', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 2 Inch', '52 KG', 'Female', '188_pp_2021_01_07_095922_43038782.png', NULL, NULL, 'online', '1991-02-06', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-17 06:17:48', '2021-01-07 03:59:22', NULL, NULL),
(189, 'Morjina begum', '01874843481', '189', 'munrinveemun@gmail.com', '$2y$10$OfIB2IPXohHvZWF/RKnrr.y3C9N7RaUzRRMYIqkCUcSLvK2U3XYmm', '275784', 1, 1, 'Female', 'Bangladesh', NULL, 'Magura - Mohammadpur Rd, Parnanduali, Bangladesh', NULL, NULL, NULL, '23.4903267', '89.4354559', 'Brother', 'Muslim', NULL, 'Brown', 'Department of Biochemistry and Molecular Biology', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 2 Inch', '55 KG', 'Male', '189_pp_2021_01_07_095943_38827258.jpg', NULL, NULL, 'online', '2001-01-08', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'oZwMjwt9LLVpwL4pVKGCiBAIcraghcoLOm25yw2JLvXPtOeCG80r3uS8QfJ8', '2020-02-17 18:21:38', '2021-01-07 03:59:47', NULL, NULL),
(190, 'Nayeem', '01781477221', '190', 'aliakbor48632@gmail.com', '$2y$10$AuCLbGcM89P/eRDJdSgSXerTPc4iVChlMAdFClV5CVyAjxFHAagUm', '416689', 1, 1, 'Male', 'Bangladesh', NULL, 'Kishoreganj, Bangladesh', NULL, NULL, NULL, '24.4331227', '90.7865655', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 7 Inch', '64 KG', 'Female', '190_pp_2021_01_07_100026_84293745.png', NULL, NULL, 'online', '1999-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-17 19:38:03', '2021-01-07 04:00:29', NULL, NULL),
(191, 'Abdul Aziz', '01777888391', '191', 'asifchy400@gmail.com', '$2y$10$mcVXrHcHNJ6c9JWxYFh1MeglIvY/s8LncuKTLjlFfYiTQmbaq6MQ.', '306735', 1, 1, 'Male', 'Bangladesh', NULL, 'Chittagong, Bangladesh', NULL, NULL, NULL, '22.356851', '91.7831819', 'Brother', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Industrialists', NULL, 'Never Married', '5 Feet 7 Inch', '65 KG', 'Female', '191_pp_2021_01_07_100141_46228726.jpeg', NULL, NULL, 'online', '1987-02-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-18 22:33:36', '2021-01-07 04:01:42', NULL, NULL),
(192, 'Yemen Hasan', '01611128120', '192', 'yemen9016@gmail.com', '$2y$10$62.2wh6blrIiEcyfYkWpf.PaJ6Kn7Ss0rlKJBobl0F.u24PGgCiXi', '335017', 1, 1, 'Male', 'Bangladesh', NULL, 'Mirpur 10 Roundabout, Dhaka 1216, Bangladesh', NULL, NULL, NULL, '23.8069245', '90.36869779999999', 'Brother', 'Other', NULL, 'Fair', 'Master of Design', NULL, 'Running Student', NULL, 'Anulled', '5 Feet 3 Inch', '56 KG', 'Female', '192_pp_2021_01_07_100155_51097856.jpg', NULL, NULL, 'online', '1993-12-28', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-18 22:46:58', '2021-01-07 04:01:57', NULL, NULL),
(193, 'MD.TORIQUL', 'ISLAM', '193', 'mdtoriqulislam76@gmail.com', '$2y$10$TS2zEdgchIaG3X2pcNqrCe/oYqSsxxFtUrLJ.HMkIE9R8j8Xq3o0y', '360769', 1, 1, 'Male', 'Bangladesh', NULL, 'Motora Bazar Rd, Bangladesh', NULL, NULL, NULL, '24.1922588', '89.9805207', 'Self', 'Muslim', NULL, 'Drak', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '52 KG', 'Female', '193_pp_2021_01_07_100215_77990413.jpg', NULL, NULL, 'online', '1993-07-19', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-19 05:06:45', '2021-01-07 04:02:16', NULL, NULL),
(194, 'Naimur Rahman Tamal', '01953225775', '194', 'naimurtamal96@gmail.com', '$2y$10$WtiFTPYTy6s8z/W4m25E7uOhaMZx/9MP1XF8e5fQCTf/Mm1AkNcE6', '564370', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Department of Mechanical Engineering (ME)', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '60 KG', 'Female', '194_pp_2021_01_07_100253_76275797.jpeg', NULL, NULL, 'online', '1998-04-26', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-20 11:45:39', '2021-01-07 04:02:54', NULL, NULL),
(195, 'Ariful islam juwel', '01675389779', '195', 'arifaub86@gmail.com', '$2y$10$l9jf38uQZjnG0utnSPz2JuZD698/ROjfoh5REPkVIJlQZrRBxft72', '502982', 1, 1, 'Male', 'Bangladesh', NULL, 'Motijheel, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7329724', '90.417231', 'Self', 'Muslim', NULL, 'Fair', 'Department of Management Studies', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '70 KG', 'Female', '195_pp_2021_01_07_100311_90535086.jpg', NULL, NULL, 'online', '1987-11-09', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-25 02:42:21', '2021-01-07 04:03:12', NULL, NULL),
(196, 'Tanzila Sultana', '01915036603', '196', 'pamel.nml@gmail.com', '$2y$10$k3zLM.oqSM3YjwPXjky9custTDdbuzeoQOjtawiZETZMaNW/34JBy', '734217', 1, 1, 'Female', 'Bangladesh', NULL, 'Dinajpur, Bangladesh', NULL, NULL, NULL, '25.6221009', '88.6437649', 'Guardian', 'Muslim', NULL, 'Bright', 'Master of Medical Science', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 4 Inch', '68 KG', 'Male', '196_pp_2021_01_07_100338_78110804.jpg', NULL, NULL, 'online', '1994-01-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'vyuVjr7slVz1wfy2yrzFxGyQxNz9Lydbx34QezabGyhJ25ouKqxe7RT4pRtH', '2020-02-25 05:17:34', '2021-01-07 04:03:39', NULL, NULL),
(197, 'Sanjida jahan', '01685026271', '197', 'sanjidamit95@gmail.com', '$2y$10$kougUcuzMImvh4l5C/QF4e0BMw5V5tUPpptb04c7paUg75nlOADSG', '713367', 1, 1, 'Female', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.3795438', 'Self', 'Muslim', NULL, 'Brown', 'Department Of English', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 2 Inch', '75 KG', 'Male', '197_pp_2021_01_07_100401_70164893.jpg', NULL, NULL, 'online', '1995-01-26', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-27 05:44:58', '2021-01-07 04:04:01', NULL, NULL),
(198, '???????????????????????????????????????', '???????????????????????????????????????', '198', 'aaa@ddddd.com', '$2y$10$gyc8tWUC2GaFqA6A6mF/xODAZ/dC8PjtmVBA8bTd1c.A4CM53iqTq', '693759', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Guardian', 'Hindu', NULL, 'Bright', 'Department of Law', NULL, 'BCS (Audit & Accounts): Assistant Accountant General', NULL, 'Widowed', '5 Feet 3 Inch', '26 KG', 'Male', '198_pp_2021_01_07_100414_86277270.jpg', NULL, NULL, 'online', '2001-04-06', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-02-28 08:12:00', '2021-01-07 04:04:15', NULL, NULL),
(199, 'Rownuk jahan rima', '01748580840', '199', 'rima840@gmail.com', '$2y$10$jyzeVyNhH1HTNcxi2CyDMOKzO4VZPboUtR/fj0jY9VBjgN.iMcV1y', '233163', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Master of Accountancy', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 2 Inch', '50 KG', 'Male', '199_pp_2021_01_07_100423_53682296.jpg', NULL, NULL, 'online', '1996-09-02', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-01 06:07:39', '2021-01-07 04:04:24', NULL, NULL),
(200, 'Abir Chowdhury', '01401921173', '200', 'jchowdhury@gmail.com', '$2y$10$SqQ.ru1g0Uqy1N1S2waDT.4nwoU1/73AJIfRYJekSdfA7Gs.75iq6', '318054', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 10 Inch', '77 KG', 'Female', '200_pp_2021_01_07_100443_14054389.jpg', NULL, NULL, 'online', '1995-03-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-03 18:42:33', '2021-01-07 04:04:43', NULL, NULL),
(201, 'Shahadat Roni', '01917330989', '201', 'shahadat.roni@gmail.com', '$2y$10$yKVBzSwTW/QKJsaslqeg3.y9S8QqzDqwNafuWKjJ2OW9htxq2jn4e', '242677', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Department of Accounting & Information Systems', NULL, 'Businessmen', NULL, 'Divorced', '6 Feet', '85 KG', 'Female', '201_pp_2021_01_07_100456_81448667.jpg', NULL, NULL, 'online', '1985-05-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-05 19:04:37', '2021-01-07 04:04:57', NULL, NULL),
(202, 'Toyaba Kabir', '01912193178', '202', 'souls.kabir@gmail.com', '$2y$10$r.zx2Pi0BNxr80DVKzK9ZOmgEFNQWVAn5DXkb9rnB/RDDKjJld42u', '773124', 1, 1, 'Female', 'Bangladesh', NULL, 'Mirpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8223486', '90.36542039999999', 'Friend', 'Muslim', NULL, 'Fair', 'Department Of English', NULL, 'Lecturer', NULL, 'Never Married', '5 Feet', '50 KG', 'Male', '202_pp_2021_01_07_100507_77208386.png', NULL, NULL, 'online', '1986-11-13', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-08 01:29:49', '2021-01-07 04:05:08', NULL, NULL),
(203, 'Atif Alif Rochy', '01795544405', '203', 'atifrochy@gmail.com', '$2y$10$JZEXWR2usIulAc0uJbTC7ekGh1oi43if0GeienwL5xut.xXomcixS', '970726', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Brown', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 9 Inch', '74 KG', 'Female', '203_pp_2021_01_07_100526_83930203.jpeg', NULL, NULL, 'online', '1993-06-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-08 02:30:10', '2021-01-07 04:05:27', NULL, NULL),
(204, 'Fazle Rabby', '01819006430', '204', 'fazlerabby012@gmail.com', '$2y$10$w5CAP9H6Uwm1tPZR5WQgMuDo1J/x8CDKzFROiXtZjjzoxVF3cLhjK', '858512', 1, 1, 'Male', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.3795438', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Industrialists', NULL, 'Legally Separated', '6 Feet 2 Inch', '85 KG', 'Female', '204_pp_2021_01_07_100545_97223538.jpg', NULL, NULL, 'online', '1988-06-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-08 06:35:24', '2021-01-07 04:05:46', NULL, NULL),
(205, 'Syed Nazmus Saqib', '01893800622', '205', 'snsaqib.aust@gmail.com', '$2y$10$G6thE.z2u4k8DW7BAT8lfekM00/ecIPI/8V9JwwBUiGYTEdxytSxC', '838408', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Bright', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 7 Inch', '79 KG', 'Female', '205_pp_2021_01_07_100556_60138213.jpg', NULL, NULL, 'online', '1990-10-28', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-11 05:42:27', '2021-01-07 04:05:58', NULL, NULL),
(206, 'Md.Abul Kalam Azad', '01552435135', '206', 'azadfda@yahoo.com', '$2y$10$iG7qfwDUtG3yT0qKDoiWle3.6OwWGtea6g99VrctwilOiynnlC1di', '577136', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Bright', 'Department of Economics', NULL, 'Citizen', NULL, 'Widowed', '5 Feet 7 Inch', '73 KG', 'Female', '206_pp_2021_01_07_100630_64167432.png', NULL, NULL, 'online', '1960-12-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'vl3tXs5IOQqEonks9gOYEv0hMHYyIHhsTXloAnyWBJ7Dz2IDyzte9sQIFZR1', '2020-03-12 22:11:25', '2021-01-07 04:06:33', NULL, NULL),
(207, 'Emran Haidar Niloy', '01832370503', '207', 'amran_uddin@ymail.com', '$2y$10$mTT5rPN4WRrnwVoWXWaRGe2sc5R72JvONfu9FB91AEFcSFoXVa4tq', '727742', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Industrialists', NULL, 'Never Married', '5 Feet 7 Inch', '52 KG', 'Female', '207_pp_2021_01_07_100654_74258370.jpeg', NULL, NULL, 'online', '1995-04-05', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'juJs6vBxSEK2jf7XGr12eXBhsn3ZWPQ2HoQthj0dvtnpoLZjFLR9xwRcJby3', '2020-03-14 19:18:15', '2021-01-07 04:06:54', NULL, NULL),
(208, 'Md. Tarajul Islam', '01629293759', '208', 'tarajul95@gmail.com', '$2y$10$4HiaAWs8sk3pw4XRAZcwnuauHdl8xX1LzD1jbej0PUixJUDij2qQO', '907451', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Bright', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '208_pp_2021_01_07_100708_34366063.jpg', NULL, NULL, 'online', '1991-03-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-15 17:45:17', '2021-01-07 04:07:09', NULL, NULL),
(209, 'Tofael Ahmmed', '1517165726', '209', 'tofaelahmmedsrabon@gmail.com', '$2y$10$NA8Lrb2HtnLgw3v2VjCh0ePziHKuKRMPCqKDC1mSPVKjhM2qFolTa', '623598', 1, 1, 'Male', 'Bangladesh', NULL, 'Barisal Medical College Hospital, Barisal, Bangladesh', NULL, NULL, NULL, '22.6864552', '90.3612653', 'Self', 'Muslim', NULL, 'Drak', 'Master of Medical Science', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 8 Inch', '72 KG', 'Female', '209_pp_2021_01_07_100720_48777592.jpeg', NULL, NULL, 'online', '1993-01-14', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-15 19:37:56', '2021-01-07 04:07:20', NULL, NULL),
(210, 'M RezauL Karim', '+8801303894190', '210', 'mrezaulahmed@gmail.com', '$2y$10$pOig.GRsCZ/vPDTpjwt0/uhJM2v3.CcKDUMHOFhx1yjxSI86Z6VpG', '480503', 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan 2, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7947536', '90.41430849999999', 'Self', 'Muslim', NULL, 'Brown', 'Master of Social Science', NULL, 'Industrialists', NULL, 'Never Married', '5 Feet 10 Inch', '72 KG', 'Female', '210_pp_2021_01_07_100737_28500642.jpeg', NULL, NULL, 'online', '1993-12-31', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-15 20:47:42', '2021-01-07 04:07:38', NULL, NULL),
(211, 'Shahriar Hasan Khan', '+880 1673112207', '211', 'hkhantex@gmail.com', '$2y$10$hEoogGDQLPTrTJHbrWoH0.JfEwdyXzFVKThpAB9RR0LdrrRv5qiu.', '584741', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '67 KG', 'Female', '211_pp_2021_01_07_100814_40900355.jpeg', NULL, NULL, 'online', '1989-10-13', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-17 08:36:47', '2021-01-07 04:08:14', NULL, NULL),
(212, 'Abu Talha', '01685246728', '212', 'Talhaabu53@gmail.com', '$2y$10$.mtb8XaL.LBiwk/R8PMzV.a/LX3uJxsT35Wywov0vCjNkeNuYrad.', '754974', 1, 1, 'Male', 'Bangladesh', NULL, 'Lalbagh, Dhaka, Bangladesh', NULL, NULL, NULL, '23.7181758', '90.3866074', 'Parent', 'Muslim', NULL, 'Fair', 'Department of Marketing', NULL, 'Running Student', NULL, 'Never Married', '6 Feet', '75 KG', 'Female', '212_pp_2021_01_07_100826_88659615.jpg', NULL, NULL, 'online', '1995-01-24', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-18 07:38:48', '2021-01-07 04:08:27', NULL, NULL),
(213, 'apaapa', '01977443322', '213', 'apa@gmail.com', '$2y$10$SLCUBurFNQ.CxcUnLJG7n.NOH8Jx1NZYWTHqIB5AJD011tw63YP/O', '614707', 1, 1, 'Female', 'Albania', NULL, 'Columbine Ave, London E6 5UA, UK', NULL, NULL, NULL, '51.517462', '0.04786460000000001', 'Friend', 'Hindu', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Male Police officer', NULL, 'Divorced', '4 Feet 5 Inch', '24 KG', 'Male', '213_pp_2021_01_07_100845_39139316.jpg', NULL, NULL, 'online', '1998-03-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-24 04:14:37', '2021-01-07 04:08:47', NULL, NULL),
(214, 'Sadiqur rahman', '01758262822', '214', 'rsadiqur380@gmail.com', '$2y$10$06UwaZ/.72yDE4XN4/5/b.PTMx1dsz9NmyQTRjuA/3bvIkUjayVKu', '669338', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Bright', 'Master of Medical Science', NULL, 'Doctor', NULL, 'Never Married', '5 Feet 6 Inch', '56 KG', 'Female', '214_pp_2021_01_07_100859_89288457.jpg', NULL, NULL, 'online', '1995-10-14', 0, 1, NULL, NULL, 1, NULL, 0, NULL, '7RLrtiIBIy82pc7ZOpQDF6j66pp9bENYeh70Gb4WEY3OWrBOfUPbkC5wH1X1', '2020-03-27 17:03:28', '2021-01-07 04:09:00', NULL, NULL),
(215, 'Nadira', '01715091966', '215', 'nazninmerina@gmail.com', '$2y$10$vYeUPJfnYdyZSx3vHy92UObTUvbP.WHLbB/.9Msa0FWnoD9YkQa8C', '287273', 1, 1, 'Female', 'India', NULL, 'Kolkata, West Bengal, India', NULL, NULL, NULL, '22.572646', '88.36389500000001', 'Self', 'Muslim', NULL, 'Bright', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 4 Inch', '55 KG', 'Male', '215_pp_2021_01_07_100915_98676183.jpg', NULL, NULL, 'online', '1991-04-06', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-03-30 01:44:38', '2021-01-07 04:09:16', NULL, NULL),
(216, 'MD.Modabbir Ahmed', '01712241113,01718012223', '216', 'modabbirahmedtahir@gmail.com', '$2y$10$aeoivt9WKDPlVN8w0YIhbuvR.m3nKbt/dkcXd3Xodq905xZO/p/Xa', '564285', 1, 1, 'Male', 'Bangladesh', NULL, 'Sylhet, Bangladesh', NULL, NULL, NULL, '24.8949294', '91.8687063', 'Self', 'Muslim', NULL, 'Bright', 'Department of Civil Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 10 Inch', '75 KG', 'Female', '216_pp_2021_01_07_100938_14600319.jpg', NULL, NULL, 'online', '1990-05-02', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'PnHUSbmLXfOKgwEEGMGxw8JXaVKgRbChRnr4iJ34HSazVoY0bxFyJNQdaA7P', '2020-04-04 05:39:32', '2021-01-07 04:09:39', NULL, NULL),
(217, 'Khadijatul Busra', '01716321337', '217', 'khadija.busra@gmail.com', '$2y$10$DCENH3gvaaDkspjk9km8D.SX5uIj8E09Y3LI6VQj/3qO1z9yDEkqm', '951652', 1, 1, 'Female', 'Bangladesh', NULL, 'Jashore, Bangladesh', NULL, NULL, NULL, '23.1777682', '89.1801225', 'Self', 'Muslim', NULL, 'Drak', 'Master of Philosophy', NULL, 'Doctor', NULL, 'Divorced', '5 Feet 6 Inch', '67 KG', 'Male', '217_pp_2021_01_07_100950_36518121.png', NULL, NULL, 'online', '1987-06-12', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'X9FQoVguiXlLZLMVcCzV2N7Bo5lvb5XvlVZBA527tcD8XeGU1niapHQjNJHM', '2020-04-05 21:47:31', '2021-01-07 04:09:53', NULL, NULL),
(218, 'Zubel Rahman', '01744403287', '218', 'zubelrahman777@gmail.com', '$2y$10$SsBjLvqd9bvLW2436ttHYeoEeTKqefhR7G6ixY15EDo7WacxiRHzC', '647397', 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan Badda Link Rd, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7807193', '90.4227939', 'Guardian', 'Muslim', NULL, 'Bright', 'Master of Social Science', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 9 Inch', '64 KG', 'Female', '218_pp_2021_01_07_101019_24236013.jpeg', NULL, NULL, 'online', '1995-09-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-04-06 05:39:11', '2021-01-07 04:10:20', NULL, NULL),
(219, 'Tanjinul Islam', '+8801813539323', '219', 'itanjinul23@gmail.com', '$2y$10$7nFKLzn76vbUKOfjK5PJgekcMybWB16oHDCpefjGmQ4AlmRpHhJAW', '791906', 1, 1, 'Male', 'Bangladesh', NULL, 'Chakaria, Bangladesh', NULL, NULL, NULL, '21.7619053', '92.0775512', 'Self', 'Muslim', NULL, 'Bright', 'Department of Economics', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 3 Inch', '55 KG', 'Female', '219_pp_2021_01_07_101034_98791922.png', NULL, NULL, 'online', '1990-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-04-06 06:36:38', '2021-01-07 04:10:35', NULL, NULL),
(220, 'Akash Rahman', '01911310402', '220', 'russell76bd@yahoo.com', '$2y$10$9BraxcNZ5SWpFDaCs.GWye.UlQ7C8rLe57fZoeIw8n8UnqGK4YigK', '670149', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Brother', 'Muslim', NULL, 'Brown', 'Master of Business Administration', NULL, 'Businessmen', NULL, 'Widowed', '5 Feet 8 Inch', '69 KG', 'Female', '220_pp_2021_01_07_101115_90422784.png', NULL, NULL, 'online', '1976-07-27', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-04-13 06:05:06', '2021-01-07 04:11:16', NULL, NULL),
(221, 'Umme Hani', '01533697972', '221', 'tapsaif@gmail.com', '$2y$10$4Pv/clrLWIgNwlWY1fgD/ueqLXccdLYSC8sPFaZoNyjNFTNzX83Ke', '636857', 1, 1, 'Female', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.3795438', 'Brother', 'Muslim', NULL, 'Fair', 'Department of Nutrition and Food Engineering', NULL, 'Running Student', NULL, 'Never Married', '5 Feet', '50 KG', 'Male', '221_pp_2021_01_07_101132_90159123.jpg', NULL, NULL, 'online', '1996-01-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'fFWY2LexbNF6jMp9QCddgDamq9UMSFtdcmu1SOZupsoEMaldRjA6RzVe1x1B', '2020-04-26 18:07:00', '2021-01-07 04:11:33', NULL, NULL),
(222, 'Nahian Iqbal Nuhash', '01319931353', '222', 'nahianiqbaln@gmail.com', '$2y$10$aXIt9JfdYWK2HzID3IlAs.ZjcAq5GMCdpFIZyjJK6JrU4s1cOdwjS', '491249', 1, 1, 'Male', 'Bangladesh', NULL, 'Sylhet, Bangladesh', NULL, NULL, NULL, '24.8949294', '91.8687063', 'Self', 'Muslim', NULL, 'Fair', 'Computer science Engineering', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '222_pp_2021_01_07_101210_57393981.jpg', NULL, NULL, 'online', '1997-11-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-05-07 11:39:50', '2021-01-07 04:12:11', NULL, NULL),
(223, 'Mehedi Hasan', '01674973726', '223', 'mehedihasanacca40@gmail.com', '$2y$10$bFqlEUaTFv5b9tW3JtNm3OXlzMKuNT8g1uhWhwkV/gcvdeeh6PhKC', '212588', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 8 Inch', '62 KG', 'Female', '223_pp_2021_01_07_101224_77888657.jpeg', NULL, NULL, 'online', '1990-10-06', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'YwvoO73v9cw62I71zkyq5s5rnPJ1pAgoMz4VmEUBeydF846LxuA2iMz6UOAl', '2020-05-29 02:09:48', '2021-01-07 04:12:25', NULL, NULL),
(224, 'Farhanur Saim', '01864645694', '224', 'ariyan.kona@gmail.com', '$2y$10$TVAC/aWqBPZToUVmP09IoevQg.JSbnLU8VP1KiDKSHepdgIp.e3DW', '441875', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Bangladesh Army', NULL, 'Never Married', '5 Feet 8 Inch', '55 KG', 'Female', '224_pp_2021_01_07_101241_45283621.jpg', NULL, NULL, 'online', '1999-09-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-05-29 21:52:28', '2021-01-07 04:12:42', NULL, NULL),
(225, 'REFAT ISLAM', '01819316808', '225', 'rifatmq97@gmail.com', '$2y$10$fh1mpLrBhgytLFYOIhcd3eHvx3fHHaClSM61jySljMfE5BwDQJInS', '635257', 1, 1, 'Male', 'Bangladesh', NULL, 'Narayanganj, Bangladesh', NULL, NULL, NULL, '23.6237764', '90.50004039999999', 'Self', 'Muslim', NULL, 'Brown', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 4 Inch', '63 KG', 'Female', '225_pp_2021_01_07_101314_76257640.png', NULL, NULL, 'online', '1995-09-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-06-05 14:28:29', '2021-01-07 04:13:14', NULL, NULL),
(226, 'bijoyborkotullah', '01706031737', '226', 'iambijoyr@gmail.com', '$2y$10$rDjnv6lupV6hInxaRMp/TO5EL7ryBlN8z2RA67CFljzPpDh0fbBqy', '619652', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Drak', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 3 Inch', '64 KG', 'Female', '226_pp_2021_01_07_101340_13488729.jpg', NULL, NULL, 'online', '1991-12-16', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-06-09 01:34:17', '2021-01-07 04:13:41', NULL, NULL),
(227, 'Mallik Samir Tawfik', '01717062011', '227', 'starpointbd@gmail.com', '$2y$10$K.zJ0qyCYrQ7yIKksf397uHWdUfKYoy5IPHyG/Fs1B7hWua4KVPNq', '166815', 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan 1, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7820624', '90.4160527', 'Self', 'Muslim', NULL, 'Brown', 'Electrical and Electronic Engineering', NULL, 'Citizen', NULL, 'Divorced', '5 Feet 8 Inch', '85 KG', 'Female', '227_pp_2021_01_07_101353_14982472.jpeg', NULL, NULL, 'online', '1986-12-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-06-10 06:37:07', '2021-01-07 04:13:54', NULL, NULL),
(228, 'Rinah Burris', '01544363466', '228', 'zpranav.badgujarw@aremop.cf', '$2y$10$TPBx.4H/T39kFPHSEorXCue/KSdvfNrRE.HpTMhLpjQRODdqfypm.', '344647', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Bright', 'Master in Creative Technologies', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet', '50 KG', 'Female', '228_pp_2021_01_07_101416_33211063.jpeg', NULL, NULL, 'online', '1986-12-12', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-06-15 19:51:07', '2021-01-07 04:14:16', NULL, NULL),
(229, 'Md Sohel', '01754623464', '229', 'mdsohel551120@gmail.com', '$2y$10$xe0ZTDG6ttGe95vZFM8GKuyzBLBdAQ8kZXExqedpwxFTBhFP3O09S', '730490', 1, 1, 'Male', 'Bangladesh', NULL, 'Gosairhat Upazila, Bangladesh', NULL, NULL, NULL, '23.0720952', '90.4313729', 'Self', 'Muslim', 'Sunni', 'Drak', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '54 KG', 'Female', '229_pp_2021_01_07_101434_23123929.jpg', NULL, NULL, 'online', '1992-01-01', 0, 2, NULL, NULL, 1, 229, 0, NULL, 'q14udAdaihlljKjlLeBk3n3hhs2JqkoOdovL6jsZIHTmAFuldHolI60AGvT2', '2020-06-17 15:17:15', '2021-01-07 04:14:36', NULL, NULL),
(230, 'Sarah Kuddus', '01868693952', '230', 'sarah.chow@aol.com', '$2y$10$48uaxGgpmcbJCUkrKCD4s.JChHDc9JS54f78TgK83CRVsNW/mzYFy', '334967', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Drak', 'Master of Arts in Special Education', NULL, 'Ministry of Education (Bangladesh)', NULL, 'Never Married', '5 Feet 2 Inch', '60 KG', 'Male', '230_pp_2021_01_07_101450_58078703.jpg', NULL, NULL, 'online', '1989-09-09', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'DpaEIbkBUxEJ7zr6NgDDqh8DdN9KVq3X9JxIBO1VixZrG1LpvnOCE8JnZn66', '2020-06-23 21:33:43', '2021-01-07 04:14:51', NULL, NULL),
(231, 'Suchona khanom', '01641190156', '231', 'suchona6564@gmail.com', '$2y$10$.w42tguAyT50ioSPxuPd4u2/gtmn1Cvsq5zl6Lp5H054WP3/rztde', '995248', 1, 1, 'Female', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.87585469999999', '90.3795438', 'Parent', 'Muslim', NULL, 'Ten', 'Department of Botany', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '5 Feet 3 Inch', '58 KG', 'Male', '231_pp_2021_01_07_101512_72380863.jpg', NULL, NULL, 'online', '1999-08-17', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-06-25 17:11:08', '2021-01-07 04:15:14', NULL, NULL),
(232, 'Rian Hasan', '01772410290', '232', 'rahatshahriar5@gmail.com', '$2y$10$L8keHRGkdJv4M1Ootu7stOQEHEQWurGhFYnYKBpuaGj0eQKBBl4C2', '391048', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Department of Civil Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 11 Inch', '75 KG', 'Female', '232_pp_2021_01_07_101533_50322987.jpg', NULL, NULL, 'online', '1995-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-06-29 06:58:57', '2021-01-07 04:15:35', NULL, NULL),
(233, 'Wasifa Tahsin', '01777309347', '233', 'wasifa.arani@gmail.com', '$2y$10$xSmVDEyMKT0WTIeL1X1er.ld4ekgqRhII8adbphMg3MaBowEirwgS', '672405', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Bright', 'Higher Secondary Certificate', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 1 Inch', '58 KG', 'Male', '233_pp_2021_01_07_101607_62928587.jpg', NULL, NULL, 'online', '1995-06-17', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-06-29 20:38:46', '2021-01-07 04:16:09', NULL, NULL),
(234, 'Md. Rakib Hasan', '01672289449', '234', 'rakibhsn@hotmail.com', '$2y$10$z1uSa5TE6P7Rxkup5N9zAexCdIzJI4fDjfpN4A3pEHdL.aRDN638G', '703380', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Brown', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 7 Inch', '70 KG', 'Female', '234_pp_2021_01_07_101627_26376533.png', NULL, NULL, 'online', '1991-10-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-07-01 03:23:18', '2021-01-07 04:16:28', NULL, NULL),
(235, 'shahriour', '01713779121', '235', 'hasibaust01@gmail.com', '$2y$10$eNAoLOcWN/SaqK7HfFvO3.2tjfggfHN88MGyYqUM2gfOyqb6V6Uxy', '850141', 1, 1, 'Male', 'Bangladesh', NULL, 'Rajshahi, Bangladesh', NULL, NULL, NULL, '24.3745146', '88.60416599999999', 'Self', 'Muslim', NULL, 'Fair', 'Department of Civil Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 11 Inch', '80 KG', 'Female', '235_pp_2021_01_07_101641_44305404.jpeg', NULL, NULL, 'online', '1991-10-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-07-03 21:01:11', '2021-01-07 04:16:42', NULL, NULL),
(236, 'Shafiq Khan(Shanto)', '01672849856', '236', 'shafiqkhanuiu@gmail.com', '$2y$10$6Kap4Sw1DrJqJNZZmmOYGe1NpadBua5af80r/cHvjeRgshWkILbzy', '332789', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 9 Inch', '65 KG', 'Female', '236_pp_2021_01_07_101727_22784272.jpeg', NULL, NULL, 'online', '1991-09-22', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'KnvxPLgWwCt2WwheMbdvn44XozcaxqcT2KR4kpodwjRTmmwdXGULOB6ZLv5I', '2020-07-14 03:13:13', '2021-01-07 04:17:30', NULL, NULL),
(237, 'Shahjahan Miah', '01722592113', '237', 'miahsust@gmail.com', '$2y$10$ms4q/g1dvkxcgdaexyx6PeCYuoXS00wBX41v3epVNbiIYm80xUl2C', '543638', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Brown', 'Master of Science', NULL, 'Professor', NULL, 'Never Married', '5 Feet 5 Inch', '65 KG', 'Female', '237_pp_2021_01_07_101859_63579568.jpg', NULL, NULL, 'online', '1989-11-11', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'wygRJXrf4zR1TB6wUvWx6OH8gVWi4PD1AJ6L8VqUnVhPiX2YCCWvMDP2qxla', '2020-07-14 08:19:51', '2021-01-07 04:19:01', NULL, NULL),
(238, 'Abdul Aziz Sorkar', '01753258105', '238', 'mdabdulazizsorkar@gmail.com', '$2y$10$rITjoa3xQ5JMpg6rOcfVTuBmMDU7i8iyWSONpfYWx3t7wmvl2hJh2', '301341', 1, 1, 'Male', 'Bangladesh', NULL, 'Jamalpur, Bangladesh', NULL, NULL, NULL, '24.9249785', '89.9463408', 'Self', 'Muslim', NULL, 'Bright', 'Computer science Engineering', NULL, 'Lecturer', NULL, 'Never Married', '5 Feet 4 Inch', '60 KG', 'Female', '238_pp_2021_01_07_101918_58649615.jpeg', NULL, NULL, 'online', '1994-11-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'kzOcKJaexvYYhZxQ4I8CguzqC6bFBTpEbYkGoPUpyv9RLBhoeEF50e46fgu3', '2020-07-16 20:31:43', '2021-01-10 07:04:34', NULL, NULL),
(239, 'Sakif', '+8801776437578', '239', 'efazab727@gmail.com', '$2y$10$Y/GR70sIkj6phyGv5.gsOucz1K3HBFlYwlghYwbTES8G.5mjNgJwC', '191976', 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan 2, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7947536', '90.41430849999999', 'Parent', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '65 KG', 'Female', '239_pp_2021_01_07_101936_35017502.jpg', NULL, NULL, 'online', '1991-05-14', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'CTIL4Js4LYwZSTDsvCDzshX42avyIpmRmDaUSgNHUicXkWRrJRI8SXuSZqhe', '2020-07-17 17:19:40', '2021-01-07 04:19:37', NULL, NULL),
(240, 'Alifa akter', '01624825753', '240', 'alifaakter2347@gmail.com', '$2y$10$MEamL7a/SFsWWGYODhTB/e7Gzinlo5AAzeDLiNLSzFyIhmJSN7ibm', '426387', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'BBA Professional', NULL, 'Running Student', NULL, 'Never Married', '4 Feet 8 Inch', '42 KG', 'Male', '240_pp_2021_01_07_102011_93669726.png', NULL, NULL, 'online', '1996-06-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'GzRiAGGB8s54j972ldEnvYwY0UXRlNmBAeJCIKFFNXbaqHCig5cosCJoDZCB', '2020-07-21 20:09:37', '2021-01-07 04:20:13', NULL, NULL),
(241, 'Fariya Khaleque', '01818430693', '241', 'trishafariya@gmail.com', '$2y$10$YJjTfBHCqhmPOll4VZakB.b1JpYz4cGKU0LzFmRzAk35aylh2nzkq', '566214', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Bright', 'Department Of English', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 2 Inch', '47 KG', 'Male', '241_pp_2021_01_07_102029_36047236.jpg', NULL, NULL, 'online', '1997-10-29', 0, 3, NULL, NULL, 1, 241, 0, NULL, 'meCALsVpBK3fw3LpssgcUiEVU64YaKE8dfvpyOvyUS2uqXrFBxDZVTxFW5cw', '2020-07-23 21:24:35', '2021-01-07 04:20:30', NULL, NULL),
(242, 'priscilla', '01535791130', '242', 'priscilla.pretty404@gmail.com', '$2y$10$5QmMePFeaLzKAC8frKBet.1BG0aujeucReVcAsD68xxELMAucNk2W', '117142', 1, 1, 'Female', 'Bangladesh', NULL, 'Sylhet, Bangladesh', NULL, NULL, NULL, '24.8949294', '91.8687063', 'Sister', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 4 Inch', '65 KG', 'Male', '242_pp_2021_01_07_102050_23985264.jpg', NULL, NULL, 'online', '1990-01-28', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-08-01 06:23:40', '2021-01-07 04:20:51', NULL, NULL),
(243, 'Taslima Rashid', '01970273338', '243', 'smsumon1986@gmail.com', '$2y$10$oNB3XkOzN8aItePa1wcHB.s.kD4VkNDFYZFfESFNzqfbPdOSJ/b1C', '928305', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Brother', 'Muslim', NULL, 'Fair', 'Department Of English', NULL, 'Running Student', NULL, 'Never Married', '5 Feet', '48 KG', 'Male', '243_pp_2021_01_07_102118_71857466.jpg', NULL, NULL, 'online', '1999-07-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-08-06 15:53:23', '2021-01-07 04:21:19', NULL, NULL),
(244, 'Mamun Kabir', '88-01745929022', '244', 'mamuntex561@gmail.com', '$2y$10$AYXxbSoJwz..ghc.2pJzFuMSggKmRrsqbWLdbcL47apdD8YsYnp/e', '410577', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Master of Social Science', NULL, 'Citizen', NULL, 'Legally Separated', '5 Feet 4 Inch', '65 KG', 'Female', '244_pp_2021_01_07_102136_81831289.jpg', NULL, NULL, 'online', '1974-10-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-08-10 18:13:54', '2021-01-07 04:21:37', NULL, NULL),
(245, 'Kh rejaul shabab', '01858249019', '245', 'somratrozen@gmail.com', '$2y$10$mNBdi9OFzWM/PPbh8KmZHO4sHWQm.fSlmKV52rq0hhKzu54hhPcM6', '200699', 1, 1, 'Male', 'Bangladesh', NULL, 'DOHS Baridhara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8125614', '90.4131072', 'Self', 'Muslim', NULL, 'Bright', 'Department Of English', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 11 Inch', '90 KG', 'Female', '245_pp_2021_01_07_102159_79357683.png', NULL, NULL, 'online', '1991-09-21', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'JrySAc3NJq2O7uH2BpWdRd5GSSXfwpOaDDrBW2uRavxCfhs9SKCjs0do9EYJ', '2020-08-12 16:21:07', '2021-01-07 04:21:59', NULL, NULL),
(246, 'Abdur Rahman runu', '01688234563', '246', 'runu90985@gmail.com', '$2y$10$tuBrcWYyuExDdcCQYlWQ8.mu2F03BNevN1tNcy4VG29yr/.E88pWu', '857502', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Brown', 'Electrical and Electronic Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 8 Inch', '70 KG', 'Female', '246_pp_2021_01_07_102229_42796521.jpg', NULL, NULL, 'online', '1984-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'qzChpTfgpwqUBGgsrP9pIgd3JCshp64Hay2Bpb0TtQ629Ux5NOn5nwVUBMaW', '2020-08-14 02:05:57', '2021-01-07 04:22:29', NULL, NULL),
(247, 'Mafruja Akter', '01995540553', '247', 'mafruja83@gmail.com', '$2y$10$OCYrd1o2qbNixa0fNWnkmeDXooUsu2IpQURS5Pqd0M.X9qHSW5IpO', '658612', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Computer science Engineering', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet', '59 KG', 'Male', '247_pp_2021_01_10_045656_87977329.jpg', NULL, NULL, 'online', '1983-12-31', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'ZJ8RSHhRaztCAoZVPMRI1JAkB8Ea6Pwfe3SdK3Mg41sXEiBQQFQNdf3hFonv', '2020-12-04 19:24:40', '2021-01-09 22:56:57', NULL, NULL),
(248, 'Munir Hosen', '01916436053', '248', 'munirhosen90@gmail.com', '$2y$10$myroWrE2AUlBS7FBmYcrjOi3qTqspVZ.j5H7XX0txQ0xm21/XeFJe', '777858', 1, 1, 'Male', 'Bangladesh', NULL, 'Narayanganj, Bangladesh', NULL, NULL, NULL, '23.6237764', '90.50004039999999', 'Self', 'Muslim', NULL, 'Brown', 'Master of Accountancy', NULL, 'Industrialists', NULL, 'Widowed', '5 Feet 4 Inch', '70 KG', 'Female', NULL, NULL, NULL, 'online', '1986-10-07', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-05 03:15:03', '2020-12-05 03:41:00', NULL, NULL),
(249, 'Later', '01966577436', '249', 'overtoonwindow@gmail.com', '$2y$10$.K41WI6RLuHKa88uNigi4OgzvK7oCju80M9i9Rhr33yL9r8ILQGIW', '845852', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Master of Arts in Liberal Studies', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 8 Inch', '60 KG', 'Female', NULL, NULL, NULL, 'online', '1990-03-04', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'KIwp9S0iYBIV0z8otuUg6rRimNioeAmiXQOYDEsLPL53UzajE3Tb2x2YxUvr', '2020-12-06 19:55:10', '2020-12-22 19:48:30', NULL, NULL),
(250, 'Md Rifat hossain', '01633004687', '250', 'rehanabeugum@gmail.com', '$2y$10$To5b1UOAkIri35tM4zxjs.tItCZCD1SqMutrVdKx5zkFS/KnzxA26', '939351', 1, 1, 'Male', 'Bangladesh', NULL, 'Narayanganj Sadar Upazila, Bangladesh', NULL, NULL, NULL, '23.6315743', '90.4974359', 'Self', 'Muslim', NULL, 'Bright', 'Higher Secondary Certificate', NULL, 'Industrialists', NULL, 'Never Married', '5 Feet 10 Inch', '55 KG', 'Female', NULL, NULL, NULL, 'online', '1999-03-27', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-07 07:23:24', '2020-12-07 07:36:54', NULL, NULL),
(251, 'Noman', '01835280131', '251', 'cascadelamp@gmail.com', '$2y$10$fhUJ.stHXi.SHMKYfLmtQOzQ.r9rB4Uyw9hW.eI3NQGqDCmf6JDzK', '858600', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Brown', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '70 KG', 'Female', '251_pp_2020_12_07_065510_32208423.gif', NULL, NULL, 'online', '1996-12-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'OTA1oimVPa9OOTyuShQvctVA2yiBeDIAvR2g3YeCRGoAqJl37cahXhudNvoc', '2020-12-07 12:30:47', '2021-02-17 00:40:52', NULL, NULL),
(252, 'Affan Ahmed', '01630851453', '252', 'affsha2722@gmail.com', '$2y$10$1lGryUOZdYCS8eJ0ZzvTlOqUtC3rDjGfPnGK8n.fhGPi/10XF7QSy', '907717', 1, 1, 'Male', 'Bangladesh', NULL, 'Nikunja 2, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8318836', '90.4178201', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 4 Inch', '74 KG', 'Female', '252_pp_2021_01_10_045249_63635596.jpg', NULL, NULL, 'online', '1996-12-27', 0, 1, NULL, NULL, 1, 1, 0, NULL, NULL, '2020-12-08 06:25:38', '2021-01-09 22:52:49', NULL, NULL);
INSERT INTO `users` (`id`, `name`, `mobile`, `username`, `email`, `password`, `password_temp`, `active`, `profile`, `gender`, `country`, `country_other`, `location`, `state`, `city`, `post_code`, `lat`, `lng`, `profile_created_by`, `religion`, `social_order`, `skin_color`, `education_level`, `education_level_other`, `profession`, `profession_other`, `marital_status`, `height`, `weight`, `looking_for`, `img_name`, `file_name`, `file_ext`, `user_type`, `dob`, `check_count`, `edit_count`, `mobile_verified_at`, `email_verified_at`, `addedby_id`, `editedby_id`, `package`, `expired_at`, `remember_token`, `created_at`, `updated_at`, `loggedin_at`, `deleted_at`) VALUES
(253, 'Ronovir Evan', '01995101640', '253', 'ronovir795@gmail.com', '$2y$10$S2kUIWRtgqd4wB6xrADcIOJSFtR4izfTykB29E6em6SGPcng8Qu2e', '693934', 1, 1, 'Male', 'Bangladesh', NULL, 'Mohammadpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.766008', '90.3585875', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Male Police officer', NULL, 'Never Married', '5 Feet 8 Inch', '64 KG', 'Female', NULL, NULL, NULL, 'online', '1996-09-16', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-10 11:49:30', '2020-12-10 11:49:30', NULL, NULL),
(254, 'Ronovir Evan', '01316338431', '254', 'ronovir796@gmail.com', '$2y$10$MU7Geu9Cc2vbpz.0OumPQOrxs/XZNcrRdP7EriqoWFO6L/lc0xSrW', '787959', 1, 1, 'Male', 'Bangladesh', NULL, 'Mohammadpur, Dhaka, Bangladesh', NULL, NULL, NULL, '23.766008', '90.3585875', 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Male Police officer', NULL, 'Never Married', '5 Feet 8 Inch', '64 KG', 'Female', NULL, NULL, NULL, 'online', '1996-09-16', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-10 11:50:54', '2020-12-10 12:01:26', NULL, NULL),
(255, 'Firoz Ahmmed', '01768013300', '255', 'firozahmmed012@gmail.com', '$2y$10$7DFyhxxYtWNjQ8qLYaZGiuikTbeaSmT39koKTEsNMdlmF.dNavQO2', '525801', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Department Of English', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 5 Inch', '59 KG', 'Female', NULL, NULL, NULL, 'online', '1994-08-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-12 10:05:54', '2020-12-12 10:11:45', NULL, NULL),
(256, 'MD. SHAHINUR ISLAM', '01937598855', '256', 'shahin.svr01@gmail.com', '$2y$10$euth7rume0Erz4lbBgi.1OUfNn9Mw6jmgNm5ri40nqi5HTN3eb4FC', '660222', 1, 1, 'Male', 'Bangladesh', NULL, 'Savar Union, Bangladesh', NULL, NULL, NULL, '23.8478798', '90.2575646', 'Self', 'Muslim', NULL, 'Drak', 'Master of Business Administration', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 5 Inch', '70 KG', 'Female', NULL, NULL, NULL, 'online', '1991-08-25', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-13 10:34:24', '2020-12-13 11:50:57', NULL, NULL),
(257, 'Ripan uddin', '01864003564', '257', 'ripandas199306@gmail.com', '$2y$10$/9s/ujs6LU1sd7E48U489eUOtGyc2U6QXQ4bXIz1.ZyWzaqgk2SYG', '344027', 1, 1, 'Male', 'Bangladesh', NULL, 'Agrabad Commercial Area, Chattogram, Bangladesh', NULL, NULL, NULL, '22.3244537', '91.81172319999999', 'Self', 'Muslim', NULL, 'Bright', 'Masters in International Economics', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 3 Inch', '54 KG', 'Female', NULL, NULL, NULL, 'online', '1995-06-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-16 11:58:57', '2020-12-16 12:12:05', NULL, NULL),
(258, 'Md Ashraful Islam', '01703353079', '258', 'ashrafulislam0382@gmail.com', '$2y$10$k4PGH1ICUlANqlqL9Q9AL.Ki7scYluHWZMGq4Tod8WS64RJwvlxFW', '146481', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Department of Applied Chemistry and Chemical Engineering Department of Nuclear Engineering', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '67 KG', 'Female', NULL, NULL, NULL, 'online', '1997-12-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-21 12:21:55', '2020-12-21 12:24:03', NULL, NULL),
(259, 'Joy Ahmed', '01987419488', '259', 'joynal01987@gmail.com', '$2y$10$3rAa/cPaAA5G.63wL0V/8.YYihi9LmMUFUui.oY0a9D9LaCRrL9iG', '322037', 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan 1, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7820624', '90.4160527', 'Self', 'Muslim', NULL, 'Fair', 'Department of Islamic Study', NULL, 'Running Student', NULL, 'Never Married', '4 Feet 5 Inch', '63 KG', 'Female', NULL, NULL, NULL, 'online', '1998-02-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-22 04:51:20', '2020-12-22 05:00:35', NULL, NULL),
(260, 'Kazi Masud', '01718986675', '260', 'clientssl.bd@gmail.com', '$2y$10$J1mXtJtlJlVa5s2fUiGx2.oE68H57CZ7LKAF9O/jCuDZC5o2xDlCq', '325324', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Bright', 'Master of Science', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '73 KG', 'Female', NULL, NULL, NULL, 'online', '1991-04-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-24 23:21:40', '2020-12-24 23:24:04', NULL, NULL),
(261, 'Shahadat shaad', '01703300566', '261', 'rahmanatik873@gmail.com', '$2y$10$Sx24ZO/Mbb.cPqN9P/N.5ujGj7W26aVR6CPh/iRPvDAmhX.9mdEoO', '643562', 1, 1, 'Male', 'Bangladesh', NULL, 'Sherpur, Bangladesh', NULL, NULL, NULL, '24.6597515', '89.4221967', 'Self', 'Muslim', NULL, 'Bright', 'Department of Political Science', NULL, 'Running Student', NULL, 'Never Married', '6 Feet 7 Inch', '50 KG', 'Female', NULL, NULL, NULL, 'online', '2000-12-03', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'ougdkn4dp3ULIbQ3X7Vn68cTHTteitwWgIMJlVZv9QEroq1LpWNfLzaG5eEv', '2020-12-26 16:59:45', '2020-12-26 17:06:09', NULL, NULL),
(262, 'Nila Mony Shikder', '01834063047', '262', 'nishatanjum666@yahoo.com', '$2y$10$oyXpxHcWb.sCAiWGZokYhO6jZl1.2aNTKpEMW9aXeoX4/RKqCHbJq', '921083', 1, 1, 'Female', 'Bangladesh', NULL, 'Arts Faculty, Dhaka 1205, Bangladesh', NULL, NULL, NULL, '23.7341698', '90.3927502', 'Parent', 'Muslim', NULL, 'Fair', 'Master of Business Administration', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '63 KG', 'Male', '262_pp_2021_01_10_045610_98993891.jpg', NULL, NULL, 'online', '1990-04-08', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-28 13:00:53', '2021-01-09 22:56:11', NULL, NULL),
(263, 'Shihab Ahmed Rafi', '01743921127', '263', 'rafi1000@yahoo.com', '$2y$10$c8zJDXz/LeTUAj5v4btc6Ox9OOHN/EnphFSXv1MgAQZHe1NI8yPGe', '477788', 1, 1, 'Male', 'Bangladesh', NULL, 'Sylhet, Bangladesh', NULL, NULL, NULL, '24.8949294', '91.8687063', 'Self', 'Muslim', NULL, 'Fair', 'Master of Medicine', NULL, 'Doctor', NULL, 'Divorced', '5 Feet 7 Inch', '87 KG', 'Female', NULL, NULL, NULL, 'online', '1987-01-29', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-29 04:53:18', '2020-12-29 04:53:25', NULL, NULL),
(264, 'MD Rayhan Uddin', '+97334546084', '264', 'mdrayhanuddin424@gmail.com', '$2y$10$gvbJgI7zooMcdR.bgBaulu3x9BAJokav4pJ8z59MVLMTHxtW/A9sO', '377150', 1, 1, 'Male', 'Bahrain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Bright', 'Higher Secondary Certificate', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 8 Inch', '65 KG', 'Female', NULL, NULL, NULL, 'online', '1994-06-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'hlEwsnFoniQoeEiGYUXR7rxbXjD3RmUtAqU8idLfQ7vVOsvKJ7xnWZ8KkfXu', '2020-12-30 05:47:29', '2020-12-30 05:57:41', NULL, NULL),
(265, 'Tanvir Ahmed', '1762100181', '265', 'tanvirectbd@gmail.com', '$2y$10$8RTaEXj.EPiIkRkotzSdve7Og8Gry4M8z3syLs5UkurEmkh5uupS.', '162612', 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'Electrical and Electronic Engineering', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 9 Inch', '90 KG', 'Female', '265_pp_2021_01_07_055735_37845638.jpg', NULL, NULL, 'online', '1988-02-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-30 06:01:36', '2021-01-06 23:57:36', NULL, NULL),
(266, 'Nowrin', '01711462187', '266', '1999khannowrin@gmail.com', '$2y$10$YWn/amnOdBSQJhM5ljOEQui//eQb6I9is71U6H5BZ8ZWP4ldnHja.', '265445', 1, 1, 'Female', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Bright', 'Department Of Pharmacy', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 4 Inch', '52 KG', 'Male', '266_pp_2021_01_07_055807_12317553.jpg', NULL, NULL, 'online', '1999-05-15', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2020-12-31 06:00:46', '2021-01-06 23:58:08', NULL, NULL),
(267, 'Amjad Hossain', '+19024003614', '267', 'nzu36743@cuoly.com', '$2y$10$WVRwjcD73yyWFuwXU6GyWeXo1ZsRRPFwJAARZFfFOIYw3B2f0jb.K', '805668', 1, 1, 'Male', 'Canada', NULL, 'Canada', NULL, NULL, NULL, '56.130366', '-106.346771', 'Self', 'Muslim', NULL, 'Bright', 'Department of Mechanical Engineering (ME)', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '267_pp_2021_01_07_102515_68022938.jpg', NULL, NULL, 'online', '1993-04-05', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-01-05 00:21:44', '2021-01-07 04:25:15', NULL, NULL),
(268, 'Amjad Hossain', '01784322683', '268', 'amjad.vicar@gmail.com', '$2y$10$mZY3IMwdMVJVRnxGnR4FZegZs1NAM56Y2U.kkB/YeCY2BxNcqkJ8C', '805456', 1, 1, 'Male', 'Bangladesh', NULL, 'Chattogram, Bangladesh', NULL, NULL, NULL, '22.356851', '91.7831819', 'Self', 'Muslim', NULL, 'Bright', 'Department of Mechanical Engineering (ME)', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 5 Inch', '60 KG', 'Female', '268_pp_2021_01_07_102555_45648106.jpg', NULL, NULL, 'online', '1993-04-05', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-01-05 00:26:10', '2021-01-07 04:25:57', NULL, NULL),
(269, 'KAZI MASUD AL BARI', '01799986603', '269', 'kazi124@gmail.com', '$2y$10$w5U2CvIjy0pThJJKZoVY.upboKfnPZTSVtckW59nVBPyzXJEpcOIO', '683870', 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan 2, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7947536', '90.41430849999999', 'Self', 'Muslim', NULL, 'Drak', 'Master of Business Administration', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 6 Inch', '75 KG', 'Female', '269_pp_2021_01_07_102508_77829399.jpeg', NULL, NULL, 'online', '1988-08-30', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-01-05 03:18:05', '2021-01-07 04:25:10', NULL, NULL),
(270, 'Mehedi', '01312284181', '270', 'chefmehedihasan@gmail.com', '$2y$10$MITUp3LE5IkM1ngU.4iI4uPdJA.xeJwF4pE.1JoSkUn2jDKNvEemm', '945860', 1, 1, 'Male', 'Bangladesh', NULL, 'Faridpur District, Bangladesh', NULL, NULL, NULL, '23.5423919', '89.6308921', 'Self', 'Muslim', NULL, 'Fair', 'Department of Tourism and Hospitality Management', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 2 Inch', '60 KG', 'Female', '270_pp_2021_01_07_102400_10781009.png', NULL, NULL, 'online', '1999-11-17', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'AD2WubFCgObboXKvBMod6l4uloAlW0qkhhHxUG5gkLqhdCQnPsaSCc8ZDfCh', '2021-01-07 04:00:21', '2021-02-27 10:11:09', NULL, NULL),
(271, 'S M Raihan Uddin', '01770389107', '271', 'raihan757@gmail.com', '$2y$10$3zWHN/fOVpga8EiUlG3WJuYa912VQu.Ijzd6X/fUdcAwFTe1B1/6m', '579178', 1, 1, 'Male', 'Bangladesh', NULL, 'Mohammadpur, Dhaka, Bangladesh', NULL, 'Dhaka', '1207', '23.766008', '90.3585875', 'Self', 'Muslim', NULL, 'Fair', 'Department of Law', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 6 Inch', '65 KG', 'Female', NULL, NULL, NULL, 'online', '1988-01-01', 0, 2, NULL, NULL, 1, 271, 0, NULL, NULL, '2021-01-08 05:17:32', '2021-01-11 02:18:53', NULL, NULL),
(272, 'MD. Sobuj Sheikh', '01752904936', '272', 'ocl.sobuj@gmail.com', '$2y$10$3B3rEIlxUChqs.TyzI7eLO5Wfvsj/xmJ91BsvzbQQbTpt84F/u8yi', '509147', 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 6 Inch', '50 KG', 'Female', NULL, NULL, NULL, 'online', '1997-04-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'o6m4n0xmRP8MMFNZHH2VZHHSzBefyQzDKvtjFab9grBLJSjGJNS5NGJH6zgp', '2021-01-09 01:13:53', '2021-01-09 01:16:28', NULL, NULL),
(273, 'ABDULLAH AL NOMAN', '+8801912222462', '273', 'AlNomanOfficial69@gmail.com', '$2y$10$F93jkWYf88WDrVFiZ7jH8ewz/P0xVQN41YAciHvtTUYuacJZONWpS', '558454', 1, 1, 'Male', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', NULL, NULL, NULL, '23.8758547', '90.3795438', 'Self', 'Muslim', NULL, 'Ten', 'Alim', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 3 Inch', '64 KG', 'Female', NULL, NULL, NULL, 'online', '2002-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-01-09 05:38:48', '2021-01-09 05:38:48', NULL, NULL),
(274, 'Sk. Hashibur Rahman', '01756433433', '274', 'sk.hashibur.rahman@gmail.com', '$2y$10$QBXfDHkik1hNLTz3kvm4Au/SSzxZ/Bl7qp4B4cPUNNsmI9mkVsTFO', '756960', 1, 1, 'Male', 'Bangladesh', NULL, 'Satkhira Sadar Upazila, Bangladesh', NULL, NULL, NULL, '22.7361633', '89.0370477', 'Self', 'Muslim', NULL, 'Fair', 'Master of Laws', NULL, 'Citizen', NULL, 'Divorced', '5 Feet 7 Inch', '91 KG', 'Female', NULL, NULL, NULL, 'online', '1991-08-06', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-01-10 06:31:38', '2021-01-10 06:31:38', NULL, NULL),
(275, 'Sumaiya Rahman', '01914436436', '275', 'rukyamoni@gmail.com', '$2y$10$NvAl1ij8g0QzyVLsYH6bw.nDbs5O1YUpNlZRj7FCr7pejl2M.TT0S', '136665', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Fair', 'M.Sc in Management Information System', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '57 KG', 'Male', NULL, NULL, NULL, 'online', '1995-01-10', 0, 10, NULL, NULL, 1, 275, 0, NULL, 'gn9Nq7EHdccmhkOaKFYlLS0cDZbDhjuAJJZGwswV1zvOyvAEzhyje8eLM1Mi', '2021-01-12 23:55:40', '2021-03-18 14:51:56', NULL, NULL),
(276, 'Ishat Salsabil', '01622071707', '276', 'ishatsilvi.ewu@gmail.com', '$2y$10$M8fDuzkipIdAX.HO4cAwjelKdxvdO9InYpEuQUv5uunhHY/TMZ05u', '864959', 1, 1, 'Female', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, '23.810332', '90.4125181', 'Self', 'Muslim', NULL, 'Brown', 'M.sc Department of Computer Science & Engineering', NULL, 'Running Student', NULL, 'Never Married', '5 Feet', '55 KG', 'Male', '276_pp_2021_01_17_092159_45425896.jpg', NULL, NULL, 'online', '1996-01-06', 0, 3, NULL, NULL, 1, 16, 0, NULL, NULL, '2021-01-14 11:34:39', '2021-01-17 03:22:00', NULL, NULL),
(277, 'Rajesh Kumar Prince', '01408984227', '277', 'rajeshkumarprince882@gmail.com', '$2y$10$ZeTiolL87gpOmArOrHs5fu2dXrpQvr6JNfm5HtdKon5bZd3iQbKxy', '561427', 1, 1, 'Male', 'Bangladesh', NULL, 'Cumilla, Bangladesh', NULL, NULL, NULL, '23.4606574', '91.1809065', 'Self', 'No Religion', NULL, 'Fair', 'Higher Secondary Certificate', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 3 Inch', '49 KG', 'Female', NULL, NULL, NULL, 'online', '1999-09-09', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'onju3odOleEGBmX4TbrEHMeyf80T6GfpMki7HSBriMmqnPCEBeppxUKORSZP', '2021-01-15 21:30:19', '2021-01-15 22:30:46', NULL, NULL),
(278, 'Sharif', '+8801759018266', '278', 'shanto3101@gmail.com', '$2y$10$GYTf6jcu5vKZbj0Y2B.T0ubO6qMGebS7WRWMv14E.flOxaiQeidn.', '170578', 1, 1, 'Male', 'Bangladesh', NULL, 'Middle Badda, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7798106', '90.42371209999999', 'Self', 'Muslim', NULL, 'Fair', 'Department Of English', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 1 Inch', '48 KG', 'Female', NULL, NULL, NULL, 'online', '1994-11-10', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-01-27 01:10:58', '2021-01-27 01:10:59', NULL, NULL),
(279, 'Nill', '01913186406', '279', 'nelufatasnim@gmail.com', '$2y$10$SLha0pqh5UTsge3DIbt40.3yUF8vlIc/Y4NXnPGYL3r0mZn0sNnJO', '231367', 1, 1, 'Female', 'Bangladesh', NULL, 'Bogura, Bangladesh', NULL, NULL, NULL, '24.848078', '89.3729633', 'Self', 'Muslim', NULL, 'Fair', 'Department Of English', NULL, 'BCS (Information): Information Officer / Equivalent Posts', NULL, 'Widowed', '5 Feet 1 Inch', '53 KG', 'Male', NULL, NULL, NULL, 'online', '1989-01-20', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'NGjGS8CwvZFks3veErue1HECqUrCS1HEqx5HEiDDJiHNYblyDe7Uy86A4wnM', '2021-01-28 05:24:55', '2021-01-30 03:56:06', NULL, NULL),
(280, 'Nayeem Ahmed', '01627038632', '280', 'nayem.ahmed7217@gmail.com', '$2y$10$Yx4BzHXwdtXZCtAxdE6YvOrUCyr02TucOvVKiB8DaRXrhbSUWkSuy', '551782', 1, 1, 'Male', 'Bangladesh', NULL, 'Mohakhali, Dhaka 1212, Bangladesh', NULL, NULL, NULL, '23.7777571', '90.40574079999999', 'Self', 'Muslim', NULL, 'Fair', 'Computer science Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 10 Inch', '55 KG', 'Female', NULL, NULL, NULL, 'online', '1993-10-19', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-01-28 21:40:31', '2021-01-28 21:48:17', NULL, NULL),
(281, 'arup sarkar apu', '01922652210', '281', 'arupsarkarapu@outlook.com', '$2y$10$GMsR3mJi1NZAu7zjSu6w/Ol2b2sJnMQyvaXo7cYFvP4mzGHzNlrUy', '684621', 1, 1, 'Male', 'Bangladesh', NULL, 'Khulna, Bangladesh', NULL, NULL, NULL, '22.845641', '89.5403279', 'Self', 'Hindu', NULL, 'Bright', 'Department of Marketing', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 10 Inch', '70 KG', 'Female', NULL, NULL, NULL, 'online', '1995-01-01', 0, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-01-29 12:37:50', '2021-01-29 13:28:01', NULL, NULL),
(282, 'Niger Sultana Popy', '+8801676234788', '282', 'syedamanparag@gmail.com', '$2y$10$F9R6rJIw5kJLydLZMY3aFu2Y0opnVo8iUa39r37Z/kPTUhWPvcn9y', '817005', 1, 1, 'Female', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', '1230', '23.8758547', '90.3795438', 'Brother', 'Muslim', 'Sunni', 'Brown', 'Higher Secondary Certificate', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 3 Inch', '53 KG', 'Male', NULL, NULL, NULL, 'online', '1991-08-15', 0, 5, NULL, NULL, 1, 282, 0, NULL, '6LabmUj1cLxf5baWoX3X10YcFIEenPxxELVP2ZWYppipZ5dyqSnknCqZB1wW', '2021-01-29 12:44:47', '2021-01-30 04:36:22', NULL, NULL),
(283, 'Bokkor', '01743622589', '283', 'hyhlnr8491@reebnz.com', '$2y$10$vX4gpbXbFIj4RRa4gJ9m4u5pl7EThoiaBgt7Q786ixbHHras8TKk6', '559632', 1, 1, 'Male', 'Bangladesh', NULL, 'Cumilla, Bangladesh', NULL, NULL, NULL, '23.4606574', '91.1809065', 'Self', 'Muslim', NULL, 'Fair', 'Diploma in pharmacy', NULL, 'Lecturer', NULL, 'Never Married', '5 Feet 4 Inch', '56 KG', 'Female', NULL, NULL, NULL, 'online', '1993-01-01', 0, 3, NULL, NULL, 1, 283, 0, NULL, NULL, '2021-01-30 15:23:45', '2021-01-30 15:33:15', NULL, NULL),
(284, 'Test User', NULL, NULL, 'user@user.com', '$2y$10$vHAijJSJoKEVSHdwXISDI.XN6vLXC6AeWPAsON/IXXfROJrzCAMeK', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-03 07:34:09', '2021-02-03 07:36:11', NULL, NULL),
(285, 'ryDcvSgquQFjXUPp', NULL, NULL, 'mulleritg15@gmail.com', '$2y$10$4xcA0UYnGQxL2esEIwaQzO5WJdfYAGsmXgijfRBrOLyW.WPF..0OO', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-03 20:16:14', '2021-02-03 20:16:22', NULL, NULL),
(286, 'Middle Family', NULL, '286', 'marriagebd2012@gmail.com', '$2y$10$1Erdy1IrcZ0igsItJ5ZiJ.CaG7SY6f97DFNFsCaNeoElrYE9PvD/q', NULL, 1, 1, 'Male', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', 'Muslim', NULL, 'Fair', 'Department of Marketing', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 6 Inch', '64 KG', 'Female', NULL, NULL, NULL, 'online', '1988-02-23', 0, 1, NULL, NULL, 1, NULL, 0, NULL, 'e2hmlgb0CpPrTPDyMvzH6xSo6Au0q3zduabXNIy8YBIYQKJVXs1155H4lZ4t', '2021-02-03 22:26:37', '2021-02-09 23:36:11', NULL, NULL),
(287, 'Signe Fox', NULL, NULL, 'liwiwy@mailinator.com', '$2y$10$eMfSPDWklxCQ2LANNwT3t.fU4Ufh.AOXnuTm1Nfoh3PFYzSl32fhi', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-03 22:28:17', '2021-02-04 00:01:56', NULL, NULL),
(288, 'Fahmida Ahmed', NULL, NULL, 'sahida.shonju2@gmail.com', '$2y$10$SJFtizNg3EXW9aqWhtEG3OFY2.rFncrYzl9GFOrQ6sLMIvFx91ZNW', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-05 05:14:40', '2021-02-05 05:14:41', NULL, NULL),
(289, 'Sabina eyasmin', NULL, NULL, 'sabinaeyasmin336@gmail.com', '$2y$10$q2mafJBPbRveNOJwc46DzeOmEHeC0rpgr/1Fmv5EoP13KMJzmNYlK', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-05 05:52:28', '2021-02-05 05:52:31', NULL, NULL),
(294, 'MD. MOHEBBULLAH', NULL, NULL, 'rokib.sust@gmail.com', '$2y$10$EAbiEELM8lt64pLAiyc/W.1spSv5bl06q5jviV1lW5FnmIQgvt.9K', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-09 03:36:33', '2021-02-09 03:43:40', NULL, NULL),
(295, 'Robiul Noyon', '01746050081', NULL, 'robiulnoyon430@outlook.com', '$2y$10$NzORfT1JEiJ0lxN2vnhP2eU12qkfzOtTBy591w4V8AB80sB0Ca1qu', NULL, 1, 0, 'Male', 'Bangladesh', NULL, 'Katakhali Bazar, Bangladesh', 'Rajshahi', 'Rajshahi', '6212', '24.3619704', '88.693438', 'Self', 'Muslim', 'Just Muslim', 'Bright', 'Department of Finance', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 7 Inch', '70 KG', 'Male', NULL, NULL, NULL, 'online', '1996-06-18', 0, 5, NULL, NULL, 1, 295, 0, NULL, NULL, '2021-02-09 04:04:52', '2021-02-09 04:43:17', NULL, NULL),
(296, 'Genevieve Caldwell', NULL, NULL, 'hegupi@mailinator.com', '$2y$10$RyXop7qoSzPk7yuW55nZRePOt/wsUW6qzrEPXlUkwIUblZfZy3StO', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-09 23:23:47', '2021-02-09 23:26:02', NULL, NULL),
(297, 'Basil Burton', NULL, NULL, 'ririqebo@mailinator.com', '$2y$10$mP.uVx925XkqCy4ErZshJulv/zgTDJe4m8nfXqBUVH6iky11xnmIq', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-09 23:27:06', '2021-02-09 23:27:28', NULL, NULL),
(298, 'Jena Horn', NULL, NULL, 'kiwuzaq@mailinator.com', '$2y$10$qeyo6daLZbOc1BIgHNjM4u.jT2pxQpEg0v1MIPA6zBCFs5KKEvv0O', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-09 23:33:33', '2021-02-09 23:38:52', NULL, NULL),
(299, 'Aminul Amin', NULL, NULL, 'aminulamin91@gmail.com', '$2y$10$v/ghXJNifUhmyP9I0LsAaOxMIzHrX25c1uEavhPUifMF/FPWbGJ9K', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, 'q9lM9OPZQfT9NSd0l5iJaOWFKC6iLk7vlI516V60dsFaLyWTuT3kNsfK1fRy', '2021-02-10 23:24:48', '2021-03-10 22:09:11', NULL, NULL),
(300, 'Beatrice Campos', NULL, NULL, 'gale@mailinator.com', '$2y$10$8kfbE9Wnvk/l2SOGEk2ZpOh8wgox60ESdwvVYpo7e0i0gsRxFbdT.', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, 'I5dEBbhzUzk2zTOjoTQ4NW2L2pzPY88d0UQzxoYNp2sWOj2LWotB1FLwGpPV', '2021-02-10 23:27:36', '2021-03-10 23:17:22', NULL, NULL),
(301, 'pqhEvzdacIN', NULL, NULL, 'lowmanogx68@gmail.com', '$2y$10$5sTaCvI8qvz0Ur1nPYpse.txHYtKYCMpTcfVM1tcz4i5SIZmmF60a', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-11 03:10:12', '2021-02-11 03:10:26', NULL, NULL),
(302, 'Syeda Sumaia Rahman', '+8801758537178', NULL, 'trina.sumaia@gmail.com', '$2y$10$T57zpuBuYRH4..Sp82kwaOG/ha2E.AY6NmKkhog56atMGob3eBiVi', NULL, 0, 0, 'Female', 'Bangladesh', NULL, 'New Eskaton Road, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', '1000', '23.7470548', '90.398646', 'Parent', 'Muslim', 'Sunni', 'Fair', 'Department of Civil Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 3 Inch', '50 KG', 'Male', NULL, NULL, NULL, 'online', '1995-01-05', 0, 1, NULL, NULL, 1, 302, 0, NULL, NULL, '2021-02-12 12:58:53', '2021-02-14 00:03:30', NULL, NULL),
(303, 'Patrick Vargas', NULL, NULL, 'cifuke@mailinator.com', '$2y$10$xcv/qiesx7Vwsl3uFUA/Ru5E3rPpzN20VRBJ7Rf9sNM0dMNyqYu.y', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-14 22:06:43', '2021-02-14 22:06:48', NULL, NULL),
(304, 'Brock Ferguson', NULL, NULL, 'rajokaraj@mailinator.com', '$2y$10$cuRR74k34pzp8pDPEMQDfedDW/ruTcj0Qrq5.rn6AMedTRjoUAnyK', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-14 22:09:18', '2021-02-14 22:41:09', NULL, NULL),
(305, 'Aaron Pittman', 'Aliquid itaque minus', NULL, 'jiwe@mailinator.com', '$2y$10$KbwiwiQDaYIXg1iOWUuigOCWNBodamgFeWxUL7NiqDXL7CvXxave.', NULL, 1, 0, 'Male', 'Saint Barth??lemy', NULL, NULL, 'Vel nobis aut deseru', 'Quia harum qui possi', 'Dignissimos mollitia', NULL, NULL, 'Self', 'No Religion', 'Roman Catholic', 'Brown', 'Department of geography and environment', NULL, 'Ministry of Surveying (Bangladesh)', NULL, 'Anulled', '5 Feet 1 Inch', '86 KG', 'Female', NULL, NULL, NULL, 'online', '1993-11-22', 0, 2, NULL, NULL, 1, 305, 0, NULL, NULL, '2021-02-15 06:43:49', '2021-02-15 06:55:03', NULL, NULL),
(306, 'Dalton Shannon', NULL, NULL, 'rykokyvik@mailinator.com', '$2y$10$jgsXHJ1FGs5250dsEZA26OW7hCosOMd5zLVRr9TiZkJLUoOcpGr7G', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-15 22:20:56', '2021-02-16 00:09:54', NULL, NULL),
(307, 'Chantale Barry', NULL, NULL, 'barilok@mailinator.com', '$2y$10$ALcF99RpBTD9iEzZoJ4hC.4sMS6XNIt7HdQGXpjl8pFpMt8qR.cWe', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-17 22:40:16', '2021-02-17 23:34:15', NULL, NULL),
(308, 'Mohammed Parvej', NULL, NULL, 'mdpervej990@yahoo.com', '$2y$10$E6FdhALMccRSQjJS6BGcgOXo2XTmbdvMGPrIJ3XHcrT0oJeG5qG.y', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-19 05:35:03', '2021-02-19 05:35:03', NULL, NULL),
(309, 'zahidul Kabir', NULL, NULL, 'zahid.primax@gmail.com', '$2y$10$eoXgddHM8gWs9UaLcOGYzeNbnTk6v/iw2JBEDEbreJ1GOGQKTwOyy', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-19 14:14:42', '2021-02-19 14:15:27', NULL, NULL),
(310, 'Hasan', NULL, NULL, 'hasan2000khk@gmail.com', '$2y$10$vMw.iKAw0TZRaqyRvIsyTutkvlX0t/D1TaFKMiBoWVI6I/3IjSgIq', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-20 08:18:48', '2021-02-20 08:34:00', NULL, NULL),
(311, 'rayhan', '01766913723', NULL, 'rafi.ligani@gmail.com', '$2y$10$TrnCHuQ7PIAie2o2.6RqouM4pcsIdl5PtfVuWmeze1z79It..tLxC', NULL, 1, 0, 'Male', 'Bangladesh', NULL, 'Bangladesh', 'dhaka', 'dhaka', '1206', '23.684994', '90.356331', 'Self', 'Muslim', 'Salafi', 'Fair', 'Department Of Pharmacy', NULL, 'Running Student', NULL, 'Never Married', '4 Feet 1 Inch', '32 KG', 'Female', NULL, NULL, NULL, 'online', '1995-01-02', 0, 1, NULL, NULL, 1, 311, 0, NULL, 'aDgWf0ECogyZxBCNfYO04M90ZBuCFoLw5ivsnbTKBrPsqOfMVJviRgVosULZ', '2021-02-22 11:21:42', '2021-02-27 08:57:43', NULL, NULL),
(312, 'Md. Rasel Hossain Razu', '01793324812', NULL, 'raselhossainrazu71@gmail.com', '$2y$10$4Be1JY4WdlOqVMlaoL2MF.kuKBvrzVlMc2J0t6x6xoDwD9ye9cW3G', NULL, 1, 1, 'Male', 'Bangladesh', NULL, 'Mohakhali, Dhaka 1212, Bangladesh', 'Rajshahi', 'Dhaka', '6720', '23.7777571', '90.40574079999999', 'Self', 'Muslim', 'Just Muslim', 'Drak', 'Department of Applied Chemistry and Chemical Engineering', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 5 Inch', '59 KG', 'Male', NULL, NULL, NULL, 'online', '1999-12-08', 0, 3, NULL, NULL, 1, 312, 0, NULL, 'Ke3z3psSdxnQoJbxY8uIgGfqP8tLTWHpp91BJODSB4e4Aky00u2jSliItW6J', '2021-02-25 21:40:01', '2021-03-05 06:53:31', NULL, NULL),
(313, 'Boris Bentley', NULL, NULL, 'qyxokuh@mailinator.com', '$2y$10$hH6YOZzgzq15bzuo//V7bO9NeD40bvIBAopan4yy3yX9DBt42AVky', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-02-27 02:08:57', '2021-02-27 03:38:24', NULL, NULL),
(314, 'test', '01674555111', NULL, 'iamofrun007@gmail.com', '$2y$10$gQA1eDr0Cc86O0c2HVLO5eBm65C1l1U.oXEmNSbJBXyGZSWNqU9yS', NULL, 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', 'dhaka', 'dhaka', '1216', '23.810332', '90.4125181', 'Self', 'Muslim', 'Hanafi', 'Fair', 'Department of Software Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 7 Inch', '60 KG', 'Female', NULL, NULL, NULL, 'online', '1990-01-01', 0, 2, NULL, NULL, 1, 314, 0, NULL, NULL, '2021-02-27 15:25:37', '2021-02-27 15:49:36', NULL, NULL),
(315, 'MD. HUMAYUN RASHID BHUIYAN', '01689528514', NULL, 'humayundu.mkt@gmail.com', '$2y$10$opSVU0i0.eyG2YWwjWAk9.dNwnd8YWGv2h8lwmOj.UOP0YqvBcZZe', NULL, 1, 1, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', 'Dhaka', 'Dhaka', '1236', '23.810332', '90.4125181', 'Self', 'Muslim', 'Sunni', 'Fair', 'Master of Business Administration', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '5 Feet 7 Inch', '70 KG', 'Female', NULL, NULL, NULL, 'online', '1989-06-15', 0, 14, NULL, NULL, 1, 315, 0, NULL, 'egxtWfDcHaGxJpYHUs2S2ci8yt47Se70Lw3aeqYKeLAUWJM7dYaM2v8Kjzvk', '2021-02-28 00:28:59', '2021-02-28 02:19:10', NULL, NULL),
(316, 'Mohammad Majumdar', '01734258039', NULL, 'anisurrahmanopu83@gmail.com', '$2y$10$SDcaKKmZy5VnV86fKkpbuuEYlInWOKW3K0PvP/48ducNwKnT/jLri', NULL, 1, 1, 'Male', 'Bangladesh', NULL, 'Gulshan, Dhaka, Bangladesh', 'Dhaka', 'Gulshan', '1212', '23.7924961', '90.40780579999999', 'Self', 'Muslim', 'Just Muslim', 'Brown', 'Department of Software Engineering', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 7 Inch', '70 KG', 'Female', NULL, NULL, NULL, 'online', '1985-09-01', 0, 8, NULL, NULL, 1, 316, 0, NULL, 'NsPb34LetSp34QJ9oc2NwExIFXQ9ZGX1sVJSPq4nRE7zfySqAUl7SSMfov8V', '2021-03-02 11:35:04', '2021-03-09 10:06:35', NULL, NULL),
(317, 'Mortuza Arfan', '01920216663', NULL, 'mortuzaarfan@gmail.com', '$2y$10$LC089XFLXhvWFc/aUtub0.6thyBrgdMCUfstt6PI488tkeP8qO0Ka', NULL, 1, 0, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', NULL, 'Dhaka', NULL, '23.810332', '90.4125181', 'Self', 'Muslim', 'Just Muslim', 'Bright', 'Electrical and Electronic Engineering', NULL, 'Businessmen', NULL, 'Never Married', '5 Feet 6 Inch', '62 KG', 'Female', NULL, NULL, NULL, 'online', '1993-10-22', 0, 2, NULL, NULL, 1, 317, 0, NULL, 'Uz5d0ThNnm8N7cLTORZH0jI3jVavWmREB7rfzzl7Xha7ecbC52gOrO3F81UW', '2021-03-03 13:32:15', '2021-03-04 14:20:11', NULL, NULL),
(318, 'Roksana Islam', '01673872547', NULL, 'nzamanctg@gmail.com', '$2y$10$Y1ad7SmoKr/m79B3Fqj4IOl8awHkfeHkd.JLEbLAeiKYtumC0JWBG', NULL, 1, 1, 'Female', 'Bangladesh', NULL, 'Agrabad Commercial Area, Chattogram, Bangladesh', 'Chittagong', 'Chittagong', '4020', '22.3244537', '91.81172319999999', 'Brother', 'Muslim', 'Sunni', 'Fair', 'Master of Business Administration', NULL, 'Citizen', NULL, 'Never Married', '5 Feet 3 Inch', '53 KG', 'Male', NULL, NULL, NULL, 'online', '1988-02-15', 0, 2, NULL, NULL, 1, 318, 0, NULL, NULL, '2021-03-06 06:06:52', '2021-03-06 07:35:07', NULL, NULL),
(319, 'Abul Kalam', '01759892354', NULL, 'kalam203455@gmail.com', '$2y$10$/xVfuPRNypJVgDvkar8iSeGzV6WEr65A6JhHlX9znbOcghc4S5JES', NULL, 1, 0, 'Male', 'Bangladesh', NULL, 'Jashore, Bangladesh', 'Khulna', 'Jashore', '7400', '23.1777682', '89.1801225', 'Self', 'Muslim', 'Sunni', 'Bright', 'Master of Political Science', NULL, 'BCS Non-Cadre', NULL, 'Never Married', '5 Feet 6 Inch', '64 KG', 'Female', NULL, NULL, NULL, 'online', '1992-04-03', 0, 3, NULL, NULL, 1, 319, 0, NULL, NULL, '2021-03-07 04:35:18', '2021-03-07 04:42:36', NULL, NULL),
(320, 'Rashedul H Shimul', '01711403595', NULL, 'rshimul@yahoo.com', '$2y$10$uv1RyksBzKMsC4ob3rhBnuEgOsg48H5RnNizRbYEdBn0EU.TBy4T6', NULL, 1, 0, 'Male', 'Bangladesh', NULL, 'Cumilla, Bangladesh', 'Chittagong', 'Cumilla', '3500', '23.4606574', '91.1809065', 'Self', 'Muslim', 'Hanafi', 'Ten', 'Master of Business Administration', NULL, 'Businessmen', NULL, 'Divorced', '5 Feet 10 Inch', '78 KG', 'Female', NULL, NULL, NULL, 'online', '1977-10-25', 0, 5, NULL, NULL, 1, 320, 0, NULL, NULL, '2021-03-08 05:43:40', '2021-03-08 05:58:35', NULL, NULL),
(321, 'ehoshan', '01778849298', NULL, 'aliyeasin1984@yahoo.com', '$2y$10$oNTTkaVu1iuVbD7iAkzzpusXX6Hs1Ujgy/iatfZNlYKuhvjCXdPKG', NULL, 1, 0, 'Male', 'Bangladesh', NULL, 'Dhaka, Bangladesh', 'dhaka', 'dhaka', '1212', '23.810332', '90.4125181', 'Friend', 'Muslim', 'Sunni', 'Fair', 'Higher Secondary Certificate', NULL, 'Industrialists', NULL, 'Widowed', '5 Feet 3 Inch', '55 KG', 'Female', NULL, NULL, NULL, 'online', '1984-11-20', 0, 20, NULL, NULL, 1, 321, 0, NULL, NULL, '2021-03-09 03:49:59', '2021-03-09 04:03:48', NULL, NULL),
(322, 'Md Nayem Hossain', '01762-000016', NULL, 'mnayem971@gmail.com', '$2y$10$lEM/WbvBoqUIfo/0SMtTIupICG0YtRf3fOBdIPXprKIIKs5y0Kqiu', NULL, 1, 1, 'Male', 'Bangladesh', NULL, 'Banglamotors, Dhaka 1205, Bangladesh', 'Dhaka', 'Dhaka', '1000', '23.7467942', '90.39337789999999', 'Self', 'Muslim', 'Hanafi', 'Bright', 'Department of Nutrition and Food Engineering', NULL, 'Engineer', NULL, 'Never Married', '5 Feet 6 Inch', '60 KG', 'Male', NULL, NULL, NULL, 'online', '1996-12-16', 0, 1, NULL, NULL, 1, 322, 0, NULL, NULL, '2021-03-10 03:30:08', '2021-03-10 05:49:05', NULL, NULL),
(323, 'Hilda Townsend', NULL, NULL, 'posudoto@mailinator.com', '$2y$10$2lcNrzf5RwN7aVVUchShKuIdTePK0xJ03l1cGDDsrAba1Odfl6BZi', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-03-11 00:28:43', '2021-03-11 01:03:53', NULL, NULL),
(324, 'MD Zakaria Munna', '01725347977', NULL, 'zakariyamunna.01725@gmail.com', '$2y$10$5hDITJG/oJ.sGAtKO9bDye3BKugF7s90PLviNaLY3n/MO4J2cgsoi', NULL, 1, 0, 'Male', 'Bangladesh', NULL, 'Uttara, Dhaka, Bangladesh', 'Dhaka', 'Dhaka', '1230', '23.8758547', '90.3795438', 'Self', 'Muslim', 'Just Muslim', 'Bright', 'Computer science Engineering', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 7 Inch', '63 KG', 'Female', NULL, NULL, NULL, 'online', '1998-12-05', 0, 2, NULL, NULL, 1, 324, 0, NULL, NULL, '2021-03-16 09:32:56', '2021-03-16 10:05:32', NULL, NULL),
(325, 'Dr. K. M. Arman', NULL, NULL, 'k.m.arman@gmail.com', '$2y$10$ue0RwyAXCmMWLArmVS.bpOqd8vo3hPkaRXlvhcInzLue09g25cnm6', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'online', NULL, 0, 0, NULL, NULL, 1, NULL, 0, NULL, NULL, '2021-03-16 10:55:35', '2021-03-16 10:57:43', NULL, NULL),
(326, 'Md Easin Hossain', '01643301171', NULL, 'ahmedeasin111@gmail.com', '$2y$10$h.oCiZ4o4J5Q6fHtg5ZR6.1CG727T6rH1uRqhjx/xPO3tV06/H8Uu', NULL, 1, 1, 'Male', 'Bangladesh', NULL, 'Savar Union, Bangladesh', 'Dhaka', 'Savar', '1349', '23.8478798', '90.2575646', 'Self', 'Muslim', 'Sunni', 'Fair', 'High School Pass', NULL, 'Running Student', NULL, 'Never Married', '5 Feet 4 Inch', '68 KG', 'Female', NULL, NULL, NULL, 'online', '2000-03-05', 0, 5, NULL, NULL, 1, 326, 0, NULL, 'wiVyMHmdGq3n1u8ejBdpEasqjGe1fzuRvsd79424OK4t2eXf7BxZVFEcWYBl', '2021-03-17 23:50:50', '2021-03-20 00:09:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT 0,
  `user_second_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `user_id`, `accepted`, `user_second_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 0, 26, '2019-05-19 20:53:51', '2019-05-19 20:53:51', NULL),
(2, 16, 0, 84, '2019-05-21 19:21:43', '2019-05-21 19:21:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_education_records`
--

CREATE TABLE `user_education_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `passed_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passed_grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passed_department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_from` date DEFAULT NULL,
  `year_to` date DEFAULT NULL,
  `passed_year` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_education_records`
--

INSERT INTO `user_education_records` (`id`, `user_id`, `passed_degree`, `passed_grade`, `passed_department`, `organization_name`, `organization_address`, `organization_type`, `year_from`, `year_to`, `passed_year`, `created_at`, `updated_at`) VALUES
(6, 16, 'Msc in CSE', '5.00', 'Science', 'Dhaka International University', 'Dhanmondi, Dhaka', 'University', '2011-01-01', '2015-01-01', '2015-01-01', '2019-01-27 17:10:46', '2019-01-27 17:10:46'),
(8, 1, 'SSC', 'A+', 'Science', 'M B L N High School', 'Meah Bazar 14gram Comilla', 'High School', '2006-01-01', '2007-01-01', '2007-01-01', '2019-01-27 17:26:44', '2019-01-27 17:26:44'),
(9, 30, 'SSC', '3.5 out of 4', 'Science', 'M B L N High School', 'Meah Bazar 14gram Comilla', 'High School', '2017-01-01', '2019-01-01', '2019-01-01', '2019-01-29 05:22:42', '2019-01-29 05:22:42'),
(10, 12, 'SSC', 'A+', 'Science', 'M B L N High School', 'Meah Bazar 14gram Comilla', 'High School', '2007-01-01', '2008-01-01', '2009-01-01', '2019-01-30 20:27:55', '2019-01-30 20:27:55'),
(11, 34, 'B.sc in Computer science Engineering', '5.00', 'Computer science Engineering', 'K.M High school', 'Munshiganj Polytechnic Institute', 'University', '2017-01-01', '2018-01-01', '2019-01-01', '2019-02-02 18:15:33', '2019-02-02 18:15:33'),
(12, 37, 'Msc', '3.8', 'Environmental Science', 'State University of Bangladesh', 'State University of Bangladesh', 'University', '2012-01-01', '2014-01-01', '2014-01-01', '2019-02-07 03:45:32', '2019-02-07 03:45:32'),
(13, 40, 'Civil Engineering', '3.75', 'Civil Engineering', 'Suresh Gyan Vihar University', 'India', 'University', '2013-01-01', '2017-01-01', '2017-01-01', '2019-02-11 20:58:40', '2019-02-11 20:58:40'),
(14, 41, 'BBA (MIS)', NULL, 'BBA (MIS)', 'East West University', 'Mohakhali', 'University', '1999-01-01', '2004-01-01', '2004-01-01', '2019-02-15 19:40:36', '2019-02-15 19:40:36'),
(15, 42, 'MSC Aplite', '3.80', 'Physics', 'Dhaka University', 'Dhaka University', 'University', '2013-01-01', '2014-01-01', '2013-01-01', '2019-02-16 18:55:23', '2019-02-16 18:55:23'),
(16, 42, 'MSC Aplite', '3.80', 'Physics', 'Dhaka University', 'Dhaka University', 'University', '2013-01-01', '2014-01-01', '2013-01-01', '2019-02-16 18:55:37', '2019-02-16 18:55:37'),
(17, 44, 'M.Sc in Computer Science', '3.65 out of 4', 'Computer', 'University of Glasgow', 'Scotland,England', 'University', '2009-01-01', '2015-01-01', '2015-01-01', '2019-02-18 02:36:32', '2019-02-18 02:36:32'),
(18, 45, 'Msc in Telecom', '3.48', 'Telcom', 'University Of Technology Sydney', 'Sydney Australia', 'University', '2010-01-01', '2009-01-01', '2011-01-01', '2019-02-18 16:42:44', '2019-02-18 16:42:44'),
(19, 48, 'EEE', '3.49', 'Engineering', 'Rajshahi University of Engineering and Technology', 'Rajshahi University of Engineering and Technology', 'University', '2005-01-01', '2010-01-01', '2010-01-01', '2019-02-23 17:34:54', '2019-02-23 17:34:54'),
(20, 48, 'EEE', '3.49', 'Engineering', 'Rajshahi University of Engineering and Technology', 'Rajshahi University of Engineering and Technology', 'University', '2005-01-01', '2010-01-01', '2010-01-01', '2019-02-23 17:34:54', '2019-02-23 17:34:54'),
(21, 49, 'M.Com in Accounting', '2nd Class', 'Accounting', 'Jagannath University', 'Dhaka', 'University', '2004-01-01', '2005-01-01', '2008-01-01', '2019-02-25 18:32:27', '2019-02-25 18:32:27'),
(23, 50, 'BBA in Finance & Banking', '3.64 out of 4', 'Commerce', 'International University of Business Agriculture and Technology', 'Sector#10, Uttara Model Town, Dhaka', 'University', '2011-01-01', '2016-01-01', '2016-01-01', '2019-02-27 21:46:27', '2019-02-27 21:46:27'),
(24, 51, 'BSc in Software Engineering', '3.56', 'Software Engineering', 'University of Dhaka', 'Nilkhet Rd, Dhaka 1000', 'University', '2013-01-01', '2017-01-01', '2017-01-01', '2019-03-09 02:17:24', '2019-03-09 02:17:24'),
(25, 2, 'SSC', '3.5 out of 4', 'Science', 'M B L N High School', '22 Gausul Azam Ave, Dhaka 1230', 'College', '2018-01-01', '2019-01-01', '2019-01-01', '2019-03-17 10:27:17', '2019-03-17 10:27:17'),
(26, 53, 'BSC', '3.40', 'BSC', 'Primeasia University', 'Star Tower, Ground Floor, 12 Kemal Ataturk Avenue Banani, Dhaka 1213', 'University', '2016-01-01', '2019-01-01', '2019-01-01', '2019-03-19 05:03:39', '2019-03-19 05:03:39'),
(27, 53, 'BSC', '3.40', 'BSC', 'Primeasia University', 'Star Tower, Ground Floor, 12 Kemal Ataturk Avenue Banani, Dhaka 1213', 'University', '2016-01-01', '2019-01-01', '2019-01-01', '2019-03-19 05:03:47', '2019-03-19 05:03:47'),
(28, 4, 'd', '4', 'e', 'a', 'b', 'High School', '2017-01-01', '2018-01-01', '2019-01-01', '2019-03-19 16:46:19', '2019-03-19 16:46:19'),
(30, 55, 'Govt. Bangla college', 'A+(Golden)', NULL, 'Rangpur High School', 'Govt. Bangla College,Mirpur', 'University', '2011-01-01', '2016-01-01', '2017-01-01', '2019-03-22 17:15:17', '2019-03-22 17:15:17'),
(32, 56, 'BBA', '2.78 ouf of 4', 'Marketing', 'Jahangirnagar university', 'savar, dhaka,1342, Bangladesh.', 'University', '2013-01-01', '2017-01-01', '2017-01-01', '2019-03-23 04:53:32', '2019-03-23 04:53:32'),
(33, 56, 'BBA', '2.78 ouf of 4', 'Marketing', 'Jahangirnagar university', 'savar, dhaka,1342, Bangladesh.', 'University', '2013-01-01', '2017-01-01', '2017-01-01', '2019-03-23 04:53:39', '2019-03-23 04:53:39'),
(34, 57, 'Diploma in Automobile Tecnology', 'A+', 'Automobile Engineering', 'Dhaka Polytechnic Institute', 'Tejgaon', 'College', '1995-01-01', '1998-01-01', '1998-01-01', '2019-03-23 22:29:09', '2019-03-23 22:29:09'),
(35, 60, 'Bachelor of Science', '3.5/4.0', 'Biological Sciences', 'University of Connecticut', '855 Bolton Road', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2019-04-01 13:21:14', '2019-04-01 13:21:14'),
(36, 61, 'hjhg', '3.5', 'uyif', 'nnnn', 'jhjj', 'University', '2016-01-01', '2016-01-01', '2018-01-01', '2019-04-01 15:54:30', '2019-04-01 15:54:30'),
(37, 62, 'Bachelor of information Systems', '4', 'IT', 'Australian Catholic University', 'Melbourne VIC Australia', 'University', '2004-01-01', '2007-01-01', '2007-01-01', '2019-04-02 14:16:22', '2019-04-02 14:16:22'),
(38, 63, 'UAP EEE', '3.2', 'UAP EEE', 'UAP EEE', 'UAP EEE', 'College', '2012-01-01', '2017-01-01', '2018-01-01', '2019-04-07 14:36:43', '2019-04-07 14:36:43'),
(39, 64, 'EEE', '3.20', 'EEE', 'IUB', 'dhaka', 'University', '2009-01-01', '2013-01-01', '2017-01-01', '2019-04-07 14:55:30', '2019-04-07 14:55:30'),
(40, 65, 'Bachelor', NULL, 'financial', 'Changchun University of Technology', '2055 Yan\'an Avenue, Changchun City, Jilin Province', 'University', '2012-01-01', '2008-01-01', '2019-01-01', '2019-04-08 17:57:10', '2019-04-08 17:57:10'),
(41, 32, 'MA in Islamic Studies', '2nd class', 'Arts', 'Dhaka College', 'Mirpur Road, New Market, Dhanmondi, Dhaka-1205', 'College', '1998-01-01', '2000-01-01', '2002-01-01', '2019-04-19 00:38:14', '2019-04-19 00:38:14'),
(42, 32, 'MA in Islamic Studies', '2nd class', 'Arts', 'Dhaka College', 'Mirpur Road, New Market, Dhanmondi, Dhaka-1205', 'College', '1998-01-01', '2000-01-01', '2002-01-01', '2019-04-19 00:38:14', '2019-04-19 00:38:14'),
(43, 74, 'diploma', '3.20', 'computer', 'Thakurgaon Polytecnic Institute', 'Thakurgaon sadar upozila', 'College', '2016-01-01', '2016-01-01', '2019-01-01', '2019-04-30 06:37:44', '2019-04-30 06:37:44'),
(44, 75, 'B.Sc in Information Technology', '1st class', 'Science', 'Institute of Engineering and Management', 'Saltlake, Sector-V, Kolkata-700091, India', 'College', '2012-01-01', '2016-01-01', '2016-01-01', '2019-05-01 16:30:17', '2019-05-01 16:30:17'),
(47, 77, 'Honours', NULL, 'Mathematics', 'Nawabganj govt collage', 'Chapainawabganj, Rajshahi', 'College', '2013-01-01', '2014-01-01', '2018-01-01', '2019-05-04 22:52:58', '2019-05-04 22:52:58'),
(48, 77, 'Honours', NULL, 'Mathematics', 'Nawabganj govt collage', 'Chapainawabganj, Rajshahi', 'College', '2013-01-01', '2014-01-01', '2018-01-01', '2019-05-04 22:53:05', '2019-05-04 22:53:05'),
(49, 82, 'Masters', '2nd Class', 'Accounting', 'Govt. MM College', 'Jessore', 'University', '2002-01-01', '2003-01-01', '2003-01-01', '2019-05-11 21:17:31', '2019-05-11 21:17:31'),
(50, 83, 'BSS', NULL, 'SOCIAL WORK', 'GOVT TULARAM COLLEGE', 'NARAYANGONG', 'College', '2015-01-01', '2019-01-01', '2019-01-01', '2019-05-13 00:59:11', '2019-05-13 00:59:11'),
(51, 83, 'BSS', NULL, 'SOCIAL WORK', 'GOVT TULARAM COLLEGE', 'NARAYANGONG', 'College', '2015-01-01', '2019-01-01', '2019-01-01', '2019-05-13 00:59:17', '2019-05-13 00:59:17'),
(52, 83, 'BSS', NULL, 'SOCIAL WORK', 'GOVT TULARAM COLLEGE', 'NARAYANGONG', 'College', '2015-01-01', '2019-01-01', '2019-01-01', '2019-05-13 00:59:18', '2019-05-13 00:59:18'),
(53, 83, 'BSS', NULL, 'SOCIAL WORK', 'GOVT TULARAM COLLEGE', 'NARAYANGONG', 'College', '2015-01-01', '2019-01-01', '2019-01-01', '2019-05-13 00:59:32', '2019-05-13 00:59:32'),
(54, 83, 'BSS', NULL, 'SOCIAL WORK', 'GOVT TULARAM COLLEGE', 'NARAYANGONG', 'College', '2015-01-01', '2019-01-01', '2019-01-01', '2019-05-13 00:59:33', '2019-05-13 00:59:33'),
(55, 83, 'BSS', NULL, 'SOCIAL WORK', 'GOVT TULARAM COLLEGE', 'NARAYANGONG', 'College', '2015-01-01', '2019-01-01', '2019-01-01', '2019-05-13 00:59:36', '2019-05-13 00:59:36'),
(56, 85, 'BBA Honours management', '3.10', 'Management', 'Government shaheed Asad college', 'Narsingdi Upzila shibpur main town', 'University', '2018-01-01', '2018-01-01', '2018-01-01', '2019-05-24 02:52:41', '2019-05-24 02:52:41'),
(57, 86, 'MBA', '3.61', 'MBA', 'Dhaka university', 'dhaka', 'University', '2013-01-01', '2017-01-01', '2017-01-01', '2019-05-26 03:11:38', '2019-05-26 03:11:38'),
(58, 86, 'MBA', '3.61', 'MBA', 'Dhaka university', 'dhaka', 'University', '2013-01-01', '2017-01-01', '2017-01-01', '2019-05-26 03:11:45', '2019-05-26 03:11:45'),
(59, 88, 'MBS-Masters', '2nd Class', 'Accounting', 'National University (Gov. Commerce College,Chittagon)', 'Agrabad,Chittagong', 'University', '2009-01-01', '2010-01-01', '2010-01-01', '2019-06-10 08:11:53', '2019-06-10 08:11:53'),
(60, 89, 'H.S.C', NULL, NULL, 'Sylhet govt.collage', 'Sylhet govt. Collage,sylhet', 'College', '2000-01-01', '1999-01-01', '2000-01-01', '2019-06-11 07:01:55', '2019-06-11 07:01:55'),
(61, 91, 'Hsc', NULL, 'Arts', 'Alatunnesa', 'Badda', 'High School', '2004-01-01', '2017-01-01', '2018-01-01', '2019-06-14 20:28:26', '2019-06-14 20:28:26'),
(62, 91, 'Hsc', NULL, 'Arts', 'Alatunnesa', 'Badda', 'High School', '2004-01-01', '2017-01-01', '2018-01-01', '2019-06-14 20:28:30', '2019-06-14 20:28:30'),
(63, 92, 'Hsc', NULL, 'Arts', 'Lalmatia housing society college', 'Lalmatia', 'College', '2014-01-01', '2016-01-01', '2016-01-01', '2019-06-16 21:58:14', '2019-06-16 21:58:14'),
(69, 93, 'Chartered Accountancy', 'Pass', 'Accounting & Finance', 'ACCA', 'Association of Chartered Certified Accountants', 'University', '2012-01-01', '2018-01-01', '2018-01-01', '2019-06-18 05:03:50', '2019-06-18 05:03:50'),
(70, 94, 'Bachelor of Architecture', 'on going', 'Architechture', 'Chittagong University of Engineering & Technology', 'Chottogram', 'University', '2016-01-01', '2019-01-01', '2019-01-01', '2019-06-24 18:31:09', '2019-06-24 18:31:09'),
(71, 95, 'Master of science', NULL, NULL, 'University of Chittagong', 'Hathazari', 'University', '2012-01-01', '2018-01-01', '2018-01-01', '2019-06-25 21:00:30', '2019-06-25 21:00:30'),
(72, 95, 'Master of science', NULL, NULL, 'University of Chittagong', 'Hathazari', 'University', '2012-01-01', '2018-01-01', '2018-01-01', '2019-06-25 21:00:30', '2019-06-25 21:00:30'),
(73, 95, 'Master of science', NULL, NULL, 'University of Chittagong', 'Hathazari', 'University', '2012-01-01', '2018-01-01', '2018-01-01', '2019-06-25 21:00:52', '2019-06-25 21:00:52'),
(74, 96, 'Diploma', '3.14', 'Electrical', 'Kushtia polytechnic institute', 'Kushtia', 'College', '2011-01-01', '2016-01-01', '2016-01-01', '2019-07-01 12:46:41', '2019-07-01 12:46:41'),
(75, 96, 'Diploma', '3.14', 'Electrical', 'Kushtia polytechnic institute', 'Kushtia', 'College', '2011-01-01', '2016-01-01', '2016-01-01', '2019-07-01 12:46:42', '2019-07-01 12:46:42'),
(76, 96, 'Diploma', '3.14', 'Electrical', 'Kushtia polytechnic institute', 'Kushtia', 'College', '2011-01-01', '2016-01-01', '2016-01-01', '2019-07-01 12:46:42', '2019-07-01 12:46:42'),
(77, 96, 'Diploma', '3.14', 'Electrical', 'Kushtia polytechnic institute', 'Kushtia', 'College', '2011-01-01', '2016-01-01', '2016-01-01', '2019-07-01 12:46:51', '2019-07-01 12:46:51'),
(78, 96, 'Diploma', '3.14', 'Electrical', 'Kushtia polytechnic institute', 'Kushtia', 'College', '2011-01-01', '2016-01-01', '2016-01-01', '2019-07-01 12:47:22', '2019-07-01 12:47:22'),
(79, 96, 'Diploma', '3.14', 'Electrical', 'Kushtia polytechnic institute', 'Kushtia', 'College', '2011-01-01', '2016-01-01', '2016-01-01', '2019-07-01 12:47:37', '2019-07-01 12:47:37'),
(80, 97, 'M.B.B.S. & D.A.', NULL, 'Anesthesia', 'Holy Family Red Crescent Medical College', '1 Eskaton Garden Rd, Dhaka 1000', 'College', '2003-01-01', '2008-01-01', '2009-01-01', '2019-07-06 01:10:22', '2019-07-06 01:10:22'),
(81, 98, 'Gpa 3.50', NULL, NULL, 'MD.sohel rana', 'Dhaka savar, Dhaka savar', 'College', '2018-01-01', '2019-01-01', '2019-01-01', '2019-07-07 15:17:10', '2019-07-07 15:17:10'),
(82, 98, 'Gpa 3.50', NULL, NULL, 'MD.sohel rana', 'Dhaka savar, Dhaka savar', 'College', '2018-01-01', '2019-01-01', '2019-01-01', '2019-07-07 15:17:17', '2019-07-07 15:17:17'),
(83, 98, 'Gpa 3.50', NULL, NULL, 'MD.sohel rana', 'Dhaka savar, Dhaka savar', 'College', '2018-01-01', '2019-01-01', '2019-01-01', '2019-07-07 15:17:23', '2019-07-07 15:17:23'),
(84, 98, 'Gpa 3.50', NULL, NULL, 'MD.sohel rana', 'Dhaka savar, Dhaka savar', 'College', '2018-01-01', '2019-01-01', '2019-01-01', '2019-07-07 15:17:25', '2019-07-07 15:17:25'),
(85, 98, 'Gpa 3.50', NULL, NULL, 'MD.sohel rana', 'Dhaka savar, Dhaka savar', 'College', '2018-01-01', '2019-01-01', '2019-01-01', '2019-07-07 15:17:26', '2019-07-07 15:17:26'),
(86, 98, 'Gpa 3.50', NULL, NULL, 'MD.sohel rana', 'Dhaka savar, Dhaka savar', 'College', '2018-01-01', '2019-01-01', '2019-01-01', '2019-07-07 15:17:26', '2019-07-07 15:17:26'),
(87, 98, 'Gpa 3.50', NULL, NULL, 'MD.sohel rana', 'Dhaka savar, Dhaka savar', 'College', '2018-01-01', '2019-01-01', '2019-01-01', '2019-07-07 15:17:26', '2019-07-07 15:17:26'),
(88, 99, 'BBA', '3.8/4', 'Accounting', 'Jagannath university', 'Victoria park Dhaka', 'University', '2005-01-01', '2010-01-01', '2010-01-01', '2019-07-07 20:40:04', '2019-07-07 20:40:04'),
(89, 99, 'BBA', '3.8/4', 'Accounting', 'Jagannath university', 'Victoria park Dhaka', 'University', '2005-01-01', '2010-01-01', '2010-01-01', '2019-07-07 20:40:09', '2019-07-07 20:40:09'),
(90, 101, 'M.Sc. in Mathematics', 'B.Sc.-CGPA 3.83 out of 4, M.Sc.-CGPA 3.93 out of 4', 'Science', 'University of Rajshahi', 'University of Rajshahi', 'University', '2012-01-01', '2018-01-01', '2018-01-01', '2019-07-13 21:55:34', '2019-07-13 21:55:34'),
(91, 102, 'MBA', '3', 'Business', 'Rupayan group', 'Uttara', 'University', '2010-01-01', '2012-01-01', '2012-01-01', '2019-07-14 09:52:21', '2019-07-14 09:52:21'),
(92, 102, 'MBA', '3', 'Business', 'Rupayan group', 'Uttara', 'University', '2010-01-01', '2012-01-01', '2012-01-01', '2019-07-14 09:52:27', '2019-07-14 09:52:27'),
(93, 102, 'MBA', '3', 'Business', 'Rupayan group', 'Uttara', 'University', '2010-01-01', '2012-01-01', '2012-01-01', '2019-07-14 09:52:29', '2019-07-14 09:52:29'),
(94, 102, 'MBA', '3', 'Business', 'Rupayan group', 'Uttara', 'University', '2010-01-01', '2012-01-01', '2012-01-01', '2019-07-14 09:52:29', '2019-07-14 09:52:29'),
(95, 102, 'MBA', '3', 'Business', 'Rupayan group', 'Uttara', 'University', '2010-01-01', '2012-01-01', '2012-01-01', '2019-07-14 09:52:29', '2019-07-14 09:52:29'),
(96, 102, 'MBA', '3', 'Business', 'Rupayan group', 'Uttara', 'University', '2010-01-01', '2012-01-01', '2012-01-01', '2019-07-14 09:52:29', '2019-07-14 09:52:29'),
(97, 104, 'honours', '3.10', NULL, 'jagannath university', 'puran dhaka', 'University', '2017-01-01', '2017-01-01', '2017-01-01', '2019-07-21 18:44:43', '2019-07-21 18:44:43'),
(98, 104, 'honours', '3.10', NULL, 'jagannath university', 'puran dhaka', 'University', '2017-01-01', '2017-01-01', '2017-01-01', '2019-07-21 18:44:51', '2019-07-21 18:44:51'),
(99, 104, 'honours', '3.10', NULL, 'jagannath university', 'puran dhaka', 'University', '2012-01-01', '2017-01-01', '2017-01-01', '2019-07-21 18:45:04', '2019-07-21 18:45:04'),
(100, 104, 'honours', '3.10', NULL, 'jagannath university', 'puran dhaka', 'University', '2012-01-01', '2017-01-01', '2017-01-01', '2019-07-21 18:45:06', '2019-07-21 18:45:06'),
(101, 106, 'LLB', '3.5', 'Law', 'University of london', 'London', 'University', '2010-01-01', '2011-01-01', '2011-01-01', '2019-07-23 06:27:30', '2019-07-23 06:27:30'),
(102, 106, 'LLB', '3.5', 'Law', 'University of london', 'London', 'University', '2010-01-01', '2011-01-01', '2011-01-01', '2019-07-23 06:27:49', '2019-07-23 06:27:49'),
(103, 107, 'Honors', '2nd Class', 'Political Sceince', 'Govt. P.C College,Bagerhat', 'Govt. P.C College,Bagerhat', 'University', '2011-01-01', '2011-01-01', '2010-01-01', '2019-07-23 23:21:04', '2019-07-23 23:21:04'),
(104, 108, 'B.Sc in Apparel manufacture& technology', '3.00', 'Science', 'BGMEA University of fashion&technology', 'Uttara,Dhaka', 'University', '2013-01-01', '2017-01-01', '2017-01-01', '2019-07-29 00:58:46', '2019-07-29 00:58:46'),
(106, 109, 'LL.B', '3.42 out of 4', 'Arts', 'European University of Bangladesh', 'Gaptoli Dhaka', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2019-07-30 06:07:20', '2019-07-30 06:07:20'),
(107, 110, 'Kamil', '3.65 out of 5', 'Hadis', 'Sonaimuri Kamil Madrasa', 'Sonaimuri, Noakhali', 'Madrasha', '2014-01-01', '2012-01-01', '2014-01-01', '2019-08-04 18:01:04', '2019-08-04 18:01:04'),
(109, 111, 'MBA', '3.15/4', 'Finance', 'North South University', 'Basundhara R/A, Dhaka', 'University', '2016-01-01', '2018-01-01', '2019-01-01', '2019-08-04 19:54:19', '2019-08-04 19:54:19'),
(110, 111, 'MBA', '3.15/4', 'Finance', 'North South University', 'Basundhara R/A, Dhaka', 'University', '2016-01-01', '2018-01-01', '2019-01-01', '2019-08-04 19:54:24', '2019-08-04 19:54:24'),
(111, 112, 'BSS', '3.76', NULL, 'National Institute of Engineering Technology', 'Panthapath, Dhaka', 'College', '2016-01-01', '2019-01-01', '2019-01-01', '2019-08-05 04:16:48', '2019-08-05 04:16:48'),
(112, 112, 'BSS', '3.76', NULL, 'National Institute of Engineering Technology', 'Panthapath, Dhaka', 'College', '2016-01-01', '2019-01-01', '2019-01-01', '2019-08-05 04:16:57', '2019-08-05 04:16:57'),
(113, 115, 'MBBS', NULL, 'Medical science', 'Marine city medical college', 'Chandranagar,textile,chattogram', 'College', '2014-01-01', '2019-01-01', '2019-01-01', '2019-08-06 23:52:25', '2019-08-06 23:52:25'),
(114, 115, 'MBBS', NULL, 'Medical science', 'Marine city medical college', 'Chandranagar,textile,chattogram', 'College', '2014-01-01', '2019-01-01', '2019-01-01', '2019-08-06 23:52:30', '2019-08-06 23:52:30'),
(115, 116, 'LL.M', '3.28', 'Law', 'University of Development Alternative', 'Dhanmondi, Dhaka, Bangladesh', 'University', '2012-01-01', '2012-01-01', '2013-01-01', '2019-08-07 17:48:13', '2019-08-07 17:48:13'),
(116, 118, 'B.Com.', 'Second Class', 'Commerce', 'Narail Victoria College', 'Narail', 'College', '1981-01-01', '1983-01-01', '1983-01-01', '2019-08-10 20:15:44', '2019-08-10 20:15:44'),
(117, 119, 'Masters of Business Administration.', '3.26', 'Human Resource Management', 'American International University-Bangladesh', 'Kuratoli, Dhaka.', 'University', '2012-01-01', '2014-01-01', '2014-01-01', '2019-08-13 07:06:11', '2019-08-13 07:06:11'),
(118, 119, 'Masters of Business Administration.', '3.26', 'Human Resource Management', 'American International University-Bangladesh', 'Kuratoli, Dhaka.', 'University', '2012-01-01', '2014-01-01', '2014-01-01', '2019-08-13 07:06:24', '2019-08-13 07:06:24'),
(119, 120, 'Degree Fast year', NULL, 'Degree Fast year', 'Kurigram government College', 'Kurigram government College', 'College', '2015-01-01', '2018-01-01', '2019-01-01', '2019-08-14 23:04:46', '2019-08-14 23:04:46'),
(120, 120, 'Degree Fast year', NULL, 'Degree Fast year', 'Kurigram government College', 'Kurigram government College', 'College', '2015-01-01', '2018-01-01', '2019-01-01', '2019-08-14 23:04:47', '2019-08-14 23:04:47'),
(121, 121, 'SSC :2014', 'Ssc:4.31 Hsc:3.75', 'HSC:2016', 'Manikgonj Govt Debendra college', 'Manikgonj Govt Debendra college', 'College', '2017-01-01', '2019-01-01', '2019-01-01', '2019-08-18 14:51:19', '2019-08-18 14:51:19'),
(122, 122, 'Honors & Masters in political Science', NULL, NULL, 'Govt Titumir College', 'Mohakhali, Dhaka', 'University', '2006-01-01', '2012-01-01', '2013-01-01', '2019-08-19 01:40:36', '2019-08-19 01:40:36'),
(123, 123, 'MBA', '3.18', NULL, 'Eastern University', 'Eastern University', 'University', '2010-01-01', '2011-01-01', '2011-01-01', '2019-08-19 06:14:23', '2019-08-19 06:14:23'),
(124, 124, 'BSS', '4.00', NULL, 'National', 'Ruhea Thakurgaon', 'University', '2015-01-01', '2017-01-01', '2016-01-01', '2019-08-28 15:25:04', '2019-08-28 15:25:04'),
(125, 126, 'Bibv', 'Gpa', 'Bba', 'Dhaka University', 'Dhaka University', 'University', '2003-01-01', '1999-01-01', '1997-01-01', '2019-09-01 07:00:42', '2019-09-01 07:00:42'),
(126, 126, 'Bibv', 'Gpa', 'Bba', 'Dhaka University', 'Dhaka University', 'University', '2003-01-01', '1999-01-01', '1997-01-01', '2019-09-01 07:00:46', '2019-09-01 07:00:46'),
(127, 126, 'Bibv', 'Gpa', 'Bba', 'Dhaka University', 'Dhaka University', 'University', '2003-01-01', '1999-01-01', '1997-01-01', '2019-09-01 07:01:06', '2019-09-01 07:01:06'),
(128, 127, 'Fazil', NULL, 'History', 'Sagardi Islamia kamil madrasha', 'Barisal Bangladesh', 'Madrasha', '2015-01-01', '2018-01-01', '2018-01-01', '2019-09-08 21:37:03', '2019-09-08 21:37:03'),
(129, 127, 'Fazil', NULL, 'History', 'Sagardi Islamia kamil madrasha', 'Barisal Bangladesh', 'Madrasha', '2015-01-01', '2018-01-01', '2018-01-01', '2019-09-08 21:37:11', '2019-09-08 21:37:11'),
(130, 128, 'no', NULL, 'no', 'Tufik Ahmmed Tarek', 'Chandina Cumilla Bangladesh', 'High School', '2005-01-01', '2005-01-01', '2012-01-01', '2019-09-09 22:41:47', '2019-09-09 22:41:47'),
(131, 130, '2017', NULL, '3.50', 'Mangrove Institute Scince and technology', 'Khulna', 'College', '2013-01-01', '2013-01-01', '2017-01-01', '2019-09-18 17:13:43', '2019-09-18 17:13:43'),
(132, 130, '2017', NULL, '3.50', 'Mangrove Institute Scince and technology', 'Khulna', 'College', '2013-01-01', '2017-01-01', '2017-01-01', '2019-09-18 17:14:02', '2019-09-18 17:14:02'),
(133, 130, '2017', NULL, '3.50', 'Mangrove Institute Scince and technology', 'Khulna', 'College', '2013-01-01', '2017-01-01', '2017-01-01', '2019-09-18 17:14:04', '2019-09-18 17:14:04'),
(134, 130, '2017', NULL, '3.50', 'Mangrove Institute Scince and technology', 'Khulna', 'College', '2013-01-01', '2017-01-01', '2017-01-01', '2019-09-18 17:14:05', '2019-09-18 17:14:05'),
(135, 130, '2017', NULL, '3.50', 'Mangrove Institute Scince and technology', 'Khulna', 'College', '2013-01-01', '2017-01-01', '2017-01-01', '2019-09-18 17:14:10', '2019-09-18 17:14:10'),
(136, 130, '2017', NULL, '3.50', 'Mangrove Institute Scince and technology', 'Khulna', 'College', '2013-01-01', '2017-01-01', '2017-01-01', '2019-09-18 17:14:31', '2019-09-18 17:14:31'),
(137, 131, '4.1', '4.1', NULL, 'D.t.m', 'Borhanuddin, kunjerhat', 'High School', '2006-01-01', '2009-01-01', '2010-01-01', '2019-09-20 23:10:20', '2019-09-20 23:10:20'),
(138, 132, 'MBA', '3.2', 'FINANCE', 'PREMIER UNIVRESITY', 'PREMIER UNIVERSITY', 'University', '2011-01-01', '2013-01-01', '2013-01-01', '2019-10-02 01:04:05', '2019-10-02 01:04:05'),
(139, 133, 'BSc EEE', '3.30', 'EEE', 'BUET', 'BUET Dhaka', 'University', '2011-01-01', '2017-01-01', '2017-01-01', '2019-10-02 07:39:27', '2019-10-02 07:39:27'),
(140, 134, 'S S C', NULL, 'science', 'Rajibpur Pilot High School', 'Rajibpur , Kurigram', 'High School', '2006-01-01', '2011-01-01', '2011-01-01', '2019-10-03 17:41:14', '2019-10-03 17:41:14'),
(141, 136, 'BSc', NULL, 'Geography and Environment', 'Jahangirnagar University', 'savar,dhaka', 'University', '2002-01-01', '2008-01-01', '2005-01-01', '2019-10-11 01:12:45', '2019-10-11 01:12:45'),
(142, 138, 'MSS', '3.46 out of 4.00', 'Sociology', 'University of Chittagong', 'Chittagong', 'University', '2009-01-01', '2010-01-01', '2010-01-01', '2019-10-12 03:51:11', '2019-10-12 03:51:11'),
(144, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:27', '2019-10-18 02:24:27'),
(145, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:28', '2019-10-18 02:24:28'),
(146, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:30', '2019-10-18 02:24:30'),
(147, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:30', '2019-10-18 02:24:30'),
(148, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:31', '2019-10-18 02:24:31'),
(149, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:49', '2019-10-18 02:24:49'),
(150, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:49', '2019-10-18 02:24:49'),
(151, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:49', '2019-10-18 02:24:49'),
(152, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:49', '2019-10-18 02:24:49'),
(153, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:52', '2019-10-18 02:24:52'),
(154, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:54', '2019-10-18 02:24:54'),
(155, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:54', '2019-10-18 02:24:54'),
(156, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:55', '2019-10-18 02:24:55'),
(157, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:55', '2019-10-18 02:24:55'),
(158, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:57', '2019-10-18 02:24:57'),
(159, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:57', '2019-10-18 02:24:57'),
(160, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:59', '2019-10-18 02:24:59'),
(161, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:24:59', '2019-10-18 02:24:59'),
(162, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:25:00', '2019-10-18 02:25:00'),
(163, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:25:00', '2019-10-18 02:25:00'),
(164, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:25:01', '2019-10-18 02:25:01'),
(165, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:25:01', '2019-10-18 02:25:01'),
(166, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:25:01', '2019-10-18 02:25:01'),
(167, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:25:02', '2019-10-18 02:25:02'),
(168, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:25:03', '2019-10-18 02:25:03'),
(169, 141, 'Masters in law', '4.35', 'Law', 'Premier university', 'Chittagong', 'University', '2018-01-01', '2017-01-01', '2018-01-01', '2019-10-18 02:25:04', '2019-10-18 02:25:04'),
(170, 143, 'BBS', '3.19', NULL, 'Tejgaon College, Dhaka', 'Tejgaon, Dhaka', 'University', '2017-01-01', '2017-01-01', '2017-01-01', '2019-10-19 21:14:08', '2019-10-19 21:14:08'),
(171, 144, 'BBA & MBA', '3.8', 'Department Of Marketing', 'Dhaka University', 'Dhaka University', 'University', '2004-01-01', '2010-01-01', '2010-01-01', '2019-10-21 03:48:22', '2019-10-21 03:48:22'),
(177, 147, 'MBA', '3.89 out of 4', 'Marketing', 'Asian University', 'Dhaka', 'University', '2004-01-01', '2008-01-01', '2009-01-01', '2019-11-07 03:33:24', '2019-11-07 03:33:24'),
(178, 148, 'BBS', '3.5', 'marketing', 'habibullah bahar univercity', 'shantinagar dhaka', 'University', '2013-01-01', '2014-01-01', '2016-01-01', '2019-11-09 17:31:58', '2019-11-09 17:31:58'),
(179, 150, 'cse', NULL, NULL, 'sylhet engineering collage', 'sylhet engineering collage', 'College', '2007-01-01', '2011-01-01', '2011-01-01', '2019-11-13 03:42:12', '2019-11-13 03:42:12'),
(180, 150, 'cse', NULL, NULL, 'sylhet engineering collage', 'sylhet engineering collage', 'College', '2007-01-01', '2011-01-01', '2011-01-01', '2019-11-13 03:42:15', '2019-11-13 03:42:15'),
(181, 152, 'Masters of Islamic History & Culture', 'Second Class', 'Humanities', 'Govt. Bangla College', 'Mirpur 1, Dhaka - 1216', 'University', '2006-01-01', '2012-01-01', '2012-01-01', '2019-11-16 01:06:18', '2019-11-16 01:06:18'),
(182, 154, 'MBS (Accounting)', '2nd Class', 'Accounting', 'Rajshahi College', 'Rajshahi College, Rajshahi', 'University', '2006-01-01', '2011-01-01', '2014-01-01', '2019-11-25 23:18:39', '2019-11-25 23:18:39'),
(184, 155, 'bbs', '3', NULL, 'NU', 'dhanmondi', 'University', '2011-01-01', '2016-01-01', '2017-01-01', '2019-12-09 02:21:52', '2019-12-09 02:21:52'),
(185, 156, 'M.Sc.', '3.65', 'Statistics', 'Govt. Titumir College', 'Mohakhali, Dhaka', 'University', '2017-01-01', '2018-01-01', '2018-01-01', '2019-12-09 23:14:46', '2019-12-09 23:14:46'),
(186, 158, 'nysc', '3.9', 'economices', 'benin university', 'cmdug', 'University', '1990-01-01', '2000-01-01', '2004-01-01', '2019-12-18 22:27:26', '2019-12-18 22:27:26'),
(187, 158, 'nysc', '3.9', 'economices', 'benin university', 'cmdug', 'University', '1990-01-01', '2000-01-01', '2004-01-01', '2019-12-18 22:27:37', '2019-12-18 22:27:37'),
(189, 159, 'Diploma in EEE', '3.46 out of 4.00', 'Engineering', 'Barisal Polytechnic Institute', 'Barisal govt Polytechnic institute,barisal', 'College', '2005-01-01', '2009-01-01', '2009-01-01', '2019-12-21 23:04:51', '2019-12-21 23:04:51'),
(190, 160, 'LLB', '3.25 out of 4', 'Commerce', 'Stamford University Bangladesh', 'Dhanmondi', 'University', '2012-01-01', '2016-01-01', '2016-01-01', '2019-12-22 17:01:03', '2019-12-22 17:01:03'),
(193, 161, 'O-level', 'C', 'A-level', 'Saint Jude\'s Int', '87, 11/a Dhanmondi', 'High School', '1998-01-01', '2008-01-01', '2009-01-01', '2019-12-26 09:52:53', '2019-12-26 09:52:53'),
(194, 162, 'BSC', '3.24', NULL, 'AIUB', 'Basundharah', 'University', '2007-01-01', '2011-01-01', '2011-01-01', '2019-12-26 21:55:12', '2019-12-26 21:55:12'),
(195, 162, 'BSC', '3.24', NULL, 'AIUB', 'Basundharah', 'University', '2007-01-01', '2011-01-01', '2011-01-01', '2019-12-26 21:55:14', '2019-12-26 21:55:14'),
(196, 163, 'MBS', NULL, 'Accounting', 'National University', 'Gazipur', 'University', '2008-01-01', '2015-01-01', '2017-01-01', '2019-12-27 00:05:42', '2019-12-27 00:05:42'),
(197, 163, 'MBS', NULL, 'Accounting', 'National University', 'Gazipur', 'University', '2008-01-01', '2015-01-01', '2017-01-01', '2019-12-27 00:05:50', '2019-12-27 00:05:50'),
(198, 164, 'Ph.D', '3.49', NULL, 'Kyung Hee Cyber University', 'Seoul, South Korea', 'University', '2012-01-01', '2016-01-01', '2016-01-01', '2019-12-27 20:00:40', '2019-12-27 20:00:40'),
(199, 165, 'MSc in Computer', '3.9', 'Computer', 'Dhaka University', 'Dhaka', 'University', '2011-01-01', '2014-01-01', '2014-01-01', '2020-01-04 19:57:00', '2020-01-04 19:57:00'),
(200, 165, 'MSc in Computer', '3.9', 'Computer', 'Dhaka University', 'Dhaka', 'University', '2011-01-01', '2014-01-01', '2014-01-01', '2020-01-04 19:57:02', '2020-01-04 19:57:02'),
(201, 166, 'MSc in Food Science & Technology', NULL, 'Food Science & Technology', 'Jiagnan University', 'Wuxi ,China.', 'University', '2010-01-01', '2013-01-01', '2013-01-01', '2020-01-06 22:05:46', '2020-01-06 22:05:46'),
(202, 170, 'Masters', NULL, 'Science', 'NYU', 'New York', 'University', '2010-01-01', '2012-01-01', '2012-01-01', '2020-01-11 07:39:13', '2020-01-11 07:39:13'),
(203, 172, 'Bsc in  Mechanical Engineering', '3.23', 'Mechanical Engineering', 'Military Institute Of Science and Technology', 'Military Institute of Science & Technology (MIST)  Mirpur Cantonment, Dhaka-1216, Bangladesh', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2020-01-17 18:24:39', '2020-01-17 18:24:39'),
(204, 172, 'Bsc in  Mechanical Engineering', '3.23', 'Mechanical Engineering', 'Military Institute Of Science and Technology', 'Military Institute of Science & Technology (MIST)  Mirpur Cantonment, Dhaka-1216, Bangladesh', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2020-01-17 18:24:44', '2020-01-17 18:24:44'),
(205, 172, 'Bsc in  Mechanical Engineering', '3.23', 'Mechanical Engineering', 'Military Institute Of Science and Technology', 'Military Institute of Science & Technology (MIST)  Mirpur Cantonment, Dhaka-1216, Bangladesh', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2020-01-17 18:24:45', '2020-01-17 18:24:45'),
(206, 173, 'Passed', '3.00', NULL, 'Dhaka College', 'Dhanmondi', 'University', '2012-01-01', '2018-01-01', '2018-01-01', '2020-01-17 23:18:20', '2020-01-17 23:18:20'),
(207, 175, 'B.Sc', NULL, 'EEE', 'DUET', 'Gazipur', 'University', '2010-01-01', '2014-01-01', '2014-01-01', '2020-01-26 21:47:44', '2020-01-26 21:47:44'),
(208, 176, 'Running student', NULL, 'Commerce', 'Lalmatiamohila colege', 'Lalmatia dhka', 'College', '2018-01-01', '2018-01-01', '2018-01-01', '2020-01-26 22:09:12', '2020-01-26 22:09:12'),
(209, 176, 'Running student', NULL, 'Commerce', 'Lalmatiamohila colege', 'Lalmatia dhka', 'College', '2018-01-01', '2018-01-01', '2018-01-01', '2020-01-26 22:09:14', '2020-01-26 22:09:14'),
(210, 176, 'Running student', NULL, 'Commerce', 'Lalmatiamohila colege', 'Lalmatia dhka', 'College', '2018-01-01', '2018-01-01', '2018-01-01', '2020-01-26 22:09:17', '2020-01-26 22:09:17'),
(211, 176, 'Running student', NULL, 'Commerce', 'Lalmatiamohila colege', 'Lalmatia dhka', 'College', '2018-01-01', '2018-01-01', '2018-01-01', '2020-01-26 22:09:18', '2020-01-26 22:09:18'),
(212, 176, 'Running student', NULL, 'Commerce', 'Lalmatiamohila colege', 'Lalmatia dhka', 'College', '2018-01-01', '2018-01-01', '2018-01-01', '2020-01-26 22:09:28', '2020-01-26 22:09:28'),
(213, 177, 'Undergrad in bachelor in business (BBA)', 'CGPA 3.2 out of 4', 'Human Resource management/ marketing', 'East west university', 'Aftabnogor ,dhaka', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2020-01-28 06:15:21', '2020-01-28 06:15:21'),
(214, 177, 'Undergrad in bachelor in business (BBA)', 'CGPA 3.2 out of 4', 'Human Resource management/ marketing', 'East west university', 'Aftabnogor ,dhaka', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2020-01-28 06:15:29', '2020-01-28 06:15:29'),
(215, 180, 'NILL', NULL, 'RUNNING', 'MURAPARA PILOT HIGH SCHOOL', 'MURAPARA UNIVERSITY COLLAGE', 'College', '2010-01-01', '2012-01-01', '2018-01-01', '2020-02-01 02:47:47', '2020-02-01 02:47:47'),
(216, 180, 'NILL', NULL, 'RUNNING', 'MURAPARA PILOT HIGH SCHOOL', 'MURAPARA UNIVERSITY COLLAGE', 'College', '2010-01-01', '2012-01-01', '2018-01-01', '2020-02-01 02:47:47', '2020-02-01 02:47:47'),
(217, 181, 'B.B.S', '3', 'Accounting', 'Feni Govt college', 'Feni,chittagong', 'College', '2013-01-01', '2015-01-01', '2015-01-01', '2020-02-01 07:33:56', '2020-02-01 07:33:56'),
(219, 183, 'Diploma', NULL, 'Science', 'Changzhou university', 'China', 'University', '2016-01-01', '2016-01-01', '2019-01-01', '2020-02-02 14:07:01', '2020-02-02 14:07:01'),
(220, 183, 'Diploma', NULL, 'Science', 'Changzhou university', 'China', 'University', '2016-01-01', '2016-01-01', '2019-01-01', '2020-02-02 14:07:04', '2020-02-02 14:07:04'),
(221, 184, 'B.Sc (CSE)', NULL, NULL, 'MIST', 'Mirpur Cantonment, Dhaka', 'University', '2011-01-01', '2015-01-01', '2016-01-01', '2020-02-05 05:25:31', '2020-02-05 05:25:31'),
(222, 185, 'M.Sc. in Geography', '2nd. Class', 'Geography', 'Govt. Jagannath University College Under Dhaka University', 'Kotwali, Dhaka, Bangladesh', 'College', '1991-01-01', '1994-01-01', '1994-01-01', '2020-02-10 07:32:46', '2020-02-10 07:32:46'),
(223, 186, 'Jsc', NULL, 'Scince', 'Skrobiul', 'Nator gunare garam', 'High School', '2020-01-01', '2020-01-01', '2020-01-01', '2020-02-10 15:20:28', '2020-02-10 15:20:28'),
(226, 187, 'MBA', '3.65 out of 4.00', 'Marketing', 'Bangladesh University of Business and Technology', 'mirpur', 'University', '2013-01-01', '2015-01-01', '2015-01-01', '2020-02-15 09:47:26', '2020-02-15 09:47:26'),
(232, 188, 'Mba', '3.00', 'Bba', 'United internationa university', 'United international university', 'University', '2018-01-01', '2020-01-01', '2015-01-01', '2020-02-17 06:20:24', '2020-02-17 06:20:24'),
(233, 189, 'Still student', '3.7', 'Genetic Engineering and Biotechnology', 'East west universitg', 'Aftabnogor', 'University', '2019-01-01', '2020-01-01', '2020-01-01', '2020-02-17 18:23:44', '2020-02-17 18:23:44'),
(234, 189, 'Still student', '3.7', 'Genetic Engineering and Biotechnology', 'East west universitg', 'Aftabnogor', 'University', '2019-01-01', '2020-01-01', '2020-01-01', '2020-02-17 18:23:48', '2020-02-17 18:23:48'),
(235, 191, 'A+', NULL, NULL, 'University of Gloucestershire', 'United kingdom', 'University', '2014-01-01', '2012-01-01', '2014-01-01', '2020-02-18 22:37:45', '2020-02-18 22:37:45'),
(236, 192, 'BA pass', '3.30', 'Commerce', 'Yemen Hasan', 'Mirpur', 'University', '2009-01-01', '2018-01-01', '2019-01-01', '2020-02-18 22:50:09', '2020-02-18 22:50:09'),
(237, 194, 'Marine Engineering', '3.50 out of 4.00', 'Marine Engineering', 'Institute of Royal Marine academy', 'Mirpur, Dhaka', 'University', '2014-01-01', '2018-01-01', '2018-01-01', '2020-02-20 11:49:21', '2020-02-20 11:49:21'),
(238, 194, 'Marine Engineering', '3.50 out of 4.00', 'Marine Engineering', 'Institute of Royal Marine academy', 'Mirpur, Dhaka', 'University', '2014-01-01', '2018-01-01', '2018-01-01', '2020-02-20 11:49:30', '2020-02-20 11:49:30'),
(239, 195, 'bba', '2.70', 'business', 'asian university of bangladesh', 'House No. 25, Road No. 5, Sector-7, Behind BNS Center, Dhaka 1230', 'University', '2010-01-01', '2015-01-01', '2015-01-01', '2020-02-25 02:55:23', '2020-02-25 02:55:23'),
(240, 196, 'BDS', NULL, 'Dental Surgery', 'Sapporo Dental College & Hospital', 'Uttara, Dhaka', 'College', '2012-01-01', '2016-01-01', '2017-01-01', '2020-02-25 05:21:59', '2020-02-25 05:21:59'),
(241, 196, 'BDS', NULL, 'Dental Surgery', 'Sapporo Dental College & Hospital', 'Uttara, Dhaka', 'College', '2012-01-01', '2016-01-01', '2017-01-01', '2020-02-25 05:22:06', '2020-02-25 05:22:06'),
(242, 197, 'HSC', '3.42', 'English', 'Shanto mariam University of creative technology', '12 no Sector, uttara, dhaka', 'University', '2017-01-01', '2020-01-01', '2020-01-01', '2020-02-27 05:49:16', '2020-02-27 05:49:16'),
(243, 198, 'qweqweqw', 'rtrtr', 'wqewewqe', 'werwer', 'werwe wee rwerwer', 'Madrasha', '2010-01-01', '2016-01-01', '2017-01-01', '2020-02-28 08:13:00', '2020-02-28 08:13:00'),
(244, 201, 'BBS', NULL, NULL, 'National University', 'Dhanamondi', 'University', '2006-01-01', '2010-01-01', '2010-01-01', '2020-03-05 19:06:38', '2020-03-05 19:06:38'),
(249, 202, 'M.A in English', NULL, 'English', 'Eden Mohila College', 'National University', 'University', '2004-01-01', '2008-01-01', '2011-01-01', '2020-03-08 01:34:23', '2020-03-08 01:34:23'),
(250, 203, 'Higher School', NULL, NULL, 'GROOVEBD', '32 Naya Paltan', 'High School', '1997-01-01', '2012-01-01', '2013-01-01', '2020-03-08 02:36:35', '2020-03-08 02:36:35'),
(251, 204, 'MBA', '3.20', 'Finance', 'Southeast University', 'Banani', 'University', '2012-01-01', '2014-01-01', '2014-01-01', '2020-03-08 06:37:02', '2020-03-08 06:37:02'),
(254, 206, 'MSS(Economics)', NULL, NULL, 'Dhaka University', 'Ramna,Dhaka', 'University', '1981-01-01', '1983-01-01', '1983-01-01', '2020-03-12 22:18:10', '2020-03-12 22:18:10'),
(255, 206, 'MSS(Economics)', NULL, NULL, 'Dhaka University', 'Ramna,Dhaka', 'University', '1981-01-01', '1983-01-01', '1983-01-01', '2020-03-12 22:18:15', '2020-03-12 22:18:15'),
(256, 207, 'MBA', NULL, 'Accounting', 'Govt. Hazi Mohammad Mohsin College', 'Chawkbazar, Chittagong', 'University', '2012-01-01', '2017-01-01', '2017-01-01', '2020-03-14 19:20:04', '2020-03-14 19:20:04'),
(257, 208, '2019', '3.63 out of 4', 'Computer Science & Engineering', 'Daffodil International University', 'Shukrabad, Dhanmondi-32, Dhaka-1207', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2020-03-15 17:52:09', '2020-03-15 17:52:09'),
(258, 212, 'BBA Hons', '5', 'Marketing', 'HSDC', 'Kamalbag, Dhaka', 'University', '2018-01-01', '2020-01-01', '2020-01-01', '2020-03-18 07:44:07', '2020-03-18 07:44:07'),
(259, 216, '2011', '3.05 out of 4', 'Civil engineering', 'Sylhet polytechnic institute', 'Sylhet Bangladesh', 'College', '2007-01-01', '2011-01-01', '2011-01-01', '2020-04-04 05:41:53', '2020-04-04 05:41:53'),
(260, 216, '2011', '3.05 out of 4', 'Civil engineering', 'Sylhet polytechnic institute', 'Sylhet Bangladesh', 'College', '2007-01-01', '2011-01-01', '2011-01-01', '2020-04-04 05:42:00', '2020-04-04 05:42:00'),
(261, 216, '2011', '3.05 out of 4', 'Civil engineering', 'Sylhet polytechnic institute', 'Sylhet Bangladesh', 'College', '2007-01-01', '2011-01-01', '2011-01-01', '2020-04-04 05:42:07', '2020-04-04 05:42:07'),
(262, 217, 'Not applicable', 'Not applicable', 'Not applicable', 'Medical College for women and hospital uttara Dhaka', 'Dhaka Medical college Dhaka', 'College', '2005-01-01', '2010-01-01', '2010-01-01', '2020-04-05 21:55:28', '2020-04-05 21:55:28'),
(263, 217, 'Not applicable', 'Not applicable', 'Not applicable', 'Medical College for women and hospital uttara Dhaka', 'Dhaka Medical college Dhaka', 'College', '2005-01-01', '2010-01-01', '2010-01-01', '2020-04-05 21:55:34', '2020-04-05 21:55:34'),
(264, 217, 'Not applicable', 'Not applicable', 'Not applicable', 'Medical College for women and hospital uttara Dhaka', 'Dhaka Medical college Dhaka', 'College', '2005-01-01', '2010-01-01', '2010-01-01', '2020-04-05 21:55:37', '2020-04-05 21:55:37'),
(265, 217, 'Not applicable', 'Not applicable', 'Not applicable', 'Medical College for women and hospital uttara Dhaka', 'Dhaka Medical college Dhaka', 'College', '2005-01-01', '2010-01-01', '2010-01-01', '2020-04-05 21:55:39', '2020-04-05 21:55:39'),
(266, 219, 'BSS(hons.), Mss in Economics.', 'Second class', 'Economics', 'Cox\'sbazar Govt. College', 'Cox???sBazar, Bangladesh', 'College', '2009-01-01', '2014-01-01', '2014-01-01', '2020-04-06 06:40:21', '2020-04-06 06:40:21'),
(267, 219, 'BSS(hons.), Mss in Economics.', 'Second class', 'Economics', 'Cox\'sbazar Govt. College', 'Cox???sBazar, Bangladesh', 'College', '2009-01-01', '2014-01-01', '2014-01-01', '2020-04-06 06:40:24', '2020-04-06 06:40:24'),
(268, 221, 'Bsc in agriculture', '3.55', 'Science', 'Bangabandhu Seikh Mujib Agricultural University', 'Bangabandhu Seikh Mujib Agricultural University,Salna,Gazipur', 'University', '2014-01-01', '2018-01-01', '2018-01-01', '2020-04-26 18:12:15', '2020-04-26 18:12:15'),
(269, 221, 'Bsc in agriculture', '3.55', 'Science', 'Bangabandhu Seikh Mujib Agricultural University', 'Bangabandhu Seikh Mujib Agricultural University,Salna,Gazipur', 'University', '2014-01-01', '2018-01-01', '2018-01-01', '2020-04-26 18:12:19', '2020-04-26 18:12:19'),
(270, 222, 'Diploma in Engineering', NULL, 'Computer', 'SPTI', 'Sylhet', 'College', '2019-01-01', '2020-01-01', '2020-01-01', '2020-05-07 11:41:26', '2020-05-07 11:41:26'),
(271, 222, 'Diploma in Engineering', NULL, 'Computer', 'SPTI', 'Sylhet', 'College', '2019-01-01', '2020-01-01', '2020-01-01', '2020-05-07 11:41:34', '2020-05-07 11:41:34'),
(272, 223, 'Part qualified', 'None', 'Commerce', 'ACCA', 'Dhanmondi, Dhaka', 'University', '2014-01-01', '2018-01-01', '2018-01-01', '2020-05-29 02:13:34', '2020-05-29 02:13:34'),
(273, 224, '*', '*', '*', 'Ramiz uddin cantt high school', 'Dhaka Cantonment', 'High School', '2020-01-01', '2020-01-01', '2019-01-01', '2020-05-29 21:55:57', '2020-05-29 21:55:57'),
(274, 226, 'not', '4.60', NULL, 'pabna polytechnich institute', 'pabna polytechnich institute,pabna shodor pabna.', 'College', '2005-01-01', '2005-01-01', '2005-01-01', '2020-06-09 01:41:09', '2020-06-09 01:41:09'),
(275, 226, 'not', '4.60', NULL, 'pabna polytechnich institute', 'pabna polytechnich institute,pabna shodor pabna.', 'College', '2005-01-01', '2005-01-01', '2005-01-01', '2020-06-09 01:42:39', '2020-06-09 01:42:39'),
(276, 227, 'B.Sc (EEE)', NULL, 'Electrical and Electronics Engineering', 'American International University Bangladesh (AIUB)', 'Kuril', 'University', '2004-01-01', '2009-01-01', '2009-01-01', '2020-06-10 06:38:56', '2020-06-10 06:38:56'),
(277, 228, 'Repudiandae esse exe', 'Error quidem est es', 'Quia sit exercitati', 'Phillips and Hull LLC', 'Schultz Carroll Plc', 'High School', '1983-01-01', '2016-01-01', '2010-01-01', '2020-06-15 19:51:53', '2020-06-15 19:51:53'),
(278, 229, 'Diploma Engineer', '(C) 2.73 out of 4', 'Instrumentation and Process control technology', 'Shariatpur Polytechnic Institute', 'Burirhat, Shariatpur', 'College', '2012-01-01', '2016-01-01', '2017-01-01', '2020-06-17 15:21:50', '2020-06-17 15:21:50'),
(279, 230, 'MEd', '3.5', 'Education', 'IUB', 'Plot 16 Aftab Uddin Ahmed Rd, Dhaka 1229', 'University', '2009-01-01', '2013-01-01', '2013-01-01', '2020-06-23 21:36:35', '2020-06-23 21:36:35'),
(280, 230, 'MEd', '3.5', 'Education', 'IUB', 'Plot 16 Aftab Uddin Ahmed Rd, Dhaka 1229', 'University', '2009-01-01', '2013-01-01', '2013-01-01', '2020-06-23 21:36:44', '2020-06-23 21:36:44'),
(281, 233, 'Science', '3.7', 'Science', 'Islamic International', 'Gulshan Dhaka', 'College', '2015-01-01', '2017-01-01', '2017-01-01', '2020-06-29 20:42:51', '2020-06-29 20:42:51'),
(282, 233, 'Science', '3.7', 'Science', 'Islamic International', 'Gulshan Dhaka', 'College', '2015-01-01', '2017-01-01', '2017-01-01', '2020-06-29 20:42:54', '2020-06-29 20:42:54'),
(283, 234, 'B.Sc', '3.3.', 'CSE', 'IIUC', 'Chittagong', 'University', '2010-01-01', '2014-01-01', '2014-01-01', '2020-07-01 03:24:30', '2020-07-01 03:24:30'),
(284, 235, 'B.sc in Civil Engineering', NULL, 'B.sc in Civil Engineering', 'Ahsanullah University of Science of Technology', 'Dhaka, Bangladesh', 'University', '2010-01-01', '2014-01-01', '2014-01-01', '2020-07-03 21:03:40', '2020-07-03 21:03:40'),
(285, 236, 'Bachelor of Science in EEE', '3.10', 'Engineering', 'United International University', 'Dhanmondi', 'University', '2011-01-01', '2016-01-01', '2016-01-01', '2020-07-14 04:40:37', '2020-07-14 04:40:37'),
(286, 237, 'MS in Physics', '3.83 out of 4', 'Physics', 'Shahjalal University of Science & Technology', 'Sylhet', 'University', '2012-01-01', '2014-01-01', '2014-01-01', '2020-07-14 08:22:21', '2020-07-14 08:22:21'),
(288, 238, 'Bsc in CSE', '3.92 out of 4.00', 'Science', 'Khulna University of Engineering & Technology', 'Khulna, Bangladesh', 'University', '2013-01-01', '2017-01-01', '2017-01-01', '2020-07-16 20:33:55', '2020-07-16 20:33:55'),
(289, 239, 'Mba', '4.5', 'Business', 'North South', 'Bashundhara', 'University', '2014-01-01', '2017-01-01', '2018-01-01', '2020-07-17 17:22:28', '2020-07-17 17:22:28'),
(290, 240, 'BBS', NULL, 'BBS', 'Sheikh Burhanuddin post graduate College', 'Nazimuddin Road  chankharpul', 'University', '2020-01-01', '2018-01-01', '2020-01-01', '2020-07-21 20:12:06', '2020-07-21 20:12:06'),
(291, 241, 'BA in English', '3.84 out of 4', 'English', 'Daffodil International University', '4/2, Daffodil Tower, Sobhanbag, Mirpur Rd, Dhaka 1207', 'University', '2016-01-01', '2019-01-01', '2019-01-01', '2020-07-23 21:27:05', '2020-07-23 21:27:05'),
(292, 242, 'MBA', NULL, 'Business', 'Leading university, sylhet', 'sylhet', 'University', '2015-01-01', '2018-01-01', '2019-01-01', '2020-08-01 06:24:52', '2020-08-01 06:24:52'),
(293, 243, 'B.A. Hons', '3.00', 'Department of English', 'Govt. Badrunnessa Women\'s College', 'Bakshi Bazar, Dhaka', 'College', '2017-01-01', '2020-01-01', '2020-01-01', '2020-08-06 15:57:22', '2020-08-06 15:57:22'),
(294, 243, 'B.A. Hons', '3.00', 'Department of English', 'Govt. Badrunnessa Women\'s College', 'Bakshi Bazar, Dhaka', 'College', '2017-01-01', '2020-01-01', '2020-01-01', '2020-08-06 15:57:34', '2020-08-06 15:57:34'),
(295, 244, 'M.S.S', '2nd', 'social science', 'west end high school', 'Shohidullah college', 'College', '1991-01-01', '1996-01-01', '2000-01-01', '2020-08-10 18:19:34', '2020-08-10 18:19:34'),
(296, 245, 'English studies', '2.80 out of 4', 'Bachelor of arts', 'State university of bangladesh', 'Dhanomdi kolabagan', 'University', '2014-01-01', '2018-01-01', '2018-01-01', '2020-08-12 16:25:01', '2020-08-12 16:25:01');
INSERT INTO `user_education_records` (`id`, `user_id`, `passed_degree`, `passed_grade`, `passed_department`, `organization_name`, `organization_address`, `organization_type`, `year_from`, `year_to`, `passed_year`, `created_at`, `updated_at`) VALUES
(297, 245, 'English studies', '2.80 out of 4', 'Bachelor of arts', 'State university of bangladesh', 'Dhanomdi kolabagan', 'University', '2014-01-01', '2018-01-01', '2018-01-01', '2020-08-12 16:25:16', '2020-08-12 16:25:16'),
(298, 246, 'Bsc eng', '3.8', 'EEE', 'none', 'none', 'University', '2016-01-01', '2019-01-01', '2019-01-01', '2020-08-14 02:06:54', '2020-08-14 02:06:54'),
(299, 246, 'Bsc eng', '3.8', 'EEE', 'none', 'none', 'University', '2016-01-01', '2019-01-01', '2019-01-01', '2020-08-14 02:06:56', '2020-08-14 02:06:56'),
(300, 247, 'Bsc in ITE', '3.7', 'Telecommunication', 'Darul Ihsan University', 'Dhanmondi', 'University', '2004-01-01', '2009-01-01', '2010-01-01', '2020-12-04 19:26:48', '2020-12-04 19:26:48'),
(301, 247, 'Bsc in ITE', '3.7', 'Telecommunication', 'Darul Ihsan University', 'Dhanmondi', 'University', '2004-01-01', '2009-01-01', '2010-01-01', '2020-12-04 19:26:56', '2020-12-04 19:26:56'),
(302, 248, 'MBA', '3.6', 'Accounitin', 'Saver College', 'Saver College', 'University', '2006-01-01', '2010-01-01', '2011-01-01', '2020-12-05 03:19:11', '2020-12-05 03:19:11'),
(303, 249, 'Masters in Arts', NULL, 'Arts', 'Private University', 'Dhaka', 'University', '2009-01-01', '2013-01-01', '2013-01-01', '2020-12-06 19:57:42', '2020-12-06 19:57:42'),
(304, 250, 'Msc', '4.5', 'Yes', 'Dhaka College', 'Dgaka', 'University', '2012-01-01', '2016-01-01', '2016-01-01', '2020-12-07 07:25:39', '2020-12-07 07:25:39'),
(305, 251, 'Msc', '3.52', 'Science', 'University Of Dhaka', 'Shahbag, Dhaka', 'University', '2014-01-01', '2019-01-01', '2019-01-01', '2020-12-07 12:34:08', '2020-12-07 12:34:08'),
(306, 254, 'None', '4.14', '4.39', 'SRCC', 'Dhaka cantonment,Dhaka', 'College', '2015-01-01', '2017-01-01', '2017-01-01', '2020-12-10 11:53:23', '2020-12-10 11:53:23'),
(307, 254, 'None', '4.14', '4.39', 'SRCC', 'Dhaka cantonment,Dhaka', 'College', '2015-01-01', '2017-01-01', '2017-01-01', '2020-12-10 11:53:38', '2020-12-10 11:53:38'),
(308, 255, 'BA (Hons) in English', '3.31', 'English', 'Southeast University', 'Banani', 'University', '2011-01-01', '2016-01-01', '2016-01-01', '2020-12-12 10:07:30', '2020-12-12 10:07:30'),
(309, 255, 'BA (Hons) in English', '3.31', 'English', 'Southeast University', 'Banani', 'University', '2011-01-01', '2016-01-01', '2016-01-01', '2020-12-12 10:07:34', '2020-12-12 10:07:34'),
(310, 255, 'BA (Hons) in English', '3.31', 'English', 'Southeast University', 'Banani', 'University', '2011-01-01', '2016-01-01', '2016-01-01', '2020-12-12 10:07:38', '2020-12-12 10:07:38'),
(311, 256, 'M. B. S', '1st Class', 'Accounting', 'New Model Degree College', 'Dhanmondi , 27', 'University', '2013-01-01', '2013-01-01', '2016-01-01', '2020-12-13 10:41:57', '2020-12-13 10:41:57'),
(312, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:03:25', '2020-12-16 12:03:25'),
(313, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:03:27', '2020-12-16 12:03:27'),
(314, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:03:37', '2020-12-16 12:03:37'),
(315, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:03:39', '2020-12-16 12:03:39'),
(316, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:03:50', '2020-12-16 12:03:50'),
(317, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:03:51', '2020-12-16 12:03:51'),
(318, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:04:09', '2020-12-16 12:04:09'),
(319, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:04:10', '2020-12-16 12:04:10'),
(320, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:04:10', '2020-12-16 12:04:10'),
(321, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:04:11', '2020-12-16 12:04:11'),
(322, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:04:11', '2020-12-16 12:04:11'),
(323, 257, 'Bachelor in Finance', '3.23 out of 4', 'Business', 'Southern university', 'Mehedibagh chittagong', 'University', '2012-01-01', '2016-01-01', '2017-01-01', '2020-12-16 12:04:11', '2020-12-16 12:04:11'),
(324, 264, 'hsc', '4.12 out of 5', NULL, 'chandana high school', 'gazipur sadar,gazipur,dhaka', 'High School', '2010-01-01', '2014-01-01', '2016-01-01', '2020-12-30 05:49:06', '2020-12-30 05:49:06'),
(325, 265, 'Electronics and Communications Engineering', '2.75', NULL, 'University of Information Technology and Sciences (UITS)', 'H-190, Rd-5, J-Block, Baridhara, Maddha Naya Nagar, Vatara, Dhaka 1212, Dhaka, 1212,', 'University', '2011-01-01', '2005-01-01', '2011-01-01', '2020-12-30 06:06:46', '2020-12-30 06:06:46'),
(326, 271, 'LL.M.', 'First Class', 'Department of Law', 'University of Dhaka', 'University of Dhaka', 'University', '2006-01-01', '2012-01-01', '2012-01-01', '2021-01-11 01:52:43', '2021-01-11 01:52:43'),
(327, 281, 'MBA', NULL, 'marketing', 'gov bl collage', 'GOV. bl collage and university', 'University', '2016-01-01', '2017-01-01', '2017-01-01', '2021-01-29 12:43:59', '2021-01-29 12:43:59'),
(329, 295, 'BBA in Finance', '3.20', 'Finance', 'Rajshahi Science & Technology University', 'Borohoris pur,Natore,Rajshahi', 'University', '2017-01-01', '2021-01-01', '2021-01-01', '2021-02-09 04:39:54', '2021-02-09 04:39:54'),
(330, 300, 'Voluptatem eius cum', 'Perspiciatis conseq', 'Odit neque ipsum dui', 'Chapman Walker Traders', 'Carter Cooke LLC', 'Madrasha', '1982-01-01', '1980-01-01', '2015-01-01', '2021-02-10 23:31:24', '2021-02-10 23:31:24'),
(331, 302, 'BSc. in Civil and Environmental Engineering', NULL, 'Engineering', 'North South University', 'Bashundhara, Dhaka', 'University', '2015-01-01', '2019-01-01', '2019-01-01', '2021-02-12 13:05:09', '2021-02-12 13:05:09'),
(336, 312, 'B.Sc Honours', '3.5 out of 4', 'Chemistry', 'National university', 'Sapahar govt college, Naogaon', 'College', '2017-01-01', '2021-01-01', '2021-01-01', '2021-02-25 21:51:31', '2021-02-25 21:51:31'),
(337, 314, 'engineer', '5', 'engineer', 'test org', 'dhaka', 'University', '2008-01-01', '2014-01-01', '2014-01-01', '2021-02-27 15:31:57', '2021-02-27 15:31:57'),
(338, 314, 'engineer', '5', 'engineer', 'test org', 'dhaka', 'University', '2008-01-01', '2014-01-01', '2014-01-01', '2021-02-27 15:31:57', '2021-02-27 15:31:57'),
(339, 315, 'MBA', '3.48/4.00', 'Marketing', 'University of Dhaka', 'Dhaka-1000', 'University', '2006-01-01', '2011-01-01', '2011-01-01', '2021-02-28 00:34:32', '2021-02-28 00:34:32'),
(342, 316, 'B.SC in computer Engineering', '2.60', 'IT', 'East West University', 'Aftabnagor, Dhaka', 'University', '2005-01-01', '2010-01-01', '2011-01-01', '2021-03-02 11:44:33', '2021-03-02 11:44:33'),
(343, 317, 'Bsc', '2.8 Out of 4', NULL, 'NPI', 'Kawranbajar', 'University', '2011-01-01', '2015-01-01', '2015-01-01', '2021-03-03 13:50:26', '2021-03-03 13:50:26'),
(344, 317, 'Bsc', '2.8 Out of 4', NULL, 'NPI', 'Kawranbajar', 'University', '2011-01-01', '2015-01-01', '2015-01-01', '2021-03-03 13:50:26', '2021-03-03 13:50:26'),
(345, 318, 'MBA', NULL, 'Commerce', 'International Islamic University Chittagong', 'Kumira, Chittagong', 'University', '2012-01-01', '2013-01-01', '2013-01-01', '2021-03-06 06:17:53', '2021-03-06 06:17:53'),
(347, 322, 'yes', '3.50', 'Food And Nutrition', 'Naogaon Polytechnic', 'Naogaon', 'College', '2014-01-01', '2018-01-01', '2018-01-01', '2021-03-10 03:59:01', '2021-03-10 03:59:01'),
(348, 322, 'yes', '3.50', 'Food And Nutrition', 'Naogaon Polytechnic', 'Naogaon', 'College', '2014-01-01', '2018-01-01', '2018-01-01', '2021-03-10 03:59:08', '2021-03-10 03:59:08'),
(357, 326, 'ssc', '5 out 5', 'Science', 'Gazirchat A M high school', 'Ashulia, Dhaka', 'High School', '2012-01-01', '2017-01-01', '2017-01-01', '2021-03-18 00:32:09', '2021-03-18 00:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_family_infos`
--

CREATE TABLE `user_family_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_brother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_many_brother_married` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_sister` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_many_sister_married` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternative_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternative_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `convenient_time_to_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_with_contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearly_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_yourself` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_queries` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT 0,
  `can_edit` tinyint(1) NOT NULL DEFAULT 1,
  `addedby_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_family_infos`
--

INSERT INTO `user_family_infos` (`id`, `user_id`, `father_name`, `father_education`, `father_occupation`, `mother_name`, `mother_occupation`, `number_of_brother`, `how_many_brother_married`, `number_of_sister`, `how_many_sister_married`, `alternative_email`, `alternative_mobile`, `convenient_time_to_call`, `contact_person_mobile`, `name_of_contact_person`, `relation_with_contact_person`, `yearly_income`, `about_yourself`, `extra_queries`, `family_type`, `checked`, `can_edit`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Abdus Satter', NULL, 'Doctor', 'Noor Jahan', 'House Wife', '2', '1', '4', '3', NULL, NULL, '10 am to 4pm', '023923923023', 'Abdus Satter', 'Father', NULL, 'I am Masud. I Have some text for this feature here. I live in Dhaka. I am Masud. I Have some text for this feature here. I live in Dhaka. I am Masud. I Have some text for this feature here. I live in Dhaka.', NULL, 'Upper Middle', 1, 1, 1, 1, '2019-03-17 10:07:27', '2019-03-18 21:03:52'),
(2, 2, 'Abba', NULL, 'Businessmen', 'Amma', 'Citizen', '2', '1', '4', '3', NULL, NULL, '2 to 6 pm', '232323', 'Kakku', 'kakku', NULL, 'asdf asdfasdf asdfasdf asdfasdf asdfasdf asdfasdf asdfasdf', 'asdfasdf asdfasdfas asdfasdfasdf asdfasdfasdfasdfasdfasdfasdfasdf', NULL, 0, 1, 2, 2, '2019-03-17 10:29:00', '2019-03-17 10:29:00'),
(3, 4, 'A. Satter', NULL, 'Doctor', 'Nurjahan', 'Housewife', '3', '2', '1', '1', 'masudbdm1@gmail.com', '01674013112', '9 am to 5 pm', '3232323', 'A Satter', 'Father', '323232', 'asere aweraser asdfasdf sdafsdaf asdfsadf asdfasdfsdaf sdafasdf', NULL, 'Upper Middle', 0, 1, 4, 4, '2019-03-19 16:50:38', '2019-03-19 16:50:38'),
(4, 16, 'xm', NULL, 'Businessman', 'yx', 'Housewife', '3', '2', '2', '2', NULL, NULL, '7.00 pm to 9.00 pm', '01666666666', 'z', 'cousin', '10,00,000', 'I live in Dhaka. I lead a very simple and honest life.My hobby is travelling.', 'I want a beautiful, smart and good minded person who is also social and cultural minded', 'Medium Family', 0, 1, 16, 16, '2019-03-20 16:44:10', '2021-01-17 04:16:23'),
(5, 55, 'Masum Kazi', NULL, 'Late', 'Zia Begum kazi', 'Late', '4', '4', '1', '1', 'vissionincomebd@gmail.com', '01744899332', 'any time', '0174499332', 'Alim', 'Brother', 'later', 'I am Anamika Kazi. Very Honest girl.', 'I want my Life Partner who make me Allways Happy.', 'Medium Family', 1, 1, 55, 16, '2019-03-22 17:26:37', '2019-03-22 21:08:13'),
(6, 56, 'Md. Amdadul Hoque', NULL, 'Retired army', 'Rebeka sultana', 'housewife,', '1', NULL, '1', NULL, 'rajibulhoque8@gmail.com', '01403267578', '7am-10pm', '01728846361', 'Md. Amdadul Hoque', 'father', 'Bdt.200000', 'A am Rajibul hoque. I would like study book and travel.', 'I want to life partner a honest, patience,modest and namazi .', 'join', 0, 1, 56, 56, '2019-03-23 05:18:01', '2019-03-23 05:18:01'),
(7, 57, 'late  Shamsuddin ansari', NULL, 'rtd. govt Engineer', 'Latifunnessa', 'Housewife', '1', '1', '2', '2', 'reza4uonly@gmail.com', '01677111947', '11am to 5pm', '01911030701', 'me', 'self', '300000 to 500000', 'Hi am  very simple and honest, Have a nice heart.', 'i want a lovely girl.who loves me and hold my hand till death .', 'Medium Family', 0, 1, 57, 57, '2019-03-24 05:36:22', '2019-03-24 05:37:02'),
(8, 60, 'Mohammad Aziz', NULL, 'Engineer', 'Shefali Aziz', 'Housewife', NULL, NULL, '1', NULL, '071sohan@gmail.com', NULL, 'Prefer email (international time difference is inconvenient)', '2037685217', 'Sohan Aziz', 'Self', 'Tell you later', 'I am a compassionate and genuine person who understands the importance of balancing family life with a career focus. In my leisure, I love traveling and doing adventurous activities like hiking, rock climbing, mountain biking, etc. I understand that it is important to always clearly communicate with your partner and respect her opinions. \r\n\r\nI\'m currently finishing up my bachelor (within three months) and will be working in the health industry. Right now, I am looking to meet someone. If we like each other and our chemistry works well, I\'m down to make the commitment. I will surely keep you happy for the rest of our lives.', 'I am looking for a kind, funny, intelligent, caring, and understanding individual with moderate traditional and religious values who will be my equal.', 'Medium Family', 0, 1, 60, 60, '2019-04-01 13:30:02', '2019-04-01 13:30:02'),
(9, 61, 'jhjhbjh', NULL, 'Doctor', 'klk', 'Housewife', '33', '2', '5', '2', 'dd.welfare2@gov.bd', '1234102335', 'jkjlk', '124465653132', 'fddd', 'jhhjjvh', NULL, 'hjjjkjkj jhjioiouc yffuuiul juufyujh ffyiiitrdtryt ipiouiou', 'hjjhhjjhgfkfnbbnv iihohpoipoipoijpolk;', 'Medium Family', 0, 1, 61, 61, '2019-04-01 16:00:16', '2019-04-01 16:00:25'),
(10, 62, 'Halim', NULL, 'Professor', 'Halima', 'Teacher', '1', '1', '1', '1', 'findsamshah@gmail.com', '01878279015', '9 AM to 9 PM', '+8801742976773', 'Salim', 'brother', 'BDT 200000', 'Hi, I\'m easy going, honest, caring and loyal person. I have a good sense of humor. I like travel, movies, music and things what makes us happy. Ask me then will tell you more.', 'Someone nice and honest, wants to build a family together and share life.', 'Joint', 0, 1, 62, 62, '2019-04-02 14:33:44', '2019-04-02 14:35:07'),
(11, 65, 'Yunlong Zhao', NULL, 'Doctor', 'Dongmei Yao', 'Nurse', NULL, NULL, NULL, NULL, 'gb9266@outlook.com', '+8613244301566', '9:00AM-12:00PM', '+8615568678766', 'Yunlong Zhao', 'father and son', NULL, 'I am Liang Zhao.I am a chinese.I want to find my soul mate in Bangladesh.I like travel.', 'Not too many requirements.Can accept life in China.', 'Medium Family', 0, 1, 65, 65, '2019-04-08 18:09:10', '2019-04-08 18:09:10'),
(12, 37, 'A.M.Enayet Karim', NULL, 'retired', 'Umme Hoaasain', 'Housewife', '2', '1', '1', '1', NULL, NULL, 'any', '01732420190', 'sshoibal', 'self', 'BDT 1000000', 'A Freelance Artist,Mehedi Hussain Sshoibal : Who belong to a Middle class Family. Do not have Own flat or Car in Dhaka! Unfortunately Divorced Just before Bouvaat! So yes I am Divorced! :(\r\n\r\nA Truth speaker! Believe in Simple living and High thinking!. Living with my mother in my home town.\r\n\r\nEthical person who never had relation at a time with two persons!', 'A Truth speaker and who is Ready for the journey', 'Medium Family', 0, 1, 37, 37, '2019-04-14 03:49:05', '2019-04-14 03:49:05'),
(13, 32, 'Late Md. Aftabur Rahman', NULL, 'Govt. Service', 'Mrs. Anwara Begum', 'Housewife', '7', '7', '4', '4', 'skrumi@hotmail.com', '01911244343', '10 am -11pm', '01741581537', 'Sk. Hafizur Rahman Rumi', 'self', 'not to specify', 'I am glad you are interested in my profile.\r\nI have completed my Masters degree.I am ambitious, determined and focused to do well in life.All in all, am looking for a companion who would be my best friend, with whom I can have an interesting conversation, enjoy funny things in life and traverse the journey of life.', 'I want my life partner will have honest, committed, good sense of humor . Her mentality will not cheap.', 'Upper Middle', 0, 1, 32, 32, '2019-04-19 01:16:42', '2019-04-19 01:16:42'),
(14, 74, 'Md Ayub Ali', NULL, 'Teacher', 'Late Shahanaj Begum', 'Housewife', '3', NULL, NULL, NULL, NULL, '01797695025', '01998497884', '01797695025', 'Father', 'Father', '120000', 'I am a computer engineering student and work hard', 'Just she loves me', 'Upper Middle', 0, 1, 74, 74, '2019-04-30 06:43:23', '2019-04-30 06:43:23'),
(15, 75, 'Parimal Chowdhury', NULL, 'RTD. Teacher', 'Shila Chowdhury', 'Teacher', NULL, NULL, NULL, NULL, 'ctrishna36@yahoo.com', '01764033284', '10 am - 5 pm', '01681799902', 'Trishna', '.....', '00.00', 'My personality is kind of complex.I take a lot of time to get used to new people I am very quiet & reserved.', 'I am looking for a soulmate, who is understanding, down to earth, lives and enjoys every moment of life, who will be my best friend for life.. !!', 'Upper Middle', 0, 1, 75, 75, '2019-05-01 16:41:38', '2019-05-01 16:41:38'),
(16, 77, 'Md tohidul islam', NULL, 'Farmer', 'Mst sultana rajia', 'Housewife', '1', NULL, '1', '1', 'salmanchoudhuri763@gmail.com', '1757174233', 'Anytime', '+8801757174233', 'Salman', 'Friend', NULL, 'I am suvo. My honours exam result is pending. I am seeking job.', 'I want to discus every plan with my partner. I am seeking my life partner who  is established.  It good  if she had a government job.', 'Medium Family', 0, 1, 77, 77, '2019-05-04 23:21:26', '2019-05-04 23:21:31'),
(17, 86, 'Ehetesham sultan', NULL, 'retired', 'Nasrin akther', 'Housewife', NULL, NULL, '2', '1', 'ishtiaque20188@gmail.com', '1830844896', 'my free time 8pm to 10 pm', '01674873757', 'ENA MARIUM', 'sister', '7,00,000', 'I am a simple person with simple morality of life, i am searching a partner who is wants to continue her life with me.', 'my family is traditional and well reputed, with good bonding', 'Upper Middle', 0, 1, 86, 86, '2019-05-26 03:20:02', '2019-05-26 03:20:02'),
(18, 88, 'Muhammad Ispahani', NULL, 'Retired Service Holder', 'Rezia Begum', 'Housewife', NULL, NULL, '2', '1', 'mahabub.morshed29@gmail.com', '01737860530', 'Anytime', '01670414888', 'Morshed', 'Own', '6,00,000', 'I am Mahabubul Morshed,Currently living in Chattogram.Lobe to travel,cheering, movies and love the way to do something by whom people can be benifited.Alwayz wants to make the opposite one have a smile on his/her face.', NULL, 'Medium Family', 0, 1, 88, 88, '2019-06-10 08:19:23', '2019-06-10 08:19:23'),
(19, 89, 'Akram Ali', NULL, 'Teacher', 'Layla begum', 'Housewife', '5', '1', '1', '1', 'mujibjeddahksa@gmail.com', '01903825689', '9:00am to 11pm', '01759549788', 'Mujib', 'Self', '12,00000', 'Im mujib from sylhet. Doing business. I was in ksa. Now im in bangladesh.', 'I want my life partner who want to live with me not with my family.', 'Medium Family', 0, 1, 89, 89, '2019-06-11 07:10:21', '2019-06-11 07:10:21'),
(20, 92, 'Mijanur Rahman', NULL, 'Driving', 'Rabeya begum', 'Housewife', '1', NULL, '1', '1', 'mdshahadat490@gmail.com', '01790825656', '24 hours', '01790825656', 'Shahadat hossain', '01790825655', '20', 'Hi I am shahadat Hossain\r\nCurrently live in dhaka.like traveling', 'I want my life partner virgin', 'Medium Family', 0, 1, 92, 92, '2019-06-16 22:05:37', '2019-06-16 22:05:37'),
(21, 95, 'Utpal Kumar Das', NULL, 'Private job', 'Subra Dey', 'Govt job', '1', NULL, '1', NULL, 'upamatisha.psy@gmail.com', '01818894545', 'Any time', '01689824878', 'Upama', 'Me', '1 lac 20k', 'I am upama. I am a post graduate.  Looking for a muslim partner. Though i born in hindu family, I myself is Muslim right now. if anyone is willing to agree with my view then contact', 'I want an engineer life partner. It\'s my personal choice.', 'Middle class', 0, 1, 95, 95, '2019-06-25 21:09:30', '2019-06-25 21:09:30'),
(22, 93, 'Md. Samsojjaman', NULL, 'Government Service at Sonali Bank Ltd.', 'Aoheda Khatun', 'Housewife', '1', NULL, NULL, NULL, 'mkshohag1600@gmail.com', '01739721375', '4.00 PM to 11.00 PM', '01719097955', 'Md. Kamrojjaman', 'Self', '500,000', 'Hlw I am Mohammad Kamrojjaman. I am a Professional Accountant.\r\nI live in Dhaka and my hometown is Narsingdi.\r\nMy academic qualifications are MBA & ACCA (Finalist)\r\nCurrently Working in a Top Ranked Pharmaceuticals Company in Bangladesh as a Corporate Accounts Officer.\r\nPracticing Muslim, Honest, Straight and Simple', 'I Want my life partner have some virtues ......\r\n1. Practicing Muslim \r\n2. Well Educated\r\n3. Grew in a good Family by Religion education and Humbleness\r\n4.Good looks (Fair, Pretty)', 'Upper Middle', 0, 1, 93, 93, '2019-06-30 05:27:55', '2019-06-30 05:28:21'),
(23, 97, 'Late. S. M. Abdul Jalil', NULL, 'Engineer', 'Late. Mrs. Rebina Jalil', 'Housewife', '1', '1', NULL, NULL, 'zakir.hasan.sumon@gmail.com', '01711885936', '9 AM To 9 PM', '01711885936', 'Sumon', 'Elder Brother', 'BDT 20,00,000', 'I am Dr. Zubaer Hasan Suzon. I am M.B.B.S. & D.A. (Diploma In Anesthesia). I am a first class gazetted officer. I live with my elder brother in Dhanmondi R/A, Dhaka.', 'I want my life partner to be caring, helpful, reliable, honest and friendly.', 'Upper Middle', 0, 1, 97, 97, '2019-07-06 01:30:40', '2019-07-06 01:30:40'),
(24, 99, 'Nur Mohammad', NULL, 'Retired', 'L begum', 'H maker', '1', '1', '3', '3', NULL, NULL, '2to5', '+4407419386524', 'M Rahman', 'Myself', 'USD 35k', 'Reliable, Responsible, Honest and simple', 'Just looking beautiful', 'Liberal', 0, 1, 99, 99, '2019-07-07 20:45:42', '2019-07-07 20:45:42'),
(25, 101, 'Ziaul Hasan ndc', NULL, 'Additional Secretar, Ministry of Defence', 'Umme Kulsum', 'Teacher', '1', NULL, '1', NULL, NULL, NULL, '10am to 8pm', '01716297344', 'Umme Kulsum', 'Mother', '800000', 'I am searching a groom for my daughte. She is well educate, pious,decent and good in nature.', 'My daughter wants that her partner will be eduated,honest,decent.', 'Upper Middle', 0, 1, 101, 101, '2019-07-13 22:26:12', '2019-07-13 22:26:12'),
(26, 102, 'Ataur', NULL, 'Death', 'Hamida', 'Rtd.', '1', '1', NULL, NULL, NULL, NULL, 'Friday', '01916510039', 'Hamid', 'Self', '350000', 'I am abdul hamid i want to a good minded man.', NULL, 'Medium Family', 0, 1, 102, 102, '2019-07-14 10:00:41', '2019-07-14 10:00:41'),
(27, 106, 'K rahman', NULL, 'Business', 'Akter', 'Housewife', NULL, NULL, '3', '3', NULL, NULL, 'Any', '01643395829', 'Khan', 'Me', '600000', 'Honest loving careing educated', 'Honest loving careing educated', 'Upper Middle', 0, 1, 106, 106, '2019-07-23 16:19:20', '2019-07-23 16:21:17'),
(28, 107, 'Fakir Anowar Hossain', NULL, 'Business', 'Aynamoti Begum', 'Housewife', NULL, NULL, NULL, '1', NULL, NULL, '9.am to 10pm', '01556487253', '01913414609', 'Father & Mother', '200000', 'i am fakir tarikul islam. i live in Shyamoli,dhaka. i want a bride who is  that meddle family, Religion,fair, Educated, Tall, Have long hair & so on.', NULL, 'Medium Family', 0, 1, 107, 107, '2019-07-23 23:38:28', '2019-07-23 23:38:28'),
(29, 108, 'Md. Jalal', NULL, 'Businessman', 'Rabeya mobeshwerah', 'Housewife', '2', NULL, '1', '1', NULL, NULL, '9 a.m to 5 p.m', '01305952852', 'Md. Adnan badhon', 'Brother', NULL, 'Hi, this is Md. Emran Apon. Currently, I live in Chittagong. I am studying Mba at the University of Chittagong.', 'I want my life partner will have some virtues like honesty, smartness, respectful, trustworthy.', 'Medium Family', 0, 1, 108, 108, '2019-07-29 01:09:26', '2019-07-29 01:09:26'),
(30, 109, 'MD Anwar hossain', NULL, 'Business', 'Nasrin begum', 'Housewife', '1', NULL, NULL, NULL, NULL, NULL, '5 PM', '01611550880', 'Asad', 'Self', '200000', 'I don\'t know what should I say just I am simple person just live like a normal good human being..', 'Looking for honest and simple person', 'Medium Family', 0, 1, 109, 109, '2019-07-30 06:14:29', '2019-07-30 06:14:29'),
(31, 110, 'Md Hanif', NULL, 'Doctor', 'Kadiza Begum', 'Housewife', '1', NULL, '2', '1', NULL, NULL, '5 pm - 6 pm', '09638748475', 'Abubokar', 'Self', '2,00,000', 'I am Abubokar looking for a religious life partner.', 'I want my life partner will be religious, educated, will from Dhaka, Noakhali, Feni, Laxmipur, Laksam mainly.', 'Medium Family', 0, 1, 110, 110, '2019-08-04 18:17:59', '2019-08-04 18:18:00'),
(32, 112, 'Md. Abul Hossain', NULL, 'Business', 'Nayon Moni', 'Housewife', NULL, NULL, NULL, NULL, 'md.nadim.ccna@gmail.com', '01728643165', '10am to 01am', '01947754356', 'Fatema', 'Aunty', NULL, 'I am a very simple & honest person, i liked hard  work and study, \r\nif any needs for contact me: 01728643165', 'I need a good girl, and respect her family.', 'Medium Family', 0, 1, 112, 112, '2019-08-05 04:32:53', '2019-08-05 04:32:53'),
(33, 116, 'Abul Mansur Ahmed', NULL, 'Businessman', 'Rahima Begum', 'Govt. Job Holder', NULL, NULL, '2', '2', NULL, NULL, '9 am to 10 pm', '01675828814', '01675828814', '01675828814', 'N/A', 'I am Galib Mansur, currently living in Dhaka my home district is Faridpur. I have complete my LL.B (Hon\'s), LL.M from a private university. Now i am working in a law firm as an associates Lawyer. My family consist with 5 members, father, mother, two sisters and me. my father is a businessman and mother is a Govt. job Holder. My two sisters are married and both of my sister are Govt. Job holders and i am the only son of my parents.', NULL, 'Medium Family', 0, 1, 116, 116, '2019-08-07 18:00:00', '2019-08-07 18:00:00'),
(34, 118, 'Golam Haider', NULL, 'Passed Away', 'Tahmina Khatun', 'Passed Away', '2', '2', '5', '5', 'shahjahan.mia@technovista.com.bd', '01912985197', 'After 12 pm', '01317902140', 'Mohammad Shahjahan Mia', 'Brother', NULL, 'I am Golam Rabbani . I am currently Living in Dhaka . I have 4 Children', 'I want to marry barren Muslim women, or divorce women who have no child', 'Moderate', 0, 1, 118, 118, '2019-08-10 20:22:56', '2019-08-10 20:23:01'),
(35, 119, 'Late, Mohammad Mahtabuddin Khan', NULL, 'Service', 'Mrs. Razia Mahtab', 'Housewife', '1', NULL, '1', '1', 'sagar_aiub@ymail.com', '01955912064', '12:00.pm to 10:00.pm', '01955912064', 'Mrs. Razia Mahtab', 'Brother', 'BDT 420000', 'Honest, Hardworking & Family loving person. I was completed my MBA & BBA from American International University-Bangladesh(AIUB). Completed my HSC from Dhaka Commerce College & SSC from Motijheel Model High School. Now I am working on \"Rupayan Housing Estate Ltd\" as a Sr.Executive - Sales.', NULL, 'Medium Family', 0, 1, 119, 119, '2019-08-13 07:12:12', '2019-08-13 07:12:12'),
(36, 120, 'Md Anowar Hossain', NULL, '???????????????????????????????????? ???????????????????????????', 'Ms Fulmoti Begum', 'Housewife', NULL, NULL, NULL, NULL, 'mosiurrhoman222@gmail.com', '01636349627', 'All time', '01636349627', 'Anower Hossain', 'Me', '12.000', '???????????? ????????? ??????????????? ???????????????. ????????? ?????????????????? ??????????????? ?????????. ????????? ???????????? ???????????????????????? ?????????????????? ?????? ????????? ???????????? ???????????? ??????????????? ?????????', 'I I', 'Medium Family', 0, 1, 120, 120, '2019-08-14 23:16:04', '2019-08-14 23:16:07'),
(37, 121, 'Kaimuddin', NULL, 'Probasi', 'Sufiya Begum', 'Housewife', '1', NULL, NULL, NULL, 'Pinkymukta010@gmail.com', '01704437719', 'Anytime', '01704437719', 'Mukta', 'Myself', 'No', 'I am Mukta Akter. I am currently live in manikgonj...', 'I want my life partner will have some virtues like honest friendly.helpfull ...will from Dhaka only', 'Medium Family', 0, 1, 121, 121, '2019-08-18 15:00:57', '2019-08-18 15:00:57'),
(38, 122, 'Abdur Razzaque', NULL, 'Business', 'Shamima Parvin', 'Housewife', '1', NULL, NULL, NULL, NULL, NULL, '9:00 AM to 9:00 PM', '01911354035', 'Abdur Razzaque', 'Father', 'BDT 2,40,000.00', 'Elder son of the family. Simple, honest & on-line business man. Completed Masters & Honors from Govt Titumir College, Dhaka under National University. He knows Graphic Design. Father is business man & mother is house wife. Only the younger brother is student of engineering. No more family member. We are simple & middle class family.', 'Simple & middle class family. Business related & business minded family of any district in Bangladesh. We prefer bride who has experience in pharmacy/ retail shop/ handicraft/ on-line/ freelancer/ e-commerce/ any other suitable business which is possible for a woman. We like to start a new business in addition to our existing business. There is no difference between daughter & daughter-in-law to us.', 'Medium Family', 0, 1, 122, 122, '2019-08-19 03:18:40', '2019-08-19 03:18:49'),
(39, 123, 'Mujibur Rahman', NULL, 'Engineer', 'Noor-E-Nahreen', 'Housewife', '3', '2', NULL, NULL, NULL, NULL, '11.30 am to 6 pm', '01670050159', 'Mujibur Rahman', 'Father', '200000', 'Honesty, trustworthy, Integrity are my values.', NULL, 'Upper Middle', 0, 1, 123, 123, '2019-08-19 06:25:04', '2019-08-19 06:25:04'),
(40, 124, 'Md idrish Ali', NULL, 'Driver', 'Most Alama', 'Housewife', NULL, NULL, NULL, NULL, NULL, NULL, 'All Time', '01704389954', 'Self', 'None', NULL, 'I am kawsar Ali . Baper khi are ghomi . Are akta bou chi', NULL, 'Medium Family', 0, 1, 124, 124, '2019-08-28 15:30:04', '2019-08-28 15:30:04'),
(41, 126, 'Ibrahim khalil', NULL, 'Business', 'Maksuda', 'Housewife', '3', '1', '3', '2', NULL, '01611234864', 'Any', '01788571133', 'Mejba', 'Self', '1000000', 'Nothings i just want fresh mind a ???', NULL, 'Jont', 0, 1, 126, 126, '2019-09-01 07:06:30', '2019-09-01 07:06:30'),
(42, 127, 'Rafiqul Islam', NULL, 'Engineer', 'Taslima', 'Housewife', '1', NULL, '3', '3', 'Sfbabu846@gmai.com', '01703536727', '9pm-11pm', '01703536727', 'Babu', 'Himself', '15,00000', '????????? ????????????  ?????????????????? ???????????? ??????????????? ?????????????????? ??????????????? ??????????????? ??????????????? ??????????????? ????????????????????? ??????????????? ????????????????????? ?????????????????? ????????????????????????', '????????? ?????????????????? ???????????? ??????????????? ?????? ??????????????? ????????? ?????????????????? ???????????? ????????????????????? ???????????? ??????????????????', 'Upper Middle', 0, 1, 127, 127, '2019-09-08 21:53:32', '2019-09-08 21:53:32'),
(43, 131, 'Abdul hasem', NULL, 'Farmar', 'Mayanur begum', 'Housewife', '2', '1', '1', NULL, 'Mahmudabbas@icloud.com', '+8801930345321', '8 am to 11 pm', '+97450388371', 'Own', 'Self', 'Upto 4 lakhs', 'I am mahmud Abbas, I am currently live in Doha, looking for someone, and looking to stay on motherland. Thank you for visiting my profile.', 'Just simple! ho can adjust with my small family. But must be a (gunoboti).', 'Medium Family', 0, 1, 131, 131, '2019-09-21 00:26:09', '2019-09-21 00:26:09'),
(44, 132, 'Md Shahjahan Kabir', NULL, 'Engineer', 'Mst Rabeya Kabir', 'Housewife', '1', NULL, '1', NULL, NULL, NULL, '4pm to 6pm', '01818397050', 'Kabir', 'Myself', '3.5 lac', 'Shahnawaz Kabir is a soft hearted persona, home sicker, highly business professional. Read books and watching movies.', 'As a muslim, i always try to follow all rules of our Prophet (sm).', 'Upper Middle', 0, 1, 132, 132, '2019-10-02 01:21:42', '2019-10-02 01:21:42'),
(45, 133, 'Ali Iskandar', NULL, 'Judge', 'Shuborna Hossain', 'Housewife', '1', NULL, NULL, NULL, NULL, NULL, '9 am to 2 pm', '01744452961', 'Fayaz Iskandar', 'Nephew', '45000 usd', 'I am Idris. I live and work in Germany.', 'I want my partner to be religious and family-oriented.', 'Medium Family', 0, 1, 133, 133, '2019-10-02 07:44:12', '2019-10-02 07:44:12'),
(46, 136, 'Md.Qurban Ali Khan', NULL, 'Retaired', 'Rabeya Ali Khan', 'Housewife', '2', '1', '2', '1', 'malihaju31@gmail.com', '01796311193', '9 am to 7 pm', '01710811065', 'munni', 'self', NULL, 'Assalamualaikum,I am maliha. I had completed my M.Phil from DU and B.Sc & M.Sc from JU. I am very religious, honest and friendly. I like reading, cooking and also likes to take vacations and enjoy exploring new places and learning about different cultures.My parents are looking for a boy with similar educational qualifications, religious and good moral values. If you seriously interested about marriage you can contact with us.', NULL, 'Upper Middle', 0, 1, 136, 136, '2019-10-11 01:26:15', '2019-10-11 01:26:21'),
(47, 144, 'Md Karim', NULL, 'Govt Employee', 'Mrs. Mariam Begum', 'Housewife', '3', '3', NULL, NULL, NULL, NULL, '9Pm to 12 Am', '01718581828', 'Anis AHmed', 'Brother', NULL, 'I am Honest, Loyal, Modest, religious and Proactive person.', 'I want my life partner will be same as like me', 'Moderate', 0, 1, 144, 144, '2019-10-21 03:55:24', '2019-10-21 03:55:24'),
(48, 147, 'Md Mahfuzur Rahman', NULL, 'Businessman', 'Roushon Ara', 'Housewife', NULL, NULL, '2', '1', NULL, NULL, 'Anytime', '01676973411', 'Audhira', 'Sister', 'BDT250000', 'I am Rabiul. I live in Dhaka with my family in a rental house. I love to travel and spend time with my family members.', 'I want my life partner to be good looking, smart & social.', 'Nuclear', 0, 1, 147, 147, '2019-11-07 03:42:55', '2019-11-07 03:42:58'),
(49, 148, 'abu taleb', NULL, 'Retd Banker', 'Rafeza khatun', 'Housewife', '3', NULL, NULL, NULL, 'imtiazrahman99@gmail.com', '01864210419', '9am to 12pm', '01685355273', 'Nafeez imtiaz', 'self', NULL, 'i am nafeez imtiaz i like to travel /i like to shopping/i like to eat in various kinds of resturants etc.', 'i want my life partner honest ,islamic mind , and trustworthy..', 'Medium Family', 0, 1, 148, 148, '2019-11-09 17:40:24', '2019-11-09 17:40:31'),
(50, 152, 'Md Abdul Malek Mridha', NULL, 'Business', 'Shahanur Begum', 'Housewife', '2', '1', '3', '1', 'prova2afroz@yahoo.com', '01908815917', '10 am to 10 pm', '01626351604', 'Shahanur Begum', 'Mother', NULL, 'I live in Dhaka. Doing a job As Senior Web Developer. Like to travelling.', NULL, 'Medium Family', 0, 1, 152, 152, '2019-11-16 01:22:17', '2019-11-16 01:22:17'),
(51, 154, 'Md. Harunoor Rashid', NULL, 'Retried', 'Mst. Shahida Parveen', 'Housewife', '1', '1', '1', NULL, 'alomacc06@gmail.com', '01754361036', '6:30 PM to 9:30 PM', '01722984671', 'Shahida Parveen', 'Mother', '30000-40000', 'I am alomgir hossain, i\'m very simple in my life.', 'i want my partner to be honest, religious & worldly. She will love me like me.', 'Medium Family', 0, 1, 154, 154, '2019-11-25 23:28:25', '2019-11-25 23:28:25'),
(52, 155, 'Omar Faruk', NULL, 'na', 'Aleya Akter', 'Housewife', NULL, NULL, NULL, NULL, NULL, NULL, '8pm to 8.30pm', '01924748249', 'omar', 'father', '00000', 'i live in Dhaka. 000 0000 000 000 000 000 000 000 0  0000 000 000', NULL, 'Medium Family', 0, 1, 155, 155, '2019-12-09 02:29:50', '2019-12-09 02:29:55'),
(53, 156, 'Md. Zafar Ullah', NULL, 'Engineer', 'Mrs. Nargis Akter', 'Housewife', '2', '1', '1', NULL, 'nazmul.ocr.0810@gmail.com', '01926770806', '3pm to 10pm', '01926770806', 'Nazmul Islam', 'own', '50000', 'Hi, this is Nazmul. I\'m an entrepreneur in the IT industry.', 'I\'m looking for a Quran Hafeez and a good human.', 'Medium Family', 0, 1, 156, 156, '2019-12-09 23:23:48', '2019-12-09 23:23:49'),
(54, 158, 'ibra', NULL, 'Engineer', 'euni', 'Housewife', NULL, NULL, NULL, NULL, 'js3204445@gmail.com', '90345678', '1111', '67854954', 'person', 'cool', '100', 'i am mara i am cool and fun to be with', 'i am looking for a good man for long term relationship that can lead to marraige', 'Upper Middle', 0, 1, 158, 158, '2019-12-18 22:33:03', '2019-12-18 22:33:03'),
(55, 159, 'Md.abdul aziz', NULL, 'Business', 'Parul begum', 'Housewife', NULL, NULL, '1', NULL, NULL, NULL, '10am', '01918483648', 'Sohel', 'Own', 'Bdt.2400000/', 'I am sohel from barisal, i am simply straight forward person ,, i Don\'t like gossiping', 'I want my life partner take care my family responsibility & i want he make a beautiful family for his love. That\'s it  .  I always  try best for my wife', 'Medium Family', 0, 1, 159, 159, '2019-12-22 00:09:55', '2019-12-22 00:09:55'),
(56, 160, 'MD MAHABUBUL ALAM', NULL, 'Business', 'SAMSUN NAHAR', 'Housewife', '1', '1', NULL, NULL, 'malam887@gmail.com', '01734119999', '12 PM', '01734119999', 'MD SHOJIB MAHABUB', 'BROTHER', 'ABOVE 1400000', 'I am Sabiha Mahbub. Born in Pabna now living in Dhaka. I like travelling. Currently studying Masters of Law in a University.', 'I don\'t need a prince charming....I need a person who loves and protect me like my dad.', 'Upper Middle', 0, 1, 160, 160, '2019-12-23 06:42:23', '2019-12-23 06:42:55'),
(57, 161, 'Md. Shaheb Ali', NULL, 'Ex Chief Deputy Director', 'Dilara Begum', 'Housewife', NULL, NULL, '3', '3', NULL, NULL, '3:00 pm - 8:00 pm', '01919130404', 'Lubna Yesmin', 'Sister', NULL, 'Hey there !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', NULL, 'Medium Family', 0, 1, 161, 161, '2019-12-26 10:01:46', '2019-12-26 10:01:46'),
(58, 162, 'Sultan Ahmed', NULL, 'Doctor', 'Hamida Akter', 'Housewife', '1', NULL, NULL, NULL, 'sf.talukder@yahoo.con', '01817008114', 'Anytime', '01817060313', 'Sultan Ahmed', 'Father', '....', 'I am Islamic minded. Honest and hardworking.', 'I am looking religious and educated spouse.', 'Upper Middle', 0, 1, 162, 162, '2019-12-26 22:55:36', '2019-12-26 22:55:40'),
(59, 163, 'Abdur Rahim', NULL, 'Retired', 'Ayesha Begum', 'Housewife', '3', NULL, '3', '3', 'assaduzzaman_razu@yahoo.com', '01927072751', '7pm', '01873702067', 'Ayehsa', 'Mother', 'Approximate 350000-500000', 'I am a simple Muslim, Who wants to complete his DEEN through the blessing of ALLAH SWT. Conjugal Life is not a fairy tale. It has a lots of ups n downs .Still we have some expectation for our marriages. For me it???s a way to complete my rest of DEEN. That???s why I want to marry someone who will help me to complete my DEEN, be eyes soothing for me. With whom I can make this DUNIYA a little JANNAH, Where we can prepare ourselves to achieve our final goal ??? THE ETERNAL JANNAH??? In Sha Allah .I following salafi\r\nmanhaj and respect all mazhab(don???t takleed). Regularly, perform salah, listen lecture[Ahmed Musa Jibreel,Assem Al Hakim,Dr.Abu Bakar Zakaria,Dr.Manjur E Elahi,Dr Zakir Nayek,Khalid Yeasin etc my favorite Islamic scholar and study any authentic Islamic books.', 'I don???t want my better half to work outside. She has the mentality to live with my family, not only with me.\r\nPreferably required education is HSC / BBA/Hon???s/studying. Age not over 23 and Height 5 feet 2 Inch to 5 feet\r\n5 inch. Someone studied in an Islamic institution will also do. I expect someone who will be support me about halal income and who would like to live a medium life according to Quran & Sunnah.', 'Medium Family', 0, 1, 163, 163, '2019-12-27 00:13:38', '2019-12-27 00:13:38'),
(60, 164, 'kris wu yi fan', NULL, 'singer', 'kim junmyeon', 'singer', '8', '1', NULL, NULL, NULL, NULL, '9:00 am', '+828888888888', 'kim jongin', 'brother', 'KRW 1000000', 'i am a singer who is at his twenties and enjoying life.\r\ni like to act.\r\ni like to cook.\r\ni am kinda obsessed with color black.\r\nCurrently serving in military.', 'i like someone that has a gorgeous smile, someone who looks hapoy while eating no matter what she is eating.\r\ni like simple fashions, i have a preference about jeans too.', 'High Level', 0, 1, 164, 164, '2019-12-27 22:48:25', '2019-12-27 22:48:39'),
(61, 165, 'Dr. Zia faruk', NULL, 'Doctor', 'Late. Anjuman Ara', 'Housewife', '1', NULL, NULL, NULL, NULL, '01758619400', '5-9 P.M', '01303282627', 'Piash', 'Brother', '8,64,000.00', 'Nothing to say..Nothing to say..Nothing to say..Nothing to say..Nothing to say..', NULL, 'Upper Middle', 0, 1, 165, 165, '2020-01-04 20:09:53', '2020-01-04 20:09:53'),
(62, 166, 'Habibur Rahman', NULL, 'Teacher', 'Shahana Begume', 'Housewife', '1', NULL, '1', '1', NULL, NULL, '10am-11pm', '01713729651', 'S.M.Majidul alam', 'Brother', NULL, 'I\'m Tazu currently i live in china.', NULL, 'Upper Middle', 0, 1, 166, 166, '2020-01-06 22:11:42', '2020-01-06 22:11:42'),
(63, 170, 'Ahmed Choudhury', NULL, 'Businessman', 'Fulbanu Begam', 'Homemaker', NULL, NULL, NULL, NULL, NULL, NULL, '9 am', '+1(407) 710-8748???', 'Fulbanu', 'Mother', NULL, 'I like to travel whenever I have free time.', 'I want a simple life partner.', 'Simple', 0, 1, 170, 170, '2020-01-11 07:42:44', '2020-01-11 07:42:44'),
(64, 172, 'Iftekhar Halim', NULL, 'PA to AGS Bangladesh Railway', 'Farhana alam', 'Housewife', '1', NULL, NULL, NULL, NULL, NULL, 'After 7:30 pm', '01910-177210', 'Tasneem Tabassum Adrika', 'Sister', '1500000', 'I am Mohammad Farhan Fasid Tuku. I\'m Currently working as captain at Bangladesh Army. I love to Travel a lot. I love adventur.', 'I want my life partner to be honest, friendly and helpful. I want my life partner to stand by me in my trouble time', 'Medium Family', 0, 1, 172, 172, '2020-01-17 18:36:39', '2020-01-17 18:36:39'),
(65, 180, 'MD.ALOM MOLLAH', NULL, 'SERVICE', 'FORIDA BEGUM', 'Housewife', '2', '01', '2', '2', 'BAPPIMOLLIK97@GMAIL.COM', '01980528666', '8 AM TO 11 AM', '01781125186', '01703224023', 'MOTHER AND SISTER', '12000/-', 'VERY SIMPLE...I WANT TO GD LIFE PARTNER', NULL, 'Medium Family', 0, 1, 180, 180, '2020-02-01 02:52:47', '2020-02-01 02:52:47'),
(66, 181, 'Rafiqul Islam', NULL, 'Business', 'Ruma Laila', 'Housewife', '2', NULL, '1', NULL, NULL, '01825844121', '9:00AM - 9:00 PM', '01721027565', 'Myself', 'Myself', '240000', 'I am Mahmud.I am looking for a Simple life partner. Who will love me foreve.', NULL, 'Simple', 0, 1, 181, 181, '2020-02-01 07:41:21', '2020-02-01 07:41:21'),
(67, 184, 'Islam', NULL, 'Engineer', 'Islam', 'Housewife', '2', '2', NULL, NULL, 'engineerabir2@gmail.com', NULL, '7 p.m. to 9 p.m.', '01730012585', 'Islam', 'Father', 'Private', 'Daughter of a retired high ranking army officer.\r\nCool, calm, humble, gentle, honest, talented and religion-abiding.', 'Life partner should be honest, hard working, and accommodative.', 'Upper Middle', 0, 1, 184, 184, '2020-02-05 05:39:27', '2020-02-05 05:40:31'),
(68, 185, 'A Y Chowdhury', NULL, 'Business', 'S N Chowdhury', 'Housewife', '3', '2', '2', '2', NULL, NULL, '2:30 pm to 12:00 pm', '01681133390', 'Rana Chowdhury', 'Self', NULL, 'I am living at Dhaka. I like to travel very much.', 'An loyal, honest and well behaved lady. Without the addiction of Indian serials.', 'Upper Middle', 0, 1, 185, 185, '2020-02-10 14:18:27', '2020-02-10 14:18:27'),
(69, 186, 'Shaikh habibur rahman', NULL, 'Engineer', 'Khaleda begum', 'Housewife', '2', '1', '1', '1', 'imalltimeactive@gmail.com', '01677966084', '5pm to 9pm', '01677966084', 'Skrobiul', '01677966084', '20000', 'Amer abbu ak Jon mekdijuda uni mara gaci 7mas hoica ... Akon akta business suro Kore life set korta cai', 'Shudo Amer family nejar family mutom valobasta hoba r Kicu lagba na', 'Medium Family', 0, 1, 186, 186, '2020-02-10 15:35:43', '2020-02-10 15:35:43'),
(70, 187, 'Mohd. Ashraful Alam', NULL, 'Private Job Holder', 'Mrs. Rowshon Ashraf', 'Housewife', NULL, NULL, NULL, NULL, 'shahriar86.aiub@gmail.com', '01873925996', '12.00pm to 11.00Pm', '01676471547', 'Shahriar Asharf', 'Mother', '450000', 'I am Shahriar Ashraf. I have born and brought up in Dhaka in a Muslim family. I like to listen music, watching movie and sports. Traveling is One of my best hobbies. \r\nCharacteristically I am honest, polite and caring.', 'I want my partner will be educated, simple minded, caring and friendly.', 'Medium Family', 0, 1, 187, 187, '2020-02-15 10:02:49', '2020-02-15 10:03:03'),
(71, 188, 'MD Abdul motalib', NULL, 'Banker', 'Zohra begum chowdhury', 'Teacher', '3', '2', NULL, NULL, NULL, NULL, '9:00am to 11pm', '01675300744', 'Rifat', 'Self', '3.50000', 'Assalamualaikum ..I\'m rifat Al Habib saikot..I live in joint family with brother and mother  and nephew..my father is no more.our bonding is so close..and love to stay together..and I\'m banker..and my height is 5.2 bod type average..try to pray and try to be honest all the tym. Nd I love to travel', 'Need a person who care about me Nd my fmlly..Nd who have simple demand.and try to be happy with me whatever I have..', 'Joint', 0, 1, 188, 188, '2020-02-17 06:30:28', '2020-02-17 06:30:28'),
(72, 189, 'Mokhlesh', NULL, 'Service holder', 'Jorina', 'Housewife', '1', NULL, NULL, NULL, NULL, NULL, 'Anytime', '01874843481', 'Saikat', 'Brother', NULL, 'I am typicall bengali girl,i am very simple and friendly.free minded girl.', 'He have to wear panjabi', 'Upper Middle', 0, 1, 189, 189, '2020-02-17 18:43:22', '2020-02-17 18:43:22'),
(73, 191, 'Abd taher', NULL, 'Businessman', 'Saira begum', 'Housewife', '2', NULL, '1', '1', 'asifchy40@ymail.com', '01777888391', 'Anytime', '01777888391', 'Abdul asif', 'Brother', NULL, 'I am aziz from Chittagong bangladesh.', NULL, 'High Level', 0, 1, 191, 191, '2020-02-18 22:43:07', '2020-02-18 22:43:07'),
(74, 194, 'Md.Tarequl Islam', NULL, 'Teacher', 'Nazmun Nahar', 'Housewife', NULL, NULL, '1', '1', 'Naimurtamal96@gmail.com', '01787023349', 'Any', '01953225775', 'Naimur', 'Salf', '360000', 'I am Naimur Rahman Tamal. I am currently live in Dhaka.My hobby is Travelling', NULL, 'Medium Family', 0, 1, 194, 194, '2020-02-20 11:56:47', '2020-02-20 11:56:47'),
(75, 195, 'late M A Kalam', NULL, 'business', 'jebunnesa', 'Housewife', '1', NULL, '1', '1', 'arifaub86@gmail.com', '01731794272', '2.30 -6.00 pm', '01675389779', 'Arif', '01675389779', '500000', 'i am ariful islam juwel ,currently live in dhaka .i like travelling, reading ,mature conversation & like to knowself & others', 'i want my life partner will have good looking,honest,helpful,friendly,will from dhaka & also others capital city.', 'Medium Family', 0, 1, 195, 195, '2020-02-25 03:10:46', '2020-02-25 03:10:46'),
(76, 196, 'Dr Younus Ali', NULL, 'AD Ret.', 'Afroza Begum', 'House wife', '1', '1', '1', '1', 'pamel321@yahoo.com', '01922588032', '12pm', '01915036603', 'Pamel', 'Brother', NULL, 'I am Tanzila Sultana and Dental Surgoen.', 'I want life partner will be a doctor.', 'NA', 0, 1, 196, 196, '2020-02-25 05:35:19', '2020-02-25 05:35:32'),
(77, 197, 'Motiar Rahman', NULL, 'Businessmen', 'Rina Rahman', 'Housewife', '1', NULL, '1', '1', 'sanjidamit95@gmail.com', '01685026271', '10 pm', '+8801627428042', 'Sharif', 'Brother', '6,00,000tk', '????????? ?????????????????????,\r\n????????? ????????? ??????????????????, ?????????????????? ???????????????????????????  ??????????????? ???????????????????????? ???????????? ???????????? ??????????????? ?????????????????? ???????????? ???????????? ???????????? ???????????? ????????????    Thats it', '?????????????????? ???????????? ??????????????????  ??????????????????????????? ????????????,  ??????????????? ?????????????????? ?????? ???????????? ??????????????? ????????????', 'Medium Family', 0, 1, 197, 197, '2020-02-27 06:31:21', '2020-02-27 06:31:21'),
(78, 198, 'hgfh', NULL, 'qwqwd', 'asdadaad', 'asdasd', '2323', '2323', '2323', '2323', 'xxxxxx@bbbb.com', '1312312312312', '5am-8pm', '424234234234', 'rwwett', '234', '5245345235', 'Maneuvering through artificially manufactured digital lives on social media is now the deal of the day for any and all match-makers.\r\n\r\nManeuvering through artificially manufactured digital lives on social media is now the deal of the day for any and all match-makers.\r\n\r\nManeuvering through artificially manufactured digital lives on social media is now the deal of the day for any and all match-makers.', 'Maneuvering through artificially manufactured digital lives on social media is now the deal of the day for any and all match-makers.\r\n\r\nManeuvering through artificially manufactured digital lives on social media is now the deal of the day for any and all match-makers.\r\n\r\nManeuvering through artificially manufactured digital lives on social media is now the deal of the day for any and all match-makers.', 'Upper Middle', 0, 1, 198, 198, '2020-02-28 08:16:15', '2020-02-28 08:16:17'),
(79, 201, 'Late Abdur Rob', NULL, 'N/A', 'Salma Begum', 'Housewife', '2', '1', '1', NULL, NULL, NULL, 'Any Time', '01917330989', 'Shahadat Roni', 'Self', '12,00,000/-', 'I know myself & my friends would agree..\r\nI\'m very independent, loyal, honest and dedicated to my job.', NULL, 'Medium Family', 0, 1, 201, 201, '2020-03-05 19:12:43', '2020-03-05 19:12:43'),
(80, 202, 'Late Kabir Ahmed', NULL, 'Engineer', 'Sohela Akter', 'Service', NULL, NULL, '3', NULL, NULL, NULL, '9:00-11:00', '01912193178', 'Shila Khanam', 'Friend', '1600000', 'Simple honest liberal religious friendly like to read travel a lot...easy going social', 'Honest friendly religious liberal', 'Upper Middle', 0, 1, 202, 202, '2020-03-08 01:42:17', '2020-03-08 01:42:20'),
(81, 204, 'Mahabubur Rahman', NULL, 'Business', 'Farida', 'House wife', NULL, NULL, NULL, NULL, NULL, NULL, '10 A.m to 1 A.m', '01676670069', 'Rabby', 'Its Me', '600000', 'This  is Rabby from uttara.doing job.', 'I want simple behavoiur divorce women', 'Normal', 0, 1, 204, 204, '2020-03-08 06:47:37', '2020-03-08 06:47:49'),
(82, 206, 'Late Shamsul Alam', NULL, 'Teacher', 'Latifa Akhter', 'Housewife', '5', '4', NULL, '4', 'azadfda@gmail.com', '01538112280', '12 to 4 pm', '01552435135', 'Self', 'Self', NULL, 'I am a retired govt. officer(Deputy Director). I have awarded MSS(Economics) from DU. I am very simple, honest, respectful of family & social life. I have lost my wife about 3 years. I have 2 daughter and they are married. Now I am alone and looking for such an woman who can guide &amp; help me properly as a lifelong partner where I can live safely. I am a pension holder and my future wife will get the same pension for her ever life.', NULL, 'Medium Family', 0, 1, 206, 206, '2020-03-13 16:57:29', '2020-03-13 16:57:40'),
(83, 207, 'NA', NULL, 'NA', 'NA', 'NA', NULL, NULL, NULL, NULL, NULL, NULL, 'NA', 'NA', 'NA', 'NA', NULL, 'NA............................................', 'NA.......................................................', 'NA', 0, 1, 207, 207, '2020-03-14 19:23:03', '2020-03-14 19:23:03'),
(84, 208, 'Md. Abdul Jalil', NULL, 'Farmer', 'Most. Tajnur Begum', 'Housewife', '1', NULL, NULL, NULL, 'tarajul95@gmail.com', '01629293759', '10 pm', '01824577570', 'Md. Sagor Khan', 'Friend', '30000', 'I am Md. Tarajul Islam, I am live in Dhaka,I am completed my graduate from Daffodil International University.I am started a new job.', 'I want my life partner will have some virtues like honest, friendly, helpful, sexy,will from dhaka.', 'Medium Family', 0, 1, 208, 208, '2020-03-15 18:04:59', '2020-03-15 18:05:02'),
(85, 212, 'Aktar Uddin', NULL, 'Non', 'Saira Aktar', 'Housewife', '1', NULL, NULL, NULL, 'Mdabutalha60@gmail.com', '01858201848', '12.00 pm to 2.00 pm', '+8801611810694', 'Saira Aktar', 'Mother', '150000', 'Hi.. we are willing marry to any kind girl.... we are financialy weak.... we belong to dhaka...', 'Expecting wealthy family', 'Medium Family', 0, 1, 212, 212, '2020-03-18 07:57:13', '2020-03-18 07:57:41'),
(86, 216, 'MD.Jashim uddin', NULL, 'Retired', 'Salma khatun', 'Housewife', '3', '2', NULL, NULL, 'engahmedtahir789@gmail.com', '01639620658', '9am-11pm', '+8801718012223', 'Salma khatun', 'Mother', '150000', 'Assalamualikum\r\nI am MD.Modabbir Ahmed Tahir.\r\nI am Civil engineer.\r\nI am living sylhet now with my family.I love traveling and want to build up my career , stablish my family also.', 'I want my life partner will have some special things like honest, frankly speaking and friendly', 'Medium Family', 0, 1, 216, 216, '2020-04-04 05:56:04', '2020-04-04 05:56:16'),
(87, 217, 'Md. Bazlur Rahman', NULL, 'Retried govt. Service holder', 'Monowara khanam', 'Retried govt. Service holder', '1', NULL, NULL, NULL, NULL, '01716321336', '2.00pm to 10.pm', '01716321337', 'Khadijatul Busra', 'Self', NULL, 'I am Khadijatul Busra Tani. I am a sensible and straight forward person.', 'Need a partner with good sense of humour and responsibilities.', 'Medium Family', 0, 1, 217, 217, '2020-04-05 22:18:01', '2020-04-05 22:18:01'),
(88, 219, 'Md.Jamal Uddin', NULL, 'Business', 'Zusna Begum', 'Housewife', '3', '1', '2', NULL, 'itanjinul23@gmail.com', '01738980955', '9:00pm-11:00 pm', '01738980955', 'Nazmol', 'Elder brother', '3,00,000 taka', 'I am Tanjinul Islam.  I live in Chakaria, Cox???sBazar.  I am a Teacher.  I want to a girl to become my lifepartner.', 'I want to my lifepartner have some virtuous like honest, educated and friendly.', 'Middle-income', 0, 1, 219, 219, '2020-04-06 06:51:32', '2020-04-06 06:51:32'),
(89, 221, 'Md. Hossain', NULL, 'Teacher', 'Shamima Akter', 'Housewife', '1', NULL, '1', NULL, NULL, NULL, '8 am to 11 pm', '01941849379', 'Saif', 'Father', 'Not applicable', 'She is the student of masters programme in BSMRAU.She lives with her family in Uttara,Dhaka.', 'He should be a religious person and must have a good character.', 'Upper Middle', 0, 1, 221, 221, '2020-04-26 18:19:59', '2020-04-26 18:20:01'),
(90, 222, 'Jafar Iqbal', NULL, 'Service holder', 'Nadira Akter', 'Housewife', '1', NULL, NULL, NULL, 'nahian498@gmail.com', '01714826203', '9 am to 5 pm', '01319931353', 'Nahian Iqbal', 'Self', 'Bdt 500000', 'I am Nahian Iqbal Nuhash.Now I.am living in Dhaka.', 'I want a goog hearted woman', 'Upper Middle', 0, 1, 222, 222, '2020-05-07 11:45:07', '2020-05-07 11:45:08'),
(91, 223, 'Anisur Rahman', NULL, 'Business Man', 'Maya Parvin', 'Housewife', '2', NULL, NULL, NULL, 'mehedihasanakon40@gmail.com', '01517037927', '9am to 7pm', '01674973726', 'Mehedi', 'Self', '500,000', 'I am Mehedi Hasan. I live with my family In Mohammadpur. We have two residents. One is at Savar, another is Mohammadpur.', 'I want to be my life partner honest, religious and educated.', 'Upper Middle', 0, 1, 223, 223, '2020-05-29 02:50:06', '2020-05-29 02:50:06'),
(92, 224, 'Md lokman hossen', NULL, 'Ex army', 'Hafiza akter', 'H.W', '1', NULL, NULL, NULL, 'Djsaim018@gmail.com', '01309516324', 'Anytime', '01309516324', 'Naeem', 'Bro', '200000', 'Nothing to say...I am simple...i need a girl....', 'No', 'Medium Family', 0, 1, 224, 224, '2020-05-29 22:02:15', '2020-05-29 22:02:15'),
(93, 226, 'Rofiqul islam', NULL, 'Engineer', 'nurunnahar parvin', 'Housewife', '1', NULL, NULL, NULL, 'iambijoyr@gmail.com', '01642072487', '9.00 - 10.00', '01642072487', 'nurunnahar parvin', 'cousin', '10,00000', 'i am Bijoy Borkotullah. i live in Dhaka Uttara.', NULL, 'Medium Family', 0, 1, 226, 226, '2020-06-09 01:55:26', '2020-06-09 01:55:31'),
(94, 227, 'Mallik A As Saqui', NULL, 'Agronomist', 'Jesmin Chowdhury', 'Housewife', NULL, NULL, '2', '1', 'samir.mallik2016@gmail.com', '01617181294', 'Anytime', '01617181294', 'Sunny', 'Cousin', NULL, 'Hello this is Samir. I am a very extrovert type of person and love meeting new people.', NULL, 'Upper Middle', 0, 1, 227, 227, '2020-06-10 06:43:13', '2020-06-10 06:43:13'),
(95, 228, 'Ayanna Hendricks', NULL, 'Cillum inventore atq', 'Lenore Hood', 'Qui dolore rem nisi', '68', '3', '499', '98', 'vyjyw@mailinator.com', 'Unde ratione sit qui', 'Reiciendis quasi cum', 'Est quam iusto quide', 'Halla Mccormick', 'Commodo dolore quos', '36', 'Quo libero sequi dig ghfd fgdfg fgrtg fg', 'Fugit non corrupti', 'Sed consectetur et', 0, 1, 228, 228, '2020-06-15 19:52:59', '2020-06-15 19:52:59'),
(96, 229, 'Md. Seraz', NULL, 'Farmer', 'Khaleda', 'Housewife', NULL, NULL, '4', '2', 'mdsohel551120@gmail.com', '01754623464', '10am to 5pm', '01846457164', 'Md Sohel', 'Self', '240000BDT', 'I am an ordinary boy from an ordinary family. I am the only eldest son in the family. After I pass primary, passed Dakhil from Dakhil Madrasa. Then I passed diploma from Shariatpur Polytechnic. As well as studying at a young age, I have done different kinds of work at different times for the needs of the family. Now I am working as a project engineer of Electronics and Telecommunication in a private company LTD. in Dhaka.', 'Many pious and well-meaning people', 'Medium Family', 0, 1, 229, 229, '2020-06-17 15:30:43', '2020-06-17 15:30:43'),
(97, 230, 'Monir Kuddus', NULL, 'Business Man', 'Samara Kuddus', 'Housewife', NULL, NULL, NULL, NULL, NULL, NULL, '3:00 to 7:00', '01868693952', 'Sarah', 'daughter', '200 000', 'I am Sarah Kuddus. I enjoy cooking and reading in my free time. I also love my work as I love kids.', 'Handsome\r\nHonest\r\nCaring\r\nFunny \r\nKind', 'Upper Middle', 0, 1, 230, 230, '2020-06-23 21:47:25', '2020-06-23 21:47:33'),
(98, 234, 'Matiar Rahman', NULL, 'Retired', 'Mahmuda Begum', 'Housewife', '1', NULL, '1', '1', 'rakibhsn@hotmail.com', '01962424273', '9am-10pm', '01962424273', 'Md. Rakib Hasan', 'Self', '120000', 'I am an Engineer. Open and caring minded.', NULL, 'Medium Family', 0, 1, 234, 234, '2020-07-01 03:27:31', '2020-07-01 03:27:31'),
(99, 235, 'Liakat Ali', NULL, 'Professor', 'Joly Shobnom', 'Housewife', '1', NULL, '1', NULL, NULL, NULL, '1 pm to 5 pm', '01713779121', 'Liakat Ali', 'Father', NULL, 'I am Shahriour, Currently enjoying lockdown.', 'Educated\r\nPious', 'Medium Family', 0, 1, 235, 235, '2020-07-03 21:09:34', '2020-07-03 21:09:34'),
(100, 236, 'Moazzam Hossain', NULL, 'Retired Service Holder', 'Shahanara Begum', 'Housewife', '4', '3', '1', '1', 'shafiqkhan.unihealth@gmail.com', '01672849856', '08PM to 12..00AM', '01672849856', 'Shafiq', 'Brother', 'BDT 3,50,000', 'I am shafiq, I am very friendly,free minded.', 'She will be polite,religious and educated.', 'Medium Family', 0, 1, 236, 236, '2020-07-14 05:07:30', '2020-07-14 05:07:30'),
(101, 237, 'Ala Miah', NULL, 'Businessman', 'Jiran Begum', 'Housewife', '2', '1', '5', '4', 'miahbubt@bubt.edu.bd', '017311777219', 'Anytime', '01797422176', 'Kamal', 'Uncle', 'BDT 1000000', 'I am Shahjaha Miah. I love to travelling. I have a best human being sense. Love to respect every human being.', 'I want a part who\'s have good sense, respect all,  honest and free and soft minded.', 'Upper Middle', 0, 1, 237, 237, '2020-07-14 08:33:43', '2020-07-14 08:33:43'),
(102, 238, 'Late Sanowar Hosen', NULL, 'Nothing', 'Sufia Begum', 'Housewife', '5', '5', '5', '5', NULL, NULL, '11 am', '01753258105', 'Me', 'Self', 'Around 8,00,000.00', 'I am a practising muslim Alhamdulillah. I always try to follow sunnah in my daily Activities.', 'I am looking for a medical background, Practising muslim, Fair bride for myself In shaa Allah.', 'Medium Family', 0, 1, 238, 238, '2020-07-16 20:42:57', '2020-07-16 20:42:57'),
(103, 239, 'Mohammad Hossain Jony', NULL, 'Businessman', 'Shahnaz Begum Mitu', 'Housewife', NULL, NULL, '2', '1', 'taniamahbuba7@gmail.com', '+8801966334455', '4 pm', '+8801966334455', 'Mitu', 'Wife', '50000000 BDT', 'I can be described as a liberal and fun-loving human being. I get along well with people who get along well with me.In my free time I read books, meditate and do some workout.', 'I want to life partner to be beautiful,honest,friendly,cooperative and smart.', 'High Level', 0, 1, 239, 239, '2020-07-17 18:55:53', '2020-07-17 18:56:00'),
(104, 240, 'Alauddin', NULL, 'Business', 'Beauty', 'Housewife', '1', NULL, '2', '1', 'Alifaakter2347@gmail.com', '01624825753', '9.90 to 12.00', '01624825753', 'Alifa', 'Self', NULL, 'I am alifa m live in dhaka i am very simple girl', 'I want a life partner who love me a lots  sweet and innocent who love my family', 'Middle class', 0, 1, 240, 240, '2020-07-21 20:19:25', '2020-07-21 20:19:25'),
(105, 241, 'Abdul Khaleque', NULL, 'Retired', 'Shakila Yesmin', 'Housewife', '1', '1', NULL, NULL, NULL, NULL, '2:00 pm to 9 pm', '01711275574', 'Shakila Yesmin', 'Mother', NULL, 'Assalamualikum. I am Fariya. I live in Dhaka with my family. I have completed my graduation in English Language and Literature. I will like to talk more about myself if we have mutual interest.', 'I want my life partner to be friendly, honest, kind, religious, and humble.', 'Medium Family', 0, 1, 241, 241, '2020-07-23 21:38:42', '2020-07-23 21:38:42'),
(106, 244, 'Md.Humayun Kabir', NULL, 'na', 'Shafia Khatun', 'Housewife', '1', '1', '3', '3', 'garmentstangon@gmail.com', '01856385800', '3pm-10pm', '01734669979', 'Shafia Khatun', 'Mother', '1,50,000.00', 'I am Mamun kabir.I like to travel.I like reading books,listening music,watching movies.I am open and straight minded guy.', 'I want my life partner will have some virtues like\r\nhonest,friendly and romantic.', 'Medium Family', 0, 1, 244, 244, '2020-08-10 18:55:50', '2020-08-10 18:55:50');
INSERT INTO `user_family_infos` (`id`, `user_id`, `father_name`, `father_education`, `father_occupation`, `mother_name`, `mother_occupation`, `number_of_brother`, `how_many_brother_married`, `number_of_sister`, `how_many_sister_married`, `alternative_email`, `alternative_mobile`, `convenient_time_to_call`, `contact_person_mobile`, `name_of_contact_person`, `relation_with_contact_person`, `yearly_income`, `about_yourself`, `extra_queries`, `family_type`, `checked`, `can_edit`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(107, 245, 'khandaker sharifur rahman', NULL, 'business', 'nilufa rahman', 'Housewife', '1', NULL, '1', '1', 'shababkhandaker@gmail.com', '01633631699', '12.01 pm to 9 pm', '01633631699', 'towhidur rahman khan', 'uncle ( mamam)', '7,20,000 taka', 'i am shabab working with my fathers business , practicing Muslim family praying salat 5 times. I maintain my life according to Quran and sunnah. i love travelling and exploring .', 'i want my life partner who are loyal and belive to allah and also practising Muslim who maintain her life according to Quran and sunnah and praying salat also .', 'Upper Middle', 0, 1, 245, 245, '2020-08-12 17:11:17', '2020-08-12 17:11:32'),
(108, 246, 'none', NULL, 'Engineer', 'none', 'Housewife', '3', NULL, NULL, NULL, 'none@gmail.com', 'none', '9 am', '01423654345', 'none', 'brother', '50000', 'noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee', 'noneeeeenoneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee noneeeeeeee', 'Medium Family', 0, 1, 246, 246, '2020-08-14 02:09:17', '2020-08-14 02:09:31'),
(109, 247, 'Khandokar Golam Mahmud', NULL, 'retired', 'selima khatun', 'Housewife', '2', '2', '2', '1', 'mafruja1003@gmail.com', '01712727431', '10am to 10pm', '01844217550', 'shihab', 'brother', '500000', 'I\'m Mafruja Akter (Shatu),live in dhaka. i m from middle class family. i have completed BSc Engineering in Information and Telecommunication from a private university. \r\n \r\nI try to practice Islam; Alhamdulillah. I m looking for a religious person who can make a religious family insha allah.\r\n\r\nIf you stand for the same with similar interests, then  we will talk each other. \r\nMay Allah help us all to find our match and be happy in life.', 'Some one who will keep me reminding for good deeds, piousness and to be my companion in the journey of future life.', 'Medium Family', 0, 1, 247, 247, '2020-12-04 19:44:04', '2020-12-04 19:44:07'),
(110, 248, 'Samsul Alam', NULL, 'Teacher', 'Alae Begum', 'Housewife', '1', '1', NULL, NULL, 'munirhosen90@gmail.com', '01916436053', '9am to 4 pm', '01916436053', 'Munir Hosen', 'Self', 'BDT 400000', 'I am Munir Hosen. I Leave in Dhaka, I Love travelling', 'I want to my partner honest.', 'Medium Family', 0, 1, 248, 248, '2020-12-05 03:29:37', '2020-12-05 03:29:37'),
(111, 249, 'Late', NULL, 'Late', 'Later', 'Housewife', '2', '2', '1', '1', NULL, NULL, '7-11pm', '01966577436', 'Self', 'Self', NULL, 'I am later. I live in dhaka. later tell you more.', 'Liberate & open minded person.', 'Medium Family', 0, 1, 249, 249, '2020-12-06 20:09:08', '2020-12-06 20:09:08'),
(112, 250, 'Md:Nasir hossain', NULL, 'General maneger', 'Rehana beugum', 'Housewife', '2', NULL, '1', NULL, NULL, NULL, '9:00', '01633004687', 'Rifat', 'Mother', '360000', 'Iam rifat hossain\r\n.i currently live in dhaka.i like honest person.', 'I want my life Partner will have some virtueslike honest,friendly.helpful,will from Dhaka Narayanganj only', 'Upper Middle', 0, 1, 250, 250, '2020-12-07 07:32:29', '2020-12-07 07:32:33'),
(113, 251, 'Abdur Rahim', NULL, 'Teacher', 'Noor Jahan', 'Housewife', '3', NULL, '2', '1', NULL, NULL, '9.00 PM - 12:00 PM', '01918515567', 'Kamrul Islam Masud', 'Business Partner', NULL, 'I am a happy person who likes simplicity. I think  ethics of a person is the most valuable asset for him/her. I do most of my job myself. I feel happy for being independent and self-sufficient.', 'I want a life partner whom I can respect. Just it! Nothing more nothing less.', 'Medium Family', 0, 1, 251, 251, '2020-12-07 12:45:39', '2020-12-07 12:45:39'),
(114, 255, 'Md. Halal Uddin', NULL, 'Business', 'Ferdousi Begum', 'Housewife', '1', NULL, NULL, NULL, NULL, NULL, 'Any time', '01768013300', 'Firoz Ahmmed', 'Myself', '300000 bdt', 'I am looking for simple, Mature woman who loves me along with my family', NULL, 'Medium Family', 0, 1, 255, 255, '2020-12-12 10:11:07', '2020-12-12 10:11:10'),
(115, 264, 'MD MOHIUDDIN', NULL, 'citizen', 'LATE PARVIN AKTER', 'DIED', NULL, NULL, '1', NULL, 'RAYHANR2487@GMAIL.COM', '+97334123335', 'ANYTIME IN WHATSAPP', '+97334546084', 'MYSELF', 'MYSELF', '400000', 'I am Rayhn uddin from chittagong.Now lives in Bahrain.i love watch movies,listening music.', NULL, 'Middle Family', 0, 1, 264, 264, '2020-12-30 05:53:29', '2020-12-30 05:53:29'),
(116, 265, 'Mowlana Hossain Ahmed', NULL, 'Govt. job holder', 'Rofika Begum', 'Housewife', '5', '2', '1', '1', 'tanvirectbd@gmail.com', NULL, 'any time', '01762100181', 'Tanvir', '01911332423', NULL, 'I am Tanvir Ahmed. I do business. I have seen expatriates before. Examples of seals outside Bangladesh are UAE, Qatar, oman, and turkey. I come to the country now. Bangladesh I do business on a small scale.', 'I want such a bride. He must be pious. He must have good morals. Must be beautiful and must be a worshiper.', 'Middle Family', 0, 1, 265, 265, '2020-12-30 08:01:19', '2020-12-30 08:01:19'),
(117, 271, 'late Syed Mohammad Abul Kashem', NULL, 'Ex-expatriate at Muscat of Oman', 'Alam Ara Begum', 'Homemaker', '3', '2', '4', '4', NULL, NULL, '9 AM to 8 PM', '01770389107', 'self', 'self', NULL, 'This is Raihan from Chittagong. I am currently living in Dhaka. I completed my LL.B. and LL.M. from the University of Dhaka. Now, I am working in a leading law firm of Bangladesh and practising law in the Supreme Court of Bangladesh.', NULL, 'Middle Family', 0, 1, 271, 271, '2021-01-11 02:05:58', '2021-01-11 02:05:58'),
(118, 281, 'sarkar bhusan chandra tarun', NULL, 'job holder', 'archana sarkar', 'Housewife', NULL, NULL, NULL, NULL, 'playboyopu@gamil.com', '01672822235', '2pm to 10pm', '01922652210', 'arup sarkar apu', 'mother', '6,00,000', 'First of all, I would like to thank you to introduce myself.\r\n\r\nMy name is Arup sarkar apu\r\n\r\nI am from khulna\r\n\r\nI have done SSC in Hsc school and BBA and MBA at khulna \r\n\r\nI have done plus two in  college at khulna .\r\n\r\nI have done Degree BBA & MBA   in Gov Bl college at khulna .\r\n\r\nAnd then come to my family.\r\n\r\nMy mother name is Archana sarkar .\r\n\r\nI have a no sister and brother . \r\n\r\nMy hobbies are playing chess, watching movies, hunting, cricket, world politics\r\n\r\nMy strengths are hard-working, easily adaptable to any kind environment and team members.\r\n\r\nMy weakness is I am not comfortable until I finish my work within the given time.\r\n\r\nMy short-term goals to get a job in a reputed company.\r\n\r\nMy long-term goal is a knowledgeable personality, good position in my company.\r\n\r\nThat\'s all about me once again thanks for giving opportunity introduce behind you.', 'painting ,  firefighter,  singer,', 'Upper Middle', 0, 1, 281, 281, '2021-01-29 13:19:07', '2021-01-29 13:19:07'),
(119, 282, 'Syed Md. Abdur Rahim', NULL, 'Retired', 'Syeda Jesmin Ara Begum', 'Housewife', '2', '2', NULL, NULL, NULL, '+8801819008293', '10am to 9pm', '+8801676234788', 'Syed Aman', 'Elder Brother', NULL, 'I am Niger Sultana Popy. I am single Mother. Currently live in Dhaka. I am doing private job as a Trainer  at krylon Bangladesh.', 'I want my life partner who are honestly interested to care me with my daughter.', 'Middle Family', 0, 1, 282, 282, '2021-01-30 04:29:57', '2021-01-30 04:29:58'),
(120, 295, 'Md. Saifur Rahman', NULL, 'Labour', 'Mst. Akhlima Begum', 'Housewife', '1', NULL, '2', '2', 'robiulnoyon08@gmail.com', '01842050081', '2.00 pm', '01746050081', 'Noyon', 'won', '6000', 'I am Robiul  Noyon. I Live in Rajshahi.', 'I Want my Life Patnar, that she cearing me & my Family.', 'Middle Family', 0, 1, 295, 295, '2021-02-09 04:28:05', '2021-02-09 04:41:44'),
(121, 302, 'M. A. Malek', NULL, 'Businessman', 'Khaleda Malek Liza', 'Housewife', NULL, NULL, '1', NULL, NULL, NULL, 'After 7pm', '+8801917750384', 'Khaleda Malek Liza', 'Mother', NULL, 'Calm, simple, well mannered, practicing Muslim girl.', 'Honest, friendly, practicing Muslim.', 'Middle Family', 0, 1, 302, 302, '2021-02-12 13:11:58', '2021-02-12 13:11:58'),
(122, 303, 'Kirsten Lucas', 'Tempore proident t', 'Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '500000', NULL, NULL, NULL, 0, 1, 1, NULL, '2021-02-14 22:06:43', '2021-02-14 22:06:43'),
(123, 304, 'Pearl Holman', 'Maiores exercitation', 'Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50000', NULL, NULL, NULL, 0, 1, 1, NULL, '2021-02-14 22:09:18', '2021-02-14 22:09:18'),
(124, 305, 'Dylan Dale', 'Adipisci aut amet s', 'Doctor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '90600000', NULL, NULL, 'Middle Class', 0, 1, 1, NULL, '2021-02-15 06:43:49', '2021-02-15 06:43:49'),
(125, 306, 'Harper Hayden', 'Qui ut et ipsum omn', 'Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50000', NULL, NULL, 'Higher Middle Class', 0, 1, 1, NULL, '2021-02-15 22:20:56', '2021-02-15 22:20:56'),
(126, 307, 'Urielle Ingram', 'Libero animi ut in', 'Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '80000000', NULL, NULL, 'Higher Middle Class', 0, 1, 1, NULL, '2021-02-17 22:40:17', '2021-02-17 22:40:17'),
(127, 308, 'Mohammad Harun', 'Class 8 Pass', 'Businessman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '240000', NULL, NULL, 'Middle Class', 0, 1, 1, NULL, '2021-02-19 05:35:05', '2021-02-19 05:35:05'),
(128, 309, 'Zahid', 'MA', 'Businessman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50000', NULL, NULL, 'Middle Class', 0, 1, 1, NULL, '2021-02-19 14:14:42', '2021-02-19 14:14:42'),
(129, 310, 'Riaz uddin', 'MBA', 'Businessman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '400000', NULL, NULL, 'Industrial', 0, 1, 1, NULL, '2021-02-20 08:18:48', '2021-02-20 08:18:48'),
(130, 311, 'alem miah', 'safdsafasf', 'Doctor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1000000', NULL, NULL, 'Industrial', 0, 1, 1, NULL, '2021-02-22 11:21:42', '2021-02-22 11:21:42'),
(131, 312, 'Md. Ali Asraf', 'Uneducated', 'Others', 'Mst. Rabia Begum', 'Housewife', NULL, NULL, '2', '1', 'raselhossainrazu71@gmail.com', '01793324812', '8Pm To 12Am', '01793324812', 'Me', 'me', '120000', 'I am Rasel hossain Razu. I am from sirajganj.I am stil student, I have a partime job in ghulshan.I have a lovely family.I love my family so much. Reading, writing, Traveling is my favourite things, \r\n????????? ????????? ?????????,????????? ??????????????????\r\n\"?????????\" ???????????? ???????????? ????????????????????? ????????????\r\n??????????????? ???????????? ????????? ?????????????????? ?????????????????? ???????????????\r\n????????? ???????????? ???????????? ??????????????? ???????????????\r\n????????? ????????????????????? ????????????????????? ?????????????????? ???????????? ????????????\r\n?????? ???????????????????????? ?????????????????? ?????????????????????\r\n????????? ???????????? ????????? ?????????????????????\r\n??????????????? ?????????, ??????????????? ??????????????? ????????????\r\n????????????????????? ?????????????????????, ????????????????????? ????????????????????????????????? ?????? ?????? ?????????????????? ?????????????????? ???????????????????????? ??????????????????\r\n????????????????????? ????????????????????? ????????? ?????? ?????????????????? ??????????????????\r\n????????? ???????????? ???????????? ???????????? ????????????????????? ????????????,\r\n???????????? ?????? ????????? ?????????????????????\r\n????????? ???????????? ?????????,???????????? ?????? ??????????????? ??????????????????\r\n???????????? ???????????? ???????????? ?????????,??????????????? ??????????????? ???????????????????????????\r\n?????????????????? ????????? ????????? ?????????,\r\n???????????? ????????? ??????\'???????????? ????????????', 'Only love me', 'Middle Class', 0, 1, 1, 312, '2021-02-25 21:40:02', '2021-02-28 19:34:34'),
(132, 313, 'Adara Pace', 'Officia id rem in mi', 'Doctor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8200000', NULL, NULL, 'Higher Middle Class', 0, 1, 1, NULL, '2021-02-27 02:08:58', '2021-02-27 02:08:58'),
(133, 314, 'pest', 'doctor', 'Doctor', 'testy', 'Housewife', '2', NULL, NULL, NULL, 'test@gmail.com', '01674111222', '9:00 am to 12:00 pm', '0167555111', 'test', 'bro', '500000', 'I am test, I am currently live in Dhaka. I like to travelling various places...', 'I want my life partner will have some virtues like honest, friendly, helpful, will from dhaka only...', 'Elite Family', 0, 1, 1, 314, '2021-02-27 15:25:38', '2021-02-27 15:37:25'),
(134, 315, 'Lt. HARUN UR RASHID BHUIYAN', 'SSc', 'Businessman', 'Khandakar Naima Zahan', 'Housewife', '1', NULL, '1', NULL, 'toran786@gmail.com', '01918998268', '9.00-12.00', '01777739196', 'Khandakar Naima Zahan', 'Mother', '9,60,000', 'Assalamualaikum. I am a simple person. I am searching same type person.', 'I want a simple & beautiful wife.', 'Middle Class', 0, 1, 1, 315, '2021-02-28 00:28:59', '2021-02-28 00:40:51'),
(135, 316, 'Md.Rafiqul Islam Majumdar', 'Business', 'Businessman', 'Belayter Nehar', 'Housewife', '1', '1', '2', '2', 'opuewu.itworld@gmail.com', '01403800286', '9.00 to 12', '01734258039', 'Mohammad Majumdar', 'Brother', '50000', 'I am Mohammad Anisur Rahman Majumdar. I currently live in Dhaka.', NULL, 'Middle Class', 0, 1, 1, 316, '2021-03-02 11:35:07', '2021-03-02 11:51:43'),
(136, 317, 'Md. Gulam Mostafa', 'B.B.A', 'Others', 'Mrs.Shanaz Parul', 'Housewife', '1', '1', NULL, NULL, 'Clickart@gmail.com', '01968809993', '10.00 a.m - 08.00 p.m', '01920216663', 'Arfan', 'Family friend', '70000', 'Hi\r\nI am mortuza arfan.\r\nI am very silent boy.', 'I want to my life partner is very simple girl', 'Higher Middle Class', 0, 1, 1, 317, '2021-03-03 13:32:15', '2021-03-03 19:16:24'),
(137, 318, 'Rafiqul Islam', 'MBA', 'Others', 'Mahmuda Islam', 'Housewife', '1', NULL, '2', NULL, 'rfqctg@gmail.com', '01720548467', '9:00 am to 12:00 pm', '01673872547', 'Naim Uz Zaman', 'Brother', '50000', 'I am Roksana Islam Poppy, I love to travel and gardening. I aam looking for a caring and honest groom.', 'What is your expectation from your Bride and her family?', 'Middle Class', 0, 1, 1, 318, '2021-03-06 06:06:53', '2021-03-06 06:15:15'),
(138, 319, 'Munsur ALi', 'Eight', 'Others', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100000', NULL, NULL, 'Middle Class', 0, 1, 1, NULL, '2021-03-07 04:35:18', '2021-03-07 04:35:18'),
(139, 320, 'Rashedul H Shimul', 'B.com', 'Businessman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '150000', NULL, NULL, 'Higher Middle Class', 0, 1, 1, NULL, '2021-03-08 05:43:40', '2021-03-08 05:43:40'),
(140, 321, 'nurul islam', 'retired', 'Others', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50000', NULL, NULL, 'Industrial', 0, 1, 1, NULL, '2021-03-09 03:50:00', '2021-03-09 03:50:00'),
(141, 322, 'Md Sirajul Islam', 'Master\'s', 'Others', 'Mst. Aregina', 'Housewife', NULL, NULL, '1', NULL, 'sfcbograzone01@gmail.com', '01785721112', '6 PM to 12 AM', '01762000016', 'Md. Nayem Hossain', 'Self', '300000', 'I am Md. Nayem Hossain. I am Muslim and always try to pray. I am a very Cool person. I like to simple life.', NULL, 'Middle Class', 0, 1, 1, 322, '2021-03-10 03:30:09', '2021-03-10 03:49:54'),
(142, 323, 'Brynn Wallace', 'Id voluptates lauda', 'Industrialist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '76423243234', NULL, NULL, 'Higher Middle Class', 0, 1, 1, NULL, '2021-03-11 00:28:43', '2021-03-11 00:28:43'),
(143, 324, 'Md Samsul Haque rasel', 'HSC', 'Businessman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '60000', NULL, NULL, 'Middle Class', 0, 1, 1, NULL, '2021-03-16 09:32:56', '2021-03-16 09:32:56'),
(144, 325, 'K. M. Oliar', 'Bachalor', 'Others', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50000', NULL, NULL, 'Higher Middle Class', 0, 1, 1, NULL, '2021-03-16 10:55:35', '2021-03-16 10:55:35'),
(145, 326, 'Md Billal Hossain', 'Uneducated', 'Others', 'Ranu Begum', 'Housewife', '1', '1', '1', '1', 'ahmedeasin111@gmail.com', '01643301171', '5pm-10pm', '01849855211', 'Shahadat Hossain', 'Brother', '8000', 'I am Md Easin Hossain, I lived in Savar, Dhaka, studied at diploma in Electrical  Engineering  department', 'I want my partner who is completed Hafeza, alema or running student of this.', 'Middle Class', 0, 1, 1, 326, '2021-03-17 23:50:51', '2021-03-18 00:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `membership_package_id` int(11) DEFAULT NULL,
  `package_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_amount` decimal(10,2) DEFAULT NULL,
  `package_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `paid_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`id`, `status`, `membership_package_id`, `package_title`, `package_description`, `package_amount`, `package_currency`, `package_duration`, `paid_amount`, `paid_currency`, `payment_method`, `payment_details`, `admin_comment`, `user_id`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(2, 'paid', 4, 'Enterprise (Bangladesh)', 'One Year Membership for Bangladeshi People', 9500.00, 'BDT', '365', 9000.00, 'BDT', 'bKash', 'some info with bkash/bank transaction history', 'some admin comment', 1, 1, 1, '2019-01-10 13:47:34', '2019-01-10 13:47:34'),
(98, 'paid', 1, 'Starter (Bangladesh)', '45 Days Membership for Bangladeshi People', 10.00, 'BDT', '45', 10.00, 'BDT', 'online', NULL, NULL, 1, 1, 1, '2019-03-29 02:27:47', '2019-03-29 02:30:15'),
(100, 'paid', 1, 'Starter (Bangladesh)', '45 Days Membership for Bangladeshi People', 10.00, 'BDT', '45', 10.00, 'BDT', 'online', NULL, NULL, 16, 16, 16, '2019-04-10 22:24:19', '2019-04-10 22:25:47'),
(103, 'pending', 5, 'Starter (Foreign)', '45 Days Membership for Outside Bangladesh', 36.00, 'USD', '45', NULL, 'BDT', 'Bank', NULL, NULL, 60, 60, NULL, '2019-04-23 16:15:18', '2019-04-23 16:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_photos`
--

CREATE TABLE `user_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `img_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_original_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_mime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autoload` tinyint(1) NOT NULL DEFAULT 1,
  `checked` tinyint(1) NOT NULL DEFAULT 0,
  `can_edit` tinyint(1) NOT NULL DEFAULT 1,
  `addedby_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_photos`
--

INSERT INTO `user_photos` (`id`, `img_name`, `img_original_name`, `img_url`, `img_size`, `img_width`, `img_height`, `img_ext`, `img_mime`, `img_type`, `autoload`, `checked`, `can_edit`, `addedby_id`, `editedby_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1_pub_2018_12_06_095818_sILP9ZlC.JPG', 'mypic.JPG', 'storage/users/photos/1_pub_2018_12_06_095818_sILP9ZlC.JPG', '168608', '472', '591', 'JPG', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 1, '2018-12-07 02:58:18', '2018-12-07 02:58:19', NULL),
(2, '16_pub_2018_12_08_045642_B2yamrq3.png', '44045303_257046734955303_3559530927690350592_n.png', 'storage/users/photos/16_pub_2018_12_08_045642_B2yamrq3.png', '428260', '768', '576', 'png', 'image/png', 'public', 0, 0, 1, 16, NULL, 16, '2018-12-08 21:56:42', '2018-12-08 21:56:42', NULL),
(5, '21_pub_2019_01_07_073402_VO2jYvl7.jpg', 'ff.jpg', 'storage/users/photos/21_pub_2019_01_07_073402_VO2jYvl7.jpg', '70250', '1280', '720', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 21, '2019-01-07 12:34:02', '2019-01-07 12:34:02', NULL),
(6, '20_pub_2019_01_07_073527_mT5JBo5H.jpg', 'ff.jpg', 'storage/users/photos/20_pub_2019_01_07_073527_mT5JBo5H.jpg', '822762', '2159', '2159', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 20, '2019-01-07 12:35:27', '2019-01-07 12:35:27', NULL),
(9, '19_pub_2019_01_07_073722_B0WAKoQc.jpg', 'ff.jpg', 'storage/users/photos/19_pub_2019_01_07_073722_B0WAKoQc.jpg', '31392', '449', '567', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 19, '2019-01-07 12:37:22', '2019-01-07 12:37:22', NULL),
(13, '18_pub_2019_01_07_075141_Pp7vh6pK.jpeg', 'ff.jpeg', 'storage/users/photos/18_pub_2019_01_07_075141_Pp7vh6pK.jpeg', '180514', '720', '1280', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 18, '2019-01-07 12:51:41', '2019-01-07 12:51:41', NULL),
(14, '22_pub_2019_01_11_094959_MUV1nYju.jpg', 'ss.jpg', 'storage/users/photos/22_pub_2019_01_11_094959_MUV1nYju.jpg', '231576', '1066', '1118', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 22, '2019-01-12 02:49:59', '2019-01-12 02:49:59', NULL),
(15, 'ZWuI04ka1547390379.jpg', '40472339_2513813371967453_2125748845739507712_o.jpg', 'storage/users/photos/ZWuI04ka1547390379.jpg', '101522', '1334', '889', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 24, NULL, 24, '2019-01-14 01:39:39', '2019-01-14 01:39:39', NULL),
(16, '23_pub_2019_01_19_121522_gPghTZUA.jpg', 'aa.jpg', 'storage/users/photos/23_pub_2019_01_19_121522_gPghTZUA.jpg', '58826', '461', '594', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 23, '2019-01-19 17:15:22', '2019-01-19 17:15:22', NULL),
(17, '24_pub_2019_01_19_121710_aJR194mP.jpg', 'aa.jpg', 'storage/users/photos/24_pub_2019_01_19_121710_aJR194mP.jpg', '86703', '904', '889', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 24, '2019-01-19 17:17:10', '2019-01-19 17:17:10', NULL),
(18, '26_pub_2019_01_23_020527_xU1iauRb.jpg', 'aaaaaaaaaaaaaaaaaaaa.jpg', 'storage/users/photos/26_pub_2019_01_23_020527_xU1iauRb.jpg', '296702', '1517', '1875', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 26, '2019-01-23 19:05:27', '2019-01-23 19:05:27', NULL),
(19, '25_pub_2019_01_23_020604_5x5s0h94.png', 'aaaaaaaaaaa.png', 'storage/users/photos/25_pub_2019_01_23_020604_5x5s0h94.png', '979341', '540', '960', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 25, '2019-01-23 19:06:04', '2019-01-23 19:06:04', NULL),
(20, '27_pub_2019_01_23_020629_Bj4nBt1f.jpeg', 'aaaaaaaaaaa.jpeg', 'storage/users/photos/27_pub_2019_01_23_020629_Bj4nBt1f.jpeg', '80342', '720', '960', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 27, '2019-01-23 19:06:29', '2019-01-23 19:06:29', NULL),
(21, '28_pub_2019_01_23_020655_RAyAmpIk.jpg', 'aaaaaaaaaa.jpg', 'storage/users/photos/28_pub_2019_01_23_020655_RAyAmpIk.jpg', '58455', '960', '639', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 28, '2019-01-23 19:06:55', '2019-01-23 19:06:55', NULL),
(22, '6HPqQWNZ1549092247.jpg', '46435011_2101166716767697_830950595522199552_n.jpg', 'storage/users/photos/6HPqQWNZ1549092247.jpg', '229446', '1200', '1800', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 34, NULL, 34, '2019-02-02 18:24:08', '2019-02-02 18:24:08', NULL),
(23, 'uhkqZVsF1549092304.jpg', 'DSC_8830.jpg', 'storage/users/photos/uhkqZVsF1549092304.jpg', '284965', '1200', '1800', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 34, NULL, 34, '2019-02-02 18:25:04', '2019-02-02 18:25:04', NULL),
(25, 'rjcDPjqZ1549092370.jpg', 'DSC_8648.jpg', 'storage/users/photos/rjcDPjqZ1549092370.jpg', '275662', '1200', '1800', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 34, NULL, 34, '2019-02-02 18:26:10', '2019-02-02 18:26:10', NULL),
(26, '34_pub_2019_02_02_020650_7RwLL82K.jpg', 'S.jpg', 'storage/users/photos/34_pub_2019_02_02_020650_7RwLL82K.jpg', '309781', '1200', '1800', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 34, '2019-02-02 19:06:50', '2019-02-02 19:06:50', NULL),
(27, 'lb8k1oZo1550986024.jpg', 's.jpg', 'storage/users/photos/lb8k1oZo1550986024.jpg', '97652', '960', '640', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 48, '2019-02-24 16:27:04', '2019-02-24 16:27:04', NULL),
(28, '48_pub_2019_02_24_112804_2SzozwgT.jpg', 's.jpg', 'storage/users/photos/48_pub_2019_02_24_112804_2SzozwgT.jpg', '97652', '960', '640', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 48, '2019-02-24 16:28:04', '2019-02-24 16:28:04', NULL),
(29, '48_pub_2019_02_24_112805_V3DYu7ZJ.jpg', 's.jpg', 'storage/users/photos/48_pub_2019_02_24_112805_V3DYu7ZJ.jpg', '97652', '960', '640', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 48, '2019-02-24 16:28:05', '2019-02-24 16:28:05', NULL),
(30, '47_pub_2019_02_24_112904_64dDFy0m.jpeg', 'naushadju.jpeg', 'storage/users/photos/47_pub_2019_02_24_112904_64dDFy0m.jpeg', '61703', '720', '429', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 47, '2019-02-24 16:29:04', '2019-02-24 16:29:04', NULL),
(31, '46_pub_2019_02_24_113009_pRja0uxS.jpg', 'Saifur.jpg', 'storage/users/photos/46_pub_2019_02_24_113009_pRja0uxS.jpg', '13490', '212', '282', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 46, '2019-02-24 16:30:09', '2019-02-24 16:30:09', NULL),
(32, 'ALdusXUC1554085909.jpg', 'This orks.jpg', 'storage/users/photos/ALdusXUC1554085909.jpg', '3515121', '4032', '3024', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 60, NULL, 60, '2019-04-01 13:31:53', '2019-04-01 13:31:53', NULL),
(33, 'N714edyw1554085929.jpg', 'IMG_20190217_124954_922.jpg', 'storage/users/photos/N714edyw1554085929.jpg', '182234', '969', '969', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 60, NULL, 60, '2019-04-01 13:32:09', '2019-04-01 13:32:09', NULL),
(34, 'ni4P1n6o1554085942.jpeg', 'received_502749016918480.jpeg', 'storage/users/photos/ni4P1n6o1554085942.jpeg', '447882', '3024', '4032', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 60, NULL, 60, '2019-04-01 13:32:22', '2019-04-01 13:32:22', NULL),
(35, '7dhSU9Nk1554085962.jpg', 'PicsArt_03-22-11.47.00.jpg', 'storage/users/photos/7dhSU9Nk1554085962.jpg', '343704', '1600', '1200', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 60, NULL, 60, '2019-04-01 13:32:42', '2019-04-01 13:32:42', NULL),
(37, 'pVpzpZbc1556567959.jpg', '20181118_132511.jpg', 'storage/users/photos/pVpzpZbc1556567959.jpg', '1958882', '2560', '1440', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 74, NULL, 74, '2019-04-30 06:59:20', '2019-04-30 06:59:20', NULL),
(38, 'mj19QKPl1556690249.jpg', '37196230_1636056109853863_2982033009504419840_o.jpg', 'storage/users/photos/mj19QKPl1556690249.jpg', '125358', '1079', '1079', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 75, NULL, 75, '2019-05-01 16:57:29', '2019-05-01 16:57:29', NULL),
(43, '85_pub_2019_05_25_113954_58YEe2pD.jpg', 'Israt.jpg', 'storage/users/photos/85_pub_2019_05_25_113954_58YEe2pD.jpg', '250729', '960', '1280', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 85, '2019-05-25 16:39:55', '2019-05-25 16:39:55', NULL),
(44, '6Sn9ClRl1560455832.jpg', 'Reza (2).jpg', 'storage/users/photos/6Sn9ClRl1560455832.jpg', '417386', '720', '1280', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 57, NULL, 57, '2019-06-14 06:57:12', '2019-06-14 06:57:12', NULL),
(45, '91_pub_2019_07_21_110759_O8U49HHQ.png', '91_pp_2019_06_14_032612_77106530.png', 'storage/users/photos/91_pub_2019_07_21_110759_O8U49HHQ.png', '322643', '480', '960', 'png', 'image/png', 'public', 0, 0, 1, 16, NULL, 91, '2019-07-21 16:07:59', '2019-07-21 16:07:59', NULL),
(46, '90_pub_2019_07_21_111639_aPAmzUK5.jpg', 'Moumita Perveen.jpg', 'storage/users/photos/90_pub_2019_07_21_111639_aPAmzUK5.jpg', '11940', '200', '200', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 90, '2019-07-21 16:16:39', '2019-07-21 16:16:39', NULL),
(47, 'Vqt3bffS1564323302.JPG', 'SOCIAL MEDIA UPLOAD-299.JPG', 'storage/users/photos/Vqt3bffS1564323302.JPG', '1248301', '1333', '2000', 'JPG', 'image/jpeg', 'public', 0, 0, 1, 108, NULL, 108, '2019-07-29 01:15:05', '2019-07-29 01:15:05', NULL),
(48, 'KctdfnbN1567940321.jpg', 'IMG_20190908_161152.jpg', 'storage/users/photos/KctdfnbN1567940321.jpg', '67616', '720', '892', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 127, NULL, 127, '2019-09-08 21:58:42', '2019-09-08 21:58:42', NULL),
(49, 'ZOYqLZyz1571590736.JPG', 'Pik in B bondhu cottor.JPG', 'storage/users/photos/ZOYqLZyz1571590736.JPG', '718521', '2240', '1680', 'JPG', 'image/jpeg', 'public', 0, 0, 1, 144, NULL, 144, '2019-10-21 03:58:56', '2019-10-21 03:58:56', NULL),
(50, 'pzrqX4w31577444213.jpg', 'FB_IMG_1565108068397.jpg', 'storage/users/photos/pzrqX4w31577444213.jpg', '27433', '461', '614', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 164, NULL, 164, '2019-12-27 22:56:53', '2019-12-27 22:56:53', NULL),
(51, 'haVCDrAe1579243238.png', 'Screenshot_2020-01-17-12-05-42-1-1.png', 'storage/users/photos/haVCDrAe1579243238.png', '247152', '307', '711', 'png', 'image/png', 'public', 0, 0, 1, 172, NULL, 172, '2020-01-17 18:40:38', '2020-01-17 18:40:38', NULL),
(52, 'LJvcodDt1580499960.jpg', 'IMG_20200109_181734.jpg', 'storage/users/photos/LJvcodDt1580499960.jpg', '5192168', '4208', '1940', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 181, NULL, 181, '2020-02-01 07:46:04', '2020-02-01 07:46:04', NULL),
(53, '67KvPbCO1581718607.jpg', 'IMG_20191117_213424.jpg', 'storage/users/photos/67KvPbCO1581718607.jpg', '567160', '1051', '2878', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 187, NULL, 187, '2020-02-15 10:16:47', '2020-02-15 10:16:47', NULL),
(54, 'zljiEVyb1581718607.jpg', 'IMG_20191117_214517.jpg', 'storage/users/photos/zljiEVyb1581718607.jpg', '223137', '750', '1406', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 187, NULL, 187, '2020-02-15 10:16:47', '2020-02-15 10:16:47', NULL),
(55, 'BCDc9SAD1581718607.jpg', 'IMG_20191025_230140.jpg', 'storage/users/photos/BCDc9SAD1581718607.jpg', '310337', '1080', '1440', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 187, NULL, 187, '2020-02-15 10:16:47', '2020-02-15 10:16:47', NULL),
(56, 'LhZCzyja1581718607.jpg', 'IMG_20190608_005957.jpg', 'storage/users/photos/LhZCzyja1581718607.jpg', '903552', '1235', '2057', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 187, NULL, 187, '2020-02-15 10:16:49', '2020-02-15 10:16:49', NULL),
(57, 'OCAOBtwI1581718609.jpg', 'IMG_20200107_155301.jpg', 'storage/users/photos/OCAOBtwI1581718609.jpg', '1002471', '1845', '1440', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 187, NULL, 187, '2020-02-15 10:16:49', '2020-02-15 10:16:49', NULL),
(58, 'AMrBCiCe1584255964.jpg', 'TARAJUL.jpg', 'storage/users/photos/AMrBCiCe1584255964.jpg', '45865', '300', '300', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 208, NULL, 208, '2020-03-15 18:06:04', '2020-03-15 18:06:04', NULL),
(59, '2K7HPE3V1587885756.JPG', 'IMG_3436.JPG', 'storage/users/photos/2K7HPE3V1587885756.JPG', '5725986', '3024', '4032', 'JPG', 'image/jpeg', 'public', 0, 0, 1, 221, NULL, 221, '2020-04-26 18:22:43', '2020-04-26 18:22:43', NULL),
(61, '7itnjHNc1592454561.jpg', 'Sohel551120.jpg', 'storage/users/photos/7itnjHNc1592454561.jpg', '76451', '160', '160', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 229, NULL, 229, '2020-06-18 15:29:22', '2020-06-18 15:29:22', NULL),
(62, 'BiorkiYk1593534559.jpg', 'Photo1.jpg', 'storage/users/photos/BiorkiYk1593534559.jpg', '121932', '1161', '864', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 234, NULL, 234, '2020-07-01 03:29:20', '2020-07-01 03:29:20', NULL),
(63, '4u1ncbAo1594664145.jpg', 'IMG_20191015_212641.jpg', 'storage/users/photos/4u1ncbAo1594664145.jpg', '2679661', '3977', '3212', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 236, NULL, 236, '2020-07-14 05:15:50', '2020-07-14 05:15:50', NULL),
(71, 'RCWxTZfc1607326541.jpg', 'FB_IMG_16073262878312358.jpg', 'storage/users/photos/RCWxTZfc1607326541.jpg', '281037', '612', '816', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 250, NULL, 250, '2020-12-07 07:35:41', '2020-12-07 07:35:41', NULL),
(72, '251_pub_2020_12_07_065511_6hf8TbJP.gif', 'giphy.gif', 'storage/users/photos/251_pub_2020_12_07_065511_6hf8TbJP.gif', '1449065', '512', '512', 'gif', 'image/gif', 'public', 0, 0, 1, 1, NULL, 251, '2020-12-07 12:55:11', '2020-12-07 12:55:11', NULL),
(73, '16_pub_2020_12_07_065730_9FtaQ8Hq.gif', 'giphy.gif', 'storage/users/photos/16_pub_2020_12_07_065730_9FtaQ8Hq.gif', '1449065', '512', '512', 'gif', 'image/gif', 'public', 0, 0, 1, 1, NULL, 16, '2020-12-07 12:57:30', '2020-12-07 12:57:31', NULL),
(74, '1_pub_2020_12_07_065924_MyWdsGZ8.gif', 'giphy.gif', 'storage/users/photos/1_pub_2020_12_07_065924_MyWdsGZ8.gif', '1449065', '512', '512', 'gif', 'image/gif', 'public', 0, 0, 1, 1, NULL, 1, '2020-12-07 12:59:24', '2020-12-07 12:59:24', NULL),
(75, '265_pub_2021_01_07_055736_4eVSxabT.jpg', 'auckland-indian-wedding-photographers-1000-750x500.jpg', 'storage/users/photos/265_pub_2021_01_07_055736_4eVSxabT.jpg', '128463', '750', '500', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 265, '2021-01-06 23:57:36', '2021-01-06 23:57:36', NULL),
(76, '266_pub_2021_01_07_055808_XCrheVwO.jpg', '10-indian-wedding.jpg', 'storage/users/photos/266_pub_2021_01_07_055808_XCrheVwO.jpg', '221240', '934', '700', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 266, '2021-01-06 23:58:09', '2021-01-06 23:58:09', NULL),
(77, '2_pub_2021_01_07_060910_vCYeZnLQ.jpg', 'm9.jpg', 'storage/users/photos/2_pub_2021_01_07_060910_vCYeZnLQ.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 2, '2021-01-07 00:09:10', '2021-01-07 00:09:10', NULL),
(78, '3_pub_2021_01_07_060947_QDAFRUFH.png', 'm7.png', 'storage/users/photos/3_pub_2021_01_07_060947_QDAFRUFH.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 3, '2021-01-07 00:09:47', '2021-01-07 00:09:47', NULL),
(79, '4_pub_2021_01_07_061014_vy3ThbBz.jpeg', 'm6.jpeg', 'storage/users/photos/4_pub_2021_01_07_061014_vy3ThbBz.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 4, '2021-01-07 00:10:14', '2021-01-07 00:10:14', NULL),
(80, '5_pub_2021_01_07_061048_Z3HMsdwK.jpeg', 'm1.jpeg', 'storage/users/photos/5_pub_2021_01_07_061048_Z3HMsdwK.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 5, '2021-01-07 00:10:48', '2021-01-07 00:10:48', NULL),
(81, '6_pub_2021_01_07_061118_aW78nxaj.jpg', 'm2.jpg', 'storage/users/photos/6_pub_2021_01_07_061118_aW78nxaj.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 6, '2021-01-07 00:11:18', '2021-01-07 00:11:18', NULL),
(82, '7_pub_2021_01_07_061221_3HPS7UBv.png', 'm7.png', 'storage/users/photos/7_pub_2021_01_07_061221_3HPS7UBv.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 7, '2021-01-07 00:12:21', '2021-01-07 00:12:21', NULL),
(83, '9_pub_2021_01_07_061326_k2ooY0n4.jpg', 'm4.jpg', 'storage/users/photos/9_pub_2021_01_07_061326_k2ooY0n4.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 9, '2021-01-07 00:13:26', '2021-01-07 00:13:26', NULL),
(84, '10_pub_2021_01_07_061417_iV6JqcLh.jpg', '1.jpg', 'storage/users/photos/10_pub_2021_01_07_061417_iV6JqcLh.jpg', '30577', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 10, '2021-01-07 00:14:17', '2021-01-07 00:14:18', NULL),
(85, '11_pub_2021_01_07_061431_mkuW6EUA.jpg', '2.jpg', 'storage/users/photos/11_pub_2021_01_07_061431_mkuW6EUA.jpg', '75002', '613', '613', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 11, '2021-01-07 00:14:32', '2021-01-07 00:14:32', NULL),
(86, '11_pub_2021_01_07_061446_ZW1goWdf.jpg', 'm5.jpg', 'storage/users/photos/11_pub_2021_01_07_061446_ZW1goWdf.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 11, '2021-01-07 00:14:46', '2021-01-07 00:14:46', NULL),
(87, '13_pub_2021_01_07_061511_qCdSQiBp.jpg', '2.jpg', 'storage/users/photos/13_pub_2021_01_07_061511_qCdSQiBp.jpg', '75002', '613', '613', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 13, '2021-01-07 00:15:11', '2021-01-07 00:15:11', NULL),
(88, '14_pub_2021_01_07_061530_2qMm0qBd.jpg', 'm8.jpg', 'storage/users/photos/14_pub_2021_01_07_061530_2qMm0qBd.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 14, '2021-01-07 00:15:30', '2021-01-07 00:15:30', NULL),
(89, '15_pub_2021_01_07_061558_9iGhDjeq.jpg', 'm10.jpg', 'storage/users/photos/15_pub_2021_01_07_061558_9iGhDjeq.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 15, '2021-01-07 00:15:58', '2021-01-07 00:15:58', NULL),
(90, '17_pub_2021_01_07_061619_FkWytT2G.png', 'm7.png', 'storage/users/photos/17_pub_2021_01_07_061619_FkWytT2G.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 17, '2021-01-07 00:16:19', '2021-01-07 00:16:19', NULL),
(91, '18_pub_2021_01_07_061645_jRzX91iD.jpeg', 'm3.jpeg', 'storage/users/photos/18_pub_2021_01_07_061645_jRzX91iD.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 18, '2021-01-07 00:16:45', '2021-01-07 00:16:45', NULL),
(92, '19_pub_2021_01_07_061713_WKSXFhyS.jpeg', 'm1.jpeg', 'storage/users/photos/19_pub_2021_01_07_061713_WKSXFhyS.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 19, '2021-01-07 00:17:13', '2021-01-07 00:17:13', NULL),
(93, '20_pub_2021_01_07_061750_4x9fen4q.jpg', 'm10.jpg', 'storage/users/photos/20_pub_2021_01_07_061750_4x9fen4q.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 20, '2021-01-07 00:17:50', '2021-01-07 00:17:50', NULL),
(94, '21_pub_2021_01_07_061802_b4iTcjFo.jpg', '3.jpg', 'storage/users/photos/21_pub_2021_01_07_061802_b4iTcjFo.jpg', '76258', '470', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 21, '2021-01-07 00:18:02', '2021-01-07 00:18:02', NULL),
(95, '22_pub_2021_01_07_061819_HrLugr5z.png', '3.png', 'storage/users/photos/22_pub_2021_01_07_061819_HrLugr5z.png', '382738', '382', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 22, '2021-01-07 00:18:19', '2021-01-07 00:18:19', NULL),
(96, '22_pub_2021_01_07_061836_0ytBwbaC.jpeg', 'm6.jpeg', 'storage/users/photos/22_pub_2021_01_07_061836_0ytBwbaC.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 22, '2021-01-07 00:18:36', '2021-01-07 00:18:36', NULL),
(97, '23_pub_2021_01_07_061923_zLOlcVmz.jpg', 'm2.jpg', 'storage/users/photos/23_pub_2021_01_07_061923_zLOlcVmz.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 23, '2021-01-07 00:19:23', '2021-01-07 00:19:23', NULL),
(98, '24_pub_2021_01_07_061947_tFxEbW5w.jpg', 'm5.jpg', 'storage/users/photos/24_pub_2021_01_07_061947_tFxEbW5w.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 24, '2021-01-07 00:19:47', '2021-01-07 00:19:47', NULL),
(99, '25_pub_2021_01_07_062008_ph4RPESb.jpg', 'm9.jpg', 'storage/users/photos/25_pub_2021_01_07_062008_ph4RPESb.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 25, '2021-01-07 00:20:08', '2021-01-07 00:20:08', NULL),
(100, '26_pub_2021_01_07_062044_v9XxRNtl.jpg', 'm8.jpg', 'storage/users/photos/26_pub_2021_01_07_062044_v9XxRNtl.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 26, '2021-01-07 00:20:44', '2021-01-07 00:20:44', NULL),
(101, '26_pub_2021_01_07_062054_0yaxpily.jpg', '4.jpg', 'storage/users/photos/26_pub_2021_01_07_062054_0yaxpily.jpg', '106252', '613', '643', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 26, '2021-01-07 00:20:54', '2021-01-07 00:20:54', NULL),
(102, '27_pub_2021_01_07_062121_Bwg9ztlI.jpg', 'm4.jpg', 'storage/users/photos/27_pub_2021_01_07_062121_Bwg9ztlI.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 27, '2021-01-07 00:21:21', '2021-01-07 00:21:21', NULL),
(103, '28_pub_2021_01_07_062147_pZKHVPxQ.jpeg', 'm3.jpeg', 'storage/users/photos/28_pub_2021_01_07_062147_pZKHVPxQ.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 28, '2021-01-07 00:21:47', '2021-01-07 00:21:47', NULL),
(104, '29_pub_2021_01_07_062206_ncC2rLvg.jpg', 'm2.jpg', 'storage/users/photos/29_pub_2021_01_07_062206_ncC2rLvg.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 29, '2021-01-07 00:22:06', '2021-01-07 00:22:06', NULL),
(105, '30_pub_2021_01_07_062336_I7lDKPYC.jpeg', 'm3.jpeg', 'storage/users/photos/30_pub_2021_01_07_062336_I7lDKPYC.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 30, '2021-01-07 00:23:36', '2021-01-07 00:23:37', NULL),
(106, '31_pub_2021_01_07_062412_M9QktFpK.jpeg', 'm1.jpeg', 'storage/users/photos/31_pub_2021_01_07_062412_M9QktFpK.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 31, '2021-01-07 00:24:12', '2021-01-07 00:24:12', NULL),
(107, '32_pub_2021_01_07_062445_3caNapUA.jpg', 'm4.jpg', 'storage/users/photos/32_pub_2021_01_07_062445_3caNapUA.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 32, '2021-01-07 00:24:45', '2021-01-07 00:24:46', NULL),
(108, '33_pub_2021_01_07_062510_06e0EuOu.jpg', 'm5.jpg', 'storage/users/photos/33_pub_2021_01_07_062510_06e0EuOu.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 33, '2021-01-07 00:25:10', '2021-01-07 00:25:11', NULL),
(109, '34_pub_2021_01_07_062533_fpAzjUne.jpeg', 'm6.jpeg', 'storage/users/photos/34_pub_2021_01_07_062533_fpAzjUne.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 34, '2021-01-07 00:25:33', '2021-01-07 00:25:33', NULL),
(110, '35_pub_2021_01_07_062641_UHGQxtiB.png', 'm7.png', 'storage/users/photos/35_pub_2021_01_07_062641_UHGQxtiB.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 35, '2021-01-07 00:26:41', '2021-01-07 00:26:42', NULL),
(111, '36_pub_2021_01_07_062725_0rIxLc9I.png', 'm7.png', 'storage/users/photos/36_pub_2021_01_07_062725_0rIxLc9I.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 36, '2021-01-07 00:27:25', '2021-01-07 00:27:25', NULL),
(112, '37_pub_2021_01_07_062807_r85Kxwrg.jpg', 'm8.jpg', 'storage/users/photos/37_pub_2021_01_07_062807_r85Kxwrg.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 37, '2021-01-07 00:28:07', '2021-01-07 00:28:07', NULL),
(113, '38_pub_2021_01_07_062829_BtMwW9Ia.jpg', 'm9.jpg', 'storage/users/photos/38_pub_2021_01_07_062829_BtMwW9Ia.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 38, '2021-01-07 00:28:29', '2021-01-07 00:28:30', NULL),
(114, '39_pub_2021_01_07_062851_lJOG7q8z.jpg', 'm10.jpg', 'storage/users/photos/39_pub_2021_01_07_062851_lJOG7q8z.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 39, '2021-01-07 00:28:51', '2021-01-07 00:28:51', NULL),
(115, '40_pub_2021_01_07_062934_zfWrSUd4.jpeg', 'm1.jpeg', 'storage/users/photos/40_pub_2021_01_07_062934_zfWrSUd4.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 40, '2021-01-07 00:29:34', '2021-01-07 00:29:34', NULL),
(116, '41_pub_2021_01_07_063013_Ippus9T8.jpg', 'm2.jpg', 'storage/users/photos/41_pub_2021_01_07_063013_Ippus9T8.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 41, '2021-01-07 00:30:13', '2021-01-07 00:30:13', NULL),
(117, '42_pub_2021_01_07_063109_EBN4y0WQ.jpg', '5.jpg', 'storage/users/photos/42_pub_2021_01_07_063109_EBN4y0WQ.jpg', '32321', '554', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 42, '2021-01-07 00:31:09', '2021-01-07 00:31:09', NULL),
(118, '43_pub_2021_01_07_063128_SNXxcnDE.jpg', '6.jpg', 'storage/users/photos/43_pub_2021_01_07_063128_SNXxcnDE.jpg', '50319', '382', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 43, '2021-01-07 00:31:28', '2021-01-07 00:31:28', NULL),
(119, '44_pub_2021_01_07_063152_GnIBQvU1.jpeg', 'm1.jpeg', 'storage/users/photos/44_pub_2021_01_07_063152_GnIBQvU1.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 44, '2021-01-07 00:31:52', '2021-01-07 00:31:52', NULL),
(120, '45_pub_2021_01_07_063248_dCxK0bIG.jpg', 'm10.jpg', 'storage/users/photos/45_pub_2021_01_07_063248_dCxK0bIG.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 45, '2021-01-07 00:32:48', '2021-01-07 00:32:49', NULL),
(121, '46_pub_2021_01_07_063318_6DwKfiTL.jpeg', 'm1.jpeg', 'storage/users/photos/46_pub_2021_01_07_063318_6DwKfiTL.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 46, '2021-01-07 00:33:18', '2021-01-07 00:33:18', NULL),
(122, '47_pub_2021_01_07_063350_OCYR7rZO.png', '7.png', 'storage/users/photos/47_pub_2021_01_07_063350_OCYR7rZO.png', '326668', '365', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 47, '2021-01-07 00:33:51', '2021-01-07 00:33:51', NULL),
(123, '48_pub_2021_01_07_063414_4QXSvW3d.jpeg', 'm3.jpeg', 'storage/users/photos/48_pub_2021_01_07_063414_4QXSvW3d.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 48, '2021-01-07 00:34:14', '2021-01-07 00:34:14', NULL),
(124, '49_pub_2021_01_07_063440_45bom5nG.jpg', 'm4.jpg', 'storage/users/photos/49_pub_2021_01_07_063440_45bom5nG.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 49, '2021-01-07 00:34:40', '2021-01-07 00:34:40', NULL),
(125, '50_pub_2021_01_07_063636_d5YBcnz5.jpg', 'm8.jpg', 'storage/users/photos/50_pub_2021_01_07_063636_d5YBcnz5.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 50, '2021-01-07 00:36:36', '2021-01-07 00:36:36', NULL),
(126, '51_pub_2021_01_07_063702_uHkF1EkQ.jpg', 'm5.jpg', 'storage/users/photos/51_pub_2021_01_07_063702_uHkF1EkQ.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 51, '2021-01-07 00:37:02', '2021-01-07 00:37:03', NULL),
(127, '52_pub_2021_01_07_064116_SJNhT1sy.png', 'm11.png', 'storage/users/photos/52_pub_2021_01_07_064116_SJNhT1sy.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 52, '2021-01-07 00:41:16', '2021-01-07 00:41:16', NULL),
(128, '53_pub_2021_01_07_065225_1dLQerg7.jpeg', 'm14.jpeg', 'storage/users/photos/53_pub_2021_01_07_065225_1dLQerg7.jpeg', '33221', '382', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 53, '2021-01-07 00:52:25', '2021-01-07 00:52:25', NULL),
(129, '54_pub_2021_01_07_065256_1G0QOTei.jpg', 'm15.jpg', 'storage/users/photos/54_pub_2021_01_07_065256_1G0QOTei.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 54, '2021-01-07 00:52:56', '2021-01-07 00:52:56', NULL),
(130, '55_pub_2021_01_07_065315_70IXMS4K.jpg', 'm12.jpg', 'storage/users/photos/55_pub_2021_01_07_065315_70IXMS4K.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 55, '2021-01-07 00:53:15', '2021-01-07 00:53:15', NULL),
(131, '56_pub_2021_01_07_065805_1txdvXXG.jpg', 'm12.jpg', 'storage/users/photos/56_pub_2021_01_07_065805_1txdvXXG.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 56, '2021-01-07 00:58:05', '2021-01-07 00:58:05', NULL),
(132, '57_pub_2021_01_07_065820_JuwXHFiO.jpeg', 'm13.jpeg', 'storage/users/photos/57_pub_2021_01_07_065820_JuwXHFiO.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 57, '2021-01-07 00:58:21', '2021-01-07 00:58:21', NULL),
(133, '58_pub_2021_01_07_065844_kF7MLwXa.jpg', '8.jpg', 'storage/users/photos/58_pub_2021_01_07_065844_kF7MLwXa.jpg', '38524', '452', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 58, '2021-01-07 00:58:44', '2021-01-07 00:58:45', NULL),
(134, '59_pub_2021_01_07_065942_FUEYmqzZ.png', 'm7.png', 'storage/users/photos/59_pub_2021_01_07_065942_FUEYmqzZ.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 59, '2021-01-07 00:59:42', '2021-01-07 00:59:42', NULL),
(135, '60_pub_2021_01_07_070009_IDUNwmWb.jpg', 'm4.jpg', 'storage/users/photos/60_pub_2021_01_07_070009_IDUNwmWb.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 60, '2021-01-07 01:00:09', '2021-01-07 01:00:10', NULL),
(136, '60_pub_2021_01_07_070009_6amMFEtK.jpg', 'm4.jpg', 'storage/users/photos/60_pub_2021_01_07_070009_6amMFEtK.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 60, '2021-01-07 01:00:09', '2021-01-07 01:00:10', NULL),
(137, '60_pub_2021_01_07_070011_MeEY4xUk.jpg', 'm4.jpg', 'storage/users/photos/60_pub_2021_01_07_070011_MeEY4xUk.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 60, '2021-01-07 01:00:11', '2021-01-07 01:00:11', NULL),
(138, '61_pub_2021_01_07_070038_7lXg7FTq.jpg', 'm2.jpg', 'storage/users/photos/61_pub_2021_01_07_070038_7lXg7FTq.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 61, '2021-01-07 01:00:38', '2021-01-07 01:00:38', NULL),
(139, '62_pub_2021_01_07_070055_LINg6au2.jpeg', 'm3.jpeg', 'storage/users/photos/62_pub_2021_01_07_070055_LINg6au2.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 62, '2021-01-07 01:00:55', '2021-01-07 01:00:55', NULL),
(140, '63_pub_2021_01_07_070112_jaoE2e7B.jpg', '9.jpg', 'storage/users/photos/63_pub_2021_01_07_070112_jaoE2e7B.jpg', '30831', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 63, '2021-01-07 01:01:12', '2021-01-07 01:01:12', NULL),
(141, '64_pub_2021_01_07_070142_Z2Jz9QzZ.jpg', 'm9.jpg', 'storage/users/photos/64_pub_2021_01_07_070142_Z2Jz9QzZ.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 64, '2021-01-07 01:01:42', '2021-01-07 01:01:42', NULL),
(142, '65_pub_2021_01_07_070214_UvWPtsGh.jpeg', 'm6.jpeg', 'storage/users/photos/65_pub_2021_01_07_070214_UvWPtsGh.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 65, '2021-01-07 01:02:14', '2021-01-07 01:02:14', NULL),
(143, '66_pub_2021_01_07_070238_n8PtQGFh.jpg', 'm15.jpg', 'storage/users/photos/66_pub_2021_01_07_070238_n8PtQGFh.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 66, '2021-01-07 01:02:38', '2021-01-07 01:02:38', NULL),
(144, '67_pub_2021_01_07_070424_Hg5hvcwV.jpg', 'm10.jpg', 'storage/users/photos/67_pub_2021_01_07_070424_Hg5hvcwV.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 67, '2021-01-07 01:04:24', '2021-01-07 01:04:24', NULL),
(145, '68_pub_2021_01_07_070453_8cq5RNk6.jpeg', 'm13.jpeg', 'storage/users/photos/68_pub_2021_01_07_070453_8cq5RNk6.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 68, '2021-01-07 01:04:53', '2021-01-07 01:04:53', NULL),
(146, '69_pub_2021_01_07_070550_aRQYMm7M.jpg', '10.jpg', 'storage/users/photos/69_pub_2021_01_07_070550_aRQYMm7M.jpg', '14245', '283', '400', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 69, '2021-01-07 01:05:50', '2021-01-07 01:05:50', NULL),
(147, '70_pub_2021_01_07_070634_MT4KTTZr.jpeg', 'm14.jpeg', 'storage/users/photos/70_pub_2021_01_07_070634_MT4KTTZr.jpeg', '33221', '382', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 70, '2021-01-07 01:06:35', '2021-01-07 01:06:36', NULL),
(148, '71_pub_2021_01_07_070800_W4vPunNO.jpeg', 'm3.jpeg', 'storage/users/photos/71_pub_2021_01_07_070800_W4vPunNO.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 71, '2021-01-07 01:08:00', '2021-01-07 01:08:00', NULL),
(149, '72_pub_2021_01_07_070943_c8cjmQfP.jpg', 'm9.jpg', 'storage/users/photos/72_pub_2021_01_07_070943_c8cjmQfP.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 72, '2021-01-07 01:09:43', '2021-01-07 01:09:43', NULL),
(150, '73_pub_2021_01_07_071018_1LjfQtRv.jpg', 'm4.jpg', 'storage/users/photos/73_pub_2021_01_07_071018_1LjfQtRv.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 73, '2021-01-07 01:10:18', '2021-01-07 01:10:18', NULL),
(151, '74_pub_2021_01_07_071111_UZqtEuYr.png', 'm11.png', 'storage/users/photos/74_pub_2021_01_07_071111_UZqtEuYr.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 74, '2021-01-07 01:11:11', '2021-01-07 01:11:12', NULL),
(152, '75_pub_2021_01_07_071157_yG1S8Vns.jpg', '4.jpg', 'storage/users/photos/75_pub_2021_01_07_071157_yG1S8Vns.jpg', '106252', '613', '643', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 75, '2021-01-07 01:11:57', '2021-01-07 01:11:57', NULL),
(153, '76_pub_2021_01_07_071214_0fUJsT2s.jpeg', 'm1.jpeg', 'storage/users/photos/76_pub_2021_01_07_071214_0fUJsT2s.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 76, '2021-01-07 01:12:14', '2021-01-07 01:12:15', NULL),
(154, '77_pub_2021_01_07_071304_Vqrvo7yk.jpg', 'm2.jpg', 'storage/users/photos/77_pub_2021_01_07_071304_Vqrvo7yk.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 77, '2021-01-07 01:13:04', '2021-01-07 01:13:04', NULL),
(155, '78_pub_2021_01_07_071341_3DYr7ecB.jpeg', 'm3.jpeg', 'storage/users/photos/78_pub_2021_01_07_071341_3DYr7ecB.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 78, '2021-01-07 01:13:42', '2021-01-07 01:13:42', NULL),
(156, '79_pub_2021_01_07_071414_vBM24CmH.jpg', 'm4.jpg', 'storage/users/photos/79_pub_2021_01_07_071414_vBM24CmH.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 79, '2021-01-07 01:14:14', '2021-01-07 01:14:14', NULL),
(157, '80_pub_2021_01_07_071444_hUJkmoHS.jpg', 'm5.jpg', 'storage/users/photos/80_pub_2021_01_07_071444_hUJkmoHS.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 80, '2021-01-07 01:14:44', '2021-01-07 01:14:45', NULL),
(158, '81_pub_2021_01_07_071529_6u6BpvJp.jpeg', 'm6.jpeg', 'storage/users/photos/81_pub_2021_01_07_071529_6u6BpvJp.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 81, '2021-01-07 01:15:29', '2021-01-07 01:15:30', NULL),
(159, '82_pub_2021_01_07_071547_etRooBzX.png', 'm7.png', 'storage/users/photos/82_pub_2021_01_07_071547_etRooBzX.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 82, '2021-01-07 01:15:47', '2021-01-07 01:15:47', NULL),
(160, '83_pub_2021_01_07_071618_3sPXOIT6.jpg', 'm8.jpg', 'storage/users/photos/83_pub_2021_01_07_071618_3sPXOIT6.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 83, '2021-01-07 01:16:18', '2021-01-07 01:16:18', NULL),
(161, '84_pub_2021_01_07_071634_8aXr6oUS.jpg', '2.jpg', 'storage/users/photos/84_pub_2021_01_07_071634_8aXr6oUS.jpg', '75002', '613', '613', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 84, '2021-01-07 01:16:34', '2021-01-07 01:16:34', NULL),
(162, '85_pub_2021_01_07_071650_j1z2Dn3q.jpg', '1.jpg', 'storage/users/photos/85_pub_2021_01_07_071650_j1z2Dn3q.jpg', '30577', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 85, '2021-01-07 01:16:50', '2021-01-07 01:16:50', NULL),
(163, '86_pub_2021_01_07_071713_HQHwFeSQ.png', 'm11.png', 'storage/users/photos/86_pub_2021_01_07_071713_HQHwFeSQ.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 86, '2021-01-07 01:17:13', '2021-01-07 01:17:13', NULL),
(164, '87_pub_2021_01_07_071754_VFuZxYHN.jpg', '3.jpg', 'storage/users/photos/87_pub_2021_01_07_071754_VFuZxYHN.jpg', '76258', '470', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 87, '2021-01-07 01:17:54', '2021-01-07 01:17:54', NULL),
(165, '88_pub_2021_01_07_071808_XUqDUbhV.png', '3.png', 'storage/users/photos/88_pub_2021_01_07_071808_XUqDUbhV.png', '382738', '382', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 88, '2021-01-07 01:18:08', '2021-01-07 01:18:08', NULL),
(166, '89_pub_2021_01_07_071821_Fk7wExQo.jpg', 'm10.jpg', 'storage/users/photos/89_pub_2021_01_07_071821_Fk7wExQo.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 89, '2021-01-07 01:18:21', '2021-01-07 01:18:21', NULL),
(167, '90_pub_2021_01_07_071842_hKehDj1i.jpg', '4.jpg', 'storage/users/photos/90_pub_2021_01_07_071842_hKehDj1i.jpg', '106252', '613', '643', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 90, '2021-01-07 01:18:42', '2021-01-07 01:18:42', NULL),
(168, '91_pub_2021_01_07_071908_TYGYdJT4.jpg', '5.jpg', 'storage/users/photos/91_pub_2021_01_07_071908_TYGYdJT4.jpg', '32321', '554', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 91, '2021-01-07 01:19:08', '2021-01-07 01:19:08', NULL),
(169, '92_pub_2021_01_07_071943_vLGeK95d.png', 'm11.png', 'storage/users/photos/92_pub_2021_01_07_071943_vLGeK95d.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 92, '2021-01-07 01:19:43', '2021-01-07 01:19:43', NULL),
(170, '93_pub_2021_01_07_072053_BQM7t7Cg.jpg', 'm12.jpg', 'storage/users/photos/93_pub_2021_01_07_072053_BQM7t7Cg.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 93, '2021-01-07 01:20:53', '2021-01-07 01:20:53', NULL),
(171, '93_pub_2021_01_07_072053_kM4F6vtW.jpg', 'm12.jpg', 'storage/users/photos/93_pub_2021_01_07_072053_kM4F6vtW.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 93, '2021-01-07 01:20:53', '2021-01-07 01:20:53', NULL),
(172, '94_pub_2021_01_07_072117_D2GDrOFh.jpg', '6.jpg', 'storage/users/photos/94_pub_2021_01_07_072117_D2GDrOFh.jpg', '50319', '382', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 94, '2021-01-07 01:21:17', '2021-01-07 01:21:17', NULL),
(173, '95_pub_2021_01_07_072143_0kzAdwDW.png', '7.png', 'storage/users/photos/95_pub_2021_01_07_072143_0kzAdwDW.png', '326668', '365', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 95, '2021-01-07 01:21:43', '2021-01-07 01:21:43', NULL),
(174, '96_pub_2021_01_07_072206_a4wcMlWV.jpeg', 'm13.jpeg', 'storage/users/photos/96_pub_2021_01_07_072206_a4wcMlWV.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 96, '2021-01-07 01:22:06', '2021-01-07 01:22:07', NULL),
(175, '100_pub_2021_01_07_072455_Je7Zz37g.jpg', 'm15.jpg', 'storage/users/photos/100_pub_2021_01_07_072455_Je7Zz37g.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 100, '2021-01-07 01:24:55', '2021-01-07 01:24:55', NULL),
(176, '101_pub_2021_01_07_072641_WPvzEk3k.jpg', 'm8.jpg', 'storage/users/photos/101_pub_2021_01_07_072641_WPvzEk3k.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 101, '2021-01-07 01:26:41', '2021-01-07 01:26:41', NULL),
(177, '102_pub_2021_01_07_072714_mCuAqeQF.jpeg', 'm13.jpeg', 'storage/users/photos/102_pub_2021_01_07_072714_mCuAqeQF.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 102, '2021-01-07 01:27:14', '2021-01-07 01:27:14', NULL),
(178, '103_pub_2021_01_07_072733_euSWMBHZ.png', '7.png', 'storage/users/photos/103_pub_2021_01_07_072733_euSWMBHZ.png', '326668', '365', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 103, '2021-01-07 01:27:33', '2021-01-07 01:27:33', NULL),
(179, '104_pub_2021_01_07_072817_4OSfOf1T.jpg', 'm10.jpg', 'storage/users/photos/104_pub_2021_01_07_072817_4OSfOf1T.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 104, '2021-01-07 01:28:17', '2021-01-07 01:28:17', NULL),
(180, '105_pub_2021_01_07_073011_JisHBSHQ.jpg', '8.jpg', 'storage/users/photos/105_pub_2021_01_07_073011_JisHBSHQ.jpg', '38524', '452', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 105, '2021-01-07 01:30:12', '2021-01-07 01:30:13', NULL),
(181, '106_pub_2021_01_07_073051_m89fLOcM.png', 'm11.png', 'storage/users/photos/106_pub_2021_01_07_073051_m89fLOcM.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 106, '2021-01-07 01:30:51', '2021-01-07 01:30:51', NULL),
(182, '107_pub_2021_01_07_073123_JYUMsgX7.jpg', 'm12.jpg', 'storage/users/photos/107_pub_2021_01_07_073123_JYUMsgX7.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 107, '2021-01-07 01:31:23', '2021-01-07 01:31:23', NULL),
(183, '108_pub_2021_01_07_073142_FnGPh0Ip.jpeg', 'm13.jpeg', 'storage/users/photos/108_pub_2021_01_07_073142_FnGPh0Ip.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 108, '2021-01-07 01:31:42', '2021-01-07 01:31:43', NULL),
(184, '109_pub_2021_01_07_073218_M4Ni17Hk.jpg', 'm15.jpg', 'storage/users/photos/109_pub_2021_01_07_073218_M4Ni17Hk.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 109, '2021-01-07 01:32:18', '2021-01-07 01:32:18', NULL),
(185, '110_pub_2021_01_07_073308_awuedVY2.jpeg', 'm14.jpeg', 'storage/users/photos/110_pub_2021_01_07_073308_awuedVY2.jpeg', '33221', '382', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 110, '2021-01-07 01:33:08', '2021-01-07 01:33:08', NULL),
(186, '111_pub_2021_01_07_073438_UWwDiLqd.jpg', 'm9.jpg', 'storage/users/photos/111_pub_2021_01_07_073438_UWwDiLqd.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 111, '2021-01-07 01:34:38', '2021-01-07 01:34:38', NULL),
(187, '112_pub_2021_01_07_080519_VIxq1IAM.jpg', '9.jpg', 'storage/users/photos/112_pub_2021_01_07_080519_VIxq1IAM.jpg', '30831', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 112, '2021-01-07 02:05:19', '2021-01-07 02:05:19', NULL),
(188, '113_pub_2021_01_07_080603_6YSykmJW.jpg', 'm2.jpg', 'storage/users/photos/113_pub_2021_01_07_080603_6YSykmJW.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 113, '2021-01-07 02:06:03', '2021-01-07 02:06:04', NULL),
(189, '114_pub_2021_01_07_080622_mV0HGotD.jpg', 'm12.jpg', 'storage/users/photos/114_pub_2021_01_07_080622_mV0HGotD.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 114, '2021-01-07 02:06:22', '2021-01-07 02:06:22', NULL),
(190, '115_pub_2021_01_07_080639_BjtHyI32.jpg', '10.jpg', 'storage/users/photos/115_pub_2021_01_07_080639_BjtHyI32.jpg', '14245', '283', '400', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 115, '2021-01-07 02:06:39', '2021-01-07 02:06:39', NULL),
(191, '116_pub_2021_01_07_080700_cnp43h40.jpeg', 'm6.jpeg', 'storage/users/photos/116_pub_2021_01_07_080700_cnp43h40.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 116, '2021-01-07 02:07:00', '2021-01-07 02:07:00', NULL),
(192, '117_pub_2021_01_07_080712_J7GNUJzk.png', 'm11.png', 'storage/users/photos/117_pub_2021_01_07_080712_J7GNUJzk.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 117, '2021-01-07 02:07:12', '2021-01-07 02:07:13', NULL),
(193, '118_pub_2021_01_07_080727_Lzl3BsW2.jpeg', 'm13.jpeg', 'storage/users/photos/118_pub_2021_01_07_080727_Lzl3BsW2.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 118, '2021-01-07 02:07:27', '2021-01-07 02:07:27', NULL),
(194, '119_pub_2021_01_07_084614_xfm6NS9O.jpeg', 'm6.jpeg', 'storage/users/photos/119_pub_2021_01_07_084614_xfm6NS9O.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 119, '2021-01-07 02:46:14', '2021-01-07 02:46:14', NULL),
(195, '120_pub_2021_01_07_084638_xXxurhOA.jpg', 'm10.jpg', 'storage/users/photos/120_pub_2021_01_07_084638_xXxurhOA.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 120, '2021-01-07 02:46:38', '2021-01-07 02:46:39', NULL),
(196, '121_pub_2021_01_07_084916_AWofhUR0.jpg', '6.jpg', 'storage/users/photos/121_pub_2021_01_07_084916_AWofhUR0.jpg', '50319', '382', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 121, '2021-01-07 02:49:17', '2021-01-07 02:49:17', NULL),
(197, '122_pub_2021_01_07_085010_KCtAwkZe.jpg', 'm15.jpg', 'storage/users/photos/122_pub_2021_01_07_085010_KCtAwkZe.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 122, '2021-01-07 02:50:10', '2021-01-07 02:50:10', NULL),
(198, '123_pub_2021_01_07_085900_TVaKa3rL.jpeg', 'm14.jpeg', 'storage/users/photos/123_pub_2021_01_07_085900_TVaKa3rL.jpeg', '33221', '382', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 123, '2021-01-07 02:59:00', '2021-01-07 02:59:00', NULL),
(199, '124_pub_2021_01_07_091009_bS4n7P9Q.png', 'm11.png', 'storage/users/photos/124_pub_2021_01_07_091009_bS4n7P9Q.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 124, '2021-01-07 03:10:09', '2021-01-07 03:10:09', NULL),
(200, '125_pub_2021_01_07_091207_qb9VgDww.jpg', 'm10.jpg', 'storage/users/photos/125_pub_2021_01_07_091207_qb9VgDww.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 125, '2021-01-07 03:12:07', '2021-01-07 03:12:07', NULL),
(201, '126_pub_2021_01_07_091531_JnioFhxM.jpeg', 'm13.jpeg', 'storage/users/photos/126_pub_2021_01_07_091531_JnioFhxM.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 126, '2021-01-07 03:15:31', '2021-01-07 03:15:32', NULL),
(202, '127_pub_2021_01_07_091621_Udu1KlJV.jpeg', 'm1.jpeg', 'storage/users/photos/127_pub_2021_01_07_091621_Udu1KlJV.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 127, '2021-01-07 03:16:21', '2021-01-07 03:16:22', NULL),
(203, '128_pub_2021_01_07_091641_GZYsZpcF.png', 'm11.png', 'storage/users/photos/128_pub_2021_01_07_091641_GZYsZpcF.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 128, '2021-01-07 03:16:41', '2021-01-07 03:16:41', NULL),
(204, '129_pub_2021_01_07_091716_FdP3EI9Z.jpg', 'm9.jpg', 'storage/users/photos/129_pub_2021_01_07_091716_FdP3EI9Z.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 129, '2021-01-07 03:17:16', '2021-01-07 03:17:16', NULL),
(205, '130_pub_2021_01_07_091742_f9MycpJP.jpg', 'm8.jpg', 'storage/users/photos/130_pub_2021_01_07_091742_f9MycpJP.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 130, '2021-01-07 03:17:42', '2021-01-07 03:17:43', NULL),
(206, '131_pub_2021_01_07_091759_DgfS6H5z.jpg', 'm10.jpg', 'storage/users/photos/131_pub_2021_01_07_091759_DgfS6H5z.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 131, '2021-01-07 03:17:59', '2021-01-07 03:17:59', NULL),
(207, '132_pub_2021_01_07_091836_fvoGjLRz.jpg', 'm10.jpg', 'storage/users/photos/132_pub_2021_01_07_091836_fvoGjLRz.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 132, '2021-01-07 03:18:36', '2021-01-07 03:18:36', NULL),
(208, '133_pub_2021_01_07_091907_JM5D7P0Q.jpeg', 'm1.jpeg', 'storage/users/photos/133_pub_2021_01_07_091907_JM5D7P0Q.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 133, '2021-01-07 03:19:07', '2021-01-07 03:19:07', NULL),
(209, '133_pub_2021_01_07_091923_WwjE3e9k.jpg', 'm9.jpg', 'storage/users/photos/133_pub_2021_01_07_091923_WwjE3e9k.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 133, '2021-01-07 03:19:23', '2021-01-07 03:19:24', NULL),
(210, '134_pub_2021_01_07_091954_PQooLpz3.jpeg', 'm14.jpeg', 'storage/users/photos/134_pub_2021_01_07_091954_PQooLpz3.jpeg', '33221', '382', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 134, '2021-01-07 03:19:54', '2021-01-07 03:19:54', NULL),
(211, '135_pub_2021_01_07_092647_Upm5EhOT.jpg', '10.jpg', 'storage/users/photos/135_pub_2021_01_07_092647_Upm5EhOT.jpg', '14245', '283', '400', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 135, '2021-01-07 03:26:47', '2021-01-07 03:26:48', NULL),
(212, '136_pub_2021_01_07_092814_i29e1ZSc.jpg', '4.jpg', 'storage/users/photos/136_pub_2021_01_07_092814_i29e1ZSc.jpg', '106252', '613', '643', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 136, '2021-01-07 03:28:14', '2021-01-07 03:28:14', NULL),
(213, '137_pub_2021_01_07_092833_tEKlAQQt.jpg', 'm10.jpg', 'storage/users/photos/137_pub_2021_01_07_092833_tEKlAQQt.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 137, '2021-01-07 03:28:33', '2021-01-07 03:28:33', NULL),
(214, '138_pub_2021_01_07_092902_OssVY76L.jpg', 'm8.jpg', 'storage/users/photos/138_pub_2021_01_07_092902_OssVY76L.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 138, '2021-01-07 03:29:03', '2021-01-07 03:29:03', NULL),
(215, '139_pub_2021_01_07_092931_LBOO5bOm.png', 'm7.png', 'storage/users/photos/139_pub_2021_01_07_092931_LBOO5bOm.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 139, '2021-01-07 03:29:31', '2021-01-07 03:29:31', NULL),
(216, '140_pub_2021_01_07_092956_hfL5pMgT.jpg', 'm9.jpg', 'storage/users/photos/140_pub_2021_01_07_092956_hfL5pMgT.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 140, '2021-01-07 03:29:56', '2021-01-07 03:29:56', NULL),
(217, '141_pub_2021_01_07_093019_OOw4I5U3.jpg', '2.jpg', 'storage/users/photos/141_pub_2021_01_07_093019_OOw4I5U3.jpg', '75002', '613', '613', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 141, '2021-01-07 03:30:19', '2021-01-07 03:30:19', NULL),
(218, '142_pub_2021_01_07_093037_AevYE7W5.jpg', 'm5.jpg', 'storage/users/photos/142_pub_2021_01_07_093037_AevYE7W5.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 142, '2021-01-07 03:30:37', '2021-01-07 03:30:38', NULL),
(219, '143_pub_2021_01_07_093154_awZCBqTl.jpeg', 'm1.jpeg', 'storage/users/photos/143_pub_2021_01_07_093154_awZCBqTl.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 143, '2021-01-07 03:31:54', '2021-01-07 03:31:54', NULL),
(220, '144_pub_2021_01_07_093231_5U11FJd0.jpeg', 'm6.jpeg', 'storage/users/photos/144_pub_2021_01_07_093231_5U11FJd0.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 144, '2021-01-07 03:32:31', '2021-01-07 03:32:32', NULL),
(221, '145_pub_2021_01_07_093310_Isdjq3It.jpg', 'm4.jpg', 'storage/users/photos/145_pub_2021_01_07_093310_Isdjq3It.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 145, '2021-01-07 03:33:10', '2021-01-07 03:33:10', NULL),
(222, '146_pub_2021_01_07_093329_9A9CDoxW.jpeg', 'm3.jpeg', 'storage/users/photos/146_pub_2021_01_07_093329_9A9CDoxW.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 146, '2021-01-07 03:33:29', '2021-01-07 03:33:30', NULL);
INSERT INTO `user_photos` (`id`, `img_name`, `img_original_name`, `img_url`, `img_size`, `img_width`, `img_height`, `img_ext`, `img_mime`, `img_type`, `autoload`, `checked`, `can_edit`, `addedby_id`, `editedby_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(223, '147_pub_2021_01_07_093348_gLn41tX2.jpeg', 'm1.jpeg', 'storage/users/photos/147_pub_2021_01_07_093348_gLn41tX2.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 147, '2021-01-07 03:33:48', '2021-01-07 03:33:49', NULL),
(224, '148_pub_2021_01_07_093408_cHH0Uppr.jpg', 'm2.jpg', 'storage/users/photos/148_pub_2021_01_07_093408_cHH0Uppr.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 148, '2021-01-07 03:34:08', '2021-01-07 03:34:09', NULL),
(225, '149_pub_2021_01_07_093430_F3Go1Kmf.jpeg', 'm1.jpeg', 'storage/users/photos/149_pub_2021_01_07_093430_F3Go1Kmf.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 149, '2021-01-07 03:34:30', '2021-01-07 03:34:31', NULL),
(226, '150_pub_2021_01_07_093449_z4xcCEnm.jpg', 'm5.jpg', 'storage/users/photos/150_pub_2021_01_07_093449_z4xcCEnm.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 150, '2021-01-07 03:34:50', '2021-01-07 03:34:50', NULL),
(227, '151_pub_2021_01_07_093507_boVTkM7z.jpg', 'm15.jpg', 'storage/users/photos/151_pub_2021_01_07_093507_boVTkM7z.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 151, '2021-01-07 03:35:08', '2021-01-07 03:35:09', NULL),
(228, '152_pub_2021_01_07_093624_2Z43RhKX.jpg', '9.jpg', 'storage/users/photos/152_pub_2021_01_07_093624_2Z43RhKX.jpg', '30831', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 152, '2021-01-07 03:36:24', '2021-01-07 03:36:24', NULL),
(229, '153_pub_2021_01_07_093659_Q5HhLiTA.jpeg', 'm3.jpeg', 'storage/users/photos/153_pub_2021_01_07_093659_Q5HhLiTA.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 153, '2021-01-07 03:36:59', '2021-01-07 03:37:00', NULL),
(230, '154_pub_2021_01_07_093719_Xxqbb0J2.jpg', 'm9.jpg', 'storage/users/photos/154_pub_2021_01_07_093719_Xxqbb0J2.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 154, '2021-01-07 03:37:19', '2021-01-07 03:37:19', NULL),
(231, '155_pub_2021_01_07_093743_B4MI3Zr7.png', 'm11.png', 'storage/users/photos/155_pub_2021_01_07_093743_B4MI3Zr7.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 155, '2021-01-07 03:37:43', '2021-01-07 03:37:44', NULL),
(232, '156_pub_2021_01_07_093807_GJ1DL1Kt.jpg', 'm9.jpg', 'storage/users/photos/156_pub_2021_01_07_093807_GJ1DL1Kt.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 156, '2021-01-07 03:38:07', '2021-01-07 03:38:07', NULL),
(233, '157_pub_2021_01_07_093836_qQt4Rjg5.jpg', 'm12.jpg', 'storage/users/photos/157_pub_2021_01_07_093836_qQt4Rjg5.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 157, '2021-01-07 03:38:36', '2021-01-07 03:38:36', NULL),
(234, '158_pub_2021_01_07_093859_qR0bSdas.jpg', '1.jpg', 'storage/users/photos/158_pub_2021_01_07_093859_qR0bSdas.jpg', '30577', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 158, '2021-01-07 03:38:59', '2021-01-07 03:39:00', NULL),
(235, '159_pub_2021_01_07_094349_s4ACmhmq.jpg', 'm9.jpg', 'storage/users/photos/159_pub_2021_01_07_094349_s4ACmhmq.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 159, '2021-01-07 03:43:49', '2021-01-07 03:43:49', NULL),
(236, '160_pub_2021_01_07_094451_bFVhB8Pt.jpg', '8.jpg', 'storage/users/photos/160_pub_2021_01_07_094451_bFVhB8Pt.jpg', '38524', '452', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 160, '2021-01-07 03:44:51', '2021-01-07 03:44:51', NULL),
(237, '161_pub_2021_01_07_094523_U79y13Xr.png', 'm7.png', 'storage/users/photos/161_pub_2021_01_07_094523_U79y13Xr.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 161, '2021-01-07 03:45:23', '2021-01-07 03:45:23', NULL),
(238, '162_pub_2021_01_07_094550_fIMQAOfL.jpg', 'm8.jpg', 'storage/users/photos/162_pub_2021_01_07_094550_fIMQAOfL.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 162, '2021-01-07 03:45:50', '2021-01-07 03:45:51', NULL),
(239, '163_pub_2021_01_07_094609_Cr3Oioeo.jpeg', 'm6.jpeg', 'storage/users/photos/163_pub_2021_01_07_094609_Cr3Oioeo.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 163, '2021-01-07 03:46:09', '2021-01-07 03:46:09', NULL),
(240, '164_pub_2021_01_07_094714_DPo552EW.jpg', 'm5.jpg', 'storage/users/photos/164_pub_2021_01_07_094714_DPo552EW.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 164, '2021-01-07 03:47:15', '2021-01-07 03:47:15', NULL),
(241, '165_pub_2021_01_07_094736_GKeiZfue.jpg', 'm2.jpg', 'storage/users/photos/165_pub_2021_01_07_094736_GKeiZfue.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 165, '2021-01-07 03:47:36', '2021-01-07 03:47:36', NULL),
(242, '166_pub_2021_01_07_094851_GZBRdbIt.jpeg', 'm1.jpeg', 'storage/users/photos/166_pub_2021_01_07_094851_GZBRdbIt.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 166, '2021-01-07 03:48:51', '2021-01-07 03:48:51', NULL),
(243, '167_pub_2021_01_07_094927_CciltpJD.png', 'm7.png', 'storage/users/photos/167_pub_2021_01_07_094927_CciltpJD.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 167, '2021-01-07 03:49:28', '2021-01-07 03:49:28', NULL),
(244, '168_pub_2021_01_07_094957_N0FWsx8T.jpg', 'm10.jpg', 'storage/users/photos/168_pub_2021_01_07_094957_N0FWsx8T.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 168, '2021-01-07 03:49:57', '2021-01-07 03:49:58', NULL),
(245, '169_pub_2021_01_07_095031_BFkVFpEn.png', '3.png', 'storage/users/photos/169_pub_2021_01_07_095031_BFkVFpEn.png', '382738', '382', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 169, '2021-01-07 03:50:31', '2021-01-07 03:50:31', NULL),
(246, '170_pub_2021_01_07_095047_U7BG1Kn1.jpg', '5.jpg', 'storage/users/photos/170_pub_2021_01_07_095047_U7BG1Kn1.jpg', '32321', '554', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 170, '2021-01-07 03:50:47', '2021-01-07 03:50:47', NULL),
(247, '171_pub_2021_01_07_095140_w4EL2CfE.jpg', 'm10.jpg', 'storage/users/photos/171_pub_2021_01_07_095140_w4EL2CfE.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 171, '2021-01-07 03:51:40', '2021-01-07 03:51:41', NULL),
(248, '172_pub_2021_01_07_095202_syQtu99e.jpg', 'm2.jpg', 'storage/users/photos/172_pub_2021_01_07_095202_syQtu99e.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 172, '2021-01-07 03:52:02', '2021-01-07 03:52:02', NULL),
(249, '173_pub_2021_01_07_095221_3iNJxerW.jpg', 'm9.jpg', 'storage/users/photos/173_pub_2021_01_07_095221_3iNJxerW.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 173, '2021-01-07 03:52:21', '2021-01-07 03:52:21', NULL),
(250, '174_pub_2021_01_07_095232_RWGEdQ32.jpg', 'm10.jpg', 'storage/users/photos/174_pub_2021_01_07_095232_RWGEdQ32.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 174, '2021-01-07 03:52:32', '2021-01-07 03:52:32', NULL),
(251, '175_pub_2021_01_07_095246_mqkbOEpm.jpg', '6.jpg', 'storage/users/photos/175_pub_2021_01_07_095246_mqkbOEpm.jpg', '50319', '382', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 175, '2021-01-07 03:52:46', '2021-01-07 03:52:46', NULL),
(252, '176_pub_2021_01_07_095311_SVr5qyXY.jpg', '1.jpg', 'storage/users/photos/176_pub_2021_01_07_095311_SVr5qyXY.jpg', '30577', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 176, '2021-01-07 03:53:11', '2021-01-07 03:53:11', NULL),
(253, '177_pub_2021_01_07_095402_iDLF859G.jpg', '3.jpg', 'storage/users/photos/177_pub_2021_01_07_095402_iDLF859G.jpg', '76258', '470', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 177, '2021-01-07 03:54:02', '2021-01-07 03:54:03', NULL),
(254, '178_pub_2021_01_07_095419_olaHNqyh.jpg', 'm5.jpg', 'storage/users/photos/178_pub_2021_01_07_095419_olaHNqyh.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 178, '2021-01-07 03:54:19', '2021-01-07 03:54:20', NULL),
(255, '179_pub_2021_01_07_095434_egAw2pQp.jpg', '8.jpg', 'storage/users/photos/179_pub_2021_01_07_095434_egAw2pQp.jpg', '38524', '452', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 179, '2021-01-07 03:54:34', '2021-01-07 03:54:34', NULL),
(256, '180_pub_2021_01_07_095450_p8t26TfR.jpg', 'm4.jpg', 'storage/users/photos/180_pub_2021_01_07_095450_p8t26TfR.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 180, '2021-01-07 03:54:50', '2021-01-07 03:54:51', NULL),
(257, '181_pub_2021_01_07_095608_FywJNiIA.jpg', '9.jpg', 'storage/users/photos/181_pub_2021_01_07_095608_FywJNiIA.jpg', '30831', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 181, '2021-01-07 03:56:09', '2021-01-07 03:56:10', NULL),
(258, '182_pub_2021_01_07_095631_jdd5YKt6.png', '7.png', 'storage/users/photos/182_pub_2021_01_07_095631_jdd5YKt6.png', '326668', '365', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 182, '2021-01-07 03:56:31', '2021-01-07 03:56:31', NULL),
(259, '183_pub_2021_01_07_095715_9DR1QJDO.jpeg', 'm13.jpeg', 'storage/users/photos/183_pub_2021_01_07_095715_9DR1QJDO.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 183, '2021-01-07 03:57:16', '2021-01-07 03:57:16', NULL),
(260, '184_pub_2021_01_07_095733_Y1Z6XLDg.jpg', 'm15.jpg', 'storage/users/photos/184_pub_2021_01_07_095733_Y1Z6XLDg.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 184, '2021-01-07 03:57:33', '2021-01-07 03:57:34', NULL),
(261, '185_pub_2021_01_07_095752_SxGKMIuK.jpeg', 'm1.jpeg', 'storage/users/photos/185_pub_2021_01_07_095752_SxGKMIuK.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 185, '2021-01-07 03:57:52', '2021-01-07 03:57:53', NULL),
(262, '185_pub_2021_01_07_095806_CluK9Bdi.jpg', 'm2.jpg', 'storage/users/photos/185_pub_2021_01_07_095806_CluK9Bdi.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 185, '2021-01-07 03:58:06', '2021-01-07 03:58:06', NULL),
(263, '186_pub_2021_01_07_095840_ZT3G38B2.jpg', '2.jpg', 'storage/users/photos/186_pub_2021_01_07_095840_ZT3G38B2.jpg', '75002', '613', '613', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 186, '2021-01-07 03:58:41', '2021-01-07 03:58:41', NULL),
(264, '187_pub_2021_01_07_095906_tbozZ62g.jpeg', 'm6.jpeg', 'storage/users/photos/187_pub_2021_01_07_095906_tbozZ62g.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 187, '2021-01-07 03:59:06', '2021-01-07 03:59:08', NULL),
(265, '188_pub_2021_01_07_095922_LeJeYR43.png', 'm11.png', 'storage/users/photos/188_pub_2021_01_07_095922_LeJeYR43.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 188, '2021-01-07 03:59:22', '2021-01-07 03:59:23', NULL),
(266, '189_pub_2021_01_07_095947_ivcoNniY.jpg', '10.jpg', 'storage/users/photos/189_pub_2021_01_07_095947_ivcoNniY.jpg', '14245', '283', '400', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 189, '2021-01-07 03:59:47', '2021-01-07 03:59:48', NULL),
(267, '190_pub_2021_01_07_100029_c77pr3fl.png', 'm11.png', 'storage/users/photos/190_pub_2021_01_07_100029_c77pr3fl.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 190, '2021-01-07 04:00:29', '2021-01-07 04:00:29', NULL),
(268, '191_pub_2021_01_07_100142_odaBEynx.jpeg', 'm3.jpeg', 'storage/users/photos/191_pub_2021_01_07_100142_odaBEynx.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 191, '2021-01-07 04:01:42', '2021-01-07 04:01:43', NULL),
(269, '192_pub_2021_01_07_100157_cERgEcvs.jpg', 'm12.jpg', 'storage/users/photos/192_pub_2021_01_07_100157_cERgEcvs.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 192, '2021-01-07 04:01:57', '2021-01-07 04:01:58', NULL),
(270, '193_pub_2021_01_07_100216_cT25HM9S.jpg', 'm10.jpg', 'storage/users/photos/193_pub_2021_01_07_100216_cT25HM9S.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 193, '2021-01-07 04:02:16', '2021-01-07 04:02:16', NULL),
(271, '194_pub_2021_01_07_100254_TMGpvlG2.jpeg', 'm1.jpeg', 'storage/users/photos/194_pub_2021_01_07_100254_TMGpvlG2.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 194, '2021-01-07 04:02:54', '2021-01-07 04:02:55', NULL),
(272, '195_pub_2021_01_07_100312_HgwilW3E.jpg', 'm2.jpg', 'storage/users/photos/195_pub_2021_01_07_100312_HgwilW3E.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 195, '2021-01-07 04:03:12', '2021-01-07 04:03:12', NULL),
(273, '196_pub_2021_01_07_100339_mcV1yX9I.jpg', '9.jpg', 'storage/users/photos/196_pub_2021_01_07_100339_mcV1yX9I.jpg', '30831', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 196, '2021-01-07 04:03:39', '2021-01-07 04:03:39', NULL),
(274, '197_pub_2021_01_07_100402_8P11UbqA.jpg', '5.jpg', 'storage/users/photos/197_pub_2021_01_07_100402_8P11UbqA.jpg', '32321', '554', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 197, '2021-01-07 04:04:02', '2021-01-07 04:04:02', NULL),
(275, '198_pub_2021_01_07_100415_NY1dIRvq.jpg', '2.jpg', 'storage/users/photos/198_pub_2021_01_07_100415_NY1dIRvq.jpg', '75002', '613', '613', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 198, '2021-01-07 04:04:15', '2021-01-07 04:04:15', NULL),
(276, '199_pub_2021_01_07_100424_SVA1G0Rj.jpg', '3.jpg', 'storage/users/photos/199_pub_2021_01_07_100424_SVA1G0Rj.jpg', '76258', '470', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 199, '2021-01-07 04:04:24', '2021-01-07 04:04:24', NULL),
(277, '200_pub_2021_01_07_100444_UGtoDFvo.jpg', 'm10.jpg', 'storage/users/photos/200_pub_2021_01_07_100444_UGtoDFvo.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 200, '2021-01-07 04:04:44', '2021-01-07 04:04:44', NULL),
(278, '201_pub_2021_01_07_100457_q5aC2xVX.jpg', 'm9.jpg', 'storage/users/photos/201_pub_2021_01_07_100457_q5aC2xVX.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 201, '2021-01-07 04:04:57', '2021-01-07 04:04:57', NULL),
(279, '202_pub_2021_01_07_100508_0QEEHAcy.png', 'm7.png', 'storage/users/photos/202_pub_2021_01_07_100508_0QEEHAcy.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 202, '2021-01-07 04:05:08', '2021-01-07 04:05:09', NULL),
(280, '203_pub_2021_01_07_100527_kGRCuf5A.jpeg', 'm6.jpeg', 'storage/users/photos/203_pub_2021_01_07_100527_kGRCuf5A.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 203, '2021-01-07 04:05:27', '2021-01-07 04:05:27', NULL),
(281, '204_pub_2021_01_07_100546_7hQ2NA0s.jpg', 'm8.jpg', 'storage/users/photos/204_pub_2021_01_07_100546_7hQ2NA0s.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 204, '2021-01-07 04:05:46', '2021-01-07 04:05:46', NULL),
(282, '205_pub_2021_01_07_100558_LP0ZCRrU.jpg', 'm4.jpg', 'storage/users/photos/205_pub_2021_01_07_100558_LP0ZCRrU.jpg', '54446', '556', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 205, '2021-01-07 04:05:58', '2021-01-07 04:05:59', NULL),
(283, '206_pub_2021_01_07_100634_Q9UuSl9L.png', 'm11.png', 'storage/users/photos/206_pub_2021_01_07_100634_Q9UuSl9L.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 206, '2021-01-07 04:06:34', '2021-01-07 04:06:35', NULL),
(284, '207_pub_2021_01_07_100654_1rTkJYcz.jpeg', 'm3.jpeg', 'storage/users/photos/207_pub_2021_01_07_100654_1rTkJYcz.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 207, '2021-01-07 04:06:54', '2021-01-07 04:06:55', NULL),
(285, '208_pub_2021_01_07_100709_rb2I7jKI.jpg', 'm12.jpg', 'storage/users/photos/208_pub_2021_01_07_100709_rb2I7jKI.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 208, '2021-01-07 04:07:09', '2021-01-07 04:07:09', NULL),
(286, '209_pub_2021_01_07_100720_H4zZlkCt.jpeg', 'm13.jpeg', 'storage/users/photos/209_pub_2021_01_07_100720_H4zZlkCt.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 209, '2021-01-07 04:07:20', '2021-01-07 04:07:20', NULL),
(287, '210_pub_2021_01_07_100738_w9L9tNoc.jpeg', 'm3.jpeg', 'storage/users/photos/210_pub_2021_01_07_100738_w9L9tNoc.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 210, '2021-01-07 04:07:38', '2021-01-07 04:07:38', NULL),
(288, '211_pub_2021_01_07_100814_1sMPyqro.jpeg', 'm14.jpeg', 'storage/users/photos/211_pub_2021_01_07_100814_1sMPyqro.jpeg', '33221', '382', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 211, '2021-01-07 04:08:14', '2021-01-07 04:08:15', NULL),
(289, '212_pub_2021_01_07_100827_7Qqnz77w.jpg', 'm15.jpg', 'storage/users/photos/212_pub_2021_01_07_100827_7Qqnz77w.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 212, '2021-01-07 04:08:27', '2021-01-07 04:08:28', NULL),
(290, '213_pub_2021_01_07_100847_CR04Gykp.jpg', '5.jpg', 'storage/users/photos/213_pub_2021_01_07_100847_CR04Gykp.jpg', '32321', '554', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 213, '2021-01-07 04:08:47', '2021-01-07 04:08:47', NULL),
(291, '214_pub_2021_01_07_100900_Y2Go4q8T.jpg', 'm8.jpg', 'storage/users/photos/214_pub_2021_01_07_100900_Y2Go4q8T.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 214, '2021-01-07 04:09:01', '2021-01-07 04:09:01', NULL),
(292, '215_pub_2021_01_07_100916_LRzVelLv.jpg', '6.jpg', 'storage/users/photos/215_pub_2021_01_07_100916_LRzVelLv.jpg', '50319', '382', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 215, '2021-01-07 04:09:16', '2021-01-07 04:09:17', NULL),
(293, '216_pub_2021_01_07_100939_VwCChc2E.jpg', 'm2.jpg', 'storage/users/photos/216_pub_2021_01_07_100939_VwCChc2E.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 216, '2021-01-07 04:09:39', '2021-01-07 04:09:40', NULL),
(294, '217_pub_2021_01_07_100954_WqgJqUSp.png', '7.png', 'storage/users/photos/217_pub_2021_01_07_100954_WqgJqUSp.png', '326668', '365', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 217, '2021-01-07 04:09:54', '2021-01-07 04:09:54', NULL),
(295, '218_pub_2021_01_07_101020_XUNRPSr3.jpeg', 'm3.jpeg', 'storage/users/photos/218_pub_2021_01_07_101020_XUNRPSr3.jpeg', '19982', '540', '540', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 218, '2021-01-07 04:10:20', '2021-01-07 04:10:20', NULL),
(296, '219_pub_2021_01_07_101035_OIaOfNCW.png', 'm11.png', 'storage/users/photos/219_pub_2021_01_07_101035_OIaOfNCW.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 219, '2021-01-07 04:10:36', '2021-01-07 04:10:36', NULL),
(297, '220_pub_2021_01_07_101116_NsTlHK8R.png', 'm7.png', 'storage/users/photos/220_pub_2021_01_07_101116_NsTlHK8R.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 220, '2021-01-07 04:11:16', '2021-01-07 04:11:16', NULL),
(298, '221_pub_2021_01_07_101134_W6ZrzQeI.jpg', '8.jpg', 'storage/users/photos/221_pub_2021_01_07_101134_W6ZrzQeI.jpg', '38524', '452', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 221, '2021-01-07 04:11:34', '2021-01-07 04:11:34', NULL),
(299, '222_pub_2021_01_07_101211_YE9op2uo.jpg', 'm12.jpg', 'storage/users/photos/222_pub_2021_01_07_101211_YE9op2uo.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 222, '2021-01-07 04:12:11', '2021-01-07 04:12:11', NULL),
(300, '223_pub_2021_01_07_101225_Xw45hfZU.jpeg', 'm13.jpeg', 'storage/users/photos/223_pub_2021_01_07_101225_Xw45hfZU.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 223, '2021-01-07 04:12:25', '2021-01-07 04:12:26', NULL),
(301, '224_pub_2021_01_07_101242_lfOmMKVu.jpg', 'm15.jpg', 'storage/users/photos/224_pub_2021_01_07_101242_lfOmMKVu.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 224, '2021-01-07 04:12:43', '2021-01-07 04:12:44', NULL),
(302, '225_pub_2021_01_07_101315_R76k9ASn.png', 'm11.png', 'storage/users/photos/225_pub_2021_01_07_101315_R76k9ASn.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 225, '2021-01-07 04:13:15', '2021-01-07 04:13:16', NULL),
(303, '226_pub_2021_01_07_101341_7qOOwBwK.jpg', 'm15.jpg', 'storage/users/photos/226_pub_2021_01_07_101341_7qOOwBwK.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 226, '2021-01-07 04:13:41', '2021-01-07 04:13:41', NULL),
(304, '227_pub_2021_01_07_101355_89mrN1Yn.jpeg', 'm14.jpeg', 'storage/users/photos/227_pub_2021_01_07_101355_89mrN1Yn.jpeg', '33221', '382', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 227, '2021-01-07 04:13:55', '2021-01-07 04:13:55', NULL),
(305, '228_pub_2021_01_07_101416_zZ4GbmTI.jpeg', 'm14.jpeg', 'storage/users/photos/228_pub_2021_01_07_101416_zZ4GbmTI.jpeg', '33221', '382', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 228, '2021-01-07 04:14:16', '2021-01-07 04:14:17', NULL),
(306, '229_pub_2021_01_07_101436_wxTt2Mpj.jpg', 'm9.jpg', 'storage/users/photos/229_pub_2021_01_07_101436_wxTt2Mpj.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 229, '2021-01-07 04:14:36', '2021-01-07 04:14:36', NULL),
(307, '230_pub_2021_01_07_101451_ROH1WgGY.jpg', '4.jpg', 'storage/users/photos/230_pub_2021_01_07_101451_ROH1WgGY.jpg', '106252', '613', '643', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 230, '2021-01-07 04:14:51', '2021-01-07 04:14:51', NULL),
(308, '231_pub_2021_01_07_101514_vnxftLja.jpg', '9.jpg', 'storage/users/photos/231_pub_2021_01_07_101514_vnxftLja.jpg', '30831', '453', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 231, '2021-01-07 04:15:14', '2021-01-07 04:15:14', NULL),
(309, '232_pub_2021_01_07_101535_vRpltbZf.jpg', 'm10.jpg', 'storage/users/photos/232_pub_2021_01_07_101535_vRpltbZf.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 232, '2021-01-07 04:15:35', '2021-01-07 04:15:35', NULL),
(310, '233_pub_2021_01_07_101609_Juqjr8vJ.jpg', '10.jpg', 'storage/users/photos/233_pub_2021_01_07_101609_Juqjr8vJ.jpg', '14245', '283', '400', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 233, '2021-01-07 04:16:09', '2021-01-07 04:16:09', NULL),
(311, '234_pub_2021_01_07_101629_GCJahdzj.png', 'm7.png', 'storage/users/photos/234_pub_2021_01_07_101629_GCJahdzj.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 234, '2021-01-07 04:16:29', '2021-01-07 04:16:29', NULL),
(312, '235_pub_2021_01_07_101642_Qj4PF0TW.jpeg', 'm13.jpeg', 'storage/users/photos/235_pub_2021_01_07_101642_Qj4PF0TW.jpeg', '68370', '613', '613', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 235, '2021-01-07 04:16:42', '2021-01-07 04:16:42', NULL),
(313, '236_pub_2021_01_07_101731_kDx7MT3C.jpeg', 'm6.jpeg', 'storage/users/photos/236_pub_2021_01_07_101731_kDx7MT3C.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 236, '2021-01-07 04:17:31', '2021-01-07 04:17:33', NULL),
(314, '237_pub_2021_01_07_101902_dkIWmKxb.jpg', 'm10.jpg', 'storage/users/photos/237_pub_2021_01_07_101902_dkIWmKxb.jpg', '47033', '354', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 237, '2021-01-07 04:19:02', '2021-01-07 04:19:02', NULL),
(315, '238_pub_2021_01_07_101918_bZZN0til.jpeg', 'm1.jpeg', 'storage/users/photos/238_pub_2021_01_07_101918_bZZN0til.jpeg', '43966', '509', '679', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 238, '2021-01-07 04:19:18', '2021-01-07 04:19:18', NULL),
(316, '239_pub_2021_01_07_101937_Li10cRcK.jpg', 'm2.jpg', 'storage/users/photos/239_pub_2021_01_07_101937_Li10cRcK.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 239, '2021-01-07 04:19:37', '2021-01-07 04:19:38', NULL),
(317, '240_pub_2021_01_07_102015_Qbrhcpqw.png', '3.png', 'storage/users/photos/240_pub_2021_01_07_102015_Qbrhcpqw.png', '382738', '382', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 240, '2021-01-07 04:20:15', '2021-01-07 04:20:15', NULL),
(318, '241_pub_2021_01_07_102031_32KI4aqR.jpg', '6.jpg', 'storage/users/photos/241_pub_2021_01_07_102031_32KI4aqR.jpg', '50319', '382', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 241, '2021-01-07 04:20:31', '2021-01-07 04:20:31', NULL),
(319, '242_pub_2021_01_07_102051_S2iaGabE.jpg', '3.jpg', 'storage/users/photos/242_pub_2021_01_07_102051_S2iaGabE.jpg', '76258', '470', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 242, '2021-01-07 04:20:51', '2021-01-07 04:20:51', NULL),
(320, '243_pub_2021_01_07_102119_raJT9ifA.jpg', '5.jpg', 'storage/users/photos/243_pub_2021_01_07_102119_raJT9ifA.jpg', '32321', '554', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 243, '2021-01-07 04:21:19', '2021-01-07 04:21:20', NULL),
(321, '244_pub_2021_01_07_102135_FKoCeBVR.jpg', 'm12.jpg', 'storage/users/photos/244_pub_2021_01_07_102135_FKoCeBVR.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 244, '2021-01-07 04:21:35', '2021-01-07 04:21:36', NULL),
(322, '244_pub_2021_01_07_102136_QX3nHeHH.jpg', 'm12.jpg', 'storage/users/photos/244_pub_2021_01_07_102136_QX3nHeHH.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 244, '2021-01-07 04:21:36', '2021-01-07 04:21:37', NULL),
(323, '244_pub_2021_01_07_102137_UnW3HYem.jpg', 'm12.jpg', 'storage/users/photos/244_pub_2021_01_07_102137_UnW3HYem.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 244, '2021-01-07 04:21:37', '2021-01-07 04:21:38', NULL),
(324, '244_pub_2021_01_07_102137_Pi37rbAk.jpg', 'm12.jpg', 'storage/users/photos/244_pub_2021_01_07_102137_Pi37rbAk.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 244, '2021-01-07 04:21:37', '2021-01-07 04:21:38', NULL),
(325, '244_pub_2021_01_07_102137_f0F9h0Ib.jpg', 'm12.jpg', 'storage/users/photos/244_pub_2021_01_07_102137_f0F9h0Ib.jpg', '40323', '504', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 244, '2021-01-07 04:21:37', '2021-01-07 04:21:38', NULL),
(326, '245_pub_2021_01_07_102200_kKnQpdLC.png', 'm7.png', 'storage/users/photos/245_pub_2021_01_07_102200_kKnQpdLC.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 245, '2021-01-07 04:22:00', '2021-01-07 04:22:00', NULL),
(327, '246_pub_2021_01_07_102229_ULAbn76w.jpg', 'm15.jpg', 'storage/users/photos/246_pub_2021_01_07_102229_ULAbn76w.jpg', '83447', '493', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 246, '2021-01-07 04:22:29', '2021-01-07 04:22:29', NULL),
(328, '270_pub_2021_01_07_102400_6pFynLe8.png', 'm7.png', 'storage/users/photos/270_pub_2021_01_07_102400_6pFynLe8.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 270, '2021-01-07 04:24:00', '2021-01-07 04:24:00', NULL),
(329, '269_pub_2021_01_07_102436_724I12oh.png', 'm7.png', 'storage/users/photos/269_pub_2021_01_07_102436_724I12oh.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 269, '2021-01-07 04:24:36', '2021-01-07 04:24:37', NULL),
(330, '269_pub_2021_01_07_102511_het60yXh.jpeg', 'm6.jpeg', 'storage/users/photos/269_pub_2021_01_07_102511_het60yXh.jpeg', '45588', '512', '640', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 269, '2021-01-07 04:25:11', '2021-01-07 04:25:12', NULL),
(331, '267_pub_2021_01_07_102516_c6DzDyR3.jpg', 'm8.jpg', 'storage/users/photos/267_pub_2021_01_07_102516_c6DzDyR3.jpg', '53828', '408', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 267, '2021-01-07 04:25:16', '2021-01-07 04:25:17', NULL),
(332, '268_pub_2021_01_07_102558_RIhFGpWY.jpg', 'm9.jpg', 'storage/users/photos/268_pub_2021_01_07_102558_RIhFGpWY.jpg', '45211', '479', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 268, '2021-01-07 04:25:58', '2021-01-07 04:25:58', NULL),
(333, '99_pub_2021_01_07_102731_3yHE23EJ.png', 'm7.png', 'storage/users/photos/99_pub_2021_01_07_102731_3yHE23EJ.png', '534995', '602', '679', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 99, '2021-01-07 04:27:31', '2021-01-07 04:27:31', NULL),
(334, '98_pub_2021_01_07_102745_3VdYQzEb.jpg', 'm5.jpg', 'storage/users/photos/98_pub_2021_01_07_102745_3VdYQzEb.jpg', '74408', '505', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 98, '2021-01-07 04:27:45', '2021-01-07 04:27:45', NULL),
(335, '97_pub_2021_01_07_102806_GSt2HIDO.jpg', 'm2.jpg', 'storage/users/photos/97_pub_2021_01_07_102806_GSt2HIDO.jpg', '21121', '257', '679', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 97, '2021-01-07 04:28:06', '2021-01-07 04:28:06', NULL),
(336, '20_pub_2021_01_07_102916_Z8stKEAB.png', 'm11.png', 'storage/users/photos/20_pub_2021_01_07_102916_Z8stKEAB.png', '316847', '383', '590', 'png', 'image/png', 'public', 0, 0, 1, 1, NULL, 20, '2021-01-07 04:29:16', '2021-01-07 04:29:17', NULL),
(337, '252_pub_2021_01_10_045249_lO2qESFQ.jpg', '252_pp_2020_12_08_122539_23621791.jpg', 'storage/users/photos/252_pub_2021_01_10_045249_lO2qESFQ.jpg', '66322', '675', '900', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 252, '2021-01-09 22:52:49', '2021-01-09 22:52:49', NULL),
(338, '262_pub_2021_01_10_045611_sosdq0wA.jpg', '262_pp_2020_12_28_070053_41028303.jpg', 'storage/users/photos/262_pub_2021_01_10_045611_sosdq0wA.jpg', '137496', '720', '719', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 262, '2021-01-09 22:56:11', '2021-01-09 22:56:11', NULL),
(339, '247_pub_2021_01_10_045657_q79YQWCa.jpg', '247_pp_2020_12_05_012441_87934162.jpg', 'storage/users/photos/247_pub_2021_01_10_045657_q79YQWCa.jpg', '73817', '720', '540', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 1, NULL, 247, '2021-01-09 22:56:57', '2021-01-09 22:56:57', NULL),
(340, '276_pub_2021_01_17_092201_xJ70PHDT.jpg', '276_pp_2021_01_14_053440_57779464.jpg', 'storage/users/photos/276_pub_2021_01_17_092201_xJ70PHDT.jpg', '369860', '1982', '1982', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 16, NULL, 276, '2021-01-17 03:22:01', '2021-01-17 03:22:01', NULL),
(341, 'mu5yWtIg1614462450.jpg', '1.jpg', 'storage/users/photos/mu5yWtIg1614462450.jpg', '40356', '750', '563', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 314, NULL, 314, '2021-02-27 15:47:30', '2021-02-27 15:47:31', NULL),
(342, '8RInGYzM1614462451.jpeg', '2.jpeg', 'storage/users/photos/8RInGYzM1614462451.jpeg', '23410', '600', '450', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 314, NULL, 314, '2021-02-27 15:47:31', '2021-02-27 15:47:32', NULL),
(343, '0tdrLvE71614462452.jpg', '3.jpg', 'storage/users/photos/0tdrLvE71614462452.jpg', '17868', '600', '450', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 314, NULL, 314, '2021-02-27 15:47:32', '2021-02-27 15:47:32', NULL),
(344, 'S8Su8sP91614494697.jpg', 'IMG_20210202_104028.jpg', 'storage/users/photos/S8Su8sP91614494697.jpg', '1585433', '3000', '4000', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 315, NULL, 315, '2021-02-28 00:44:57', '2021-02-28 00:44:57', NULL),
(345, 'BK6Yr9vx1614494697.jpg', 'IMG_20210204_100131.jpg', 'storage/users/photos/BK6Yr9vx1614494697.jpg', '1922953', '3000', '4000', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 315, NULL, 315, '2021-02-28 00:44:57', '2021-02-28 00:44:57', NULL),
(346, 'vwrrquqy1614494697.jpg', 'IMG_20210204_100154.jpg', 'storage/users/photos/vwrrquqy1614494697.jpg', '1010048', '3000', '4000', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 315, NULL, 315, '2021-02-28 00:44:57', '2021-02-28 00:44:58', NULL),
(347, 'iF5I3vkC1614562336.jpg', 'IMG_20210220_180529-1.jpg', 'storage/users/photos/iF5I3vkC1614562336.jpg', '2593258', '1940', '2577', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 312, NULL, 312, '2021-02-28 19:32:16', '2021-02-28 19:32:17', NULL),
(348, '1m98xZXL1614562337.jpg', 'IMG_20210220_175512-1.jpg', 'storage/users/photos/1m98xZXL1614562337.jpg', '3127508', '1571', '3183', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 312, NULL, 312, '2021-02-28 19:32:17', '2021-02-28 19:32:17', NULL),
(349, '6G0KYXOt1614562337.jpg', 'IMG_20210220_175457-1-1.jpg', 'storage/users/photos/6G0KYXOt1614562337.jpg', '1158989', '858', '2076', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 312, NULL, 312, '2021-02-28 19:32:17', '2021-02-28 19:32:17', NULL),
(350, 'XSqk8iZQ1614707812.jpg', '13566995_10154408970728945_3004505768173313876_n.jpg', 'storage/users/photos/XSqk8iZQ1614707812.jpg', '67525', '720', '960', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 316, NULL, 316, '2021-03-02 11:56:53', '2021-03-02 11:56:53', NULL),
(351, 'bUB5Khal1614707813.jpg', '50035280_10157082686323945_1391601878151725056_n.jpg', 'storage/users/photos/bUB5Khal1614707813.jpg', '104093', '960', '960', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 316, NULL, 316, '2021-03-02 11:56:53', '2021-03-02 11:56:53', NULL),
(352, 'LHy2CTrP1614707814.jpg', 'eid1.jpg', 'storage/users/photos/LHy2CTrP1614707814.jpg', '86666', '960', '443', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 316, NULL, 316, '2021-03-02 11:56:54', '2021-03-02 11:56:54', NULL),
(353, 'LSMGWYfy1615032641.jpg', 'c92e1f3a-7332-4b1d-bb44-05071a4a88eb.jpg', 'storage/users/photos/LSMGWYfy1615032641.jpg', '63631', '1024', '768', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 318, NULL, 318, '2021-03-06 06:10:41', '2021-03-06 06:10:41', NULL),
(354, 'eQ1uN0Es1615032641.jpg', 'f290eeb4-b8e6-43de-8ca8-8e55dca9e3b2.jpg', 'storage/users/photos/eQ1uN0Es1615032641.jpg', '57565', '1024', '768', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 318, NULL, 318, '2021-03-06 06:10:41', '2021-03-06 06:10:42', NULL),
(355, 'zJAP8gxm1615032642.jpg', '1678accd-736e-4c8e-b77b-05089a98180c.jpg', 'storage/users/photos/zJAP8gxm1615032642.jpg', '119535', '1024', '768', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 318, NULL, 318, '2021-03-06 06:10:43', '2021-03-06 06:10:43', NULL),
(356, 'ZFUCVDjB1615370750.jpg', '87264734_626915421478351_9001182744293670912_n.jpg', 'storage/users/photos/ZFUCVDjB1615370750.jpg', '193162', '1368', '2048', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 322, NULL, 322, '2021-03-10 04:05:51', '2021-03-10 04:05:52', NULL),
(357, 'wpDHRFk91615370752.jpg', '156513900_468236510975343_2524203647657381120_n.jpg', 'storage/users/photos/wpDHRFk91615370752.jpg', '76950', '946', '630', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 322, NULL, 322, '2021-03-10 04:05:52', '2021-03-10 04:05:53', NULL),
(358, 'VSZVKcXz1615370753.jpg', '154961398_950424965362459_8633906808421238353_n.jpg', 'storage/users/photos/VSZVKcXz1615370753.jpg', '44424', '540', '810', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 322, NULL, 322, '2021-03-10 04:05:54', '2021-03-10 04:05:54', NULL),
(359, 'zsfRyNtM1615908956.jpg', '88963705_560348174601574_32474629977145344_o (2).jpg', 'storage/users/photos/zsfRyNtM1615908956.jpg', '53756', '417', '626', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 324, NULL, 324, '2021-03-16 09:35:56', '2021-03-16 09:35:56', NULL),
(360, 'n8YI9GEA1615908956.jpg', '132872472_758684338101289_6959586205871235821_o.jpg', 'storage/users/photos/n8YI9GEA1615908956.jpg', '376531', '1365', '2048', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 324, NULL, 324, '2021-03-16 09:35:56', '2021-03-16 09:35:56', NULL),
(361, '3TbL6v7T1615908957.jpeg', '1608905416957-01.jpeg', 'storage/users/photos/3TbL6v7T1615908957.jpeg', '3673731', '3456', '5184', 'jpeg', 'image/jpeg', 'public', 0, 0, 1, 324, NULL, 324, '2021-03-16 09:35:57', '2021-03-16 09:35:57', NULL),
(362, 'aLCwzrqb1616049357.jpg', 'inbound5173972034133292530.jpg', 'storage/users/photos/aLCwzrqb1616049357.jpg', '11712', '300', '300', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 326, NULL, 326, '2021-03-18 00:35:57', '2021-03-18 00:35:57', NULL),
(363, 'n8zIJyIo1616049357.jpg', 'inbound8795766936030617302.jpg', 'storage/users/photos/n8zIJyIo1616049357.jpg', '11712', '300', '300', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 326, NULL, 326, '2021-03-18 00:35:57', '2021-03-18 00:35:57', NULL),
(364, 'dhX6lS8S1616049357.jpg', 'inbound5568409758561021410.jpg', 'storage/users/photos/dhX6lS8S1616049357.jpg', '11712', '300', '300', 'jpg', 'image/jpeg', 'public', 0, 0, 1, 326, NULL, 326, '2021-03-18 00:35:57', '2021-03-18 00:35:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_pictures`
--

CREATE TABLE `user_pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_mime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL,
  `image_width` int(11) DEFAULT NULL,
  `image_height` int(11) DEFAULT NULL,
  `autoload` tinyint(1) NOT NULL DEFAULT 1,
  `checked` tinyint(1) NOT NULL DEFAULT 0,
  `can_edit` tinyint(1) NOT NULL DEFAULT 1,
  `image_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_pictures`
--

INSERT INTO `user_pictures` (`id`, `user_id`, `image_name`, `image_mime`, `image_ext`, `image_alt`, `image_size`, `image_width`, `image_height`, `autoload`, `checked`, `can_edit`, `image_type`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 8, '8_pp_2018_11_06_045631_55663276.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 20032, 200, 200, 1, 0, 1, 'profilepic', NULL, '2018-11-06 10:56:31', '2018-11-06 10:56:31'),
(5, 12, '12_pp_2018_11_13_045700_46648540.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 34772, 200, 200, 1, 0, 1, 'profilepic', 12, '2018-11-12 22:57:00', '2018-11-12 22:57:00'),
(286, 248, '248_pp_2020_12_05_091504_77414597.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 11059, 300, 300, 1, 0, 1, 'profilepic', NULL, '2020-12-05 03:15:04', '2020-12-05 03:15:04'),
(287, 249, '249_pp_2020_12_07_015510_55507485.png', 'image/png', 'png', 'Marriage Solution BD', 189052, 900, 1600, 1, 0, 1, 'profilepic', NULL, '2020-12-06 19:55:10', '2020-12-06 19:55:11'),
(288, 250, '250_pp_2020_12_07_012325_58959952.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 304034, 612, 816, 1, 0, 1, 'profilepic', NULL, '2020-12-07 07:23:25', '2020-12-07 07:23:25'),
(290, 251, '251_pp_2020_12_07_065510_32208423.gif', 'image/gif', 'gif', 'Marriage Solution BD', 1449065, 200, 200, 1, 1, 1, 'profilepic', NULL, '2020-12-07 12:55:11', '2020-12-07 12:55:11'),
(291, 16, '16_pp_2020_12_07_065729_94154334.gif', 'image/gif', 'gif', 'Marriage Solution BD', 1449065, 200, 200, 1, 1, 1, 'profilepic', NULL, '2020-12-07 12:57:29', '2020-12-07 12:57:29'),
(292, 1, '1_pp_2020_12_07_065924_70108577.gif', 'image/gif', 'gif', 'Marriage Solution BD', 1449065, 200, 200, 1, 1, 1, 'profilepic', NULL, '2020-12-07 12:59:24', '2020-12-07 12:59:24'),
(294, 253, '253_pp_2020_12_10_054931_37521528.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 293774, 1055, 1275, 1, 0, 1, 'profilepic', NULL, '2020-12-10 11:49:31', '2020-12-10 11:49:31'),
(295, 254, '254_pp_2020_12_10_055055_74861887.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 2042382, 1536, 2048, 1, 0, 1, 'profilepic', NULL, '2020-12-10 11:50:55', '2020-12-10 11:50:55'),
(296, 255, '255_pp_2020_12_12_040554_64382748.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 171905, 472, 591, 1, 0, 1, 'profilepic', NULL, '2020-12-12 10:05:54', '2020-12-12 10:05:54'),
(297, 256, '256_pp_2020_12_13_043424_73471952.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 169559, 1052, 1052, 1, 0, 1, 'profilepic', NULL, '2020-12-13 10:34:24', '2020-12-13 10:34:24'),
(298, 257, '257_pp_2020_12_16_055858_34334096.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 805153, 1920, 1920, 1, 0, 1, 'profilepic', NULL, '2020-12-16 11:58:58', '2020-12-16 11:58:59'),
(299, 258, '258_pp_2020_12_21_062156_53692074.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 364187, 1080, 2160, 1, 0, 1, 'profilepic', NULL, '2020-12-21 12:21:56', '2020-12-21 12:21:56'),
(300, 259, '259_pp_2020_12_22_105120_63730098.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 144143, 373, 515, 1, 0, 1, 'profilepic', NULL, '2020-12-22 04:51:20', '2020-12-22 04:51:20'),
(301, 260, '260_pp_2020_12_25_052141_80871438.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 658718, 1339, 1449, 1, 0, 1, 'profilepic', NULL, '2020-12-24 23:21:41', '2020-12-24 23:21:41'),
(302, 261, '261_pp_2020_12_26_105945_27948402.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 349876, 1276, 2576, 1, 0, 1, 'profilepic', NULL, '2020-12-26 16:59:45', '2020-12-26 16:59:45'),
(304, 263, '263_pp_2020_12_29_105318_91217012.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74989, 720, 960, 1, 0, 1, 'profilepic', NULL, '2020-12-29 04:53:18', '2020-12-29 04:53:18'),
(305, 264, '264_pp_2020_12_30_114729_12098109.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 352589, 1920, 1920, 1, 0, 1, 'profilepic', NULL, '2020-12-30 05:47:29', '2020-12-30 05:47:29'),
(307, 265, '265_pp_2021_01_07_055735_37845638.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 128463, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-06 23:57:35', '2021-01-06 23:57:36'),
(308, 266, '266_pp_2021_01_07_055807_12317553.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 221240, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-06 23:58:07', '2021-01-06 23:58:07'),
(309, 2, '2_pp_2021_01_07_060909_60456967.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:09:10', '2021-01-07 00:09:10'),
(310, 3, '3_pp_2021_01_07_060946_53484227.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:09:46', '2021-01-07 00:09:47'),
(311, 4, '4_pp_2021_01_07_061014_20846847.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:10:14', '2021-01-07 00:10:14'),
(312, 5, '5_pp_2021_01_07_061047_75857033.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:10:47', '2021-01-07 00:10:48'),
(313, 6, '6_pp_2021_01_07_061117_17005953.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:11:17', '2021-01-07 00:11:17'),
(314, 7, '7_pp_2021_01_07_061221_95294974.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:12:21', '2021-01-07 00:12:21'),
(315, 9, '9_pp_2021_01_07_061323_44355785.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:13:24', '2021-01-07 00:13:24'),
(316, 10, '10_pp_2021_01_07_061415_65643571.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30577, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:14:15', '2021-01-07 00:14:15'),
(318, 11, '11_pp_2021_01_07_061444_82484299.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:14:44', '2021-01-07 00:14:45'),
(319, 13, '13_pp_2021_01_07_061510_73730674.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 75002, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:15:10', '2021-01-07 00:15:10'),
(320, 14, '14_pp_2021_01_07_061528_15956301.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:15:28', '2021-01-07 00:15:28'),
(321, 15, '15_pp_2021_01_07_061557_96603324.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:15:57', '2021-01-07 00:15:58'),
(322, 17, '17_pp_2021_01_07_061616_12594523.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:16:16', '2021-01-07 00:16:17'),
(323, 18, '18_pp_2021_01_07_061644_55552437.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:16:44', '2021-01-07 00:16:44'),
(324, 19, '19_pp_2021_01_07_061712_21599092.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:17:13', '2021-01-07 00:17:13'),
(326, 21, '21_pp_2021_01_07_061800_99227906.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 76258, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:18:00', '2021-01-07 00:18:00'),
(328, 22, '22_pp_2021_01_07_061835_31381317.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:18:36', '2021-01-07 00:18:36'),
(329, 23, '23_pp_2021_01_07_061922_95751738.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:19:22', '2021-01-07 00:19:23'),
(330, 24, '24_pp_2021_01_07_061947_11046841.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:19:47', '2021-01-07 00:19:47'),
(331, 25, '25_pp_2021_01_07_062008_34314786.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:20:08', '2021-01-07 00:20:08'),
(333, 26, '26_pp_2021_01_07_062054_58074973.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 106252, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:20:54', '2021-01-07 00:20:54'),
(334, 27, '27_pp_2021_01_07_062120_74330392.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:21:20', '2021-01-07 00:21:21'),
(335, 28, '28_pp_2021_01_07_062146_16983798.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:21:46', '2021-01-07 00:21:46'),
(336, 29, '29_pp_2021_01_07_062205_37883158.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:22:05', '2021-01-07 00:22:06'),
(337, 30, '30_pp_2021_01_07_062334_30405508.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:23:34', '2021-01-07 00:23:35'),
(338, 31, '31_pp_2021_01_07_062408_50666630.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:24:09', '2021-01-07 00:24:10'),
(339, 32, '32_pp_2021_01_07_062444_16068166.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:24:44', '2021-01-07 00:24:45'),
(340, 33, '33_pp_2021_01_07_062509_11458813.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:25:09', '2021-01-07 00:25:10'),
(341, 34, '34_pp_2021_01_07_062532_30709773.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:25:33', '2021-01-07 00:25:33'),
(342, 35, '35_pp_2021_01_07_062638_34873036.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:26:40', '2021-01-07 00:26:40'),
(343, 36, '36_pp_2021_01_07_062725_79016875.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:27:25', '2021-01-07 00:27:25'),
(344, 37, '37_pp_2021_01_07_062806_18621395.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:28:07', '2021-01-07 00:28:07'),
(345, 38, '38_pp_2021_01_07_062829_24267618.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:28:29', '2021-01-07 00:28:29'),
(346, 39, '39_pp_2021_01_07_062851_32508553.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:28:51', '2021-01-07 00:28:51'),
(347, 40, '40_pp_2021_01_07_062932_32399411.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:29:33', '2021-01-07 00:29:33'),
(348, 41, '41_pp_2021_01_07_063012_33633341.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:30:12', '2021-01-07 00:30:13'),
(349, 42, '42_pp_2021_01_07_063109_25666603.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 32321, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:31:09', '2021-01-07 00:31:09'),
(350, 43, '43_pp_2021_01_07_063128_43972894.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 50319, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:31:28', '2021-01-07 00:31:28'),
(351, 44, '44_pp_2021_01_07_063151_77729141.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:31:51', '2021-01-07 00:31:52'),
(352, 45, '45_pp_2021_01_07_063246_59663239.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:32:47', '2021-01-07 00:32:47'),
(353, 46, '46_pp_2021_01_07_063318_89446290.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:33:18', '2021-01-07 00:33:18'),
(354, 47, '47_pp_2021_01_07_063350_24859495.png', 'image/png', 'png', 'Marriage Solution BD', 326668, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:33:50', '2021-01-07 00:33:50'),
(355, 48, '48_pp_2021_01_07_063413_75927642.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:34:14', '2021-01-07 00:34:14'),
(356, 49, '49_pp_2021_01_07_063438_12487969.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:34:39', '2021-01-07 00:34:40'),
(357, 50, '50_pp_2021_01_07_063635_69271220.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:36:35', '2021-01-07 00:36:35'),
(358, 51, '51_pp_2021_01_07_063701_81875560.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:37:02', '2021-01-07 00:37:02'),
(359, 52, '52_pp_2021_01_07_064116_98244388.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:41:16', '2021-01-07 00:41:16'),
(360, 53, '53_pp_2021_01_07_065224_18020229.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 33221, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:52:24', '2021-01-07 00:52:24'),
(361, 54, '54_pp_2021_01_07_065256_21522113.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:52:56', '2021-01-07 00:52:56'),
(362, 55, '55_pp_2021_01_07_065314_27932174.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:53:14', '2021-01-07 00:53:14'),
(363, 56, '56_pp_2021_01_07_065805_70336872.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:58:05', '2021-01-07 00:58:05'),
(364, 57, '57_pp_2021_01_07_065819_59639934.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:58:20', '2021-01-07 00:58:20'),
(365, 58, '58_pp_2021_01_07_065841_53366517.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 38524, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:58:41', '2021-01-07 00:58:42'),
(366, 59, '59_pp_2021_01_07_065941_19801940.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 00:59:41', '2021-01-07 00:59:41'),
(369, 60, '60_pp_2021_01_07_070010_77370447.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:00:10', '2021-01-07 01:00:10'),
(370, 61, '61_pp_2021_01_07_070036_11818175.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:00:37', '2021-01-07 01:00:37'),
(371, 62, '62_pp_2021_01_07_070053_19892773.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:00:54', '2021-01-07 01:00:54'),
(372, 63, '63_pp_2021_01_07_070111_99172767.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30831, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:01:11', '2021-01-07 01:01:12'),
(373, 64, '64_pp_2021_01_07_070142_84672789.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:01:42', '2021-01-07 01:01:42'),
(374, 65, '65_pp_2021_01_07_070214_24273803.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:02:14', '2021-01-07 01:02:14'),
(375, 66, '66_pp_2021_01_07_070238_18406530.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:02:38', '2021-01-07 01:02:38'),
(376, 67, '67_pp_2021_01_07_070424_44355892.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:04:24', '2021-01-07 01:04:24'),
(377, 68, '68_pp_2021_01_07_070452_93017890.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:04:52', '2021-01-07 01:04:53'),
(378, 69, '69_pp_2021_01_07_070549_19700374.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 14245, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:05:50', '2021-01-07 01:05:50'),
(379, 70, '70_pp_2021_01_07_070632_37788066.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 33221, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:06:32', '2021-01-07 01:06:33'),
(380, 71, '71_pp_2021_01_07_070759_60279298.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:07:59', '2021-01-07 01:07:59'),
(381, 72, '72_pp_2021_01_07_070943_98159244.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:09:43', '2021-01-07 01:09:43'),
(382, 73, '73_pp_2021_01_07_071017_61731864.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:10:17', '2021-01-07 01:10:18'),
(383, 74, '74_pp_2021_01_07_071107_58288373.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:11:10', '2021-01-07 01:11:11'),
(384, 75, '75_pp_2021_01_07_071157_78652877.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 106252, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:11:57', '2021-01-07 01:11:57'),
(385, 76, '76_pp_2021_01_07_071213_25161582.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:12:13', '2021-01-07 01:12:13'),
(386, 77, '77_pp_2021_01_07_071304_20515150.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:13:04', '2021-01-07 01:13:04'),
(387, 78, '78_pp_2021_01_07_071341_36770349.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:13:41', '2021-01-07 01:13:41'),
(388, 79, '79_pp_2021_01_07_071412_48027451.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:14:13', '2021-01-07 01:14:13'),
(389, 80, '80_pp_2021_01_07_071444_34658351.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:14:44', '2021-01-07 01:14:44'),
(390, 81, '81_pp_2021_01_07_071527_97349504.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:15:28', '2021-01-07 01:15:28'),
(391, 82, '82_pp_2021_01_07_071547_76983855.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:15:47', '2021-01-07 01:15:47'),
(392, 83, '83_pp_2021_01_07_071614_97597719.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:16:14', '2021-01-07 01:16:14'),
(393, 84, '84_pp_2021_01_07_071633_79773270.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 75002, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:16:33', '2021-01-07 01:16:33'),
(394, 85, '85_pp_2021_01_07_071649_52601717.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30577, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:16:49', '2021-01-07 01:16:50'),
(395, 86, '86_pp_2021_01_07_071713_46520511.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:17:13', '2021-01-07 01:17:13'),
(396, 87, '87_pp_2021_01_07_071753_27015601.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 76258, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:17:53', '2021-01-07 01:17:53'),
(397, 88, '88_pp_2021_01_07_071808_24609996.png', 'image/png', 'png', 'Marriage Solution BD', 382738, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:18:08', '2021-01-07 01:18:08'),
(398, 89, '89_pp_2021_01_07_071821_97318656.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:18:21', '2021-01-07 01:18:21'),
(399, 90, '90_pp_2021_01_07_071842_46226735.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 106252, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:18:42', '2021-01-07 01:18:42'),
(400, 91, '91_pp_2021_01_07_071908_86117496.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 32321, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:19:08', '2021-01-07 01:19:08'),
(401, 92, '92_pp_2021_01_07_071940_95161996.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:19:42', '2021-01-07 01:19:42'),
(403, 93, '93_pp_2021_01_07_072053_44103665.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:20:53', '2021-01-07 01:20:53'),
(404, 94, '94_pp_2021_01_07_072117_22411465.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 50319, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:21:17', '2021-01-07 01:21:17'),
(405, 95, '95_pp_2021_01_07_072141_15190324.png', 'image/png', 'png', 'Marriage Solution BD', 326668, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:21:42', '2021-01-07 01:21:42'),
(406, 96, '96_pp_2021_01_07_072204_36373797.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:22:05', '2021-01-07 01:22:05'),
(407, 100, '100_pp_2021_01_07_072453_15254477.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:24:54', '2021-01-07 01:24:54'),
(408, 101, '101_pp_2021_01_07_072640_23086087.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:26:40', '2021-01-07 01:26:40'),
(409, 102, '102_pp_2021_01_07_072713_72096875.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:27:13', '2021-01-07 01:27:13'),
(410, 103, '103_pp_2021_01_07_072732_41652520.png', 'image/png', 'png', 'Marriage Solution BD', 326668, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:27:32', '2021-01-07 01:27:32'),
(411, 104, '104_pp_2021_01_07_072814_61903677.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:28:16', '2021-01-07 01:28:16'),
(412, 105, '105_pp_2021_01_07_073010_41727446.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 38524, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:30:10', '2021-01-07 01:30:10'),
(413, 106, '106_pp_2021_01_07_073049_60768192.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:30:50', '2021-01-07 01:30:50'),
(414, 107, '107_pp_2021_01_07_073123_86444525.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:31:23', '2021-01-07 01:31:23'),
(415, 108, '108_pp_2021_01_07_073140_37813438.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:31:42', '2021-01-07 01:31:42'),
(416, 109, '109_pp_2021_01_07_073218_25097874.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:32:18', '2021-01-07 01:32:18'),
(417, 110, '110_pp_2021_01_07_073308_91705210.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 33221, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:33:08', '2021-01-07 01:33:08'),
(418, 111, '111_pp_2021_01_07_073437_87432264.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 01:34:38', '2021-01-07 01:34:38'),
(419, 112, '112_pp_2021_01_07_080518_19049122.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30831, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:05:18', '2021-01-07 02:05:18'),
(420, 113, '113_pp_2021_01_07_080602_28423090.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:06:02', '2021-01-07 02:06:02'),
(421, 114, '114_pp_2021_01_07_080621_39366827.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:06:21', '2021-01-07 02:06:21'),
(422, 115, '115_pp_2021_01_07_080639_83032134.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 14245, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:06:39', '2021-01-07 02:06:39'),
(423, 116, '116_pp_2021_01_07_080659_24797671.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:06:59', '2021-01-07 02:06:59'),
(424, 117, '117_pp_2021_01_07_080712_43765351.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:07:12', '2021-01-07 02:07:12'),
(425, 118, '118_pp_2021_01_07_080724_68530726.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:07:26', '2021-01-07 02:07:26'),
(426, 119, '119_pp_2021_01_07_084613_83826878.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:46:13', '2021-01-07 02:46:13'),
(427, 120, '120_pp_2021_01_07_084637_22718944.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:46:37', '2021-01-07 02:46:37'),
(428, 121, '121_pp_2021_01_07_084915_94959824.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 50319, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:49:15', '2021-01-07 02:49:15'),
(429, 122, '122_pp_2021_01_07_085009_64580211.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:50:10', '2021-01-07 02:50:10'),
(430, 123, '123_pp_2021_01_07_085859_52253905.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 33221, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 02:58:59', '2021-01-07 02:58:59'),
(431, 124, '124_pp_2021_01_07_091003_86743446.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:10:04', '2021-01-07 03:10:05'),
(432, 125, '125_pp_2021_01_07_091205_85534978.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:12:05', '2021-01-07 03:12:06'),
(433, 126, '126_pp_2021_01_07_091530_84598995.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:15:31', '2021-01-07 03:15:31'),
(434, 127, '127_pp_2021_01_07_091620_84459491.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:16:21', '2021-01-07 03:16:21'),
(435, 128, '128_pp_2021_01_07_091641_90787451.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:16:41', '2021-01-07 03:16:41'),
(436, 129, '129_pp_2021_01_07_091715_46950959.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:17:15', '2021-01-07 03:17:15'),
(437, 130, '130_pp_2021_01_07_091741_92163159.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:17:41', '2021-01-07 03:17:41'),
(438, 131, '131_pp_2021_01_07_091758_89211891.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:17:58', '2021-01-07 03:17:59'),
(439, 132, '132_pp_2021_01_07_091829_77606157.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:18:32', '2021-01-07 03:18:33'),
(441, 133, '133_pp_2021_01_07_091923_41036854.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:19:23', '2021-01-07 03:19:23'),
(442, 134, '134_pp_2021_01_07_091952_45760605.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 33221, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:19:53', '2021-01-07 03:19:53'),
(443, 135, '135_pp_2021_01_07_092644_96159675.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 14245, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:26:45', '2021-01-07 03:26:45'),
(444, 136, '136_pp_2021_01_07_092814_50614989.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 106252, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:28:14', '2021-01-07 03:28:14'),
(445, 137, '137_pp_2021_01_07_092832_21343914.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:28:33', '2021-01-07 03:28:33'),
(446, 138, '138_pp_2021_01_07_092901_72667015.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:29:02', '2021-01-07 03:29:02'),
(447, 139, '139_pp_2021_01_07_092930_12456209.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:29:31', '2021-01-07 03:29:31'),
(448, 140, '140_pp_2021_01_07_092955_35354020.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:29:55', '2021-01-07 03:29:55'),
(449, 141, '141_pp_2021_01_07_093017_96671509.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 75002, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:30:17', '2021-01-07 03:30:18'),
(450, 142, '142_pp_2021_01_07_093036_18353082.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:30:36', '2021-01-07 03:30:37'),
(451, 143, '143_pp_2021_01_07_093154_24130834.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:31:54', '2021-01-07 03:31:54'),
(452, 144, '144_pp_2021_01_07_093231_24891535.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:32:31', '2021-01-07 03:32:31'),
(453, 145, '145_pp_2021_01_07_093310_43710587.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:33:10', '2021-01-07 03:33:10'),
(454, 146, '146_pp_2021_01_07_093329_58737353.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:33:29', '2021-01-07 03:33:29'),
(455, 147, '147_pp_2021_01_07_093346_63909071.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:33:47', '2021-01-07 03:33:48'),
(456, 148, '148_pp_2021_01_07_093405_20239682.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:34:07', '2021-01-07 03:34:07'),
(457, 149, '149_pp_2021_01_07_093430_81496611.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:34:30', '2021-01-07 03:34:30'),
(458, 150, '150_pp_2021_01_07_093448_64883796.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:34:48', '2021-01-07 03:34:49'),
(459, 151, '151_pp_2021_01_07_093506_96979294.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:35:06', '2021-01-07 03:35:06'),
(460, 152, '152_pp_2021_01_07_093622_81178564.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30831, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:36:22', '2021-01-07 03:36:23'),
(461, 153, '153_pp_2021_01_07_093655_13829988.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:36:56', '2021-01-07 03:36:58'),
(462, 154, '154_pp_2021_01_07_093716_36497983.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:37:18', '2021-01-07 03:37:18'),
(463, 155, '155_pp_2021_01_07_093741_65025128.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:37:42', '2021-01-07 03:37:42'),
(464, 156, '156_pp_2021_01_07_093806_70638995.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:38:06', '2021-01-07 03:38:06'),
(465, 157, '157_pp_2021_01_07_093835_45829578.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:38:36', '2021-01-07 03:38:36'),
(466, 158, '158_pp_2021_01_07_093858_83487390.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30577, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:38:58', '2021-01-07 03:38:58'),
(467, 159, '159_pp_2021_01_07_094344_96477839.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:43:45', '2021-01-07 03:43:47'),
(468, 160, '160_pp_2021_01_07_094450_99580112.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 38524, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:44:50', '2021-01-07 03:44:51'),
(469, 161, '161_pp_2021_01_07_094520_48595161.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:45:21', '2021-01-07 03:45:22'),
(470, 162, '162_pp_2021_01_07_094549_75843462.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:45:50', '2021-01-07 03:45:50'),
(471, 163, '163_pp_2021_01_07_094608_50131513.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:46:08', '2021-01-07 03:46:08'),
(472, 164, '164_pp_2021_01_07_094710_71653363.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:47:11', '2021-01-07 03:47:11'),
(473, 165, '165_pp_2021_01_07_094735_41757746.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:47:35', '2021-01-07 03:47:36'),
(474, 166, '166_pp_2021_01_07_094847_92676331.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:48:49', '2021-01-07 03:48:49'),
(475, 167, '167_pp_2021_01_07_094926_97382728.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:49:27', '2021-01-07 03:49:27'),
(476, 168, '168_pp_2021_01_07_094954_95981982.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:49:56', '2021-01-07 03:49:57'),
(477, 169, '169_pp_2021_01_07_095029_90768597.png', 'image/png', 'png', 'Marriage Solution BD', 382738, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:50:30', '2021-01-07 03:50:30'),
(478, 170, '170_pp_2021_01_07_095046_86359266.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 32321, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:50:47', '2021-01-07 03:50:47'),
(479, 171, '171_pp_2021_01_07_095139_27781237.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:51:39', '2021-01-07 03:51:40'),
(480, 172, '172_pp_2021_01_07_095200_46309695.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:52:01', '2021-01-07 03:52:01'),
(481, 173, '173_pp_2021_01_07_095218_94356185.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:52:19', '2021-01-07 03:52:19'),
(482, 174, '174_pp_2021_01_07_095230_65506585.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:52:30', '2021-01-07 03:52:31'),
(483, 175, '175_pp_2021_01_07_095245_13177897.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 50319, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:52:45', '2021-01-07 03:52:45'),
(484, 176, '176_pp_2021_01_07_095305_12043151.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30577, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:53:06', '2021-01-07 03:53:07'),
(485, 177, '177_pp_2021_01_07_095401_25662374.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 76258, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:54:01', '2021-01-07 03:54:02'),
(486, 178, '178_pp_2021_01_07_095417_16797904.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:54:17', '2021-01-07 03:54:18'),
(487, 179, '179_pp_2021_01_07_095432_54529153.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 38524, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:54:33', '2021-01-07 03:54:33'),
(488, 180, '180_pp_2021_01_07_095449_72866188.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:54:49', '2021-01-07 03:54:50'),
(489, 181, '181_pp_2021_01_07_095603_86811350.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30831, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:56:05', '2021-01-07 03:56:06'),
(490, 182, '182_pp_2021_01_07_095630_44391356.png', 'image/png', 'png', 'Marriage Solution BD', 326668, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:56:31', '2021-01-07 03:56:31'),
(491, 183, '183_pp_2021_01_07_095712_80787267.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:57:13', '2021-01-07 03:57:14'),
(492, 184, '184_pp_2021_01_07_095732_36900198.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:57:32', '2021-01-07 03:57:32'),
(494, 185, '185_pp_2021_01_07_095805_42403073.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:58:05', '2021-01-07 03:58:05'),
(495, 186, '186_pp_2021_01_07_095840_50688909.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 75002, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:58:40', '2021-01-07 03:58:40'),
(496, 187, '187_pp_2021_01_07_095901_55612614.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:59:04', '2021-01-07 03:59:05'),
(497, 188, '188_pp_2021_01_07_095922_43038782.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:59:22', '2021-01-07 03:59:22'),
(498, 189, '189_pp_2021_01_07_095943_38827258.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 14245, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 03:59:46', '2021-01-07 03:59:47'),
(499, 190, '190_pp_2021_01_07_100026_84293745.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:00:28', '2021-01-07 04:00:28'),
(500, 191, '191_pp_2021_01_07_100141_46228726.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:01:41', '2021-01-07 04:01:42'),
(501, 192, '192_pp_2021_01_07_100155_51097856.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:01:56', '2021-01-07 04:01:56'),
(502, 193, '193_pp_2021_01_07_100215_77990413.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:02:15', '2021-01-07 04:02:16'),
(503, 194, '194_pp_2021_01_07_100253_76275797.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:02:54', '2021-01-07 04:02:54'),
(504, 195, '195_pp_2021_01_07_100311_90535086.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:03:12', '2021-01-07 04:03:12'),
(505, 196, '196_pp_2021_01_07_100338_78110804.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30831, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:03:38', '2021-01-07 04:03:39'),
(506, 197, '197_pp_2021_01_07_100401_70164893.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 32321, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:04:01', '2021-01-07 04:04:01'),
(507, 198, '198_pp_2021_01_07_100414_86277270.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 75002, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:04:15', '2021-01-07 04:04:15'),
(508, 199, '199_pp_2021_01_07_100423_53682296.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 76258, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:04:23', '2021-01-07 04:04:23'),
(509, 200, '200_pp_2021_01_07_100443_14054389.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:04:43', '2021-01-07 04:04:43'),
(510, 201, '201_pp_2021_01_07_100456_81448667.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:04:56', '2021-01-07 04:04:56'),
(511, 202, '202_pp_2021_01_07_100507_77208386.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:05:07', '2021-01-07 04:05:08'),
(512, 203, '203_pp_2021_01_07_100526_83930203.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:05:26', '2021-01-07 04:05:27'),
(513, 204, '204_pp_2021_01_07_100545_97223538.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:05:46', '2021-01-07 04:05:46'),
(514, 205, '205_pp_2021_01_07_100556_60138213.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 54446, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:05:56', '2021-01-07 04:05:57'),
(515, 206, '206_pp_2021_01_07_100630_64167432.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:06:31', '2021-01-07 04:06:31'),
(516, 207, '207_pp_2021_01_07_100654_74258370.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:06:54', '2021-01-07 04:06:54'),
(517, 208, '208_pp_2021_01_07_100708_34366063.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:07:09', '2021-01-07 04:07:09'),
(518, 209, '209_pp_2021_01_07_100720_48777592.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:07:20', '2021-01-07 04:07:20'),
(519, 210, '210_pp_2021_01_07_100737_28500642.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:07:38', '2021-01-07 04:07:38'),
(520, 211, '211_pp_2021_01_07_100814_40900355.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 33221, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:08:14', '2021-01-07 04:08:14'),
(521, 212, '212_pp_2021_01_07_100826_88659615.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:08:26', '2021-01-07 04:08:27'),
(522, 213, '213_pp_2021_01_07_100845_39139316.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 32321, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:08:46', '2021-01-07 04:08:46'),
(523, 214, '214_pp_2021_01_07_100859_89288457.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:08:59', '2021-01-07 04:09:00'),
(524, 215, '215_pp_2021_01_07_100915_98676183.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 50319, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:09:15', '2021-01-07 04:09:16'),
(525, 216, '216_pp_2021_01_07_100938_14600319.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:09:39', '2021-01-07 04:09:39'),
(526, 217, '217_pp_2021_01_07_100950_36518121.png', 'image/png', 'png', 'Marriage Solution BD', 326668, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:09:51', '2021-01-07 04:09:52'),
(527, 218, '218_pp_2021_01_07_101019_24236013.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 19982, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:10:19', '2021-01-07 04:10:20'),
(528, 219, '219_pp_2021_01_07_101034_98791922.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:10:35', '2021-01-07 04:10:35'),
(529, 220, '220_pp_2021_01_07_101115_90422784.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:11:15', '2021-01-07 04:11:15'),
(530, 221, '221_pp_2021_01_07_101132_90159123.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 38524, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:11:33', '2021-01-07 04:11:33'),
(531, 222, '222_pp_2021_01_07_101210_57393981.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:12:11', '2021-01-07 04:12:11'),
(532, 223, '223_pp_2021_01_07_101224_77888657.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:12:25', '2021-01-07 04:12:25'),
(533, 224, '224_pp_2021_01_07_101241_45283621.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:12:41', '2021-01-07 04:12:41'),
(534, 225, '225_pp_2021_01_07_101314_76257640.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:13:14', '2021-01-07 04:13:14'),
(535, 226, '226_pp_2021_01_07_101340_13488729.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:13:40', '2021-01-07 04:13:40'),
(536, 227, '227_pp_2021_01_07_101353_14982472.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 33221, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:13:54', '2021-01-07 04:13:54'),
(537, 228, '228_pp_2021_01_07_101416_33211063.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 33221, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:14:16', '2021-01-07 04:14:16'),
(538, 229, '229_pp_2021_01_07_101434_23123929.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:14:35', '2021-01-07 04:14:35'),
(539, 230, '230_pp_2021_01_07_101450_58078703.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 106252, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:14:50', '2021-01-07 04:14:50'),
(540, 231, '231_pp_2021_01_07_101512_72380863.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 30831, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:15:13', '2021-01-07 04:15:13'),
(541, 232, '232_pp_2021_01_07_101533_50322987.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:15:34', '2021-01-07 04:15:34'),
(542, 233, '233_pp_2021_01_07_101607_62928587.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 14245, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:16:08', '2021-01-07 04:16:08'),
(543, 234, '234_pp_2021_01_07_101627_26376533.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:16:28', '2021-01-07 04:16:28'),
(544, 235, '235_pp_2021_01_07_101641_44305404.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 68370, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:16:41', '2021-01-07 04:16:41'),
(545, 236, '236_pp_2021_01_07_101727_22784272.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:17:27', '2021-01-07 04:17:29'),
(546, 237, '237_pp_2021_01_07_101859_63579568.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 47033, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:18:59', '2021-01-07 04:18:59'),
(547, 238, '238_pp_2021_01_07_101918_58649615.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43966, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:19:18', '2021-01-07 04:19:18'),
(548, 239, '239_pp_2021_01_07_101936_35017502.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:19:36', '2021-01-07 04:19:36'),
(549, 240, '240_pp_2021_01_07_102011_93669726.png', 'image/png', 'png', 'Marriage Solution BD', 382738, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:20:13', '2021-01-07 04:20:13'),
(550, 241, '241_pp_2021_01_07_102029_36047236.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 50319, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:20:29', '2021-01-07 04:20:30'),
(551, 242, '242_pp_2021_01_07_102050_23985264.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 76258, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:20:50', '2021-01-07 04:20:51'),
(552, 243, '243_pp_2021_01_07_102118_71857466.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 32321, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:21:18', '2021-01-07 04:21:18'),
(555, 244, '244_pp_2021_01_07_102136_13479261.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:21:36', '2021-01-07 04:21:37'),
(556, 244, '244_pp_2021_01_07_102136_90611797.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:21:36', '2021-01-07 04:21:37'),
(557, 244, '244_pp_2021_01_07_102136_81831289.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40323, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:21:37', '2021-01-07 04:21:37'),
(558, 245, '245_pp_2021_01_07_102159_79357683.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:21:59', '2021-01-07 04:21:59'),
(559, 246, '246_pp_2021_01_07_102229_42796521.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 83447, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:22:29', '2021-01-07 04:22:29'),
(560, 270, '270_pp_2021_01_07_102400_10781009.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:24:00', '2021-01-07 04:24:00'),
(562, 269, '269_pp_2021_01_07_102508_77829399.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 45588, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:25:08', '2021-01-07 04:25:10'),
(563, 267, '267_pp_2021_01_07_102515_68022938.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 53828, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:25:15', '2021-01-07 04:25:15');
INSERT INTO `user_pictures` (`id`, `user_id`, `image_name`, `image_mime`, `image_ext`, `image_alt`, `image_size`, `image_width`, `image_height`, `autoload`, `checked`, `can_edit`, `image_type`, `editedby_id`, `created_at`, `updated_at`) VALUES
(564, 268, '268_pp_2021_01_07_102555_45648106.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 45211, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:25:55', '2021-01-07 04:25:56'),
(565, 99, '99_pp_2021_01_07_102730_32542179.png', 'image/png', 'png', 'Marriage Solution BD', 534995, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:27:31', '2021-01-07 04:27:31'),
(566, 98, '98_pp_2021_01_07_102744_61746398.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74408, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:27:44', '2021-01-07 04:27:45'),
(567, 97, '97_pp_2021_01_07_102804_89249051.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 21121, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:28:05', '2021-01-07 04:28:05'),
(568, 20, '20_pp_2021_01_07_102916_68735295.png', 'image/png', 'png', 'Marriage Solution BD', 316847, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-07 04:29:16', '2021-01-07 04:29:16'),
(569, 252, '252_pp_2021_01_10_045249_63635596.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 66322, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-09 22:52:49', '2021-01-09 22:52:49'),
(570, 262, '262_pp_2021_01_10_045610_98993891.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 137496, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-09 22:56:10', '2021-01-09 22:56:11'),
(571, 247, '247_pp_2021_01_10_045656_87977329.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 73817, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-09 22:56:56', '2021-01-09 22:56:56'),
(572, 271, '271_pp_2021_01_11_080707_50036779.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 877597, 3927, 3452, 1, 0, 1, 'profilepic', NULL, '2021-01-11 02:07:08', '2021-01-11 02:07:08'),
(573, 275, '275_pp_2021_01_13_055540_31130676.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 303493, 1080, 758, 1, 0, 1, 'profilepic', NULL, '2021-01-12 23:55:40', '2021-01-12 23:55:40'),
(575, 277, '277_pp_2021_01_16_033021_86352652.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 1613795, 1944, 2592, 1, 0, 1, 'profilepic', NULL, '2021-01-15 21:30:22', '2021-01-15 21:30:22'),
(576, 276, '276_pp_2021_01_17_092159_45425896.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 369860, 200, 200, 1, 1, 1, 'profilepic', NULL, '2021-01-17 03:22:00', '2021-01-17 03:22:00'),
(577, 278, '278_pp_2021_01_27_071059_37067358.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 19840, 542, 540, 1, 0, 1, 'profilepic', NULL, '2021-01-27 01:10:59', '2021-01-27 01:10:59'),
(578, 279, '279_pp_2021_01_28_112455_51603123.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 43045, 720, 960, 1, 0, 1, 'profilepic', NULL, '2021-01-28 05:24:56', '2021-01-28 05:24:56'),
(579, 280, '280_pp_2021_01_29_034031_26505381.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 175505, 472, 591, 1, 0, 1, 'profilepic', NULL, '2021-01-28 21:40:31', '2021-01-28 21:40:31'),
(580, 281, '281_pp_2021_01_29_063751_85158606.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 367166, 2448, 3264, 0, 0, 1, 'profilepic', 281, '2021-01-29 12:37:52', '2021-01-29 13:23:55'),
(581, 282, '282_pp_2021_01_29_064447_67313956.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 126674, 959, 1280, 1, 0, 1, 'profilepic', NULL, '2021-01-29 12:44:47', '2021-01-29 12:44:47'),
(582, 281, '281_pp_2021_01_29_072355_59657563.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 36786, 574, 765, 1, 0, 1, 'profilepic', NULL, '2021-01-29 13:23:55', '2021-01-29 13:23:55'),
(583, 283, '283_pp_2021_01_30_092346_20133674.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 100211, 1072, 1440, 1, 0, 1, 'profilepic', NULL, '2021-01-30 15:23:46', '2021-01-30 15:23:46'),
(584, 295, '295_pp_2021_02_09_103112_35996376.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 274970, 2006, 2015, 0, 0, 1, 'profilepic', 295, '2021-02-09 04:31:12', '2021-02-09 04:42:03'),
(585, 295, '295_pp_2021_02_09_104202_16277370.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 274970, 2006, 2015, 1, 0, 1, 'profilepic', NULL, '2021-02-09 04:42:02', '2021-02-09 04:42:02'),
(586, 302, '302_pp_2021_02_12_071350_82892029.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 288190, 1365, 2048, 0, 0, 1, 'profilepic', 302, '2021-02-12 13:13:50', '2021-02-12 13:15:09'),
(587, 302, '302_pp_2021_02_12_071509_56121307.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 288190, 1365, 2048, 0, 0, 1, 'profilepic', 302, '2021-02-12 13:15:09', '2021-02-12 13:19:08'),
(588, 302, '302_pp_2021_02_12_071907_50526268.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 323587, 1365, 1365, 0, 0, 1, 'profilepic', 302, '2021-02-12 13:19:07', '2021-02-12 13:19:27'),
(589, 302, '302_pp_2021_02_12_071927_75361437.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 323587, 1365, 1365, 1, 0, 1, 'profilepic', NULL, '2021-02-12 13:19:27', '2021-02-12 13:19:27'),
(590, 312, '312_pp_2021_02_26_034513_51083605.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 2593258, 1940, 2577, 0, 0, 1, 'profilepic', 312, '2021-02-25 21:45:14', '2021-02-25 22:09:49'),
(591, 312, '312_pp_2021_02_26_040949_70947889.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 2593258, 1940, 2577, 0, 0, 1, 'profilepic', 312, '2021-02-25 22:09:49', '2021-02-26 04:56:28'),
(592, 312, '312_pp_2021_02_26_105623_67919665.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 93324, 480, 686, 0, 0, 1, 'profilepic', 312, '2021-02-26 04:56:23', '2021-02-28 19:32:16'),
(593, 299, '299_pp_2021_02_27_045045_81771241.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 40507, 566, 566, 1, 0, 1, 'profilepic', NULL, '2021-02-26 22:50:45', '2021-02-26 22:50:46'),
(594, 314, '314_pp_2021_02_27_094729_84365970.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 64224, 620, 450, 1, 0, 1, 'profilepic', NULL, '2021-02-27 15:47:29', '2021-02-27 15:47:29'),
(595, 315, '315_pp_2021_02_28_064457_73219146.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 74397, 467, 588, 1, 0, 1, 'profilepic', NULL, '2021-02-28 00:44:57', '2021-02-28 00:44:57'),
(596, 312, '312_pp_2021_03_01_013216_89944673.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 1382803, 1008, 2160, 1, 0, 1, 'profilepic', NULL, '2021-02-28 19:32:16', '2021-02-28 19:32:16'),
(597, 316, '316_pp_2021_03_02_055652_15570577.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 79619, 960, 960, 1, 0, 1, 'profilepic', NULL, '2021-03-02 11:56:52', '2021-03-02 11:56:52'),
(598, 318, '318_pp_2021_03_06_121040_48473925.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 32539, 540, 720, 0, 0, 1, 'profilepic', 318, '2021-03-06 06:10:40', '2021-03-06 07:34:57'),
(599, 318, '318_pp_2021_03_06_013457_60943789.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 32539, 540, 720, 1, 0, 1, 'profilepic', NULL, '2021-03-06 07:34:57', '2021-03-06 07:34:57'),
(600, 322, '322_pp_2021_03_10_100549_79737312.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 8715, 236, 295, 0, 0, 1, 'profilepic', 322, '2021-03-10 04:05:49', '2021-03-10 04:06:46'),
(601, 322, '322_pp_2021_03_10_100645_47066385.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 8715, 236, 295, 0, 0, 1, 'profilepic', 322, '2021-03-10 04:06:45', '2021-03-10 04:07:46'),
(602, 322, '322_pp_2021_03_10_100745_29508922.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 44872, 945, 945, 0, 0, 1, 'profilepic', 322, '2021-03-10 04:07:45', '2021-03-10 05:48:29'),
(603, 322, '322_pp_2021_03_10_114829_26426792.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 44872, 945, 945, 1, 0, 1, 'profilepic', NULL, '2021-03-10 05:48:29', '2021-03-10 05:48:29'),
(604, 324, '324_pp_2021_03_16_033555_26734734.jpeg', 'image/jpeg', 'jpeg', 'Marriage Solution BD', 2335090, 3304, 3284, 1, 0, 1, 'profilepic', NULL, '2021-03-16 09:35:56', '2021-03-16 09:35:56'),
(605, 326, '326_pp_2021_03_18_063557_43128372.jpg', 'image/jpeg', 'jpg', 'Marriage Solution BD', 11712, 300, 300, 1, 0, 1, 'profilepic', NULL, '2021-03-18 00:35:57', '2021-03-18 00:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_proposals`
--

CREATE TABLE `user_proposals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_second_id` int(10) UNSIGNED NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT 0,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_proposals`
--

INSERT INTO `user_proposals` (`id`, `user_id`, `user_second_id`, `accepted`, `message`, `checked`, `editedby_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 24, 21, 0, 'Dear Nowshin Nawar, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', 16, '2019-01-14 01:38:36', '2021-01-24 04:18:18', NULL),
(2, 34, 13, 0, 'Dear Tania, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', 16, '2019-02-02 18:44:53', '2019-02-05 17:14:02', NULL),
(3, 56, 13, 0, 'Dear Tania, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-03-23 05:29:22', '2019-03-23 05:29:22', NULL),
(4, 64, 26, 0, 'Dear Rusafa Rahman, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-04-07 15:00:12', '2019-04-07 15:00:12', NULL),
(5, 65, 13, 0, 'Dear Tania, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-04-08 18:17:43', '2019-04-08 18:17:43', NULL),
(6, 65, 21, 0, 'Dear Nowshin Nawar, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-04-08 18:17:59', '2019-04-08 18:17:59', NULL),
(7, 65, 43, 0, 'Dear Puspita, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-04-08 18:18:09', '2019-04-08 18:18:09', NULL),
(8, 74, 69, 0, 'Dear Sahera sultana, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...my contact number ', '0', NULL, '2019-04-30 06:45:12', '2019-04-30 06:45:12', NULL),
(9, 74, 58, 0, 'Dear NBBMN, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...\r\nmy contact number is ', '0', NULL, '2019-04-30 06:46:33', '2019-04-30 06:46:33', NULL),
(10, 74, 47, 0, 'Dear Naushad abedin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way... My contact number ', '0', NULL, '2019-04-30 06:50:27', '2019-04-30 06:50:27', NULL),
(11, 82, 47, 0, 'Dear Naushad abedin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-05-12 17:34:36', '2019-05-12 17:34:36', NULL),
(12, 61, 58, 0, 'Dear NBBMN, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-05-17 17:24:09', '2019-05-17 17:24:09', NULL),
(13, 92, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-06-16 22:08:22', '2019-06-16 22:08:22', NULL),
(14, 92, 47, 0, 'Dear Naushad abedin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-06-16 22:08:45', '2019-06-16 22:08:45', NULL),
(15, 92, 26, 0, 'Dear Rusafa Rahman, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-06-16 22:09:30', '2019-06-16 22:09:30', NULL),
(16, 99, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-07-07 20:47:32', '2019-07-07 20:47:32', NULL),
(17, 57, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-07-09 07:54:43', '2019-07-09 07:54:43', NULL),
(18, 93, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-07-13 18:35:56', '2019-07-13 18:35:56', NULL),
(19, 126, 121, 0, 'Dear Mukta Akter, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-09-01 07:10:54', '2019-09-01 07:10:54', NULL),
(20, 127, 90, 0, 'Dear Moumita Perveen, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-09-10 04:52:29', '2019-09-10 04:52:29', NULL),
(21, 148, 13, 0, 'Dear Tania, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-11-09 17:55:02', '2019-11-09 17:55:02', NULL),
(22, 148, 105, 0, 'Dear Farjana akter bithi, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-11-09 17:57:51', '2019-11-09 17:57:51', NULL),
(23, 148, 21, 0, 'Dear Nowshin Nawar, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-11-09 18:00:28', '2019-11-09 18:00:28', NULL),
(24, 159, 155, 0, 'Dear Farjana Faruk, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-12-22 04:35:57', '2019-12-22 04:35:57', NULL),
(25, 159, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-12-22 04:38:42', '2019-12-22 04:38:42', NULL),
(26, 159, 47, 0, 'Dear Naushad abedin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2019-12-22 04:39:30', '2019-12-22 04:39:30', NULL),
(27, 164, 160, 0, 'Dear Sabiha Mahbub, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-01-10 06:20:12', '2020-01-10 06:20:12', NULL),
(28, 164, 152, 0, 'Dear Afroza Akter, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-01-10 06:21:51', '2020-01-10 06:21:51', NULL),
(29, 164, 141, 0, 'Dear Karishma kamal, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-01-10 06:22:04', '2020-01-10 06:22:04', NULL),
(30, 172, 121, 0, 'Dear Mukta Akter, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-01-19 17:20:14', '2020-01-19 17:20:14', NULL),
(31, 172, 115, 0, 'Dear Mahbuba Julaikha, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-01-19 17:20:32', '2020-01-19 17:20:32', NULL),
(32, 172, 105, 0, 'Dear Farjana akter bithi, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-01-19 17:21:30', '2020-01-19 17:21:30', NULL),
(33, 180, 135, 0, 'Dear ADITY RAHMAN, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-02-01 03:01:28', '2020-02-01 03:01:28', NULL),
(34, 180, 121, 0, 'Dear Mukta Akter, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-02-01 03:01:59', '2020-02-01 03:01:59', NULL),
(35, 180, 47, 0, 'Dear Naushad abedin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-02-01 03:06:23', '2020-02-01 03:06:23', NULL),
(36, 181, 160, 0, 'Dear Sabiha Mahbub, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-02-01 07:48:19', '2020-02-01 07:48:19', NULL),
(37, 181, 177, 0, 'Dear Habiba jarin sinthia, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-02-01 07:48:40', '2020-02-01 07:48:40', NULL),
(38, 181, 176, 0, 'Dear Sadia Hossain, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-02-01 07:48:50', '2020-02-01 07:48:50', NULL),
(39, 185, 47, 0, 'Dear Naushad abedin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-02-11 05:44:41', '2020-02-21 04:34:10', '2020-02-21 04:34:10'),
(40, 189, 170, 0, '???????????? ?????????????????? ????????? ???????????? ????????????????????????????????? ?????? ????????????????????? ???????????? ???????????? ?????????????????', '0', NULL, '2020-02-17 18:50:32', '2020-02-17 18:50:32', NULL),
(41, 189, 119, 0, 'Dear Mahtab Sagar, I would like to send you my proposal. Please, helps us to start our conversation in a better way..', '0', NULL, '2020-02-17 18:58:22', '2020-02-17 18:58:22', NULL),
(42, 189, 72, 0, 'Dear MD.NAZRUL ISLAM, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-02-17 18:59:24', '2020-02-17 18:59:24', NULL),
(43, 216, 215, 0, 'Dear Nadira, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-04-04 06:06:33', '2020-04-04 06:06:33', NULL),
(44, 216, 202, 0, 'Dear Toyaba Kabir, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-04-04 06:08:47', '2020-04-04 06:08:47', NULL),
(45, 216, 199, 0, 'Dear Rownuk jahan rima, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-04-04 06:10:07', '2020-04-04 06:10:07', NULL),
(46, 216, 121, 0, 'Dear Mukta Akter, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-04-05 07:35:59', '2020-04-05 07:35:59', NULL),
(47, 216, 135, 0, 'Dear ADITY RAHMAN, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-04-05 07:36:19', '2020-04-05 07:36:19', NULL),
(48, 216, 136, 0, 'Dear munni, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-04-05 07:37:26', '2020-04-05 07:37:26', NULL),
(49, 227, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-06-10 06:45:31', '2020-06-10 06:45:31', NULL),
(50, 230, 227, 0, 'Dear Mallik Samir Tawfik, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-06-23 22:04:03', '2020-06-23 22:04:03', NULL),
(51, 234, 47, 0, 'Dear Naushad abedin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-07-01 03:33:12', '2020-07-01 03:33:12', NULL),
(52, 245, 221, 0, 'Dear Umme Hani, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-08-12 17:28:54', '2020-08-12 17:28:54', NULL),
(53, 245, 177, 0, 'Dear Habiba jarin sinthia, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-08-12 17:31:55', '2020-08-12 17:31:55', NULL),
(54, 245, 115, 0, 'Dear Mahbuba Julaikha, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-08-12 17:33:55', '2020-08-12 17:33:55', NULL),
(55, 245, 233, 0, 'Dear Wasifa Tahsin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-08-13 06:35:37', '2020-08-13 06:35:37', NULL),
(56, 247, 244, 0, 'Dear Mamun Kabir, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-04 19:47:06', '2020-12-04 19:47:06', NULL),
(57, 249, 233, 0, 'Dear Wasifa Tahsin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-06 20:12:36', '2020-12-06 20:12:36', NULL),
(58, 249, 230, 0, 'Dear Sarah Kuddus, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-06 20:12:57', '2020-12-06 20:12:57', NULL),
(59, 249, 217, 0, 'Dear Khadijatul Busra, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-06 20:13:22', '2020-12-06 20:13:22', NULL),
(60, 249, 199, 0, 'Dear Rownuk jahan rima, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-07 18:55:47', '2020-12-07 18:55:47', NULL),
(61, 249, 247, 0, 'Dear Mafruja Akter, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-07 18:56:05', '2020-12-07 18:56:05', NULL),
(62, 249, 242, 0, 'Dear priscilla, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-07 18:56:23', '2020-12-07 18:56:23', NULL),
(63, 264, 63, 0, 'Dear Toupa, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-30 05:56:57', '2020-12-30 05:56:57', NULL),
(64, 264, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2020-12-30 05:57:41', '2020-12-30 05:57:41', NULL),
(65, 1, 262, 0, 'Dear Nila Mony Shikder, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-01-09 23:51:51', '2021-01-09 23:51:51', NULL),
(66, 280, 84, 0, 'Dear Mousumi Akther, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-01-28 21:44:33', '2021-01-28 21:44:33', NULL),
(67, 280, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-01-28 21:45:12', '2021-01-28 21:45:12', NULL),
(68, 280, 169, 0, 'Dear momin miah, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-01-28 21:46:41', '2021-01-28 21:46:41', NULL),
(69, 283, 13, 0, 'Dear Tania, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-01-30 15:29:13', '2021-01-30 15:29:13', NULL),
(70, 283, 199, 0, 'Dear Rownuk jahan rima, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-01-30 15:32:40', '2021-01-30 15:32:40', NULL),
(71, 286, 276, 0, 'Dear Ishat Salsabil, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-02-03 23:55:44', '2021-02-03 23:55:44', NULL),
(72, 315, 243, 0, 'Dear Taslima Rashid, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-02-28 00:48:33', '2021-02-28 00:48:33', NULL),
(73, 312, 112, 0, 'Dear Md. Nadim Mahmud, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-02-28 19:52:41', '2021-02-28 19:52:41', NULL),
(74, 312, 105, 0, 'Dear Farjana akter bithi, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-02-28 19:53:41', '2021-02-28 19:53:41', NULL),
(75, 312, 221, 0, 'Dear Umme Hani, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-02-28 20:00:59', '2021-02-28 20:00:59', NULL),
(76, 316, 262, 0, 'Dear Nila Mony Shikder, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-03-02 12:00:04', '2021-03-02 12:00:04', NULL),
(77, 316, 275, 0, 'Dear Sumaiya Rahman, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-03-02 12:04:22', '2021-03-02 12:04:22', NULL),
(78, 316, 240, 0, 'Dear Alifa akter, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-03-02 12:05:12', '2021-03-02 12:05:12', NULL),
(79, 316, 233, 0, 'Dear Wasifa Tahsin, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-03-05 11:26:56', '2021-03-05 11:26:56', NULL),
(80, 316, 85, 0, 'Dear Israt Jahan, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-03-05 11:29:33', '2021-03-05 11:29:33', NULL),
(81, 322, 176, 0, 'Dear Sadia Hossain, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-03-10 04:55:41', '2021-03-10 04:55:41', NULL),
(82, 322, 63, 0, 'Dear Toupa, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-03-10 04:56:11', '2021-03-10 04:56:11', NULL),
(83, 322, 276, 0, 'Dear Ishat Salsabil, I would like to send you my proposal. Please, accept it as if it helps us to start our conversation in a better way...', '0', NULL, '2021-03-10 05:46:21', '2021-03-10 05:46:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_value` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_name`, `role_value`, `branch_id`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'Admin', 0, 1, 1, '2018-10-27 18:00:00', '2018-10-27 18:00:00'),
(2, 1, 'common', 'Admin', 0, 1, 1, '2018-10-27 18:00:00', '2018-10-27 18:00:00'),
(12, 251, 'common', 'Support Admin', 0, 1, NULL, '2020-12-07 12:52:43', '2020-12-07 12:52:43'),
(13, 16, 'admin', 'Admin', 0, 1, NULL, '2020-12-07 12:58:29', '2020-12-07 12:58:29'),
(14, 16, 'common', 'Admin', 0, 1, NULL, '2020-12-07 12:58:29', '2020-12-07 12:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_role_items`
--

CREATE TABLE `user_role_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role_items`
--

INSERT INTO `user_role_items` (`id`, `user_id`, `role_id`, `name`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(3, 251, 12, 'payments', 1, NULL, '2020-12-07 12:52:43', '2020-12-07 12:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_search_terms`
--

CREATE TABLE `user_search_terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `custom_search` tinyint(1) NOT NULL DEFAULT 1,
  `min_age` int(11) NOT NULL DEFAULT 18,
  `max_age` int(11) NOT NULL DEFAULT 60,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_of_residence_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_studied` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_u_have_children` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_build` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skin_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoke_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disabilities_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disabilities_status_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diat_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_tongue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interests` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favourite_music` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favourite_reads` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favourite_movies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favourite_cooking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dress_style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT 0,
  `can_edit` tinyint(1) NOT NULL DEFAULT 1,
  `addedby_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_search_terms`
--

INSERT INTO `user_search_terms` (`id`, `custom_search`, `min_age`, `max_age`, `country`, `country_other`, `country_of_residence`, `country_of_residence_other`, `user_status`, `education_level`, `subject_studied`, `job_title`, `profession`, `profession_other`, `citizenship`, `income`, `marital_status`, `do_u_have_children`, `body_build`, `skin_color`, `smoke_status`, `disabilities_status`, `disabilities_status_other`, `alcohol_status`, `min_height`, `max_height`, `diat_status`, `mother_tongue`, `district`, `thana`, `citizenship_other`, `city_of_residence`, `state_of_residence`, `religion`, `social_order`, `interests`, `favourite_music`, `favourite_reads`, `favourite_movies`, `favourite_cooking`, `dress_style`, `checked`, `can_edit`, `addedby_id`, `editedby_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 22, 45, 'Bangladesh', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', '', NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 13, NULL, 13, '2018-11-13 05:41:36', '2018-11-13 05:41:36'),
(2, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 16, '2018-12-07 00:21:32', '2018-12-07 00:21:32'),
(3, 1, 18, 60, 'Afghanistan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 1, '2018-12-07 00:26:22', '2021-01-09 06:51:05'),
(4, 1, 22, 34, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Widowed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 11 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 17, NULL, 17, '2018-12-10 02:02:11', '2018-12-10 02:02:11'),
(5, 1, 18, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 18, NULL, 18, '2018-12-16 12:32:39', '2018-12-16 12:32:39'),
(6, 1, 20, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 19, NULL, 19, '2018-12-19 18:26:57', '2018-12-19 18:26:57'),
(7, 1, 22, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 20, NULL, 20, '2018-12-21 19:00:02', '2018-12-21 19:00:02'),
(8, 1, 23, 33, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 21, NULL, 21, '2019-01-05 21:36:03', '2019-01-05 21:36:03'),
(9, 1, 20, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 22, NULL, 22, '2019-01-10 02:09:32', '2019-01-10 02:09:32'),
(10, 1, 18, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 23, NULL, 23, '2019-01-12 18:05:58', '2019-01-12 18:05:58'),
(11, 1, 20, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 24, NULL, 24, '2019-01-14 01:36:53', '2019-01-14 01:48:21'),
(12, 1, 24, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 25, NULL, 25, '2019-01-16 03:59:47', '2019-01-16 03:59:47'),
(13, 1, 30, 37, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Male Police officer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 9 Inch', '6 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 26, NULL, 26, '2019-01-20 01:54:03', '2019-01-20 01:54:03'),
(14, 1, 18, 31, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 27, NULL, 27, '2019-01-21 16:38:07', '2019-01-21 16:38:07'),
(15, 1, 18, 34, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '6 Feet 1 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 28, NULL, 28, '2019-01-23 06:56:55', '2019-01-23 06:56:55'),
(16, 1, 18, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 29, NULL, 29, '2019-01-24 19:40:24', '2019-01-24 19:40:24'),
(17, 1, 22, 36, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 30, NULL, 30, '2019-01-29 05:21:12', '2019-01-29 05:21:12'),
(18, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 12, '2019-01-30 20:25:54', '2019-01-30 20:25:54'),
(19, 1, 22, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 31, NULL, 31, '2019-02-02 04:32:37', '2019-02-02 04:32:37'),
(20, 1, 29, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 33, NULL, 33, '2019-02-02 07:54:09', '2019-02-02 07:54:09'),
(21, 1, 29, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 32, NULL, 32, '2019-02-02 07:54:09', '2019-02-02 07:54:09'),
(22, 1, 21, 21, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 34, NULL, 34, '2019-02-02 18:10:23', '2019-02-02 18:10:23'),
(23, 1, 18, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 35, NULL, 35, '2019-02-05 23:11:17', '2019-02-05 23:11:17'),
(24, 1, 18, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 36, NULL, 36, '2019-02-05 23:11:17', '2019-02-05 23:11:17'),
(25, 1, 18, 37, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 37, NULL, 37, '2019-02-07 03:43:03', '2019-04-14 03:52:44'),
(26, 1, 25, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 40, NULL, 40, '2019-02-11 20:56:25', '2019-02-11 20:56:25'),
(27, 1, 27, 36, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Widowed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 10 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 41, NULL, 41, '2019-02-15 19:37:38', '2019-02-15 19:37:38'),
(28, 1, 24, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 42, NULL, 42, '2019-02-16 18:52:02', '2019-02-16 18:52:02'),
(29, 1, 28, 34, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS (Police): Assistant Superintendent of Police', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Brahmin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 43, NULL, 43, '2019-02-17 19:12:32', '2019-02-17 19:12:32'),
(30, 1, 26, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 44, NULL, 44, '2019-02-18 02:33:59', '2019-02-18 02:33:59'),
(31, 1, 20, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 45, NULL, 45, '2019-02-18 16:40:43', '2019-02-18 16:40:43'),
(32, 1, 18, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Industrialists', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 11 Inch', '5 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 46, NULL, 46, '2019-02-22 05:19:21', '2019-02-22 05:19:21'),
(33, 1, 31, 36, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh Armed Forces', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 47, NULL, 47, '2019-02-22 19:45:49', '2019-02-22 19:45:49'),
(34, 1, 22, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 48, NULL, 48, '2019-02-23 17:31:58', '2019-02-23 17:31:58'),
(35, 1, 28, 41, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 8 Inch', '5 Feet 11 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 49, NULL, 49, '2019-02-25 18:29:42', '2019-02-25 18:29:42'),
(36, 1, 18, 21, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 10 Inch', '5 Feet 1 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 50, NULL, 50, '2019-02-27 21:43:54', '2019-02-27 21:43:54'),
(37, 1, 18, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 10 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 51, NULL, 51, '2019-03-09 02:13:22', '2019-03-09 02:13:22'),
(38, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 2, NULL, 2, '2019-03-17 10:25:31', '2019-03-17 10:25:31'),
(39, 1, 32, 38, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 53, NULL, 53, '2019-03-19 04:56:49', '2019-03-19 04:56:49'),
(40, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 4, NULL, 4, '2019-03-19 16:44:54', '2019-03-19 16:44:54'),
(41, 1, 22, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khatri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 54, NULL, 54, '2019-03-22 00:37:53', '2019-03-22 00:37:53'),
(42, 1, 35, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS (Foreign Affairs): Assistant Secretary (Former Section Officer)', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '5 Feet 11 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 55, NULL, 55, '2019-03-22 17:07:36', '2019-03-22 17:48:16'),
(43, 1, 18, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 56, NULL, 56, '2019-03-23 04:49:36', '2019-03-23 05:22:48'),
(44, 1, 28, 38, 'United States Minor Outlying Islands', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 57, NULL, 57, '2019-03-23 22:25:24', '2019-08-27 06:21:53'),
(45, 1, 24, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Professor', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet', '4 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 58, NULL, 58, '2019-03-24 22:21:41', '2019-03-24 22:21:41'),
(46, 1, 22, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 59, NULL, 59, '2019-03-31 18:26:27', '2019-03-31 18:26:27'),
(47, 1, 19, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 11 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 60, NULL, 60, '2019-04-01 13:20:03', '2019-04-01 13:20:03'),
(48, 1, 29, 32, 'Barbados', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS (Customs & Excise): Assistant Commissioner of customs', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 61, NULL, 61, '2019-04-01 15:52:58', '2019-05-17 17:20:39'),
(49, 1, 28, 38, 'Australia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 62, NULL, 62, '2019-04-02 14:14:24', '2019-04-02 14:14:24'),
(50, 1, 25, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Professor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 63, NULL, 63, '2019-04-07 14:35:20', '2019-04-07 14:35:20'),
(51, 1, 18, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 64, NULL, 64, '2019-04-07 14:54:00', '2019-04-07 14:54:00'),
(52, 1, 18, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '????????????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4??????', '6??????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 65, NULL, 65, '2019-04-08 17:47:57', '2019-04-08 17:47:57'),
(53, 1, 22, 44, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 66, NULL, 66, '2019-04-10 06:33:57', '2019-04-10 06:33:57'),
(54, 1, 30, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 69, NULL, 69, '2019-04-23 00:24:22', '2019-04-23 00:24:22'),
(55, 1, 20, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 71, NULL, 71, '2019-04-23 17:24:38', '2019-04-23 17:24:38'),
(56, 1, 24, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 72, NULL, 72, '2019-04-25 15:24:37', '2019-04-25 15:24:37'),
(57, 1, 18, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 9 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Roman Catholic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 73, NULL, 73, '2019-04-27 21:53:34', '2019-04-27 21:53:34'),
(58, 1, 18, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 74, NULL, 74, '2019-04-30 06:35:21', '2019-04-30 06:35:21'),
(59, 1, 27, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Baidya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 75, NULL, 75, '2019-05-01 16:27:02', '2019-05-01 16:27:02'),
(60, 1, 18, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Female Police officer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 77, NULL, 77, '2019-05-04 18:00:31', '2019-05-04 18:00:31'),
(61, 1, 18, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 79, NULL, 79, '2019-05-04 21:05:22', '2019-05-04 21:05:22'),
(62, 1, 22, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 80, NULL, 80, '2019-05-08 10:21:45', '2019-05-08 10:21:45'),
(63, 1, 22, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 9 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 81, NULL, 81, '2019-05-09 02:28:06', '2019-05-09 02:28:06'),
(64, 1, 50, 70, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 82, NULL, 82, '2019-05-11 21:07:31', '2019-05-11 21:07:31'),
(65, 1, 18, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 83, NULL, 83, '2019-05-13 00:49:57', '2019-05-13 00:49:57'),
(66, 1, 35, 45, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 84, NULL, 84, '2019-05-18 07:51:52', '2019-05-18 07:51:52'),
(67, 1, 35, 37, 'United Kingdom', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 10 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 85, NULL, 85, '2019-05-24 02:44:58', '2019-05-24 02:44:58'),
(68, 1, 20, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 86, NULL, 86, '2019-05-26 03:09:42', '2019-05-26 03:09:42'),
(69, 1, 30, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 87, NULL, 87, '2019-06-09 21:53:58', '2019-06-09 21:53:58'),
(70, 1, 25, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 88, NULL, 88, '2019-06-10 08:08:26', '2019-06-10 08:08:26'),
(71, 1, 18, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '6 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 89, NULL, 89, '2019-06-11 06:59:12', '2019-06-11 06:59:12'),
(72, 1, 30, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS Non-Cadre', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 90, NULL, 90, '2019-06-13 20:51:42', '2019-06-13 20:51:42'),
(73, 1, 24, 37, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh Air Force', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '6 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 91, NULL, 91, '2019-06-14 20:26:13', '2019-06-14 20:26:13'),
(74, 1, 18, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 92, NULL, 92, '2019-06-16 21:55:46', '2019-06-16 21:55:46'),
(75, 1, 18, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 93, NULL, 93, '2019-06-18 04:53:08', '2019-06-18 04:53:08'),
(76, 1, 26, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS (Foreign Affairs): Assistant Secretary (Former Section Officer)', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 94, NULL, 94, '2019-06-24 18:26:50', '2019-06-24 18:26:50'),
(77, 1, 27, 31, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 95, NULL, 95, '2019-06-25 20:58:48', '2019-06-25 20:58:48'),
(78, 1, 18, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 10 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 96, NULL, 96, '2019-07-01 12:42:11', '2019-07-01 12:42:11'),
(79, 1, 20, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 97, NULL, 97, '2019-07-06 01:03:15', '2019-07-06 01:03:15'),
(80, 1, 23, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 11 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 98, NULL, 98, '2019-07-07 15:13:23', '2019-07-07 15:13:23'),
(81, 1, 21, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 99, NULL, 99, '2019-07-07 20:37:36', '2019-07-07 20:37:36'),
(82, 1, 18, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 100, NULL, 100, '2019-07-10 02:54:32', '2019-07-10 02:54:32'),
(83, 1, 28, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS (Foreign Affairs): Assistant Secretary (Former Section Officer)', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 101, NULL, 101, '2019-07-13 21:50:40', '2019-07-13 21:50:40'),
(84, 1, 25, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '6 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 102, NULL, 102, '2019-07-14 09:50:06', '2019-07-14 09:50:06'),
(85, 1, 26, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 103, NULL, 103, '2019-07-18 06:53:59', '2019-07-18 06:53:59'),
(86, 1, 22, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 104, NULL, 104, '2019-07-21 18:30:01', '2019-07-21 18:30:01'),
(87, 1, 28, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 105, NULL, 105, '2019-07-22 15:35:58', '2019-07-22 15:35:58'),
(88, 1, 20, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 106, NULL, 106, '2019-07-23 06:25:36', '2019-07-23 06:25:36'),
(89, 1, 19, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 107, NULL, 107, '2019-07-23 23:10:54', '2019-07-25 16:41:08'),
(90, 1, 21, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 108, NULL, 108, '2019-07-24 23:41:00', '2019-07-24 23:41:00'),
(91, 1, 22, 30, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 109, NULL, 109, '2019-07-30 06:05:38', '2019-07-30 06:05:38'),
(92, 1, 19, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '4 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 110, NULL, 110, '2019-08-04 17:59:02', '2019-08-04 17:59:02'),
(93, 1, 29, 31, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 111, NULL, 111, '2019-08-04 19:51:34', '2019-08-04 19:51:34'),
(94, 1, 18, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 1 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 112, NULL, 112, '2019-08-05 04:12:59', '2019-08-05 04:12:59'),
(95, 1, 33, 34, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 113, NULL, 113, '2019-08-05 15:51:18', '2019-08-05 15:51:18'),
(96, 1, 24, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 114, NULL, 114, '2019-08-06 18:56:41', '2019-08-06 18:56:41'),
(97, 1, 27, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 115, NULL, 115, '2019-08-06 23:48:47', '2019-08-06 23:48:47'),
(98, 1, 18, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 116, NULL, 116, '2019-08-07 17:45:47', '2019-08-07 17:45:47'),
(99, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 117, NULL, 117, '2019-08-07 20:15:45', '2019-08-07 20:15:45'),
(100, 1, 37, 45, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Widowed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 118, NULL, 118, '2019-08-10 20:13:04', '2019-08-10 20:25:37'),
(101, 1, 18, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 119, NULL, 119, '2019-08-13 07:03:54', '2019-08-13 07:03:54'),
(102, 1, 18, 20, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 120, NULL, 120, '2019-08-14 22:50:04', '2019-08-14 22:50:04'),
(103, 1, 30, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh Army', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 9 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 121, NULL, 121, '2019-08-18 14:40:51', '2019-08-18 14:40:51'),
(104, 1, 28, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 7 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 122, NULL, 122, '2019-08-19 01:28:10', '2019-08-19 01:28:10'),
(105, 1, 18, 36, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 10 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 123, NULL, 123, '2019-08-19 06:11:16', '2019-08-19 06:11:16'),
(106, 1, 21, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 124, NULL, 124, '2019-08-28 15:23:01', '2019-08-28 15:23:01'),
(107, 1, 18, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 126, NULL, 126, '2019-09-01 06:56:36', '2019-09-01 06:56:36'),
(108, 1, 18, 19, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Salafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 127, NULL, 127, '2019-09-08 21:30:20', '2019-09-08 21:30:20'),
(109, 1, 25, 28, 'American Samoa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 128, NULL, 128, '2019-09-09 22:39:22', '2019-09-09 22:39:23'),
(110, 1, 20, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 11 Inch', '5 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 129, NULL, 129, '2019-09-14 05:55:31', '2019-09-14 05:55:31'),
(111, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 130, NULL, 130, '2019-09-18 17:11:24', '2019-09-18 17:11:24'),
(112, 1, 18, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 5 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 131, NULL, 131, '2019-09-20 23:06:41', '2019-09-20 23:06:41'),
(113, 1, 21, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 132, NULL, 132, '2019-10-02 01:00:39', '2019-10-02 01:00:39'),
(114, 1, 22, 25, 'Germany', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 133, NULL, 133, '2019-10-02 07:37:46', '2019-10-02 07:47:11'),
(115, 1, 18, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 134, NULL, 134, '2019-10-03 17:32:44', '2019-10-03 17:32:44'),
(116, 1, 45, 45, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 135, NULL, 135, '2019-10-10 15:36:47', '2019-10-10 15:36:47'),
(117, 1, 36, 43, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 136, NULL, 136, '2019-10-11 01:10:14', '2019-10-11 01:10:14'),
(118, 1, 22, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 137, NULL, 137, '2019-10-11 21:18:04', '2019-10-11 21:18:04'),
(119, 1, 25, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 138, NULL, 138, '2019-10-12 03:44:51', '2019-10-12 03:44:51'),
(120, 1, 25, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 139, NULL, 139, '2019-10-12 05:10:09', '2019-10-12 05:10:09'),
(121, 1, 25, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS Non-Cadre', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '5 Feet 11 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 140, NULL, 140, '2019-10-12 09:36:14', '2019-10-12 09:36:14'),
(122, 1, 31, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '6 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 141, NULL, 141, '2019-10-18 02:22:59', '2019-10-18 02:22:59'),
(123, 1, 22, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 143, NULL, 143, '2019-10-19 21:11:29', '2019-10-19 21:11:29'),
(124, 1, 18, 36, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 144, NULL, 144, '2019-10-21 03:45:16', '2019-10-21 03:45:16'),
(125, 1, 35, 50, 'India', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '6 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Brahmin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 146, NULL, 146, '2019-11-06 01:27:18', '2019-11-06 01:27:18'),
(126, 1, 24, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 147, NULL, 147, '2019-11-07 03:25:32', '2019-11-07 03:25:32'),
(127, 1, 18, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 148, NULL, 148, '2019-11-09 17:26:06', '2019-11-09 17:26:06'),
(128, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 149, NULL, 149, '2019-11-10 07:30:25', '2019-11-10 07:30:25'),
(129, 1, 22, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 150, NULL, 150, '2019-11-13 03:38:58', '2019-11-13 03:38:58'),
(130, 1, 18, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 151, NULL, 151, '2019-11-14 03:20:00', '2019-11-14 03:20:00'),
(131, 1, 31, 37, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 152, NULL, 152, '2019-11-16 00:53:54', '2019-11-16 02:55:09'),
(132, 1, 20, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 153, NULL, 153, '2019-11-16 20:13:09', '2019-11-16 20:13:09'),
(133, 1, 22, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 154, NULL, 154, '2019-11-25 23:15:37', '2019-11-25 23:15:37'),
(134, 1, 33, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS Non-Cadre', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 155, NULL, 155, '2019-12-09 02:19:32', '2019-12-09 02:19:32'),
(135, 1, 20, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 156, NULL, 156, '2019-12-09 23:05:51', '2019-12-09 23:05:51'),
(136, 1, 20, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 157, NULL, 157, '2019-12-12 08:03:35', '2019-12-12 08:03:35'),
(137, 1, 30, 80, 'Angola', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet', '6 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 158, NULL, 158, '2019-12-18 22:23:49', '2019-12-18 22:23:49'),
(138, 1, 18, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh Army', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 159, NULL, 159, '2019-12-21 22:58:55', '2019-12-21 22:58:55'),
(139, 1, 30, 40, 'Swaziland', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 160, NULL, 160, '2019-12-22 16:03:18', '2019-12-22 16:03:18');
INSERT INTO `user_search_terms` (`id`, `custom_search`, `min_age`, `max_age`, `country`, `country_other`, `country_of_residence`, `country_of_residence_other`, `user_status`, `education_level`, `subject_studied`, `job_title`, `profession`, `profession_other`, `citizenship`, `income`, `marital_status`, `do_u_have_children`, `body_build`, `skin_color`, `smoke_status`, `disabilities_status`, `disabilities_status_other`, `alcohol_status`, `min_height`, `max_height`, `diat_status`, `mother_tongue`, `district`, `thana`, `citizenship_other`, `city_of_residence`, `state_of_residence`, `religion`, `social_order`, `interests`, `favourite_music`, `favourite_reads`, `favourite_movies`, `favourite_cooking`, `dress_style`, `checked`, `can_edit`, `addedby_id`, `editedby_id`, `user_id`, `created_at`, `updated_at`) VALUES
(140, 1, 23, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 9 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 161, NULL, 161, '2019-12-26 09:47:58', '2019-12-26 09:47:58'),
(141, 1, 32, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 162, NULL, 162, '2019-12-26 21:51:48', '2019-12-26 21:51:48'),
(142, 1, 18, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Salafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 163, NULL, 163, '2019-12-27 00:03:35', '2019-12-27 00:17:40'),
(143, 1, 23, 29, 'Korea, Republic of', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Catholic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 164, NULL, 164, '2019-12-27 19:54:03', '2019-12-27 19:54:03'),
(144, 1, 23, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 165, NULL, 165, '2020-01-04 19:49:53', '2020-01-04 19:49:53'),
(145, 1, 25, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 166, NULL, 166, '2020-01-06 21:54:52', '2020-01-06 21:54:52'),
(146, 1, 20, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 1 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 167, NULL, 167, '2020-01-08 07:36:03', '2020-01-08 07:36:03'),
(147, 1, 18, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 168, NULL, 168, '2020-01-10 11:50:12', '2020-01-10 11:50:12'),
(148, 1, 18, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Female Police officer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 169, NULL, 169, '2020-01-10 18:16:18', '2020-01-10 18:16:18'),
(149, 1, 18, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 8 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 170, NULL, 170, '2020-01-11 07:37:42', '2020-01-11 07:37:42'),
(150, 1, 20, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 172, NULL, 172, '2020-01-17 18:21:23', '2020-01-17 18:21:23'),
(151, 1, 20, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 5 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 173, NULL, 173, '2020-01-17 23:15:54', '2020-01-17 23:15:54'),
(152, 1, 25, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 174, NULL, 174, '2020-01-26 04:55:24', '2020-01-26 04:55:24'),
(153, 1, 32, 43, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '6 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 175, NULL, 175, '2020-01-26 21:45:24', '2020-01-26 21:52:48'),
(154, 1, 33, 32, 'Australia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh Army', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 10 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 176, NULL, 176, '2020-01-26 22:06:42', '2020-01-26 22:06:42'),
(155, 1, 28, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 9 Inch', '6 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 177, NULL, 177, '2020-01-28 06:10:06', '2020-01-28 06:10:06'),
(156, 1, 25, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Industrialists', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 180, NULL, 180, '2020-02-01 02:45:16', '2020-02-01 02:45:16'),
(157, 1, 25, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 181, NULL, 181, '2020-02-01 07:32:10', '2020-02-01 07:32:10'),
(158, 1, 35, 40, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 8 Inch', '4 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 182, NULL, 182, '2020-02-02 02:06:13', '2020-02-02 02:06:13'),
(159, 1, 28, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 183, NULL, 183, '2020-02-02 14:05:28', '2020-02-02 14:05:28'),
(160, 1, 29, 38, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh Army', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '6 Feet 1 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 184, NULL, 184, '2020-02-05 05:18:33', '2020-02-05 05:18:33'),
(161, 1, 31, 38, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 185, NULL, 185, '2020-02-10 07:27:15', '2020-02-10 14:24:24'),
(162, 1, 18, 18, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS Non-Cadre', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 186, NULL, 186, '2020-02-10 15:16:35', '2020-02-10 15:16:35'),
(163, 1, 22, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '4 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 187, NULL, 187, '2020-02-15 09:44:08', '2020-02-15 09:44:08'),
(164, 1, 22, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 188, NULL, 188, '2020-02-17 06:17:53', '2020-02-17 06:17:53'),
(165, 1, 25, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 189, NULL, 189, '2020-02-17 18:21:38', '2020-02-17 18:21:38'),
(166, 1, 18, 19, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '4 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 190, NULL, 190, '2020-02-17 19:38:03', '2020-02-17 19:38:03'),
(167, 1, 25, 33, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 11 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 191, NULL, 191, '2020-02-18 22:33:37', '2020-02-18 22:33:37'),
(168, 1, 27, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Salafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 192, NULL, 192, '2020-02-18 22:46:58', '2020-02-18 22:46:58'),
(169, 1, 29, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 193, NULL, 193, '2020-02-19 05:06:45', '2020-02-19 05:06:45'),
(170, 1, 18, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 194, NULL, 194, '2020-02-20 11:45:39', '2020-02-20 11:45:39'),
(171, 1, 21, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 195, NULL, 195, '2020-02-25 02:42:26', '2020-02-25 02:42:26'),
(172, 1, 30, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 11 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 196, NULL, 196, '2020-02-25 05:17:34', '2020-02-25 05:17:34'),
(173, 1, 28, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 197, NULL, 197, '2020-02-27 05:45:02', '2020-02-27 05:45:03'),
(174, 1, 37, 37, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS (Food),General: Assistant Controller of Food / Equivalent Posts', NULL, NULL, NULL, 'Widowed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 198, NULL, 198, '2020-02-28 08:12:00', '2020-02-28 08:12:01'),
(175, 1, 30, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Male Police officer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 199, NULL, 199, '2020-03-01 06:07:44', '2020-03-01 06:07:44'),
(176, 1, 18, 60, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 4 Inch', '5 Feet 11 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 200, NULL, 200, '2020-03-03 18:42:33', '2020-03-03 18:42:33'),
(177, 1, 25, 45, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 201, NULL, 201, '2020-03-05 19:04:37', '2020-03-05 19:04:37'),
(178, 1, 37, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 202, NULL, 202, '2020-03-08 01:29:50', '2020-03-08 01:29:50'),
(179, 1, 21, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 203, NULL, 203, '2020-03-08 02:30:10', '2020-03-08 02:30:10'),
(180, 1, 28, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Industrialists', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 204, NULL, 204, '2020-03-08 06:35:24', '2020-03-08 06:35:24'),
(181, 1, 35, 45, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 206, NULL, 206, '2020-03-12 22:11:26', '2020-03-12 22:11:26'),
(182, 1, 18, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 207, NULL, 207, '2020-03-14 19:18:15', '2020-03-14 19:18:15'),
(183, 1, 18, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 8 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 208, NULL, 208, '2020-03-15 17:45:17', '2020-03-15 18:10:54'),
(184, 1, 22, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Professor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 210, NULL, 210, '2020-03-15 20:47:43', '2020-03-15 20:47:43'),
(185, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 211, NULL, 211, '2020-03-17 08:41:38', '2020-03-17 08:41:38'),
(186, 1, 18, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Industrialists', NULL, NULL, NULL, 'Widowed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet', '6 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 212, NULL, 212, '2020-03-18 07:38:49', '2020-03-18 07:38:49'),
(187, 1, 24, 25, 'American Samoa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Industrialists', NULL, NULL, NULL, 'Widowed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Salafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 213, NULL, 213, '2020-03-24 04:14:38', '2020-03-24 04:14:38'),
(188, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 214, NULL, 214, '2020-03-27 17:04:38', '2020-03-27 17:04:38'),
(189, 1, 18, 40, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 216, NULL, 216, '2020-04-04 05:39:33', '2020-04-04 05:39:33'),
(190, 1, 34, 38, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 217, NULL, 217, '2020-04-05 21:47:36', '2020-04-05 21:47:36'),
(191, 1, 18, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 10 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 219, NULL, 219, '2020-04-06 06:36:38', '2020-04-06 06:36:38'),
(192, 1, 32, 36, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 220, NULL, 220, '2020-04-13 06:05:06', '2020-04-13 06:05:06'),
(193, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 221, NULL, 221, '2020-04-26 18:09:13', '2020-04-26 18:09:13'),
(194, 1, 18, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet', '6 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 222, NULL, 222, '2020-05-07 11:39:51', '2020-05-07 11:39:51'),
(195, 1, 22, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 223, NULL, 223, '2020-05-29 02:09:49', '2020-05-29 02:09:49'),
(196, 1, 18, 18, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 224, NULL, 224, '2020-05-29 21:52:30', '2020-05-29 21:52:30'),
(197, 1, 23, 23, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 226, NULL, 226, '2020-06-09 01:34:18', '2020-06-09 01:34:18'),
(198, 1, 25, 31, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 227, NULL, 227, '2020-06-10 06:37:07', '2020-06-10 06:37:07'),
(199, 1, 18, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 228, NULL, 228, '2020-06-15 19:51:17', '2020-06-15 19:51:17'),
(200, 1, 18, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 8 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 229, NULL, 229, '2020-06-17 15:17:15', '2020-06-17 15:17:15'),
(201, 1, 29, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '6 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 230, NULL, 230, '2020-06-23 21:33:45', '2020-06-23 21:33:45'),
(202, 1, 24, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 231, NULL, 231, '2020-06-25 17:11:08', '2020-06-25 17:11:08'),
(203, 1, 21, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 232, NULL, 232, '2020-06-29 06:58:58', '2020-06-29 06:58:58'),
(204, 1, 28, 31, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 233, NULL, 233, '2020-06-29 20:38:46', '2020-06-29 20:38:46'),
(205, 1, 22, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 234, NULL, 234, '2020-07-01 03:23:18', '2020-07-01 03:23:18'),
(206, 1, 18, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 235, NULL, 235, '2020-07-03 21:01:11', '2020-07-03 21:01:11'),
(207, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 236, NULL, 236, '2020-07-14 04:36:53', '2020-07-14 04:36:53'),
(208, 1, 20, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 237, NULL, 237, '2020-07-14 08:19:51', '2020-07-14 08:19:51'),
(209, 1, 19, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 238, NULL, 238, '2020-07-16 20:31:44', '2020-07-16 20:31:44'),
(210, 1, 18, 18, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 239, NULL, 239, '2020-07-17 17:19:41', '2020-07-17 17:19:41'),
(211, 1, 30, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 9 Inch', '5 Feet 9 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 240, NULL, 240, '2020-07-21 20:09:38', '2020-07-21 20:09:38'),
(212, 1, 27, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '6 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 241, NULL, 241, '2020-07-23 21:24:36', '2020-07-23 21:24:36'),
(213, 1, 29, 36, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '6 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 242, NULL, 242, '2020-08-01 06:23:41', '2020-08-01 06:23:41'),
(214, 1, 24, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 243, NULL, 243, '2020-08-06 15:53:24', '2020-08-06 15:53:24'),
(215, 1, 25, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 244, NULL, 244, '2020-08-10 18:13:55', '2020-08-10 18:13:55'),
(216, 1, 23, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 11 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 245, NULL, 245, '2020-08-12 16:21:07', '2020-08-12 16:21:07'),
(217, 1, 25, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 246, NULL, 246, '2020-08-14 02:05:58', '2020-08-14 02:05:58'),
(218, 1, 38, 45, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 247, NULL, 247, '2020-12-04 19:24:41', '2020-12-04 19:24:41'),
(219, 1, 30, 45, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 248, NULL, 248, '2020-12-05 03:15:05', '2020-12-05 03:15:05'),
(220, 1, 22, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 5 Inch', '6 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 249, NULL, 249, '2020-12-06 19:55:11', '2020-12-06 19:55:11'),
(221, 1, 18, 20, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 250, NULL, 250, '2020-12-07 07:23:25', '2020-12-07 07:23:25'),
(222, 1, 20, 22, 'Kazakhstan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 251, NULL, 251, '2020-12-07 12:30:47', '2020-12-07 12:30:47'),
(223, 1, 19, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 252, NULL, 252, '2020-12-08 06:25:39', '2020-12-08 06:25:39'),
(224, 1, 18, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '4 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 253, NULL, 253, '2020-12-10 11:49:31', '2020-12-10 11:49:32'),
(225, 1, 18, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '4 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 254, NULL, 254, '2020-12-10 11:50:55', '2020-12-10 11:50:55'),
(226, 1, 19, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 255, NULL, 255, '2020-12-12 10:05:54', '2020-12-12 10:05:54'),
(227, 1, 19, 21, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 256, NULL, 256, '2020-12-13 10:34:24', '2020-12-13 10:34:25'),
(228, 1, 20, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 8 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 257, NULL, 257, '2020-12-16 11:58:59', '2020-12-16 11:59:00'),
(229, 1, 18, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hanafi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 258, NULL, 258, '2020-12-21 12:21:57', '2020-12-21 12:21:59'),
(230, 1, 30, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 4 Inch', '4 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 259, NULL, 259, '2020-12-22 04:51:20', '2020-12-22 04:51:20'),
(231, 1, 25, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '4 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 260, NULL, 260, '2020-12-24 23:21:41', '2020-12-24 23:21:41'),
(232, 1, 18, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 7 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 261, NULL, 261, '2020-12-26 16:59:45', '2020-12-26 16:59:45'),
(233, 1, 33, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 8 Inch', '6 Feet 1 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 262, NULL, 262, '2020-12-28 13:00:53', '2020-12-28 13:00:54'),
(234, 1, 25, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 263, NULL, 263, '2020-12-29 04:53:18', '2020-12-29 04:53:18'),
(235, 1, 18, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 11 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 264, NULL, 264, '2020-12-30 05:47:29', '2020-12-30 05:47:30'),
(236, 1, 28, 30, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 265, NULL, 265, '2020-12-30 06:01:38', '2020-12-30 06:01:38'),
(237, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 269, '2021-01-06 23:53:57', '2021-01-06 23:53:57'),
(238, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 266, '2021-01-06 23:57:54', '2021-01-06 23:57:54'),
(239, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 3, '2021-01-07 00:09:24', '2021-01-07 00:09:24'),
(240, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 5, '2021-01-07 00:10:24', '2021-01-07 00:10:24'),
(241, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 6, '2021-01-07 00:11:02', '2021-01-07 00:11:02'),
(242, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 7, '2021-01-07 00:11:41', '2021-01-07 00:11:41'),
(243, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 8, '2021-01-07 00:12:29', '2021-01-07 00:12:29'),
(244, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 9, '2021-01-07 00:12:42', '2021-01-07 00:12:42'),
(245, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 10, '2021-01-07 00:13:37', '2021-01-07 00:13:37'),
(246, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 11, '2021-01-07 00:14:23', '2021-01-07 00:14:23'),
(247, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 14, '2021-01-07 00:15:15', '2021-01-07 00:15:15'),
(248, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 15, '2021-01-07 00:15:37', '2021-01-07 00:15:37'),
(249, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 38, '2021-01-07 00:28:19', '2021-01-07 00:28:19'),
(250, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 39, '2021-01-07 00:28:39', '2021-01-07 00:28:39'),
(251, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 52, '2021-01-07 00:41:07', '2021-01-07 00:41:07'),
(252, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 67, '2021-01-07 01:02:43', '2021-01-07 01:02:43'),
(253, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 68, '2021-01-07 01:04:38', '2021-01-07 01:04:38'),
(254, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 70, '2021-01-07 01:06:03', '2021-01-07 01:06:03'),
(255, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 76, '2021-01-07 01:12:00', '2021-01-07 01:12:00'),
(256, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 78, '2021-01-07 01:13:15', '2021-01-07 01:13:15'),
(257, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 125, '2021-01-07 03:11:11', '2021-01-07 03:11:11'),
(258, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 142, '2021-01-07 03:30:23', '2021-01-07 03:30:23'),
(259, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 145, '2021-01-07 03:32:57', '2021-01-07 03:32:57'),
(260, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 171, '2021-01-07 03:51:00', '2021-01-07 03:51:00'),
(261, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 178, '2021-01-07 03:54:05', '2021-01-07 03:54:05'),
(262, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 179, '2021-01-07 03:54:23', '2021-01-07 03:54:23'),
(263, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 270, NULL, 270, '2021-01-07 04:01:58', '2021-01-07 04:01:58'),
(264, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 205, '2021-01-07 04:05:49', '2021-01-07 04:05:49'),
(265, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 209, '2021-01-07 04:07:11', '2021-01-07 04:07:11'),
(266, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 215, '2021-01-07 04:09:04', '2021-01-07 04:09:04'),
(267, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 218, '2021-01-07 04:09:58', '2021-01-07 04:09:58'),
(268, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 225, '2021-01-07 04:12:46', '2021-01-07 04:12:46'),
(269, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 268, '2021-01-07 04:24:21', '2021-01-07 04:24:21'),
(270, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 267, '2021-01-07 04:24:24', '2021-01-07 04:24:24'),
(271, 1, 20, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 2 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 271, NULL, 271, '2021-01-08 05:20:00', '2021-01-11 02:12:50'),
(272, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 272, NULL, 272, '2021-01-09 01:15:33', '2021-01-09 01:15:33'),
(273, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 273, '2021-01-09 06:43:46', '2021-01-09 06:43:46'),
(274, 1, 28, 32, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 9 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 275, NULL, 275, '2021-01-12 23:55:40', '2021-01-13 03:16:37'),
(275, 1, 26, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 5 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 276, NULL, 276, '2021-01-14 11:34:41', '2021-01-14 11:59:39'),
(276, 1, 21, 47, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Professor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Baidya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 277, NULL, 277, '2021-01-15 21:30:22', '2021-01-15 21:30:22'),
(277, 1, 18, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 9 Inch', '5 Feet 1 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 278, NULL, 278, '2021-01-27 01:11:02', '2021-01-27 01:11:02'),
(278, 1, 36, 40, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS (Audit & Accounts): Assistant Accountant General', NULL, NULL, NULL, 'Anulled', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 279, NULL, 279, '2021-01-28 05:24:56', '2021-01-28 05:24:58'),
(279, 1, 18, 35, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 'Legally Separated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 10 Inch', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 280, NULL, 280, '2021-01-28 21:40:32', '2021-01-28 21:40:32'),
(280, 1, 18, 25, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 8 Inch', '5 Feet 1 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hindu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 281, NULL, 281, '2021-01-29 12:37:52', '2021-01-29 13:25:31'),
(281, 1, 30, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Businessmen', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 7 Inch', '6 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 282, NULL, 282, '2021-01-29 12:44:47', '2021-01-30 04:29:26'),
(282, 1, 22, 24, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Doctor', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 1 Inch', '5 Feet 3 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 283, NULL, 283, '2021-01-30 15:23:46', '2021-01-30 15:23:46');
INSERT INTO `user_search_terms` (`id`, `custom_search`, `min_age`, `max_age`, `country`, `country_other`, `country_of_residence`, `country_of_residence_other`, `user_status`, `education_level`, `subject_studied`, `job_title`, `profession`, `profession_other`, `citizenship`, `income`, `marital_status`, `do_u_have_children`, `body_build`, `skin_color`, `smoke_status`, `disabilities_status`, `disabilities_status_other`, `alcohol_status`, `min_height`, `max_height`, `diat_status`, `mother_tongue`, `district`, `thana`, `citizenship_other`, `city_of_residence`, `state_of_residence`, `religion`, `social_order`, `interests`, `favourite_music`, `favourite_reads`, `favourite_movies`, `favourite_cooking`, `dress_style`, `checked`, `can_edit`, `addedby_id`, `editedby_id`, `user_id`, `created_at`, `updated_at`) VALUES
(283, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 284, NULL, 284, '2021-02-03 07:34:34', '2021-02-03 07:34:34'),
(284, 1, 24, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Citizen', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Just Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 286, NULL, 286, '2021-02-03 23:52:14', '2021-02-03 23:52:15'),
(285, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 288, NULL, 288, '2021-02-05 05:14:42', '2021-02-05 05:14:42'),
(286, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 289, NULL, 289, '2021-02-05 05:52:33', '2021-02-05 05:52:33'),
(287, 1, 18, 22, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 295, '2021-02-09 04:30:18', '2021-02-09 04:30:18'),
(288, 1, 26, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 6 Inch', '6 Feet 2 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 302, '2021-02-12 13:13:18', '2021-02-12 13:13:18'),
(289, 1, 18, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 310, NULL, 310, '2021-02-20 08:34:02', '2021-02-20 08:34:02'),
(290, 1, 18, 29, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BCS (Foreign Affairs): Assistant Secretary (Former Section Officer)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet 2 Inch', '5 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 311, '2021-02-25 05:00:19', '2021-02-25 05:00:19'),
(291, 1, 18, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4 Feet', '6 Feet 4 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 312, '2021-02-25 21:59:59', '2021-02-25 21:59:59'),
(292, 1, 24, 31, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 314, '2021-02-27 15:39:09', '2021-02-27 15:39:09'),
(293, 1, 18, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 315, '2021-02-28 00:41:32', '2021-02-28 00:41:32'),
(294, 1, 22, 28, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '5 Feet 6 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 316, '2021-03-02 11:53:11', '2021-03-02 11:53:11'),
(295, 1, 20, 26, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 10 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 317, '2021-03-03 13:34:04', '2021-03-03 13:34:04'),
(296, 1, 33, 40, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Engineer', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 4 Inch', '6 Feet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 318, '2021-03-06 06:12:03', '2021-03-06 06:12:03'),
(297, 1, 20, 27, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet', '5 Feet 1 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 322, '2021-03-10 03:51:56', '2021-03-10 05:44:38'),
(298, 1, 18, 20, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Running Student', NULL, NULL, NULL, 'Never Married', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5 Feet 3 Inch', '5 Feet 5 Inch', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Muslim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, 326, '2021-03-18 00:15:48', '2021-03-18 00:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_setting_fields`
--

CREATE TABLE `user_setting_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_setting_fields`
--

INSERT INTO `user_setting_fields` (`id`, `title`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 'Gender', 1, NULL, '2018-10-29 15:06:54', '2018-10-29 15:06:54'),
(2, 'Profile Created By', 1, NULL, '2018-10-29 15:07:03', '2018-10-29 15:07:03'),
(3, 'Religion', 1, NULL, '2018-10-29 15:07:13', '2018-10-29 15:07:13'),
(4, 'Social Order/Cast', 1, NULL, '2018-10-29 15:07:28', '2018-10-29 15:07:28'),
(5, 'Looking For', 1, NULL, '2018-10-29 15:07:40', '2018-10-29 15:07:40'),
(6, 'Height', 1, NULL, '2018-10-29 15:07:51', '2018-10-29 15:07:51'),
(7, 'Weight', 1, NULL, '2018-10-29 15:07:59', '2018-10-29 15:07:59'),
(8, 'Skin Color/Complexion', 1, NULL, '2018-10-29 15:08:08', '2018-10-29 15:08:08'),
(9, 'Education Level', 1, NULL, '2018-10-29 15:08:24', '2018-10-29 15:08:24'),
(10, 'Profession', 1, NULL, '2018-10-29 15:08:34', '2018-10-29 15:08:34'),
(11, 'Marital Status', 1, NULL, '2018-10-29 15:08:44', '2018-10-29 15:08:44'),
(12, 'Father\'s Profession', 16, NULL, '2019-02-05 17:16:40', '2019-02-05 17:16:40'),
(13, 'Mother\'s Profession', 16, NULL, '2019-02-05 17:21:34', '2019-02-05 17:21:34'),
(14, 'Family Types', 16, NULL, '2019-02-05 17:22:44', '2019-02-05 17:22:44'),
(15, 'Residing District/City', 1, NULL, '2019-03-18 20:13:26', '2019-03-18 20:13:26'),
(16, 'Employed In', 1, NULL, '2019-03-18 20:13:26', '2019-03-18 20:13:26'),
(17, 'Family Class', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_setting_items`
--

CREATE TABLE `user_setting_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drag_id` int(10) UNSIGNED DEFAULT NULL,
  `field_id` int(10) UNSIGNED NOT NULL,
  `addedby_id` int(10) UNSIGNED NOT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_setting_items`
--

INSERT INTO `user_setting_items` (`id`, `title`, `drag_id`, `field_id`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 'Male', NULL, 1, 1, NULL, '2018-10-29 15:09:09', '2018-10-29 15:09:09'),
(2, 'Female', NULL, 1, 1, NULL, '2018-10-29 15:09:16', '2018-10-29 15:09:16'),
(3, 'Self', NULL, 2, 1, NULL, '2018-10-29 15:09:43', '2018-10-29 15:09:43'),
(4, 'Parent', NULL, 2, 1, NULL, '2018-10-29 15:09:49', '2018-10-29 15:09:49'),
(5, 'Guardian', NULL, 2, 1, NULL, '2018-10-29 15:09:56', '2018-10-29 15:09:56'),
(6, 'Friend', NULL, 2, 1, NULL, '2018-10-29 15:10:05', '2018-10-29 15:10:05'),
(7, 'Brother', NULL, 2, 1, NULL, '2018-10-29 15:10:29', '2018-10-29 15:10:29'),
(8, 'Sister', NULL, 2, 1, NULL, '2018-10-29 15:10:34', '2018-10-29 15:10:34'),
(10, 'Muslim', NULL, 3, 1, NULL, '2018-10-29 15:10:56', '2018-10-29 15:10:56'),
(11, 'Hindu', NULL, 3, 1, NULL, '2018-10-29 15:11:02', '2018-10-29 15:11:02'),
(12, 'Christian', NULL, 3, 1, NULL, '2018-10-29 15:11:20', '2018-10-29 15:11:20'),
(13, 'Buddhist', NULL, 3, 1, NULL, '2018-10-29 15:11:27', '2018-10-29 15:11:27'),
(14, 'Other', NULL, 3, 1, NULL, '2018-10-29 15:11:41', '2018-10-29 15:11:41'),
(15, 'No Religion', NULL, 3, 1, NULL, '2018-10-29 15:11:49', '2018-10-29 15:11:49'),
(16, 'Just Muslim', NULL, 4, 1, 16, '2018-10-29 15:12:26', '2018-12-08 15:24:47'),
(17, 'Salafi', NULL, 4, 1, NULL, '2018-10-29 15:12:33', '2018-10-29 15:12:33'),
(18, 'Hanafi', NULL, 4, 1, NULL, '2018-10-29 15:12:40', '2018-10-29 15:12:40'),
(19, 'Ahle Hadith', NULL, 4, 1, NULL, '2018-10-29 15:12:49', '2018-10-29 15:12:49'),
(20, 'Sunni', NULL, 4, 1, NULL, '2018-10-29 15:13:00', '2018-10-29 15:13:00'),
(21, 'Bride (Female)', NULL, 5, 1, NULL, '2018-10-29 15:14:29', '2018-10-29 15:14:29'),
(22, 'Groom (Male)', NULL, 5, 1, NULL, '2018-10-29 15:14:41', '2018-10-29 15:14:41'),
(23, '4 Feet', NULL, 6, 1, NULL, '2018-10-29 15:15:23', '2018-10-29 15:15:23'),
(24, '4 Feet 1 Inch', NULL, 6, 1, NULL, '2018-10-29 15:15:40', '2018-10-29 15:15:40'),
(25, '4 Feet 2 Inch', NULL, 6, 1, NULL, '2018-10-29 15:15:50', '2018-10-29 15:15:50'),
(26, '4 Feet 3 Inch', NULL, 6, 1, NULL, '2018-10-29 15:15:54', '2018-10-29 15:15:54'),
(27, '4 Feet 4 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:01', '2018-10-29 15:16:01'),
(28, '4 Feet 5 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:08', '2018-10-29 15:16:08'),
(29, '4 Feet 6 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:12', '2018-10-29 15:16:12'),
(30, '4 Feet 7 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:18', '2018-10-29 15:16:18'),
(31, '4 Feet 8 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:22', '2018-10-29 15:16:22'),
(32, '4 Feet 9 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:26', '2018-10-29 15:16:26'),
(33, '4 Feet 10 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:33', '2018-10-29 15:16:33'),
(34, '4 Feet 11 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:37', '2018-10-29 15:16:37'),
(35, '5 Feet', NULL, 6, 1, NULL, '2018-10-29 15:16:47', '2018-10-29 15:16:47'),
(36, '5 Feet 1 Inch', NULL, 6, 1, NULL, '2018-10-29 15:16:59', '2018-10-29 15:16:59'),
(37, '5 Feet 2 Inch', NULL, 6, 1, NULL, '2018-10-29 15:17:04', '2018-10-29 15:17:04'),
(38, '5 Feet 3 Inch', NULL, 6, 1, NULL, '2018-10-29 15:17:16', '2018-10-29 15:17:16'),
(39, '5 Feet 4 Inch', NULL, 6, 1, NULL, '2018-10-29 15:17:28', '2018-10-29 15:17:28'),
(40, '5 Feet 5 Inch', NULL, 6, 1, NULL, '2018-10-29 15:17:32', '2018-10-29 15:17:32'),
(41, '5 Feet 6 Inch', NULL, 6, 1, NULL, '2018-10-29 15:17:36', '2018-10-29 15:17:36'),
(42, '5 Feet 7 Inch', NULL, 6, 1, NULL, '2018-10-29 15:17:42', '2018-10-29 15:17:42'),
(43, '5 Feet 8 Inch', NULL, 6, 1, NULL, '2018-10-29 15:17:50', '2018-10-29 15:17:50'),
(44, '5 Feet 9 Inch', NULL, 6, 1, NULL, '2018-10-29 15:17:54', '2018-10-29 15:17:54'),
(45, '5 Feet 10 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:00', '2018-10-29 15:18:00'),
(46, '5 Feet 11 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:05', '2018-10-29 15:18:05'),
(47, '6 Feet', NULL, 6, 1, NULL, '2018-10-29 15:18:13', '2018-10-29 15:18:13'),
(48, '6 Feet 1 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:20', '2018-10-29 15:18:20'),
(49, '6 Feet 2 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:23', '2018-10-29 15:18:23'),
(50, '6 Feet 3 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:27', '2018-10-29 15:18:27'),
(51, '6 Feet 4 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:30', '2018-10-29 15:18:30'),
(52, '6 Feet 5 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:33', '2018-10-29 15:18:33'),
(53, '6 Feet 6 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:37', '2018-10-29 15:18:37'),
(54, '6 Feet 7 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:42', '2018-10-29 15:18:42'),
(55, '6 Feet 8 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:46', '2018-10-29 15:18:46'),
(56, '6 Feet 9 Inch', NULL, 6, 1, NULL, '2018-10-29 15:18:51', '2018-10-29 15:18:51'),
(57, '6 Feet 10 Inch', NULL, 6, 1, NULL, '2018-10-29 15:19:29', '2018-10-29 15:19:29'),
(58, '20 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:05', '2018-10-29 15:20:05'),
(59, '21 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:14', '2018-10-29 15:20:14'),
(60, '22 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:19', '2018-10-29 15:20:19'),
(61, '23 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:24', '2018-10-29 15:20:24'),
(62, '24 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:28', '2018-10-29 15:20:28'),
(63, '25 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:33', '2018-10-29 15:20:33'),
(64, '26 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:36', '2018-10-29 15:20:36'),
(65, '27 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:40', '2018-10-29 15:20:40'),
(66, '28 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:43', '2018-10-29 15:20:43'),
(67, '29 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:48', '2018-10-29 15:20:48'),
(68, '30 KG', NULL, 7, 1, NULL, '2018-10-29 15:20:54', '2018-10-29 15:20:54'),
(69, '31 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:00', '2018-10-29 15:21:00'),
(70, '32 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:05', '2018-10-29 15:21:05'),
(71, '33 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:10', '2018-10-29 15:21:10'),
(72, '34 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:13', '2018-10-29 15:21:13'),
(73, '35 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:17', '2018-10-29 15:21:17'),
(74, '36 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:20', '2018-10-29 15:21:20'),
(75, '37 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:23', '2018-10-29 15:21:23'),
(76, '38 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:29', '2018-10-29 15:21:29'),
(77, '39 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:33', '2018-10-29 15:21:33'),
(78, '40 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:38', '2018-10-29 15:21:38'),
(79, '41 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:43', '2018-10-29 15:21:43'),
(80, '42 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:45', '2018-10-29 15:21:45'),
(81, '43 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:48', '2018-10-29 15:21:48'),
(82, '44 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:51', '2018-10-29 15:21:51'),
(83, '45 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:54', '2018-10-29 15:21:54'),
(84, '46 KG', NULL, 7, 1, NULL, '2018-10-29 15:21:57', '2018-10-29 15:21:57'),
(85, '47 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:00', '2018-10-29 15:22:00'),
(86, '48 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:03', '2018-10-29 15:22:03'),
(87, '49 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:06', '2018-10-29 15:22:06'),
(88, '50 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:12', '2018-10-29 15:22:12'),
(89, '51 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:16', '2018-10-29 15:22:16'),
(90, '52 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:19', '2018-10-29 15:22:19'),
(91, '53 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:25', '2018-10-29 15:22:25'),
(92, '54 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:32', '2018-10-29 15:22:32'),
(93, '55 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:36', '2018-10-29 15:22:36'),
(94, '56 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:41', '2018-10-29 15:22:41'),
(95, '57 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:46', '2018-10-29 15:22:46'),
(96, '58 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:49', '2018-10-29 15:22:49'),
(97, '59 KG', NULL, 7, 1, NULL, '2018-10-29 15:22:54', '2018-10-29 15:22:54'),
(98, '60 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:00', '2018-10-29 15:23:00'),
(99, '61 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:04', '2018-10-29 15:23:04'),
(100, '62 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:08', '2018-10-29 15:23:08'),
(101, '63 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:13', '2018-10-29 15:23:13'),
(102, '64 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:16', '2018-10-29 15:23:16'),
(103, '65 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:19', '2018-10-29 15:23:19'),
(104, '66 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:23', '2018-10-29 15:23:23'),
(105, '67 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:27', '2018-10-29 15:23:27'),
(106, '68 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:36', '2018-10-29 15:23:36'),
(107, '69 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:40', '2018-10-29 15:23:40'),
(108, '70 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:46', '2018-10-29 15:23:46'),
(109, '71 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:50', '2018-10-29 15:23:50'),
(110, '72 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:56', '2018-10-29 15:23:56'),
(111, '73 KG', NULL, 7, 1, NULL, '2018-10-29 15:23:59', '2018-10-29 15:23:59'),
(112, '74 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:03', '2018-10-29 15:24:03'),
(113, '75 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:06', '2018-10-29 15:24:06'),
(114, '76 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:18', '2018-10-29 15:24:18'),
(115, '77 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:25', '2018-10-29 15:24:25'),
(116, '78 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:28', '2018-10-29 15:24:28'),
(117, '79 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:32', '2018-10-29 15:24:32'),
(118, '80 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:40', '2018-10-29 15:24:40'),
(119, '81 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:44', '2018-10-29 15:24:44'),
(120, '82 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:49', '2018-10-29 15:24:49'),
(121, '83 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:52', '2018-10-29 15:24:52'),
(122, '84 KG', NULL, 7, 1, NULL, '2018-10-29 15:24:56', '2018-10-29 15:24:56'),
(123, '85 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:00', '2018-10-29 15:25:00'),
(124, '86 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:06', '2018-10-29 15:25:06'),
(125, '87 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:12', '2018-10-29 15:25:12'),
(126, '88 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:16', '2018-10-29 15:25:16'),
(127, '89 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:20', '2018-10-29 15:25:20'),
(128, '90 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:27', '2018-10-29 15:25:27'),
(129, '91 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:32', '2018-10-29 15:25:32'),
(130, '92 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:36', '2018-10-29 15:25:36'),
(131, '93 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:40', '2018-10-29 15:25:40'),
(132, '94 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:44', '2018-10-29 15:25:44'),
(133, '95 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:49', '2018-10-29 15:25:49'),
(134, '96 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:55', '2018-10-29 15:25:55'),
(135, '97 KG', NULL, 7, 1, NULL, '2018-10-29 15:25:58', '2018-10-29 15:25:58'),
(136, '98 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:03', '2018-10-29 15:26:03'),
(137, '99 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:08', '2018-10-29 15:26:08'),
(138, '100 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:14', '2018-10-29 15:26:14'),
(139, '101 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:18', '2018-10-29 15:26:18'),
(140, '102 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:21', '2018-10-29 15:26:21'),
(141, '103 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:24', '2018-10-29 15:26:24'),
(142, '104 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:30', '2018-10-29 15:26:30'),
(143, '105 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:40', '2018-10-29 15:26:40'),
(144, '106 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:45', '2018-10-29 15:26:45'),
(145, '107 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:49', '2018-10-29 15:26:49'),
(146, '108 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:53', '2018-10-29 15:26:53'),
(147, '109 KG', NULL, 7, 1, NULL, '2018-10-29 15:26:57', '2018-10-29 15:26:57'),
(148, '110 KG', NULL, 7, 1, NULL, '2018-10-29 15:27:04', '2018-10-29 15:27:04'),
(149, 'Fair', NULL, 8, 1, NULL, '2018-10-29 15:49:27', '2018-10-29 15:49:27'),
(150, 'Bright', NULL, 8, 1, 16, '2018-10-29 15:50:30', '2019-01-23 16:38:33'),
(151, 'Drak', NULL, 8, 1, 16, '2018-10-29 15:50:49', '2019-01-23 16:38:21'),
(152, 'High School Pass', NULL, 9, 1, NULL, '2018-10-29 15:51:25', '2018-10-29 15:51:25'),
(153, 'Higher   Secondary Certificate', NULL, 9, 1, 16, '2018-10-29 15:51:33', '2018-12-11 17:36:18'),
(154, 'Dakhil', NULL, 9, 1, NULL, '2018-10-29 15:51:39', '2018-10-29 15:51:39'),
(155, 'Alim', NULL, 9, 1, NULL, '2018-10-29 15:51:45', '2018-10-29 15:51:45'),
(156, 'Kamil', NULL, 9, 1, 16, '2018-10-29 15:51:52', '2018-12-08 21:53:08'),
(158, 'Doctor', NULL, 10, 1, NULL, '2018-10-29 15:52:26', '2018-10-29 15:52:26'),
(159, 'Engineer', NULL, 10, 1, NULL, '2018-10-29 15:52:34', '2018-10-29 15:52:34'),
(161, 'Never Married', NULL, 11, 1, NULL, '2018-10-29 15:53:17', '2018-10-29 15:53:17'),
(162, 'Legally Separated', NULL, 11, 1, NULL, '2018-10-29 15:53:27', '2018-10-29 15:53:27'),
(163, 'Divorced', NULL, 11, 1, NULL, '2018-10-29 15:53:39', '2018-10-29 15:53:39'),
(164, 'Widowed', NULL, 11, 1, NULL, '2018-10-29 15:53:47', '2018-10-29 15:53:47'),
(165, 'Anulled', NULL, 11, 1, NULL, '2018-10-29 15:53:54', '2018-10-29 15:53:54'),
(169, 'Electrical and Electronic Engineering', NULL, 9, 16, NULL, '2018-12-08 23:04:44', '2018-12-08 23:04:44'),
(170, 'Department of Software Engineering', NULL, 9, 16, NULL, '2018-12-08 23:05:29', '2018-12-08 23:05:29'),
(171, 'Department of Civil Engineering', NULL, 9, 16, NULL, '2018-12-08 23:06:14', '2018-12-08 23:06:14'),
(172, 'Department of Software Engineering', NULL, 9, 16, NULL, '2018-12-08 23:07:22', '2018-12-08 23:07:22'),
(173, 'Department Of Pharmacy', NULL, 9, 16, NULL, '2018-12-08 23:08:00', '2018-12-08 23:08:00'),
(176, 'Department of Nutrition and Food Engineering', NULL, 9, 16, NULL, '2018-12-08 23:12:16', '2018-12-08 23:12:16'),
(177, 'M.sc Department of Computer Science & Engineering', NULL, 9, 16, 16, '2018-12-08 23:12:47', '2018-12-11 17:25:55'),
(178, 'M.Sc Department of Software Engineering', NULL, 9, 16, NULL, '2018-12-08 23:13:42', '2018-12-08 23:13:42'),
(179, 'M.Sc in Management Information System', NULL, 9, 16, 16, '2018-12-08 23:14:01', '2018-12-11 17:26:09'),
(180, 'Department of Journalism and Mass Communication', NULL, 9, 16, 16, '2018-12-08 23:14:22', '2018-12-11 17:26:22'),
(181, 'Department Of English', NULL, 9, 16, NULL, '2018-12-08 23:14:46', '2018-12-08 23:14:46'),
(182, 'Department of Information  Science and Library Management', NULL, 9, 16, 16, '2018-12-08 23:15:05', '2018-12-11 17:26:34'),
(183, 'Department of Law', NULL, 9, 16, 16, '2018-12-08 23:15:57', '2018-12-11 17:26:42'),
(184, 'Department of Mathematics', NULL, 9, 16, 16, '2018-12-08 23:16:27', '2018-12-11 17:26:50'),
(185, 'Department of Applied  Mathematics', NULL, 9, 16, 16, '2018-12-08 23:16:53', '2018-12-11 17:26:59'),
(186, 'Department of Applied  Physics', NULL, 9, 16, 16, '2018-12-08 23:17:29', '2018-12-11 17:27:09'),
(187, 'M.sc in pharmacy', NULL, 9, 16, NULL, '2018-12-08 23:17:59', '2018-12-08 23:17:59'),
(188, 'Diploma  in pharmacy', NULL, 9, 16, NULL, '2018-12-08 23:18:13', '2018-12-08 23:18:13'),
(189, 'Department of Journalism and Mass Communication', NULL, 9, 16, 16, '2018-12-08 23:19:10', '2018-12-11 17:27:20'),
(190, 'Department of Development Studies', NULL, 9, 16, 16, '2018-12-08 23:19:36', '2018-12-11 17:27:31'),
(191, 'Department of Bangla', NULL, 9, 16, NULL, '2018-12-08 23:20:11', '2018-12-08 23:20:11'),
(192, 'Department of Persian Language and Literature', NULL, 9, 16, NULL, '2018-12-11 15:32:06', '2018-12-11 15:32:06'),
(193, 'Department of Philosophy', NULL, 9, 16, NULL, '2018-12-11 15:33:44', '2018-12-11 15:33:44'),
(194, 'Department of History', NULL, 9, 16, NULL, '2018-12-11 15:34:26', '2018-12-11 15:34:26'),
(195, 'Department of Arabic', NULL, 9, 16, NULL, '2018-12-11 15:34:40', '2018-12-11 15:34:40'),
(196, 'Department of Islamic Study', NULL, 9, 16, NULL, '2018-12-11 15:35:07', '2018-12-11 15:35:07'),
(197, 'Department of Islamic History and Culture', NULL, 9, 16, NULL, '2018-12-11 15:35:18', '2018-12-11 15:35:18'),
(200, 'Department of Sanskrit and Pallio', NULL, 9, 16, 16, '2018-12-11 15:40:57', '2018-12-11 17:27:58'),
(201, 'Department of World Religion and Culture', NULL, 9, 16, NULL, '2018-12-11 15:43:59', '2018-12-11 15:43:59'),
(202, 'Department of Theater and Music', NULL, 9, 16, NULL, '2018-12-11 15:44:20', '2018-12-11 15:44:20'),
(203, 'Department of Linguistic', NULL, 9, 16, NULL, '2018-12-11 15:44:48', '2018-12-11 15:44:48'),
(208, 'Department of Management Studies', NULL, 9, 16, NULL, '2018-12-11 15:46:30', '2018-12-11 15:46:30'),
(209, 'Department of Accounting & Information Systems', NULL, 9, 16, NULL, '2018-12-11 15:46:36', '2018-12-11 15:46:36'),
(210, 'Department of Marketing', NULL, 9, 16, NULL, '2018-12-11 15:56:58', '2018-12-11 15:56:58'),
(211, 'Department of Finance', NULL, 9, 16, NULL, '2018-12-11 15:57:07', '2018-12-11 15:57:07'),
(212, 'Department of Banking and Insurance', NULL, 9, 16, NULL, '2018-12-11 15:57:50', '2018-12-11 15:57:50'),
(213, 'Department of Management Information Systems', NULL, 9, 16, NULL, '2018-12-11 15:58:07', '2018-12-11 15:58:07'),
(214, 'Department of International Business', NULL, 9, 16, NULL, '2018-12-11 15:58:54', '2018-12-11 15:58:54'),
(215, 'Department of Tourism and Hospitality Management', NULL, 9, 16, NULL, '2018-12-11 15:59:08', '2018-12-11 15:59:08'),
(216, 'Department of Organization Strategy and Leadership', NULL, 9, 16, NULL, '2018-12-11 15:59:49', '2018-12-11 15:59:49'),
(217, 'Department of Soil, Water and Environment', NULL, 9, 16, NULL, '2018-12-11 16:00:47', '2018-12-11 16:00:47'),
(218, 'Department of Botany', NULL, 9, 16, NULL, '2018-12-11 16:00:56', '2018-12-11 16:00:56'),
(219, 'Department of Zoology', NULL, 9, 16, NULL, '2018-12-11 16:01:23', '2018-12-11 16:01:23'),
(220, 'Department of Biochemistry and Molecular Biology', NULL, 9, 16, NULL, '2018-12-11 16:01:39', '2018-12-11 16:01:39'),
(221, 'Department of Biochemistry and Molecular Biology Department of Psychology', NULL, 9, 16, NULL, '2018-12-11 16:02:07', '2018-12-11 16:02:07'),
(223, 'Department of Biochemistry an Department of Fisheries Science', NULL, 9, 16, NULL, '2018-12-11 16:02:54', '2018-12-11 16:02:54'),
(224, 'Department of Medical Psychology', NULL, 9, 16, NULL, '2018-12-11 16:03:14', '2018-12-11 16:03:14'),
(225, 'Department of Educational Psychology', NULL, 9, 16, NULL, '2018-12-11 16:03:43', '2018-12-11 16:03:43'),
(226, 'Department of Genetic Engineering and Biotechnology', NULL, 9, 16, NULL, '2018-12-11 16:03:53', '2018-12-11 16:03:53'),
(227, 'Department of Applied Chemistry and Chemical Engineering', NULL, 9, 16, NULL, '2018-12-11 16:04:22', '2018-12-11 16:04:22'),
(228, 'Department of Applied Chemistry and Chemical Engineering Department of Nuclear Engineering', NULL, 9, 16, NULL, '2018-12-11 16:04:44', '2018-12-11 16:04:44'),
(229, 'Department of Nuclear Engineering', NULL, 9, 16, NULL, '2018-12-11 16:04:59', '2018-12-11 16:04:59'),
(230, 'Department of Robotics and Mechatronics', NULL, 9, 16, NULL, '2018-12-11 16:05:27', '2018-12-11 16:05:27'),
(231, 'Department of Drawing and Painting', NULL, 9, 16, NULL, '2018-12-11 16:06:01', '2018-12-11 16:06:01'),
(232, 'Department of Graphic Design', NULL, 9, 16, NULL, '2018-12-11 16:06:21', '2018-12-11 16:06:21'),
(233, 'Department of Printmaking', NULL, 9, 16, NULL, '2018-12-11 16:06:59', '2018-12-11 16:06:59'),
(234, 'Department of Oriental Art', NULL, 9, 16, NULL, '2018-12-11 16:07:13', '2018-12-11 16:07:13'),
(235, 'Department of Ceramics', NULL, 9, 16, NULL, '2018-12-11 16:07:31', '2018-12-11 16:07:31'),
(236, 'Department of Sculpture', NULL, 9, 16, NULL, '2018-12-11 16:07:51', '2018-12-11 16:07:51'),
(237, 'Department of Craft', NULL, 9, 16, NULL, '2018-12-11 16:08:11', '2018-12-11 16:08:11'),
(238, 'Department of History of Art', NULL, 9, 16, NULL, '2018-12-11 16:08:27', '2018-12-11 16:08:27'),
(239, 'Bachelor of physiotherapy (BPT)', NULL, 9, 16, NULL, '2018-12-11 16:08:50', '2018-12-11 16:08:50'),
(240, 'Department of Theoretical Physics', NULL, 9, 16, NULL, '2018-12-11 16:09:18', '2018-12-11 16:09:18'),
(241, 'Department of Applied Mathematics', NULL, 9, 16, NULL, '2018-12-11 16:09:34', '2018-12-11 16:09:34'),
(242, 'Department of Statistics', NULL, 9, 16, NULL, '2018-12-11 16:09:47', '2018-12-11 16:09:47'),
(243, 'Department of Theoretical and Computational Chemistry', NULL, 9, 16, NULL, '2018-12-11 16:09:59', '2018-12-11 16:09:59'),
(245, 'Department of Economics', NULL, 9, 16, NULL, '2018-12-11 16:11:01', '2018-12-11 16:11:01'),
(246, 'Department of Political Science', NULL, 9, 16, NULL, '2018-12-11 16:11:15', '2018-12-11 16:11:15'),
(247, 'Department of International Relations', NULL, 9, 16, NULL, '2018-12-11 16:11:31', '2018-12-11 16:11:31'),
(249, 'Department of Sociology', NULL, 9, 16, NULL, '2018-12-11 16:12:17', '2018-12-11 16:12:17'),
(250, 'Department of Public Administration', NULL, 9, 16, NULL, '2018-12-11 16:12:34', '2018-12-11 16:12:34'),
(251, 'Department of Mass Communication and Journalism', NULL, 9, 16, NULL, '2018-12-11 16:12:52', '2018-12-11 16:12:52'),
(252, 'Department of Printing and Publication Studies', NULL, 9, 16, NULL, '2018-12-11 16:14:20', '2018-12-11 16:14:20'),
(253, 'Department of Film and Television', NULL, 9, 16, NULL, '2018-12-11 16:14:37', '2018-12-11 16:14:37'),
(254, 'Department of geography and environment', NULL, 9, 16, NULL, '2018-12-11 16:14:50', '2018-12-11 16:14:50'),
(255, 'Department of Geology', NULL, 9, 16, NULL, '2018-12-11 16:15:03', '2018-12-11 16:15:03'),
(256, 'Department of oceanography', NULL, 9, 16, NULL, '2018-12-11 16:15:13', '2018-12-11 16:15:13'),
(257, 'Department of Disaster Science and Management', NULL, 9, 16, NULL, '2018-12-11 16:15:21', '2018-12-11 16:15:21'),
(258, 'Department of Disaster Science and Management Department of Meteorology', NULL, 9, 16, NULL, '2018-12-11 16:15:38', '2018-12-11 16:15:38'),
(259, 'Master of Accountancy', NULL, 9, 16, NULL, '2018-12-11 16:16:14', '2018-12-11 16:16:14'),
(260, 'Master of Advanced Study', NULL, 9, 16, NULL, '2018-12-11 16:16:25', '2018-12-11 16:16:25'),
(261, 'Master of Applied Finance', NULL, 9, 16, NULL, '2018-12-11 16:16:56', '2018-12-11 16:16:56'),
(262, 'Master of Applied Science', NULL, 9, 16, NULL, '2018-12-11 16:17:06', '2018-12-11 16:17:06'),
(263, 'Master of Architecture', NULL, 9, 16, NULL, '2018-12-11 16:17:18', '2018-12-11 16:17:18'),
(264, 'Master of Arts in Liberal Studies', NULL, 9, 16, NULL, '2018-12-11 16:21:13', '2018-12-11 16:21:13'),
(265, 'Master of Arts in Special Education', NULL, 9, 16, NULL, '2018-12-11 16:21:29', '2018-12-11 16:21:29'),
(266, 'Master of Arts in Teaching', NULL, 9, 16, NULL, '2018-12-11 16:21:58', '2018-12-11 16:21:58'),
(267, 'Master of Bioethics', NULL, 9, 16, NULL, '2018-12-11 16:22:37', '2018-12-11 16:22:37'),
(268, 'Master of Business Administration', NULL, 9, 16, NULL, '2018-12-11 16:22:49', '2018-12-11 16:22:49'),
(269, 'Master of Business, Entrepreneurship and Technology', NULL, 9, 16, NULL, '2018-12-11 16:23:05', '2018-12-11 16:23:05'),
(270, 'Master of Business Engineering', NULL, 9, 16, NULL, '2018-12-11 16:23:21', '2018-12-11 16:23:21'),
(271, 'Master of Business Information', NULL, 9, 16, NULL, '2018-12-11 16:24:00', '2018-12-11 16:24:00'),
(272, 'Master of Chemistry', NULL, 9, 16, NULL, '2018-12-11 16:24:17', '2018-12-11 16:24:17'),
(273, 'Master of City Planning', NULL, 9, 16, NULL, '2018-12-11 16:24:34', '2018-12-11 16:24:34'),
(274, 'Master of Commerce', NULL, 9, 16, NULL, '2018-12-11 16:24:45', '2018-12-11 16:24:45'),
(275, 'Master of Computational Finance', NULL, 9, 16, NULL, '2018-12-11 16:24:56', '2018-12-11 16:24:56'),
(276, 'Master of Computer Applications', NULL, 9, 16, NULL, '2018-12-11 16:25:07', '2018-12-11 16:25:07'),
(277, 'Master of Counselling', NULL, 9, 16, NULL, '2018-12-11 16:25:55', '2018-12-11 16:25:55'),
(278, 'Master of Criminal Justice', NULL, 9, 16, NULL, '2018-12-11 16:26:16', '2018-12-11 16:26:16'),
(279, 'Master of Criminal Justice', NULL, 9, 16, NULL, '2018-12-11 16:27:46', '2018-12-11 16:27:46'),
(280, 'Master in Creative Technologies', NULL, 9, 16, NULL, '2018-12-11 16:29:39', '2018-12-11 16:29:39'),
(281, 'Master in Data Science', NULL, 9, 16, NULL, '2018-12-11 16:29:52', '2018-12-11 16:29:52'),
(282, 'Master of Defense Studies', NULL, 9, 16, NULL, '2018-12-11 16:30:09', '2018-12-11 16:30:09'),
(283, 'Master of Design', NULL, 9, 16, NULL, '2018-12-11 16:30:39', '2018-12-11 16:30:39'),
(284, 'Master of Divinity', NULL, 9, 16, NULL, '2018-12-11 16:32:09', '2018-12-11 16:32:09'),
(285, 'Master of Economics', NULL, 9, 16, NULL, '2018-12-11 16:32:21', '2018-12-11 16:32:21'),
(286, 'Master of Education', NULL, 9, 16, NULL, '2018-12-11 16:32:31', '2018-12-11 16:32:31'),
(287, 'Master of Engineering', NULL, 9, 16, NULL, '2018-12-11 16:32:41', '2018-12-11 16:32:41'),
(288, 'Master of Engineering Management', NULL, 9, 16, NULL, '2018-12-11 16:33:02', '2018-12-11 16:33:02'),
(289, 'Master of Enterprise', NULL, 9, 16, NULL, '2018-12-11 16:33:40', '2018-12-11 16:33:40'),
(290, 'Master of European Law', NULL, 9, 16, NULL, '2018-12-11 16:33:50', '2018-12-11 16:33:50'),
(291, 'Master of European Law', NULL, 9, 16, NULL, '2018-12-11 16:34:08', '2018-12-11 16:34:08'),
(292, 'Master of Finance', NULL, 9, 16, NULL, '2018-12-11 16:37:50', '2018-12-11 16:37:50'),
(293, 'Master of Financial Economics', NULL, 9, 16, NULL, '2018-12-11 16:38:01', '2018-12-11 16:38:01'),
(294, 'Master of Financial Engineering', NULL, 9, 16, NULL, '2018-12-11 16:38:11', '2018-12-11 16:38:11'),
(295, 'Master of Fine Arts', NULL, 9, 16, NULL, '2018-12-11 16:38:40', '2018-12-11 16:38:40'),
(297, 'Master of Health Administration', NULL, 9, 16, NULL, '2018-12-11 16:39:08', '2018-12-11 16:39:08'),
(298, 'Master of Health Science', NULL, 9, 16, NULL, '2018-12-11 16:39:44', '2018-12-11 16:39:44'),
(299, 'Master of Humanities', NULL, 9, 16, NULL, '2018-12-11 16:40:14', '2018-12-11 16:40:14'),
(300, 'Master of Industrial and Labor Relations', NULL, 9, 16, NULL, '2018-12-11 16:40:31', '2018-12-11 16:40:31'),
(301, 'Master of International Business', NULL, 9, 16, NULL, '2018-12-11 16:49:05', '2018-12-11 16:49:05'),
(302, 'Masters in International Economics', NULL, 9, 16, NULL, '2018-12-11 16:49:25', '2018-12-11 16:49:25'),
(303, 'Master of International Studies', NULL, 9, 16, NULL, '2018-12-11 16:49:38', '2018-12-11 16:49:38'),
(304, 'Master of Information Management', NULL, 9, 16, NULL, '2018-12-11 16:49:50', '2018-12-11 16:49:50'),
(305, 'Master of Jurisprudence', NULL, 9, 16, NULL, '2018-12-11 16:50:35', '2018-12-11 16:50:35'),
(306, 'Master of Laws', NULL, 9, 16, 16, '2018-12-11 16:50:43', '2018-12-13 18:09:08'),
(307, 'Master of Mass Communication', NULL, 9, 16, NULL, '2018-12-11 16:51:29', '2018-12-11 16:51:29'),
(308, 'Master of Studies in Law', NULL, 9, 16, NULL, '2018-12-11 16:51:40', '2018-12-11 16:51:40'),
(309, 'Master of Landscape Architecture', NULL, 9, 16, NULL, '2018-12-11 16:51:52', '2018-12-11 16:51:52'),
(310, 'Master of Letters', NULL, 9, 16, NULL, '2018-12-11 16:52:07', '2018-12-11 16:52:07'),
(311, 'Master of Liberal Arts', NULL, 9, 16, NULL, '2018-12-11 16:52:27', '2018-12-11 16:52:27'),
(312, 'Master of Library and Information Science', NULL, 9, 16, NULL, '2018-12-11 16:53:25', '2018-12-11 16:53:25'),
(313, 'Master of Management', NULL, 9, 16, NULL, '2018-12-11 16:53:37', '2018-12-11 16:53:37'),
(315, 'Master of Mathematical Finance', NULL, 9, 16, NULL, '2018-12-11 16:54:29', '2018-12-11 16:54:29'),
(316, 'Master of Medical Science', NULL, 9, 16, NULL, '2018-12-11 16:54:56', '2018-12-11 16:54:56'),
(317, 'Master of Medicine', NULL, 9, 16, NULL, '2018-12-11 16:55:06', '2018-12-11 16:55:06'),
(318, 'Masters of Military Art and Science', NULL, 9, 16, NULL, '2018-12-11 16:55:17', '2018-12-11 16:55:17'),
(319, 'Master of Music', NULL, 9, 16, NULL, '2018-12-11 16:55:31', '2018-12-11 16:55:31'),
(320, 'Master of Occupational Behavior and Development', NULL, 9, 16, NULL, '2018-12-11 16:55:51', '2018-12-11 16:55:51'),
(323, 'Master of Occupational Therapy', NULL, 9, 16, NULL, '2018-12-11 16:56:53', '2018-12-11 16:56:53'),
(324, 'Master of Pharmacy', NULL, 9, 16, NULL, '2018-12-11 16:57:03', '2018-12-11 16:57:03'),
(325, 'Master of Philosophy', NULL, 9, 16, NULL, '2018-12-11 16:57:12', '2018-12-11 16:57:12'),
(326, 'Master of Physician Assistant Studies', NULL, 9, 16, NULL, '2018-12-11 16:57:25', '2018-12-11 16:57:25'),
(327, 'Master of Physics', NULL, 9, 16, NULL, '2018-12-11 16:57:38', '2018-12-11 16:57:38'),
(328, 'Master of Political Science', NULL, 9, 16, NULL, '2018-12-11 16:57:48', '2018-12-11 16:57:48'),
(329, 'Master of Professional Studies', NULL, 9, 16, NULL, '2018-12-11 16:57:57', '2018-12-11 16:57:57'),
(330, 'Master of Psychology', NULL, 9, 16, NULL, '2018-12-11 16:58:08', '2018-12-11 16:58:08'),
(331, 'Master of Public Administration', NULL, 9, 16, NULL, '2018-12-11 16:58:17', '2018-12-11 16:58:17'),
(332, 'Master of Public Affairs', NULL, 9, 16, NULL, '2018-12-11 16:58:27', '2018-12-11 16:58:27'),
(333, 'Master of Public Health', NULL, 9, 16, NULL, '2018-12-11 16:58:36', '2018-12-11 16:58:36'),
(334, 'Master of Public Management', NULL, 9, 16, NULL, '2018-12-11 16:58:44', '2018-12-11 16:58:44'),
(335, 'Master of Public Policy', NULL, 9, 16, NULL, '2018-12-11 16:58:53', '2018-12-11 16:58:53'),
(336, 'Master of Public Relations', NULL, 9, 16, NULL, '2018-12-11 16:59:03', '2018-12-11 16:59:03'),
(337, 'Master of Social Work', NULL, 9, 16, NULL, '2018-12-11 16:59:15', '2018-12-11 16:59:15'),
(338, 'Master of Public Service', NULL, 9, 16, NULL, '2018-12-11 16:59:30', '2018-12-11 16:59:30'),
(339, 'Master of Quantitative Finance', NULL, 9, 16, NULL, '2018-12-11 16:59:42', '2018-12-11 16:59:42'),
(340, 'Master of Rabbinic Studies', NULL, 9, 16, NULL, '2018-12-11 16:59:53', '2018-12-11 16:59:53'),
(341, 'Master of Real Estate Development', NULL, 9, 16, NULL, '2018-12-11 17:00:01', '2018-12-11 17:00:01'),
(343, 'Master of Religious Education', NULL, 9, 16, NULL, '2018-12-11 17:00:29', '2018-12-11 17:00:29'),
(344, 'Master of Research', NULL, 9, 16, NULL, '2018-12-11 17:00:53', '2018-12-11 17:00:53'),
(345, 'Master of Sacred Music', NULL, 9, 16, NULL, '2018-12-11 17:01:05', '2018-12-11 17:01:05'),
(346, 'Master of Sacred Theology', NULL, 9, 16, NULL, '2018-12-11 17:01:19', '2018-12-11 17:01:19'),
(347, 'Master of Science', NULL, 9, 16, NULL, '2018-12-11 17:01:28', '2018-12-11 17:01:28'),
(349, 'Master of Science in Administration', NULL, 9, 16, 16, '2018-12-11 17:01:58', '2018-12-13 18:08:54'),
(350, 'Master of Science in Computer Science', NULL, 9, 16, NULL, '2018-12-11 17:02:15', '2018-12-11 17:02:15'),
(351, 'Master of Science in Counselling', NULL, 9, 16, NULL, '2018-12-11 17:02:33', '2018-12-11 17:02:33'),
(352, 'Master of Science in Cyber Security', NULL, 9, 16, NULL, '2018-12-11 17:03:30', '2018-12-11 17:03:30'),
(353, 'Master of Science in Engineering', NULL, 9, 16, NULL, '2018-12-11 17:03:42', '2018-12-11 17:03:42'),
(354, 'Master of Science in Development Administration', NULL, 9, 16, 16, '2018-12-11 17:03:53', '2018-12-13 18:08:44'),
(355, 'Master of Science in Financeation', NULL, 9, 16, NULL, '2018-12-11 17:04:13', '2018-12-11 17:04:13'),
(356, 'Master of Science in Health Information', NULL, 9, 16, NULL, '2018-12-11 17:04:33', '2018-12-11 17:04:33'),
(357, 'Master of Science in Human Resource Development', NULL, 9, 16, 16, '2018-12-11 17:04:45', '2018-12-13 18:08:37'),
(358, 'Master of Science in Information Assurance', NULL, 9, 16, NULL, '2018-12-11 17:05:18', '2018-12-11 17:05:18'),
(359, 'Master of Science in Information Systems', NULL, 9, 16, 16, '2018-12-11 17:07:53', '2018-12-13 18:08:30'),
(360, 'Master of Science in Information Technology', NULL, 9, 16, NULL, '2018-12-11 17:08:38', '2018-12-11 17:08:38'),
(361, 'Master of Science in Leadership', NULL, 9, 16, NULL, '2018-12-11 17:08:58', '2018-12-11 17:08:58'),
(362, 'Master of Science in Management', NULL, 9, 16, NULL, '2018-12-11 17:09:35', '2018-12-11 17:09:35'),
(363, 'Master of Science in Nursing', NULL, 9, 16, NULL, '2018-12-11 17:09:56', '2018-12-11 17:09:56'),
(364, 'Master of Science in Project Management', NULL, 9, 16, NULL, '2018-12-11 17:10:09', '2018-12-11 17:10:09'),
(366, 'Master of Science in Supply Chain Management', NULL, 9, 16, NULL, '2018-12-11 17:10:39', '2018-12-11 17:10:39'),
(367, 'Master of Science in Teaching', NULL, 9, 16, NULL, '2018-12-11 17:11:00', '2018-12-11 17:11:00'),
(368, 'Master of Science in Taxation', NULL, 9, 16, NULL, '2018-12-11 17:13:22', '2018-12-11 17:13:22'),
(369, 'Master of Social Science', NULL, 9, 16, NULL, '2018-12-11 17:13:34', '2018-12-11 17:13:34'),
(370, 'Master of Social Work', NULL, 9, 16, NULL, '2018-12-11 17:13:45', '2018-12-11 17:13:45'),
(371, 'Master of Studies', NULL, 9, 16, NULL, '2018-12-11 17:13:54', '2018-12-11 17:13:54'),
(372, 'Master of Surgery', NULL, 9, 16, NULL, '2018-12-11 17:14:03', '2018-12-11 17:14:03'),
(373, 'Master of Theological Studies', NULL, 9, 16, NULL, '2018-12-11 17:14:14', '2018-12-11 17:14:14'),
(374, 'Master of Technology', NULL, 9, 16, NULL, '2018-12-11 17:14:25', '2018-12-11 17:14:25'),
(375, 'Master of Theology', NULL, 9, 16, NULL, '2018-12-11 17:14:34', '2018-12-11 17:14:34'),
(376, 'Master of Urban Planning', NULL, 9, 16, NULL, '2018-12-11 17:14:42', '2018-12-11 17:14:42'),
(377, 'Master of Veterinary Science', NULL, 9, 16, NULL, '2018-12-11 17:14:54', '2018-12-11 17:14:54'),
(378, 'Master of Worship studies', NULL, 9, 16, NULL, '2018-12-11 17:15:06', '2018-12-11 17:15:06'),
(379, 'Master of Water security', NULL, 9, 16, NULL, '2018-12-11 17:15:47', '2018-12-11 17:15:47'),
(380, 'Department of Urban and Regional Planning (URP)', NULL, 9, 16, 16, '2018-12-11 17:16:15', '2018-12-13 18:08:18'),
(381, 'Department of Humanities (Hum)', NULL, 9, 16, 16, '2018-12-11 17:16:28', '2018-12-13 18:08:10'),
(382, 'Department of Water Resources Engineering (WRE)', NULL, 9, 16, 16, '2018-12-11 17:16:49', '2018-12-13 18:07:43'),
(383, 'Department of Biomedical Engineering (BME)', NULL, 9, 16, 16, '2018-12-11 17:17:13', '2018-12-13 18:07:30'),
(384, 'Department of Mechanical Engineering (ME)', NULL, 9, 16, 16, '2018-12-11 17:17:25', '2018-12-13 18:07:21'),
(385, 'Department of Naval Architecture and Marine Engineering (NAME)', NULL, 9, 16, 16, '2018-12-11 17:17:53', '2018-12-13 18:07:11'),
(386, 'Department of Chemical Engineering (ChE)', NULL, 9, 16, 16, '2018-12-11 17:18:11', '2018-12-13 18:06:48'),
(387, 'Department of Materials and Metallurgical Engineering (MME)', NULL, 9, 16, 16, '2018-12-11 17:18:24', '2018-12-13 18:06:41'),
(388, 'Department of Chemistry (Chem)', NULL, 9, 16, 16, '2018-12-11 17:18:35', '2018-12-13 18:06:33'),
(389, 'Department of Petroleum and Mineral Resources Engineering (PMRE)', NULL, 9, 16, 16, '2018-12-11 17:19:01', '2018-12-13 18:06:25'),
(390, 'Department of Glass and Ceramic Engineering (GCE)', NULL, 9, 16, 16, '2018-12-11 17:19:21', '2018-12-13 18:06:10'),
(391, 'Institute of Water and Flood Management (IWFM)', NULL, 9, 16, 16, '2018-12-11 17:19:31', '2018-12-13 18:05:54'),
(392, 'Institute of Appropriate Technology (IAT)', NULL, 9, 16, 16, '2018-12-11 17:19:45', '2018-12-13 18:05:42'),
(393, 'Institute of Information and Communication Technology (IICT)', NULL, 9, 16, 16, '2018-12-11 17:19:55', '2018-12-13 18:05:09'),
(394, 'Accident Research Institute (ARI)', NULL, 9, 16, 16, '2018-12-11 17:20:07', '2018-12-13 18:05:02'),
(395, 'BUET-Japan Institute of Disaster Prevention and Urban Safety (BUET-JIDPUS)', NULL, 9, 16, 16, '2018-12-11 17:20:18', '2018-12-13 18:04:51'),
(396, 'Institute of Nuclear Power Engineering (INPE)', NULL, 9, 16, 16, '2018-12-11 17:20:30', '2018-12-13 18:04:42'),
(397, 'Center for Energy Studies (CES)', NULL, 9, 16, 16, '2018-12-11 17:20:46', '2018-12-13 18:04:30'),
(398, 'Centre for Environmental and Resource Management (CERM)', NULL, 9, 16, 16, '2018-12-11 17:20:58', '2018-12-13 18:04:22'),
(399, 'Biomedical Engineering Centre (BEC)', NULL, 9, 16, 16, '2018-12-11 17:21:18', '2018-12-13 18:04:07'),
(400, 'Bureau of Research, Testing and Consultation (BRTC)', NULL, 9, 16, 16, '2018-12-11 17:21:31', '2018-12-13 17:54:54'),
(401, 'International Training Network Centre (ITN)', NULL, 9, 16, 16, '2018-12-11 17:21:42', '2018-12-13 17:54:45'),
(402, 'Bangladesh Network Office for Urban Safety (BNUS)', NULL, 9, 16, 16, '2018-12-11 17:21:51', '2018-12-13 17:54:36'),
(403, 'Directorate of Advisory, Extension and Research Services (DAERS)', NULL, 9, 16, 16, '2018-12-11 17:22:11', '2018-12-13 17:54:28'),
(404, 'Directorate of Students??? Welfare (DSW)', NULL, 9, 16, 16, '2018-12-11 17:22:22', '2018-12-13 17:54:20'),
(405, 'Directorate of Planning and Development (P&D)', NULL, 9, 16, 16, '2018-12-11 17:22:38', '2018-12-13 17:54:10'),
(406, 'Directorate of Continuing Education (DCE)', NULL, 9, 16, 16, '2018-12-11 17:22:48', '2018-12-13 17:54:02'),
(407, 'Journal of Mechanical Engineering Research and Developments', NULL, 9, 16, 16, '2018-12-11 17:22:59', '2018-12-13 17:24:39'),
(408, 'Chemical Engineering Research Bulletin', NULL, 9, 16, 16, '2018-12-11 17:23:09', '2018-12-13 17:24:17'),
(409, 'Bangladesh Journal of Water Resources Research', NULL, 9, 16, 16, '2018-12-11 17:23:19', '2018-12-13 17:24:28'),
(410, 'Electrical and Electronic Engineering Research Bulletin', NULL, 9, 16, 16, '2018-12-11 17:23:45', '2018-12-13 17:24:07'),
(411, 'Protibesh (Research Journal on Architecture)', NULL, 9, 16, 16, '2018-12-11 17:24:08', '2018-12-13 17:23:54'),
(412, 'BBA Professional', NULL, 9, 16, NULL, '2018-12-11 17:24:47', '2018-12-11 17:24:47'),
(413, 'Philosophy, Politics and Economics     Tourism', NULL, 9, 16, NULL, '2018-12-11 17:32:32', '2018-12-11 17:32:32'),
(414, 'Industrialists', NULL, 10, 16, NULL, '2018-12-11 18:17:04', '2018-12-11 18:17:04'),
(415, 'Male Police officer', NULL, 10, 16, NULL, '2018-12-11 18:17:42', '2018-12-11 18:17:42'),
(416, 'Female Police officer', NULL, 10, 16, NULL, '2018-12-11 18:18:06', '2018-12-11 18:18:06'),
(418, 'Businessmen', NULL, 10, 16, NULL, '2018-12-11 18:20:43', '2018-12-11 18:20:43'),
(419, 'Professor', NULL, 10, 16, NULL, '2018-12-11 18:23:09', '2018-12-11 18:23:09'),
(420, 'Lecturer', NULL, 10, 16, NULL, '2018-12-11 18:25:51', '2018-12-11 18:25:51'),
(421, 'Citizen', NULL, 10, 16, NULL, '2018-12-11 18:26:26', '2018-12-11 18:26:26'),
(422, 'BCS (Foreign Affairs): Assistant Secretary (Former Section Officer)', NULL, 10, 16, 16, '2018-12-11 18:31:01', '2018-12-11 18:38:47'),
(423, 'BCS (Foreign Affairs): Assistant Secretary (Former Section Officer)', NULL, 10, 16, NULL, '2018-12-11 18:32:25', '2018-12-11 18:32:25'),
(424, 'BCS (Foreign Affairs): Assistant Secretary (Former Section Officer)', NULL, 10, 16, NULL, '2018-12-11 18:33:02', '2018-12-11 18:33:02'),
(425, 'BCS (Taxation): Assistant Commissioner of Taxes', NULL, 10, 16, NULL, '2018-12-11 18:33:32', '2018-12-11 18:33:32'),
(426, 'BCS (Police): Assistant Superintendent of Police', NULL, 10, 16, NULL, '2018-12-11 18:33:58', '2018-12-11 18:33:58'),
(427, 'BCS (Audit & Accounts): Assistant Accountant General', NULL, 10, 16, NULL, '2018-12-11 18:34:29', '2018-12-11 18:34:29'),
(428, 'BCS (Customs & Excise): Assistant Commissioner of customs', NULL, 10, 16, NULL, '2018-12-11 18:34:52', '2018-12-11 18:34:52'),
(429, 'BCS (Cooperatives): Assistant Registrar', NULL, 10, 16, NULL, '2018-12-11 18:35:26', '2018-12-11 18:35:26'),
(430, 'BCS (Economic): Assistant Chief', NULL, 10, 16, NULL, '2018-12-11 18:36:05', '2018-12-11 18:36:05'),
(431, 'BCS (Food),General: Assistant Controller of Food / Equivalent Posts', NULL, 10, 16, NULL, '2018-12-11 18:36:22', '2018-12-11 18:36:22'),
(432, 'BCS (Information): Information Officer / Equivalent Posts', NULL, 10, 16, NULL, '2018-12-11 18:36:58', '2018-12-11 18:36:58'),
(433, 'Bangladesh Air Force', NULL, 10, 16, NULL, '2018-12-11 19:26:46', '2018-12-11 19:26:46'),
(434, 'Bangladesh Navy', NULL, 10, 16, NULL, '2018-12-11 19:27:08', '2018-12-11 19:27:08'),
(435, 'Bangladesh Army', NULL, 10, 16, NULL, '2018-12-11 19:27:19', '2018-12-11 19:27:19'),
(436, 'Bangladesh Armed Forces', NULL, 10, 16, NULL, '2018-12-11 19:29:40', '2018-12-11 19:29:40'),
(437, 'Ministry of Defense (Bangladesh)', NULL, 10, 16, NULL, '2018-12-11 19:41:35', '2018-12-11 19:41:35'),
(438, 'Ministry of Health (Bangladesh)', NULL, 10, 16, NULL, '2018-12-11 19:43:17', '2018-12-11 19:43:17'),
(439, 'Ministry of Education (Bangladesh)', NULL, 10, 16, NULL, '2018-12-11 19:45:48', '2018-12-11 19:45:48'),
(440, 'Ministry of Surveying (Bangladesh)', NULL, 10, 16, NULL, '2018-12-11 19:47:37', '2018-12-11 19:47:37'),
(441, 'Ministry of Secondary Education(Bangladesh)', NULL, 10, 16, NULL, '2018-12-11 19:48:45', '2018-12-11 19:48:45'),
(442, 'Ministry of Science (Bangladesh)', NULL, 10, 16, NULL, '2018-12-11 19:50:01', '2018-12-11 19:50:01'),
(443, 'Ministry of shipping bangladesh', NULL, 10, 16, NULL, '2018-12-11 20:00:05', '2018-12-11 20:00:05'),
(444, 'Ministry of labour', NULL, 10, 16, NULL, '2018-12-11 21:27:17', '2018-12-11 21:27:17'),
(445, 'Running Student', NULL, 10, 16, NULL, '2018-12-13 18:41:53', '2018-12-13 18:41:53'),
(446, 'BCS Non-Cadre', NULL, 10, 16, NULL, '2018-12-13 18:43:02', '2018-12-13 18:43:02'),
(447, 'Brahmin', NULL, 4, 1, NULL, '2018-12-18 03:41:31', '2018-12-18 03:41:31'),
(448, 'Khatri', NULL, 4, 1, NULL, '2018-12-18 03:42:27', '2018-12-18 03:42:27'),
(449, 'Baidya', NULL, 4, 1, NULL, '2018-12-18 03:43:17', '2018-12-18 03:43:17'),
(450, 'Catholic', NULL, 4, 1, NULL, '2018-12-18 03:43:48', '2018-12-18 03:43:48'),
(451, 'Roman Catholic', NULL, 4, 1, NULL, '2018-12-18 03:44:28', '2018-12-18 03:44:28'),
(452, 'Brown', NULL, 8, 16, NULL, '2019-01-23 16:35:37', '2019-01-23 16:35:37'),
(453, 'Ten', NULL, 8, 16, NULL, '2019-01-23 16:39:20', '2019-01-23 16:39:20'),
(454, 'Computer science Engineering', NULL, 9, 16, NULL, '2019-02-05 17:05:43', '2019-02-05 17:05:43'),
(458, 'Industrial', NULL, 14, 16, 1, '2019-02-05 17:24:07', '2021-02-14 23:53:02'),
(459, 'Elite Family', NULL, 14, 16, 1, '2019-02-05 17:24:49', '2021-02-14 23:53:11'),
(460, 'Higher Middle Class', NULL, 14, 16, 1, '2019-02-05 17:25:03', '2021-02-14 23:53:17'),
(464, 'Doctor', NULL, 12, 1, NULL, '2019-03-18 20:36:06', '2019-03-18 20:36:06'),
(465, 'Engineer', NULL, 12, 1, NULL, '2019-03-18 20:36:14', '2019-03-18 20:36:14'),
(466, 'Housewife', NULL, 13, 1, NULL, '2019-03-18 20:36:27', '2019-03-18 20:36:27'),
(467, 'Doctor', NULL, 13, 1, NULL, '2019-03-18 20:36:36', '2019-03-18 20:36:36'),
(473, 'Businessman', NULL, 12, 16, NULL, '2021-02-14 00:06:13', '2021-02-14 00:06:13'),
(474, 'Middle Class', NULL, 14, 1, NULL, '2021-02-14 23:53:44', '2021-02-14 23:53:44'),
(476, 'Politician', NULL, 12, 16, NULL, '2021-02-20 23:51:41', '2021-02-20 23:51:41'),
(477, 'Industrialist', NULL, 12, 16, NULL, '2021-02-20 23:51:55', '2021-02-20 23:51:55'),
(478, 'Others', NULL, 12, 16, NULL, '2021-02-20 23:52:36', '2021-02-20 23:52:36'),
(479, 'Medical Student', NULL, 9, 16, NULL, '2021-03-10 22:12:31', '2021-03-10 22:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_visitors`
--

CREATE TABLE `user_visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `visitor_id` int(10) UNSIGNED NOT NULL,
  `visits` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_visitors`
--

INSERT INTO `user_visitors` (`id`, `user_id`, `visitor_id`, `visits`, `created_at`, `updated_at`) VALUES
(1, 10, 15, 1, '2018-12-04 18:45:55', '2018-12-04 18:45:55'),
(2, 1, 15, 3, '2018-12-04 18:47:42', '2018-12-04 18:48:35'),
(3, 10, 17, 1, '2018-12-10 02:04:12', '2018-12-10 02:04:12'),
(4, 13, 17, 1, '2018-12-10 02:06:39', '2018-12-10 02:06:39'),
(5, 21, 24, 2, '2019-01-14 01:37:37', '2019-01-14 01:37:42'),
(6, 21, 29, 1, '2019-01-24 19:49:43', '2019-01-24 19:49:43'),
(7, 13, 34, 2, '2019-02-02 18:39:21', '2019-02-02 18:40:11'),
(8, 26, 37, 5, '2019-02-07 03:49:02', '2019-04-14 03:53:59'),
(9, 21, 37, 2, '2019-02-07 03:51:57', '2019-02-17 01:49:55'),
(10, 26, 45, 1, '2019-02-18 16:45:23', '2019-02-18 16:45:23'),
(11, 26, 48, 1, '2019-02-23 17:41:10', '2019-02-23 17:41:10'),
(12, 47, 49, 1, '2019-02-25 18:36:10', '2019-02-25 18:36:10'),
(13, 26, 50, 1, '2019-02-27 21:51:30', '2019-02-27 21:51:30'),
(14, 47, 50, 1, '2019-02-27 21:52:42', '2019-02-27 21:52:42'),
(15, 47, 51, 1, '2019-03-09 02:41:27', '2019-03-09 02:41:27'),
(16, 43, 51, 1, '2019-03-09 02:42:35', '2019-03-09 02:42:35'),
(17, 26, 51, 1, '2019-03-09 02:43:10', '2019-03-09 02:43:10'),
(18, 13, 51, 1, '2019-03-09 02:44:19', '2019-03-09 02:44:19'),
(19, 21, 51, 1, '2019-03-09 02:45:28', '2019-03-09 02:45:28'),
(20, 10, 51, 1, '2019-03-09 02:45:32', '2019-03-09 02:45:32'),
(21, 47, 2, 1, '2019-03-17 10:29:17', '2019-03-17 10:29:17'),
(22, 53, 4, 2, '2019-03-19 16:51:02', '2019-03-19 17:11:53'),
(23, 40, 55, 2, '2019-03-22 17:35:56', '2019-03-22 17:40:13'),
(24, 44, 55, 1, '2019-03-22 17:41:43', '2019-03-22 17:41:43'),
(25, 10, 56, 4, '2019-03-23 05:19:50', '2019-03-23 05:30:54'),
(26, 13, 56, 2, '2019-03-23 05:28:10', '2019-03-23 05:35:16'),
(27, 21, 56, 1, '2019-03-23 05:31:47', '2019-03-23 05:31:47'),
(28, 56, 55, 1, '2019-03-28 01:16:12', '2019-03-28 01:16:12'),
(29, 54, 55, 1, '2019-03-28 01:16:38', '2019-03-28 01:16:38'),
(30, 58, 61, 3, '2019-04-01 16:01:09', '2020-03-27 01:31:39'),
(31, 47, 62, 1, '2019-04-02 14:35:47', '2019-04-02 14:35:47'),
(32, 58, 64, 1, '2019-04-07 14:57:15', '2019-04-07 14:57:15'),
(33, 13, 64, 1, '2019-04-07 15:00:20', '2019-04-07 15:00:20'),
(34, 55, 65, 1, '2019-04-08 18:14:15', '2019-04-08 18:14:15'),
(35, 13, 65, 1, '2019-04-08 18:16:46', '2019-04-08 18:16:46'),
(36, 13, 60, 1, '2019-04-25 23:47:38', '2019-04-25 23:47:38'),
(37, 69, 74, 2, '2019-04-30 06:43:54', '2019-04-30 07:00:21'),
(38, 58, 74, 2, '2019-04-30 06:45:35', '2019-04-30 06:59:39'),
(39, 47, 74, 1, '2019-04-30 06:57:22', '2019-04-30 06:57:22'),
(40, 26, 74, 1, '2019-04-30 06:58:23', '2019-04-30 06:58:23'),
(41, 75, 82, 8, '2019-05-11 21:33:17', '2019-05-12 17:37:25'),
(42, 47, 82, 1, '2019-05-12 17:32:42', '2019-05-12 17:32:42'),
(43, 47, 61, 1, '2019-05-17 17:21:39', '2019-05-17 17:21:39'),
(44, 85, 86, 1, '2019-05-26 03:21:19', '2019-05-26 03:21:19'),
(45, 85, 88, 2, '2019-06-10 08:20:02', '2019-06-10 08:20:17'),
(46, 84, 88, 1, '2019-06-10 08:20:41', '2019-06-10 08:20:41'),
(47, 85, 37, 2, '2019-06-11 04:10:28', '2019-06-11 04:10:35'),
(48, 84, 89, 1, '2019-06-11 07:11:38', '2019-06-11 07:11:38'),
(49, 85, 57, 3, '2019-06-14 06:59:37', '2019-08-27 06:17:32'),
(50, 91, 92, 6, '2019-06-16 22:06:20', '2019-06-16 22:10:47'),
(51, 85, 92, 2, '2019-06-16 22:07:40', '2019-06-16 22:07:41'),
(52, 91, 89, 1, '2019-06-21 05:17:41', '2019-06-21 05:17:41'),
(53, 94, 74, 1, '2019-06-27 04:59:21', '2019-06-27 04:59:21'),
(54, 91, 74, 1, '2019-06-27 05:00:49', '2019-06-27 05:00:49'),
(55, 95, 74, 1, '2019-06-27 05:01:44', '2019-06-27 05:01:44'),
(56, 85, 99, 1, '2019-07-07 20:46:51', '2019-07-07 20:46:51'),
(57, 85, 93, 3, '2019-07-13 18:34:29', '2019-07-13 18:36:13'),
(58, 94, 102, 6, '2019-07-14 10:03:41', '2019-07-14 10:04:58'),
(59, 101, 102, 4, '2019-07-14 10:04:20', '2019-07-14 10:04:38'),
(60, 25, 101, 1, '2019-07-17 01:52:47', '2019-07-17 01:52:47'),
(61, 105, 106, 1, '2019-07-23 16:25:00', '2019-07-23 16:25:00'),
(62, 101, 106, 1, '2019-07-23 16:29:28', '2019-07-23 16:29:28'),
(63, 105, 107, 1, '2019-07-23 23:39:19', '2019-07-23 23:39:19'),
(64, 103, 107, 1, '2019-07-23 23:42:47', '2019-07-23 23:42:47'),
(65, 101, 107, 1, '2019-07-23 23:43:53', '2019-07-23 23:43:53'),
(66, 105, 108, 2, '2019-07-29 01:09:55', '2019-07-29 01:10:43'),
(67, 103, 108, 1, '2019-07-29 01:11:16', '2019-07-29 01:11:16'),
(68, 101, 108, 1, '2019-07-29 01:11:53', '2019-07-29 01:11:53'),
(69, 103, 109, 1, '2019-07-30 06:17:36', '2019-07-30 06:17:36'),
(70, 105, 110, 4, '2019-08-04 18:19:55', '2019-08-04 18:22:31'),
(71, 112, 116, 1, '2019-08-07 18:02:10', '2019-08-07 18:02:10'),
(72, 26, 118, 6, '2019-08-10 20:26:34', '2019-08-10 20:28:53'),
(73, 85, 119, 2, '2019-08-13 07:13:16', '2019-12-07 05:25:30'),
(74, 26, 119, 1, '2019-08-13 07:13:47', '2019-08-13 07:13:47'),
(75, 105, 120, 2, '2019-08-14 23:19:17', '2019-08-14 23:19:31'),
(76, 112, 118, 1, '2019-08-15 22:10:02', '2019-08-15 22:10:02'),
(77, 115, 118, 5, '2019-08-16 14:40:02', '2019-08-21 23:29:33'),
(78, 90, 118, 1, '2019-08-16 14:41:02', '2019-08-16 14:41:02'),
(79, 112, 123, 1, '2019-08-19 06:31:50', '2019-08-19 06:31:50'),
(80, 115, 108, 1, '2019-08-26 21:17:52', '2019-08-26 21:17:52'),
(81, 121, 124, 1, '2019-08-28 15:30:47', '2019-08-28 15:30:47'),
(82, 90, 124, 1, '2019-08-28 15:38:06', '2019-08-28 15:38:06'),
(83, 115, 124, 1, '2019-08-28 15:40:36', '2019-08-28 15:40:36'),
(84, 115, 126, 2, '2019-09-01 07:07:26', '2019-09-01 07:16:27'),
(85, 121, 126, 2, '2019-09-01 07:08:47', '2019-09-01 07:11:41'),
(86, 121, 127, 2, '2019-09-08 21:55:56', '2019-09-10 04:51:21'),
(87, 90, 127, 5, '2019-09-08 21:57:34', '2019-09-10 04:54:44'),
(88, 112, 127, 1, '2019-09-08 22:00:24', '2019-09-08 22:00:24'),
(89, 115, 131, 3, '2019-09-21 00:27:22', '2019-09-21 00:27:43'),
(90, 121, 132, 6, '2019-10-02 01:22:18', '2019-10-02 01:25:58'),
(91, 105, 132, 2, '2019-10-02 01:23:53', '2019-10-02 01:23:54'),
(92, 121, 107, 1, '2019-10-07 19:51:09', '2019-10-07 19:51:09'),
(93, 115, 107, 1, '2019-10-07 19:52:37', '2019-10-07 19:52:37'),
(94, 112, 107, 1, '2019-10-07 19:54:08', '2019-10-07 19:54:08'),
(95, 133, 136, 1, '2019-10-11 01:31:30', '2019-10-11 01:31:30'),
(96, 49, 136, 2, '2019-10-12 01:40:01', '2019-10-12 01:40:02'),
(97, 102, 136, 3, '2019-10-16 04:47:37', '2019-10-16 04:47:38'),
(98, 141, 147, 1, '2019-11-07 03:43:25', '2019-11-07 03:43:25'),
(99, 135, 147, 1, '2019-11-07 03:43:36', '2019-11-07 03:43:36'),
(100, 115, 147, 1, '2019-11-07 03:44:19', '2019-11-07 03:44:19'),
(101, 105, 148, 1, '2019-11-09 17:46:14', '2019-11-09 17:46:14'),
(102, 13, 148, 2, '2019-11-09 17:55:19', '2019-11-09 17:59:06'),
(103, 21, 148, 2, '2019-11-09 17:58:55', '2019-11-09 17:59:49'),
(104, 1, 152, 1, '2019-11-16 02:57:01', '2019-11-16 02:57:01'),
(105, 152, 153, 1, '2019-11-16 20:13:41', '2019-11-16 20:13:41'),
(106, 152, 156, 1, '2019-12-09 23:46:11', '2019-12-09 23:46:11'),
(107, 155, 156, 3, '2019-12-09 23:48:26', '2019-12-09 23:50:38'),
(108, 156, 158, 1, '2019-12-18 22:34:54', '2019-12-18 22:34:54'),
(109, 152, 159, 1, '2019-12-22 00:19:34', '2019-12-22 00:19:34'),
(110, 155, 159, 1, '2019-12-22 00:35:18', '2019-12-22 00:35:18'),
(111, 158, 159, 1, '2019-12-22 04:40:38', '2019-12-22 04:40:38'),
(112, 159, 160, 1, '2019-12-23 06:46:58', '2019-12-23 06:46:58'),
(113, 156, 160, 1, '2019-12-23 06:47:20', '2019-12-23 06:47:20'),
(114, 27, 160, 1, '2019-12-23 06:50:54', '2019-12-23 06:50:54'),
(115, 160, 162, 1, '2019-12-26 23:00:31', '2019-12-26 23:00:31'),
(116, 90, 163, 1, '2019-12-27 00:19:28', '2019-12-27 00:19:28'),
(117, 85, 163, 1, '2019-12-27 00:23:05', '2019-12-27 00:23:05'),
(118, 105, 161, 6, '2019-12-28 10:17:32', '2019-12-31 11:19:30'),
(119, 103, 161, 2, '2019-12-28 10:17:52', '2019-12-28 10:17:52'),
(120, 94, 161, 2, '2019-12-28 10:19:02', '2019-12-28 10:19:02'),
(121, 160, 161, 2, '2019-12-31 11:16:39', '2019-12-31 11:16:40'),
(122, 164, 160, 1, '2020-01-04 09:02:27', '2020-01-04 09:02:27'),
(123, 160, 166, 1, '2020-01-06 22:14:00', '2020-01-06 22:14:00'),
(124, 158, 166, 1, '2020-01-06 22:14:16', '2020-01-06 22:14:16'),
(125, 155, 166, 1, '2020-01-06 22:14:17', '2020-01-06 22:14:17'),
(126, 160, 164, 4, '2020-01-10 06:19:07', '2020-01-10 06:19:22'),
(127, 13, 170, 2, '2020-01-11 07:43:22', '2020-01-11 07:43:44'),
(128, 169, 172, 2, '2020-01-17 18:38:52', '2020-01-19 17:17:00'),
(129, 135, 172, 1, '2020-01-19 17:19:52', '2020-01-19 17:19:52'),
(130, 85, 172, 1, '2020-01-22 01:07:07', '2020-01-22 01:07:07'),
(131, 175, 180, 1, '2020-02-01 02:56:11', '2020-02-01 02:56:11'),
(132, 155, 180, 1, '2020-02-01 02:56:51', '2020-02-01 02:56:51'),
(133, 121, 180, 2, '2020-02-01 02:57:50', '2020-02-01 03:00:08'),
(134, 135, 180, 1, '2020-02-01 03:00:49', '2020-02-01 03:00:49'),
(135, 177, 181, 4, '2020-02-01 07:41:54', '2020-02-01 07:50:46'),
(136, 175, 181, 1, '2020-02-01 07:42:13', '2020-02-01 07:42:13'),
(137, 184, 161, 1, '2020-02-07 21:30:46', '2020-02-07 21:30:46'),
(138, 47, 185, 7, '2020-02-10 14:27:47', '2020-02-20 16:13:15'),
(139, 90, 185, 2, '2020-02-10 14:34:19', '2020-02-10 15:35:29'),
(140, 85, 185, 1, '2020-02-10 15:35:48', '2020-02-10 15:35:48'),
(141, 121, 186, 2, '2020-02-10 15:41:06', '2020-02-10 15:41:07'),
(142, 182, 185, 1, '2020-02-11 05:11:45', '2020-02-11 05:11:45'),
(143, 84, 185, 1, '2020-02-11 05:19:01', '2020-02-11 05:19:01'),
(144, 177, 185, 2, '2020-02-11 08:03:00', '2020-02-11 08:03:00'),
(145, 177, 187, 2, '2020-02-15 10:05:42', '2020-02-15 10:18:19'),
(146, 184, 188, 1, '2020-02-17 06:33:14', '2020-02-17 06:33:14'),
(147, 172, 189, 1, '2020-02-17 18:46:33', '2020-02-17 18:46:33'),
(148, 170, 189, 1, '2020-02-17 19:04:17', '2020-02-17 19:04:17'),
(149, 190, 189, 1, '2020-02-17 22:33:53', '2020-02-17 22:33:53'),
(150, 184, 191, 1, '2020-02-18 22:43:44', '2020-02-18 22:43:44'),
(151, 177, 191, 1, '2020-02-18 22:45:58', '2020-02-18 22:45:58'),
(152, 182, 191, 1, '2020-02-18 22:46:07', '2020-02-18 22:46:07'),
(153, 189, 191, 1, '2020-02-18 23:01:02', '2020-02-18 23:01:02'),
(154, 13, 194, 1, '2020-02-20 11:57:49', '2020-02-20 11:57:49'),
(155, 176, 194, 1, '2020-02-20 11:59:59', '2020-02-20 11:59:59'),
(156, 184, 195, 1, '2020-02-25 03:13:46', '2020-02-25 03:13:46'),
(157, 195, 196, 4, '2020-02-25 05:37:03', '2020-02-25 05:43:36'),
(158, 195, 197, 2, '2020-02-27 06:33:47', '2020-02-27 06:33:48'),
(159, 19, 198, 3, '2020-02-28 08:17:36', '2020-02-28 08:19:04'),
(160, 26, 198, 1, '2020-02-28 08:21:55', '2020-02-28 08:21:55'),
(161, 197, 200, 1, '2020-03-03 18:43:10', '2020-03-03 18:43:10'),
(162, 26, 201, 1, '2020-03-05 19:19:38', '2020-03-05 19:19:38'),
(163, 198, 204, 1, '2020-03-08 06:49:05', '2020-03-08 06:49:05'),
(164, 202, 204, 1, '2020-03-08 06:50:15', '2020-03-08 06:50:15'),
(165, 136, 206, 1, '2020-03-13 17:01:40', '2020-03-13 17:01:40'),
(166, 13, 207, 2, '2020-03-14 19:23:23', '2020-03-14 19:23:33'),
(167, 199, 207, 2, '2020-03-14 19:25:35', '2020-03-14 19:25:46'),
(168, 13, 208, 3, '2020-03-15 18:06:52', '2020-03-15 18:07:32'),
(169, 199, 61, 3, '2020-03-16 17:30:18', '2020-03-16 19:44:27'),
(170, 202, 212, 4, '2020-03-18 07:59:07', '2020-03-18 08:04:35'),
(171, 198, 212, 1, '2020-03-18 08:04:00', '2020-03-18 08:04:00'),
(172, 199, 212, 1, '2020-03-18 08:21:42', '2020-03-18 08:21:42'),
(173, 202, 61, 2, '2020-03-24 04:19:52', '2020-03-29 03:22:50'),
(174, 213, 216, 1, '2020-04-04 05:58:14', '2020-04-04 05:58:14'),
(175, 215, 216, 3, '2020-04-04 05:59:22', '2020-04-04 06:05:31'),
(176, 202, 216, 4, '2020-04-04 06:07:38', '2020-04-04 06:09:08'),
(177, 184, 216, 1, '2020-04-04 06:16:51', '2020-04-04 06:16:51'),
(178, 101, 216, 1, '2020-04-05 02:50:39', '2020-04-05 02:50:39'),
(179, 201, 217, 1, '2020-04-05 22:23:31', '2020-04-05 22:23:31'),
(180, 153, 217, 1, '2020-04-05 22:27:30', '2020-04-05 22:27:30'),
(181, 97, 217, 2, '2020-04-05 22:32:15', '2020-04-05 22:33:52'),
(182, 151, 217, 1, '2020-04-05 22:45:28', '2020-04-05 22:45:28'),
(183, 216, 217, 3, '2020-04-05 23:51:32', '2020-04-06 00:19:05'),
(184, 215, 219, 2, '2020-04-06 06:54:31', '2020-04-06 06:54:31'),
(185, 213, 219, 1, '2020-04-06 06:55:09', '2020-04-06 06:55:09'),
(186, 205, 221, 1, '2020-04-26 18:25:41', '2020-04-26 18:25:41'),
(187, 221, 223, 4, '2020-05-29 02:50:36', '2020-06-04 21:55:25'),
(188, 141, 224, 1, '2020-05-29 22:05:04', '2020-05-29 22:05:04'),
(189, 135, 224, 1, '2020-05-29 22:05:32', '2020-05-29 22:05:32'),
(190, 221, 226, 1, '2020-06-09 01:56:19', '2020-06-09 01:56:19'),
(191, 85, 227, 2, '2020-06-10 06:44:37', '2020-06-10 06:45:07'),
(192, 221, 228, 1, '2020-06-15 19:53:52', '2020-06-15 19:53:52'),
(193, 213, 229, 1, '2020-06-17 15:35:24', '2020-06-17 15:35:24'),
(194, 221, 229, 1, '2020-06-17 23:45:25', '2020-06-17 23:45:25'),
(195, 227, 230, 5, '2020-06-23 21:49:04', '2020-06-23 22:02:37'),
(196, 228, 230, 1, '2020-06-23 21:49:06', '2020-06-23 21:49:06'),
(197, 20, 230, 1, '2020-06-23 21:54:26', '2020-06-23 21:54:26'),
(198, 231, 235, 1, '2020-07-03 21:11:25', '2020-07-03 21:11:25'),
(199, 233, 237, 3, '2020-07-14 08:36:11', '2020-07-16 08:48:21'),
(200, 230, 237, 1, '2020-07-14 08:36:57', '2020-07-14 08:36:57'),
(201, 233, 238, 3, '2020-07-16 20:43:47', '2020-07-18 19:56:35'),
(202, 231, 238, 1, '2020-07-16 20:44:02', '2020-07-16 20:44:02'),
(203, 199, 238, 2, '2020-07-16 20:45:40', '2021-01-10 06:59:16'),
(204, 13, 238, 2, '2020-07-16 20:47:16', '2021-01-10 07:03:25'),
(205, 230, 238, 1, '2020-07-17 10:41:39', '2020-07-17 10:41:39'),
(206, 240, 238, 3, '2020-07-23 03:05:00', '2020-07-27 05:07:51'),
(207, 242, 245, 3, '2020-08-12 17:17:32', '2020-08-13 06:33:57'),
(208, 243, 245, 4, '2020-08-12 17:17:50', '2020-08-13 06:33:48'),
(209, 241, 245, 3, '2020-08-12 17:25:09', '2020-08-13 06:42:48'),
(210, 246, 247, 1, '2020-12-04 19:44:57', '2020-12-04 19:44:57'),
(211, 244, 247, 1, '2020-12-04 19:45:49', '2020-12-04 19:45:49'),
(212, 26, 248, 1, '2020-12-05 03:31:30', '2020-12-05 03:31:30'),
(213, 90, 248, 1, '2020-12-05 03:32:09', '2020-12-05 03:32:09'),
(214, 242, 249, 2, '2020-12-06 20:16:28', '2020-12-22 19:48:30'),
(215, 217, 249, 1, '2020-12-06 20:18:47', '2020-12-06 20:18:47'),
(216, 215, 249, 1, '2020-12-06 20:19:45', '2020-12-06 20:19:45'),
(217, 175, 249, 1, '2020-12-06 20:20:47', '2020-12-06 20:20:47'),
(218, 243, 250, 1, '2020-12-07 07:36:45', '2020-12-07 07:36:45'),
(219, 247, 251, 1, '2020-12-07 12:47:29', '2020-12-07 12:47:29'),
(220, 247, 255, 1, '2020-12-12 10:11:26', '2020-12-12 10:11:26'),
(221, 242, 255, 1, '2020-12-12 10:11:45', '2020-12-12 10:11:45'),
(222, 242, 258, 1, '2020-12-21 12:23:14', '2020-12-21 12:23:14'),
(223, 242, 259, 2, '2020-12-22 04:51:57', '2020-12-22 04:59:06'),
(224, 247, 261, 1, '2020-12-26 17:00:23', '2020-12-26 17:00:23'),
(225, 243, 261, 1, '2020-12-26 17:03:39', '2020-12-26 17:03:39'),
(226, 242, 261, 1, '2020-12-26 17:05:00', '2020-12-26 17:05:00'),
(227, 250, 262, 1, '2020-12-28 13:02:58', '2020-12-28 13:02:58'),
(228, 241, 264, 1, '2020-12-30 05:54:10', '2020-12-30 05:54:10'),
(229, 199, 264, 1, '2020-12-30 05:55:23', '2020-12-30 05:55:23'),
(230, 63, 264, 1, '2020-12-30 05:56:37', '2020-12-30 05:56:37'),
(231, 85, 264, 1, '2020-12-30 05:57:23', '2020-12-30 05:57:23'),
(232, 247, 265, 2, '2020-12-30 06:39:25', '2020-12-30 06:39:54'),
(233, 85, 265, 1, '2020-12-30 08:03:44', '2020-12-30 08:03:44'),
(234, 90, 265, 1, '2020-12-30 08:04:35', '2020-12-30 08:04:35'),
(235, 243, 265, 1, '2020-12-30 08:05:05', '2020-12-30 08:05:05'),
(236, 198, 265, 1, '2020-12-30 08:06:10', '2020-12-30 08:06:10'),
(237, 182, 265, 1, '2020-12-30 08:06:19', '2020-12-30 08:06:19'),
(238, 247, 272, 2, '2021-01-09 01:16:05', '2021-01-09 01:16:05'),
(239, 243, 272, 1, '2021-01-09 01:16:28', '2021-01-09 01:16:28'),
(240, 262, 238, 1, '2021-01-10 06:56:42', '2021-01-10 06:56:42'),
(241, 197, 238, 1, '2021-01-10 06:59:55', '2021-01-10 06:59:55'),
(242, 196, 238, 1, '2021-01-10 07:01:49', '2021-01-10 07:01:49'),
(243, 115, 238, 1, '2021-01-10 07:02:43', '2021-01-10 07:02:43'),
(244, 262, 275, 2, '2021-01-12 23:59:59', '2021-01-13 03:25:25'),
(245, 267, 275, 1, '2021-01-13 00:01:04', '2021-01-13 00:01:04'),
(246, 265, 275, 1, '2021-01-13 00:01:43', '2021-01-13 00:01:43'),
(247, 215, 275, 1, '2021-01-13 00:22:53', '2021-01-13 00:22:53'),
(248, 79, 275, 32, '2021-01-13 01:37:03', '2021-03-18 14:51:56'),
(249, 270, 275, 2, '2021-01-13 01:45:34', '2021-01-13 03:12:06'),
(250, 268, 275, 2, '2021-01-13 01:56:11', '2021-01-13 05:04:30'),
(251, 274, 275, 1, '2021-01-13 03:11:52', '2021-01-13 03:11:52'),
(252, 272, 275, 1, '2021-01-13 03:12:01', '2021-01-13 03:12:01'),
(253, 243, 275, 1, '2021-01-13 03:12:34', '2021-01-13 03:12:34'),
(254, 269, 275, 2, '2021-01-13 03:24:53', '2021-01-14 09:03:53'),
(255, 180, 275, 1, '2021-01-13 03:26:50', '2021-01-13 03:26:50'),
(256, 145, 275, 1, '2021-01-13 03:27:40', '2021-01-13 03:27:40'),
(257, 32, 275, 1, '2021-01-13 03:29:18', '2021-01-13 03:29:18'),
(258, 1, 275, 1, '2021-01-13 04:48:08', '2021-01-13 04:48:08'),
(259, 179, 275, 2, '2021-01-13 05:01:57', '2021-01-19 05:19:24'),
(260, 266, 275, 1, '2021-01-13 05:04:31', '2021-01-13 05:04:31'),
(261, 268, 276, 1, '2021-01-14 11:51:21', '2021-01-14 11:51:21'),
(262, 231, 277, 1, '2021-01-15 21:32:31', '2021-01-15 21:32:31'),
(263, 233, 277, 1, '2021-01-15 21:37:09', '2021-01-15 21:37:09'),
(264, 247, 277, 1, '2021-01-15 21:38:59', '2021-01-15 21:38:59'),
(265, 198, 277, 1, '2021-01-15 21:41:00', '2021-01-15 21:41:00'),
(266, 43, 277, 1, '2021-01-15 21:54:12', '2021-01-15 21:54:12'),
(267, 128, 277, 1, '2021-01-15 22:20:37', '2021-01-15 22:20:37'),
(268, 85, 277, 1, '2021-01-15 22:20:53', '2021-01-15 22:20:53'),
(269, 78, 277, 1, '2021-01-15 22:21:03', '2021-01-15 22:21:03'),
(270, 64, 277, 1, '2021-01-15 22:21:28', '2021-01-15 22:21:28'),
(271, 15, 277, 1, '2021-01-15 22:22:10', '2021-01-15 22:22:10'),
(272, 1, 277, 1, '2021-01-15 22:27:04', '2021-01-15 22:27:04'),
(273, 178, 275, 1, '2021-01-19 05:19:19', '2021-01-19 05:19:19'),
(274, 276, 275, 2, '2021-01-25 15:07:10', '2021-03-14 15:07:00'),
(275, 5, 279, 1, '2021-01-28 05:27:24', '2021-01-28 05:27:24'),
(276, 269, 279, 1, '2021-01-28 06:22:40', '2021-01-28 06:22:40'),
(277, 13, 280, 1, '2021-01-28 21:40:36', '2021-01-28 21:40:36'),
(278, 276, 280, 1, '2021-01-28 21:40:46', '2021-01-28 21:40:46'),
(279, 262, 280, 1, '2021-01-28 21:41:10', '2021-01-28 21:41:10'),
(280, 84, 280, 2, '2021-01-28 21:44:03', '2021-01-28 21:44:33'),
(281, 85, 280, 2, '2021-01-28 21:44:40', '2021-01-28 21:45:12'),
(282, 169, 280, 2, '2021-01-28 21:46:23', '2021-01-28 21:46:42'),
(283, 247, 280, 1, '2021-01-28 21:47:21', '2021-01-28 21:47:21'),
(284, 270, 282, 1, '2021-01-29 12:54:07', '2021-01-29 12:54:07'),
(285, 276, 281, 1, '2021-01-29 13:22:40', '2021-01-29 13:22:40'),
(286, 45, 282, 3, '2021-01-30 04:34:08', '2021-01-30 04:36:11'),
(287, 10, 283, 1, '2021-01-30 15:24:32', '2021-01-30 15:24:32'),
(288, 262, 283, 1, '2021-01-30 15:25:38', '2021-01-30 15:25:38'),
(289, 243, 283, 1, '2021-01-30 15:26:17', '2021-01-30 15:26:17'),
(290, 69, 283, 1, '2021-01-30 15:28:32', '2021-01-30 15:28:32'),
(291, 13, 283, 2, '2021-01-30 15:28:55', '2021-01-30 15:29:14'),
(292, 199, 283, 2, '2021-01-30 15:32:24', '2021-01-30 15:32:40'),
(293, 266, 283, 1, '2021-01-30 15:33:15', '2021-01-30 15:33:15'),
(294, 276, 286, 3, '2021-02-03 23:52:27', '2021-02-03 23:56:00'),
(295, 266, 270, 1, '2021-02-27 09:57:30', '2021-02-27 09:57:30'),
(296, 276, 270, 1, '2021-02-27 09:58:57', '2021-02-27 09:58:57'),
(297, 262, 270, 1, '2021-02-27 10:00:22', '2021-02-27 10:00:22'),
(298, 243, 270, 1, '2021-02-27 10:06:41', '2021-02-27 10:06:41'),
(299, 233, 270, 1, '2021-02-27 10:08:03', '2021-02-27 10:08:03'),
(300, 247, 270, 1, '2021-02-27 10:09:39', '2021-02-27 10:09:39'),
(301, 243, 315, 1, '2021-02-28 00:47:35', '2021-02-28 00:47:35'),
(302, 240, 315, 1, '2021-02-28 00:48:49', '2021-02-28 00:48:49'),
(303, 243, 312, 1, '2021-02-28 19:35:53', '2021-02-28 19:35:53'),
(304, 241, 312, 2, '2021-02-28 19:37:23', '2021-02-28 19:38:57'),
(305, 240, 312, 1, '2021-02-28 19:41:00', '2021-02-28 19:41:00'),
(306, 221, 312, 3, '2021-02-28 19:42:13', '2021-02-28 20:00:59'),
(307, 217, 312, 1, '2021-02-28 19:42:40', '2021-02-28 19:42:40'),
(308, 215, 312, 1, '2021-02-28 19:43:35', '2021-02-28 19:43:35'),
(309, 182, 312, 1, '2021-02-28 19:46:26', '2021-02-28 19:46:26'),
(310, 181, 312, 1, '2021-02-28 19:46:44', '2021-02-28 19:46:44'),
(311, 136, 312, 1, '2021-02-28 19:49:24', '2021-02-28 19:49:24'),
(312, 135, 312, 1, '2021-02-28 19:49:57', '2021-02-28 19:49:57'),
(313, 121, 312, 1, '2021-02-28 19:50:28', '2021-02-28 19:50:28'),
(314, 115, 312, 1, '2021-02-28 19:50:54', '2021-02-28 19:50:54'),
(315, 112, 312, 2, '2021-02-28 19:51:24', '2021-02-28 19:52:42'),
(316, 105, 312, 2, '2021-02-28 19:53:05', '2021-02-28 19:53:42'),
(317, 90, 312, 1, '2021-02-28 19:54:13', '2021-02-28 19:54:13'),
(318, 75, 312, 1, '2021-02-28 19:54:55', '2021-02-28 19:54:55'),
(319, 69, 312, 1, '2021-02-28 19:55:37', '2021-02-28 19:55:37'),
(320, 63, 312, 1, '2021-02-28 19:56:05', '2021-02-28 19:56:05'),
(321, 26, 312, 1, '2021-02-28 19:56:54', '2021-02-28 19:56:54'),
(322, 198, 312, 1, '2021-02-28 19:58:45', '2021-02-28 19:58:45'),
(323, 247, 312, 1, '2021-02-28 19:59:40', '2021-02-28 19:59:40'),
(324, 276, 316, 1, '2021-03-02 11:57:54', '2021-03-02 11:57:54'),
(325, 262, 316, 7, '2021-03-02 11:59:02', '2021-03-03 10:53:44'),
(326, 240, 316, 1, '2021-03-03 10:39:16', '2021-03-03 10:39:16'),
(327, 241, 322, 1, '2021-03-10 04:10:09', '2021-03-10 04:10:09'),
(328, 63, 322, 2, '2021-03-10 04:50:39', '2021-03-10 04:52:59'),
(329, 176, 322, 1, '2021-03-10 04:52:16', '2021-03-10 04:52:16'),
(330, 276, 322, 1, '2021-03-10 05:46:07', '2021-03-10 05:46:07'),
(331, 276, 326, 4, '2021-03-18 00:36:33', '2021-03-20 00:06:41'),
(332, 266, 326, 4, '2021-03-18 00:37:42', '2021-03-18 12:24:02'),
(333, 243, 326, 4, '2021-03-18 00:39:52', '2021-03-20 00:09:47'),
(334, 240, 326, 2, '2021-03-18 00:40:39', '2021-03-18 00:41:09'),
(335, 233, 326, 1, '2021-03-18 00:41:56', '2021-03-18 00:41:56'),
(336, 231, 326, 1, '2021-03-18 00:43:08', '2021-03-18 00:43:08'),
(337, 230, 326, 1, '2021-03-18 00:43:28', '2021-03-18 00:43:28'),
(338, 176, 326, 1, '2021-03-18 00:49:15', '2021-03-18 00:49:15'),
(339, 141, 326, 1, '2021-03-18 00:49:41', '2021-03-18 00:49:41'),
(340, 241, 326, 1, '2021-03-18 03:57:33', '2021-03-18 03:57:33'),
(341, 217, 326, 1, '2021-03-18 12:24:34', '2021-03-18 12:24:34'),
(342, 247, 326, 1, '2021-03-20 00:07:29', '2021-03-20 00:07:29'),
(343, 262, 326, 1, '2021-03-20 00:08:22', '2021-03-20 00:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_working_records`
--

CREATE TABLE `user_working_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `leave_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_working_records`
--

INSERT INTO `user_working_records` (`id`, `user_id`, `company_name`, `company_address`, `working_role`, `joining_date`, `leave_date`, `created_at`, `updated_at`) VALUES
(5, 16, 'EPZ', 'Dhanmondi, Dhaka', 'IT', '2016-06-14', NULL, '2019-01-27 17:13:28', '2019-01-27 17:13:28'),
(6, 1, 'Codex WebTech', 'Paltan Dhaka', 'Software Engineer', '2017-01-27', NULL, '2019-01-27 17:27:17', '2019-01-27 17:27:17'),
(7, 30, 'Codex WebTech', 'Paltan Dhaka', 'Software Engineer', '2019-01-29', NULL, '2019-01-29 05:23:20', '2019-01-29 05:23:20'),
(8, 12, 'Codex WebTech', 'Paltan Dhaka', 'Software Engineer', '2017-01-30', NULL, '2019-01-30 20:28:23', '2019-01-30 20:28:23'),
(9, 34, 'Raya\'s Event', 'Raya\'s Event', 'Executive officer', '2018-09-06', '2019-02-02', '2019-02-02 18:20:14', '2019-02-02 18:20:14'),
(10, 34, 'Raya\'s Event', 'Raya\'s Event', 'Executive officer', '2018-09-06', '2019-02-02', '2019-02-02 18:20:23', '2019-02-02 18:20:23'),
(11, 37, 'Wit Craft', 'Free School Street, Kathal Bagan', 'Managing Director', '2005-06-07', NULL, '2019-02-07 03:47:17', '2019-02-07 03:47:17'),
(12, 40, 'Global Communication Company', 'Saudi Arabia', 'Project Manager', '2004-01-01', NULL, '2019-02-11 21:00:32', '2019-02-11 21:00:32'),
(13, 42, 'Govt.M.M, College', 'Govt.M.M, College,Jessore', 'Lecturer', '2016-12-03', '2019-12-02', '2019-02-16 18:58:59', '2019-02-16 18:58:59'),
(14, 42, 'Govt.M.M, College', 'Govt.M.M, College,Jessore', 'Lecturer', '2016-12-03', '2019-12-02', '2019-02-16 18:58:59', '2019-02-16 18:58:59'),
(15, 42, 'Govt.M.M, College', 'Govt.M.M, College,Jessore', 'Lecturer', '2016-12-03', '2019-12-02', '2019-02-16 18:59:00', '2019-02-16 18:59:00'),
(16, 44, 'IOM Ltd', 'Bashundhara', 'IT Manager', '2017-11-17', NULL, '2019-02-18 02:37:50', '2019-02-18 02:37:50'),
(17, 45, 'Sydney aviation', 'Sydney Australia', 'aviation officer', '2015-01-02', NULL, '2019-02-18 16:44:15', '2019-02-18 16:44:15'),
(18, 48, 'Linde Bangladesh Ltd', '285, Tejgoan Industrial Area, Dhaka-1208', 'Assistant Manager', '2012-01-15', NULL, '2019-02-23 17:36:50', '2019-02-23 17:36:50'),
(19, 48, 'Linde Bangladesh Ltd', '285, Tejgoan Industrial Area, Dhaka-1208', 'Assistant Manager', '2012-01-15', NULL, '2019-02-23 17:36:50', '2019-02-23 17:36:50'),
(20, 49, 'icddr,b', 'Mohakhali, Dhaka', 'Senior Administrative Officer', '2018-02-11', NULL, '2019-02-25 18:34:12', '2019-02-25 18:34:12'),
(21, 50, 'JAMUNA GROUP OF INDUSTRIES', 'Ka-244, Progoti Sarani Road, Kuril, Baridhara, Dhaka-1229', 'Senior Executive, Digital Marketing', '2018-05-10', NULL, '2019-02-27 21:49:17', '2019-02-27 21:49:17'),
(22, 51, 'Bangladesh Bank', 'Bangladesh Bank, Head Office, Motijeel', 'Assistant Maintenance Engineer', '2018-09-01', NULL, '2019-03-09 02:37:25', '2019-03-09 02:37:25'),
(23, 2, 'Codex WebTech', '70, Pioneer Road, First Floor, Kakrail, Dhaka 1000', 'Software Engineer', '2016-03-17', NULL, '2019-03-17 10:27:46', '2019-03-17 10:27:46'),
(24, 53, 'HOPE faundation', 'teknuf . coxbazar', 'pathologist', '2018-06-26', NULL, '2019-03-19 05:06:54', '2019-03-19 05:06:54'),
(25, 4, 'a', 'b', 'c', '2019-03-19', NULL, '2019-03-19 16:47:06', '2019-03-19 16:47:06'),
(26, 55, 'Later', 'later', 'Leturer', '2018-03-20', NULL, '2019-03-22 17:17:05', '2019-03-22 17:17:05'),
(27, 56, 'jahangirnagar university', 'savar dhaka', 'student', '2014-04-28', NULL, '2019-03-23 04:56:41', '2019-03-23 04:56:41'),
(28, 57, 'cs Consultant', 'Mirpur', 'C.E.O', '1999-01-01', NULL, '2019-03-23 22:31:12', '2019-03-23 22:31:12'),
(29, 60, 'University of Connecticut', '855 Bolton Road', 'Research Scientist', '2015-09-01', NULL, '2019-04-01 13:22:28', '2019-04-01 13:22:28'),
(30, 61, 'jklj', 'mnjhjh', 'jhjhfdjhhg', '2017-02-02', '2019-12-09', '2019-04-01 15:56:05', '2019-04-01 15:56:05'),
(31, 62, 'Kevin Education', 'Changchun Jilin China', 'Trainer', '2010-02-25', '2016-12-30', '2019-04-02 14:19:15', '2019-04-02 14:19:15'),
(32, 65, 'Shenzhen Technology Chip Co., Ltd.', '1108, Anhui Building, Futian District, Shenzhen', 'Purchasing Engineer', '2012-07-08', '2019-04-08', '2019-04-08 18:00:26', '2019-04-08 18:00:26'),
(33, 32, 'Dennys Footwear', 'Modhubagh, Moghbazar', 'Managing Partner', '2009-01-01', '2009-01-01', '2019-04-19 00:41:29', '2019-04-19 00:41:29'),
(34, 32, 'Dennys Footwear', 'Modhubagh, Moghbazar', 'Managing Partner', '2009-01-01', '2009-01-01', '2019-04-19 00:41:36', '2019-04-19 00:41:36'),
(35, 74, 'Sheetal Boardband', 'Thakurgaon sadar upozila', 'assitant engineer', '2018-01-01', '2018-01-08', '2019-04-30 06:39:27', '2019-04-30 06:39:27'),
(36, 75, 'National Institute of Design', 'R-2 Dhanmondi, Dhaka, Bangladesh', 'Fashion Designer Student', '2017-04-01', '2018-10-31', '2019-05-01 16:35:20', '2019-05-01 16:35:20'),
(37, 77, 'Green view high shool', 'Chapainawabganj, Rajshahi', 'Stuff', '2017-02-26', NULL, '2019-05-04 22:56:32', '2019-05-04 22:56:32'),
(38, 86, 'BITOPI GROUP', 'Mirpur-12, Block-C, Road-12, House-13 (2nd Floor) Pallabi, Dhaka 1216., Mirpur-12, Block-C, Road-12, House-13 (2nd Floor) Pallabi, Dhaka 1216.', 'senior executive', '2016-10-05', NULL, '2019-05-26 03:13:03', '2019-05-26 03:13:03'),
(39, 86, 'BITOPI GROUP', 'Mirpur-12, Block-C, Road-12, House-13 (2nd Floor) Pallabi, Dhaka 1216., Mirpur-12, Block-C, Road-12, House-13 (2nd Floor) Pallabi, Dhaka 1216.', 'senior executive', '2016-10-05', NULL, '2019-05-26 03:13:07', '2019-05-26 03:13:07'),
(40, 88, 'Fastic BD Express Ltd.', 'Agrabad,Chittaging', 'Manager', '2019-01-08', NULL, '2019-06-10 08:13:15', '2019-06-10 08:13:15'),
(41, 89, 'Business', 'Balagonj', 'Man power', '2018-08-15', NULL, '2019-06-11 07:05:04', '2019-06-11 07:05:04'),
(42, 92, 'Graphic associate international limited', 'Mohakhali', 'Graphics designer', '2017-12-04', NULL, '2019-06-16 22:00:36', '2019-06-16 22:00:36'),
(43, 93, 'Radiant Pharmaceuticals Ltd.', 'Dhanmondi Road 02, Dhaka-1205', 'Officer, Accounts (Accounts & Finance)', '2018-10-01', NULL, '2019-06-18 05:07:07', '2019-06-18 05:07:07'),
(44, 95, 'Nrp business center', 'Halishahar', 'Marketing officer', '2019-04-04', '2019-05-30', '2019-06-25 21:03:09', '2019-06-25 21:03:09'),
(45, 95, 'Nrp business center', 'Halishahar', 'Marketing officer', '2019-04-04', '2019-05-30', '2019-06-25 21:03:16', '2019-06-25 21:03:16'),
(46, 97, 'National Institute of Traumatology and Orthopedic Rehabilitation (NITOR)', 'Sher-e-Bangla Nagar, Dhaka 1207, Bangladesh', 'Anaesthesiologist (First Class Gazetted Officer)', '2010-07-07', NULL, '2019-07-06 01:15:39', '2019-07-06 01:15:39'),
(47, 98, 'Delta medical and college', 'Mirpur', 'M L L s', '2019-02-02', NULL, '2019-07-07 15:20:48', '2019-07-07 15:20:48'),
(48, 99, 'Pitcher and piano', 'Queen Square', 'Manager', '2019-03-01', NULL, '2019-07-07 20:42:26', '2019-07-07 20:42:26'),
(49, 101, 'Eastern University', 'Eastern University, Dhaka', 'Lecturer(Math)', '2019-01-08', NULL, '2019-07-13 21:57:25', '2019-07-13 21:57:25'),
(50, 102, 'Rupayan city', 'Uttara', 'Asst manager', '2018-07-10', NULL, '2019-07-14 09:55:51', '2019-07-14 09:55:51'),
(51, 104, 'BZM LIMITED.', 'SHYMOLI.', 'Creative executive.', '0008-02-01', '2019-02-02', '2019-07-21 18:47:11', '2019-07-21 18:47:11'),
(52, 106, 'Law firm', 'Gilshan', 'Associate', '2019-07-01', NULL, '2019-07-23 06:30:47', '2019-07-23 06:30:47'),
(53, 107, 'Sunn corporation', 'Dhanmondi, Road no:4 House No:11', 'Office Executive', '2016-01-01', NULL, '2019-07-23 23:23:09', '2019-07-23 23:23:09'),
(54, 108, 'Shawarma damasco', 'Mirpur, Dhaka', 'Manager', '2016-12-06', NULL, '2019-07-29 01:01:11', '2019-07-29 01:01:11'),
(55, 109, 'Legal practice', 'Dhaka judge Court', 'Apprantice', '2018-04-01', NULL, '2019-07-30 06:08:56', '2019-07-30 06:08:56'),
(56, 110, 'Bangladesh Army', 'Bangladesh Army', 'Religious Teacher', '2019-07-01', NULL, '2019-08-04 18:02:54', '2019-08-04 18:02:54'),
(57, 112, 'Discover IT Solution', 'Shyamoli, Dhaka', 'IT Executive', '2019-01-01', NULL, '2019-08-05 04:18:53', '2019-08-05 04:18:53'),
(58, 115, 'Marine city medical college', 'Chandranagar,textile,chattogram', 'Intern doctor', '2019-03-10', NULL, '2019-08-06 23:58:06', '2019-08-06 23:58:06'),
(59, 116, 'Sharmin Mahmud & Associates', 'Banani, Dhaka', 'Associates Lawyer', '2016-03-01', NULL, '2019-08-07 17:50:36', '2019-08-07 17:50:36'),
(60, 118, 'Finex Thread Limited', '15 Babli, Conipara, Tejgoan', 'Managing Director', '1990-08-01', NULL, '2019-08-10 20:18:07', '2019-08-10 20:18:07'),
(61, 119, 'Rupayan Housing Estate Ltd', 'Block# E, Bashundhara R/A', 'Sr. Executive', '2019-06-13', NULL, '2019-08-13 07:07:36', '2019-08-13 07:07:36'),
(62, 120, 'R.F.L', 'R.F.L', 'Manager', '2018-11-15', '2019-08-24', '2019-08-14 23:06:21', '2019-08-14 23:06:21'),
(63, 121, 'Not work', 'Manikgonj Govt debendra college', 'Student', '2019-08-18', '2019-08-18', '2019-08-18 14:53:17', '2019-08-18 14:53:17'),
(64, 121, 'Not work', 'Manikgonj Govt debendra college', 'Student', '2019-08-18', '2019-08-18', '2019-08-18 14:53:20', '2019-08-18 14:53:20'),
(65, 122, 'Intend Mart', 'Green Tower, East Rampura, Dhaka', 'Owner', '2018-11-01', NULL, '2019-08-19 01:51:16', '2019-08-19 01:51:16'),
(66, 123, 'The ACME Lab Ltd.', 'Court DE La Acme Kallyanpur', 'HR,Executive', '2011-04-26', '2014-05-30', '2019-08-19 06:18:47', '2019-08-19 06:18:47'),
(67, 124, 'other', 'fgfg', 'dfgr', '2019-08-03', '2019-08-03', '2019-08-28 15:26:33', '2019-08-28 15:26:33'),
(68, 126, 'Usba', 'Usba', 'Engineers', '2019-09-01', '2019-09-01', '2019-09-01 07:02:09', '2019-09-01 07:02:09'),
(69, 127, 'Comfortzone', 'Dhaka bangladesh', 'Proprietor', '2019-02-17', NULL, '2019-09-08 21:39:07', '2019-09-08 21:39:07'),
(70, 127, 'Comfortzone', 'Dhaka bangladesh', 'Proprietor', '2019-02-17', NULL, '2019-09-08 21:39:12', '2019-09-08 21:39:12'),
(71, 128, 'Chandina Cumilla Bangladesh', 'Chandina Cumilla Bangladesh', 'yes', '2019-09-09', '2019-09-09', '2019-09-09 22:43:29', '2019-09-09 22:43:29'),
(72, 131, 'Free', 'Doha', 'Trainor', '2011-12-01', NULL, '2019-09-20 23:33:22', '2019-09-20 23:33:22'),
(73, 132, 'M/S KABIR ENTERPRISE', 'EAST  MADARBARI,CTG', 'PROPRIETOR', '2012-12-12', NULL, '2019-10-02 01:05:19', '2019-10-02 01:05:19'),
(74, 133, 'Daimler', 'Karlsruhe, Germany', 'Engineer', '2019-10-01', NULL, '2019-10-02 07:40:27', '2019-10-02 07:40:27'),
(75, 134, 'Megatech GNBD Dhaka', 'Gulshan circle-1,house-16,road-140,', 'IT officer', '2018-01-01', NULL, '2019-10-03 17:43:26', '2019-10-03 17:43:26'),
(76, 136, 'College', 'Mahammadpur', 'Lecturer (waiting for join)', '0001-01-01', '0001-01-01', '2019-10-11 01:15:55', '2019-10-11 01:15:55'),
(77, 143, 'mindmap communication', 'House 57/2 Road 14, Block-G, Niketon,Gulshan-1, Dhaka', 'Event Management Company', '2017-01-01', NULL, '2019-10-19 21:16:59', '2019-10-19 21:16:59'),
(78, 144, 'Sikder University', 'Shariatpur, Bangladesh', 'Assistant Professor', '2016-10-15', NULL, '2019-10-21 03:50:33', '2019-10-21 03:50:33'),
(79, 147, 'Fonterra', 'Dhaka', 'Country Manager', '2009-02-02', NULL, '2019-11-07 03:35:09', '2019-11-07 03:35:09'),
(80, 148, 'JB auto', '5/10 monipuripara farmgate dhaka 1215', 'managing partner', '2014-02-01', NULL, '2019-11-09 17:33:39', '2019-11-09 17:33:39'),
(81, 150, 'gulf engineering', 'Doha', 'PROJECT CONTROLLER', '2012-05-02', NULL, '2019-11-13 03:44:32', '2019-11-13 03:44:32'),
(82, 152, 'Your Trip Mate Ltd', '1st Floor, Homestead Gulshan Link Tower, Gulshan-Badda link Road, Gulshan-1, Dhaka-1212', 'Senior Web Developer', '2017-06-12', NULL, '2019-11-16 01:10:07', '2019-11-16 01:10:07'),
(83, 154, 'FNF TRADE LINk LTD.', '12, Garib E Newaz Avenue, Secto#13, Uttara, Dhaka', 'Director Finance & Accounts', '2018-11-05', NULL, '2019-11-25 23:20:42', '2019-11-25 23:20:42'),
(84, 155, 'bank', 'motijheel', 'cse', '2019-02-06', '2019-12-08', '2019-12-09 02:23:32', '2019-12-09 02:23:32'),
(85, 156, 'Crebsol Ltd.', 'Dania, Sonir Akhra, Dhaka', 'CEO', '2019-07-01', NULL, '2019-12-09 23:18:03', '2019-12-09 23:18:03'),
(86, 158, 'unemployed', 'unemployed', 'unemployed', '0199-01-22', '0198-01-11', '2019-12-18 22:28:54', '2019-12-18 22:28:54'),
(87, 159, 'Mobicare technology ltd', 'House no-10,road-12,Block-F,niketon,gulshan-1,dhaka-1212,bangladesh', 'Executive engineer', '2019-04-01', NULL, '2019-12-21 23:15:46', '2019-12-21 23:15:46'),
(88, 160, 'BRAC BANK AGENT BANKING', 'Tabunia Bazar', 'Manager', '2019-05-01', NULL, '2019-12-23 05:43:58', '2019-12-23 05:43:58'),
(89, 161, 'Global Cynax Ltd', 'Ring Tower, Ring Road, Adabor Dhaka 1207', 'IT Executive', '2016-12-09', NULL, '2019-12-26 09:55:25', '2019-12-26 09:55:25'),
(90, 162, 'Rancon home solutions, Rangs group', 'Gulshan', 'Assistant Engineer', '2017-06-01', '2018-12-31', '2019-12-26 21:57:33', '2019-12-26 21:57:33'),
(91, 163, 'Ansharah', 'Jatrabari', 'Enterprenure', '2019-01-04', NULL, '2019-12-27 00:07:45', '2019-12-27 00:07:45'),
(92, 164, 'sm ent.', 'seoul, south korea', 'main vocalist', '2012-04-04', NULL, '2019-12-27 20:02:23', '2019-12-27 20:02:23'),
(93, 164, 'sm ent.', 'seoul, south korea', 'main vocalist', '2012-04-04', NULL, '2019-12-27 20:02:36', '2019-12-27 20:02:36'),
(94, 165, 'Intel Corporation', 'Uttara Dhaka', 'IT Officer', '2015-01-04', NULL, '2020-01-04 20:01:39', '2020-01-04 20:01:39'),
(95, 166, 'Jiangsu University', 'Zhenjiang, China.', 'Researcher', '2019-02-01', NULL, '2020-01-06 22:07:43', '2020-01-06 22:07:43'),
(96, 170, 'NYU', 'New York', 'Tech', '2013-05-05', NULL, '2020-01-11 07:39:53', '2020-01-11 07:39:53'),
(97, 172, 'Bangladesh Army', 'Mirpur Cantonmen,  Dhaka', 'Captain', '2019-12-08', NULL, '2020-01-17 18:28:00', '2020-01-17 18:28:00'),
(98, 173, 'Baby desire', 'Mirpur', 'Self employed', '2020-01-17', NULL, '2020-01-17 23:19:55', '2020-01-17 23:19:55'),
(99, 173, 'Baby desire', 'Mirpur', 'Self employed', '2020-01-17', NULL, '2020-01-17 23:20:01', '2020-01-17 23:20:01'),
(100, 175, 'NWPGCL', 'Panthapath, Dhaka', 'Assistant Engineer', '2016-09-18', NULL, '2020-01-26 21:49:26', '2020-01-26 21:49:26'),
(101, 180, 'DHAKA EYE CARE HOSPITAL', 'DHAKA EYE CARE HOSPITAL', 'CUSTOMER CARE OFFICER SUPERVISOR', '2019-12-24', NULL, '2020-02-01 02:49:20', '2020-02-01 02:49:20'),
(102, 181, 'LankaBangla Finance limited', 'Banani,dhaka', 'Assistant Officer', '2018-07-01', NULL, '2020-02-01 07:36:39', '2020-02-01 07:36:39'),
(103, 183, 'Jakzvl n', 'Kdklxm', 'KskzkcnKskzkcnjdkd', '2020-02-12', NULL, '2020-02-02 14:08:14', '2020-02-02 14:08:14'),
(104, 183, 'Jakzvl n', 'Kdklxm', 'KskzkcnKskzkcnjdkd', '2020-02-12', NULL, '2020-02-02 14:08:16', '2020-02-02 14:08:16'),
(105, 184, 'Brain Station 23 Ltd', 'Mohakhali C/A', 'Senior Software Egineer', '2016-01-01', '0001-01-01', '2020-02-05 05:29:58', '2020-02-05 05:29:58'),
(106, 185, 'WPEDO', 'Dhanmondi, Dhaka, Bangladesh', 'Program Manager', '2010-01-01', '2020-02-10', '2020-02-10 07:34:56', '2020-02-10 07:34:56'),
(107, 186, 'Business', 'Dhaka Uttara abdulapur', 'Shopping store', '2020-04-01', '2020-03-31', '2020-02-10 15:23:40', '2020-02-10 15:23:40'),
(108, 187, 'Royal Embassy of Thailand', 'Baridhara , Diplomatic zone', 'Consular officer (Visa Section)', '2018-02-01', NULL, '2020-02-15 09:51:36', '2020-02-15 09:51:36'),
(110, 188, 'Brac bank ltd', 'Naraynagonj', 'Officer', '2018-11-01', NULL, '2020-02-17 06:21:31', '2020-02-17 06:21:31'),
(111, 189, 'brac', 'Gse mor,chittagong', 'Manager', '2018-02-10', '2020-02-12', '2020-02-17 18:38:54', '2020-02-17 18:38:54'),
(112, 191, 'Mortgage World Bankers', 'Chittagong', 'Manager', '2017-10-19', NULL, '2020-02-18 22:39:32', '2020-02-18 22:39:32'),
(113, 192, 'Medical College', 'Mirpur', 'Assistant Librarian', '2012-01-02', '2020-02-02', '2020-02-18 22:51:53', '2020-02-18 22:51:53'),
(114, 194, 'Papertech industry limited', 'Rupganj, Narayanganj', 'Mechanical engineer', '2018-11-10', NULL, '2020-02-20 11:51:39', '2020-02-20 11:51:39'),
(115, 194, 'Papertech industry limited', 'Rupganj, Narayanganj', 'Mechanical engineer', '2018-11-10', NULL, '2020-02-20 11:51:49', '2020-02-20 11:51:49'),
(116, 195, 'sixth sensebd', '150,nahar mention ,motijheel,dhaka ,1203', 'Director', '2017-03-01', NULL, '2020-02-25 02:57:24', '2020-02-25 02:57:24'),
(117, 196, 'Dhaka Dental College', 'Mirpur, Dhaka', 'Dental Surgeon', '2019-07-01', NULL, '2020-02-25 05:26:43', '2020-02-25 05:26:43'),
(118, 197, 'Genex', 'Nikunjo 2', 'CAS', '2017-08-01', '2018-01-11', '2020-02-27 06:20:03', '2020-02-27 06:20:03'),
(119, 197, 'Genex', 'Nikunjo 2', 'CAS', '2017-08-01', '2018-01-11', '2020-02-27 06:20:07', '2020-02-27 06:20:07'),
(120, 198, 'csdfsdfsdf', 'dsfsdfsdfs', 'werr crwcwqec', '2022-01-30', '2019-01-02', '2020-02-28 08:13:42', '2020-02-28 08:13:42'),
(121, 201, 'Buy Online', 'Dhanmondi', 'Proprietor', '2019-03-15', NULL, '2020-03-05 19:08:17', '2020-03-05 19:08:17'),
(122, 202, 'Viqarunnisa Noon School', 'Azimpur', 'Teacher', '2014-02-09', NULL, '2020-03-08 01:36:18', '2020-03-08 01:36:18'),
(123, 204, 'Brand Focus', 'Baridhara DOHS', 'Assistant Manager  Operations & Client Servicing - BTL', '2020-01-01', NULL, '2020-03-08 06:42:12', '2020-03-08 06:42:12'),
(125, 206, 'Bangladesh Bureau of Statistics', 'E-27/A Shere Bangla nager', 'Deputy Director(Rtd.)', '1981-01-01', NULL, '2020-03-12 22:26:29', '2020-03-12 22:26:29'),
(126, 206, 'Bangladesh Bureau of Statistics', 'E-27/A Shere Bangla nager', 'Deputy Director(Rtd.)', '1981-01-01', NULL, '2020-03-12 22:26:46', '2020-03-12 22:26:46'),
(127, 206, 'Bangladesh Bureau of Statistics', 'E-27/A Shere Bangla nager', 'Deputy Director(Rtd.)', '1981-01-01', NULL, '2020-03-12 22:26:46', '2020-03-12 22:26:46'),
(128, 206, 'Bangladesh Bureau of Statistics', 'E-27/A Shere Bangla nager', 'Deputy Director(Rtd.)', '1981-01-01', NULL, '2020-03-12 22:26:49', '2020-03-12 22:26:49'),
(129, 206, 'Bangladesh Bureau of Statistics', 'E-27/A Shere Bangla nager', 'Deputy Director(Rtd.)', '1981-01-01', NULL, '2020-03-12 22:26:49', '2020-03-12 22:26:49'),
(130, 206, 'Bangladesh Bureau of Statistics', 'E-27/A Shere Bangla nager', 'Deputy Director(Rtd.)', '1981-01-01', NULL, '2020-03-12 22:26:50', '2020-03-12 22:26:50'),
(131, 207, 'Four H Group', 'Chandgaon Chittagong', 'Executive', '2018-01-05', NULL, '2020-03-14 19:21:22', '2020-03-14 19:21:22'),
(132, 208, 'Bashundhara Group', 'Bashundhara dhaka', 'IT Officer', '2019-01-02', NULL, '2020-03-15 17:53:41', '2020-03-15 17:53:41'),
(135, 212, 'Lazz Pharma ltd.', 'Opposite of D.M.C.H.', 'Sales Associate', '2017-09-12', NULL, '2020-03-18 07:48:26', '2020-03-18 07:48:26'),
(136, 216, 'ACI logistics Shwapno', 'Sylhet Bangladesh', 'VFMG executive', '2017-11-15', NULL, '2020-04-04 05:43:53', '2020-04-04 05:43:53'),
(137, 217, 'Govt.', 'Upazilla health complex, kotchandpur, jhenaidah', 'Medical officer', '2019-12-08', NULL, '2020-04-05 21:59:25', '2020-04-05 21:59:25'),
(138, 217, 'People\'s Republic of Bangladesh', 'Upazilla health complex, kotchandpur, jhenaidah', 'Medical officer (39th BCS)', '2019-12-08', NULL, '2020-04-05 22:00:45', '2020-04-05 22:00:45'),
(139, 217, 'People\'s Republic of Bangladesh', 'Upazilla health complex, kotchandpur, jhenaidah', 'Medical officer (39th BCS)', '2019-12-08', NULL, '2020-04-05 22:00:47', '2020-04-05 22:00:47'),
(140, 219, 'ChakariakorakBiddyapith', 'Chakaria, Cox\'sbazar', 'Assistant Teacher', '2012-01-01', NULL, '2020-04-06 06:43:04', '2020-04-06 06:43:04'),
(141, 219, 'ChakariakorakBiddyapith', 'Chakaria, Cox\'sbazar', 'Assistant Teacher', '2012-01-01', NULL, '2020-04-06 06:43:16', '2020-04-06 06:43:16'),
(142, 221, 'Not applicable', 'Not applicable', 'Not applicable', '2020-04-12', '2020-04-26', '2020-04-26 18:15:28', '2020-04-26 18:15:28'),
(143, 221, 'Not applicable', 'Not applicable', 'Not applicable', '2020-04-12', '2020-04-26', '2020-04-26 18:15:34', '2020-04-26 18:15:34'),
(144, 222, 'Nahian', 'Dhaka', 'Ceo', '2019-05-07', NULL, '2020-05-07 11:42:25', '2020-05-07 11:42:25'),
(145, 223, 'Bilchandok Rice Agency', 'Mohammadpur Krishi Market, Mohammadpur, Dhaka-1207', 'Business', '2020-05-28', NULL, '2020-05-29 02:19:01', '2020-05-29 02:19:01'),
(146, 224, 'Army', '*', '*', '2020-05-29', NULL, '2020-05-29 21:56:57', '2020-05-29 21:56:57'),
(147, 226, 'starlit it international ltd.', 'uttara , housebuilding.', 'software engineer', '2007-02-02', '2020-06-08', '2020-06-09 01:46:39', '2020-06-09 01:46:39'),
(148, 227, 'Summit Communciations Ltd.', 'Kawran Bazar', 'Assistant Manager, Sales & Marketing', '2017-08-27', '2020-01-28', '2020-06-10 06:40:47', '2020-06-10 06:40:47'),
(149, 228, 'Holmes and Spencer Co', 'Head and Sanchez Associates', 'Laborum Sunt elit', '2015-12-01', '1978-08-25', '2020-06-15 19:52:25', '2020-06-15 19:52:25'),
(150, 229, 'HM Engineering Company LTD.', 'Khilbarirtech, Vatara, Dhaka', 'Project Engineer', '2018-07-01', '2020-06-17', '2020-06-17 15:24:04', '2020-06-17 15:24:04'),
(151, 230, 'Chittagong Grammer School', 'House-6 & 8, Rd 24, Dhaka 1212', 'Teacher', '2018-09-23', NULL, '2020-06-23 21:38:30', '2020-06-23 21:38:30'),
(152, 234, 'Segmatek', 'Banani, Dhaka', 'Multi Mediation Developer', '2017-12-10', NULL, '2020-07-01 03:25:27', '2020-07-01 03:25:27'),
(153, 235, 'Wahid Construction Ltd.', 'Wahid Construction Ltd.', 'Assistant Engineer', '2017-01-01', NULL, '2020-07-03 21:04:59', '2020-07-03 21:04:59'),
(154, 236, 'Unimed & Unihealth Ltd', 'Dhanmondi', 'Service Engineer', '2018-01-03', NULL, '2020-07-14 04:43:52', '2020-07-14 04:43:52'),
(155, 237, 'Bangladesh University of Business & Technology', 'Mirpur-2, Dhaka-1216', 'Assistant Professor', '2018-11-01', NULL, '2020-07-14 08:28:23', '2020-07-14 08:28:23'),
(156, 238, 'Khulna University of Engineering & Technology', 'Khulna, Bangladesh', 'Lecturer', '2018-01-01', NULL, '2020-07-16 20:36:11', '2020-07-16 20:36:11'),
(157, 238, 'Khulna University of Engineering & Technology', 'Khulna, Bangladesh', 'Lecturer', '2018-01-01', NULL, '2020-07-16 20:36:19', '2020-07-16 20:36:19'),
(158, 239, 'Regnum Resource Limited', 'Tejgaon,', 'CEO', '2020-07-17', NULL, '2020-07-17 17:23:47', '2020-07-17 17:23:47'),
(159, 240, 'Nthg', 'Nthg', 'Nthg', '2020-07-21', '2020-07-21', '2020-07-21 20:13:09', '2020-07-21 20:13:09'),
(160, 241, 'NA', 'NA', 'NA', '2020-07-23', '2020-07-23', '2020-07-23 21:28:20', '2020-07-23 21:28:20'),
(161, 242, 'none', 'none', 'none', '2020-08-07', NULL, '2020-08-01 06:25:38', '2020-08-01 06:25:38'),
(162, 243, 'Not necessary', 'Not necessary', 'Not necessary', '2020-08-06', '2020-08-06', '2020-08-06 15:59:20', '2020-08-06 15:59:20'),
(163, 243, 'Not necessary', 'Not necessary', 'Not necessary', '2020-08-06', '2020-08-06', '2020-08-06 15:59:29', '2020-08-06 15:59:29'),
(164, 243, 'Not necessary', 'Not necessary', 'Not necessary', '2020-08-06', '2020-08-06', '2020-08-06 15:59:57', '2020-08-06 15:59:57'),
(165, 243, 'Not necessary', 'Not necessary', 'Not necessary', '2020-08-06', '2020-08-06', '2020-08-06 16:00:04', '2020-08-06 16:00:04'),
(166, 244, 'TIME ZONE', 'H-08,Rd-68/A,Gulshan-2, Dhaka', 'Compliance Manager', '2018-05-01', NULL, '2020-08-10 18:24:16', '2020-08-10 18:24:16'),
(167, 244, 'TIME ZONE', 'H-08,Rd-68/A,Gulshan-2, Dhaka', 'Compliance Manager', '2018-05-01', NULL, '2020-08-10 18:24:55', '2020-08-10 18:24:55'),
(168, 245, 'M/s sharif and company', 'Road -4 house 25 dhanmondi', 'Own business', '2018-02-10', '2020-08-12', '2020-08-12 16:28:00', '2020-08-12 16:28:00'),
(169, 245, 'M/s sharif and company', 'Road -4 house 25 dhanmondi', 'Own business', '2018-02-10', '2020-08-12', '2020-08-12 16:28:07', '2020-08-12 16:28:07'),
(170, 245, 'M/s sharif and company', 'Road -4 house 25 dhanmondi', 'Own business', '2018-02-10', '2020-08-12', '2020-08-12 16:28:19', '2020-08-12 16:28:19'),
(171, 246, 'none', 'none', 'none', '2020-07-28', '2020-08-13', '2020-08-14 02:07:22', '2020-08-14 02:07:22'),
(172, 246, 'none', 'none', 'none', '2020-07-28', '2020-08-13', '2020-08-14 02:07:24', '2020-08-14 02:07:24'),
(173, 247, 'Techno Aid (BD)', 'mohammadpur', 'ceo', '2010-12-01', '2020-12-25', '2020-12-04 19:37:15', '2020-12-04 19:37:15'),
(174, 247, 'Techno Aid (BD)', 'mohammadpur', 'ceo', '2010-12-01', '2020-12-25', '2020-12-04 19:37:19', '2020-12-04 19:37:19'),
(175, 248, 'Mojumder Group', 'Mojumder Group', 'Accounts', '2016-01-01', NULL, '2020-12-05 03:22:41', '2020-12-05 03:22:41'),
(176, 249, 'Flex Technology', 'Dhaka', 'Designer', '0010-01-01', NULL, '2020-12-06 20:03:11', '2020-12-06 20:03:11'),
(177, 250, 'HRM fashion', 'Narayanganj kashipur', 'Executive Officer', '2020-12-07', NULL, '2020-12-07 07:26:59', '2020-12-07 07:26:59'),
(178, 251, 'a2sys', 'Mokbul Tower, 17/1 DIT Road, Rampura Dhaka.', 'Not Applicable', '2020-12-01', NULL, '2020-12-07 12:36:07', '2020-12-07 12:36:07'),
(179, 254, 'BD Police', 'Dhaka Bangladesh', 'Government Service', '2019-10-10', NULL, '2020-12-10 11:56:50', '2020-12-10 11:56:50'),
(180, 255, 'Dahmashi Trading Company Ltd', 'Banani', 'Sr. Marketing Executive', '2018-12-12', NULL, '2020-12-12 10:08:44', '2020-12-12 10:08:44'),
(181, 256, 'Strengthening of Poultry Research and Development Project.', 'Bangladesh Livestock Research Institute (BLRI). Savar, Dhaka-1340.', 'Accountant', '2015-08-26', '2020-12-13', '2020-12-13 11:38:07', '2020-12-13 11:38:07'),
(183, 257, 'Bank', 'Agrabad', 'executive officer', '2020-12-16', NULL, '2020-12-16 12:07:32', '2020-12-16 12:07:32'),
(184, 264, 'ALDAASAKI ELECTRICALCONTRACTING', 'manama,bahrain', 'salesman', '2017-08-17', NULL, '2020-12-30 05:50:02', '2020-12-30 05:50:02'),
(185, 264, 'ALDAASAKI ELECTRICALCONTRACTING', 'manama,bahrain', 'salesman', '2017-08-17', NULL, '2020-12-30 05:50:02', '2020-12-30 05:50:02'),
(186, 265, 'Elaf Network', 'Manikgonz', 'owner', '2016-07-13', '2020-12-30', '2020-12-30 06:10:17', '2020-12-30 06:10:17'),
(187, 271, 'The Law Counsel', 'Green City Square, Suite No. A-12, 750, Satmasjid Road, Dhanmondi, Dhaka', 'Associate', '2012-01-26', NULL, '2021-01-11 01:56:46', '2021-01-11 01:56:46'),
(188, 281, 'dsk', 'adabor houseing socity', 'accounts deperment', '2020-01-02', NULL, '2021-01-29 12:53:34', '2021-01-29 12:53:34'),
(189, 282, 'Krylon Bangladesh', 'Gulshan-2, Dhaka', 'Trainer', '2017-01-05', NULL, '2021-01-29 19:27:37', '2021-01-29 19:27:37'),
(190, 282, 'Krylon Bangladesh', 'Gulshan-2, Dhaka', 'Trainer', '2017-01-05', NULL, '2021-01-29 19:27:57', '2021-01-29 19:27:57'),
(191, 282, 'Krylon Bangladesh', 'Gulshan-2, Dhaka', 'Trainer', '2017-01-05', NULL, '2021-01-29 19:28:17', '2021-01-29 19:28:17'),
(192, 295, 'Rajshahi Baby Shop', 'Rajshahi', 'Manager', '2020-05-05', '2022-04-30', '2021-02-09 04:34:00', '2021-02-09 04:34:00'),
(193, 295, 'Rajshahi Baby Shop', 'Rajshahi', 'Manager', '2020-05-05', '2022-04-30', '2021-02-09 04:41:24', '2021-02-09 04:41:24'),
(195, 300, 'Walter Sherman Trading', 'Clark Ramirez Plc', 'Ullamco temporibus p', '2016-12-30', '2014-11-19', '2021-02-10 23:35:06', '2021-02-10 23:35:06'),
(196, 302, 'Esolve International', 'Dhanmondi, Dhaka', 'Project Engineer', '2021-01-01', NULL, '2021-02-12 13:07:22', '2021-02-12 13:07:22'),
(197, 312, 'Private company', 'Ghulshan-1,niketon,Block -c', 'Co admin', '2020-12-29', NULL, '2021-02-25 21:54:38', '2021-02-25 21:54:38'),
(198, 314, 'test org', 'dhaka', 'engineer', '2015-01-01', NULL, '2021-02-27 15:33:34', '2021-02-27 15:33:34'),
(199, 315, 'Dhaka Electric Supply Company Ltd.', '22/B,Khilkhet,Nikunja-2,Dhaka.', 'Junior Assistant Manager', '2012-12-06', NULL, '2021-02-28 00:36:14', '2021-02-28 00:36:14'),
(200, 316, 'IT World', 'Motijheel, Dhaka', 'Web Developer', '2017-01-02', NULL, '2021-03-02 11:46:51', '2021-03-02 11:46:51'),
(201, 317, 'Skyview online', 'Jatrabari,dhaka', 'Marketing had', '2020-09-01', NULL, '2021-03-03 13:39:52', '2021-03-03 13:39:52'),
(202, 318, 'self employed', 'n/a', 'Freelancer', '2015-01-01', '2020-01-01', '2021-03-06 06:16:33', '2021-03-06 06:16:33'),
(203, 322, 'Doctors Agrovet. Ltd.', 'Nurjehan Tower (5th Floor),2 Link Road, Banglamotor,Dhaka-100', 'Logistic Officer', '2019-12-01', NULL, '2021-03-10 03:56:40', '2021-03-10 03:56:40'),
(204, 323, 'Sellers and Gonzales Associates', 'Hill and Green Inc', 'Qui corporis quia ea', '2003-09-27', '2005-12-14', '2021-03-11 00:29:51', '2021-03-11 00:29:51'),
(205, 326, 'BKash shoes', 'Rashid market, Ashulia, Dhaka', 'Salesman', '2019-05-17', NULL, '2021-03-18 00:14:31', '2021-03-18 00:14:31'),
(206, 326, 'BKash shoes', 'Rashid market, Ashulia, Savar,Dhaka', 'Salesman', '2019-05-17', NULL, '2021-03-18 00:20:53', '2021-03-18 00:20:53'),
(207, 326, 'BKash shoes', 'Rashid market, Ashulia, Dhaka.', 'Salesman', '2019-05-17', NULL, '2021-03-18 00:24:03', '2021-03-18 00:24:03'),
(208, 326, 'BKash shoes', 'Rashid market, Ashulia, Dhaka.', 'Salesman', '2019-05-17', NULL, '2021-03-18 00:24:12', '2021-03-18 00:24:12'),
(209, 326, 'BKash shoes', 'Ashulia, Dhaka', 'Salesman', '2019-05-17', NULL, '2021-03-18 00:33:03', '2021-03-18 00:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `publish_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'temp',
  `addedby_id` int(10) UNSIGNED DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `title`, `description`, `video_url`, `date`, `publish_status`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(2, 'Marriage Solution BD Uttara Club', 'Marriage Solution BD Uttara Club 2017', 'https://www.youtube.com/embed/YBhMG2p5un0', '2017-10-10', 'published', 1, 1, '2018-11-30 16:09:20', '2021-01-23 23:08:30'),
(3, 'Marriage Solution BD', 'Marriage solution', 'https://www.youtube.com/embed/gXqRdcCxLOc', '2018-10-11', 'published', 1, 1, '2018-11-30 16:19:17', '2021-01-23 23:05:05'),
(4, 'Marriage Solution BD', 'Our Best wishes for the new couple to spent their happy marriage life.', 'https://www.youtube.com/embed/V576z9Z1H4s', '2018-03-11', 'published', 1, 1, '2018-11-30 16:29:52', '2021-01-23 23:05:34'),
(5, 'Achievement of Marriage Solution BD', 'Marriage Solution is an international matrimonial organization founded on 12th December 2012, aimed at fulfilling the needs of expected life partner across the country. We provide a trusted source of genuine people trying to find their perfect partner.', 'https://www.youtube.com/embed/NRI4j67Y-Tw', '2017-08-09', 'published', 1, 1, '2018-12-01 04:18:20', '2021-01-23 23:06:42'),
(6, 'The Introductory program between our client\'s family members', 'The Introductory program between our client\'s family members For more info visit our website www.marriagesolutionbd.com', 'https://www.youtube.com/embed/CM-jWTAWp7M', '2019-06-30', 'published', 16, 1, '2018-12-01 04:20:04', '2021-01-23 23:07:49'),
(7, NULL, NULL, NULL, NULL, 'temp', 16, NULL, '2019-06-30 16:34:44', '2019-06-30 16:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `website_parameters`
--

CREATE TABLE `website_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_pixel_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyright` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addthis_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_page_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editedby_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_parameters`
--

INSERT INTO `website_parameters` (`id`, `title`, `short_title`, `h1`, `slogan`, `logo`, `favicon`, `google_analytics_code`, `facebook_pixel_code`, `meta_author`, `meta_keyword`, `meta_description`, `footer_address`, `footer_copyright`, `addthis_url`, `google_map_code`, `fb_page_code`, `contact_mobile`, `contact_email`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 'Marriage Solution BD | Marriage in Bangladesh | Bibaha | Matrimony', 'MSBD', 'Marriage Solution BD', '????????????????????? ??????????????? ??????????????? ???????????? ???????????? ???????????????', 'msbd-logo.png', 'favicon.png', NULL, NULL, 'marriagesolutionbd@gmail.com', 'Bangla Matrimony, Bangladeshi matrimonial site, Bangladeshi matrimonial, Bangla marriage, Bangladeshi marriage, Bangladeshi Bibaho, Bangla bride, Bangla groom, Bangladeshi groom, Biye Shaadi, Bangla wedding, match maker marriage solution bd', 'Marriage Solution BD is the best Matrimony organization in Bangladesh. Along with the concern service we provide Marriage Media and Matchmaking services. Looking for Matchmaker Service in Bangladesh?  We offer you the best matched life partner according to your profile. Create a free account and search your partner. And feel the 100% satisfaction here.', '<p style=\"\"><span style=\"color: rgb(247, 247, 247);\"><i class=\"fa fa-phone\"></i> 01308311911, 01720504504<br><i class=\"fa fa-envelope\" aria-hidden=\"true\" style=\"\"></i> marriagesolutionbd@gmail.com<br><i class=\"fa fa-map-marker\" aria-hidden=\"true\" style=\"\"></i> New Colony Mashjid Complex (2nd &amp; 3rd) floor, Asad Gate (Beside Aarong), Mirpur road, Mohammadpur, State: Dhaka, City: Dhaka, Post Code: 1207, Country: Bangladesh</span></p>', NULL, NULL, NULL, 'https://www.facebook.com/secondlifebd1', '01308311911, 01720504504', 'marriagesolutionbd@gmail.com', NULL, NULL, '2021-01-20 04:21:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_users`
--
ALTER TABLE `branch_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_title_index` (`title`);

--
-- Indexes for table `chatables`
--
ALTER TABLE `chatables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_publishes`
--
ALTER TABLE `chat_publishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_id_index` (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_sliders`
--
ALTER TABLE `front_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_galleries_title_index` (`title`(191));

--
-- Indexes for table `image_gallery_items`
--
ALTER TABLE `image_gallery_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_gallery_items_title_index` (`title`(191));

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_people`
--
ALTER TABLE `media_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_person_items`
--
ALTER TABLE `media_person_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_packages`
--
ALTER TABLE `membership_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_pages`
--
ALTER TABLE `menu_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_message_title_index` (`message_title`),
  ADD KEY `messages_message_slug_index` (`message_slug`);

--
-- Indexes for table `message_files`
--
ALTER TABLE `message_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_files_file_name_index` (`file_name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_items`
--
ALTER TABLE `page_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_title_index` (`title`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_identities`
--
ALTER TABLE `social_identities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_identities_provider_id_unique` (`provider_id`),
  ADD UNIQUE KEY `social_identities_provider_token_unique` (`provider_token`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_title_index` (`title`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_education_records`
--
ALTER TABLE `user_education_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_education_records_passed_degree_index` (`passed_degree`(191)),
  ADD KEY `user_education_records_passed_grade_index` (`passed_grade`(191)),
  ADD KEY `user_education_records_organization_name_index` (`organization_name`(191));

--
-- Indexes for table `user_family_infos`
--
ALTER TABLE `user_family_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_photos`
--
ALTER TABLE `user_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pictures`
--
ALTER TABLE `user_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_proposals`
--
ALTER TABLE `user_proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_role_items`
--
ALTER TABLE `user_role_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_search_terms`
--
ALTER TABLE `user_search_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_setting_fields`
--
ALTER TABLE `user_setting_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_setting_items`
--
ALTER TABLE `user_setting_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_visitors`
--
ALTER TABLE `user_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_working_records`
--
ALTER TABLE `user_working_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_galleries_title_index` (`title`(191));

--
-- Indexes for table `website_parameters`
--
ALTER TABLE `website_parameters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `branch_users`
--
ALTER TABLE `branch_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chatables`
--
ALTER TABLE `chatables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat_publishes`
--
ALTER TABLE `chat_publishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `front_sliders`
--
ALTER TABLE `front_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `image_gallery_items`
--
ALTER TABLE `image_gallery_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1495;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `media_people`
--
ALTER TABLE `media_people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media_person_items`
--
ALTER TABLE `media_person_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership_packages`
--
ALTER TABLE `membership_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `menu_pages`
--
ALTER TABLE `menu_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message_files`
--
ALTER TABLE `message_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `page_items`
--
ALTER TABLE `page_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_identities`
--
ALTER TABLE `social_identities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_education_records`
--
ALTER TABLE `user_education_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT for table `user_family_infos`
--
ALTER TABLE `user_family_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user_photos`
--
ALTER TABLE `user_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT for table `user_pictures`
--
ALTER TABLE `user_pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=606;

--
-- AUTO_INCREMENT for table `user_proposals`
--
ALTER TABLE `user_proposals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_role_items`
--
ALTER TABLE `user_role_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_search_terms`
--
ALTER TABLE `user_search_terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `user_setting_fields`
--
ALTER TABLE `user_setting_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_setting_items`
--
ALTER TABLE `user_setting_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=480;

--
-- AUTO_INCREMENT for table `user_visitors`
--
ALTER TABLE `user_visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `user_working_records`
--
ALTER TABLE `user_working_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `website_parameters`
--
ALTER TABLE `website_parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
