-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para leaguedb
CREATE DATABASE IF NOT EXISTS `leaguedb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `leaguedb`;

-- Volcando estructura para tabla leaguedb.equipos
CREATE TABLE IF NOT EXISTS `equipos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(75) NOT NULL,
  `ciudad` varchar(75) NOT NULL,
  `deporte` varchar(75) NOT NULL,
  `numero_jugadores` varchar(75) NOT NULL,
  `caracteristicas` varchar(200) NOT NULL,
  `fecha_creacion` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla leaguedb.equipos: ~3 rows (aproximadamente)
INSERT INTO `equipos` (`id`, `nombre`, `ciudad`, `deporte`, `numero_jugadores`, `caracteristicas`, `fecha_creacion`) VALUES
	(1, 'Atalanta', 'Bergamo', 'Futbol', '1', 'Pasto', '2006-09-12'),
	(2, 'Real Madrid', 'Madrid', 'Futbol', '10+', 'Equipo espanol', '1902-02-06'),
	(3, 'Liceo', 'Coruna', 'Hockey', '2-7', 'El mejor equipo de hockey', '2006-09-12');

-- Volcando estructura para tabla leaguedb.jugador
CREATE TABLE IF NOT EXISTS `jugador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `numero` int NOT NULL,
  `equipo_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipo_id` (`equipo_id`),
  CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`equipo_id`) REFERENCES `equipos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla leaguedb.jugador: ~3 rows (aproximadamente)
INSERT INTO `jugador` (`id`, `nombre`, `numero`, `equipo_id`) VALUES
	(1, 'Rodriguez', 4, 1),
	(2, 'Felpeto', 18, 2),
	(3, 'Rodrigo', 21, 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
