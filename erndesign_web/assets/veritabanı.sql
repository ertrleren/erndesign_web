SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kullanicilar
-- ----------------------------
DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `kadi` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kullanicilar
-- ----------------------------
INSERT INTO `kullanicilar` VALUES ('1', 'Ali Veli', 'ali', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `kullanicilar` VALUES ('4', 'Hasan Yıldırım', 'hasan', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for urunler
-- ----------------------------
DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urunadi` varchar(255) DEFAULT NULL,
  `resmi` varchar(255) DEFAULT NULL,
  `fiyati` varchar(255) DEFAULT NULL,
  `kategorisi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of urunler
-- ----------------------------
INSERT INTO `urunler` VALUES ('10', 'Tül Perde 1', 'image1590941280.jpeg', '150', 'tul-perde');
INSERT INTO `urunler` VALUES ('11', 'Tül Perde 2', 'image1590941306.jpeg', '175', 'tul-perde');
INSERT INTO `urunler` VALUES ('12', 'Tül Perde 3', 'image1590941325.jpeg', '125', 'tul-perde');
INSERT INTO `urunler` VALUES ('13', 'Tül Perde 4', 'image1590941349.jpeg', '140', 'tul-perde');
INSERT INTO `urunler` VALUES ('14', 'Kanat Perde 1', 'image1590941376.jpeg', '150', 'kanat-perde');
INSERT INTO `urunler` VALUES ('15', 'Kanat Perde 2', 'image1590941387.jpeg', '170', 'kanat-perde');
INSERT INTO `urunler` VALUES ('16', 'Kanat Perde 3', 'image1590941399.jpeg', '220', 'kanat-perde');
INSERT INTO `urunler` VALUES ('17', 'Kanat Perde 4', 'image1590941417.jpeg', '210', 'kanat-perde');
INSERT INTO `urunler` VALUES ('18', 'Aksesuar', 'image1590943024.jpeg', '120', 'aksesuar');

-- ----------------------------
-- Table structure for yoneticiler
-- ----------------------------
DROP TABLE IF EXISTS `yoneticiler`;
CREATE TABLE `yoneticiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `kadi` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yoneticiler
-- ----------------------------
INSERT INTO `yoneticiler` VALUES ('1', 'Ertuğrul Eren', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `yoneticiler` VALUES ('2', 'Can Yılmaz', 'can', '21232f297a57a5a743894a0e4a801fc3');
