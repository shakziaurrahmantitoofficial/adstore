-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2023 at 11:50 AM
-- Server version: 5.7.41
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrichit_adstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packageName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `adType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adstartTime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adservicetype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_status` int(11) NOT NULL DEFAULT '0',
  `packageId` int(11) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `resubstatus` int(11) DEFAULT '0',
  `renewstatus` int(11) DEFAULT '0',
  `member_status` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `link`, `packageName`, `price`, `description`, `adType`, `duration`, `adstartTime`, `adservicetype`, `image`, `profile_image`, `profile_status`, `packageId`, `customerId`, `resubstatus`, `renewstatus`, `member_status`, `status`, `created_at`, `updated_at`) VALUES
(44, 'Minim distinctio No', '#', 'platinum', NULL, 'Enim ut pariatur El', 'rent', '20735830', '1686396526', 'promotional', 'ads/ab96fc01b9.jpg', NULL, 0, 51, 11, 0, 0, 0, 1, '2023-06-10 23:26:22', '2023-06-10 23:31:36'),
(45, 'Magni repellendus N', 'https://sobkisubazar.com/shop/Supreme-49', 'platinum', NULL, 'Nostrum rerum numqua', 'rent', '31536000', '1687243854', 'to_rent', 'ads/e862ef56a3.jpg', NULL, 0, 52, 11, 0, 0, 0, 1, '2023-06-10 23:27:59', '2023-06-20 10:50:54'),
(46, 'Exercitation numquam', '#', 'platinum', NULL, 'Inventore vitae dolo', 'buy', '15552000', '1686396746', 'service', 'ads/ba75af0910.jpg', NULL, 0, 53, 11, 0, 0, 0, 1, '2023-06-10 23:32:05', '2023-06-10 23:32:26'),
(47, 'Itaque reiciendis la', 'https://sobkisubazar.com/shop/Rony-Fabrics-&-Home-Tex-38', 'gold', NULL, 'Labore dolores sed s', 'sale', '2592000', '1687244097', 'property', 'ads/c47fbf42ea.jpg', NULL, 0, 54, 11, 0, 0, 0, 1, '2023-06-10 23:35:31', '2023-06-20 10:54:57'),
(48, 'Eiusmod magnam enim', '#', 'gold', NULL, 'Molestiae error dolo', 'rent', '15552000', NULL, 'promotional', 'ads/3da9ccd55e.jpg', NULL, 0, 55, 11, 0, 0, 0, 3, '2023-06-10 23:35:49', '2023-06-20 10:56:02'),
(49, 'Ipsum voluptas libe', 'https://sobkisubazar.com/shop/Bikrompur-Electronics-41', 'silver', NULL, 'Cupidatat et in cons', 'sale', '31536000', '1687244635', 'service', 'ads/820944f444.jpg', NULL, 0, 56, 11, 0, 0, 0, 1, '2023-06-10 23:38:33', '2023-06-20 11:03:55'),
(50, 'Praesentium asperior', '#', 'silver', NULL, 'Officia quas officia', 'sale', '15552000', '1686397173', 'property', 'ads/24b51a8028.png', NULL, 0, 57, 11, 0, 0, 0, 1, '2023-06-10 23:38:52', '2023-06-10 23:39:33'),
(51, 'Contrary to popular belief, Lorem Ipsum is not simply random text', '#', 'regular', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', 'sale', '31536000', '1686397515', 'property', 'ads/3ef5542ad5.png', NULL, 0, 58, 11, 0, 0, 0, 1, '2023-06-10 23:41:58', '2023-06-10 23:45:15'),
(52, 'But I must explain to you how all this mistaken idea of denouncing', '#', 'regular', NULL, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great', 'rent', '5184000', '1686398043', 'for_rent', 'ads/b2cf587561.png', NULL, 0, 59, 11, 0, 0, 0, 1, '2023-06-10 23:42:15', '2023-06-10 23:54:03'),
(53, 'It is a long established fact that a reader will be distracted', '#', 'gold', NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to usin', 'sale', '5184000', '1689229335', 'service', 'ads/d88a6d270b.jpg', NULL, 0, 60, 11, 0, 0, 0, 1, '2023-06-10 23:43:25', '2023-07-13 10:22:15'),
(54, 'There are many variations of passages of Lorem Ipsum available', 'https://sobkisubazar.com/shop/Duetad-Aitijya-33', 'gold', NULL, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going et quam', 'sale', '15552000', '1687244381', 'property', 'ads/bd9ef868d1.jpg', NULL, 0, 61, 11, 0, 0, 0, 1, '2023-06-10 23:44:22', '2023-06-20 10:59:41'),
(55, 'The standard chunk of Lorem Ipsum used since the 1500s', '#', 'regular', NULL, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from', 'rent', '5184000', '1694413057', 'to_rent', 'ads/1fd1c0897b.jpg', NULL, 0, 62, 11, 0, 0, 0, 1, '2023-06-10 23:49:45', '2023-07-13 10:17:37'),
(56, 'Contrary to popular belief, Lorem Ipsum is not simply random text', '#', 'regular', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', 'buy', '15552000', '1686397903', 'service', 'ads/cbf7fc31eb.jpg', NULL, 0, 63, 11, 0, 0, 0, 1, '2023-06-10 23:50:13', '2023-06-10 23:51:43'),
(57, 'Nisi velit necessita', 'Nostrum excepteur te', 'platinum', NULL, 'A ea deserunt libero', 'rent', '32578235', NULL, 'promotional', 'ads/62a601e547.jpg', NULL, 0, 3, 4, 0, 0, 0, 3, '2023-06-15 14:14:44', '2023-06-20 11:13:02'),
(58, 'Aut enim omnis recus', 'Incidunt minima rer', 'gold', NULL, 'Eos aut fugiat ex e', 'rent', '15552000', '1686824121', 'promotional', 'ads/6a6952bb58.jpg', NULL, 0, 2, 4, 0, 0, 0, 1, '2023-06-15 14:15:02', '2023-06-15 14:15:21'),
(59, 'Do illo asperiores r', 'Earum necessitatibus', 'platinum', NULL, 'Obcaecati possimus', 'rent', '5182990', '1689229145', 'for_rent', 'ads/2cb2ae1f89.jpg', NULL, 0, 67, 14, 0, 0, 1, 1, '2023-06-18 13:18:24', '2023-07-13 10:19:05'),
(60, 'Brand and product Promotion', 'https://www.facebook.com/BismillahCeramicAgency/', 'platinum', NULL, 'Brand and product Promotion', 'sale', '7776000', '1687087547', 'service', 'ads/71156ad9f5.jpg', NULL, 0, 69, 16, 0, 0, 0, 1, '2023-06-18 15:25:25', '2023-06-18 15:25:47'),
(61, 'Aristocrat', 'https://sobkisubazar.com/shop/Aristocrat-80', 'platinum', NULL, 'Consequatur ab irur Consequatur ab irur Consequatur ab irur Consequatur ab irur Consequatur ab irur Consequatur ab irur', 'sale', '7776000', '1687244820', 'property', 'ads/bf7b53316e.jpg', NULL, 0, 70, 11, 0, 0, 0, 1, '2023-06-20 11:06:38', '2023-06-20 11:07:00'),
(62, 'Veritatis aperiam ac', 'https://sobkisubazar.com/', 'silver', NULL, 'Quas in ratione exer Quas in ratione exer Quas in ratione exer Quas in ratione exer Quas in ratione exer', 'buy', '2592000', '1687244975', 'product', 'ads/1725b4477a.jpg', NULL, 0, 71, 11, 0, 0, 0, 1, '2023-06-20 11:09:23', '2023-06-20 11:09:35'),
(63, 'Brand Promotion', '#', 'platinum', NULL, 'Tiles and marble importer, whole seller, supplier', 'sale', '7776000', '1687343240', 'product', 'ads/8728fefff3.jpg', NULL, 0, 72, 12, 0, 0, 0, 1, '2023-06-21 14:19:22', '2023-06-21 14:27:20'),
(64, 'Rony-Fabrics', 'https://sobkisubazar.com/shop/Rony-Fabrics-&-Home-Tex-38', 'platinum', NULL, 'Sun Rise Plaza, Lalmatia, Block A, Dhanmondi-27, Dhaka 1207', 'buy', '31536000', '1687693026', 'product', 'ads/d25f28375c.jpg', NULL, 0, 74, 17, 0, 0, 0, 1, '2023-06-25 15:36:49', '2023-06-25 15:37:06'),
(65, 'Eu consequuntur sit', 'Assumenda eos corrup', 'platinum', NULL, 'Natus distinctio Ad', 'sale', '2592000', '1688636988', 'property', 'ads/b5553f590f.jpg', NULL, 0, 75, 19, 0, 0, 0, 1, '2023-07-06 13:49:03', '2023-07-06 13:49:48'),
(66, 'Consequatur ut cupi', 'Saepe suscipit disti', 'regular', NULL, 'Reiciendis magnam it', 'sale', '1296000', NULL, 'service', 'ads/c1018d4d4e.jpg', NULL, 0, 77, 19, 0, 0, 1, 2, '2023-07-06 13:54:08', '2023-07-13 10:50:08'),
(67, 'Paribarton', '#', 'platinum', NULL, 'Paribarton product and service stationery.', 'sale', '2592000', '1689229138', 'product', 'ads/33e3a183ef.jpg', NULL, 0, 78, 17, 0, 0, 0, 1, '2023-07-11 15:46:17', '2023-07-13 10:18:58'),
(68, 'ParibartonBd', '#', 'gold', NULL, 'ParibartonBd', 'buy', '2592000', '1689158018', 'product', 'ads/75bc982ef5.jpg', NULL, 0, 79, 20, 0, 0, 0, 1, '2023-07-12 14:33:23', '2023-07-12 14:33:38'),
(69, 'Shital Pati', 'https://sobkisubazar.com/shop/Tangail-Shital-Pati-88', 'regular', NULL, 'Internationally Recognized Traditional Shital Pati * Material: Murta rattan mat * Shital Patti\'s value increases in summer for Shital Parsha * Shital Patti is used in urban furnishing. Size: 4F x 6F Discount offer price Tk.1350 (Normal) 4F x 6F Discount offer price Tk.1550 (Best Quality) 5F x 7F Discount offer price Tk. 2050 (Normal) 5F x 7F Discount offer price Tk.2550 (Best Quality) 6F x 7F Discount offer price Tk. 3050 (Normal) 6F x 7F Discount offer price Tk. 3550 (Best Quality) *** Note- Best quality carpet will be soft, smooth and silky ***', 'buy', '7770763', '1689230913', 'product', 'ads/c7b7180c3e.jpg', NULL, 0, 84, 11, 0, 0, 0, 1, '2023-07-13 08:38:18', '2023-07-13 10:48:33'),
(70, 'Dhakaia Rickshaw Showpiece', 'https://sobkisubazar.com/shop/Eco-Bangla-', 'regular', NULL, 'The term “fashion” is used by practitioners and academics to generally refer to an industry which widely includes several sectors: textile, clothing, leather, knitwear, accessories, sunglasses, cosmetics, and jewelry. Generally, fashion is a popular style or practice, especially in clothing, footwear, accessories, makeup, body, or furniture. It comes from a Latin ward “Facere” which means “To Make”. We can simply explain fashion is an art. Fashion expresses of someone feelings. It also refers to the newest creations of textile designers. In this article I will teach about fashion classification and describes every segments.', 'buy', '1296000', '1689230704', 'product', 'ads/45f6df4201.jpg', NULL, 0, 83, 11, 0, 0, 0, 1, '2023-07-13 08:40:56', '2023-07-13 10:45:04'),
(71, 'Standing Table Folding Boti', 'https://sobkisubazar.com/shop/Lily%27s-Collection-85', 'regular', NULL, 'Quality flowers. There will be a lid covering the bowl. It\'s a stick you can stand up and chat with. Came with a new wooden bowl with a stand-up lid system. The specialty of this bot is: You can easily cut everything while standing. Since squatting can be done standing up, the pressure on your knees and back will be reduced and the pain will be reduced. This blade of mine is very sharp, because of which you can cut yourself very easily. This box has a lid. Covering it with your lid can avoid inadvertent accidents. And the bowl will be clean. Because of the very tight fit, it won\'t wobble while cutting and you can cut quickly and comfortably. It is necessary to make a bowl. Rows of mahogany wood and good quality iron. You can give this folding basket as a gift to someone. It will not get lost easily and it is very useful. Unique Design Folding Cane', 'sale', '5184000', '1689230851', 'product', 'ads/9cfa6ccf7e.jpg', NULL, 0, 80, 11, 0, 0, 0, 1, '2023-07-13 08:51:06', '2023-07-13 10:47:31'),
(72, 'Exquisite Dazzling Voluminous Mascara', 'https://sobkisubazar.com/shop/Guerniss-', 'regular', NULL, 'Country of Origin: Hong Kong ??\r\n\r\nSize/Net Weight: 7.5ml Exquisite Dazzling Voluminous Mascara refers to the kind of mascara that is exclusive in packaging and quality.\r\n\r\nExquisite Dazzling Voluminous Mascara refers to the kind of mascara that is exclusive in packaging and quality.\r\n\r\nAs we know mascara is the type of cosmetics product that specifically is used to deepen the color of the eyelashes and to define them. Mascaras can basically make your eyelashes bigger, voluminous, and more prominent.\r\n\r\nMascara is a product that has direct contact with your eyes so it should be high quality and really safe for our eyes. So, we have to be very careful while choosing mascara. Besides we should never compromise our health. \r\n\r\nTypes of Mascara\r\n\r\nLash lengthening mascara\r\n\r\nThickening/Volumizing Mascara\r\n\r\nCurling Mascara\r\n\r\nWaterproof & Smudge-Proof Mascara\r\n\r\nNon-Clumping Mascara\r\n\r\nLash Defining Mascara\r\n\r\nAbout Exquisite Dazzling Voluminous Mascara\r\n\r\nThis mascara comes in an exclusive mirror shine-looking packaging and the product is very high in quality.\r\n\r\nThis product is deep black in color and gives your eyelashes lightweight coverage.\r\n\r\nThe formula is lightweight and doesn’t look or feel sticky. This mascara has a curved spoolie that helps to curl and hold the lashes. This product is a combination of all in one. It not only volumizes but also curls and also lengthens the lashes. Your eyelashes will look fuller and also will give you a fake lash effect. It is a 100% vegan, dermatologically tested, and cruelty-free product. \r\n\r\nIt’s also lightweight, fragrance-free, and humidity resistant, which is also great for people with sensitive eyes. \r\n\r\nBenefits of Exquisite Dazzling Voluminous Mascara\r\n\r\nWaterproof and smudge proof\r\n\r\nGives a false lash effect\r\n\r\nMakes your eyelashes volumizing and \r\n\r\nIt lengthens the lashes\r\n\r\nIt doesn’t fall out\r\n\r\nThis Mascara curls your lashes and also makes your eyes look bigger\r\n\r\nThe spoolie brush makes the lashes separate and the application doesn’t look clumpy', 'sale', '2592000', NULL, 'product', 'ads/9062494a2e.png', NULL, 0, 82, 11, 0, 0, 0, 2, '2023-07-13 08:58:28', '2023-07-13 10:27:01'),
(73, 'Numquam cumque nesci', 'Magna do eos nulla c', 'regular', NULL, 'In quia aut quos mol', 'buy', '5184000', NULL, 'service', 'ads/ae40e5911b.png', NULL, 0, 81, 11, 0, 0, 0, 2, '2023-07-13 09:10:17', '2023-07-13 10:27:30'),
(74, 'Elit dolores unde c', 'Ullam et maiores vol', 'regular', NULL, 'Earum beatae neque i', 'sale', '2592000', NULL, 'product', 'ads/f04aae7e6c.png', NULL, 0, 86, 11, 0, 0, 0, 2, '2023-07-13 09:36:26', '2023-07-13 10:26:45'),
(75, 'M.MACARE Tamarind', 'https://sobkisubazar.com/shop/Kuakata-Online-Bazar-89', 'regular', NULL, 'All Burmese products are now available at \"Sobkisu Bazar\". We are thinking of you in this journey.\r\nAll types of Burmese chocolates, Burmese Tetul Soap, Turkish Chocolates, Barai Anchar, Mango Anchar, Tamarind Anchar, Olive Anchar, etc. are available at low prices.\r\n\r\n  *** We deliver all over the country ***', 'sale', '2592000', '1689232500', 'product', 'ads/a5ecd96815.jpg', NULL, 0, 85, 11, 0, 0, 0, 1, '2023-07-13 11:14:41', '2023-07-13 11:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailPhone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `image` varbinary(255) DEFAULT NULL,
  `customerType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tradelince` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mailPhone`, `nid`, `address`, `image`, `customerType`, `password`, `companyName`, `businessType`, `tradelince`, `profile_image`, `profile_status`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dipankar Biswas', 'dipankar@gmail.com', '646546516745', 'Dhaka, Bangladesh', 0x637573746f6d6572496d6167652f303564656130386236652e6a7067, 'personal', '$2y$10$QKsflKWl6.KpWpgHLGCWkeFnFoY27l5n4uAsFDZxnrCl78He4Xm/S', NULL, NULL, NULL, 'membershipImage/89285e7b8d.pdf', '1', 1, 's9qPjj3JqAklKPMurmQ6Sb9GSlQ0aMydtjXfwHtcenVZ9VP5sTlrvGY7i6uX', '2023-06-04 09:19:04', '2023-06-14 11:22:44'),
(2, 'Dipankar SG', 'dipu@gmail.com', '74465454534654', 'Dhaka, Bangladesh', NULL, 'personal', '$2y$10$ydZrisnY.CTAemshkzn3helm7UDh6CoCHDQKWay4Q2Ka6ZDIRUjja', NULL, NULL, NULL, NULL, NULL, 1, 'wzWgNdhK0N9k1m7zDI9k87RniOGaXBV7ZoBSP4xHTcoyVQij0M0mO70Zw4am', '2023-06-04 09:54:23', '2023-06-14 11:16:52'),
(3, 'Roy', 'roy@gmail.com', '74647646546', '271-Boro Moghbazar, Dhaka, BD', NULL, 'personal', '$2y$10$QKsflKWl6.KpWpgHLGCWkeFnFoY27l5n4uAsFDZxnrCl78He4Xm/S', NULL, NULL, NULL, NULL, NULL, 1, 'PWsgxIgTjSqVarcuxfF5JS1l0bVd0jA9FPffFJ7aCTDtG6m8KjOYBt3Hoi1l', '2023-06-10 06:24:20', '2023-06-10 06:25:15'),
(4, 'Officials', 'dipankarbiswasofficials1@gmail.com', '7986413548641', '271-Boro Moghbazar, Dhaka, BD', NULL, 'personal', '$2y$10$QKsflKWl6.KpWpgHLGCWkeFnFoY27l5n4uAsFDZxnrCl78He4Xm/S', NULL, NULL, NULL, NULL, NULL, 1, 'VetJwTs9dj1vDw39FlyyvKYCwJDheBSJffacNAo9eNZelPBUMGgc9ajx5Xqp', '2023-06-10 06:26:22', '2023-06-14 11:23:13'),
(5, 'Dipankar', '01741571104', '56465465465', '271-Boro Moghbazar, Dhaka, BD', 0x637573746f6d6572496d6167652f373465626537313838302e6a7067, 'company', '$2y$10$eZ1EbPnMsmwVAjLdzWA6tOumG8NzvYeZZWijXSua5AHvSfk11eq9q', 'Dipankar Biswas', 'Phone', '5746458978', 'membershipImage/d77522b243.jpg', '1', 1, 'k76yQ1XAxIBdhX9YWpriDGMHzwDzlHl5DSCbfimpqo8a7Ow5hBVAFfpRJlWm', '2023-06-15 06:42:00', '2023-07-06 09:03:26'),
(11, 'Dipankar Biswas', 'dipankarbiswasofficials@gmail.com', '764654646464', '271-Boro Moghbazar, Dhaka, BD', NULL, 'personal', '$2y$10$QKsflKWl6.KpWpgHLGCWkeFnFoY27l5n4uAsFDZxnrCl78He4Xm/S', NULL, NULL, NULL, NULL, NULL, 1, 'P5mYVpKABxgahvOzjAv1V7lLCSIDCtv2bq2eExa9THObPQFKTN3hvh4Cy9Ko', '2023-06-10 23:24:49', '2023-06-10 23:24:49'),
(12, 'Nuray Ali', '01815641451', '5989303069', '89,Bir Uttam CR Dutta Road,Nasir Trade Center,1st Floor,Hatirpool,Dhaka,1205', NULL, 'company', '$2a$12$S.BAey3A3lvmA.cNnvIEA.hldEIroRSxBIAdfVPCaxEPAwLqiLeti', 'Taqwa Ceramics', 'Tiles and marble importer, whole seller, supplier', 'Trad/dscc/114584/2019', NULL, NULL, 1, 'fv8KuZy4e7oxy3GZIXyzcldJBkUd1Gbtm6bW276N4ifMbz1fFPYWjhEFsi5N', '2023-06-15 02:48:02', '2023-06-15 02:48:02'),
(13, 'Hayes Shelton', '01798659666', 'Necessitatibus conse', 'Id rem aut neque sun', NULL, 'personal', '$2y$10$N3JpE9Fonvd7OQfbJqJZQugGMBj6tFgSBHGYOQq0/CC5Kr2gzMmGq', NULL, NULL, NULL, NULL, NULL, 1, 'FkFo6SIiIKSRBNMMuLd7wejITgxiek2pQcaYaUFGeEbfMLDy9iJYZXuADXoK', '2023-06-18 12:39:48', '2023-06-18 12:39:48'),
(14, 'Neil Cox', '01798555666', 'Velit delectus dolo', 'Molestiae molestiae', NULL, 'personal', '$2y$10$PSa9DtOmo.Bwy6ZUK2vPyuv5qEebLCJpbgLq05QWF02XX2LuNtGKS', NULL, NULL, NULL, 'membershipImage/59f5f6e0b4.jpg', '1', 1, 'UmiGJdz3ltEp4ZPUxwx8chIojAcUMUIdgcCMFXW79slOG4Upth1BLwKxLwE3', '2023-06-18 13:15:01', '2023-06-18 13:17:51'),
(16, 'Md. Nurun  Nabi', '01712705826', '56465465465', '33, Paribagh Road,1st floor,Shahbag, Dhaka-1000', NULL, 'company', '$2y$10$G4yzABI5/tJld1al8G2e0ejyVuJvFLhoXcRbk1O.GZbnB.odbzYlO', 'Bismillah Ceramic Agency', 'Importer, whole seller, supplier', 'TRAD/DSCC/244773/2019', NULL, NULL, 1, '27cRhbOnhHrOuqzt5TzyG2sPRVyJWiamuaYDAI75c7T7Rcp4oUoytxStz1Hz', '2023-06-18 15:19:13', '2023-06-18 15:19:13'),
(17, 'Md Alamgir Hossain', '01764162340', '4158903965', 'ronyfabrics40@gmail.com', NULL, 'company', '$2y$10$RLBOsgvkSHumA7v5.d0hJ./tqIv.RnfkmjCfH30JDQ78NSlHOZZ12', 'Rany Fabrices Home Tex', 'Mid', '113159', NULL, NULL, 1, 'N8SsS7ApPjpniYtcdWwisWgMJ0tDmOvVYbIacOKf1v67mR2oqU7G9dEAXp1F', '2023-06-22 15:11:33', '2023-06-22 15:11:33'),
(18, 'Abdul Daniels', '01798659667', 'Ullam delectus repr', 'Dolores vel odio max', NULL, 'personal', '$2y$10$UVKqgr9KVsKeavnlnccHZO2wAMs4wj2iLjHpRmEu5DjGgAk06iE5K', NULL, NULL, NULL, NULL, NULL, 1, 'QHjcxrMl5wDWhUeHiXvHR8hGgRUZvYVxKORF9TA1RAi0F5RCdy0XHXWMld4d', '2023-07-06 12:49:32', '2023-07-06 12:49:32'),
(19, 'Whitney Christian', '01798659777', 'Aut voluptatum volup', 'Id totam ad ea aliqu', NULL, 'personal', '$2y$10$L3Wd6dUpnEBaJyCMzYTdgO5wc15kav0vNf8yTCTKsSycV2OcjqSNC', NULL, NULL, NULL, 'membershipImage/7b61677258.jpg', '1', 1, 'LO5X7apWeupgIsR6lymWXs1bFMpjBHAAYj7CnNTeh5MnRgzmo6Afbg3PnLmZ', '2023-07-06 13:46:21', '2023-07-06 13:51:57'),
(20, 'Altab Hossain', '01816384283', '2693622454144', '221 Fakirapool, (1st Lane), 1st Floor, Motijheel, Dhaka-1000', NULL, 'company', '$2y$10$Gm2oDifeZ2GdSbHh4j4iCuIHGwcsGSuSkX3476/6vgX1riGU.shLq', 'Paribarton', 'Medium', 'TRAD/DSCC/000261/2020', NULL, NULL, 1, 'ELnYujhruD22xOAhpDUfErf4DiNeyS5msaetq4N3LfLCe5QyikmmwNu2j1Ka', '2023-07-12 14:31:24', '2023-07-12 14:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `packageName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentMethod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentGetway` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepareby` int(11) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `payment` int(11) NOT NULL DEFAULT '0',
  `adstatus` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `packageName`, `price`, `duration`, `paymentMethod`, `paymentGetway`, `prepareby`, `customerId`, `payment`, `adstatus`, `status`, `created_at`, `updated_at`) VALUES
(1, 'membership', '2000', '365', 'cash', 'Bank', NULL, 1, 1, 1, 1, '2023-06-14 07:15:30', '2023-06-14 08:25:39'),
(2, 'membership', '2000', '365', 'cash', 'Bank', NULL, 5, 1, 1, 1, '2023-06-15 08:41:35', '2023-06-15 08:43:10'),
(3, 'membership', '2000', '365', 'cash', 'bank', NULL, 14, 1, 1, 1, '2023-06-18 13:16:24', '2023-06-18 13:17:25'),
(4, 'membership', '2000', '365', 'cash', 'bank', NULL, 15, 1, 1, 1, '2023-06-18 14:02:50', '2023-06-18 14:03:23'),
(5, 'membership', '2000', '365', 'cash', 'Cash', NULL, 19, 1, 1, 1, '2023-07-06 13:51:05', '2023-07-06 13:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `customer_id`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hi sdfsd', '5', 'message/534d9b82bf.jpg', 1, '2023-06-15 08:48:22', '2023-06-15 08:48:43'),
(2, 'Hi, There \r\nMy Problem this Image.', '5', 'message/5d36afb836.jpg', 1, '2023-06-15 08:53:57', '2023-06-15 08:54:12'),
(3, 'Detect line breaks (\\n) while reading from a database (Javascript, HTML, firebase)\r\nProblem Solve\r\nOk Bye', '5', 'message/92db67ab51.png', 1, '2023-06-15 09:06:45', '2023-06-15 09:07:58'),
(4, 'Hello', '14', NULL, 1, '2023-06-18 13:20:17', '2023-06-18 13:20:28');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_25_064936_create_sales_table', 1),
(6, '2023_03_27_061644_create_buy_ads_table', 1),
(7, '2023_03_27_065154_create_rent_ads_table', 1),
(8, '2023_03_29_081153_add_paid_to_sales_table', 1),
(9, '2023_03_29_081318_add_paid_to_buy_adss_table', 1),
(10, '2023_03_29_081511_add_paid_to_rent_ads_table', 1),
(11, '2023_05_17_042626_create_customers_table', 1),
(12, '2023_05_22_054231_create_packages_table', 1),
(13, '2023_05_23_041350_create_ads_table', 1),
(14, '2023_06_05_114724_create_renews_table', 2),
(21, '2023_06_07_154150_create_settings_table', 3),
(22, '2023_06_14_111115_create_memberships_table', 4),
(23, '2023_06_14_160303_create_messages_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `packageName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentMethod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentGetway` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepareby` int(11) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `payment` int(11) NOT NULL DEFAULT '0',
  `adstatus` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `packageName`, `price`, `duration`, `paymentMethod`, `paymentGetway`, `prepareby`, `customerId`, `payment`, `adstatus`, `status`, `created_at`, `updated_at`) VALUES
(1, 'platinum', '13500', '60', 'cash', 'Nagad', 1, 4, 1, 0, 1, '2023-06-10 09:11:52', '2023-06-10 09:18:04'),
(2, 'gold', '27000', '180', 'cash', 'Bank', 1, 4, 1, 0, 1, '2023-06-10 09:17:07', '2023-06-15 14:15:03'),
(3, 'platinum', '56250', '365', 'aamarpay', 'TAP', 1, 4, 1, 0, 1, '2023-06-10 09:17:18', '2023-06-18 12:44:42'),
(4, 'platinum', '21600', '30', 'Free', 'Free', NULL, 5, 1, 0, 1, '2023-06-15 08:44:01', '2023-06-15 08:47:43'),
(51, 'platinum', '40500', '180', 'cash', 'Bkash', 2, 11, 1, 0, 1, '2023-06-10 23:25:14', '2023-06-10 23:31:36'),
(52, 'platinum', '54000', '365', 'cash', 'Nagad', 2, 11, 1, 0, 1, '2023-06-10 23:26:45', '2023-06-10 23:27:59'),
(53, 'platinum', '27000', '180', 'cash', 'Bank', 2, 11, 1, 0, 1, '2023-06-10 23:31:16', '2023-06-10 23:32:05'),
(54, 'gold', '4500', '30', 'cash', 'Bank', 2, 11, 1, 0, 1, '2023-06-10 23:33:14', '2023-06-10 23:35:31'),
(55, 'gold', '27000', '180', 'cash', 'Nagad', 2, 11, 1, 0, 1, '2023-06-10 23:33:27', '2023-06-10 23:35:49'),
(56, 'silver', '36500', '365', 'cash', 'Bank', 2, 11, 1, 0, 1, '2023-06-10 23:37:33', '2023-06-10 23:38:33'),
(57, 'silver', '18000', '180', 'cash', 'Bkash', 2, 11, 1, 0, 1, '2023-06-10 23:37:47', '2023-06-10 23:38:52'),
(58, 'regular', '18250', '365', 'cash', 'Bkash', 2, 11, 1, 0, 1, '2023-06-10 23:40:19', '2023-06-10 23:41:58'),
(59, 'regular', '3000', '60', 'cash', 'Bkash', 2, 11, 1, 0, 1, '2023-06-10 23:40:31', '2023-06-10 23:42:15'),
(60, 'gold', '14225', '30', 'cash', 'Bank', 2, 11, 1, 0, 1, '2023-06-10 23:40:45', '2023-07-13 10:22:15'),
(61, 'gold', '27000', '180', 'cash', 'Bkash', 2, 11, 1, 0, 1, '2023-06-10 23:41:01', '2023-06-10 23:44:22'),
(62, 'regular', '6750', '30', 'cash', 'Nagad', 2, 11, 1, 0, 1, '2023-06-10 23:47:21', '2023-07-13 10:17:37'),
(63, 'regular', '9000', '180', 'cash', 'Nagad', 2, 11, 1, 0, 1, '2023-06-10 23:47:43', '2023-06-10 23:50:13'),
(64, 'platinum', '4500', '30', 'cash', 'Bank', 2, 11, 1, 1, 1, '2023-06-13 23:30:53', '2023-06-20 11:05:53'),
(65, 'platinum', '1050', '7', 'AamarPay', 'TAP', NULL, 13, 1, 1, 1, '2023-06-18 12:41:12', '2023-06-18 12:41:12'),
(66, 'platinum', '4500', '30', 'AamarPay', 'DBBL-MASTER', NULL, 4, 1, 1, 1, '2023-06-18 12:43:23', '2023-06-18 12:43:23'),
(67, 'platinum', '7200', '30', 'Free', 'Free', NULL, 14, 1, 0, 1, '2023-06-18 13:18:07', '2023-06-18 13:41:22'),
(68, 'platinum', 'Free', '30', 'Free', 'Free', NULL, 15, 1, 1, 1, '2023-06-18 14:04:09', '2023-06-18 14:04:09'),
(69, 'platinum', '13500', '90', 'cash', 'bank', 2, 16, 1, 0, 1, '2023-06-18 15:19:58', '2023-06-18 15:25:25'),
(70, 'platinum', '13500', '90', 'cash', 'bank', 2, 11, 1, 0, 1, '2023-06-20 11:05:37', '2023-06-20 11:06:38'),
(71, 'silver', '3000', '30', 'cash', 'Bkash', 2, 11, 1, 0, 1, '2023-06-20 11:08:10', '2023-06-20 11:09:23'),
(72, 'platinum', '13500', '90', 'cash', 'bank', 2, 12, 1, 0, 1, '2023-06-21 14:07:46', '2023-06-21 14:19:22'),
(73, 'platinum', '1050', '7', 'cash', 'Cash', 2, 16, 1, 1, 1, '2023-06-22 11:55:02', '2023-06-22 11:55:15'),
(74, 'platinum', '54750', '365', 'cash', 'Bank', 2, 17, 1, 0, 1, '2023-06-22 15:11:47', '2023-06-25 15:36:49'),
(75, 'platinum', '4500', '30', 'cash', 'Cash', 2, 19, 1, 0, 1, '2023-07-06 13:47:21', '2023-07-06 13:49:03'),
(76, 'platinum', 'Free', '30', 'Free', 'Free', NULL, 19, 1, 1, 1, '2023-07-06 13:52:23', '2023-07-06 13:52:23'),
(77, 'regular', '750', '15', 'cash', 'Cash', 2, 19, 1, 0, 1, '2023-07-06 13:53:37', '2023-07-06 13:54:08'),
(78, 'platinum', '4500', '30', 'cash', 'Cash', 2, 17, 1, 0, 1, '2023-07-11 15:43:52', '2023-07-11 15:46:17'),
(79, 'gold', '3900', '30', 'cash', 'Cash', 2, 20, 1, 0, 1, '2023-07-12 14:32:02', '2023-07-12 14:33:23'),
(80, 'regular', '6000', '60', 'cash', 'Cash', 2, 11, 1, 0, 1, '2023-07-13 08:32:24', '2023-07-13 10:06:04'),
(81, 'regular', '7500', '30', 'cash', 'Cash', 2, 11, 1, 0, 1, '2023-07-13 08:32:38', '2023-07-13 10:08:38'),
(82, 'regular', '9000', '30', 'cash', 'Cash', 2, 11, 1, 0, 1, '2023-07-13 08:32:51', '2023-07-13 10:13:09'),
(83, 'regular', '5250', '60', 'cash', 'Cash', 2, 11, 1, 0, 1, '2023-07-13 08:33:08', '2023-07-13 10:06:42'),
(84, 'regular', '4500', '60', 'cash', 'Cash', 2, 11, 1, 0, 1, '2023-07-13 08:33:50', '2023-07-13 10:05:47'),
(85, 'regular', '1500', '30', 'cash', 'Cash', 2, 11, 1, 0, 1, '2023-07-13 09:06:28', '2023-07-13 11:14:41'),
(86, 'regular', '4500', '60', 'cash', 'Bank', 2, 11, 1, 0, 1, '2023-07-13 09:36:04', '2023-07-13 10:21:28');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `renews`
--

CREATE TABLE `renews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adsid` int(11) NOT NULL,
  `packageName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentMethod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentGetway` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepareby` int(11) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `payment` int(11) NOT NULL DEFAULT '0',
  `adstatus` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_content` text COLLATE utf8mb4_unicode_ci,
  `copyright_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `header_logo`, `phone`, `email`, `address`, `facebook`, `instagram`, `twitter`, `linkedin`, `youtube`, `footer_logo`, `footer_content`, `copyright_image`, `copyright_text`, `created_at`, `updated_at`) VALUES
(1, 'settingImage/4c17ee4e83.jpg', '+880 9678-800843', 'info@sobkisubazar.com', '107 Bir Uttam C R Dutta Road, 4th Floor, F Haque Tower, Dhaka-1205', 'https://adstore.sobkisubazar.com/admin/settings', 'https://adstore.sobkisubazar.com/admin/settings', 'https://adstore.sobkisubazar.com/admin/settings', 'https://adstore.sobkisubazar.com/admin/settings', 'https://adstore.sobkisubazar.com/admin/settings', 'settingImage/7d4749de76.png', 'Sobkisubazar is the fastest online marketplace in Bangladesh. SKB Ad store is a concern of Sobkisubazar. Promote your Business with our audience on our ad store, get your targeted audience and generate more revenue.', 'settingImage/181615ec51.png', '2023 Ad Store. All rights reserved.', '2023-06-11 16:23:30', '2023-06-15 14:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `remember_token`, `password`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', 'upload/user/1cad32bf19.png', NULL, 'OkeieqrnXlxrXG67Mdbe0AhFszdER1fMGB7daYUZfPF8XQQKiOdUI788VbPh', '$2y$10$f3f2Lt.Y/qhumRJ6UJCteemAWUuKAO4o1uh/8cuJEXTCPVbDmdBcm', 1, NULL, '2023-06-15 14:13:47'),
(3, 'Sabid Alauddin', 'sabid.alauddin@gmail.com', NULL, NULL, NULL, '$2y$10$LXzjKblHQoLhSyqrVPBsLuiU.WL85LKYwhtt.GI/tha4Hv56e.VOm', 1, '2023-06-20 13:10:47', '2023-06-20 13:10:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `renews`
--
ALTER TABLE `renews`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `renews`
--
ALTER TABLE `renews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
