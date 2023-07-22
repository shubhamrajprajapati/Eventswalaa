-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 09:34 AM
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
-- Database: `venuebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=visible, 1=hidden',
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcategory_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `meta_title` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
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
(5, 4, 'Five star', 'five-star', 0, '2023-03-20 01:51:55', '2023-03-20 02:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=visible, 1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Corporate party', 'corporate-party', 'Corporate party', 'uploads/category/1679215925.png', 'Corporate party', 'Corporate party', 'Corporate party', 0, '2023-03-16 00:25:47', '2023-04-10 05:34:19'),
(2, 'Wedding management', 'wedding-management', 'Wedding management', 'uploads/category/1679215934.png', 'Wedding management', 'Wedding management', 'Wedding management', 0, '2023-03-18 21:12:20', '2023-03-18 21:52:14'),
(3, 'Wedding Anniversary', 'wedding-anniversary', 'Wedding Anniversary', 'uploads/category/1679215946.png', 'Wedding Anniversary', 'Wedding Anniversary', 'Wedding Anniversary', 0, '2023-03-18 21:12:33', '2023-03-28 00:35:32'),
(4, 'Birthday party', 'birthday-party', 'Birthday party', 'uploads/category/1679215956.png', 'Birthday party', 'Birthday party', 'Birthday party', 0, '2023-03-18 21:12:47', '2023-03-18 21:52:36'),
(5, 'Engagement', 'engagement', 'Engagement', 'uploads/category/1679215963.png', 'Engagement', 'Engagement', 'Engagement', 0, '2023-03-18 21:12:57', '2023-03-18 21:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) DEFAULT NULL,
  `occasion_type` varchar(191) NOT NULL,
  `date` varchar(191) NOT NULL,
  `venue_address` varchar(191) DEFAULT NULL,
  `no_guests` varchar(191) NOT NULL,
  `budget_range` varchar(191) NOT NULL,
  `req_meal` varchar(191) NOT NULL,
  `req_drinks` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `tracking_msg` varchar(191) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `occasion_type`, `date`, `venue_address`, `no_guests`, `budget_range`, `req_meal`, `req_drinks`, `name`, `mobile`, `email`, `notes`, `tracking_msg`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'engagement', '2023-04-01', 'IMT Manesar', '232', '1600-1800', 'Non Veg', 'No Alcohol', 'User', '8595104872', 'user@gmail.com', '<p>Lead generated through online</p>', '1', 0, '2023-03-31 01:38:53', '2023-03-31 01:56:30'),
(2, '2', 'Corporate Party', '2023-04-15', 'Sector 105 upadated', '5444', '400-600', 'Both Veg and Non Veg', 'Alcoholic Drinks', 'Admin upadated', '8595104872', 'admin@gmail.com', '<p>Vender generate&nbsp;contact</p>', '3', 0, '2023-03-31 01:59:29', '2023-03-31 02:18:05'),
(3, '3', 'merriage-anniversary', '2023-04-07', 'Plot No 89 Noida UP', '418', '800-1000', 'Veg', 'No Alcohol', 'Vendor', '1111111', 'vendor@gmail.com', '<p>Vender</p>', '4', 0, '2023-03-31 02:14:57', '2023-03-31 02:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listyourbusiness`
--

CREATE TABLE `listyourbusiness` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venue_name` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `state` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `max_capacity` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `venue_url` varchar(191) DEFAULT NULL,
  `owner_name` varchar(191) DEFAULT NULL,
  `owner_phone` varchar(191) DEFAULT NULL,
  `owner_email` varchar(191) DEFAULT NULL,
  `terms` varchar(191) DEFAULT NULL,
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
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `occasion_type` varchar(191) NOT NULL,
  `date` varchar(191) NOT NULL,
  `venue_address` varchar(191) NOT NULL,
  `no_guests` varchar(191) NOT NULL,
  `budget_range` varchar(191) NOT NULL,
  `req_meal` varchar(191) NOT NULL,
  `req_drinks` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `tracking_msg` varchar(191) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden, 0=visible',
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `heading_occasions` varchar(191) DEFAULT NULL,
  `good_for_occasions` longtext DEFAULT NULL,
  `operating_time` varchar(191) DEFAULT NULL,
  `heading_cuisines` varchar(191) DEFAULT NULL,
  `cuisines_served` longtext DEFAULT NULL,
  `heading_facilities` varchar(191) DEFAULT NULL,
  `facilities` longtext DEFAULT NULL,
  `heading_space` varchar(191) DEFAULT NULL,
  `space_type` longtext DEFAULT NULL,
  `heading_parking` varchar(191) DEFAULT NULL,
  `car_parking` longtext DEFAULT NULL,
  `heading_information` varchar(191) DEFAULT NULL,
  `more_information` longtext DEFAULT NULL,
  `heading_usps` varchar(191) DEFAULT NULL,
  `usps_power` longtext DEFAULT NULL,
  `heading_room` varchar(191) DEFAULT NULL,
  `room_details` longtext DEFAULT NULL,
  `heading_policy` varchar(191) DEFAULT NULL,
  `service_policy` longtext DEFAULT NULL,
  `heading_summary` varchar(191) DEFAULT NULL,
  `summary_event_space` longtext DEFAULT NULL,
  `heading_landmark` varchar(191) DEFAULT NULL,
  `nearest_landmark` longtext DEFAULT NULL,
  `heading_terms` varchar(191) DEFAULT NULL,
  `policy_terms` longtext DEFAULT NULL,
  `heading_disclaimer` varchar(191) DEFAULT NULL,
  `disclaimer` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otherdetails`
--

INSERT INTO `otherdetails` (`id`, `product_id`, `category_id`, `heading_occasions`, `good_for_occasions`, `operating_time`, `heading_cuisines`, `cuisines_served`, `heading_facilities`, `facilities`, `heading_space`, `space_type`, `heading_parking`, `car_parking`, `heading_information`, `more_information`, `heading_usps`, `usps_power`, `heading_room`, `room_details`, `heading_policy`, `service_policy`, `heading_summary`, `summary_event_space`, `heading_landmark`, `nearest_landmark`, `heading_terms`, `policy_terms`, `heading_disclaimer`, `disclaimer`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Good for Occasions at Vardaan Banquet  Update', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Fashion Show</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>&nbsp;Update</li>\r\n</ul>', 'Operating time 24X7 updated', 'Cuisines Served at Vardaan Banquet  Update', '<ul>\r\n	<li>Indian</li>\r\n	<li>Chinese</li>\r\n	<li>Italian</li>\r\n	<li>Thai</li>\r\n	<li>Mughlai</li>\r\n	<li>Oriental&nbsp;&nbsp;Update</li>\r\n</ul>', 'Facilities at Vardaan Banquet  Update', '<ul>\r\n	<li>AV Equipment</li>\r\n	<li>Smoking Area</li>\r\n	<li>Valet Parking</li>\r\n	<li>DJ Available</li>\r\n	<li>Power Backup</li>\r\n	<li>WiFi&nbsp;&nbsp;Update</li>\r\n</ul>', 'Space Type at Vardaan Banquet  Update', '<ul>\r\n	<li>Banquet Halls</li>\r\n	<li>Seminar Halls</li>\r\n	<li>Unique Venues</li>\r\n	<li>Auditoriums&nbsp;&nbsp;Update</li>\r\n</ul>', 'Car Parking at Vardaan Banquet  Update', '<ul style=\"list-style-type:none\">\r\n	<li><strong>Parking Outdoor:</strong> Outdoor</li>\r\n	<li><strong>Parking Capacity:</strong> 1500</li>\r\n	<li><strong>Valet Parking:</strong> Available&nbsp;&nbsp;Update</li>\r\n</ul>', 'More Information at Vardaan Banquet  Update', '<p>Payment Accepted</p>\r\n\r\n<ul>\r\n	<li>Cash</li>\r\n	<li>Credit Card</li>\r\n	<li>Net Banking</li>\r\n	<li>Cheque&nbsp;&nbsp;Update</li>\r\n</ul>', 'USPS power at Vardaan Banquet  Update', '<ul>\r\n	<li>Ample parking space with Valet</li>\r\n	<li>2 KMS Away from Moti Nagar Metro Station</li>\r\n	<li>Near CTC Mall&nbsp;&nbsp;Update</li>\r\n</ul>', 'Room Details at Vardaan Banquet  Update', '<p>No. of Rooms : 200&nbsp;&nbsp;Update</p>', NULL, NULL, 'Summary event space at Vardaan Banquet  Update', '<p><strong>Euphoria Mansion has 2 spaces (s) located in Moti Nagar, Delhi</strong><br />\r\nMaharaja Hall can accommodate 50 - 700 guests (s) Veg Menu starting price of Maharaja Hall is Rs. 800 per plate.&nbsp;&nbsp;Update</p>', 'Nearest Landmark at Vardaan Banquet  Update', '<ul>\r\n	<li>Nearest Metro Station</li>\r\n	<li>Moti Nagar , Distance 2 KMS&nbsp;&nbsp;Update</li>\r\n</ul>', 'Policy terms at Vardaan Banquet  Update', '<p>Our facilities provide all the services you need. We offer a wide variety of equipment to assist you through any function. Our policy for catering is open and that too without royalty for all caterers whichever you like. Impress your corporate partners, guests, relatives and family members with del&nbsp;&nbsp;Update</p>', 'Disclaimer at Vardaan Banquet  Update', '<p>The prices and other information described above is indicative and is reflective of the last time this information was updated on venuelook.com. Venuelook.com does not guarantee the above prices as packages are generally customized based on the event requirements.&nbsp;&nbsp;Update</p>', '2023-05-20 00:39:07', '2023-05-20 00:55:30'),
(2, 2, 4, 'Good For Occasions At Precious Moments Banquet', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Fashion Show</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n</ul>', 'Operating time 24X7', 'Cuisines Served At Precious Moments Banquet', '<ul>\r\n	<li>Indian</li>\r\n	<li>Chinese</li>\r\n	<li>Italian</li>\r\n	<li>Thai</li>\r\n	<li>Shakes</li>\r\n</ul>', 'Facilities At Precious Moments Banquet', '<ul>\r\n	<li>AV Equipment</li>\r\n	<li>Full Bar</li>\r\n	<li>Roof Top</li>\r\n	<li>Smoking Area</li>\r\n	<li>Valet Parking</li>\r\n	<li>DJ Available</li>\r\n	<li>Catering Available</li>\r\n</ul>', 'Space Type At Precious Moments Banquet', '<ul>\r\n	<li>Banquet Halls</li>\r\n	<li>Bars and Pubs</li>\r\n	<li>Restaurants</li>\r\n	<li>Hotels</li>\r\n	<li>Clubs</li>\r\n	<li>Conference Rooms</li>\r\n</ul>', 'Car Parking At Precious Moments Banquet', '<ul style=\"list-style-type:none\">\r\n	<li><strong>Parking Outdoor:</strong> Bikes &amp; Cars Can Be Parked</li>\r\n	<li><strong>Parking Capacity:</strong> 100</li>\r\n	<li><strong>Valet Parking:</strong> Available</li>\r\n	<li><strong>Parking Timing:</strong> 24 Hrs</li>\r\n</ul>', 'More Information At Precious Moments Banquet', '<p>Payment Accepted</p>\r\n\r\n<ul>\r\n	<li>Cash</li>\r\n	<li>Credit Card</li>\r\n	<li>Net Banking</li>\r\n	<li>UPI</li>\r\n	<li>Paytm</li>\r\n	<li>Google Pay</li>\r\n	<li>PhonePe</li>\r\n</ul>', 'USPS power At Precious Moments Banquet', '<ul>\r\n	<li>Great Place for wedding related events</li>\r\n	<li>Great Place for Corporate Events</li>\r\n	<li>Great Place for Social Events</li>\r\n	<li>Best food quality</li>\r\n	<li>Friendly staff</li>\r\n	<li>Affordable prices</li>\r\n	<li>Multicuisine</li>\r\n	<li>Have 394 rooms for accomodation</li>\r\n</ul>', 'Room Details At Precious Moments Banquet', '<p>No. of Rooms 394</p>', NULL, NULL, 'Summary event space At Precious Moments Banquet', '<p><strong>Welcomhotel By Itc Hotels Dwarka New Delhi has 5 space(s) located in Dwarka, Delhi</strong><br />\r\nOpen Lawn can accommodate 100 - 200 guest(s) Veg Menu starting price of Open Lawn is Rs. 2600 per plate. and Non Veg Menu starting price of Open Lawn is Rs. 2800 per plate.</p>', 'Nearest Landmark At Precious Moments Banquet', '<p>Nearest Metro Station,&nbsp;Dwarka Sec-10, Distance 100 Mtrs</p>', 'Policy terms At Precious Moments Banquet', '<p>Our facilities provide all the services you need. We offer a wide variety of equipment to assist you through any function. Our policy for catering is open and that too without royalty for all caterers whichever you like. Impress your corporate partners, guests, relatives and family members with del...icious catered lunches at meetings, symposiums and workshops. Viceroy Hall at Welcomhotel By Itc Hotels Dwarka New Delhi menu features an array of savory dishes from around the world. The decorative desserts always impress our guests&nbsp;</p>', 'Disclaimer At Precious Moments Banquet', '<p>The prices and other information described above is indicative and is reflective of the last time this information was updated on venuelook.com. Venuelook.com does not guarantee the above prices as packages are generally customized based on the event requirements.</p>', '2023-05-20 02:02:40', '2023-05-20 02:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `brand` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `all_party` varchar(191) DEFAULT NULL,
  `hall_one` varchar(191) DEFAULT NULL,
  `hall_two` varchar(191) DEFAULT NULL,
  `hall_three` varchar(191) DEFAULT NULL,
  `hall_four` varchar(191) DEFAULT NULL,
  `hall_five` varchar(191) DEFAULT NULL,
  `hall_six` varchar(191) DEFAULT NULL,
  `hall_seven` varchar(191) DEFAULT NULL,
  `mincapacity_one` varchar(191) DEFAULT NULL,
  `mincapacity_two` varchar(191) DEFAULT NULL,
  `mincapacity_three` varchar(191) DEFAULT NULL,
  `mincapacity_four` varchar(191) DEFAULT NULL,
  `mincapacity_five` varchar(191) DEFAULT NULL,
  `mincapacity_six` varchar(191) DEFAULT NULL,
  `mincapacity_seven` varchar(191) DEFAULT NULL,
  `maxcapacity_one` varchar(191) DEFAULT NULL,
  `maxcapacity_two` varchar(191) DEFAULT NULL,
  `maxcapacity_three` varchar(191) DEFAULT NULL,
  `maxcapacity_four` varchar(191) DEFAULT NULL,
  `maxcapacity_five` varchar(191) DEFAULT NULL,
  `maxcapacity_six` varchar(191) DEFAULT NULL,
  `maxcapacity_seven` varchar(191) DEFAULT NULL,
  `vegprice_one` varchar(191) DEFAULT NULL,
  `vegprice_two` varchar(191) DEFAULT NULL,
  `vegprice_three` varchar(191) DEFAULT NULL,
  `vegprice_four` varchar(191) DEFAULT NULL,
  `vegprice_five` varchar(191) DEFAULT NULL,
  `vegprice_six` varchar(191) DEFAULT NULL,
  `vegprice_seven` varchar(191) DEFAULT NULL,
  `veg_sell_price_one` varchar(191) DEFAULT NULL,
  `veg_sell_price_two` varchar(191) DEFAULT NULL,
  `veg_sell_price_three` varchar(191) DEFAULT NULL,
  `veg_sell_price_four` varchar(191) DEFAULT NULL,
  `veg_sell_price_five` varchar(191) DEFAULT NULL,
  `veg_sell_price_six` varchar(191) DEFAULT NULL,
  `veg_sell_price_seven` varchar(191) DEFAULT NULL,
  `nonprice_one` varchar(191) DEFAULT NULL,
  `nonprice_two` varchar(191) DEFAULT NULL,
  `nonprice_three` varchar(191) DEFAULT NULL,
  `nonprice_four` varchar(191) DEFAULT NULL,
  `nonprice_five` varchar(191) DEFAULT NULL,
  `nonprice_six` varchar(191) DEFAULT NULL,
  `nonprice_seven` varchar(191) DEFAULT NULL,
  `non_sell_price_one` varchar(191) DEFAULT NULL,
  `non_sell_price_two` varchar(191) DEFAULT NULL,
  `non_sell_price_three` varchar(191) DEFAULT NULL,
  `non_sell_price_four` varchar(191) DEFAULT NULL,
  `non_sell_price_five` varchar(191) DEFAULT NULL,
  `non_sell_price_six` varchar(191) DEFAULT NULL,
  `non_sell_price_seven` varchar(191) DEFAULT NULL,
  `space_capacity` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `state` varchar(191) DEFAULT NULL,
  `full_address` varchar(191) DEFAULT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=tranding,0=not-tranding',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `meta_title` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `user_id`, `name`, `slug`, `brand`, `description`, `all_party`, `hall_one`, `hall_two`, `hall_three`, `hall_four`, `hall_five`, `hall_six`, `hall_seven`, `mincapacity_one`, `mincapacity_two`, `mincapacity_three`, `mincapacity_four`, `mincapacity_five`, `mincapacity_six`, `mincapacity_seven`, `maxcapacity_one`, `maxcapacity_two`, `maxcapacity_three`, `maxcapacity_four`, `maxcapacity_five`, `maxcapacity_six`, `maxcapacity_seven`, `vegprice_one`, `vegprice_two`, `vegprice_three`, `vegprice_four`, `vegprice_five`, `vegprice_six`, `vegprice_seven`, `veg_sell_price_one`, `veg_sell_price_two`, `veg_sell_price_three`, `veg_sell_price_four`, `veg_sell_price_five`, `veg_sell_price_six`, `veg_sell_price_seven`, `nonprice_one`, `nonprice_two`, `nonprice_three`, `nonprice_four`, `nonprice_five`, `nonprice_six`, `nonprice_seven`, `non_sell_price_one`, `non_sell_price_two`, `non_sell_price_three`, `non_sell_price_four`, `non_sell_price_five`, `non_sell_price_six`, `non_sell_price_seven`, `space_capacity`, `city`, `state`, `full_address`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Vardaan Banquet And Party Lawn in Dwarka - Delhi  Update', 'vardaan-banquet-and-party-lawn-in-dwarka-delhi-update', 'Five star', '<p>Surya grand banquet is a landmark for your wedding, reception, sagan, ring ceremony, cocktail, birthday, Sankaran &amp; corporate events. we have four centralized ac halls with the latest interior, furnishing &amp; furniture. mouthwatering multi-cuisine menu with 5-star amenities will make your enjoyable function memorable. theme-based decor &amp; customized decor for your function increase the grace of your event. our experienced team always stands with u to make your event successful.&nbsp;&nbsp;Update</p>', 'All Party / Event Spaces At Vardaan Banquet And Party Lawn  Update', 'Maharaja Hall  Update', 'Darbar Hall  Update', NULL, NULL, NULL, NULL, NULL, '100', '10', NULL, NULL, NULL, NULL, NULL, '1000', '100', NULL, NULL, NULL, NULL, NULL, '100', '100', NULL, NULL, NULL, NULL, NULL, '100', '100', NULL, NULL, NULL, NULL, NULL, '100', '100', NULL, NULL, NULL, NULL, NULL, '100', '100', NULL, NULL, NULL, NULL, NULL, 'Banquet Hall 1000  Update', 'Delhi Updated', 'Delhi Updated', 'Society, opp. SHRI NIKETAN, near Sector 7 Dwarka, Palam Village, Dwarka, New Delhi, Delhi 110077 Updated', 1, 0, 'Vardaan Banquet And Party Lawn in Dwarka - Delhi - Get Free Quotes - Reviews - Rating  - Events Walla Updated', 'Vardaan Banquet And Party Lawn in Dwarka - Delhi - Get Free Quotes - Reviews - Rating  - Events Walla Updated', 'Vardaan Banquet And Party Lawn in Dwarka - Delhi - Get Free Quotes - Reviews - Rating  - Events Walla Updated', '2023-05-20 00:39:07', '2023-05-20 00:55:30'),
(2, 4, NULL, 'Precious Moments Banquet', 'precious-moments-banquet-new-delhi-0002', 'Five star', '<p>PRECIOUS MOMENTS banquet hall, a majestic and luxurious constructed mansion where you can make the most important day auspicious. A perfect place encompasses five halls, fully air conditioning furnished that accumulate approximately 1000 people in it. With the help of a professional team and experts at precious moments, you can encounter the grand events that make your day brighter. Uncover the exclusive range of luxuries and striking ameneties at Precious moments for the best day of your life that would become more auspicious with the service offered thereby. With the collaboration of your choices and skills of the experts employed at our place, we are delighted to announce that we accomplish more than thousands of events with happy and satisfied clients.</p>', 'All Party / Event Spaces At Precious Moments Banquet', 'Open Lawn', 'Poolside', 'Viceroy Hall', NULL, NULL, NULL, NULL, '100', '100', '100', NULL, NULL, NULL, NULL, '1000', '500', '1200', NULL, NULL, NULL, NULL, '250', '320', '2700', NULL, NULL, NULL, NULL, '200', '300', '2500', NULL, NULL, NULL, NULL, '350', '720', '2900', NULL, NULL, NULL, NULL, '300', '650', '2500', NULL, NULL, NULL, NULL, 'Space Capacity 600', 'Delhi', 'Delhi', 'Najafgarh Rd, near Metro Pillar No. 571, Block B1, Janakpuri, New Delhi, Delhi 110058', 1, 0, 'Precious Moments Banquet Janakpuri Delhi - Events Wallaa', 'Precious Moments Banquet Janakpuri Delhi - Events Wallaa', 'Precious Moments Banquet Janakpuri Delhi - Events Wallaa', '2023-05-20 02:02:40', '2023-05-20 02:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
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
(9, 2, 'uploads/products/16845679604.png', '2023-05-20 02:02:40', '2023-05-20 02:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `prod_id` varchar(191) NOT NULL,
  `stars_rated` varchar(191) NOT NULL,
  `star_heading` varchar(191) DEFAULT NULL,
  `star_description` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `prod_id`, `stars_rated`, `star_heading`, `star_description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '4', 'It was a great experience at Flora', 'It was a great experience at Flora and the arrangement was excellent and the food was amazing what I dreamed of wedding it was totally like that so. I had a great experience.', 1, '2023-03-29 23:43:46', '2023-05-10 03:09:52'),
(2, '1', '3', '5', 'What do you like about this cake Rate Description', 'What do you like about this cake Rate Description', 1, '2023-03-29 23:44:34', '2023-03-29 23:44:34'),
(3, '1', '4', '4', 'It was a great experience', 'It was a great experience over there, whether it was the food, atmosphere, decorations, other staff behavior etc everything was very good', 1, '2023-03-29 23:46:35', '2023-03-29 23:46:35'),
(4, '3', '1', '4', 'It was a great experience at Flora', 'It was a great experience at Flora and the arrangement was excellent and the food was amazing what I dreamed of wedding it was totally like that so. I had a great experience.', 1, '2023-03-30 19:50:11', '2023-03-30 19:50:11'),
(5, '3', '3', '5', 'The Bristol Hotel, a landmark of Elegance and Comfort', 'The Bristol Hotel, a landmark of Elegance and Comfort', 1, '2023-03-30 19:57:36', '2023-03-30 19:57:36'),
(6, '2', '1', '4', 'The Bristol Hotel, a landmark of Elegance and Comfort', 'The Bristol Hotel, a landmark of Elegance and Comfort', 1, '2023-04-02 07:22:57', '2023-04-02 07:22:57'),
(7, '1', '40', '5', 'The Bristol Hotel, a landmark of Elegance', 'The Bristol Hotel, a landmark of Elegance and Comfort', 1, '2023-04-23 04:40:33', '2023-04-23 04:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `prod_id` varchar(191) NOT NULL,
  `review_heading` varchar(191) NOT NULL,
  `user_review` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `image` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden, 0=visible',
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(191) DEFAULT NULL,
  `facebook_id` varchar(191) DEFAULT NULL,
  `lname` varchar(191) DEFAULT NULL,
  `address1` mediumtext DEFAULT NULL,
  `address2` mediumtext DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `state` varchar(191) DEFAULT NULL,
  `pincode` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `alternet_phone` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user, 1=admin, 2=vendor',
  `isban` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `google_id`, `facebook_id`, `lname`, `address1`, `address2`, `city`, `state`, `pincode`, `phone`, `alternet_phone`, `image`, `role_as`, `isban`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$qlh1Ltf7R/SR5//PmISJG.FSzPWYgL5eK.QJMNzGHOwkYWhlmgCjW', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 00:05:46', '2023-05-20 00:13:12', NULL, NULL, 'Rana', 'Sector 80', NULL, 'Noida', 'U.P', '896523', '8595104872', '8595104871', '1684561392.png', 1, 0),
(2, 'Vendor', 'vendor@gmail.com', NULL, '$2y$10$ms0Ah4pdg/F2wRyr2ZDkD.8akIMttPbBdEHDVou6lgkCKhQeh7e5u', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 00:06:20', '2023-05-20 00:06:20', NULL, NULL, 'Kumar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0),
(3, 'User', 'user@gmail.com', NULL, '$2y$10$NRfXE80MgGoMiUz63eevS.aQnRaHWbyZ4ToPu0kW2z7PWEYRwvdH2', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 00:06:55', '2023-05-20 00:11:37', NULL, NULL, 'Kumar', 'Sector 85', NULL, 'Samastipur', 'Bihar', '857525', '8595104872', '8595104872', '1684561297.jpg', 0, 0);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listyourbusiness`
--
ALTER TABLE `listyourbusiness`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `otherdetails`
--
ALTER TABLE `otherdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
