--inserta campos en tabla rol
INSERT INTO `rol` (`idrol`, `nombre`) VALUES (NULL, 'administrador'), (NULL, 'cliente');


--inserta campos en tabla estado
INSERT INTO `estado` (`idestado`, `nombre`) VALUES (NULL, 'activo'), (NULL, 'inactivo');

--inserta campos en tabla usuario
INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `correo`, `clave`, `rol_idrol`, `estado_idestado`) VALUES (NULL, 'Alejandro', 'Jimenez', 'davidjimenez199701@gmail.com', MD5('daj'), '1', '1');
INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `correo`, `clave`, `rol_idrol`, `estado_idestado`) VALUES (NULL, 'Laura', 'Hernandez', 'laurahernandez@correo.com', MD5('prueba'), '2', '1');


INSERT INTO `marca` (`idmarca`, `nombre`) VALUES (NULL, 'Marvel'), (NULL, 'DC Comics'), (NULL, 'Image Comics'), (NULL, 'DW Publishing'), (NULL, 'Dark Horse Comics'), (NULL, 'Vértigo cómics'), (NULL, 'Bongo cómics');

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES (NULL, 'Comic');