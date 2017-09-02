/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbproyecto
Target Host: localhost
Target Database: dbproyecto
Date: 02/09/2017 08:50:54 p.m.
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for alquiler
-- ----------------------------
DROP TABLE IF EXISTS `alquiler`;
CREATE TABLE `alquiler` (
  `idalquiler` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) DEFAULT NULL,
  `idpelicula` int(11) DEFAULT NULL,
  `monto` varchar(45) DEFAULT NULL,
  `cantidad_pel` int(11) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idalquiler`),
  KEY `fk_alquiler_usuario1_idx` (`idusuario`),
  KEY `fk_alquiler_pelicula1_idx` (`idpelicula`),
  CONSTRAINT `fk_alquiler_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_alquiler_pelicula1` FOREIGN KEY (`idpelicula`) REFERENCES `pelicula` (`idpelicula`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for genero
-- ----------------------------
DROP TABLE IF EXISTS `genero`;
CREATE TABLE `genero` (
  `idgenero` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_genero` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idgenero`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlogin`),
  KEY `fk_login_usuario_idx` (`idusuario`),
  CONSTRAINT `fk_login_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pelicula
-- ----------------------------
DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE `pelicula` (
  `idpelicula` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pel` varchar(45) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `idgenero` int(11) DEFAULT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `descripcion` text,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpelicula`),
  KEY `fk_pelicula_genero1_idx` (`idgenero`),
  KEY `fk_pelicula_categoria1_idx` (`idcategoria`),
  CONSTRAINT `fk_pelicula_categoria1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pelicula_genero1` FOREIGN KEY (`idgenero`) REFERENCES `genero` (`idgenero`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for privilegio
-- ----------------------------
DROP TABLE IF EXISTS `privilegio`;
CREATE TABLE `privilegio` (
  `idprivilegio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_privilegio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprivilegio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `idprivilegio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_privilegio1_idx` (`idprivilegio`),
  CONSTRAINT `fk_usuario_privilegio1` FOREIGN KEY (`idprivilegio`) REFERENCES `privilegio` (`idprivilegio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `categoria` VALUES ('1', 'Apto Para Todo Publico');
INSERT INTO `categoria` VALUES ('2', 'Mayores 18');
INSERT INTO `categoria` VALUES ('3', 'Mayores 16');
INSERT INTO `genero` VALUES ('1', 'Accion');
INSERT INTO `genero` VALUES ('2', 'Comedia');
INSERT INTO `genero` VALUES ('3', 'Terror');
INSERT INTO `genero` VALUES ('4', 'SciFi');
INSERT INTO `login` VALUES ('1', 'Luis', '123', '1', 'Habilitado');
INSERT INTO `pelicula` VALUES ('1', 'Terminator', 'terminator.jpg', '1', '2', 'Pelicula de robots ', '10.00', '5');
INSERT INTO `pelicula` VALUES ('2', null, null, null, null, null, null, null);
INSERT INTO `privilegio` VALUES ('1', 'Administrador');
INSERT INTO `privilegio` VALUES ('2', 'Cliente');
INSERT INTO `usuario` VALUES ('1', 'Pedro', 'Varas', 'Nicolas Davila 105', '3804669997', '1');
