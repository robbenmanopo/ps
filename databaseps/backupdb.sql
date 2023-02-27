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

-- Dumping structure for table ps.daata_guru
CREATE TABLE IF NOT EXISTS `daata_guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `jk` varchar(1) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int(2) NOT NULL,
  PRIMARY KEY (`id_guru`),
  KEY `FK_daata_guru_mapel` (`id_mapel`),
  KEY `FK_daata_guru_role` (`id_role`),
  CONSTRAINT `FK_daata_guru_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ps.daata_guru: ~0 rows (approximately)
/*!40000 ALTER TABLE `daata_guru` DISABLE KEYS */;
/*!40000 ALTER TABLE `daata_guru` ENABLE KEYS */;

-- Dumping structure for table ps.data_kelas
CREATE TABLE IF NOT EXISTS `data_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_kelas: ~6 rows (approximately)
/*!40000 ALTER TABLE `data_kelas` DISABLE KEYS */;
INSERT INTO `data_kelas` (`id_kelas`, `nama_kelas`) VALUES
	(3, 'X RPL'),
	(5, 'XI RPL'),
	(6, 'XI PBS'),
	(7, 'XII RPL'),
	(8, 'XII PBS');
/*!40000 ALTER TABLE `data_kelas` ENABLE KEYS */;

-- Dumping structure for table ps.data_nilai
CREATE TABLE IF NOT EXISTS `data_nilai` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) NOT NULL,
  `id_kd` int(11) NOT NULL,
  `n_tugas` int(3) DEFAULT NULL,
  `n_harian` int(3) DEFAULT NULL,
  `n_uts` int(3) DEFAULT NULL,
  `n_uas` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `FK_data_nilai_mapel` (`id_mapel`),
  KEY `FK_data_nilai_kd` (`id_kd`),
  CONSTRAINT `FK_data_nilai_data_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_kd` FOREIGN KEY (`id_kd`) REFERENCES `kd` (`id_kd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_nilai: ~0 rows (approximately)
/*!40000 ALTER TABLE `data_nilai` DISABLE KEYS */;
INSERT INTO `data_nilai` (`id_siswa`, `id_mapel`, `id_kd`, `n_tugas`, `n_harian`, `n_uts`, `n_uas`) VALUES
	(2, 1, 2, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `data_nilai` ENABLE KEYS */;

-- Dumping structure for table ps.data_nilai_akhir
CREATE TABLE IF NOT EXISTS `data_nilai_akhir` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) NOT NULL,
  `nilai_akhir` int(3) NOT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `FK_data_nilai_akhir_mapel` (`id_mapel`),
  CONSTRAINT `FK_data_nilai_akhir_data_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_nilai_akhir_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_nilai_akhir: ~0 rows (approximately)
/*!40000 ALTER TABLE `data_nilai_akhir` DISABLE KEYS */;
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
  PRIMARY KEY (`id_siswa`),
  KEY `FK_data_siswa_data_kelas` (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.data_siswa: ~2 rows (approximately)
/*!40000 ALTER TABLE `data_siswa` DISABLE KEYS */;
INSERT INTO `data_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jk`, `tgl_lahir`, `alamat`, `id_kelas`) VALUES
	(2, '2002', 'Dita Leni Ravia', 'P', '2023-02-25', 'Oro-oro waru, Saradan, Madiun', 5);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.kd: ~2 rows (approximately)
/*!40000 ALTER TABLE `kd` DISABLE KEYS */;
INSERT INTO `kd` (`id_kd`, `id_mapel`, `kode_kd`, `deskripsi`) VALUES
	(1, 1, '13.4', 'Struktur Basis Data'),
	(2, 1, '13.2', 'Penyimpanan Awan');
/*!40000 ALTER TABLE `kd` ENABLE KEYS */;

-- Dumping structure for table ps.mapel
CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(30) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_mapel`),
  KEY `FK_mapel_data_kelas` (`id_kelas`),
  CONSTRAINT `FK_mapel_data_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.mapel: ~2 rows (approximately)
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `id_kelas`) VALUES
	(1, 'Basis Data', 5);
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;

-- Dumping structure for table ps.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(2) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(10) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table ps.role: ~2 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id_role`, `nama_role`) VALUES
	(2, 'operator'),
	(4, 'admin');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
