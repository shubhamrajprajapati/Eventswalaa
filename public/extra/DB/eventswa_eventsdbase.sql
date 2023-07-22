-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2023 at 01:13 PM
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
(1, 'Birthday Party', 'birthday-party-ideas', 'Birthday Party Ideas', '1680872087.jpg', 'Birthday Party Ideas', 'Birthday Party Ideas', 'Birthday Party Ideas', 0, '2023-04-06 12:48:39', '2023-04-07 07:48:08'),
(2, 'Corporate Events', 'corporate-events', 'Corporate Events', '1680872961.jpg', 'Corporate Events', 'Corporate Events', 'Corporate Events', 0, '2023-04-07 07:36:53', '2023-04-07 07:47:55');

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
(1, 1, 1, 'Choosing The Right Corporate Party Venue', 'choosing-the-right-corporate-party-venue-00001', '<p>When planning a corporate party, there are endless things that demand your unwavering attention. While making a lot of decisions, one decision that you need to take as soon as possible is finalizing the party venue as it is going to have a huge impact on the success of your party. Here, we bring you some factors to keep in mind that will help in choosing the right venue.</p>\r\n\r\n<h3><strong>Location of the venue</strong></h3>\r\n\r\n<p>The first factor when choosing a corporate party venue is its location. If it is a local party, ensure the venue is in the area that is easy to access by most of the attendees. If you are having outstation guests, choose a venue that is close to the airport or the hotel where they are staying to make it easier and convenient for them. Once a venue has been finalized, book it immediately. It is always to get the booking done well in advance.</p>\r\n\r\n<p>Another factor that you must keep in mind is the parking space available at the venue. If you are planning a huge party and the venue lacks adequate space, it is sure to create a parking mess. Thus, look for a venue that has ample space for the guests to park their vehicles with the utmost ease and convenience. If the venue is excellent but lacks enough parking area, see if you can reserve nearby parking slots. Encourage your colleagues and employees to share a cab or car. If the venue offers valet parking, it can reduce parking dilemmas to a significant extent.</p>', '1681039303.jpg', 0, 'Choosing The Right Corporate Party Venue - Events Walaa', 'Choosing The Right Corporate Party Venue - Events Walaa', 'Choosing The Right Corporate Party Venue - Events Walaa', '2023-04-08 01:22:34', '2023-04-09 06:08:11'),
(2, 2, 1, 'Reasons To Book Your Wedding Makeup Artist At The Earliest', 'reasons-to-book-your-wedding-makeup-artist-at-the-earliest-0002', '<p>Wedding planning is a tedious process and requires a lot of work that can be exhausting. Couples usually tend to focus on the bigger things like booking a venue, a photographer, or a caterer and sometimes end up overlooking the smaller ones like booking the make-up artist.</p>\r\n\r\n<p>Properly grooming yourself and getting ready for the wedding is the most important of all because at the end of the day no one is going to remember how huge your wedding was or the kind of flowers you chose, what everyone will actually remember is how happy the lovely couple was and how beautiful they looked. Now that it&rsquo;s time to focus on the essentials, we&rsquo;re here to convince you why hiring a makeup artist at the earliest is the best wedding decision you will make!</p>\r\n\r\n<p><strong>When to Start Hunting for a Makeup Artist</strong></p>\r\n\r\n<p>The best time to start hunting for a makeup artist will be around six to eight months prior to your wedding, as the trial runs usually take time. Looking for an artist and finalizing one can be a time-consuming process so starting well in advance will give you an edge over the other brides and give you sufficient time to make as many trials runs as it needs to find the perfect artist suitable for you. We recommend looking for a professional makeup artist with sufficient experience in the field that can also give you advice on how to style your hair in accordance with your wedding lehenga.</p>\r\n\r\n<p>&nbsp;</p>', '1680942231.png', 0, 'Reasons To Book Your Wedding Makeup Artist At The Earliest - Events Walaa', 'Reasons To Book Your Wedding Makeup Artist At The Earliest - Events Walaa', 'Reasons To Book Your Wedding Makeup Artist At The Earliest - Events Walaa', '2023-04-08 02:53:51', '2023-04-08 04:13:20'),
(3, 1, 1, 'The Great Indian Wedding Choreography', 'the-great-indian-wedding-choreography-00003', '<p>A wedding is a family celebration incomplete without singing and dancing and it isn&rsquo;t surprising to know that all family members enjoy the wedding songs and dances irrespective of their age or relation. Earlier people used to dance in whatever they could and they tried to dance like actors and actresses. Every family has a few members who can dance well. These people used to give a performance on popular songs or songs demanded by the guests.</p>\r\n\r\n<p>Today wedding planners provide all assistance from song selection to makeup and preparing the dance floor to choreography. If you are planning a wedding, you can also choose a wedding choreography that matches your wedding theme.</p>\r\n\r\n<p>I won&rsquo;t call it bride and groom as it is your choice but it better suits the wedding couple. And there are plenty of options in both Bollywood and Hollywood movies for your dance performance. Most people choose Cinderella dancing with Prince Charming at the ball but you need to make it a little different from the original and others. You need to work with your choreographer to improve the performance and make it unique.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1681039243.jpg', 0, 'Choosing The Right Corporate Party Venue - Event Walla', 'Choosing The Right Corporate Party Venue - Event Walla', 'Choosing The Right Corporate Party Venue - Event Walla', '2023-04-09 05:50:43', '2023-04-09 05:50:43'),
(4, 2, 1, 'Unique And Best Rose Mehndi Designs For Brides And Bridesmaids', 'unique-and-best-rose-mehndi-designs-for-brides-and-bridesmaids-0004', '<p>As important as a bride&rsquo;s wedding outfit is, the bridal mehndi also holds immense significance and is an indispensable part of the occasion. The tradition of applying mehndi as a part of the wedding ritual is so important that an entire day is devoted to it, wherein the bride, the bridesmaids, and other family members get together and enjoy a fun-filled evening of music and dance while henna is being applied to their hands and legs, in exquisite patterns, colors, and intricately beautiful designs.</p>\r\n\r\n<p>Nowadays, rose mehndi is quite the charm. Let&rsquo;s look at some unique rose mehndi designs as you gear up for this wedding season.</p>\r\n\r\n<p>It is an exciting idea to combine rose and lotus flower motifs to create an exquisite looking mehndi design, especially if you want to create a fuller design to cover the entire palm&nbsp;Before finalizing any of the venues or resorts for wedding ceremonies, it is important to visit them and compare and contrast each so that the venue you finally decide ensures a wedding that closely matches your dreams. Some people may check out the pics and make a decision which may turn out to be misleading at times.</p>', '1681042144.jpg', 0, 'Unique And Best Rose Mehndi Designs For Brides And Bridesmaids - Event Walla', 'Unique And Best Rose Mehndi Designs For Brides And Bridesmaids - Event Walla', 'Unique And Best Rose Mehndi Designs For Brides And Bridesmaids - Event Walla', '2023-04-09 06:39:04', '2023-04-09 06:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `category_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'One star', 'one-star', 0, '2023-03-16 05:56:00', '2023-04-03 09:26:13'),
(2, 2, 'Two star', 'two-star', 0, '2023-03-20 06:44:20', '2023-03-20 07:21:17'),
(3, 1, 'Three star', 'three-star', 0, '2023-03-20 07:12:07', '2023-04-03 09:25:19'),
(4, 2, 'Four star', 'four-star', 0, '2023-03-20 07:21:42', '2023-03-20 07:21:42'),
(5, 4, 'Five star', 'five-star', 0, '2023-03-20 07:21:55', '2023-03-20 08:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Corporate party', 'corporate-party', 'Corporate party', 'uploads/category/1679215925.png', 'Corporate party', 'Corporate party', 'Corporate party', 0, '2023-03-16 05:55:47', '2023-03-19 03:22:05'),
(2, 'Wedding management', 'wedding-management', 'Wedding management', 'uploads/category/1679215934.png', 'Wedding management', 'Wedding management', 'Wedding management', 0, '2023-03-19 02:42:20', '2023-03-19 03:22:14'),
(3, 'Wedding Anniversary', 'wedding-anniversary', 'Wedding Anniversary', 'uploads/category/1679215946.png', 'Wedding Anniversary', 'Wedding Anniversary', 'Wedding Anniversary', 0, '2023-03-19 02:42:33', '2023-03-28 06:05:32'),
(4, 'Birthday party', 'birthday-party', 'Birthday party', 'uploads/category/1679215956.png', 'Birthday party', 'Birthday party', 'Birthday party', 0, '2023-03-19 02:42:47', '2023-03-19 03:22:36'),
(5, 'Engagement', 'engagement', 'Engagement', 'uploads/category/1679215963.png', 'Engagement', 'Engagement', 'Engagement', 0, '2023-03-19 02:42:57', '2023-03-19 03:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Red', 'Red', 0, '2023-03-17 01:40:43', '2023-03-17 04:37:10'),
(2, 'Green', 'green', 0, '2023-03-17 01:44:50', '2023-03-17 05:00:17'),
(3, 'Blue', 'blue', 0, '2023-03-17 01:44:59', '2023-03-17 04:37:21'),
(4, 'Black', 'black', 0, '2023-03-17 01:45:12', '2023-03-17 04:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occasion_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_guests` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget_range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_meal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_drinks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `tracking_msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden, 0=visible	',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `occasion_type`, `date`, `venue_address`, `no_guests`, `budget_range`, `req_meal`, `req_drinks`, `name`, `mobile`, `email`, `notes`, `tracking_msg`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'engagement', '2023-04-01', 'IMT Manesar', '232', '1600-1800', 'Non Veg', 'No Alcohol', 'User', '8595104872', 'user@gmail.com', '<p>Lead generated through online</p>', '1', 0, '2023-03-31 07:08:53', '2023-03-31 07:26:30'),
(2, '2', 'Corporate Party', '2023-04-15', 'Sector 105 upadated', '5444', '400-600', 'Both Veg and Non Veg', 'Alcoholic Drinks', 'Admin upadated', '8595104872', 'admin@gmail.com', '<p>Vender generate&nbsp;contact</p>', '3', 0, '2023-03-31 07:29:29', '2023-03-31 07:48:05'),
(3, '3', 'merriage-anniversary', '2023-04-07', 'Plot No 89 Noida UP', '418', '800-1000', 'Veg', 'No Alcohol', 'Vendor', '1111111', 'vendor@gmail.com', '<p>Vender</p>', '4', 0, '2023-03-31 07:44:57', '2023-03-31 07:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `venue_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `venue_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listyourbusiness`
--

INSERT INTO `listyourbusiness` (`id`, `venue_name`, `country`, `state`, `city`, `address`, `max_capacity`, `description`, `venue_url`, `owner_name`, `owner_phone`, `owner_email`, `terms`, `created_at`, `updated_at`) VALUES
(1, 'Bishwanath', 'India', 'Bihar', 'Samastipur', 'DLF 3', '5000', 'List your business', 'https://bootsnipp.com/', 'Venue Ownare', '8595104872', 'bpyadav009@gmail.com', NULL, '2023-03-22 09:33:09', '2023-03-22 09:33:09'),
(2, 'Venue of the years', 'India', 'Haryana', 'Gurgaon', 'IMT manesar Gurgaon', '7854', 'Hi there', 'https://bootsnipp.com/', 'Admin', '8595104872', 'email@gmail.com', NULL, '2023-03-30 05:50:57', '2023-03-30 05:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_10_075116_add_details_to_users_table', 1),
(6, '2023_03_10_130031_create_categories_table', 1),
(7, '2023_03_12_082949_create_brands_table', 1),
(8, '2023_03_12_181540_create_products_table', 1),
(9, '2023_03_12_183209_create_product_images_table', 1),
(10, '2023_03_17_061040_create_colors_table', 2),
(11, '2023_03_17_140024_create_product_colors_table', 3),
(12, '2023_03_18_122729_create_sliders_table', 4),
(13, '2023_03_22_130124_create_listyourbusiness_table', 5),
(14, '2023_03_27_134534_create_ratings_table', 6),
(15, '2023_03_28_094045_create_reviews_table', 7),
(16, '2023_03_30_110648_create_contacts_table', 8),
(17, '2023_03_31_095456_create_orders_table', 9),
(18, '2014_10_12_200000_add_two_factor_columns_to_users_table', 10),
(19, '2023_04_01_180535_create_sessions_table', 10),
(20, '2023_04_05_165944_create_blogcategories_table', 11),
(21, '2023_04_07_145401_create_blogs_table', 12),
(22, '2023_04_09_173856_create_otherdetails_table', 13);

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
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, '3', 'wedding-management', '2023-04-01', 'IMT Manesar', '232', '1600-1800', 'Veg', 'No Alcohol', 'User', '8595104872', 'user@gmail.com', '<p>Lead generated through online</p>', '1', 0, '2023-03-31 06:18:17', '2023-03-31 07:16:57'),
(2, '3', 'engagement', '2023-04-03', 'Sector 105', '800', '400-600', 'Veg', 'No Alcohol', 'Bishwanath', '85951048720', 'user@gmail.com', '<p>lead generate&nbsp; Off line&nbsp;</p>', '2', 0, '2023-03-31 06:25:27', '2023-03-31 06:25:27'),
(3, '2', 'birthday-party', '2023-04-13', 'Sector - 03, Noida', '200', '1400-1600', 'Veg', 'Alcohol', 'Vendor', '9852124521', 'vendor@gmail.com', '<p>Lead generated friend&nbsp;</p>', '3', 0, '2023-03-31 06:30:11', '2023-03-31 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `otherdetails`
--

CREATE TABLE `otherdetails` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
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
('admin@gmail.com', '$2y$10$K.s4wLp/86x87cChHqeWcueuZ1oE5eZbO/8LxeQwRvSG7CAc2SPw.', '2023-03-23 09:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `all_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mincapacity_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxcapacity_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegprice_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veg_sell_price_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonprice_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_sell_price_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `space_capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_occasions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_for_occasions` longtext COLLATE utf8mb4_unicode_ci,
  `operating_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_cuisines` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisines_served` longtext COLLATE utf8mb4_unicode_ci,
  `heading_facilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facilities` longtext COLLATE utf8mb4_unicode_ci,
  `heading_space` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `space_type` longtext COLLATE utf8mb4_unicode_ci,
  `heading_parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_parking` longtext COLLATE utf8mb4_unicode_ci,
  `heading_information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more_information` longtext COLLATE utf8mb4_unicode_ci,
  `heading_usps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usps_power` longtext COLLATE utf8mb4_unicode_ci,
  `heading_room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_details` longtext COLLATE utf8mb4_unicode_ci,
  `heading_summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary_event_space` longtext COLLATE utf8mb4_unicode_ci,
  `heading_landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearest_landmark` longtext COLLATE utf8mb4_unicode_ci,
  `heading_terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_terms` longtext COLLATE utf8mb4_unicode_ci,
  `heading_disclaimer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disclaimer` longtext COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `products` (`id`, `category_id`, `user_id`, `name`, `slug`, `brand`, `description`, `all_party`, `hall_one`, `hall_two`, `hall_three`, `hall_four`, `hall_five`, `mincapacity_one`, `mincapacity_two`, `mincapacity_three`, `mincapacity_four`, `mincapacity_five`, `maxcapacity_one`, `maxcapacity_two`, `maxcapacity_three`, `maxcapacity_four`, `maxcapacity_five`, `vegprice_one`, `vegprice_two`, `vegprice_three`, `vegprice_four`, `vegprice_five`, `veg_sell_price_one`, `veg_sell_price_two`, `veg_sell_price_three`, `veg_sell_price_four`, `veg_sell_price_five`, `nonprice_one`, `nonprice_two`, `nonprice_three`, `nonprice_four`, `nonprice_five`, `non_sell_price_one`, `non_sell_price_two`, `non_sell_price_three`, `non_sell_price_four`, `non_sell_price_five`, `space_capacity`, `heading_occasions`, `good_for_occasions`, `operating_time`, `heading_cuisines`, `cuisines_served`, `heading_facilities`, `facilities`, `heading_space`, `space_type`, `heading_parking`, `car_parking`, `heading_information`, `more_information`, `heading_usps`, `usps_power`, `heading_room`, `room_details`, `heading_summary`, `summary_event_space`, `heading_landmark`, `nearest_landmark`, `heading_terms`, `policy_terms`, `heading_disclaimer`, `disclaimer`, `city`, `state`, `full_address`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Flora Residency And Banquet', 'flora-residency-and-banquet-0001', 'One star', '<p>Flora Residency And Banquet is a venue situated in the city of Gurgaon. It is the perfect embodiment of world-class service and hospitality. It provides friendly, personal as well as exceptional service in luxurious surroundings and upholds the guest delight and glow with easy access to different places. They have well-appointed 30 luxurious fully air-conditioned rooms with all contemporary facilities for ultimate accessibility. They are situated away from the city and provide a peaceful ambiance for hosting all kinds of wedding functions</p>\r\n\r\n<p>Banquet at Flora Residency And Banquet is best for events in Sector 47, Gurgaon. Banquet at Flora ...Residency And Banquet has best spaces to suit different occasions and celebrations. You can get contact details, event packages, rental prices, reviews at venueLook.com. Go ahead and make an enquiry for your event booking now!&nbsp;</p>', 'All Party / Event Spaces', 'Banquet Hall 4', 'Roof Top (In Door)', 'Roof Top (Out Door)', 'Roof Top (Out Door)', 'Roof Top (Out Door)', '30', '30', '30', '30', '3000', '60', '60', '60', '60', '60', '850', '850', '850', '850', '850', '750', '750', '750', '750', '750', '850', '850', '850', '850', '850', '750', '750', '750', '750', '750', 'Banquet Hall 2000, Cluster capacity 200', 'Good For Occasions', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', '10:00 to 24:00', 'Cuisines Served', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Facilities', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Space Type', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Car Parking', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'More Information', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'USPS power', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Room Details', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Summary event space', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Nearest Landmark', '<ul>\r\n	<li>Metro station</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Policy terms', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Disclaimer', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n</ul>', 'Delhi', 'Haryana', 'Golf Course Ext Road, Sector 65, Gurugram, Haryana 122018', 1, 0, 'Flora Residency And Banquet - Sector 65, Gurugram, Haryana 122018 Updated', 'Flora Residency And Banquet - Sector 65, Gurugram, Haryana 122018 Updated', 'Flora Residency And Banquet - Sector 65, Gurugram, Haryana 122018 Updated', '2023-03-16 06:13:11', '2023-03-27 05:22:14'),
(2, 1, NULL, 'Flora Residency And Banquet', 'flora-residency-and-banquet-0002', 'Taj hotel', '<p>Flora Residency And Banquet is a venue situated in the city of Gurgaon. It is the perfect embodiment of world-class service and hospitality. It provides friendly, personal as well as exceptional service in luxurious surroundings and upholds the guest delight and glow with easy access to different places. They have well-appointed 30 luxurious fully air-conditioned rooms with all contemporary facilities for ultimate accessibility. They are situated away from the city and provide a peaceful ambiance for hosting all kinds of wedding functions</p>\r\n\r\n<p>Banquet at Flora Residency And Banquet is best for events in Sector 47, Gurgaon. Banquet at Flora ...Residency And Banquet has best spaces to suit different occasions and celebrations. You can get contact details, event packages, rental prices, reviews at venueLook.com. Go ahead and make an enquiry for your event booking now!&nbsp;</p>', 'All Party / Event Spaces', 'Roof Top (Out Door)', 'Roof Top (In Door)', 'Roof Top (Out Door)', 'Roof Top (Out Door)', 'Roof Top (Out Door)', '30', '30', '30', '30', '30', '60', '60', '60', '60', '60', '850', '850', '850', '850', '850', '750', '750', '750', '750', '750', '850', '850', '850', '850', '850', '750', '750', '750', '750', '750', 'Space Capacity 2000', 'Good For Occasions', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', '10:00 to 24:00', 'Cuisines Served', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Facilities', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Space Tyle', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Car Parking', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'More Information', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'USPS power', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Room Details', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Summary event space', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Nearest Landmark', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Policy terms', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Disclaimer', '<ul>\r\n	<li>Bachelor Party</li>\r\n	<li>Product Launch</li>\r\n	<li>Birthday Party</li>\r\n	<li>Class Reunion</li>\r\n	<li>Corporate Party</li>\r\n	<li>Photo Shoots</li>\r\n	<li>Engagement</li>\r\n	<li>Meeting</li>\r\n	<li>Training</li>\r\n	<li>Wedding</li>\r\n	<li>Conference</li>\r\n	<li>Kitty Party</li>\r\n	<li>Cocktail Dinner</li>\r\n	<li>Wedding Reception</li>\r\n	<li>Baby Shower</li>\r\n	<li>Get Together</li>\r\n	<li>Wedding Anniversary</li>\r\n	<li>Christmas Party</li>\r\n	<li>New Year Party</li>\r\n	<li>First Birthday Party</li>\r\n	<li>Exhibition</li>\r\n	<li>Brand Promotion</li>\r\n	<li>Group Dining</li>\r\n	<li>Holi Party</li>\r\n	<li>Farewell</li>\r\n	<li>Diwali Party</li>\r\n	<li>Family Function</li>\r\n	<li>Sangeet Ceremony</li>\r\n	<li>Dealers Meet</li>\r\n	<li>Christian Communion</li>\r\n	<li>Ring Ceremony</li>\r\n	<li>Aqueeqa Ceremony</li>\r\n	<li>Bridal Shower</li>\r\n	<li>Business Dinner</li>\r\n	<li>Childrens Party</li>\r\n	<li>Corporate Training</li>\r\n	<li>Family Get Together</li>\r\n	<li>Freshers Party</li>\r\n	<li>Kids Birthday Party</li>\r\n	<li>Naming Ceremony</li>\r\n	<li>Pre Wedding Mehendi Party</li>\r\n	<li>Residential Conference</li>\r\n	<li>Social Mixer</li>\r\n	<li>Team Building</li>\r\n	<li>Team Outing</li>\r\n	<li>Walkin Interview</li>\r\n	<li>Corporate Event</li>\r\n	<li>MICE</li>\r\n</ul>', 'Gurugram', 'Haryana', 'Golf Course Ext Road, Sector 65, Gurugram, Haryana 122018', 1, 1, 'Flora Residency And Banquet - Sector 65, Gurugram, Haryana 122018 Updated', 'Flora Residency And Banquet - Sector 65, Gurugram, Haryana 122018 Updated', 'Flora Residency And Banquet - Sector 65, Gurugram, Haryana 122018 Updated', '2023-03-16 06:18:46', '2023-03-19 01:56:41'),
(3, 1, NULL, 'The Bristol Hotel, Gurgaon', 'the-bristol-hotel-gurgaon-0003', 'Two star', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'All Party / Event Spaces', 'Roof Top (Out Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', '30', '30', '30', '30', '30', '60', '60', '60', '60', '60', '850', '850', '850', '850', '850', '750', '850', '850', '850', '850', '850', '850', '850', '850', '850', '750', '850', '850', '850', '850', 'Space Capacity 2000', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', '10:00 to 24:00', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Gurugram', 'Haryana', 'Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -122002', 1, 0, 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', '2023-03-17 09:40:55', '2023-03-20 08:42:45'),
(4, 1, NULL, 'The Bristol Hotel, Gurgaon', 'the-bristol-hotel-gurgaon-0004', 'Three star', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'All Party / Event Spaces', 'Roof Top (Out Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', '30', '30', '30', '30', '30', '60', '60', '60', '60', '60', '850', '850', '850', '850', '850', '750', '850', '850', '850', '850', '850', '850', '850', '850', '850', '750', '850', '850', '850', '850', 'Space Capacity 2000', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', '10:00 to 24:00', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Gurugram', 'Haryana', 'Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -122002', 1, 0, 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', '2023-03-17 09:43:03', '2023-03-20 08:42:49');
INSERT INTO `products` (`id`, `category_id`, `user_id`, `name`, `slug`, `brand`, `description`, `all_party`, `hall_one`, `hall_two`, `hall_three`, `hall_four`, `hall_five`, `mincapacity_one`, `mincapacity_two`, `mincapacity_three`, `mincapacity_four`, `mincapacity_five`, `maxcapacity_one`, `maxcapacity_two`, `maxcapacity_three`, `maxcapacity_four`, `maxcapacity_five`, `vegprice_one`, `vegprice_two`, `vegprice_three`, `vegprice_four`, `vegprice_five`, `veg_sell_price_one`, `veg_sell_price_two`, `veg_sell_price_three`, `veg_sell_price_four`, `veg_sell_price_five`, `nonprice_one`, `nonprice_two`, `nonprice_three`, `nonprice_four`, `nonprice_five`, `non_sell_price_one`, `non_sell_price_two`, `non_sell_price_three`, `non_sell_price_four`, `non_sell_price_five`, `space_capacity`, `heading_occasions`, `good_for_occasions`, `operating_time`, `heading_cuisines`, `cuisines_served`, `heading_facilities`, `facilities`, `heading_space`, `space_type`, `heading_parking`, `car_parking`, `heading_information`, `more_information`, `heading_usps`, `usps_power`, `heading_room`, `room_details`, `heading_summary`, `summary_event_space`, `heading_landmark`, `nearest_landmark`, `heading_terms`, `policy_terms`, `heading_disclaimer`, `disclaimer`, `city`, `state`, `full_address`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(5, 1, NULL, 'The Bristol Hotel, Gurgaon', 'the-bristol-hotel-gurgaon-0005', 'Four star', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'All Party / Event Spaces', 'Roof Top (Out Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', '30', '30', '30', '30', '30', '60', '60', '60', '60', '60', '850', '850', '850', '850', '850', '750', '850', '850', '850', '850', '850', '850', '850', '850', '850', '750', '850', '850', '850', '850', 'Space Capacity 2000', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', '10:00 to 24:00', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Gurugram', 'Haryana', 'Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -122002', 1, 0, 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', '2023-03-17 09:48:35', '2023-03-20 08:42:54'),
(6, 1, NULL, 'The Bristol Hotel, Gurgaon', 'the-bristol-hotel-gurgaon-0006', 'Five star', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'All Party / Event Spaces', 'Roof Top (Out Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', '30', '30', '30', '30', '30', '60', '60', '60', '60', '60', '850', '850', '850', '850', '850', '750', '850', '850', '850', '850', '850', '850', '850', '850', '850', '750', '850', '850', '850', '850', 'Space Capacity 2000', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', '10:00 to 24:00', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Enjoy the luxury and comfort of our 5-star deluxe hotel in Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Gurugram', 'Haryana', 'Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -122002', 1, 0, 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', 'The Bristol Hotel, Gurgaon - Adjacent to DLF Qutab Enclave, Phase-1, Gurgaon -12200', '2023-03-17 09:50:26', '2023-03-20 08:42:58'),
(7, 1, NULL, 'Engagement Venues', 'engagement-venues-0007', 'Three star', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2023-03-17 12:00:29', '2023-03-20 08:43:01'),
(8, 1, NULL, '', 'the-bristol-hotel-gurgaon-0008', 'Four star', '', 'All Party - Event Spaces', 'Roof Top (Out Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', 'Roof Top (In Door)', '30', '30', '30', '100', '30', '60', '60', '60', '60', '60', '850', '850', '850', '850', '850', '750', '750', '750', '750', '750', '850', '850', '850', '850', '850', '750', '750', '750', '750', '750', 'Space Capacity 2000', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', '10:00 to 24:00', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Elegance and Comfort is the pioneer of luxury hotels in the business city of Gurgaon', '<p>The Bristol Hotel, a landmark of Elegance and Comfort, is the pioneer of luxury hotels in the business city of Gurgaon. Our 5-star deluxe hotel is located about 500 metres from Sikanderpur Metro Station. Corporate hubs like Cyber City and Golf Course Road and Cyber Park are located near our business hotel. We offer superlative standards of comfort and luxury complemented with a variety of restaurants offering delectable cuisines of the world. There are various tourist areas you can explore when you stay at our luxury hotel in Gurgaon. The Bristol Hotel in Gurgaon boasts of its outstanding service, promising comfort which makes our 5-star business hotel, a perfect destination for our guests.</p>', 'Gurugram', 'Haryana', 'Golf Course Ext Road, Sector 65, Gurugram, Haryana 122018 Updated', 0, 0, 'The Bristol Hotel -Sector 65, Gurugram, Haryana 122018', 'The Bristol Hotel -Sector 65, Gurugram, Haryana 122018', 'The Bristol Hotel -Sector 65, Gurugram, Haryana 122018', '2023-03-17 12:10:52', '2023-03-20 08:43:06'),
(9, 2, NULL, 'Hotel 91, Sector 45, Gurgaon', 'hotel-91-sector-45-gurgaon-00009', 'Five star', '<p>Located in Gurgaon, Hotel 91 is a venue that is available for you to host your wedding ceremonies. It is very necessary for your wedding venue to be a beautiful place where you can take your vows with a dreamy background that triggers beautiful memories when you look at the pictures from this day. It is also a comfortable venue for your guests to enjoy comfortably. Hotel 91 can be that ideal place for you with its beautiful event space and utilities that come as one convenient package of goodness to you.</p><p><strong>Facilities and Capacity</strong></p><p>To ensure that the ceremonies face no hindrance and that the transitions are done smoothly they offer a variety of facilities that come in a complimentary package. Hotel 91 has a beautiful banquet hall to offer to you that is an ideal setup suitable for your nuptial ceremonies like engagement, cocktail, sangeet, mehndi and so on followed by the reception. They can also host residential weddings. They also have guest accommodation available in the venue itself. The banquet hall is capable of entertaining around 15 to 200 guests onboard comfortably and is a perfect setup for an intimate celebration with your dear ones.</p><p>They provide you with more than one event space in the venue to make celebrating more than one ceremony easier. and they provide you with the amenities including:</p><ul><li>Guest accommodation</li><li>Bridal dressing room</li><li>Parking area</li><li>In-house restaurant</li><li>Valet parking</li></ul><p><strong>Services Offered</strong></p><p>The cordial behaviour of their staff and professionalism merged in the perfect amount, will deliver unmatched services to make your wedding an unforgettable event for all to be a part of. The International and domestic airports are just 20 minutes drive away and it is located in the city and National Highway 8 makes it easy to be accessed by travellers. Hotel 91 offer you their in-house catering services too to add to your luxuries and their team of chefs are well-versed with a plethora of recipes made with their personal twist to serve mouth-watering dishes from delicious cuisines at your table to make it a grand feast with a royal food spread.</p>', NULL, 'Banquet Hall 4', NULL, NULL, NULL, NULL, '100', NULL, NULL, NULL, NULL, '200', NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, '400', NULL, NULL, NULL, NULL, '600', NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, 'Banquet Hall 2000, Cluster capacity 200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'Hotel 91, Sector 45, Gurgaon', 'Hotel 91, Sector 45, Gurgaon', 'Hotel 91, Sector 45, Gurgaon', '2023-04-09 11:11:25', '2023-04-09 11:11:25'),
(10, 2, NULL, 'Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon', 'hyatt-regency-gurgaon-5-star-banquet-halls-gurgaon-00010', '0', '<p>Hyatt Regency Gurgaon is the largest five star convention hotel in Gurgaon with the meeting and event facility to accommodate upto 3000 people. It is strategically located in the rapidly expanding corporate and residential hub of India off the Delhi-Jaipur National Highway 8. Located thirty minutes from the Indira Gandhi International Airport and fifteen minutes from Gurgaon city centre, the hotel is an ideal weekend getaway for Delhi NCR residents and offers a convenient destination for celebration a dream wedding. Four specially designated Regency Club floors for the club guests including a Regency Club Lounge which offers a complimentary buffet breakfast &amp; evening cocktails.</p>\r\n\r\n<p>Key Features</p>\r\n\r\n<p>Hyatt Regency Gurgaon is the largest five star convention hotel in Gurgaon with the meeting and event facility to accommodate upto 3000 people. It is strategically located in the rapidly expanding corporate and residential hub of India off the Delhi-Jaipur National Highway 8. Located thirty minutes from the Indira Gandhi International Airport and fifteen minutes from Gurgaon city centre, the hotel is an ideal weekend getaway for Delhi NCR residents and offers a convenient destination for celebration a dream wedding. Four specially designated Regency Club floors for the club guests including a Regency Club Lounge which offers a complimentary buffet breakfast &amp; evening cocktails.</p>', 'All Party / Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon', 'Banquet Hall 4', 'Banquet Hall', NULL, NULL, NULL, '100', '5000', NULL, NULL, NULL, '200', '50000', NULL, NULL, NULL, '500', '400', NULL, NULL, NULL, '400', '200', NULL, NULL, NULL, '600', '850', NULL, NULL, NULL, '500', '700', NULL, NULL, NULL, 'Banquet Hall 2000, Cluster capacity 200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gurgaon', 'Haryana', 'New Delhi NCR, NH8, Sector 83 Gurgaon, Haryana, India, 122004', 0, 0, 'Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon - Events Wallaa', 'Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon - Events Wallaa', 'Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon - Events Wallaa', '2023-04-09 12:39:01', '2023-04-09 12:39:01'),
(11, 2, NULL, 'Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon', 'hyatt-regency-gurgaon-5-star-banquet-halls-gurgaon-00011', '0', '<p>Hyatt Regency Gurgaon is the largest five star convention hotel in Gurgaon with the meeting and event facility to accommodate upto 3000 people. It is strategically located in the rapidly expanding corporate and residential hub of India off the Delhi-Jaipur National Highway 8. Located thirty minutes from the Indira Gandhi International Airport and fifteen minutes from Gurgaon city centre, the hotel is an ideal weekend getaway for Delhi NCR residents and offers a convenient destination for celebration a dream wedding. Four specially designated Regency Club floors for the club guests including a Regency Club Lounge which offers a complimentary buffet breakfast &amp; evening cocktails.</p>\r\n\r\n<p>Key Features</p>\r\n\r\n<p>Hyatt Regency Gurgaon is the largest five star convention hotel in Gurgaon with the meeting and event facility to accommodate upto 3000 people. It is strategically located in the rapidly expanding corporate and residential hub of India off the Delhi-Jaipur National Highway 8. Located thirty minutes from the Indira Gandhi International Airport and fifteen minutes from Gurgaon city centre, the hotel is an ideal weekend getaway for Delhi NCR residents and offers a convenient destination for celebration a dream wedding. Four specially designated Regency Club floors for the club guests including a Regency Club Lounge which offers a complimentary buffet breakfast &amp; evening cocktails.</p>', 'All Party / Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon', 'Banquet Hall 4', 'Banquet Hall', NULL, NULL, NULL, '100', '5000', NULL, NULL, NULL, '200', '50000', NULL, NULL, NULL, '500', '400', NULL, NULL, NULL, '400', '200', NULL, NULL, NULL, '600', '850', NULL, NULL, NULL, '500', '700', NULL, NULL, NULL, 'Banquet Hall 2000, Cluster capacity 200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gurgaon', 'Haryana', 'New Delhi NCR, NH8, Sector 83 Gurgaon, Haryana, India, 122004', 0, 0, 'Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon - Events Wallaa', 'Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon - Events Wallaa', 'Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon - Events Wallaa', '2023-04-09 12:47:00', '2023-04-09 12:47:00'),
(12, 2, NULL, 'Hyatt Regency Gurgaon', 'hyatt-regency-gurgaon-000013', '0', '<p>Hyatt Regency Gurgaon is the largest five star convention hotel in Gurgaon with the meeting and event facility to accommodate upto 3000 people. It is strategically located in the rapidly expanding corporate and residential hub of India off the Delhi-Jaipur National Highway 8. Located thirty minutes from the Indira Gandhi International Airport and fifteen minutes from Gurgaon city centre, the hotel is an ideal weekend getaway for Delhi NCR residents and offers a convenient destination for celebration a dream wedding. Four specially designated Regency Club floors for the club guests including a Regency Club Lounge which offers a complimentary buffet breakfast &amp; evening cocktails</p>', 'All Party / Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon', 'Banquet Hall 4', NULL, NULL, NULL, NULL, '100', NULL, NULL, NULL, NULL, '200', NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, '400', NULL, NULL, NULL, NULL, '600', NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, 'Banquet Hall 2000, Cluster capacity 200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gurgaon', 'Haryana', 'New Delhi NCR, NH8, Sector 83 Gurgaon, Haryana, India, 122004', 0, 0, 'Hyatt Regency Gurgaon', 'Hyatt Regency Gurgaon', 'Hyatt Regency Gurgaon', '2023-04-09 12:48:54', '2023-04-09 12:48:54'),
(13, 2, NULL, 'Choosing The Right Corporate Party Venue 1', 'choosing-the-right-corporate-party-venue-1', 'Four star', '<p>Hyatt Regency Gurgaon is the largest five star convention hotel in Gurgaon with the meeting and event facility to accommodate upto 3000 people. It is strategically located in the rapidly expanding corporate and residential hub of India off the Delhi-Jaipur National Highway 8. Located thirty minutes from the Indira Gandhi International Airport and fifteen minutes from Gurgaon city centre, the hotel is an ideal weekend getaway for Delhi NCR residents and offers a convenient destination for celebration a dream wedding. Four specially designated Regency Club floors for the club guests including a Regency Club Lounge which offers a complimentary buffet breakfast &amp; evening cocktails.</p>', 'All Party / Hyatt Regency Gurgaon, 5-Star Banquet Halls, Gurgaon', 'Banquet Hall 4', NULL, NULL, NULL, NULL, '100', NULL, NULL, NULL, NULL, '200', NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, '400', NULL, NULL, NULL, NULL, '600', NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, 'Banquet Hall 2000, Cluster capacity 200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2023-04-09 12:50:47', '2023-04-09 12:50:47');

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

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 100, '2023-03-17 12:00:29', '2023-03-17 12:00:29'),
(3, 8, 2, 20022, '2023-03-17 12:10:52', '2023-03-18 05:46:05'),
(5, 8, 3, 5000, '2023-03-18 06:16:20', '2023-03-18 06:16:37'),
(6, 8, 4, 60000, '2023-03-18 06:16:20', '2023-03-18 06:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/products/16789669911.png', '2023-03-16 06:13:11', '2023-03-16 06:13:11'),
(2, 1, 'uploads/products/16789669912.png', '2023-03-16 06:13:11', '2023-03-16 06:13:11'),
(3, 1, 'uploads/products/16789669913.png', '2023-03-16 06:13:11', '2023-03-16 06:13:11'),
(4, 1, 'uploads/products/16789669914.png', '2023-03-16 06:13:11', '2023-03-16 06:13:11'),
(5, 1, 'uploads/products/16789669915.png', '2023-03-16 06:13:11', '2023-03-16 06:13:11'),
(6, 2, 'uploads/products/16789673881.png', '2023-03-16 06:19:48', '2023-03-16 06:19:48'),
(7, 2, 'uploads/products/16789673882.png', '2023-03-16 06:19:48', '2023-03-16 06:19:48'),
(8, 3, 'uploads/products/16790658551.jpg', '2023-03-17 09:40:55', '2023-03-17 09:40:55'),
(9, 3, 'uploads/products/16790658552.jpg', '2023-03-17 09:40:55', '2023-03-17 09:40:55'),
(10, 3, 'uploads/products/16790658553.jpg', '2023-03-17 09:40:55', '2023-03-17 09:40:55'),
(11, 4, 'uploads/products/16790659831.jpg', '2023-03-17 09:43:03', '2023-03-17 09:43:03'),
(12, 4, 'uploads/products/16790659832.jpg', '2023-03-17 09:43:03', '2023-03-17 09:43:03'),
(13, 4, 'uploads/products/16790659833.jpg', '2023-03-17 09:43:03', '2023-03-17 09:43:03'),
(14, 5, 'uploads/products/16790663151.jpg', '2023-03-17 09:48:35', '2023-03-17 09:48:35'),
(15, 5, 'uploads/products/16790663152.jpg', '2023-03-17 09:48:35', '2023-03-17 09:48:35'),
(16, 5, 'uploads/products/16790663153.jpg', '2023-03-17 09:48:35', '2023-03-17 09:48:35'),
(17, 6, 'uploads/products/16790664261.jpg', '2023-03-17 09:50:26', '2023-03-17 09:50:26'),
(18, 6, 'uploads/products/16790664262.jpg', '2023-03-17 09:50:26', '2023-03-17 09:50:26'),
(19, 6, 'uploads/products/16790664263.jpg', '2023-03-17 09:50:26', '2023-03-17 09:50:26'),
(20, 8, 'uploads/products/16790748521.jpg', '2023-03-17 12:10:52', '2023-03-17 12:10:52'),
(21, 8, 'uploads/products/16790748522.jpg', '2023-03-17 12:10:52', '2023-03-17 12:10:52'),
(22, 8, 'uploads/products/16790748523.jpg', '2023-03-17 12:10:52', '2023-03-17 12:10:52'),
(23, 9, 'uploads/products/16810584851.png', '2023-04-09 11:11:25', '2023-04-09 11:11:25'),
(24, 9, 'uploads/products/16810584852.png', '2023-04-09 11:11:25', '2023-04-09 11:11:25'),
(25, 9, 'uploads/products/16810584853.png', '2023-04-09 11:11:25', '2023-04-09 11:11:25'),
(26, 10, 'uploads/products/16810637411.png', '2023-04-09 12:39:01', '2023-04-09 12:39:01'),
(27, 10, 'uploads/products/16810637412.png', '2023-04-09 12:39:01', '2023-04-09 12:39:01'),
(28, 10, 'uploads/products/16810637413.png', '2023-04-09 12:39:01', '2023-04-09 12:39:01'),
(29, 10, 'uploads/products/16810637414.png', '2023-04-09 12:39:01', '2023-04-09 12:39:01'),
(30, 11, 'uploads/products/16810642201.png', '2023-04-09 12:47:00', '2023-04-09 12:47:00'),
(31, 11, 'uploads/products/16810642202.png', '2023-04-09 12:47:00', '2023-04-09 12:47:00'),
(32, 11, 'uploads/products/16810642203.png', '2023-04-09 12:47:00', '2023-04-09 12:47:00'),
(33, 11, 'uploads/products/16810642204.png', '2023-04-09 12:47:00', '2023-04-09 12:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars_rated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star_description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `prod_id`, `stars_rated`, `star_heading`, `star_description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '4', 'It was a great experience at Flora', 'It was a great experience at Flora and the arrangement was excellent and the food was amazing what I dreamed of wedding it was totally like that so. I had a great experience.', 1, '2023-03-30 05:13:46', '2023-03-30 05:13:46'),
(2, '1', '3', '5', 'What do you like about this cake Rate Description', 'What do you like about this cake Rate Description', 1, '2023-03-30 05:14:34', '2023-03-30 05:14:34'),
(3, '1', '4', '4', 'It was a great experience', 'It was a great experience over there, whether it was the food, atmosphere, decorations, other staff behavior etc everything was very good', 1, '2023-03-30 05:16:35', '2023-03-30 05:16:35'),
(4, '3', '1', '4', 'It was a great experience at Flora', 'It was a great experience at Flora and the arrangement was excellent and the food was amazing what I dreamed of wedding it was totally like that so. I had a great experience.', 1, '2023-03-31 01:20:11', '2023-03-31 01:20:11'),
(5, '3', '3', '5', 'The Bristol Hotel, a landmark of Elegance and Comfort', 'The Bristol Hotel, a landmark of Elegance and Comfort', 1, '2023-03-31 01:27:36', '2023-03-31 01:27:36'),
(6, '2', '1', '4', 'The Bristol Hotel, a landmark of Elegance and Comfort', 'The Bristol Hotel, a landmark of Elegance and Comfort', 1, '2023-04-02 12:52:57', '2023-04-02 12:52:57'),
(7, '7', '1', '4', 'Awesome', 'It was a great experience at Flora and the arrangement was excellent and the food was amazing what I dreamed of wedding it was totally like that so. I had a great experience.', 1, '2023-04-17 12:06:55', '2023-04-17 12:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
('n9keU00RX36xDaH1VTfz7ltrnF8gMUNEvfyvrG8l', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTkdvVjRXQkJQV3k4ajA3OGthTENjdDZ1RWo5UEJ6SVpWUG15Z29mQyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNjoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluL3Byb2R1Y3RzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9wcm9kdWN0cy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTY4MTA2MzE3Nzt9fQ==', 1681064447),
('TLLkRmlOx5qQQ1Tom6yKbbPtWgiZbTOGvw5cMxyi', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOU5NMllVSEl2QXlkajEwMVU1VUZBZkczVFN5QU9PenN5QldVMGFPWiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluL3Byb2R1Y3RzL2NyZWF0ZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vcHJvZHVjdHMvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE2ODEwNTgwODE7fX0=', 1681063126);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Venue Book Reviews in Gurgaon', '<p>Ramada Gurgaon Central is a 4-star deluxe hotel located in Sector-44, Gurgaon, and is in close proximity to airport and railway stations.</p>', 'http://localhost:8000/', 'uploads/slider/1679163273.jpg', 0, '2023-03-18 12:44:33', '2023-03-18 12:44:33'),
(2, 'The Retreat Resort', '<p>Located at Alipur in Delhi, the Resort-The Retreat Resort is easily accessible to all your guests. In business since 2003 The Retreat Resort is one of the most popular event venues in the city</p>', 'http://localhost:8000/', 'uploads/slider/1679163952.jpg', 0, '2023-03-18 12:55:52', '2023-03-18 12:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` mediumtext COLLATE utf8mb4_unicode_ci,
  `address2` mediumtext COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternet_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0' COMMENT '0=user, 1=admin, 2=vendor',
  `isban` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `google_id`, `facebook_id`, `lname`, `address1`, `address2`, `city`, `state`, `pincode`, `phone`, `alternet_phone`, `image`, `role_as`, `isban`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$dRHhaS1MdD3mMqeFN8f8ZOLp6rfyx5kJlYgGn.BVCDlCe6nMI2.4O', NULL, NULL, NULL, NULL, '2023-03-16 05:55:03', '2023-04-07 06:11:26', NULL, NULL, 'Kumar', 'Sector - 22', 'Rohini', 'Delhi', 'Delhi', '122001', '8595104872', '8595104872', '1680867686.png', 1, 0),
(2, 'Vendor', 'vendor@gmail.com', NULL, '$2y$10$gQDc5NnoO698IhUhyiKR9ujrELRTZ81r1WmyvtRfuySefm9qriavm', NULL, NULL, NULL, NULL, '2023-03-27 09:16:24', '2023-04-02 12:54:03', NULL, NULL, 'Vendor', 'Gurgaon', 'Gurgaon', 'Gurgaon', 'Haryana', '122001', '8595104872', '859510482', NULL, 2, 0),
(3, 'User', 'user@gmail.com', NULL, '$2y$10$9JmnP6nMUZTp95XhY5Fuv.xbZHB8Uzba0B9KNHCJrl/E9ldOdudVy', NULL, NULL, NULL, NULL, '2023-03-27 12:26:37', '2023-03-31 03:04:38', NULL, NULL, 'Ray', 'Gurgaon', 'Gurgaon 2', 'Gurgaon', 'Haryana', '1223000', '8595104872', '8595104872', '1680251678.jpg', 0, 0),
(4, 'Rajesh', 'rajeshkum202@gmail.com', NULL, '$2y$10$IPngF6gKQgXQ1oWJdhW3LecpFWj0YCYmdu1s9zHRi3gGcC/peaRH6', NULL, NULL, NULL, NULL, '2023-04-02 13:03:37', '2023-04-02 13:03:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(5, 'Rajesh Kumar', 'rajeshkum@gmail.com', NULL, '$2y$10$wXVC9jIoXt/1dQg.XQ7nK..jTVgb54kjR5Wrq03NdEiGNmRne0sTC', NULL, NULL, NULL, NULL, '2023-04-02 13:05:34', '2023-04-02 13:05:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(6, 'Krishna', 'krishna@gmail.com', NULL, '$2y$10$qPAnSFFvVtWFlfjHOtXZNemm7kZXBUaOhDTh6nm0rCJfpni3rhU0S', NULL, NULL, NULL, NULL, '2023-04-02 13:06:21', '2023-04-02 13:06:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(7, 'Shubham Raj', 'shubhambth0000@gmail.com', NULL, '$2y$10$L6TrstyylNQ3AFKHoR2.t.STUyILUVBNQ/REVXwBBbi1VODSwKlau', NULL, NULL, NULL, 'VPR2iOVHww2MKeskOC0wiPhRVy41ISuN8rlQwWxLcapK6efMhbwE58MzCgrK', '2023-04-17 11:57:24', '2023-04-17 12:04:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(8, 'Events', 'info@eventswalaa.com', NULL, '$2y$10$xT9jdmC2bG5EdGHfpHSoYumwkBODoyJtcO1l5a425Ucf4dNj5rrc.', NULL, NULL, NULL, NULL, '2023-04-30 08:30:50', '2023-04-30 08:32:30', NULL, NULL, 'Walaa', 'Gurgaon', NULL, 'Gurgaon', 'Haryana', '185948', '8595104872', NULL, NULL, 1, 0),
(9, 'Krish Kumar', 'krish@gmail.com', NULL, '$2y$10$GzCEuGiK12XYL.BZ6gp78uyA/Ru9VQ6yszpAaVqa3y2WbYgFG5ZuW', NULL, NULL, NULL, NULL, '2023-05-06 02:11:47', '2023-05-06 02:13:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(10, 'Bishwanath', 'bpyadav009@gmail.com', NULL, '$2y$10$U2AYFtPaJOdA4AfPpleKh.IZVr4wt0VplZ7DMAyW8BG4u.DqyB94a', NULL, NULL, NULL, 'QntGjIR7CBom5DxZLvJSHNWSp5CtI9J6Rz3Qy6imh2RLrcTlxFbBdOZvk8pf', '2023-05-17 03:45:38', '2023-05-17 03:47:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
