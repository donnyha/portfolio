-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: capstone
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `beer`
--

DROP TABLE IF EXISTS `beer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brewery_id` int NOT NULL,
  `review_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('stout','IPA','amber ale','pale ale','specialty ale','kolsch','lager','pilsner','seltzer','radler','european','other') DEFAULT NULL,
  `alcohol_percentage` decimal(2,1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `gluten_free` tinyint(1) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `container_type` enum('can','bottle','growler','keg') DEFAULT NULL,
  `click_num` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `brewery_id` (`brewery_id`),
  KEY `review_id` (`review_id`),
  CONSTRAINT `beer_ibfk_1` FOREIGN KEY (`brewery_id`) REFERENCES `breweries` (`id`),
  CONSTRAINT `beer_ibfk_2` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beer`
--

LOCK TABLES `beer` WRITE;
/*!40000 ALTER TABLE `beer` DISABLE KEYS */;
INSERT INTO `beer` VALUES (1,1,1,'Bluebeary Ale','specialty ale',5.0,'bluebeary.png','A wheat beer with added natural blueberry flavour. Subtle berry notes on the nose and palate, a well-balanced ale with a refreshing finish',0,2.74,355,'bottle',68,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(2,1,2,'Lamp Lighter Amber Ale','amber ale',5.2,'lamp_lighter.png','Easy drinking ale brewed using traditional UK malts to impart a deep red hue with notes of caramel, raisin and a hint of roasted chocolate',0,2.12,355,'can',78,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(3,1,3,'Portager Bohemian Pilsner','pilsner',5.3,'portager_bohemian.png','Brewed using Bohemian Pilsner malt and Saaz hops. A crisp, clean and refreshing lager with distinct hop aromas of floral and subtle spice',0,2.44,355,'bottle',30,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(4,1,4,'Cold Brew Coffee Stout','stout',7.0,'cold_brew_coffee.png','Bold coffee flavour is balanced with a chocolate-forward profile from the dark malts. A dark, expressive and full-bodied stout, to be enjoyed at any time of your day!',0,2.74,355,'can',80,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(5,2,5,'Stir Stick Stout','stout',6.0,'stir_stick.png','Robust with ruby highlights and a generous addition of locally roasted fair trade, organic Ethiopian Yirgacheffe coffee',0,4.09,473,'can',75,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(6,2,6,'Little Scrapper IPA','IPA',6.0,'little_scrapper.png','A firm, toasted malt presence forms the background for all these hops lending balance so it’s not just a one note symphony',0,3.95,473,'can',80,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(7,2,7,'Bulldog Amber Ale','amber ale',5.4,'bulldog_amber.png','British crystal malts give this beer its distinctly deep amber body and nutty aroma that persist throughout the glass',0,2.32,341,'bottle',72,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(8,2,8,'St. James Pale Ale','pale ale',4.8,'st_james.png','St. James Pale Ale is a medium bodied blonde brew that’s soft on the palette with a malty finish',0,2.14,341,'bottle',103,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(9,3,9,'Juicii IPA','IPA',7.0,'juicii.png','A hoppy, tropical, and juicy New England IPA (7%) double dry-hopped with El Dorado, Vic Secret, lupulin-enriched Mosaic & Citra',0,4.35,473,'can',140,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(10,3,10,'Waves Juicy Pale Ale','pale ale',5.0,'waves_juicy.jpeg','A tropical, breezy, and juicy New England Pale Ale (5%) dry-hopped with waves of El Dorado & Citra',0,4.09,473,'can',150,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(11,3,11,'Fog Machine Cashmere Double IPA','IPA',8.0,'fog_machine.jpg','A super hoppy single-hop Double IPA brewed and double dry-hopped with 100% Cashmere!',0,4.89,473,'can',80,'2021-05-17 15:36:05','2021-05-18 19:53:52'),(12,3,12,'Throwback West Coast IPA','IPA',7.0,'throwback.jpeg','A dank & hoppy West Coast IPA (7%) brewed with Golden Promise malt and aggressively dry-hopped with Centennial, Cryo Simcoe, and Cryo Amarillo',0,4.59,473,'can',100,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(13,4,13,'1919 Belgian Pale Ale','pale ale',5.0,'1919.png','1919 is an easy-drinking everyday Belgian Pale Ale',0,2.40,473,'can',93,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(14,4,14,'Golden Ale','specialty ale',6.5,'golden_ale.png','A CRISP GOLDEN ALE IN OUR BELGIAN STYLE MADE WITH MANITOBA HONEY',0,2.40,473,'can',114,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(15,4,15,'Summer Lager','lager',5.0,'summer_lager.png','A SUMMER LAGER WITH A REFRESHING OUTLOOK',0,2.40,473,'can',104,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(16,4,16,'Belgian IPA','IPA',6.5,'belgian_ipa.png','ENGINEERED TO SHOWCASE NEW WORLD HOPS IN OUR BELGIAN STYLE',0,2.40,473,'can',120,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(17,5,17,'Lime Seltzer','seltzer',5.0,'lime_seltzer.png','Lime flavour Seltzer',0,3.59,473,'can',72,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(18,5,18,'Cranberry Crush Radler','radler',3.5,'cranberry_crush_radler.png','A beautiful pink-hued, effervescent radler, infused with tart cranberry juice',0,3.79,473,'can',88,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(19,5,19,'Portage and Main IPA','IPA',6.5,'portage_and_main.png','All aboard with this west coast-style IPA, featuring high-quality malted barley and whole west coast and Manitoba flower hops',0,3.99,473,'can',110,'2021-05-17 15:36:05','2021-05-17 15:36:05'),(20,5,20,'Northern Lite','other',4.0,'northern_lite.png','Northern Lite is a clean, crisp beer which finishes dry. A perfect beach or cabin companion. Made using 100% barley we strive to create the best tasting light beer possible',0,2.98,473,'can',103,'2021-05-17 15:36:05','2021-05-17 15:36:05');
/*!40000 ALTER TABLE `beer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `breweries`
--

DROP TABLE IF EXISTS `breweries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `breweries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `open_time_mon` int DEFAULT NULL,
  `close_time_mon` int DEFAULT NULL,
  `open_time_tue` int DEFAULT NULL,
  `close_time_tue` int DEFAULT NULL,
  `open_time_wed` int DEFAULT NULL,
  `close_time_wed` int DEFAULT NULL,
  `open_time_thu` int DEFAULT NULL,
  `close_time_thu` int DEFAULT NULL,
  `open_time_fri` int DEFAULT NULL,
  `close_time_fri` int DEFAULT NULL,
  `open_time_sat` int DEFAULT NULL,
  `close_time_sat` int DEFAULT NULL,
  `open_time_sun` int DEFAULT NULL,
  `close_time_sun` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breweries`
--

LOCK TABLES `breweries` WRITE;
/*!40000 ALTER TABLE `breweries` DISABLE KEYS */;
INSERT INTO `breweries` VALUES (1,'Trans Canada Brewing Co.','1-1290 Kenaston Boulevard','Winnipeg','R3P 0R7','Manitoba','Canada',NULL,NULL,NULL,NULL,1400,2200,1400,2200,1400,2200,1400,2200,1400,1900,'trans_canada.jpg','2046662337','info@tcb.beer','trans_canada','2021-05-17 15:32:48','2021-05-21 00:04:06'),(2,'Half Pints Brewing','550 Roseberry Street','Winnipeg','R3H 0T1','Manitoba','Canada',1100,1800,1100,1800,1100,1800,1100,1800,1100,1800,1100,1800,1100,1800,'half_pints.jpg','2048327468','info@halfpintsbrewing.com','half_pints','2021-05-17 15:32:48','2021-05-21 00:04:24'),(3,'Kilter Brewing Co.','450 Rue Deschambault','Winnipeg','R2H 0K1','Manitoba','Canada',NULL,NULL,NULL,NULL,1200,2000,1200,2000,1200,2000,1200,2000,NULL,NULL,'kilter.jpg',NULL,'hello@kilterbrewing.co','kilter','2021-05-17 15:32:48','2021-05-21 00:04:40'),(4,'Little Brown Jug Brewing Co.','336 William Avenue','Winnipeg','R3A 0H7','Manitoba','Canada',NULL,NULL,1200,1800,1200,1800,1200,2000,1200,2000,1200,2000,NULL,NULL,'little_brown_jug.jpg','2045000441','beer@littlebrownjug.ca','lbj','2021-05-17 15:32:48','2021-05-21 00:04:56'),(5,'Fort Garry Brewing Co.','130 Lowson Crescent','Winnipeg','R3P 2H8','Manitoba','Canada',900,1700,900,1700,900,1700,900,1700,900,1800,NULL,NULL,NULL,NULL,'fort_garry.jpg','2044873678','info@fortgarry.com','fort_garry','2021-05-17 15:32:48','2021-05-21 00:05:07');
/*!40000 ALTER TABLE `breweries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `beer_id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `star_num` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `beer_id` (`beer_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`beer_id`) REFERENCES `beer` (`id`),
  CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,1,1,'Interesting','Bluebeary Ale was one of the first craft beers I had ever tried. In my opinion, it is more of a summer beer as it is fruity yet refreshing. I prefer bottle over can, but I stole this from Shans beer fridge so can’t complain. Cheers',3,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(2,2,1,'Pleasant Surprise','Quite complex for an amber ale. Sweet malt forward... caramel with hints of chocolate, raisin and a nice biscuity malt profile. This is pretty damn good! Deep red hue and finishes smooth, begging me to take another mouthful.',3,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(3,3,1,'Good enough','It’s clean crisp and not as hoppy as a ipa which in my books is a good thing.',2,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(4,4,3,'Breath of Fresh air','Great chocolate stout. Not overpowering just richly infused.',3,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(5,5,5,'Smooth','Love the salty sweet flavor...smooth',3,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(6,6,4,'Awesome!','My fav local IPA.',4,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(7,7,2,'A good reliable amber','Light, short, sweet. Peanut, biscuit, a bit of raisins. Some mild hops in there.',3,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(8,8,1,'Great Pale Ale!','I can’t believe I’ve never checked this one in',4,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(9,9,3,'A true crowd pleaser','A soft, tropical, and juicy New England IPA double dry-hopped with El Dorado, Vic Secret, lupulin-enriched Mosaic & Citra.',5,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(10,10,2,'Easy drinkin','I just love this beer, so fresh, juiced and hopped. This was canned in Feb and still a banger in April',5,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(11,11,5,'Another fog machine hit','100% chance of fog on a beautiful sunny day. Nice creamy melon flavour, with the classic kilter tropical juicy flavour. Pine and lemon rounds it out.',4,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(12,12,1,'Refreshing!','Nice hop aroma, golden color and long lasting head. Creamy smooth slight hop bitter flavor and hints of pine finish.',4,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(13,13,1,'Belgian Classic','Nice clean crisp and modestly sweet with a definite malt flavour',5,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(14,14,2,'Honey Taste!','I really enjoyed this brew! Great work! Loved the honey taste',4,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(15,15,3,'Citrusy, refreshing beer','Lagery with a little bright taste',1,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(16,16,4,'Nice hoppy and citrus','Smooth for a heavy ipa',5,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(17,17,3,'Limey','Could be better',2,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(18,18,5,'Tastes like summer','Recommended by the savvy employee at the LC, and he did not disappoint! Great sour & sweet balance, with a delicious cranberry flavor!',2,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(19,19,3,'Taste of Winnipeg','Clean, light, non descript beer',3,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(20,20,5,'Clean, light, non descript beer','Nice warm up beer .. better choice then bud... $2 king can ....',3,'2021-05-17 15:32:49','2021-05-17 15:32:49',0),(24,1,6,'Changed Title','Changed Review',2,'2021-05-18 17:17:38','2021-05-21 21:23:39',1),(25,1,6,'Good Beer','Polar Beer',4,'2021-05-18 17:18:52','2021-05-18 17:18:52',0),(26,1,6,'','',0,'2021-05-18 20:00:26','2021-05-21 21:35:04',1),(27,1,6,'','',0,'2021-05-18 20:00:32','2021-05-21 21:23:44',1);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Henry','Thierry','Emirates','Fassword','1111111111','striker@example.com','123 Arsenal Street','Winnipeg','R3B 2E9','Manitoba','Canada',0,'2021-05-17 15:32:48','2021-05-17 15:32:48'),(2,'Pirlo','Andrea','OldLady','Iassword','2222222222','regista@example.com','234 Juventus Street','Winnipeg','R3B 2E8','Manitoba','Canada',0,'2021-05-17 15:32:48','2021-05-17 15:32:48'),(3,'Carragher','Jamie','CenterBack','Lassword','3333333333','kop@example.com','345 Anfield Street','Winnipeg','R3B 2E7','Manitoba','Canada',0,'2021-05-17 15:32:48','2021-05-17 15:32:48'),(4,'Neville','Gary','Fullback','Massword','4444444444','red_devil@example.com','456 Old Trafford Street','Winnipeg','R3B 2E6','Manitoba','Canada',0,'2021-05-17 15:32:48','2021-05-17 15:32:48'),(5,'Busquets','Sergio','anchorman','Sassword','5555555555','barcelona@example.com','413 Camp Nou Street','Winnipeg','R3B 2E5','Manitoba','Canada',0,'2021-05-17 15:32:48','2021-05-17 15:32:48'),(6,'Swanson','Ron','ron','$2y$10$I5ZZdmDMOIXK3xViNh976eCfIFs1.zjqFTfDEQeQ7P5YlETeMp/FC','1234567890','ron@swanson.com','123 Street','Pawnee','A1A 1A1','Indiana','USA',0,'2021-05-18 15:22:31','2021-05-18 15:22:31'),(7,'West','Kanye','yeezy','$2y$10$dYD0QxrXOW.mBmP9gAJZde3w9N1kooQTVC5QGI8xDJFOJilIe1SH6','1234567890','ye@example.com','123 street','Chicago','A1A 1A1','Illinois','USA',0,'2021-05-18 20:14:38','2021-05-18 20:14:38'),(8,'User','Admin','admin','$2y$10$G4ttq/SdfEhvqe1QP7fiiOGbBW8v5T2tJUiY/7lLo71TVpScTtvrm','1234567890','admin@example.ca','123 street','Winnipeg','A1A 1A1','Manitoba','Canada ',1,'2021-05-25 22:15:38','2021-05-26 00:17:10');
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

-- Dump completed on 2021-05-26  0:17:46
