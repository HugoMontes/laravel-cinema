/*
 Navicat Premium Data Transfer

 Source Server         : [localhost] - [mysql]
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : cinemadb

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 17/07/2021 11:52:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for directores
-- ----------------------------
DROP TABLE IF EXISTS `directores`;
CREATE TABLE `directores`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of directores
-- ----------------------------
INSERT INTO `directores` VALUES (1, 'Steven Spielberg', '2021-07-08 17:20:05', '2021-07-08 17:20:05');
INSERT INTO `directores` VALUES (2, 'Roberto Gomez Bolaños', '2021-07-09 01:14:45', '2021-07-09 01:16:19');
INSERT INTO `directores` VALUES (3, 'Ruben Aguirre', '2021-07-09 01:14:52', '2021-07-09 01:14:52');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for generos
-- ----------------------------
DROP TABLE IF EXISTS `generos`;
CREATE TABLE `generos`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `genero` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of generos
-- ----------------------------
INSERT INTO `generos` VALUES (1, 'Accion', '2021-07-08 17:15:09', '2021-07-08 17:15:09');
INSERT INTO `generos` VALUES (2, 'Drama', '2021-07-09 00:57:30', '2021-07-09 00:57:30');
INSERT INTO `generos` VALUES (3, 'Terror', '2021-07-09 00:57:37', '2021-07-09 00:57:37');
INSERT INTO `generos` VALUES (4, 'Infantil', '2021-07-09 00:57:44', '2021-07-09 00:57:44');
INSERT INTO `generos` VALUES (5, 'Comedia', '2021-07-09 00:58:10', '2021-07-09 00:58:24');

-- ----------------------------
-- Table structure for imagenes
-- ----------------------------
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelicula_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `imagenes_pelicula_id_foreign`(`pelicula_id`) USING BTREE,
  CONSTRAINT `imagenes_pelicula_id_foreign` FOREIGN KEY (`pelicula_id`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of imagenes
-- ----------------------------
INSERT INTO `imagenes` VALUES (1, 'cinema_1625804402.jpg', 2, '2021-07-09 04:20:02', '2021-07-09 04:20:02');
INSERT INTO `imagenes` VALUES (2, 'cinema_1625875637.jpg', 4, '2021-07-10 00:07:18', '2021-07-10 00:07:18');
INSERT INTO `imagenes` VALUES (3, 'cinema_1625878695.jpg', 5, '2021-07-09 20:58:15', '2021-07-09 20:58:15');
INSERT INTO `imagenes` VALUES (4, 'cinema_1626130100.jpg', 6, '2021-07-12 18:48:20', '2021-07-12 18:48:20');
INSERT INTO `imagenes` VALUES (5, 'cinema_1626142428.jpg', 7, '2021-07-12 22:13:48', '2021-07-12 22:13:48');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2021_07_08_164005_create_generos_table', 1);
INSERT INTO `migrations` VALUES (5, '2021_07_08_164053_create_peliculas_table', 1);
INSERT INTO `migrations` VALUES (6, '2021_07_08_164750_create_directores_table', 2);
INSERT INTO `migrations` VALUES (7, '2021_07_08_165140_create_imagenes_table', 3);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pelicula_director
-- ----------------------------
DROP TABLE IF EXISTS `pelicula_director`;
CREATE TABLE `pelicula_director`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pelicula_id` bigint(20) UNSIGNED NOT NULL,
  `director_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pelicula_director_pelicula_id_foreign`(`pelicula_id`) USING BTREE,
  INDEX `pelicula_director_director_id_foreign`(`director_id`) USING BTREE,
  CONSTRAINT `pelicula_director_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `directores` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `pelicula_director_pelicula_id_foreign` FOREIGN KEY (`pelicula_id`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelicula_director
-- ----------------------------
INSERT INTO `pelicula_director` VALUES (2, 2, 3, '2021-07-09 04:20:02', '2021-07-09 04:20:02');
INSERT INTO `pelicula_director` VALUES (5, 4, 2, '2021-07-10 00:07:17', '2021-07-10 00:07:17');
INSERT INTO `pelicula_director` VALUES (6, 5, 2, '2021-07-09 20:58:15', '2021-07-09 20:58:15');
INSERT INTO `pelicula_director` VALUES (7, 5, 1, '2021-07-09 20:58:15', '2021-07-09 20:58:15');
INSERT INTO `pelicula_director` VALUES (8, 6, 3, '2021-07-12 18:48:20', '2021-07-12 18:48:20');
INSERT INTO `pelicula_director` VALUES (9, 7, 2, '2021-07-12 22:13:48', '2021-07-12 22:13:48');
INSERT INTO `pelicula_director` VALUES (10, 7, 1, '2021-07-12 22:13:48', '2021-07-12 22:13:48');

-- ----------------------------
-- Table structure for peliculas
-- ----------------------------
DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE `peliculas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` double(8, 2) NOT NULL,
  `resumen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estreno` date NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `genero_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `peliculas_genero_id_foreign`(`genero_id`) USING BTREE,
  INDEX `peliculas_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `peliculas_genero_id_foreign` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `peliculas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of peliculas
-- ----------------------------
INSERT INTO `peliculas` VALUES (2, 'El planeta de los simios', 65.00, 'Pelicula de ciencia ficción', '2021-07-09', '2021-07-09 04:20:02', '2021-07-09 04:20:02', 1, 3);
INSERT INTO `peliculas` VALUES (4, 'Big Hero 6', 60.00, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum velit ac tristique varius. Nulla facilisi. Donec eu quam blandit, aliquet dolor eget, eleifend arcu. Sed at urna consectetur, aliquet orci sit amet, tristique justo. Curabitur et velit quis felis luctus dapibus vitae non velit. Sed semper dolor ut odio vestibulum pellentesque at at lorem. Etiam elementum dolor eleifend neque facilisis porttitor. Maecenas sagittis libero risus, quis tincidunt velit malesuada eu. Aenean maximus pellentesque purus, vel condimentum felis sodales ac. Ut sollicitudin magna non dui imperdiet, eu volutpat lectus commodo.', '2021-07-10', '2021-07-10 00:07:17', '2021-07-10 00:07:17', 4, 3);
INSERT INTO `peliculas` VALUES (5, 'Spider Man 2', 80.00, 'Mauris placerat mattis sapien quis facilisis. Sed at sapien maximus, finibus felis quis, malesuada diam. Nulla luctus libero enim, non pharetra sapien mattis ac. In sit amet vulputate dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ipsum orci, viverra et purus id, rutrum commodo nibh. Vivamus condimentum a libero sed dignissim. Sed ultrices condimentum ipsum a mollis. Vivamus eu libero facilisis, dapibus magna at, pretium nulla. Proin rhoncus vel quam at rhoncus. Nullam quis consectetur felis. Sed eget finibus ipsum. Donec auctor lacus justo, ut accumsan diam rhoncus ac. Curabitur maximus ipsum dolor, bibendum cursus tortor maximus sit amet. Vivamus vel elementum neque.', '2021-07-09', '2021-07-09 20:58:15', '2021-07-09 20:58:15', 1, 3);
INSERT INTO `peliculas` VALUES (6, 'Avengers', 91.00, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Suspendisse blandit quis nunc a volutpat. Integer aliquet felis id iaculis consequat. Vivamus nec malesuada erat. Phasellus id iaculis sapien. Morbi a pellentesque nunc, vulputate sollicitudin eros. Nunc sagittis volutpat mauris non blandit. Vestibulum posuere pharetra nisl et feugiat. Nullam posuere tincidunt arcu, quis vehicula augue vestibulum ac.</span></p>', '2021-07-12', '2021-07-12 18:48:20', '2021-07-12 18:48:20', 1, 3);
INSERT INTO `peliculas` VALUES (7, 'Lego movie', 95.00, '<p><span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" justify;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-thickness:=\"\" initial;=\"\" text-decoration-style:=\"\" text-decoration-color:=\"\" display:=\"\" inline=\"\" !important;=\"\" float:=\"\" none;\"=\"\">Nullam semper diam ac dui euismod, ut finibus libero porttitor. In vel rhoncus ligula. Ut malesuada iaculis ex, eu ultrices quam auctor a. Nunc et luctus neque. Aliquam at metus est. Sed tempus orci magna. Vivamus quis faucibus ex. Vestibulum id purus porttitor, lacinia ipsum id, fringilla enim. Suspendisse ullamcorper sollicitudin quam, vel efficitur ligula bibendum at.</span></p>', '2021-07-12', '2021-07-12 22:13:48', '2021-07-17 10:42:32', 5, 3);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('member','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (3, 'Ramiro', 'ramiro@gmail.com', NULL, '$2y$10$yia5ShcL0VfHHEG5eHieGuX32lYv3PwYD4C/q9PminHeuYgdtVmeO', 'admin', NULL, '2021-07-08 21:05:09', '2021-07-08 21:05:09');
INSERT INTO `users` VALUES (4, 'Pedro', 'pedro@gmail.com', NULL, '$2y$10$3wgoGdl.9a4I15.GL78EFOyCZCtwBlWRpoz.Qpq1JMoBzeq8lN4Xq', 'member', NULL, '2021-07-08 21:18:03', '2021-07-08 21:18:03');
INSERT INTO `users` VALUES (5, 'Mateo', 'mateo@gmail.com', NULL, '$2y$10$g4ePMdJyvJZcRisA3mYbe.iWdgsDH9mRbIKh8gfN8pBtFZscJc/ky', 'member', NULL, '2021-07-08 21:21:58', '2021-07-08 21:21:58');
INSERT INTO `users` VALUES (7, 'Juan', 'juan@prueba.com', NULL, '$2y$10$WJRRo6mQzSISOn360lBmKe1wq/sXFjzIKrRwTyYu1zAtIrqSrPuOK', 'admin', NULL, '2021-07-08 21:39:27', '2021-07-08 22:03:28');
INSERT INTO `users` VALUES (8, 'Eduardo', 'eduardo@gmail.com', NULL, '$2y$10$.vkPHP3Iv3SEydO9/DQc6uE2yE530oNR1otDukb5i816/gFywe6tG', 'admin', NULL, '2021-07-08 21:48:02', '2021-07-08 21:48:02');
INSERT INTO `users` VALUES (9, 'Graciela', 'graciela@gmail.com', NULL, '$2y$10$wfaorGDP.M/50exiQPzHq.Bm0qXyMLa4KO5xyYaxrZXw9m6B3t4/G', 'member', NULL, '2021-07-08 21:48:43', '2021-07-08 21:48:43');
INSERT INTO `users` VALUES (10, 'Ricardo', 'ricardo@gmail.com', NULL, '$2y$10$INWxZmppLl4hCQiGM5ynZObd91/nGCO8vq9OCDFFo35azivUVXSDi', 'admin', NULL, '2021-07-08 21:49:00', '2021-07-08 21:49:00');
INSERT INTO `users` VALUES (11, 'Jesus', 'jesus@gmail.com', NULL, '$2y$10$lH0lbmTpsjWImmgTXc.swuAu34EA1GBsSlT3.gvM3uXXrYs2VuFiC', 'admin', NULL, '2021-07-08 22:06:11', '2021-07-08 22:06:11');

SET FOREIGN_KEY_CHECKS = 1;
