-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ps
CREATE DATABASE IF NOT EXISTS `ps` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ps`;

-- Dumping structure for table ps.data_guru
CREATE TABLE IF NOT EXISTS `data_guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_guru`),
  KEY `FK_daata_guru_mapel` (`id_mapel`),
  KEY `FK_daata_guru_role` (`id_role`),
  CONSTRAINT `FK_daata_guru_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  CONSTRAINT `FK_data_guru_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_guru: ~6 rows (approximately)
DELETE FROM `data_guru`;
/*!40000 ALTER TABLE `data_guru` DISABLE KEYS */;
INSERT INTO `data_guru` (`id_guru`, `nik`, `jk`, `nama_guru`, `id_mapel`, `username`, `password`, `id_role`) VALUES
	(1, '3000', 'L', 'Ipnu Masyaid', 1, 'Ipnu', '12345', 2),
	(2, '1000', 'L', 'Admin', 1, 'Admin', '12345', 1),
	(3, '2000', 'L', 'Manager', 1, 'Manager', '12345', 3),
	(6, '3000', 'L', 'Ipnu Masyaid', 8, 'operator', 'admin', 2),
	(7, '3001', 'L', 'Tri Agung Priambodo', 7, 'agung', '12345', 2),
	(8, '3002', 'L', 'Tri Agung Priambodo', 9, 'Agung', '12345', 2);
/*!40000 ALTER TABLE `data_guru` ENABLE KEYS */;

-- Dumping structure for table ps.data_kelas
CREATE TABLE IF NOT EXISTS `data_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_kelas: ~6 rows (approximately)
DELETE FROM `data_kelas`;
/*!40000 ALTER TABLE `data_kelas` DISABLE KEYS */;
INSERT INTO `data_kelas` (`id_kelas`, `nama_kelas`) VALUES
	(1, 'X RPL'),
	(2, 'X PBS'),
	(3, 'XI RPL'),
	(4, 'XI PBS'),
	(5, 'XII RPL'),
	(6, 'XII PBS');
/*!40000 ALTER TABLE `data_kelas` ENABLE KEYS */;

-- Dumping structure for table ps.data_nilai
CREATE TABLE IF NOT EXISTS `data_nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kd` int(11) NOT NULL,
  `n_tugas` int(11) DEFAULT NULL,
  `n_harian` int(11) DEFAULT NULL,
  `n_uts` int(11) DEFAULT NULL,
  `n_uas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `FK_data_nilai_mapel` (`id_mapel`),
  KEY `FK_data_nilai_kd` (`id_kd`),
  KEY `id_siswa` (`id_siswa`),
  CONSTRAINT `FK_data_nilai_data_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_kd` FOREIGN KEY (`id_kd`) REFERENCES `kd` (`id_kd`) ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_nilai: ~21 rows (approximately)
DELETE FROM `data_nilai`;
/*!40000 ALTER TABLE `data_nilai` DISABLE KEYS */;
INSERT INTO `data_nilai` (`id_nilai`, `id_siswa`, `id_mapel`, `id_kd`, `n_tugas`, `n_harian`, `n_uts`, `n_uas`) VALUES
	(9, 3, 1, 1, 30, 50, 50, 50),
	(10, 5, 1, 1, 30, 60, 60, 60),
	(11, 6, 1, 1, 30, 70, 70, 70),
	(12, 7, 1, 1, 30, 80, 80, 80),
	(13, 8, 1, 1, 30, 90, 90, 90),
	(14, 9, 1, 1, 30, 80, 80, 80),
	(15, 10, 1, 1, 30, 70, 70, 70),
	(51, 3, 1, 2, 30, 30, 30, 30),
	(52, 5, 1, 2, 30, 30, 30, 30),
	(53, 6, 1, 2, 30, 30, 30, 30),
	(54, 7, 1, 2, 30, 30, 30, 30),
	(55, 8, 1, 2, 30, 30, 30, 30),
	(56, 9, 1, 2, 30, 30, 30, 30),
	(57, 10, 1, 2, 30, 30, 30, 30),
	(58, 3, 1, 12, 10, 0, 0, 80),
	(59, 5, 1, 12, 20, 0, 0, 80),
	(60, 6, 1, 12, 30, 0, 0, 80),
	(61, 7, 1, 12, 40, 0, 0, 80),
	(62, 8, 1, 12, 50, 0, 0, 80),
	(63, 9, 1, 12, 60, 0, 0, 80),
	(64, 10, 1, 12, 70, 0, 0, 80);
/*!40000 ALTER TABLE `data_nilai` ENABLE KEYS */;

-- Dumping structure for table ps.data_nilai_akhir
CREATE TABLE IF NOT EXISTS `data_nilai_akhir` (
  `id_na` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nilai_akhir` int(11) NOT NULL,
  PRIMARY KEY (`id_na`),
  KEY `FK_data_nilai_akhir_mapel` (`id_mapel`),
  KEY `id_siswa` (`id_siswa`),
  CONSTRAINT `FK_data_nilai_akhir_data_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_akhir_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_nilai_akhir: ~14 rows (approximately)
DELETE FROM `data_nilai_akhir`;
/*!40000 ALTER TABLE `data_nilai_akhir` DISABLE KEYS */;
INSERT INTO `data_nilai_akhir` (`id_na`, `id_siswa`, `id_mapel`, `nilai_akhir`) VALUES
	(25, 3, 1, 33),
	(26, 5, 1, 36),
	(27, 6, 1, 40),
	(28, 7, 1, 43),
	(29, 8, 1, 46),
	(30, 9, 1, 43),
	(31, 10, 1, 40);
/*!40000 ALTER TABLE `data_nilai_akhir` ENABLE KEYS */;

-- Dumping structure for table ps.data_siswa
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '12345678',
  `id_role` int(1) NOT NULL DEFAULT '4',
  PRIMARY KEY (`id_siswa`),
  KEY `FK_data_siswa_data_kelas` (`id_kelas`),
  CONSTRAINT `FK_data_siswa_data_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_siswa: ~9 rows (approximately)
DELETE FROM `data_siswa`;
/*!40000 ALTER TABLE `data_siswa` DISABLE KEYS */;
INSERT INTO `data_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jk`, `tgl_lahir`, `alamat`, `id_kelas`, `username`, `password`, `id_role`) VALUES
	(2, '2002', 'Dita Leni Ravia', 'P', '2023-02-25', 'Oro-oro waru, Saradan, Madiun', 1, 'dita', '12345678', 4),
	(3, '2003', 'Tony Stark', 'L', '2023-02-01', 'MCU', 3, 'tony', '12345678', 4),
	(4, '2004', 'Hanagaki Takemichi', 'L', '2023-03-11', 'MCU', 4, 'take', '12345678', 4),
	(5, '2005', 'Abid Ainur Rafi', 'L', '2023-02-24', 'Dagangan', 3, 'abid', '12345678', 4),
	(6, '2006', 'Adelin Azizatul Nabfiqah', 'P', '2023-02-02', 'Madiun', 3, 'adel', '12345678', 4),
	(7, '2007', 'Akmal Sukri', 'L', '2023-02-06', 'Madiun', 3, 'akmal', '12345678', 4),
	(8, '2008', 'Ahmad Syaifuddin', 'L', '2023-02-15', 'Madiun', 3, 'syaif', '12345678', 4),
	(9, '2009', 'Ahmad Yahya', 'L', '2023-02-10', 'Madiun', 3, 'yahya', '12345678', 4),
	(10, '2010', 'Ahmad Arbain Nawawi', 'L', '2023-02-18', 'Jambi', 3, 'arbain', '12345678', 4);
/*!40000 ALTER TABLE `data_siswa` ENABLE KEYS */;

-- Dumping structure for table ps.kd
CREATE TABLE IF NOT EXISTS `kd` (
  `id_kd` int(11) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) NOT NULL,
  `kode_kd` varchar(5) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kd`),
  KEY `FK_kd_mapel` (`id_mapel`),
  CONSTRAINT `FK_kd_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.kd: ~7 rows (approximately)
DELETE FROM `kd`;
/*!40000 ALTER TABLE `kd` DISABLE KEYS */;
INSERT INTO `kd` (`id_kd`, `id_mapel`, `kode_kd`, `deskripsi`) VALUES
	(1, 1, '13.4', 'Struktur Basis Data'),
	(2, 1, '13.2', 'Penyimpanan Awan'),
	(4, 7, '55', 'paragraf'),
	(10, 4, '11.2', 'Bilangan bulat'),
	(11, 8, '12.1', 'Database Arsitektur'),
	(12, 1, '5.1', 'Network Architect'),
	(13, 4, '11.2', 'Bilangan desimal');
/*!40000 ALTER TABLE `kd` ENABLE KEYS */;

-- Dumping structure for table ps.mapel
CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(30) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `status_nilai` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_mapel`),
  KEY `FK_mapel_data_kelas` (`id_kelas`),
  CONSTRAINT `FK_mapel_data_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.mapel: ~7 rows (approximately)
DELETE FROM `mapel`;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `id_kelas`, `status_nilai`) VALUES
	(1, 'Basis Data', 3, 1),
	(2, 'Admin', 1, 0),
	(3, 'Operator', 1, 0),
	(4, 'Matematika', 1, 0),
	(7, 'Bahasa Indonesia', 1, 0),
	(8, 'Basis Data', 5, 0),
	(9, 'PPKN', 3, 0);
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;

-- Dumping structure for table ps.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(10) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.role: ~4 rows (approximately)
DELETE FROM `role`;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id_role`, `nama_role`) VALUES
	(1, 'admin'),
	(2, 'operator'),
	(3, 'manager'),
	(4, 'siswa');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table ps.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `FK_user_role` (`id_role`),
  CONSTRAINT `FK_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.user: ~1 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `username`, `password`, `id_role`) VALUES
	(1, 'Abid', '12345', 4);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for view ps.view_guru
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_guru` (
	`id_kelas` INT(11) NOT NULL,
	`id_mapel` INT(11) NOT NULL,
	`id_guru` INT(11) NOT NULL,
	`jk` VARCHAR(1) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_guru` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`username` VARCHAR(15) NOT NULL COLLATE 'latin1_swedish_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_role` INT(11) NOT NULL,
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_kd
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_kd` (
	`id_kelas` INT(11) NOT NULL,
	`id_mapel` INT(11) NOT NULL,
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_kd` INT(11) NOT NULL,
	`kode_kd` VARCHAR(5) NOT NULL COLLATE 'latin1_swedish_ci',
	`deskripsi` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_kd_input
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_kd_input` (
	`id_mapel` INT(11) NOT NULL,
	`id_kd` INT(11) NOT NULL,
	`kode_kd` VARCHAR(5) NOT NULL COLLATE 'latin1_swedish_ci',
	`deskripsi` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_kelas` INT(11) NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_mapel
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_mapel` (
	`id_kelas` INT(11) NOT NULL,
	`id_mapel` INT(11) NOT NULL,
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_mapel_guru
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_mapel_guru` (
	`id_kelas` INT(11) NOT NULL,
	`id_mapel` INT(11) NOT NULL,
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_guru` INT(11) NOT NULL,
	`nik` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`jk` VARCHAR(1) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_guru` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`username` VARCHAR(15) NOT NULL COLLATE 'latin1_swedish_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_role` INT(11) NOT NULL,
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_mapel_proses
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_mapel_proses` (
	`id_mapel` INT(11) NOT NULL,
	`nama_mapel` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_kelas` INT(11) NOT NULL,
	`status_nilai` INT(11) NOT NULL,
	`nama_kelas` VARCHAR(7) NOT NULL COLLATE 'latin1_swedish_ci',
	`nik` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_siswa
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_siswa` (
	`id_kelas` INT(11) NOT NULL,
	`id_siswa` INT(11) NOT NULL,
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
	`id_role` INT(11) NOT NULL,
	`id_guru` INT(11) NOT NULL,
	`nik` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`jk` VARCHAR(1) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_guru` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_mapel` INT(11) NOT NULL,
	`username` VARCHAR(15) NOT NULL COLLATE 'latin1_swedish_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_role` VARCHAR(10) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_user1
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_user1` (
	`id_role` INT(11) NOT NULL,
	`id_user` INT(11) NOT NULL,
	`username` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`nama_role` VARCHAR(10) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ps.view_guru
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_guru`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_guru` AS select `mapel`.`id_kelas` AS `id_kelas`,`data_guru`.`id_mapel` AS `id_mapel`,`data_guru`.`id_guru` AS `id_guru`,`data_guru`.`jk` AS `jk`,`data_guru`.`nama_guru` AS `nama_guru`,`data_guru`.`username` AS `username`,`data_guru`.`password` AS `password`,`data_guru`.`id_role` AS `id_role`,`mapel`.`nama_mapel` AS `nama_mapel`,`data_kelas`.`nama_kelas` AS `nama_kelas` from ((`data_guru` join `mapel` on((`data_guru`.`id_mapel` = `mapel`.`id_mapel`))) join `data_kelas` on((`mapel`.`id_kelas` = `data_kelas`.`id_kelas`))) ;

-- Dumping structure for view ps.view_kd
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_kd`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kd` AS select `mapel`.`id_kelas` AS `id_kelas`,`mapel`.`id_mapel` AS `id_mapel`,`mapel`.`nama_mapel` AS `nama_mapel`,`kd`.`id_kd` AS `id_kd`,`kd`.`kode_kd` AS `kode_kd`,`kd`.`deskripsi` AS `deskripsi`,`data_kelas`.`nama_kelas` AS `nama_kelas` from ((`mapel` join `kd` on((`mapel`.`id_mapel` = `kd`.`id_mapel`))) join `data_kelas` on((`mapel`.`id_kelas` = `data_kelas`.`id_kelas`))) ;

-- Dumping structure for view ps.view_kd_input
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_kd_input`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kd_input` AS select `kd`.`id_mapel` AS `id_mapel`,`kd`.`id_kd` AS `id_kd`,`kd`.`kode_kd` AS `kode_kd`,`kd`.`deskripsi` AS `deskripsi`,`mapel`.`nama_mapel` AS `nama_mapel`,`mapel`.`id_kelas` AS `id_kelas` from (`kd` join `mapel` on((`kd`.`id_mapel` = `mapel`.`id_mapel`))) ;

-- Dumping structure for view ps.view_mapel
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_mapel`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_mapel` AS select `mapel`.`id_kelas` AS `id_kelas`,`mapel`.`id_mapel` AS `id_mapel`,`mapel`.`nama_mapel` AS `nama_mapel`,`data_kelas`.`nama_kelas` AS `nama_kelas` from (`mapel` join `data_kelas` on((`mapel`.`id_kelas` = `data_kelas`.`id_kelas`))) ;

-- Dumping structure for view ps.view_mapel_guru
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_mapel_guru`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_mapel_guru` AS select `mapel`.`id_kelas` AS `id_kelas`,`mapel`.`id_mapel` AS `id_mapel`,`mapel`.`nama_mapel` AS `nama_mapel`,`data_guru`.`id_guru` AS `id_guru`,`data_guru`.`nik` AS `nik`,`data_guru`.`jk` AS `jk`,`data_guru`.`nama_guru` AS `nama_guru`,`data_guru`.`username` AS `username`,`data_guru`.`password` AS `password`,`data_guru`.`id_role` AS `id_role`,`data_kelas`.`nama_kelas` AS `nama_kelas` from ((`mapel` join `data_guru` on((`mapel`.`id_mapel` = `data_guru`.`id_mapel`))) join `data_kelas` on((`mapel`.`id_kelas` = `data_kelas`.`id_kelas`))) order by `data_guru`.`nik` ;

-- Dumping structure for view ps.view_mapel_proses
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_mapel_proses`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_mapel_proses` AS select `mapel`.`id_mapel` AS `id_mapel`,`mapel`.`nama_mapel` AS `nama_mapel`,`mapel`.`id_kelas` AS `id_kelas`,`mapel`.`status_nilai` AS `status_nilai`,`data_kelas`.`nama_kelas` AS `nama_kelas`,`data_guru`.`nik` AS `nik` from ((`mapel` join `data_guru` on((`mapel`.`id_mapel` = `data_guru`.`id_mapel`))) join `data_kelas` on((`mapel`.`id_kelas` = `data_kelas`.`id_kelas`))) ;

-- Dumping structure for view ps.view_siswa
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_siswa`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_siswa` AS select `data_siswa`.`id_kelas` AS `id_kelas`,`data_siswa`.`id_siswa` AS `id_siswa`,`data_siswa`.`nis` AS `nis`,`data_siswa`.`nama_siswa` AS `nama_siswa`,`data_siswa`.`jk` AS `jk`,`data_siswa`.`tgl_lahir` AS `tgl_lahir`,`data_siswa`.`alamat` AS `alamat`,`data_kelas`.`nama_kelas` AS `nama_kelas` from (`data_siswa` join `data_kelas` on((`data_siswa`.`id_kelas` = `data_kelas`.`id_kelas`))) ;

-- Dumping structure for view ps.view_user
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_user`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user` AS select `data_guru`.`id_role` AS `id_role`,`data_guru`.`id_guru` AS `id_guru`,`data_guru`.`nik` AS `nik`,`data_guru`.`jk` AS `jk`,`data_guru`.`nama_guru` AS `nama_guru`,`data_guru`.`id_mapel` AS `id_mapel`,`data_guru`.`username` AS `username`,`data_guru`.`password` AS `password`,`role`.`nama_role` AS `nama_role` from (`data_guru` join `role` on((`data_guru`.`id_role` = `role`.`id_role`))) ;

-- Dumping structure for view ps.view_user1
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_user1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user1` AS select `user`.`id_role` AS `id_role`,`user`.`id_user` AS `id_user`,`user`.`username` AS `username`,`user`.`password` AS `password`,`role`.`nama_role` AS `nama_role` from (`user` join `role` on((`user`.`id_role` = `role`.`id_role`))) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
