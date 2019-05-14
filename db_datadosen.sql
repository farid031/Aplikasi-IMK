/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 10.1.36-MariaDB : Database - db_dosen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_dosen` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_dosen`;

/*Table structure for table `tbl_dosen` */

DROP TABLE IF EXISTS `tbl_dosen`;

CREATE TABLE `tbl_dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(150) DEFAULT NULL,
  `nidn` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama_dosen` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(70) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(70) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'aktif',
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_dosen` */

insert  into `tbl_dosen`(`id_dosen`,`nama_instansi`,`nidn`,`nip`,`nama_dosen`,`jenis_kelamin`,`tempat_lahir`,`tgl_lahir`,`nik`,`jabatan`,`telpon`,`email`,`prodi`,`pendidikan`,`status`) values 
(1,'071010 Universitas Bhayangkara Surabaya','0002105701','131572400','Dra  ASMIE PONIWATIE M.M.','Perempuan','Ujung Pandang','1957-02-10','20060002105701','Lektor',NULL,NULL,'61201  Manajemen','S-2','aktif'),
(2,'071010 Universitas Bhayangkara Surabaya','0003065405',NULL,'ANNA KURNIANA QOHAR SH, MM','Perempuan','Teluk betung','1954-03-06','20060001065402','Lektor Kepala',NULL,NULL,'61201  Manajemen','S-2','aktif'),
(3,'071010 Universitas Bhayangkara Surabaya','0003085311','132321841','Dr  SADJIJONO  S.H.','Laki-laki','Yogyakarta','1953-03-08','1256040308530000','Guru Besar','81703202093',NULL,'74101  Ilmu Hukum','S-3','aktif'),
(4,'071010 Universitas Bhayangkara Surabaya','0003105708','195710031984032000','SRI PRIYATI  S.H.','Perempuan','Jakarta','1957-03-10','1214114210570000','Lektor Kepala','819900135.00',NULL,'74101  Ilmu Hukum','S-2','aktif'),
(5,'071010 Universitas Bhayangkara Surabaya','0004086401','131861520','HERMA SETIASIH  S.H.','Perempuan','Surabaya','1964-04-08','20060004086401','Lektor','85730322102.00','ve.azzuri@yahoo.com','74101  Ilmu Hukum','S-2','aktif'),
(6,'071010 Universitas Bhayangkara Surabaya','0012038203','198203122005012000','RANI PURBANINGTYAS','Perempuan','Jember','1982-12-03','7371096602820000','Lektor','85749700487.00','raniubhara@gmail.com','55201  Teknik Informatika','S-2','aktif'),
(7,'071010 Universitas Bhayangkara Surabaya','0012057301','197305122005012000','RR ANI DIJAH RAHAJOE ST., M.Cs.','Perempuan','Tuban','1973-12-05','20060012057301','Lektor','81703785447.00','anidrahayu@gmail.com','55201  Teknik Informatika','S-2','aktif'),
(8,'071010 Universitas Bhayangkara Surabaya','0013076302','196307131991031008','Ir  TRI WARDOYO  M.T','Laki-laki','Kediri','1963-07-13','3578031307630000','Lektor','818511124.00','triwardoyo_ubhara@yahoo.co.id','22201  Teknik Sipil','S-2','aktif'),
(9,'071010 Universitas Bhayangkara Surabaya','0015055902','131634515','Drs  MOHAMMAD BALAFIF','Laki-laki','Bondowoso','1959-05-15','20060015055902','Lektor Kepala','81230444797.00','mamakubhara@gmail.com','61101  Manajemen','S-3','aktif'),
(10,'071010 Universitas Bhayangkara Surabaya','0018075102','131476157','Dr. Drs  PRIBADIYONO','Laki-laki','Jember','0000-00-00','20060018075102','Guru Besar','82140445011.00','pribadiyono@yahoo.com','61101  Manajemen','S-3','aktif'),
(11,'071010 Universitas Bhayangkara Surabaya','0019045801','195804191987031008','Dr  PRASETIJO RIJADI  S.H.','Laki-laki','Madiun','0000-00-00','20060019045801','Guru Besar',NULL,'djoko_sumaryanto@yahoo.co.id','74101  Ilmu Hukum','S-3','aktif'),
(12,'071010 Universitas Bhayangkara Surabaya','0020057701','197705202005011008','AMIRULLAH  S.T, M.T','Laki-laki','Sampang','1977-05-20','3578232005770000','Lektor','81949649423','amirullah@ubhara.ac.id','20201  Teknik Elektro','S-2','aktif'),
(13,'071010 Universitas Bhayangkara Surabaya','0019085801','131689062','Drs  MUSRIHA  M.Si, M.Si','Perempuan','Probolinggo','1958-08-19','3578225908580000','Lektor Kepala','811346099.00','ning_musriha@yahoo.com','61101  Manajemen','S-3','aktif'),
(14,'071010 Universitas Bhayangkara Surabaya','0025057001','197005252005011008','Dr  BAMBANG PURWAHYUDI S.T, M.T','Laki-laki','Ngawi','1970-05-25','3515132505700000','Lektor','816508568','bmp_pur@ubhara.ac.id','20201  Teknik Elektro','S-3','aktif'),
(15,'071010 Universitas Bhayangkara Surabaya','0026105502','131914419','MASYHAD  S.E., M.Sc.','Laki-laki','Gresik','1955-10-26','20060026105502','Lektor','8123595665.00','masyhad_ubhara@yahoo.com','62201  Akuntansi','S-2','aktif'),
(16,'071010 Universitas Bhayangkara Surabaya','0027015801',NULL,'Drs  ALI FAHMI  M.Si','Laki-laki','Malang','1958-01-27','20060027015801','Asisten Ahli',NULL,NULL,'63201  Ilmu Administrasi Negara','S-2','aktif'),
(17,'071010 Universitas Bhayangkara Surabaya','0028127003','197012282005011008','Dr  MOHAMMAD GHOZI  S.T, M.T','Laki-laki','Surabaya','1970-12-28','3578092812700000','Lektor','8123118362.00','mghozi@ubhara.ac.id','22201  Teknik Sipil','S-3','aktif'),
(18,'071010 Universitas Bhayangkara Surabaya','0029045901','195904291988112000','Ir  KUSPIJANI  M.M.','Perempuan','Ngawi','1959-04-29','20060029045901','Lektor','81330521750.00','kuspijani1959@gmail.com','20201  Teknik Elektro','S-2','aktif'),
(19,'071010 Universitas Bhayangkara Surabaya','0701017105',NULL,'MOCHAMAT BUSRO','Laki-laki','Bojonegoro','1971-01-01','3275030101710050',NULL,NULL,NULL,'61201  Manajemen','S-2','aktif'),
(20,'071010 Universitas Bhayangkara Surabaya','0701035902',NULL,'MARWANDI','Laki-laki','Padang','1959-01-03','3578220103590000',NULL,NULL,NULL,'62201  Akuntansi','S-2','aktif'),
(21,'071010 Universitas Bhayangkara Surabaya','0701056810',NULL,'ANNA EKOWATI','Perempuan','Yogyakarta','1968-01-05','3515174105680000',NULL,NULL,NULL,'74201  Ilmu Hukum','S-2','aktif'),
(22,'071010 Universitas Bhayangkara Surabaya','0701076602',NULL,'Dra  RATNA SETYARAHAJOE M.Si','Perempuan','Surabaya','1966-01-07','3515134107660000','Lektor','82245555975.00','ratna@ubhara.ac.id','70201  Ilmu Komunikasi','S-2','aktif'),
(23,'071010 Universitas Bhayangkara Surabaya','0701095502',NULL,'WITRIYANTO','Laki-laki','Cirebon','1955-01-09','3578130109550000',NULL,NULL,NULL,'62201  Akuntansi','S-2','aktif'),
(24,'071010 Universitas Bhayangkara Surabaya','0701097803',NULL,'RIFKI FAHRIAL ZAINAL  S.T','Laki-laki','Surabaya','1978-01-09','1256040109780000','Asisten Ahli','(031) 8285602','rifkifz@gmail.com','55201  Teknik Informatika','S-2','aktif'),
(25,'071010 Universitas Bhayangkara Surabaya','0702016703',NULL,'THOHURI','Laki-laki','Bojonegoro','1967-02-01','3578220201670000',NULL,NULL,NULL,'61201  Manajemen','S-2','aktif'),
(26,'071010 Universitas Bhayangkara Surabaya','0702057303',NULL,'ADI ANANDA  S.T, M.Cs','Laki-laki','Nganjuk','1973-02-05','1214160205730000','Asisten Ahli','087851970033/08','adi.dirza@gmail.com','20201  Teknik Elektro','S-2','aktif'),
(27,'071010 Universitas Bhayangkara Surabaya','0702086302',NULL,'HERMAN MOEIS','Laki-laki','Pare-Pare','1963-02-08','200602081963','Lektor',NULL,NULL,'63201  Ilmu Administrasi Negara','S-1','aktif'),
(28,'071010 Universitas Bhayangkara Surabaya','0702097901',NULL,'NURUL IMAN  SE., M.Si','Laki-laki','Surabaya','1979-09-02','1256200209790000','Asisten Ahli',NULL,'nuruliman_ubr@yahoo.com','61201  Manajemen','S-2','aktif'),
(29,'071010 Universitas Bhayangkara Surabaya','0702117204',NULL,'PRIMADI SETIAWAN','Laki-laki','Surabaya','1972-02-11','3578080211720000',NULL,NULL,NULL,'55201  Teknik Informatika','S-2','aktif'),
(30,'071010 Universitas Bhayangkara Surabaya','0703018602',NULL,'AGNES EKO WULANDARI','Perempuan','Banjarmasin','1986-03-01','3503124301860000',NULL,NULL,NULL,'74201  Ilmu Hukum','S-2','aktif'),
(31,'071010 Universitas Bhayangkara Surabaya','0703026301',NULL,'Dr. Dra  ITA KUSUMA MAHENDRAWATI  M.Si','Perempuan','Yogyakarta','1963-03-02','3578184302630000','Lektor Kepala','81332785513.00','itakusuma67@yahoo.com','70201  Ilmu Komunikasi','S-3','aktif'),
(32,'071010 Universitas Bhayangkara Surabaya','0703058102',NULL,'RUDY CAHYADI HARIO PRIBADI  M.Kom','Laki-laki','Surabaya','1981-03-05','3515140305810000',NULL,NULL,NULL,'55201  Teknik Informatika','S-2','aktif'),
(33,'071010 Universitas Bhayangkara Surabaya','0703058103',NULL,'JOENAEDI EFENDI','Laki-laki','Bondowoso','1981-03-05','3515020305810000','Asisten Ahli','81230444797.00','jependi99@gmail.com','74201  Ilmu Hukum','S-2','aktif'),
(34,'071010 Universitas Bhayangkara Surabaya','0703086802','9800072','Dra  MUSLICHAH ERMA WIDIANA  M.M., M.M.','Perempuan','Boyolali','1968-03-09','1214114309680000','Lektor','817328320.00','widiandra08@yahoo.co.id','61101  Manajemen','S-3','aktif'),
(35,'071010 Universitas Bhayangkara Surabaya','0703106403',NULL,'SITI ROSYAFAH  S.E., M.M.','Perempuan','Surabaya','1964-03-10','99031019642007','Asisten Ahli','81342408964.00','sitirosyafah91@yahoo.com','62201  Akuntansi','S-2','aktif'),
(36,'071010 Universitas Bhayangkara Surabaya','0703128204',NULL,'DIANA RAPITASARI  S.E.','Perempuan','Surabaya','1982-03-12','3578264312820000',NULL,'818315993.00','dianarapitasari@gmail.com','61201  Manajemen','S-2','aktif'),
(37,'071010 Universitas Bhayangkara Surabaya','0704057201',NULL,'FARAH NAJA  ST., MT.','Perempuan','Pamekasan','1972-04-05','1256134405720000','Lektor',NULL,NULL,'22201  Teknik Sipil','S-2','aktif'),
(38,'071010 Universitas Bhayangkara Surabaya','0704117101',NULL,'INDAH NOVIANDARI  S.E., M.Si','Perempuan','Surabaya','1971-04-11','1256224411710000','Asisten Ahli','82131419349.00','ratnaubhara@gmail.com','61201  Manajemen','S-2','aktif'),
(39,'071010 Universitas Bhayangkara Surabaya','0704127202',NULL,'WIDYA SUSANTI  S.E.','Perempuan','Mojokerto','1972-04-12','121611041272048992',NULL,'81332261061.00','galuh_dita_naufal@yahoo.co.id','62201  Akuntansi','S-1','aktif'),
(40,'071010 Universitas Bhayangkara Surabaya','0705058305',NULL,'ACIS MAIDY MUSPA','Perempuan','Bontang','1983-05-05','6474010505830000',NULL,NULL,NULL,'55201  Teknik Informatika','S-2','aktif'),
(41,'071010 Universitas Bhayangkara Surabaya','0705077202',NULL,'JULI NURANI','Perempuan','Lamongan','1972-05-07','3578024507720000',NULL,'85730113567.00','Juliarani49@yahoo.co.id','74201  Ilmu Hukum','S-2','aktif'),
(42,'071010 Universitas Bhayangkara Surabaya','0705077608',NULL,'RUCHAN SANUSI  S.E., M.M','Laki-laki','Kediri','1976-05-07','3515330507760000',NULL,NULL,NULL,'61201  Manajemen','S-2','aktif'),
(43,'071010 Universitas Bhayangkara Surabaya','0705087302',NULL,'SYAFI I  S.E.','Laki-laki','Lamongan','1973-05-08','3515160508730000','Lektor','81230624347.00','bp.bang.pi.i@gmail.com','62201  Akuntansi','S-2','aktif'),
(44,'071010 Universitas Bhayangkara Surabaya','0706038604',NULL,'ANTON ISMU PRABOWO S.H, M.H','Laki-laki','Surabaya','1986-06-03','3578030603860000',NULL,NULL,NULL,'74201  Ilmu Hukum','S-2','aktif'),
(45,'071010 Universitas Bhayangkara Surabaya','0706077106',NULL,'JULYANTO EKANTORO','Laki-laki','Surabaya','1971-06-07','3515150607710000',NULL,'81333975999.00','anto.ekantoro@gmail.com','70201  Ilmu Komunikasi','S-2','aktif'),
(46,'071010 Universitas Bhayangkara Surabaya','0706088003',NULL,'FITRIA WIDIYANI ROOSINDA  S.Sos, M.Si','Perempuan','Surabaya','1980-06-08','3578264608800000','Asisten Ahli','818317137.00','roosinda_v3@yahoo.com','70201  Ilmu Komunikasi','S-2','aktif'),
(47,'071010 Universitas Bhayangkara Surabaya','0706108803',NULL,'HERTI MIAWARNI  S.T, M.T','Perempuan','Sidoarjo','1988-06-10','3515174610880000','Asisten Ahli','0856 4552 9090','herti_mia@ubhara.ac.id','20201  Teknik Elektro','S-2','aktif'),
(48,'071010 Universitas Bhayangkara Surabaya','0707015401',NULL,'Ir  PRIHASTONO  M.T','Laki-laki','Makasar','1954-07-01','1256130701540000','Lektor','8121652194.00','prihastono@ubhara.ac.id','20201  Teknik Elektro','S-2','aktif'),
(49,'071010 Universitas Bhayangkara Surabaya','0707026805',NULL,'ALI MAHMUD','Laki-laki','Sidoarjo','1968-07-02','3515180702680000',NULL,'031-34874745',NULL,'60201  Ekonomi Pembangunan','S-2','aktif'),
(50,'071010 Universitas Bhayangkara Surabaya','0707027304',NULL,'SUMARTINI','Perempuan','Magetan','1973-07-02','1214144702730000',NULL,NULL,NULL,'74201  Ilmu Hukum','S-2','aktif'),
(51,'071010 Universitas Bhayangkara Surabaya','0707055701',NULL,'Drs  ABDUL FATTAH  M.Si','Laki-laki','Gresik','1957-07-05','20060707055701','Lektor','81230810220.00','fattahabdul867@yahoo.com','60201  Ekonomi Pembangunan','S-2','aktif'),
(52,'071010 Universitas Bhayangkara Surabaya','0707076706',NULL,'SUGIJANTO  ','Laki-laki','Nganjuk','1967-07-07','3515070707670000',NULL,NULL,NULL,'62201  Akuntansi','S-2','aktif'),
(53,'071010 Universitas Bhayangkara Surabaya','0707086503',NULL,'AGUS MAHMUDI  S.T, M.T','Laki-laki','Sidoarjo','1965-07-08','1214110708650000','Lektor','8123566580.00','agus_ubhara@yahoo.co.id','22201  Teknik Sipil','S-2','aktif'),
(54,'071010 Universitas Bhayangkara Surabaya','0707097103',NULL,'TEDDY WISHADI  ','Laki-laki','Cianjur','1971-07-09','7373020709717250',NULL,NULL,NULL,'55201  Teknik Informatika','S-2','aktif'),
(55,'071010 Universitas Bhayangkara Surabaya','0707126404',NULL,'I WAYAN SELAMET  ','Laki-laki','Gianyar','1964-07-12','3579030712640000',NULL,NULL,NULL,'61201  Manajemen','S-2','aktif'),
(56,'071010 Universitas Bhayangkara Surabaya','0708015801',NULL,'SOEDJARI AMARI  S.H.','Laki-laki','Surabaya','1958-08-01','20060708015801','Asisten Ahli','318549908.00',NULL,'74201  Ilmu Hukum','S-2','aktif'),
(57,'071010 Universitas Bhayangkara Surabaya','0708047401',NULL,'ALI RASYIDI  S.E.','Laki-laki','Surabaya','1974-08-04','1256050804740000','Asisten Ahli',NULL,NULL,'62201  Akuntansi','S-2','aktif'),
(58,'071010 Universitas Bhayangkara Surabaya','0708047503',NULL,'MOCHAMAD RIDWAN  ','Laki-laki','Surabaya','1975-08-04','3578100804750000',NULL,NULL,NULL,'61201  Manajemen','S-2','aktif'),
(59,'071010 Universitas Bhayangkara Surabaya','0708086204',NULL,'Drs.  SUWADJI  M.M.','Laki-laki','Kediri','1962-08-08','1214140808620000',NULL,NULL,NULL,'61201  Manajemen','S-2','aktif'),
(60,'071010 Universitas Bhayangkara Surabaya','0708098303',NULL,'JAMIL','Laki-laki','Madura','1983-08-09','35150809830002','Asisten Ahli','81216907583.00','jamiljurist@gmail.com','74201  Ilmu Hukum','S-2','aktif'),
(61,'071010 Universitas Bhayangkara Surabaya','0708128803',NULL,'AHMAD FAZA AZMI  S.T, M.T','Laki-laki','Surabaya','1988-08-12','3578100812880000',NULL,NULL,NULL,'22201  Teknik Sipil','S-2','aktif'),
(62,'071010 Universitas Bhayangkara Surabaya','0709068304',NULL,'IKA KHARISMAWATI  S.E.','Perempuan','Probolinggo','1983-09-06','3515184906830010',NULL,NULL,NULL,'61201  Manajemen','S-2','aktif'),
(63,'071010 Universitas Bhayangkara Surabaya','0710036702',NULL,'A DJOKO SUMARYANTO S.H.','Laki-laki','Surabaya','1967-10-03','200610031967','Lektor Kepala','8165403680.00','djoko_sumaryanto@yahoo.co.id','74201  Ilmu Hukum','S-3','aktif'),
(64,'071010 Universitas Bhayangkara Surabaya','0710066004',NULL,'YAHMAN','Laki-laki','Mojokerto','1960-10-06','3515081006600010',NULL,NULL,NULL,'74201  Ilmu Hukum','S-3','aktif'),
(65,'071010 Universitas Bhayangkara Surabaya','0710086701',NULL,'Dra  L TRI LESTARI  M.Si','Perempuan','Surabaya','1967-10-08','1214165008670000','Lektor','81357222795.00','trilest15@ubhara.ac.id','62201  Akuntansi','S-2','aktif'),
(66,'071010 Universitas Bhayangkara Surabaya','0710038104',NULL,'ISKANDAR','Laki-laki','Gresik','1981-10-03','3525131003810000',NULL,NULL,NULL,'61201  Manajemen','S-2','aktif'),
(67,'071010 Universitas Bhayangkara Surabaya','0710087001',NULL,'WAHYU TRIS HARYADI S.H., M.H','Laki-laki','Surabaya','1970-10-08','1256201008700000',NULL,NULL,NULL,'74201  Ilmu Hukum','S-2','aktif'),
(68,'071010 Universitas Bhayangkara Surabaya','0710096101',NULL,'Drs  NURUL QOMARI  M.Si','Laki-laki','Sidoarjo','1961-10-09','20060710096101','Lektor','81703741522.00','sawitrikintamani@yahoo.co.id','61201  Manajemen','S-2','aktif'),
(69,'071010 Universitas Bhayangkara Surabaya','0711028303',NULL,'IRIN MUHAJIRIN  ','Perempuan','Karang Ampel','1983-11-02','3212101102830000',NULL,NULL,NULL,'55201  Teknik Informatika','S-2','aktif'),
(70,'071010 Universitas Bhayangkara Surabaya','0711046901',NULL,'ITA NURLITA  S.Sos, M.Med.Kom','Perempuan','Bogor','1969-11-04','3515085104690000','Asisten Ahli','81330967111.00','itanurlita@ymail.com','70201  Ilmu Komunikasi','S-2','aktif');

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` text,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_login` */

insert  into `tbl_login`(`id_user`,`username`,`password`,`level`) values 
(1,'admin','ce064808d3589e5978a7fa4a55fa2449',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
