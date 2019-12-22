-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para bd_imoveis
CREATE DATABASE IF NOT EXISTS `bd_imoveis` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bd_imoveis`;

-- Copiando estrutura para tabela bd_imoveis.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.clientes: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `cpf`, `nome`, `email`, `telefone`, `created_at`, `updated_at`) VALUES
	(1, '471.458.988-10', 'Eduarda', '208232017@eniac.edu.br', '11946288795', '2019-10-12 15:56:36', '2019-10-29 00:36:39'),
	(2, '12121212', 'Milena', 'milena03rosa@gmail.com', '11946288795', '2019-10-12 16:05:20', '2019-10-12 16:05:20'),
	(3, '185.835.028-03', 'Rosangela', 'rosangela74@outlook.com', '12345678', '2019-10-12 16:10:07', '2019-10-12 16:10:07'),
	(4, '185.835.028-03', 'Rosangela', 'rosangela74@outlook.com', '12345678', '2019-10-12 16:17:05', '2019-10-12 16:17:05'),
	(5, '00000000', 'Ana', 'ana@gmail.com', '12345678', '2019-10-12 16:19:48', '2019-10-12 16:19:48'),
	(6, '00000000', 'Ana', 'ana@gmail.com', '12345678', '2019-10-12 16:41:33', '2019-10-12 16:41:33'),
	(7, '111111111', 'marcia', 'marcia@gmail.com', '12345678', '2019-10-12 16:41:56', '2019-10-12 16:41:56'),
	(8, '2222222', 'Paula Santos', 'paula@gmail.com', '12121212', '2019-10-12 16:46:49', '2019-10-12 16:46:49'),
	(9, '555555', 'Miriam', 'miriam@gmail.com', '545454545', '2019-10-12 16:52:38', '2019-10-12 16:52:38'),
	(10, '88888', 'Eduarda Cirina Rosa', 'eduardacirina@gmail.com', '1129379036', '2019-10-12 16:55:48', '2019-10-12 16:55:48'),
	(11, '99999', 'Fabiana', 'fabiana@gmail.com', '12233', '2019-10-12 16:57:20', '2019-10-12 16:57:20'),
	(12, '6666666', 'Bia', 'bia@gmail.com', '343434334', '2019-10-12 17:11:11', '2019-10-12 17:11:11'),
	(13, '6666666', 'Bia', 'bia@gmail.com', '343434334', '2019-10-12 17:11:27', '2019-10-12 17:11:27'),
	(14, '4444444', 'carlos', 'carlos@gmail.com', '12345678', '2019-10-12 17:29:55', '2019-10-12 17:29:55'),
	(15, '666666666666', 'Milena Rosa', 'milena@rosa.com', '233132323', '2019-10-12 21:58:45', '2019-10-12 21:58:45'),
	(16, '23232323', 'Ana', 'ana@gmail.com', '113232435534', '2019-10-13 21:24:02', '2019-10-13 21:24:02');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.contatos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`, `assunto`, `created_at`, `updated_at`) VALUES
	(8, 'Eduarda Cirina Rosa', 'eduardacirina@gmail.com', '1129379036', 'Teste2', '2019-10-27 15:50:19', '2019-10-27 15:50:19'),
	(9, 'Milena', 'milena03rosa@gmail.com', '1129379036', 'Ok', '2019-10-29 01:20:50', '2019-10-29 01:20:50'),
	(10, 'Ana', 'ana@gmail.com', '12121212', 'Ok', '2019-10-29 18:48:53', '2019-10-29 18:48:53'),
	(11, 'Jose', 'jose@gmail.com', '1212121212', 'Ok', '2019-10-29 18:49:06', '2019-10-29 18:49:06'),
	(12, 'Carlos', 'carlos@gmail.com', '12345678', 'Ok', '2019-10-29 18:49:33', '2019-10-29 18:49:33'),
	(13, 'Antonio', 'antonio@gmail.com', '2323232', 'Ok', '2019-10-29 18:49:45', '2019-10-29 18:49:45');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.features
CREATE TABLE IF NOT EXISTS `features` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.features: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Area de Serviço', NULL, NULL),
	(2, 'Quintal', '2019-10-19 15:47:14', NULL),
	(3, 'Sala de Jantar', NULL, NULL),
	(4, 'Portaria 24h', NULL, NULL),
	(5, 'Piscina', NULL, NULL),
	(6, 'Salão de Festas', NULL, NULL),
	(7, 'Playground', NULL, NULL);
/*!40000 ALTER TABLE `features` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.feature_property
CREATE TABLE IF NOT EXISTS `feature_property` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `feature_id` bigint(20) unsigned NOT NULL,
  `property_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `feature_property_feature_id_foreign` (`feature_id`),
  KEY `feature_property_property_id_foreign` (`property_id`),
  CONSTRAINT `feature_property_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE,
  CONSTRAINT `feature_property_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.feature_property: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `feature_property` DISABLE KEYS */;
INSERT INTO `feature_property` (`id`, `feature_id`, `property_id`, `created_at`, `updated_at`) VALUES
	(50, 1, 33, NULL, NULL),
	(52, 3, 33, NULL, NULL),
	(53, 4, 33, NULL, NULL),
	(54, 5, 33, NULL, NULL),
	(55, 6, 33, NULL, NULL),
	(56, 7, 33, NULL, NULL),
	(57, 1, 34, NULL, NULL);
/*!40000 ALTER TABLE `feature_property` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.media: ~34 rows (aproximadamente)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Property', 8, 'photo', '1', '1.png', 'image/png', 'public', 75218, '[]', '[]', '[]', 1, '2019-10-19 20:19:32', '2019-10-19 20:19:32'),
	(2, 'App\\Property', 9, 'photo', '1', '1.png', 'image/png', 'public', 75218, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 2, '2019-10-19 20:31:23', '2019-10-19 20:31:23'),
	(3, 'App\\Property', 12, 'default', 'capa', 'capa.jpg', 'image/jpeg', 'public', 58766, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 3, '2019-10-20 23:38:54', '2019-10-20 23:38:54'),
	(4, 'App\\Property', 12, 'default', 'casamento', 'casamento.jpg', 'image/jpeg', 'public', 67015, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 4, '2019-10-20 23:38:54', '2019-10-20 23:38:54'),
	(5, 'App\\Property', 12, 'default', 'chocolate', 'chocolate.jpg', 'image/jpeg', 'public', 104041, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 5, '2019-10-20 23:38:54', '2019-10-20 23:38:55'),
	(6, 'App\\Property', 13, 'default', '1', '1.png', 'image/png', 'public', 12500, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 6, '2019-10-29 23:21:30', '2019-10-29 23:21:31'),
	(7, 'App\\Property', 14, 'default', '3', '3.png', 'image/png', 'public', 1275047, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 7, '2019-10-29 23:21:53', '2019-10-29 23:21:53'),
	(8, 'App\\Property', 15, 'default', '5', '5.png', 'image/png', 'public', 1040159, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 8, '2019-10-29 23:22:27', '2019-10-29 23:22:28'),
	(9, 'App\\Property', 16, 'default', '9', '9.png', 'image/png', 'public', 250045, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 9, '2019-10-29 23:22:49', '2019-10-29 23:22:50'),
	(10, 'App\\Property', 17, 'default', '8', '8.png', 'image/png', 'public', 685390, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 10, '2019-10-29 23:23:23', '2019-10-29 23:23:23'),
	(11, 'App\\Property', 18, 'default', 'Arred 2', 'Arred-2.png', 'image/png', 'public', 7839, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 11, '2019-10-29 23:25:04', '2019-10-29 23:25:04'),
	(12, 'App\\Property', 19, 'default', 'Cores', 'Cores.png', 'image/png', 'public', 102863, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 12, '2019-10-29 23:25:36', '2019-10-29 23:25:37'),
	(13, 'App\\Property', 20, 'default', 'Arred1', 'Arred1.png', 'image/png', 'public', 7070, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 13, '2019-10-29 23:25:58', '2019-10-29 23:25:58'),
	(14, 'App\\Property', 21, 'default', 'Arred1', 'Arred1.png', 'image/png', 'public', 7070, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 14, '2019-10-29 23:26:16', '2019-10-29 23:26:17'),
	(15, 'App\\Property', 22, 'imagesFromProperties', 'screencapture-localhost-imoveis-public-verContatos-2019-10-26-15_51_45', 'screencapture-localhost-imoveis-public-verContatos-2019-10-26-15_51_45.png', 'image/png', 'public', 677279, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 15, '2019-10-31 01:12:57', '2019-10-31 01:12:59'),
	(16, 'App\\Property', 25, 'default', 'array', 'array.png', 'image/png', 'public', 33030, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 16, '2019-10-31 01:43:46', '2019-10-31 01:43:46'),
	(17, 'App\\Property', 26, 'default', 'array', 'array.png', 'image/png', 'public', 33030, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 17, '2019-10-31 02:11:45', '2019-10-31 02:11:45'),
	(18, 'App\\Property', 27, 'default', 'empresa', 'empresa.png', 'image/png', 'public', 711705, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 18, '2019-11-02 00:34:08', '2019-11-02 00:34:08'),
	(19, 'App\\Property', 28, 'default', 'apart', 'apart.jpg', 'image/jpeg', 'public', 237361, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 19, '2019-11-03 02:37:52', '2019-11-03 02:37:53'),
	(20, 'App\\Property', 29, 'default', 'casa1', 'casa1.jpg', 'image/jpeg', 'public', 424001, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 20, '2019-11-03 02:58:28', '2019-11-03 02:58:29'),
	(21, 'App\\Property', 30, 'default', '01', '01.jpg', 'image/jpeg', 'public', 78525, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 21, '2019-11-05 00:42:35', '2019-11-05 00:42:36'),
	(22, 'App\\Property', 30, 'default', '02', '02.jpg', 'image/jpeg', 'public', 37007, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 22, '2019-11-05 00:42:36', '2019-11-05 00:42:36'),
	(23, 'App\\Property', 30, 'default', '03', '03.jpg', 'image/jpeg', 'public', 72226, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 23, '2019-11-05 00:42:36', '2019-11-05 00:42:36'),
	(24, 'App\\Property', 31, 'default', '01 (2)', '01-(2).jpg', 'image/jpeg', 'public', 152551, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 24, '2019-11-06 22:39:47', '2019-11-06 22:39:47'),
	(25, 'App\\Property', 31, 'default', '02 (2)', '02-(2).jpg', 'image/jpeg', 'public', 163051, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 25, '2019-11-06 22:39:47', '2019-11-06 22:39:48'),
	(26, 'App\\Property', 32, 'default', '69c33510-2707-4dc1-82bf-a4d9090d20c7', '69c33510-2707-4dc1-82bf-a4d9090d20c7.jpg', 'image/jpeg', 'public', 80258, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 26, '2019-11-08 00:10:41', '2019-11-08 00:10:42'),
	(27, 'App\\Property', 32, 'default', '346acba1-68f8-441c-a28e-e9ec25401104', '346acba1-68f8-441c-a28e-e9ec25401104.jpg', 'image/jpeg', 'public', 46868, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 27, '2019-11-08 00:10:42', '2019-11-08 00:10:43'),
	(28, 'App\\Property', 33, 'default', '8be9a3d0f128ef20ec0aa8065e1567ff-apartamento-a-venda-no-tatuape', '8be9a3d0f128ef20ec0aa8065e1567ff-apartamento-a-venda-no-tatuape.jpg', 'image/jpeg', 'public', 72457, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 28, '2019-11-11 18:59:29', '2019-11-11 18:59:30'),
	(29, 'App\\Property', 33, 'default', 'apartamento-decorado-1-1170x780', 'apartamento-decorado-1-1170x780.jpg', 'image/jpeg', 'public', 90131, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 29, '2019-11-11 18:59:30', '2019-11-11 18:59:31'),
	(30, 'App\\Property', 33, 'default', 'Apartamentos-Studios-Nova-Sensação-Imobiliária-Sorocaba-CRB-Way-18-1024x678', 'Apartamentos-Studios-Nova-Sensação-Imobiliária-Sorocaba-CRB-Way-18-1024x678.jpg', 'image/jpeg', 'public', 97574, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 30, '2019-11-11 18:59:31', '2019-11-11 18:59:31'),
	(31, 'App\\Property', 33, 'default', 'capa', 'capa.jpg', 'image/jpeg', 'public', 73168, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 31, '2019-11-11 18:59:31', '2019-11-11 18:59:32'),
	(32, 'App\\Property', 33, 'default', 'perspectiva-da-varanda-gourmet-do-graca-lummini-570x314', 'perspectiva-da-varanda-gourmet-do-graca-lummini-570x314.jpg', 'image/jpeg', 'public', 33208, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 32, '2019-11-11 18:59:32', '2019-11-11 18:59:32'),
	(35, 'App\\Property', 34, 'default', 'perspectiva-da-varanda-gourmet-do-graca-lummini-570x314', 'perspectiva-da-varanda-gourmet-do-graca-lummini-570x314.jpg', 'image/jpeg', 'public', 33208, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 35, '2019-11-11 19:13:35', '2019-11-11 19:13:36'),
	(40, 'App\\Property', 34, 'default', '5df24e8dde8a5_01 (2)', '5df24e8dde8a5_01-(2).jpg', 'image/jpeg', 'public', 245396, '[]', '{"generated_conversions": {"thumb": true}}', '[]', 36, '2019-12-12 14:28:31', '2019-12-12 14:28:32');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.migrations: ~23 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2019_10_09_130913_table_cliente', 1),
	(14, '2019_10_09_145407_create_cliente_table', 1),
	(15, '2019_10_09_151924_create_clientes_table', 1),
	(18, '2014_10_12_000000_create_users_table', 2),
	(19, '2014_10_12_100000_create_password_resets_table', 2),
	(20, '2019_08_19_000000_create_failed_jobs_table', 2),
	(21, '2019_10_09_164557_create__clientes', 2),
	(22, '2019_10_11_190305_clientes', 2),
	(23, '2019_10_13_152119_contatos', 3),
	(24, '2019_10_13_170114_create_properties_table', 4),
	(25, '2019_10_13_170338_create_infrastructures_table', 4),
	(26, '2019_10_13_172628_features', 4),
	(27, '2019_10_13_173317_create_feature_property_table', 4),
	(28, '2019_10_13_174511_create_features_table', 4),
	(29, '2019_10_18_014643_create_features_property_table', 5),
	(30, '2019_10_19_004710_create_quero_vender', 5),
	(31, '2019_10_19_171340_create_properties_table', 6),
	(32, '2019_10_19_171949_create_properties_table', 7),
	(33, '2019_10_19_172344_create_properties_table', 8),
	(34, '2019_10_19_173148_create_properties_table', 9),
	(35, '2019_10_19_182717_create_features_table', 10),
	(36, '2019_10_19_192433_create_feature_property_table', 11),
	(37, '2019_10_19_194054_create_media_table', 12),
	(38, '2019_10_20_011631_create_quero_imovel_table', 13),
	(39, '2019_10_20_170418_create__quero_imovel_table', 14);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.password_resets: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.properties
CREATE TABLE IF NOT EXISTS `properties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_properties` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathroom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meters` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.properties: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` (`id`, `id_client`, `tipo`, `title`, `value_properties`, `description`, `location`, `room`, `bathroom`, `meters`, `status`, `created_at`, `updated_at`) VALUES
	(33, '47145898810', '1', 'Apartamento Maia', 'R$320.000,00', 'Ótimo apartamento, localizando no Jardim maia, próximo ao shopping maia e a 15 minutos do bosque maia. O melhor preço da região.', 'Guarulhos', '2', '2', '60', '1', '2019-11-11 18:59:29', '2019-11-11 18:59:29'),
	(34, '3333333', '1', 'Apartamento Centro', '350.000,00', 'Ok,teste upload', 'São Paulo', '2', '1', '45', '1', '2019-11-11 19:13:34', '2019-12-12 14:28:12');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.quero_imovel
CREATE TABLE IF NOT EXISTS `quero_imovel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regiao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.quero_imovel: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `quero_imovel` DISABLE KEYS */;
INSERT INTO `quero_imovel` (`id`, `nome`, `email`, `telefone`, `tipo`, `regiao`, `valor`, `assunto`, `created_at`, `updated_at`) VALUES
	(3, 'Eduarda Cirina Rosa', 'eduardacirina@gmail.com', '1129379036', 'Alugar', 'Maia', '300.000,00', 'Ok', '2019-10-27 16:03:16', '2019-10-27 16:03:16'),
	(4, 'Ju', 'ju@gmail.com', '99888888', 'Comprar', 'Maia', '220.000,00', 'Ok', '2019-10-29 01:22:36', '2019-10-29 01:22:36'),
	(5, 'Ana', 'ana@gmail.com', '12121212', 'Comprar', 'Maia', '4000', 'Ok', '2019-10-29 18:52:41', '2019-10-29 18:52:41'),
	(6, 'Sabrina', 'sabrina@gmail.com', '84834834', 'Comprar', 'Jd angela', '8000', 'Ok', '2019-10-29 18:53:02', '2019-10-29 18:53:02'),
	(7, 'Pedro', 'pedro@gmail.com', 'pedro@gmail.com', 'Comprar', 'santana', '90000', 'Ok', '2019-10-29 18:53:25', '2019-10-29 18:53:25'),
	(8, 'Gabriela', 'gabriela@gmail.com', '2382323', 'Comprar', 'Santos', '70000', 'Ok', '2019-10-29 18:54:06', '2019-10-29 18:54:06');
/*!40000 ALTER TABLE `quero_imovel` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.quero_vender
CREATE TABLE IF NOT EXISTS `quero_vender` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regiao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.quero_vender: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `quero_vender` DISABLE KEYS */;
INSERT INTO `quero_vender` (`id`, `nome`, `email`, `telefone`, `tipo`, `regiao`, `valor`, `assunto`, `created_at`, `updated_at`) VALUES
	(3, 'Eduarda Cirina Rosa', 'eduardacirina@gmail.com', '1129379036', 'Venda', 'Maia', '300.000,00', 'Ok', '2019-10-27 16:03:03', '2019-10-27 16:03:03'),
	(4, 'Jonatas', 'jonatas.santos@gmail.com', '0232323', 'Venda', 'Maia', '8000', 'Ok', '2019-10-29 01:23:54', '2019-10-29 01:23:54'),
	(5, 'Ana', 'ana@gmail.com', '102121211', 'Venda', 'Tucuruvi', '2500000', 'Ok', '2019-10-29 18:59:11', '2019-10-29 18:59:11'),
	(6, 'Carlos', 'carlos@gmail.com', '232382893', 'Venda', 'Morumbi', '70000', 'Ok', '2019-10-29 18:59:46', '2019-10-29 18:59:46'),
	(7, 'Paula', 'paula@gmail.com', '832323023', 'Venda', 'Jd. são paulo', '800000', 'Ok', '2019-10-29 19:00:04', '2019-10-29 19:00:04'),
	(8, 'Jaqueline', 'jaqueline@gmail.com', '00999923', 'Venda', 'Carandiru', '3200000', 'Ok', '2019-10-29 19:00:55', '2019-10-29 19:00:55');
/*!40000 ALTER TABLE `quero_vender` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_imoveis.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('admin','client') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_imoveis.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Eduarda Cirina Rosa', 'eduardacirina@gmail.com', NULL, '$2y$10$HLBWVoxxoGriW7hHIo6wD.bZnezGRU9cmj7SKFzLrwmaD2Vfa4/2y', 'admin', 'RQhY6I1jZ4Zh3ZagtLhFIsGYD3GR8emBxfzeg8VXJfXLGSnHu1e47KdmP1pd', '2019-10-12 15:57:03', '2019-11-11 19:39:31'),
	(2, 'eduarda cirina rosa', '208232017@eniac.edu.br', NULL, '$2y$10$Lx4ZNS1qDfnDmdwfi1PTquMpFr0kQp5RteYH89ARirQ.7kob.EYfS', 'admin', NULL, '2019-11-10 16:36:27', '2019-11-10 16:36:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
