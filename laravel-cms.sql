-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 08:53 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `meta_description`, `meta_keywords`, `url_link`, `url_title`, `created_at`, `updated_at`) VALUES
(1, 'php', 'php-tech', 'ssssssssssssssssss', 'sssssssssss', NULL, NULL, '2021-08-22 18:07:37', '2021-08-22 18:07:37'),
(2, 'php', '2php-tech', 'ssssssssssss', 'ssssssssssssssss', NULL, NULL, '2021-08-22 18:08:45', '2021-08-22 18:08:45'),
(3, 'linux', 'linux-dark', 'wwwwwwwwwwwww', 'wwwwwwwwwwww', NULL, NULL, '2021-08-22 18:08:56', '2021-08-22 18:08:56'),
(4, 'laravel', 'laravel-source', 'sssssssssssssss', 'ssssssssssss', NULL, NULL, '2021-08-22 18:09:14', '2021-08-22 18:09:14'),
(5, 'dornet', 'dotnet', 'dddddddddddd', 'ddddddddddddd', NULL, NULL, '2021-08-22 18:09:24', '2021-08-22 18:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `matn`, `phone`, `email`, `telegram`, `instagram`, `linkedin`, `link`, `created_at`, `updated_at`) VALUES
(3, 'تماس با ما', 'دوستان من حقوق خوندم اما علاقه من به برنامه نویسی خیلی بیشتر بود\r\n\r\nو عاشق برنامه نویسی هستم سال ها قبل برای اندروید چند برنامه طراحی کردم و در کافه بازار منتشر نمودم با توجه به اینکه اندروید سیستم عامل پرمخاطبی هست واقعا طراحی برای چنین پلتفرمی جذابیت داره اما چون یادگیری سینتکس چند زبان مستلزم زمان و صرف هزینه میباشد اون موضوع رو فعلا کنار گذاشتم و با دات نت و پی اچ پی کار میکنم اگر عزیزانی نیاز به پروژه داشتن و توانایی مالی هم نداشتن مشکلی نیست باهام در تماس باشن و بنده بدون چشم داشتی برنامه رو طراحی خواهم کرد البته قبلا برنامه های بسیاری طراحی کردم که به مرور بصورت رایگان در سایت قرار خواهم داد\r\n\r\nسعی میکنم مطلب مفیدی رو در زمینه های برنامه نویسی  دسکتاپ و موبایل ارایه بدم اگر دوستان مطالبی داشتن و مایل بودن در سایت منتشر خواهم نمود', '9014413449', 'armanbabak25@gmail.com', 'https://t.me/netdeveloperx', 'noting', 'https://www.linkedin.com/in/mbaurmia/', 'http://ayremloo.ir/rss/', '2021-08-25 12:07:40', '2021-08-25 12:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_03_001457_create_roles_table', 1),
(5, '2021_08_03_001726_create_role_user_table', 1),
(6, '2021_08_04_054247_add_status_to_users_table', 1),
(7, '2021_08_04_090141_create_photos_table', 1),
(8, '2021_08_04_100831_add_avatar_to_users_table', 1),
(9, '2021_08_07_050923_create_categories_table', 1),
(10, '2021_08_07_051233_create_posts_table', 1),
(11, '2021_08_07_063040_add_status_column_to_posts', 1),
(12, '2021_08_08_112831_update_foreign_key_posts_table', 1),
(13, '2021_08_15_112442_create_comments_table', 1),
(14, '2021_08_23_051814_create_showlinks_table', 2),
(15, '2021_08_24_103632_create_contacts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('armanbabak25@gmail.com', '$2y$10$TiUtjnxLRzuKVxNTHgTUEung68Dwm/RU8CCryaWC0OyqzsnOWf/vO', '2021-08-25 14:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `path`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '16296858161622830701valentine-039-s-day-2560x1440-valentines-day-2019-love-image-heart-8k-21134.jpg', '1622830701valentine-039-s-day-2560x1440-valentines-day-2019-love-image-heart-8k-21134.jpg', 1, '2021-08-23 15:00:16', '2021-08-23 15:00:16'),
(5, '1629685882Behance_3.png', 'Behance_3.png', 1, '2021-08-23 15:01:22', '2021-08-23 15:01:22'),
(6, '1629685900Yelp_3.png', 'Yelp_3.png', 1, '2021-08-23 15:01:40', '2021-08-23 15:01:40'),
(7, '1629685919instagram-farsgraphic.png', 'instagram-farsgraphic.png', 1, '2021-08-23 15:01:59', '2021-08-23 15:01:59'),
(8, '1629689539instagram-farsgraphic.png', 'instagram-farsgraphic.png', 1, '2021-08-23 16:02:19', '2021-08-23 16:02:19'),
(9, '16296926281622829831backgr2ouuund.jpeg', '1622829831backgr2ouuund.jpeg', 1, '2021-08-23 16:53:48', '2021-08-23 16:53:48'),
(10, '16296926531622820380443d.jpg', '1622820380443d.jpg', 1, '2021-08-23 16:54:13', '2021-08-23 16:54:13'),
(11, '162969267716231653296a4d94a180dc7656df2ae77a2b89cc4c.png', '16231653296a4d94a180dc7656df2ae77a2b89cc4c.png', 1, '2021-08-23 16:54:37', '2021-08-23 16:54:37'),
(12, '16296927061622829971Hacking-Illustration.jpg', '1622829971Hacking-Illustration.jpg', 1, '2021-08-23 16:55:06', '2021-08-23 16:55:06'),
(13, '16296927581622820380443d.jpg', '1622820380443d.jpg', 1, '2021-08-23 16:55:58', '2021-08-23 16:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `meta_description`, `meta_keywords`, `user_id`, `photo_id`, `category_id`, `created_at`, `updated_at`, `status`) VALUES
(1, 'php', 'php-tech2', 'گاها لازم میشه فایل های رمزنگاری بشن یا به حالتی دیگر تبدیل بشن که قابل دستیابی نباشن\r\nدر دات نت کتابخانه های پویای (DLL) بسیاری وجود دارد که با استفاده از آنها تولید و توسعه برنامه ها بسیار راحت و سریع انجام می پذیرد\r\nاما در این اموزش بدون استفاده از کتابخانه صرفا با کدنویسی نحوه ذخیره فایل بصورت استریم رو بصورت فیلم براتون اموزش میدم\r\n این فیلم نحوه تبدیل یک فایل  به آرایه ای از جنس بایت (BYTE ARRAY) (یعنی BYTE[]) ، سپس آرایه را به استریم (از نوع STREAM) تبدیل کرده و نتیجه در متن نمایش داده میشه\r\n\r\nاموزش نخوه تبدیل فایل به بایت و بالعکس و ذخیره ادرس اون در دیتابیس و لود رد دیتاگرید هست\r\nاموزش رو بصورت فیلم در اوردم صدا نداره بعد از 49 دقیقه صحبت کردن تازه فهمیدم برنامه صدا ضبط نکرده پروژه زیاد پیچیده نیستگاها لازم میشه فایل های رمزنگاری بشن یا به حالتی دیگر تبدیل بشن که قابل دستیابی نباشن\r\nدر دات نت کتابخانه های پویای (DLL) بسیاری وجود دارد که با استفاده از آنها تولید و توسعه برنامه ها بسیار راحت و سریع انجام می پذیرد\r\nاما در این اموزش بدون استفاده از کتابخانه صرفا با کدنویسی نحوه ذخیره فایل بصورت استریم رو بصورت فیلم براتون اموزش میدم\r\n این فیلم نحوه تبدیل یک فایل  به آرایه ای از جنس بایت (BYTE ARRAY) (یعنی BYTE[]) ، سپس آرایه را به استریم (از نوع STREAM) تبدیل کرده و نتیجه در متن نمایش داده میشه\r\n\r\nاموزش نخوه تبدیل فایل به بایت و بالعکس و ذخیره ادرس اون در دیتابیس و لود رد دیتاگرید هست\r\nاموزش رو بصورت فیلم در اوردم صدا نداره بعد از 49 دقیقه صحبت کردن تازه فهمیدم برنامه صدا ضبط نکرده پروژه زیاد پیچیده نیستگاها لازم میشه فایل های رمزنگاری بشن یا به حالتی دیگر تبدیل بشن که قابل دستیابی نباشن\r\nدر دات نت کتابخانه های پویای (DLL) بسیاری وجود دارد که با استفاده از آنها تولید و توسعه برنامه ها بسیار راحت و سریع انجام می پذیرد\r\nاما در این اموزش بدون استفاده از کتابخانه صرفا با کدنویسی نحوه ذخیره فایل بصورت استریم رو بصورت فیلم براتون اموزش میدم\r\n این فیلم نحوه تبدیل یک فایل  به آرایه ای از جنس بایت (BYTE ARRAY) (یعنی BYTE[]) ، سپس آرایه را به استریم (از نوع STREAM) تبدیل کرده و نتیجه در متن نمایش داده میشه\r\n\r\nاموزش نخوه تبدیل فایل به بایت و بالعکس و ذخیره ادرس اون در دیتابیس و لود رد دیتاگرید هست\r\nاموزش رو بصورت فیلم در اوردم صدا نداره بعد از 49 دقیقه صحبت کردن تازه فهمیدم برنامه صدا ضبط نکرده پروژه زیاد پیچیده نیست', 'eeeeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeeee', 1, 4, 2, '2021-08-22 18:10:20', '2021-08-23 16:49:00', 1),
(2, 'laravel', 'php-laravel', 'خب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های کامپیوتری هست و در سراسر دنیا بنا به دلایل مختلف و اینکه رایگان بودن لینوکس قصد جایگزینی لینوکس بجای ویندوز را دارند عمده ترین دلایل ضعف امنیتی ویندوز و گران بودن آن هست  البته ضعف امنیتی ویندوز در قبال کاربران و تعداد نرم افزارهای آنست چون کاربران ویندوز در کل دنیا 90% هستن و لینوکس فقط 2% خب حالا تصور کنید این 90درصد  فقط  5 درصد برنامه نوس و محقق امنیتی سیستم باشن چه بلایی سر ویندوز میاد اما در مورد قیمت لایسنس قانونی   ویندوز سرور دیتاسنتر2019 چیزی در حدود 40میلیون تومن قیمت داره و  لایسنس  یه ویندوز 10 معمولی حرفه ای 5میلیون تومن و چون برای فعال سازی ویندوز ها اکنون در ایران از کرک استفاده میشود و قبل از انتشار ویرایش شده و تصمینی برای امنیت آنها نیست فرض کنیم شرکت X برای کرک ویندوز مجبور به دستکاری ویندوز هست و لازمه کرک باز کردن مسیری برای جلوگیری از دسترسی ویندوز و غیر فعال کردن بخش امنیتی هست خب در این حالت کسی میتونه تضمین بده این ویندوز برای جاسوسی دستکاری نشده باشه ؟و اینکه در این حالت جاسوسی بنده و شما برای این شرکت ها سودی نداره و جاسوسی شرکت ها و ادارات هدف هست و شرکت ها ناچارا ویندوز قانونی را انتخاب میکنند و بنابراین رایگان بودن لینوکس مزیتی بزرگ محسوب میشود و در مقابل مشکلات نفوذ ویندوز و همچنین وجود نرم افزارهای فراوان برای هک ویندوز شرکت ها تمایل به استفاده از لینوکس را دارن و در ایران هستن شرکت هایی که همه سیستم های خود را به لینوکس تغییر دادن', 'خب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های ک', 'dddddddddddddddddddddd', 1, 9, 4, '2021-08-23 16:53:48', '2021-08-23 16:53:48', 1),
(3, 'linux', 'linux-dark', 'خب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های کامپیوتری هست و در سراسر دنیا بنا به دلایل مختلف و اینکه رایگان بودن لینوکس قصد جایگزینی لینوکس بجای ویندوز را دارند عمده ترین دلایل ضعف امنیتی ویندوز و گران بودن آن هست  البته ضعف امنیتی ویندوز در قبال کاربران و تعداد نرم افزارهای آنست چون کاربران ویندوز در کل دنیا 90% هستن و لینوکس فقط 2% خب حالا تصور کنید این 90درصد  فقط  5 درصد برنامه نوس و محقق امنیتی سیستم باشن چه بلایی سر ویندوز میاد اما در مورد قیمت لایسنس قانونی   ویندوز سرور دیتاسنتر2019 چیزی در حدود 40میلیون تومن قیمت داره و  لایسنس  یه ویندوز 10 معمولی حرفه ای 5میلیون تومن و چون برای فعال سازی ویندوز ها اکنون در ایران از کرک استفاده میشود و قبل از انتشار ویرایش شده و تصمینی برای امنیت آنها نیست فرض کنیم شرکت X برای کرک ویندوز مجبور به دستکاری ویندوز هست و لازمه کرک باز کردن مسیری برای جلوگیری از دسترسی ویندوز و غیر فعال کردن بخش امنیتی هست خب در این حالت کسی میتونه تضمین بده این ویندوز برای جاسوسی دستکاری نشده باشه ؟و اینکه در این حالت جاسوسی بنده و شما برای این شرکت ها سودی نداره و جاسوسی شرکت ها و ادارات هدف هست و شرکت ها ناچارا ویندوز قانونی را انتخاب میکنند و بنابراین رایگان بودن لینوکس مزیتی بزرگ محسوب میشود و در مقابل مشکلات نفوذ ویندوز و همچنین وجود نرم افزارهای فراوان برای هک ویندوز شرکت ها تمایل به استفاده از لینوکس را دارن و در ایران هستن شرکت هایی که همه سیستم های خود را به لینوکس تغییر دادن\r\n\r\nخب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های کامپیوتری هست و در سراسر دنیا بنا به دلایل مختلف و اینکه رایگان بودن لینوکس قصد جایگزینی لینوکس بجای ویندوز را دارند عمده ترین دلایل ضعف امنیتی ویندوز و گران بودن آن هست  البته ضعف امنیتی ویندوز در قبال کاربران و تعداد نرم افزارهای آنست چون کاربران ویندوز در کل دنیا 90% هستن و لینوکس فقط 2% خب حالا تصور کنید این 90درصد  فقط  5 درصد برنامه نوس و محقق امنیتی سیستم باشن چه بلایی سر ویندوز میاد اما در مورد قیمت لایسنس قانونی   ویندوز سرور دیتاسنتر2019 چیزی در حدود 40میلیون تومن قیمت داره و  لایسنس  یه ویندوز 10 معمولی حرفه ای 5میلیون تومن و چون برای فعال سازی ویندوز ها اکنون در ایران از کرک استفاده میشود و قبل از انتشار ویرایش شده و تصمینی برای امنیت آنها نیست فرض کنیم شرکت X برای کرک ویندوز مجبور به دستکاری ویندوز هست و لازمه کرک باز کردن مسیری برای جلوگیری از دسترسی ویندوز و غیر فعال کردن بخش امنیتی هست خب در این حالت کسی میتونه تضمین بده این ویندوز برای جاسوسی دستکاری نشده باشه ؟و اینکه در این حالت جاسوسی بنده و شما برای این شرکت ها سودی نداره و جاسوسی شرکت ها و ادارات هدف هست و شرکت ها ناچارا ویندوز قانونی را انتخاب میکنند و بنابراین رایگان بودن لینوکس مزیتی بزرگ محسوب میشود و در مقابل مشکلات نفوذ ویندوز و همچنین وجود نرم افزارهای فراوان برای هک ویندوز شرکت ها تمایل به استفاده از لینوکس را دارن و در ایران هستن شرکت هایی که همه سیستم های خود را به لینوکس تغییر دادن', 'vvvvvvvvvvvvvv', 'vvvvvvvvvvvvv', 1, 10, 3, '2021-08-23 16:54:13', '2021-08-23 16:54:13', 1),
(4, 'dornet', 'dotnet', 'خب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های کامپیوتری هست و در سراسر دنیا بنا به دلایل مختلف و اینکه رایگان بودن لینوکس قصد جایگزینی لینوکس بجای ویندوز را دارند عمده ترین دلایل ضعف امنیتی ویندوز و گران بودن آن هست  البته ضعف امنیتی ویندوز در قبال کاربران و تعداد نرم افزارهای آنست چون کاربران ویندوز در کل دنیا 90% هستن و لینوکس فقط 2% خب حالا تصور کنید این 90درصد  فقط  5 درصد برنامه نوس و محقق امنیتی سیستم باشن چه بلایی سر ویندوز میاد اما در مورد قیمت لایسنس قانونی   ویندوز سرور دیتاسنتر2019 چیزی در حدود 40میلیون تومن قیمت داره و  لایسنس  یه ویندوز 10 معمولی حرفه ای 5میلیون تومن و چون برای فعال سازی ویندوز ها اکنون در ایران از کرک استفاده میشود و قبل از انتشار ویرایش شده و تصمینی برای امنیت آنها نیست فرض کنیم شرکت X برای کرک ویندوز مجبور به دستکاری ویندوز هست و لازمه کرک باز کردن مسیری برای جلوگیری از دسترسی ویندوز و غیر فعال کردن بخش امنیتی هست خب در این حالت کسی میتونه تضمین بده این ویندوز برای جاسوسی دستکاری نشده باشه ؟و اینکه در این حالت جاسوسی بنده و شما برای این شرکت ها سودی نداره و جاسوسی شرکت ها و ادارات هدف هست و شرکت ها ناچارا ویندوز قانونی را انتخاب میکنند و بنابراین رایگان بودن لینوکس مزیتی بزرگ محسوب میشود و در مقابل مشکلات نفوذ ویندوز و همچنین وجود نرم افزارهای فراوان برای هک ویندوز شرکت ها تمایل به استفاده از لینوکس را دارن و در ایران هستن شرکت هایی که همه سیستم های خود را به لینوکس تغییر دادن\r\n\r\nخب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های کامپیوتری هست و در سراسر دنیا بنا به دلایل مختلف و اینکه رایگان بودن لینوکس قصد جایگزینی لینوکس بجای ویندوز را دارند عمده ترین دلایل ضعف امنیتی ویندوز و گران بودن آن هست  البته ضعف امنیتی ویندوز در قبال کاربران و تعداد نرم افزارهای آنست چون کاربران ویندوز در کل دنیا 90% هستن و لینوکس فقط 2% خب حالا تصور کنید این 90درصد  فقط  5 درصد برنامه نوس و محقق امنیتی سیستم باشن چه بلایی سر ویندوز میاد اما در مورد قیمت لایسنس قانونی   ویندوز سرور دیتاسنتر2019 چیزی در حدود 40میلیون تومن قیمت داره و  لایسنس  یه ویندوز 10 معمولی حرفه ای 5میلیون تومن و چون برای فعال سازی ویندوز ها اکنون در ایران از کرک استفاده میشود و قبل از انتشار ویرایش شده و تصمینی برای امنیت آنها نیست فرض کنیم شرکت X برای کرک ویندوز مجبور به دستکاری ویندوز هست و لازمه کرک باز کردن مسیری برای جلوگیری از دسترسی ویندوز و غیر فعال کردن بخش امنیتی هست خب در این حالت کسی میتونه تضمین بده این ویندوز برای جاسوسی دستکاری نشده باشه ؟و اینکه در این حالت جاسوسی بنده و شما برای این شرکت ها سودی نداره و جاسوسی شرکت ها و ادارات هدف هست و شرکت ها ناچارا ویندوز قانونی را انتخاب میکنند و بنابراین رایگان بودن لینوکس مزیتی بزرگ محسوب میشود و در مقابل مشکلات نفوذ ویندوز و همچنین وجود نرم افزارهای فراوان برای هک ویندوز شرکت ها تمایل به استفاده از لینوکس را دارن و در ایران هستن شرکت هایی که همه سیستم های خود را به لینوکس تغییر دادن', 'ssssssssssss', 'sssssssss', 1, 11, 5, '2021-08-23 16:54:37', '2021-08-23 16:54:37', 1),
(5, 'php', 'php-tech3', 'خب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های کامپیوتری هست و در سراسر دنیا بنا به دلایل مختلف و اینکه رایگان بودن لینوکس قصد جایگزینی لینوکس بجای ویندوز را دارند عمده ترین دلایل ضعف امنیتی ویندوز و گران بودن آن هست  البته ضعف امنیتی ویندوز در قبال کاربران و تعداد نرم افزارهای آنست چون کاربران ویندوز در کل دنیا 90% هستن و لینوکس فقط 2% خب حالا تصور کنید این 90درصد  فقط  5 درصد برنامه نوس و محقق امنیتی سیستم باشن چه بلایی سر ویندوز میاد اما در مورد قیمت لایسنس قانونی   ویندوز سرور دیتاسنتر2019 چیزی در حدود 40میلیون تومن قیمت داره و  لایسنس  یه ویندوز 10 معمولی حرفه ای 5میلیون تومن و چون برای فعال سازی ویندوز ها اکنون در ایران از کرک استفاده میشود و قبل از انتشار ویرایش شده و تصمینی برای امنیت آنها نیست فرض کنیم شرکت X برای کرک ویندوز مجبور به دستکاری ویندوز هست و لازمه کرک باز کردن مسیری برای جلوگیری از دسترسی ویندوز و غیر فعال کردن بخش امنیتی هست خب در این حالت کسی میتونه تضمین بده این ویندوز برای جاسوسی دستکاری نشده باشه ؟و اینکه در این حالت جاسوسی بنده و شما برای این شرکت ها سودی نداره و جاسوسی شرکت ها و ادارات هدف هست و شرکت ها ناچارا ویندوز قانونی را انتخاب میکنند و بنابراین رایگان بودن لینوکس مزیتی بزرگ محسوب میشود و در مقابل مشکلات نفوذ ویندوز و همچنین وجود نرم افزارهای فراوان برای هک ویندوز شرکت ها تمایل به استفاده از لینوکس را دارن و در ایران هستن شرکت هایی که همه سیستم های خود را به لینوکس تغییر دادن', 'ssssssssssssssssssssssssssss', 'ssssssssssssssssssss', 1, 12, 4, '2021-08-23 16:55:06', '2021-08-26 19:18:32', 1),
(6, 'php tutrial', 'phplaravel', 'خب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های کامپیوتری هست و در سراسر دنیا بنا به دلایل مختلف و اینکه رایگان بودن لینوکس قصد جایگزینی لینوکس بجای ویندوز را دارند عمده ترین دلایل ضعف امنیتی ویندوز و گران بودن آن هست  البته ضعف امنیتی ویندوز در قبال کاربران و تعداد نرم افزارهای آنست چون کاربران ویندوز در کل دنیا 90% هستن و لینوکس فقط 2% خب حالا تصور کنید این 90درصد  فقط  5 درصد برنامه نوس و محقق امنیتی سیستم باشن چه بلایی سر ویندوز میاد اما در مورد قیمت لایسنس قانونی   ویندوز سرور دیتاسنتر2019 چیزی در حدود 40میلیون تومن قیمت داره و  لایسنس  یه ویندوز 10 معمولی حرفه ای 5میلیون تومن و چون برای فعال سازی ویندوز ها اکنون در ایران از کرک استفاده میشود و قبل از انتشار ویرایش شده و تصمینی برای امنیت آنها نیست فرض کنیم شرکت X برای کرک ویندوز مجبور به دستکاری ویندوز هست و لازمه کرک باز کردن مسیری برای جلوگیری از دسترسی ویندوز و غیر فعال کردن بخش امنیتی هست خب در این حالت کسی میتونه تضمین بده این ویندوز برای جاسوسی دستکاری نشده باشه ؟و اینکه در این حالت جاسوسی بنده و شما برای این شرکت ها سودی نداره و جاسوسی شرکت ها و ادارات هدف هست و شرکت ها ناچارا ویندوز قانونی را انتخاب میکنند و بنابراین رایگان بودن لینوکس مزیتی بزرگ محسوب میشود و در مقابل مشکلات نفوذ ویندوز و همچنین وجود نرم افزارهای فراوان برای هک ویندوز شرکت ها تمایل به استفاده از لینوکس را دارن و در ایران هستن شرکت هایی که همه سیستم های خود را به لینوکس تغییر دادن\r\n\r\nخب اساس کار شرکت ها و برخی ادارات  بر مبنای سیستم های کامپیوتری هست و در سراسر دنیا بنا به دلایل مختلف و اینکه رایگان بودن لینوکس قصد جایگزینی لینوکس بجای ویندوز را دارند عمده ترین دلایل ضعف امنیتی ویندوز و گران بودن آن هست  البته ضعف امنیتی ویندوز در قبال کاربران و تعداد نرم افزارهای آنست چون کاربران ویندوز در کل دنیا 90% هستن و لینوکس فقط 2% خب حالا تصور کنید این 90درصد  فقط  5 درصد برنامه نوس و محقق امنیتی سیستم باشن چه بلایی سر ویندوز میاد اما در مورد قیمت لایسنس قانونی   ویندوز سرور دیتاسنتر2019 چیزی در حدود 40میلیون تومن قیمت داره و  لایسنس  یه ویندوز 10 معمولی حرفه ای 5میلیون تومن و چون برای فعال سازی ویندوز ها اکنون در ایران از کرک استفاده میشود و قبل از انتشار ویرایش شده و تصمینی برای امنیت آنها نیست فرض کنیم شرکت X برای کرک ویندوز مجبور به دستکاری ویندوز هست و لازمه کرک باز کردن مسیری برای جلوگیری از دسترسی ویندوز و غیر فعال کردن بخش امنیتی هست خب در این حالت کسی میتونه تضمین بده این ویندوز برای جاسوسی دستکاری نشده باشه ؟و اینکه در این حالت جاسوسی بنده و شما برای این شرکت ها سودی نداره و جاسوسی شرکت ها و ادارات هدف هست و شرکت ها ناچارا ویندوز قانونی را انتخاب میکنند و بنابراین رایگان بودن لینوکس مزیتی بزرگ محسوب میشود و در مقابل مشکلات نفوذ ویندوز و همچنین وجود نرم افزارهای فراوان برای هک ویندوز شرکت ها تمایل به استفاده از لینوکس را دارن و در ایران هستن شرکت هایی که همه سیستم های خود را به لینوکس تغییر دادن', 'ddddddddddddd', 'ddddddddddddddddddddddddd', 1, 13, 2, '2021-08-23 16:55:58', '2021-08-23 16:55:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-08-12 05:04:52', NULL),
(2, 'user', '2021-08-12 05:05:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-08-12 05:26:25', NULL),
(2, 1, '2021-08-12 05:26:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `showlinks`
--

CREATE TABLE `showlinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `url_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `showlinks`
--

INSERT INTO `showlinks` (`id`, `url_title`, `url_link`, `created_at`, `updated_at`) VALUES
(2, 'پلیس فتا', 'https://www.cyberpolice.ir', '2021-08-23 15:24:17', '2021-08-23 15:24:17'),
(3, 'آموزش برنامه نویسی', 'https://ayromloo.ir', '2021-08-23 15:24:47', '2021-08-23 15:24:47'),
(4, 'مرجع php', 'https://www.bitdegree.org', '2021-08-23 15:25:28', '2021-08-23 15:25:28'),
(5, 'آپلود سنتر', 'https://www.picofile.com', '2021-08-23 15:25:59', '2021-08-23 15:25:59'),
(6, 'دانلود مستقیم گوگل پلی', 'https://apps.evozi.com/apk-downloader/?id=com.maxistar.monobluetoothfree', '2021-08-23 15:32:57', '2021-08-23 15:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `photo_id`) VALUES
(1, 'محمدباقر آیرملو', 'armanbabak25@gmail.com', '2021-08-14 15:29:37', '$2y$10$xWTAevycMGmd8xv.hOsVkOS/8tArJj/c7DE566YLZwCkiLuCJaI0q', NULL, '2021-08-12 15:29:37', '2021-08-26 19:19:24', 1, 5),
(2, 'sssssssss', 'mbaurmiaa@gmail.com', '2021-08-12 05:28:37', '$2y$10$UhgdOndcbgkn1Xj4xbo0qucYOJRADvQshY2VE8LXA/CitbcMyYoe.', NULL, '2021-08-12 15:39:21', '2021-08-23 15:01:59', 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_user_id_foreign` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_photo_id_foreign` (`photo_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `showlinks`
--
ALTER TABLE `showlinks`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `showlinks`
--
ALTER TABLE `showlinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
