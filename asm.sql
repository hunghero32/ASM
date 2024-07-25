-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 20, 2024 lúc 09:34 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Molly Bailey', 'https://via.placeholder.com/640x480.png/008866?text=banners+dolorem', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(2, 'Cheyenne Hessel II', 'https://via.placeholder.com/640x480.png/001100?text=banners+sed', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(3, 'Eriberto Schowalter', 'https://via.placeholder.com/640x480.png/00aa00?text=banners+vero', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(4, 'Mrs. Caterina Feeney', 'https://via.placeholder.com/640x480.png/009977?text=banners+possimus', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(5, 'Mr. Kamron McCullough II', 'https://via.placeholder.com/640x480.png/00ddcc?text=banners+consequuntur', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(6, 'Ms. Graciela Eichmann MD', 'https://via.placeholder.com/640x480.png/0033dd?text=banners+illum', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(7, 'Celia Mante', 'https://via.placeholder.com/640x480.png/00ee33?text=banners+sed', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(8, 'Dr. Dena Lang Jr.', 'https://via.placeholder.com/640x480.png/008888?text=banners+corrupti', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(9, 'Karina Reichert PhD', 'https://via.placeholder.com/640x480.png/00ee44?text=banners+sed', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(10, 'Dr. Ray Dibbert Jr.', 'https://via.placeholder.com/640x480.png/00ff44?text=banners+nulla', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 21, 19, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(2, 2, 22, 42, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(3, 3, 23, 56, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(4, 4, 24, 38, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(5, 5, 25, 58, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(6, 6, 26, 35, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(7, 7, 27, 60, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(8, 8, 28, 59, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(9, 9, 29, 17, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(10, 10, 30, 3, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(11, 11, 31, 94, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(12, 12, 32, 42, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(13, 13, 33, 97, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(14, 14, 34, 14, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(15, 15, 35, 26, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(16, 16, 36, 45, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(17, 17, 37, 43, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(18, 18, 38, 97, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(19, 19, 39, 71, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(20, 20, 40, 29, '2024-07-19 06:39:28', '2024-07-19 06:39:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `desc`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Onie O\'Hara', 'Animi molestiae doloremque sed dolorem reprehenderit. Iusto et ipsam harum. Corporis tempora laborum quidem autem doloremque aut reprehenderit. Architecto aut ut nostrum magnam et qui.', 0, '2024-07-19 06:39:26', '2024-07-19 06:39:26'),
(2, 'Dale Rohan', 'Aut dignissimos asperiores reiciendis mollitia dolor id sed. Aut autem voluptas temporibus est. Repellendus quisquam eaque et. Error est blanditiis nemo est amet voluptates tempore.', 1, '2024-07-19 06:39:26', '2024-07-19 06:39:26'),
(3, 'Felton Nicolas', 'Occaecati delectus ut itaque harum. Earum nostrum qui optio voluptates in. Amet rerum dolore voluptatem aliquid id. Aspernatur nihil et est.', 0, '2024-07-19 06:39:26', '2024-07-19 06:39:26'),
(4, 'Vladimir Jacobs', 'Quia provident et minus qui. Illum est suscipit doloremque eius aperiam. Vitae dicta sint perferendis qui aperiam eligendi. Aut vel quam porro vero.', 1, '2024-07-19 06:39:26', '2024-07-19 06:39:26'),
(5, 'Bridget Lueilwitz II', 'Non alias magnam dolor placeat reprehenderit quam error. Ullam assumenda adipisci dolor recusandae consequatur voluptates. Rerum nesciunt exercitationem numquam ex cum iusto esse.', 0, '2024-07-19 06:39:26', '2024-07-19 06:39:26'),
(6, 'Vita Schroeder', 'Molestiae voluptas nihil rem in nemo. Hic et dolorem voluptatem necessitatibus atque. Tempora illo dicta incidunt veritatis.', 1, '2024-07-19 06:39:26', '2024-07-19 06:39:26'),
(7, 'Myrtis Glover', 'Nostrum suscipit soluta modi. Ut qui et maiores voluptatem inventore labore aut. Sunt doloribus voluptates incidunt iure. Iste non temporibus dignissimos minima iure.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(8, 'Helene Russel', 'Quisquam quo aliquam similique velit repellat dolorem. Reiciendis voluptatem qui eos debitis enim voluptatem. Laudantium molestiae labore quia tempora.', 0, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(9, 'Edyth Johnson', 'Ipsum nemo quam dolorem odit corrupti vero at. Ut ut et quo quis quibusdam distinctio eius. Unde ipsam est qui. Id odit dolor est facere.', 0, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(10, 'Augustus Jacobson', 'Adipisci omnis ut culpa eveniet. Voluptatem temporibus est beatae. Et qui aperiam recusandae dolorem aut sed et nemo. Harum quisquam itaque quia voluptates voluptatem.', 0, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(11, 'Dr. Harmon Marvin', 'Beatae quis cumque est modi sit laborum nesciunt. Ab aut non veniam voluptatem aperiam. Unde aperiam sit animi odit repellendus. Voluptatibus non sapiente officia tempora.', 0, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(12, 'Monica Predovic', 'Nesciunt ipsam eveniet fugit quia sunt dignissimos. Harum ipsam consequatur dolor repellat consectetur saepe debitis. In et vero voluptatem est. Incidunt nam eveniet architecto error vel nulla.', 0, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(13, 'Ramon Brekke', 'Assumenda consequatur consequatur officiis qui similique optio. Laudantium consequatur provident quia. A eius facilis et nisi vel pariatur. Fugit explicabo velit voluptatem qui incidunt qui magni.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(14, 'Juwan Kreiger II', 'Vel dolorem et deleniti et aut. Officiis officia culpa velit distinctio. Consequatur minus minima qui voluptate aspernatur.', 0, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(15, 'Dr. Emile Sipes PhD', 'Ut esse sequi accusantium sed alias quae dolorem. Provident velit et aliquam ipsam cupiditate. Quas voluptatem ipsa et autem provident.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(16, 'Mr. Oran Turner II', 'Sit id excepturi quam. Ipsa deleniti eveniet quasi dolorem provident vel. Asperiores vel error velit asperiores nam. Magnam ducimus odit beatae exercitationem architecto dolor.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(17, 'Jarvis Harber', 'Cum reprehenderit delectus pariatur dolorem autem. Illum vero inventore possimus ut voluptas. Doloribus porro qui ut iure. Voluptas qui repudiandae et nesciunt.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(18, 'Kaitlyn Wiegand', 'Nostrum praesentium recusandae id sunt quos blanditiis et. Similique et necessitatibus quisquam provident eum suscipit laborum.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(19, 'Dr. Axel Mann', 'Fugiat ut nihil quisquam vel autem. Voluptatibus quaerat est et placeat ad voluptates veniam. Magni omnis eum nobis eligendi accusamus ut. Laborum provident voluptatem qui non earum voluptatibus.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(20, 'Tod Rempel', 'Et et asperiores tempora itaque. Aut est odit rem et iste dolorem quis placeat. Eos voluptas quam odit et est dolores cupiditate.', 0, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(21, 'Mrs. Rubie Rice', 'Provident ullam esse porro quo assumenda quae. Quam consequuntur soluta est. Vel quisquam consequuntur sed numquam aut. Modi nam voluptatibus omnis quia rerum deserunt.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(22, 'Idella Adams', 'Ad sed fuga quaerat dolor. Ratione dolorem velit asperiores. Et ipsum dolorem dolores atque et.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(23, 'Patricia McClure', 'Consequatur vero eum harum et aut. Quo magnam sapiente aut voluptatem aut. Est quod repellendus quis dolorem.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(24, 'Rogers Wisozk', 'Eum sit voluptatem soluta vitae rem accusantium dignissimos. Quidem quae quos doloribus autem consectetur voluptatem nesciunt repudiandae. Harum repellendus reprehenderit non dolores quam.', 0, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(25, 'Ottilie Kovacek', 'Non accusamus autem repudiandae dolorum. Sunt atque quis voluptatibus nihil mollitia impedit deserunt. Velit delectus nemo non harum voluptatem quis quaerat. Nesciunt odio facilis recusandae culpa unde est iusto id.', 1, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(26, 'Tiana King PhD', 'Explicabo labore et optio esse nulla accusamus. Voluptatem ea cum praesentium eum atque est. Pariatur in autem sed modi illum dicta tempore.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(27, 'Baylee Paucek', 'Nesciunt voluptatum quo minus reiciendis et. Odit dignissimos perferendis est est dolor. Aut vel quia corporis qui. Accusamus qui voluptatibus aut impedit dignissimos consequatur ad.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(28, 'Kavon Koss PhD', 'Accusamus minus ut ullam itaque. Nobis quisquam eos deserunt ut et illo tenetur repellendus. Maxime illum beatae voluptate.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(29, 'Stella Torphy Jr.', 'Eos provident minus repudiandae eum cupiditate. At sed earum perferendis enim. Voluptates sed fugiat natus sit eligendi. Perferendis ut suscipit temporibus sit harum nobis.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(30, 'Miss Catherine Bahringer MD', 'Blanditiis voluptatum aut numquam facere voluptate iure tenetur. Blanditiis qui velit fugiat voluptatem. Dolores ad aut est tempore.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(31, 'Mallie Bosco', 'Officiis commodi harum aut placeat labore excepturi officiis quisquam. Esse quo sit tempore dolorem dolores. Fuga eum et tenetur sint dolores.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(32, 'Elisa Little', 'Consequatur suscipit corrupti similique saepe itaque ut iste. Nemo quas nesciunt earum et suscipit. Qui sed accusantium ea. Ducimus ducimus sunt atque.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(33, 'Mrs. Viva Batz', 'Non omnis odio neque et at voluptas. Deserunt et aspernatur nam mollitia voluptas aut. Dolorem illum quae qui voluptate nesciunt deleniti.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(34, 'Mrs. Sunny Kub II', 'Veniam culpa temporibus velit at et sed. Necessitatibus dignissimos hic error quia eligendi sunt a. Consectetur incidunt iure possimus rem omnis voluptas vitae. Praesentium possimus eum quia excepturi sint sunt.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(35, 'Pearlie Hackett', 'Maiores provident perspiciatis assumenda odio totam nesciunt. Est omnis deserunt ut ab. Quaerat dolore provident iste rerum assumenda sed reiciendis. Et illo corporis ullam dolorum dignissimos voluptas ab.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(36, 'Prof. Rebekah Wilkinson', 'Consectetur ea saepe iste amet. Enim explicabo ratione possimus. Id modi voluptas numquam at deleniti voluptatibus repellendus. Velit est fuga at est eligendi.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(37, 'Prof. Lavern Gibson I', 'Modi et ipsa ut odit itaque. Est rerum eligendi ut quis a placeat. Velit omnis ut aliquid assumenda molestiae ut id.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(38, 'Eulalia Steuber', 'A commodi error atque eum molestiae. Earum nisi eum enim ut cum. Velit totam saepe velit cum consequuntur vel.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(39, 'Amely Orn', 'Et vitae voluptas modi. Dolore sed iste quisquam deleniti consequatur ut omnis quia. Possimus et at dicta eaque qui. Velit ut voluptate quas.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(40, 'Lillian Baumbach', 'Praesentium qui nesciunt inventore ut. Ratione nam odio voluptatem dolorem nesciunt quia. Ad et rem veniam quia praesentium quis. Id non eum rem accusantium adipisci eum.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(41, 'Jayde Carroll', 'Numquam voluptas odit minima et. In officia laboriosam dolorum voluptates deleniti.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(42, 'Diana Raynor', 'Quibusdam similique corrupti sunt aut minima perferendis. Libero eligendi nostrum nesciunt dolorum. Molestiae ipsa eveniet nam velit tempore molestias. Aliquid modi est autem quia.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(43, 'Kole Mante PhD', 'Earum eos est sit officia. Eaque mollitia maxime consequatur officiis id. Eaque deleniti fugiat accusantium expedita repellendus aliquid.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(44, 'Emma Legros', 'Rerum debitis id ipsam. Optio quisquam officia omnis id autem. Est cum doloribus neque.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(45, 'Susie Luettgen Sr.', 'Et ipsam dolor debitis aut laboriosam ut. Eos voluptatem alias eos officiis atque soluta rerum. Veritatis eaque suscipit praesentium vero consequatur iusto.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(46, 'Vanessa Douglas', 'Aut tempore commodi reiciendis ducimus sed et qui. Magni corporis at praesentium nulla. Odio ab ea sit aut vero.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(47, 'Lamar Kemmer', 'Similique odit dolorum quasi eos ut est aut temporibus. Voluptate maxime laudantium veritatis ducimus amet nulla. Recusandae odio nihil nisi aut ullam error.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(48, 'Braden Weissnat II', 'Voluptate sit id nam. Sed rem tempore non qui eum cumque ipsa. Voluptas at corporis dolorem consequuntur debitis adipisci modi voluptate. Sit ducimus sunt expedita tempore rerum.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(49, 'Ezekiel West Jr.', 'Dolorem qui maxime maxime quis error ab modi. Qui ea voluptas est error aut molestias reiciendis. Doloremque et asperiores et accusamus.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(50, 'Alvena Reilly', 'Nesciunt cumque et et facilis et corporis aperiam. Error facere ex odit reprehenderit officia rerum. Optio numquam et nostrum assumenda assumenda quasi dolorem.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(51, 'Pasquale Dach Sr.', 'Nihil eum porro molestiae ea sit voluptate. Amet nulla quo omnis ipsam sed ipsa unde atque. Sunt ad quia voluptatum necessitatibus magnam voluptas cum.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(52, 'Lera Koch', 'Culpa repellat optio et reiciendis repellat fugiat. Itaque voluptatibus consequatur accusantium id hic. Ut optio aspernatur animi dolor ex fuga earum.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(53, 'Layla Vandervort', 'Ab ea perspiciatis laboriosam inventore. Tenetur aliquam totam perferendis ea aliquam. Veniam sed et illo incidunt. Velit velit commodi sapiente sequi impedit.', 1, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(54, 'Prof. Dallin Emard', 'Repellat dolor tenetur nemo qui dolores. Quod distinctio cupiditate quas animi molestiae eos expedita provident. Est ipsa asperiores sed voluptatem commodi voluptate. Accusamus facilis error quos esse natus possimus ad.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(55, 'Prof. Jermey Moore DVM', 'Consequatur qui vitae magnam sed dolores. Atque et tempore molestias nihil. Molestiae voluptatibus ad sed modi rerum nesciunt.', 0, '2024-07-19 06:39:28', '2024-07-19 06:39:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `total` int NOT NULL,
  `invoice_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoices`
--

INSERT INTO `invoices` (`id`, `cart_id`, `total`, `invoice_date`, `created_at`, `updated_at`) VALUES
(1, 11, 88704, '2018-01-06', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(2, 12, 72955, '1982-08-22', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(3, 13, 67784, '2017-03-16', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(4, 14, 52903, '1997-12-22', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(5, 15, 97348, '1975-05-02', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(6, 16, 20712, '2011-03-30', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(7, 17, 51584, '1985-01-10', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(8, 18, 16333, '1974-05-01', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(9, 19, 98504, '2008-01-27', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(10, 20, 54822, '1995-02-09', '2024-07-19 06:39:28', '2024-07-19 06:39:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_19_092324_create_categories_table', 1),
(6, '2024_07_19_092404_create_products_table', 1),
(7, '2024_07_19_092406_create_promotes_table', 1),
(8, '2024_07_19_092409_create_banners_table', 1),
(9, '2024_07_19_092504_create_carts_table', 1),
(10, '2024_07_19_092509_create_invoices_table', 2),
(11, '2014_10_12_100000_create_password_resets_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` int NOT NULL,
  `old_price` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `new_price`, `old_price`, `img`, `desc`, `quantity`, `is_active`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Aimee Jacobs', 6918, 66328, 'https://via.placeholder.com/360x360.png/00dd22?text=products+et', 'Excepturi voluptatibus optio voluptas velit consequatur quia. Molestiae autem est doloribus. Et aut ipsam consequatur soluta.', 2300, 1, 6, '2024-07-19 06:39:27', '2024-07-20 01:10:59'),
(2, 'Mrs. Pauline Beahan DDS', 1923, 66495, 'https://via.placeholder.com/360x360.png/00aaee?text=products+sunt', 'Quia dignissimos et velit incidunt. Earum consectetur doloribus molestiae ipsa. Distinctio sunt beatae quae architecto. Eum ab commodi corporis veritatis accusantium.', 1, 0, 6, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(3, 'Willis Stokes', 47007, 53706, 'https://via.placeholder.com/360x360.png/006699?text=products+delectus', 'Voluptatem debitis doloremque non vero et totam voluptatem. Vero quidem veritatis magni molestiae et velit qui. Ut sint qui minima non ipsum ut voluptatem.', 11, 0, 6, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(4, 'Hellen Moen', 63071, 3348, 'https://via.placeholder.com/360x360.png/008800?text=products+est', 'Amet delectus recusandae adipisci consequatur. Tempore eius quo minima minus natus. Eum facere ipsam in. Labore sunt qui amet reprehenderit minus voluptates vitae cum.', 89, 0, 9, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(5, 'Maddison Gerlach', 82869, 38793, 'https://via.placeholder.com/360x360.png/0000ff?text=products+iure', 'Quia molestias neque aliquid. Impedit ab sit placeat vitae reiciendis sunt magnam aut. Est libero earum possimus enim. Repellendus repellendus placeat incidunt voluptatum nulla.', 21, 1, 10, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(6, 'Dr. Rogers Beier PhD', 51740, 61695, 'https://via.placeholder.com/360x360.png/00ff55?text=products+et', 'Animi illum minus repudiandae. Vero impedit non fugit. Et quia velit ut et architecto.', 17, 1, 11, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(7, 'Doris Strosin', 60196, 2935, 'https://via.placeholder.com/360x360.png/0055ee?text=products+repudiandae', 'Ipsam laudantium aspernatur magnam sint. Dolores sed nam reprehenderit non eum. Animi suscipit totam nam velit rerum. Et vero dolores quos itaque aut necessitatibus.', 2, 1, 12, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(8, 'Kari Koepp', 64495, 99946, 'https://via.placeholder.com/360x360.png/005500?text=products+velit', 'Nostrum non laudantium consequatur voluptatum ut natus. Est fugiat quod est voluptatem. Placeat hic ducimus tempora nemo ut. In voluptas quasi delectus placeat occaecati porro.', 22, 0, 13, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(9, 'Brandyn Cremin', 88206, 47747, 'https://via.placeholder.com/360x360.png/0077cc?text=products+voluptatem', 'Sapiente nulla consequuntur et tenetur ut. Quo soluta eligendi velit et ab. Non quia aut cum et. Modi ut exercitationem quo cumque porro consequatur minus minima.', 65, 0, 14, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(10, 'Yessenia Reichert Jr.', 98249, 31211, 'https://via.placeholder.com/360x360.png/0055bb?text=products+eos', 'Numquam dolore sunt vitae sequi quo et debitis. Voluptatem officiis eos debitis culpa vel nihil vel deleniti. Nesciunt aliquam consectetur voluptatibus nostrum.', 92, 1, 15, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(11, 'Mr. Ansley Connelly V', 64245, 40312, 'https://via.placeholder.com/360x360.png/006644?text=products+debitis', 'Fugit enim incidunt illo tempore molestiae et. Expedita sit sapiente provident cumque sequi beatae est. Sint dicta fugit voluptate non beatae omnis. Nulla iste itaque omnis praesentium.', 42, 1, 16, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(12, 'Dora Bergstrom III', 16584, 98911, 'https://via.placeholder.com/360x360.png/0044cc?text=products+nisi', 'Consequatur et et voluptatem. Enim mollitia est omnis. At facere repudiandae dicta autem id.', 38, 1, 17, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(13, 'Josefa Graham V', 19902, 88825, 'https://via.placeholder.com/360x360.png/00bb88?text=products+nihil', 'Architecto est eum quos accusantium et autem cumque. Quibusdam ut odio quae atque autem voluptate. Praesentium provident delectus dolor cupiditate.', 29, 0, 18, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(14, 'Mrs. Angelina Huels PhD', 50145, 30176, 'https://via.placeholder.com/360x360.png/0044bb?text=products+occaecati', 'Cumque ex consequuntur similique voluptatem ex. Magnam voluptas animi odit sequi illo et. Odio eveniet consequuntur unde voluptates nobis alias error.', 41, 0, 19, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(15, 'Josephine Schulist', 80680, 63649, 'https://via.placeholder.com/360x360.png/00dd33?text=products+voluptatem', 'Neque architecto quo vero vel. Omnis beatae ut explicabo distinctio. Et nesciunt laudantium consequatur iure ut. Maiores dolor illum odio dolorem assumenda.', 57, 1, 20, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(16, 'Jaydon Stanton I', 61624, 23876, 'https://via.placeholder.com/360x360.png/009911?text=products+hic', 'Eos labore voluptatem molestiae expedita voluptatem. Voluptatem impedit debitis quia magnam quo. Consequatur commodi aliquid repudiandae quod libero.', 10, 0, 21, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(17, 'Mr. Randal Marks MD', 95508, 70721, 'https://via.placeholder.com/360x360.png/009922?text=products+ducimus', 'Pariatur ea voluptas nostrum soluta assumenda eligendi ratione veritatis. Consequatur reprehenderit consectetur qui fugiat iure eligendi exercitationem. Voluptatem qui laboriosam qui repudiandae distinctio.', 45, 0, 22, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(18, 'Raul Morissette IV', 47376, 80887, 'https://via.placeholder.com/360x360.png/00aa33?text=products+voluptas', 'Quia velit rerum itaque corporis. Consectetur laudantium nisi consequatur corporis. Iste ut consequuntur nihil voluptas nostrum. Doloribus sit enim labore et est. Provident veritatis est eum maiores similique.', 40, 1, 23, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(19, 'Dr. Geovanni Erdman PhD', 60897, 21862, 'https://via.placeholder.com/360x360.png/000033?text=products+odio', 'Dolores et incidunt cum iusto. Qui rerum soluta neque a cumque. Tenetur accusantium reiciendis atque id sunt est quia.', 85, 1, 24, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(20, 'Kayleigh Swift II', 3353, 27025, 'https://via.placeholder.com/360x360.png/000066?text=products+neque', 'Autem totam quia quos quas id. Autem cum autem architecto voluptatem eos provident qui. Dolore ipsam voluptas dolor est. Officiis vel accusantium quo atque vel et. Porro non neque asperiores nobis eos et alias.', 30, 1, 25, '2024-07-19 06:39:27', '2024-07-19 06:39:27'),
(21, 'Sheridan Cassin', 69296, 47961, 'https://via.placeholder.com/360x360.png/00cc00?text=products+aut', 'Voluptatum quasi quidem nulla quibusdam ut. Accusamus enim voluptate minima ut. Accusantium quaerat eaque reprehenderit laborum alias velit quas.', 73, 1, 26, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(22, 'Mr. Moshe Glover', 10478, 44285, 'https://via.placeholder.com/360x360.png/004422?text=products+pariatur', 'Vero eaque minima error atque doloremque. Esse exercitationem sit quasi corrupti fugiat voluptas. Qui sunt est nam repellendus veritatis ea et.', 55, 1, 27, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(23, 'Gladys Mertz', 67757, 16949, 'https://via.placeholder.com/360x360.png/00ccee?text=products+molestiae', 'Quia et et ad eaque magnam nam. Fuga dolor nihil numquam et sed reprehenderit qui.', 8, 1, 28, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(24, 'Bernardo Bode III', 36598, 92468, 'https://via.placeholder.com/360x360.png/00aaff?text=products+sit', 'Dicta repudiandae provident debitis nisi eligendi ipsa. Sunt saepe odit dolore sed nemo tenetur et. Sapiente maiores nostrum sint ut. Sed officiis ut tempore in et id placeat. Nostrum explicabo non ratione a doloremque.', 73, 0, 29, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(25, 'Emily Shanahan', 42808, 25893, 'https://via.placeholder.com/360x360.png/0000ee?text=products+aut', 'Est earum atque quia distinctio doloremque architecto. Magnam fugit et quia et harum aut dolore. Voluptatibus nam ipsum quia iure. Doloremque qui natus esse quos.', 61, 0, 30, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(26, 'Ms. Sharon Balistreri', 48080, 7019, 'https://via.placeholder.com/360x360.png/00ee44?text=products+necessitatibus', 'Quam vitae quia sed. Ut aut aut omnis at magnam. Est consequatur omnis minima et iure quas neque.', 34, 0, 31, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(27, 'Morris Zboncak', 83335, 54488, 'https://via.placeholder.com/360x360.png/005599?text=products+praesentium', 'Non quis exercitationem omnis. Iusto earum architecto repudiandae quia. Neque cumque corrupti optio officiis vel.', 28, 1, 32, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(28, 'Cedrick Cole V', 10365, 99345, 'https://via.placeholder.com/360x360.png/005588?text=products+aspernatur', 'Et eius autem numquam provident ea perspiciatis. Alias veniam ipsum voluptas error vero. Velit provident eveniet maxime omnis dolores facilis quibusdam.', 22, 0, 33, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(29, 'Lyric Hessel', 50940, 97486, 'https://via.placeholder.com/360x360.png/00aa22?text=products+earum', 'Ipsam temporibus deleniti et necessitatibus beatae dolores autem. Dolores velit quisquam quia est qui dolorem nesciunt. Ut nesciunt ea aut placeat eveniet eos.', 99, 0, 34, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(30, 'Mckayla Stanton IV', 89680, 70151, 'https://via.placeholder.com/360x360.png/00ff33?text=products+rerum', 'Dolor similique molestiae molestiae culpa. Incidunt nihil asperiores qui qui alias enim rerum voluptatem.', 68, 0, 35, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(31, 'Josue Fahey PhD', 99764, 11867, 'https://via.placeholder.com/360x360.png/0088cc?text=products+et', 'Qui doloribus repellat eaque voluptatibus natus voluptatem. Dolorum perspiciatis placeat minima perferendis tempora. Fugit facere tempora consectetur voluptate pariatur quo quia.', 34, 1, 36, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(32, 'Amiya Marvin', 18444, 92790, 'https://via.placeholder.com/360x360.png/0033bb?text=products+nemo', 'In provident repudiandae eum dolore. Provident vero commodi inventore perspiciatis expedita. Eligendi tempore ea minus explicabo.', 82, 1, 37, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(33, 'Mrs. Jammie Borer Jr.', 37563, 71517, 'https://via.placeholder.com/360x360.png/00ffdd?text=products+explicabo', 'Eligendi in qui dolor et. Animi quis natus animi molestiae consequatur. Quia fugit nobis reprehenderit nihil.', 79, 0, 38, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(34, 'Adelbert Adams', 70510, 97512, 'https://via.placeholder.com/360x360.png/00bbdd?text=products+magni', 'Sint aliquid est omnis praesentium. Sint facilis beatae ut dignissimos ut. Eos temporibus facilis excepturi in. Inventore earum dignissimos quae libero similique ipsam.', 3, 0, 39, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(35, 'Rolando Grady', 90547, 42208, 'https://via.placeholder.com/360x360.png/00ee33?text=products+id', 'Laudantium sed nemo dolorum fugiat aliquid adipisci. Dolores id totam dolore quibusdam exercitationem eos. Praesentium id placeat rerum aliquid. Illo nisi nemo ut omnis.', 11, 0, 40, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(36, 'Sherman Dach', 34133, 81347, 'https://via.placeholder.com/360x360.png/003377?text=products+eum', 'Expedita qui consectetur est et ducimus. Consequuntur culpa et expedita. Commodi est non enim cupiditate molestiae excepturi.', 84, 1, 41, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(37, 'Trace Homenick', 51930, 62326, 'https://via.placeholder.com/360x360.png/00cc99?text=products+similique', 'Voluptatem similique in qui ut est et at ab. Eaque vero dolor possimus. Amet velit nihil possimus voluptatem magni minus sit. Adipisci similique consectetur unde dolorem ut.', 27, 0, 42, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(38, 'Miss Elise Greenfelder PhD', 63534, 36900, 'https://via.placeholder.com/360x360.png/00eedd?text=products+quod', 'Autem aliquid at eos. Aperiam est nemo vel quasi ad ut. Quos deleniti voluptas eligendi.', 35, 1, 43, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(39, 'Jennie McKenzie', 77669, 25274, 'https://via.placeholder.com/360x360.png/00eeaa?text=products+eligendi', 'Beatae voluptatem dolore est ut qui. Vitae et cupiditate facere est id. Pariatur non repellat atque consequatur repellendus cupiditate. Omnis quia ea minus odio.', 66, 0, 44, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(40, 'Conrad Lang', 72043, 18357, 'https://via.placeholder.com/360x360.png/00dd66?text=products+numquam', 'Quia voluptas consectetur laudantium fugit tempora tempora deserunt vitae. Aut nostrum aut architecto aliquam consequatur ut.', 54, 1, 45, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(41, 'Alf Kassulke', 63577, 89899, 'https://via.placeholder.com/360x360.png/006655?text=products+unde', 'Minus ut eaque dolor. Assumenda omnis pariatur officiis iure in sed aut qui. Enim esse sint itaque quidem iure aut.', 24, 1, 46, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(42, 'Miss Tressa Heathcote II', 27298, 18517, 'https://via.placeholder.com/360x360.png/00ee22?text=products+et', 'Tempore quaerat qui nisi cumque. Dolorum quos enim optio nisi. Illo molestiae ut soluta eos est perspiciatis sed.', 32, 0, 47, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(43, 'Dr. Dallin Daniel', 20441, 9402, 'https://via.placeholder.com/360x360.png/002233?text=products+voluptatem', 'Sed nihil deserunt reprehenderit. Aut nam et nihil vel voluptatem voluptates voluptate. Ducimus ipsam vitae ab molestias qui saepe velit. Neque reprehenderit consectetur qui in. At minus ab enim ut.', 9, 1, 48, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(44, 'Shirley Toy', 53033, 1534, 'https://via.placeholder.com/360x360.png/002288?text=products+ea', 'Omnis ea at neque magni quae consequuntur. Facere dolores magnam odio tenetur ratione corporis aliquid. Id itaque et voluptatem architecto dolorem quis praesentium quam. At consequatur voluptate reprehenderit provident.', 78, 0, 49, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(45, 'Dr. Dock Spencer', 16383, 94054, 'https://via.placeholder.com/360x360.png/001199?text=products+omnis', 'Voluptatibus qui neque rerum. Dolorem dolorem consectetur magnam eius distinctio et. Odit sunt ducimus fugit ab dolor. Soluta atque fugiat ipsam. Harum nobis qui nam consectetur odit minima.', 48, 0, 50, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(46, 'Kay Hackett', 3790, 77479, 'https://via.placeholder.com/360x360.png/00ffbb?text=products+tempora', 'Voluptatem ea quae similique. Adipisci porro ex architecto a. Quis sint quia voluptas amet. Soluta dolore eum voluptatem maiores inventore.', 44, 0, 51, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(47, 'Mr. Keven Morar Jr.', 85173, 21013, 'https://via.placeholder.com/360x360.png/008811?text=products+sint', 'Iure sunt omnis sequi nemo culpa reprehenderit. Sunt eaque enim cupiditate rerum. Quae fuga deserunt et et provident recusandae occaecati.', 55, 1, 52, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(48, 'Jackson Stokes', 22164, 96902, 'https://via.placeholder.com/360x360.png/003399?text=products+ipsa', 'Recusandae excepturi et omnis voluptas impedit consectetur. Sit est aut quia autem voluptas vel rerum. Perspiciatis fuga numquam in voluptatem nihil dolore esse. Quisquam libero laudantium aperiam ut suscipit natus tenetur amet. Fugiat quisquam accusantium optio laborum assumenda consequatur.', 11, 1, 53, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(49, 'Fausto Gerhold', 55589, 34018, 'https://via.placeholder.com/360x360.png/009966?text=products+sit', 'Cumque eaque sunt reiciendis ut eligendi officia harum numquam. Expedita rerum dolores molestiae perferendis. Sed ea ut ex iusto nulla. Hic pariatur veritatis et rerum. Qui quasi voluptatum tempora facilis magnam possimus.', 14, 1, 54, '2024-07-19 06:39:28', '2024-07-20 01:24:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotes`
--

CREATE TABLE `promotes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `discount` int DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promotes`
--

INSERT INTO `promotes` (`id`, `name`, `description`, `start_date`, `end_date`, `discount`, `is_active`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Augustine Berge', 'Eveniet molestiae debitis tempora amet necessitatibus in excepturi. Deserunt similique et dignissimos quis provident saepe. Accusamus aut possimus voluptatum nisi id nesciunt.', '2024-05-19', '1997-12-18', 45, 1, 41, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(2, 'Claude Wisoky', 'Totam voluptas voluptatem tenetur ducimus perferendis illum necessitatibus. Neque ipsam sit consectetur omnis beatae odio modi praesentium. Dignissimos vel voluptatem fugiat sint pariatur.', '2009-11-04', '1989-01-09', 33, 1, 42, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(3, 'Susan Mitchell', 'Cumque autem expedita et. Nihil consectetur dolorem culpa exercitationem rerum. Officia eos consequatur et suscipit qui laborum quam. Officia quam qui quam.', '1992-10-06', '1994-06-04', 20, 0, 43, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(4, 'Camron D\'Amore Sr.', 'Harum quo nam qui vero officia laboriosam unde aut. Cumque tempore et voluptatem et deleniti. Quidem nihil voluptatem dolor sed voluptates et tempore.', '2004-11-01', '1998-06-09', 10, 1, 44, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(5, 'Jailyn Lebsack', 'Ut non quis laboriosam quia nemo dolorem. Et quae nam iure sit qui perspiciatis dolor sint. Cupiditate doloribus consequatur porro nemo iusto accusamus.', '2000-03-09', '2022-09-05', 17, 0, 45, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(6, 'Herminia Kuvalis', 'Aut facilis ipsum aliquam animi dolores soluta maiores. Similique autem odio suscipit soluta iure voluptate rem. Et voluptates repudiandae aut fuga qui. Cum et voluptatem aliquam minus. Et rerum vero aut id quos quos voluptatem.', '1977-04-24', '2007-11-07', 12, 1, 46, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(7, 'Francisco Kris I', 'Est aliquam maxime dolorum quo aut pariatur dolor recusandae. Voluptatum inventore aut laudantium. Sit distinctio et ipsam doloribus qui cum harum iure.', '1979-05-12', '1998-07-10', 6, 1, 47, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(8, 'Steve Douglas PhD', 'Quis corrupti perferendis repellendus ipsam quod quam quibusdam repudiandae. Quia iusto tenetur porro doloribus odit ut. Quidem earum et qui neque vel aperiam. Omnis quidem id sapiente accusantium harum voluptas aut. Dolorem optio repellendus doloremque vel.', '2016-12-01', '2021-06-15', 19, 1, 48, '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(9, 'Claud Armstrong', 'Fuga delectus optio odio consequuntur hic a quo maiores. Placeat voluptatem explicabo quod. Eveniet rem facilis architecto vero qui quis inventore.', '1995-03-31', '2019-10-01', 50, 0, 49, '2024-07-19 06:39:28', '2024-07-19 06:39:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rule` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rule`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eudora Berge', 'viva93@example.com', '2024-07-19 06:39:27', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'fjktPsuukf', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(2, 'Lina Schumm', 'amir88@example.com', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'IBXYTEiDzZ', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(3, 'Prof. Giovanni D\'Amore MD', 'odoyle@example.com', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'blVZjm9ALU', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(4, 'Connor Reilly', 'thad.stroman@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'c6nkWwmMQn', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(5, 'Prof. Dora Hauck PhD', 'kschuster@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'nJqg86Mc6r', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(6, 'Mabelle Jacobson', 'treutel.reilly@example.com', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, '1X5vnXKW9F', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(7, 'Liza Stokes', 'annalise.dicki@example.com', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'Sq3SbJFQaQ', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(8, 'Mr. Brody Hill', 'coby19@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'sTzrFmAgMD', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(9, 'Dr. Janet Schowalter', 'ypacocha@example.org', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'DfCpDgxQpW', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(10, 'Tanya Hagenes DDS', 'alden69@example.org', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'nAT2vAUFxo', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(11, 'Miss Novella Ruecker DDS', 'osinski.donavon@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'nJS7u3P28k', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(12, 'Mack Streich', 'rodriguez.austyn@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'H9QWaGlCCG', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(13, 'Eusebio Strosin', 'london.vonrueden@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'EJ9U7fzkR8', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(14, 'Loyce Kihn', 'mferry@example.org', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'IiMll5Qhd4', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(15, 'Faustino Block', 'junior84@example.org', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'qeD9zhraM7', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(16, 'Mrs. Marion Barton', 'turcotte.freddie@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'zz4nQrxzkM', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(17, 'Kelley Monahan', 'obernhard@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'TpxJMcFcAg', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(18, 'Tyree Cronin', 'krystal41@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'tB8rs3ngIe', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(19, 'Bernadine Jast PhD', 'manuel.collier@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'Tl9bxI3TmJ', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(20, 'Prof. Chadd Toy', 'qbode@example.net', '2024-07-19 06:39:28', '$2y$12$/ZXwB7m13swFGFc9GBpMj..qyOiP4i/g6AoI96HfaiYqToapAgB/2', 0, 'KEQ2RxIMU9', '2024-07-19 06:39:28', '2024-07-19 06:39:28'),
(21, 'Admin', 'admin@gmail.com', NULL, '$2y$12$Lfz4RS6EsmKZuZr6K9HvTOVUsA45clileBOFj0f.JQmDSYPqgCSPi', 0, NULL, '2024-07-19 08:36:22', '2024-07-19 08:36:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_cart_id_foreign` (`cart_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `promotes`
--
ALTER TABLE `promotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotes_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `promotes`
--
ALTER TABLE `promotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `promotes`
--
ALTER TABLE `promotes`
  ADD CONSTRAINT `promotes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
