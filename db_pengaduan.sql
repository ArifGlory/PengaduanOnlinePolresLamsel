/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.5-10.1.21-MariaDB : Database - db_pengaduan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pengaduan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_pengaduan`;

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `hak_akses` enum('S','A') DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`id`,`nama`,`email`,`password`,`hak_akses`) values (1,'SiPahitLidah','lamsel@gmail.com','123','S');

/*Table structure for table `tb_kejahatan` */

DROP TABLE IF EXISTS `tb_kejahatan`;

CREATE TABLE `tb_kejahatan` (
  `id_kejahatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kejahatan` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kejahatan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kejahatan` */

insert  into `tb_kejahatan`(`id_kejahatan`,`nama_kejahatan`,`foto`) values (1,'Pencurian','pencurian.jpg'),(2,'Pembunuhan','pembunuhan.png'),(3,'Korupsi','korupsi.jpg'),(4,'Pemerkosaan',NULL),(5,'Perampokan','perampokan.jpg'),(6,'Narkoba','narkoba.jpg'),(7,'Cyber Crime','cybercrime.jpg'),(8,'Pemerasan','pemerasan.jpg'),(9,'Pencurian Kendaraan','pencuriankendaraan.jpg'),(10,'Perjudian','perjudian.jpg'),(11,'Kenakalan Remaja','kenakalanremaja.jpg'),(12,'Penculikan','penculikan.jpg'),(13,'Penipuan','penipuan.jpg'),(14,'Penganiyaan','penganiyaan.png');

/*Table structure for table `tb_pengaduan` */

DROP TABLE IF EXISTS `tb_pengaduan`;

CREATE TABLE `tb_pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengaduan` varchar(50) DEFAULT NULL,
  `kode_pengaduan` varchar(10) DEFAULT NULL,
  `id_kejahatan` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tempat_kejadian` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pukul` varchar(5) DEFAULT NULL,
  `isKorban` enum('Y','T') DEFAULT 'Y',
  `orang_dilaporkan` varchar(35) DEFAULT NULL,
  `deskripsi` text,
  `status` enum('M','P','T','S') DEFAULT 'M',
  PRIMARY KEY (`id_pengaduan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengaduan` */

insert  into `tb_pengaduan`(`id_pengaduan`,`nama_pengaduan`,`kode_pengaduan`,`id_kejahatan`,`id_user`,`tempat_kejadian`,`tanggal`,`pukul`,`isKorban`,`orang_dilaporkan`,`deskripsi`,`status`) values (1,'Pencurian tas','JS7385',1,1,'Kalianda','2019-01-23','14:05','Y',NULL,'Ketika saya ketiduran di masjid, tas saya sudah hilang','M');

/*Table structure for table `tb_saksi` */

DROP TABLE IF EXISTS `tb_saksi`;

CREATE TABLE `tb_saksi` (
  `id_saksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengaduan` int(11) DEFAULT NULL,
  `nama_saksi` varchar(40) DEFAULT NULL,
  `umur_saksi` varbinary(3) DEFAULT NULL,
  `pekerjaan_saksi` varchar(30) DEFAULT NULL,
  `alamat_saksi` text,
  PRIMARY KEY (`id_saksi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_saksi` */

insert  into `tb_saksi`(`id_saksi`,`id_pengaduan`,`nama_saksi`,`umur_saksi`,`pekerjaan_saksi`,`alamat_saksi`) values (1,1,'Rena','20','Jurnalis','Kedaton\r\n'),(2,1,'John','35','Pembalap','Jl. ZA Pagar Alam');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`email`,`password`,`nama_user`,`pekerjaan`,`alamat`) values (1,'azalea@gmail.com','123','Azalea','Arsitek','Bandarlampung');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
