-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 17 mei 2024 om 08:58
-- Serverversie: 5.7.36
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Jamin`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `allergies`
--

DROP TABLE IF EXISTS `allergies`;
CREATE TABLE IF NOT EXISTS `allergies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `allergies`
--

INSERT INTO `allergies` (`id`, `name`, `description`) VALUES
(1, 'Gluten', 'This product contains gluten'),
(2, 'Gelatine', 'This product contains gelatine'),
(3, 'AZO-Dye', 'This product contains AZO dyes'),
(4, 'Lactose', 'This product contains lactose'),
(5, 'Soy', 'This product contains soy');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `house_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contacts`
--

INSERT INTO `contacts` (`id`, `street`, `house_number`, `postal_code`, `city`) VALUES
(1, 'Van Gilslaan', '34', '1045CB', 'Hilvarenbeek'),
(2, 'Den Dolderpad', '2', '1067RC', 'Utrecht'),
(3, 'Fredo Raalteweg', '257', '1236OP', 'Nijmegen'),
(4, 'Bertrand Russellhof', '21', '2034AP', 'Den Haag'),
(5, 'Leon van Bonstraat', '213', '145XC', 'Lunteren'),
(6, 'Bea van Lingenlaan', '234', '2197FG', 'Sint Pancras');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_03_212851_create_allergies_table', 1),
(6, '2024_05_03_212932_create_contacts_table', 1),
(7, '2024_05_03_213128_create_suppliers_table', 1),
(8, '2024_05_03_213151_create_products_table', 1),
(9, '2024_05_03_213217_create_warehouses_table', 1),
(10, '2024_05_03_214352_create_product_per_allergies_table', 1),
(11, '2024_05_03_214433_create_product_per_suppliers_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `barcode`) VALUES
(1, 'Mintnopjes', '8719587231278'),
(2, 'Schoolkrijt', '8719587326713'),
(3, 'Honingdrop', '8719587327836'),
(4, 'Zure Beren', '8719587321441'),
(5, 'Cola Flesjes', '8719587321237'),
(6, 'Turtles', '8719587322245'),
(7, 'Witte Muizen', '8719587328256'),
(8, 'Reuzen Slangen', '8719587325641'),
(9, 'Zoute Rijen', '8719587322739'),
(10, 'Winegums', '8719587327527'),
(11, 'Drop Munten', '8719587322345'),
(12, 'Kruis Drop', '8719587322265'),
(13, 'Zoute Ruitjes', '8719587323256'),
(14, 'Drop ninjas', '8719587323277');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_per_allergies`
--

DROP TABLE IF EXISTS `product_per_allergies`;
CREATE TABLE IF NOT EXISTS `product_per_allergies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `allergen_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_per_allergies_product_id_foreign` (`product_id`),
  KEY `product_per_allergies_allergen_id_foreign` (`allergen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_per_allergies`
--

INSERT INTO `product_per_allergies` (`id`, `product_id`, `allergen_id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 1, 3),
(4, 3, 4),
(5, 6, 5),
(6, 9, 2),
(7, 9, 5),
(8, 10, 2),
(9, 12, 4),
(10, 13, 1),
(11, 13, 4),
(12, 13, 5),
(13, 14, 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_per_suppliers`
--

DROP TABLE IF EXISTS `product_per_suppliers`;
CREATE TABLE IF NOT EXISTS `product_per_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `next_delivery_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_per_suppliers_supplier_id_foreign` (`supplier_id`),
  KEY `product_per_suppliers_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product_per_suppliers`
--

INSERT INTO `product_per_suppliers` (`id`, `supplier_id`, `product_id`, `delivery_date`, `quantity`, `next_delivery_date`) VALUES
(1, 1, 1, '2023-04-09', 23, '2023-04-16'),
(2, 1, 1, '2023-04-18', 21, '2023-04-25'),
(3, 1, 2, '2023-04-09', 12, '2023-04-16'),
(4, 1, 3, '2023-04-10', 11, '2023-04-17'),
(5, 2, 4, '2023-04-14', 16, '2023-04-21'),
(6, 2, 4, '2023-04-21', 23, '2023-04-28'),
(7, 2, 5, '2023-04-14', 45, '2023-04-21'),
(8, 2, 6, '2023-04-14', 30, '2023-04-21'),
(9, 3, 7, '2023-04-12', 12, '2023-04-19'),
(10, 3, 7, '2023-04-19', 23, '2023-04-26'),
(11, 3, 8, '2023-04-10', 12, '2023-04-17'),
(12, 3, 9, '2023-04-11', 1, '2023-04-18'),
(13, 4, 10, '2023-04-16', 24, '2023-04-30'),
(14, 5, 11, '2023-04-10', 47, '2023-04-17'),
(15, 5, 11, '2023-04-19', 60, '2023-04-26'),
(16, 5, 12, '2023-04-11', 45, NULL),
(17, 5, 13, '2023-04-12', 23, NULL),
(18, 7, 14, '2023-04-14', 20, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `suppliers_contact_id_foreign` (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact_person`, `supplier_number`, `mobile`, `contact_id`) VALUES
(1, 'Venco', 'Bert van Linge', 'L1029384719', '06-28493827', 1),
(2, 'Astra Sweets', 'Jasper del Monte', 'L1029284315', '06-39398734', 2),
(3, 'Haribo', 'Sven Stalman', 'L1029324748', '06-24383291', 3),
(4, 'Basset', 'Joyce Stelterberg', 'L1023845773', '06-48293823', 4),
(5, 'De Bron', 'Remco Veenstra', 'L1023857736', '06-34291234', 5),
(6, 'Quality Street', 'Johan Nooij', 'L1029234586', '06-23458456', 6),
(7, 'Hom Ken Food', 'Hom Ken', 'L1029234599', '06-23458477', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `warehouses`
--

DROP TABLE IF EXISTS `warehouses`;
CREATE TABLE IF NOT EXISTS `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `packaging_unit` decimal(5,2) DEFAULT NULL,
  `quantity_on_hand` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `warehouses_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `warehouses`
--

INSERT INTO `warehouses` (`id`, `product_id`, `packaging_unit`, `quantity_on_hand`) VALUES
(1, 1, '5.00', 453),
(2, 2, '2.50', 400),
(3, 3, '5.00', 1),
(4, 4, '1.00', 800),
(5, 5, '3.00', 234),
(6, 6, '2.00', 345),
(7, 7, '1.00', 795),
(8, 8, '10.00', 233),
(9, 9, '2.50', 123),
(10, 10, '3.00', NULL),
(11, 11, '2.00', 367),
(12, 12, '1.00', 467),
(13, 13, '5.00', 20),
(14, 14, NULL, NULL);

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product_per_allergies`
--
ALTER TABLE `product_per_allergies`
  ADD CONSTRAINT `product_per_allergies_allergen_id_foreign` FOREIGN KEY (`allergen_id`) REFERENCES `allergies` (`id`),
  ADD CONSTRAINT `product_per_allergies_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Beperkingen voor tabel `product_per_suppliers`
--
ALTER TABLE `product_per_suppliers`
  ADD CONSTRAINT `product_per_suppliers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_per_suppliers_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Beperkingen voor tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`);

--
-- Beperkingen voor tabel `warehouses`
--
ALTER TABLE `warehouses`
  ADD CONSTRAINT `warehouses_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
