-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ps
CREATE DATABASE IF NOT EXISTS `ps` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ps`;

-- Dumping structure for table ps.data_guru
CREATE TABLE IF NOT EXISTS `data_guru` (
  `id_guru` int NOT NULL AUTO_INCREMENT,
  `jk` varchar(1) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `id_mapel` int NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int NOT NULL,
  PRIMARY KEY (`id_guru`),
  KEY `FK_daata_guru_mapel` (`id_mapel`),
  KEY `FK_daata_guru_role` (`id_role`),
  CONSTRAINT `FK_daata_guru_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  CONSTRAINT `FK_data_guru_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_guru: ~0 rows (approximately)
INSERT INTO `data_guru` (`id_guru`, `jk`, `nama_guru`, `id_mapel`, `username`, `password`, `id_role`) VALUES
	(1, 'L', 'Ipnu Masyaid', 1, 'Ipnu', '12345', 2),
	(2, 'L', 'Admin', 1, 'Admin', '12345', 1),
	(3, 'L', 'Manager', 1, 'Manager', '12345', 3),
	(6, 'L', 'Ipnu Masyaid', 8, 'operator', 'admin', 2);

-- Dumping structure for table ps.data_kelas
CREATE TABLE IF NOT EXISTS `data_kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_kelas: ~5 rows (approximately)
INSERT INTO `data_kelas` (`id_kelas`, `nama_kelas`) VALUES
	(1, 'X RPL'),
	(2, 'X PBS'),
	(3, 'XI RPL'),
	(4, 'XI PBS'),
	(5, 'XII RPL'),
	(6, 'XII PBS');

-- Dumping structure for table ps.data_nilai
CREATE TABLE IF NOT EXISTS `data_nilai` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `id_mapel` int NOT NULL,
  `id_kd` int NOT NULL,
  `n_tugas` int DEFAULT NULL,
  `n_harian` int DEFAULT NULL,
  `n_uts` int DEFAULT NULL,
  `n_uas` int DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `FK_data_nilai_mapel` (`id_mapel`),
  KEY `FK_data_nilai_kd` (`id_kd`),
  CONSTRAINT `FK_data_nilai_data_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_kd` FOREIGN KEY (`id_kd`) REFERENCES `kd` (`id_kd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_nilai: ~0 rows (approximately)
INSERT INTO `data_nilai` (`id_siswa`, `id_mapel`, `id_kd`, `n_tugas`, `n_harian`, `n_uts`, `n_uas`) VALUES
	(2, 1, 2, NULL, NULL, NULL, NULL);

-- Dumping structure for table ps.data_nilai_akhir
CREATE TABLE IF NOT EXISTS `data_nilai_akhir` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `id_mapel` int NOT NULL,
  `nilai_akhir` int NOT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `FK_data_nilai_akhir_mapel` (`id_mapel`),
  CONSTRAINT `FK_data_nilai_akhir_data_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_akhir_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_nilai_akhir: ~0 rows (approximately)

-- Dumping structure for table ps.data_siswa
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `id_kelas` int NOT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `FK_data_siswa_data_kelas` (`id_kelas`),
  CONSTRAINT `FK_data_siswa_data_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_siswa: ~0 rows (approximately)
INSERT INTO `data_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jk`, `tgl_lahir`, `alamat`, `id_kelas`) VALUES
	(2, '2002', 'Dita Leni Ravia', 'P', '2023-02-25', 'Oro-oro waru, Saradan, Madiun', 1),
	(3, '2003', 'Tony Stark', 'L', '2023-02-01', 'MCU', 3);

-- Dumping structure for table ps.kd
CREATE TABLE IF NOT EXISTS `kd` (
  `id_kd` int NOT NULL AUTO_INCREMENT,
  `id_mapel` int NOT NULL,
  `kode_kd` varchar(5) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kd`),
  KEY `FK_kd_mapel` (`id_mapel`),
  CONSTRAINT `FK_kd_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.kd: ~2 rows (approximately)
INSERT INTO `kd` (`id_kd`, `id_mapel`, `kode_kd`, `deskripsi`) VALUES
	(1, 1, '13.4', 'Struktur Basis Data'),
	(2, 1, '13.2', 'Penyimpanan Awan');

-- Dumping structure for table ps.mapel
CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(30) NOT NULL,
  `id_kelas` int NOT NULL,
  PRIMARY KEY (`id_mapel`),
  KEY `FK_mapel_data_kelas` (`id_kelas`),
  CONSTRAINT `FK_mapel_data_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.mapel: ~0 rows (approximately)
INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `id_kelas`) VALUES
	(1, 'Basis Data', 3),
	(2, 'Admin', 1),
	(3, 'Operator', 1),
	(4, 'Matematika', 1),
	(7, 'Bahasa Indonesia', 1),
	(8, 'Basis Data', 5);

-- Dumping structure for table ps.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(10) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.role: ~2 rows (approximately)
INSERT INTO `role` (`id_role`, `nama_role`) VALUES
	(1, 'admin'),
	(2, 'operator'),
	(3, 'manager');

-- Dumping structure for view ps.view_guru
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_guru` (
	`id_kelas` INT(10) NOT NULL,
	`id_mapel` INT(10) NOT NULL,
	`id_guru` INT(10) NOT NULL,
	`jk` VARCHAR(1) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_guru` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`username` VARCHAR(15) NOT NULL COLLATE 'latin1_swedish_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_role` INT(10) NOT NULL,
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_kd
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_kd` (
	`id_kelas` INT(10) NOT NULL,
	`id_mapel` INT(10) NOT NULL,
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_kd` INT(10) NOT NULL,
	`kode_kd` VARCHAR(5) NOT NULL COLLATE 'latin1_swedish_ci',
	`deskripsi` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_mapel
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_mapel` (
	`id_kelas` INT(10) NOT NULL,
	`id_mapel` INT(10) NOT NULL,
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_siswa
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_siswa` (
	`id_kelas` INT(10) NOT NULL,
	`id_siswa` INT(10) NOT NULL,
	`nis` VARCHAR(15) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_siswa` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`jk` VARCHAR(1) NOT NULL COLLATE 'latin1_swedish_ci',
	`tgl_lahir` DATE NOT NULL,
	`alamat` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_user
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_user` (
	`id_role` INT(10) NOT NULL,
	`id_guru` INT(10) NOT NULL,
	`jk` VARCHAR(1) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_guru` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_mapel` INT(10) NOT NULL,
	`username` VARCHAR(15) NOT NULL COLLATE 'latin1_swedish_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_role` VARCHAR(10) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_guru
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_guru`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_guru` AS select `mapel`.`id_kelas` AS `id_kelas`,`data_guru`.`id_mapel` AS `id_mapel`,`data_guru`.`id_guru` AS `id_guru`,`data_guru`.`jk` AS `jk`,`data_guru`.`nama_guru` AS `nama_guru`,`data_guru`.`username` AS `username`,`data_guru`.`password` AS `password`,`data_guru`.`id_role` AS `id_role`,`mapel`.`nama_mapel` AS `nama_mapel`,`data_kelas`.`nama_kelas` AS `nama_kelas` from ((`data_guru` join `mapel` on((`data_guru`.`id_mapel` = `mapel`.`id_mapel`))) join `data_kelas` on((`mapel`.`id_kelas` = `data_kelas`.`id_kelas`)));

-- Dumping structure for view ps.view_kd
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_kd`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_kd` AS select `mapel`.`id_kelas` AS `id_kelas`,`mapel`.`id_mapel` AS `id_mapel`,`mapel`.`nama_mapel` AS `nama_mapel`,`kd`.`id_kd` AS `id_kd`,`kd`.`kode_kd` AS `kode_kd`,`kd`.`deskripsi` AS `deskripsi`,`data_kelas`.`nama_kelas` AS `nama_kelas` from ((`mapel` join `kd` on((`mapel`.`id_mapel` = `kd`.`id_mapel`))) join `data_kelas` on((`mapel`.`id_kelas` = `data_kelas`.`id_kelas`)));

-- Dumping structure for view ps.view_mapel
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_mapel`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_mapel` AS select `mapel`.`id_kelas` AS `id_kelas`,`mapel`.`id_mapel` AS `id_mapel`,`mapel`.`nama_mapel` AS `nama_mapel`,`data_kelas`.`nama_kelas` AS `nama_kelas` from (`mapel` join `data_kelas` on((`mapel`.`id_kelas` = `data_kelas`.`id_kelas`)));

-- Dumping structure for view ps.view_siswa
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_siswa`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_siswa` AS select `data_siswa`.`id_kelas` AS `id_kelas`,`data_siswa`.`id_siswa` AS `id_siswa`,`data_siswa`.`nis` AS `nis`,`data_siswa`.`nama_siswa` AS `nama_siswa`,`data_siswa`.`jk` AS `jk`,`data_siswa`.`tgl_lahir` AS `tgl_lahir`,`data_siswa`.`alamat` AS `alamat`,`data_kelas`.`nama_kelas` AS `nama_kelas` from (`data_siswa` join `data_kelas` on((`data_siswa`.`id_kelas` = `data_kelas`.`id_kelas`)));

-- Dumping structure for view ps.view_user
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_user`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_user` AS select `data_guru`.`id_role` AS `id_role`,`data_guru`.`id_guru` AS `id_guru`,`data_guru`.`jk` AS `jk`,`data_guru`.`nama_guru` AS `nama_guru`,`data_guru`.`id_mapel` AS `id_mapel`,`data_guru`.`username` AS `username`,`data_guru`.`password` AS `password`,`role`.`nama_role` AS `nama_role` from (`data_guru` join `role` on((`data_guru`.`id_role` = `role`.`id_role`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
