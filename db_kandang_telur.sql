/*
 Navicat Premium Data Transfer

 Source Server         : cc
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : db_kandang_telur

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 24/05/2019 14:41:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `admin_username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `admin_password` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `admin_view_password` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `admin_level` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `telephone` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1', '1', '1234567890', 'email.gmail.com', 'Jl. Buntu no.0121');
INSERT INTO `admin` VALUES (2, 'superadmin', 'superadmin', 'ac497cfaba23c4184cb03b97e8c51e0a', 'superadmin123', '2', '1234567890', 'email.gmail.com', 'Jl. Buntu no.0121');

-- ----------------------------
-- Table structure for mainmenu
-- ----------------------------
DROP TABLE IF EXISTS `mainmenu`;
CREATE TABLE `mainmenu`  (
  `seq` int(11) NOT NULL AUTO_INCREMENT,
  `idmenu` int(11) NOT NULL,
  `nama_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon_class` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_akses` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `entry_date` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `entry_user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`seq`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mainmenu
-- ----------------------------
INSERT INTO `mainmenu` VALUES (1, 1, 'Dashboard', '', 'menu-icon fa fa-tachometer', 'Dashboard', '', '2018-11-10 09:20:34', NULL);
INSERT INTO `mainmenu` VALUES (2, 2, 'Master Data', '', 'menu-icon fa fa-database', '#', '', '2019-04-27 03:36:51', NULL);
INSERT INTO `mainmenu` VALUES (3, 3, 'Transaksi Kandang', '', 'menu-icon fa fa-credit-card', '#', '', '2019-04-27 03:48:48', NULL);
INSERT INTO `mainmenu` VALUES (4, 4, 'Gudang', '', 'menu-icon fa fa-book', '#', '', '2019-05-03 01:48:48', '');
INSERT INTO `mainmenu` VALUES (5, 5, 'Customer Order', NULL, 'menu-icon fa fa-arrow-circle-o-down', '#', NULL, '2019-04-27 03:57:38', NULL);
INSERT INTO `mainmenu` VALUES (6, 6, 'Delivery Order', NULL, 'menu-icon fa fa-exchange', '#', NULL, '2019-04-27 04:01:08', NULL);
INSERT INTO `mainmenu` VALUES (25, 9, 'Setup', NULL, 'menu-icon fa fa-cogs', '#', NULL, '2019-05-22 14:39:24', NULL);
INSERT INTO `mainmenu` VALUES (23, 7, 'Invoice', NULL, 'menu-icon fa fa-folder-open', '#', NULL, '2019-04-27 04:52:20', NULL);
INSERT INTO `mainmenu` VALUES (24, 8, 'Finance', NULL, 'menu-icon fa fa-hdd-o', '#', NULL, '2019-04-27 05:09:53', NULL);

-- ----------------------------
-- Table structure for submenu
-- ----------------------------
DROP TABLE IF EXISTS `submenu`;
CREATE TABLE `submenu`  (
  `id_sub` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mainmenu_idmenu` int(11) NOT NULL,
  `active_sub` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon_class` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sub_akses` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `entry_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `entry_user` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_sub`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 29 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of submenu
-- ----------------------------
INSERT INTO `submenu` VALUES (1, 'Master Customer', 2, NULL, NULL, 'M_customer', NULL, '2019-04-27 03:39:45', NULL);
INSERT INTO `submenu` VALUES (2, 'Master Armada', 2, NULL, NULL, 'M_armada', NULL, '2019-04-27 03:40:32', NULL);
INSERT INTO `submenu` VALUES (3, 'Master Gudang', 2, NULL, NULL, 'M_gudang', NULL, '2019-04-27 03:41:28', NULL);
INSERT INTO `submenu` VALUES (4, 'Master Kandang Besar', 2, NULL, NULL, 'M_kandang_besar', NULL, '2019-04-27 03:42:10', NULL);
INSERT INTO `submenu` VALUES (5, 'Master Kandang Kecil', 2, NULL, NULL, 'M_kandang_kecil', NULL, '2019-04-27 03:42:32', NULL);
INSERT INTO `submenu` VALUES (6, 'Master Jenis Telur', 2, NULL, NULL, 'M_jenis_telur', NULL, '2019-04-27 03:43:33', NULL);
INSERT INTO `submenu` VALUES (7, 'Input  Transaksi Telur', 3, NULL, NULL, 'Input_transaksi', NULL, '2019-04-27 03:49:44', NULL);
INSERT INTO `submenu` VALUES (8, 'Transfer Ke Gudang', 3, NULL, NULL, 'Transfer_telur', NULL, '2019-04-27 05:23:00', NULL);
INSERT INTO `submenu` VALUES (9, 'Customer Order', 5, NULL, NULL, 'Customer_order', NULL, '2019-04-27 03:58:30', NULL);
INSERT INTO `submenu` VALUES (10, 'CO Print', 5, NULL, NULL, 'Customer_order/print', NULL, '2019-04-27 03:59:09', NULL);
INSERT INTO `submenu` VALUES (11, 'Customer Order View', 5, NULL, NULL, 'Customer_order/view', NULL, '2019-04-27 03:59:47', NULL);
INSERT INTO `submenu` VALUES (12, 'Delivery Order', 6, NULL, NULL, 'Delivery_order', NULL, '2019-04-27 04:15:32', NULL);
INSERT INTO `submenu` VALUES (13, 'Print Daftar Timbang', 6, NULL, NULL, 'Delivery_order/print', NULL, '2019-05-03 02:23:21', NULL);
INSERT INTO `submenu` VALUES (14, 'View DO', 6, NULL, NULL, 'Delivery_order/view', NULL, '2019-04-27 04:15:24', NULL);
INSERT INTO `submenu` VALUES (15, 'Retur DO', 6, NULL, NULL, 'Delivery_order/retur', NULL, '2019-04-27 04:15:19', NULL);
INSERT INTO `submenu` VALUES (16, 'Invoice', 7, NULL, NULL, 'Invoice', NULL, '2019-04-27 05:07:43', NULL);
INSERT INTO `submenu` VALUES (17, 'Print Invoice', 7, NULL, NULL, 'Invoice/print', NULL, '2019-04-27 05:08:05', NULL);
INSERT INTO `submenu` VALUES (18, 'View Invoice', 7, NULL, NULL, 'Invoice/print', NULL, '2019-04-27 05:08:31', NULL);
INSERT INTO `submenu` VALUES (19, 'Payment', 8, NULL, NULL, 'Payment', NULL, '2019-04-27 05:15:46', NULL);
INSERT INTO `submenu` VALUES (20, 'Transfer Ke Kandang Besar', 3, NULL, NULL, 'Transfer_telur/kandang_besar', NULL, '2019-04-27 05:23:29', NULL);
INSERT INTO `submenu` VALUES (21, 'Validasi Gudang', 4, NULL, NULL, 'Validasi_gudang', NULL, '2019-05-03 06:39:53', NULL);
INSERT INTO `submenu` VALUES (22, 'Mutasi Gudang', 4, NULL, NULL, 'Mutasi_gudang', NULL, '2019-05-03 06:40:03', NULL);
INSERT INTO `submenu` VALUES (23, 'Konfirmasi Mutasi Gudang', 4, NULL, NULL, 'Konfirmasi_mutasi', NULL, '2019-05-06 13:42:21', NULL);
INSERT INTO `submenu` VALUES (24, 'Validasi Ke Kandang Besar', 3, NULL, NULL, 'Transfer_telur/validasi', NULL, '2019-05-07 03:44:01', NULL);
INSERT INTO `submenu` VALUES (25, 'Setting Biaya Tambahan', 9, NULL, NULL, 'BiayaTambahan', NULL, '2019-05-22 14:40:37', NULL);
INSERT INTO `submenu` VALUES (26, 'Setting Jadwal', 9, NULL, NULL, 'SettingJadwal', NULL, '2019-05-22 14:40:37', NULL);

-- ----------------------------
-- Table structure for t_billingdtl
-- ----------------------------
DROP TABLE IF EXISTS `t_billingdtl`;
CREATE TABLE `t_billingdtl`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fd_invdate` date NULL DEFAULT NULL,
  `fd_duedate` date NULL DEFAULT NULL,
  `fm_totalinv` double NULL DEFAULT NULL,
  `fm_value` double NULL DEFAULT NULL,
  `fm_sisa` double NULL DEFAULT NULL,
  `fc_status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_userid` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_tglinput` datetime(0) NULL DEFAULT NULL,
  `fd_billdate` datetime(0) NULL DEFAULT NULL,
  `fv_note` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_billingmst
-- ----------------------------
DROP TABLE IF EXISTS `t_billingmst`;
CREATE TABLE `t_billingmst`  (
  `fc_billno` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fd_billdate` date NULL DEFAULT NULL,
  `fc_kdcust` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fv_nama_bank` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_norek` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_atas_nama_bank` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `f_foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fc_status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_tglinput` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`fc_billno`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_customer
-- ----------------------------
DROP TABLE IF EXISTS `t_customer`;
CREATE TABLE `t_customer`  (
  `fc_kdcust` char(8) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fv_nama` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fv_nama2` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fv_alamat` varchar(75) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fv_alamat2` varchar(75) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fc_telp` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_hp` char(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fv_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fn_top` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`fc_kdcust`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_daftar_timbang
-- ----------------------------
DROP TABLE IF EXISTS `t_daftar_timbang`;
CREATE TABLE `t_daftar_timbang`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_noco` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_nodo` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_berat_telur` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_date` date NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_desa
-- ----------------------------
DROP TABLE IF EXISTS `t_desa`;
CREATE TABLE `t_desa`  (
  `fc_kdkel` int(11) NOT NULL AUTO_INCREMENT,
  `fc_kdprop` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fc_kdkota` char(3) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fc_kdkec` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fc_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_kdkel`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 56 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_desa
-- ----------------------------
INSERT INTO `t_desa` VALUES (1, '15', '715', '01', 'Burengan');
INSERT INTO `t_desa` VALUES (2, '15', '715', '01', 'Pakunden');
INSERT INTO `t_desa` VALUES (3, '15', '715', '01', 'Jamsaren');
INSERT INTO `t_desa` VALUES (4, '15', '715', '01', 'Singonegaran');
INSERT INTO `t_desa` VALUES (5, '15', '715', '01', 'Tinalan');
INSERT INTO `t_desa` VALUES (6, '15', '715', '01', 'Tosaren');
INSERT INTO `t_desa` VALUES (48, '15', '715', '02', 'Ngadirejo');
INSERT INTO `t_desa` VALUES (42, '15', '715', '03', 'Gayam');
INSERT INTO `t_desa` VALUES (9, '15', '715', '01', 'Tamanan');
INSERT INTO `t_desa` VALUES (10, '15', '715', '01', 'Sukorame');
INSERT INTO `t_desa` VALUES (11, '15', '715', '01', 'Blabak');
INSERT INTO `t_desa` VALUES (12, '15', '715', '02', 'Ngronggo');
INSERT INTO `t_desa` VALUES (13, '15', '715', '01', 'Betet');
INSERT INTO `t_desa` VALUES (14, '15', '715', '01', 'Setono Bethek');
INSERT INTO `t_desa` VALUES (15, '15', '715', '02', 'Pakelan');
INSERT INTO `t_desa` VALUES (16, '15', '715', '01', 'Ketami');
INSERT INTO `t_desa` VALUES (17, '15', '715', '02', 'Banjaran');
INSERT INTO `t_desa` VALUES (18, '15', '715', '02', 'Kemasan');
INSERT INTO `t_desa` VALUES (19, '15', '715', '02', 'Balowerti');
INSERT INTO `t_desa` VALUES (20, '15', '715', '02', 'Dandangan');
INSERT INTO `t_desa` VALUES (21, '15', '715', '01', 'Semampir');
INSERT INTO `t_desa` VALUES (22, '15', '715', '01', 'Bangsal');
INSERT INTO `t_desa` VALUES (23, '15', '715', '01', 'Kleco');
INSERT INTO `t_desa` VALUES (24, '15', '715', '01', 'Ngletih');
INSERT INTO `t_desa` VALUES (27, '15', '715', '03', 'Lirboyo');
INSERT INTO `t_desa` VALUES (28, '15', '715', '03', 'Ngampel');
INSERT INTO `t_desa` VALUES (29, '15', '715', '03', 'Bandar Kidul');
INSERT INTO `t_desa` VALUES (30, '15', '715', '03', 'Mrican');
INSERT INTO `t_desa` VALUES (31, '15', '715', '03', 'Dermo');
INSERT INTO `t_desa` VALUES (32, '15', '715', '03', 'Mojoroto');
INSERT INTO `t_desa` VALUES (33, '15', '715', '03', 'Bujel');
INSERT INTO `t_desa` VALUES (34, '15', '715', '03', 'Pojok');
INSERT INTO `t_desa` VALUES (35, '15', '715', '03', 'Sukorame');
INSERT INTO `t_desa` VALUES (36, '15', '715', '03', 'Campurejo');
INSERT INTO `t_desa` VALUES (37, '15', '715', '01', 'Tempurejo');
INSERT INTO `t_desa` VALUES (38, '15', '715', '03', 'Bandar Lor');
INSERT INTO `t_desa` VALUES (39, '15', '715', '01', 'Banaran');
INSERT INTO `t_desa` VALUES (40, '15', '715', '03', 'Banjar Mlati');
INSERT INTO `t_desa` VALUES (41, '15', '715', '01', 'Bawang');
INSERT INTO `t_desa` VALUES (43, '15', '715', '02', 'Jagalan');
INSERT INTO `t_desa` VALUES (44, '15', '715', '02', 'Kaliombo');
INSERT INTO `t_desa` VALUES (45, '15', '715', '02', 'Kampung Dalem');
INSERT INTO `t_desa` VALUES (46, '15', '715', '02', 'Kuwak');
INSERT INTO `t_desa` VALUES (47, '15', '715', '02', 'Manisrenggo');
INSERT INTO `t_desa` VALUES (49, '15', '715', '02', 'Pandean');
INSERT INTO `t_desa` VALUES (50, '15', '715', '01', 'Pesantren');
INSERT INTO `t_desa` VALUES (51, '15', '715', '02', 'Pocanan');
INSERT INTO `t_desa` VALUES (52, '15', '715', '02', 'Rejomulyo');
INSERT INTO `t_desa` VALUES (53, '15', '715', '02', 'Ringinanom');
INSERT INTO `t_desa` VALUES (54, '15', '715', '02', 'Setonogedong');
INSERT INTO `t_desa` VALUES (55, '15', '715', '02', 'SetonoPande');

-- ----------------------------
-- Table structure for t_kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `t_kecamatan`;
CREATE TABLE `t_kecamatan`  (
  `fc_kdkec` int(11) NOT NULL AUTO_INCREMENT,
  `fv_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fc_kdprop` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fc_kdkota` char(3) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_kdkec`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_kecamatan
-- ----------------------------
INSERT INTO `t_kecamatan` VALUES (1, 'PESANTREN', '15', '715');
INSERT INTO `t_kecamatan` VALUES (2, 'KOTA', '15', '715');
INSERT INTO `t_kecamatan` VALUES (3, 'MOJOROTO', '15', '715');
INSERT INTO `t_kecamatan` VALUES (6, 'NGASEM', '15', '062');
INSERT INTO `t_kecamatan` VALUES (7, 'GOGORANTE', '15', '062');
INSERT INTO `t_kecamatan` VALUES (8, 'GURAH', '15', '062');
INSERT INTO `t_kecamatan` VALUES (9, 'WONOASRI', '15', '062');
INSERT INTO `t_kecamatan` VALUES (10, 'BANYAKAN', '15', '062');
INSERT INTO `t_kecamatan` VALUES (11, 'SAMBI', '15', '062');

-- ----------------------------
-- Table structure for t_nomor
-- ----------------------------
DROP TABLE IF EXISTS `t_nomor`;
CREATE TABLE `t_nomor`  (
  `kode` char(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `awalan` char(15) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `akhiran` char(15) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `panjang` int(4) UNSIGNED NULL DEFAULT 0,
  `nomor` int(4) UNSIGNED NULL DEFAULT 0,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of t_nomor
-- ----------------------------
INSERT INTO `t_nomor` VALUES ('PO', 'PO/', NULL, 6, 0);
INSERT INTO `t_nomor` VALUES ('BPB', 'PB/', NULL, 6, 0);
INSERT INTO `t_nomor` VALUES ('SO', 'SO/', NULL, 6, 1);
INSERT INTO `t_nomor` VALUES ('DO', 'DO/', NULL, 6, 0);
INSERT INTO `t_nomor` VALUES ('INVOICE', 'INV/', NULL, 5, 0);
INSERT INTO `t_nomor` VALUES ('CS', 'CS', NULL, 0, 3);

-- ----------------------------
-- Table structure for t_setup
-- ----------------------------
DROP TABLE IF EXISTS `t_setup`;
CREATE TABLE `t_setup`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fc_param` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fc_kode` char(3) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fc_isi` char(200) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 121 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of t_setup
-- ----------------------------
INSERT INTO `t_setup` VALUES (1, 'BANNER', 'A', 'C:\\MUKA\\temp\\banner.jpg');
INSERT INTO `t_setup` VALUES (6, 'LVLUSER', 'A', 'ADMINISTRATOR');
INSERT INTO `t_setup` VALUES (7, 'LVLUSER', 'B', 'OPERATOR');
INSERT INTO `t_setup` VALUES (9, 'LVLUSER', 'D', 'SUPERVISOR');
INSERT INTO `t_setup` VALUES (10, 'LVLUSER', 'E', 'MANAJER');
INSERT INTO `t_setup` VALUES (11, 'MASAKAS', 'A', '201201');
INSERT INTO `t_setup` VALUES (17, 'PJGKODE', 'A', '6');
INSERT INTO `t_setup` VALUES (104, 'RESTOMAX', '', '500');
INSERT INTO `t_setup` VALUES (32, 'WARNAISI', 'A', 'clInfobk');
INSERT INTO `t_setup` VALUES (33, 'WARNAGRID', 'A', 'clMoneyGreen');
INSERT INTO `t_setup` VALUES (34, 'FONTISI', 'A', '8');
INSERT INTO `t_setup` VALUES (35, 'FONTSTYLEISI', '', 'Arial');
INSERT INTO `t_setup` VALUES (36, 'FONTLABEL', '', '9');
INSERT INTO `t_setup` VALUES (37, 'FONTSTYLELABEL', '', 'Arial Rounded MT');
INSERT INTO `t_setup` VALUES (38, 'FONTBOLDLABEL', '', 'Y');
INSERT INTO `t_setup` VALUES (39, 'DIRDUMP', '', 'D:\\xampp\\mysql\\bin\\mysqldump');
INSERT INTO `t_setup` VALUES (40, 'DIRTARGET', '', 'D:\\Data');
INSERT INTO `t_setup` VALUES (102, 'PSW_OPNAME', '', '12345');
INSERT INTO `t_setup` VALUES (101, 'PRINTPAYMODEL', '', 'C');
INSERT INTO `t_setup` VALUES (115, 'FULLBARCODE', '', 'Y');
INSERT INTO `t_setup` VALUES (97, 'KOTA', '', 'KEDIRI');
INSERT INTO `t_setup` VALUES (47, 'VERSI', '', '1.0');
INSERT INTO `t_setup` VALUES (48, 'PATHSHARE', '', 'Z:\\Install MUKA.exe');
INSERT INTO `t_setup` VALUES (49, 'CEKVERSI', '', 'N');
INSERT INTO `t_setup` VALUES (96, 'NPWP', '', NULL);
INSERT INTO `t_setup` VALUES (51, 'DIRPHOTO', '', 'C:\\MUKA\\Photo\\');
INSERT INTO `t_setup` VALUES (52, 'PHOTO_TINGGI', '', '185');
INSERT INTO `t_setup` VALUES (53, 'PHOTO_LEBAR', '', '103');
INSERT INTO `t_setup` VALUES (54, 'DIRTTD', '', 'C:\\MUKA\\Photo\\');
INSERT INTO `t_setup` VALUES (98, 'PERIODE_SO', '', '20161026');
INSERT INTO `t_setup` VALUES (56, 'DIRPHOTO2', '', 'Z:\\');
INSERT INTO `t_setup` VALUES (57, 'DIRTEMP', '', 'C:\\MUKA\\Temp\\');
INSERT INTO `t_setup` VALUES (95, 'EMAIL', '', 'info@muka.com');
INSERT INTO `t_setup` VALUES (94, 'HP', '', NULL);
INSERT INTO `t_setup` VALUES (93, 'TELP', '', '031-');
INSERT INTO `t_setup` VALUES (92, 'ALAMAT', '', 'Jl. Kawi Perum Mojorot Regency A-1');
INSERT INTO `t_setup` VALUES (91, 'NAMA', '', 'PT MUKA');
INSERT INTO `t_setup` VALUES (90, 'BATASCLOSING', '', '20');
INSERT INTO `t_setup` VALUES (89, 'PERSENFEE', '', '15');
INSERT INTO `t_setup` VALUES (88, 'POTONGFEE', '', '2');
INSERT INTO `t_setup` VALUES (87, 'PSW_VOID', '', '1');
INSERT INTO `t_setup` VALUES (81, 'WARNAISI', 'A', 'clInfobk');
INSERT INTO `t_setup` VALUES (82, 'WARNAGRID', 'A', 'clMoneyGreen');
INSERT INTO `t_setup` VALUES (83, 'FONTISI', 'A', '8');
INSERT INTO `t_setup` VALUES (84, 'FONTSTYLEISI', 'A', 'Arial');
INSERT INTO `t_setup` VALUES (85, 'FONTLABEL', 'A', '9');
INSERT INTO `t_setup` VALUES (86, 'FONTBOLDLABEL', 'A', 'Y');
INSERT INTO `t_setup` VALUES (105, 'PERSENJUAL', '', '10');
INSERT INTO `t_setup` VALUES (106, 'REQ_MINDISC', '', '100000000');
INSERT INTO `t_setup` VALUES (107, 'COST_PACKING', '', '5000');
INSERT INTO `t_setup` VALUES (108, 'REPRINT_LIMIT', '', '2');
INSERT INTO `t_setup` VALUES (109, 'JNSCETAK', '', '1');
INSERT INTO `t_setup` VALUES (110, 'FILESTRUK', '', 'C:\\STRUK.TXT');
INSERT INTO `t_setup` VALUES (111, 'PERIODEKAS', '', '201508');
INSERT INTO `t_setup` VALUES (112, 'SALT', '', 'MUKA');
INSERT INTO `t_setup` VALUES (113, 'SMSFOOT', '', 'Terima Kasih');
INSERT INTO `t_setup` VALUES (116, 'BK', '', '2');
INSERT INTO `t_setup` VALUES (117, 'PPN', '', '10');
INSERT INTO `t_setup` VALUES (118, 'BIAYATRAN', 'A1', '100013');
INSERT INTO `t_setup` VALUES (119, 'BIAYAEGG', 'A1', '224442');
INSERT INTO `t_setup` VALUES (120, 'BIAYAPACK', 'A1', '224443');

-- ----------------------------
-- Table structure for t_setups
-- ----------------------------
DROP TABLE IF EXISTS `t_setups`;
CREATE TABLE `t_setups`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biayaegg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `biayapack` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `biayatran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_setups
-- ----------------------------
INSERT INTO `t_setups` VALUES (1, '1000002', '100000000', '102222');

-- ----------------------------
-- Table structure for t_status
-- ----------------------------
DROP TABLE IF EXISTS `t_status`;
CREATE TABLE `t_status`  (
  `fc_param` char(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fc_kode` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fv_value` char(50) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_param`, `fc_kode`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of t_status
-- ----------------------------
INSERT INTO `t_status` VALUES ('POSTS', 'D', 'DO');
INSERT INTO `t_status` VALUES ('POSTS', 'S', 'CO');
INSERT INTO `t_status` VALUES ('POSTS', 'P', 'PRINTED');
INSERT INTO `t_status` VALUES ('POSTS', 'I', 'INPUT');
INSERT INTO `t_status` VALUES ('JNSCUST', 'R', 'RETAIL');
INSERT INTO `t_status` VALUES ('JNSCUST', 'D', 'DISTRIBUTOR');
INSERT INTO `t_status` VALUES ('VCHSTS', 'P', 'PAYMENT');
INSERT INTO `t_status` VALUES ('JNSBAYAR', 'C', 'Cash/Tunai');
INSERT INTO `t_status` VALUES ('JNSBAYAR', 'T', 'Tempo');
INSERT INTO `t_status` VALUES ('SOSTS', 'I', 'INPUT');
INSERT INTO `t_status` VALUES ('QUOTSTS', 'V', 'INVOICE');
INSERT INTO `t_status` VALUES ('CARABYR', 'T', 'Transfer');
INSERT INTO `t_status` VALUES ('CARABYR', 'C', 'Cash');
INSERT INTO `t_status` VALUES ('TAX', 'N', '-');
INSERT INTO `t_status` VALUES ('STATUSPO', 'P', 'PRINTED');
INSERT INTO `t_status` VALUES ('STATUSPO', 'S', 'SEBAGIAN');
INSERT INTO `t_status` VALUES ('STATUSBPB', 'I', 'INPUT');
INSERT INTO `t_status` VALUES ('STATUSBPB', 'F', 'FINAL POST');
INSERT INTO `t_status` VALUES ('PPN', 'I', 'INCLUDE');
INSERT INTO `t_status` VALUES ('PPN', 'E', 'EXCLUDE');
INSERT INTO `t_status` VALUES ('SOSTS', 'V', 'INVOICE');
INSERT INTO `t_status` VALUES ('SOSTS', 'D', 'DO');
INSERT INTO `t_status` VALUES ('SOSTS', 'P', 'PRINTED');
INSERT INTO `t_status` VALUES ('KERJAO', '1', 'PNS Guru / Dosen');
INSERT INTO `t_status` VALUES ('KERJAO', '2', 'PNS Lainnya');
INSERT INTO `t_status` VALUES ('KERJAO', '3', 'TNI / POLRI');
INSERT INTO `t_status` VALUES ('KERJAO', '4', 'Pengush./Wiraswt.');
INSERT INTO `t_status` VALUES ('KERJAO', '5', 'Karyawan Swasta');
INSERT INTO `t_status` VALUES ('KERJAO', '6', 'Petani / Buruh tani');
INSERT INTO `t_status` VALUES ('KERJAO', '7', 'Lainnya');
INSERT INTO `t_status` VALUES ('KERJAOR', '1', 'Pegawai Negeri Sipil');
INSERT INTO `t_status` VALUES ('KERJAOR', '2', 'Peg. Perusahaan Negara');
INSERT INTO `t_status` VALUES ('KERJAOR', '3', 'TNI/POLRI');
INSERT INTO `t_status` VALUES ('KERJAOR', '4', 'Pengusaha/Wiraswasta');
INSERT INTO `t_status` VALUES ('KERJAOR', '5', 'Karyawan Swasta');
INSERT INTO `t_status` VALUES ('KERJAOR', '6', 'Petani / Buruh Tani');
INSERT INTO `t_status` VALUES ('KERJAOR', '7', 'Lainnya');
INSERT INTO `t_status` VALUES ('KERJAOR', '8', 'Pensiunan');
INSERT INTO `t_status` VALUES ('TAX', 'I', 'Include');
INSERT INTO `t_status` VALUES ('TAX', 'E', 'Exclude');
INSERT INTO `t_status` VALUES ('LVLREK', 'D', 'Detil');
INSERT INTO `t_status` VALUES ('LVLREK', 'G', 'General');
INSERT INTO `t_status` VALUES ('NERACA', 'A', 'Aktiva');
INSERT INTO `t_status` VALUES ('NERACA', 'B', 'Biaya');
INSERT INTO `t_status` VALUES ('NERACA', 'H', 'HPP');
INSERT INTO `t_status` VALUES ('NERACA', 'K', 'Kewajiban');
INSERT INTO `t_status` VALUES ('NERACA', 'M', 'Modal');
INSERT INTO `t_status` VALUES ('NERACA', 'P', 'Pendapatan');
INSERT INTO `t_status` VALUES ('PEND', '01', 'SD');
INSERT INTO `t_status` VALUES ('PEND', '02', 'SLTP/MTs.');
INSERT INTO `t_status` VALUES ('PEND', '03', 'SLTA/MA');
INSERT INTO `t_status` VALUES ('PEND', '04', 'S1');
INSERT INTO `t_status` VALUES ('PEND', '05', 'S2');
INSERT INTO `t_status` VALUES ('PEND', '06', 'S3');
INSERT INTO `t_status` VALUES ('PEND', '07', 'Lainnya');
INSERT INTO `t_status` VALUES ('PENDP', '1', 'SMU');
INSERT INTO `t_status` VALUES ('PENDP', '2', 'SMK');
INSERT INTO `t_status` VALUES ('PENDP', '3', 'MA');
INSERT INTO `t_status` VALUES ('PENDP', '4', 'Lainnya');
INSERT INTO `t_status` VALUES ('SEX', 'L', 'Laki-Laki');
INSERT INTO `t_status` VALUES ('SEX', 'P', 'Perempuan');
INSERT INTO `t_status` VALUES ('VCHSTS', 'I', 'BPB');
INSERT INTO `t_status` VALUES ('VCHSTS', 'R', 'REGISTER VOUCHER');
INSERT INTO `t_status` VALUES ('INVSTS', 'B', 'BATAL');
INSERT INTO `t_status` VALUES ('INVSTS', 'I', 'INPUT');
INSERT INTO `t_status` VALUES ('SOSTS', 'L', 'LPO Created');
INSERT INTO `t_status` VALUES ('JNSSATUAN', 'J', 'JUAL');
INSERT INTO `t_status` VALUES ('JNSSATUAN', 'B', 'BELI');
INSERT INTO `t_status` VALUES ('HOLD', 'Y', 'Y');
INSERT INTO `t_status` VALUES ('HOLD', 'T', 'T');
INSERT INTO `t_status` VALUES ('STATUSPO', 'I', 'INPUT');
INSERT INTO `t_status` VALUES ('STATUSPO', 'F', 'FINAL POST');
INSERT INTO `t_status` VALUES ('STKARY', 'Y', 'AKTIF');
INSERT INTO `t_status` VALUES ('INVSTS', 'P', 'PRINTED');
INSERT INTO `t_status` VALUES ('SOSTS', 'C', 'COMPLETE');
INSERT INTO `t_status` VALUES ('INVSTS', 'C', 'COMPLETE');
INSERT INTO `t_status` VALUES ('SOSTS', 'F', 'FINISH');
INSERT INTO `t_status` VALUES ('JNSSUP', 'P', 'PABRIK');
INSERT INTO `t_status` VALUES ('JNSSUP', 'D', 'DISTRIBUTOR');
INSERT INTO `t_status` VALUES ('STATUSPO', 'A', 'APPROVED');
INSERT INTO `t_status` VALUES ('JNSCUST', 'E', 'END USER');
INSERT INTO `t_status` VALUES ('STATUSSO', 'I', 'INPUT');
INSERT INTO `t_status` VALUES ('STATUSSO', 'P', 'PRINT');
INSERT INTO `t_status` VALUES ('STATUSSO', 'H', 'HOLD');
INSERT INTO `t_status` VALUES ('STATUSSO', 'B', 'BATAL');
INSERT INTO `t_status` VALUES ('DOSTS', 'I', 'INPUT');
INSERT INTO `t_status` VALUES ('DOSTS', 'P', 'PRINTED');
INSERT INTO `t_status` VALUES ('DOSTS', 'B', 'RETUR DO');
INSERT INTO `t_status` VALUES ('DOSTS', 'F', 'INVOICE');
INSERT INTO `t_status` VALUES ('JABSALES', 'K', 'SALES KANVAS');
INSERT INTO `t_status` VALUES ('JABSALES', 'P', 'SALES MOBILE');
INSERT INTO `t_status` VALUES ('JABSALES', 'S', 'SUPERVISOR');
INSERT INTO `t_status` VALUES ('JABSALES', 'M', 'MANAGER');
INSERT INTO `t_status` VALUES ('STATUSKDGB', 'B', 'BELUM TRANSFER GUDANG');
INSERT INTO `t_status` VALUES ('STATUSKDGB', 'S', 'SUDAH TRANSFER GUDANG');
INSERT INTO `t_status` VALUES ('STATUSKDGK', 'B', 'BELUM TRANSFER KANDANG BESAR');
INSERT INTO `t_status` VALUES ('STATUSKDGK', 'S', 'SUDAH TRANSFER KANDANG BESAR');
INSERT INTO `t_status` VALUES ('STATUSKDGU', 'B', 'BELUM TRANSFER GUDANG');
INSERT INTO `t_status` VALUES ('STATUSKDGU', 'S', 'SUDAH TRANSFER GUDANG');

-- ----------------------------
-- Table structure for tab_akses_mainmenu
-- ----------------------------
DROP TABLE IF EXISTS `tab_akses_mainmenu`;
CREATE TABLE `tab_akses_mainmenu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) NULL DEFAULT 0,
  `r` int(11) NULL DEFAULT 0,
  `u` int(11) NULL DEFAULT 0,
  `d` int(11) NULL DEFAULT 0,
  `entry_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `entry_user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 30 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tab_akses_mainmenu
-- ----------------------------
INSERT INTO `tab_akses_mainmenu` VALUES (1, 1, 1, NULL, 1, NULL, NULL, '2017-09-25 11:49:01', 'direktur');
INSERT INTO `tab_akses_mainmenu` VALUES (2, 2, 1, 0, 1, 0, 0, '2018-11-10 09:20:54', '');
INSERT INTO `tab_akses_mainmenu` VALUES (23, 3, 1, 0, 1, 0, 0, '2018-11-14 13:54:23', '');
INSERT INTO `tab_akses_mainmenu` VALUES (24, 4, 1, 0, 1, 0, 0, '2018-11-15 09:52:34', 'user');
INSERT INTO `tab_akses_mainmenu` VALUES (25, 5, 1, 0, 1, 0, 0, '2018-11-16 01:31:46', 'user');
INSERT INTO `tab_akses_mainmenu` VALUES (26, 6, 1, 0, 1, 0, 0, '2019-04-27 05:16:13', 'user');
INSERT INTO `tab_akses_mainmenu` VALUES (27, 7, 1, 0, 0, 0, 0, '2019-05-03 01:50:14', 'user');
INSERT INTO `tab_akses_mainmenu` VALUES (28, 8, 1, 0, 1, 0, 0, '2019-04-27 05:16:30', 'user');
INSERT INTO `tab_akses_mainmenu` VALUES (29, 9, 1, 0, 1, 0, 0, '2019-05-22 07:20:17', 'user');

-- ----------------------------
-- Table structure for tab_akses_submenu
-- ----------------------------
DROP TABLE IF EXISTS `tab_akses_submenu`;
CREATE TABLE `tab_akses_submenu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) NULL DEFAULT 0,
  `r` int(11) NULL DEFAULT 0,
  `u` int(11) NULL DEFAULT 0,
  `d` int(11) NULL DEFAULT 0,
  `entry_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `entry_user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 78 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tab_akses_submenu
-- ----------------------------
INSERT INTO `tab_akses_submenu` VALUES (1, 1, 1, 0, 1, 0, 0, '2017-10-13 12:45:40', '');
INSERT INTO `tab_akses_submenu` VALUES (2, 2, 1, 0, 1, 0, 0, '2017-10-15 17:59:02', '');
INSERT INTO `tab_akses_submenu` VALUES (3, 3, 1, 0, 1, 0, 0, '2018-10-27 10:46:03', '');
INSERT INTO `tab_akses_submenu` VALUES (4, 4, 1, 0, 1, 0, 0, '2018-10-27 10:46:05', '');
INSERT INTO `tab_akses_submenu` VALUES (5, 5, 1, 0, 1, 0, 0, '2018-10-27 10:53:21', '');
INSERT INTO `tab_akses_submenu` VALUES (6, 6, 1, 0, 1, 0, 0, '2018-10-27 10:53:27', '');
INSERT INTO `tab_akses_submenu` VALUES (7, 7, 1, 0, 1, 0, 0, '2018-10-27 11:20:38', '');
INSERT INTO `tab_akses_submenu` VALUES (8, 8, 1, 0, 1, 0, 0, '2018-10-27 11:20:44', '');
INSERT INTO `tab_akses_submenu` VALUES (9, 9, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (10, 10, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (11, 11, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (12, 12, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (13, 13, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (14, 14, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (15, 15, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (16, 16, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (17, 17, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (18, 18, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (19, 19, 1, 0, 1, 0, 0, '2018-11-10 09:34:55', '');
INSERT INTO `tab_akses_submenu` VALUES (69, 20, 1, 0, 1, 0, 0, '2019-04-27 05:23:37', NULL);
INSERT INTO `tab_akses_submenu` VALUES (70, 21, 1, 0, 1, 0, 0, '2019-05-03 01:51:29', NULL);
INSERT INTO `tab_akses_submenu` VALUES (71, 22, 1, 0, 1, 0, 0, '2019-05-03 01:51:34', NULL);
INSERT INTO `tab_akses_submenu` VALUES (72, 23, 1, 0, 1, 0, 0, '2019-05-06 13:42:57', NULL);
INSERT INTO `tab_akses_submenu` VALUES (73, 24, 1, 0, 1, 0, 0, '2019-05-07 03:44:29', NULL);
INSERT INTO `tab_akses_submenu` VALUES (77, 26, 1, 0, 1, 0, 0, '2019-05-22 14:43:49', NULL);
INSERT INTO `tab_akses_submenu` VALUES (76, 25, 1, 0, 1, 0, 0, '2019-05-22 14:43:49', NULL);

-- ----------------------------
-- Table structure for td_co
-- ----------------------------
DROP TABLE IF EXISTS `td_co`;
CREATE TABLE `td_co`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_noco` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdjenis_telur` int(11) NULL DEFAULT NULL,
  `fc_sts` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_eggtray` int(11) NULL DEFAULT NULL,
  `fc_berat_telur` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_telur` int(11) NULL DEFAULT NULL,
  `fn_jumlah_pack` int(11) NULL DEFAULT NULL,
  `fm_price` double NULL DEFAULT NULL,
  `fm_subtot` double NULL DEFAULT NULL,
  `fc_jenis` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_cekdo` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for td_do
-- ----------------------------
DROP TABLE IF EXISTS `td_do`;
CREATE TABLE `td_do`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_nodo` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdjenis_telur` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_eggtray` int(30) NULL DEFAULT NULL,
  `fc_berat_telur` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_telur` int(30) NULL DEFAULT NULL,
  `fn_jumlah_pack` int(30) NULL DEFAULT NULL,
  `fc_sts` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for td_invoice
-- ----------------------------
DROP TABLE IF EXISTS `td_invoice`;
CREATE TABLE `td_invoice`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_noinv` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdjenis_telur` int(11) NULL DEFAULT NULL,
  `fn_jumlah_eggtray` int(30) NULL DEFAULT NULL,
  `fn_berat_telur` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_telur` int(30) NULL DEFAULT NULL,
  `fn_jumlah_pack` int(30) NULL DEFAULT NULL,
  `fm_price` double NULL DEFAULT NULL,
  `fm_subtot` double NULL DEFAULT NULL,
  `fc_sts` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for td_lognomor
-- ----------------------------
DROP TABLE IF EXISTS `td_lognomor`;
CREATE TABLE `td_lognomor`  (
  `fc_modul` char(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fc_nomor` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fc_userid` char(15) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_modul`, `fc_nomor`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for td_nomor
-- ----------------------------
DROP TABLE IF EXISTS `td_nomor`;
CREATE TABLE `td_nomor`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_nomor` char(15) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fc_dari` char(10) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fd_tgl` date NULL DEFAULT NULL,
  `fc_userid` char(10) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of td_nomor
-- ----------------------------
INSERT INTO `td_nomor` VALUES (3, 'PRETCI10017TTD', 'PRICELIST', '2016-12-13', '');
INSERT INTO `td_nomor` VALUES (4, 'PRET30CDSA-A', 'PRICELIST', '2016-12-13', '');
INSERT INTO `td_nomor` VALUES (5, '04', 'BRAND', '2016-12-20', '');
INSERT INTO `td_nomor` VALUES (6, '05', 'BRAND', '2016-12-20', '');
INSERT INTO `td_nomor` VALUES (7, '0002', 'GUDANG', '2017-01-20', 'astuti');
INSERT INTO `td_nomor` VALUES (8, '00002', 'SUPPLIER', '2017-01-22', 'ADMIN');

-- ----------------------------
-- Table structure for td_returdo
-- ----------------------------
DROP TABLE IF EXISTS `td_returdo`;
CREATE TABLE `td_returdo`  (
  `fc_id` int(11) NOT NULL,
  `fc_noretur` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdjenis_telur` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_beratretur_do` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_hargaretur_do` double NULL DEFAULT NULL,
  `fc_sts` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for td_stok_gudang
-- ----------------------------
DROP TABLE IF EXISTS `td_stok_gudang`;
CREATE TABLE `td_stok_gudang`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_kdgudang` int(11) NULL DEFAULT NULL,
  `fc_kdjenis_telur` char(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_eggtray` int(30) NULL DEFAULT NULL,
  `fc_berat_telur` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_telur` int(30) NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for td_transaksi_kandang
-- ----------------------------
DROP TABLE IF EXISTS `td_transaksi_kandang`;
CREATE TABLE `td_transaksi_kandang`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_notrans` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdjenis_telur` char(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_eggtray` int(30) NULL DEFAULT NULL,
  `fc_berat_telur` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_telur` int(30) NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for td_transaksi_kandang_kecil
-- ----------------------------
DROP TABLE IF EXISTS `td_transaksi_kandang_kecil`;
CREATE TABLE `td_transaksi_kandang_kecil`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_notrans_kecil` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdjenis_telur` char(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_eggtray` int(30) NULL DEFAULT NULL,
  `fc_berat_telur` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_jumlah_telur` int(30) NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of td_transaksi_kandang_kecil
-- ----------------------------
INSERT INTO `td_transaksi_kandang_kecil` VALUES (1, NULL, NULL, NULL, '', NULL);

-- ----------------------------
-- Table structure for tm_armada
-- ----------------------------
DROP TABLE IF EXISTS `tm_armada`;
CREATE TABLE `tm_armada`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_nopol` char(15) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fv_ket` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fv_nama_sopir` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tm_armada
-- ----------------------------
INSERT INTO `tm_armada` VALUES (1, 'AG 1901 AK', 'ENGKEL 6', 'Ahmadi');

-- ----------------------------
-- Table structure for tm_armada_copy
-- ----------------------------
DROP TABLE IF EXISTS `tm_armada_copy`;
CREATE TABLE `tm_armada_copy`  (
  `fc_nopol` char(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fv_ket` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `fv_nama_sopir` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_nopol`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tm_armada_copy
-- ----------------------------
INSERT INTO `tm_armada_copy` VALUES ('AG 1901 AK', 'ENGKEL 6', 'Ahmad');
INSERT INTO `tm_armada_copy` VALUES ('AG 2011 KM', 'TRUK', 'Hadi');

-- ----------------------------
-- Table structure for tm_co
-- ----------------------------
DROP TABLE IF EXISTS `tm_co`;
CREATE TABLE `tm_co`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_noco` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_tglinput` datetime(0) NULL DEFAULT NULL,
  `fc_kdcust` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_contacperson` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_top` smallint(3) NULL DEFAULT NULL,
  `fv_alamatkirim` varchar(220) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_userid` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_tottelur` int(11) NULL DEFAULT NULL,
  `fn_totkilo` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_toteggtray` int(11) NULL DEFAULT NULL,
  `fn_total_pack` int(11) NULL DEFAULT NULL,
  `fm_toteggtray_sat` double NULL DEFAULT NULL,
  `fm_biaya_trans` double NULL DEFAULT NULL,
  `fm_biaya_pack` double NULL DEFAULT NULL,
  `fm_biaya_eggtray` double NULL DEFAULT NULL,
  `fm_total` double NULL DEFAULT NULL,
  `fn_print` smallint(6) NULL DEFAULT NULL,
  `fc_userapprove` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fv_memo` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fc_sts` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tm_do
-- ----------------------------
DROP TABLE IF EXISTS `tm_do`;
CREATE TABLE `tm_do`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_nodo` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_noco` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_tglinput` datetime(0) NULL DEFAULT NULL,
  `fc_custid` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_contacperson` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fv_alamatkirim` varchar(220) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_userid` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_sts` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_print` smallint(6) NULL DEFAULT NULL,
  `fv_catatan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdgudang` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdarmada` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_jam_keluar` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tm_gudang
-- ----------------------------
DROP TABLE IF EXISTS `tm_gudang`;
CREATE TABLE `tm_gudang`  (
  `fc_kdgudang` int(11) NOT NULL AUTO_INCREMENT,
  `fv_nmgudang` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_kdgudang`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tm_gudang
-- ----------------------------
INSERT INTO `tm_gudang` VALUES (1, 'Gudang ');

-- ----------------------------
-- Table structure for tm_invoice
-- ----------------------------
DROP TABLE IF EXISTS `tm_invoice`;
CREATE TABLE `tm_invoice`  (
  `fc_noinv` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fc_noco` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_nodo` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_tglinv` date NULL DEFAULT NULL,
  `fd_tglinput` datetime(0) NULL DEFAULT NULL,
  `fc_kdcust` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_contacperson` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_jatuhtempo` datetime(0) NULL DEFAULT NULL,
  `fv_alamatkirim` varchar(220) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_userid` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_sts` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_total_pack` int(11) NULL DEFAULT NULL,
  `fn_tottelur` int(11) NULL DEFAULT NULL,
  `fn_totkilo` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_toteggtray` int(11) NULL DEFAULT NULL,
  `fm_toteggtray_sat` double NULL DEFAULT NULL,
  `fm_biaya_trans` double NULL DEFAULT NULL,
  `fm_biaya_pack` double NULL DEFAULT NULL,
  `fm_biaya_eggtray` double NULL DEFAULT NULL,
  `fm_total` double NULL DEFAULT NULL,
  `fv_catatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fn_print` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`fc_noinv`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tm_jenis_telur
-- ----------------------------
DROP TABLE IF EXISTS `tm_jenis_telur`;
CREATE TABLE `tm_jenis_telur`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_kdjenis_telur` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fv_jenis_telur` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tm_jenis_telur
-- ----------------------------
INSERT INTO `tm_jenis_telur` VALUES (2, 'K', 'Ndog Bonor');

-- ----------------------------
-- Table structure for tm_kandang
-- ----------------------------
DROP TABLE IF EXISTS `tm_kandang`;
CREATE TABLE `tm_kandang`  (
  `fc_kdkandang` int(11) NOT NULL AUTO_INCREMENT,
  `fv_nama_kandang` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_jumlah_ayam` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_kdkandang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tm_kandang_kecil
-- ----------------------------
DROP TABLE IF EXISTS `tm_kandang_kecil`;
CREATE TABLE `tm_kandang_kecil`  (
  `fc_kdkandang_kecil` int(11) NOT NULL AUTO_INCREMENT,
  `fv_nama_kandang_kecil` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_jumlah_ayam` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`fc_kdkandang_kecil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tm_kota
-- ----------------------------
DROP TABLE IF EXISTS `tm_kota`;
CREATE TABLE `tm_kota`  (
  `fc_kdkota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fc_kdprop` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fv_nmkota` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_kdkota`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 368 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tm_kota
-- ----------------------------
INSERT INTO `tm_kota` VALUES (6, '01', 'Kab. Aceh Selatan');
INSERT INTO `tm_kota` VALUES (7, '01', 'Kab. Aceh Tenggara');
INSERT INTO `tm_kota` VALUES (8, '01', 'Kab. Aceh Timur');
INSERT INTO `tm_kota` VALUES (9, '01', 'Kab. Aceh Tengah');
INSERT INTO `tm_kota` VALUES (10, '01', 'Kab. Aceh Barat');
INSERT INTO `tm_kota` VALUES (11, '01', 'Kab. Aceh Besar');
INSERT INTO `tm_kota` VALUES (12, '01', 'Kab. Pidie');
INSERT INTO `tm_kota` VALUES (13, '01', 'Kab. Aceh Utara');
INSERT INTO `tm_kota` VALUES (14, '01', 'Kab. Bireuen');
INSERT INTO `tm_kota` VALUES (15, '01', 'Kab. Aceh Singkil');
INSERT INTO `tm_kota` VALUES (16, '01', 'Kab. Simeulue');
INSERT INTO `tm_kota` VALUES (17, '01', 'Kab. Nagan Raya');
INSERT INTO `tm_kota` VALUES (18, '01', 'Kota Banda Aceh');
INSERT INTO `tm_kota` VALUES (19, '01', 'Kota Sabang');
INSERT INTO `tm_kota` VALUES (20, '01', 'Kota Lhokseumawe');
INSERT INTO `tm_kota` VALUES (21, '01', 'Kota Langsa');
INSERT INTO `tm_kota` VALUES (22, '02', 'Kab. Nias');
INSERT INTO `tm_kota` VALUES (23, '02', 'Kab. Tapanuli Selatan');
INSERT INTO `tm_kota` VALUES (24, '02', 'Kab. Tapanuli Tengah');
INSERT INTO `tm_kota` VALUES (25, '02', 'Kab. Tapanuli Utara');
INSERT INTO `tm_kota` VALUES (26, '02', 'Kab. Labuhan Batu');
INSERT INTO `tm_kota` VALUES (27, '02', 'Kab. Asahar');
INSERT INTO `tm_kota` VALUES (28, '02', 'Kab. Simalungan');
INSERT INTO `tm_kota` VALUES (29, '02', 'Kab. Dairi');
INSERT INTO `tm_kota` VALUES (30, '02', 'Kab. Karo');
INSERT INTO `tm_kota` VALUES (31, '02', 'Kab. Deli Serdang');
INSERT INTO `tm_kota` VALUES (32, '02', 'Kab. Langkat');
INSERT INTO `tm_kota` VALUES (33, '02', 'Kab. Toba Samosir');
INSERT INTO `tm_kota` VALUES (34, '02', 'Kab. Mandailing Natal');
INSERT INTO `tm_kota` VALUES (35, '02', 'Kota Sibolga');
INSERT INTO `tm_kota` VALUES (36, '02', 'Kota Tanjung Balai');
INSERT INTO `tm_kota` VALUES (37, '02', 'Kota Pematang Sianta');
INSERT INTO `tm_kota` VALUES (38, '02', 'Kota Tebingtinggi');
INSERT INTO `tm_kota` VALUES (39, '02', 'Kota Medan');
INSERT INTO `tm_kota` VALUES (40, '02', 'Kota Binjai');
INSERT INTO `tm_kota` VALUES (41, '02', 'Kota Pematang Sidempuan');
INSERT INTO `tm_kota` VALUES (42, '03', 'Kab. Pesisir Selatan');
INSERT INTO `tm_kota` VALUES (43, '03', 'Kab. Solok');
INSERT INTO `tm_kota` VALUES (44, '03', 'Kab. Sawah Lunto');
INSERT INTO `tm_kota` VALUES (45, '03', 'Kab. Tanah Datar');
INSERT INTO `tm_kota` VALUES (46, '03', 'Kab. Padang Pariaman');
INSERT INTO `tm_kota` VALUES (47, '03', 'Kab. Agam');
INSERT INTO `tm_kota` VALUES (48, '03', 'Kab. Limapuluhkota');
INSERT INTO `tm_kota` VALUES (49, '03', 'Kab. Paiaman');
INSERT INTO `tm_kota` VALUES (50, '03', 'Kab. Kepulauan Mentawai');
INSERT INTO `tm_kota` VALUES (51, '03', 'Kab. Dharmasraya');
INSERT INTO `tm_kota` VALUES (52, '03', 'Kota Padang');
INSERT INTO `tm_kota` VALUES (53, '03', 'Kota Solok');
INSERT INTO `tm_kota` VALUES (54, '03', 'Kota Sawah Lunto');
INSERT INTO `tm_kota` VALUES (55, '03', 'Kota Padang Panjang');
INSERT INTO `tm_kota` VALUES (56, '03', 'Kota Bukit Tinggi');
INSERT INTO `tm_kota` VALUES (57, '03', 'Kota Payakumbuh');
INSERT INTO `tm_kota` VALUES (58, '03', 'Kota Pariaman');
INSERT INTO `tm_kota` VALUES (59, '04', 'Kab. Indragiri Hulu');
INSERT INTO `tm_kota` VALUES (60, '04', 'Kab. Indragiri Hilir');
INSERT INTO `tm_kota` VALUES (61, '04', 'Kab. Kepulauan Riau');
INSERT INTO `tm_kota` VALUES (62, '04', 'Kab. Kampar');
INSERT INTO `tm_kota` VALUES (63, '04', 'Kab. Bengkalis');
INSERT INTO `tm_kota` VALUES (64, '04', 'Kab. Karimun');
INSERT INTO `tm_kota` VALUES (65, '04', 'Kab. Kuantan Singingi');
INSERT INTO `tm_kota` VALUES (66, '04', 'Kab. Natuna');
INSERT INTO `tm_kota` VALUES (67, '04', 'Kab. Siak');
INSERT INTO `tm_kota` VALUES (68, '04', 'Kab. Rokan Hilir');
INSERT INTO `tm_kota` VALUES (69, '04', 'Kab. Rokan Hulu');
INSERT INTO `tm_kota` VALUES (70, '04', 'Kab. Pelalawan');
INSERT INTO `tm_kota` VALUES (71, '04', 'Kota Pekanbaru');
INSERT INTO `tm_kota` VALUES (72, '04', 'Kota Batam');
INSERT INTO `tm_kota` VALUES (73, '04', 'Kota Dumai');
INSERT INTO `tm_kota` VALUES (74, '04', 'Kota Tanjung Pinang');
INSERT INTO `tm_kota` VALUES (75, '05', 'Kab. Kerinci');
INSERT INTO `tm_kota` VALUES (76, '05', 'Kab. Batanghari');
INSERT INTO `tm_kota` VALUES (77, '05', 'Kab. Sarolangun');
INSERT INTO `tm_kota` VALUES (78, '05', 'Kab. Merangin');
INSERT INTO `tm_kota` VALUES (79, '05', 'Kab. Tanjung Jabung Timur');
INSERT INTO `tm_kota` VALUES (80, '05', 'Kab. Tanjung Jabung Barat');
INSERT INTO `tm_kota` VALUES (81, '05', 'Kab. Muaro Jambi');
INSERT INTO `tm_kota` VALUES (82, '05', 'Kab. Bango');
INSERT INTO `tm_kota` VALUES (83, '05', 'Kab. Tebo');
INSERT INTO `tm_kota` VALUES (84, '05', 'Kota Jambi');
INSERT INTO `tm_kota` VALUES (85, '06', 'Kab. Ogan Komering Ulu');
INSERT INTO `tm_kota` VALUES (86, '06', 'Kab. Ogan Komering Ilir');
INSERT INTO `tm_kota` VALUES (87, '06', 'Kab. Muara Enim');
INSERT INTO `tm_kota` VALUES (88, '06', 'Kab. Lahat');
INSERT INTO `tm_kota` VALUES (89, '06', 'Kab. Musi Rawas');
INSERT INTO `tm_kota` VALUES (90, '06', 'Kab. Musi Banyuasin');
INSERT INTO `tm_kota` VALUES (91, '06', 'Kota Palembang');
INSERT INTO `tm_kota` VALUES (92, '06', 'Kota Prabumulih');
INSERT INTO `tm_kota` VALUES (93, '06', 'Kota Pagaralam');
INSERT INTO `tm_kota` VALUES (94, '06', 'Kota Lubuklinggau');
INSERT INTO `tm_kota` VALUES (95, '07', 'Kab. Bengkulu Selatan');
INSERT INTO `tm_kota` VALUES (96, '07', 'Kab. Rejanglebong');
INSERT INTO `tm_kota` VALUES (97, '07', 'Kab. Bengkulu Utara');
INSERT INTO `tm_kota` VALUES (98, '07', 'Kota Bengkulu');
INSERT INTO `tm_kota` VALUES (99, '08', 'Kab. Lampung Selatan');
INSERT INTO `tm_kota` VALUES (100, '08', 'Kab. Lampung Tengah');
INSERT INTO `tm_kota` VALUES (101, '08', 'Kab. Lampung Utara');
INSERT INTO `tm_kota` VALUES (102, '08', 'Kab. Lampung Barat');
INSERT INTO `tm_kota` VALUES (103, '08', 'Kab. Tanggamus');
INSERT INTO `tm_kota` VALUES (104, '08', 'Kab. Tulang Bawang');
INSERT INTO `tm_kota` VALUES (105, '08', 'Kab. Lampung Timur');
INSERT INTO `tm_kota` VALUES (106, '08', 'Kab. Way Kanan');
INSERT INTO `tm_kota` VALUES (107, '08', 'Kota Bandar Lampung');
INSERT INTO `tm_kota` VALUES (108, '08', 'Kota Metro');
INSERT INTO `tm_kota` VALUES (109, '09', 'Kab. Bangka');
INSERT INTO `tm_kota` VALUES (110, '09', 'Kab. Belitung');
INSERT INTO `tm_kota` VALUES (111, '09', 'Kota Pangkal Pinang');
INSERT INTO `tm_kota` VALUES (112, '10', 'Kab. Pandeglang');
INSERT INTO `tm_kota` VALUES (113, '10', 'Kab. Lebak');
INSERT INTO `tm_kota` VALUES (114, '10', 'Kab. Tangerang');
INSERT INTO `tm_kota` VALUES (115, '10', 'Kab. Serang');
INSERT INTO `tm_kota` VALUES (116, '10', 'Kota Tangerang');
INSERT INTO `tm_kota` VALUES (117, '10', 'Kota Cilegon');
INSERT INTO `tm_kota` VALUES (118, '11', 'Jakarta Selatan');
INSERT INTO `tm_kota` VALUES (119, '11', 'Jakarta Timur');
INSERT INTO `tm_kota` VALUES (120, '11', 'Jakarta Pusat');
INSERT INTO `tm_kota` VALUES (121, '11', 'Jakarta Barat');
INSERT INTO `tm_kota` VALUES (122, '11', 'Jakarta Utara');
INSERT INTO `tm_kota` VALUES (123, '12', 'Kab. Bogor');
INSERT INTO `tm_kota` VALUES (124, '12', 'Kab. Sukabumi');
INSERT INTO `tm_kota` VALUES (125, '12', 'Kab. Cianjur');
INSERT INTO `tm_kota` VALUES (126, '12', 'Kab. Bandung');
INSERT INTO `tm_kota` VALUES (127, '12', 'Kab. Garut');
INSERT INTO `tm_kota` VALUES (128, '12', 'Kab. Tasikmalaya');
INSERT INTO `tm_kota` VALUES (129, '12', 'Kab. Ciamis');
INSERT INTO `tm_kota` VALUES (130, '12', 'Kab. Kuningan');
INSERT INTO `tm_kota` VALUES (131, '12', 'Kab. Cirebon');
INSERT INTO `tm_kota` VALUES (132, '12', 'Kab. Majalengka');
INSERT INTO `tm_kota` VALUES (133, '12', 'Kab. Sumedang');
INSERT INTO `tm_kota` VALUES (134, '12', 'Kab. Indramayu');
INSERT INTO `tm_kota` VALUES (135, '12', 'Kab. Subang');
INSERT INTO `tm_kota` VALUES (136, '12', 'Kab. Purwakarta');
INSERT INTO `tm_kota` VALUES (137, '12', 'Kab. Karawang');
INSERT INTO `tm_kota` VALUES (138, '12', 'Kab. Bekasi');
INSERT INTO `tm_kota` VALUES (139, '12', 'Kota Bogor');
INSERT INTO `tm_kota` VALUES (140, '12', 'Kota Sukabumi');
INSERT INTO `tm_kota` VALUES (141, '12', 'Kota Bandung');
INSERT INTO `tm_kota` VALUES (142, '12', 'Kota Cirebon');
INSERT INTO `tm_kota` VALUES (143, '12', 'Kota Bekasi');
INSERT INTO `tm_kota` VALUES (144, '12', 'Kota Depok');
INSERT INTO `tm_kota` VALUES (145, '12', 'Kota Cimahi');
INSERT INTO `tm_kota` VALUES (146, '12', 'Kota Tasikmalaya');
INSERT INTO `tm_kota` VALUES (147, '13', 'Kab. Cilacap');
INSERT INTO `tm_kota` VALUES (148, '13', 'Kab. Banyumas');
INSERT INTO `tm_kota` VALUES (149, '13', 'Kab. Purbalingga');
INSERT INTO `tm_kota` VALUES (150, '13', 'Kab. Banjarnegara');
INSERT INTO `tm_kota` VALUES (151, '13', 'Kab. Kebumen');
INSERT INTO `tm_kota` VALUES (152, '13', 'Kab. Purworejo');
INSERT INTO `tm_kota` VALUES (153, '13', 'Kab. Wonosobo');
INSERT INTO `tm_kota` VALUES (154, '13', 'Kab. Magelang');
INSERT INTO `tm_kota` VALUES (155, '13', 'Kab. Boyolali');
INSERT INTO `tm_kota` VALUES (156, '13', 'Kab. Klaten');
INSERT INTO `tm_kota` VALUES (157, '13', 'Kab. Sukoharjo');
INSERT INTO `tm_kota` VALUES (158, '13', 'Kab. Wonogiri');
INSERT INTO `tm_kota` VALUES (159, '13', 'Kab. Karanganyar');
INSERT INTO `tm_kota` VALUES (160, '13', 'Kab. Sragen');
INSERT INTO `tm_kota` VALUES (161, '13', 'Kab. Grobogan');
INSERT INTO `tm_kota` VALUES (162, '13', 'Kab. Blora');
INSERT INTO `tm_kota` VALUES (163, '13', 'Kab. Rembang');
INSERT INTO `tm_kota` VALUES (164, '13', 'Kab. Pati');
INSERT INTO `tm_kota` VALUES (165, '13', 'Kab. Kudus');
INSERT INTO `tm_kota` VALUES (166, '13', 'Kab. Jepara');
INSERT INTO `tm_kota` VALUES (167, '13', 'Kab. Demak');
INSERT INTO `tm_kota` VALUES (168, '13', 'Kab. Semarang');
INSERT INTO `tm_kota` VALUES (169, '13', 'Kab. Temanggung');
INSERT INTO `tm_kota` VALUES (170, '13', 'Kab. Kendal');
INSERT INTO `tm_kota` VALUES (171, '13', 'Kab. Batang');
INSERT INTO `tm_kota` VALUES (172, '13', 'Kab. Pekalongan');
INSERT INTO `tm_kota` VALUES (173, '13', 'Kab. Pemalang');
INSERT INTO `tm_kota` VALUES (174, '13', 'Kab. Tegal');
INSERT INTO `tm_kota` VALUES (175, '13', 'Kab. Brebes');
INSERT INTO `tm_kota` VALUES (176, '13', 'Kota Magelang');
INSERT INTO `tm_kota` VALUES (177, '13', 'Kota Surakarta');
INSERT INTO `tm_kota` VALUES (178, '13', 'Kota Salatiga');
INSERT INTO `tm_kota` VALUES (179, '13', 'Kota Semarang');
INSERT INTO `tm_kota` VALUES (180, '13', 'Kota Pekalongan');
INSERT INTO `tm_kota` VALUES (181, '13', 'Kota Tegal');
INSERT INTO `tm_kota` VALUES (182, '14', 'Kab. Kulonprogo');
INSERT INTO `tm_kota` VALUES (183, '14', 'Kab. Bantul');
INSERT INTO `tm_kota` VALUES (184, '14', 'Kab. Gunungkidul');
INSERT INTO `tm_kota` VALUES (185, '14', 'Kab. Sleman');
INSERT INTO `tm_kota` VALUES (186, '14', 'Kota Yogyakarta');
INSERT INTO `tm_kota` VALUES (187, '15', 'Kab. Pacitan');
INSERT INTO `tm_kota` VALUES (188, '15', 'Kab. Ponorogo');
INSERT INTO `tm_kota` VALUES (189, '15', 'Kab. Trenggalek');
INSERT INTO `tm_kota` VALUES (190, '15', 'Kab. Tulungagung');
INSERT INTO `tm_kota` VALUES (191, '15', 'Kab. Blitar');
INSERT INTO `tm_kota` VALUES (192, '15', 'Kab. Kediri');
INSERT INTO `tm_kota` VALUES (193, '15', 'Kab. Malang');
INSERT INTO `tm_kota` VALUES (194, '15', 'Kab. Lumajang');
INSERT INTO `tm_kota` VALUES (195, '15', 'Kab. Jember');
INSERT INTO `tm_kota` VALUES (196, '15', 'Kab. Banyuwangi');
INSERT INTO `tm_kota` VALUES (197, '15', 'Kab. Bondowoso');
INSERT INTO `tm_kota` VALUES (198, '15', 'Kab. Situbondo');
INSERT INTO `tm_kota` VALUES (199, '15', 'Kab. Probolinggo');
INSERT INTO `tm_kota` VALUES (200, '15', 'Kab. Pasuruan');
INSERT INTO `tm_kota` VALUES (201, '15', 'Kab. Sidoarjo');
INSERT INTO `tm_kota` VALUES (202, '15', 'Kab. Mojokerto');
INSERT INTO `tm_kota` VALUES (203, '15', 'Kab. Jombang');
INSERT INTO `tm_kota` VALUES (204, '15', 'Kab. Nganjuk');
INSERT INTO `tm_kota` VALUES (205, '15', 'Kab. Madiun');
INSERT INTO `tm_kota` VALUES (206, '15', 'Kab. Magetan');
INSERT INTO `tm_kota` VALUES (207, '15', 'Kab. Ngawi');
INSERT INTO `tm_kota` VALUES (208, '15', 'Kab. Bojonegoro');
INSERT INTO `tm_kota` VALUES (209, '15', 'Kab. Tuban');
INSERT INTO `tm_kota` VALUES (210, '15', 'Kab. Lamongan');
INSERT INTO `tm_kota` VALUES (211, '15', 'Kab. Gresik');
INSERT INTO `tm_kota` VALUES (212, '15', 'Kab. Bangkalan');
INSERT INTO `tm_kota` VALUES (213, '15', 'Kab. Sampang');
INSERT INTO `tm_kota` VALUES (214, '15', 'Kab. Pamekasan');
INSERT INTO `tm_kota` VALUES (215, '15', 'Kab. Sumenep');
INSERT INTO `tm_kota` VALUES (216, '15', 'Kota Kediri');
INSERT INTO `tm_kota` VALUES (217, '15', 'Kota Blitar');
INSERT INTO `tm_kota` VALUES (218, '15', 'Kota Malang');
INSERT INTO `tm_kota` VALUES (219, '15', 'Kota Probolinggo');
INSERT INTO `tm_kota` VALUES (220, '15', 'Kota Pasuruan');
INSERT INTO `tm_kota` VALUES (221, '15', 'Kota Mojokerto');
INSERT INTO `tm_kota` VALUES (222, '15', 'Kota Madiun');
INSERT INTO `tm_kota` VALUES (223, '15', 'Kota Surabaya');
INSERT INTO `tm_kota` VALUES (224, '15', 'Kota Batu');
INSERT INTO `tm_kota` VALUES (225, '16', 'Kab. Jembrana');
INSERT INTO `tm_kota` VALUES (226, '16', 'Kab. Tabanan');
INSERT INTO `tm_kota` VALUES (227, '16', 'Kab. Badung');
INSERT INTO `tm_kota` VALUES (228, '16', 'Kab. Gianyar');
INSERT INTO `tm_kota` VALUES (229, '16', 'Kab. Klungkung');
INSERT INTO `tm_kota` VALUES (230, '16', 'Kab. Bangli');
INSERT INTO `tm_kota` VALUES (231, '16', 'Kab. Karangasem');
INSERT INTO `tm_kota` VALUES (232, '16', 'Kab. Buleleng');
INSERT INTO `tm_kota` VALUES (233, '16', 'Kota Denpasar');
INSERT INTO `tm_kota` VALUES (234, '17', 'Kab. Lombok Barat');
INSERT INTO `tm_kota` VALUES (235, '17', 'Kab. Lombok Tengah');
INSERT INTO `tm_kota` VALUES (236, '17', 'Kab. Lombok Timur');
INSERT INTO `tm_kota` VALUES (237, '17', 'Kab. Sumbawa');
INSERT INTO `tm_kota` VALUES (238, '17', 'Kab. Dompu');
INSERT INTO `tm_kota` VALUES (239, '17', 'Kab. Bima');
INSERT INTO `tm_kota` VALUES (240, '17', 'Kota Mataram');
INSERT INTO `tm_kota` VALUES (241, '18', 'Kab. Sumba Barat');
INSERT INTO `tm_kota` VALUES (242, '18', 'Kab. Sumba Timur');
INSERT INTO `tm_kota` VALUES (243, '18', 'Kab. Kupang');
INSERT INTO `tm_kota` VALUES (244, '18', 'Kab. Timor Tengah Selatan');
INSERT INTO `tm_kota` VALUES (245, '18', 'Kab. Timor Tengah Utara');
INSERT INTO `tm_kota` VALUES (246, '18', 'Kab. Belu');
INSERT INTO `tm_kota` VALUES (247, '18', 'Kab. Alor');
INSERT INTO `tm_kota` VALUES (248, '18', 'Kab. Flores Timur');
INSERT INTO `tm_kota` VALUES (249, '18', 'Kab. Sikka');
INSERT INTO `tm_kota` VALUES (250, '18', 'Kab. Ende');
INSERT INTO `tm_kota` VALUES (251, '18', 'Kab. Ngada');
INSERT INTO `tm_kota` VALUES (252, '18', 'Kab. Manggarai');
INSERT INTO `tm_kota` VALUES (253, '18', 'Kab. Lembata');
INSERT INTO `tm_kota` VALUES (254, '18', 'Kota Kupang');
INSERT INTO `tm_kota` VALUES (255, '19', 'Kab. Sambas');
INSERT INTO `tm_kota` VALUES (256, '19', 'Kab. Pontianak');
INSERT INTO `tm_kota` VALUES (257, '19', 'Kab. Sanggau');
INSERT INTO `tm_kota` VALUES (258, '19', 'Kab. Ketapang');
INSERT INTO `tm_kota` VALUES (259, '19', 'Kab. Sintang');
INSERT INTO `tm_kota` VALUES (260, '19', 'Kab. Kapuas Hulu');
INSERT INTO `tm_kota` VALUES (261, '19', 'Kab. Bengkayang');
INSERT INTO `tm_kota` VALUES (262, '19', 'Kab. Landak');
INSERT INTO `tm_kota` VALUES (263, '19', 'Kota Pontianak');
INSERT INTO `tm_kota` VALUES (264, '19', 'Kota Singkawang');
INSERT INTO `tm_kota` VALUES (265, '20', 'Kab. Kota Waringin Barat');
INSERT INTO `tm_kota` VALUES (266, '20', 'Kab. Kota Waringin Timur');
INSERT INTO `tm_kota` VALUES (267, '20', 'Kab. Kapuas');
INSERT INTO `tm_kota` VALUES (268, '20', 'Kab. Barito Selatan');
INSERT INTO `tm_kota` VALUES (269, '20', 'Kab. Barito Utara');
INSERT INTO `tm_kota` VALUES (270, '20', 'Kab. Gunung Mas');
INSERT INTO `tm_kota` VALUES (271, '20', 'Kota Palangkaraya');
INSERT INTO `tm_kota` VALUES (272, '21', 'Kab. Tanah Laut');
INSERT INTO `tm_kota` VALUES (273, '21', 'Kab. Kota Baru');
INSERT INTO `tm_kota` VALUES (274, '21', 'Kab. Banjar');
INSERT INTO `tm_kota` VALUES (275, '21', 'Kab. Barito Kual');
INSERT INTO `tm_kota` VALUES (276, '21', 'Kab. Tapin');
INSERT INTO `tm_kota` VALUES (277, '21', 'Kab. Hulu Sei Selatan');
INSERT INTO `tm_kota` VALUES (278, '21', 'Kab. Hulu Sei Tengah');
INSERT INTO `tm_kota` VALUES (279, '21', 'Kab. Hulu Sei Utara');
INSERT INTO `tm_kota` VALUES (280, '21', 'Kab. Tabolong');
INSERT INTO `tm_kota` VALUES (281, '21', 'Kota Banjarmasin');
INSERT INTO `tm_kota` VALUES (282, '21', 'Kota Banjar Baru');
INSERT INTO `tm_kota` VALUES (283, '22', 'Kab. Pasir');
INSERT INTO `tm_kota` VALUES (284, '22', 'Kab. Kutai');
INSERT INTO `tm_kota` VALUES (285, '22', 'Kab. Berau');
INSERT INTO `tm_kota` VALUES (286, '22', 'Kab. Bulungan');
INSERT INTO `tm_kota` VALUES (287, '22', 'Kab. Nunukan');
INSERT INTO `tm_kota` VALUES (288, '22', 'Kab. Kutai Timur');
INSERT INTO `tm_kota` VALUES (289, '22', 'Kab. Malinau');
INSERT INTO `tm_kota` VALUES (290, '22', 'Kab. Kutai Barat');
INSERT INTO `tm_kota` VALUES (291, '22', 'Kota Balikpapan');
INSERT INTO `tm_kota` VALUES (292, '22', 'Kota Samarinda');
INSERT INTO `tm_kota` VALUES (293, '22', 'Kata Tarakan');
INSERT INTO `tm_kota` VALUES (294, '22', 'Kota Bontang');
INSERT INTO `tm_kota` VALUES (295, '23', 'Kab. Gorontalo');
INSERT INTO `tm_kota` VALUES (296, '23', 'Kab. Boalemo');
INSERT INTO `tm_kota` VALUES (297, '23', 'Kota Gorontalo');
INSERT INTO `tm_kota` VALUES (298, '24', 'Kab. Bolaang Mongondow');
INSERT INTO `tm_kota` VALUES (299, '24', 'Kab. Minahasa');
INSERT INTO `tm_kota` VALUES (300, '24', 'Kab. Sangihe Talaud');
INSERT INTO `tm_kota` VALUES (301, '24', 'Kota Manado');
INSERT INTO `tm_kota` VALUES (302, '24', 'Kota Bitung');
INSERT INTO `tm_kota` VALUES (303, '25', 'Kab. Poso');
INSERT INTO `tm_kota` VALUES (304, '25', 'Kab. Donggala');
INSERT INTO `tm_kota` VALUES (305, '25', 'Kab. Banggai Kepulauan');
INSERT INTO `tm_kota` VALUES (306, '25', 'Kab. Banggai Kepulauan');
INSERT INTO `tm_kota` VALUES (307, '25', 'Kab. Buol');
INSERT INTO `tm_kota` VALUES (308, '25', 'Kab. Toli-toli');
INSERT INTO `tm_kota` VALUES (309, '25', 'Kab. Morowa\'i');
INSERT INTO `tm_kota` VALUES (310, '25', 'Kab. Parigi Moutong');
INSERT INTO `tm_kota` VALUES (311, '25', 'Kota Palu');
INSERT INTO `tm_kota` VALUES (312, '27', 'Kab. Selayar');
INSERT INTO `tm_kota` VALUES (313, '27', 'Kab. Bulukumba');
INSERT INTO `tm_kota` VALUES (314, '27', 'Kab. Bantaeng');
INSERT INTO `tm_kota` VALUES (315, '27', 'Kab. Jeneponto');
INSERT INTO `tm_kota` VALUES (316, '27', 'Kab. Takalar');
INSERT INTO `tm_kota` VALUES (317, '27', 'Kab. Gowa');
INSERT INTO `tm_kota` VALUES (318, '27', 'Kab. Sinjai');
INSERT INTO `tm_kota` VALUES (319, '27', 'Kab. Bone');
INSERT INTO `tm_kota` VALUES (320, '27', 'Kab. Maros');
INSERT INTO `tm_kota` VALUES (321, '27', 'Kab. Pangkajene Kepulauan');
INSERT INTO `tm_kota` VALUES (322, '27', 'Kab. Barru');
INSERT INTO `tm_kota` VALUES (323, '27', 'Kab. Soppeng');
INSERT INTO `tm_kota` VALUES (324, '27', 'Kab. Wajo');
INSERT INTO `tm_kota` VALUES (325, '27', 'Kab. Sidenreng Rappang');
INSERT INTO `tm_kota` VALUES (326, '27', 'Kab. Pinrang');
INSERT INTO `tm_kota` VALUES (327, '27', 'Kab. Enrekang');
INSERT INTO `tm_kota` VALUES (328, '27', 'Kab. Luwu');
INSERT INTO `tm_kota` VALUES (329, '27', 'Kab. Tana Toraja');
INSERT INTO `tm_kota` VALUES (330, '27', 'Kab. Polewali Mamasa');
INSERT INTO `tm_kota` VALUES (331, '27', 'Kab. Majene');
INSERT INTO `tm_kota` VALUES (332, '27', 'Kab. Mamaju');
INSERT INTO `tm_kota` VALUES (333, '27', 'Kab. Luwu Utara');
INSERT INTO `tm_kota` VALUES (334, '27', 'Kota Makasar');
INSERT INTO `tm_kota` VALUES (335, '27', 'Kota Pare-pare');
INSERT INTO `tm_kota` VALUES (336, '27', 'Kota Palopo');
INSERT INTO `tm_kota` VALUES (337, '28', 'Kab. Buton');
INSERT INTO `tm_kota` VALUES (338, '28', 'Kab. Muna');
INSERT INTO `tm_kota` VALUES (339, '28', 'Kab. Kendari');
INSERT INTO `tm_kota` VALUES (340, '28', 'Kab. Kolaka');
INSERT INTO `tm_kota` VALUES (341, '28', 'Kota Kendari');
INSERT INTO `tm_kota` VALUES (342, '28', 'Kota Bau-bau');
INSERT INTO `tm_kota` VALUES (343, '29', 'Kab. Maluku Tenggara');
INSERT INTO `tm_kota` VALUES (344, '29', 'Kab. Maluku Tengah');
INSERT INTO `tm_kota` VALUES (345, '29', 'Kab. Buru');
INSERT INTO `tm_kota` VALUES (346, '29', 'Kab. Maluku Tenggara Barat');
INSERT INTO `tm_kota` VALUES (347, '29', 'Kota Ambon');
INSERT INTO `tm_kota` VALUES (348, '30', 'Kab. Maluku Utara');
INSERT INTO `tm_kota` VALUES (349, '30', 'Kab. Halmahera Tengah');
INSERT INTO `tm_kota` VALUES (350, '30', 'Kota Ternate');
INSERT INTO `tm_kota` VALUES (351, '31', 'Kab. Jayapura');
INSERT INTO `tm_kota` VALUES (356, '31', 'Kab. Biak Numfor');
INSERT INTO `tm_kota` VALUES (361, '31', 'Kab. Sorong');
INSERT INTO `tm_kota` VALUES (357, '31', 'Kab. Yapen Waropen');
INSERT INTO `tm_kota` VALUES (362, '31', 'Kab. Manokwari');
INSERT INTO `tm_kota` VALUES (352, '31', 'Kab. Jayawijaya');
INSERT INTO `tm_kota` VALUES (363, '31', 'Kab. Fak-fak');
INSERT INTO `tm_kota` VALUES (353, '31', 'Kab. Puncak Jaya');
INSERT INTO `tm_kota` VALUES (358, '31', 'Kab. Mimika');
INSERT INTO `tm_kota` VALUES (354, '31', 'Kab. Merauke');
INSERT INTO `tm_kota` VALUES (359, '31', 'Kab. Nabire');
INSERT INTO `tm_kota` VALUES (360, '31', 'Kab. Panini');
INSERT INTO `tm_kota` VALUES (355, '31', 'Kota Jayapura');
INSERT INTO `tm_kota` VALUES (364, '31', 'Kota Sorong');
INSERT INTO `tm_kota` VALUES (365, '99', 'LUAR NEGERI');
INSERT INTO `tm_kota` VALUES (366, '10', 'Tangerang Selatan');
INSERT INTO `tm_kota` VALUES (367, '99', 'LUAR KOTA');

-- ----------------------------
-- Table structure for tm_mutasi_gudang
-- ----------------------------
DROP TABLE IF EXISTS `tm_mutasi_gudang`;
CREATE TABLE `tm_mutasi_gudang`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_nomutasi` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_jumlah_telur` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_berat_telur` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_jumlah_eggtray` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdgudang_asal` int(11) NULL DEFAULT NULL,
  `fc_kdgudang_tujuan` int(11) NULL DEFAULT NULL,
  `fc_user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_status` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '1 = Diterima;\r\n2 =  Ditolak;',
  `fd_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tm_prop
-- ----------------------------
DROP TABLE IF EXISTS `tm_prop`;
CREATE TABLE `tm_prop`  (
  `fc_kdprop` int(10) NOT NULL AUTO_INCREMENT,
  `fv_nmprop` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_kdprop`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tm_prop
-- ----------------------------
INSERT INTO `tm_prop` VALUES (1, 'Nanggroe Aceh D.');
INSERT INTO `tm_prop` VALUES (2, 'Sumatera Utara');
INSERT INTO `tm_prop` VALUES (3, 'Sumatra Barat');
INSERT INTO `tm_prop` VALUES (4, 'Riau');
INSERT INTO `tm_prop` VALUES (5, 'Jambi');
INSERT INTO `tm_prop` VALUES (6, 'Sumatera Selatan');
INSERT INTO `tm_prop` VALUES (7, 'Bengkulu');
INSERT INTO `tm_prop` VALUES (8, 'Lampung');
INSERT INTO `tm_prop` VALUES (9, 'Kep. Bangka Belitung');
INSERT INTO `tm_prop` VALUES (10, 'Banten');
INSERT INTO `tm_prop` VALUES (11, 'DKI Jakarta');
INSERT INTO `tm_prop` VALUES (12, 'Jawa Barat');
INSERT INTO `tm_prop` VALUES (13, 'Jawa Tengah');
INSERT INTO `tm_prop` VALUES (14, 'D.I. Yogyakarta');
INSERT INTO `tm_prop` VALUES (15, 'Jawa Timur');
INSERT INTO `tm_prop` VALUES (16, 'Bali');
INSERT INTO `tm_prop` VALUES (17, 'Nusa Tenggara Barat');
INSERT INTO `tm_prop` VALUES (18, 'Nusa Tenggara Timur');
INSERT INTO `tm_prop` VALUES (19, 'Kalimantan Barat');
INSERT INTO `tm_prop` VALUES (20, 'Kalimantan Tengah');
INSERT INTO `tm_prop` VALUES (21, 'Kalimantan Selatan');
INSERT INTO `tm_prop` VALUES (22, 'Kalimantan Timur');
INSERT INTO `tm_prop` VALUES (23, 'Gorontalo');
INSERT INTO `tm_prop` VALUES (24, 'Sulawesi Utara');
INSERT INTO `tm_prop` VALUES (25, 'Sulawesi Tengah');
INSERT INTO `tm_prop` VALUES (26, 'Sulawesi Selatan');
INSERT INTO `tm_prop` VALUES (27, 'Sulawesi Tenggara');
INSERT INTO `tm_prop` VALUES (28, 'Maluku');
INSERT INTO `tm_prop` VALUES (29, 'Maluku Utara');
INSERT INTO `tm_prop` VALUES (30, 'Papua');
INSERT INTO `tm_prop` VALUES (31, 'RIAU');
INSERT INTO `tm_prop` VALUES (32, 'Luar Negeri');

-- ----------------------------
-- Table structure for tm_returdo
-- ----------------------------
DROP TABLE IF EXISTS `tm_returdo`;
CREATE TABLE `tm_returdo`  (
  `fc_noretur` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fc_nodo` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_tglinput` datetime(0) NULL DEFAULT NULL,
  `fc_sts` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_noretur`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tm_transaksi_kandang
-- ----------------------------
DROP TABLE IF EXISTS `tm_transaksi_kandang`;
CREATE TABLE `tm_transaksi_kandang`  (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_notrans` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdgudang` int(11) NULL DEFAULT NULL,
  `fc_kdkandang` int(11) NULL DEFAULT NULL,
  `fc_total_sisa_ayam_hidup` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_total_umur` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_total_berat_telur` char(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_total_eggtray` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_total_persen_produksi` float(15, 0) NULL DEFAULT NULL,
  `fc_total_ayam_mati` int(8) NULL DEFAULT NULL,
  `fc_total_sortir_akhir` int(8) NULL DEFAULT NULL,
  `fc_total_konsumsi_pakan` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_total_konsumsi_air` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_total_fcr` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fv_ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fc_status` char(0) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tm_transaksi_kandang_kecil
-- ----------------------------
DROP TABLE IF EXISTS `tm_transaksi_kandang_kecil`;
CREATE TABLE `tm_transaksi_kandang_kecil`  (
  `fc_id` int(11) NOT NULL,
  `fc_notrans_kecil` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fc_kdkandang_kecil` int(11) NULL DEFAULT NULL,
  `fc_kdkandang` int(11) NULL DEFAULT NULL,
  `fc_total_berat_telur` char(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_persen_produksi` float(15, 0) NULL DEFAULT NULL,
  `fc_ayam_mati` int(8) NULL DEFAULT NULL,
  `fc_sortir_akhir` int(8) NULL DEFAULT NULL,
  `fd_konsumsi_air` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_konsumsi_pakan` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fd_fcr` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fv_ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fc_date` datetime(0) NULL DEFAULT NULL,
  `fc_status` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`fc_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user_type
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type`  (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`user_type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_type
-- ----------------------------
INSERT INTO `user_type` VALUES (1, 'Administrator');
INSERT INTO `user_type` VALUES (2, 'Superadmin');

SET FOREIGN_KEY_CHECKS = 1;
