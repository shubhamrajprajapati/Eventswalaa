-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2023 at 04:30 PM
-- Server version: 8.0.33-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventswa_eventsdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=visible, 1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcategories`
--

INSERT INTO `blogcategories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Birthday Party', 'birthday-party-ideas', 'Birthday Party Ideas', '1680872087.jpg', 'Birthday Party Ideas', 'Birthday Party Ideas', 'Birthday Party Ideas', 0, '2023-04-06 07:18:39', '2023-04-07 02:18:08'),
(2, 'Corporate Events', 'corporate-events', 'Corporate Events', '1680872961.jpg', 'Corporate Events', 'Corporate Events', 'Corporate Events', 0, '2023-04-07 02:06:53', '2023-04-07 02:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blogcategory_id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden,0=visible',
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogcategory_id`, `user_id`, `name`, `slug`, `description`, `image`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Choosing The Right Corporate Party Venue', 'choosing-the-right-corporate-party-venue-00001', '<p>When planning a corporate party, there are endless things that demand your unwavering attention. While making a lot of decisions, one decision that you need to take as soon as possible is finalizing the party venue as it is going to have a huge impact on the success of your party. Here, we bring you some factors to keep in mind that will help in choosing the right venue.</p>\r\n\r\n<h3><strong>Location of the venue</strong></h3>\r\n\r\n<p>The first factor when choosing a corporate party venue is its location. If it is a local party, ensure the venue is in the area that is easy to access by most of the attendees. If you are having outstation guests, choose a venue that is close to the airport or the hotel where they are staying to make it easier and convenient for them. Once a venue has been finalized, book it immediately. It is always to get the booking done well in advance.</p>\r\n\r\n<p>Another factor that you must keep in mind is the parking space available at the venue. If you are planning a huge party and the venue lacks adequate space, it is sure to create a parking mess. Thus, look for a venue that has ample space for the guests to park their vehicles with the utmost ease and convenience. If the venue is excellent but lacks enough parking area, see if you can reserve nearby parking slots. Encourage your colleagues and employees to share a cab or car. If the venue offers valet parking, it can reduce parking dilemmas to a significant extent.</p>', '1681039303.jpg', 0, 'Choosing The Right Corporate Party Venue - Events Walaa', 'Choosing The Right Corporate Party Venue - Events Walaa', 'Choosing The Right Corporate Party Venue - Events Walaa', '2023-04-07 19:52:34', '2023-04-09 00:38:11'),
(2, 2, 1, 'Reasons To Book Your Wedding Makeup Artist At The Earliest', 'reasons-to-book-your-wedding-makeup-artist-at-the-earliest-0002', '<p>Wedding planning is a tedious process and requires a lot of work that can be exhausting. Couples usually tend to focus on the bigger things like booking a venue, a photographer, or a caterer and sometimes end up overlooking the smaller ones like booking the make-up artist.</p>\r\n\r\n<p>Properly grooming yourself and getting ready for the wedding is the most important of all because at the end of the day no one is going to remember how huge your wedding was or the kind of flowers you chose, what everyone will actually remember is how happy the lovely couple was and how beautiful they looked. Now that it&rsquo;s time to focus on the essentials, we&rsquo;re here to convince you why hiring a makeup artist at the earliest is the best wedding decision you will make!</p>\r\n\r\n<p><strong>When to Start Hunting for a Makeup Artist</strong></p>\r\n\r\n<p>The best time to start hunting for a makeup artist will be around six to eight months prior to your wedding, as the trial runs usually take time. Looking for an artist and finalizing one can be a time-consuming process so starting well in advance will give you an edge over the other brides and give you sufficient time to make as many trials runs as it needs to find the perfect artist suitable for you. We recommend looking for a professional makeup artist with sufficient experience in the field that can also give you advice on how to style your hair in accordance with your wedding lehenga.</p>\r\n\r\n<p>&nbsp;</p>', '1680942231.png', 0, 'Reasons To Book Your Wedding Makeup Artist At The Earliest - Events Walaa', 'Reasons To Book Your Wedding Makeup Artist At The Earliest - Events Walaa', 'Reasons To Book Your Wedding Makeup Artist At The Earliest - Events Walaa', '2023-04-07 21:23:51', '2023-04-07 22:43:20'),
(3, 1, 1, 'The Great Indian Wedding Choreography', 'the-great-indian-wedding-choreography-00003', '<p>A wedding is a family celebration incomplete without singing and dancing and it isn&rsquo;t surprising to know that all family members enjoy the wedding songs and dances irrespective of their age or relation. Earlier people used to dance in whatever they could and they tried to dance like actors and actresses. Every family has a few members who can dance well. These people used to give a performance on popular songs or songs demanded by the guests.</p>\r\n\r\n<p>Today wedding planners provide all assistance from song selection to makeup and preparing the dance floor to choreography. If you are planning a wedding, you can also choose a wedding choreography that matches your wedding theme.</p>\r\n\r\n<p>I won&rsquo;t call it bride and groom as it is your choice but it better suits the wedding couple. And there are plenty of options in both Bollywood and Hollywood movies for your dance performance. Most people choose Cinderella dancing with Prince Charming at the ball but you need to make it a little different from the original and others. You need to work with your choreographer to improve the performance and make it unique.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1681039243.jpg', 0, 'Choosing The Right Corporate Party Venue - Event Walla', 'Choosing The Right Corporate Party Venue - Event Walla', 'Choosing The Right Corporate Party Venue - Event Walla', '2023-04-09 00:20:43', '2023-04-09 00:20:43'),
(4, 2, 1, 'Unique And Best Rose Mehndi Designs For Brides And Bridesmaids', 'unique-and-best-rose-mehndi-designs-for-brides-and-bridesmaids-0004', '<p>As important as a bride&rsquo;s wedding outfit is, the bridal mehndi also holds immense significance and is an indispensable part of the occasion. The tradition of applying mehndi as a part of the wedding ritual is so important that an entire day is devoted to it, wherein the bride, the bridesmaids, and other family members get together and enjoy a fun-filled evening of music and dance while henna is being applied to their hands and legs, in exquisite patterns, colors, and intricately beautiful designs.</p>\r\n\r\n<p>Nowadays, rose mehndi is quite the charm. Let&rsquo;s look at some unique rose mehndi designs as you gear up for this wedding season.</p>\r\n\r\n<p>It is an exciting idea to combine rose and lotus flower motifs to create an exquisite looking mehndi design, especially if you want to create a fuller design to cover the entire palm&nbsp;Before finalizing any of the venues or resorts for wedding ceremonies, it is important to visit them and compare and contrast each so that the venue you finally decide ensures a wedding that closely matches your dreams. Some people may check out the pics and make a decision which may turn out to be misleading at times.</p>', '1681042144.jpg', 0, 'Unique And Best Rose Mehndi Designs For Brides And Bridesmaids - Event Walla', 'Unique And Best Rose Mehndi Designs For Brides And Bridesmaids - Event Walla', 'Unique And Best Rose Mehndi Designs For Brides And Bridesmaids - Event Walla', '2023-04-09 01:09:04', '2023-04-09 01:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `category_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'One star', 'one-star', 0, '2023-03-16 00:26:00', '2023-04-03 03:56:13'),
(2, 2, 'Two star', 'two-star', 0, '2023-03-20 01:14:20', '2023-03-20 01:51:17'),
(3, 1, 'Three star', 'three-star', 0, '2023-03-20 01:42:07', '2023-04-03 03:55:19'),
(4, 2, 'Four star', 'four-star', 0, '2023-03-20 01:51:42', '2023-03-20 01:51:42'),
(5, 4, 'Five star', 'five-star', 0, '2023-03-20 01:51:55', '2023-03-20 02:58:08'),
(6, 4, 'ITC', 'itc', 0, '2023-05-21 02:58:09', '2023-05-21 02:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=visible, 1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Corporate party', 'corporate-party', 'Corporate party', 'uploads/category/1679215925.png', 'Corporate party', 'Corporate party', 'Corporate party', 0, '2023-03-16 00:25:47', '2023-04-10 05:34:19'),
(2, 'Wedding Ceremony', 'wedding-ceremony', 'Wedding Ceremony', 'uploads/category/1679215934.png', 'Wedding Ceremony', 'Wedding Ceremony', 'Wedding Ceremony', 0, '2023-03-18 21:12:20', '2023-05-20 05:25:01'),
(3, 'Wedding Anniversary', 'wedding-anniversary', 'Wedding Anniversary', 'uploads/category/1679215946.png', 'Wedding Anniversary', 'Wedding Anniversary', 'Wedding Anniversary', 0, '2023-03-18 21:12:33', '2023-03-28 00:35:32'),
(4, 'Birthday Party', 'birthday-party', 'Birthday Party', 'uploads/category/1679215956.png', 'Birthday Party', 'Birthday Party', 'Birthday Party', 0, '2023-03-18 21:12:47', '2023-05-20 05:33:19'),
(5, 'Engagement Ceremony', 'engagement-ceremony', 'Engagement Ceremony', 'uploads/category/1679215963.png', 'Engagement Ceremony', 'Engagement Ceremony', 'Engagement Ceremony', 0, '2023-03-18 21:12:57', '2023-05-20 05:32:27'),
(6, 'Wedding Reception', 'wedding-reception', 'Wedding Reception', 'uploads/category/1684580340.jpg', 'Wedding Reception', 'Wedding Reception', 'Wedding Reception', 0, '2023-05-20 05:29:00', '2023-05-20 05:31:00'),
(7, 'Birthday Party for Kids', 'birthday-party-for-kids', 'Birthday Party for Kids', 'uploads/category/1684581220.jpg', 'Birthday Party for Kids', 'Birthday Party for Kids', 'Birthday Party for Kids', 0, '2023-05-20 05:43:40', '2023-05-20 05:43:40'),
(8, 'Corporate Training', 'corporate-training', 'Corporate Training', 'uploads/category/1684581380.jpg', 'Corporate Training', 'Corporate Training', 'Corporate Training', 0, '2023-05-20 05:46:20', '2023-05-20 05:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Red', 'Red', 0, '2023-03-16 20:10:43', '2023-03-16 23:07:10'),
(2, 'Green', 'green', 0, '2023-03-16 20:14:50', '2023-03-16 23:30:17'),
(3, 'Blue', 'blue', 0, '2023-03-16 20:14:59', '2023-03-16 23:07:21'),
(4, 'Black', 'black', 0, '2023-03-16 20:15:12', '2023-03-16 23:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occasion_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_guests` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_meal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_drinks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `tracking_msg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `product_id`, `occasion_type`, `date`, `venue_address`, `no_guests`, `budget_range`, `req_meal`, `req_drinks`, `name`, `mobile`, `email`, `notes`, `tracking_msg`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Wedding Reception', '2023-05-30', 'Precious Moments Banquet - Najafgarh Rd, near Metro Pillar No. 571, Block B1, Janakpuri, New Delhi, Delhi 110058', '200', '1200-1400', 'Non Veg', 'No Alcohol', 'Bishwanath', '8595104872', 'bpyadav009@gmail.com', 'Hi there this is test', '0', 0, '2023-05-29 08:00:02', '2023-05-29 08:00:02'),
(2, NULL, NULL, 'Wedding Reception', '2023-05-30', 'Precious Moments Banquet - Najafgarh Rd, near Metro Pillar No. 571, Block B1, Janakpuri, New Delhi, Delhi 110058', '200', '1200-1400', 'Non Veg', 'No Alcohol', 'Bishwanath', '8595104872', 'bpyadav009@gmail.com', 'Hi there this is test', '0', 0, '2023-05-29 08:00:02', '2023-05-29 08:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listyourbusiness`
--

CREATE TABLE `listyourbusiness` (
  `id` bigint UNSIGNED NOT NULL,
  `venue_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `venue_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listyourbusiness`
--

INSERT INTO `listyourbusiness` (`id`, `venue_name`, `country`, `state`, `city`, `address`, `max_capacity`, `description`, `venue_url`, `owner_name`, `owner_phone`, `owner_email`, `terms`, `created_at`, `updated_at`) VALUES
(1, 'Bishwanath', 'India', 'Bihar', 'Samastipur', 'DLF 3', '5000', 'List your business', 'https://bootsnipp.com/', 'Venue Ownare', '8595104872', 'bpyadav009@gmail.com', NULL, '2023-03-22 04:03:09', '2023-03-22 04:03:09'),
(2, 'Venue of the years', 'India', 'Haryana', 'Gurgaon', 'IMT manesar Gurgaon', '7854', 'Hi there', 'https://bootsnipp.com/', 'Admin', '8595104872', 'email@gmail.com', NULL, '2023-03-30 00:20:57', '2023-03-30 00:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_10_075116_add_details_to_users_table', 1),
(7, '2023_03_10_130031_create_categories_table', 1),
(8, '2023_03_12_082949_create_brands_table', 1),
(9, '2023_03_12_181540_create_products_table', 1),
(10, '2023_03_12_183209_create_product_images_table', 1),
(11, '2023_03_17_061040_create_colors_table', 1),
(12, '2023_03_17_140024_create_product_colors_table', 1),
(13, '2023_03_18_122729_create_sliders_table', 1),
(14, '2023_03_22_130124_create_listyourbusiness_table', 1),
(15, '2023_03_27_134534_create_ratings_table', 1),
(16, '2023_03_28_094045_create_reviews_table', 1),
(17, '2023_03_30_110648_create_contacts_table', 1),
(18, '2023_03_31_095456_create_orders_table', 1),
(19, '2023_04_01_180535_create_sessions_table', 1),
(20, '2023_04_05_165944_create_blogcategories_table', 1),
(21, '2023_04_07_145401_create_blogs_table', 1),
(22, '2023_04_09_173856_create_otherdetails_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occasion_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_guests` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_meal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_drinks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `tracking_msg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `occasion_type`, `date`, `venue_address`, `no_guests`, `budget_range`, `req_meal`, `req_drinks`, `name`, `mobile`, `email`, `notes`, `tracking_msg`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'wedding-management', '2023-04-01', 'IMT Manesar', '232', '1600-1800', 'Veg', 'No Alcohol', 'User', '8595104872', 'user@gmail.com', '<p>Lead generated through online</p>', '1', 0, '2023-03-31 00:48:17', '2023-03-31 01:46:57'),
(2, '3', 'engagement', '2023-04-03', 'Sector 105', '800', '400-600', 'Veg', 'No Alcohol', 'Bishwanath', '85951048720', 'user@gmail.com', '<p>lead generate&nbsp; Off line&nbsp;</p>', '2', 0, '2023-03-31 00:55:27', '2023-03-31 00:55:27'),
(3, '2', 'birthday-party', '2023-04-13', 'Sector - 03, Noida', '200', '1400-1600', 'Veg', 'Alcohol', 'Vendor', '9852124521', 'vendor@gmail.com', '<p>Lead generated friend&nbsp;</p>', '3', 0, '2023-03-31 01:00:11', '2023-03-31 01:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `otherdetails`
--

CREATE TABLE `otherdetails` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `heading_occasions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_for_occasions` longtext COLLATE utf8mb4_unicode_ci,
  `operating_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_cuisines` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisines_served` longtext COLLATE utf8mb4_unicode_ci,
  `heading_facilities` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facilities` longtext COLLATE utf8mb4_unicode_ci,
  `heading_space` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `space_type` longtext COLLATE utf8mb4_unicode_ci,
  `heading_parking` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_parking` longtext COLLATE utf8mb4_unicode_ci,
  `heading_information` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more_information` longtext COLLATE utf8mb4_unicode_ci,
  `heading_usps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usps_power` longtext COLLATE utf8mb4_unicode_ci,
  `heading_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_details` longtext COLLATE utf8mb4_unicode_ci,
  `heading_policy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_policy` longtext COLLATE utf8mb4_unicode_ci,
  `heading_summary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary_event_space` longtext COLLATE utf8mb4_unicode_ci,
  `heading_landmark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearest_landmark` longtext COLLATE utf8mb4_unicode_ci,
  `heading_terms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_terms` longtext COLLATE utf8mb4_unicode_ci,
  `heading_disclaimer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disclaimer` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otherdetails`
--

INSERT INTO `otherdetails` (`id`, `product_id`, `category_id`, `heading_occasions`, `good_for_occasions`, `operating_time`, `heading_cuisines`, `cuisines_served`, `heading_facilities`, `facilities`, `heading_space`, `space_type`, `heading_parking`, `car_parking`, `heading_information`, `more_information`, `heading_usps`, `usps_power`, `heading_room`, `room_details`, `heading_policy`, `service_policy`, `heading_summary`, `summary_event_space`, `heading_landmark`, `nearest_landmark`, `heading_terms`, `policy_terms`, `heading_disclaimer`, `disclaimer`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Good for Occasions at Vardaan Banquet  Update', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Fashion Show</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>&nbsp;Update</li>\r\n</ul>', 'Operating time 24X7 updated', 'Cuisines Served at Vardaan Banquet  Update', '<ul>\r\n	<li>Indian</li>\r\n	<li>Chinese</li>\r\n	<li>Italian</li>\r\n	<li>Thai</li>\r\n	<li>Mughlai</li>\r\n	<li>Oriental&nbsp;&nbsp;Update</li>\r\n</ul>', 'Facilities at Vardaan Banquet  Update', '<ul>\r\n	<li>AV Equipment</li>\r\n	<li>Smoking Area</li>\r\n	<li>Valet Parking</li>\r\n	<li>DJ Available</li>\r\n	<li>Power Backup</li>\r\n	<li>WiFi&nbsp;&nbsp;Update</li>\r\n</ul>', 'Space Type at Vardaan Banquet  Update', '<ul>\r\n	<li>Banquet Halls</li>\r\n	<li>Seminar Halls</li>\r\n	<li>Unique Venues</li>\r\n	<li>Auditoriums&nbsp;&nbsp;Update</li>\r\n</ul>', 'Car Parking at Vardaan Banquet  Update', '<ul style=\"list-style-type:none\">\r\n	<li><strong>Parking Outdoor:</strong> Outdoor</li>\r\n	<li><strong>Parking Capacity:</strong> 1500</li>\r\n	<li><strong>Valet Parking:</strong> Available&nbsp;&nbsp;Update</li>\r\n</ul>', 'More Information at Vardaan Banquet  Update', '<p>Payment Accepted</p>\r\n\r\n<ul>\r\n	<li>Cash</li>\r\n	<li>Credit Card</li>\r\n	<li>Net Banking</li>\r\n	<li>Cheque&nbsp;&nbsp;Update</li>\r\n</ul>', 'USPS power at Vardaan Banquet  Update', '<ul>\r\n	<li>Ample parking space with Valet</li>\r\n	<li>2 KMS Away from Moti Nagar Metro Station</li>\r\n	<li>Near CTC Mall&nbsp;&nbsp;Update</li>\r\n</ul>', 'Room Details at Vardaan Banquet  Update', '<p>No. of Rooms : 200&nbsp;&nbsp;Update</p>', NULL, NULL, 'Summary event space at Vardaan Banquet  Update', '<p><strong>Euphoria Mansion has 2 spaces (s) located in Moti Nagar, Delhi</strong><br />\r\nMaharaja Hall can accommodate 50 - 700 guests (s) Veg Menu starting price of Maharaja Hall is Rs. 800 per plate.&nbsp;&nbsp;Update</p>', 'Nearest Landmark at Vardaan Banquet  Update', '<ul>\r\n	<li>Nearest Metro Station</li>\r\n	<li>Moti Nagar , Distance 2 KMS&nbsp;&nbsp;Update</li>\r\n</ul>', 'Policy terms at Vardaan Banquet  Update', '<p>Our facilities provide all the services you need. We offer a wide variety of equipment to assist you through any function. Our policy for catering is open and that too without royalty for all caterers whichever you like. Impress your corporate partners, guests, relatives and family members with del&nbsp;&nbsp;Update</p>', 'Disclaimer at Vardaan Banquet  Update', '<p>The prices and other information described above is indicative and is reflective of the last time this information was updated on venuelook.com. Venuelook.com does not guarantee the above prices as packages are generally customized based on the event requirements.&nbsp;&nbsp;Update</p>', '2023-05-20 00:39:07', '2023-05-26 08:10:51'),
(2, 2, 4, 'Good For Occasions At Precious Moments Banquet', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Fashion Show</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n</ul>', 'Operating time 24X7', 'Cuisines Served At Precious Moments Banquet', '<ul>\r\n	<li>Indian</li>\r\n	<li>Chinese</li>\r\n	<li>Italian</li>\r\n	<li>Thai</li>\r\n	<li>Shakes</li>\r\n</ul>', 'Facilities At Precious Moments Banquet', '<ul>\r\n	<li>AV Equipment</li>\r\n	<li>Full Bar</li>\r\n	<li>Roof Top</li>\r\n	<li>Smoking Area</li>\r\n	<li>Valet Parking</li>\r\n	<li>DJ Available</li>\r\n	<li>Catering Available</li>\r\n</ul>', 'Space Type At Precious Moments Banquet', '<ul>\r\n	<li>Banquet Halls</li>\r\n	<li>Bars and Pubs</li>\r\n	<li>Restaurants</li>\r\n	<li>Hotels</li>\r\n	<li>Clubs</li>\r\n	<li>Conference Rooms</li>\r\n</ul>', 'Car Parking At Precious Moments Banquet', '<ul style=\"list-style-type:none\">\r\n	<li><strong>Parking Outdoor:</strong> Bikes &amp; Cars Can Be Parked</li>\r\n	<li><strong>Parking Capacity:</strong> 100</li>\r\n	<li><strong>Valet Parking:</strong> Available</li>\r\n	<li><strong>Parking Timing:</strong> 24 Hrs</li>\r\n</ul>', 'More Information At Precious Moments Banquet', '<p>Payment Accepted</p>\r\n\r\n<ul>\r\n	<li>Cash</li>\r\n	<li>Credit Card</li>\r\n	<li>Net Banking</li>\r\n	<li>UPI</li>\r\n	<li>Paytm</li>\r\n	<li>Google Pay</li>\r\n	<li>PhonePe</li>\r\n</ul>', 'USPS power At Precious Moments Banquet', '<ul>\r\n	<li>Great Place for wedding related events</li>\r\n	<li>Great Place for Corporate Events</li>\r\n	<li>Great Place for Social Events</li>\r\n	<li>Best food quality</li>\r\n	<li>Friendly staff</li>\r\n	<li>Affordable prices</li>\r\n	<li>Multicuisine</li>\r\n	<li>Have 394 rooms for accomodation</li>\r\n</ul>', 'Room Details At Precious Moments Banquet', '<p>No. of Rooms 394</p>', NULL, NULL, 'Summary event space At Precious Moments Banquet', '<p><strong>Welcomhotel By Itc Hotels Dwarka New Delhi has 5 space(s) located in Dwarka, Delhi</strong><br />\r\nOpen Lawn can accommodate 100 - 200 guest(s) Veg Menu starting price of Open Lawn is Rs. 2600 per plate. and Non Veg Menu starting price of Open Lawn is Rs. 2800 per plate.</p>', 'Nearest Landmark At Precious Moments Banquet', '<p>Nearest Metro Station,&nbsp;Dwarka Sec-10, Distance 100 Mtrs</p>', 'Policy terms At Precious Moments Banquet', '<p>Our facilities provide all the services you need. We offer a wide variety of equipment to assist you through any function. Our policy for catering is open and that too without royalty for all caterers whichever you like. Impress your corporate partners, guests, relatives and family members with del...icious catered lunches at meetings, symposiums and workshops. Viceroy Hall at Welcomhotel By Itc Hotels Dwarka New Delhi menu features an array of savory dishes from around the world. The decorative desserts always impress our guests&nbsp;</p>', 'Disclaimer At Precious Moments Banquet', '<p>The prices and other information described above is indicative and is reflective of the last time this information was updated on venuelook.com. Venuelook.com does not guarantee the above prices as packages are generally customized based on the event requirements.</p>', '2023-05-20 02:02:40', '2023-05-23 02:00:43'),
(3, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 04:53:12', '2023-05-23 02:01:07'),
(4, 4, 2, NULL, NULL, '24X7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-21 07:48:51', '2023-05-23 02:01:13'),
(5, 5, 2, NULL, NULL, '27x7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-22 09:17:24', '2023-05-23 02:01:22'),
(6, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-23 00:28:04', '2023-05-23 02:01:44'),
(7, 7, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-27 04:51:44', '2023-05-27 04:51:44'),
(8, 8, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-28 04:40:07', '2023-05-28 04:40:07'),
(9, 9, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-28 04:59:24', '2023-05-28 05:01:03'),
(10, 10, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-28 05:17:33', '2023-05-28 05:17:33'),
(11, 11, 2, NULL, '<p>Birthday Party</p>\r\n\r\n<p>Corporate Party</p>\r\n\r\n<p>Engagement</p>\r\n\r\n<p>Wedding</p>\r\n\r\n<p>Wedding Reception</p>\r\n\r\n<p>Wedding Anniversary</p>\r\n\r\n<p>New Year Party</p>\r\n\r\n<p>Family Function</p>\r\n\r\n<p>Ring Ceremony</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-28 08:23:49', '2023-05-29 07:24:06'),
(12, 12, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-29 09:46:25', '2023-05-29 10:19:27'),
(13, 13, 2, NULL, '<p>Birthday Party</p>\r\n\r\n<p>Corporate Party</p>\r\n\r\n<p>Engagement</p>\r\n\r\n<p>Wedding</p>\r\n\r\n<p>Wedding Reception</p>\r\n\r\n<p>Wedding Anniversary</p>\r\n\r\n<p>New Year Party</p>\r\n\r\n<p>Family Function</p>\r\n\r\n<p>Ring Ceremony</p>', '24 hours', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 09:08:58', '2023-05-30 09:10:20'),
(14, 14, 2, NULL, '<p>Birthday Party</p>\r\n\r\n<p>Corporate Party</p>\r\n\r\n<p>Engagement</p>\r\n\r\n<p>Wedding</p>\r\n\r\n<p>Wedding Reception</p>\r\n\r\n<p>Wedding Anniversary</p>\r\n\r\n<p>New Year Party</p>\r\n\r\n<p>Family Function</p>\r\n\r\n<p>Ring Ceremony</p>', '24 hours', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 09:29:31', '2023-05-30 09:58:58'),
(15, 15, 2, NULL, '<p>Birthday Party</p>\r\n\r\n<p>Corporate Party</p>\r\n\r\n<p>Engagement</p>\r\n\r\n<p>Wedding</p>\r\n\r\n<p>Wedding Reception</p>\r\n\r\n<p>Wedding Anniversary</p>\r\n\r\n<p>New Year Party</p>\r\n\r\n<p>Family Function</p>\r\n\r\n<p>Ring Ceremony</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 09:56:53', '2023-05-30 10:12:26'),
(16, 16, 2, NULL, '<p>Birthday Party</p>\r\n\r\n<p>Corporate Party</p>\r\n\r\n<p>Engagement</p>\r\n\r\n<p>Wedding</p>\r\n\r\n<p>Wedding Reception</p>\r\n\r\n<p>Wedding Anniversary</p>\r\n\r\n<p>New Year Party</p>\r\n\r\n<p>Family Function</p>\r\n\r\n<p>Ring Ceremony</p>', '24 hours', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 10:11:26', '2023-05-30 10:15:20'),
(17, 17, 2, NULL, '<p>Birthday Party</p>\r\n\r\n<p>Corporate Party</p>\r\n\r\n<p>Engagement</p>\r\n\r\n<p>Wedding</p>\r\n\r\n<p>Wedding Reception</p>\r\n\r\n<p>Wedding Anniversary</p>\r\n\r\n<p>New Year Party</p>\r\n\r\n<p>Family Function</p>\r\n\r\n<p>Ring Ceremony</p>', '24 hours', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 10:21:33', '2023-05-30 11:48:34'),
(18, 18, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-31 00:00:54', '2023-05-31 00:00:54'),
(19, 19, 2, NULL, NULL, '24X7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-31 00:30:38', '2023-05-31 00:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `all_party` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `space_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `near_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trending` tinyint NOT NULL DEFAULT '0' COMMENT '1=tranding,0=not-tranding',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden,0=visible',
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `user_id`, `name`, `slug`, `brand`, `hotel_phone`, `hotel_type`, `description`, `all_party`, `hall_one`, `hall_two`, `hall_three`, `hall_four`, `hall_five`, `hall_six`, `hall_seven`, `mincapacity_one`, `mincapacity_two`, `mincapacity_three`, `mincapacity_four`, `mincapacity_five`, `mincapacity_six`, `mincapacity_seven`, `maxcapacity_one`, `maxcapacity_two`, `maxcapacity_three`, `maxcapacity_four`, `maxcapacity_five`, `maxcapacity_six`, `maxcapacity_seven`, `vegprice_one`, `vegprice_two`, `vegprice_three`, `vegprice_four`, `vegprice_five`, `vegprice_six`, `vegprice_seven`, `veg_sell_price_one`, `veg_sell_price_two`, `veg_sell_price_three`, `veg_sell_price_four`, `veg_sell_price_five`, `veg_sell_price_six`, `veg_sell_price_seven`, `nonprice_one`, `nonprice_two`, `nonprice_three`, `nonprice_four`, `nonprice_five`, `nonprice_six`, `nonprice_seven`, `non_sell_price_one`, `non_sell_price_two`, `non_sell_price_three`, `non_sell_price_four`, `non_sell_price_five`, `non_sell_price_six`, `non_sell_price_seven`, `space_capacity`, `city`, `state`, `near_by`, `full_address`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Vardaan Banquet And Party Lawn in Dwarka - Delhi', 'vardaan-banquet-and-party-lawn-in-dwarka-delhi-00001', 'Five star', '8595104872', 'Hotels', '<p>Surya grand banquet is a landmark for your wedding, reception, sagan, ring ceremony, cocktail, birthday, Sankaran &amp; corporate events. we have four centralized ac halls with the latest interior, furnishing &amp; furniture. mouthwatering multi-cuisine menu with 5-star amenities will make your enjoyable function memorable. theme-based decor &amp; customized decor for your function increase the grace of your event. our experienced team always stands with u to make your event successful.&nbsp;&nbsp;Update</p>', 'All Party / Event Spaces At Vardaan Banquet And Party Lawn  Update', 'Maharaja Hall  Update', 'Darbar Hall  Update', NULL, NULL, NULL, NULL, NULL, '100', '10', NULL, NULL, NULL, NULL, NULL, '1000', '100', NULL, NULL, NULL, NULL, NULL, '100', '100', NULL, NULL, NULL, NULL, NULL, '100', '100', NULL, NULL, NULL, NULL, NULL, '100', '100', NULL, NULL, NULL, NULL, NULL, '100', '100', NULL, NULL, NULL, NULL, NULL, 'Banquet Hall 1000  Update', 'Delhi Updated', 'Delhi Updated', 'Dwarka', 'Society, opp. SHRI NIKETAN, near Sector 7 Dwarka, Palam Village, Dwarka, New Delhi, Delhi 110077 Updated', 1, 0, 'Vardaan Banquet And Party Lawn in Dwarka - Delhi - Get Free Quotes - Reviews - Rating  - Events Walla Updated', 'Vardaan Banquet And Party Lawn in Dwarka - Delhi - Get Free Quotes - Reviews - Rating  - Events Walla Updated', 'Vardaan Banquet And Party Lawn in Dwarka - Delhi - Get Free Quotes - Reviews - Rating  - Events Walla Updated', '2023-05-20 00:39:07', '2023-05-26 08:10:51'),
(2, 4, NULL, 'Precious Moments Banquet', 'precious-moments-banquet-new-delhi-00002', 'Five star', NULL, NULL, '<p>PRECIOUS MOMENTS banquet hall, a majestic and luxurious constructed mansion where you can make the most important day auspicious. A perfect place encompasses five halls, fully air conditioning furnished that accumulate approximately 1000 people in it. With the help of a professional team and experts at precious moments, you can encounter the grand events that make your day brighter. Uncover the exclusive range of luxuries and striking ameneties at Precious moments for the best day of your life that would become more auspicious with the service offered thereby. With the collaboration of your choices and skills of the experts employed at our place, we are delighted to announce that we accomplish more than thousands of events with happy and satisfied clients.</p>', 'All Party / Event Spaces At Precious Moments Banquet', 'Open Lawn', 'Poolside', 'Viceroy Hall', NULL, NULL, NULL, NULL, '100', '100', '100', NULL, NULL, NULL, NULL, '1000', '500', '1200', NULL, NULL, NULL, NULL, '250', '320', '2700', NULL, NULL, NULL, NULL, '200', '300', '2500', NULL, NULL, NULL, NULL, '350', '720', '2900', NULL, NULL, NULL, NULL, '300', '650', '2500', NULL, NULL, NULL, NULL, 'Space Capacity 600', 'Delhi', 'Delhi', NULL, 'Najafgarh Rd, near Metro Pillar No. 571, Block B1, Janakpuri, New Delhi, Delhi 110058', 1, 0, 'Precious Moments Banquet Janakpuri Delhi - Events Wallaa', 'Precious Moments Banquet Janakpuri Delhi - Events Wallaa', 'Precious Moments Banquet Janakpuri Delhi - Events Wallaa', '2023-05-20 02:02:40', '2023-05-23 02:00:43'),
(3, 2, NULL, 'Saffron Banquet By City Stay', 'saffron-banquet-00003', 'Three star', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', NULL, 'Dnd Road, Noida Sector 22, Noida - 201301 (Near Noida Stadium, Gautam Buddh Nagar)', 0, 0, 'Saffron Banquet And Best Party Hall In Noida By City Stay', 'Saffron Banquet And Best Party Hall In Noida By City Stay', 'Saffron Banquet And Best Party Hall In Noida By City Stay', '2023-05-20 04:53:12', '2023-05-23 02:01:07'),
(4, 2, NULL, 'Rivaah Celebrations', 'rivaah-celebrations-00004', 'One star', NULL, NULL, '<p>Spacious banquet hall with excellent ambiance for all your weddings, birthday, and corporate meetings with superb catering and staff service.</p>', 'Banquet Hall', 'Banquet Hall 1', 'Banquet Hall 1', NULL, NULL, NULL, NULL, NULL, '100', '50', NULL, NULL, NULL, NULL, NULL, '500', '300', NULL, NULL, NULL, NULL, NULL, '1800', '1800', NULL, NULL, NULL, NULL, NULL, '1600', '1600', NULL, NULL, NULL, NULL, NULL, '1800', '1800', NULL, NULL, NULL, NULL, NULL, '1600', '1600', NULL, NULL, NULL, NULL, NULL, '500', 'Noida', 'Uttar Pradesh', NULL, 'Rivaah Celebrations, Hall No 1 & 2. Lower Ground Floor Gaur City, 14th, Avenue High Street, Gaur City 2, Noida, Uttar Pradesh 201318', 0, 0, 'Spacious banquet hall with excellent ambiance for all your weddings, birthday, and corporate meetings with superb catering and staff service.', 'Celebrations', NULL, '2023-05-21 07:48:51', '2023-05-23 02:01:13'),
(5, 2, NULL, 'SUKHSAROJ HOTEL & RESORTS', 'sukhsaroj-hotel-resorts-00005', 'One star', NULL, NULL, '<p>Sukh Saroj Hotels and Resorts, a place designed to provide you a serene and joyful experience. Situated in the vicinity of the upcoming Jewar International Airport and Gautam Buddh Nagar Film City and surrounded by sprawling lush green belt and fields.</p>', NULL, 'Hall And Lawn (Indoor + Outdoor)', 'Restaurant (Indoor)', 'Lawn (Outdoor)', 'Hall1 (Indoor)', 'Hall2 (Indoor)', NULL, NULL, '500', '25', '250', '200', '75', NULL, NULL, '2500', '100', '400', '500', '175', NULL, NULL, '1500', '800', '2200', '2200', '1200', NULL, NULL, '1300', '700', '2000', '2000', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Greater Noida', 'Uttar Pradesh', NULL, 'Sikandrabad - Jewar Rd, Sikandrabad, Uttar Pradesh 203205', 0, 0, NULL, NULL, NULL, '2023-05-22 09:17:20', '2023-05-23 02:01:22'),
(6, 1, NULL, 'Saffron Banquet Babas Lavanya Hospitality update', 'saffron-banquet-babas-lavanya-hospitality-00006', 'One star', NULL, NULL, '<p>The Saffron Banquet is a wedding venue located in Noida Extension. You can prefer the banquet hall &amp; wedding Lawn for all your pre-wedding and wedding-related ceremonies. The Banquet crew and administration emphasize your comfort. The grand architecture and warm hospitality of the banquet hall make you feel out of the ordinary. If you are picking a well turned-out banquet hall to host your wedding ceremonies, then look no further, as The Saffron Banquet is the one-stop destination for you. The service crew at this banquet hall makes your events memorable and out of the ordinary.</p>\r\n\r\n<p><img alt=\"\" src=\"http://saffronbanquethall.com/noida-phase-2/assets/img/abt-img.jpg\" /></p>\r\n\r\n<p><strong>Facilities and Capacity :</strong><br />\r\nAn intimate gathering of wedding guests can be had at Saffron Banquet &amp; Party Lawn in Noida Extension. They offer scrumptious home cooking for you to choose dishes according to your theme and preferences. Apart from this, they also have the facility of decoration and DJ. They offer a dance floor for the bridal couple to have their first dance and make it a magical night for all the guests. They have very comfortable and cozy rooms with all the modern amenities for the bright and grom. They have a properly managed parking space with valet parking service available for the wedding guests to park their vehicles without any hindrance. They have their own music, catering and wedding decorators to help you make your wedding one to remember.</p>', 'SAFFRON BANQUET & PARTY LAWN SERVICES', 'WEDDINGS', 'RECEPTIONS', 'ENGAGEMENTS', 'ANNIVERSARY', 'BIRTHDAY PARTIES', NULL, NULL, '100', '100', '100', '100', '100', NULL, NULL, '1000', '1000', '1000', '1000', '1000', NULL, NULL, '800', '800', '800', '800', '800', NULL, NULL, '1200', '1200', '1200', '1200', '1200', NULL, NULL, '900', '900', '900', '900', '900', NULL, NULL, '1200', '1200', '1200', '1200', '1200', NULL, NULL, '1200', 'Noida', 'Uttar Pradesh', 'Near Nsez Metro Station Noida Phase -2', 'Saffron Banquet & Party Lawn (Baba\'s Lavanya Hospitality) Main Dadri Road, Near NSEZ Metro Station, Phase 2 Gautam Buddha Nagar, U.P. 201306', 0, 0, 'The Saffron Banquet \r\nThe Saffron Banquet is a wedding venue located in Noida Extension\r\nAn intimate gathering of wedding guests can be had at Saffron Banquet & Party Lawn in Noida Extension', 'The Saffron Banquet \r\nThe Saffron Banquet is a wedding venue located in Noida Extension\r\nAn intimate gathering of wedding guests can be had at Saffron Banquet & Party Lawn in Noida Extension', 'The Saffron Banquet \r\nThe Saffron Banquet is a wedding venue located in Noida Extension\r\nAn intimate gathering of wedding guests can be had at Saffron Banquet & Party Lawn in Noida Extension', '2023-05-23 00:28:04', '2023-05-23 02:01:44'),
(7, 2, NULL, 'Hotel Capital Inn', 'hotel-capital-inn', '0', '070651 05088', 'Hotels', NULL, 'Hotel Capital Inn Spaces', 'Tarish Garden', 'Capital Food', 'Hotel Capital', NULL, NULL, NULL, NULL, '35', '35', '35', NULL, NULL, NULL, NULL, '100', '100', '200', NULL, NULL, NULL, NULL, '800', '800', '800', NULL, NULL, NULL, NULL, '700', '700', '700', NULL, NULL, NULL, NULL, '900', '900', '900', NULL, NULL, NULL, NULL, '800', '800', '800', NULL, NULL, NULL, NULL, NULL, 'Greater Noida', 'Uttar Pradesh', '14th Avenue', 'Opp. 14th Avenue, Sector 16C, Rani Laxmibai Nagar, Yusufpur, Gaur City 2, Greater Noida, Uttar Pradesh 201009', 0, 0, '14th Avenue  Gaur City   Greater Noida . small events like birthday parties, anniversaries, pre-wedding and more', 'small events like birthday parties, anniversaries, pre-wedding and more', 'small events like birthday parties, anniversaries, pre-wedding and more', '2023-05-27 04:51:44', '2023-05-27 04:51:44'),
(8, 2, NULL, 'Saundhi Rasoi', 'saundhi-rasoi', '0', '078279 41719', 'Hotels', '<p>&quot;Saundhi -Rasoi is a place where you can hang out with your friends and family along with kids and specially designed for golden ager. We serve foods and dishes that are passed on through generations and have been consumed for many generations. COME AND HAVE THE BEST MOMENTS OF YOURS&quot;</p>', 'Saundhi Rasoi Event Space', 'Whole Area', NULL, NULL, NULL, NULL, NULL, NULL, '30', NULL, NULL, NULL, NULL, NULL, NULL, '90', NULL, NULL, NULL, NULL, NULL, NULL, '450', NULL, NULL, NULL, NULL, NULL, NULL, '600', NULL, NULL, NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, NULL, NULL, '700', NULL, NULL, NULL, NULL, NULL, NULL, '60', 'Ghaziabad', 'Uttar Pradesh', 'Gaur City Crossin', 'Sain Farm, Gaur City Crossing, Link Road, Gaur City 2, Ghaziabad, Uttar Pradesh 201009', 0, 0, 'Saundhi Rasoi   Hotel Resturent', 'Saundhi Rasoi   Hotel Resturent', 'Saundhi Rasoi   Hotel Resturent', '2023-05-28 04:40:06', '2023-05-28 04:40:06'),
(9, 2, NULL, 'The Sky Boat', 'the-sky-boat', 'One star', NULL, 'All', '<p>The Sky Boat, Gaur City is the ideal one for you if you are planning to host events like a birthday party, anniversary party, social gathering, formal gathering, pre-wedding ceremony, wedding or wedding reception. The Sky Boat, Gaur City, provides impeccable service to the guests. The staff of&nbsp;The Sky Boat,&nbsp;are well-trained and courteous and makes sure the host is completely relaxed during the time of the event and enjoying with the rest of the guests.</p>\r\n\r\n<p>The in-house team of chefs at The Sky Boat, Gaur City&nbsp;is known to make the best multi-cuisine vegetarian delicacies for all your guests that will make all drool. The decor team of the venue is extremely talented and is known to make the host happy with their decor skills.</p>', 'The Sky Boat Space Event', 'The Sky Boat (Indoor + Outdoor)', NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, '150', NULL, NULL, NULL, NULL, NULL, NULL, '700', NULL, NULL, NULL, NULL, NULL, NULL, '600', NULL, NULL, NULL, NULL, NULL, NULL, '700', NULL, NULL, NULL, NULL, NULL, NULL, '900', NULL, NULL, NULL, NULL, NULL, NULL, '50', 'Noida', 'Uttar Pradesh', 'Galaxy Plaza', '4th Floor, Open Tarrace, Galaxy Plaza, Extension, Sec.04, Gaur City 1, Sector 4, Noida, Uttar Pradesh 201009', 0, 0, 'The Sky Boat, Gaur City', 'The Sky Boat, Gaur City', 'The Sky Boat, Gaur City', '2023-05-28 04:59:24', '2023-05-28 05:01:02'),
(10, 2, NULL, 'Divine Dreams Farm & Banquet', 'divine-dreams-farm-banquet', '0', '07983749068', 'All', '<p>Here is one of the most luxuriously designed Destinations for Marriages, Events Conferences, and parties with a lush green 6000 square yards lawn with water fountains and beautiful lights. 6000 square feet Air condition Lavish banquet Hall Which gives you a luxury resort kind of feeling.</p>', 'Divine Dreams Farm & Banquet', 'Farm and Banquet', NULL, NULL, NULL, NULL, NULL, NULL, '50', NULL, NULL, NULL, NULL, NULL, NULL, '2000', NULL, NULL, NULL, NULL, NULL, NULL, '1300', NULL, NULL, NULL, NULL, NULL, NULL, '1100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Greater Noida', 'Uttar Pradesh', 'Ek murti', 'Near, Ek murti circle, Cherry County St, Amrapali Dream Valley, Greater Noida, Uttar Pradesh 201009', 0, 0, 'Destinations for Marriages, Events Conferences, and parties  \r\nEk murti circle, Cherry County St, Amrapali Dream Valley, Greater Noida, Uttar Pradesh 201009', 'Destinations for Marriages, Events Conferences, and parties  \r\nEk murti circle, Cherry County St, Amrapali Dream Valley, Greater Noida, Uttar Pradesh 201009', 'Destinations for Marriages, Events Conferences, and parties  \r\nEk murti circle, Cherry County St, Amrapali Dream Valley, Greater Noida, Uttar Pradesh 201009', '2023-05-28 05:17:32', '2023-05-28 05:17:32'),
(11, 2, NULL, 'Gtl Shriram Farm', 'gtl-shriram-farm', 'One star', NULL, 'Resorts', '<p>Gtl Shreeram Farm is beautiful farmhouse situated near the Noida Expressway with some unique benefits and aspects of high desert living. The peace around this farmhouse help to bring the hectic life to a gentle halt and remind them not to rush life away.</p>\r\n\r\n<p>Gtl Shriram Farm is best for any events in Sector 135, Noida. Gtl Shriram Farm has best spaces to suit different occasions.</p>', 'Gtl Shriram Farm', 'Gtl Shriram Farm (Indoor + Outdoor)', NULL, NULL, NULL, NULL, NULL, NULL, '30', NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, '750', NULL, NULL, NULL, NULL, NULL, NULL, '700', NULL, NULL, NULL, NULL, NULL, NULL, '950', NULL, NULL, NULL, NULL, NULL, NULL, '900', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SEC-135, NOIDA', 'Uttar Pradesh', NULL, 'Gtl Shriram Farm, sector 135, Noida, green Beauty Farm,new Club, Near Haryana Gate Plate No. 49,50,51', 0, 0, 'SEC-135\r\nNOIDA', 'SEC-135\r\nNOIDA', 'SEC-135\r\nNOIDA', '2023-05-28 08:23:49', '2023-05-29 07:21:05'),
(12, 2, NULL, 'Farms N Frolics', 'farms-n-frolics', 'One star', '099710 97899', 'Resorts', '<p>&nbsp;</p>\r\n\r\n<p>Farm house with Pure Nature, well connected to Main Highway. Cottage is available with 2 bedrooms, lobby, big drawing and dinning for your stay &amp; parties.There is a big pool that is also available at the venue. There is a dance floor, open kitchen with open bar machan near to pool.</p>', NULL, 'Poolside (Outdoor)', NULL, NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, '400', NULL, NULL, NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, NULL, NULL, '550', NULL, NULL, NULL, NULL, NULL, NULL, '650', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', NULL, 'Green beauty farms, Sec- 135, Noida, Uttar Pradesh, 201305', 0, 0, 'Sec- 135, Noida\r\nNoida', 'Sec- 135, Noida\r\nNoida', NULL, '2023-05-29 09:46:25', '2023-05-29 10:05:13'),
(13, 2, NULL, 'Dkrrish Green Beauty Farms', 'dkrrish-green-beauty-farms', 'One star', '9911573353,  9717415991', 'Resorts', '<p>Green Beauty Farms is in today&#39;s bustle filled life, when the busy offices, noisy streets, cluttered roads take their toll on you, taking off becomes mandatory. Far from the maddening crowd lies a world where you will love to break free, relax and also experience adventure in a little way. Our Farms welcomes you to a place where having fun is a rule and reclining back in the evening under a clear blue sky a custom.</p>', NULL, 'Dkrrish Green Beauty Farms (Indoor + Outdoor)', NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, '1100', NULL, NULL, NULL, NULL, NULL, NULL, '1200', NULL, NULL, NULL, NULL, NULL, NULL, '1400', NULL, NULL, NULL, NULL, NULL, NULL, '1500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', NULL, 'Green Beauty Farms, Sector- 135, Noida, Uttar Pradesh 201305', 0, 0, 'Sector- 135, Noida\r\nNoida', 'Sector- 135, Noida\r\nNoida', NULL, '2023-05-30 09:08:58', '2023-05-30 09:10:20'),
(14, 2, NULL, 'Naina Farms and Resorts', 'naina-farms-and-resorts', 'One star', NULL, 'Resorts', '<p>This is a beautiful farm house and resort which suite for weddings and any type of function or parties.</p>', NULL, 'Outdoor', NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, '1000', NULL, NULL, NULL, NULL, NULL, NULL, '1000', NULL, NULL, NULL, NULL, NULL, NULL, '900', NULL, NULL, NULL, NULL, NULL, NULL, '1200', NULL, NULL, NULL, NULL, NULL, NULL, '1100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', NULL, 'Near Dugout Cricket Stadium, Sector 168, Noida, Uttar Pradesh 201306 Noida - 201301', 0, 0, 'Sector 168, Noida\r\nNoida', 'Sector 168, Noida\r\nNoida', NULL, '2023-05-30 09:29:31', '2023-05-30 09:58:58'),
(15, 2, NULL, 'TravAmigo London Farm & Resort', 'travamigo-london-farm-resort', 'One star', '099107 77790', 'Resorts', '<p>This is a beautiful farm house and resort with banquet hall which suite for weddings and any type of function or parties.</p>', NULL, 'Outdoor', NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, '750', NULL, NULL, NULL, NULL, NULL, NULL, '650', NULL, NULL, NULL, NULL, NULL, NULL, '950', NULL, NULL, NULL, NULL, NULL, NULL, '850', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', NULL, 'Sector - 135, Noida, Uttar Pradesh 201305', 0, 0, 'Sector - 135, Noida\r\nNoida', 'Sector - 135, Noida\r\nNoida', NULL, '2023-05-30 09:56:53', '2023-05-30 10:12:26'),
(16, 2, NULL, 'Roozbeh Farms And Resort', 'roozbeh-farms-and-resort', 'One star', NULL, 'Resorts', '<p>This is a beautiful farm house and resort with banquet hall which suite for weddings and any type of function or parties.</p>', NULL, 'Indoor', NULL, NULL, NULL, NULL, NULL, NULL, '300', NULL, NULL, NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, NULL, NULL, '600', NULL, NULL, NULL, NULL, NULL, NULL, '700', NULL, NULL, NULL, NULL, NULL, NULL, '800', NULL, NULL, NULL, NULL, NULL, NULL, '900', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', 'Khera Mandir Behind JP Wishtown', 'Roozbeh Farms and Resort, 34-36, Phase 19, Green Beauty Farms, Near Khera Mandir Behind JP Wishtown, Sector 135, Noida, Uttar Pradesh 201301', 0, 0, 'Sector 135, Noida\r\nNoida', 'Sector 135, Noida\r\nNoida', NULL, '2023-05-30 10:11:26', '2023-05-30 10:12:40'),
(17, 2, NULL, 'Samar Farms', 'samar-farms-00017', 'One star', '093184 08228', 'Resorts', '<p>This is a beautiful farm house and resort with banquet hall which suite for weddings and any type of function or parties.</p>', NULL, 'Outdoor', NULL, NULL, NULL, NULL, NULL, NULL, '80', NULL, NULL, NULL, NULL, NULL, NULL, '150', NULL, NULL, NULL, NULL, NULL, NULL, '1100', NULL, NULL, NULL, NULL, NULL, NULL, '1200', NULL, NULL, NULL, NULL, NULL, NULL, '1300', NULL, NULL, NULL, NULL, NULL, NULL, '1400', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', NULL, 'Farm No. 31-32, Sector-135, Noida, Uttar Pradesh, India 201', 0, 0, 'Sector-135, Noida\r\nNoida', 'Sector-135, Noida\r\nNoida', NULL, '2023-05-30 10:21:33', '2023-05-30 11:48:34'),
(18, 2, NULL, 'J\'s - Contemporary Oriental', 'js-contemporary-oriental', '0', '0120 402 5002', 'Hotels', '<p>If an innovative creative menu that amalgamates oriental flavors is what you look for, then J&rsquo;s is the perfect place to sample some of the best Contemporary Oriental food with its tantalizing tastes and completely nouveau recipes by Chef Tenzin Losel amidst chic ambiance and lively music.</p>', 'J\'s - Contemporary Oriental', 'J\'s - Contemporary Oriental Indoor', NULL, NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, '50', NULL, NULL, NULL, NULL, NULL, NULL, '1700', NULL, NULL, NULL, NULL, NULL, NULL, '1900', NULL, NULL, NULL, NULL, NULL, NULL, '1900', NULL, NULL, NULL, NULL, NULL, NULL, '2000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', 'Mosaic Hotels', 'Floor L, Mosaic Hotels, C Block, C-1, Sector 18, Noida, Uttar Pradesh 201301', 0, 0, 'Contemporary Oriental food', 'If an innovative creative menu that amalgamates oriental flavors is what you look for, then J’s is the perfect place to sample some of the best Contemporary Oriental food with its tantalizing tastes and completely nouveau recipes by Chef Tenzin Losel amidst chic ambiance and lively music.', 'Contemporary Oriental food', '2023-05-31 00:00:54', '2023-05-31 00:00:54'),
(19, 2, NULL, 'Radisson Blu MBD Hotel Noida', 'radisson-blu-mbd-hotel-noida', '0', '0120 430 0000', 'Hotels', '<p>12-minute walk from the Worlds of Wonder theme park, this modern hotel is 2 km from a metro station and 14 km from the Lotus Temple.</p>\r\n\r\n<p>1. Modern rooms feature complimentary Wi-Fi and fruit baskets, plus flat-screen TVs and sitting areas.</p>\r\n\r\n<p>2. Upgraded rooms grant access to free breakfast and cocktails; select rooms have in-room whirlpool tubs and dining tables., while suites add sitting rooms and butler service.</p>\r\n\r\n<p>3. Kids aged 11 and under stay free.</p>\r\n\r\n<p>4. Room service is available 24/7.</p>\r\n\r\n<p>5. Parking is free.</p>\r\n\r\n<p>6. Other amenities include 3 stylish restaurants and a trendy bar. There&#39;s also as upscale spa offering wellness treatments, as well as a pool, a fitness room, and a sauna.</p>', 'Radisson Blu MBD Hotel Noida', 'Concord 1', 'Concord 2', 'Concord 3', NULL, NULL, NULL, NULL, '70', '50', '50', NULL, NULL, NULL, NULL, '120', '120', '120', NULL, NULL, NULL, NULL, '2200', '2200', '2200', NULL, NULL, NULL, NULL, '2000', '2000', '2000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Noida', 'Uttar Pradesh', 'Sector 18', 'L, 2, Pocket J, Sector 18, Noida, Uttar Pradesh 201301', 0, 0, 'Radisson Blu MBD Hotel Noida', 'Radisson Blu MBD Hotel Noida', '12-minute walk from the Worlds of Wonder theme park, this modern hotel is 2 km from a metro station and 14 km from the Lotus Temple.\r\n\r\n1. Modern rooms feature complimentary Wi-Fi and fruit baskets, plus flat-screen TVs and sitting areas.\r\n\r\n2. Upgraded rooms grant access to free breakfast and cocktails; select rooms have in-room whirlpool tubs and dining tables., while suites add sitting rooms and butler service.\r\n\r\n3. Kids aged 11 and under stay free.\r\n\r\n4. Room service is available 24/7.\r\n\r\n5. Parking is free.\r\n\r\n6. Other amenities include 3 stylish restaurants and a trendy bar. There\'s also as upscale spa offering wellness treatments, as well as a pool, a fitness room, and a sauna.', '2023-05-31 00:30:37', '2023-05-31 00:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `color_id` bigint UNSIGNED DEFAULT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/products/16845629471.png', '2023-05-20 00:39:07', '2023-05-20 00:39:07'),
(2, 1, 'uploads/products/16845629472.png', '2023-05-20 00:39:07', '2023-05-20 00:39:07'),
(3, 1, 'uploads/products/16845629473.png', '2023-05-20 00:39:07', '2023-05-20 00:39:07'),
(4, 1, 'uploads/products/16845629474.png', '2023-05-20 00:39:07', '2023-05-20 00:39:07'),
(5, 1, 'uploads/products/16845639111.png', '2023-05-20 00:55:11', '2023-05-20 00:55:11'),
(6, 2, 'uploads/products/16845679601.png', '2023-05-20 02:02:40', '2023-05-20 02:02:40'),
(7, 2, 'uploads/products/16845679602.png', '2023-05-20 02:02:40', '2023-05-20 02:02:40'),
(8, 2, 'uploads/products/16845679603.png', '2023-05-20 02:02:40', '2023-05-20 02:02:40'),
(9, 2, 'uploads/products/16845679604.png', '2023-05-20 02:02:40', '2023-05-20 02:02:40'),
(10, 3, 'uploads/products/16845781921.png', '2023-05-20 04:53:12', '2023-05-20 04:53:12'),
(11, 4, 'uploads/products/16846753661.jpg', '2023-05-21 07:52:46', '2023-05-21 07:52:46'),
(12, 4, 'uploads/products/16846753801.jpg', '2023-05-21 07:53:00', '2023-05-21 07:53:00'),
(13, 4, 'uploads/products/16846753931.JPG', '2023-05-21 07:53:13', '2023-05-21 07:53:13'),
(14, 5, 'uploads/products/16847668401.png', '2023-05-22 09:17:21', '2023-05-22 09:17:21'),
(15, 5, 'uploads/products/16847668412.jpeg', '2023-05-22 09:17:23', '2023-05-22 09:17:23'),
(16, 5, 'uploads/products/16847668433.jpeg', '2023-05-22 09:17:24', '2023-05-22 09:17:24'),
(17, 5, 'uploads/products/16847670891.jpeg', '2023-05-22 09:21:29', '2023-05-22 09:21:29'),
(18, 6, 'uploads/products/16848214841.jpg', '2023-05-23 00:28:04', '2023-05-23 00:28:04'),
(19, 6, 'uploads/products/16848214842.jpg', '2023-05-23 00:28:04', '2023-05-23 00:28:04'),
(20, 6, 'uploads/products/16848214843.jpg', '2023-05-23 00:28:04', '2023-05-23 00:28:04'),
(21, 6, 'uploads/products/16848214844.jpg', '2023-05-23 00:28:04', '2023-05-23 00:28:04'),
(22, 7, 'uploads/products/16851829041.JPG', '2023-05-27 04:51:44', '2023-05-27 04:51:44'),
(23, 8, 'uploads/products/16852686061.jpg', '2023-05-28 04:40:06', '2023-05-28 04:40:06'),
(24, 8, 'uploads/products/16852686062.jpg', '2023-05-28 04:40:06', '2023-05-28 04:40:06'),
(25, 8, 'uploads/products/16852686063.jpg', '2023-05-28 04:40:07', '2023-05-28 04:40:07'),
(26, 9, 'uploads/products/16852698621.jpeg', '2023-05-28 05:01:02', '2023-05-28 05:01:02'),
(27, 9, 'uploads/products/16852698622.jpg', '2023-05-28 05:01:03', '2023-05-28 05:01:03'),
(28, 9, 'uploads/products/16852698633.jpg', '2023-05-28 05:01:03', '2023-05-28 05:01:03'),
(29, 9, 'uploads/products/16852698634.jpg', '2023-05-28 05:01:03', '2023-05-28 05:01:03'),
(30, 10, 'uploads/products/16852708521.png', '2023-05-28 05:17:32', '2023-05-28 05:17:32'),
(31, 10, 'uploads/products/16852708522.jpg', '2023-05-28 05:17:32', '2023-05-28 05:17:32'),
(32, 10, 'uploads/products/16852708523.jpg', '2023-05-28 05:17:33', '2023-05-28 05:17:33'),
(33, 10, 'uploads/products/16852708534.png', '2023-05-28 05:17:33', '2023-05-28 05:17:33'),
(34, 11, 'uploads/products/16853648451.png', '2023-05-29 07:24:05', '2023-05-29 07:24:05'),
(35, 11, 'uploads/products/16853648452.png', '2023-05-29 07:24:05', '2023-05-29 07:24:05'),
(36, 11, 'uploads/products/16853648453.png', '2023-05-29 07:24:06', '2023-05-29 07:24:06'),
(37, 11, 'uploads/products/16853648464.png', '2023-05-29 07:24:06', '2023-05-29 07:24:06'),
(38, 12, 'uploads/products/16853753671.jpeg', '2023-05-29 10:19:27', '2023-05-29 10:19:27'),
(39, 12, 'uploads/products/16853753672.jpeg', '2023-05-29 10:19:27', '2023-05-29 10:19:27'),
(40, 12, 'uploads/products/16853753673.jpeg', '2023-05-29 10:19:27', '2023-05-29 10:19:27'),
(41, 13, 'uploads/products/16854575381.jpeg', '2023-05-30 09:08:58', '2023-05-30 09:08:58'),
(42, 13, 'uploads/products/16854575382.jpeg', '2023-05-30 09:08:58', '2023-05-30 09:08:58'),
(43, 13, 'uploads/products/16854575383.jpeg', '2023-05-30 09:08:58', '2023-05-30 09:08:58'),
(44, 14, 'uploads/products/16854587711.webp', '2023-05-30 09:29:31', '2023-05-30 09:29:31'),
(45, 14, 'uploads/products/16854587712.webp', '2023-05-30 09:29:31', '2023-05-30 09:29:31'),
(46, 14, 'uploads/products/16854587713.jpeg', '2023-05-30 09:29:31', '2023-05-30 09:29:31'),
(47, 15, 'uploads/products/16854604131.png', '2023-05-30 09:56:53', '2023-05-30 09:56:53'),
(48, 15, 'uploads/products/16854604132.jpeg', '2023-05-30 09:56:53', '2023-05-30 09:56:53'),
(49, 15, 'uploads/products/16854604133.jpeg', '2023-05-30 09:56:53', '2023-05-30 09:56:53'),
(50, 15, 'uploads/products/16854604134.jpeg', '2023-05-30 09:56:53', '2023-05-30 09:56:53'),
(51, 16, 'uploads/products/16854612861.webp', '2023-05-30 10:11:26', '2023-05-30 10:11:26'),
(52, 16, 'uploads/products/16854612862.jpeg', '2023-05-30 10:11:26', '2023-05-30 10:11:26'),
(53, 16, 'uploads/products/16854612863.jpeg', '2023-05-30 10:11:26', '2023-05-30 10:11:26'),
(54, 16, 'uploads/products/16854612864.jpeg', '2023-05-30 10:11:26', '2023-05-30 10:11:26'),
(55, 17, 'uploads/products/16854618931.jpeg', '2023-05-30 10:21:33', '2023-05-30 10:21:33'),
(56, 17, 'uploads/products/16854618932.jpeg', '2023-05-30 10:21:33', '2023-05-30 10:21:33'),
(57, 17, 'uploads/products/16854618933.jpeg', '2023-05-30 10:21:33', '2023-05-30 10:21:33'),
(58, 17, 'uploads/products/16854618934.jpeg', '2023-05-30 10:21:33', '2023-05-30 10:21:33'),
(59, 18, 'uploads/products/16855110541.jpg', '2023-05-31 00:00:54', '2023-05-31 00:00:54'),
(60, 18, 'uploads/products/16855110542.jpg', '2023-05-31 00:00:54', '2023-05-31 00:00:54'),
(61, 18, 'uploads/products/16855110543.jpg', '2023-05-31 00:00:54', '2023-05-31 00:00:54'),
(62, 19, 'uploads/products/16855128381.jpg', '2023-05-31 00:30:38', '2023-05-31 00:30:38'),
(63, 19, 'uploads/products/16855128382.jpg', '2023-05-31 00:30:38', '2023-05-31 00:30:38'),
(64, 19, 'uploads/products/16855128383.jpg', '2023-05-31 00:30:38', '2023-05-31 00:30:38'),
(65, 19, 'uploads/products/16855128384.jpg', '2023-05-31 00:30:38', '2023-05-31 00:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars_rated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star_heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `prod_id`, `stars_rated`, `star_heading`, `star_description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '4', 'It was a great experience at Flora', 'It was a great experience at Flora and the arrangement was excellent and the food was amazing what I dreamed of wedding it was totally like that so. I had a great experience.', 1, '2023-03-29 23:43:46', '2023-05-10 03:09:52'),
(2, '1', '2', '5', 'What do you like about this cake Rate Description', 'What do you like about this cake Rate Description', 1, '2023-03-29 23:44:34', '2023-03-29 23:44:34'),
(3, '1', '2', '4', 'It was a great experience', 'It was a great experience over there, whether it was the food, atmosphere, decorations, other staff behavior etc everything was very good', 1, '2023-03-29 23:46:35', '2023-03-29 23:46:35'),
(4, '3', '1', '4', 'It was a great experience at Flora', 'It was a great experience at Flora and the arrangement was excellent and the food was amazing what I dreamed of wedding it was totally like that so. I had a great experience.', 1, '2023-03-30 19:50:11', '2023-03-30 19:50:11'),
(5, '3', '3', '5', 'The Bristol Hotel, a landmark of Elegance and Comfort', 'The Bristol Hotel, a landmark of Elegance and Comfort', 1, '2023-03-30 19:57:36', '2023-03-30 19:57:36'),
(6, '2', '1', '4', 'The Bristol Hotel, a landmark of Elegance and Comfort', 'The Bristol Hotel, a landmark of Elegance and Comfort', 1, '2023-04-02 07:22:57', '2023-04-02 07:22:57'),
(7, '1', '2', '5', 'The Bristol Hotel, a landmark of Elegance', 'The Bristol Hotel, a landmark of Elegance and Comfort', 1, '2023-04-23 04:40:33', '2023-04-23 04:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Z49rR8bp9pMLtYcO5uk59pmueOMhplMSlX2Cjijs', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUmJXN3FrSGVIeGJXOTFiT215aUplSGh4c1NjZFZZODd5YXhDZ05GVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC92ZW51ZS9iaXJ0aGRheS1wYXJ0eS9wcmVjaW91cy1tb21lbnRzLWJhbnF1ZXQtbmV3LWRlbGhpLTAwMDIiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTY4NDU2Njk4Njt9fQ==', 1684567990);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Venue Book Reviews in Gurgaon', '<p>Ramada Gurgaon Central is a 4-star deluxe hotel located in Sector-44, Gurgaon, and is in close proximity to airport and railway stations.</p>', 'http://localhost:8000/', 'uploads/slider/1679163273.jpg', 0, '2023-03-18 07:14:33', '2023-03-18 07:14:33'),
(2, 'The Retreat Resort', '<p>Located at Alipur in Delhi, the Resort-The Retreat Resort is easily accessible to all your guests. In business since 2003 The Retreat Resort is one of the most popular event venues in the city</p>', 'http://localhost:8000/', 'uploads/slider/1679163952.jpg', 0, '2023-03-18 07:25:52', '2023-03-18 07:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` mediumtext COLLATE utf8mb4_unicode_ci,
  `address2` mediumtext COLLATE utf8mb4_unicode_ci,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternet_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0' COMMENT '0=user, 1=admin, 2=vendor',
  `isban` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `google_id`, `facebook_id`, `lname`, `address1`, `address2`, `city`, `state`, `pincode`, `phone`, `alternet_phone`, `image`, `role_as`, `isban`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$qlh1Ltf7R/SR5//PmISJG.FSzPWYgL5eK.QJMNzGHOwkYWhlmgCjW', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 00:05:46', '2023-05-20 00:13:12', NULL, NULL, 'Rana', 'Sector 80', NULL, 'Noida', 'U.P', '896523', '8595104872', '8595104871', '1684561392.png', 1, 0),
(2, 'Vendor', 'vendor@gmail.com', NULL, '$2y$10$ms0Ah4pdg/F2wRyr2ZDkD.8akIMttPbBdEHDVou6lgkCKhQeh7e5u', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 00:06:20', '2023-05-20 00:06:20', NULL, NULL, 'Kumar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0),
(3, 'User', 'user@gmail.com', NULL, '$2y$10$NRfXE80MgGoMiUz63eevS.aQnRaHWbyZ4ToPu0kW2z7PWEYRwvdH2', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 00:06:55', '2023-05-20 00:11:37', NULL, NULL, 'Kumar', 'Sector 85', NULL, 'Samastipur', 'Bihar', '857525', '8595104872', '8595104872', '1684561297.jpg', 0, 0),
(4, 'Events Walaa', 'info@eventswalaa.com', NULL, '$2y$10$n5J3kPBGan429JxIEih0Ze7FruNdqr49X5UgsKhXlvYT.JuQuakLi', NULL, NULL, NULL, '9SzZyxLZ631B2wqaPQ42y3X0zqdTXmDZGgPLlG0akG47ZyNnfaN8XJqAeZAs', NULL, NULL, '2023-05-20 04:31:36', '2023-05-20 04:31:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blogcategory_id_foreign` (`blogcategory_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listyourbusiness`
--
ALTER TABLE `listyourbusiness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otherdetails`
--
ALTER TABLE `otherdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `otherdetails_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`),
  ADD KEY `product_colors_color_id_foreign` (`color_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listyourbusiness`
--
ALTER TABLE `listyourbusiness`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `otherdetails`
--
ALTER TABLE `otherdetails`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blogcategory_id_foreign` FOREIGN KEY (`blogcategory_id`) REFERENCES `blogcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `otherdetails`
--
ALTER TABLE `otherdetails`
  ADD CONSTRAINT `otherdetails_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
