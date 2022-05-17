/*
 Navicat Premium Data Transfer

 Source Server         : SICO
 Source Server Type    : MySQL
 Source Server Version : 100240
 Source Host           : 51.222.229.130:3306
 Source Schema         : app_convocapersonal

 Target Server Type    : MySQL
 Target Server Version : 100240
 File Encoding         : 65001

 Date: 17/05/2022 14:06:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions`  (
  `id` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  INDEX `ci_sessions_timestamp`(`timestamp`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------
INSERT INTO `ci_sessions` VALUES ('eb345b5a708cfa896a6c6bd0ef627027f45d6a10', '45.5.68.148', 1646774406, 0x63617074636861576F72647C733A343A2232313133223B636F645F636170746368617C623A313B5F5F63695F766172737C613A313A7B733A31313A22636F645F63617074636861223B693A313634363737343438383B7D757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('3d6b9fcdd28f990deb4dba8dc20dfb3d2e5affa3', '45.5.68.148', 1647355365, 0x63617074636861576F72647C733A343A2232393434223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('492fa2c6b02d8df82debe507a28bb0604d5a9a96', '45.5.68.148', 1647358112, 0x63617074636861576F72647C733A343A2232313737223B);
INSERT INTO `ci_sessions` VALUES ('0fde0594e7bc4cfad0a2d57654d4d973803cc1fc', '45.5.68.148', 1647364349, '');
INSERT INTO `ci_sessions` VALUES ('7ed8d97a42f6ddb20ae8e3a76b630ef78a820ded', '45.5.68.148', 1647894964, 0x63617074636861576F72647C733A343A2234323138223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('59aeabbc4d12d332185d9f13b3e7797b4d552640', '45.5.68.148', 1647958288, 0x63617074636861576F72647C733A343A2232363933223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('6dcc6fa892ad00ba096bbe6a56feb62a34c1abf3', '45.5.68.148', 1647970059, 0x63617074636861576F72647C733A343A2238333331223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('e82768b06c3183ed06fbc1045549459a5d562472', '45.5.68.148', 1648043650, 0x63617074636861576F72647C733A343A2232343230223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('f391d82e966223f85df507514edb3dab32c804a4', '45.5.68.148', 1648212385, '');
INSERT INTO `ci_sessions` VALUES ('c83a445b36eeb0e565fed9425028542feb04b3e2', '201.240.139.10', 1648432310, 0x63617074636861576F72647C733A343A2231393432223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('2317426c476d4e4e21c0e945ca05be0f3628c3e7', '45.5.68.148', 1649346087, 0x63617074636861576F72647C733A343A2231353535223B);
INSERT INTO `ci_sessions` VALUES ('20f7e0607fff95d3124b335e742c4b4fa4ec09c7', '45.5.68.148', 1649431618, 0x63617074636861576F72647C733A343A2233313136223B);
INSERT INTO `ci_sessions` VALUES ('5acab746dcdb6d37762a342a8deb4b097a6670cf', '45.5.68.148', 1650414823, 0x63617074636861576F72647C733A343A2232383534223B636F645F636170746368617C623A313B5F5F63695F766172737C613A313A7B733A31313A22636F645F63617074636861223B693A313635303431353032393B7D757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('cc1e20174d733c9ee51b0c3c6b14610f66c2111f', '45.5.68.34', 1650420658, '');
INSERT INTO `ci_sessions` VALUES ('4c2165dcb2a4a2920c9f75bdbf58a32a217c62f0', '45.5.68.34', 1650466022, '');
INSERT INTO `ci_sessions` VALUES ('2e6d1bada6f2d99525abb6f4ca3d5fe888c9a2c9', '179.6.47.222', 1650669067, 0x63617074636861576F72647C733A343A2232353238223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('c1a46530ae5b7a01b6e8c2fe64ffaa0a0b343b50', '45.5.68.148', 1651080117, '');
INSERT INTO `ci_sessions` VALUES ('3c5f847f5df3080642b44664e7f3e9abfffe8326', '179.6.47.222', 1651204750, 0x63617074636861576F72647C733A343A2234373036223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('9cf1906c2956066b8ce4084d90384ad9bd5ec7f8', '179.6.47.222', 1651245030, 0x63617074636861576F72647C733A343A2232343135223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('351e66d328da56890151488e9cd2e9b1578866f3', '179.6.47.222', 1651267566, '');
INSERT INTO `ci_sessions` VALUES ('e84adf8766a2f017df5fa0b2d4eb5c2c5196bb05', '45.5.68.148', 1651267558, 0x63617074636861576F72647C733A343A2231383330223B636F645F636170746368617C623A313B5F5F63695F766172737C613A313A7B733A31313A22636F645F63617074636861223B693A313635313236373833383B7D757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('e8b7571496762503ae3eca0efe028e553f06ce24', '45.5.68.148', 1651688457, 0x63617074636861576F72647C733A343A2231343136223B);
INSERT INTO `ci_sessions` VALUES ('22d9b8651dad7835b8d8876d4ab02168411fcfb4', '45.5.68.148', 1651694626, 0x63617074636861576F72647C733A343A2238333433223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('9dc81e54b07207e64bb4c08faed65d31cf53e8d5', '45.5.68.148', 1652208945, 0x63617074636861576F72647C733A343A2233333238223B636F645F636170746368617C623A313B5F5F63695F766172737C613A313A7B733A31313A22636F645F63617074636861223B693A313635323230393233303B7D757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('c81437f730f301874117e166b70b168eeb0ac6c7', '45.5.68.148', 1652220494, '');
INSERT INTO `ci_sessions` VALUES ('4ea9eced5855fdb444efbd6415feb815692a7663', '45.5.68.148', 1652220579, 0x63617074636861576F72647C733A343A2232363439223B757365727C733A353A2261646D696E223B6E6F6D627265737C733A353A2241444D494E223B76697374617C693A303B);
INSERT INTO `ci_sessions` VALUES ('aacbbb6b4d133bf915566096037e6c6bc1b4b2a2', '38.25.10.191', 1652475624, '');

-- ----------------------------
-- Table structure for convocatoria
-- ----------------------------
DROP TABLE IF EXISTS `convocatoria`;
CREATE TABLE `convocatoria`  (
  `IDconvocatoria` int(11) NOT NULL AUTO_INCREMENT,
  `IDtipo` int(11) NULL DEFAULT NULL,
  `fecha` date NULL DEFAULT NULL,
  `fechaadj` date NULL DEFAULT NULL,
  `asuntoContrato` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `estado` int(11) NULL DEFAULT NULL,
  `registradoPor` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fechaRegistro` datetime(0) NULL DEFAULT NULL,
  `modificadoPor` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fechaModificacion` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`IDconvocatoria`) USING BTREE,
  INDEX `fk_idtipo_idx`(`IDtipo`) USING BTREE,
  CONSTRAINT `convocatoria_ibfk_1` FOREIGN KEY (`IDtipo`) REFERENCES `tipo` (`IDtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of convocatoria
-- ----------------------------
INSERT INTO `convocatoria` VALUES (1, 1, '2022-03-18', '2022-03-22', 'CONTRATO DOCENTE', 1, 'admin', '2022-03-04 09:19:09', 'admin', '2022-03-22 08:47:14');
INSERT INTO `convocatoria` VALUES (3, 2, '2022-03-18', '2022-03-22', 'CONTRATO AUXILIAR', 2, 'admin', '2022-03-08 16:17:40', 'admin', '2022-03-22 08:47:20');
INSERT INTO `convocatoria` VALUES (4, 3, '2022-03-22', '2022-03-22', 'ENCARGATURA DE DIRECTIVOS', 1, 'admin', '2022-03-22 08:58:56', NULL, NULL);
INSERT INTO `convocatoria` VALUES (5, 6, '2022-05-03', '2022-05-04', 'CONTRATO REASIGNACION', 1, 'admin', '2022-04-29 10:01:57', 'admin', '2022-05-04 14:39:30');
INSERT INTO `convocatoria` VALUES (6, 4, '2022-05-07', '2022-05-04', 'CONTRATO ADMINISTRATIVO', 1, 'admin', '2022-04-29 10:07:29', 'admin', '2022-05-04 14:39:11');
INSERT INTO `convocatoria` VALUES (7, 1, '2022-05-07', '2022-05-04', 'CONTRATO DOCENTE ', 1, 'admin', '2022-04-29 10:07:49', 'admin', '2022-05-04 14:39:01');

-- ----------------------------
-- Table structure for log_convocatoria
-- ----------------------------
DROP TABLE IF EXISTS `log_convocatoria`;
CREATE TABLE `log_convocatoria`  (
  `IDconvocatorialog` int(11) NOT NULL AUTO_INCREMENT,
  `fechaRegistro` datetime(0) NULL DEFAULT NULL,
  `asuntoContrato` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `estado` int(11) NULL DEFAULT NULL,
  `usuarioRegistro` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `accion` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fecha` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`IDconvocatorialog`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of log_convocatoria
-- ----------------------------
INSERT INTO `log_convocatoria` VALUES (1, '2022-03-04 09:19:09', 'Prueba hoy', 1, NULL, 'admin', 'REGISTRO', '2022-03-04 09:19:09');
INSERT INTO `log_convocatoria` VALUES (2, '2022-03-04 09:19:15', 'Prueba hoy', 1, NULL, 'admin', 'REGISTRO', '2022-03-04 09:19:15');
INSERT INTO `log_convocatoria` VALUES (3, '2022-03-04 09:19:15', 'Prueba hoy', 1, 'admin', 'admin', 'ELIMINACION', '2022-03-04 09:19:18');
INSERT INTO `log_convocatoria` VALUES (4, '2022-03-08 16:17:40', 'PUBLICACION', 1, NULL, 'admin', 'REGISTRO', '2022-03-08 16:17:40');
INSERT INTO `log_convocatoria` VALUES (5, '2022-03-08 16:17:40', 'PUBLICACION', 2, NULL, 'admin', 'ACTUALIZACION', '2022-03-08 16:19:32');
INSERT INTO `log_convocatoria` VALUES (6, '2022-03-08 16:17:40', 'PUBLICACION', 3, NULL, 'admin', 'ACTUALIZACION', '2022-03-08 16:19:37');
INSERT INTO `log_convocatoria` VALUES (7, '2022-03-08 16:17:40', 'PUBLICACION', 2, NULL, 'admin', 'ACTUALIZACION', '2022-03-08 16:19:46');
INSERT INTO `log_convocatoria` VALUES (8, '2022-03-08 16:17:40', 'PUBLICACION', 2, NULL, 'admin', 'ACTUALIZACION', '2022-03-15 10:27:48');
INSERT INTO `log_convocatoria` VALUES (9, '2022-03-04 09:19:09', 'Prueba hoy', 1, NULL, 'admin', 'ACTUALIZACION', '2022-03-15 10:27:58');
INSERT INTO `log_convocatoria` VALUES (10, '2022-03-08 16:17:40', 'PUBLICACION', 2, NULL, 'admin', 'ACTUALIZACION', '2022-03-21 15:17:51');
INSERT INTO `log_convocatoria` VALUES (11, '2022-03-04 09:19:09', 'Prueba hoy', 1, NULL, 'admin', 'ACTUALIZACION', '2022-03-21 15:17:57');
INSERT INTO `log_convocatoria` VALUES (12, '2022-03-08 16:17:40', 'ADJUDICACION', 2, NULL, 'admin', 'ACTUALIZACION', '2022-03-22 08:46:51');
INSERT INTO `log_convocatoria` VALUES (13, '2022-03-04 09:19:09', 'CONTRATO DOCENTE', 1, NULL, 'admin', 'ACTUALIZACION', '2022-03-22 08:47:14');
INSERT INTO `log_convocatoria` VALUES (14, '2022-03-08 16:17:40', 'CONTRATO AUXILIAR', 2, NULL, 'admin', 'ACTUALIZACION', '2022-03-22 08:47:20');
INSERT INTO `log_convocatoria` VALUES (15, '2022-03-22 08:58:56', 'ENCARGATURA DE DIRECTIVOS', 1, NULL, 'admin', 'REGISTRO', '2022-03-22 08:58:56');
INSERT INTO `log_convocatoria` VALUES (16, '2022-04-29 10:01:57', 'proceso de contrato docente educacion basica regular, educacion basica alternativa y ñm cklnroingvimlm jncojnrnvirk nicnriongviornvirn ncunroiubvnri nioocnriongvrivnmro micnrpiongoprmv´ro knmcirjogmrtofmciwsbnfurnvitjmbopt ncirnpgtokbprjvrthgitr micnrijgvormvomc nicnrigorgmpr,mvo´cjmvtijgorfmcintviogj´torgmveskfbncfoieurhgpotmtñfgovjnjtopigjtopgjtogjtogbjtogjtojbtojtogjot\r\nncirniovnrvormvormobptmpbotñomvpo mpoynmb´ptffrgtth6j6j', 1, NULL, 'admin', 'REGISTRO', '2022-04-29 10:01:57');
INSERT INTO `log_convocatoria` VALUES (17, '2022-04-29 10:07:29', ' fvffvnlkninouhdniofvhnirnmfinvuorhbvnd', 1, NULL, 'admin', 'REGISTRO', '2022-04-29 10:07:29');
INSERT INTO `log_convocatoria` VALUES (18, '2022-04-29 10:07:49', ' fvffvnlkninouhdniofvhnirnmfinvuorhbvnd', 1, NULL, 'admin', 'REGISTRO', '2022-04-29 10:07:50');
INSERT INTO `log_convocatoria` VALUES (19, '2022-04-29 10:07:49', 'CONTRATO DOCENTE ', 1, NULL, 'admin', 'ACTUALIZACION', '2022-05-04 14:39:01');
INSERT INTO `log_convocatoria` VALUES (20, '2022-04-29 10:07:29', 'CONTRATO ADMINISTRATIVO', 1, NULL, 'admin', 'ACTUALIZACION', '2022-05-04 14:39:11');
INSERT INTO `log_convocatoria` VALUES (21, '2022-04-29 10:01:57', 'CONTRATO REASIGNACION', 1, NULL, 'admin', 'ACTUALIZACION', '2022-05-04 14:39:30');

-- ----------------------------
-- Table structure for log_normativa
-- ----------------------------
DROP TABLE IF EXISTS `log_normativa`;
CREATE TABLE `log_normativa`  (
  `IDconvocatorialog` int(11) NOT NULL AUTO_INCREMENT,
  `fechaRegistro` datetime(0) NULL DEFAULT NULL,
  `asuntoContrato` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `estado` int(11) NULL DEFAULT NULL,
  `usuarioRegistro` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `accion` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fecha` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`IDconvocatorialog`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of log_normativa
-- ----------------------------
INSERT INTO `log_normativa` VALUES (1, '2022-03-04 11:05:24', 'prueba', 1, NULL, 'admin', 'REGISTRO', '2022-03-04 11:05:24');
INSERT INTO `log_normativa` VALUES (2, '2022-03-08 16:17:00', '1234', 1, NULL, 'admin', 'REGISTRO', '2022-03-08 16:17:00');
INSERT INTO `log_normativa` VALUES (3, '2022-03-21 15:09:11', 'Prueba', 1, NULL, 'admin', 'REGISTRO', '2022-03-21 15:09:11');
INSERT INTO `log_normativa` VALUES (4, '2022-04-28 22:02:37', 'NORMA PARA CONTRATO DOCENTE', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:02:37');
INSERT INTO `log_normativa` VALUES (5, '2022-04-28 22:04:04', 'HBHDBKH 414545°BJBJKBJKBJKBJKBJKBJKBJKJKKBFJKBFJ CJKB JKRFBJKC JKDBFCJKEBF J CJKFBR FVJRM JKB GJVM JKR FVUJN  FC,LWKOWEJBF HRFB ', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:04:04');
INSERT INTO `log_normativa` VALUES (6, '2022-04-28 22:23:58', 'NORMATIVA PARA CONTRATO DE AUXILIARES 2022 - RVM N° 1256-2022', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:23:58');
INSERT INTO `log_normativa` VALUES (7, '2022-04-28 22:25:57', ' NCJNRJNFIMK JNCNRF  HBUCRBNJN NUJNEINK   MOLCKPKRLN JK  MMOCMORJMFOVRLMOLRKGFORKGPRKV,PK,ORKGMVIFJVOFMVOTJGOTMVODJCMOPREJFORJMVFRJGOJGORGJROGJORKGVRPFKPRKPRFKPRFKPRKFPRKFPRKFPEFKRPFKRPFKRPVKRKPGKTGOTKGTOGKTPGKPTGKEPDKPWEKFE5454954VMOGJIRGNIFNVIFJGOMVOFJGRFNROJGROGMORO', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:25:57');
INSERT INTO `log_normativa` VALUES (8, '2022-04-28 22:28:02', 'CUBNFUHGVIOOTNFVJ UIJRHNFV UIT NTUGVHNTION FUJNUIFHGVUTNV UHVNJB VHBVUUBVNUTNVUTNVITMVOTPBMTOPIBMITMVXS 56165CNINUNVUNIVNR CNURJBVNIRNVOIRJFROJFORFKORFKORFKRKVROK 549+  NJCNINIORFMVKMTOPMBVOPBTMGBOT,MOPOPMOPMOPKPOR,LMIONIOJNIVNINGITNVITNIBNTMITMBPTO,VPTOMBOTOTMBITMBIBTMBIMYINYIMNOTBM,VEPODEMCMCIMVIBMOBMOJMVVITJMBITYJBMNMITMBONMBIYMYI', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:28:02');
INSERT INTO `log_normativa` VALUES (9, '2022-04-28 22:54:45', ' JCJDNNFRIOKNGIRNGMOPTRMGITJGMKV KLNGBVIOTNVITBVKF KFNVI NIIVNTINGITNGIT NINVINTOIGMITMVOPTJMGPTGNVMOPTGJTOPGJPVROGJKTOGJTOGKMORM,VOPTN', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:54:45');
INSERT INTO `log_normativa` VALUES (10, '2022-04-28 22:54:46', ' JCJDNNFRIOKNGIRNGMOPTRMGITJGMKV KLNGBVIOTNVITBVKF KFNVI NIIVNTINGITNGIT NINVINTOIGMITMVOPTJMGPTGNVMOPTGJTOPGJPVROGJKTOGJTOGKMORM,VOPTN', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:54:46');
INSERT INTO `log_normativa` VALUES (11, '2022-04-28 22:54:45', ' JCJDNNFRIOKNGIRNGMOPTRMGITJGMKV KLNGBVIOTNVITBVKF KFNVI NIIVNTINGITNGIT NINVINTOIGMITMVOPTJMGPTGNVMOPTGJTOPGJPVROGJKTOGJTOGKMORM,VOPTN', 1, NULL, 'admin', 'ELIMINACION', '2022-04-28 22:54:52');
INSERT INTO `log_normativa` VALUES (12, '2022-04-28 22:55:47', 'NNCURNFURNVC JIURBNV CNUCJRNGURNCN   UCJ RUBNURNGIR JCURNIFNRIOFNVRPIIMNORMCOE NCIRNIFNROCMORMVROMVRO,VRPF,ROV,ORMGVGORGMVOR VNTUBNVUTNIONTMVPMTPINGITMGVOMOPTNMBOPMTVPOITNMVITNBITNGMVBITNMBITMBOTM,VOPRMITNBITMBMBIMTIBTOMBOTINBMTO', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:55:47');
INSERT INTO `log_normativa` VALUES (13, '2022-04-28 22:56:37', 'CUBNFUHGVIOOTNFVJ UIJRHNFV UIT NTUGVHNTION FUJNUIFHGVUTNV UHVNJB VHBVUUBVNUTNVUTNVITMVOTPBMTOPIBMITMVXS 56165CNINUNVUNIVNR CNURJBVNIRNVOIRJFROJFORFKORFKORFKRKVROK 549+ NJCNINIORFMVKMTOPMBVOPBTMGBOT,MOPOPMOPMOPKPOR,LMIONIOJNIVNINGITNVITNIBNTMITMBPTO,VPTOMBOTOTMBITMBIBTMBIMYINYIMNOTBM,VEPODEMCMCIMVIBMOBMOJMVVITJMBITYJBMNMIT FRVTTVYNBYNYJNUMI,O,O.O.PÑP-´´ÑLJHTFGRFRGRGTGTGTGTGT', 1, NULL, 'admin', 'REGISTRO', '2022-04-28 22:56:37');

-- ----------------------------
-- Table structure for normativa
-- ----------------------------
DROP TABLE IF EXISTS `normativa`;
CREATE TABLE `normativa`  (
  `IDconvocatoria` int(11) NOT NULL AUTO_INCREMENT,
  `IDtipo` int(11) NULL DEFAULT NULL,
  `asuntoContrato` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `estado` int(11) NULL DEFAULT NULL,
  `registradoPor` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fechaRegistro` datetime(0) NULL DEFAULT NULL,
  `modificadoPor` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fechaModificacion` datetime(0) NULL DEFAULT NULL,
  `url_normativa` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`IDconvocatoria`) USING BTREE,
  INDEX `fk_idtipo_idx`(`IDtipo`) USING BTREE,
  CONSTRAINT `normativa_ibfk_1` FOREIGN KEY (`IDtipo`) REFERENCES `tipo` (`IDtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of normativa
-- ----------------------------
INSERT INTO `normativa` VALUES (1, 1, 'CONTRATO DOCENTE NORMATIVA', 1, 'admin', '2022-03-04 11:05:24', NULL, NULL, 'prueba.pdf');
INSERT INTO `normativa` VALUES (2, 3, 'ENCARGATURA DIRECTIVOS NORMATIVA', 1, 'admin', '2022-03-08 16:17:00', NULL, NULL, 'subir.pdf');
INSERT INTO `normativa` VALUES (3, 2, 'CONTRATO AUXILIAR NORMATIVA', 1, 'admin', '2022-03-21 15:09:11', NULL, NULL, 'subir1.pdf');
INSERT INTO `normativa` VALUES (4, 1, 'NORMA PARA CONTRATO DOCENTE', 1, 'admin', '2022-04-28 22:02:37', NULL, NULL, 'DL_1412-2021.pdf');
INSERT INTO `normativa` VALUES (5, 1, 'NORMATIVA ', 1, 'admin', '2022-04-28 22:04:04', NULL, NULL, '9-reglamento-de-la-ley-de-carrera-administrativa-1.pdf');
INSERT INTO `normativa` VALUES (6, 2, 'NORMATIVA PARA CONTRATO DE AUXILIARES 2022 - RVM N° 1256-2022', 1, 'admin', '2022-04-28 22:23:58', NULL, NULL, '276.pdf');
INSERT INTO `normativa` VALUES (7, 3, 'NORMATIVA ', 1, 'admin', '2022-04-28 22:25:57', NULL, NULL, 'RI_2013.pdf');
INSERT INTO `normativa` VALUES (8, 1, 'NORMATIVA ', 1, 'admin', '2022-04-28 22:28:02', NULL, NULL, '2761.pdf');
INSERT INTO `normativa` VALUES (10, 4, 'NORMATIVA ', 1, 'admin', '2022-04-28 22:54:46', NULL, NULL, 'RI_20132.pdf');
INSERT INTO `normativa` VALUES (11, 4, 'NORMATIVA ', 1, 'admin', '2022-04-28 22:55:47', NULL, NULL, 'RI_20133.pdf');
INSERT INTO `normativa` VALUES (12, 4, 'NORMATIVA ', 1, 'admin', '2022-04-28 22:56:37', NULL, NULL, '9-reglamento-de-la-ley-de-carrera-administrativa-11.pdf');

-- ----------------------------
-- Table structure for tipo
-- ----------------------------
DROP TABLE IF EXISTS `tipo`;
CREATE TABLE `tipo`  (
  `IDtipo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcionCorta` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descripcionLarga` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`IDtipo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tipo
-- ----------------------------
INSERT INTO `tipo` VALUES (1, 'DOCENTE', 'DOCENTE');
INSERT INTO `tipo` VALUES (2, 'AUXILIARES', 'AUXILIARES');
INSERT INTO `tipo` VALUES (3, 'DIRECTIVOS', 'DIRECTIVOS');
INSERT INTO `tipo` VALUES (4, 'ADMINISTRATIVO', 'ADMINISTRATIVO');
INSERT INTO `tipo` VALUES (5, 'RACIONALIZACIÓN', 'RACIONALIZACIÓN');
INSERT INTO `tipo` VALUES (6, 'REASIGNACIÓN', 'REASIGNACIÓN');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `usuarioID` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `nombres` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `estado` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`usuarioID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'admin', 'Xt/T1BSeq81bJIVgjjr2ITVDVcCsIThxMnUUITHDLoS56SI5uUzhxpB92rsevRw+De+/IdkQDdX6PNY9tA1idg==', 'ADMIN', 1);
INSERT INTO `usuario` VALUES (2, 'TEST', 'BKKWAIv8Ib8V4gE7wtyOytUM29tuFkFiiVn0DFAb+Ezglk++A4M5EmG52FmWGhZIMZZbVV0XlokqqRXWcHmDEA==', 'UGEL04', 1);
INSERT INTO `usuario` VALUES (5, 'emorales', 'PYp8oiPMSddcYImgI22z8d+3/dvPgd7wD8qpgOp4g5rs0NaCiexkqytRPyP4Q4R0QNsj7wszYno3+I3ktpJpxg==', 'admi', 1);

-- ----------------------------
-- View structure for view_convocatorias
-- ----------------------------
DROP VIEW IF EXISTS `view_convocatorias`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_convocatorias` AS select `c`.`IDconvocatoria` AS `IDconvocatoria`,`t`.`IDtipo` AS `IDtipo`,`t`.`descripcionCorta` AS `descripcionCorta`,`c`.`fecha` AS `fecha`,`c`.`fechaadj` AS `fechaadj`,`c`.`fechaRegistro` AS `fechaRegistro`,`c`.`asuntoContrato` AS `asuntoContrato`,`c`.`estado` AS `estado`,`c`.`registradoPor` AS `usuarioRegistro`,`c`.`fechaModificacion` AS `fechaModificacion` from (`convocatoria` `c` join `tipo` `t` on(`c`.`IDtipo` = `t`.`IDtipo`)) order by `c`.`fecha` desc,`c`.`fechaRegistro` desc;

-- ----------------------------
-- View structure for view_normativas
-- ----------------------------
DROP VIEW IF EXISTS `view_normativas`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_normativas` AS select `n`.`IDconvocatoria` AS `IDconvocatoria`,`t`.`IDtipo` AS `IDtipo`,`t`.`descripcionCorta` AS `descripcionCorta`,`n`.`asuntoContrato` AS `asuntoContrato`,`n`.`registradoPor` AS `registradoPor`,`n`.`url_normativa` AS `url_normativa`,`n`.`estado` AS `estado` from (`normativa` `n` join `tipo` `t` on(`n`.`IDtipo` = `t`.`IDtipo`)) order by `n`.`asuntoContrato` desc;

-- ----------------------------
-- View structure for view_usuarios
-- ----------------------------
DROP VIEW IF EXISTS `view_usuarios`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_usuarios` AS select `usuario`.`usuario` AS `usuario`,`usuario`.`nombres` AS `nombres`,`usuario`.`estado` AS `estado` from `usuario`;

-- ----------------------------
-- Function structure for initcap
-- ----------------------------
DROP FUNCTION IF EXISTS `initcap`;
delimiter ;;
CREATE FUNCTION `initcap`(cadena VARCHAR(100))
 RETURNS text CHARSET latin1
  READS SQL DATA 
  DETERMINISTIC
BEGIN
DECLARE pos INT DEFAULT 0; 
DECLARE tmp VARCHAR(100) DEFAULT ''; 
DECLARE result VARCHAR(100) DEFAULT ''; 
REPEAT SET pos = LOCATE(' ', cadena); 
 IF pos = 0 THEN 
 SET pos = CHAR_LENGTH(cadena); 
 END IF; 
 SET tmp = LEFT(cadena,pos); 
 SET result = CONCAT(result, UPPER(LEFT(tmp,1)),SUBSTR(tmp,2)); 
 SET cadena = RIGHT(cadena,CHAR_LENGTH(cadena)-pos); 
UNTIL CHAR_LENGTH(cadena) = 0 END REPEAT; 
RETURN result; 
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_ACTUALIZAR_CONVOCATORIA
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_ACTUALIZAR_CONVOCATORIA`;
delimiter ;;
CREATE PROCEDURE `USP_ACTUALIZAR_CONVOCATORIA`(IN p_IDconvocatoria INT,
																		 IN p_IDtipo INT,
																		 IN p_fechaadj DATE,
                                                                         IN p_asuntoContrato TEXT,
                                                                         IN p_estado tinyint(10),
                                                                         IN p_fecha DATE,
                                                                         IN p_usuario VARCHAR(20))
BEGIN
UPDATE convocatoria set IDtipo = p_IDtipo,
						asuntoContrato = p_asuntoContrato,
                        fechaadj = p_fechaadj,
                        fecha = p_fecha,
                        fechaModificacion = NOW(),
                        modificadoPor = p_usuario,
                        estado = p_estado
					where IDconvocatoria = p_IDconvocatoria;
INSERT INTO log_convocatoria(fechaRegistro,asuntoContrato,estado,usuario,accion,fecha) SELECT fechaRegistro,asuntoContrato,estado,p_usuario,'ACTUALIZACION',NOW() FROM convocatoria where IDconvocatoria = p_IDconvocatoria;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_ACTUALIZAR_NORMATIVA
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_ACTUALIZAR_NORMATIVA`;
delimiter ;;
CREATE PROCEDURE `USP_ACTUALIZAR_NORMATIVA`(IN p_IDconvocatoria INT,
IN p_IDtipo INT,
IN p_fechaadj DATE,
IN p_asuntoContrato TEXT,
IN p_estado tinyint(10),
IN p_fecha DATE,
IN p_usuario VARCHAR(20))
BEGIN
UPDATE convocatoria set IDtipo = p_IDtipo,
						asuntoContrato = p_asuntoContrato,
                        fechaadj = p_fechaadj,
                        fecha = p_fecha,
                        fechaModificacion = NOW(),
                        modificadoPor = p_usuario,
                        estado = p_estado
					where IDconvocatoria = p_IDconvocatoria;
INSERT INTO log_convocatoria(fechaRegistro,asuntoContrato,estado,usuario,accion,fecha) 
SELECT fechaRegistro,asuntoContrato,estado,p_usuario,'ACTUALIZACION',NOW() 
FROM convocatoria 
where IDconvocatoria = p_IDconvocatoria;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_ACTUALIZAR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_ACTUALIZAR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `USP_ACTUALIZAR_USUARIO`(IN p_modo tinyint(1),
																	 IN p_usuario VARCHAR(20),
                                                                     IN p_password TEXT,
                                                                     IN p_nombres TEXT,
                                                                     IN p_estado tinyint(1))
BEGIN
IF p_modo = 1  THEN
UPDATE usuario set password = p_password where usuario = p_usuario;
Select 1 as ID;
END IF;
IF p_modo = 2 THEN
UPDATE usuario set nombres = p_nombres ,estado = p_estado  where usuario = p_usuario;
	 IF LENGTH(p_password) > 0 THEN
	 UPDATE usuario set password = p_password  where usuario = p_usuario;
	 END IF;
END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_ELIMINAR_CONVOCATORIA
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_ELIMINAR_CONVOCATORIA`;
delimiter ;;
CREATE PROCEDURE `USP_ELIMINAR_CONVOCATORIA`(IN p_IDconvocatoria INT, IN p_usuario VARCHAR(20))
BEGIN
INSERT INTO log_convocatoria(fechaRegistro,asuntoContrato,estado,usuarioRegistro,usuario,accion,fecha) SELECT fechaRegistro,asuntoContrato,estado,registradoPor,p_usuario,'ELIMINACION',NOW() FROM convocatoria where IDconvocatoria = p_IDconvocatoria;
DELETE FROM convocatoria where IDconvocatoria = p_IDconvocatoria;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_ELIMINAR_NORMATIVA
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_ELIMINAR_NORMATIVA`;
delimiter ;;
CREATE PROCEDURE `USP_ELIMINAR_NORMATIVA`(IN p_IDconvocatoria INT, IN p_usuario VARCHAR(20))
BEGIN

INSERT INTO log_normativa(fechaRegistro,asuntoContrato,estado,usuario,accion,fecha) 

SELECT fechaRegistro,asuntoContrato,estado,p_usuario,'ELIMINACION',NOW() 
FROM normativa 
where IDconvocatoria = p_IDconvocatoria;

DELETE FROM normativa 
where IDconvocatoria = p_IDconvocatoria;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_INSERTAR_CONVOCATORIA
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_INSERTAR_CONVOCATORIA`;
delimiter ;;
CREATE PROCEDURE `USP_INSERTAR_CONVOCATORIA`(IN p_IDtipo INT,
IN p_fechaadj DATE,
                                                                       IN p_asuntoContrato TEXT,
                                                                       IN p_estado tinyint(10),
                                                                       IN p_fecha DATE,
                                                                       IN p_usuario VARCHAR(20))
BEGIN
DECLARE vID INT;
INSERT INTO convocatoria(IDtipo,fecha,fechaadj,fechaRegistro,asuntoContrato,estado,registradoPor) 
				 VALUES (p_IDtipo,p_fecha,p_fechaadj,NOW(),p_asuntoContrato,p_estado,p_usuario);
SET vID = (Select LAST_INSERT_ID());
INSERT INTO log_convocatoria(fechaRegistro,asuntoContrato,estado,usuario,accion,fecha) SELECT fechaRegistro,asuntoContrato,estado,p_usuario,'REGISTRO',NOW() FROM convocatoria where IDconvocatoria = vID;
Select vID as ID;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_INSERTAR_CONVOCATORIANOR
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_INSERTAR_CONVOCATORIANOR`;
delimiter ;;
CREATE PROCEDURE `USP_INSERTAR_CONVOCATORIANOR`(IN p_IDtipo INT,
 IN p_asuntoContrato TEXT,
 IN p_estado tinyint(10),
 IN p_usuario VARCHAR(20),IN  p_url_normativa TEXT)
BEGIN
DECLARE vID INT;

INSERT INTO normativa(IDtipo,fechaRegistro,asuntoContrato,estado,registradoPor,url_normativa) 
VALUES (p_IDtipo,NOW(),p_asuntoContrato,p_estado,p_usuario, p_url_normativa);

SET vID = (Select LAST_INSERT_ID());

INSERT INTO log_normativa(fechaRegistro,asuntoContrato,estado,usuario,accion,fecha) 

SELECT fechaRegistro,asuntoContrato,estado,p_usuario,'REGISTRO',NOW() 
FROM normativa 
where IDconvocatoria = vID;

Select vID as ID;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_INSERTAR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_INSERTAR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `USP_INSERTAR_USUARIO`(IN p_usuario VARCHAR(20),
										IN p_nombres TEXT,
                                        IN p_password TEXT)
BEGIN
INSERT INTO usuario(usuario,password,nombres,estado)
			VALUES(p_usuario,p_password,p_nombres,1);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_LISTAR_CONVOCATORIA
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_LISTAR_CONVOCATORIA`;
delimiter ;;
CREATE PROCEDURE `USP_LISTAR_CONVOCATORIA`(IN p_IDconvocatoria INT)
BEGIN
Select IDconvocatoria,IDtipo,fecha,fechaadj,asuntoContrato,estado from convocatoria where IDconvocatoria = p_IDconvocatoria;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_LISTAR_NORMATIVA
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_LISTAR_NORMATIVA`;
delimiter ;;
CREATE PROCEDURE `USP_LISTAR_NORMATIVA`(IN p_IDconvocatoria INT)
BEGIN
Select IDconvocatoria,IDtipo,asuntoContrato,url_normativa,estado 
from normativa 
where IDconvocatoria = p_IDconvocatoria;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for USP_VALIDAR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `USP_VALIDAR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `USP_VALIDAR_USUARIO`(in p_usuario Varchar(20),
    in p_paswd varchar(40),
    in p_ip VARCHAR(36),
    in p_navegador TEXT,
    in p_session VARCHAR(40))
BEGIN
    Select Password,usuario,nombres from usuario where usuario = p_usuario and estado = 1;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
