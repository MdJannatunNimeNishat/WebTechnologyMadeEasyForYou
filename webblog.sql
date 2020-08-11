-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 09:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_image`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 'blogFontEnd/cat_image/1674620880746430.png', '2020-08-10 01:02:03', '2020-08-10 01:02:03'),
(2, 'CSS', 'blogFontEnd/cat_image/1674708068844858.jpg', '2020-08-11 00:07:52', '2020-08-11 00:07:52'),
(3, 'JavaScript', 'blogFontEnd/cat_image/1674708096691995.jpg', '2020-08-11 00:08:19', '2020-08-11 00:08:19'),
(4, 'PHP', 'blogFontEnd/cat_image/1674708106421590.png', '2020-08-11 00:08:28', '2020-08-11 00:08:28'),
(5, 'Python', 'blogFontEnd/cat_image/1674708116800934.jpg', '2020-08-11 00:08:38', '2020-08-11 00:08:38'),
(6, 'Django', 'blogFontEnd/cat_image/1674708131782499.jpg', '2020-08-11 00:08:52', '2020-08-11 00:08:52'),
(7, 'Laravel', 'blogFontEnd/cat_image/1674708147122678.png', '2020-08-11 00:09:07', '2020-08-11 00:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentAuthorName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentAuthorEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commentAuthorName`, `commentAuthorEmail`, `comment`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'Nishat', 'nishatnime100@gmail.com', 'It helps to understand the importance of Python.', 2, '2020-08-11 00:14:55', '2020-08-11 00:14:55');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2020_07_13_150437_add_image_and_interest_field', 1),
(23, '2020_07_15_050427_create_categorys_table', 1),
(24, '2020_07_18_145433_create_categories_table', 1),
(25, '2020_07_18_173742_create_posts_table', 1),
(26, '2020_07_29_162903_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` bigint(20) UNSIGNED NOT NULL,
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `u_id`, `c_id`, `title`, `desc`, `post_image`, `created_at`, `updated_at`) VALUES
(2, 3, 5, 'Impotence of Python', 'Basically Python is a language that can be used for developing anything and everything you want.\r\n\r\nAlthough it\'s an interpreted language, it\'s used widely because it\'s easier to write code and understand. When I started as a beginner, I found Python to be a very friendly language as it was easier to read and understand.\r\n\r\nIt has a huge set of libraries that can be used to do anything that you can think of doing with a programming language.\r\n\r\nPython developer community across the world has been doing a great job in helping people with issues and most of the stuff is very well documented and easy to understand and implement.\r\n\r\nThe documentation provided by the guys who developed Python is pretty good and very very clear and understandable. Documentation for a lot of languages is pretty hard to understand, but Python documentation doesn\'t fall into that category.\r\n\r\nYou have a manual task to Automate, Python can help you do that. You are interested in Machine learning or data science, there are a bunch of awesome, well documented libraries available for Python. NoSQL database libraries, Web development libraries are very good and is used extensively for various Use cases like hosting a website, REST Api etc. Honestly, This list is endless.\r\n\r\nA simple Google search would reveal all that you can do with it!', 'blogFontEnd/postImage/1674708352589030.jpg', '2020-08-11 00:12:23', '2020-08-11 00:12:23'),
(3, 4, 1, 'Backbone of Web Development', 'The Hyper-text Markup Language has been the source of all the various web pages and variety of other information that people come across while surfing the internet. Thus, the Web Development and application of this language has been a major stepping-stone in the development of the web experience that people around the world have got used to now. HTML has served as the primary backup language for the creation of content on web pages and other information that people find displayed on their web browsers. The HTML language consists of the HTML elements with the angle brackets enclosing the tags such as HTML, within the content of the web page. The tags may be present as pairs within the angle brackets, which is mostly the norm for this language. However, HTML tags may also exist as unpaired tags, which go by the name of empty elements. The tag that comes first in a pair is the opening tag or the start tag. The second tag to come as part of a pair of tags goes by the names of closing tags or end tag. The Web Development team is at a liberty to insert tags, texts, comments and various other types of content based on text between these the opening and closing tags.', 'blogFontEnd/postImage/1674708852869899.jpg', '2020-08-11 00:20:20', '2020-08-11 00:20:20'),
(4, 5, 3, 'What is JavaScript ?', 'JavaScript often abbreviated as JS, is a programming language that conforms to the ECMAScript specification.[7] JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.\r\n\r\nAlongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web.[8] JavaScript enables interactive web pages and is an essential part of web applications. The vast majority of websites use it for client-side page behavior,[9] and all major web browsers have a dedicated JavaScript engine to execute it.\r\n\r\nAs a multi-paradigm language, JavaScript supports event-driven, functional, and imperative programming styles. It has application programming interfaces (APIs) for working with text, dates, regular expressions, standard data structures, and the Document Object Model (DOM). However, the language itself does not include any input/output (I/O), such as networking, storage, or graphics facilities, as the host environment (usually a web browser) provides those APIs.\r\n\r\nJavaScript engines were originally used only in web browsers, but they are now embedded in some servers, usually via Node.js. They are also embedded in a variety of applications created with frameworks such as Electron and Cordova.\r\n\r\nAlthough there are similarities between JavaScript and Java, including language name, syntax, and respective standard libraries, the two languages are distinct and differ greatly in design.', 'blogFontEnd/postImage/1674709448992416.jpg', '2020-08-11 00:29:49', '2020-08-11 00:29:49'),
(5, 6, 6, 'Welcome to Django', 'Django is a python framework for web applications, as it allows developers to use modules for faster development. As a developer, you can make use of these modules to create apps, websites from an existing source. It speeds up the development process greatly, as you do not have to code everything from scratch. Using Django, you can create professional web apps and websites in a short window. The platform is known for its advanced functionality like admin panels, authentication support, comment boxes, file upload support, contact forms, app management, and more.\r\n\r\nThere is a large collection of modules that you can use for Django website development projects. It is among the best framework for web development.\r\n\r\nAdvantages of Django:-\r\n\r\nFast: Django is very fast enough to code in. There are various libraries provided so, you don’t have to reinvent the wheel or built the product from scratch. Plus, there is much pre-built code already available for you in Django which makes your task much easy.\r\n\r\nSecurity: It comes with vast security. It can prevent your website or app from most of the attacks like – SQL Injection, XSS, CSRF, Clickjacking, and many more.\r\n\r\nAdmin Panel: It comes with the built-in administration panel, which makes development much easy and fast. As you don’t have to create a separate admin panel for handling the backend.', 'blogFontEnd/postImage/1674709879932009.jpg', '2020-08-11 00:36:39', '2020-08-11 00:36:39'),
(6, 3, 4, 'Is PHP dead!', 'No. PHP is not dead \r\n\r\nSure, fewer people are choosing PHP as an option to develop a new project, but there is a myriad of existing projects that rely on PHP to function.\r\n\r\nFor example, WordPress, the largest CMS in the world runs on PHP and as long as WordPress continues to be a leader in the space, PHP will continue to be relevant.\r\n\r\nThe Core PHP team keeps pushing out features that make the language better, and hosting PHP applications is easy.\r\n\r\nThe architectural model of PHP actually makes sense for most web applications. Sure Node.js single-threaded/non-blocking model works wonders for chats, WebRTC and WebSockets. But it could be a headache for other type of applications where PHP excels at. Typically the development time of a project in PHP is shorter than the development time in other languages, therefore the project is cheaper.\r\n\r\nThe talent pool is really large, and you can find a good PHP developer in Pakistan, for example, working for $10/$15hr.\r\n\r\nDespite PHP\'s popularity is going doing according to TIOBE rank, the language will continue to be around for the foreseeable future and there will continue to be jobs for competent PHP developers.', 'blogFontEnd/postImage/1674710153938392.png', '2020-08-11 00:41:01', '2020-08-11 00:41:01'),
(7, 4, 2, 'CSS Introduction', 'Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable.\r\n\r\nCSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different devices and screen sizes as well as a variety of other effects.\r\n\r\nCSS is easy to learn and understand but it provides powerful control over the presentation of an HTML document. Most commonly, CSS is combined with the markup languages HTML or XHTML.', 'blogFontEnd/postImage/1674710380032644.png', '2020-08-11 00:44:36', '2020-08-11 00:44:36'),
(8, 5, 3, 'javaScript in 2020', 'Well, it\'s not a hidden fact that JavaScript is one of the most popular and widely used programming languages in the world right now. In fact, due to the emergence of this language from a web-based scripting language to the server-side language (thanks to the evolution of runtime environment like node.js), the popularity of this amazing languages is only increasing day by day.\r\n\r\nAccording to the StackOverflow survey of 2019 JavaScript still holds the top position in the most popular language among professional developers.\r\n\r\nso, it is most likely to be the most popular, widely used, highly paid, and (easy to learn !!) programming language in 2020 also.', 'blogFontEnd/postImage/1674710747926103.png', '2020-08-11 00:50:27', '2020-08-11 00:50:27'),
(9, 6, 5, 'Python for the next 10 years?', 'Python programming language is dominating other programming languages such as C, C++ or Java. Python is an Object-Oriented, High-Level multi-paradigm programming language with dynamic features. It has undergone more than 25 years of the successful span and it is one of the fastest growing programming languages. Python itself reveals its success story and a promising future ahead. Python programming language is best used for application development, web application or web development, game development, system administration, scientific computing etc. Numerous programmers have increased the use of Python programming languages and it is certainly used worldwide. Python programmers would be the most demandable in the future of IT industries which makes Python future brighter.', 'blogFontEnd/postImage/1674711935083461.png', '2020-08-11 01:09:19', '2020-08-11 01:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fieldOfInterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`, `image`, `fieldOfInterest`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$DAWXSvsJ7TlY9jT4F2keyO0Qk/7m0Of.sp3762fdm6CSUpa.dEe0u', NULL, '2020-08-10 01:00:13', '2020-08-11 01:17:11', '', 'css'),
(3, 'Jannatun Nime Nishat', 'nishatnime100@gmail.com', NULL, NULL, '$2y$10$8bvcTEzyGPgn8oZHV560l.kMtxOl01cn/xmmuTL3k7SwdKHCoa0Vm', NULL, '2020-08-10 01:37:53', '2020-08-10 01:40:24', 'blogFontEnd/userImage/1674623293295480.jpg', 'Php,Python'),
(4, 'Seaum Ibna Mostafiz', 'seaum@gmail.com', NULL, NULL, '$2y$10$BQz1zYCPBW2x8pASMJyk6.9121i/9cDJeSFmsKMNtLAfwhGC9pdoS', NULL, '2020-08-11 00:17:49', '2020-08-11 00:21:46', 'blogFontEnd/userImage/1674708942631359.jpg', 'HTML,CSS'),
(5, 'Ashik', 'ashik@gmail.com', NULL, NULL, '$2y$10$r1hdwyBIDiPSOcyLiCbQMeM6UPYpoet26wOvOzvSR..ONMLqXTvRe', NULL, '2020-08-11 00:23:08', '2020-08-11 00:26:04', 'blogFontEnd/userImage/1674709213163459.jpg', 'JavaScript'),
(6, 'Mahdi', 'mahdi@gmail.com', NULL, NULL, '$2y$10$dcK5p9TV74.srQ8Yo2iltOJHuByZTyg2cuUXivENdNdNATT0UsfJ.', NULL, '2020-08-11 00:32:10', '2020-08-11 00:32:38', 'blogFontEnd/userImage/1674709626646968.jpg', 'Python, Django');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_u_id_foreign` (`u_id`),
  ADD KEY `posts_c_id_foreign` (`c_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_c_id_foreign` FOREIGN KEY (`c_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_u_id_foreign` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
