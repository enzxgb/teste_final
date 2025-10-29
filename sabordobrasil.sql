-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.3.0 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.12.0.7122
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela sabor_do_brasil.avaliacoes: 9 rows
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
INSERT INTO `avaliacoes` (`id`, `like`, `dislike`, `publicacao_id`, `user_id`) VALUES
	(1, 0, 0, 1, 1),
	(2, 0, 0, 2, 2),
	(3, 0, 0, 3, 3),
	(4, 0, 0, 2, 1),
	(5, 0, 0, 3, 1),
	(6, 0, 0, 1, 2),
	(7, 0, 0, 3, 2),
	(8, 0, 0, 1, 3),
	(9, 0, 0, 2, 3);
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;

-- Copiando dados para a tabela sabor_do_brasil.cache: ~0 rows (aproximadamente)

-- Copiando dados para a tabela sabor_do_brasil.cache_locks: ~0 rows (aproximadamente)

-- Copiando dados para a tabela sabor_do_brasil.curtida: 7 rows
/*!40000 ALTER TABLE `curtida` DISABLE KEYS */;
INSERT INTO `curtida` (`id`, `likes`, `user_id`, `publicacao_id`) VALUES
	(24, 1, 2, 3),
	(29, 1, 3, 1),
	(30, 1, 3, 2),
	(31, 1, 3, 3);
/*!40000 ALTER TABLE `curtida` ENABLE KEYS */;

-- Copiando dados para a tabela sabor_do_brasil.descurtida: 2 rows
/*!40000 ALTER TABLE `descurtida` DISABLE KEYS */;
INSERT INTO `descurtida` (`id`, `dislikes`, `user_id`, `publicacao_id`) VALUES
	(15, 0, 2, 1),
	(16, 0, 2, 2),
	(27, 1, 1, 1),
	(28, 1, 1, 2),
	(29, 1, 1, 3);
/*!40000 ALTER TABLE `descurtida` ENABLE KEYS */;

-- Copiando dados para a tabela sabor_do_brasil.empresa: ~0 rows (aproximadamente)
INSERT INTO `empresa` (`id`, `nome`, `logo`, `createdAt`, `updatedAt`) VALUES
	(1, 'Sabor do Brasil', 'logo_sabor_do_brasil.png', '2023-11-23 10:49:17', '2021-02-22 09:13:55');

-- Copiando dados para a tabela sabor_do_brasil.failed_jobs: ~0 rows (aproximadamente)

-- Copiando dados para a tabela sabor_do_brasil.jobs: ~0 rows (aproximadamente)

-- Copiando dados para a tabela sabor_do_brasil.job_batches: ~0 rows (aproximadamente)

-- Copiando dados para a tabela sabor_do_brasil.migrations: ~3 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1);

-- Copiando dados para a tabela sabor_do_brasil.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando dados para a tabela sabor_do_brasil.publicacao: ~3 rows (aproximadamente)
INSERT INTO `publicacao` (`id`, `foto`, `titulo_prato`, `local`, `cidade`, `empresa_id`, `createdAt`, `updatedAt`) VALUES
	(1, 'publicacao01.png', 'Peixe Grelhado', 'Jatiúca', 'Maceio-AL', 1, '2023-02-22 09:15:55', '2023-09-22 09:18:55'),
	(2, 'publicacao02.png', 'Cuscuz Paulista', 'Ouro Preto', 'Minas Gerais-MG', 1, '2023-02-22 09:10:55', '2023-02-22 09:16:55'),
	(3, 'publicacao03.png', 'Frango com batatas assadas', 'Nova Iguaçu', 'Rio de Janeiro-RJ', 1, '2023-05-22 09:13:55', '2023-02-22 09:15:55');

-- Copiando dados para a tabela sabor_do_brasil.sessions: ~1 rows (aproximadamente)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('56xltxbS34yVHFlozzQsur9V5wrjAqCIwXIdkGwb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidXpXTVZmekk5c1RibnJjcUZ3dHpoM3lBQ1l2dlRaNUxYZHpEZlUyayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/X3Rva2VuPXV6V01WZnpJOXNUYm5yY3FGd3R6aDN5QUNZdnZUWjVMWGR6RGZVMmsiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1761698577);

-- Copiando dados para a tabela sabor_do_brasil.users: ~3 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `nickname`, `foto`) VALUES
	(1, 'Maria Maitê', 'usuario01@usuario.com', NULL, '$2y$12$/jYgXg7GVhiojjVZfkBlNOBV9UlWQettnCkSN6ZSRQykqwJee9Gl.', NULL, '2025-10-24 04:23:55', '2025-10-24 04:23:55', 'usuario_01', 'usuario_01.jpg'),
	(2, 'Lorena', 'usuario02@usuario.com', NULL, '$2y$12$PfDm99kiBDqYU64mktTat.9YlQHb5zLQ6tHXFxZ2N9eb7mKE/yyo.', NULL, '2025-10-25 02:57:30', '2025-10-25 02:57:30', 'usuario_02', 'usuario_02.jpg'),
	(3, 'Maria de Lurdes', 'usuario03@usuario.com', NULL, '$2y$12$jXReMAVFgqu1SmURNgH01OOhfGTEKSD1.bDtNioRTl5nu0r9O5WWS', NULL, '2025-10-25 03:56:48', '2025-10-25 03:56:48', 'usuario_03', 'usuario_03.jpg	');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
