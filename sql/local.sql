-- MySQL dump 10.13  Distrib 8.0.16, for Linux (x86_64)
--
-- Host: localhost    Database: local
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Samsung','Hello World',1,'2020-04-27 20:39:04','2020-04-27 20:39:04');
INSERT INTO `brands` VALUES (2,'Women\'s Fashion','hello hi',1,'2020-04-27 20:39:36','2020-04-27 20:39:36');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Beverages','hi',1,'2020-04-27 20:39:55','2020-04-27 20:39:55');
INSERT INTO `categories` VALUES (2,'Bread & Bakery','Hello hi',1,'2020-04-27 20:40:29','2020-04-27 20:40:29');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'fdsfd','dsfdsf','asdf@rfdg.tgjhg','$2y$10$MQA6OQhHbaSUAXVtsIDa2emAeMISTvycLd160/VzwRLMPsMWjNLT6','6546846','ffdsfds df','2020-04-28 03:22:33','2020-04-28 03:22:33');
INSERT INTO `customers` VALUES (2,'gdfds','fdsfds','s@s.com','$2y$10$OmnEH1CusCAYP/W0YHLtX.Hu2Pk54HSgLGAB.f.vScaOiGSEqQ79C','54665','dfgf','2020-04-28 04:25:28','2020-04-28 04:25:28');
INSERT INTO `customers` VALUES (3,'gdfds','fdsfds','s@s.com','$2y$10$foqhTXv9wwZtUtRQ7bz9Yuddgg423.bOeL/BbbT3Bcd9/Gy6//rM.','54665','dfgf','2020-04-28 04:43:56','2020-04-28 04:43:56');
INSERT INTO `customers` VALUES (4,'dsfds','fgfdfgf','hjjh@jhj.vo','$2y$10$A..xMxUn6N/E56gd9E4JK.bU8LhDe6v/APho5iiEOfZiPeV22nntK','8954564','jijhkl','2020-04-28 06:53:36','2020-04-28 06:53:36');
INSERT INTO `customers` VALUES (5,'tt','fttrfy','asdf@rfdg.tgjhg','$2y$10$QtlcxGoNj0pbV1/Bkwp5S.5/w6hWoDgr0F61FcK/4r0VMMbpUMFWK','6546565','ghjghjgh','2020-04-28 09:08:22','2020-04-28 09:08:22');
INSERT INTO `customers` VALUES (6,'dsfds','dfdsfd','dsfdd@asd.com','$2y$10$iramHOJpuQwYdY38DVSabOoDF5dBsADaA940zAY1FUOHjntdR3KmS','15964665','hi','2020-05-04 06:58:23','2020-05-04 06:58:23');
INSERT INTO `customers` VALUES (7,'Sujan','Miya','sujan@miya.com','$2y$10$ZyKMojQyrVgieTnu0zntV.Y9T.4UqkvJvMxc5P14gVsMyZB0wF7ue','41478966363','Hello sujan','2020-05-04 07:42:00','2020-05-04 07:42:00');
INSERT INTO `customers` VALUES (8,'sujan','Miya','sujan@miya.com','$2y$10$jcoW6N5oZlVRkhDeyfb7EeHsKC2ndI48W6bTuLZGkZT76J452ugg.','786798','df','2020-05-06 10:22:40','2020-05-06 10:22:40');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (17,'2014_10_12_000000_create_users_table',1);
INSERT INTO `migrations` VALUES (18,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO `migrations` VALUES (19,'2020_04_10_114555_creat_categories_table',1);
INSERT INTO `migrations` VALUES (20,'2020_04_11_060428_creat_brands_table',1);
INSERT INTO `migrations` VALUES (21,'2020_04_14_104141_create_products_table',1);
INSERT INTO `migrations` VALUES (22,'2020_04_26_132746_create_customers_table',1);
INSERT INTO `migrations` VALUES (23,'2020_04_27_113704_create_shoppings_table',1);
INSERT INTO `migrations` VALUES (24,'2020_04_27_140208_create_orders_table',1);
INSERT INTO `migrations` VALUES (25,'2020_04_27_141314_create_payments_table',1);
INSERT INTO `migrations` VALUES (26,'2020_04_27_142040_create_orders_details_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'panding',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,32,2,465.00,'panding','2020-04-27 19:20:35','2020-04-27 19:20:35');
INSERT INTO `orders` VALUES (2,32,2,465.00,'panding','2020-04-27 19:21:32','2020-04-27 19:21:32');
INSERT INTO `orders` VALUES (3,32,2,4733.00,'panding','2020-04-27 22:25:13','2020-04-27 22:25:13');
INSERT INTO `orders` VALUES (4,3,1,853.00,'panding','2020-04-28 04:44:06','2020-04-28 04:44:06');
INSERT INTO `orders` VALUES (5,6,4,4275.00,'panding','2020-05-04 06:58:33','2020-05-04 06:58:33');
INSERT INTO `orders` VALUES (6,2,5,1089.00,'panding','2020-05-04 07:40:12','2020-05-04 07:40:12');
INSERT INTO `orders` VALUES (7,7,6,2561.00,'panding','2020-05-04 07:42:06','2020-05-04 07:42:06');
INSERT INTO `orders` VALUES (8,8,9,853.00,'panding','2020-05-06 10:22:51','2020-05-06 10:22:51');
INSERT INTO `orders` VALUES (9,8,9,855.00,'panding','2020-05-06 10:29:16','2020-05-06 10:29:16');
INSERT INTO `orders` VALUES (10,8,9,1089.00,'panding','2020-05-06 10:30:52','2020-05-06 10:30:52');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_details`
--

DROP TABLE IF EXISTS `orders_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_details`
--

LOCK TABLES `orders_details` WRITE;
/*!40000 ALTER TABLE `orders_details` DISABLE KEYS */;
INSERT INTO `orders_details` VALUES (1,2,1,'dsfdsfds',465.00,1,'2020-04-27 19:21:32','2020-04-27 19:21:32');
INSERT INTO `orders_details` VALUES (2,3,3,'computer',853.00,5,'2020-04-27 22:25:13','2020-04-27 22:25:13');
INSERT INTO `orders_details` VALUES (3,3,1,'test hello',234.00,2,'2020-04-27 22:25:13','2020-04-27 22:25:13');
INSERT INTO `orders_details` VALUES (4,4,3,'computer',853.00,1,'2020-04-28 04:44:06','2020-04-28 04:44:06');
INSERT INTO `orders_details` VALUES (5,5,2,'What is Lorem Ipsum?',855.00,5,'2020-05-04 06:58:33','2020-05-04 06:58:33');
INSERT INTO `orders_details` VALUES (6,6,1,'test hello',234.00,1,'2020-05-04 07:40:12','2020-05-04 07:40:12');
INSERT INTO `orders_details` VALUES (7,6,2,'What is Lorem Ipsum?',855.00,1,'2020-05-04 07:40:12','2020-05-04 07:40:12');
INSERT INTO `orders_details` VALUES (8,7,2,'What is Lorem Ipsum?',855.00,1,'2020-05-04 07:42:06','2020-05-04 07:42:06');
INSERT INTO `orders_details` VALUES (9,7,3,'computer',853.00,2,'2020-05-04 07:42:06','2020-05-04 07:42:06');
INSERT INTO `orders_details` VALUES (10,8,3,'computer',853.00,1,'2020-05-06 10:22:52','2020-05-06 10:22:52');
INSERT INTO `orders_details` VALUES (11,9,2,'What is Lorem Ipsum?',855.00,1,'2020-05-06 10:29:16','2020-05-06 10:29:16');
INSERT INTO `orders_details` VALUES (12,10,1,'test hello',234.00,1,'2020-05-06 10:30:52','2020-05-06 10:30:52');
INSERT INTO `orders_details` VALUES (13,10,2,'What is Lorem Ipsum?',855.00,1,'2020-05-06 10:30:52','2020-05-06 10:30:52');
/*!40000 ALTER TABLE `orders_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,1,'Cash','pending','2020-04-27 19:20:35','2020-04-27 19:20:35');
INSERT INTO `payments` VALUES (2,2,'Cash','pending','2020-04-27 19:21:32','2020-04-27 19:21:32');
INSERT INTO `payments` VALUES (3,3,'Cash','pending','2020-04-27 22:25:13','2020-04-27 22:25:13');
INSERT INTO `payments` VALUES (4,4,'Cash','pending','2020-04-28 04:44:06','2020-04-28 04:44:06');
INSERT INTO `payments` VALUES (5,5,'Cash','pending','2020-05-04 06:58:33','2020-05-04 06:58:33');
INSERT INTO `payments` VALUES (6,6,'Cash','pending','2020-05-04 07:40:12','2020-05-04 07:40:12');
INSERT INTO `payments` VALUES (7,7,'Cash','pending','2020-05-04 07:42:06','2020-05-04 07:42:06');
INSERT INTO `payments` VALUES (8,8,'Cash','pending','2020-05-06 10:22:51','2020-05-06 10:22:51');
INSERT INTO `payments` VALUES (9,9,'Cash','pending','2020-05-06 10:29:16','2020-05-06 10:29:16');
INSERT INTO `payments` VALUES (10,10,'Cash','pending','2020-05-06 10:30:52','2020-05-06 10:30:52');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'test hello',1,1,234.00,342,'ডেলিভারি করছে। সাধারণত নেক্সট ডে করা হলেও এখন কিছু কিছু এরিয়া তে নেক্সট ডে পসিবল হচ্ছে না। তবে সেটা খুব সীমিত। ওয়েবসাইট :\r\nডেলিভারি করছে। সাধারণত নেক্সট ডে করা হলেও এখন কিছু কিছু এরিয়া তে নেক্সট ডে পসিবল হচ্ছে না। তবে সেটা খুব সীমিত। ওয়েবসাইট :','ডেলিভারি করছে। সাধারণত নেক্সট ডে করা হলেও এখন কিছু কিছু এরিয়া তে নেক্সট ডে পসিবল হচ্ছে না। তবে সেটা খুব সীমিত। ওয়েবসাইট :','product-imags/2.jpg',1,'2020-04-27 20:46:23','2020-04-27 20:46:23');
INSERT INTO `products` VALUES (2,'What is Lorem Ipsum?',1,2,855.00,56,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley','product-imags/3.jpg',1,'2020-04-27 20:48:15','2020-04-27 20:48:15');
INSERT INTO `products` VALUES (3,'computer',1,1,853.00,78,'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham','The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham','product-imags/5.jpg',1,'2020-04-27 20:49:17','2020-04-27 20:49:17');
INSERT INTO `products` VALUES (4,'Kangaro Stapler Pin',1,2,56.00,5,'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy','orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy','product-imags/bus.jpg',1,'2020-05-18 05:24:53','2020-05-18 05:24:53');
INSERT INTO `products` VALUES (5,'Casio Calculator',1,1,89.00,65,'here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected','here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected','product-imags/2.jpg',1,'2020-05-18 05:33:30','2020-05-18 05:33:30');
INSERT INTO `products` VALUES (6,'Qarshi Jam e Shirin',1,2,89.00,458,'here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected','here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected','product-imags/5.jpg',1,'2020-05-18 05:55:03','2020-05-18 05:55:03');
INSERT INTO `products` VALUES (7,'PYREX',1,2,58.00,55,'here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected','here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected','product-imags/3.jpg',1,'2020-05-18 05:57:11','2020-05-18 05:57:11');
INSERT INTO `products` VALUES (8,'Pack Of 5',2,1,99.00,55,'here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected','here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected','product-imags/5.jpg',1,'2020-05-18 05:58:02','2020-05-18 05:58:02');
INSERT INTO `products` VALUES (9,'Royal Victoria Melamine Large Serving Bowls',1,2,56.00,56,'Royal Victoria Melamine Large Serving BowlsRoyal Victoria Melamine Large Serving Bowls','Royal Victoria Melamine Large Serving BowlsRoyal Victoria Melamine Large Serving Bowls','product-imags/3.jpg',1,'2020-05-18 05:59:56','2020-05-18 05:59:56');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppings`
--

DROP TABLE IF EXISTS `shoppings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `shoppings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppings`
--

LOCK TABLES `shoppings` WRITE;
/*!40000 ALTER TABLE `shoppings` DISABLE KEYS */;
INSERT INTO `shoppings` VALUES (1,'gdfds','fdsfds','s@s.com','54665','dfgf','2020-04-28 04:44:00','2020-04-28 04:44:00');
INSERT INTO `shoppings` VALUES (2,'tt','fttrfy','asdf@rfdg.tgjhg','6546565','ghjghjgh','2020-04-28 09:11:59','2020-04-28 09:11:59');
INSERT INTO `shoppings` VALUES (3,'tt','fttrfy','asdf@rfdg.tgjhg','6546565','ghjghjgh','2020-04-28 09:23:16','2020-04-28 09:23:16');
INSERT INTO `shoppings` VALUES (4,'dsfds','dfdsfd','dsfdd@asd.com','15964665','hi','2020-05-04 06:58:27','2020-05-04 06:58:27');
INSERT INTO `shoppings` VALUES (5,'gdfds','fdsfds','s@s.com','54665','dfgf','2020-05-04 07:39:59','2020-05-04 07:39:59');
INSERT INTO `shoppings` VALUES (6,'Sujan','Miya','sujan@miya.com','41478966363','Hello sujan','2020-05-04 07:42:03','2020-05-04 07:42:03');
INSERT INTO `shoppings` VALUES (7,'Sujan','Miya','sujan@miya.com','41478966363','Hello sujan','2020-05-04 07:43:03','2020-05-04 07:43:03');
INSERT INTO `shoppings` VALUES (8,'Sujan','Miya 252','sujan@miya.com','41478966363','Hello sujan','2020-05-04 07:51:09','2020-05-04 07:51:09');
INSERT INTO `shoppings` VALUES (9,'sujan','Miya 252','sujan@miya.com','786798','df','2020-05-06 10:22:48','2020-05-06 10:22:48');
/*!40000 ALTER TABLE `shoppings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-30  5:48:25
