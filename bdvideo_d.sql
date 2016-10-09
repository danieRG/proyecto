create table IF NOT EXISTS `materia` (
  `idmateria` int(50) NOT NULL AUTO_INCREMENT,
  `materia` varchar(200) NOT NULL,
  `numero` int(50) NOT NULL,
  `grado` int(11) NOT NULL,
  `asesor` varchar(200) NOT NULL,
  PRIMARY KEY (`idmateria`)
);


create table if NOT EXISTS `usuario` (
  `idusuario` int(50) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  PRIMARY KEY (`idusuario`)
);

