CREATE DATABASE orientatecv2;

USE orientatecv2;

DROP TABLE IF EXISTS `orientatecv2`.`respuestas`;
CREATE TABLE `respuestas` (
  `idrespuestas` BIGINT NOT NULL AUTO_INCREMENT,
  `opcion_elegida` VARCHAR(255) NULL,
  `usuario` VARCHAR(255) NULL,
  PRIMARY KEY (`idrespuestas`));

INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Juan');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Maria');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Pedro');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Martin');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Ana');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Luis');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Carlos');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Laura');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Juan');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Maria');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Pedro');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Martin');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Ana');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Luis');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Carlos');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Laura');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Juan');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Maria');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Pedro');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Martin');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Ana');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Luis');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Carlos');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Laura');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('agro', 'Juan');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('info', 'Maria');
INSERT INTO `respuestas` (`opcion_elegida`, `usuario`) VALUES ('eco', 'Pedro');