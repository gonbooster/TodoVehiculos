
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `IdComentario` int(11) NOT NULL auto_increment,
  `IdUsuario` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Comentario` varchar(500) NOT NULL,
  `Fecha` datetime NOT NULL,
  PRIMARY KEY  (`IdComentario`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for mensajeria
-- ----------------------------
DROP TABLE IF EXISTS `mensajeria`;
CREATE TABLE `mensajeria` (
  `IdMensajeria` int(11) NOT NULL auto_increment,
  `remitente` varchar(50) NOT NULL,
  `destinatario` varchar(50) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `estado` int(2) NOT NULL,
  PRIMARY KEY  (`IdMensajeria`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for mensajeriaenviados
-- ----------------------------
DROP TABLE IF EXISTS `mensajeriaenviados`;
CREATE TABLE `mensajeriaenviados` (
  `IdMensajeriaEnviados` int(11) NOT NULL auto_increment,
  `remitente` varchar(50) NOT NULL,
  `destinatario` varchar(50) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `estado` int(2) NOT NULL,
  PRIMARY KEY  (`IdMensajeriaEnviados`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL auto_increment,
  `Producto` varchar(100) NOT NULL COMMENT 'Nombre del producto',
  `Tipo` varchar(100) NOT NULL COMMENT 'Coche/Moto',
  `Disposicion` varchar(100) NOT NULL,
  `Kms` varchar(100) NOT NULL COMMENT 'Comprar/Alquilar',
  `Antiguedad` int(11) NOT NULL,
  `Carroceria` varchar(100) NOT NULL,
  `Equipacion` varchar(100) NOT NULL,
  `Version` varchar(100) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `Precio` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `Combustible` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Cambio` varchar(100) NOT NULL COMMENT 'Automático/Manual',
  `Color` varchar(100) NOT NULL,
  `URLImagen` varchar(500) NOT NULL,
  `Comentarios` int(50) NOT NULL default '0',
  `FechaCreacion` datetime NOT NULL,
  `Usuario` varchar(15) NOT NULL,
  PRIMARY KEY  (`IdProducto`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('0', 'Audi', 'Coche', 'Comprar', '12.000', '2009', 'Berlina', 'GPS, USB, ...', 'Sport', 'Seminuevo, bien cuidado, pocos kilometros, color azul cromado, genial para ciudad', '15.000', 'A3', 'Gasolina', 'Seminuevo', 'Manual', 'Azul', 'images/coches/audi_a3.jpg', '0', '2013-12-02 16:50:07', 'Squald');
INSERT INTO `productos` VALUES ('1', 'Mercedes', 'Coche', 'Alquilar', '1.500', '2010', 'Aluminio cromado', 'Ninguna', 'Basico', 'Seminuevo, bien cuidado, pocos kilometros, color azul cromado, genial para ciudad', '1.000', 'Clase-A', 'Gasolina', 'Seminuevo', 'Automático', 'Plateado', 'images/coches/mercedes_clasea.jpg', '0', '2013-12-02 16:50:12', 'Squald');
INSERT INTO `productos` VALUES ('2', 'Scooter', 'Moto', 'Alquilar', '0', '2013', '-', '-', 'Basico', 'Nueva Vespino de Scotter con una mejor suspension que sus anteriores modelos', '1.000', 'Znen', 'Gasolina', 'Nuevo', 'Manual', 'Negra', 'images/motos/scooter_znen.jpg', '0', '2013-12-02 16:52:35', 'Squald');
INSERT INTO `productos` VALUES ('3', 'Suzuki', 'Moto', 'Comprar', '7.000', '2001', '-', '-', 'Basico', '-', '300', 'Kawasaki ninja', 'Gasolina', 'Seminuevo', 'Manual', 'Verde', 'images/motos/kawasaki_ninja.jpg', '0', '2013-12-02 17:40:13', 'Squald');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `IdUsuario` int(10) NOT NULL auto_increment,
  `Usuario` varchar(15) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL,
  `IP` varchar(35) NOT NULL,
  PRIMARY KEY  (`IdUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;