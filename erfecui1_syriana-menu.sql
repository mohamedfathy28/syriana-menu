-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2022 at 03:19 PM
-- Server version: 5.7.40
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erfecui1_syriana-menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'SOUP', 'الشوربة', '2022-11-13 08:30:58', '2022-11-13 09:38:32'),
(2, 'APPETIZERS', 'المقبلات', '2022-11-13 09:48:29', '2022-11-13 10:53:19'),
(3, 'KEBBEH', 'الكبب', '2022-11-13 09:48:48', '2022-11-13 10:53:30'),
(4, 'SALAD', 'السلطات', '2022-11-13 13:30:08', '2022-11-13 13:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_11_03_233248_create_categories_table', 1),
(5, '2022_11_03_233258_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `name_ar`, `description`, `description_ar`, `image`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Lentil soup', 'شوربة عدس', 'Served with fried bread and lemon', 'تقدم مع الخبز المقلي والليمون', 'products/8gVc2VylIso8Fi0tRnsGNUGN4PNAr3Amp2mCDpZI.png', 39.99, 1, '2022-11-13 08:50:15', '2022-11-13 10:48:56'),
(3, 'Orzo Soup', 'شوربة لسان عصفور', 'Chicken soup with orzo, carrots and onions.', 'شوربة دجاج مع لسان العصفور والجزر والبصل .', 'products/TYSDNPtYLsKhswiQRsWtBIDS1TkIPmNpYFtVRddJ.png', 35.99, 1, '2022-11-13 10:50:58', '2022-11-13 10:50:58'),
(4, 'Onion Soup', 'شوربة البصل', 'Onion soup with demi glace sauce with mozzarella and toasted toast.', 'شوربة بصل بصوص الديمي جلاس مع الموتزريلا والتوست المحمص .', 'products/n8rxGtT7RWIbIpdgvWi51V7Cz8w8VtT8fXYefyDz.png', 45.99, 1, '2022-11-13 10:51:54', '2022-11-13 10:51:54'),
(5, 'Mushroom Soup', 'شوربة المشروم', 'Served with mushrooms, onions, fresh cream and toasted toast.', 'تقدم مع المشروم والبصل وكريمة فريش والتوست المحمص .', 'products/kjcOpLdxLm8lCKFe1lWgV9QGKZscPEgCmeFAn6qu.png', 49.99, 1, '2022-11-13 10:52:47', '2022-11-13 10:52:47'),
(6, 'Greek Salad', 'سلطة يوناني', 'Tomatoes, cucumbers, basil, onions, lettuce, olives, feta cheese and olive oil.', 'طماطم و خيار و ريحان وبصل وخس و زيتون و جبنة فيتا و زيت الزيتون .', 'products/bFPPXYDp3PH5jnQNg4CwbXwLJB4YdTjxufUUsgKV.png', 49.99, 4, '2022-11-13 10:55:19', '2022-11-13 13:30:51'),
(7, 'Rocca Salad', 'سلطة روكا', 'Arugula with onions, mushrooms and walnuts with olive oil and lemon juice.', 'جرجير مع بصل و مشروم فرش و جوز مع زيت الزيتون و عصير الليمون .', 'products/Sh3EOmE0CzAu8tLkN4muItf7FtoQWRN54llxkHl8.png', 45.99, 4, '2022-11-13 10:56:24', '2022-11-13 13:30:43'),
(8, 'Fattoush', 'فتوش', 'Tomatoes, cucumbers, lettuce, green peppers and olives with pomegranate molasses, olive oil and fried bread.', 'طماطم و خيار و خس و فلفل اخضر و زيتون مع دبس الرمان و زيت الزيتون و خبز مقلي .', 'products/UpVwo1Ci9OhA5syYhhj2M0ZviFw9yAwGyAC4wIwf.png', 45.99, 4, '2022-11-13 13:27:18', '2022-11-13 13:30:35'),
(9, 'Tabbouleh', 'تبولة', 'Parsley with onions, bulgur, tomatoes and lemon with olive oil.', 'بقدونس مع بصل وبرغل و طماطم و ليمون مع زيت الزيتون .', 'products/1IAv9ZBDWMuuuzcn19tEyqx8DPJtGouPbIUq6f62.png', 45.99, 4, '2022-11-13 13:27:59', '2022-11-13 13:30:28'),
(10, 'Caesar Salad', 'سلطة سيزر', 'Lettuce, tomatoes and parmesan cheese with grilled chicken slices, caesar sauce and toasted bread.', 'خس و طماطم  و جبنة بارميزان مع شرائح الدجاج المشوي و صوص سيزر والخبز المحمص .', 'products/crqgu8UfNqKd9eohPHGeq5P6WDEVzNNkvMGYZsxM.png', 59.99, 4, '2022-11-13 13:28:46', '2022-11-13 13:30:20'),
(11, 'Hummos', 'مسبحة', 'Ground chickpeas with tahini, yogurt and lemon juice, served with olive oil.', 'حمص ناعم مع الطحينة واللبن الزبادي وعصير الليمون يقدم مع زيت الزيتون .', 'products/EdJ3OE445kvl8pIN2oarDYO7VbFqSiUzMdeZ8hN3.png', 29.99, 2, '2022-11-13 13:33:50', '2022-11-13 13:33:50'),
(12, 'Eggplant Mutabbal', 'متبل باذنجان', 'Grilled eggplant with tahini, lemon juice and yoghurt served with olive oil.', 'بانجان مشوي مع طحينة وعصير الليمون واللبن الزبادي يقدم مع زيت الزيتون .', 'products/d6Y6oe9i5Z1mdxEeYcFL3E1xhB7nTM73sENohNzh.png', 35.99, 2, '2022-11-13 13:35:31', '2022-11-13 13:35:31'),
(13, 'Baba Ghanoush', 'بابا غنوج', 'Grilled eggplant with bell peppers, tomatoes, garlic, parsley, pomegranate molasses and olive oil.', 'باذنجان مشوي مع فلفل ألوان وطماطم وثوم وبقدونس ودبس رمان وزيت الزيتون .', 'products/XZrhBmH9bCXIqNN8O4dtTg4uvPhttEuXDp9NPVEa.png', 49.99, 2, '2022-11-13 13:36:19', '2022-11-13 13:36:19'),
(14, 'Muhammara &walnuts', 'محمرة بالجوز', 'Crushed rusk with tahini, pepper molasses and pomegranate molasses served with walnuts (walnuts) and olive oil.', 'بقسماط مطحون مع الطحينة ودبس الفلفل ودبس الرمان يقدم مع الجوز (عين الجمل) وزيت الزيتون.', 'products/FZdCGstYAi33u9IuSI5A27c9tN2VNWeQXhVJMNi8.png', 39.99, 2, '2022-11-13 13:37:11', '2022-11-13 13:37:11'),
(15, 'Hummos with Meat', 'مسبحة باللحم الضاني', 'Soft hummus with tahini, yogurt and lemon juice, served with lamb meat.', 'حمص ناعم مع الطحينة واللبن الزبادي وعصير الليمون يقدم مع اللحم الضاني  .', 'products/dB14IQYBHjcxXr9X3mLpg5zCnnanuEz0yZ85Cl8D.png', 79.99, 2, '2022-11-13 13:38:04', '2022-11-13 13:38:04'),
(16, 'Yalanji grape leaves', 'يالنجي', 'Grape leaves stuffed with rice, vegetables, walnuts and pomegranate molasses', 'ورق عنب محشي بالرز والخضار والجوز ودبس الرمان', 'products/fO205M7dmLYdkQej6UzWR1RWez0V2B4t7HqVts01.png', 34.99, 2, '2022-11-13 13:38:56', '2022-11-13 13:38:56'),
(17, 'Samosa Meat', 'سمبوسة لحم', '4 pieces of samosa stuffed with minced meat', '4 قطع سمبوسة محشية باللحم المفروم', 'products/Y65blhgd7J7mqs3czAlRyG6Fj2royAETVDlGP1hH.png', 45.99, 2, '2022-11-13 13:39:59', '2022-11-13 13:39:59'),
(18, 'Samosa cheese', 'سمبوسة جبنة', '4 pieces of samosa stuffed with cheese.', '4 قطع سمبوسة محشية  بالجبنة .', 'products/nzEEwVmwNRW6Nl9Lb2c9DDBuZrhyMYMCbW4Slvhm.png', 34.99, 2, '2022-11-13 13:41:17', '2022-11-13 13:41:17'),
(19, 'Falafel', 'فلافل سوري', 'Falafel dish on the Syrian way served with tahini, vegetables and pickles.', 'طبق فلافل على الطريقة السورية يقدم مع الطحينة والخضار والمخلل .', 'products/kyEaln4SDA79GFslbiVDmgHIZv9D5iNfcII1YXZz.png', 60.99, 2, '2022-11-13 13:42:48', '2022-11-13 13:42:48'),
(20, 'Fava Beans with Tahini', 'فول بالطحينة سوري', 'Beans prepared on the Syrian way with yogurt sauce and tahini with olive oil.', 'فول محضر على الطريقة السورية بصلصة الزبادي والطحينة مع زيت الزيتون .', 'products/KUjPjV4IMLB6Kld9lNZ32BpSDtT9EJ3eIWhA2syk.png', 45.99, 2, '2022-11-13 13:44:06', '2022-11-13 13:44:06'),
(21, 'Syrian Chickpeas Fattah', 'فتة شامية بالخبز', 'Shami fatteh with bread with chickpeas, yogurt sauce and tahini.\r\nServed with nuts and Arabic ghee.', 'فتة شامية بالخبز مع الحمص بصلصة الزبادي والطحينة  .\r\nتقدم مع المكسرات وطشة السمن العربي .', 'products/dLzK1vpEEL9oEMRQjpk622vJVxDpLj8jbBIaTZMP.png', 55.99, 2, '2022-11-13 13:45:04', '2022-11-13 13:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8_unicode_ci,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'سيريانا منيو', 0, NULL, '2022-11-17 10:50:24'),
(2, 'site_name_en', 'Syriana Menu', 0, NULL, '2022-11-17 10:50:24'),
(3, 'facebook', 'https://www.facebook.com/syrianapalace', 0, NULL, '2022-11-17 10:50:24'),
(4, 'twitter', 'twitter', 0, NULL, '2022-11-17 10:50:24'),
(5, 'instagram', 'instagram', 0, NULL, '2022-11-17 10:50:24'),
(11, 'whatsapp', '01155576011', 0, NULL, '2022-11-17 10:50:24'),
(7, 'youtube', 'youtube', 0, NULL, '2022-11-17 10:50:24'),
(12, 'mobile', '01155576011 - 01098728095', 0, NULL, '2022-11-17 10:50:24'),
(9, 'email', 'email', 0, NULL, '2022-11-17 10:50:24'),
(13, 'address_ar', 'الشيخ زايد الحي الثالث شارع الشباب sky مول جانب مستشفى جلوبال', 0, NULL, '2022-11-17 10:50:24'),
(14, 'address_en', 'Sheikh Zayed, the third district, Al Shabab Street, sky mall, next to Global Hospital', 0, NULL, '2022-11-17 10:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `lang`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$XYeQ4ZEEiLwCTScxvqcWR.BHCl9blmxLBm6PB2RolScHAKlId2PgC', 'admin', 'en', 'Z0OIsT32HSK7RtZkckYo8bEL8lkH4f5A4fddgesatbx13hUKMsz4xQ64l0Sl', NULL, NULL),
(2, 'Seriana Admin', 'admin@gmail.com', '2022-11-13 09:32:00', '$2y$10$Z0tzQv1TsM2iC/6HLWm/m.7hKb.EwCpOfs17qDZIZG/Y3E6YqJQn6', 'admin', 'en', NULL, '2022-11-13 09:32:00', '2022-11-13 09:32:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
